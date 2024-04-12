<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Helpers\AuthAPIHelper;

class Register extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function register() {
        $credentials = $this->validate();

        $register = AuthAPIHelper::register($credentials);
        if (empty($register)) {
            return $this->addError('email', trans('auth.failed')); 
        }

        $login = AuthAPIHelper::login($credentials);
        if (empty($login)) {
            return $this->addError('email', trans('auth.failed')); 
        }

        return redirect()
            ->route('admin.dashboard')
            ->with(['toast-success' => 'Register successfully!']);
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
