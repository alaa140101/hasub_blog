@csrf
  <div class="form-group">
    <label for="title">العنوان</label>
    <input type="text" name="title" id="title" class="form-control" value="{{ $post->title ?? '' }}">
    @error('title')
    <div class="alert alert-danger mt-1">
        <strong>{{ $message }}</strong>
      </div>
    @enderror
  </div>

  <div class="form-group">
    <label for="body">النص</label>
    <textarea name="body" id="body" class="form-control" cols="30" rows="10">{{ $post->body ?? '' }}</textarea>
    @error('body')
    <div class="alert alert-danger mt-1">
        <strong>{{ $message }}</strong>
      </div>
    @enderror
  </div>

  <div class="form-group mb-3">
    <label for="author">الكاتب</label>
    <input type="text" name="author" id="author" class="form-control" value="{{ $post->author ?? '' }}">
    @error('author')
    <div class="alert alert-danger mt-1">
        <strong>{{ $message }}</strong>
      </div>
    @enderror
  </div>
