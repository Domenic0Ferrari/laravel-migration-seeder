<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function train()
    {
        // con la condizione where prendo tutti i treni che non sono stati cancellati
        $trains = Train::where('deleted', 0)->get();
        return view('train', [
            'trains' => $trains,
        ]);
    }
}
