<?php

/*
 * This file is part of the GearlooseBundle package.
 *
 * (c) Alexandre André <alexandre@creakiwi.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Creakiwi\GearlooseBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @author Alexandre André <alexandre@creakiwi.com>
 * 
 * @Annotation
 */
class Latitude extends Constraint
{
    public $message = 'The value {{ value }} is not a valid latitude.';
}
