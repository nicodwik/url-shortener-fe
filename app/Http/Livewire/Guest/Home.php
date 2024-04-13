<?php

namespace App\Http\Livewire\Guest;

use App\Helpers\AuthAPIHelper;
use App\Helpers\HttpClientHelper;
use Illuminate\Support\Facades\Cookie;
use Livewire\Component;

class Home extends Component
{
    public string $long_url = '';

    protected $rules = [
        'long_url' => 'required|url',
    ];

    public function render()
    {
        return view('livewire.guest.home');
    }

    public function createRedirection()
    {
        $accessToken = null;
        if (! AuthAPIHelper::isLoggedIn()) {

            // REGISTER
            $faker = fake();
            $dataRegister = [
                'email' => $faker->email(),
                'name' => $faker->name(),
                'password' => 'password'
            ];
        
            $respRegister = AuthAPIHelper::register($dataRegister);
            if (empty($respRegister)) {
                $this->addError('long_url', trans('auth.failed')); 
            }
            
            // LOGIN
            $dataLogin = [
                'email' => $dataRegister['email'],
                'password' => $dataRegister['password']
            ];

            $respLogin = AuthAPIHelper::login($dataLogin);
            if (empty($respLogin)) {
                $this->addError('long_url', trans('auth.failed')); 
            }
            $accessToken = $respLogin?->data?->access_token;
        }

        // CREATE REDIRECTION
        $respCreate = HttpClientHelper::init()
            ->withAuth($accessToken)
            ->setAction('post')
            ->run('/api/v1/redirection/insert', [
                'long_url' => $this->long_url
            ]);
        
        if ($respCreate?->status != 'success') {
            $this->addError('long_url', trans('auth.failed')); 
        }

        return redirect()
            ->route('admin.redirection.manage')
            ->with(['toast-success' => 'Short URL Succesfully created']);
    }
}
