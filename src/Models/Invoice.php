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

    /**
     * @return int
     */
    public function getTotalPayment(): int
    {
        return $this->totalPayment;
    }

    /**
     * @param int $totalPayment
     */
    public function setTotalPayment(int $totalPayment): void
    {
        $this->totalPayment = $totalPayment;
    }

    /**
     * @return int
     */
    public function getTotalTaxes(): int
    {
        return $this->totalTaxes;
    }

    /**
     * @param int $totalTaxes
     */
    public function setTotalTaxes(int $totalTaxes): void
    {
        $this->totalTaxes = $totalTaxes;
    }

    /**
     * @return DateTimeInterface
     */
    public function getGeneratedDate(): DateTimeInterface
    {
        return $this->generatedDate;
    }

    /**
     * @param DateTimeInterface $generatedDate
     */
    public function setGeneratedDate(DateTimeInterface $generatedDate): void
    {
        $this->generatedDate = $generatedDate;
    }

    /**
     * @return int
     */
    public function getMonthlyTaxesPct(): int
    {
        return $this->monthlyTaxesPct;
    }

    /**
     * @param int $monthlyTaxesPct
     */
    public function setMonthlyTaxesPct(int $monthlyTaxesPct): void
    {
        $this->monthlyTaxesPct = $monthlyTaxesPct;
    }

    /**
     * @return int
     */
    public function getMeterReading(): int
    {
        return $this->meterReading;
    }

    /**
     * @param int $meterReading
     */
    public function setMeterReading(int $meterReading): void
    {
        $this->meterReading = $meterReading;
    }

    /**
     * @return float
     */
    public function getTariffPricePerKwh(): float
    {
        return $this->tariffPricePerKwh;
    }

    /**
     * @param float $tariffPricePerKwh
     */
    public function setTariffPricePerKwh(float $tariffPricePerKwh): void
    {
        $this->tariffPricePerKwh = $tariffPricePerKwh;
    }
}
