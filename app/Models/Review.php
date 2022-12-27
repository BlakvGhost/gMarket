<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'rate', 'content'];

    public function user()
    {
        return $this->hasOne(User::class, 'id');
    }
    
}
