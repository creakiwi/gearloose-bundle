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

/**
 * @author Alexandre André <alexandre@creakiwi.com>
 * 
 * @MappedSuperclass
 */
abstract class NakedData
{
	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var string
	 */
	protected $nameCanonical;
}
