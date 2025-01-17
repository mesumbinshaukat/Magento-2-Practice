<?php

namespace EnvisionXperts\CustomModule\Block;

class Category extends \Magento\Framework\View\Element\Template
{
    protected $categoryCollection;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoryCollection,
    array $data = [])
    {
        $this->categoryCollection = $categoryCollection;
        parent::__construct($context, $data);
    }

    public function getCategoryCollection()
    {
        $collection = $this->categoryCollection->create();
        $collection->addAttributeToSelect('*'); // All attributes
        $collection->addIsActiveFilter(); // Optional: Only active categories
        return $collection;
    }

}