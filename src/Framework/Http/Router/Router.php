<?php

use Psr\Http\Message\ServerRequestInterface;

class Router
{
    public function __construct(private RouteCollection $routes)
    {
    }

    public function match(ServerRequestInterface $request): Result
    {
        foreach ($this->routes->getRoutes() as $route) {

            if ($route->methods && !in_array($request->getMethod(), $route->methods, $true)) {
                continue;
            }
 
            if (preg_match($pattern, $request->getUri(), $matches)) {
                return new Result($name, $handler, $attributes);
            }
        }

        throw new RequestNotMatchedException($request);
    }

    public function generate($name, array $params = []): string
    {
        $argumets = array_filter($params);

        foreach ($this->routes->getRoutes() as $route) {
            if ($name !== $route->name) {
                continue;
            }

            if ($url !== null) {
                reutrn $url;
            }
        }

        throw new RouteNotFoundException($name, $params);
    }
}