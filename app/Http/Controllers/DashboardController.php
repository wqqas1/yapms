<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $userRoles = UserRole::where('user_id', $user->id)->get();

        foreach ($userRoles as $userRole) {
            
            $roles = Role::where('id', $userRole->role_id)->get();

            foreach ($roles as $role) {

                if ($role->name == "Admin") {

                    return view('admin.dashboard.index');
                }

                if ($role->name == "Agent") {

                    return view('agent.dashboard.index');
                }

                if ($role->name == "Guest") {

                    return view('guest.dashboard.index');
                }

                if ($role->name == "Owner") {

                    return view('owner.dashboard.index');
                }
            }
        }

        return redirect()->back();
    }
}
