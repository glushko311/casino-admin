<?php
/**
 * Created by PhpStorm.
 * User: splinestudio-hp-vadim
 * Date: 07.09.17
 * Time: 15:04
 */

namespace CasinoAdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Class CaringItem
 * @package CasinoAdminBundle\Entity
 * @ORM\Table(name="caring_item")
 * @ORM\Entity
 */
class CaringItem
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
     * @ORM\Column(type="string", name="picture")
     */
   private $picture;

    /**
     * @ORM\Column(type="integer", name="cost_coins")
     */
   private $costCoins;

    /**
     * @ORM\Column(type="integer", name="happiness")
     */
   private $happiness;

    /**
     * One Caring Item has One Buff.
     * @ORM\OneToOne(targetEntity="Buff")
     * @ORM\JoinColumn(name="buff_id", referencedColumnName="_id")
     */
   private $buffId;

    /**
     * @ORM\Column(type="string", name="name")
     */
   private $name;

    /**
     * @ORM\Column(type="string", name="description")
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
     * Set picture
     *
     * @param string $picture
     *
     * @return CaringItem
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
     * Set costCoins
     *
     * @param integer $costCoins
     *
     * @return CaringItem
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
     * Set happiness
     *
     * @param integer $happiness
     *
     * @return CaringItem
     */
    public function setHappiness($happiness)
    {
        $this->happiness = $happiness;

        return $this;
    }

    /**
     * Get happiness
     *
     * @return integer
     */
    public function getHappiness()
    {
        return $this->happiness;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return CaringItem
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
     * @return CaringItem
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

    /**
     * Set buffId
     *
     * @param \CasinoAdminBundle\Entity\Buff $buffId
     *
     * @return CaringItem
     */
    public function setBuffId(\CasinoAdminBundle\Entity\Buff $buffId = null)
    {
        $this->buffId = $buffId;

        return $this;
    }

    /**
     * Get buffId
     *
     * @return \CasinoAdminBundle\Entity\Buff
     */
    public function getBuffId()
    {
        return $this->buffId;
    }
}
