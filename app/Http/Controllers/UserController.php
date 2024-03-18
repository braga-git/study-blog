<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function create()
    {
        return view('users/create', ['roles' => Role::all()]);
    }
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        if ($request->role) {
            $role = $request->role;
            $user->assignRole($role);
        }

        return back()->with('message', 'User registrated successfully!');
    }

    public function login()
    {
        return view('users/login');
    }
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email', 'Invalid Credentials'])->onlyInput('email');
    }
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    }

    public function manage()
    {
        return view('admin/users', ['users' => User::filter(request(['search']))->paginate(8)]);
    }
    public function edit(User $user)
    {
        return view('users/edit', ['user' => $user, 'roles' => Role::all(), 'currentRole' => $user->getRoleNames()->first()] );
    }
    public function update(Request $request, User $user)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($user->id)],
            'password' => ['nullable', 'confirmed', 'min:6']
        ]);

        if (isset($formFields['password'])) {
            $formFields['password'] = bcrypt($formFields['password']);
        } else {
            $formFields['password'] = $user->password;
        }

        $user->update($formFields);

        $role = $request->role;

        if (!$user->hasRole($role)) {
            $user->syncRoles([$role]);
        }

        return back()->with('message', 'User updated successfully!');
    }
    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('message', 'User deleted successfully!');
    }
}
