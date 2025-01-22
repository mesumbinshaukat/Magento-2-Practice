<?php

namespace EnvisionXperts\CustomProducts\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\Action;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory as ProductCollectionFactory;
use EnvisionXperts\CustomProducts\Model\CustomProductFactory;

class Index extends Action
{
    protected $productCollectionFactory;
    protected $customProductFactory;

    public function __construct(
        Context $context,
        ProductCollectionFactory $productCollectionFactory,
        CustomProductFactory $customProductFactory
    ) {
        $this->productCollectionFactory = $productCollectionFactory;
        $this->customProductFactory = $customProductFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        
        $productCollection = $this->productCollectionFactory->create();
        $productCollection->addAttributeToSelect(['name', 'price', 'sku']);


        foreach ($productCollection as $product) {
          
            $customProduct = $this->customProductFactory->create();

            // Set data for the custom product
            $customProduct->setData([
                'product_name' => $product->getName(),
                'product_price' => $product->getPrice(),
                'product_sku' => $product->getSku(),
            ]);

            // Save the custom product to the database
            $customProduct->save();
        }

        // Message or response for confirmation
        echo "All products have been inserted into the custom table.";
    }
}
