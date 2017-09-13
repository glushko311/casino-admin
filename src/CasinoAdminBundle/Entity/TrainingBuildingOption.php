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
 * Class TrainingBuildingOption
 * @package CasinoAdminBundle\Entity
 * @ORM\Table(name="training_building_option")
 * @ORM\Entity
 */
class TrainingBuildingOption
{

    /**
     * @ORM\Column(type="integer", name="_id")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $Id;

    /**
     * @ORM\Column(type="integer", name="training_building_id")
     */
    private $trainingBuildingId;

    /**
     * @ORM\Column(type="integer", name="level")
     */
    private $level;

    /**
     * @ORM\Column(type="integer", name="cost_coins")
     */
    private $costCoins;

    /**
     * @ORM\Column(type="string", name="picture")
     */
    private $picture;

    /**
     * @ORM\Column(type="integer", name="age")
     */
    private $age;

    /**
     * @ORM\Column(type="integer", name="consistency")
     */
    private $consistency;

    /**
     * @ORM\Column(type="integer", name="property_value")
     */
    private $propertyValue;


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
     * @return TrainingBuildingOption
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
     * @return TrainingBuildingOption
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
     * @return TrainingBuildingOption
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
     * @return TrainingBuildingOption
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
     * @return TrainingBuildingOption
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
     * @return TrainingBuildingOption
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
     * @return TrainingBuildingOption
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
}
