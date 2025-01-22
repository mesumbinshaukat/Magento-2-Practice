<?php
namespace EnvisionXperts\CustomProducts\Model\ResourceModel\CustomProduct;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection 
{
    protected function _construct()
    {
        $this->_init('EnvisionXperts\CustomProducts\Model\CustomProduct', 'EnvisionXperts\CustomProducts\Model\ResourceModel\CustomProduct');
    }
}