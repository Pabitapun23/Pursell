<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Image;

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
}
