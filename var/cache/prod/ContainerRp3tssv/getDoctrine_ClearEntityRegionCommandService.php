<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.clear_entity_region_command' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\EntityRegionCommand.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand.php';

$this->services['doctrine.clear_entity_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand();

$instance->setName('doctrine:cache:clear-entity-region');

return $instance;
