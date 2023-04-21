<?php

namespace Unit4\VendorEntity\Controller\Vendor;

use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\Action;

class Index extends Action
{
    /**
     * @var Magento\Framework\View\Result\PageFactory
     */
    protected $pageFactory;

    /**
     * @param  Magento\Framework\App\Action\Context $context
     * @param  Magento\Framework\View\Result\PageFactory $pageFactory
     */
    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
        parent::__construct($context);
    }


    public function execute()
    {
        $page = $this->pageFactory->create();
        return $page;
    }
}