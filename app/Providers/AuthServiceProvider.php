<?php

namespace App\Providers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot()
    {
        Validator::extend('min_eight_chars', function ($attribute, $value, $parameters, $validator) {
            return strlen($value) >= 8;
        });
    }
}
