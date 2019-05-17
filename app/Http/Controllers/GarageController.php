<?php

namespace App\Http\Controllers;

use App\Garage;
use Illuminate\Http\Request;

class GarageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $garages = Garage::latest()->paginate(5);

  

        return view('garages.index',compact('garages'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('garages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'matricula' => 'required',
        ]);
        Garage::create($request->all());
        
        return redirect()->route('garages.index')
                        ->with('succes', 'Coche añadido al garaje con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Garage  $garage
     * @return \Illuminate\Http\Response
     */
    public function show(Garage $garage)
    {
        return view('garages.show', compact('garage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Garage  $garage
     * @return \Illuminate\Http\Response
     */
    public function edit(Garage $garage)
    {
        return view('garages.edit', compact('garage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Garage  $garage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Garage $garage)
    {
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'matricula' => 'required',
        ]);
        $garage->update($request->all());
        
        return redirect()->route('garages.index')
                        ->with('succes', 'Coche modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Garage  $garage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Garage $garage)
    {
        $garage->delete();

        return redirect()->route('garages.index')
                        ->with('success', 'Coche elminado con éxito');
    }
}
