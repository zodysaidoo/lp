<?php

namespace Lernparadies\VokaliBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VokabelType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('wort1', 'text')
            ->add('wort2', 'text')
            ->add('wort1sprache')
            ->add('wort2sprache')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Lernparadies\VokaliBundle\Entity\Vokabel'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lernparadies_vokalibundle_vokabel';
    }
}
