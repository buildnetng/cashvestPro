<?php

class Router
{
    private $routes = [];
    private $forbiddenDirectories = ['assets', 'src', 'views'];

    public function addRoute($uri, $filePath)
    {

        $uri = rtrim($uri, '/');
        $this->routes[$uri] = $filePath;
    }

    public function route($requestUri)
    {
   
        $requestUri = parse_url($requestUri, PHP_URL_PATH);
        $requestUri = rtrim($requestUri, '/');


        foreach ($this->forbiddenDirectories as $dir) {
            if ($this->isAccessingForbiddenDirectory($requestUri, $dir)) {
                $this->handleForbiddenAccess();
                return;
            }
        }


        if (array_key_exists($requestUri, $this->routes)) {
            require $this->routes[$requestUri];
        } else {
            $this->handleNotFound();
        }
    }

    private function isAccessingForbiddenDirectory($requestUri, $directory)
    {
        return preg_match("#^/{$directory}(/|$)#", $requestUri);
    }

    private function handleForbiddenAccess()
    {
        http_response_code(403);
        echo "<h1>403 Forbidden</h1><p>You are not allowed to access this directory.</p>";
        exit;
    }

    private function handleNotFound()
    {
        http_response_code(404);
        require 'src/views/404.php'; 
    }
}
