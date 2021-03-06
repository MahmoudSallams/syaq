<?php namespace Lovata\Shopaholic\Components;

use Lovata\Shopaholic\Classes\Item\ProductItem;
use Lovata\Toolbox\Classes\Component\ElementData;

/**
 * Class ProductData
 * @package Lovata\Shopaholic\Components
 * @author Andrey Kharanenka, a.khoronenko@lovata.com, LOVATA Group
 *
 * @link https://github.com/lovata/oc-shopaholic-plugin/wiki/ProductData
 *
 * Compare for Shopaholic
 * @method array onAddToCompare()
 * @method array onRemoveFromCompare()
 * @method void onClearCompareList()
 *
 * Viewed products for Shopaholic
 * @method array onRemoveFromViewedProductList()
 * @method void onClearViewedProductList()
 */
class ProductData extends ElementData
{
    /**
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'        => 'lovata.shopaholic::lang.component.product_data_name',
            'description' => 'lovata.shopaholic::lang.component.product_data_description',
        ];
    }

    /**
     * Make new element item
     * @param int $iElementID
     * @return ProductItem
     */
    protected function makeItem($iElementID)
    {
        return ProductItem::make($iElementID);
    }
}
