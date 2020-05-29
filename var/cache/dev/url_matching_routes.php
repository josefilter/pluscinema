<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/login' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
            [['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
        ],
        '/logout' => [
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null],
            [['_route' => 'logout'], null, null, null, false, false, null],
        ],
        '/' => [[['_route' => 'inicio', '_controller' => 'App\\Controller\\HomeController::inicio'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/listaPeliculas' => [[['_route' => 'peliculas', '_controller' => 'App\\Controller\\HomeController::peliculas'], null, null, null, false, false, null]],
        '/listaSeries' => [[['_route' => 'series', '_controller' => 'App\\Controller\\HomeController::series'], null, null, null, false, false, null]],
        '/pelicula/nueva' => [[['_route' => 'peliculaNueva', '_controller' => 'App\\Controller\\HomeController::peliculaNueva'], null, null, null, false, false, null]],
        '/serie/nueva' => [[['_route' => 'serieNueva', '_controller' => 'App\\Controller\\HomeController::serieNueva'], null, null, null, false, false, null]],
        '/buscar/peliculas' => [[['_route' => 'buscadorPelis', '_controller' => 'App\\Controller\\HomeController::buscadorPelicula'], null, null, null, false, false, null]],
        '/buscar/series' => [[['_route' => 'buscadorSeries', '_controller' => 'App\\Controller\\HomeController::buscadorSerie'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/pelicula/(?'
                    .'|(\\d+)(*:187)'
                    .'|borrar/([^/]++)(*:210)'
                    .'|editar/([^/]++)(*:233)'
                .')'
                .'|/serie/(?'
                    .'|(\\d+)(*:257)'
                    .'|borrar/([^/]++)(*:280)'
                    .'|editar/([^/]++)(*:303)'
                .')'
                .'|/descargar/pdf/(?'
                    .'|peli/([^/]++)(*:343)'
                    .'|serie/([^/]++)(*:365)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        187 => [[['_route' => 'pelicula', '_controller' => 'App\\Controller\\HomeController::pelicula'], ['id'], null, null, false, true, null]],
        210 => [[['_route' => 'borrarPelicula', '_controller' => 'App\\Controller\\HomeController::borrarPelicula'], ['id'], null, null, false, true, null]],
        233 => [[['_route' => 'editarPelicula', '_controller' => 'App\\Controller\\HomeController::editarPelicula'], ['id'], null, null, false, true, null]],
        257 => [[['_route' => 'serie', '_controller' => 'App\\Controller\\HomeController::serie'], ['id'], null, null, false, true, null]],
        280 => [[['_route' => 'borrarSerie', '_controller' => 'App\\Controller\\HomeController::borrarSerie'], ['id'], null, null, false, true, null]],
        303 => [[['_route' => 'editarSerie', '_controller' => 'App\\Controller\\HomeController::editarSerie'], ['id'], null, null, false, true, null]],
        343 => [[['_route' => 'descargarPDFPeli', '_controller' => 'App\\Controller\\HomeController::descargarPDFPeli'], ['id'], null, null, false, true, null]],
        365 => [
            [['_route' => 'descargarPDFSerie', '_controller' => 'App\\Controller\\HomeController::descargarPDFSerie'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
