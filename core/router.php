<?php

class router

{
public $routes = [

  'GET' => [],
  'POST' => []
];

public static function load($file)
{
  $router = new static;
  require $file;
  return $router;
}


  public function get($url, $controller)
  {
$this->routes['GET'][$url] = $controller;

  }

  public function post($url, $controller)
  {
$this->routes['POST'][$url] = $controller;

  }

  public function direct($url, $requestType)
    {

      if (array_key_exists($url, $this->routes[$requestType])) {
        return $this->routes[$requestType][$url];
      }

      throw new Exception('You aint going nowhere!');
    }

}
