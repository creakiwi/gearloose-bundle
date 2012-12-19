<?php

/*
 * This file is part of the GearlooseBundle package.
 *
 * (c) Alexandre André <alexandre@creakiwi.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GearlooseBundle\Tests\Validator\Constraints;

use Creakiwi\GearlooseBundle\Validator\Constraints\Latitude;
use Creakiwi\GearlooseBundle\Validator\Constraints\LatitudeValidator;

class LatitudeValidatorTest extends \PHPUnit_Framework_TestCase
{
    protected $context;
    protected $validator;

    protected function setUp()
    {
        $this->context = $this->getMock('Symfony\Component\Validator\ExecutionContext', array(), array(), '', false);
        $this->validator = new LatitudeValidator();
        $this->validator->initialize($this->context);
    }

    protected function tearDown()
    {
        $this->context = null;
        $this->validator = null;
    }

    public function testNullIsValid()
    {
        $this
            ->context
            ->expects($this->never())
            ->method('addViolation')
        ;

        $this
            ->validator
            ->validate(null, new Latitude())
        ;
    }

    public function testEmptyStringIsValid()
    {
        $this
            ->context
            ->expects($this->never())
            ->method('addViolation')
        ;

        $this
            ->validator
            ->validate('', new Latitude())
        ;
    }

    /**
     * @expectedException Symfony\Component\Validator\Exception\UnexpectedTypeException
     */
    public function testExpectsStringCompatibleType()
    {
        $this
            ->validator
            ->validate(new \stdClass(), new Latitude())
        ;
    }

    /**
     * @dataProvider getValidLatitudes
     */
    public function testValidLatitudes($latitude)
    {
        $this
            ->context
            ->expects($this->never())
            ->method('addViolation')
        ;

        $this
            ->validator
            ->validate($latitude, new Latitude())
        ;
    }

    public function getValidLatitudes()
    {
        return array(
            //Extremum
            array('-90.000000'),
            array('+90.000000'),
            array('90.000000'),
            //Extremum minus real extremums
            array('+89.999999'),
            array('-89.999999'),
            array('89.999999'),
            //Zero
            array('00.000000'),
            //Other values
            array('48.469279'),
            array('-01.653442'),
            array('33.72434'),
            array('39.368279'),
        );
    }

    /**
     * @dataProvider getInvalidLatitudes
     */
    public function testInvalidLatitudes($latitude)
    {
        $constraint = new Latitude(array(
            'message' => 'myMessage',
        ));

        $this
            ->context
            ->expects($this->once())
            ->method('addViolation')
            ->with('myMessage', array(
                '{{ value }}' => $latitude,
            )
        );

        $this
            ->validator
            ->validate($latitude, $constraint)
        ;
    }

    public function getInvalidLatitudes()
    {
        return array(
            array('+92.0001800'),
            array('+92.020'),
            array('-92.0001800'),
            array('-92.020'),
            array('92.0001800'),
            array('92.020'),
            array('+.108909'),
            array('-.108909'),
            array('.108909'),
            array('+108909'),
            array('-108909'),
            array('.108909'),
            array('+10.1871235'),
            array('-0.1871235'),
            array('+10.18712'),
            array('-0.18712'),
        );
    }
}
