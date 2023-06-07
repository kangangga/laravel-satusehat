<?php

namespace Kangangga\Satusehat;

class Satusehat
{
    protected Config $config;

    public function setConfig(Config $config)
    {
        $this->config = $config;
    }

    public function getConfig()
    {
        return $this->config;
    }

    public function validateConfig()
    {
        $this->config->validate();
    }
}
