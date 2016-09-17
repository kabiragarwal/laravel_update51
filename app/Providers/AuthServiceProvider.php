<?php

namespace App\Providers;

use App\Permission;
use App\Article;
use App\Policies\ArticlePolicy;
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
         Article::class => ArticlePolicy::class,
        //'App\Model' => 'App\Policies\ArticlePolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
     public function boot() {

         $this->registerPolicies();

         foreach($this->getPermissions() as $permission){
             Gate::define($permission->name, function ($user) use($permission){
                 return $user->hasRole($permission->roles);
             });
         }

 //        $gate->define('show-articles', function($user, $article) {
 //             return $user->owns($article);
 //                    //return $user->id == $article->user_id;
 //        });
 //
        //  Gate::define('update-post', function ($user, $article) {
        //      //return $user->id == $post->user_id;
        //      return true;
        //  });
        //
        // Gate::define('update-articles', function($user, $article) {
        //     //return $user->owns($article);
        //     return true;
        // });
     }

     protected function getPermissions(){
         return Permission::with('roles')->get();
     }
}
