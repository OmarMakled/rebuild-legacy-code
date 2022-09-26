<?php

namespace App\Services\Invoice\Types;

use DateTimeInterface;

interface InvoiceTypeInterface
{
    public function getBrutto(): float;

    public function getCurrentDate(): DateTimeInterface;

    public function getType(): string;

    public function getTotalPayment(): float;
}
