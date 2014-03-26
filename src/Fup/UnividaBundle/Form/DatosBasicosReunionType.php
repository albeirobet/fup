<?php

namespace Fup\UnividaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of DatosBasicosReunionType
 *
 * @author root
 */
class DatosBasicosReunionType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('fecha')
                ->add('horaInicio', 'time')
                ->add('horaFin', 'time')
                ->add('seccionInstitucion')
                ->add('numPersonasCitadas')
                ->add('numPersonasAsistentes')
                ->add('temaTratar')
        ;
    }

    public function getName() {
        return "datos_basicos_reunion_form";
    }

}
