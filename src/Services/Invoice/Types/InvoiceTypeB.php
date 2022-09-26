<?php

namespace App\Services\Invoice\Types;

class InvoiceTypeB extends InvoiceType
{
    public function getType(): string
    {
        return 'B';
    }

    public function getTotalPayment(): float
    {
        $brutto = $this->getBrutto();
        $currentDate = $this->getCurrentDate();
        if ($this->bonus->getValidFrom() <= $currentDate && $currentDate <= $this->bonus->getValidUntil()) {
            return $brutto + ($brutto * ($this->invoice->getMonthlyTaxesPct() - 2) / 100) - $this->bonus->getValue();
        }

        return $brutto + ($brutto * ($this->invoice->getMonthlyTaxesPct() - 2) / 100);
    }
}
