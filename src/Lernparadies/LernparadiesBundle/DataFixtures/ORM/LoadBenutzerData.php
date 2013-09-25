<?php
/**
 * Created by JetBrains PhpStorm.
 * User: zeid
 * Date: 25.09.13
 * Time: 00:29
 * To change this template use File | Settings | File Templates.
 */

namespace Lernparadies\LernparadieBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Lernparadies\LernparadiesBundle\Entity\Benutzer;


class LoadBenutzerData extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $em)
	{
		$benutzer = new Benutzer();
		$benutzer->setBenutzerBenutzerkontotyp($em->merge($this->getReference('benutzergruppe-administrator')));
		$benutzer->setBenutzerName('Zeid');
		$benutzer->setBenutzerEmail('Zeid@gmx.de');
		$benutzer->setBenutzerFriendlyUrl('zeid');
		$benutzer->setBenutzerPasswort('0000');
		$em->persist($benutzer);

		$em->flush();
	}

	public function getOrder()
	{
		return 3; // the order in which fixtures will be loaded
	}
}