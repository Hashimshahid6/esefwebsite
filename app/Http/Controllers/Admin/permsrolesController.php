<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User as userModel;
use Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class permsrolesController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');

    }
    public function create_new_permission($permission_name)
    {
        if ($this->is_super_admin()) {
            $permission = Permission::create(['name' => $permission_name]);
            echo "<pre>";
            print_r(Permission::all());
            echo "</pre>";
            die;
        } else {
            return abort(404);
        }
    } //
    public function create_new_role($role_name)
    {
        if ($this->is_super_admin()) {
            $role = Role::create(['name' => $role_name]);
        } else {
            return abort(404);
        }
    } //
    public function assign_perm_to_role($permission_name, $role_name)
    {
        if ($this->is_super_admin()) {
            $role = Role::findByName($role_name);
            $role->givePermissionTo($permission_name);
            $role_perms = $role->permissions;
            echo "<pre>";
            print_r($role_perms);
            echo "</pre>";die;
        } else {
            return abort(404);
        }
    } //
    public function assign_role_to_user($role_name, $user_id)
    {

        // if ($this->is_super_admin()) {
            $user = userModel::find($user_id);
            $user->assignRole($role_name);
            // get the names of the user's roles
            $user_roles = $user->getRoleNames(); // Returns a collection
            echo "<pre>";
            print_r($user_roles);
            echo "</pre>";die;
        // } else {
        //     return abort(404);
        // }
    } //
    public function remove_role_from_user($role_name, $user_id)
    {

        if ($this->is_super_admin()) {
            $user = userModel::find($user_id);
            $user->removeRole($role_name);
            // get the names of the user's roles
            $user_roles = $user->getRoleNames(); // Returns a collection
            echo "<pre>";
            print_r($user_roles);
            echo "</pre>";die;
        } else {
            return abort(404);
        }
    } //
    public function revoke_permission_from_role($role_name, $permission_name)
    {
        if ($this->is_super_admin()) {
            $role = Role::findByName($role_name);
            $role->revokePermissionTo($permission_name);
            $role_perms = $role->permissions;
            echo "<pre>";
            print_r($role_perms);
            echo "</pre>";die;
        } else {
            return abort(404);
        }
    } //
    private function logged_id_user_id()
    {
        return Auth::user()->id;
    } //
    private function is_super_admin()
    {
        $login_id = $this->logged_id_user_id();
        $user = userModel::find($login_id);
        $user_roles = $user->getRoleNames(); // Returns a collection
        return $user->hasRole('Super Admin');
    } //
    public function view_role_perms($role_name)
    {
        if ($this->is_super_admin()) {
            $role = Role::findByName($role_name);
            $role_perms = $role->permissions;
            echo "<pre>";
            print_r($role_perms);
            echo "</pre>";die;
        } else {
            return abort(404);
        }
    } //
} //
