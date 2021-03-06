<?php
namespace Ark;

/**
 * @var Module $this
 * @var \Zend\ServiceManager\ServiceLocatorInterface $serviceLocator
 * @var string $newVersion
 * @var string $oldVersion
 *
 * @var \Doctrine\DBAL\Connection $connection
 * @var \Doctrine\ORM\EntityManager $entityManager
 * @var \Omeka\Api\Manager $api
 */
$services = $serviceLocator;
$settings = $services->get('Omeka\Settings');
// $config = @require dirname(dirname(__DIR__)) . '/config/module.config.php';
// $connection = $services->get('Omeka\Connection');
// $entityManager = $services->get('Omeka\EntityManager');
// $plugins = $services->get('ControllerPluginManager');
// $api = $plugins->get('api');
// $space = strtolower(__NAMESPACE__);

if (version_compare($oldVersion, '3.5.7', '<')) {
    $settings->delete('ark_use_admin');
    $settings->delete('ark_use_public');

    $settings->set('ark_name_noid_template', $settings->get('ark_noid_template'));
    $settings->delete('ark_noid_template');

    $settings->set('ark_name', 'noid');
    $settings->set('ark_qualifier', 'internal');
    $settings->set('ark_qualifier_position_format', '');
    $settings->set('ark_qualifier_static', false);
}
