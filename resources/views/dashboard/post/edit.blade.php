@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-error')
<form action="{{route("posts.update", $post->id)}}" method="post">
    @method('PUT')
    @include('dashboard.post._form')
</form>
<br>
<form class="form-inline" action="{{route("post.image", $post)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-control">
        <input class="form-control-file" type="file" name="image" id="image" >
    </div>
    <input class="btn btn-primary ml-3" type="submit" value="Subir">
</form>
@endsection


