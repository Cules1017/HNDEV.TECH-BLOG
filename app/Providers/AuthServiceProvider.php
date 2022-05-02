<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('category-list', function ($user) {
            return $user->checkPermission('list_category');
        });
        Gate::define('category-create', function ($user) {
            return $user->checkPermission('add_category');
        });
        Gate::define('category-edit', function ($user) {
            return $user->checkPermission('edit_category');
        });
        Gate::define('category-destroy', function ($user) {
            return $user->checkPermission('delete_category');
        });
        //MENU
        Gate::define('menu-list', function ($user) {
            return $user->checkPermission('list_menu');
        });
        Gate::define('menu-create', function ($user) {
            return $user->checkPermission('add_menu');
        });
        Gate::define('menu-edit', function ($user) {
            return $user->checkPermission('edit_menu');
        });
        Gate::define('menu-destroy', function ($user) {
            return $user->checkPermission('delete_menu');
        });

        //------------POST--------------
        Gate::define('post-list', function ($user) {
            return $user->checkPermission('list_post');
        });
        Gate::define('post-create', function ($user) {
            return $user->checkPermission('add_post');
        });
        Gate::define('post-edit', function ($user) {
            return $user->checkPermission('edit_post');
        });
        Gate::define('post-destroy', function ($user) {
            return $user->checkPermission('delete_post');
        });


        //--------------------slider-----------------
        Gate::define('slider-list', function ($user) {
            return $user->checkPermission('list_sider');
        });
        Gate::define('slider-create', function ($user) {
            return $user->checkPermission('add_sider');
        });
        Gate::define('slider-edit', function ($user) {
            return $user->checkPermission('edit_sider');
        });
        Gate::define('slider-destroy', function ($user) {
            return $user->checkPermission('delete_sider');
        });
        //--------------------setting-----------------
        Gate::define('setting-list', function ($user) {
            return $user->checkPermission('list_setting');
        });
        Gate::define('setting-create', function ($user) {
            return $user->checkPermission('add_setting');
        });
        Gate::define('setting-edit', function ($user) {
            return $user->checkPermission('edit_setting');
        });
        Gate::define('setting-destroy', function ($user) {
            return $user->checkPermission('delete_setting');
        });
        ///------------------------user------------------
        Gate::define('user-list', function ($user) {
            return $user->checkPermission('list_user');
        });
        Gate::define('user-create', function ($user) {
            return $user->checkPermission('add_user');
        });
        Gate::define('user-edit', function ($user) {
            return $user->checkPermission('edit_user');
        });
        Gate::define('user-destroy', function ($user) {
            return $user->checkPermission('delete_user');
        });
        ////-----------permission----------------
        Gate::define('permission-list', function ($user) {
            return $user->checkPermission('list_permission');
        });
        Gate::define('permission-create', function ($user) {
            return $user->checkPermission('add_permission');
        });
        Gate::define('permission-edit', function ($user) {
            return $user->checkPermission('edit_permission');
        });
        Gate::define('permission-destroy', function ($user) {
            return $user->checkPermission('delete_permission');
        });

    }
}
