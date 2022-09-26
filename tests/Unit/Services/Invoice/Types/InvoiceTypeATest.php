<?php

namespace Test\Unit\Services\Invoice\Types;

use App\Models\Bonus;
use App\Models\Invoice;
use App\Services\Invoice\Types\InvoiceTypeA;
use DateTime;
use Test\Unit\TestCase;

class InvoiceTypeATest extends TestCase
{
    public function testGetType()
    {
        $invoiceType = new InvoiceTypeA(new Invoice(), new Bonus());
        $this->assertEquals('A', $invoiceType->getType());
    }

    public function testGetTotalPayment()
    {
        $invoice = new Invoice();
        $bonus = new Bonus();
        $invoice->setMeterReading(1500);
        $invoice->setTariffPricePerKwh(0.028);
        $invoice->setMonthlyTaxesPct(13);

        $bonus->setValidFrom(new DateTime('2021-01-01'));
        $bonus->setValidUntil(new DateTime('2021-12-31'));
        $bonus->setValue(5);
        $this->assertEquals(47.46, (new InvoiceTypeA($invoice, $bonus))->getTotalPayment());

        $bonus->setValidFrom(new DateTime('2021-01-01'));
        $bonus->setValidUntil(new DateTime('2023-12-31'));
        $this->assertEquals(42.46, (new InvoiceTypeA($invoice, $bonus))->getTotalPayment());
    }
}
