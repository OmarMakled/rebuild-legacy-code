<?php

use App\Models\Bonus;
use App\Models\Invoice;
use App\Models\Customer;
use App\Services\Invoice\InvoiceFactory;
use App\Services\Formatter\InvoiceFormatter;

require __DIR__ . '/../vendor/autoload.php';

$customer = new Customer();
$customer->setId('ABC123321CBA');
$customer->setFirstName('John');
$customer->setLastName('Doe');

$invoice = new Invoice();
$invoice->setMeterReading(2564);
$invoice->setTariffPricePerKwh(0.028);
$invoice->setMonthlyTaxesPct(13);

$bonus = new Bonus();
$bonus->setId('AABBCC');
$bonus->setValidFrom(new DateTime('2021-01-01'));
$bonus->setValidUntil(new DateTime('2021-12-31'));
$bonus->setValue(5);

$invoiceType = (new InvoiceFactory($invoice, $bonus))->getType();

$invoiceFormatter = new InvoiceFormatter();
$totalAmount = $invoiceFormatter->currency($invoiceType->getTotalPayment(), 'de_DE', 'EUR');
$dateOfCalculation = $invoiceFormatter->date(new DateTime(), 'd.m.Y');
$taxes = $invoiceFormatter->percentage($invoice->getMonthlyTaxesPct(), 2);
$bonus = $invoiceFormatter->percentage($bonus->getValue());

echo "<h1>Invoice Calculator</h1>
<p>Here you can see your calculated invoice.</p>
<div><label>Identification: </label> <span>{$customer->getId()}</span></div>
<div><label>Name: </label> <span>{$customer->getFirstName()} {$customer->getLastName()}</span></div>
<div><label>Tier: </label> <span>{$invoiceType->getType()}</span></div>
<div><label>Bonus: </label> <span>{$bonus}</span></div>
<div><label>Taxes: </label> <span>{$taxes}</span></div>
<div><label>Total amount: </label> <span>{$totalAmount}</span></div>
<div><label>Date of calculation: </label> <span>{$dateOfCalculation}</span></div>";
