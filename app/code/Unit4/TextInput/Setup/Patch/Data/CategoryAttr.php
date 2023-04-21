<?php

namespace Unit4\TextInput\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchInterface;
use Magento\Catalog\Setup\CategorySetup;
use Magento\Catalog\Setup\CategorySetupFactory;
use Magento\Catalog\Model\Product;
use Magento\Catalog\Model\ResourceModel\Eav\Attribute as CatalogAttribute;
class CategoryAttr implements DataPatchInterface
{
    protected $categorySetupFactory;
    /**
     * @var ModuleDataSetupInterface
     */
    protected $moduleDataSetup;
    /**
     * CategoryAttr constructor.
     * @param CategorySetupFactory $categorySetupFactory
     * @param ModuleDataSetupInterface $moduleDataSetup
     */
    public function __construct(
        CategorySetupFactory $categorySetupFactory,
        ModuleDataSetupInterface $moduleDataSetup
    ) {
        $this->categorySetupFactory = $categorySetupFactory;
        $this->moduleDataSetup = $moduleDataSetup;
    }
    /**
     * @return DataPatchInterface|void
     */
    public function apply()
    {
        /**
         * @var CategorySetupFactory
         */
        $this->moduleDataSetup->startSetup();
        /** @var CategorySetup $catalogSetup */
        $catalogSetup = $this->categorySetupFactory->create(['setup' => $this->moduleDataSetup]);
        $catalogSetup->addAttribute(Product::ENTITY, 'flavor2', [
            'label' => 'Flavor2',
            'visible_on_front' => 1,
            'required' => 0,
            'global' => CatalogAttribute::SCOPE_STORE
        ]);
        $this->moduleDataSetup->endSetup();
    }
    /**
     * @return array|string[]
     */
    public static function getDependencies()
    {
        return [];
    }
    /**
     * @return array|string[]
     */
    public function getAliases()
    {
        return [];
    }
}