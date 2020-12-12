@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-error')
<form action="{{route("posts.store")}}" method="post">
    @include('dashboard.post._form')
</form>
@endsection
