<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Receipt;
use App\Models\Test;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:admin-dashboard', ['only' => ['dashboard']]);
    }

    public function dashboard()
    {
        $test = Test::withoutTrashed()->count();
        $package = Package::withoutTrashed()->count();
        $receipt = Receipt::withoutTrashed()->count();
        return view('backend.pages.home', compact('test', 'package', 'receipt'));
    }
}
