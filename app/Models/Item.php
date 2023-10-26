<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Item extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public  function reviews(){
        return $this->hasMany(Review::class);
    }
    public function getByLimit(int $limit_count=5){
        return $this->orderBy('id','ASC')->limit($limit_count)->get();
    }
    public function getPaginateByLimit(int $limit_count=5){
        return $this::with('reviews')->orderBy('created_at','desc')->paginate($limit_count);
    }
    protected $fillable = [
        'name',
        'item_image',
        'market_name',
        'allergy',
        'category_id'
    ];
    protected $table = 'items';
}