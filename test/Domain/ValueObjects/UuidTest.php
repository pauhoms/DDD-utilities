<?php

namespace DDDUtilities\Tests\Domain\ValueObjects;

use PHPUnit\Framework\TestCase;
use DDDUtilities\Domain\ValueObjects\Uuid;
use InvalidArgumentException;

final class UuidTest extends TestCase
{
    /**
     * @test
     */
    public function uuidShouldBeInvalid(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $uuid = new Uuid("invalid");
    }

    /**
     * @test
     */
    public function uuidShouldBeCreated(): void
    {
        $uuid = Uuid::creator();
        $this->assertNotNull($uuid);
    }

    /**
     * @test
     */
    public function uuidShouldBeValid(): void
    {
        $uuid = new Uuid(Uuid::creator()->value());

        $this->assertNotNull($uuid);
    }
}