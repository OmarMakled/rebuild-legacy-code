<?php

declare(strict_types=1);

namespace App\Services\Invoice\Types;

use DateTime;
use App\Models\Bonus;
use DateTimeInterface;
use App\Models\Invoice;

abstract class InvoiceType implements InvoiceTypeInterface
{
    public function __construct(protected Invoice $invoice, protected Bonus $bonus)
    {
    }

    public function getBrutto(): float
    {
        return $this->invoice->getMeterReading() * $this->invoice->getTariffPricePerKwh();
    }

    public function getCurrentDate(): DateTimeInterface
    {
        return new DateTime();
    }
}
