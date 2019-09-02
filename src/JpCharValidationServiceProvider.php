<?php

namespace Seasofthpyosithu\JpCharValidation;

use Illuminate\Support\ServiceProvider;
use Seasofthpyosithu\JpCharValidation\Rules\JpCharValidator;

class JpCharValidationServiceProvider extends ServiceProvider {

    public function boot()
    {
        \Validator::resolver(function($translator, $data, $rules, $messages)
        {
            return new JpCharValidator($translator, $data, $rules, $messages);
        });
    }

    public function register()
    {

    }

}


