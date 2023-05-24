<?php

namespace Kangangga\Satusehat;

class Config
{
    /**
     * Client ID SATUSEHAT yang diberikan kepada sesuai organisasi anda
     */
    public string $client_id;

    /**
     * Client Secret SATUSEHAT yang diberikan kepada organisasi anda
     */
    public string $client_secret;

    public function __construct(
        string $client_id,
        string $client_secret,
    ) {
        $this->client_id = $client_id;
        $this->client_secret = $client_secret;
    }
}
