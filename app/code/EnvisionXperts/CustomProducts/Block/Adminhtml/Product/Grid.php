<?php

namespace EnvisionXperts\CustomProducts\Block\Adminhtml\Product;

use Magento\Backend\Block\Widget\Grid\Container;

class Grid extends Container
{
    protected function _construct()
    {
        $this->_controller = 'adminhtml_product';
        $this->_blockGroup = 'EnvisionXperts_CustomProducts';
        $this->_headerText = __('Custom Products');
        parent::_construct();
    }
}
