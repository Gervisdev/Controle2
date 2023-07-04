<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use App\Models\Tak;
use Illuminate\Http\Request;

class TaksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('taches.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('taches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate ([
            'name'=> 'required |min:3',
            'description'=> 'required|min:50|max:255'
        ]);

        $tache = new Tache ();
        $tache -> name = $request->name ;
        $tache -> description = $request -> description ;
        $tache->save();

        return redirect()->route('index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
