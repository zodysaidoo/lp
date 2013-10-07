<?php
/**
 * Created by JetBrains PhpStorm.
 * User: zeid
 * Date: 07.10.13
 * Time: 19:50
 * To change this template use File | Settings | File Templates.
 */

namespace Lernparadies\LernparadiesBundle\Command;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Lernparadies\LernparadiesBundle\Entity\Benutzer;

class LernparadiesUserCommand extends ContainerAwareCommand
{
	protected function configure()
	{
		$this
			->setName('Lernparadies:Lernparadies:Benutzer')
			->setDescription('Lernparadies Benutzer hinzufügen')
			->addArgument('benutzerName', InputArgument::REQUIRED, 'Benutzername')
			->addArgument('benutzerPasswort', InputArgument::REQUIRED, 'Passwort')
			->addArgument('benutzerFriendlyUrl', InputArgument::REQUIRED, 'Friendly-URL')
			->addArgument('benutzerEmail', InputArgument::REQUIRED, 'E-Mail')
		;
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$username = $input->getArgument('benutzerName');
		$password = $input->getArgument('benutzerPasswort');
		$slug = $input->getArgument('benutzerFriendlyUrl');
		$emailaddress = $input->getArgument('benutzerEmail');
		/** @var EntityManager $em */
		$em = $this->getContainer()->get('doctrine')->getEntityManager();
		$benutzergruppeAdministrator = $em->getRepository('LernparadiesLernparadiesBundle:Benutzergruppe')->findOneBy( array('benutzergruppeLabel' => 'Administrator'));

		$benutzer = new Benutzer();
		$benutzer->setBenutzerName($username);
		$benutzer->setBenutzerBenutzerkontotyp($benutzergruppeAdministrator);

		// encode the password
		$factory = $this->getContainer()->get('security.encoder_factory');
		$encoder = $factory->getEncoder($benutzer);
		$encodedPassword = $encoder->encodePassword($password, $benutzer->getSalt() );
		$benutzer->setBenutzerPasswort($encodedPassword);

		$benutzer->setBenutzerEmail($emailaddress);
		$benutzer->setBenutzerFriendlyUrl($slug);
		$em->persist($benutzer);
		$em->flush();

		$output->writeln(sprintf('Added %s user with password %s', $username, $password));
	}
}