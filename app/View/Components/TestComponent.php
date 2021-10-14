<?php

namespace App\View\Components;

use App\Enums\MyTestType;
use Illuminate\View\Component;

class TestComponent extends Component
{

    public MyTestType $hellowli;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->hellowli = new MyTestType('entry1');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.test-component');
    }
}
