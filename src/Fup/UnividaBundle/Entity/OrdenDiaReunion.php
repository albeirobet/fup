<?php

namespace Fup\UnividaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdenDiaReunion
 *
 * @ORM\Table(name="tbl_orden_dia_reunion")
 * @ORM\Entity(repositoryClass="Fup\UnividaBundle\Entity\OrdenDiaReunionRepository")
 */
class OrdenDiaReunion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="orden", type="string", length=500)
     */
    private $orden;


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
     * Set orden
     *
     * @param string $orden
     * @return OrdenDiaReunion
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return string 
     */
    public function getOrden()
    {
        return $this->orden;
    }
}
