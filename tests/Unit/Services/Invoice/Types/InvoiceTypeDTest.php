<?php

namespace Test\Unit\Services\Invoice\Types;

use App\Models\Bonus;
use App\Models\Invoice;
use App\Services\Invoice\Types\InvoiceTypeD;
use DateTime;
use Test\Unit\TestCase;

class InvoiceTypeDTest extends TestCase
{
    public function testGetType()
    {
        $invoice = new InvoiceTypeD(new Invoice(), new Bonus());
        $this->assertEquals('D', $invoice->getType());
    }

    public function testGetTotalPayment()
    {
        $invoice = new Invoice();
        $bonus = new Bonus();
        $invoice->setMeterReading(5000);
        $invoice->setTariffPricePerKwh(0.028);
        $invoice->setMonthlyTaxesPct(13);

        $bonus->setValidFrom(new DateTime('2021-01-01'));
        $bonus->setValidUntil(new DateTime('2021-12-31'));
        $bonus->setValue(5);
        $this->assertEquals(147, (new InvoiceTypeD($invoice, $bonus))->getTotalPayment());

        $bonus->setValidFrom(new DateTime('2021-01-01'));
        $bonus->setValidUntil(new DateTime('2023-12-31'));
        $this->assertEquals(142, (new InvoiceTypeD($invoice, $bonus))->getTotalPayment());
    }
}
