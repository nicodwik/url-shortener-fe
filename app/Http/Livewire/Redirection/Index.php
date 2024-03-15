<?php

namespace App\Http\Livewire\Redirection;

use App\Http\Livewire\BaseComponent;

class Index extends BaseComponent
{
    public function render()
    {
        $data = [
            'modules' => $this->modules,
        ];

        return view('livewire.redirection.index')
            ->with($data);
    }
}
