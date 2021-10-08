This repository contains a collection of Packages which may be required while starting the new projects.
This is not a package - it's a small part of Laravel project that you can use in a any project and then add your own custom functionality.

There are endpoints for any applications I've been using while starting any new project.
<br>
1.Laravel Roles Permissions Admin panel based on the Spatie Role Permission package
This package allows you to manage user permissions and roles in a database.

<p align="center">
<a href="https://spatie.be/docs/laravel-permission/v5/introduction"><img src="https://raw.githubusercontent.com/spatie/laravel-permission/main/art/socialcard.png" alt="Spatie Role Permission"></a>

</p>
<img src="http://rolepermission.herokuapp.com/githubimage/role_list.jpg" alt="Spatie Role Permission">
<img src="http://rolepermission.herokuapp.com/githubimage/role_create.jpg" alt="Spatie Role Permission">
<img src="http://rolepermission.herokuapp.com/githubimage/role_edit.jpg" alt="Spatie Role Permission">
<img src="http://rolepermission.herokuapp.com/githubimage/user_list.jpg" alt="Spatie Role Permission">
<img src="http://rolepermission.herokuapp.com/githubimage/user_create.jpg" alt="Spatie Role Permission">
<img src="http://rolepermission.herokuapp.com/githubimage/user_edit.jpg" alt="Spatie Role Permission">

Also Other List of package used in this Repo are

2.  <a href="https://github.com/yoeunes/toastr">Toastr Notifications </a>
3.  <a href="https://github.com/cviebrock/eloquent-sluggable">cviebrock/eloquent-sluggable </a>
    like if you have Post Model

         ```php
                 use Cviebrock\EloquentSluggable\Sluggable;
                 class Post extends Model
                 {
                     use Sluggable;

                     /**
                      * Return the sluggable configuration array for this model.
                      *
                      * @return array
                      */
                     public function sluggable(): array
                     {
                         return [
                             'slug' => [
                                 'source' => 'title'
                             ]
                         ];
                     }
                 }
         ```

4.  <a href="https://github.com/artesaos/seotools">artesaos/seotools </a>
5.  <a href="https://github.com/jorenvh/laravel-share">jorenvanhocht/laravel-share </a>
    <a href="https://github.com/anilkumarthakur60/spatie-role-permission/blob/main/resources/views/layouts/sharebutton.blade.php">layouts/sharebutton.blade.php </a>
    <p> just include this file where you want to have social media share link/buttons  layouts/sharebutton.blade.php </p>
