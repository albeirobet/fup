<?php

namespace Fup\UnividaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of OrdenDiaReunionType
 *
 * @author root
 */
class OrdenDiaReunionType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('orden')
        ;
    }

    public function getName() {
        return "orden_dia_reunion_form";
    }

}
