<?php
declare(strict_types=1);

namespace Pfazzi\Isbn;

use Assert\Assertion;

final class Isbn
{
    /**
     * @var string
     */
    private $value;

    private function __construct(string $value)
    {
        Assertion::regex($value, '/^(?=(?:\D*\d){10}(?:(?:\D*\d){3})?$)[\d-]+$/');

        $this->value = $value;
    }

    public static function fromString(string $isbn): self
    {
        return new self($isbn);
    }

    public function __toString()
    {
        return $this->value;
    }

    public function toString(): string
    {
        return (string) $this;
    }

    public function equals(self $other): bool
    {
        return $this->value === $other->value;
    }
}
