<?php
namespace App\Utils;

class Utils
{
    static function getRate($post):float
    {
        $rate = 0;
        if ($post->reviews->count()){
            
            foreach ($post->reviews as $value) {
                $rate += $value->rate;
            }
            $rate = ceil($rate / $post->reviews->count());
        }
        

        return $rate;
    }
}