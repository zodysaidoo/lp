<?php
/**
 * Created by JetBrains PhpStorm.
 * User: zeid
 * Date: 07.10.13
 * Time: 18:01
 * To change this template use File | Settings | File Templates.
 */

namespace Lernparadies\LernparadiesBundle\Admin;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;

class BenutzergruppeAdmin extends Admin
{
	// setup the default sort column and order
	protected $datagridValues = array(
		'_sort_order' => 'ASC',
		'_sort_by' => 'benutzergruppeLabel'
	);

	protected function configureFormFields(FormMapper $formMapper)
	{
		$formMapper
			->add('benutzergruppeLabel')
			->add('benutzergruppeLogin')
		;
	}

	protected function configureDatagridFilters(DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add('benutzergruppeLabel')
		;
	}

	protected function configureListFields(ListMapper $listMapper)
	{
		$listMapper
			->addIdentifier('benutzergruppeLabel')
			->add('benutzergruppeLogin')
		;
	}
}