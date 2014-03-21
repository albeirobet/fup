<?php

namespace Fup\UnividaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GeneralidadesReunion
 *
 * @ORM\Table(name="tbl_generalidades_reunion")
 * @ORM\Entity(repositoryClass="Fup\UnividaBundle\Entity\GeneralidadesReunionRepository")
 */
class GeneralidadesReunion
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
     * @ORM\Column(name="generalidad", type="string", length=500)
     */
    private $generalidad;


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
     * Set generalidad
     *
     * @param string $generalidad
     * @return GeneralidadesReunion
     */
    public function setGeneralidad($generalidad)
    {
        $this->generalidad = $generalidad;

        return $this;
    }

    /**
     * Get generalidad
     *
     * @return string 
     */
    public function getGeneralidad()
    {
        return $this->generalidad;
    }
}
