<?php

namespace Fup\UnividaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of ActaReunionType
 *
 * @author root
 */
class ActaReunionType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('codigo')
                ->add('titulo')
                ->add('version')
        ;
    }

    public function getName() {
        return "acta_reunion_form";
    }

}
