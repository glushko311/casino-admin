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
     * @ORM\Column(type="string", name="picture", length=100, nullable=false)
     */
    private $picture;

    /**
     * One Food has One Buff.
     * @ORM\OneToOne(targetEntity="Buff")
     * @ORM\JoinColumn(name="buff_id", referencedColumnName="_id")
     */
    private $buffId = 0;

    /**
     * @ORM\Column(type="integer", name="cost_сoins", nullable=false)
     */
    private $costCoins = 0;

    /**
     * @ORM\Column(type="integer", name="happiness", nullable=false)
     */
    private $happiness = 0;


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

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Food
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
     * @return Food
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
