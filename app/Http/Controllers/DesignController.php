<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDesignRequest;
use App\Models\Brand;
use App\Models\Design;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $designs = Design::paginate(5);

        return view('design/list',compact('designs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::get();
        return view('design/create',compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDesignRequest $request)
    {
      
        Design::create($request->validated());
        return to_route('design.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Design $design)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Design $design)
    {
        $brands = Brand::get();
        return view('design/edit',compact('design','brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Design $design)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Design $design)
    {
        //
    }
}
