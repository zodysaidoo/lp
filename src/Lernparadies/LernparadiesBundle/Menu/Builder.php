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
            $menu->addChild('sonata_user')
                ->setAttribute('dropdown', true)
                ->setExtra('translation_domain', 'SonataUserBundle');

            $menu['sonata_user']->addChild('account_settings', array('route' => 'sonata_user_profile_show'))
                ->setAttribute('divider_append', true)
                ->setExtra('translation_domain', 'SonataUserBundle');
            $menu['sonata_user']['account_settings']->addChild('link_menu_edit_authentication', array('route' => 'sonata_user_profile_edit_authentication'))
                ->setExtra('translation_domain', 'SonataUserBundle');
            $menu['sonata_user']['account_settings']->addChild('link_menu_edit_profile', array('route' => 'sonata_user_profile_edit'))
                ->setExtra('translation_domain', 'SonataUserBundle');

            $menu['sonata_user']->addChild('layout.logout', array('route' => 'fos_user_security_logout'))
                ->setExtra('translation_domain', 'FOSUserBundle');
        }else{
            $menu->addChild('layout.login', array('route' => 'fos_user_security_login'))
                ->setExtra('translation_domain', 'FOSUserBundle');
            $menu->addChild('layout.register', array('route' => 'fos_user_registration_register'))
                ->setExtra('translation_domain', 'FOSUserBundle');
        }
        if ($securityContext->isGranted('ROLE_SONATA_ADMIN')) {
            $menu->addChild('Dashboard', array(
                'route' => 'sonata_admin_dashboard'
            ));
        }
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
        $request = $this->container->get('request');
        if(strpos($request->getPathInfo(),'/profile/') !== false)
        {
            $menu->addChild('sonata_user', array('route' => 'sonata_user_profile_show'))
                    ->setAttribute('class', 'nav-header')
                    ->setAttribute('divider_append', true)
                    ->setExtra('translation_domain', 'SonataUserBundle');

            $menu['sonata_user']->addChild('link_menu_edit_authentication', array('route' => 'sonata_user_profile_edit_authentication'))
                ->setExtra('translation_domain', 'SonataUserBundle');
            $menu['sonata_user']->addChild('link_menu_edit_profile', array('route' => 'sonata_user_profile_edit'))
                ->setExtra('translation_domain', 'SonataUserBundle');
        }


        $appBenutzung = $this->container->getParameter('app.name').'-Benutzung';
        $menu->addChild($appBenutzung)
            ->setAttribute('class', 'nav-header');
        if(!$securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $menu[$appBenutzung]->addChild('layout.register', array('route' => 'fos_user_registration_register'))
                ->setExtra('translation_domain', 'FOSUserBundle');
        }else{
            # Nur wenn Benutzer keinen Newsletter hat anzeigen
        }
            $menu[$appBenutzung]->addChild('Newsletter abonnieren', array(
                'uri' => '#'
            ));


        return $menu;
    }
}/**
object(Symfony\Component\HttpFoundation\Request)[6]
  public 'attributes' =>
    object(Symfony\Component\HttpFoundation\ParameterBag)[9]
      protected 'parameters' =>
        array (size=3)
          '_controller' => string 'Sonata\UserBundle\Controller\ProfileController::showAction' (length=58)
          '_route' => string 'sonata_user_profile_show' (length=24)
          '_route_params' =>
            array (size=0)
            ...
  public 'request' =>
    object(Symfony\Component\HttpFoundation\ParameterBag)[7]
      protected 'parameters' =>
        array (size=0)
          empty
  public 'query' =>
    object(Symfony\Component\HttpFoundation\ParameterBag)[8]
      protected 'parameters' =>
        array (size=0)
          empty
  public 'server' =>
    object(Symfony\Component\HttpFoundation\ServerBag)[12]
      protected 'parameters' =>
        array (size=34)
          'HTTP_HOST' => string 'lp.local' (length=8)
          'HTTP_USER_AGENT' => string 'Mozilla/5.0 (X11; Linux x86_64; rv:17.0) Gecko/20130810 Firefox/17.0 Iceweasel/17.0.8' (length=85)
          'HTTP_ACCEPT' => string 'text/html,application/xhtml+xml,application/xml;q=0.9,**;q=0.8' (length=63)
          'HTTP_ACCEPT_LANGUAGE' => string 'de-de,de;q=0.8,en-us;q=0.5,en;q=0.3' (length=35)
          'HTTP_ACCEPT_ENCODING' => string 'gzip, deflate' (length=13)
          'HTTP_CONNECTION' => string 'keep-alive' (length=10)
          'HTTP_REFERER' => string 'http://lp.local/app_dev.php/' (length=28)
          'HTTP_COOKIE' => string 'sonata_page_is_editor=1; PHPSESSID=i6aqc24iajgkru1abtev94oa10' (length=61)
          'HTTP_CACHE_CONTROL' => string 'max-age=0' (length=9)
          'PATH' => string '/usr/local/bin:/usr/bin:/bin' (length=28)
          'SERVER_SIGNATURE' => string '<address>Apache/2.4.6 (Debian) Server at lp.local Port 80</address>
' (length=68)
          'SERVER_SOFTWARE' => string 'Apache/2.4.6 (Debian)' (length=21)
          'SERVER_NAME' => string 'lp.local' (length=8)
          'SERVER_ADDR' => string '127.0.0.1' (length=9)
          'SERVER_PORT' => string '80' (length=2)
          'REMOTE_ADDR' => string '127.0.0.1' (length=9)
          'DOCUMENT_ROOT' => string '/var/www/lp/web' (length=15)
          'REQUEST_SCHEME' => string 'http' (length=4)
          'CONTEXT_PREFIX' => string '' (length=0)
          'CONTEXT_DOCUMENT_ROOT' => string '/var/www/lp/web' (length=15)
          'SERVER_ADMIN' => string '[no address given]' (length=18)
          'SCRIPT_FILENAME' => string '/var/www/lp/web/app_dev.php' (length=27)
          'REMOTE_PORT' => string '47776' (length=5)
          'GATEWAY_INTERFACE' => string 'CGI/1.1' (length=7)
          'SERVER_PROTOCOL' => string 'HTTP/1.1' (length=8)
          'REQUEST_METHOD' => string 'GET' (length=3)
          'QUERY_STRING' => string '' (length=0)
          'REQUEST_URI' => string '/app_dev.php/profile/' (length=21)
          'SCRIPT_NAME' => string '/app_dev.php' (length=12)
          'PATH_INFO' => string '/profile/' (length=9)
          'PATH_TRANSLATED' => string '/var/www/lp/web/profile/' (length=24)
          'PHP_SELF' => string '/app_dev.php/profile/' (length=21)
          'REQUEST_TIME_FLOAT' => float 1383418400.6
          'REQUEST_TIME' => int 1383418400
  public 'files' =>
    object(Symfony\Component\HttpFoundation\FileBag)[11]
      protected 'parameters' =>
        array (size=0)
          empty
  public 'cookies' =>
    object(Symfony\Component\HttpFoundation\ParameterBag)[10]
      protected 'parameters' =>
        array (size=2)
          'sonata_page_is_editor' => string '1' (length=1)
          'PHPSESSID' => string 'i6aqc24iajgkru1abtev94oa10' (length=26)
  public 'headers' =>
    object(Symfony\Component\HttpFoundation\HeaderBag)[13]
      protected 'headers' =>
        array (size=10)
          'host' =>
            array (size=1)
            ...
          'user-agent' =>
            array (size=1)
            ...
          'accept' =>
            array (size=1)
            ...
          'accept-language' =>
            array (size=1)
            ...
          'accept-encoding' =>
            array (size=1)
            ...
          'connection' =>
            array (size=1)
            ...
          'referer' =>
            array (size=1)
            ...
          'cookie' =>
            array (size=1)
            ...
          'cache-control' =>
            array (size=1)
            ...
          'x-php-ob-level' =>
            array (size=1)
            ...
      protected 'cacheControl' =>
        array (size=1)
          'max-age' => string '0' (length=1)
  protected 'content' => null
  protected 'languages' => null
  protected 'charsets' => null
  protected 'acceptableContentTypes' => null
  protected 'pathInfo' => string '/profile/' (length=9)
  protected 'requestUri' => string '/app_dev.php/profile/' (length=21)
  protected 'baseUrl' => string '/app_dev.php' (length=12)
  protected 'basePath' => string '' (length=0)
  protected 'method' => string 'GET' (length=3)
  protected 'format' => null
  protected 'session' =>
    object(Symfony\Component\HttpFoundation\Session\Session)[90]
      protected 'storage' =>
        object(Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage)[89]
          protected 'bags' =>
            array (size=2)
            ...
          protected 'started' => boolean true
          protected 'closed' => boolean false
          protected 'saveHandler' =>
            object(Symfony\Component\HttpFoundation\Session\Storage\Proxy\SessionHandlerProxy)[86]
            ...
          protected 'metadataBag' =>
            object(Symfony\Component\HttpFoundation\Session\Storage\MetadataBag)[87]
            ...
      private 'flashName' => string 'flashes' (length=7)
      private 'attributeName' => string 'attributes' (length=10)
  protected 'locale' => null
  protected 'defaultLocale' => string 'de' (length=2)
    */