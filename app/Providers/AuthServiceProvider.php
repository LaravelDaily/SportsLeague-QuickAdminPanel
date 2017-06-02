<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $user = \Auth::user();

        
        // Auth gates for: User management
        Gate::define('user_management_access', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Roles
        Gate::define('role_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Users
        Gate::define('user_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Teams
        Gate::define('team_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('team_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('team_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('team_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('team_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Players
        Gate::define('player_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('player_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('player_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('player_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('player_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Games
        Gate::define('game_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('game_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('game_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('game_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('game_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

    }
}
