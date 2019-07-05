<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FacadeTestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind( //サービスコンテナにバインド
            'FacadeTest', //キー名
            'App\Services\FacadeTest' //クラス名
        );
    }
}
