<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Post extends Component
{
    public $post;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($post)
    {
        $this->post = $post;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
<div>
    <main class="container">
        <div class="row g-5">
          <div class="col-md-8">
      
            <div class="blog-post mb-3">
              <h2 class="blog-post-title">
                {{ $post->title }}
              </h2>
              <p class="blog-post-meta">
                بقلم {{ $post->author }}
                {{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
              </p>
              <p>
                {{ $post->body }}
              </p>
      
             
    </div>
blade;
    }
}
