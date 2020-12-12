@extends('dashboard.master')
@section('content')
    {{-- @csrf --}}
    <div class="form-group">
        <label for="title">Título</label>
    <input readonly type="text" name="title" class="form-control" id="title"  placeholder="Entra un título" value="{{$post->title}}">
    </div>
    <div class="form-group">
        <label for="url_clean">Url limpia</label>
        <input readonly type="text" name="url_clean" class="form-control" id="url_clean"  value="{{$post->url_clean}}">
    </div>
    <div class="form-group">
        <label for="content">comentario</label>
        <textarea readonly class="form-control" id="content" name="content" rows="3">{{$post->content}}</textarea>
    </div>
@endsection
