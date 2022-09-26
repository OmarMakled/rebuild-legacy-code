<?php

namespace App\Services\Invoice\Types;

use DateTimeInterface;

interface InvoiceTypeInterface
{
    /**
     * @return float
     */
    public function getBrutto(): float;

    /**
     * @return DateTimeInterface
     */
    public function getCurrentDate(): DateTimeInterface;

    /**
     * @return string
     */
    public function getType(): string;

    /**
     * @return float
     */
    public function getTotalPayment(): float;
}
