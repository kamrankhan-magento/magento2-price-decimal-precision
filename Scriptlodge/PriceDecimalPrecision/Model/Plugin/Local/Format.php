<?php


namespace Scriptlodge\PriceDecimalPrecision\Model\Plugin\Local;


class Format
{
    /**
     * {@inheritdoc}
     *
     * @param $subject
     * @param $result
     *
     * @return mixed
     */
    public function afterGetPriceFormat($subject, $result)
    {
        $precision = 4;
        $precisionTotal = 2;

        $result['precision'] = $precision;
        $result['requiredPrecision'] = $precision;
        $result['requiredPrecisionTotal'] = $precisionTotal;

        return $result;
    }

}