<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/catequista' => [[['_route' => 'catequista_index', '_controller' => 'App\\Controller\\CatequistaController::index'], null, ['GET' => 0], null, true, false, null]],
            '/catequista/new' => [[['_route' => 'catequista_new', '_controller' => 'App\\Controller\\CatequistaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/catequizando' => [[['_route' => 'catequizando_index', '_controller' => 'App\\Controller\\CatequizandoController::index'], null, ['GET' => 0], null, true, false, null]],
            '/catequizando/new' => [[['_route' => 'catequizando_new', '_controller' => 'App\\Controller\\CatequizandoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/escola' => [[['_route' => 'escola_index', '_controller' => 'App\\Controller\\EscolaController::index'], null, ['GET' => 0], null, true, false, null]],
            '/escola/new' => [[['_route' => 'escola_new', '_controller' => 'App\\Controller\\EscolaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
            '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
            '/turma' => [[['_route' => 'turma_index', '_controller' => 'App\\Controller\\TurmaController::index'], null, ['GET' => 0], null, true, false, null]],
            '/turma/new' => [[['_route' => 'turma_new', '_controller' => 'App\\Controller\\TurmaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/catequi(?'
                        .'|sta/(?'
                            .'|show/([^/]++)(*:38)'
                            .'|edit/([^/]++)(*:58)'
                            .'|([^/]++)(*:73)'
                        .')'
                        .'|zando/(?'
                            .'|([^/]++)(*:98)'
                            .'|edit/([^/]++)(*:118)'
                            .'|([^/]++)(*:134)'
                        .')'
                    .')'
                    .'|/escola/(?'
                        .'|([^/]++)(*:163)'
                        .'|edit/([^/]++)(*:184)'
                        .'|([^/]++)(*:200)'
                    .')'
                    .'|/turma/(?'
                        .'|([^/]++)(*:227)'
                        .'|lista/([^/]++)(*:249)'
                        .'|chamada/([^/]++)/([^/]++)(*:282)'
                        .'|edit/([^/]++)(*:303)'
                        .'|([^/]++)(*:319)'
                    .')'
                    .'|/_error/(\\d+)(?:\\.([^/]++))?(*:356)'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => 'catequista_show', '_controller' => 'App\\Controller\\CatequistaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            58 => [[['_route' => 'catequista_edit', '_controller' => 'App\\Controller\\CatequistaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
            73 => [[['_route' => 'catequista_delete', '_controller' => 'App\\Controller\\CatequistaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            98 => [[['_route' => 'catequizando_show', '_controller' => 'App\\Controller\\CatequizandoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            118 => [[['_route' => 'catequizando_edit', '_controller' => 'App\\Controller\\CatequizandoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
            134 => [[['_route' => 'catequizando_delete', '_controller' => 'App\\Controller\\CatequizandoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            163 => [[['_route' => 'escola_show', '_controller' => 'App\\Controller\\EscolaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            184 => [[['_route' => 'escola_edit', '_controller' => 'App\\Controller\\EscolaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
            200 => [[['_route' => 'escola_delete', '_controller' => 'App\\Controller\\EscolaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            227 => [[['_route' => 'turma_show', '_controller' => 'App\\Controller\\TurmaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            249 => [[['_route' => 'turma_lista', '_controller' => 'App\\Controller\\TurmaController::listarCatequizandos'], ['id'], ['GET' => 0], null, false, true, null]],
            282 => [[['_route' => 'turma_chamada', '_controller' => 'App\\Controller\\TurmaController::chamada'], ['turma', 'option'], null, null, false, true, null]],
            303 => [[['_route' => 'turma_edit', '_controller' => 'App\\Controller\\TurmaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
            319 => [[['_route' => 'turma_delete', '_controller' => 'App\\Controller\\TurmaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            356 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        ];
    }
}
