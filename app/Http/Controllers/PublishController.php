<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;

class PublishController extends Controller
{
    public function index()
    {
        $testimonial = Testimonial::all();
        $user = User::all();
        return view('back.pages.publish.all', compact("testimonial", "user"));
    }

    // public function edit($id)
    // {
    //     $testimonial = Testimonial::find($id);
    //     $user = User::all();
    //     return view('back.pages.publish.all', compact("testimonial", "user"));
    // }

    public function update($id)
    {

        $testimonial = Testimonial::find($id);

        $testimonial->confirmed = 1;

        $testimonial->save();
        return redirect()->route("publish.index");
    }
}
