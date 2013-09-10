<?php

namespace Lernparadies\LernparadiesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BenutzerType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('benutzerNewdate')
            ->add('benutzerEditdate')
            ->add('benutzerFriendlyUrl')
            ->add('benutzerEmail')
            ->add('benutzerName')
            ->add('benutzerPasswort')
            ->add('benutzerLernerfolgspunkte')
            ->add('benutzerBenutzerkontotyp')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Lernparadies\LernparadiesBundle\Entity\Benutzer'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lernparadies_lernparadiesbundle_benutzer';
    }
}
