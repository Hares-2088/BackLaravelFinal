<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ShoppingCart;

class ShoppingCartController extends Controller
{
    public function addToCart(Request $request)
    {
        error_log('got into the add');
        $fields = $request->validate([
            'user_id' => 'required|exists:users,id',
            'item_id' => 'required|exists:items,id',
            'quantity' => 'required|integer|min:1',
        ]);

        error_log('validated the data');


        $cartItem = ShoppingCart::create([
            'user_id' => $fields['user_id'],
            'item_id' => $fields['item_id'],
            'quantity' => $fields['quantity'],
        ]);
        error_log('created');


        return response()->json($cartItem, 201);
    }

    public function removeFromCart($user_id, $item_id)
    {
        // Find the cart item based on user_id and item_id
        $cartItem = ShoppingCart::where('user_id', $user_id)
                                 ->where('item_id', $item_id)
                                 ->first();
    
        // Check if the cart item exists
        if (!$cartItem) {
            return response()->json(['error' => 'Cart item not found'], 404);
        }
    
        // Delete the cart item
        $cartItem->delete();
    
        // Return success message
        return response()->json(['message' => 'Item removed from cart successfully'], 200);
    }

    public function getUserCart($user_id)
    {
        $userCart = ShoppingCart::with('item')->where('user_id', $user_id)->get();

        return response()->json($userCart, 200);
    }
}

