<?php

namespace Kangangga\Satusehat\Http;

use Kangangga\Satusehat\Satusehat;

class Request
{
    public function __construct(
        protected Satusehat $satusehat
    ) {
    }

    public function auth()
    {
        return $this;
    }
}
