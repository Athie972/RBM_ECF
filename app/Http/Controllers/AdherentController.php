<?php

namespace App\Http\Controllers;

use App\Models\Adherent;
use Illuminate\Http\Request;

class AdherentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adherents = Adherent::all();
        return view('adherent', ['adherents'=> $adherents]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Adherent::created($request->all()); 
        return redirect()->route('adherent.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Adherent $adherent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Adherent $adherent, $id)
    {
        $adherent= Adherent::findorfail($id);
        return view('edit', compact('adherent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Adherent $adherent)
    {
        $validatedData = $request->validate([
        'firstname' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'phone_number' => 'required|string|max:20',
    ]);
        Adherent::created($request->all());
        return redirect()->route('adherent.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $adherents = Adherent::find($id);
        $adherents->delete();
        return redirect()->route('adherent.index');
    }
}
