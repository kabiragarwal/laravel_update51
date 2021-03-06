<?php

namespace App\Policies;

use App\User;
use App\Article;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArticlePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, Article $article){
        return $user->owns($article);
        // dump($user->owns($article));
        // return true;
    }

    public function show(User $user, Article $article){
        return $user->owns($article);
        // dump($user->owns($article));
        // return true;
    }
}
