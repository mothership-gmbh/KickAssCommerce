<?php

namespace App\Application;

use Moltin\SDK\Facade\Product as MoltinProduct;

class Product implements ProductInterface
{
    /**
     * @param array $filter
     * @return array
     */
    public function getProductList(array $filter = array())
    {
        return MoltinProduct::Listing($filter);
    }
}