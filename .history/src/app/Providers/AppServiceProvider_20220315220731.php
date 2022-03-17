<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Requests\alpha_dash;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        alpha_dash::route(function ($translator, $data, $rules, $messages, $attributes) {
            return new CustomAlpha_dash($translator, $data, $rules, $messages, $attributes);
        });
    }
}
