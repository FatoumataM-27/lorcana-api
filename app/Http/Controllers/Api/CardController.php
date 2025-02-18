<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index()
    {
        $cards = Card::with('set')->get();
        return response()->json(['data' => $cards]);
    }

    public function userCards(Request $request)
    {
        $cards = $request->user()->cards()->with('set')->get();
        return response()->json(['data' => $cards]);
    }

    public function updateOwned(Request $request, Card $card)
    {
        $request->validate([
            'quantity' => ['required', 'integer', 'min:0'],
        ]);

        $request->user()->cards()->syncWithoutDetaching([
            $card->id => ['quantity' => $request->quantity]
        ]);

        return response()->json([
            'message' => 'Card quantity updated successfully',
            'data' => [
                'card_id' => $card->id,
                'quantity' => $request->quantity
            ]
        ]);
    }
}
