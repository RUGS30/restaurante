<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MenuController extends Controller
{
    //
    public function index()
    {
        $products = DB::table('products')->get();

        return view('menu.menu',compact('products'));
       

    }
}
