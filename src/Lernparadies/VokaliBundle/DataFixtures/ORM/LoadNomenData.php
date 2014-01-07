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


class LoadNomenData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
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
         * Haus
         */
        $wortXWortartRepository->createWort('Haus');
        $wortXWortartRepository->setWortart($em->merge($this->getReference('wortart-nomen')));
        $wortXWortartRepository->setSprache($em->merge($this->getReference('sprache-deutsch')));
        $wortXWortart = $wortXWortartRepository->getWortXWortart();
        $wortXWortart->setEnabled(true);
        $em->persist($wortXWortart);
        $wortXWortartRepository->setFlexion('Haus', $em->merge($this->getReference('wortflexion-nomen-singular-nominativ-neutrum')));
        $wortXWortartRepository->setFlexion('Häuser', $em->merge($this->getReference('wortflexion-nomen-plural-nominativ-neutrum')));

        /**
         * Baum
         */
        $wortXWortartRepository->createWort('Baum');
        $wortXWortartRepository->setWortart($em->merge($this->getReference('wortart-nomen')));
        $wortXWortartRepository->setSprache($em->merge($this->getReference('sprache-deutsch')));
        $wortXWortart = $wortXWortartRepository->getWortXWortart();
        $wortXWortart->setEnabled(true);
        $em->persist($wortXWortart);
        $wortXWortartRepository->setFlexion('Baum', $em->merge($this->getReference('wortflexion-nomen-singular-nominativ-maskulin')));
        $wortXWortartRepository->setFlexion('Bäume', $em->merge($this->getReference('wortflexion-nomen-plural-nominativ-maskulin')));

        /**
         * Flasche
         */
        $wortXWortartRepository->createWort('Flasche');
        $wortXWortartRepository->setWortart($em->merge($this->getReference('wortart-nomen')));
        $wortXWortartRepository->setSprache($em->merge($this->getReference('sprache-deutsch')));
        $wortXWortart = $wortXWortartRepository->getWortXWortart();
        $wortXWortart->setEnabled(true);
        $em->persist($wortXWortart);
        $wortXWortartRepository->setFlexion('Flasche', $em->merge($this->getReference('wortflexion-nomen-singular-nominativ-feminin')));
        $wortXWortartRepository->setFlexion('Flaschen', $em->merge($this->getReference('wortflexion-nomen-plural-nominativ-feminin')));

        $em->flush();
	}

	public function getOrder()
	{
		return 4; // the order in which fixtures will be loaded
	}
}