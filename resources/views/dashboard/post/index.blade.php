@extends('dashboard.master')
@section('content')
<a class="btn btn-outline-primary btn-sm mt-3 mb-3" href="{{route('posts.create')}}">Crear</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Título</th>
            <th scope="col">Posteado</th>
            <th scope="col">Creación</th>
            <th scope="col">Actualización</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->posted}}</td>
            <td>{{$post->created_at->format('d-M-Y')}}</td>
            <td>{{$post->updated_at->format('d-M-Y')}}</td>
            <td>
                <a href="{{route('posts.show', $post->id)}}" class="btn btn-primary">Ver</a>
                <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary">Actualizar</a>
                <form method="POST" action="{{route('posts.destroy', $post->id)}}">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$posts->links()}}

{{-- <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li></li>
    </ul>
  </nav> --}}
@endsection
