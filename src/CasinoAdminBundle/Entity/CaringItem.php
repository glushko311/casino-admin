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
     * @ORM\Column(type="integer", name="buff_id")
     */
   private $buffId;

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
     * Set buffId
     *
     * @param integer $buffId
     *
     * @return CaringItem
     */
    public function setBuffId($buffId)
    {
        $this->buffId = $buffId;

        return $this;
    }

    /**
     * Get buffId
     *
     * @return integer
     */
    public function getBuffId()
    {
        return $this->buffId;
    }
}