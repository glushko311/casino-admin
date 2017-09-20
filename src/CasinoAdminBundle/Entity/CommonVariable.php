<?php
/**
 * Created by PhpStorm.
 * User: splinestudio-hp-vadim
 * Date: 07.09.17
 * Time: 14:06
 */

namespace CasinoAdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * Class CommonVariable
 * @package CasinoAdminBundle\Entity
 * @ORM\Table(name="common_var")
 * @ORM\Entity
 */
class CommonVariable
{
    /**
     * @ORM\Column(type="integer", name="_id")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", name="var_name, length=50, nullable=false")
     */
    private $varName = '';

    /**
     * @ORM\Column(type="string", name="value, nullable=false")
     */
    private $value;


   

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set varName
     *
     * @param string $varName
     *
     * @return CommonVariable
     */
    public function setVarName($varName)
    {
        $this->varName = $varName;

        return $this;
    }

    /**
     * Get varName
     *
     * @return string
     */
    public function getVarName()
    {
        return $this->varName;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return CommonVariable
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}
