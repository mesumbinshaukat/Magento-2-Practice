<?php
namespace EnvisionXperts\CustomProducts\Model\ResourceModel\CustomProduct;

/**
 * Factory class for @see \EnvisionXperts\CustomProducts\Model\ResourceModel\CustomProduct\Collection
 */
class CollectionFactory
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Instance name to create
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Factory constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\EnvisionXperts\\CustomProducts\\Model\\ResourceModel\\CustomProduct\\Collection')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \EnvisionXperts\CustomProducts\Model\ResourceModel\CustomProduct\Collection
     */
    public function create(array $data = [])
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
