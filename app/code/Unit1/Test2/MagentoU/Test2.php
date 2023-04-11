<?php

namespace Unit1\Test2\MagentoU;

class Test2
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
}
