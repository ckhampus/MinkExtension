<?php

namespace Behat\MinkExtension\Context;

use Behat\Mink\Mink;

/*
 * This file is part of the Behat\MinkExtension.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Mink aware interface for contexts.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface MinkAwareContextInterface
{
    /**
     * Sets Mink instance.
     *
     * @param Mink $mink Mink session manager
     */
    function setMink(Mink $mink);

    /**
     * Sets parameters provided for Mink.
     *
     * @param array $parameters
     */
    function setMinkParameters(array $parameters);
}
