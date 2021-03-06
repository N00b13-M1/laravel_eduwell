<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    // public function __construct(){
    //     // $this->middleware(['admin_verification']);
    //     $this->middleware('webmaster_verification');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonial = Testimonial::all();
        $user = User::all();
        return view('back.pages.testimonials.all', compact("testimonial", "user"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Gate::authorize('create-testimonial');
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
        $this->authorize('create', Testimonial::class);

        $testimonial = new Testimonial();
        $testimonial->testimonial = $request->testimonial;
        $testimonial->name = $request ->name;
        $testimonial->position = $request->position;
        $testimonial->user_id = $request->user()->id;
        $testimonial->confirmed = 0;
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

        // dd($request->user()->id);
        $this->authorize('update', Testimonial::class);

        $testimonial = Testimonial::find($id);
        dd($id);
        if($request->user()->id == $testimonial->user_id){
            $testimonial->testimonial = $request->testimonial;
            $testimonial->name = $request ->name;
            $testimonial->position = $request->position;

            $testimonial->updated_at = now();

            $testimonial->save();
            return redirect()->route("testimonials.index");
        } else{
            return redirect()->route("testimonials.index")->with("erreur", "vous n'??tes pas l'utilisateur qui a cr??e ce testimonial");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {


        $longueurtestimonial = Testimonial::all()->count();
        $testimonial = Testimonial::find($id);

        if($request->user()->id == $testimonial->user_id){
            if(decrypt($request->id) == $id){


                if($longueurtestimonial > 1){
                    $this->authorize("delete", $testimonial);
                    Storage::disk('public')->delete("img/testimonials/" . $testimonial->image);
                    $testimonial->delete();
                    return redirect()->back()->with("success", "Suppression effectu?? avec succ??s");
                } else {
                    return redirect()->back()->with("erreur", "vous ne pouves pas supprimer tout les testimonials");
                    }
                }else{
                    return redirect()->back()->with("success", "Vous n'avez pas le droit");
                    }
        }else{
            return redirect()->back()->with("erreur", "Vous n'??tes pas le cr??ateur de ce testimonial");
            }
    }

    // public function confirm(){
    //     $testimonial = Testimonial::all();
    //     $user = User::all();
    //     return view('back.pages.testimonials.confirm', compact('testimonial', 'user'));
    // }

    // public function confirmed($id){
    //     $testimonial = Testimonial::find($id);

    //     $testimonial->confirmed = 1;

    //     $testimonial->save();
    //     return redirect()->back();
    // }
}
