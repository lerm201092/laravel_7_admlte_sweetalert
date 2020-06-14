<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardResumen extends Component
{
    public $title;
    public $value;
    public $bg;
    public $icon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = null, $value = null, $bg = null, $icon = null)
    {
        $this->title    = $title;
        $this->value    = $value;
        $this->bg       = $bg;
        $this->icon     = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.card-resumen');
    }
}
