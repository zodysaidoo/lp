<?php
/**
 * Created by JetBrains PhpStorm.
 * User: zeid
 * Date: 03.10.13
 * Time: 14:11
 * To change this template use File | Settings | File Templates.
 */

namespace Lernparadies\VokaliBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Lernparadies\VokaliBundle\Entity\Wort;


class LoadWortData extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $em)
	{
		$wortHaus = new Wort();
		$wortHaus->setWortName('Haus');
		$em->persist($wortHaus);

		$wortHouse = new Wort();
		$wortHouse->setWortName('house');
		$em->persist($wortHouse);

		$wortBaum = new Wort();
		$wortBaum->setWortName('Baum');
		$em->persist($wortBaum);

		$wortTree = new Wort();
		$wortTree->setWortName('tree');
		$em->persist($wortTree);

		$em->flush();
	}

	public function getOrder()
	{
		return 2; // the order in which fixtures will be loaded
	}
}