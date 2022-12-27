<?php

namespace App\View\Components;

use App\Utils\Utils;
use Illuminate\View\Component;

class ArticleUnique extends Component
{
    public $post;
    public $key;
    public $rate;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($post, $key = null)
    {
        $this->post = $post;
        $this->key = $key;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $this->rate = Utils::getRate($this->post);
        
        return view('components.article-unique');
    }
}
