@extends('dash.base')
@section('title')
    Ajouter Un Produit | Admin
@endsection
@section('dash.main')
<div class="row justify-content-justify sub-danger">
    <h6 class="col align-self-center">Ajouter des Produits</h6>
    <a href="{{ route('produit.index') }}" role="button" class="btn btn-dark col col-auto"> <i
            class="mdi mdi-grid"></i> </a>
</div>
<form action="" method="POST" enctype="multipart/form-data" class="py-3">
    @csrf
    @if( $errors->any())
        <div class="alert alert-dismissible alert-danger" role="alert" id="liveAlert">
            <div class="msg-alert">
                @foreach($errors->all() as $error)
                    <small>{{ $error }}</small> <br>
                @endforeach
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if( session('status'))
        <div class="alert alert-dismissible alert-success" role="alert" id="OkliveAlert">
            <div class="msg-alert">
                <small> {{ session('status')}} </small>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    <div class="form-group my-2">
        <label for="libele_id" class="form-text">Product Name *</label>
        <input type="text" name="libele" id="libele_id" placeholder="Entrer le nom du Produit"
               class="form-control">
    </div>
    <div class="form-group my-2">
        <label for="cat_id" class="form-text">Category *</label>
        <select name="category_id" id="cat_id" class="form-select">
            <option value="default">SELECT ONE BRAND</option>
            @foreach ($categories as $item)
            <option value="{{ $item->id }}"> {{ $item->name }} </option>
            @endforeach
        </select>
    </div>
    <div class="row row-cols-2 my-2">
        <div class="form-group">
            <label for="price_id" class="form-text">Prix</label>
            <input type="number" name="price" id="price_id" min="100" placeholder="Entrer le prix unitaire"
                   class="form-control">
        </div>
        <div class="form-group">
            <label for="stock_id" class="form-text">Total en Stock</label>
            <input type="number" name="stock" id="stock_id" placeholder="Entrer le total disponible"
                   class="form-control">
        </div>
    </div>
    <div class="row row-cols-2 my-2">
        <div class="form-group">
            <label for="screen_id" class="form-text">Couverture *</label>
            <input type="file" name="screen" id="screen_id" class="form-control">
        </div>
        <div class="form-group">
            <label for="images_id" class="form-text">Images *</label>
            <input type="file" name="images[]" id="images_id" multiple accept="image/*" class="form-control">
        </div>
    </div>
    <div class="form-group my-2">
        <label for="desc_id" class="form-text">Description</label>
        <textarea name="desc" id="desc_id" cols="30" rows="6" class="form-control"></textarea>
    </div>
    <div class="my-3 row row-cols-4 text-center">
        <div class="input-group border-end w-25">
            <label for="is_special_id" class="m-0">Is Special ? *</label>
            <span class="form-check form-switch animate__animated animate__fadeInRight mx-2 my-0">
                <input type="checkbox" name="is_special" class="form-check-input" id="is_special_id">
            </span>
        </div>
        <div class="input-group border-end w-25">
            <label for="is_promote_id" class="m-0">In Promote ? *</label>
            <span class="form-check form-switch animate__animated animate__fadeInRight mx-2 my-0">
                <input type="checkbox" name="is_promote" id="is_promote_id" class="form-check-input" data-bs-toggle="collapse" data-bs-target="#promoteDetail">
            </span>
            <div class="collapse" id="promoteDetail">
                <div class="form-group my-2">
                    <label for="promote_until_id" class="form-text">Promote Until *</label>
                    <input type="date" name="promote_until" id="promote_until_id"
                           class="form-control">
                </div>
                <div class="form-group my-2">
                    <label for="new_price_id" class="form-text">Promote Priceb *</label>
                    <input type="number" name="new_price" id="new_price_id" placeholder="Entrer le prix en promotion"
                           class="form-control">
                </div>
            </div>
        </div>
        <div class="input-group border-end w-25">
            <label for="is_slideshow_id" class="m-0">Is SlidShow ? *</label>
            <span class="form-check form-switch animate__animated animate__fadeInRight mx-2 my-0">
                <input type="checkbox" name="is_slideshow" id="is_slideshow_id" class="form-check-input">
            </span>
        </div>
        <div class="input-group border-end w-25">
            <label for="as_banner_id" class="m-0">As Banner ? *</label>
            <span class="form-check form-switch animate__animated animate__fadeInRight mx-2 my-0">
                <input type="checkbox" name="as_banner" id="as_banner_id" class="form-check-input" data-bs-toggle="collapse" data-bs-target="#bannerDetail">
            </span>
            <div class="collapse" id="bannerDetail">
                <div class="form-group">
                    <label for="banner_position_id" class="form-text">Position</label>
                    <select name="banner_position" id="banner_position_id" class="form-select">
                        <option value="homeMain" selected>--Home--Main--</option>
                        <option value="homeLeft">--Home--Left--</option>
                        <option value="homeRight">--Home--Right--</option>
                        <option value="homeCenter">--Home--center--</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="py-2" id="specification-group">
        <div class="mt-3 d-flex justify-content-between">
            <h5>Specifications du Produit</h5>
            <button type="button" class="btn btn-dark" id="createMoreSpe"><i class="mdi mdi-plus-circle-outline"></i> </button>
        </div>
        <div class="input-group my-3 specification-item">
            <input type="text" name="key[]" class="form-control" placeholder="Clé">
            <button type="button" class="btn btn-outline-dark input-group-btn"><i class="mdi mdi-chevron-right-circle-outline"></i></button>
            <input type="text" name="value[]" class="form-control" placeholder="Valeur">
            <button type="button" class="btn btn-danger delSpForm"><i class="mdi mdi-trash-can"></i></button>
        </div>
    </div>
    <div class="form-group my-3 text-center">
        <button class="btn btn-success w-50 m-auto">Publié</button>
    </div>
</form>
@endsection
