<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Image;
use App\Models\Comment;

class Post extends Model
{
  protected $guarded = [];
  use HasFactory;

  public function user()
  {
    return $this->belongsTo(User::class);
  }
  protected $table = 'posts';

  public function categories()
  {
    return $this->belongsTo('Category');
  }
  public function images()
  {
    return $this->hasMany(Image::class);
  }
  public function comments()
  {
    return $this->hasMany(Comment::class);
  }
  // public function incrementReadCount()
  // {
  //   $this->reads++;
  //   return $this->update();
  // }
}
