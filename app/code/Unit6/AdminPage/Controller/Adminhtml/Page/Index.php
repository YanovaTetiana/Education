<?php

namespace Unit6\AdminPage\Controller\Adminhtml\Page;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
class Index extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = "Unit6_AdminPage::new_page";
    /**
     * @var \Magento\Framework\View\Result\PageFactory;
     */
    protected $resultPageFactory;
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * Index constructor.
     * @param PageFactory $resultPageFactory
     */

    public function __construct(
        PageFactory $resultPageFactory,
        Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context);
    }
    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $backendPage */
        $backendPage = $this->resultPageFactory->create();
        $backendPage->setActiveMenu('Unit6_AdminPage::new_admin_page');
        $backendPage->addBreadcrumb(__('Dashboard'),__('New Admin Page'));
        $backendPage->getConfig()->getTitle()->set('New Admin Page');
        $config = [
            'text_field' => $this->scopeConfig->getValue(
                'general/Unit6/text_field',
                \Magento\Store\Model\ScopeInterface::SCOPE_STORE
            ),
            'test' => empty($this->scopeConfig->getValue(
                'general/Unit6/test',
                \Magento\Store\Model\ScopeInterface::SCOPE_STORE
            )) ? 'No' : 'Yes',
            'custom' => $this->scopeConfig->getValue(
                'general/Unit6/custom',
                \Magento\Store\Model\ScopeInterface::SCOPE_STORE
            )
        ];
        $block = $backendPage->getLayout()->getBlock('new.page.content');
        $block->setData('config', $config);
        return $backendPage;
    }
}