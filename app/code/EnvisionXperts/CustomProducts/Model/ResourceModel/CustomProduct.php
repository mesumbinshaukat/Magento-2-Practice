<?php
namespace EnvisionXperts\CustomProducts\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class CustomProduct extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('products_collection', 'id');
    }
}