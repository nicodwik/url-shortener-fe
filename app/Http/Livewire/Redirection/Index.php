<?php

namespace App\Http\Livewire\Redirection;

use App\Helpers\HttpClientHelper;
use App\Http\Livewire\BaseComponent;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $resp = HttpClientHelper::init()
            ->withAuth()
            ->setAction('get')
            ->run('/api/v1/user/redirections');

        $data = [
            'data' => $resp->data
        ];

        // dd($data);

        return view('livewire.redirection.index', $data);
    }
}
