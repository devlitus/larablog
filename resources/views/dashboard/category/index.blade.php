@extends('dashboard.master')
@section('content')
<a class="btn btn-outline-primary btn-sm mt-3 mb-3" href="{{route('category.create')}}">Crear</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Título</th>
            <th scope="col">Creación</th>
            <th scope="col">Actualización</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->title}}</td>
            <td>{{$category->created_at->format('d-M-Y')}}</td>
            <td>{{$category->updated_at->format('d-M-Y')}}</td>
            <td>
                <a href="{{route('category.show', $category->id)}}" class="btn btn-primary">Ver</a>
                <a href="{{route('category.edit', $category->id)}}" class="btn btn-primary">Actualizar</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="{{$category->id}}">Eliminar</button>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$categories ->links()}}
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
            <p>¿Seguro que quieres eliminar la categoria?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <form id="formDelete" method="POST" action="{{route('category.destroy',0)}}" data-action="{{route('category.destroy',0)}}">
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
            modalTitel.innerHTML =  ` Borrar la categoria ${id}`;
            let action = formDelete.getAttribute('data-action').slice(0, -1);
            action += id;
            formDelete.setAttribute('action', action);
        }
    });
  </script>
@endsection
