<?php

namespace Yoreporto\ActividadBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ActivityType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('hour','integer',array('required'=>true))
            ->add('minutes','integer',array('required'=>true))
            ->add('description','textarea')
            ->add('starttime','datetime')
            ->add('endtime','datetime')
            ->add('createdat','datetime')
            ->add('updatedat','datetime')
            ->add('idproject')
            ->add('idreport')
            ->add('Guardar','submit');
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Yoreporto\ActividadBundle\Entity\Activity'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'yoreporto_actividadbundle_activity';
    }
}
