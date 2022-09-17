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
        return $this->belongsTo(User::class, 'user_id');
    }
    protected $table = 'posts';

    public function categories()
    {
        return $this->belongsTo('Category');
    }
    public function images()
    {
        return $this->hasMany(Image::class, 'post_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }
    // public function incrementReadCount()
    // {
    //   $this->reads++;
    //   return $this->update();
    // }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
