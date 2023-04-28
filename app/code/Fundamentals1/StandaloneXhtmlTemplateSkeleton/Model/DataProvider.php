<?php

namespace Fundamentals1\StandaloneXhtmlTemplateSkeleton\Model;

class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    /**
     * getData
     *
     * @return void
     */
    public function getData()
    {
        return [
            'list' => [
                1 =>
                    [
                        'id' => '1',
                        'grid_id' => '1',
                        'name' => 'Veronica3',
                        'lastname' => 'Costello'
                    ],
                2 =>
                    [
                        'id' => '2',
                        'grid_id' => '2',
                        'name' => 'Veronica4',
                        'lastname' => 'Costello2'
                    ]
            ]
        ];
    }
}
