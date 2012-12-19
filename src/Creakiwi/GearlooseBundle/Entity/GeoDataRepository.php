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

use Doctrine\ORM\EntityRepository;

/**
 * Description of GeoDataRepository
 *
 * @author Alexandre André <alexandre@creakiwi.com>
 */
class GeoDataRepository extends EntityRepository
{
    const PI = 3.14159265;

    public function __construct($em, \Doctrine\ORM\Mapping\ClassMetadata $class)
    {
        parent::__construct($em, $class);
        $conf = $this
                    ->getEntityManager()
                    ->getConfiguration();

        $conf->addCustomNumericFunction('ACOS', 'DoctrineExtensions\Query\Mysql\Acos');
        $conf->addCustomNumericFunction('COS', 'DoctrineExtensions\Query\Mysql\Cos');
        //Comments the following line during the validation of the pull-request for PI() function
        //$conf->addCustomNumericFunction('PI', 'DoctrineExtensions\Query\Mysql\Pi');
        $conf->addCustomNumericFunction('SIN', 'DoctrineExtensions\Query\Mysql\Sin');
    }
}
