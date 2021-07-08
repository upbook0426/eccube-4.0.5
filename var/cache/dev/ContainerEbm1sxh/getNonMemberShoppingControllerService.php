<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Eccube\Controller\NonMemberShoppingController' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ContainerAwareTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\Controller.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Controller\\AbstractController.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Controller\\AbstractShoppingController.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Controller\\NonMemberShoppingController.php';

$this->services['Eccube\\Controller\\NonMemberShoppingController'] = $instance = new \Eccube\Controller\NonMemberShoppingController(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\Master\\PrefRepository']) ? $this->services['Eccube\\Repository\\Master\\PrefRepository'] : $this->load('getPrefRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Service\\OrderHelper']) ? $this->services['Eccube\\Service\\OrderHelper'] : $this->load('getOrderHelperService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Service\\CartService']) ? $this->services['Eccube\\Service\\CartService'] : $this->getCartServiceService()) && false ?: '_'});

$instance->setPurchaseFlow(${($_ = isset($this->services['eccube.purchase.flow.shopping']) ? $this->services['eccube.purchase.flow.shopping'] : $this->load('getEccube_Purchase_Flow_ShoppingService.php')) && false ?: '_'});
$instance->setEccubeConfig(${($_ = isset($this->services['Eccube\\Common\\EccubeConfig']) ? $this->services['Eccube\\Common\\EccubeConfig'] : ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))) && false ?: '_'});
$instance->setEntityManager(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});
$instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
$instance->setSession(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'});
$instance->setFormFactory(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load('getForm_FactoryService.php')) && false ?: '_'});
$instance->setEventDispatcher(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});

return $instance;
