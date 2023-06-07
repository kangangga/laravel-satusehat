<?php

namespace Kangangga\Satusehat;

use Kangangga\Satusehat\Exceptions\ConfigException;

class Config
{
    /**
     * Client ID SATUSEHAT yang diberikan kepada sesuai organisasi anda
     */
    public $client_id;

    /**
     * Client Secret SATUSEHAT yang diberikan kepada organisasi anda
     */
    public $client_secret;

    /**
     * Organization ID SATUSEHAT yang diberikan kepada organisasi anda
     */
    public $organization_id;

    public function __construct(
        $client_id = null,
        $client_secret = null,
        $organization_id = null
    ) {
        $this->client_id = $client_id;
        $this->client_secret = $client_secret;
        $this->organization_id = $organization_id;
    }

    public function getClientSecret()
    {
        return $this->client_secret;
    }

    public function setClientSecret($client_secret): static
    {
        $this->client_secret = $client_secret;

        return $this;
    }

    public function getClientId()
    {
        return $this->client_id;
    }

    public function setClientId($client_id): static
    {
        $this->client_id = $client_id;

        return $this;
    }

    public function getOrganizationId()
    {
        return $this->organization_id;
    }

    public function setOrganizationId($organization_id): static
    {
        $this->organization_id = $organization_id;

        return $this;
    }

    public static function make(
        $client_id = null,
        $client_secret = null,
        $organization_id = null
    ): static {
        return app(static::class, [
            'client_id' => $client_id,
            'client_secret' => $client_secret,
            'organization_id' => $organization_id,
        ]);
    }

    /**
     * validate function
     *
     * @throws \Kangangga\Satusehat\Exceptions\ConfigException
     */
    public function validate(): void
    {
        if (! $this->getClientId()) {
            throw new ConfigException('Client ID is not set');
        }

        if (! $this->getClientSecret()) {
            throw new ConfigException('Client Secret is not set');
        }

        if (! $this->getOrganizationId()) {
            throw new ConfigException('Organization ID is not set');
        }
    }
}
