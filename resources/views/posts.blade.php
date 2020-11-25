<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($posts as $post)
        <li>
            @if ($loop->first)
                Primero
            @elseif ($loop->last)
                Ultimo
            @else
                Medio
            @endif
            {{$post}}
        </li>
        @endforeach

        {{-- @forelse ($posts as $post)
            <li>{{$post}}</li>
        @empty
            <p>No hay ningun item</p>
        @endforelse --}}
    </ul>



</body>
</html>
