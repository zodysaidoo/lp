<?php
/**
 * Created by JetBrains PhpStorm.
 * User: zeid
 * Date: 20.10.13
 * Time: 20:10
 * To change this template use File | Settings | File Templates.
 */

namespace Lernparadies\VokaliBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Knp\Menu\ItemInterface as MenuItemInterface;
use Lernparadies\VokaliBundle\Entity\WortXWortart;

class WortXWortartAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('sprache')
            ->add('wortart')
            ->add('wort')
            ->add('flexionen', 'sonata_type_model',
                array(

                    'by_reference' => true,
                    'multiple' => true,
                    'expanded' => true,
                ))
            ->add('enabled')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('sprache')
            ->add('wortart')
            ->add('wort')
            ->add('enabled')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('sprache')
            ->addIdentifier('wortart')
            ->addIdentifier('wort')
            ->addIdentifier('enabled')
        ;
    }
}