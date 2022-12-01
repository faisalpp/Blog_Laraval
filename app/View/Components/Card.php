<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{   
    public $title;
    public $slug;
    public $excerpt;
    public $image;
    public $category;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title,$slug='',$excerpt,$image,$category)
    {
        $this->title = $title;
        $this->slug = $slug;
        $this->excerpt = $excerpt;
        $this->image = $image;
        $this->category = $category;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
