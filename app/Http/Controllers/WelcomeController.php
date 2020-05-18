<?php

namespace App\Http\Controllers;

use App\Livre;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $livre = Livre::all();
     return view('welcome',compact('livre'));
    }
}
