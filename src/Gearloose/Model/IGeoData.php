<?php

/*
 * This file is part of the CreakiwiGearlooseBundle package.
 *
 * (c) Alexandre André <alexandre@creakiwi.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Creakiwi\GearlooseBundle\Model;

/**
 * @author Alexandre André <alexandre@creakiwi.com>
 */
interface IGeoData
{
	/**
	 * Sets the latitude.
	 * 
	 * @param decimal degree $latitude
	 * 
	 * @return self
	 */
	public function setLatitude($latitude);

	/**
	 * Gets the latitude.
	 * 
	 * @return decimal degree
	 */
	public function getLatitude();

	/**
	 * Sets the longitude.
	 * 
	 * @param decimal degree $longitude
	 * 
	 * @return self
	 */
	public function setLongitude($longitude);

	/**
	 * Gets the longitude.
	 * 
	 * @return decimal degree
	 */
	public function getLongitude();

	/**
	 * Sets the address1.
	 * 
	 * @param string $address1
	 * 
	 * @return self
	 */
	public function setAddress1($address1);

	/**
	 * Gets the address1.
	 * 
	 * @return string
	 */
	public function getAddress1();

	/**
	 * Sets the address2.
	 * 
	 * @param string $address2
	 * 
	 * @return self
	 */
	public function setAddress2($address2);

	/**
	 * Gets the address2.
	 * 
	 * @return string
	 */
	public function getAddress2();

	/**
	 * Sets the address3.
	 * 
	 * @param string $address3
	 * 
	 * @return self
	 */
	public function setAddress3($address3);

	/**
	 * Gets the address3.
	 * 
	 * @return string
	 */
	public function getAddress3();

	/**
	 * Sets the zipCode.
	 * 
	 * @param string $zipCode
	 * 
	 * @return self
	 */
	public function setZipCode($zipCode);

	/**
	 * Gets the zipCode.
	 * 
	 * @return string
	 */
	public function getZipCode();

	/**
	 * Sets the city.
	 * 
	 * @param string $city
	 * 
	 * @return self
	 */
	public function setCity($city);

	/**
	 * Gets the city.
	 * 
	 * @return string
	 */
	public function getCity();

	/**
	 * Sets the country.
	 * 
	 * @param string $country
	 * 
	 * @return self
	 */
	public function setCountry($country);

	/**
	 * Gets the country.
	 * 
	 * @return string
	 */
	public function getCountry();
}
