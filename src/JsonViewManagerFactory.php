<?php

namespace Mostad\JsonViewRenderer;

use Interop\Container\ContainerInterface;

/**
 * @package Mostad\JsonViewRenderer
 */
final class JsonViewManagerFactory
{
    /**
     * @param ContainerInterface $container
     *
     * @return JsonViewManager
     * @throws \Psr\Container\ContainerExceptionInterface
     */
    public function __invoke(ContainerInterface $container)
    {
        $config = isset($container->get('config')['json_view'])
            ? $container->get('config')['json_view']
            : [];

        return new JsonViewManager($container, $config);
    }
}
