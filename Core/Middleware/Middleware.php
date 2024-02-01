<?php

namespace Core\Middleware;

class Middleware
{
    const MAP = [
      'guest' => Guest::class,
      'auth' => Auth::class
    ];

    public static function resolve($key)
    {
        if(!$key){
            return;
        }

        $Middleware = static::MAP[$key] ?? false;

        if(!$Middleware) {
        throw new \Exception("Could not Find Middleware for key '{$key}'");
        }

        (new $Middleware())->handle();
    }
}