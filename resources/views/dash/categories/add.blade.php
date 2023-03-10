@extends('dash.base')
@section('title')
    Ajouter Une Categorie | Admin
@endsection
@section('dash.main')
<div class="row justify-content-justify sub-danger">
    <h6 class="col align-self-center">Ajouter des Categories</h6>
    <a href="{{ route('category.index') }}" role="button" class="btn btn-dark col col-auto"> <i
            class="mdi mdi-grid"></i> </a>
</div>
<form action="" method="POST" class="py-3">
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

    <div class="form-group my-2">
        <label for="name_id" class="form-text">Nom *</label>
        <input type="text" name="name" id="name_id" placeholder="Entrer le nom de la categorie"
               class="form-control">
    </div>
    <div class="form-group my-3 text-center">
        <button class="btn btn-success w-50 m-auto">Publié</button>
    </div>
</form>
@endsection
