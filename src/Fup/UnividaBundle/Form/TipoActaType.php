<?php

namespace Fup\UnividaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of TipoActa
 *
 * @author root
 */
class TipoActaType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('codigo')
                ->add('descripcion');
    }

    public function getName() {
        return "tipo_acta_form";
    }

}
