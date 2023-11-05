<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Http\Requests\StoreVehicleRequest;
use App\Http\Requests\UpdateVehicleRequest;
use App\Models\Brand;
use App\Models\Design;

class VehicleController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicle::paginate(5);

        return view('vehicle/list',compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::get();
        $designs = Design::get();
        return view('vehicle/create',compact('brands','designs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVehicleRequest $request)
    {
      
        Vehicle::create($request->validated());
        return to_route('vehicle.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $design)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $design)
    {
        $brands = Brand::get();
        $designs = Design::get();
        return view('vehicle/edit',compact('vehicle','brands','designs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVehicleRequest $request, Vehicle $design)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $design)
    {
        //
    }
}
