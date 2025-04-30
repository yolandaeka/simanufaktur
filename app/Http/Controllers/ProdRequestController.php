<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProdRequestController extends Controller{

    public function index(){
        $breadcrumb = (object) [
            'title' => 'Dashboard',
            'list' => ['Welcome', 'Dashboard'],
        ];

        $page = (object) [
            'title' => 'Dashboard ',
        ];

        $activeMenu = 'perencanaan';

        $user_id = Auth::id();

        return view('dashboard',[
            'breadcrumb' => $breadcrumb,
            'page' => $page,
            'activeMenu' => $activeMenu,
        ]);
    }
}




?>