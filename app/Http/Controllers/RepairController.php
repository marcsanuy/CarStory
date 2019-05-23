<?php

namespace App\Http\Controllers;

use App\Repair;
use Illuminate\Http\Request;

class RepairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repairs = Repair::latest()->paginate(5);

  

        return view('repairs.index',compact('repairs'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('repairs.create');
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
            'coche_id'=> 'required',
            'accion' => 'required',
            'kilometros' => 'required',
            'fecha' => 'required',
            'precio' => 'required',
            'descripcion' => 'required',
        ]);
        Repair::create($request->all());
        
        return redirect()->route('repairs.index')
                        ->with('success', 'Añadido con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function show(Repair $repair)
    {
        return view('repairs.show', compact('repair'));
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function edit(Repair $repair)
    {
        return view('repairs.edit', compact('repair'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Repair $repair)
    {
        $request->validate([
            'accion' => 'required',
            'kilometros' => 'required',
            'fecha' => 'required',
            'precio' => 'required',
            'descripcion' => 'required',
        ]);
        Repair::create($request->all());
        
        return redirect()->route('repairs.index')
                        ->with('success', 'Modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function destroy(Repair $repair)
    {
        $repair->delete();

        return redirect()->route('repairs.index')
                        ->with('success', 'Elminado con éxito');
    }
}
