<?php

namespace App\Helpers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;

class GeneralHelper
{
    public static function generateModules()
    {
        $currentRouteName = Str::of(Route::currentRouteName())
            ->explode('.');

        // Ex: admin.redirection.manage = [admin = base module], [redirection = module name], [manage = module section]
        return (object) [
            'name' => $currentRouteName
                ->skip(1)
                ->takeUntil(fn ($e, $id) => $id >= ($currentRouteName->count() - 1))
                ->transform(fn ($e) => Str::ucfirst($e))
                ->implode(' '),
            'section' => $currentRouteName->last()
        ];
    }
}