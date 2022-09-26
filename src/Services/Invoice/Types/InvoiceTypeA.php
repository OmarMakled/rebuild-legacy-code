<?php

declare(strict_types=1);

namespace App\Services\Invoice\Types;

class InvoiceTypeA extends InvoiceType implements InvoiceTypeInterface
{
    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return 'A';
    }

    /**
     * @inheritDoc
     */
    public function getTotalPayment(): float
    {
        $brutto = $this->getBrutto();
        $currentDate = $this->getCurrentDate();

        if ($this->bonus->getValidFrom() <= $currentDate && $currentDate <= $this->bonus->getValidUntil()) {
            return $brutto + ($brutto * $this->invoice->getMonthlyTaxesPct() / 100) - $this->bonus->getValue();
        }

        return $brutto + ($brutto * $this->invoice->getMonthlyTaxesPct() / 100);
    }
}
