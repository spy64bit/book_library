<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Dialog extends Component
{
    /**
     * Create a new component instance.
     */
    public $id;

    public $title;

    public $icon;

    public function __construct($id, $title, $icon = 'bi bi-exclamation-circle')
    {
        $this->id = $id;
        $this->title = $title;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dialog');
    }
}
