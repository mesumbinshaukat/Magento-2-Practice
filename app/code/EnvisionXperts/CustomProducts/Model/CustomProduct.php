<?php
namespace EnvisionXperts\CustomProducts\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class CustomProduct extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('EnvisionXperts\CustomProducts\Model\ResourceModel\CustomProduct');
    }
}