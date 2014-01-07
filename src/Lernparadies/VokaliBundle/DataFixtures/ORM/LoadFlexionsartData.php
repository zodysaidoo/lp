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
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }

	public function load(ObjectManager $em)
	{
        /**
         * Verben
         */
        $this->loadVerben($em);

        /**
         * Nomen
         */
        $nomenSingularNominativMaskulin = new Flexionsart();
        $nomenSingularNominativMaskulin->setName('Nomen Singular Nominativ Maskulin');
        $nomenSingularNominativMaskulin->setCode('Nomen Singular Nominativ Maskulin');
        $nomenSingularNominativMaskulin->setComment('maskulines Nomen im Singular und Nominativ');
		$em->persist($nomenSingularNominativMaskulin);

        $nomenSingularNominativFeminin = new Flexionsart();
        $nomenSingularNominativFeminin->setName('Nomen Singular Nominativ Feminin');
        $nomenSingularNominativFeminin->setCode('Nomen Singular Nominativ Feminin');
        $nomenSingularNominativFeminin->setComment('feminines Nomen im Singular und Nominativ');
		$em->persist($nomenSingularNominativFeminin);

        $nomenSingularNominativNeutrum = new Flexionsart();
        $nomenSingularNominativNeutrum->setName('Nomen Singular Nominativ Neutrum');
        $nomenSingularNominativNeutrum->setCode('Nomen Singular Nominativ Neutrum');
        $nomenSingularNominativNeutrum->setComment('neutrales Nomen im Singular und Nominativ');
		$em->persist($nomenSingularNominativNeutrum);

        $nomenPluralNominativMaskulin = new Flexionsart();
        $nomenPluralNominativMaskulin->setName('Nomen Plural Nominativ Maskulin');
        $nomenPluralNominativMaskulin->setCode('Nomen Plural Nominativ Maskulin');
        $nomenPluralNominativMaskulin->setComment('maskulines Nomen im Plural und Nominativ');
		$em->persist($nomenPluralNominativMaskulin);

        $nomenPluralNominativFeminin = new Flexionsart();
        $nomenPluralNominativFeminin->setName('Nomen Plural Nominativ Feminin');
        $nomenPluralNominativFeminin->setCode('Nomen Plural Nominativ Feminin');
        $nomenPluralNominativFeminin->setComment('femininesNomen im Plural und Nominativ');
		$em->persist($nomenPluralNominativFeminin);

        $nomenPluralNominativNeutrum = new Flexionsart();
        $nomenPluralNominativNeutrum->setName('Nomen Plural Nominativ Neutrum');
        $nomenPluralNominativNeutrum->setCode('Nomen Plural Nominativ Neutrum');
        $nomenPluralNominativNeutrum->setComment('neutrales Nomen im Plural und Nominativ');
        $em->persist($nomenPluralNominativNeutrum);

        /**
         * Adjektive
         */
        $adjektivGrundform = new Flexionsart();
        $adjektivGrundform->setName('Adjektiv Prädikativum');
        $adjektivGrundform->setCode('Adjektiv Prädikativum');
        $adjektivGrundform->setComment('Adjektiv in seiner Grundform (Prädikativum), wie es als prädikative Ergänzung verwendet wird. z.B. Das Haus ist grün');
		$em->persist($adjektivGrundform);

        /**
         * Artikel
         */
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

        $this->addReference('wortflexion-nomen-singular-nominativ-maskulin', $nomenSingularNominativMaskulin);
        $this->addReference('wortflexion-nomen-singular-nominativ-feminin', $nomenSingularNominativFeminin);
        $this->addReference('wortflexion-nomen-singular-nominativ-neutrum', $nomenSingularNominativNeutrum);
        $this->addReference('wortflexion-nomen-plural-nominativ-maskulin', $nomenPluralNominativMaskulin);
        $this->addReference('wortflexion-nomen-plural-nominativ-feminin', $nomenPluralNominativFeminin);
        $this->addReference('wortflexion-nomen-plural-nominativ-neutrum', $nomenPluralNominativNeutrum);
        $this->addReference('wortflexion-adjektiv-praedikativum', $adjektivGrundform);
        $this->addReference('wortflexion-artikel-bestimmt-maskulinum-singular-nominativ', $artikelBestimmtMaskulinumSingularNominativ);
        $this->addReference('wortflexion-artikel-bestimmt-femininum-singular-nominativ', $artikelBestimmtFemininumSingularNominativ);
        $this->addReference('wortflexion-artikel-bestimmt-neutrum-singular-nominativ', $artikelBestimmtNeutrumSingularNominativ);
	}

    private function loadVerben(ObjectManager $em)
    {
        /**
         * Infitive
         */
        $verbInfinitvGegenwart = new Flexionsart();
        $verbInfinitvGegenwart->setName('Verb Infinitiv Gegenwart');
        $verbInfinitvGegenwart->setCode('Verb Infinitiv Gegenwart');
        $verbInfinitvGegenwart->setComment('Verb als Infinitiv (ungebeugt) z.B. laufen');
        $em->persist($verbInfinitvGegenwart);

        $verbInfinitvPerfekt = new Flexionsart();
        $verbInfinitvPerfekt->setName('Verb Infinitiv Perfekt');
        $verbInfinitvPerfekt->setCode('Verb Infinitiv Perfekt');
        $verbInfinitvPerfekt->setComment('Verb als Infinitiv Perfekt (ungebeugt) z.B. gelaufen sein');
        $em->persist($verbInfinitvPerfekt);

        /**
         * Präsens
         */
        $verbErstePersonSingularIndikativGegenwart = new Flexionsart();
        $verbErstePersonSingularIndikativGegenwart->setName('Verbform 1. Person Singular Gegenwart');
        $verbErstePersonSingularIndikativGegenwart->setCode('Verbform erste Person Singular Gegenwart');
        $verbErstePersonSingularIndikativGegenwart->setComment('gebeugte Verbform der ersten Person Singular z.B. ich laufe');
        $em->persist($verbErstePersonSingularIndikativGegenwart);

        $verbZweitePersonSingularIndikativGegenwart = new Flexionsart();
        $verbZweitePersonSingularIndikativGegenwart->setName('Verbform 2. Person Singular Indikativ Gegenwart');
        $verbZweitePersonSingularIndikativGegenwart->setCode('Verbform zweite Person Singular Indikativ Gegenwart');
        $verbZweitePersonSingularIndikativGegenwart->setComment('gebeugte Verbform der zweiten Person Singular z.B. du läufst');
        $em->persist($verbZweitePersonSingularIndikativGegenwart);

        $verbDrittePersonSingularIndikativGegenwart = new Flexionsart();
        $verbDrittePersonSingularIndikativGegenwart->setName('Verbform 3. Person Singular Indikativ Gegenwart');
        $verbDrittePersonSingularIndikativGegenwart->setCode('Verbform dritte Person Singular Indikativ Gegenwart');
        $verbDrittePersonSingularIndikativGegenwart->setComment('gebeugte Verbform der dritten Person Singular z.B. es läuft');
        $em->persist($verbDrittePersonSingularIndikativGegenwart);

        $verbErstePersonPluralIndikativGegenwart = new Flexionsart();
        $verbErstePersonPluralIndikativGegenwart->setName('Verbform 1. Person Plural Indikativ Gegenwart');
        $verbErstePersonPluralIndikativGegenwart->setCode('Verbform erste Person Plural Indikativ Gegenwart');
        $verbErstePersonPluralIndikativGegenwart->setComment('gebeugte Verbform der ersten Person Plural z.B. wir laufen');
        $em->persist($verbErstePersonPluralIndikativGegenwart);

        $verbZweitePersonPluralIndikativGegenwart = new Flexionsart();
        $verbZweitePersonPluralIndikativGegenwart->setName('Verbform 2. Person Plural Indikativ Gegenwart');
        $verbZweitePersonPluralIndikativGegenwart->setCode('Verbform zweite Person Plural Indikativ Gegenwart');
        $verbZweitePersonPluralIndikativGegenwart->setComment('gebeugte Verbform der zweiten Person Plural z.B. ihr lauft');
        $em->persist($verbZweitePersonPluralIndikativGegenwart);

        $verbDrittePersonPluralIndikativGegenwart = new Flexionsart();
        $verbDrittePersonPluralIndikativGegenwart->setName('Verbform 3. Person Plural Indikativ Gegenwart');
        $verbDrittePersonPluralIndikativGegenwart->setCode('Verbform dritte Person Plural Indikativ Gegenwart');
        $verbDrittePersonPluralIndikativGegenwart->setComment('gebeugte Verbform der dritten Person Plural z.B. sie laufen');
        $em->persist($verbDrittePersonPluralIndikativGegenwart);


        /**
         * Präteritum
         */
        $verbErstePersonSingularIndikativErsteVergangenheit = new Flexionsart();
        $verbErstePersonSingularIndikativErsteVergangenheit->setName('Verbform 1. Person Singular Indikativ Erste Vergangenheit');
        $verbErstePersonSingularIndikativErsteVergangenheit->setCode('Verbform erste Person Singular Indikativ Erste Vergangenheit');
        $verbErstePersonSingularIndikativErsteVergangenheit->setComment('gebeugte Verbform der ersten Person Singular z.B. ich lief');
        $em->persist($verbErstePersonSingularIndikativErsteVergangenheit);

        $verbZweitePersonSingularIndikativErsteVergangenheit = new Flexionsart();
        $verbZweitePersonSingularIndikativErsteVergangenheit->setName('Verbform 2. Person Singular Indikativ Erste Vergangenheit');
        $verbZweitePersonSingularIndikativErsteVergangenheit->setCode('Verbform zweite Person Singular Indikativ Erste Vergangenheit');
        $verbZweitePersonSingularIndikativErsteVergangenheit->setComment('gebeugte Verbform der zweiten Person Singular z.B. du liefst');
        $em->persist($verbZweitePersonSingularIndikativErsteVergangenheit);

        $verbDrittePersonSingularIndikativErsteVergangenheit = new Flexionsart();
        $verbDrittePersonSingularIndikativErsteVergangenheit->setName('Verbform 3. Person Singular Indikativ Erste Vergangenheit');
        $verbDrittePersonSingularIndikativErsteVergangenheit->setCode('Verbform dritte Person Singular Indikativ Erste Vergangenheit');
        $verbDrittePersonSingularIndikativErsteVergangenheit->setComment('gebeugte Verbform der dritten Person Singular z.B. es lief');
        $em->persist($verbDrittePersonSingularIndikativErsteVergangenheit);

        $verbErstePersonPluralIndikativErsteVergangenheit = new Flexionsart();
        $verbErstePersonPluralIndikativErsteVergangenheit->setName('Verbform 1. Person Plural Indikativ Erste Vergangenheit');
        $verbErstePersonPluralIndikativErsteVergangenheit->setCode('Verbform erste Person Plural Indikativ Erste Vergangenheit');
        $verbErstePersonPluralIndikativErsteVergangenheit->setComment('gebeugte Verbform der ersten Person Plural z.B. wir liefen');
        $em->persist($verbErstePersonPluralIndikativErsteVergangenheit);

        $verbZweitePersonPluralIndikativErsteVergangenheit = new Flexionsart();
        $verbZweitePersonPluralIndikativErsteVergangenheit->setName('Verbform 2. Person Plural Indikativ Erste Vergangenheit');
        $verbZweitePersonPluralIndikativErsteVergangenheit->setCode('Verbform zweite Person Plural Indikativ Erste Vergangenheit');
        $verbZweitePersonPluralIndikativErsteVergangenheit->setComment('gebeugte Verbform der zweiten Person Plural z.B. ihr lieft');
        $em->persist($verbZweitePersonPluralIndikativErsteVergangenheit);

        $verbDrittePersonPluralIndikativErsteVergangenheit = new Flexionsart();
        $verbDrittePersonPluralIndikativErsteVergangenheit->setName('Verbform 3. Person Plural Indikativ Erste Vergangenheit');
        $verbDrittePersonPluralIndikativErsteVergangenheit->setCode('Verbform dritte Person Plural Indikativ Erste Vergangenheit');
        $verbDrittePersonPluralIndikativErsteVergangenheit->setComment('gebeugte Verbform der dritten Person Plural z.B. sie liefen');
        $em->persist($verbDrittePersonPluralIndikativErsteVergangenheit);

        /**
         * Konjunktiv I Präsens
         */
        $verbErstePersonSingularKonjunktivIGegenwart = new Flexionsart();
        $verbErstePersonSingularKonjunktivIGegenwart->setName('Verbform 1. Person Singular Konjunktiv I Gegenwart');
        $verbErstePersonSingularKonjunktivIGegenwart->setCode('Verbform erste Person Singular Konjunktiv I Gegenwart');
        $verbErstePersonSingularKonjunktivIGegenwart->setComment('gebeugte Verbform der ersten Person Singular z.B. ich laufe');
        $em->persist($verbErstePersonSingularKonjunktivIGegenwart);

        $verbZweitePersonSingularKonjunktivIGegenwart = new Flexionsart();
        $verbZweitePersonSingularKonjunktivIGegenwart->setName('Verbform 2. Person Singular Konjunktiv I Gegenwart');
        $verbZweitePersonSingularKonjunktivIGegenwart->setCode('Verbform zweite Person Singular Konjunktiv I Gegenwart');
        $verbZweitePersonSingularKonjunktivIGegenwart->setComment('gebeugte Verbform der zweiten Person Singular z.B. du laufest');
        $em->persist($verbZweitePersonSingularKonjunktivIGegenwart);

        $verbDrittePersonSingularKonjunktivIGegenwart = new Flexionsart();
        $verbDrittePersonSingularKonjunktivIGegenwart->setName('Verbform 3. Person Singular Konjunktiv I Gegenwart');
        $verbDrittePersonSingularKonjunktivIGegenwart->setCode('Verbform dritte Person Singular Konjunktiv I Gegenwart');
        $verbDrittePersonSingularKonjunktivIGegenwart->setComment('gebeugte Verbform der dritten Person Singular z.B. es laufe');
        $em->persist($verbDrittePersonSingularKonjunktivIGegenwart);

        $verbErstePersonPluralKonjunktivIGegenwart = new Flexionsart();
        $verbErstePersonPluralKonjunktivIGegenwart->setName('Verbform 1. Person Plural Konjunktiv I Gegenwart');
        $verbErstePersonPluralKonjunktivIGegenwart->setCode('Verbform erste Person Plural Konjunktiv I Gegenwart');
        $verbErstePersonPluralKonjunktivIGegenwart->setComment('gebeugte Verbform der ersten Person Plural z.B. wir laufen');
        $em->persist($verbErstePersonPluralKonjunktivIGegenwart);

        $verbZweitePersonPluralKonjunktivIGegenwart = new Flexionsart();
        $verbZweitePersonPluralKonjunktivIGegenwart->setName('Verbform 2. Person Plural Konjunktiv I Gegenwart');
        $verbZweitePersonPluralKonjunktivIGegenwart->setCode('Verbform zweite Person Plural Konjunktiv I Gegenwart');
        $verbZweitePersonPluralKonjunktivIGegenwart->setComment('gebeugte Verbform der zweiten Person Plural z.B. ihr laufet');
        $em->persist($verbZweitePersonPluralKonjunktivIGegenwart);

        $verbDrittePersonPluralKonjunktivIGegenwart = new Flexionsart();
        $verbDrittePersonPluralKonjunktivIGegenwart->setName('Verbform 3. Person Plural Konjunktiv I Gegenwart');
        $verbDrittePersonPluralKonjunktivIGegenwart->setCode('Verbform dritte Person Plural Konjunktiv I Gegenwart');
        $verbDrittePersonPluralKonjunktivIGegenwart->setComment('gebeugte Verbform der dritten Person Plural z.B. sie laufen');
        $em->persist($verbDrittePersonPluralKonjunktivIGegenwart);

        /**
         * Partizipien
         */
        $verbErstesPartizip = new Flexionsart();
        $verbErstesPartizip->setName('Verbform Erstes Partizip');
        $verbErstesPartizip->setCode('Verbform Erstes Partizip');
        $verbErstesPartizip->setComment('Verbform erstes Partizip (Partizip Präsens), z.B. seiend');
        $em->persist($verbErstesPartizip);

        $verbZweitesPartizip = new Flexionsart();
        $verbZweitesPartizip->setName('Verbform zweites Partizip');
        $verbZweitesPartizip->setCode('Verbform zweites Partizip');
        $verbZweitesPartizip->setComment('Verbform zweites Partizip (Partizip Perfekt), z.B. gelaufen');
        $em->persist($verbZweitesPartizip);

        /**
         * Imperative
         */
        $verbImperativZweitePersonSingular= new Flexionsart();
        $verbImperativZweitePersonSingular->setName('Verbform Imperativ 2. Person Singular');
        $verbImperativZweitePersonSingular->setCode('Verbform Imperativ zweite Person Singular');
        $verbImperativZweitePersonSingular->setComment('Verbform Imperativ zweite Person Singular, z.B. lauf');
        $em->persist($verbImperativZweitePersonSingular);

        $verbImperativErstePersonPlural = new Flexionsart();
        $verbImperativErstePersonPlural->setName('Verbform Imperativ 1. Person Plural');
        $verbImperativErstePersonPlural->setCode('Verbform Imperativ Erste Person Plural');
        $verbImperativErstePersonPlural->setComment('Verbform Imperativ erste Person Plural, z.B. laufen wir');
        $em->persist($verbImperativErstePersonPlural);

        $verbImperativZweitePersonPlural = new Flexionsart();
        $verbImperativZweitePersonPlural->setName('Verbform Imperativ 2. Person Plural');
        $verbImperativZweitePersonPlural->setCode('Verbform Imperativ zweite Person Plural');
        $verbImperativZweitePersonPlural->setComment('Verbform Imperativ zweite Person Plural, z.B. lauft');
        $em->persist($verbImperativZweitePersonPlural);

        $verbImperativDrittePersonPlural = new Flexionsart();
        $verbImperativDrittePersonPlural->setName('Verbform Imperativ 3. Person Plural');
        $verbImperativDrittePersonPlural->setCode('Verbform Imperativ dritte Person Plural');
        $verbImperativDrittePersonPlural->setComment('Verbform Imperativ dritte Person Plural, z.B. laufen Sie');
        $em->persist($verbImperativDrittePersonPlural);

        /**
         * Hilfsverb der Komposita-Vergangenheiten
         */
        $verbHilfsverbZusammengesetzterVergangenheiten = new Flexionsart();
        $verbHilfsverbZusammengesetzterVergangenheiten->setName('Hilfsverb zusammengesetzter Vergangenheiten');
        $verbHilfsverbZusammengesetzterVergangenheiten->setCode('Hilfsverb zusammengesetzter Vergangenheiten');
        $verbHilfsverbZusammengesetzterVergangenheiten->setComment('Hilfsverb zusammengesetzter Vergangenheit z.B. sein oder haben');
        $em->persist($verbHilfsverbZusammengesetzterVergangenheiten);

        /**
         * Referenzen setzen
         */

        /**
         * Infinitve
         */
        $this->addReference('wortflexion-verb-infinitiv-gegenwart', $verbInfinitvGegenwart);
        $this->addReference('wortflexion-verb-infinitiv-perfekt', $verbInfinitvPerfekt);

        /**
         * Indikativ Präsens
         */
        $this->addReference('wortflexion-verb-erste-person-singular-indikativ-gegenwart', $verbErstePersonSingularIndikativGegenwart);
        $this->addReference('wortflexion-verb-zweite-person-singular-indikativ-gegenwart', $verbZweitePersonSingularIndikativGegenwart);
        $this->addReference('wortflexion-verb-dritte-person-singular-indikativ-gegenwart', $verbDrittePersonSingularIndikativGegenwart);
        $this->addReference('wortflexion-verb-erste-person-plural-indikativ-gegenwart', $verbErstePersonPluralIndikativGegenwart);
        $this->addReference('wortflexion-verb-zweite-person-plural-indikativ-gegenwart', $verbZweitePersonPluralIndikativGegenwart);
        $this->addReference('wortflexion-verb-dritte-person-plural-indikativ-gegenwart', $verbDrittePersonPluralIndikativGegenwart);

        /**
         * Indikativ Präteritum
         */
        $this->addReference('wortflexion-verb-erste-person-singular-indikativ-erste-vergangenheit', $verbErstePersonSingularIndikativErsteVergangenheit);
        $this->addReference('wortflexion-verb-zweite-person-singular-indikativ-erste-vergangenheit', $verbZweitePersonSingularIndikativErsteVergangenheit);
        $this->addReference('wortflexion-verb-dritte-person-singular-indikativ-erste-vergangenheit', $verbDrittePersonSingularIndikativErsteVergangenheit);
        $this->addReference('wortflexion-verb-erste-person-plural-indikativ-erste-vergangenheit', $verbErstePersonPluralIndikativErsteVergangenheit);
        $this->addReference('wortflexion-verb-zweite-person-plural-indikativ-erste-vergangenheit', $verbZweitePersonPluralIndikativErsteVergangenheit);
        $this->addReference('wortflexion-verb-dritte-person-plural-indikativ-erste-vergangenheit', $verbDrittePersonPluralIndikativErsteVergangenheit);

        /**
         * Konjunktiv I Präsens
         */
        $this->addReference('wortflexion-verb-erste-person-singular-konjunktiv-i-gegenwart', $verbErstePersonSingularKonjunktivIGegenwart);
        $this->addReference('wortflexion-verb-zweite-person-singular-konjunktiv-i-gegenwart', $verbZweitePersonSingularKonjunktivIGegenwart);
        $this->addReference('wortflexion-verb-dritte-person-singular-konjunktiv-i-gegenwart', $verbDrittePersonSingularKonjunktivIGegenwart);
        $this->addReference('wortflexion-verb-erste-person-plural-konjunktiv-i-gegenwart', $verbErstePersonPluralKonjunktivIGegenwart);
        $this->addReference('wortflexion-verb-zweite-person-plural-konjunktiv-i-gegenwart', $verbZweitePersonPluralKonjunktivIGegenwart);
        $this->addReference('wortflexion-verb-dritte-person-plural-konjunktiv-i-gegenwart', $verbDrittePersonPluralKonjunktivIGegenwart);

        /**
         * Partitzipe
         */
        $this->addReference('wortflexion-verb-partizip-i', $verbErstesPartizip);
        $this->addReference('wortflexion-verb-partizip-ii', $verbZweitesPartizip);

        /**
         * Imperative
         */
        $this->addReference('wortflexion-verb-imperativ-zweite-person-singular', $verbImperativZweitePersonSingular);
        $this->addReference('wortflexion-verb-imperativ-erste-person-plural', $verbImperativErstePersonPlural);
        $this->addReference('wortflexion-verb-imperativ-zweite-person-plural', $verbImperativZweitePersonPlural);
        $this->addReference('wortflexion-verb-imperativ-dritte-person-plural', $verbImperativDrittePersonPlural);

        /**
         * Hilfverb der Komposita-Vergangenheiten
         */
        $this->addReference('wortflexion-hilfsverb-erste-vergangenheit', $verbHilfsverbZusammengesetzterVergangenheiten);
    }
}