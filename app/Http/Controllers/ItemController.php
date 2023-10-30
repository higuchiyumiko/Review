<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Models\Review;
use App\Models\Like;
use App\Http\Controllers\Controller;
use Cloudinary;

class ItemController extends Controller
{
    public function index(Review $review){
        $likes=Like::where('review_id', $review->id)->where('user_id', auth()->user()->id)->first();
        return view('items.index',compact('likes'))->with(['reviews'=>$review->getPaginateByLimit()]);
    }
    public function nav(Item $item){
        return view('items/navigation');
    }
    public function search(Request $request){
        $name=$request->input('name');
        $query=Item::query();
        
        if(!empty($name)){
            $query->where('name','LIKE',"%{$name}%");
        }
        $items=$query->get();
        $count=$query->count();
        
        return view('items.result',compact('items','name','count'));
    }
    public function register(Request $request){
        return view('items.register');
    }
    public function store(Request $request,Item $item){
        //cloudinaryへ画像を送信し、画像のURLを$image_urlに代入している
        $input = $request['items'];
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input += ['item_image' => $image_url];  //追加
        $item->fill($input)->save();
        return redirect('/');
    }
    public function create2(Request $request){
        $data=Item::where('id',$request->item)->first();
        return view('items.create',$data)->with(['data'=>$data]);
    }
     public function create(Item $item){
        return view('items.create')->with(['item'=>$item]);
    }
    public function show(Item $item){
        return view('items.show')->with(['items'=>$item->getPaginateByLimit()]);
    }
     public function detail(Item $item){
        return view('items.detail')->with(['item'=>$item]);
    }
    public function edit(Item $item){
        return view('items.edit')->with(['item'=>$item]);
    }
    public function update(Request $request ,Item $item){
   //     $image_url=Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input=$request['item'];
     //   $input+=['item_image'=>$image_url];
        $item->fill($input)->save();
        return redirect('/');
    }
    public function delete(Item $item){
        $item->delete();
        return redirect('/');
    }
}