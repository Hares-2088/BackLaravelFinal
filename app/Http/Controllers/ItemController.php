<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function setItem(Request $request){
        $fields = $request->validate([
            'name'          => 'required|string',
            'description'   => 'required|string',
            'image'         => 'required|string',
            'price'         => 'required|decimal:2',//there is not validate double
        ]);
        error_log("hello");
        $item = Item::create([
            'name'        => $fields['name'],
            'description' => $fields['description'],
            'image'       => $fields['image'], // Include the image field
            'price'       => $fields['price'],
        ]);

        return response($item, 201);
    }

    public function getItems() {
        $arryItems = Item::all(); 
        return response() -> json($arryItems, 200);
    }

    public function getItem($search){
        $arryItems = Item::where('name', 'LIKE', '%'.$search.'%')
                        ->orWhere('description', 'LIKE', '%'.$search.'%')
                        ->get();
        return response($arryItems, 201);
    }

    public function getTheItemByName($name){
        $item = Item::where('name', $name)->first();
        return response($item, 201);
    }
}
