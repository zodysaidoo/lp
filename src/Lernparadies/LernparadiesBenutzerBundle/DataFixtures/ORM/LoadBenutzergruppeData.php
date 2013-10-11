<?php
/**
 * Created by JetBrains PhpStorm.
 * User: zeid
 * Date: 24.09.13
 * Time: 23:32
 * To change this template use File | Settings | File Templates.
 */

namespace Lernparadies\LernparadiesBenutzerBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Lernparadies\LernparadiesBenutzerBundle\Entity\Benutzergruppe;

class LoadBenutzergruppeData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
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
        $userManager = $this->container->get('fos_user.group_manager');

        $benutzergruppeAdmin = $userManager->createGroup('Administrator');
        $benutzergruppeAdmin->addRole('ROLE_ADMIN');
        $em->persist($benutzergruppeAdmin);

        $benutzergruppeFreeUser = $userManager->createGroup('Freier User');
        $benutzergruppeFreeUser->addRole('ROLE_FREE_USER');
        $em->persist($benutzergruppeFreeUser);

        $benutzergruppeLehrer = $userManager->createGroup('Lehrer');
        $benutzergruppeLehrer->addRole('ROLE_TEACHER');
        $em->persist($benutzergruppeLehrer);

        $benutzergruppeSchueler = $userManager->createGroup('Schüler');
        $benutzergruppeSchueler->addRole('ROLE_STUDENT');
        $em->persist($benutzergruppeSchueler);

        $benutzergruppeSchulleitung = $userManager->createGroup('Schulleitung');
        $benutzergruppeSchulleitung->addRole('ROLE_HEADTEACHER');
        $benutzergruppeSchulleitung->addRole('ROLE_TEACHER');
        $em->persist($benutzergruppeSchulleitung);

        $benutzergruppeRedakteur = $userManager->createGroup('Redakteur');
		$benutzergruppeRedakteur->addRole('ROLE_REDAKTEUR');
		$em->persist($benutzergruppeRedakteur);

        $benutzergruppeEltern = $userManager->createGroup('Eltern');
		$benutzergruppeEltern->addRole('ROLE_PARENT');
		$em->persist($benutzergruppeEltern);

        $benutzergruppeMinisteriumsmitarbeiter = $userManager->createGroup('Ministeriumsmitarbeiter');
		$benutzergruppeMinisteriumsmitarbeiter->addRole('ROLE_GOUVERNMENT_EMPLOYEE');
		$em->persist($benutzergruppeMinisteriumsmitarbeiter);

		$em->flush();

		$this->addReference('benutzergruppe-administrator', $benutzergruppeAdmin);
	}

	public function getOrder()
	{
		return 1; // the order in which fixtures will be loaded
	}
}