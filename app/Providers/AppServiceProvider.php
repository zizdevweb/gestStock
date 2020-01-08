<?php

namespace App\Providers;
use App\User;
use Illuminate\Support\Facades\Gate;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        Gate::define('admin',function(User $user){
            return $user->isAdmin();
            });
            Gate::define('menager', function(User $user){
            return $user->isManager();
            });
            Gate::define('commercial', function(User $user){
                return $user->isCommercial();
                });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        \Illuminate\Support\Facades\Schema::defaultStringLength(191);
        if(config('app.env') === 'production'){
            //\URL::forceSchema('https');
        }
    }
}
