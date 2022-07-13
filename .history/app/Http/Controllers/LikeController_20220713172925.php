<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like(User $user, tweet $tweet)
    {
    if (!$tweet) {
        abort(404);
    }
    //いいねは１回しか押させない
    $tweet->likes()->detach($user->id);
    $tweet->likes()->attach($user->id);
    return ['tweet_id' => $comment->id];
    }

    public function index(Request $request)
    {
        $items = Like::userLikes($request->id);
        return response()->json([
            'data' => $items
        ], 200);
    }

    public function store(Request $request)
    {
        $item = Like::create($request->all());
        return response()->json([
            'data' => $item
        ], 201);
    }

    public function destroy(Like $like)
    {
        $item = Like::where('id', $like->id)->delete();
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
