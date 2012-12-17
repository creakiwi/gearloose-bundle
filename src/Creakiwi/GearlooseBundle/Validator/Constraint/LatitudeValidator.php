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
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;

/**
 * @author Alexandre André <alexandre@creakiwi.com>
 */
class LatitudeValidator extends ConstraintValidator
{
    const PATTERN = '/^
        [+-]?                           # a potential sign
        (
                [0-8][0-9].[0-9]{6}     # every decimal number between 00.000000 and 89.999999
            |                           # or
                90.000000               # 90.000000 the absolute maximal value
        )
        $/ixu';

    public function validate($value, Constraint $constraint)
    {
        if ($value === null || $value === '') {
            return;
        }

        if (!is_scalar($value) && !(is_object($value) && method_exists($value, '__toString'))) {
            throw new UnexpectedTypeException($value, 'string');
        }

        $value = (string) $value;
        
        if (!preg_match(static::PATTERN, $value)) {
            $this->context->addViolation($constraint->message,
                                            array('{{ value }}' => $value));
        }
    }
}
