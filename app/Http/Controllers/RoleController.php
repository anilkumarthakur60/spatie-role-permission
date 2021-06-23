<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:create role|edit role|show role|delete role', ['only' => ['index','show']]);
        $this->middleware('permission:create role', ['only' => ['create','store']]);
        $this->middleware('permission:edit role', ['only' => ['edit','update']]);
        $this->middleware('permission:delete role', ['only' => ['destroy']]);


    }

    public function index()
    {
        $roles=Role::with('permissions')->get();

        return view('role.index',compact('roles'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission=Permission::all();
        return view('role.create')->with('permissions',$permission);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                'name'=>'required|unique:roles,name',
                'permission'=>'required'
        ]);

        $role=Role::create(['name' =>$request->name]);
        $role->syncPermissions($request->permission);
        toastr()->success('role Created Successfully');
        return redirect(route('roles.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {   $rolePermission=$role->with('permissions')->get();

        return view('role.show')->with('role',$role)->with('rolepermission',$rolePermission);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $role = Role::with('permissions')->where('id',$id)->first();
        $permission=Permission::all();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
        ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
        ->all();

        // dd($role->permissions[0]->id);
        return view('role.edit',compact('role','permission','rolePermissions'));
                //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $this->validate($request,[
            'name'=>'required|unique:roles,name,'.$role->id
        ]);

        $role->update(['name'=>$request->name]);
        $role->syncPermissions($request->permission);
        toastr()->success('role updated successfully');
        return redirect(route('roles.index'));
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        toastr()->success('Role deleted Succcessfully');
        return redirect(route('roles.index'));
        //
    }
}
