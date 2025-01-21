<?php

namespace EnvisionXperts\CustomModule\Block;

use Magento\Framework\View\Element\Template;

class Product extends Template
{
    protected $registry;

    public function __construct(
        Template\Context $context,
        \Magento\Framework\Registry $registry,
        array $data = []
    ) {
        $this->registry = $registry;
        parent::__construct($context, $data);
    }

    public function getCurrentProduct()
    {
        return $this->registry->registry('current_product');
    }

    public function isWhiteProduct()
    {
        $product = $this->getCurrentProduct();
        return $product->getData('is_white');
    }
}
