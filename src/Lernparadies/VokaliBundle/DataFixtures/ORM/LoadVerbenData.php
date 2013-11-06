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
use Lernparadies\VokaliBundle\Entity\Wort;
use Lernparadies\VokaliBundle\Entity\WortXWortartRepository;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;


class LoadVerbenData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

	public function load(ObjectManager $em)
	{
        /**
         * @var \Lernparadies\VokaliBundle\Entity\WortXWortartRepository $wortXWortartRepository
         */
        $wortXWortartRepository = $em->getRepository('LernparadiesVokaliBundle:WortXWortart');

        /**
         * Sein
         */
        $wortXWortartRepository->createWort('sein');
        $wortXWortartRepository->setWortart($em->merge($this->getReference('wortart-verb')));
        $wortXWortartRepository->setSprache($em->merge($this->getReference('sprache-deutsch')));
        $wortXWortart = $wortXWortartRepository->getWortXWortart();
        $wortXWortart->setEnabled(true);
        $em->persist($wortXWortart);
        $wortXWortartRepository->setFlexion('sein', $em->merge($this->getReference('wortflexion-verb-infinitiv-gegenwart')));
        $wortXWortartRepository->setFlexion('gewesen sein', $em->merge($this->getReference('wortflexion-verb-infinitiv-perfekt')));
        $wortXWortartRepository->setFlexion('bin', $em->merge($this->getReference('wortflexion-verb-erste-person-singular-indikativ-gegenwart')));
        $wortXWortartRepository->setFlexion('bist', $em->merge($this->getReference('wortflexion-verb-zweite-person-singular-indikativ-gegenwart')));
        $wortXWortartRepository->setFlexion('ist', $em->merge($this->getReference('wortflexion-verb-dritte-person-singular-indikativ-gegenwart')));
        $wortXWortartRepository->setFlexion('sind', $em->merge($this->getReference('wortflexion-verb-erste-person-plural-indikativ-gegenwart')));
        $wortXWortartRepository->setFlexion('seid', $em->merge($this->getReference('wortflexion-verb-zweite-person-plural-indikativ-gegenwart')));
        $wortXWortartRepository->setFlexion('sind', $em->merge($this->getReference('wortflexion-verb-dritte-person-plural-indikativ-gegenwart')));
        $wortXWortartRepository->setFlexion('war', $em->merge($this->getReference('wortflexion-verb-erste-person-singular-indikativ-erste-vergangenheit')));
        $wortXWortartRepository->setFlexion('warst', $em->merge($this->getReference('wortflexion-verb-zweite-person-singular-indikativ-erste-vergangenheit')));
        $wortXWortartRepository->setFlexion('war', $em->merge($this->getReference('wortflexion-verb-dritte-person-singular-indikativ-erste-vergangenheit')));
        $wortXWortartRepository->setFlexion('waren', $em->merge($this->getReference('wortflexion-verb-erste-person-plural-indikativ-erste-vergangenheit')));
        $wortXWortartRepository->setFlexion('wart', $em->merge($this->getReference('wortflexion-verb-zweite-person-plural-indikativ-erste-vergangenheit')));
        $wortXWortartRepository->setFlexion('waren', $em->merge($this->getReference('wortflexion-verb-dritte-person-plural-indikativ-erste-vergangenheit')));
        $wortXWortartRepository->setFlexion('sei', $em->merge($this->getReference('wortflexion-verb-erste-person-singular-indikativ-gegenwart')));
        $wortXWortartRepository->setFlexion('seist', $em->merge($this->getReference('wortflexion-verb-zweite-person-singular-konjunktiv-i-gegenwart')));
        $wortXWortartRepository->setFlexion('sei', $em->merge($this->getReference('wortflexion-verb-dritte-person-singular-konjunktiv-i-gegenwart')));
        $wortXWortartRepository->setFlexion('seien', $em->merge($this->getReference('wortflexion-verb-erste-person-plural-konjunktiv-i-gegenwart')));
        $wortXWortartRepository->setFlexion('seiet', $em->merge($this->getReference('wortflexion-verb-zweite-person-plural-konjunktiv-i-gegenwart')));
        $wortXWortartRepository->setFlexion('seien', $em->merge($this->getReference('wortflexion-verb-dritte-person-plural-konjunktiv-i-gegenwart')));
        $wortXWortartRepository->setFlexion('seiend', $em->merge($this->getReference('wortflexion-verb-partizip-i')));
        $wortXWortartRepository->setFlexion('gewesen', $em->merge($this->getReference('wortflexion-verb-partizip-ii')));
        $wortXWortartRepository->setFlexion('sei', $em->merge($this->getReference('wortflexion-verb-imperativ-zweite-person-singular')));
        $wortXWortartRepository->setFlexion('sein', $em->merge($this->getReference('wortflexion-verb-imperativ-erste-person-plural')));
        $wortXWortartRepository->setFlexion('seid', $em->merge($this->getReference('wortflexion-verb-imperativ-zweite-person-plural')));
        $wortXWortartRepository->setFlexion('sein', $em->merge($this->getReference('wortflexion-verb-imperativ-dritte-person-plural')));
        $wortXWortartRepository->setFlexion('sein', $em->merge($this->getReference('wortflexion-hilfsverb-erste-vergangenheit')));

        /**
         * Haben
         */
        $wortXWortartRepository->createWort('haben');
        $wortXWortartRepository->setWortart($em->merge($this->getReference('wortart-verb')));
        $wortXWortartRepository->setSprache($em->merge($this->getReference('sprache-deutsch')));
        $wortXWortart = $wortXWortartRepository->getWortXWortart();
        $wortXWortart->setEnabled(true);
        $em->persist($wortXWortart);
        $wortXWortartRepository->setFlexion('haben', $em->merge($this->getReference('wortflexion-verb-infinitiv-gegenwart')));
        $wortXWortartRepository->setFlexion('gehabt haben', $em->merge($this->getReference('wortflexion-verb-infinitiv-perfekt')));
        $wortXWortartRepository->setFlexion('habe', $em->merge($this->getReference('wortflexion-verb-erste-person-singular-indikativ-gegenwart')));
        $wortXWortartRepository->setFlexion('hast', $em->merge($this->getReference('wortflexion-verb-zweite-person-singular-indikativ-gegenwart')));
        $wortXWortartRepository->setFlexion('hat', $em->merge($this->getReference('wortflexion-verb-dritte-person-singular-indikativ-gegenwart')));
        $wortXWortartRepository->setFlexion('haben', $em->merge($this->getReference('wortflexion-verb-erste-person-plural-indikativ-gegenwart')));
        $wortXWortartRepository->setFlexion('habt', $em->merge($this->getReference('wortflexion-verb-zweite-person-plural-indikativ-gegenwart')));
        $wortXWortartRepository->setFlexion('haben', $em->merge($this->getReference('wortflexion-verb-dritte-person-plural-indikativ-gegenwart')));
        $wortXWortartRepository->setFlexion('hatte', $em->merge($this->getReference('wortflexion-verb-erste-person-singular-indikativ-erste-vergangenheit')));
        $wortXWortartRepository->setFlexion('hattest', $em->merge($this->getReference('wortflexion-verb-zweite-person-singular-indikativ-erste-vergangenheit')));
        $wortXWortartRepository->setFlexion('hatte', $em->merge($this->getReference('wortflexion-verb-dritte-person-singular-indikativ-erste-vergangenheit')));
        $wortXWortartRepository->setFlexion('hatten', $em->merge($this->getReference('wortflexion-verb-erste-person-plural-indikativ-erste-vergangenheit')));
        $wortXWortartRepository->setFlexion('hattet', $em->merge($this->getReference('wortflexion-verb-zweite-person-plural-indikativ-erste-vergangenheit')));
        $wortXWortartRepository->setFlexion('hatten', $em->merge($this->getReference('wortflexion-verb-dritte-person-plural-indikativ-erste-vergangenheit')));
        $wortXWortartRepository->setFlexion('habe', $em->merge($this->getReference('wortflexion-verb-erste-person-singular-indikativ-gegenwart')));
        $wortXWortartRepository->setFlexion('habest', $em->merge($this->getReference('wortflexion-verb-zweite-person-singular-konjunktiv-i-gegenwart')));
        $wortXWortartRepository->setFlexion('habe', $em->merge($this->getReference('wortflexion-verb-dritte-person-singular-konjunktiv-i-gegenwart')));
        $wortXWortartRepository->setFlexion('haben', $em->merge($this->getReference('wortflexion-verb-erste-person-plural-konjunktiv-i-gegenwart')));
        $wortXWortartRepository->setFlexion('habet', $em->merge($this->getReference('wortflexion-verb-zweite-person-plural-konjunktiv-i-gegenwart')));
        $wortXWortartRepository->setFlexion('haben', $em->merge($this->getReference('wortflexion-verb-dritte-person-plural-konjunktiv-i-gegenwart')));
        $wortXWortartRepository->setFlexion('habend', $em->merge($this->getReference('wortflexion-verb-partizip-i')));
        $wortXWortartRepository->setFlexion('gehabt', $em->merge($this->getReference('wortflexion-verb-partizip-ii')));
        $wortXWortartRepository->setFlexion('habe', $em->merge($this->getReference('wortflexion-verb-imperativ-zweite-person-singular')));
        $wortXWortartRepository->setFlexion('haben', $em->merge($this->getReference('wortflexion-verb-imperativ-erste-person-plural')));
        $wortXWortartRepository->setFlexion('habt', $em->merge($this->getReference('wortflexion-verb-imperativ-zweite-person-plural')));
        $wortXWortartRepository->setFlexion('haben', $em->merge($this->getReference('wortflexion-verb-imperativ-dritte-person-plural')));
        $wortXWortartRepository->setFlexion('haben', $em->merge($this->getReference('wortflexion-hilfsverb-erste-vergangenheit')));

        /**
         * Werden
         */
        $wortXWortartRepository->createWort('werden');
        $wortXWortartRepository->setWortart($em->merge($this->getReference('wortart-verb')));
        $wortXWortartRepository->setSprache($em->merge($this->getReference('sprache-deutsch')));
        $wortXWortart = $wortXWortartRepository->getWortXWortart();
        $wortXWortart->setEnabled(true);
        $em->persist($wortXWortart);
        $wortXWortartRepository->setFlexion('werden', $em->merge($this->getReference('wortflexion-verb-infinitiv-gegenwart')));
        $wortXWortartRepository->setFlexion('geworden sein', $em->merge($this->getReference('wortflexion-verb-infinitiv-perfekt')));
        $wortXWortartRepository->setFlexion('werde', $em->merge($this->getReference('wortflexion-verb-erste-person-singular-indikativ-gegenwart')));
        $wortXWortartRepository->setFlexion('wirst', $em->merge($this->getReference('wortflexion-verb-zweite-person-singular-indikativ-gegenwart')));
        $wortXWortartRepository->setFlexion('wird', $em->merge($this->getReference('wortflexion-verb-dritte-person-singular-indikativ-gegenwart')));
        $wortXWortartRepository->setFlexion('werden', $em->merge($this->getReference('wortflexion-verb-erste-person-plural-indikativ-gegenwart')));
        $wortXWortartRepository->setFlexion('werdet', $em->merge($this->getReference('wortflexion-verb-zweite-person-plural-indikativ-gegenwart')));
        $wortXWortartRepository->setFlexion('werden', $em->merge($this->getReference('wortflexion-verb-dritte-person-plural-indikativ-gegenwart')));
        $wortXWortartRepository->setFlexion('wurde', $em->merge($this->getReference('wortflexion-verb-erste-person-singular-indikativ-erste-vergangenheit')));
        $wortXWortartRepository->setFlexion('wurdest', $em->merge($this->getReference('wortflexion-verb-zweite-person-singular-indikativ-erste-vergangenheit')));
        $wortXWortartRepository->setFlexion('wurde', $em->merge($this->getReference('wortflexion-verb-dritte-person-singular-indikativ-erste-vergangenheit')));
        $wortXWortartRepository->setFlexion('wurden', $em->merge($this->getReference('wortflexion-verb-erste-person-plural-indikativ-erste-vergangenheit')));
        $wortXWortartRepository->setFlexion('wurdet', $em->merge($this->getReference('wortflexion-verb-zweite-person-plural-indikativ-erste-vergangenheit')));
        $wortXWortartRepository->setFlexion('wurden', $em->merge($this->getReference('wortflexion-verb-dritte-person-plural-indikativ-erste-vergangenheit')));
        $wortXWortartRepository->setFlexion('werde', $em->merge($this->getReference('wortflexion-verb-erste-person-singular-indikativ-gegenwart')));
        $wortXWortartRepository->setFlexion('werdest', $em->merge($this->getReference('wortflexion-verb-zweite-person-singular-konjunktiv-i-gegenwart')));
        $wortXWortartRepository->setFlexion('werde', $em->merge($this->getReference('wortflexion-verb-dritte-person-singular-konjunktiv-i-gegenwart')));
        $wortXWortartRepository->setFlexion('werden', $em->merge($this->getReference('wortflexion-verb-erste-person-plural-konjunktiv-i-gegenwart')));
        $wortXWortartRepository->setFlexion('werdet', $em->merge($this->getReference('wortflexion-verb-zweite-person-plural-konjunktiv-i-gegenwart')));
        $wortXWortartRepository->setFlexion('werden', $em->merge($this->getReference('wortflexion-verb-dritte-person-plural-konjunktiv-i-gegenwart')));
        $wortXWortartRepository->setFlexion('werdend', $em->merge($this->getReference('wortflexion-verb-partizip-i')));
        $wortXWortartRepository->setFlexion('geworden', $em->merge($this->getReference('wortflexion-verb-partizip-ii')));
        $wortXWortartRepository->setFlexion('werde', $em->merge($this->getReference('wortflexion-verb-imperativ-zweite-person-singular')));
        $wortXWortartRepository->setFlexion('werden', $em->merge($this->getReference('wortflexion-verb-imperativ-erste-person-plural')));
        $wortXWortartRepository->setFlexion('werdet', $em->merge($this->getReference('wortflexion-verb-imperativ-zweite-person-plural')));
        $wortXWortartRepository->setFlexion('werden', $em->merge($this->getReference('wortflexion-verb-imperativ-dritte-person-plural')));
        $wortXWortartRepository->setFlexion('sein', $em->merge($this->getReference('wortflexion-hilfsverb-erste-vergangenheit')));

        $em->flush();
	}

	public function getOrder()
	{
		return 4; // the order in which fixtures will be loaded
	}
}