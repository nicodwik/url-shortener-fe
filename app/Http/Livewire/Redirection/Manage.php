<?php

namespace App\Http\Livewire\Redirection;

use App\Http\Livewire\BaseComponent;

class Manage extends BaseComponent
{
    public function render()
    {
        $data = [
            'modules' => $this->modules,
        ];

        return view('livewire.redirection.manage')
            ->with($data);
    }
}
