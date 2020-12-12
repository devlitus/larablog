@csrf
<div class="form-group">
    <label for="title">Título</label>
<input type="text" name="title" class="form-control" id="title"  placeholder="Entra un título" value="{{old('title', $post->title)}}">
</div>
<div class="form-group">
    <label for="url_clean">Url limpia</label>
    <input type="text" name="url_clean" class="form-control" id="url_clean"  value="{{old('url_clean', $post->url_clean)}}">
</div>
<div class="form-group">
    <label for="category_id">Categorías</label>
    <select class="form-control" name="category_id" id="category_id">
        @foreach ($categories as $title => $id)
            <option {{$post->category_id == $id ? 'selected="selected"' : ''}} value="{{$id}}">{{$title}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="posted">Publicado</label>
    <select class="form-control" name="posted" id="posted">
        @include('dashboard.partials.option-yes-not', ['val' => $post->posted])
    </select>
</div>
<div class="form-group">
    <label for="content">comentario</label>
    <textarea class="form-control" id="content" name="content" rows="3">{{old('content', $post->content)}}</textarea>
</div>
<input type="submit" class="btn btn-primary" value="Enviar">


