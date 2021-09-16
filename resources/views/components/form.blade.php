@csrf
  <div class="form-group">
    <label for="title">العنوان</label>
    <input type="text" name="title" id="title" class="form-control" value="{{ $post->title ?? '' }}">
  </div>
  
  <div class="form-group">
    <label for="body">النص</label>
    <textarea name="body" id="body" class="form-control" cols="30" rows="10">{{ $post->body ?? '' }}</textarea>
  </div>
  
  <div class="form-group mb-3">
    <label for="author">الكاتب</label>
    <input type="text" name="author" id="author" class="form-control" value="{{ $post->author ?? '' }}">
  </div>