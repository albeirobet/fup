<?php

namespace Fup\UnividaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fup\UnividaBundle\Entity\TipoActa;
use Fup\UnividaBundle\Entity\ActaReunion;
use Fup\UnividaBundle\Entity\DatosBasicosReunion;
use Fup\UnividaBundle\Entity\AsistentesReunion;
/**
 * Description of ActasReunionController
 *
 * @author root
 */
class ActasReunionController extends Controller {

    public function cargarActasReunionAction() {
        $this->insertarActaReunion();
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
    
    public function insertarActaReunion(){
        $actaReunion = new ActaReunion();
        $datosBasicosReunion = new DatosBasicosReunion();        
        $actaReunion->setCodigo("GC-F0-001");
        $actaReunion->setTitulo("PROCESO GESTION DE CALIDAD");
        $actaReunion->setVersion(1.6);
        $now = new \DateTime('2000-12-31');
        $datosBasicosReunion->setFecha($now);
        
       
//        $datosBasicosReunion->setHoraFin($now->format('H:i:sP'));
//        $datosBasicosReunion->setHoraInicio($now->format('H:i:sP'));
        $datosBasicosReunion->setNumPersonasAsistentes(34);
        $datosBasicosReunion->setNumPersonasCitadas(78);
        $datosBasicosReunion->setSeccionInstitucion("DIRECCION Y PLANEACION ESTRATEGICA");
        $datosBasicosReunion->setTemaTratar("COMITÉ");
        
        
       
        $asistentesReunion = new AsistentesReunion();
        $asistentesReunion->setCargo("Gerente");
        $asistentesReunion->setNombre("Carlos Anchiko");
        $asistentesReunion->setMovil("2313213");
        $asistentesReunion->setFirma("AAA");
        $em = $this->getDoctrine()->getManager();
       // $em->persist($asistentesReunion);    
        $arrayAsistentes = array($asistentesReunion);
        
        $actaReunion->setDatosBasicos($datosBasicosReunion);
        $actaReunion->setAsistentes($arrayAsistentes);
        
       // $em->persist($datosBasicosReunion);
        $em->persist($actaReunion);
       
   
        $em->flush();
        
        
        $actas = $em->getRepository('FupUnividaBundle:ActaReunion')->findAll();
        
    
        foreach ($actas as $acta){
          //echo " -- ".$acta->getTitulo();
          $datosBasicosImpr=$acta->getDatosBasicos();
         // echo " - ".$datosBasicosImpr->getNumPersonasCitadas();
          
          $asistentes = $acta->getAsistentes();
          foreach ($asistentes as $asistente){
              echo "  -  ".$asistente->getNombre();
          }
          
          
        }
    }
    

}
