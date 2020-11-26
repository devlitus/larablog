@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-error')
    <form action="{{route("posts.store")}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" class="form-control" id="title"  placeholder="Entra un título">
            @error('title')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="url_clean">Url limpia</label>
            <input type="text" name="url_clean" class="form-control" id="url_clean" >
        </div>
        <div class="form-group">
            <label for="content">comentario</label>
            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
            @error('content')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <input type="submit" class="btn btn-primary" value="Enviar">
    </form>
@endsection
