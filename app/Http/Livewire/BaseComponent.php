<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BaseComponent extends Component
{
    protected $modules = [
        'name' => __NAMESPACE__,
        'section' => __CLASS__,
    ];
}
