<?php

namespace Fup\UnividaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResponsablesActividadesReunion
 *
 * @ORM\Table(name="tbl_responsables_actividades_reunion")
 * @ORM\Entity(repositoryClass="Fup\UnividaBundle\Entity\ResponsablesActividadesReunionRepository")
 */
class ResponsablesActividadesReunion
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
     * @ORM\Column(name="actividad", type="string", length=500)
     */
    private $actividad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaEntrega", type="datetime")
     */
    private $fechaEntrega;

    /**
     * @var string
     *
     * @ORM\Column(name="recursosAsignados", type="string", length=500)
     */
    private $recursosAsignados;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=255)
     */
    private $estado;


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
     * Set actividad
     *
     * @param string $actividad
     * @return ResponsablesActividadesReunion
     */
    public function setActividad($actividad)
    {
        $this->actividad = $actividad;

        return $this;
    }

    /**
     * Get actividad
     *
     * @return string 
     */
    public function getActividad()
    {
        return $this->actividad;
    }

    /**
     * Set fechaEntrega
     *
     * @param \DateTime $fechaEntrega
     * @return ResponsablesActividadesReunion
     */
    public function setFechaEntrega($fechaEntrega)
    {
        $this->fechaEntrega = $fechaEntrega;

        return $this;
    }

    /**
     * Get fechaEntrega
     *
     * @return \DateTime 
     */
    public function getFechaEntrega()
    {
        return $this->fechaEntrega;
    }

    /**
     * Set recursosAsignados
     *
     * @param string $recursosAsignados
     * @return ResponsablesActividadesReunion
     */
    public function setRecursosAsignados($recursosAsignados)
    {
        $this->recursosAsignados = $recursosAsignados;

        return $this;
    }

    /**
     * Get recursosAsignados
     *
     * @return string 
     */
    public function getRecursosAsignados()
    {
        return $this->recursosAsignados;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return ResponsablesActividadesReunion
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
