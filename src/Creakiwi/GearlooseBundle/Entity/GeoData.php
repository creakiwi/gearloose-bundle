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

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of GeoData
 *
 * @author Alexandre André <alexandre@creakiwi.com>
 * 
 * @ORM\MappedSuperclass
 */
abstract class GeoData
{
	/**
	 * @see http://en.wikipedia.org/wiki/Decimal_degrees
	 * @var decimal degree
         * 
         * @ORM\Column(name="latitude", type="decimal", precision=8, scale=6)
	 */
	protected $latitude;

	/**
	 * @see http://en.wikipedia.org/wiki/Decimal_degrees
	 * @var decimal degree
         * 
         * @ORM\Column(name="longitude", type="decimal", precision=9, scale=6)
	 */
	protected $longitude;

	/**
	 * @var string
         * 
         * @ORM\Column(name="address1", type="string")
	 */
	protected $address1;

	/**
	 * @var string
         * 
         * @ORM\Column(name="address2", type="string")
	 */
	protected $address2;

	/**
	 * @var string
         * 
         * @ORM\Column(name="address3", type="string")
 	 */
	protected $address3;

	/**
	 * @var string
         * 
         * @ORM\Column(name="zip_code", type="string", length=16)
	 */
	protected $zipCode;

	/**
	 * @var string
         * 
         * @ORM\Column(name="city", type="string", length=64)
	 */
	protected $city;

	/**
	 * @var string
         * 
         * @ORM\Column(name="country", type="string", length=2)
	 */
	protected $country;
}
