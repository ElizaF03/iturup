<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\TourController;


class MainController extends Controller
{
    public function showMainPage(){
        $tours=Tour::all();
        return view('main', ['tours' => $tours]);
    }
}
