<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'category_id',
         'content',
         'tags',
          'published'
        ];

        protected $casts = [
            'tags' => 'array',
        ];

        public function category(){
            return $this->belongsTo(Categories::class);
        }
        public function authors(){
            return $this->belongsToMany(User::class,'post_user')->withTimestamps();
        }
}
