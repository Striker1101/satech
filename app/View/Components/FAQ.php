<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FAQ extends Component
{
     public array $ids;
     public array $faq;

     public function __construct($ids = [], $faq)
    {
        $this->ids = $ids;
        $this->faq = $faq;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.f-a-q');
    }
}
