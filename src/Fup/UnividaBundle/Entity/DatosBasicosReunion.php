<?php

namespace Fup\UnividaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DatosBasicosReunion
 *
 * @ORM\Table(name="tbl_datos_basicos_reunion")
 * @ORM\Entity(repositoryClass="Fup\UnividaBundle\Entity\DatosBasicosReunionRepository")
 */
class DatosBasicosReunion
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaInicio", type="time" ,nullable=true)
     */
    private $horaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaFin", type="time" ,nullable=true)
     */
    private $horaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="seccionInstitucion", type="string", length=500)
     */
    private $seccionInstitucion;

    /**
     * @var integer
     *
     * @ORM\Column(name="numPersonasCitadas", type="integer")
     */
    private $numPersonasCitadas;

    /**
     * @var integer
     *
     * @ORM\Column(name="numPersonasAsistentes", type="integer")
     */
    private $numPersonasAsistentes;

    /**
     * @var string
     *
     * @ORM\Column(name="temaTratar", type="string", length=500)
     */
    private $temaTratar;

    
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return DatosBasicosReunion
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set horaInicio
     *
     * @param \DateTime $horaInicio
     * @return DatosBasicosReunion
     */
    public function setHoraInicio($horaInicio)
    {
        $this->horaInicio = $horaInicio;

        return $this;
    }

    /**
     * Get horaInicio
     *
     * @return \DateTime 
     */
    public function getHoraInicio()
    {
        return $this->horaInicio;
    }

    /**
     * Set horaFin
     *
     * @param \DateTime $horaFin
     * @return DatosBasicosReunion
     */
    public function setHoraFin($horaFin)
    {
        $this->horaFin = $horaFin;

        return $this;
    }

    /**
     * Get horaFin
     *
     * @return \DateTime 
     */
    public function getHoraFin()
    {
        return $this->horaFin;
    }

    /**
     * Set seccionInstitucion
     *
     * @param string $seccionInstitucion
     * @return DatosBasicosReunion
     */
    public function setSeccionInstitucion($seccionInstitucion)
    {
        $this->seccionInstitucion = $seccionInstitucion;

        return $this;
    }

    /**
     * Get seccionInstitucion
     *
     * @return string 
     */
    public function getSeccionInstitucion()
    {
        return $this->seccionInstitucion;
    }

    /**
     * Set numPersonasCitadas
     *
     * @param integer $numPersonasCitadas
     * @return DatosBasicosReunion
     */
    public function setNumPersonasCitadas($numPersonasCitadas)
    {
        $this->numPersonasCitadas = $numPersonasCitadas;

        return $this;
    }

    /**
     * Get numPersonasCitadas
     *
     * @return integer 
     */
    public function getNumPersonasCitadas()
    {
        return $this->numPersonasCitadas;
    }

    /**
     * Set numPersonasAsistentes
     *
     * @param integer $numPersonasAsistentes
     * @return DatosBasicosReunion
     */
    public function setNumPersonasAsistentes($numPersonasAsistentes)
    {
        $this->numPersonasAsistentes = $numPersonasAsistentes;

        return $this;
    }

    /**
     * Get numPersonasAsistentes
     *
     * @return integer 
     */
    public function getNumPersonasAsistentes()
    {
        return $this->numPersonasAsistentes;
    }

    /**
     * Set temaTratar
     *
     * @param string $temaTratar
     * @return DatosBasicosReunion
     */
    public function setTemaTratar($temaTratar)
    {
        $this->temaTratar = $temaTratar;

        return $this;
    }

    /**
     * Get temaTratar
     *
     * @return string 
     */
    public function getTemaTratar()
    {
        return $this->temaTratar;
    }
}
