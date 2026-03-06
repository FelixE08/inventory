<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){

        $items = Item::all()->where(function($item){
            return $item->school_number === 101;
        });

        // dump and die
        // dd($items);

        return view('items.index', [
            'items' => $items
        ]);
    }
}
