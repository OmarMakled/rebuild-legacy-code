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

        $this->assertEquals($invoice->getTotalPayment(), 1000);
    }

    public function testGetTotalTaxes()
    {
        $invoice = new Invoice();
        $invoice->setTotalTaxes(1000);

        $this->assertEquals($invoice->getTotalTaxes(), 1000);
    }

    public function testGetGeneratedDate()
    {
        $dt = new DateTime();
        $invoice = new Invoice();
        $invoice->setGeneratedDate($dt);

        $this->assertEquals($invoice->getGeneratedDate(), $dt);
    }

    public function testGetmonthlyTaxesPct()
    {
        $invoice = new Invoice();
        $invoice->setMonthlyTaxesPct(13);

        $this->assertEquals($invoice->getMonthlyTaxesPct(), 13);
    }

    public function testGetMeterReading()
    {
        $invoice = new Invoice();
        $invoice->setMeterReading(2564);

        $this->assertEquals($invoice->getMeterReading(), 2564);
    }

    public function testGetTariffPricePerKwh()
    {
        $invoice = new Invoice();
        $invoice->setTariffPricePerKwh(0.028);

        $this->assertEquals($invoice->getTariffPricePerKwh(), 0.028);
    }
}
