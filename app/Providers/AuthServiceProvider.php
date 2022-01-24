<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define("su-access", function($user) {
            return $user->id == 1;
        }); 

        Gate::define("update-assign", function($user, $assignment) {
            return $assignment->assign_status_id == 1 && ($user->id == 1 || $assignment->user_created == $user->user_id);
        });
    }
}
