@extends('web.master')
@section('content')
    <p>Hola desde index web</p>

    <div v-for="post in posts" class="card" style="width: 18rem; display:none">
        <img v-bind:src="'images/'+ post.image" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">@{{post.title}}</h5>
            <p class="card-text">@{{post.content}}</p>
          <a href="#" class="btn btn-primary">Ver mas</a>
        </div>
      </div>

      <list-post></list-post>

@endsection
