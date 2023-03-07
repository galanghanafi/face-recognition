<?php

namespace App\Providers;

use App\Http\Controllers\Voyager\ContentTypes\MultipleImage as OverrideMultipleImage;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Http\Controllers\ContentTypes\MultipleImage;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $loader = AliasLoader::getInstance();
        $loader->alias(MultipleImage::class, OverrideMultipleImage::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
