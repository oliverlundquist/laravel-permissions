<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Policies\PostPolicy;
use App\Policies\ClassifiedDocsPolicy;

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

        Gate::define('read-posts', PostPolicy::class . '@read');
        Gate::define('create-posts', PostPolicy::class . '@create');
        Gate::define('delete-posts', PostPolicy::class . '@delete');

        Gate::define('read-classified-documents', ClassifiedDocsPolicy::class . '@read');
    }
}
