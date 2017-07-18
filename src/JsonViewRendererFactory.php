<?php

namespace Mostad\JsonViewRenderer;

use Psr\Container\ContainerInterface;

/**
 * @package Mostad\JsonViewRenderer
 */
final class JsonViewRendererFactory
{
    /**
     * @param ContainerInterface $container
     *
     * @return JsonViewRenderer
     * @throws \Psr\Container\ContainerExceptionInterface
     */
    public function __invoke(ContainerInterface $container)
    {
        return new JsonViewRenderer(
            $container->get(JsonViewManager::class)
        );
    }
}
