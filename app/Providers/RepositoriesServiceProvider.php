<?php

namespace App\Providers;

use App\Repository\Book\BookRepositoryInterface;
use App\Repository\Book\EloquentBookRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(BookRepositoryInterface::class , EloquentBookRepository::class);
    }
}
