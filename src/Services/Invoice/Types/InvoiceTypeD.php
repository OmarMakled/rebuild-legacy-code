<?php

namespace App\Services\Invoice\Types;

class InvoiceTypeD extends InvoiceType
{
    public function getType(): string
    {
        return 'D';
    }

    public function getTotalPayment(): float
    {
        $brutto = $this->getBrutto();
        $currentDate = $this->getCurrentDate();

        if ($this->bonus->getValidFrom() <= $currentDate && $currentDate <= $this->bonus->getValidUntil()) {
            return $brutto + ($brutto * ($this->invoice->getMonthlyTaxesPct() - 8) / 100) - $this->bonus->getValue();
        }

        return $brutto + ($brutto * ($this->invoice->getMonthlyTaxesPct() - 8) / 100);
    }
}
