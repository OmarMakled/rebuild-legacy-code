<?php

declare(strict_types=1);

namespace App\Models;

use DateTimeInterface;

class Bonus
{
    /**
     * @var string
     */
    private string $id;

    /**
     * @var DateTimeInterface
     */
    private DateTimeInterface $validFrom;

    /**
     * @var DateTimeInterface
     */
    private DateTimeInterface $validUntil;

    /**
     * @var float
     */
    private float $value;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getValidFrom(): DateTimeInterface
    {
        return $this->validFrom;
    }

    public function setValidFrom(DateTimeInterface $validFrom): void
    {
        $this->validFrom = $validFrom;
    }

    public function getValidUntil(): DateTimeInterface
    {
        return $this->validUntil;
    }

    public function setValidUntil(DateTimeInterface $validUntil): void
    {
        $this->validUntil = $validUntil;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function setValue(float $value): void
    {
        $this->value = $value;
    }
}
