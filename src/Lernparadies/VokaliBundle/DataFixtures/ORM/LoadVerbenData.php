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

        $wortXWortartRepository->createWort('sein');
        $wortXWortartRepository->setWortart($em->merge($this->getReference('wortart-verb')));
        $wortXWortartRepository->setSprache($em->merge($this->getReference('sprache-deutsch')));
        $wortXWortart = $wortXWortartRepository->getWortXWortart();
        $em->persist($wortXWortart);

        $wortXWortartRepository->setFlexion('sein', $em->merge($this->getReference('wortflexion-verb-infinitiv')));
        $wortXWortartRepository->setFlexion('bin', $em->merge($this->getReference('wortflexion-verb-erste-person-singular')));
        $wortXWortartRepository->setFlexion('bist', $em->merge($this->getReference('wortflexion-verb-zweite-person-singular')));
        $wortXWortartRepository->setFlexion('ist', $em->merge($this->getReference('wortflexion-verb-dritte-person-singular')));
        $wortXWortartRepository->setFlexion('sind', $em->merge($this->getReference('wortflexion-verb-erste-person-plural')));
        $wortXWortartRepository->setFlexion('seid', $em->merge($this->getReference('wortflexion-verb-zweite-person-plural')));
        $wortXWortartRepository->setFlexion('sind', $em->merge($this->getReference('wortflexion-verb-dritte-person-plural')));
        $wortXWortartRepository->setFlexion('gewesen', $em->merge($this->getReference('wortflexion-verb-partizip')));
        $wortXWortartRepository->setFlexion('sein', $em->merge($this->getReference('wortflexion-hilfsverb-erste-vergangenheit')));

		$em->flush();
	}

	public function getOrder()
	{
		return 4; // the order in which fixtures will be loaded
	}
}