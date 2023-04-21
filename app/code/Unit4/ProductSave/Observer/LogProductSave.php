<?php

namespace Unit4\ProductSave\Observer;

use Magento\Framework\Event\ObserverInterface;
class LogProductSave implements ObserverInterface
{
    /**
     * @var null|\Psr\Log\LoggerInterface
     */
    protected $_logger = null;
    /**
     * LogProductSave constructor.
     */
    public function __construct(\Psr\Log\LoggerInterface $logger)
    {
        $this->_logger = $logger;
    }
    /**
     * @param \Magento\Framework\Event\Observer $observer
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $product = $observer->getEvent()->getProduct();
        if (!empty($product) && $product->getId() && ($product->isDataChanged() || $product->isObjectNew())) {
            $logMessage = PHP_EOL . 'Product Saving Log...' . PHP_EOL;
            foreach ($product->getData() as $key => $dataItem) {
                 if ((is_string($dataItem) || is_int($dataItem)) &&
                     $dataItem != $product->getOrigData($key)
                ) {
                     $logMessage .= $key . ' = ' . $dataItem . PHP_EOL;
                }
            }
            $this->_logger->info($logMessage);
        }
    }
}