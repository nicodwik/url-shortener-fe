<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Helpers\AuthAPIHelper;

class Login extends Component
{
    public $email = '';
    public $password = '';
    public $remember_me = false;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function mount() {
        if(auth()->user()){
            redirect('/dashboard');
        }
        // $this->fill(['email' => 'user1@nerdproject.id', 'password' => 'password']);
    }

    public function login() {
        $credentials = $this->validate();

        $login = AuthAPIHelper::login($credentials);

        if (empty($login)) {
            return $this->addError('email', trans('auth.failed')); 
        }

        return redirect()->intended('/admin/dashboard');
    }

    public function render()
    {
        return view('livewire.auth.login_2');
    }
}
