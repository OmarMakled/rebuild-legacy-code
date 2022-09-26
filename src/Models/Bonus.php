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

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return DateTimeInterface
     */
    public function getValidFrom(): DateTimeInterface
    {
        return $this->validFrom;
    }

    /**
     * @param DateTimeInterface $validFrom
     */
    public function setValidFrom(DateTimeInterface $validFrom): void
    {
        $this->validFrom = $validFrom;
    }

    /**
     * @return DateTimeInterface
     */
    public function getValidUntil(): DateTimeInterface
    {
        return $this->validUntil;
    }

    /**
     * @param DateTimeInterface $validUntil
     */
    public function setValidUntil(DateTimeInterface $validUntil): void
    {
        $this->validUntil = $validUntil;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @param float $value
     */
    public function setValue(float $value): void
    {
        $this->value = $value;
    }
}
