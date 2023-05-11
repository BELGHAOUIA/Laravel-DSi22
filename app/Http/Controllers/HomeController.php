<?php

namespace App\Http\Controllers;
use App\Models\EvenementSportif;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */



    public function __invoke(Request $request)
    {

        Auth::logout();
        Auth::login(User::first());

        $eventSportifs=EvenementSportif::all();
        $data=[
            'title' => 'Evenements sportifs',
            'description' => 'Liste des evenements sportifs',
            'heading' => config('app.name'),
            'eventSportifs' => $eventSportifs,
        ];
        return view('home.index',$data);
    }
}
