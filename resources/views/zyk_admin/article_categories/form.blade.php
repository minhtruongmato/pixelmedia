{{ csrf_field() }}
<div class="form-group">
    <label for="title-vi">Tiêu đề (Tiếng Việt)</label>
    <input type="text" class="form-control input-title-vi" name="title_vi" placeholder="Tiêu đề tiếng việt" value="{{$title_vi}}">
</div>
<div class="form-group">
    <label for="title-en">Tiêu đề (Tiếng Anh)</label>
    <input type="text" class="form-control input-title-en" name="title_en" placeholder="Tiêu đề tiếng anh" value="{{$title_en}}">
</div>
<div class="form-group">
    <label for="slug">Slug</label>
    <input type="text" class="form-control input-title-slug" name="slug" placeholder="Slug" value="{{$slug}}">
</div>
