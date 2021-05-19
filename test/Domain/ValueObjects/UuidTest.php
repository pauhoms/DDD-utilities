<?php

namespace DDDUtilities\Tests\Domain\ValueObjects;

use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

final class UuidTest extends TestCase
{
    /**
     * @test
     */
    public function uuidShouldBeInvalid(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $uuid = new UuidObject("invalid");
    }

    /**
     * @test
     */
    public function uuidShouldBeCreated(): void
    {
        $uuid = UuidObject::creator();
        $this->assertNotNull($uuid);
    }

    /**
     * @test
     */
    public function uuidShouldBeValid(): void
    {
        $uuid = new UuidObject(UuidObject::creator()->value());

        $this->assertNotNull($uuid);
    }
}
