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
use Lernparadies\VokaliBundle\Entity\Wortart;


class LoadWortartData extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $em)
	{
		$wortartNomen = new Wortart();
		$wortartNomen->setWortartName('Nomen');
		$wortartNomen->setWortartKommentar('Nomen');
		$em->persist($wortartNomen);

		$wortartAdjektiv = new Wortart();
		$wortartAdjektiv->setWortartName('Adjektiv');
		$wortartAdjektiv->setWortartKommentar('Adjektiv');
		$em->persist($wortartAdjektiv);

		$wortartVerb = new Wortart();
		$wortartVerb->setWortartName('Verb');
		$wortartVerb->setWortartKommentar('Verb');
		$em->persist($wortartVerb);

		$em->flush();
	}

	public function getOrder()
	{
		return 1; // the order in which fixtures will be loaded
	}
}