<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemsController extends Controller
{

    public function index(){
        return Item::all();
    }

    public function store(Request $request)
    {
        $item = Item::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price
        ]);

        return response()->json([
            'message' => 'Item created successfully',
            'item' => $item
        ]);
    }

    public function show($id){
        $item = Item::where('id',$id)->first();
        $arr = [
            $item['name'],
            $item['description'],
            $item['price']
        ];
        return $arr;
    }


}