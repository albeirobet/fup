<?php

namespace Fup\UnividaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of ResponsablesActividadesReunionType
 *
 * @author root
 */
class ResponsablesActividadesReunionType extends AbstractType {
    
       public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('actividad')
                ->add('responsable')
                ->add('fechaEntrega')
                ->add('recursosAsignados')
                ->add('estado')
        ;
    }

    
    public function getName() {
      return "responsables_actividades_reunion_form"; 
    }

}
