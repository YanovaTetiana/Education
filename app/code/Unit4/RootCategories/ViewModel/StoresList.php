<?php

namespace Unit4\RootCategories\ViewModel;

use \Magento\Framework\View\Element\Block\ArgumentInterface;
use \Magento\Catalog\Model\CategoryFactory;
use \Magento\Store\Model\StoreManager;
class StoresList implements ArgumentInterface
{
    protected $storeManager;
    /**
     * @var CategoryFactory
     */
    protected $categoryFactory;
    /**
     * StoresList constructor.
     * @param CategoryFactory $categoryFactory
     * @param StoreManager $storeManager
     */
    public function __construct(
        CategoryFactory $categoryFactory,
        StoreManager $storeManager
    ) {
        $this->categoryFactory = $categoryFactory;
        $this->storeManager = $storeManager;
    }
    /**
     * @return string
     */
    public function getRootCategories()
    {
        $storesList = $this->storeManager->getStores();
        $catalogCategory = $this->categoryFactory->create();
        $stores = array_map(function($store) use ($catalogCategory)
        {
            $string = '<b>STORE</b> ' . $store->getName() . '<br>';
            $string .= ' <b>ROOT CATEGORY</b> ' . $catalogCategory->load($store->getRootCategoryId())->getName() . '<br><br>';
            return $string;
        }, $storesList);
        $response = implode('', $stores);
        return $response;
    }
}
