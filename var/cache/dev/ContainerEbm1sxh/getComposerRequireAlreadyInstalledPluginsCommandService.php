<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Command\ComposerRequireAlreadyInstalledPluginsCommand' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Command\\ComposerRequireAlreadyInstalledPluginsCommand.php';

$this->services['Eccube\\Command\\ComposerRequireAlreadyInstalledPluginsCommand'] = $instance = new \Eccube\Command\ComposerRequireAlreadyInstalledPluginsCommand(${($_ = isset($this->services['Eccube\\Service\\Composer\\ComposerApiService']) ? $this->services['Eccube\\Service\\Composer\\ComposerApiService'] : $this->load('getComposerApiServiceService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\PluginRepository']) ? $this->services['Eccube\\Repository\\PluginRepository'] : $this->getPluginRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Service\\PluginApiService']) ? $this->services['Eccube\\Service\\PluginApiService'] : $this->load('getPluginApiServiceService.php')) && false ?: '_'});

$instance->setName('eccube:composer:require-already-installed');

return $instance;
