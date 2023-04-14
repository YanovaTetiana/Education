<?php

namespace Unit1\CustomConfig\Controller\Test;

use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\ForwardFactory;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\Result\RedirectFactory;
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
     * Index resultJsonFactory
     * @var JsonFactory
     */
    protected $resultJsonFactory;
    /**
     * Index resultForwardFactory
     * @var ForwardFactory
     */
    protected $resultForwardFactory;
    /**
     * Index resultRedirectFactory
     * @var RedirectFactory
     */
    protected $resultRedirectFactory;

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
        JsonFactory $resultJsonFactory,
        ForwardFactory $resultForwardFactory,
        RedirectFactory $resultRedirectFactory,
        \Unit1\CustomConfig\Model\Config $customConfig
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->customConfig = $customConfig;
        $this->resultJsonFactory = $resultJsonFactory;
        $this->resultForwardFactory = $resultForwardFactory;
        $this->resultRedirectFactory = $resultRedirectFactory;

        return parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $storeId = 1;
        $storeWelcomeMsg = $this->customConfig->get('messages/' . $storeId . '/message');

//        $resultRedirect = $this->resultRedirectFactory->create();
//        $resultRedirect->setUrl('test/index/index');
//        return $resultRedirect;
//
//        $resultForward = $this->resultForwardFactory->create();
//        $resultForward->forward('test/index/index');
//        return $resultForward;

        $resultJson = $this->resultJsonFactory->create();
        return $resultJson->setData(['msg' => $storeWelcomeMsg]);

//        var_dump($storeWelcomeMsg);
//        return $this->resultPageFactory->create();
    }
}