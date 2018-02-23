<?php

namespace HnhDigital\NullCarbon;

/*
 * This file is part of the Laravel Null Carbon package.
 *
 * (c) H&H|Digital <hello@hnh.digital>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Illuminate\Support\Carbon;

/**
 * This is the NullCarbon class.
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class NullCarbon extends Carbon
{

    /**
     * Override Carbon's format.
     *
     * @param string $format
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function format($format)
    {
        return '';
    }

    /**
     * Override Carbon's jsonSerialize.
     *
     * @return string
     */
    public function jsonSerialize()
    {
        return json_encode(null);
    }

    /**
     * Override Carbon's toString.
     *
     * @return string
     */
    public function __toString()
    {
        return '';
    }
}
