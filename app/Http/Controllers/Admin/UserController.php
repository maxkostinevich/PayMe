<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::withTrashed()->orderBy('id', 'desc')->with('payments')->paginate(25);
        return view('admin.users.index', compact('users'));
    }

    // Delete User
    public function destroy(User $user)
    {
        if($user->isAdmin() || auth()->user()->id == $user->id){
            return abort(401);
        }

        $user->delete();

        return redirect()
            ->back()->with('status', 'User has been deleted successfully');
    }

    // Restore User
    public function restore($user_id)
    {
        $user = User::withTrashed()
            ->where('id', $user_id)->firstOrFail();

        $user->restore();

        return redirect()
            ->back()->with('status', 'User has been restored successfully');
    }
}
