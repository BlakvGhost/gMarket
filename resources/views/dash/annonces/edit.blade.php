@extends('dash.base')
@section('title')
    {{ $post->title }} | Admin
@endsection
@section('dash.main')
<div class="row justify-content-justify sub-danger">
    <h6 class="col align-self-center">{{ $post->title }}</h6>
    <a href="{{ route('produit.index') }}" role="button" class="btn btn-dark col col-auto"><i
            class="mdi mdi-grid"></i> </a>
</div>
<form action="{{ route('produit.update', $post) }}" method="POST" class="py-3">
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
        <label for="title_id" class="form-text">Titre *</label>
        <input type="text" name="title" id="title_id" placeholder="Entrer le titre de l'annonce"
               class="form-control" value="{{ $post->title }}">
    </div>
    <div class="form-group my-2">
        <label for="cat_id" class="form-text">Category *</label>
        <select name="category_id" id="cat_id" class="form-select">
            <option value="default">SELECT ONE BRAND</option>
            @foreach ($categories as $item)
            <option {{ $post->category_id === $item->id ? 'selected': null }} value="{{ $item->id }}"> {{ $item->name }} </option>
            @endforeach
        </select>
    </div>
    <div class="form-group my-2">
        <label for="del_after_id" class="form-text">Date jusqu'à laquel il sera visible *</label>
        <input type="date" name="del_after" id="del_after_id" class="form-control" value="{{ $post->del_after }}">
    </div>
    <div class="form-group my-2">
        <label for="editor" class="form-text">Description</label>
        <textarea name="desc" id="editor" cols="30" rows="6" class="form-control">
            {{ $post->desc }}
        </textarea>
    </div>
    <div class="form-group my-3 text-center">
        <button class="btn btn-success w-50 m-auto">Edité</button>
    </div>
</form>

@endsection