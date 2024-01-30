<?php

namespace Core;

class App
{

    protected static $Container;
    public static function SetContainer($Container):void
    {
        static::$Container = $Container;
    }

    public static function Container()
    {
        return static::$Container;
    }

    public static function resolve($key)
    {
       return static::Container()->resolve($key);
    }

    public static function bind($key,$resolver)
    {
        static::Container()->bind($key,$resolver);
    }

}