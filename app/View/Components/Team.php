<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Team extends Component
{
    public array $ids;
    public array $teams;

    public function __construct($ids = [], $teams)
    {
        $this->ids = $ids;
        $this->teams = $teams;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.team');
    }
}
