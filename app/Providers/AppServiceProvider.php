<?php

namespace App\Providers;

use App\Models\Students;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\pagination\paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('key', function () {
            return 'value';
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    
       view::share('title','ACCUMULATED BATCH PROCESSING AND INTEGRATED LIST ELECTRONIC DEVELOPMENT SYSTEM');
    //     view::composer('students.index', function($view) {
    //         $view->with('students', Students::all());
    // });


   
}

}