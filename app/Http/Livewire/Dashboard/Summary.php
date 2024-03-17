<?php

namespace App\Http\Livewire\Dashboard;

use App\Helpers\HttpClientHelper;
use Livewire\Component;

class Summary extends Component
{
    public $summary;

    public function mount()
    {
        $resp = HttpClientHelper::init()
            ->withAuth()
            ->setAction('get')
            ->run('/api/v1/dashboard');

        // dd($resp);

        $this->summary = $resp?->data;
    }

    public function render()
    {
        return view('livewire.dashboard.summary');
    }
}
