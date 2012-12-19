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
    const MI2KM = 1.609344;

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

    protected function findInArea($latitude, $longitude, $distance)
    {
        return $this
                ->getEntityManager()
                ->createQuery('
                    SELECT (
                        (
                            ACOS( SIN(:latitude                   * PI() / 180)
                                * SIN(g.latitude                  * PI() / 180)
                                + COS(:latitude                   * PI() / 180)
                                * COS(g.latitude                  * PI() / 180)
                                * COS((:longitude - g.latitude)   * PI() / 180)
                            ) * 180 / PI()
                        ) * 60 * 1.1515 * :mi2km
                    ) AS distance
                    FROM GearlooseBundle:GeoData
                    WHERE distance <= :distance
                    ORDER BY distance ASC
                ')
                ->setParameters(array(
                    'latitude'  => $latitude,
                    'longitude' => $longitude,
                    'distance'  => $distance,
                    'mi2km'     => static::MI2KM,
                ))
        ;
    }

    public function findAllInArea($latitude, $longitude, $distance = 1)
    {
        return $this->findInArea($latitude, $longitude, $distance);
    }

    public function findOneInArea($latitude, $longitude, $distance = 1)
    {
        return $this->findInArea($latitude, $longitude, $distance);
    }
}
