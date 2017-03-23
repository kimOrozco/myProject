<?php

namespace App\Http\Controllers;

use App\Broadcast;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
     $users = Broadcast::orderBy('id')->get();

         return view('schedule',[
           'users' => $users]);

     }
}
