<?php

declare(strict_types=1);

namespace App\Services\Invoice;

use App\Models\Bonus;
use App\Models\Invoice;
use App\Services\Invoice\Types\InvoiceTypeA;
use App\Services\Invoice\Types\InvoiceTypeB;
use App\Services\Invoice\Types\InvoiceTypeC;
use App\Services\Invoice\Types\InvoiceTypeD;
use App\Services\Invoice\Types\InvoiceTypeInterface;

class InvoiceFactory
{
    public function __construct(private readonly Invoice $invoice, private readonly Bonus $bonus)
    {
    }

    /**
     * Get invoice type.
     */
    public function getType(): InvoiceTypeInterface
    {
        if ($this->invoice->getMeterReading() <= 1500) {
            return new InvoiceTypeA($this->invoice, $this->bonus);
        }

        if ($this->invoice->getMeterReading() <= 2500) {
            return new InvoiceTypeB($this->invoice, $this->bonus);
        }

        if ($this->invoice->getMeterReading() <= 4000) {
            return new InvoiceTypeC($this->invoice, $this->bonus);
        }

        return new InvoiceTypeD($this->invoice, $this->bonus);
    }
}
