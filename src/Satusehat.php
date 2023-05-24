<?php

namespace Kangangga\Satusehat;

use Kangangga\Satusehat\Config;

class Satusehat
{
    public function __construct(
        protected Config $config
    ) {
    }
    public function get()
    {
        return $this;
    }
}
