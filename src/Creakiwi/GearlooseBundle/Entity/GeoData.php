<?php

/*
 * This file is part of the GearlooseBundle package.
 *
 * (c) Alexandre André <alexandre@creakiwi.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Creakiwi\GearlooseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Creakiwi\GearlooseBundle\Validator\Constraints as GearlooseAssert;

/**
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
         * @GearlooseAssert\Latitude
	 */
	protected $latitude;

	/**
	 * @see http://en.wikipedia.org/wiki/Decimal_degrees
	 * @var decimal degree
         * 
         * @ORM\Column(name="longitude", type="decimal", precision=9, scale=6)
         * @GearlooseAssert\Longitude
	 */
	protected $longitude;

	/**
	 * @var string
         * 
         * @ORM\Column(name="address1", type="string")
         * @Assert\NotBlank
         * @Assert\Length(min=3, max=255)
	 */
	protected $address1;

	/**
	 * @var string
         * 
         * @ORM\Column(name="address2", type="string")
         * @Assert\Length(min=3, max=255)
	 */
	protected $address2;

	/**
	 * @var string
         * 
         * @ORM\Column(name="address3", type="string")
         * @Assert\Length(min=3, max=255)
 	 */
	protected $address3;

	/**
	 * @var string
         * 
         * @ORM\Column(name="zip_code", type="string", length=16)
         * @Assert\NotBlank
         * @Assert\Length(min=3, max=16)
	 */
	protected $zipCode;

	/**
	 * @var string
         * 
         * @ORM\Column(name="city", type="string", length=64)
         * @Assert\NotBlank
         * @Assert\Length(min=3, max=64)
	 */
	protected $city;

	/**
	 * @var string
         * 
         * @ORM\Column(name="country", type="string", length=2)
         * @Assert\NotBlank
         * @Assert\Length(min=2, max=2)
         * @Assert\Country
	 */
	protected $country;
}
