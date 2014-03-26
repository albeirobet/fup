<?php

namespace Fup\UnividaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fup\UnividaBundle\Entity\TipoActa;
use Fup\UnividaBundle\Entity\ActaReunion;
use Fup\UnividaBundle\Entity\DatosBasicosReunion;
use Fup\UnividaBundle\Entity\AsistentesReunion;
use Fup\UnividaBundle\Form\ActaReunionType;
use Fup\UnividaBundle\Form\DatosBasicosReunionType;
use Fup\UnividaBundle\Form\AsistentesReunionType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of ActasReunionController
 *
 * @author root
 */
class ActasReunionController extends Controller {

    public function cargarActasReunionAction() {
        //  $this->insertarActaReunion();
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

    public function insertarActaReunion() {
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


        foreach ($actas as $acta) {
            //echo " -- ".$acta->getTitulo();
            $datosBasicosImpr = $acta->getDatosBasicos();
            // echo " - ".$datosBasicosImpr->getNumPersonasCitadas();

            $asistentes = $acta->getAsistentes();
            foreach ($asistentes as $asistente) {
                echo "  -  " . $asistente->getNombre();
            }
        }
    }

    public function nuevaActaReunionAction(Request $request) {
        $request = $this->getRequest();
        $actaReunion = new ActaReunion();
        $form = $this->createForm(new ActaReunionType(), $actaReunion);
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $session = $request->getSession();
                $session->set('actaReunion', $actaReunion);
                return $this->redirect($this->generateURL('fup_univida_datos_basicos_nueva_acta_reunion'));
            }
        }
        return $this->render('FupUnividaBundle:ActasReunion:nuevaActaReunion.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    public function agregarDatosBasicosActaReunionAction(Request $request) {
        $session = $request->getSession();
        $actaReunion = $session->get('actaReunion');
        $request = $this->getRequest();
        $datosBasicosReunion = new DatosBasicosReunion();
        $form = $this->createForm(new DatosBasicosReunionType, $datosBasicosReunion);
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $actaReunion->setDatosBasicos($datosBasicosReunion);
                $session->remove('actaReunion');
                $session->set('actaReunion', $actaReunion);
                $em->persist($actaReunion);
                $em->flush();
                return $this->redirect($this->generateURL('fup_univida_asistentes_nueva_acta_reunion'));
            }
        }
        return $this->render('FupUnividaBundle:ActasReunion:datosBasicosActaReunion.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    public function agregarAsistentesActaReunion(Request $request) {
        $session = $request->getSession();
        $actaReunion = $session->get('actaReunion');
        $request = $this->getRequest();
        $asistentesReunion = new AsistentesReunion();
        $form = $this->createForm(new AsistentesReunionType(), $asistentesReunion);
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $arrayAsistentesReunion = $actaReunion->getAsistentes();
                array_push($arrayAsistentesReunion, $asistentesReunion);
                // $session->remove('actaReunion');
                // $session->set('actaReunion', $actaReunion);
                $em = $this->getDoctrine()->getManager();
                $em->persist($actaReunion);
                $em->flush();
                return $this->redirect($this->generateURL('fup_univida_actas_reunion'));
            }
        }
        return $this->render('FupUnividaBundle:ActasReunion:asistentesActaReunion.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

}

//public function agregarDatosBasicosActaReunionAction(Request $request) {
//        $session = $request->getSession();
//        $actaReunion = $session->get('actaReunion');
//        $request = $this->getRequest();
//        $datosBasicosReunion = new DatosBasicosReunion();
//        $form = $this->createForm(new DatosBasicosReunionType, $datosBasicosReunion);
//        if ($request->getMethod() == 'POST') {
//            echo 'Entre aki';
//            $form->bind($request);
//            if ($form->isValid()) {
//                echo 'entre akiiiiiiiiiii';
//                $actaReunion->setDatosBasicos($datosBasicosReunion);
//                //$session->remove('actaReunion');
//               // $session->set('actaReunion', $actaReunion);
//                return $this->redirect($this->generateURL('fup_univida_asistentes_nueva_acta_reunion'));
//            }
//        }
//        return $this->render('FupUnividaBundle:ActasReunion:datosBasicosActaReunion.html.twig', array(
//                    'form' => $form->createView(),
//        ));
//    }
//
//    public function agregarAsistentesActaReunion(Request $request) {
//        $session = $request->getSession();
//        $actaReunion = $session->get('actaReunion');
//        $request = $this->getRequest();
//        $asistentesReunion = new AsistentesReunion();
//        $form = $this->createForm(new AsistentesReunionType(), $asistentesReunion);
//        if ($request->getMethod() == 'POST') {
//            $form->bind($request);
//            if ($form->isValid()) {
//                $arrayAsistentesReunion = $actaReunion->getAsistentes();
//                array_push($arrayAsistentesReunion, $asistentesReunion);
//               // $session->remove('actaReunion');
//               // $session->set('actaReunion', $actaReunion);
//                $em = $this->getDoctrine()->getManager();
//                $em->persist($actaReunion);
//                $em->flush();
//                return $this->redirect($this->generateURL('fup_univida_actas_reunion'));
//            }
//        }
//        return $this->render('FupUnividaBundle:ActasReunion:asistentesActaReunion.html.twig', array(
//                    'form' => $form->createView(),
//        ));
//    }
//
//}
