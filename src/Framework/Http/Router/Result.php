<?php

class Result
{
    public function __construct(private $name, private $handler, private array $attributes)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    /*
     * @return mixed
     */
    public function getHandler()
    {
        return $this->handler;
    }

    public function getAttributes(): array
    {
        return $this->attributes;
    }
}