<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){

        $gallery = DB::table('gallery')->get();

        return view('home', ['gallery' => $gallery]);

    }
}
