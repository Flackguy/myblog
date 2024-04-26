@extends('admin.base')
@section('admin.content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<h1>Liste des articles</h1>
<ul class="nav flex-column">
    @foreach($articles as $article)
    <li class="nav-item">
      <a class="nav-link active" href="{{ route('editarticle', $article->id) }}" style="display: inline">{{$article->title}}</a>
      <form action="{{ route('deletearticle', ['id' => $article->id]) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm" title="Delete">Delete</button>
    </form>
    </li>
    @endforeach
  </ul>
@endsection