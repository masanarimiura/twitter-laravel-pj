<?php

namespace App\Http\Controllers;

use App\Models\Twitter;
use Illuminate\Http\Request;

class TwitterController extends Controller
{
    public function index()
    {
        $items = Twitter::all();
        return response()->json([
            'data' => $items
        ], 200);
    }

    public function store(Request $request)
    {
        $item = Twitter::create($request->all());
        return response()->json([
            'data' => $item
        ], 201);
    }

    public function show(Twitter $twitter)
    {
        $item = Twitter::find($twitter);
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

    public function update(Request $request, Twitter $twitter)
    {
        //
    }

    public function destroy(Twitter $twitter)
    {
        $item = Twitter::where('id', $twitter->id)->delete();
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
