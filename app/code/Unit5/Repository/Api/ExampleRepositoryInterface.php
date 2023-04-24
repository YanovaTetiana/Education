<?php

namespace Unit5\Repository\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface ExampleRepositoryInterface
 * @package Unit5\Repository\Api
 */
interface ExampleRepositoryInterface
{
    /**
     * @return Data\ExampleSearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria);
}