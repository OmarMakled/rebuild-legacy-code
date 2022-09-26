<?php

namespace Test\Unit;

use App\Models\Customer;
use Test\Unit\TestCase;

class CustomerTest extends TestCase
{
    public function testGetId()
    {
        $customer = new Customer();
        $customer->setId('foo');

        $this->assertEquals($customer->getId(), 'foo');
    }

    public function testGetFirstName()
    {
        $customer = new Customer();
        $customer->setFirstName('foo');

        $this->assertEquals($customer->getFirstName(), 'foo');
    }

    public function testGetLastName()
    {
        $customer = new Customer();
        $customer->setLastName('foo');

        $this->assertEquals($customer->getLastName(), 'foo');
    }
}
