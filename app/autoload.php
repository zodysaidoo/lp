<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var $loader ClassLoader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

$loader->add( 'Doctrine\\Common\\DataFixtures', __DIR__.'/../vendor/doctrine-fixtures/lib');
$loader->add( 'Doctrine\\Common', __DIR__.'/../vendor/doctrine-common/lib');
$loader->add( 'Knp\\Component', __DIR__.'/../vendor/knp-components/src');
$loader->add( 'Knp\\Bundle', __DIR__.'/../vendor/bundles');
$loader->add( 'FOS', __DIR__.'/../vendor/bundles');
$loader->add( 'Sonata', __DIR__.'/../vendor/bundles');
$loader->add( 'Application',  __DIR__ );

return $loader;
