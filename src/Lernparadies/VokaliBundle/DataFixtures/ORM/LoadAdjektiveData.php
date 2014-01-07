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


class LoadAdjektiveData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
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
        $wortXWortartRepository->createWort('grün');
        $wortXWortartRepository->setWortart($em->merge($this->getReference('wortart-adjektiv')));
        $wortXWortartRepository->setSprache($em->merge($this->getReference('sprache-deutsch')));
        $wortXWortart = $wortXWortartRepository->getWortXWortart();
        $wortXWortart->setEnabled(true);
        $em->persist($wortXWortart);
        $wortXWortartRepository->setFlexion('grün', $em->merge($this->getReference('wortflexion-adjektiv-praedikativum-singular-neutral')));

        $em->flush();
	}

	public function getOrder()
	{
		return 5; // the order in which fixtures will be loaded
	}
}