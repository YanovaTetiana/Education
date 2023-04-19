<?php

namespace Unit3\ProductViewDescriptionPlugin\Block\Product\View;

/**
 * Class Description
 * @package Unit3\ProductViewDescriptionPlugin\Block\Product\View
 */
class Description extends \Magento\Catalog\Block\Product\View\Description
{
    /**
     * @param \Magento\Catalog\Block\Product\View\Description $description
     */
    public function beforeToHtml(\Magento\Catalog\Block\Product\View\Description $description)
    {
        $description->getProduct()->setDescription('test description!');
    }
}