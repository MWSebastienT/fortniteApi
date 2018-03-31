<?php
/**
 * Created by PhpStorm.
 * User: stour
 * Date: 31/03/2018
 * Time: 18:21
 */

namespace AppBundle\Service;

use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\AmmoType;
use AppBundle\Entity\Weapon;


class Fixtures
{
    /**
     * @param string $label
     *
     * @return AmmoType
     */
    public function getAmmoTypeFromLabel($label)
    {
        $ammoType = $this->getRepository()->findOneBy(['label' => $label]);
        return $ammoType;
    }
}
