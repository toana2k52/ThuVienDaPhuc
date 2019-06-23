<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Models\Admin;
use App\Http\Models\Brand;
use App\Http\Models\Category;
use App\Http\Models\Order;
use App\Http\Models\Product;
use App\Models\Cart;
use View;
use Auth;
use App\User;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*',function($view){

            $view->with([
                'cats_all' => Category::all(),
                'brand' => Brand::all()
                // 'cats_all' => Category::orderBy('name','ASC')->get(),
            ]);
        });

        \Validator::extend('check_old_password', function($attribute,$value,$parameters,$validator){
            return \Hash::check($value, \Auth::user()->password);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
