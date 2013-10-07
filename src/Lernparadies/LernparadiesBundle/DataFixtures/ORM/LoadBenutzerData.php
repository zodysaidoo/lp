<?php
/**
 * Created by JetBrains PhpStorm.
 * User: zeid
 * Date: 25.09.13
 * Time: 00:29
 * To change this template use File | Settings | File Templates.
 */

namespace Lernparadies\LernparadiesBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Lernparadies\LernparadiesBundle\Entity\Benutzer;


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
		$benutzer->setBenutzerName('Zeid');
		$benutzer->setBenutzerEmail('Zeid@gmx.de');
		$benutzer->setBenutzerFriendlyUrl('zeid');
		$password = '0000';

		// encode the password
		$factory = $this->container->get('security.encoder_factory');
		$encoder = $factory->getEncoder($benutzer);
		$encodedPassword = $encoder->encodePassword($password, $benutzer->getSalt() );
		$benutzer->setBenutzerPasswort($encodedPassword);
		$em->persist($benutzer);

		$em->flush();
	}

	public function getOrder()
	{
		return 3; // the order in which fixtures will be loaded
	}
}