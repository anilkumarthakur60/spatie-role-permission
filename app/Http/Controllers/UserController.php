<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:user create|user edit|user show|user delete', ['only' => ['index','show']]);
        $this->middleware('permission:user create', ['only' => ['create','store']]);
        $this->middleware('permission:user edit', ['only' => ['edit','update']]);
        $this->middleware('permission:user delete', ['only' => ['destroy']]);


    }
    public function index()
    {
        $user=User::orderBy('id','desc')->with('roles')->get();


        return view('user.index')->with('users',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role=Role::all();

        return view('user.create')->with('roles',$role);

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'roles' => 'required'
        ]);

        $input = $request->all();
        $password=$request->password;
            $password=Hash::make($password);
            $user=User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$password
            ]);

            $user->assignRole($request->input('roles'));

            toastr()->success('User Created Successfully');
            return redirect(route('users.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('user.show')->with('user',$user);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $role=Role::all();

        return view('user.update')->with('user',$user)->with('roles',$role);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'roles' => 'required'
        ]);

        $input=$request->all();
        $user->update($input);
        $user->syncRoles($request->roles);
        toastr()->success('user updated Successfully');
        return redirect()->route('users.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

        $user->delete();
        toastr()->success('user Deleted Successfully');
        return redirect(route('users.index'));
        //
    }
}
