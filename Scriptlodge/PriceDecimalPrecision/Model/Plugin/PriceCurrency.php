<?php


namespace Scriptlodge\PriceDecimalPrecision\Model\Plugin;


class PriceCurrency
{
    const DEFAULT_PRECISION = 4;

    /**
     * {@inheritdoc}
     */
    public function beforeFormat(
        \Magento\Directory\Model\PriceCurrency $subject,
        ...$args
    )
    {
        if (!isset($args[1])) {
            $args[1] = true;
        }
        // Precision argument
        $args[2] = self::DEFAULT_PRECISION;
        return $args;
    }

    /**
     * @param \Magento\Directory\Model\PriceCurrency $subject
     * @param callable $proceed
     * @param $price
     * @param array ...$args
     * @return float
     */
    public function aroundRound(
        \Magento\Directory\Model\PriceCurrency $subject,
        callable $proceed,
        $price,
        ...$args
    )
    {
        return $proceed($price);
        return round($price, self::DEFAULT_PRECISION);
    }

    /**
     * @param \Magento\Directory\Model\PriceCurrency $subject
     * @param array ...$args
     * @return array
     */
    public function beforeConvertAndFormat(
        \Magento\Directory\Model\PriceCurrency $subject,
        ...$args
    )
    {
        $args[1] = isset($args[1]) ? $args[1] : null;
        $args[2] = intval(self::DEFAULT_PRECISION);
        return $args;
    }

    /**
     * @param \Magento\Directory\Model\PriceCurrency $subject
     * @param array ...$args
     * @return array
     */
    public function beforeConvertAndRound(
        \Magento\Directory\Model\PriceCurrency $subject,
        ...$args
    )
    {
        $args[1] = isset($args[1]) ? $args[1] : null;
        $args[2] = isset($args[2]) ? $args[2] : null;
        $args[3] = self::DEFAULT_PRECISION;
        return $args;
    }

}