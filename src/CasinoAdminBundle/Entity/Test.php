<?php
/**
 * Created by PhpStorm.
 * User: splinestudio-hp-vadim
 * Date: 12.09.17
 * Time: 14:32
 */

namespace CasinoAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Class Test
 * @package CasinoAdminBundle\Entity
 * @ORM\Table(name="test")
 * @ORM\Entity
 */
class Test
{
 /**
 * @ORM\Column(type="integer", name="id")
 * @ORM\Id
 * @ORM\GeneratedValue(strategy="AUTO")
 */
    private $id;
    /**
     * @ORM\Column(type="string", name="text")
     */
    private $text;
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
        return $this->id;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Test
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set buffId
     *
     * @param integer $buffId
     *
     * @return Test
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
