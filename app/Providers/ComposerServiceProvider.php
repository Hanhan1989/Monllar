<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\Catalogo;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layout-frontal', function ($view) {
            $catalogoCategorias = Catalogo::with('categorias')->get();
            $view->with('catalogos', $catalogoCategorias);
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
