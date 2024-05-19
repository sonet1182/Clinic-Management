<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:admin-dashboard', ['only' => ['dashboard']]);
    }

    public function dashboard()
    {
        return view('backend.pages.home');
    }
}
