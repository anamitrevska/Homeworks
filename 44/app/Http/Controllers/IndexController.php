<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;

class IndexController extends Controller
{
    public function index(){
        $cards=Card::all();
        return view('index',['cards'=>$cards]);
    }
}
