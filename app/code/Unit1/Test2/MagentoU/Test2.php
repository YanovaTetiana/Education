<?php

namespace Unit1\Test2\MagentoU;

use Unit1\Test2\Api\Test2Interface;

class Test2 implements Test2Interface
{
    protected $param1;
    protected $param2;
    protected $param3;
    public function __construct(
        array $param1,
        string $param2,
        int $param3
    ) {
        $this->param1 = $param1;
        $this->param2 = $param2;
        $this->param3 = $param3;
    }

    public function test2()
    {
        var_dump($this->param2, $this->param3);
        var_dump(get_class($this->param1['Elem2']));
        var_dump(($this->param1['Elem2']->getById(1))->getName());
    }
}
