<?php
/**
 * Created by JetBrains PhpStorm.
 * User: zeid
 * Date: 24.09.13
 * Time: 23:08
 * To change this template use File | Settings | File Templates.
 */
namespace Lernparadies\LernparadieBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Lernparadies\LernparadiesBundle\Entity\Sprache;

class LoadSpracheData extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $em)
	{
		$sprache = new Sprache();
		$sprache->setSpracheName('Arabisch');
		$sprache->setSpracheCode('ARAB');
		$sprache->setSpracheAktiv( true );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Englisch');
		$sprache->setSpracheCode('ENGL');
		$sprache->setSpracheAktiv( true );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Esperanto');
		$sprache->setSpracheCode('ESPE');
		$sprache->setSpracheAktiv( false );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Französisch');
		$sprache->setSpracheCode('FREN');
		$sprache->setSpracheAktiv( true );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Deutsch');
		$sprache->setSpracheCode('GERM');
		$sprache->setSpracheAktiv( true );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Griechisch');
		$sprache->setSpracheCode('GREE');
		$sprache->setSpracheAktiv( false );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Italienisch');
		$sprache->setSpracheCode('ITAL');
		$sprache->setSpracheAktiv( false );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Latein');
		$sprache->setSpracheCode('LATI');
		$sprache->setSpracheAktiv( true );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Portugiesisch');
		$sprache->setSpracheCode('PORT');
		$sprache->setSpracheAktiv( false );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Russisch');
		$sprache->setSpracheCode('RUSS');
		$sprache->setSpracheAktiv( false );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Spanisch');
		$sprache->setSpracheCode('SPAN');
		$sprache->setSpracheAktiv( true );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Türkisch');
		$sprache->setSpracheCode('TURK');
		$sprache->setSpracheAktiv( false );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Rätoromanisch');
		$sprache->setSpracheCode('RAET');
		$sprache->setSpracheAktiv( false );
		$em->persist($sprache);

		$sprache = new Sprache();

		$sprache->setSpracheName('Rumänisch');
		$sprache->setSpracheCode('RUMA');
		$sprache->setSpracheAktiv( false );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Polnisch');
		$sprache->setSpracheCode('POLN');
		$sprache->setSpracheAktiv( false );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Tschechisch');
		$sprache->setSpracheCode('CZEC');
		$sprache->setSpracheAktiv( false );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Ukrainisch');
		$sprache->setSpracheCode('UKRA');
		$sprache->setSpracheAktiv( false );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Ungarisch');
		$sprache->setSpracheCode('HUNG');
		$sprache->setSpracheAktiv( false );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Punjabi');
		$sprache->setSpracheCode('PUNJ');
		$sprache->setSpracheAktiv( false );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Hindi');
		$sprache->setSpracheCode('HIND');
		$sprache->setSpracheAktiv( false );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Mandarin');
		$sprache->setSpracheCode('MAND');
		$sprache->setSpracheAktiv( false );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Bengali');
		$sprache->setSpracheCode('BENG');
		$sprache->setSpracheAktiv( false );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Japanisch');
		$sprache->setSpracheCode('JAPA');
		$sprache->setSpracheAktiv( false );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Tamil');
		$sprache->setSpracheCode('TAMI');
		$sprache->setSpracheAktiv( false );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Marathi');
		$sprache->setSpracheCode('MARA');
		$sprache->setSpracheAktiv( false );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Vietnamesisch');
		$sprache->setSpracheCode('VIET');
		$sprache->setSpracheAktiv( false );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Urdu');
		$sprache->setSpracheCode('URDU');
		$sprache->setSpracheAktiv( false );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Paschtu');
		$sprache->setSpracheCode('PASC');
		$sprache->setSpracheAktiv( false );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Persich');
		$sprache->setSpracheCode('PERS');
		$sprache->setSpracheAktiv( false );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Dänisch');
		$sprache->setSpracheCode('DANS');
		$sprache->setSpracheAktiv( false );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Schwedisch');
		$sprache->setSpracheCode('SWED');
		$sprache->setSpracheAktiv( false );
		$em->persist($sprache);

		$sprache = new Sprache();
		$sprache->setSpracheName('Niederländisch');
		$sprache->setSpracheCode('NETH');
		$sprache->setSpracheAktiv( false );
		$em->persist($sprache);

		$em->flush();
	}

	public function getOrder()
	{
		return 1; // the order in which fixtures will be loaded
	}
}