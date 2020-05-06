<?php


namespace Scriptlodge\PriceDecimalPrecision\Model\Plugin;


class Order
{

    /**
     * @param \Magento\Sales\Model\Order $subject
     * @param array ...$args
     * @return array
     */
    public function beforeFormatPricePrecision(
        \Magento\Sales\Model\Order $subject,
        ...$args
    )
    {
        $args[1] = 4;
        return $args;
    }

}