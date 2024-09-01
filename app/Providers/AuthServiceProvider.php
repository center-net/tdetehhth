<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\GeneralSetting;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Permission;
use App\Models\Role;
use App\Models\Treasurie;
use App\Models\User;
use App\Policies\GeneralSettingPolicy;
use App\Policies\PermissionPolicy;
use App\Policies\RolePolicy;
use App\Policies\TreasuriePolicy;
use App\Policies\UserPolicy;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Permission::class       => PermissionPolicy::class,
        Role::class             => RolePolicy::class,
        User::class             => UserPolicy::class,
        GeneralSetting::class   =>GeneralSettingPolicy::class,
        Treasurie::class        =>TreasuriePolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('browse_admin', fn(User $user) => $user->hasPermission('browse_admin'));
        Gate::define('browse_admin', fn(User $user) => $user->hasPermission('browse_cashier'));
        Gate::define('administrator', fn(User $user) => $user->hasPermission('administrator'));
        Gate::define('banned', fn(User $user) => $user->hasPermission('banned'));
    }
}
