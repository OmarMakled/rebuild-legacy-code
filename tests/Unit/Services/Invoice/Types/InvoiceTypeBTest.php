<?php

namespace Test\Unit\Services\Invoice\Types;

use App\Models\Bonus;
use App\Models\Invoice;
use App\Services\Invoice\Types\InvoiceTypeB;
use Test\Unit\TestCase;

class InvoiceTypeBTest extends TestCase
{
    public function testGetType()
    {
        $invoice = new InvoiceTypeB(new Invoice(), new Bonus());
        $this->assertEquals($invoice->getType(), 'B');
    }
}
