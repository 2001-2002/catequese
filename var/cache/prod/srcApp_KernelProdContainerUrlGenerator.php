<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelProdContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        'catequista_index' => [[], ['_controller' => 'App\\Controller\\CatequistaController::index'], [], [['text', '/catequista/']], [], []],
        'catequista_new' => [[], ['_controller' => 'App\\Controller\\CatequistaController::new'], [], [['text', '/catequista/new']], [], []],
        'catequista_show' => [['id'], ['_controller' => 'App\\Controller\\CatequistaController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/catequista/show']], [], []],
        'catequista_edit' => [['id'], ['_controller' => 'App\\Controller\\CatequistaController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/catequista/edit']], [], []],
        'catequista_delete' => [['id'], ['_controller' => 'App\\Controller\\CatequistaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/catequista']], [], []],
        'catequizando_index' => [[], ['_controller' => 'App\\Controller\\CatequizandoController::index'], [], [['text', '/catequizando/']], [], []],
        'catequizando_new' => [[], ['_controller' => 'App\\Controller\\CatequizandoController::new'], [], [['text', '/catequizando/new']], [], []],
        'catequizando_show' => [['id'], ['_controller' => 'App\\Controller\\CatequizandoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/catequizando']], [], []],
        'catequizando_edit' => [['id'], ['_controller' => 'App\\Controller\\CatequizandoController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/catequizando/edit']], [], []],
        'catequizando_delete' => [['id'], ['_controller' => 'App\\Controller\\CatequizandoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/catequizando']], [], []],
        'escola_index' => [[], ['_controller' => 'App\\Controller\\EscolaController::index'], [], [['text', '/escola/']], [], []],
        'escola_new' => [[], ['_controller' => 'App\\Controller\\EscolaController::new'], [], [['text', '/escola/new']], [], []],
        'escola_show' => [['id'], ['_controller' => 'App\\Controller\\EscolaController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/escola']], [], []],
        'escola_edit' => [['id'], ['_controller' => 'App\\Controller\\EscolaController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/escola/edit']], [], []],
        'escola_delete' => [['id'], ['_controller' => 'App\\Controller\\EscolaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/escola']], [], []],
        'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
        'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
        'turma_index' => [[], ['_controller' => 'App\\Controller\\TurmaController::index'], [], [['text', '/turma/']], [], []],
        'turma_new' => [[], ['_controller' => 'App\\Controller\\TurmaController::new'], [], [['text', '/turma/new']], [], []],
        'turma_show' => [['id'], ['_controller' => 'App\\Controller\\TurmaController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/turma']], [], []],
        'turma_lista' => [['id'], ['_controller' => 'App\\Controller\\TurmaController::listarCatequizandos'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/turma/lista']], [], []],
        'turma_chamada' => [['turma', 'option'], ['_controller' => 'App\\Controller\\TurmaController::chamada'], [], [['variable', '/', '[^/]++', 'option', true], ['variable', '/', '[^/]++', 'turma', true], ['text', '/turma/chamada']], [], []],
        'turma_edit' => [['id'], ['_controller' => 'App\\Controller\\TurmaController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/turma/edit']], [], []],
        'turma_delete' => [['id'], ['_controller' => 'App\\Controller\\TurmaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/turma']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
