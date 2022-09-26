<?php

namespace Test\Unit;

use App\Models\Invoice;
use DateTime;
use Test\Unit\TestCase;

class InvoiceTest extends TestCase
{
    public function testGetTotalPayment()
    {
        $invoice = new Invoice();
        $invoice->setTotalPayment(1000);

        $this->assertEquals(1000, $invoice->getTotalPayment());
    }

    public function testGetTotalTaxes()
    {
        $invoice = new Invoice();
        $invoice->setTotalTaxes(1000);

        $this->assertEquals(1000, $invoice->getTotalTaxes());
    }

    public function testGetGeneratedDate()
    {
        $dt = new DateTime();
        $invoice = new Invoice();
        $invoice->setGeneratedDate($dt);

        $this->assertEquals($invoice->getGeneratedDate(), $dt);
    }

    public function testGetMonthlyTaxesPct()
    {
        $invoice = new Invoice();
        $invoice->setMonthlyTaxesPct(13);

        $this->assertEquals(13, $invoice->getMonthlyTaxesPct());
    }

    public function testGetMeterReading()
    {
        $invoice = new Invoice();
        $invoice->setMeterReading(2564);

        $this->assertEquals(2564, $invoice->getMeterReading());
    }

    public function testGetTariffPricePerKwh()
    {
        $invoice = new Invoice();
        $invoice->setTariffPricePerKwh(0.028);

        $this->assertEquals(0.028, $invoice->getTariffPricePerKwh());
    }
}
