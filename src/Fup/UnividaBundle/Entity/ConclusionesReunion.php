<?php

namespace Fup\UnividaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConclusionesReunion
 *
 * @ORM\Table(name ="tbl_conclusiones_reunion")
 * @ORM\Entity(repositoryClass="Fup\UnividaBundle\Entity\ConclusionesReunionRepository")
 */
class ConclusionesReunion
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
     * @ORM\Column(name="conclusion", type="string", length=500)
     */
    private $conclusion;


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
     * Set conclusion
     *
     * @param string $conclusion
     * @return ConclusionesReunion
     */
    public function setConclusion($conclusion)
    {
        $this->conclusion = $conclusion;

        return $this;
    }

    /**
     * Get conclusion
     *
     * @return string 
     */
    public function getConclusion()
    {
        return $this->conclusion;
    }
}
