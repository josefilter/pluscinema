<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'inicio' => [[], ['_controller' => 'App\\Controller\\HomeController::inicio'], [], [['text', '/']], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\RegisterController::register'], [], [['text', '/register']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'logout' => [[], [], [], [['text', '/logout']], [], []],
    'pelicula' => [['id'], ['_controller' => 'App\\Controller\\HomeController::pelicula'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/pelicula']], [], []],
    'peliculas' => [[], ['_controller' => 'App\\Controller\\HomeController::peliculas'], [], [['text', '/listaPeliculas']], [], []],
    'series' => [[], ['_controller' => 'App\\Controller\\HomeController::series'], [], [['text', '/listaSeries']], [], []],
    'serie' => [['id'], ['_controller' => 'App\\Controller\\HomeController::serie'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/serie']], [], []],
    'peliculaNueva' => [[], ['_controller' => 'App\\Controller\\HomeController::peliculaNueva'], [], [['text', '/pelicula/nueva']], [], []],
    'serieNueva' => [[], ['_controller' => 'App\\Controller\\HomeController::serieNueva'], [], [['text', '/serie/nueva']], [], []],
    'borrarPelicula' => [['id'], ['_controller' => 'App\\Controller\\HomeController::borrarPelicula'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/pelicula/borrar']], [], []],
    'borrarSerie' => [['id'], ['_controller' => 'App\\Controller\\HomeController::borrarSerie'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/serie/borrar']], [], []],
    'editarPelicula' => [['id'], ['_controller' => 'App\\Controller\\HomeController::editarPelicula'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/pelicula/editar']], [], []],
    'editarSerie' => [['id'], ['_controller' => 'App\\Controller\\HomeController::editarSerie'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/serie/editar']], [], []],
    'descargarPDFPeli' => [['id'], ['_controller' => 'App\\Controller\\HomeController::descargarPDFPeli'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/descargar/pdf/peli']], [], []],
    'descargarPDFSerie' => [['id'], ['_controller' => 'App\\Controller\\HomeController::descargarPDFSerie'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/descargar/pdf/serie']], [], []],
    'buscadorPelis' => [[], ['_controller' => 'App\\Controller\\HomeController::buscadorPelicula'], [], [['text', '/buscar/peliculas']], [], []],
    'buscadorSeries' => [[], ['_controller' => 'App\\Controller\\HomeController::buscadorSerie'], [], [['text', '/buscar/series']], [], []],
];