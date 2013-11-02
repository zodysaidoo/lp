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
        $verbInfinitv->setComment('Verb als Infinitiv (ungebeugt)');
		$em->persist($verbInfinitv);

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