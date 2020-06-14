<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Titulo extends Component
{
    public $title;
    public $ruta;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = null, $ruta = null)
    {
        $this->title    = $title;
        $this->ruta    = $ruta;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.titulo');
    }
}
