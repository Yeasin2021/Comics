<?php 
namespace App\Repositories;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider{

    public function register(){


        //for front end only
        $this->app->bind(
            'App\Repositories\Frontend\FrontEndInterface',
            'App\Repositories\Frontend\FrontEndRepositories',
        );

        //for admin panel 

        $this->app->bind(
            'App\Repositories\SliderInterface',
            'App\Repositories\SliderRepositories',
        );
        $this->app->bind(
            'App\Repositories\AboutInterface',
            'App\Repositories\AboutRepository',
        );
        $this->app->bind(
            'App\Repositories\BlogInterface',
            'App\Repositories\BlogRepository',
        );
    }


}




