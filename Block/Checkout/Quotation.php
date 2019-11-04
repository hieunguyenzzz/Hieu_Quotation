<?php

namespace Hieu\Quotation\Block\Checkout;

class Quotation extends \Magento\Framework\View\Element\Template {

    /**
     * @return string
     */
    public function getQuotePostUrl() {
        return $this->_storeManager->getStore()->getBaseUrl() . '/' . 'rest/V1/quotation/save';
    }
}