<?php
// src/Acme/DemoBundle/Menu/Builder.php
namespace Lernparadies\LernparadiesBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        // Twitter Bootstrap Classe an UL übergeben
        $menu->setChildrenAttribute('class', 'nav nav-pills ');

        // Startseite
        $menu->addChild('Home', array('route' => 'lernparadies_lernparadies_home'));
        $securityContext = $this->container->get('security.context');
        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $menu->addChild('Abmelden', array(
                'route' => 'fos_user_security_logout'
            ));
        }else{
            $menu->addChild('Anmelden', array(
                'route' => 'fos_user_security_login'
            ));
        }
        if ($securityContext->isGranted('ROLE_SONATA_ADMIN')) {
            $menu->addChild('Dashboard', array(
                'route' => 'sonata_admin_dashboard'
            ));
        }

        $menu->addChild('WortWortart', array(
            'route' => 'wortxwortart'
        ));

        $menu->addChild('Wortart', array(
            'route' => 'wortart'
        ));

        $menu->addChild('Wort', array(
            'route' => 'wort'
        ));

        $menu->addChild('Vokabel', array(
            'route' => 'vokabel'
        ));

        return $menu;
    }
}