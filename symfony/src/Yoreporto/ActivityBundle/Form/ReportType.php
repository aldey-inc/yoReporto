<?php

namespace Yoreporto\ActivityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReportType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('createdat')//
            //->add('updatedat')//
            ->add('reportat')//
            //->add('status')//

            ->add('activities','collection', array
                (                    
                    'type' => new ActivityType(),
                    'allow_add'    => true,
                )
            )            
            ->add('Guardar','submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Yoreporto\ActivityBundle\Entity\Report'            
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'yoreporto_activitybundle_report';
    }

}
