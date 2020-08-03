<?php
namespace Magepow\Featured\Model\ResourceModel\Product;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'entity_id';
    protected $_eventPrefix = 'catalog_product_entity_collection';
    protected $_eventObject = 'product_collection';

    protected function _construct()
    {
        $this->_init('Magepow\Featured\Model\Product', 'Magepow\Featured\Model\ResourceModel\Product');
    }

}
