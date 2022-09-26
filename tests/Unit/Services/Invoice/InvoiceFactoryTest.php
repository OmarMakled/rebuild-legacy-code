<?php

namespace Test\Unit\Services\Invoice;

use App\Models\Bonus;
use App\Models\Invoice;
use Test\Unit\TestCase;
use App\Services\Invoice\InvoiceFactory;
use App\Services\Invoice\Types\InvoiceTypeA;
use App\Services\Invoice\Types\InvoiceTypeB;
use App\Services\Invoice\Types\InvoiceTypeC;
use App\Services\Invoice\Types\InvoiceTypeD;

class InvoiceFactoryTest extends TestCase
{
    public function testGetType()
    {
        $bonus = new Bonus();
        $invoice = new Invoice();

        $invoice->setMeterReading(1500);
        $this->assertInstanceOf(
            InvoiceTypeA::class,
            (new InvoiceFactory($invoice, $bonus))->getType()
        );

        $invoice->setMeterReading(2500);
        $this->assertInstanceOf(
            InvoiceTypeB::class,
            (new InvoiceFactory($invoice, $bonus))->getType()
        );

        $invoice->setMeterReading(4000);
        $this->assertInstanceOf(
            InvoiceTypeC::class,
            (new InvoiceFactory($invoice, $bonus))->getType()
        );

        $invoice->setMeterReading(5000);
        $this->assertInstanceOf(
            InvoiceTypeD::class,
            (new InvoiceFactory($invoice, $bonus))->getType()
        );
    }
}
