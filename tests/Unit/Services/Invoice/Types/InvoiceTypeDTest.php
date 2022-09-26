<?php

namespace Test\Unit\Services\Invoice\Types;

use App\Models\Bonus;
use App\Models\Invoice;
use App\Services\Invoice\Types\InvoiceTypeD;
use Test\Unit\TestCase;

class InvoiceTypeDTest extends TestCase
{
    public function testGetType()
    {
        $invoice = new InvoiceTypeD(new Invoice(), new Bonus());
        $this->assertEquals('D', $invoice->getType());
    }
}
