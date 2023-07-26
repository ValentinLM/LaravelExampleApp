<?php

namespace App\Providers;

//use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

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
        //Aquí se modifica la url en español
        /*Route::resourceVerbs([
            'create' => 'crear',
            'edit' => 'editar',
        ]);
        */
    }
}
