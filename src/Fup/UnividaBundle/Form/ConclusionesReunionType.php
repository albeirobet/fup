<?php

namespace Fup\UnividaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of ConclusionesReunionType
 *
 * @author root
 */
class ConclusionesReunionType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('conclusion')
        ;
    }

    public function getName() {
        return "conclusiones_reunion_form";
    }

}
