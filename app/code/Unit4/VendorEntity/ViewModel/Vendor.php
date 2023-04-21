<?php

namespace Unit4\VendorEntity\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

use Unit4\VendorEntity\Model\VendorFactory;
use Unit4\VendorEntity\Model\ResourceModel\Vendor\CollectionFactory;
class Vendor implements ArgumentInterface
{
    /**
     * @var Unit4\VendorEntity\Model\VendorFactory
     */
    protected $vendorFactory;

    /**
     * @var Unit4\VendorEntity\Model\ResourceModel\Vendor\CollectionFactory
     */
    protected $collectionFactory;

    /**
     * StoresList constructor.
     * @param Unit4\VendorEntity\Model\VendorFactory $vendorFactory
     * @param Unit4\VendorEntity\Model\ResourceModel\Vendor\CollectionFactory $collectionFactory
     */
    public function __construct(VendorFactory $vendorFactory, CollectionFactory $collectionFactory)
    {
        $this->vendorFactory = $vendorFactory;
        $this->collectionFactory = $collectionFactory;
    }

    public function getAllVendors()
    {
        $collection = $this->collectionFactory->create();
        // return $collection; // all records
        $collection->addFieldToFilter('code', ['like'=> '%Rossm%']);
        return $collection;
    }
    public function getVendor($id)
    {
        $vendor = $this->vendorFactory->create();
        $vendor->load($id);
        return $vendor;
    }
}