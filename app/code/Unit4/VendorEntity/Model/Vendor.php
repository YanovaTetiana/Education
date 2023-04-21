<?php

namespace Unit4\VendorEntity\Model;

class Vendor extends \Magento\Framework\Model\AbstractModel
{

    public function _construct()
    {
        $this->_init(\Unit4\VendorEntity\Model\ResourceModel\Vendor::class);
    }
}
