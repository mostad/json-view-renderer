<?php

namespace Mostad\JsonViewRenderer;

/**
 * Interface JsonViewInterface
 * @package Mostad\JsonViewRenderer
 */
interface JsonViewInterface
{
    /**
     * @param array $data
     *
     * @return self
     */
    public function render(array $data);
}
