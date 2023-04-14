<?php

namespace Unit2\RouterDash\Controller;

/**
 * Class Router
 * @package Unit2\RouterDash\Controller
 */
class Router implements \Magento\Framework\App\RouterInterface
{
    /**
     * @var \Magento\Framework\App\ActionFactory
     */
    protected $actionPath;

    /**
     * Router constructor.
     * @param \Magento\Framework\App\ActionFactory $actionFactory
     */
    public function __construct(\Magento\Framework\App\ActionFactory $actionFactory) {
        $this->actionPath = $actionFactory;
    }

    /**
     * @param \Magento\Framework\App\RequestInterface $request
     * @return \Magento\Framework\App\ActionInterface|null
     */
    public function match(\Magento\Framework\App\RequestInterface $request) {
//        /catalog-category-id-21 => /catalog/category/view/id/21
//        $info = $request->getPathInfo();
//        if (preg_match("%^/(.*?)-(.*?)-(id)-(.*?)$%", $info, $m)) {
//            $request->setPathInfo(sprintf("/%s/%s/view/%s/%s", $m[1], $m[2], $m[3], $m[4]));
//            return $this->actionPath->create('Magento\Framework\App\Action\Forward',
//                ['request' => $request]);
//        }
//        /view/catalog/category/26 => /catalog/category/view/id/26
        $info = $request->getPathInfo();
        if (preg_match("%^/view/(.*?)/(.*?)/(.*?)$%", $info, $m)) {
            $request->setPathInfo(sprintf("/%s/%s/view/id/%s", $m[1], $m[2], $m[3]));
            return $this->actionPath->create('Magento\Framework\App\Action\Forward',
                ['request' => $request]);
        }
        return null;
    }
}