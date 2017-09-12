<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('blogpost_index', new Route(
    '/',
    array('_controller' => 'AppBundle:BlogPost:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('blogpost_show', new Route(
    '/{id}/show',
    array('_controller' => 'AppBundle:BlogPost:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('blogpost_new', new Route(
    '/new',
    array('_controller' => 'AppBundle:BlogPost:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('blogpost_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'AppBundle:BlogPost:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('blogpost_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'AppBundle:BlogPost:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
