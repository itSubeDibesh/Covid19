<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $user = null;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $user = User::all()->except(Auth::id());
        return view('backend.user.index', ['user' => $user]);
    }

    public function create()
    {
        return view('backend.user.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate($this->user->validateUser());
        $validatedData['password'] = Hash::make($request['password']);
        if (request()->file('image')) {
            $path = request()->file('image')->store('images/user', 'public');
            $validatedData['image'] = $path;
        }
        $user = new User($validatedData);
        $success = $user->save();
        if ($success) {
            $request->session()->flash('success', 'User added successfully.');
        } else {
            $request->session()->flash('error', 'Sorry! There was a problem while adding user.');
        }
        return redirect(route('back.accounts.index'));
    }

//    public function edit($id){
//        $users = User::where('id', $id)->firstOrfail();
//        return view('backend.user.edit', ['users' => $users]);
//    }
//
//    public function update(User $user){
//        $validatedData = request()->validate($user->validateUser($user->id));
//        dd($validatedData);
//        $success = $user->update($validatedData);
//
//        if ($success) {
//            request()->session()->flash('success', 'User updated successfully.');
//        } else {
//            request()->session()->flash('error', 'Sorry! There was a problem while updating user.');
//        }
//
//        //return redirect(route('teams.show', $service->id));
//        return redirect(route('admin.services.index'));
//        return view('backend.accounts');
//    }

    public function setting_edit($id)
    {
        $users = User::where('id', $id)->firstOrfail();
        return view('backend.setting.edit', ['users' => $users]);
    }

    public function setting_update($id)
    {
        $user = User::findOrfail($id);
        $validatedData = request()->validate($user->validateUser($user->id));
        if (request()->file('image')) {
            $path = request()->file('image')->store('images/user', 'public');
            $validatedData['image'] = $path;
        }

        $success = $user->update($validatedData);

        if ($success) {
            request()->session()->flash('success', 'User updated successfully.');
        } else {
            request()->session()->flash('error', 'Sorry! There was a problem while updating user.');
        }

        return redirect(route('back.dashboard'));
    }

    public function forgot_password(Request $request)
    {
        $user = User::findOrfail(Auth::id());
        $password = Hash::make(trim($request['old_password']));
//        dd($user['password']);
//        dd($password);
        if ($request['password'] == $request['password_confirm']) {
            if (password_verify($request['old_password'], $user['password'])) {

                $validatedData = request()->validate($user->validateUser('forget'));
                $validatedData['password'] = Hash::make($request['password']);
                $success = $user->update($validatedData);
                if ($success) {
                    return redirect('login')->with(Auth::logout());
                } else {
                    request()->session()->flash('error', 'Sorry! There was a problem while resetting password.');
                }

            } else {
                request()->session()->flash('error', 'Sorry! Your password doesnt matches to our database.');
            }
        } else {
            request()->session()->flash('error', 'Sorry! Your retyped password doesnt matches to the password.');
        }
        return redirect(route('back.settings.edit', Auth::id()));
    }
}
