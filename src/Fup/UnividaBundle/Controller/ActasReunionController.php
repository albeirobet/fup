<?php

namespace Fup\UnividaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fup\UnividaBundle\Entity\TipoActa;

/**
 * Description of ActasReunionController
 *
 * @author root
 */
class ActasReunionController extends Controller {

    public function cargarActasReunionAction() {
        $this->insertarTipoActaReunionAction();
        $em = $this->getDoctrine()->getManager();
        $actas = $em->getRepository('FupUnividaBundle:TipoActa')->findAll();
        return $this->render('FupUnividaBundle:ActasReunion:actasReunion.html.twig', array('actas' => $actas));
    }

    public function insertarTipoActaReunionAction() {
        $tipoActa = new TipoActa();
        $tipoActa->setCodigo("ACT-R");
        $tipoActa->setDescripcion("Acta de Reunion");
        $em = $this->getDoctrine()->getManager();
        $em->persist($tipoActa);
        $em->flush();
    }

}
