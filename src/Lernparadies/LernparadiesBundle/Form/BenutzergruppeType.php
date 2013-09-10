<?php

namespace Lernparadies\LernparadiesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BenutzergruppeType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('benutzergruppeNewdate')
            ->add('benutzergruppeEditdate')
            ->add('benutzergruppeLabel')
            ->add('benutzergruppeLogin')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Lernparadies\LernparadiesBundle\Entity\Benutzergruppe'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lernparadies_lernparadiesbundle_benutzergruppe';
    }
}
