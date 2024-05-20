<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Test;
use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    public function create()
    {
        $tests = Test::all();
        $packages = Package::all();
        return view('backend.receipts.create', compact('tests', 'packages'));
    }
}
