<?php


namespace DDDUtilities\Domain\ValueObjects;

use InvalidArgumentException;
use Ramsey\Uuid\Uuid as RamseyUuid;

class Uuid
{
    protected string $value;

    public function __construct(string $value)
    {
        $this->ensureIsValidUuid($value);
        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }

    public function equals(Uuid $other): bool
    {
        return $this->value() === $other->value();
    }

    private function ensureIsValidUuid($id): void
    {
        if (!RamseyUuid::isValid($id)) {
            throw new InvalidArgumentException(sprintf('<%s> does not allow the value <%s>.', static::class, $id));
        }
    }

    public static function creator(): self
    {
        return new self(RamseyUuid::uuid4()->toString());
    }
}
