<?php
/**
 * Created by JetBrains PhpStorm.
 * User: zeid
 * Date: 25.09.13
 * Time: 00:29
 * To change this template use File | Settings | File Templates.
 */

namespace Lernparadies\LernparadiesBenutzerBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Lernparadies\LernparadiesBenutzerBundle\Entity\Benutzer;


class LoadBenutzerData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
	/**
	 * @var ContainerInterface
	 */
	private $container;

	/**
	 * {@inheritDoc}
	 */
	public function setContainer(ContainerInterface $container = null)
	{
		$this->container = $container;
	}

	public function load(ObjectManager $em)
	{
		$benutzer = new Benutzer();
		$benutzer->setBenutzerBenutzerkontotyp($em->merge($this->getReference('benutzergruppe-administrator')));
		$benutzer->setUsername('Zeid');
		$benutzer->setEmail('Zeid@gmx.de');
		$benutzer->setBenutzerFriendlyUrl('zeid');
        $benutzer->setEnabled(true);

		$benutzer->setPlainPassword('0000');
		$em->persist($benutzer);

		$em->flush();
	}

	public function getOrder()
	{
		return 2; // the order in which fixtures will be loaded
	}
}