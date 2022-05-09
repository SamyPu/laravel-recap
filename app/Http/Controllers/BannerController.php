<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();

        return view('back.banner.all', compact('banners'));
    }
    public function edit($id)
    {
        $banner = Banner::find($id);

        return view('back.banner.edit', compact('banner'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'button_text_1' => 'required|string|max:255',
            'button_text_2' => 'required|string|max:255',
        ]);

        $banner = Banner::find($id);

        $banner->title = $request->title;
        $banner->description = $request->description;
        $banner->button_text_1 = $request->button_text_1;
        $banner->button_text_2 = $request->button_text_2;

        if ($request->file('image') == null) {
            $banner->image = $banner->image;
            $banner->save();
        } else {
            if ($banner->image != "slider-dec.png") {
                File::delete('images/' . $banner->image);
            } 
            $banner->image = $request->file("image")->hashName();
            $banner->save();
            $request->file('image')->storePublicly('images', 'public');
        }

        return redirect()->route('banner.index')->with('message', 'Banner updated successfully');
    }
}
