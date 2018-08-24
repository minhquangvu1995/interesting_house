<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $models = [
            'User', 'Post'
        ];

        foreach ($models as $md) {
            $this->app->bind(
                'App\Repositories\\' . $md . 'RepositoryInterface',
                'App\Repositories\Eloquent\\' . $md . 'EloquentRepository'
            );
        }


    }
}
