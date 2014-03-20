<?php

namespace Fup\UnividaBundle\Controller;

use Fup\UnividaBundle\Form\TipoActaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fup\UnividaBundle\Entity\TipoActa;

/**
 * Description of ActasController
 *
 * @author root
 */
class ActasController extends Controller {

    public function nuevoTipoActaAction() {
        //-- Obtenemos el request que contendrá los datos
        $request = $this->getRequest();
        $tipoActa = new TipoActa();
        $form = $this->createForm(new TipoActaType(), $tipoActa);

        //-- En caso de que el request haya sido invocado por POST
        //   procesaremos el formulario
        if ($request->getMethod() == 'POST') {
            //-- Pasamos el request el método bindRequest() del objeto 
            //   formulario el cual obtiene los datos del formulario
            //   y los carga dentro del objeto Article que está contenido
            //   también dentro del objeto Type
            $form->bind($request);

            //-- Con esto nuestro formulario ya es capaz de decirnos si
            //   los dato son válidos o no y en caso de ser así
            if ($form->isValid()) {
                //-- Procesamos los datos que ya están automáticamente
                //   cargados dentro de nuestra variable $articulo, ya sea
                //   grabándolos en la base de datos, enviando un mail, etc
                //-- Finalmente, al finalizar el procesamiento, siempre es
                //   importante realizar una redirección para no tener el
                //   problema de que al intentar actualizar el navegador
                //   nos dice que lo datos se deben volver a reenviar. En
                //   este caso iremos a la página del listado de artículos
                $em = $this->getDoctrine()->getManager();
                $em->persist($tipoActa);
                $em->flush();

                return $this->redirect($this->generateURL('fup_univida_actas_reunion'));
            }
        }
        return $this->render('FupUnividaBundle:Actas:nuevoTipoActa.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

}
