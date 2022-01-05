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
        '/listUser' => [[['_route' => 'listUser', '_controller' => 'App\\Controller\\AdminController::listUser'], null, null, null, false, false, null]],
        '/listServ' => [[['_route' => 'listServ', '_controller' => 'App\\Controller\\AdminController::listServ'], null, null, null, false, false, null]],
        '/listSub' => [[['_route' => 'listSub', '_controller' => 'App\\Controller\\AdminController::listSub'], null, null, null, false, false, null]],
        '/changeDisponibility' => [[['_route' => 'changeDisponibility', '_controller' => 'App\\Controller\\AdminController::changeDisponibility'], null, null, null, false, false, null]],
        '/changeStatus' => [[['_route' => 'changeStatus', '_controller' => 'App\\Controller\\AdminController::changeStatus'], null, null, null, false, false, null]],
        '/modifUser' => [[['_route' => 'modifUser', '_controller' => 'App\\Controller\\AdminController::modifUser'], null, null, null, false, false, null]],
        '/changePrice' => [[['_route' => 'changePrice', '_controller' => 'App\\Controller\\AdminController::changePrice'], null, null, null, false, false, null]],
        '/unsub' => [[['_route' => 'unsub', '_controller' => 'App\\Controller\\AdminController::unSub'], null, null, null, false, false, null]],
        '/reSub' => [[['_route' => 'reSub', '_controller' => 'App\\Controller\\AdminController::reSubUser'], null, null, null, false, false, null]],
        '/deleteExpiredSub' => [[['_route' => 'deleteExpiredSub', '_controller' => 'App\\Controller\\AdminController::deleteExpiredSub'], null, null, null, false, false, null]],
        '/infofacture' => [[['_route' => 'infofacture', '_controller' => 'App\\Controller\\FactureController::infofacture'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\NavigationController::home'], null, null, null, false, false, null]],
        '/intro' => [[['_route' => 'intro', '_controller' => 'App\\Controller\\NavigationController::intro'], null, null, null, false, false, null]],
        '/info' => [[['_route' => 'info', '_controller' => 'App\\Controller\\NavigationController::info'], null, null, null, false, false, null]],
        '/refreshResources' => [[['_route' => 'refreshResources', '_controller' => 'App\\Controller\\NavigationController::refreshResources'], null, null, null, false, false, null]],
        '/testStart' => [[['_route' => 'testStart', '_controller' => 'App\\Controller\\NavigationController::testStart'], null, null, null, false, false, null]],
        '/formSub' => [[['_route' => 'formSub', '_controller' => 'App\\Controller\\ProxmoxController::formSub'], null, null, null, false, false, null]],
        '/unsubUser' => [[['_route' => 'unsubUser', '_controller' => 'App\\Controller\\ProxmoxController::unSubUser'], null, null, null, false, false, null]],
        '/reSubUser' => [[['_route' => 'reSubUser', '_controller' => 'App\\Controller\\ProxmoxController::reSubUser'], null, null, null, false, false, null]],
        '/openPanel' => [[['_route' => 'openPanel', '_controller' => 'App\\Controller\\ProxmoxController::openPanel'], null, null, null, false, false, null]],
        '/startCT' => [[['_route' => 'startCT', '_controller' => 'App\\Controller\\ProxmoxController::startCT'], null, null, null, false, false, null]],
        '/stopCT' => [[['_route' => 'stopCT', '_controller' => 'App\\Controller\\ProxmoxController::stopCT'], null, null, null, false, false, null]],
        '/deleteAllCT' => [[['_route' => 'deleteAllCT', '_controller' => 'App\\Controller\\ProxmoxController::deleteAllCT'], null, null, null, false, false, null]],
        '/createBackup' => [[['_route' => 'createBackup', '_controller' => 'App\\Controller\\ProxmoxController::createBackup'], null, null, null, false, false, null]],
        '/restoreBackup' => [[['_route' => 'restoreBackup', '_controller' => 'App\\Controller\\ProxmoxController::restoreBackup'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/renouvellement-mot-de-passe/requete' => [[['_route' => 'request_resetting', '_controller' => 'App\\Controller\\ResettingController::request'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/setAdminUser' => [[['_route' => 'setAdminUser', '_controller' => 'App\\Controller\\SuperAdminController::setAdminUser'], null, null, null, false, false, null]],
        '/mon-compte/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\UserController::profil'], null, null, null, false, false, null]],
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
                .'|/facture/([^/]++)(*:186)'
                .'|/renouvellement\\-mot\\-de\\-passe/([^/]++)/([^/]++)(*:243)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        186 => [[['_route' => 'facture', '_controller' => 'App\\Controller\\FactureController::facture'], ['id'], null, null, false, true, null]],
        243 => [
            [['_route' => 'resetting', '_controller' => 'App\\Controller\\ResettingController::resetting'], ['id', 'token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
