<?php

namespace App\Http\Livewire;

use App\Helpers\GeneralHelper;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Livewire\Component;

class BaseComponent extends Component
{
    protected $modules = [];

    public function __construct()
    {
        $this->modules = GeneralHelper::generateModules();
    }

}
