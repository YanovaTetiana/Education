<?php

namespace Unit2\CatalogProductPlugin\Controller\Product;

/**
 * Class View
 * @package Unit2\CatalogProductPlugin\Controller\Product
 */
class View extends \Magento\Framework\App\Action\Action
{
//    /**
//     * Log constructor.
//     * @param \Psr\Log\LoggerInterface $logger
//     */
//    private $logger;
//
//    public function __construct(
//        \Magento\Framework\App\Action\Context $context,
//        \Psr\Log\LoggerInterface $logger
//    ) {
//        parent::__construct($context);
//        $this->logger = $logger;
//    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
//        $this->logger->info(
//            '===== execute ======='
//        );
        var_dump('===== execute !!!  =======');
        return $this->resultFactory->create('raw')->setContents(' echo plugin ');
    }

    /**
     * @param \Magento\Catalog\Controller\Product\View $controller
     * @param $result
     * @return mixed
     */
    public function afterExecute(\Magento\Catalog\Controller\Product\View $controller, $result)
    {
        /**
         * Custom code goes here
         */
//        $this->logger->info(
//            '===== afterExecute !!!  ======='
//        );
        var_dump('===== afterExecute !!!  =======');
        return $this->resultFactory->create('raw')->setContents(' echo plugin test');
//        return $this->execute();
//        return $result;
    }
}
