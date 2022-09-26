<?php

namespace Test\Models;

use App\Models\Bonus;
use DateTime;
use Test\Unit\TestCase;

class BonusTest extends TestCase
{
    public function testGetId()
    {
        $bonus = new Bonus();
        $bonus->setId('foo');

        $this->assertEquals($bonus->getId(), 'foo');
    }

    public function testGetValidFrom()
    {
        $dt = new DateTime();
        $bonus = new Bonus();
        $bonus->setValidFrom($dt);

        $this->assertEquals($bonus->getValidFrom(), $dt);
    }

    public function testGetValidUntil()
    {
        $dt = new DateTime();
        $bonus = new Bonus();
        $bonus->setValidUntil($dt);

        $this->assertEquals($bonus->getValidUntil(), $dt);
    }

    public function testGetValue()
    {
        $bonus = new Bonus();
        $bonus->setValue(1000);

        $this->assertEquals($bonus->getValue(), 1000);
    }
}
