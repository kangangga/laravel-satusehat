<?php

namespace Kangangga\Satusehat\Dto\Patient;

use Kangangga\Satusehat\Dto\BaseDataTransferObject;

class MaritalStatus extends BaseDataTransferObject
{
    public ?array $coding;
    public ?string $text;
}
