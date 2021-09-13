<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Comment extends Component
{
    public $comments;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($comments)
    {
        $this->comments = $comments;
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
                <h2>التعليقات</h2>
                @if (count($comments) == 0)
                    <h4>لايوجد تعلقات </h4>
                @endif
                @foreach ($comments as $comment)            
                    <h4> {{ $comment->name }} </h4>
                    <p> {{ $comment->body }} </p>
                @endforeach
            </div>
blade;
    }
}
