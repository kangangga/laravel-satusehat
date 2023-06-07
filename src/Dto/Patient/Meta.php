<?php

namespace Kangangga\Satusehat\Dto\Patient;

use Kangangga\Satusehat\Dto\BaseDataTransferObject;

class Meta extends BaseDataTransferObject
{
    public ?array $profile;

    public ?string $versionId;

    public ?string $lastUpdated;
}
