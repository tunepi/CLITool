<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\GitService;
use App\Services\GitOptionService;
use App\Services\UserService;
use App\Services\UserFavoriteService;
use App\Repositories\GitRepository;
use App\Repositories\GitOptionRepository;
use App\Repositories\UserRepository;
use App\Repositories\UserFavoriteRepository;
use App\Interfaces\GitInterface;
use App\Interfaces\GitOptionInterface;
use App\Interfaces\UserInterface;
use App\Interfaces\UserFavoriteInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('GitService', GitService::class);
        $this->app->bind('GitOptionService', GitOptionService::class);
        $this->app->bind('UserService', UserService::class);
        $this->app->bind('UserFavoriteService', UserFavoriteService::class);
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
