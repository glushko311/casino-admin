<?php
/**
 * Created by PhpStorm.
 * User: splinestudio-hp-vadim
 * Date: 07.09.17
 * Time: 15:27
 */

namespace CasinoAdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Class TrainingBuilding
 * @package CasinoAdminBundle\Entity
 * @ORM\Table(name="training_building")
 * @ORM\Entity
 */
class TrainingBuilding
{

    /**
     * @ORM\Column(type="integer", name="_id")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $Id;

    /**
     * @ORM\Column(type="string", name="trainable_property", length=45, nullable=false)
     */
    private  $trainableProperty;

    /**
     * @ORM\Column(type="string", name="name", length=50, nullable=false)
     */
    private  $name;

    /**
     * @ORM\Column(type="string", name="description", nullable=false)
     */
    private  $description;

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
     * Set trainableProperty
     *
     * @param string $trainableProperty
     *
     * @return TrainingBuilding
     */
    public function setTrainableProperty($trainableProperty)
    {
        $this->trainableProperty = $trainableProperty;

        return $this;
    }

    /**
     * Get trainableProperty
     *
     * @return string
     */
    public function getTrainableProperty()
    {
        return $this->trainableProperty;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return TrainingBuilding
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
     * @return TrainingBuilding
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
