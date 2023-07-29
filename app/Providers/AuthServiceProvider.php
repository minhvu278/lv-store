<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        $this->setGates();
    }

    private function setGates()
    {
        Gate::define('admin', function (User $user) {
            return $user->isAdmin();
        });

        Gate::define('user', function (User $user) {
            return $user->isUser();
        });
    }
}
