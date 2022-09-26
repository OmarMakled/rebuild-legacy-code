<?php

namespace Test\Unit\Services\Invoice\Types;

use App\Models\Bonus;
use App\Models\Invoice;
use App\Services\Invoice\Types\InvoiceTypeA;
use Test\Unit\TestCase;

class InvoiceTypeATest extends TestCase
{
    public function testGetType()
    {
        $invoice = new InvoiceTypeA(new Invoice(), new Bonus());
        $this->assertEquals('A', $invoice->getType());
    }
}
