<?php

namespace LittleSuperman\Database\Providers;

use Illuminate\Support\ServiceProvider;
use LittleSuperman\Database\Console\Migrations\MigrateMakeCommand;

/**
 * 控制台命令
 *
 * @package LittleSuperman\Database\Providers
 */
class ConsoleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerCommands();
    }

    /**
     * 注册命令
     *
     * @return void
     */
    protected function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MigrateMakeCommand::class
            ]);
        }
    }
}
