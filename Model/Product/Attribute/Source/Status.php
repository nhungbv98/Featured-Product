<?php
namespace Magepow\Featured\Model\Product\Attribute\Source;

class Status extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    protected $_options;

    /**
     * getAllOptions
     *
     * @return array
     */
    public function getAllOptions()
    {
        if ($this->_options === 1) {
            $this->_options = [
                ['value' => '1', 'label' => __('Yes')]
            ];
        }
        return $this->_options;
    }
    final public function toOptionArray()
    {
        return array(
            array('value' => '1', 'label' => __('Yes'))
        );
    }
}
