<?php

declare(strict_types=1);

namespace App\Services\Formatter;

use NumberFormatter;
use DateTimeInterface;

class InvoiceFormatter
{
    /**
     * Format the given number to currency.
     */
    public function currency(float $amount, string $locale, string $currency): string|false
    {
        $fmt = new NumberFormatter($locale, NumberFormatter::CURRENCY);

        return $fmt->formatCurrency($amount, $currency);
    }

    /**
     * Format the given date.
     */
    public function date(DateTimeInterface $dt, string $format): string
    {
        return $dt->format($format);
    }

    /**
     * Format the given number to percentage.
     */
    public function percentage(int $value, int $suffix = 0): string
    {
        return sprintf("%.{$suffix}f%%", (float) $value);
    }
}
