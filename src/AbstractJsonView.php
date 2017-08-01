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
     * @var int
     */
    protected $depth;

    /**
     * @param array $data
     * @param int   $depth
     *
     * @return AbstractJsonView
     */
    public function render(array $data = [], $depth = 1)
    {
        $this->data  = $data;
        $this->depth = $depth - 1;

        return $this;
    }
}
