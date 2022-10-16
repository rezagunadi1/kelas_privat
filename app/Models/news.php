<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;

    protected $table = 'news';
    protected $fillable = [
        'title', 'category', 'discription', 'created_by'
    ];
    public function images()
    {
     return $this->hasMany('App\Image', 'news_id');
    }
    public function user()
    {
     return $this->belongsTo('App\Models\Image', 'created_by');
    }
}
