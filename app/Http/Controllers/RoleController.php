<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    function Role(){

        // $role = Role::create(['name' => 'delivary_boy']);
        // $permission = Permission::create(['name' => 'delete user']);

        return view('backend.role.role', [
            'roles' => Role::all(),
            'permissions' => Permission::all(),
            'users' => User::all(),
        ]);
    }

    function RoleAddToPermission(Request $request){

        $role_name = $request->role_name;
        $permission_name = $request->permission_name;
        $role = Role::where('name', $role_name)->first();
        $role->givePermissionTo($permission_name);

        return back();
    }

    function RoleAddToUser(Request $request){

        $user_id = $request->user_id;
        $role_name = $request->role_name;
        $user = User::findOrFail($user_id);
        // $user->assignRole($role_name);
        $user->syncRoles($role_name);

        return back();
    }

    function ChangePermissionToUser($id){
        $user = User::findOrFail($id);
        $role = Role::where('id', $id)->first();

        return view('backend.role.edit-permission', [
            'permissions' => Permission::all(),
            'user' => $user,
            'role' => $role,
        ]);
    }

    function ChangePermission(Request $request){
       $user = User::findOrFail($request->user_id);
       $user->syncPermissions($request->permission);
        return back();
    }


    function ChangePermissionToRole($id){
        $role = Role::where('id', $id)->first();
        return view('backend.role.edit-role-permission', [
            'role' => $role,
            'permissions' => Permission::all(),
        ]);
    }



    function ChangePermissionRole(Request $request){
        $role = Role::findOrFail($request->role_id);
        $role->syncPermissions($request->permission);
        return back()->with('role', "Role Update Successfull");
    }
}
