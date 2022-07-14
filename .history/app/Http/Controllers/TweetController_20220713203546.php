<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index(Request $request)
    {
        $items = Tweet::with(['user:id,name','like:id,tweet_id')->get();
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

    public function like($likeData)
    {
    Like::create([
        'tweet_id' => $likeData->tweet_id,
        'user_id' => $likeData->user_id,
    ]);
    session()->flash('success', 'You Liked the Reply.');
    return redirect()->back();
    }

    public function unlike($unLikeData)
    {
    $like = Like::where('tweet_id', $unLikeData->tweet_id)->where('user_id', $unLikeData->user_id,)->first();
    $like->delete();
    session()->flash('success', 'You Unliked the Reply.');
    return redirect()->back();
    }
}
