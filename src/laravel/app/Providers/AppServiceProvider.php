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
        //サービスとインターフェイス・リポジトリを記載
        $this->app->bind(GitService::class);
        $this->app->bind(GitInterface::class, GitRepository::class);
        $this->app->bind(GitOptionService::class);
        $this->app->bind(GitOptionInterface::class, GitOptionRepository::class);
        $this->app->bind(UserService::class);
        $this->app->bind(UserInterface::class, UserRepository::class);
        $this->app->bind(UserFavoriteService::class);
        $this->app->bind(UserFavoriteInterface::class, UserFavoriteRepository::class);
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
