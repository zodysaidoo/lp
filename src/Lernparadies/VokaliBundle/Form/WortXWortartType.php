<?php

namespace Lernparadies\VokaliBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class WortXWortartType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('created_at')
            ->add('updated_at')
            ->add('wort')
            ->add('wortart')
            ->add('sprache')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Lernparadies\VokaliBundle\Entity\WortXWortart'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lernparadies_vokalibundle_wortxwortart';
    }
}
