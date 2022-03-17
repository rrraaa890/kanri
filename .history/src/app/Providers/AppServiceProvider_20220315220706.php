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
        alpha_dash::routes(function ($translator, $data, $rules, $messages, $attributes) {
            return new CustomValidator($translator, $data, $rules, $messages, $attributes);
        });
    }
}
