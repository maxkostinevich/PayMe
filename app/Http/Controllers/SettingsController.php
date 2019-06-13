<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingsController extends Controller
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
     * Show the settings page.
     */
    public function edit()
    {
        return view('settings.edit');
    }

    /**
     * Update user settings.
     */
    public function update(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'avatar' => 'image|mimes:jpeg,jpg,png,gif|max:1024'
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->company = $request->input('company');

        if ($request->file('avatar')) {
            $avatar = $request->file('avatar')->store('uploads', 'public');
            $user->avatar = $avatar;
        }

        $user->save();

        return redirect()
            ->back()
            ->with('status', 'Your settings have been updated successfully.');
    }

    /**
     * Delete user avatar
     */
    public function deleteAvatar(Request $request)
    {
        $user = auth()->user();

        if ($user->avatar) {
            File::delete('storage/' . $user->avatar);
            $user->avatar = '';
            $user->save();
        }

        return redirect()
            ->back()
            ->with('status', 'Your avatar has been updated successfully.');
    }

    /**
     * Update user password
     */
    public function updatePassword(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'old_password' => ['required', 'required_with:password',
                function ($attribute, $value, $fail) use ($user) {
                    if (!password_verify($value, $user->password)) {
                        return $fail(__('The current password is incorrect.'));
                    }
                }
            ],
            'password' => 'required|required_with:old_password|string|min:6|confirmed',
        ]);

        $user->password = bcrypt($request->input('password'));

        $user->save();

        return redirect()
            ->back()
            ->with('status', 'Your password has been updated successfully.');
    }

}
