<?php

namespace Kangangga\Satusehat\Dto;

use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\DataTransferObjectCaster;
use Spatie\DataTransferObject\DataTransferObject;

#[CastWith(DataTransferObjectCaster::class)]
abstract class BaseDataTransferObject extends DataTransferObject
{
}
