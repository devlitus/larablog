@csrf
<div class="form-group">
    <label for="name">Nombre</label>
<input type="text" name="name" class="form-control" id="name"  placeholder="Escribe tu nombre" value="{{old('name', $user->name)}}">
</div>
<div class="form-group">
    <label for="email">Email</label>
<input type="email" name="email" class="form-control" id="email"  placeholder="Escribe tu correo" value="{{old('email', $user->email)}}">
</div>
@if ($pasw)
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password"  value="{{old('password', $user->password)}}">
    </div>

@endif
<input type="submit" class="btn btn-primary" value="Enviar">


