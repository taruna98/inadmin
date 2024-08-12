<?php

namespace Modules\Iabsent\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = 'Iabsent Dashboard';
        $email = Auth::user()->email;
        $user_id = Auth::user()->id;
        $role = Auth::user()->roles->pluck('name')[0];

        if ($role == 'super admin' || $role == 'admin') {
            // get user iabsent
            $role = 'iabsent member';
            $user_iabsent = User::whereHas('roles', function ($query) use ($role) {
                $query->where('name', $role);
            })->get();

            // get iabsent activity
            $iabsent_activity = DB::connection('mysql')->table('log_activity')->join('users', 'log_activity.user_id', '=', 'users.id')->select('users.name', 'log_activity.*')->where('log_activity.module', 'Admin')->orderBy('log_activity.created_at', 'desc')->limit(6)->get();

            return view('Iabsent::iabsent_dashboard', [
                'title'             => $title,
                'user_iabsent'      => $user_iabsent,
                'iabsent_activity'  => $iabsent_activity
            ]);
        } else {
            // get user
            $get_user = DB::connection('mysql')->table('users')->where('email', $email)->first();

            return view('Iabsent::iabsent_dashboard', [
                'title' => $title
            ]);
        }
    }
}
