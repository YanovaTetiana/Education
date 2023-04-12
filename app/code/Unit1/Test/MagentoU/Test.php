<?php

namespace Unit1\Test\MagentoU;
use Unit1\Test\Api\TestInterface;

class Test implements TestInterface
{
    protected $justAParameter;

    protected $data;

    protected $productFactory;
    protected $session ;

    public function __construct(
        \Magento\Catalog\Model\ProductFactory $productFactory,
        \Magento\Checkout\Model\Session $session,
        $justAParameter = false,
        array $data = []
    ) {
        $this->justAParameter = $justAParameter;
        $this->data = $data;
        $this->productFactory = $productFactory;
        $this->session = $session;
    }
    public function test()
    {
        var_dump('$this->data', $this->data);
        var_dump('productFactory->create', get_class($this->productFactory->create()));
        var_dump('Name', $this->productFactory->create()->setName('Test')->getName());
        var_dump('Name', $this->productFactory->create(['data' => ['name'=> 'Test name']])->getName());
        var_dump('session', get_class($this->session));
        var_dump('$this->justAParameter', $this->justAParameter);
    }
}