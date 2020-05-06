<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Scriptlodge\PriceDecimalPrecision\Helper;

use Magento\Framework\Pricing\PriceCurrencyInterface;
use Magento\Quote\Model\Quote\Item\AbstractItem;
use Magento\Store\Model\Store;
use Magento\Store\Model\ScopeInterface;
use Magento\Sales\Api\PaymentFailuresInterface;

/**
 * Checkout default helper
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Data extends \Magento\Checkout\Helper\Data
{
    const DEFAULT_PRECISION=4;

    /**
     * Format Price
     *
     * @param float $price
     * @return string
     */
    public function formatPrice($price)
    {
        return $this->priceCurrency->format(
            $price,
            true,
            self::DEFAULT_PRECISION,
            $this->getQuote()->getStore()
        );
    }
}
