<?php
namespace EnvisionXperts\CustomProducts\Controller\Index\Index;

/**
 * Interceptor class for @see \EnvisionXperts\CustomProducts\Controller\Index\Index
 */
class Interceptor extends \EnvisionXperts\CustomProducts\Controller\Index\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory, \EnvisionXperts\CustomProducts\Model\CustomProductFactory $customProductFactory)
    {
        $this->___init();
        parent::__construct($context, $productCollectionFactory, $customProductFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
