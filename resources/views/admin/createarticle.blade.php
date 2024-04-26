@extends('admin.base')

@section('admin.content')
<form method="POST" action="{{ route('storearticle') }}">
    @csrf
    <div class="form-group">
      <label for="articleTitle">Title</label>
      <input type="text" class="form-control" name="title" id="articleTitle" aria-describedby="titleHelp" placeholder="Enter title">
    </div>
    <div class="form-group">
      <label for="articleSubtitle">Subtitle</label>
      <input type="text" class="form-control" name="subtitle" id="articleSubtitle" placeholder="Enter subtitle">
    </div>
    <div class="form-group">
        <label for="articleContent">Content</label>
        <textarea class="form-control" name="content" id="articleContent" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
