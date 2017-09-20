<?php
/**
 * Created by PhpStorm.
 * User: splinestudio-hp-vadim
 * Date: 07.09.17
 * Time: 15:07
 */

namespace CasinoAdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Class Buff
 * @package CasinoAdminBundle\Entity
 * @ORM\Table(name="buff")
 * @ORM\Entity
 */
class Buff
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", name="_id")
     */
    private $Id;

    /**
     * @ORM\Column(type="string", name="affect_property, length = 20, nullable=false")
     */
    private $affectProperty = '';

    /**
     * @ORM\Column(type="integer", name="affect_value, nullable=false")
     */
    private $affectValue = 0;

    /**
     * @ORM\Column(type="integer", name="duration, nullable=false")
     */
    private $duration = 0;

    /**
     * @ORM\Column(type="string", name="actions, nullable=false")
     */
    private $actions;

    /**
     * @ORM\Column(type="integer", name="action_count, nullable=false")
     */
    private $actionCount = 0;

    /**
     * @ORM\Column(type="string", name="picture, length=255, nullable=false")
     */
    private $picture;

    /**
     * @ORM\Column(type="string", name="name, length = 50, nullable=false")
     */
    private $name;

    /**
     * @ORM\Column(type="string", name="description, nullable=false")
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
     * Set affectProperty
     *
     * @param string $affectProperty
     *
     * @return Buff
     */
    public function setAffectProperty($affectProperty)
    {
        $this->affectProperty = $affectProperty;

        return $this;
    }

    /**
     * Get affectProperty
     *
     * @return string
     */
    public function getAffectProperty()
    {
        return $this->affectProperty;
    }

    /**
     * Set affectValue
     *
     * @param integer $affectValue
     *
     * @return Buff
     */
    public function setAffectValue($affectValue)
    {
        $this->affectValue = $affectValue;

        return $this;
    }

    /**
     * Get affectValue
     *
     * @return integer
     */
    public function getAffectValue()
    {
        return $this->affectValue;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     *
     * @return Buff
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set actions
     *
     * @param string $actions
     *
     * @return Buff
     */
    public function setActions($actions)
    {
        $this->actions = $actions;

        return $this;
    }

    /**
     * Get actions
     *
     * @return string
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * Set actionCount
     *
     * @param integer $actionCount
     *
     * @return Buff
     */
    public function setActionCount($actionCount)
    {
        $this->actionCount = $actionCount;

        return $this;
    }

    /**
     * Get actionCount
     *
     * @return integer
     */
    public function getActionCount()
    {
        return $this->actionCount;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return Buff
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
     * Set name
     *
     * @param string $name
     *
     * @return Buff
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
     * @return Buff
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
