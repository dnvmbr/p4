<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        \View::composer('*', function($view) {
            $allCourses = \App\Course::with('requirements')->orderBy('course_name','ASC')->get()->toArray();
            $view->with('user', \Auth::user())
            ->with('allCourses', $allCourses);

        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
