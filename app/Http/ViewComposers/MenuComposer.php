<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;


class MenuComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $blogPosts;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */


    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        /*$json = file_get_contents('http://www.unleashgroup.io/news/wp-json/wp/v2/posts?per_page=1&_embed');

        $blogpost = json_decode($json, TRUE);
        $view->with('blogpost', $blogpost);*/
    }
}