<?php

declare(strict_types=1);

namespace App\Services\Invoice\Types;

use DateTime;
use App\Models\Bonus;
use DateTimeInterface;
use App\Models\Invoice;

abstract class InvoiceType implements InvoiceTypeInterface
{
    /**
     * @var Invoice
     */
    protected Invoice $invoice;

    /**
     * @var Bonus
     */
    protected Bonus $bonus;

    /**
     * @param Invoice $invoice
     * @param Bonus $bonus
     */
    public function __construct(Invoice $invoice, Bonus $bonus)
    {
        $this->invoice = $invoice;
        $this->bonus = $bonus;
    }

    /**
     * @inheritDoc
     */
    public function getBrutto(): float
    {
        return $this->invoice->getMeterReading() * $this->invoice->getTariffPricePerKwh();
    }

    /**
     * @inheritDoc
     */
    public function getCurrentDate(): DateTimeInterface
    {
        return new DateTime();
    }
}
