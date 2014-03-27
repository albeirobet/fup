<?php

namespace Fup\UnividaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of GeneralidadesReunionType
 *
 * @author root
 */
class GeneralidadesReunionType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('generalidad')
        ;
    }

    public function getName() {
        return "generalidades_reunion_form";
    }

}
