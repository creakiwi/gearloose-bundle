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

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Store naked data object
 * 
 * @author Alexandre André <alexandre@creakiwi.com>
 */
class NakedData implements INakedData
{
	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var string
	 */
	protected $nameCanonical;

	/**
	 * @var Collection
	 */
	protected $linkedData;


	public function setName($name)
        {
		$this->name = $name;

		return $this;
	}

	public function getName()
        {
		return $this->name;
	}

	public function setNameCanonical($nameCanonical)
        {
		$this->nameCanonical = $nameCanonical;

		return $this;
	}

	public function getNameCanonical()
        {
		return $this->nameCanonical;
	}

	public function getLinkedData()
        {
		return $this->linkedData ?: new ArrayCollection();
	}

	public function addLinkedData(ILinkedData $linkedData)
        {
		if (!$this->getLinkedData()->contains($linkedData))
			$this->getLinkedData()->add($linkedData);

		return $this;
	}

	public function removeLinkedData(ILinkedData $linkedData)
        {
		if ($this->getLinkedData()->contains($linkedData))
			$this->getLinkedData()->remove($linkedData);

		return $this;
	}
}
