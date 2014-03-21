<?php

namespace Fup\UnividaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AsistentesReunion
 *
 * @ORM\Table(name="tbl_asistentes_reunion")
 * @ORM\Entity(repositoryClass="Fup\UnividaBundle\Entity\AsistentesReunionRepository")
 */
class AsistentesReunion {

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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo", type="string", length=255)
     */
    private $cargo;

    /**
     * @var string
     *
     * @ORM\Column(name="movil", type="string", length=255)
     */
    private $movil;

    /**
     * @var string
     *
     * @ORM\Column(name="firma", type="string", length=255)
     */
    private $firma;


//    protected $actaReunion;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return AsistentesReunion
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set cargo
     *
     * @param string $cargo
     * @return AsistentesReunion
     */
    public function setCargo($cargo) {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return string 
     */
    public function getCargo() {
        return $this->cargo;
    }

    /**
     * Set movil
     *
     * @param string $movil
     * @return AsistentesReunion
     */
    public function setMovil($movil) {
        $this->movil = $movil;

        return $this;
    }

    /**
     * Get movil
     *
     * @return string 
     */
    public function getMovil() {
        return $this->movil;
    }

    /**
     * Set firma
     *
     * @param string $firma
     * @return AsistentesReunion
     */
    public function setFirma($firma) {
        $this->firma = $firma;

        return $this;
    }

    /**
     * Get firma
     *
     * @return string 
     */
    public function getFirma() {
        return $this->firma;
    }

}
