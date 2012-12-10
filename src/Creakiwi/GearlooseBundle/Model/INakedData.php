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
interface INakedData
{
	/**
	 * Gets the id.
	 * 
	 * @return integer
	 */
	 public function getId();

	/**
	 * Sets the name.
	 * 
	 * @param string $name
	 * 
	 * @return self
	 */
	public function setName($name);

	/**
	 * Gets the name.
	 * 
	 * @return string
	 */
	public function getName();

	/**
	 * Sets the canonical name.
	 * 
	 * @param string $nameCanonical
	 * 
	 * @return self
	 */
	public function setNameCanonical($nameCanonical);

	/**
	 * Gets the canonical name.
	 * 
	 * @return string
	 */
	public function getNameCanonical();

	/**
	 * Gets the linked data.
	 * 
	 * @return Collection
	 */
	public function getLinkedData();

	/**
	 * Add a linked data to the naked data.
	 * 
	 * @param ILinkedData $linkedData
	 * 
	 * @return self
	 */
	public function addLinkedData(ILinkedData $linkedData);

	/**
	 * Remove a linked data from the naked data.
	 * 
	 * @param ILinkedData $linkedData
	 * 
	 * @return self
	 */
	public function removeLinkedData(ILinkedData $linkedData);
}
