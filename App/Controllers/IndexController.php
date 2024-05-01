<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action
{
    public function index()
    {
        $usuario = Container::getModel('usuario');
        $this->view->usuarios = $usuario->getUser();

        $this->render('index');
    }

    public function sobre()
    {
        $this->render('sobre');
    }
}