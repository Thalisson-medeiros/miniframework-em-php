<?php
//arquivo para configurar as rotas do framework

namespace App;
use MF\Init\Bootstrap;

class Routes extends Bootstrap
{
    protected function initRoutes(): void
    {
        $route['home'] = [
            'route' => '/',
            'controller' => 'IndexController',
            'action' => 'index'
        ];

        $route['sobre'] = [
            'route' => '/sobre',
            'controller' => 'IndexController',
            'action' => 'sobre'
        ];

        $this->setRoutes($route);
    }
}