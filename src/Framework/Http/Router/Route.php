<?php

class Route
{
    public function __construct(
        public       $name,
        public       $pattern,
        public       $handler,
        public array $methods,
        public array $tokens = []
    )
    {
    }
}