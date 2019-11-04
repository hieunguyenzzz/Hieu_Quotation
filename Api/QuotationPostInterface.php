<?php

namespace Hieu\Quotation\Api;

interface QuotationPostInterface {

    /**
     * @param \Hieu\Quotation\Api\Data\ProductDataInterface[] $products
     * @return mixed
     */
    public function save(
        $products
    );
}