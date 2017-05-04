<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repo\User\UserInterface;
use App\Repo\User\AdminRepository;
use App\Repo\User\UserRepository;
use App\Http\Controllers\User\AdminController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Product\ApiProductController;
class UserServiceProvider extends ServiceProvider
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
        $this->app->when(AdminController::class)
          ->needs(UserInterface::class)
          ->give(AdminRepository::class);

        $this->app->when(UserController::class)
          ->needs(UserInterface::class)
          ->give(UserRepository::class);

        $this->app->when(ApiProductController::class)
          ->needs(UserInterface::class)
          ->give(UserRepository::class);
    }
}
