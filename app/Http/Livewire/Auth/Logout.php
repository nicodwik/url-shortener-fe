<?php

namespace App\Http\Livewire\Auth;

use App\Helpers\AuthAPIHelper;
use App\Helpers\HttpClientHelper;
use App\Http\Livewire\Auth;
use Livewire\Component;

class Logout extends Component
{
    public $user;

    public function mount() 
    {
        $resp = HttpClientHelper::init()
            ->withAuth()
            ->setAction('get')
            ->run('/api/v1/user');

        $this->user = $resp?->data;
    }

    public function logout() 
    {
        AuthAPIHelper::logout();
        return redirect('/login');
    }

    public function render()
    {
        return view('livewire.auth.logout');
    }
}
