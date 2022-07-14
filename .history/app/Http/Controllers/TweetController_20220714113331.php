<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    // public function index(Request $request)
    // {
    //     $items = Tweet::with('user','likes')->get();
    //     return response()->json([
    //         'data' => $items
    //     ], 200);
    // }

    public function store(Request $request)
    {
        $item = Tweet::create($request->all());
        return response()->json([
            'data' => $item
        ], 201);
    }

    public function show(Tweet $tweetId)
    {
        $item = Tweet::where($tweetId);
        if ($item) {
            return response()->json([
                'data' => $item
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }

    public function destroy(Tweet $tweet)
    {
        $item = Tweet::where('id', $tweet->id)->delete();
        if ($item) {
            return response()->json([
                'message' => 'Deleted successfully',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }
}
