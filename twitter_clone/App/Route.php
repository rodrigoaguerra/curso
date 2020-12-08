<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap
{
  protected function initRoutes()
  {
    $routes['home'] = array(
      'route' => '/',
      'controller' => 'IndexController',
      'action' => 'index'
    );

    $routes['inscreverse'] = array(
      'route' => '/inscreverse',
      'controller' => 'IndexController',
      'action' => 'inscreverse'
    );

    $routes['registrar'] = array(
      'route' => '/registrar',
      'controller' => 'IndexController',
      'action' => 'registrar'
    );

    $routes['autenticar'] = array(
      'route' => '/autenticar',
      'controller' => 'AuthController',
      'action' => 'autenticar'
    );

    $routes['timeline'] = array(
      'route' => '/timeline',
      'controller' => 'AppController',
      'action' => 'timeline'
    );

    $routes['sair'] = array(
      'route' => '/sair',
      'controller' => 'AuthController',
      'action' => 'sair'
    );

    $routes['tweet'] = array(
      'route' => '/tweet',
      'controller' => 'AppController',
      'action' => 'tweet'
    );

    $routes['remove_tweet'] = array(
      'route' => '/remove_tweet',
      'controller' => 'AppController',
      'action' => 'tweetRemove'
    );

    $routes['quem_seguir'] = array(
      'route' => '/quem_seguir',
      'controller' => 'AppController',
      'action' => 'quemSeguir'
    );

    $routes['acao'] = array(
      'route' => '/acao',
      'controller' => 'AppController',
      'action' => 'acao'
    );

    $this->setRoutes($routes);
  }
}

?>
