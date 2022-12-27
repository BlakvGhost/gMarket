<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'libele', 'price', 'category_id', 'is_special',
    'is_slideshow', 'is_promote', 'as_banner', 'banner_position', 'promote_until',
    'new_price', 'desc', 'cover', 'stock'];
    

    public function category()
    {
        return $this->hasOne(Category::class, 'id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id');
    }
    
    public function photos(): BelongsToMany
    {
        return $this->belongsToMany(Photo::class);
    }

    public function specifications(): BelongsToMany
    {
        return $this->belongsToMany(Specification::class);
    }

    public function reviews(): BelongsToMany
    {
        return $this->belongsToMany(Review::class);
    }

}
