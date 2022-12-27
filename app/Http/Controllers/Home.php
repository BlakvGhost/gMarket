<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Produit;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function dashboard()
    {
        return view('dash.default');
    }

    public function index()
    {
        return view('home', [
            'products' => Produit::all(),
            'carousel' => Produit::all()->where('is_slideshow', 'on')->sortByDesc('id'),
        ]);
    }

    public function cart()
    {
        return view('yourcart');
    }

    public function wishlist()
    {
        return view('wishlist');
    }

    public function shipping()
    {
        return view('selling-shipping');
    }


}
