<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Request $request)
    {
        $item = Like::create($request->all());
        return response()->json([
            'data' => $item
        ], 201);
    }

    public function show(Like $like)
    {
        // tweet_idと一致するやつを引き出すようにしたい
        $item = Like::find($like);
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

    public function destroy(Like $like)
    {
        // フロントエンドでid一致させられたらこれでいける
        $item = Like::where('id', $comment->id)->delete();
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
