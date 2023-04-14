<?php

namespace Unit1\LogPathInfo\Observer;

class Log implements \Magento\Framework\Event\ObserverInterface
{
    private $_logger;
    /**
     * @var \Magento\Framework\App\RequestInterface
     */
    private $_request;

    /**
     * Log constructor.
     * @param \Psr\Log\LoggerInterface $logger
     * @param \Magento\Framework\App\RequestInterface $request
     */
    public function __construct(
        \Psr\Log\LoggerInterface $logger,
        \Magento\Framework\App\RequestInterface $request)
    {
        $this->_logger = $logger;
        $this->_request = $request;
    }

    /**
     * @param \Magento\Framework\Event\Observer $observer
     */
    public function execute(\Magento\Framework\Event\Observer $observer) {
        $this->_logger->critical(
            'Request URI: ' . $this->_request->getPathInfo()
        ); // var/log/system.log
//        $this->_logger->critical(
//            'MODULE ' . print_r($data = [
//                'module' => $this->_request->getModuleName(),
//                'controller' => $this->_request->getControllerName(),
//                'action' => $this->_request->getActionName(),
//            ], true)
//        );
    }
}