<x-layout>
  <div class="container">

    <form action="/posts/{{$post->id}}" method="post">
      @method('PATCH')
      <x-form :post="$post"/>
      <button class="btn btn-warning mb-3">تعديل</button>
      
    </form>
  </div>
</x-layout>