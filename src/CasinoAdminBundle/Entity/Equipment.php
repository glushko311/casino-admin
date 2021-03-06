<?php
/**
 * Created by PhpStorm.
 * User: splinestudio-hp-vadim
 * Date: 07.09.17
 * Time: 15:08
 */

namespace CasinoAdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Class Equipment
 * @package CasinoAdminBundle\Entity
 * @ORM\Table(name="equipment")
 * @ORM\Entity
 */
class Equipment
{
//Name
//Description

    /**
     * @ORM\Column(type="integer", name="_id")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $Id;

    /**
     * @ORM\Column(type="integer", name="type", nullable=false)
     */
    private $type;

    /**
     * @ORM\Column(type="string", name="buffs", nullable=false)
     */
    private $buffs;

    /**
     * @ORM\Column(type="string", name="picture", length=255, nullable=false)
     */
    private $picture;

    /**
     * @ORM\Column(type="integer", name="uses_number", nullable=false)
     */
    private $usesNumber;

    /**
     * @ORM\Column(type="integer", name="cost_coins", nullable=false)
     */
    private $costCoins;


    /**
     * @ORM\Column(type="string", name="name", length=50, nullable=false)
     */
    private $name;


    /**
     * @ORM\Column(type="string", name="description", nullable=false)
     */
    private $description;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return Equipment
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set buffs
     *
     * @param string $buffs
     *
     * @return Equipment
     */
    public function setBuffs($buffs)
    {
        $this->buffs = $buffs;

        return $this;
    }

    /**
     * Get buffs
     *
     * @return string
     */
    public function getBuffs()
    {
        return $this->buffs;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return Equipment
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set usesNumber
     *
     * @param integer $usesNumber
     *
     * @return Equipment
     */
    public function setUsesNumber($usesNumber)
    {
        $this->usesNumber = $usesNumber;

        return $this;
    }

    /**
     * Get usesNumber
     *
     * @return integer
     */
    public function getUsesNumber()
    {
        return $this->usesNumber;
    }

    /**
     * Set costCoins
     *
     * @param integer $costCoins
     *
     * @return Equipment
     */
    public function setCostCoins($costCoins)
    {
        $this->costCoins = $costCoins;

        return $this;
    }

    /**
     * Get costCoins
     *
     * @return integer
     */
    public function getCostCoins()
    {
        return $this->costCoins;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Equipment
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Equipment
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
