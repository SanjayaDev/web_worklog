<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputText extends Component
{
    public $label, $name, $required, $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $name, $required = "", $value = "")
    {
        $this->label = $label;
        $this->name = $name;
        $this->required = $required;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-text');
    }
}
