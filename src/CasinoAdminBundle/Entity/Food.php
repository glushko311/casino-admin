<?php
/**
 * Created by PhpStorm.
 * User: splinestudio-hp-vadim
 * Date: 07.09.17
 * Time: 14:29
 */

namespace CasinoAdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Class Food
 * @package CasinoAdminBundle\Entity
 * @ORM\Table(name="food")
 * @ORM\Entity
 */
class Food
{

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
     * @ORM\Column(type="integer", name="buff_id")
     */
    private $buffId;

    /**
     * @ORM\Column(type="integer", name="cost_сoins")
     */
    private $costCoins;

    /**
     * @ORM\Column(type="integer", name="happiness")
     */
    private $happiness;

   

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
     * @return Food
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
     * Set buffId
     *
     * @param integer $buffId
     *
     * @return Food
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

    /**
     * Set costCoins
     *
     * @param integer $costCoins
     *
     * @return Food
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
     * @return Food
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
}
