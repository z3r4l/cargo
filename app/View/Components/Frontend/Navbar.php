<?php

namespace App\View\Components\Frontend;

use Illuminate\Support\Facades\Request;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data = [
            ['name' => 'Home',      'url' => '/',               'active'    => Request::is('/') ? 'active' : ''],
            ['name' => 'Service',   'url' => '/service',        'active'    => Request::is('service*') ? 'active' : ''],
            ['name' => 'Newst',     'url' => '/newst',           'active'    => Request::is('blog*') ? 'active' : ''],
            ['name' => 'Contact',   'url' => '/contact',        'active'    => Request::is('contact*') ? 'active' : ''],
        ];
        return view ('frontend.layouts.navbar', compact('data'));
    }
}
