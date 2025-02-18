<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index(Request $request)
    {
        $wishlist = $request->user()->wishlist()->with('set')->get();
        return response()->json(['data' => $wishlist]);
    }

    public function add(Request $request)
    {
        $request->validate([
            'card_id' => ['required', 'exists:cards,id'],
        ]);

        $request->user()->wishlist()->syncWithoutDetaching([$request->card_id]);

        return response()->json([
            'message' => 'Card added to wishlist successfully'
        ]);
    }

    public function remove(Request $request)
    {
        $request->validate([
            'card_id' => ['required', 'exists:cards,id'],
        ]);

        $request->user()->wishlist()->detach($request->card_id);

        return response()->json([
            'message' => 'Card removed from wishlist successfully'
        ]);
    }
}
