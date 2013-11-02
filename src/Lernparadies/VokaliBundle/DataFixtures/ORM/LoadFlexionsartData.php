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
use Lernparadies\VokaliBundle\Entity\Flexionsart;


class LoadFlexionsartData extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $em)
	{
		$verbInfinitv = new Flexionsart();
        $verbInfinitv->setName('Verb Infinitiv');
        $verbInfinitv->setCode('Verb Infinitiv');
        $verbInfinitv->setComment('Verb als Infinitiv (ungebeugt) z.B. laufen');
		$em->persist($verbInfinitv);

		$verbErstePersonSingular = new Flexionsart();
        $verbErstePersonSingular->setName('Verbform 1. Person Singular');
        $verbErstePersonSingular->setCode('Verbform erste Person Singular');
        $verbErstePersonSingular->setComment('gebeugte Verbform der ersten Person Singular z.B. ich laufe');
		$em->persist($verbErstePersonSingular);

		$verbZweitePersonSingular = new Flexionsart();
        $verbZweitePersonSingular->setName('Verbform 2. Person Singular');
        $verbZweitePersonSingular->setCode('Verbform zweite Person Singular');
        $verbZweitePersonSingular->setComment('gebeugte Verbform der zweiten Person Singular z.B. du läufst');
		$em->persist($verbZweitePersonSingular);

		$verbDrittePersonSingular = new Flexionsart();
        $verbDrittePersonSingular->setName('Verbform 3. Person Singular');
        $verbDrittePersonSingular->setCode('Verbform dritte Person Singular');
        $verbDrittePersonSingular->setComment('gebeugte Verbform der dritten Person Singular z.B. es läuft');
		$em->persist($verbDrittePersonSingular);

		$verbErstePersonPlural = new Flexionsart();
        $verbErstePersonPlural->setName('Verbform 1. Person Plural');
        $verbErstePersonPlural->setCode('Verbform erste Person Plural');
        $verbErstePersonPlural->setComment('gebeugte Verbform der ersten Person Plural z.B. wir laufen');
		$em->persist($verbErstePersonPlural);

		$verbZweitePersonPlural = new Flexionsart();
        $verbZweitePersonPlural->setName('Verbform 2. Person Plural');
        $verbZweitePersonPlural->setCode('Verbform zweite Person Plural');
        $verbZweitePersonPlural->setComment('gebeugte Verbform der zweiten Person Plural z.B. ihr lauft');
		$em->persist($verbZweitePersonPlural);

		$verbDrittePersonPlural = new Flexionsart();
        $verbDrittePersonPlural->setName('Verbform 3. Person Plural');
        $verbDrittePersonPlural->setCode('Verbform dritte Person Plural');
        $verbDrittePersonPlural->setComment('gebeugte Verbform der dritten Person Plural z.B. sie laufen');
		$em->persist($verbDrittePersonPlural);

		$nomenNominativ = new Flexionsart();
        $nomenNominativ->setName('Nomen Nominativ');
        $nomenNominativ->setCode('Nomen Nominativ');
        $nomenNominativ->setComment('Nomen im Singular und Nominativ');
		$em->persist($nomenNominativ);

		$adjektivGrundform = new Flexionsart();
        $adjektivGrundform->setName('Adjektiv Prädikativum');
        $adjektivGrundform->setCode('Adjektiv Prädikativum');
        $adjektivGrundform->setComment('Adjektiv in seiner Grundform (Prädikativum), wie es als prädikative Ergänzung verwendet wird. z.B. Das Haus ist grün');
		$em->persist($adjektivGrundform);

		$artikelBestimmtMaskulinumSingularNominativ = new Flexionsart();
        $artikelBestimmtMaskulinumSingularNominativ->setName('bestimmter Artikel Maskulinum Singular Nominativ');
        $artikelBestimmtMaskulinumSingularNominativ->setCode('Artikel bestimmt Maskulinum Singular Nominativ');
        $artikelBestimmtMaskulinumSingularNominativ->setComment('bestimmter Artikel Maskulinum Singular Nominativ z.B. der');
		$em->persist($artikelBestimmtMaskulinumSingularNominativ);

		$artikelBestimmtFemininumSingularNominativ = new Flexionsart();
        $artikelBestimmtFemininumSingularNominativ->setName('bestimmter Artikel Femininum Singular Nominativ');
        $artikelBestimmtFemininumSingularNominativ->setCode('Artikel bestimmt Femininum Singular Nominativ');
        $artikelBestimmtFemininumSingularNominativ->setComment('bestimmter Artikel Femininum Singular Nominativ z.B. die');
		$em->persist($artikelBestimmtFemininumSingularNominativ);

		$artikelBestimmtNeutrumSingularNominativ = new Flexionsart();
        $artikelBestimmtNeutrumSingularNominativ->setName('bestimmter Artikel Neutrum Singular Nominativ');
        $artikelBestimmtNeutrumSingularNominativ->setCode('Artikel bestimmt Neutrum Singular Nominativ');
        $artikelBestimmtNeutrumSingularNominativ->setComment('bestimmter Artikel Neutrum Singular Nominativ z.B. das');
		$em->persist($artikelBestimmtNeutrumSingularNominativ);

		$em->flush();
	}

	public function getOrder()
	{
		return 2; // the order in which fixtures will be loaded
	}
}