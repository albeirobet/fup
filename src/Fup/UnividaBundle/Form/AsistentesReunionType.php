<?php

namespace Fup\UnividaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of AsistentesReunionType
 *
 * @author root
 */
class AsistentesReunionType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('nombre')
                ->add('cargo')
                ->add('movil')
                ->add('firma')
        ;
    }

    public function getName() {
        return "asistentes_reunion_form";
    }

}
