<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {
        $items = Tweet::all();
        return response()->json([
            'data' => $items
        ], 200);
    }

    public function store(Request $request)
    {
        $item = Tweet::create($request->all());
        return response()->json([
            'data' => $item
        ], 201);
    }

    public function show(Tweet $tweet)
    {
        $item = Rest::find($rest);
        if ($item) {
            return response()->json([
                'data' => $item
            ], 200);
    }

    public function destroy(Tweet $tweet)
    {
        //
    }
}
