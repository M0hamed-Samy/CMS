<?php

namespace App\Providers;

use App\Models\Blog;
use Illuminate\Support\Facades\View;

use App\Models\Service;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('services')) {
            $services = Service::all();
            View::share('services', $services);
        }

        if (Schema::hasTable('blogs')) {
            $blogs = Blog::all();
            $blogs_user = Blog::latest()->paginate(6);
            View::share('blogs_user', $blogs_user);
            $latest_blogs = Blog::latest()->take(2)->get();
            View::share('latest_blogs', $latest_blogs);
            View::share('blogs', $blogs);
        }
    }
}
