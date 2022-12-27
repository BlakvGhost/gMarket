@extends('dash.base')
@section('title')
    Voir les Categories | Admin
@endsection
@section('dash.main')
<div class="row justify-content-justify sub-danger">
    <h6 class="col align-self-center">Voir des Categories</h6>
    <a href="{{ route('category.create') }}" role="button" class="btn btn-dark col col-auto"> <i
            class="mdi mdi-plus-circle"></i> </a>
</div>
<div class="my-4">
    @if( session('status'))
        <div class="alert alert-dismissible alert-success" role="alert" id="OkliveAlert">
            <div class="msg-alert">
                <small> {{ session('status')}} </small>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <form action="{{ route('category.destroy') }}" method="POST">
        @csrf
        <div class="my-3 text-end">
            <button type="submit" class="btn btn-danger">Supprimer les Categories Selectionner</button>
        </div>
        <h5 class="text-fv-primary my-2"> {{ $posts->count() }} Categories </h5>
        <ul class="list-group">
            @forelse ($posts as $post)
            <li class="list-group-item list-group-item-action">
                <input type="checkbox" name="{{ $post->id }}" class="form-check-input">
                <a href="{{ route('category.edit', $post) }}" class="text-decoration-none">{{ $post->name }}</a>
            </li>
            @empty
            <li class="list-group-item list-group-item-action">
                <a href="{{ route('category.create') }}">Publier un Categories</a>
            </li>
            @endforelse
        </ul>
    </form>
</div>
@endsection