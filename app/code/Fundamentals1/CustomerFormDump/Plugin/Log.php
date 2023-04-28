<?php

namespace Fundamentals1\CustomerFormDump\Plugin;

class Log
{
    /**
     * \Psr\Log\LoggerInterface
     */
    protected $logger;
    public function __construct(\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * afterGetData
     *
     * @param mixed $subject
     * @param mixed $result
     *
     * @return void
     */
    public function afterGetData(\Magento\Customer\Model\Customer\DataProviderWithDefaultAddresses $subject, $result)
    {
        foreach($result as $customer){
            $this->logger->debug('====== data: ', $customer);
        }
        return $result;
    }

}
