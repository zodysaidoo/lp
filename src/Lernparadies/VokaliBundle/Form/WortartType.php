<?php

namespace Lernparadies\VokaliBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class WortartType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('wortartNewdate')
            ->add('wortartEditdate')
            ->add('wortartName')
            ->add('wortartKommentar')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Lernparadies\VokaliBundle\Entity\Wortart'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lernparadies_vokalibundle_wortart';
    }
}
