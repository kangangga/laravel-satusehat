<?php

namespace Kangangga\Satusehat;

class Config
{
    /**
     * Client ID SATUSEHAT yang diberikan kepada sesuai organisasi anda
     * @var string $client_id
     */
    public string $client_id;

    /**
     * Client Secret SATUSEHAT yang diberikan kepada organisasi anda
     * @var string $client_secret
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
