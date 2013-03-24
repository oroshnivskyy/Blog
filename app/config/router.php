<?
/**
 * @link http://docs.phalconphp.com/en/0.9.0/reference/routing.html#annotations-router
 */
$router = new \Phalcon\Mvc\Router\Annotations();
$router->setDefaultController("index");
$router->setDefaultAction("index");
$router->addResource('Test', '/api/products');

return $router;
