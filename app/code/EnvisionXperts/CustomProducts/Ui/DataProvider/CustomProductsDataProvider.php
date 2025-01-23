<?php

namespace EnvisionXperts\CustomProducts\Ui\DataProvider;

use Magento\Ui\DataProvider\AbstractDataProvider;
use EnvisionXperts\CustomProducts\Model\ResourceModel\CustomProduct\CollectionFactory;

class CustomProductsDataProvider extends AbstractDataProvider
{
    protected $collection;

    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $collectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    // public function getData()
    // {
    //     return $this->collection->toArray();
    // }

//     public function getData()
// {
//     $data = $this->collection->toArray();
//     print_r($data); die();
//     return $data;
// }

public function getData()
{
    $this->collection->setPageSize(10);
    $data = $this->collection->toArray();

    // Ensure the structure includes 'totalRecords' and 'items'
    return [
        'totalRecords' => $data['totalRecords'] ?? count($data['items']),
        'items' => $data['items'] ?? $data,
    ];
}


}