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
interface ILinkedData {
	/**
	 * Gets the id.
	 * 
	 * @return integer
	 */
	 public function getId();

	/**
	 * Sets the naked data associating the linked data
	 * 
	 * @param INakedData $nakedData
	 * 
	 * @return self
	 */
	public function setNakedData(INakedData $nakedData);

	/**
	 * Gets the naked data associating the linked data
	 * 
	 * @return INakedData
	 */
	public function getNakedData();
}
