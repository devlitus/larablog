@extends('dashboard.master')
@section('content')
    <div class="form-group">
        <label for="name">Nombre</label>
    <input readonly type="text" name="name" class="form-control" id="name"  placeholder="Entra un nombre" value="{{$user->name}}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input readonly type="email" name="email" class="form-control" id="email"  value="{{$user->email}}">
    </div>
@endsection
