<?php

namespace Kangangga\Satusehat;

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
