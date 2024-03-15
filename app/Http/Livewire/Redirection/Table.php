<?php

namespace App\Http\Livewire\Redirection;

use App\Helpers\HttpClientHelper;
use App\Http\Livewire\BaseComponent;

class Table extends BaseComponent
{
    public $data;

    public function mount()
    {
        $resp = HttpClientHelper::init()
            ->withAuth()
            ->setAction('get')
            ->run('/api/v1/user/redirections');

        $this->data = $resp?->data;
    }

    public function render()
    {
        return view('livewire.redirection.table');
    }

    public function goToPage(int $page)
    {
        $resp = HttpClientHelper::init()
            ->withAuth()
            ->setAction('get')
            ->run('/api/v1/user/redirections', [
                'page' => $page
            ]);
        
        $this->data = $resp?->data;
    }
}
