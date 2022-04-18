<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonial = Testimonial::all();
        return view('back.pages.testimonials.all', compact("testimonial"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("back.pages.testimonials.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonial = new Testimonial();
        $testimonial->testimonial = $request->testimonial;
        $testimonial->name = $request ->name;
        $testimonial->position = $request->position;
        $testimonial->updated_at = now();

        $testimonial->save();
        return redirect()->route("testimonials.index");
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    // public function show(Testimonial $testimonial)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view('back.pages.testimonials.edit', compact("testimonial"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->testimonial = $request->testimonial;
        $testimonial->name = $request ->name;
        $testimonial->position = $request->position;

        $testimonial->updated_at = now();

        $testimonial->save();
        return redirect()->route("testimonials.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $longueurtestimonial = Testimonial::all()->count();
        $testimonial = Testimonial::find($id);

        if($longueurtestimonial > 1){
            $testimonial->delete();
            return redirect()->back()->with("success", "Suppression effectué avec succès");
        } else {
            return redirect()->back()->with("erreur", "vous ne pouves pas supprimer tout les testimonials");
        }
    }
}

