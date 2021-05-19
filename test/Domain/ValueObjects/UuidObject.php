<?php

namespace DDDUtilities\Tests\Domain\ValueObjects;

use DDDUtilities\Domain\ValueObjects\Uuid;

final class UuidObject extends Uuid
{
    public static function creator(): self
    {
        return new UuidObject($this->newUuid());
    }
}