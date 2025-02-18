<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Set;
use Illuminate\Http\Request;

class SetController extends Controller
{
    public function index()
    {
        $sets = Set::all();
        return response()->json(['data' => $sets]);
    }

    public function show(Set $set)
    {
        return response()->json(['data' => $set]);
    }

    public function cards(Set $set)
    {
        $cards = $set->cards;
        return response()->json(['data' => $cards]);
    }
}
