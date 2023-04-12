<?php

namespace Unit1\Test\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Action\Action;

class Index extends Action implements HttpGetActionInterface
{
    public function execute()
    {
        echo 'Test';
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $arguments = [
            'data' => ['firstElem' => 'Item from controller']
        ];
        $objectManager->create('Unit1\Test\Api\TestInterface', $arguments)->test();
        $objectManager->create('Unit1\Test2\Api\Test2Interface')->test2();
    }
}
