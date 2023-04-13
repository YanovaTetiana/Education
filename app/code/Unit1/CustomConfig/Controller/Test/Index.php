<?php

namespace Unit1\CustomConfig\Controller\Test;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Action;
class Index extends Action
{
    /**
     * Index resultPageFactory
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @var Unit1\CustomConfig\Model\Config
     */
    private $customConfig;

    /**
     * Index constructor.
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        \Unit1\CustomConfig\Model\Config $customConfig
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->customConfig = $customConfig;

        return parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $storeId = 1;
        $storeWelcomeMsg = $this->customConfig->get('messages/' . $storeId . '/message');
        var_dump($storeWelcomeMsg);
        return $this->resultPageFactory->create();
    }
}