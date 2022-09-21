<?php

namespace App\Providers;


use App\Models\Category;
use App\Models\Innoweek;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Validator;


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
        Paginator::useBootstrap();

        // Validator::extend('email_or_phone', function ($attribute, $value, $parameters, $validator) {
        //     return
        //         $validator->validateRegex($attribute, $value, ['/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/']) ||
        //         $validator->validateEmail($attribute, $value, []);
        // });
        setlocale(LC_ALL, "UTF-8");
        //\Blade::setEchoFormat('e(utf8_encode(%s))');
        Carbon::setLocale(config('locale')); // sv
        View::share('innoweeks',Innoweek::first());

    }
}
