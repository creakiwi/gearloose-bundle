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
 * Store geographical data object
 * 
 * @author Alexandre André <alexandre@creakiwi.com>
 */
abstract class GeoData extends LinkedData implements IGeoData {
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

	public function setLatitude($latitude) {
		$this->latitude = $latitude;

		return $this;
	}

	public function getLatitude() {
		return $this->latitude;
	}

	public function setLongitude($longitude) {
		$this->longitude = $longitude;

		return $this;
	}

	public function getLongitude() {
		return $this->longitude;
	}

	public function setAddress1($address1) {
		$this->address1 = $address1;

		return $this;
	}

	public function getAddress1() {
		return $this->address1;
	}

	public function setAddress2($address2) {
		$this->address2 = $address2;

		return $this;
	}

	public function getAddress2() {
		return $this->address2;
	}

	public function setAddress3($address3) {
		$this->address3 = $address3;

		return $this;
	}

	public function getAddress3() {
		return $this->address3;
	}

	public function setZipCode($zipCode) {
		$this->zipCode = $zipCode;

		return $this;
	}

	public function getZipCode() {
		return $this->zipCode;
	}

	public function setCity($city) {
		$this->city = $city;

		return $this;
	}

	public function getCity() {
		return $this->city;
	}

	public function setCountry($country) {
		$this->country = $country;

		return $this;
	}

	public function getCountry() {
		return $this->country;
	}
}
