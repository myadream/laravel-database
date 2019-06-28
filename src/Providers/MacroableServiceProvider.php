<?php

namespace LittleSuperman\Database\Providers;

use Illuminate\Database\Schema\Blueprint as BlueprintSupport;
use LittleSuperman\Database\Schema\Blueprint;
use Illuminate\Support\ServiceProvider;

/**
 * Class MacroableServiceProvider
 *
 * @package LittleSuperman\Database\Providers
 */
class MacroableServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     * @throws \ReflectionException
     */
    public function boot(): void
    {
        BlueprintSupport::mixin($this->app->make(Blueprint::class));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
