<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class PageController extends Controller

{
    public function index(){
        
        // $trains = Train::all();        
        // var_dump($trains);
        // die();

        $train = Train::all()->where('departure_date', '2022-09-29');
        return view('homepage', ['trains'=> $train]);


        // $train = Train::whereDate()->where('departure_date', '2022-09-29')->get;
        
        return view('homepage', ['trains'=> $train]); 
        // compact("trains")
        
        
        // return view('homepage');   
    }
}

