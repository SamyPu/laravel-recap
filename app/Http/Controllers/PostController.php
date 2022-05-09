<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $banner = Banner::first();

        return view('front.index', compact('banner'));
    }
}
