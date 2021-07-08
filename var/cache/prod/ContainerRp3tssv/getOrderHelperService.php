<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Service\OrderHelper' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\OrderHelper.php';

return $this->services['Eccube\\Service\\OrderHelper'] = new \Eccube\Service\OrderHelper($this, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\OrderRepository']) ? $this->services['Eccube\\Repository\\OrderRepository'] : $this->getOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\Master\\OrderItemTypeRepository']) ? $this->services['Eccube\\Repository\\Master\\OrderItemTypeRepository'] : $this->load('getOrderItemTypeRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\Master\\OrderStatusRepository']) ? $this->services['Eccube\\Repository\\Master\\OrderStatusRepository'] : $this->load('getOrderStatusRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\DeliveryRepository']) ? $this->services['Eccube\\Repository\\DeliveryRepository'] : $this->load('getDeliveryRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\PaymentRepository']) ? $this->services['Eccube\\Repository\\PaymentRepository'] : $this->load('getPaymentRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\Master\\DeviceTypeRepository']) ? $this->services['Eccube\\Repository\\Master\\DeviceTypeRepository'] : $this->getDeviceTypeRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\Master\\PrefRepository']) ? $this->services['Eccube\\Repository\\Master\\PrefRepository'] : $this->load('getPrefRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['mobile_detect.mobile_detector.default']) ? $this->services['mobile_detect.mobile_detector.default'] : ($this->services['mobile_detect.mobile_detector.default'] = new \SunCat\MobileDetectBundle\DeviceDetector\MobileDetector())) && false ?: '_'}, ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'});
