<?php

/*
 * This file is part of the gearloose-bundle package.
 *
 * (c) Alexandre André <alexandre@creakiwi.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Creakiwi\GearlooseBundle\Entity;

/**
 * Description of GeoData
 *
 * @author Alexandre André <alexandre@creakiwi.com>
 * 
 * @MappedSuperclass
 */
abstract class GeoData
{
	/**
	 * @see http://en.wikipedia.org/wiki/Decimal_degrees
	 * 
	 * @var decimal degree
	 */
	protected $latitude;

	/**
	 * @see http://en.wikipedia.org/wiki/Decimal_degrees
	 * 
	 * @var decimal degree
	 */
	protected $longitude;

	/**
	 * @var string
	 */
	protected $address1;

	/**
	 * @var string
	 */
	protected $address2;

	/**
	 * @var string
	 */
	protected $address3;

	/**
	 * @var string
	 */
	protected $zipCode;

	/**
	 * @var string
	 */
	protected $city;

	/**
	 * @var string
	 */
	protected $country;
}
