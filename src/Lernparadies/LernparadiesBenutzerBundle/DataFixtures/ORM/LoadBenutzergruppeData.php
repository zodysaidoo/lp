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

        /** @var Benutzergruppe $benutzergruppeAdmin */
        $benutzergruppeAdmin = $userManager->createGroup('Administrator');
        $benutzergruppeAdmin->addRole('ROLE_ADMIN');
        $benutzergruppeAdmin->addRole('ROLE_USER');
        $benutzergruppeAdmin->addRole('ROLE_SONATA_ADMIN');
        $benutzergruppeAdmin->addRole('ROLE_ALLOWED_TO_SWITCH');
        $em->persist($benutzergruppeAdmin);

        /** @var Benutzergruppe $benutzergruppeFreeUser */
        $benutzergruppeFreeUser = $userManager->createGroup('Freier User');
        $benutzergruppeFreeUser->addRole('ROLE_FREE_USER');
        $em->persist($benutzergruppeFreeUser);

        /** @var Benutzergruppe $benutzergruppeLehrer */
        $benutzergruppeLehrer = $userManager->createGroup('Lehrer');
        $benutzergruppeLehrer->addRole('ROLE_TEACHER');
        $em->persist($benutzergruppeLehrer);

        /** @var Benutzergruppe $benutzergruppeSchueler */
        $benutzergruppeSchueler = $userManager->createGroup('Schüler');
        $benutzergruppeSchueler->addRole('ROLE_STUDENT');
        $em->persist($benutzergruppeSchueler);

        /** @var Benutzergruppe $benutzergruppeSchulleitung */
        $benutzergruppeSchulleitung = $userManager->createGroup('Schulleitung');
        $benutzergruppeSchulleitung->addRole('ROLE_HEADTEACHER');
        $benutzergruppeSchulleitung->addRole('ROLE_TEACHER');
        $em->persist($benutzergruppeSchulleitung);

        /** @var Benutzergruppe $benutzergruppeRedakteur */
        $benutzergruppeRedakteur = $userManager->createGroup('Redakteur');
        $benutzergruppeRedakteur->addRole('ROLE_REDAKTEUR');
        $em->persist($benutzergruppeRedakteur);

        /** @var Benutzergruppe $benutzergruppeEltern */
        $benutzergruppeEltern = $userManager->createGroup('Eltern');
        $benutzergruppeEltern->addRole('ROLE_PARENT');
        $em->persist($benutzergruppeEltern);

        /** @var Benutzergruppe $benutzergruppeMinisteriumsmitarbeiter */
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