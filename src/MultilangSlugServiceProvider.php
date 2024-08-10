<?php

namespace Shamim\DewanMultilangSlug;

use Illuminate\Support\ServiceProvider;

class MultilangSlugServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('multilang-slug', function($app){
            return new \Shamim\DewanMultilangSlug\MultilangSlug();
        });
        $this->mergeConfigFrom(
            __DIR__ . '/config/multilang-slug.php',
            'multilang-slug'
        );
    }
    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        // Publish the configuration file.
        $this->publishes([
            __DIR__ . '/config/multilang-slug.php' => config_path('multilang-slug.php'),
        ], 'dewan-multilang-slug-config');
    }
}
