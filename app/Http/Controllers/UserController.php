<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
         $users = User::whereHas('roles', function($query){
            $query->whereNot('id', '1')
                ->whereNot('id', '2');
        })->paginate('25');

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        try {
            $validated = $request->validated();

            $user->name   = $validated['name'];
            $user->email  = $validated['email'];
            $user->active = (isset($validated['active']))? $validated['active'] : 0 ;

            $user->save();

            return redirect(route('users.edit', ['user' => $user]))->with('message', 'User saved');

        } catch (\Exception $exception) {
            Log::error('Could not show program', [
                'exception' => $exception
            ]);

            return abort(500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       User::destroy($id);
    }

    public function activate(User $user)
    {
        $user->active = 1;
        $user->save();

        return redirect()->back();
    }

    public function deactivate(User $user)
    {
        $user->active = 0;
        $user->save();

        return redirect()->back();
    }

    public function impersonate(User $user) {

        Auth::user()->impersonate($user);

        return redirect('/');
    }
}
