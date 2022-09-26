<?php

namespace Test\Unit\Services\Invoice\Types;

use App\Models\Bonus;
use App\Models\Invoice;
use App\Services\Invoice\Types\InvoiceTypeC;
use DateTime;
use Test\Unit\TestCase;

class InvoiceTypeCTest extends TestCase
{
    public function testGetType()
    {
        $invoiceType = new InvoiceTypeC(new Invoice(), new Bonus());
        $this->assertEquals('C', $invoiceType->getType());
    }

    public function testGetTotalPayment()
    {
        $invoice = new Invoice();
        $bonus = new Bonus();
        $invoice->setMeterReading(2564);
        $invoice->setTariffPricePerKwh(0.028);
        $invoice->setMonthlyTaxesPct(13);

        $bonus->setValidFrom(new DateTime('2021-01-01'));
        $bonus->setValidUntil(new DateTime('2021-12-31'));
        $bonus->setValue(5);
        $this->assertEquals(78.25328, (new InvoiceTypeC($invoice, $bonus))->getTotalPayment());

        $bonus->setValidFrom(new DateTime('2021-01-01'));
        $bonus->setValidUntil(new DateTime('2023-12-31'));
        $this->assertEquals(73.25328, (new InvoiceTypeC($invoice, $bonus))->getTotalPayment());
    }
}
