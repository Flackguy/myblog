@extends('base')
@section('content')
    <div class="jumbotron">
        <h2 class="display-3 text-center">{{ $article->title }}</h2>
        <div class="d-flex justify-content-center">
            <p>{{ $article->content }}</p>
        </div>
        <div class="d-flex justify-content-center">
            <a class="btn btn-primary" href="{{ route('articles') }}"><i class="fas fa-arrow-left"></i>Retour</a>
        </div>
    </div>
@endsection
