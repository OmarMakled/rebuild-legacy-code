<?php

declare(strict_types=1);

namespace App\Services\Invoice\Types;

class InvoiceTypeC extends InvoiceType
{
    public function getType(): string
    {
        return 'C';
    }

    public function getTotalPayment(): float
    {
        $brutto = $this->getBrutto();
        $currentDate = $this->getCurrentDate();

        if ($this->bonus->getValidFrom() <= $currentDate && $currentDate <= $this->bonus->getValidUntil()) {
            return $brutto + ($brutto * ($this->invoice->getMonthlyTaxesPct() - 4) / 100) - $this->bonus->getValue();
        }

        return $brutto + ($brutto * ($this->invoice->getMonthlyTaxesPct() - 4) / 100);
    }
}
