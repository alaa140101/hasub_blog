<form action="/posts/{{ $post->id }}/comments" method="post"> 
  @csrf 
  <div class="mb-3">
    <label for="name" class="form-label">الاسم</label>
    <input type="text" name="name" class="form-control" id="name">
  </div>
  <div class="mb-3">
    <label class="form-label" for="body">التعليق</label>
    <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">حفظ</button>
</form>