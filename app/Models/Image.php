<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images';
    protected $fillable = [
     'url', 'news_id'
    ];
  public function news()
  {
    return $this->belongsTo('App\Models\news', 'news_id');
  }
}
