<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Controller\\CatequistaController::delete' => ['privates', '.service_locator.7gxtins', 'get_ServiceLocator_7gxtinsService.php', true],
    'App\\Controller\\CatequistaController::edit' => ['privates', '.service_locator.NVcL0Rh', 'get_ServiceLocator_NVcL0RhService.php', true],
    'App\\Controller\\CatequistaController::index' => ['privates', '.service_locator.Y7hbvpa', 'get_ServiceLocator_Y7hbvpaService.php', true],
    'App\\Controller\\CatequistaController::new' => ['privates', '.service_locator._gPEhjd', 'get_ServiceLocator_GPEhjdService.php', true],
    'App\\Controller\\CatequistaController::show' => ['privates', '.service_locator.7gxtins', 'get_ServiceLocator_7gxtinsService.php', true],
    'App\\Controller\\CatequizandoController::delete' => ['privates', '.service_locator.IY_taS0', 'get_ServiceLocator_IYTaS0Service.php', true],
    'App\\Controller\\CatequizandoController::edit' => ['privates', '.service_locator.IY_taS0', 'get_ServiceLocator_IYTaS0Service.php', true],
    'App\\Controller\\CatequizandoController::index' => ['privates', '.service_locator.PGqdrHh', 'get_ServiceLocator_PGqdrHhService.php', true],
    'App\\Controller\\CatequizandoController::show' => ['privates', '.service_locator.IY_taS0', 'get_ServiceLocator_IYTaS0Service.php', true],
    'App\\Controller\\EscolaController::delete' => ['privates', '.service_locator.L6qFtBy', 'get_ServiceLocator_L6qFtByService.php', true],
    'App\\Controller\\EscolaController::edit' => ['privates', '.service_locator.L6qFtBy', 'get_ServiceLocator_L6qFtByService.php', true],
    'App\\Controller\\EscolaController::index' => ['privates', '.service_locator.qIeRiVK', 'get_ServiceLocator_QIeRiVKService.php', true],
    'App\\Controller\\EscolaController::show' => ['privates', '.service_locator.L6qFtBy', 'get_ServiceLocator_L6qFtByService.php', true],
    'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.EbLunuf', 'get_ServiceLocator_EbLunufService.php', true],
    'App\\Controller\\TurmaController::chamada' => ['privates', '.service_locator.cl39yVF', 'get_ServiceLocator_Cl39yVFService.php', true],
    'App\\Controller\\TurmaController::delete' => ['privates', '.service_locator.cl39yVF', 'get_ServiceLocator_Cl39yVFService.php', true],
    'App\\Controller\\TurmaController::edit' => ['privates', '.service_locator.cl39yVF', 'get_ServiceLocator_Cl39yVFService.php', true],
    'App\\Controller\\TurmaController::index' => ['privates', '.service_locator.0Msc3Ob', 'get_ServiceLocator_0Msc3ObService.php', true],
    'App\\Controller\\TurmaController::listarCatequizandos' => ['privates', '.service_locator.cl39yVF', 'get_ServiceLocator_Cl39yVFService.php', true],
    'App\\Controller\\TurmaController::show' => ['privates', '.service_locator.cl39yVF', 'get_ServiceLocator_Cl39yVFService.php', true],
    'App\\Controller\\CatequistaController:delete' => ['privates', '.service_locator.7gxtins', 'get_ServiceLocator_7gxtinsService.php', true],
    'App\\Controller\\CatequistaController:edit' => ['privates', '.service_locator.NVcL0Rh', 'get_ServiceLocator_NVcL0RhService.php', true],
    'App\\Controller\\CatequistaController:index' => ['privates', '.service_locator.Y7hbvpa', 'get_ServiceLocator_Y7hbvpaService.php', true],
    'App\\Controller\\CatequistaController:new' => ['privates', '.service_locator._gPEhjd', 'get_ServiceLocator_GPEhjdService.php', true],
    'App\\Controller\\CatequistaController:show' => ['privates', '.service_locator.7gxtins', 'get_ServiceLocator_7gxtinsService.php', true],
    'App\\Controller\\CatequizandoController:delete' => ['privates', '.service_locator.IY_taS0', 'get_ServiceLocator_IYTaS0Service.php', true],
    'App\\Controller\\CatequizandoController:edit' => ['privates', '.service_locator.IY_taS0', 'get_ServiceLocator_IYTaS0Service.php', true],
    'App\\Controller\\CatequizandoController:index' => ['privates', '.service_locator.PGqdrHh', 'get_ServiceLocator_PGqdrHhService.php', true],
    'App\\Controller\\CatequizandoController:show' => ['privates', '.service_locator.IY_taS0', 'get_ServiceLocator_IYTaS0Service.php', true],
    'App\\Controller\\EscolaController:delete' => ['privates', '.service_locator.L6qFtBy', 'get_ServiceLocator_L6qFtByService.php', true],
    'App\\Controller\\EscolaController:edit' => ['privates', '.service_locator.L6qFtBy', 'get_ServiceLocator_L6qFtByService.php', true],
    'App\\Controller\\EscolaController:index' => ['privates', '.service_locator.qIeRiVK', 'get_ServiceLocator_QIeRiVKService.php', true],
    'App\\Controller\\EscolaController:show' => ['privates', '.service_locator.L6qFtBy', 'get_ServiceLocator_L6qFtByService.php', true],
    'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.EbLunuf', 'get_ServiceLocator_EbLunufService.php', true],
    'App\\Controller\\TurmaController:chamada' => ['privates', '.service_locator.cl39yVF', 'get_ServiceLocator_Cl39yVFService.php', true],
    'App\\Controller\\TurmaController:delete' => ['privates', '.service_locator.cl39yVF', 'get_ServiceLocator_Cl39yVFService.php', true],
    'App\\Controller\\TurmaController:edit' => ['privates', '.service_locator.cl39yVF', 'get_ServiceLocator_Cl39yVFService.php', true],
    'App\\Controller\\TurmaController:index' => ['privates', '.service_locator.0Msc3Ob', 'get_ServiceLocator_0Msc3ObService.php', true],
    'App\\Controller\\TurmaController:listarCatequizandos' => ['privates', '.service_locator.cl39yVF', 'get_ServiceLocator_Cl39yVFService.php', true],
    'App\\Controller\\TurmaController:show' => ['privates', '.service_locator.cl39yVF', 'get_ServiceLocator_Cl39yVFService.php', true],
]));