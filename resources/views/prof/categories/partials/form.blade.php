<label for="">Статус</label>
<select class="form-control" name="published">
  @if (isset($category->id))
    <option value="0" @if ($category->published == 0) selected="" @endif>Не опубликовано</option>
    <option value="1" @if ($category->published == 1) selected="" @endif>Опубликовано</option>
  @else
    <option value="0">Не опубликовано</option>
    <option value="1">Опубликовано</option>
  @endif
</select>

<label for="">Наименование</label>
<input type="text" name="title" class="form-control" placeholder="Заголовок категории" value="{{$category->title or ""}}" required>

<label for="">Slug</label>
<input type="text" class="form-control" name="slug" placeholder="Автоматическая генерация" value="{{$category->slug or ""}}" readonly="">

<label for="">Родительская категория</label>
<select class="form-control" name="parent_id">
  <option value="0">-- без родительской категории --</option>
  @include('prof.categories.partials.categories', ['categories' => $categories])
</select>

<hr />

<input type="submit" class="btn btn-primary" value="Сохранить">
