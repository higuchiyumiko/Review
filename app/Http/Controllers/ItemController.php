<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Models\Review;
use App\Http\Controllers\Controller;
use Cloudinary;

class ItemController extends Controller
{
    public function index(Review $review){
        return view('items.index')->with(['reviews'=>$review->getPaginateByLimit()]);
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
        $input=$request['items'];
        if($request->file('image')){ //画像ファイルが送られた時だけ処理が実行される
            $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $input += ['image_url' => $image_url];
        }
       // $image_url=Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        //$input=$request['items'];
        //$input+=['item_image'=>$image_url];
        $item->fill($input)->save();
        return redirect('/');
    }
    public function create(Request $request){
        $data=Item::where('id',$request->item)->first();
        return view('items.create',$data)->with(['data'=>$data]);
    }
    public function show(Item $item){
        return view('items.show')->with(['items'=>$item->getPaginateByLimit()]);
    }
    public function edit(Item $item){
        return view('items/edit')->with(['item'=>$item]);
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