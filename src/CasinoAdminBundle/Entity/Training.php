<?php
/**
 * Created by PhpStorm.
 * User: splinestudio-hp-vadim
 * Date: 07.09.17
 * Time: 15:28
 */

namespace CasinoAdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Class Training
 * @package CasinoAdminBundle\Entity
 * @ORM\Table(name="training_building_option")
 * @ORM\Entity
 */
class Training
{

    /**
     * @ORM\Column(type="integer", name="_id")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $Id;


    /**
     * One Training has One Training Building.
     * @ORM\OneToOne(targetEntity="TrainingBuilding")
     * @ORM\JoinColumn(name="training_building_id", referencedColumnName="_id")
     */
    private $trainingBuildingId;

    /**
     * @ORM\Column(type="integer", name="level", nullable=false)
     */
    private $level;

    /**
     * @ORM\Column(type="integer", name="cost_coins", nullable=false)
     */
    private $costCoins = 0;

    /**
     * @ORM\Column(type="string", name="picture", length=50, nullable=false)
     */
    private $picture;

    /**
     * @ORM\Column(type="integer", name="age", nullable=false)
     */
    private $age = 0;

    /**
     * @ORM\Column(type="integer", name="consistency", nullable=false)
     */
    private $consistency = 0;

    /**
     * @ORM\Column(type="integer", name="property_value", nullable=false)
     */
    private $propertyValue = 0;

    /**
     * @ORM\Column(type="string", name="name", length=50, nullable=false)
     */
    private $name;


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
     * Set trainingBuildingId
     *
     * @param integer $trainingBuildingId
     *
     * @return Training
     */
    public function setTrainingBuildingId($trainingBuildingId)
    {
        $this->trainingBuildingId = $trainingBuildingId;

        return $this;
    }

    /**
     * Get trainingBuildingId
     *
     * @return integer
     */
    public function getTrainingBuildingId()
    {
        return $this->trainingBuildingId;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Training
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set costCoins
     *
     * @param integer $costCoins
     *
     * @return Training
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
     * Set picture
     *
     * @param string $picture
     *
     * @return Training
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
     * Set age
     *
     * @param integer $age
     *
     * @return Training
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set consistency
     *
     * @param integer $consistency
     *
     * @return Training
     */
    public function setConsistency($consistency)
    {
        $this->consistency = $consistency;

        return $this;
    }

    /**
     * Get consistency
     *
     * @return integer
     */
    public function getConsistency()
    {
        return $this->consistency;
    }

    /**
     * Set propertyValue
     *
     * @param integer $propertyValue
     *
     * @return Training
     */
    public function setPropertyValue($propertyValue)
    {
        $this->propertyValue = $propertyValue;

        return $this;
    }

    /**
     * Get propertyValue
     *
     * @return integer
     */
    public function getPropertyValue()
    {
        return $this->propertyValue;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Training
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
}
