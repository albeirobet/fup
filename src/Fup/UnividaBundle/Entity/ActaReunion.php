<?php

namespace Fup\UnividaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ActaReunion
 *
 * @ORM\Table(name="tbl_acta_reunion")
 * @ORM\Entity(repositoryClass="Fup\UnividaBundle\Entity\ActaReunionRepository")
 */
class ActaReunion {

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
     * @ORM\Column(name="codigo", type="string", length=255)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=255)
     */
    private $titulo;

    /**
     * @var float
     *
     * @ORM\Column(name="version", type="float")
     */
    private $version;

    /**
     * @ORM\OneToOne(targetEntity="DatosBasicosReunion" , cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="fk_datos_basicos_reunion", referencedColumnName="id")
     */
    protected $datosBasicos;

    /**
     * @ORM\ManyToMany(targetEntity="AsistentesReunion", cascade={"persist", "remove"})
     * @ORM\JoinTable(name="tbl_actareunion_asistentes",
     *      joinColumns={@ORM\JoinColumn(name="fk_acta_reunion", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="fk_asistentes_reunion", referencedColumnName="id", unique=true)}
     *      )
     */
    protected $asistentes;

    /**
     * @ORM\ManyToMany(targetEntity="ConclusionesReunion", cascade={"persist", "remove"})
     * @ORM\JoinTable(name="tbl_actareunion_conclusiones",
     *      joinColumns={@ORM\JoinColumn(name="fk_acta_reunion", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="fk_conclusiones_reunion", referencedColumnName="id", unique=true)}
     *      )
     */
    protected $conclusiones;

    /**
     * @ORM\ManyToMany(targetEntity="GeneralidadesReunion", cascade={"persist", "remove"})
     * @ORM\JoinTable(name="tbl_actareunion_generalidades",
     *      joinColumns={@ORM\JoinColumn(name="fk_acta_reunion", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="fk_generalidades_reunion", referencedColumnName="id", unique=true)}
     *      )
     */
    protected $generalidades;

    /**
     * @ORM\ManyToMany(targetEntity="OrdenDiaReunion", cascade={"persist", "remove"})
     * @ORM\JoinTable(name="tbl_actareunion_ordenes_dia",
     *      joinColumns={@ORM\JoinColumn(name="fk_acta_reunion", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="fk_ordenes_dia_reunion", referencedColumnName="id", unique=true)}
     *      )
     */
    protected $itemsOrdenDia;

    /**
     * @ORM\ManyToMany(targetEntity="ResponsablesActividadesReunion", cascade={"persist", "remove"})
     * @ORM\JoinTable(name="tbl_actareunion_responsables_actividades",
     *      joinColumns={@ORM\JoinColumn(name="fk_acta_reunion", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="fk_responsables_actividades_reunion", referencedColumnName="id", unique=true)}
     *      )
     */
    protected $actividadesResponsables;

    public function __construct() {
        $this->products = new ArrayCollection();
        $this->conclusiones = new ArrayCollection();
        $this->generalidades = new ArrayCollection();
        $this->itemsOrdenDia = new ArrayCollection();
        $this->actividadesResponsables = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return ActaReunion
     */
    public function setCodigo($codigo) {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo() {
        return $this->codigo;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return ActaReunion
     */
    public function setTitulo($titulo) {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo() {
        return $this->titulo;
    }

    /**
     * Set version
     *
     * @param float $version
     * @return ActaReunion
     */
    public function setVersion($version) {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return float 
     */
    public function getVersion() {
        return $this->version;
    }

    public function getDatosBasicos() {
        return $this->datosBasicos;
    }

    public function setDatosBasicos($datosBasicos) {
        $this->datosBasicos = $datosBasicos;
    }

    public function getAsistentes() {
        return $this->asistentes;
    }

    public function setAsistentes($asistentes) {
        $this->asistentes = $asistentes;
    }

    public function getConclusiones() {
        return $this->conclusiones;
    }

    public function getGeneralidades() {
        return $this->generalidades;
    }

    public function getItemsOrdenDia() {
        return $this->itemsOrdenDia;
    }

    public function getActividadesResponsables() {
        return $this->actividadesResponsables;
    }

    public function setConclusiones($conclusiones) {
        $this->conclusiones = $conclusiones;
    }

    public function setGeneralidades($generalidades) {
        $this->generalidades = $generalidades;
    }

    public function setItemsOrdenDia($itemsOrdenDia) {
        $this->itemsOrdenDia = $itemsOrdenDia;
    }

    public function setActividadesResponsables($actividadesResponsables) {
        $this->actividadesResponsables = $actividadesResponsables;
    }

}
