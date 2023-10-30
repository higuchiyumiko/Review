<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'title',
        'body',
        'review_score',
        'updated_at',
        'created_at',
        'item_id',
        'user_id'
        ];
        protected $table='reviews';
        
        public function item(){
            return $this->belongsTo(Item::class);
        }
        public function user(){
            return $this->belongTo(User::class);
        }
        public function likes(){
            return $this->hasMany(Like::class);
        }
         public function getByLimit(int $limit_count=5){
            return $this->orderBy('updated_at','DESC')->limit($limit_count)->get();
        }
        public function getPaginateByLimit(int $limit_count=4){
            return $this->orderBy('updated_at','DESC')->paginate($limit_count);
        }
}