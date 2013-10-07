<?php
/**
 * Created by JetBrains PhpStorm.
 * User: zeid
 * Date: 07.10.13
 * Time: 18:02
 * To change this template use File | Settings | File Templates.
 */

namespace Lernparadies\LernparadiesBundle\Admin;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;

class SpracheAdmin extends Admin
{
	// setup the defaut sort column and order
	protected $datagridValues = array(
		'_sort_order' => 'DESC',
		'_sort_by' => 'spracheCode'
	);

	protected function configureFormFields(FormMapper $formMapper)
	{
		$formMapper
			->add('spracheName')
			->add('spracheCode')
			->add('spracheAktiv')
		;
	}

	protected function configureDatagridFilters(DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add('spracheName')
			->add('spracheCode')
			->add('spracheAktiv')
		;
	}

	protected function configureListFields(ListMapper $listMapper)
	{
		$listMapper
			->addIdentifier('spracheName')
			->add('spracheCode')
			->add('spracheAktiv')
		;
	}
}