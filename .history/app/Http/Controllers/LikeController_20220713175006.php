<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\User;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    //コンポーネント初期読み込み時(created)に呼び出される
    public function firstcheck($post) {
        $user = user:();
        $likes = new Like();
        $like = Like::where('posts_id',$post)->where('user_id',$user->id)->first();
        if($like) {
            $count = $likes->where('posts_id',$post)->where('like',1)->count();
            return [$like->like,$count];
        } else {
            $like = $likes->create([
                'user_id' => $user->id,
                'posts_id' => $post,
                'like' => 0
            ]);
            $count = $likes->where('posts_id',$post)->where('like',1)->count();
            return [$like->like,$count];
        }
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
