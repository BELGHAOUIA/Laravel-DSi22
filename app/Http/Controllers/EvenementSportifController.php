<?php

namespace App\Http\Controllers;

use App\Models\EvenementSportif;
use App\Models\User;
use Illuminate\Http\Request;

class EvenementSportifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evenementSportifs = auth()->user()->evenementSportifs;

        $data=[
            'title'=>$description="mes evenements sportifs",
            'description'=>$description,
            'eventSportifs'=>$evenementSportifs,
            'heading'=>$description,
        ];

        return view('events.mes-events', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data=[
            'title' => $description="creer un nouvel evenement sportif",
            'description' => $description,
            'heading' => $description
        ];

        return view('events.create',$data);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EvenementSportif $evenementSportif)
    {
        $data=[
            'title' => 'Evenement sportif: '.$evenementSportif->nom,
            'description' => 'Details event: '.$evenementSportif->nom,
            'heading' => config('app.name'),
            'eventSportif' => $evenementSportif

        ];

        return view('events.details-evenementSportif', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EvenementSportif $evenementSportif)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EvenementSportif $evenementSportif)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EvenementSportif $evenementSportif)
    {
        //
    }
}
