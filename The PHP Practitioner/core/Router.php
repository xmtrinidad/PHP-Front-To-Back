<?php

class Router {

    protected $routes = [];

    public function define($routes) {
        $this->routes = $routes;
    }

    /**
     * @param $uri - the route uri
     * @return mixed - the route
     */
    public function direct($uri) {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

//        throw new Exception('No route defined for this URI.');
    }

    public static function load($file) {

        $router = new static;

        require $file;

        return $router;
    }

}