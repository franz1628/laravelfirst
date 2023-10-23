<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $brands = Brand::paginate(30);
      
        return view('brand/list',["brands"=>$brands]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('brand/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
       Brand::create($request->validated());
       $request->session()->flash('msg','<div class="alert alert-success" role="alert">success add</div>');
       return to_route('brand.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $aa)
    {
        dd($aa);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {   
        return view('brand/edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreBrandRequest $request, Brand $brand)
    {
        $brand->update($request->validated());
        $request->session()->flash('msg','<div class="alert alert-info" role="alert">success update</div>');
        return redirect('brand');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
