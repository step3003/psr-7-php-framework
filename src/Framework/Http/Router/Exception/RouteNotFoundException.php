<?php

class RouteNotFoundException extends LogicException
{
    public function __construct(private $name, private readonly array $params)
    {
        parent::__construct('Matches not found');
    }

    public function getName()
    {
        return $this->name;
    }

    public function getParams(): array
    {
        return $this->params;
    }
}