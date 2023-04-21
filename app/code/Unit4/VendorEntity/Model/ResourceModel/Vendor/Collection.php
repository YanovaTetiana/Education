<?php

namespace Unit4\VendorEntity\Model\ResourceModel\Vendor;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    public function _construct()
    {
        $this->_init(\Unit4\VendorEntity\Model\Vendor::class, \Unit4\VendorEntity\Model\ResourceModel\Vendor::class);
    }
}
