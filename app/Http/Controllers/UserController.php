<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
//        $role = Role::where('name', 'superadmin')->first();
//
//        $role->givePermissionTo('edit_user');
//
//        dd($role->permissions);

        $users = User::all();

        return view('users.index', compact('users'));
    }
}
