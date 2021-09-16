<x-layout>
  <div class="container">

    <form action="/posts/{{$post->id}}" method="post" class="mb-3">
      @method('PATCH')
      <x-form :post="$post"/>
      <button class="btn btn-warning">تعديل</button>

    </form>
  </div>
</x-layout>
