<?php

namespace Kangangga\Satusehat\Dto\Patient;

use Kangangga\Satusehat\Dto\BaseDataTransferObject;


class PatientDTO extends BaseDataTransferObject
{
    public ?string $id;
    public ?BirthDate $_birthDate;
    public ?bool $active;
    public ?array $address;
    public ?string $birthDate;
    public ?array $communication;
    public ?array $contact;
    public ?bool $deceasedBoolean;
    public ?array $extension;
    public ?string $gender;
    public ?array $identifier;
    public ?MaritalStatus $maritalStatus;
    public ?Meta $meta;
    public ?bool $multipleBirthBoolean;
    public ?array $name;
    public ?string $resourceType;
    public ?array $telecom;
}
