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
 * Represent a data associated to a naked data
 * 
 * @author Alexandre André <alexandre@creakiwi.com>
 */
abstract class LinkedData implements ILinkedData
{
	protected $id;

	/**
	 * A naked data associating the linked data
	 * 
	 * @var integer
	 */
	protected $nakedData;

	public function getId()
        {
		return $this->id;
	}

	public function setNakedData(INakedData $nakedData)
        {
		if ($this->nakedData !== null)
			$this->nakedData->removeLinkedData($this);

		$this->nakedData = $nakedData;
		$this->nakedData->addLinkedData($this);

		return $this;
	}

	public function getNakedData()
        {
		return $this->nakedData;
	}
}