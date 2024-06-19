<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomepageController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
            return view('auth.login');
        }
    }

    public function index2()
    {
        $banners = Banner::withoutTrashed()->where('status', 1)->latest()->get();
        $offers = Offer::withoutTrashed()->where('status', 1)->latest()->get();
        $main_categories = Category::withoutTrashed()->where('parent_id', null)->where('status', 'show')->get();
        return view('frontend.pages.home', compact('banners', 'offers', 'main_categories'));
    }

    public function about_us()
    {
        return view('frontend.pages.about_us');
    }
}
