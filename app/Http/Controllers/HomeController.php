<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Service;
use App\Models\Title;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banner = Banner::first();
        $titles = Title::all();
        $services = Service::all();
        foreach ($titles as $title) {
            $title->title = str_replace(["[","]"], ["<em>","</em>"], $title->title);
        }

        return view('front.index', compact('banner','titles','services'));
    }
}
