<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller{

    public function index(){
        $breadcrumb = (object) [
            'title' => 'Dashboard',
            'list' => ['Welcome', 'Dashboard'],
        ];

        $page = (object) [
            'title' => 'Dashboard ',
        ];

        $activeMenu = 'dashboard';

        $user_id = Auth::id();

        return view('dashboard',[
            'breadcrumb' => $breadcrumb,
            'page' => $page,
            'activeMenu' => $activeMenu,
        ]);
    }
}




?>