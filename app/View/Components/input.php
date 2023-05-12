<?php

namespace App\View\Components;

use Illuminate\View\Component;

class input extends Component
{
  
  public $type;
  public $name;
  public $label;
  public $placeholder;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type,$name,$label,$placeholder)
    {
        $this->label=$label;
        $this->type=$type;
        $this->name=$name;
        $this->placeholder=$placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
