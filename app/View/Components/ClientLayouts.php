<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ClientLayouts extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    
    public $title;
    public function __construct($title = null)
    {
        $this->title = "PT.Elza Pratama Cargo | $title" ?? "PT.ELza Pratama Cargo";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('frontend.layouts.index');
    }
}
