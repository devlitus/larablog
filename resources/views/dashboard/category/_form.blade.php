@csrf
<div class="form-group">
    <label for="title">Título</label>
<input type="text" name="title" class="form-control" id="title"  placeholder="Entra un título" value="{{old('title', $category->title)}}">
</div>
<div class="form-group">
    <label for="url_clean">Url limpia</label>
    <input type="text" name="url_clean" class="form-control" id="url_clean"  value="{{old('url_clean', $category->url_clean)}}">
</div>
<input type="submit" class="btn btn-primary" value="Enviar">


