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
     * @ORM\Column(type="string", name="trainable_property")
     */
    private  $trainableProperty;

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
}