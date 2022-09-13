<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RateAndReview extends Model
{
    use HasFactory;
    protected $table = 'rate_and_reviews';
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
