<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

    <title>مرحبا بالعالم!</title>
  </head>
  <body>
    <div class="container p-3">
      <form action="/posts" method="post">
        @csrf
        <div class="form-group">
          <label for="title">العنوان</label>
          <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="form-group">
          <label for="body">النص</label>
          <textarea name="body" id="body" class="form-control" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group mb-3">
          <label for="author">الكاتب</label>
          <input type="text" name="author" id="author" class="form-control">
        </div>

        <button class="btn btn-primary">حفظ</button>

      </form>
    </div>
  </body>
</html>