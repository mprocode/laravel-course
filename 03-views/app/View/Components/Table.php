<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    private $captions;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($captions)
    {
        $this->captions = $captions;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.table', 
            ['captions' => $this->captions]
        );
    }
}
