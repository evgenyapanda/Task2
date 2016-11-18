<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;

class IndexController extends Controller
{
    //
    public function index(){

        $items = Item::select()->get();

        return view('index')->with(['items' => $items]);
    }
}
