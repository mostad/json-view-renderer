<?php

namespace Mostad\JsonViewRenderer;

use Interop\Container\ContainerInterface;
use Zend\Expressive\Template\DefaultParamsTrait;
use Zend\Expressive\Template\TemplateRendererInterface;

/**
 * @package Mostad\JsonViewRenderer
 */
final class JsonViewRenderer implements TemplateRendererInterface
{
    use DefaultParamsTrait;

    /**
     * @var ContainerInterface
     */
    private $viewManager;

    /**
     * JsonViewRenderer constructor.
     *
     * @param ContainerInterface $viewManager
     */
    public function __construct(ContainerInterface $viewManager)
    {
        $this->viewManager = $viewManager;
    }

    /**
     * @param string $name
     * @param array  $params
     * @param int    $depth
     *
     * @return string
     */
    public function render($name, $params = [], $depth = 1)
    {
        /** @var AbstractJsonView $view */
        $view = $this->viewManager->get($name);

        return $view->render($params, $depth);
    }

    /**
     * @param string      $path
     * @param string|null $namespace
     *
     * @throws \Exception
     */
    public function addPath($path, $namespace = null)
    {
        throw new \Exception('This renderer does not support paths');
    }

    /**
     * @throws \Exception
     */
    public function getPaths()
    {
        throw new \Exception('This renderer does not support paths');
    }
}
