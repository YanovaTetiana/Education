<?php

namespace Fundamentals1\SimpleUiComponent\Controller\Adminhtml\UiComponent;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    /**
     * ACL access restriction
     */
//    const ADMIN_RESOURCE = 'Fundamentals1_SimpleUiComponent::simple_list';

    /**
     * View page action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
