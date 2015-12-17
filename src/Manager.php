<?php

namespace Lulco\NetteAutoInject;

class Manager
{
    private $services = [];
    
    public function addService($service)
    {
        $this->services[] = $service;
        return $this;
    }
}
