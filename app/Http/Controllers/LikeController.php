<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
      public function likes(Review $review, Request $request,Like $like){
        $like->review_id=$review->id;
        $like->user_id=Auth::user()->id;
        $like->save();
        return back();
    }
    
}
