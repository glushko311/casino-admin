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
     * @ORM\Column(type="integer", name="_id")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $Id;

    /**
     * @ORM\Column(type="string", name="affect_property")
     */
    private $affectProperty;

    /**
     * @ORM\Column(type="integer", name="affect_value")
     */
    private $affectValue;

    /**
     * @ORM\Column(type="integer", name="duration")
     */
    private $duration;

    /**
     * @ORM\Column(type="string", name="actions")
     */
    private $actions;

    /**
     * @ORM\Column(type="integer", name="action_count")
     */
    private $actionCount;

    /**
     * @ORM\Column(type="string", name="picture")
     */
    private $picture;

    /**
     * @ORM\OneToMany(targetEntity="Test", mappedBy="Buff")
     * @ORM\JoinColumn(name="id", referencedColumnName="buff_id")
     */
    private $test;

    public function __construct()
    {
        $this->test = new ArrayCollection();
    }



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
     * Add test
     *
     * @param \CasinoAdminBundle\Entity\Test $test
     *
     * @return Buff
     */
    public function addTest(\CasinoAdminBundle\Entity\Test $test)
    {
        $this->test[] = $test;

        return $this;
    }

    /**
     * Remove test
     *
     * @param \CasinoAdminBundle\Entity\Test $test
     */
    public function removeTest(\CasinoAdminBundle\Entity\Test $test)
    {
        $this->test->removeElement($test);
    }

    /**
     * Get test
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTest()
    {
        return $this->test;
    }
}
