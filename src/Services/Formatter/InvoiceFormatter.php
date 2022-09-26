<?php

declare(strict_types=1);

namespace App\Services\Formatter;

use NumberFormatter;
use DateTimeInterface;

class InvoiceFormatter
{
    /**
     * @param float $amount
     * @param string $locale
     * @param string $currency
     * @return string
     */
    public function currency(float $amount, string $locale, string $currency): string
    {
        $fmt = new NumberFormatter($locale, NumberFormatter::CURRENCY);

        return $fmt->formatCurrency($amount, $currency);
    }

    /**
     * @param DateTimeInterface $dt
     * @param string $format
     * @return string
     */
    public function date(DateTimeInterface $dt, string $format): string
    {
        return $dt->format($format);
    }

    /**
     * @param int $value
     * @param int $suffix
     * @return string
     */
    public function percentage(int $value, int $suffix = 0): string
    {
        return sprintf("%.{$suffix}f%%", (float) $value);
    }
}
