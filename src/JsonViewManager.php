<?php

namespace Mostad\JsonViewRenderer;

use Zend\ServiceManager\AbstractPluginManager;

/**
 * @package Mostad\JsonViewRenderer
 */
final class JsonViewManager extends AbstractPluginManager
{
    /**
     * JsonViewManager constructor.
     *
     * @param null  $configInstanceOrParentLocator
     * @param array $config
     */
    public function __construct($configInstanceOrParentLocator = null, array $config = [])
    {
        $this->instanceOf = JsonViewInterface::class;

        parent::__construct($configInstanceOrParentLocator, $config);
    }
}
