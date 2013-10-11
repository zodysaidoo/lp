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
use Lernparadies\LernparadiesBenutzerBundle\Entity\Benutzergruppe;

class LoadBenutzergruppeData extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $em)
	{
		$benutzergruppeAdmin = new Benutzergruppe();
		$benutzergruppeAdmin->setBenutzergruppeLabel('Administrator');
		$benutzergruppeAdmin->setBenutzergruppeStatuscode(0);
		$benutzergruppeAdmin->setBenutzergruppeLogin( true );
		$em->persist($benutzergruppeAdmin);

		$benutzergruppeFreeUser = new Benutzergruppe();
		$benutzergruppeFreeUser->setBenutzergruppeLabel('Freier User');
		$benutzergruppeFreeUser->setBenutzergruppeStatuscode(1);
		$benutzergruppeFreeUser->setBenutzergruppeLogin( true );
		$em->persist($benutzergruppeFreeUser);

		$benutzergruppe = new Benutzergruppe();
		$benutzergruppe->setBenutzergruppeLabel( $benutzergruppeFreeUser->getBenutzergruppeLabel().' unbestätigt');
		$benutzergruppe->setBenutzergruppeStatuscode( $benutzergruppeFreeUser->getBenutzergruppeStatuscode()+100 );
		$benutzergruppe->setBenutzergruppeLogin( false );
		$em->persist($benutzergruppe);

		$benutzergruppeLehrer = new Benutzergruppe();
		$benutzergruppeLehrer->setBenutzergruppeLabel('Lehrer');
		$benutzergruppeLehrer->setBenutzergruppeStatuscode(2);
		$benutzergruppeLehrer->setBenutzergruppeLogin( true );
		$em->persist($benutzergruppeLehrer);

		$benutzergruppe = new Benutzergruppe();
		$benutzergruppe->setBenutzergruppeLabel( $benutzergruppeLehrer->getBenutzergruppeLabel().' unbestätigt');
		$benutzergruppe->setBenutzergruppeStatuscode( $benutzergruppeLehrer->getBenutzergruppeStatuscode()+100 );
		$benutzergruppe->setBenutzergruppeLogin( false );
		$em->persist($benutzergruppe);

		$benutzergruppeSchueler = new Benutzergruppe();
		$benutzergruppeSchueler->setBenutzergruppeLabel('Schüler');
		$benutzergruppeSchueler->setBenutzergruppeStatuscode(3);
		$benutzergruppeSchueler->setBenutzergruppeLogin( true );
		$em->persist($benutzergruppeSchueler);

		$benutzergruppe = new Benutzergruppe();
		$benutzergruppe->setBenutzergruppeLabel( $benutzergruppeSchueler->getBenutzergruppeLabel().' unbestätigt');
		$benutzergruppe->setBenutzergruppeStatuscode( $benutzergruppeSchueler->getBenutzergruppeStatuscode()+100 );
		$benutzergruppe->setBenutzergruppeLogin( false );
		$em->persist($benutzergruppe);

		$benutzergruppeSchulleitung = new Benutzergruppe();
		$benutzergruppeSchulleitung->setBenutzergruppeLabel('Schulleitung');
		$benutzergruppeSchulleitung->setBenutzergruppeStatuscode(4);
		$benutzergruppeSchulleitung->setBenutzergruppeLogin( true );
		$em->persist($benutzergruppeSchulleitung);

		$benutzergruppe = new Benutzergruppe();
		$benutzergruppe->setBenutzergruppeLabel( $benutzergruppeSchulleitung->getBenutzergruppeLabel().' unbestätigt');
		$benutzergruppe->setBenutzergruppeStatuscode( $benutzergruppeSchulleitung->getBenutzergruppeStatuscode()+100 );
		$benutzergruppe->setBenutzergruppeLogin( false );
		$em->persist($benutzergruppe);

		$benutzergruppeRedakteur = new Benutzergruppe();
		$benutzergruppeRedakteur->setBenutzergruppeLabel('Redakteur');
		$benutzergruppeRedakteur->setBenutzergruppeStatuscode(5);
		$benutzergruppeRedakteur->setBenutzergruppeLogin( true );
		$em->persist($benutzergruppeRedakteur);

		$benutzergruppe = new Benutzergruppe();
		$benutzergruppe->setBenutzergruppeLabel( $benutzergruppeRedakteur->getBenutzergruppeLabel().' unbestätigt');
		$benutzergruppe->setBenutzergruppeStatuscode( $benutzergruppeRedakteur->getBenutzergruppeStatuscode()+100 );
		$benutzergruppe->setBenutzergruppeLogin( false );
		$em->persist($benutzergruppe);

		$benutzergruppeEltern = new Benutzergruppe();
		$benutzergruppeEltern->setBenutzergruppeLabel('Eltern');
		$benutzergruppeEltern->setBenutzergruppeStatuscode(6);
		$benutzergruppeEltern->setBenutzergruppeLogin( true );
		$em->persist($benutzergruppeEltern);

		$benutzergruppe = new Benutzergruppe();
		$benutzergruppe->setBenutzergruppeLabel( $benutzergruppeEltern->getBenutzergruppeLabel().' unbestätigt');
		$benutzergruppe->setBenutzergruppeStatuscode( $benutzergruppeEltern->getBenutzergruppeStatuscode()+100 );
		$benutzergruppe->setBenutzergruppeLogin( false );
		$em->persist($benutzergruppe);

		$benutzergruppeMinisteriumsmitarbeiter = new Benutzergruppe();
		$benutzergruppeMinisteriumsmitarbeiter->setBenutzergruppeLabel('Ministeriumsmitarbeiter');
		$benutzergruppeMinisteriumsmitarbeiter->setBenutzergruppeStatuscode(7);
		$benutzergruppeMinisteriumsmitarbeiter->setBenutzergruppeLogin( true );
		$em->persist($benutzergruppeMinisteriumsmitarbeiter);

		$benutzergruppe = new Benutzergruppe();
		$benutzergruppe->setBenutzergruppeLabel( $benutzergruppeMinisteriumsmitarbeiter->getBenutzergruppeLabel().' unbestätigt');
		$benutzergruppe->setBenutzergruppeStatuscode( $benutzergruppeMinisteriumsmitarbeiter->getBenutzergruppeStatuscode()+100 );
		$benutzergruppe->setBenutzergruppeLogin( false );
		$em->persist($benutzergruppe);

		$em->flush();

		$this->addReference('benutzergruppe-administrator', $benutzergruppeAdmin);
	}

	public function getOrder()
	{
		return 1; // the order in which fixtures will be loaded
	}
}