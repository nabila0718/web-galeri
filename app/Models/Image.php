<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
   use HasFactory;

   protected $fillable = [
    'gallery_id',
    'file',
    'title',
   ];

   public function gallery()
   {
      return $this->belongsTo(Gallery::class);
   }
   public function post()
   {
       return $this->belongsTo(Post::class);
   }
}