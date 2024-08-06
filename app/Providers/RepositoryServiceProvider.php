<?php

namespace App\Providers;
use App\Repository\StructureRepositoryInterface;
use App\Repository\Eloquent\StructureRepository;
use App\Repository\Eloquent\Repository;
use App\Repository\Eloquent\InfoRepository;
use App\Repository\Eloquent\UserRepository;
use App\Repository\RepositoryInterface;
use App\Repository\InfoRepositoryInterface;
use App\Repository\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(RepositoryInterface::class, Repository::class);
        $this->app->singleton(UserRepositoryInterface::class, UserRepository::class);
        $this->app->singleton(StructureRepositoryInterface::class, StructureRepository::class);
        $this->app->singleton(InfoRepositoryInterface::class, InfoRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
