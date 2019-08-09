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
        'App\Ticket' => 'App\Policies\TicketPolicy',
        'App\Team'   => 'App\Policies\TeamPolicy',
        'App\Lead'   => 'App\Policies\LeadPolicy',
        'App\Idea'   => 'App\Policies\IdeaPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

// Fix auth for switch to Voyager for user management? (in progress):
// https://github.com/the-control-group/voyager/issues/3527#issuecomment-456096198
//         $user = Auth::user();
//      
//         if (! app()->runningInConsole()) {
//             $roles = Role::with('permission')->get();
// 
//             foreach ($roles as $role) {
//                 foreach ($role->permission as $permission) {
// 
//                     $permissionArray[$permission->title][] = $role->id;
//                 }
//             }
// 
//             foreach ($permissionArray as $title => $roles) {
//                 Gate::define($title, function (User $user) use ($roles) {
//                     return count(array_intersect($user->role->pluck('id')->toArray(), $roles));
//                 });
//             }
//         }
// 

//  This was the original auth gate for user admin:
//         Gate::define('see-admin', function ($user) {
//             return $user->admin;
//         });

// This is the amended auth gate for user admin:
        Gate::define('see-admin', 'App\Policies\UserPolicy@view');
    }
}
