<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetRequest;
use App\Models\Category;
use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PetCreateReport;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pets.index',[
            'pets' => Pet::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PetRequest $request)
    {
        $pet = new Pet();

        $pet->pet_code = $request->get('pet_code');
        $pet->pet_name = $request->get('pet_name');
        $pet->pet_breed = $request->get('pet_breed');
        $pet->pet_color = $request->get('pet_color');
        $pet->pet_age = $request->get('pet_age');
        $pet->category_id = $request->get('category_id');
        $pet->pet_status = $request-> has(('pet_status'));

        $pet->save();

        return redirect('/pets');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pet $pet)
    {
        return view('pets.show',[
            'pet' => $pet
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pet $pet)
    {
        return view('pets.edit', [
            'pet' => $pet
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PetRequest $request, Pet $pet)
    {
        $pet->pet_code = $request->get('pet_code');
        $pet->pet_name = $request->get('pet_name');
        $pet->pet_breed = $request->get('pet_breed');
        $pet->pet_color = $request->get('pet_color');
        $pet->pet_age = $request->get('pet_age');
        $pet->category_id = $request->get('category_id');
        $pet->pet_status = $request-> has(('pet_status'));

        $pet->save();

        return redirect('/pets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pet $pet)
    {
        $pet->delete();
        return back();
    }

}
