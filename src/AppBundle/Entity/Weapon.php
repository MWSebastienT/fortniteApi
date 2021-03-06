<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Weapon
 *
 * @ORM\Table(name="weapon")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WeaponRepository")
 */
class Weapon
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255)
     */
    private $label;

    /**
     * @var int
     *
     * @ORM\Column(name="dmg_body", type="integer")
     */
    private $dmgBody;

    /**
     * @var int
     *
     * @ORM\Column(name="dmg_head", type="integer")
     */
    private $dmgHead;

    /**
     * @var int
     *
     * @ORM\Column(name="dmg_env", type="integer")
     */
    private $dmgEnv;

    /**
     * @var float
     *
     * @ORM\Column(name="fire_rate", type="float")
     */
    private $fireRate;

    /**
     * @var int
     *
     * @ORM\Column(name="dps", type="integer")
     */
    private $dps;

    /**
     * @var int
     *
     * @ORM\Column(name="mag_size", type="integer")
     */
    private $magSize;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Rarity")
     */
    private $theRarity;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\AmmoType")
     */
    private $theAmmoType;

    /**
     * @var string
     *
     * @ORM\Column(name="PP_Url", type="string", length=255)
     */
    private $theProfilePicture;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set label
     *
     * @param string $label
     *
     * @return Weapon
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set dmgBody
     *
     * @param integer $dmgBody
     *
     * @return Weapon
     */
    public function setDmgBody($dmgBody)
    {
        $this->dmgBody = $dmgBody;

        return $this;
    }

    /**
     * Get dmgBody
     *
     * @return int
     */
    public function getDmgBody()
    {
        return $this->dmgBody;
    }

    /**
     * Set dmgHead
     *
     * @param integer $dmgHead
     *
     * @return Weapon
     */
    public function setDmgHead($dmgHead)
    {
        $this->dmgHead = $dmgHead;

        return $this;
    }

    /**
     * Get dmgHead
     *
     * @return int
     */
    public function getDmgHead()
    {
        return $this->dmgHead;
    }

    /**
     * Set dmgEnv
     *
     * @param integer $dmgEnv
     *
     * @return Weapon
     */
    public function setDmgEnv($dmgEnv)
    {
        $this->dmgEnv = $dmgEnv;

        return $this;
    }

    /**
     * Get dmgEnv
     *
     * @return int
     */
    public function getDmgEnv()
    {
        return $this->dmgEnv;
    }

    /**
     * Set fireRate
     *
     * @param integer $fireRate
     *
     * @return Weapon
     */
    public function setFireRate($fireRate)
    {
        $this->fireRate = $fireRate;

        return $this;
    }

    /**
     * Get fireRate
     *
     * @return integer
     */
    public function getFireRate()
    {
        return $this->fireRate;
    }

    /**
     * Set dps
     *
     * @param integer $dps
     *
     * @return Weapon
     */
    public function setDps($dps)
    {
        $this->dps = $dps;

        return $this;
    }

    /**
     * Get dps
     *
     * @return integer
     */
    public function getDps()
    {
        return $this->dps;
    }

    /**
     * Set theRarity
     *
     * @param \AppBundle\Entity\Rarity $theRarity
     *
     * @return Weapon
     */
    public function setTheRarity(\AppBundle\Entity\Rarity $theRarity = null)
    {
        $this->theRarity = $theRarity;

        return $this;
    }

    /**
     * Get theRarity
     *
     * @return \AppBundle\Entity\Rarity
     */
    public function getTheRarity()
    {
        return $this->theRarity;
    }

    /**
     * Set theAmmoType
     *
     * @param \AppBundle\Entity\AmmoType $theAmmoType
     *
     * @return Weapon
     */
    public function setTheAmmoType(\AppBundle\Entity\AmmoType $theAmmoType = null)
    {
        $this->theAmmoType = $theAmmoType;

        return $this;
    }

    /**
     * Get theAmmoType
     *
     * @return \AppBundle\Entity\AmmoType
     */
    public function getTheAmmoType()
    {
        return $this->theAmmoType;
    }

    /**
     * Set magSize
     *
     * @param integer $magSize
     *
     * @return Weapon
     */
    public function setMagSize($magSize)
    {
        $this->magSize = $magSize;

        return $this;
    }

    /**
     * Get magSize
     *
     * @return integer
     */
    public function getMagSize()
    {
        return $this->magSize;
    }


    /**
     * Set theProfilePicture
     *
     * @param string $theProfilePicture
     *
     * @return Weapon
     */
    public function setTheProfilePicture($theProfilePicture)
    {
        $this->theProfilePicture = $theProfilePicture;

        return $this;
    }

    /**
     * Get theProfilePicture
     *
     * @return string
     */
    public function getTheProfilePicture()
    {
        return $this->theProfilePicture;
    }
}
