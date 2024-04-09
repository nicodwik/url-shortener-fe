<?php

namespace App\Http\Livewire\User;

use App\Helpers\HttpClientHelper;
use App\Http\Livewire\BaseComponent;

class Profile extends BaseComponent
{
    public $user;

    public $password;

    public function mount()
    {
        $resp = HttpClientHelper::init()
            ->withAuth()
            ->setAction('get')
            ->run('/api/v1/user');

        $this->user = $resp?->data;
    }

    public function render()
    {
        return view('livewire.user.profile')
            ->with(['modules' => $this->modules]);
    }
}
