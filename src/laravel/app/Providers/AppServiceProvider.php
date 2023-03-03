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
