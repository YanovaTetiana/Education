<?php

namespace Unit4\VendorEntity\Model\ResourceModel;

class Vendor extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function _construct()
    {
        $this->_init('vendor_entity', 'vendor_id');
    }
}