<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ExperienceOne extends Component
{
    public array $ids;

     public function __construct($ids = [])
    {
        $this->ids = $ids;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.experience-one');
    }
}
