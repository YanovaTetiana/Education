<?php

namespace Unit6\SystemConfiguration\Block\Config;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;
class Custom  extends Field
{
    /**
     * @param AbstractElement $element
     * @return string
     */
    protected function _getElementHtml(AbstractElement $element)
    {
        $option = ['option1' => 'option1', 'option2' => 'option2'];
        $element->setValues($option)->setName($element->getName() . '[]');
        return $element->getElementHtml();
    }
}
