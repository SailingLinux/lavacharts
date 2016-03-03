<?php

namespace Khill\Lavacharts\Traits;

trait WrappableTrait
{
    /**
     * Returns the Filter wrap type.
     *
     * @return string
     */
    public function getWrapType()
    {
        return static::WRAP_TYPE;
    }
}