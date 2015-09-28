<?php

namespace Infogram;

class SimpleRequest implements Request
{
    private $method;

    private $url;

    private $parameters;

    private $version;

    private $timeout;

    public function __construct($method, $url, $params, $timeout = 20)
    {
        $this->method = $method;
        $this->url = $url;
        $this->parameters = $params;
        $this->timeout = $timeout;
    }

    public function getTimeout()
    {
        return $this->timeout;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getParameters()
    {
        return $this->parameters;
    }

    public function setParameter($name, $value)
    {
        $this->parameters[$name] = $value;
    }
}
