<?php
/**
 * Created by PhpStorm.
 * User: stour
 * Date: 31/03/2018
 * Time: 17:28
 */

namespace AppBundle\DataFixtures;

use AppBundle\Entity\AmmoType;
use AppBundle\Entity\Rarity;
use AppBundle\Entity\Resources;
use AppBundle\Entity\Weapon;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Service\Fixtures;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // TODO: Implement load() method.
        // create ressources
        $metal = new Resources();
        $metal->setLabel('Metal');
        $manager->persist($metal);
        $wood = new Resources();
        $wood->setLabel('Wood');
        $manager->persist($wood);
        $stone = new Resources();
        $stone->setLabel('Stone');
        $manager->persist($stone);
        // create Rarity
        $common = new Rarity();
        $common->setLabel('Common');
        $manager->persist($common);
        $rare = new Rarity();
        $rare->setLabel('Rare');
        $manager->persist($rare);
        $epic = new Rarity();
        $epic->setLabel('Epic');
        $manager->persist($epic);
        $legen = new Rarity();
        $legen->setLabel('Legendary');
        $manager->persist($legen);
        $mythic = new Rarity();
        $mythic->setLabel('Mythic');
        $manager->persist($mythic);
        // create AmmoType
        $lb = new AmmoType();
        $lb->setLabel('Light Bullets');
        $manager->persist($lb);
        $mb = new AmmoType();
        $mb->setLabel('Medium Bullets');
        $manager->persist($mb);
        $hb = new AmmoType();
        $hb->setLabel('Heavy Bullets');
        $manager->persist($hb);
        $ec = new AmmoType();
        $ec->setLabel('Energy Cells');
        $manager->persist($ec);
        $slugs = new AmmoType();
        $slugs->setLabel('Shells n Slugs');
        $manager->persist($slugs);
        $rockets = new AmmoType();
        $rockets->setLabel('Rockets');
        $manager->persist($rockets);
        $arrows = new AmmoType();
        $arrows->setLabel('Arrows');
        $manager->persist($arrows);
        // create Weapons
        $assaultRifleCommon = new Weapon();
        $assaultRifleCommon->setLabel('Assault Rifle')
            ->setDmgBody(30)
            ->setDmgHead(30)
            ->setDmgEnv(30)
            ->setFireRate(30)
            ->setDps(30)
            ->setMagSize(30)
            ->setTheProfilePicture('url')
            ->setTheAmmoType($mb)
            ->setTheRarity($common);

        $manager->persist($assaultRifleCommon);

        $manager->flush();
    }

}
