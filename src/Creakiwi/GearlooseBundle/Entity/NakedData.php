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

/**
 * @author Alexandre André <alexandre@creakiwi.com>
 * 
 * @ORM\MappedSuperclass
 */
abstract class NakedData
{
	/**
	 * @var string $name
         * 
         * @ORM\Column(name="name", type="string", length=255)
	 */
	protected $name;

	/**
	 * @var string
         * 
         * @ORM\Column(name="name_canonical", type="string", length=255, unique=true)
	 */
	protected $nameCanonical;

        /**
         * @ORM\OneToOne(targetEntity="GeoData")
         * @ORM\JoinColumn(name="geo_data_id", referencedColumnName="id")
         */
        protected $geoData;
}
