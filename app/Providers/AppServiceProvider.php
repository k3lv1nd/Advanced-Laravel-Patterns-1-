<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\repositories\EmployeeRepository;
use App\repositories\EmployeeRepositoryInterface;
use App\Factories\DepartmentFactory;
use PhpParser\Builder\Function_;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(EmployeeRepositoryInterface::class, EmployeeRepository::class);

        $this->app->bind('DepartmentFactory', function()
        {
            return new DepartmentFactory;

        });
    }
}
