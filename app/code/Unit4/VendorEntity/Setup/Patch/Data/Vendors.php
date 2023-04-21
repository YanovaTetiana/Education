<?php

namespace Unit4\VendorEntity\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchInterface;
class Vendors implements DataPatchInterface
{
    /**
     * @var ModuleDataSetupInterface
     */
    protected $moduleDataSetup;
    /**
     * Vendors constructor.
     * @param ModuleDataSetupInterface $moduleDataSetup
     */
    public function __construct(ModuleDataSetupInterface $moduleDataSetup)
    {
        $this->moduleDataSetup = $moduleDataSetup;
    }
    /**
     * @return DataPatchInterface|void
     */
    public function apply()
    {
        $this->moduleDataSetup->startSetup();
        $this->moduleDataSetup->getConnection()->insert('vendor_entity',
            [
                'code' => 'Auchan',
                'contact' => '38011122333',
                'goods_type' => 'food'
            ]
        );
        $this->moduleDataSetup->getConnection()->insertMultiple('vendor_entity',
            [[
                'code' => 'Rossmann',
                'contact' => '38011122555',
                'goods_type' => 'perfume'
            ],
            [
                'code' => 'Lidl',
                'contact' => '38011122444',
                'goods_type' => 'food'
            ]]
        );
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