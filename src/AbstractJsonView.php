<?php

namespace Mostad\JsonViewRenderer;

use JsonSerializable;

/**
 * @package Mostad\JsonViewRenderer
 */
abstract class AbstractJsonView implements JsonSerializable, JsonViewInterface
{
    /**
     * @var array
     */
    protected $data;

    /**
     * @param array $data
     *
     * @return self
     */
    public function render(array $data = [])
    {
        $this->data = $data;

        return $this;
    }
}
