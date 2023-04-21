<?php

namespace Unit4\MultiSelect\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Catalog\Model\Product;
use Magento\Catalog\Setup\CategorySetupFactory;
use Magento\Catalog\Model\ResourceModel\Eav\Attribute as CatalogAttribute;
class CategoryAttr implements DataPatchInterface
{
    /**
     * @var CategorySetupFactory
     */
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
        $this->moduleDataSetup->startSetup();
        $catalogSetup = $this->categorySetupFactory->create(['setup' => $this->moduleDataSetup]);
        $attrParams = [
            'type' => 'text',
            'label' => 'Custom multiselect attribute',
            'input' => 'multiselect',
            'required' => 0,
            'visible_on_front' => 1,
            'global' => CatalogAttribute::SCOPE_STORE,
            'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
            'option' => [
                'values' => [
                    'left',
                    'right',
                    'up',
                    'down'
                ]
            ]
        ];
        $catalogSetup->addAttribute(Product::ENTITY, 'custom_multiselect', $attrParams);
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
