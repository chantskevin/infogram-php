<?php

namespace Infogram;

interface Request
{
    public function getTimeout();

    public function getMethod();

    public function getUrl();

    public function getParameters();

    public function setParameter($name, $value);
}
