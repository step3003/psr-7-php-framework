<?php

use Psr\Http\Server\RequestHandlerInterface;

class RequestNotMatchedException extends \LogicException
{
    public function __construct(private readonly RequestHandlerInterface $request)
    {
        parent::__construct('Matches not found');
    }

    public function getRequest(): RequestHandlerInterface
    {
        return $this->request;
    }
}