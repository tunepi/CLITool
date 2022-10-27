<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\GitService;
use App\Repositories\GitRepository;
use App\Interfaces\GitInterface;

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
