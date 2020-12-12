@extends('dashboard.master')
@section('content')
<a class="btn btn-outline-primary btn-sm mt-3 mb-3" href="{{route('posts.create')}}">Crear</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Título</th>
            <th scope="col">Categorias</th>
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
            <td>{{$post->category->title }}</td>
            <td>{{$post->posted}}</td>
            <td>{{$post->created_at->format('d-M-Y')}}</td>
            <td>{{$post->updated_at->format('d-M-Y')}}</td>
            <td>
                <a href="{{route('posts.show', $post->id)}}" class="btn btn-primary">Ver</a>
                <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary">Actualizar</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="{{$post->id}}">Eliminar</button>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$posts->links()}}
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p>¿Seguro que quieres eliminar el post?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <form id="formDelete" method="POST" action="{{route('posts.destroy',0)}}" data-action="{{route('posts.destroy',0)}}">
            @method('DELETE')
            @csrf
            <button id="delete" type="submit" class="btn btn-primary">Borrar</button>
        </form>
        </div>
      </div>
    </div>
  </div>
  <script>
    const modalTitel = document.querySelector('.modal-title');
    const btnDelete = document.querySelector('#delete');
    const formDelete = document.querySelector('#formDelete');
    addEventListener('click', function (event) {
        if(event.target.dataset.id != undefined) {
            const id = event.target.dataset.id;
            modalTitel.innerHTML =  ` Borrar el post ${id}`;
            let action = formDelete.getAttribute('data-action').slice(0, -1);
            action += id;
            formDelete.setAttribute('action', action);
        }
    });
  </script>
@endsection
