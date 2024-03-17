<?php

namespace App\Http\Livewire\User;

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
