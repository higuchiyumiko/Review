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
    public function show(Request $request,Review $review,Item $item){
        $input=request('id');
        $data=Review::find($input);
        return view('review/show',compact('data'))->with(['reviews' => $review->get()])->with(['items' => $item->get()]);
    }
}