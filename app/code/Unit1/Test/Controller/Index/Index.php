<?php

namespace Unit1\Test\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Action\Action;

class Index extends Action implements HttpGetActionInterface
{
    public function execute()
    {
        echo 'Test';
    }
}
