<?php

namespace Kangangga\Satusehat\Dto;

use Spatie\DataTransferObject\DataTransferObject;
use Spatie\DataTransferObject\Casters\DataTransferObjectCaster;
use Spatie\DataTransferObject\Attributes\CastWith;

#[CastWith(DataTransferObjectCaster::class)]
abstract class BaseDataTransferObject extends DataTransferObject
{
}
