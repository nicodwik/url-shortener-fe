<?php

namespace App\Http\Livewire\Redirection;

use App\Helpers\HttpClientHelper;
use App\Http\Livewire\BaseComponent;

class Create extends BaseComponent
{
    public string $long_url;

    public function render()
    {
        return view('livewire.redirection.create')
            ->with(['modules' => $this->modules]);
    }

    public function save()
    {
        $validated = $this->validate([ 
            'long_url' => 'required|url',
        ]);

        $resp = HttpClientHelper::init()
            ->withAuth()
            ->setAction('post')
            ->run('/api/v1/redirection/insert', $validated);

        if (! empty($resp?->data)) {
            session()->flash('toast-success', 'links successcully created!');

            return $this->redirect('/admin/redirection', true);
        }
        
    }
}
