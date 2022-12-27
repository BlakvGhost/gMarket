<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Review;
use App\Models\Produit;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Specification;
use App\Utils\Utils;
use Illuminate\Support\Facades\Auth;

class ProduitController extends Controller
{
    private function getRules(): array
    {
        return [
            'user_id' => 'required',
            'category_id' => 'required',
            'libele' => 'required',
            'price' => 'required|numeric|min:100',
            'stock' => 'required|numeric',
            'screen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
    private function getUpdateRules(): array
    {
        return [
            'category_id' => 'required',
            'libele' => 'required',
            'price' => 'required|numeric|min:100',
            'stock' => 'required|numeric',
            'screen' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dash.produits.index', [
            'posts' => Produit::all()->sortByDesc('id'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash.produits.add', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->getRules());
        $filename = str_replace([' ', '.', '*', ',', "'"] , '-', Str::lower($request->libele). '-' . date('Y-m-d-H-s-i'));

        $imageName = $request->file('screen')->storeAs('produits', $filename . '.' . $request->screen->extension(), 'public');

        $post = Produit::create(array_merge($request->post(), ['cover' => $imageName]));

        foreach ($request->post('key') as $key => $sp) {
            $post->specifications()->save(new Specification([
                'key' => $sp,
                'value' => $request->post('value')[$key],
            ]));
        }

        foreach ($request->file('images') as $key => $img) {

            $imageName = $img->storeAs('gallery', $filename . '-' . $key . '.' . $img->extension(), 'public');

            $post->photos()->save(new Photo([
                'cover' => $imageName,
                'description' => $request->libele,
            ]));
        }

        return back()->with('status', $post->libele . " publié avec sucess !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        $post = Produit::all()->where('category_id', '=', $produit->category_id)->take(10)->filter(fn ($value, $key) => $value->id != $produit->id);
        
        return view('product', [
            'post' => $produit,
            'similars' => $post,
            'rate' => Utils::getRate($produit),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        return view('dash.produits.edit', [
            'post' => $produit,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $produit)
    {
        $request->validate($this->getUpdateRules());

        $filename = str_replace([' ', '.', '*', ',', "'"] , '-', Str::lower($request->libele). '-' . date('Y-m-d-H-s-i'));

        $imageName = $produit->cover;

        if ($request->screen) {
            $imageName = $request->file('screen')->storeAs('produits', $filename . '.' . $request->screen->extension(), 'public');
        }
        
        $produit->update(array_merge($request->post(), ['cover' => $imageName]));

        $produit->specifications()->delete();
        
        foreach ($request->post('key') as $key => $sp) {
            $produit->specifications()->save(new Specification([
                'key' => $sp,
                'value' => $request->post('value')[$key],
            ]));
        }
        
        if ($request->images) {

            $produit->photos()->delete();

            foreach ($request->file('images') as $key => $img) {

                $imageName = $img->storeAs('gallery', $filename . '-' . $key . '.' . $img->extension(), 'public');
    
                $produit->photos()->save(new Photo([
                    'cover' => $imageName,
                    'description' => $request->libele,
                ]));
            }
        }

        return back()->with('status', $produit->libele . " Editer avec sucess !");
    }

    public function review(Request $request, Produit $produit)
    {
        $request->validate([
            'rate' => 'required',
        ]);

        $produit->reviews()->save(new Review(array_merge($request->post(), ['user_id' => Auth::user()->id])));

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $keys = $request->except('_token');
        foreach ($keys as $id => $key) {
            Produit::find($id)->delete();
        }
        
        return back()->with('status', count($keys) . " elements supprimés");
    }
}
