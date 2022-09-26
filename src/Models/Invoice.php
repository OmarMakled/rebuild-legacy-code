<?php

declare(strict_types=1);

namespace App\Models;

use DateTimeInterface;

class Invoice
{
    /**
     * @var int
     */
    private int $totalPayment;

    /**
     * @var int
     */
    private int $totalTaxes;

    /**
     * @var DateTimeInterface
     */
    private DateTimeInterface $generatedDate;

    /**
     * @var int
     */
    private int $monthlyTaxesPct;

    /**
     * @var int
     */
    private int $meterReading;

    /**
     * @var float
     */
    private float $tariffPricePerKwh;

    public function getTotalPayment(): int
    {
        return $this->totalPayment;
    }

    public function setTotalPayment(int $totalPayment): void
    {
        $this->totalPayment = $totalPayment;
    }

    public function getTotalTaxes(): int
    {
        return $this->totalTaxes;
    }

    public function setTotalTaxes(int $totalTaxes): void
    {
        $this->totalTaxes = $totalTaxes;
    }

    public function getGeneratedDate(): DateTimeInterface
    {
        return $this->generatedDate;
    }

    public function setGeneratedDate(DateTimeInterface $generatedDate): void
    {
        $this->generatedDate = $generatedDate;
    }

    public function getMonthlyTaxesPct(): int
    {
        return $this->monthlyTaxesPct;
    }

    public function setMonthlyTaxesPct(int $monthlyTaxesPct): void
    {
        $this->monthlyTaxesPct = $monthlyTaxesPct;
    }

    public function getMeterReading(): int
    {
        return $this->meterReading;
    }

    public function setMeterReading(int $meterReading): void
    {
        $this->meterReading = $meterReading;
    }

    public function getTariffPricePerKwh(): float
    {
        return $this->tariffPricePerKwh;
    }

    public function setTariffPricePerKwh(float $tariffPricePerKwh): void
    {
        $this->tariffPricePerKwh = $tariffPricePerKwh;
    }
}
