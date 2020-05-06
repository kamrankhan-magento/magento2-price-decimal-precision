<?php


namespace Scriptlodge\PriceDecimalPrecision\Model\Plugin;


class Currency
{
    /**
     * {@inheritdoc}
     *
     * @param \Magento\Framework\CurrencyInterface $subject
     * @param array ...$args
     *
     * @return array
     */
    public function beforeToCurrency(
        \Magento\Framework\CurrencyInterface $subject,
        ...$arguments
    )
    {
        $arguments[1]['precision'] = 4;
        return $arguments;
    }

}