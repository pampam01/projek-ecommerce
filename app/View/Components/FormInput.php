<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormInput extends Component
{
    /**
     * Create a new component instance.
     */

     public $forLabel;

     public $name; 

     public $value;

     public $type;

    public function __construct($forLabel, $name,$type="text", $value = null)
    {
        $this->forLabel = $forLabel;
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;

        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-input');
    }
}
