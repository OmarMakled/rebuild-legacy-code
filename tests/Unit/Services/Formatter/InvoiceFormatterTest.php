<?php

namespace Test\Services;

use DateTime;
use Test\Unit\TestCase;
use App\Services\Formatter\InvoiceFormatter;

class InvoiceFormatterTest extends TestCase
{
    public function testCurrency()
    {
        $formatter = new InvoiceFormatter();
        $currency = $formatter->currency(73.25328, 'de_DE', 'EUR');

        $this->assertEquals($currency, '73,25 €');
    }

    public function testDate()
    {
        $dt = new DateTime();
        $formatter = new InvoiceFormatter();

        $this->assertEquals($formatter->date($dt, 'y-m-d'), date('y-m-d'));
    }

    public function testPercentage()
    {
        $formatter = new InvoiceFormatter();

        $this->assertEquals($formatter->percentage(13, 2), '13.00%');
        $this->assertEquals($formatter->percentage(5), '5%');
    }
}
