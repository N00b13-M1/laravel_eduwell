<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Laravel\Ui\Presets\Vue;
use Whoops\Run;

use function Ramsey\Uuid\v2;

class ServiceController extends Controller
{
    // public function __construct(){
    //     $this->middleware('admin_verification');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Gate::allows('access-service')){
            abort(403);
        }
        $services = Service::all();
        return view ('back.pages.services.all', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Gate::allows('access-service')){
            abort(403);
        }
        return view('back.pages.services.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> authorize('create', Service::class);
        $service = new Service();
        $service->logo = $request->logo;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->updated_at = now();
        $service->save();

        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('back.pages.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $services = Service::all();
        return view('back.pages.services.edit', compact("service", "services"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $this -> authorize('update', $service); 
        $service->logo = $request->logo;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->updated_at = now();
        
        $service->save();
        return redirect()->route('services.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $this -> authorize('delete', $service); 
        $services = Service::all()->count();
        if ($services > 1) {
            $service->delete();
            return redirect()->route('services.index')->with("success", "Successfully deleted");
        } else {
            return redirect()->route('services.index')->with("error", "You cannot delete all services");
        }
    }
}

