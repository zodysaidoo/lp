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
            $menu->addChild('User')
                ->setAttribute('dropdown', true);

            $menu['User']->addChild('Kontoeinstellungen', array('route' => 'sonata_user_profile_show'))
                ->setAttribute('divider_append', true);
            $menu['User']['Kontoeinstellungen']->addChild('Account', array('route' => 'sonata_user_profile_edit_authentication'));
            $menu['User']['Kontoeinstellungen']->addChild('Profile', array('route' => 'sonata_user_profile_edit'));
            $menu['User']->addChild('Logout', array('route' => 'fos_user_security_logout'));
        }else{
            $menu->addChild('Anmelden', array(
                'route' => 'fos_user_security_login'
            ));
            $menu->addChild('Registrieren', array(
                'route' => 'fos_user_registration_register'
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
    public function sidebarMenu(FactoryInterface $factory, array $options)
    {
        $securityContext = $this->container->get('security.context');

        $menu = $factory->createItem('sidebar');
        // Twitter Bootstrap Classe an UL übergeben
        $menu->setChildrenAttribute('class', 'nav nav-list ');

        // Startseite
        /*
        if(!$securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
        $menu[$appBenutzung]->addChild('Registrieren', array(
            'route' => 'fos_user_registration_register'
        ));*/

        $menu->addChild('sonata_user')
                ->setAttribute('class', 'nav-header')
                ->setExtra('translation_domain', 'SonataUserBundle');

        $menu->addChild('WortWortart', array('route' => 'wortxwortart'));

        $menu->addChild('Wortart', array('route' => 'wortart'));


        $appBenutzung = $this->container->getParameter('app.name').'-Benutzung';
        $menu->addChild($appBenutzung)
            ->setAttribute('class', 'nav-header');
        if(!$securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $menu[$appBenutzung]->addChild('Registrieren', array(
                'route' => 'fos_user_registration_register'
            ));
        }else{
            # Nur wenn Benutzer keinen Newsletter hat anzeigen
        }
            $menu[$appBenutzung]->addChild('Newsletter abonnieren', array(
                'uri' => '#'
            ));

        $menu->addChild('Vokabel', array('route' => 'vokabel'));

        return $menu;
    }
}