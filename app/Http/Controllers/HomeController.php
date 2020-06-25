<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Spatie_permission
        //Todo:create role
//        Role::create(['name'=>'writer']);
        //Todo:create permission
//        Permission::create(['name'=>'writer']);

        //Todo:Get permission and assign to role

//        $role=Role::findById(1);
//        $permission=Permission::findById(1);
//
//        $role->givePermissionTo($permission);

        //Todo:Create run time permission and assign to role
//        $permission=Permission::create(['name'=>'edit post']);
//        $role=Role::findById(1);
//
//        $role->givePermissionTo($permission);

        //Todo:Remove permission under role
//        $permission=Permission::findById(2);
//        $role=Role::findById(1);
//
//        $permission->removeRole($role); //OR
//        //Todo:in opposite way
////        $role->revokePermission($permission);

        //Todo:give permission to specific user
//        auth()->user()->givePermissionTo('edit post');

        //Todo:get role to specific user
//        auth()->user()->assignRole('writer');

        //Todo:get all permissions or roles
//        auth()->user()->permissions;
//        auth()->user()->roles;
//        auth()->user()->getDirectPermissions();
//        auth()->user()->getPermissionsViaRoles();
//        auth()->user()->getAllPermissions();

        //Todo:get user that have role
//        User::role('writer')->get();
//        User::permission('edit post')->get();

        return view('home');
    }
}
