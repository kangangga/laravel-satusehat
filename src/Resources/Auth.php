<?php

namespace Kangangga\Satusehat\Resources;

use Kangangga\Satusehat\Http\Request;

class Auth
{
    private string $grant_type = 'client_credentials';

    public function __construct(
        protected Request $request
    ) {
    }

    public function generateToken()
    {
        // code...
    }

    public function setGrantType($grant_type)
    {
        $this->grant_type = $grant_type;

        return $this;
    }

    public function getGrantType()
    {
        return $this->grant_type;
    }
}
