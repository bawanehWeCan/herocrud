<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Spatie\Permission\Models\Role;
use App\Models\SchoolGrade;

class ViewServiceProvider extends ServiceProvider
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
        View::composer(['users.create', 'users.edit'], function ($view) {
            return $view->with(
                'roles',
                Role::select('id', 'name')->get()
            );
        });

        View::composer(['classrooms.create', 'classrooms.edit'], function ($view) {
            return $view->with(
                'schoolGrades',
                SchoolGrade::select('id', 'name')->get()
            );
        });


				View::composer(['subjects.create', 'subjects.edit'], function ($view) {
            return $view->with(
                'classrooms',
                \App\Models\Classroom::select('id', 'name')->get()
            );
        });

				View::composer(['units.create', 'units.edit'], function ($view) {
            return $view->with(
                'subjects',
                \App\Models\Subject::select('id', 'name')->get()
            );
        });

	}
}