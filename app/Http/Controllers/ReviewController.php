<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Models\Review;
use App\Http\Controllers\Controller;
use Cloudinary;

class ReviewController extends Controller
{
    public function store2(Request $request,Review $review){
        $input=$request['review'];
        $data=Item::where('id',$request->id)->first();
        $review->fill($input)->save();
        return redirect('/');
    }
    public function show(Review $review){
        //dd($review);
        return view('reviews.show')->with(['reviews' => $review]);
    }
     public function detail(Item $item){
        return view('items.detail')->with(['item'=>$item]);
    }
}