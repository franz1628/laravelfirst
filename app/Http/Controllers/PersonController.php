<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Http\Requests\StorePersonRequest;
use App\Http\Requests\UpdatePersonRequest;
use App\Models\Role;
use App\Models\TypeDocument;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persons = Person::paginate(5);

        return view('person/list',compact('persons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $typeDocuments = TypeDocument::get();
        $roles = Role::get();
        return view('person/create',compact('typeDocuments','roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePersonRequest $request)
    {
        Person::create($request->validated());
        return to_route('person.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonRequest $request, Person $person)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        //
    }
}
