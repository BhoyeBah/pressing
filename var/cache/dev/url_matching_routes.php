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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/articles' => [[['_route' => 'app_articles_index', '_controller' => 'App\\Controller\\ArticlesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/articles/new' => [[['_route' => 'app_articles_new', '_controller' => 'App\\Controller\\ArticlesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/client' => [[['_route' => 'app_client_index', '_controller' => 'App\\Controller\\ClientController::index'], null, ['GET' => 0], null, true, false, null]],
        '/client/new' => [[['_route' => 'app_client_new', '_controller' => 'App\\Controller\\ClientController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commande' => [[['_route' => 'app_commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, null, null, true, false, null]],
        '/commande/new' => [[['_route' => 'app_commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commande/commande/payer' => [[['_route' => 'app_commande_payer', '_controller' => 'App\\Controller\\CommandeController::payerCommande'], null, ['POST' => 0], null, false, false, null]],
        '/commande/Facture/payé' => [[['_route' => 'commande_paye', '_controller' => 'App\\Controller\\CommandeController::facturePaye'], null, ['GET' => 0], null, false, false, null]],
        '/commande/Facture/impayé' => [[['_route' => 'commande_impaye', '_controller' => 'App\\Controller\\CommandeController::factureImPaye'], null, ['GET' => 0], null, false, false, null]],
        '/demande/pressing' => [[['_route' => 'app_demande_pressing_index', '_controller' => 'App\\Controller\\DemandePressingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/demande/pressing/register/membre' => [[['_route' => 'app_demande_pressing_new', '_controller' => 'App\\Controller\\DemandePressingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/employe' => [[['_route' => 'app_employe_index', '_controller' => 'App\\Controller\\EmployeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/employe/new' => [[['_route' => 'app_employe_new', '_controller' => 'App\\Controller\\EmployeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [
            [['_route' => 'app_home_page', '_controller' => 'App\\Controller\\HomePageController::index'], null, null, null, false, false, null],
            [['_route' => 'app_users_index', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null],
        ],
        '/recherche' => [[['_route' => 'recherche_dashboard', '_controller' => 'App\\Controller\\HomePageController::recherche'], null, ['GET' => 0], null, false, false, null]],
        '/membre' => [[['_route' => 'app_membre_index', '_controller' => 'App\\Controller\\MembreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/membre/new' => [[['_route' => 'app_membre_new', '_controller' => 'App\\Controller\\MembreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pressing' => [[['_route' => 'app_pressing_index', '_controller' => 'App\\Controller\\PressingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/pressing/new' => [[['_route' => 'app_pressing_new', '_controller' => 'App\\Controller\\PressingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register/membre' => [[['_route' => 'app_register_membre', '_controller' => 'App\\Controller\\RegisterMembreController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/users' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/new' => [[['_route' => 'app_users_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/articles/([^/]++)(?'
                    .'|(*:223)'
                    .'|/edit(*:236)'
                    .'|(*:244)'
                .')'
                .'|/c(?'
                    .'|lient/([^/]++)(?'
                        .'|(*:275)'
                        .'|/edit(*:288)'
                        .'|(*:296)'
                    .')'
                    .'|ommande/(?'
                        .'|([^/]++)(*:324)'
                        .'|Pint_commande/([^/]++)(*:354)'
                    .')'
                .')'
                .'|/demande/pressing/([^/]++)(?'
                    .'|(*:393)'
                    .'|/edit(*:406)'
                    .'|(*:414)'
                .')'
                .'|/employe/([^/]++)(?'
                    .'|(*:443)'
                    .'|/edit(*:456)'
                    .'|(*:464)'
                .')'
                .'|/membre/([^/]++)(?'
                    .'|(*:492)'
                    .'|/edit(*:505)'
                    .'|(*:513)'
                .')'
                .'|/pressing/([^/]++)(?'
                    .'|(*:543)'
                    .'|/edit(*:556)'
                    .'|(*:564)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:609)'
                .'|/([^/]++)(?'
                    .'|(*:629)'
                    .'|/edit(*:642)'
                .')'
                .'|/state/([^/]++)(*:666)'
                .'|/([^/]++)(*:683)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        223 => [[['_route' => 'app_articles_show', '_controller' => 'App\\Controller\\ArticlesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        236 => [[['_route' => 'app_articles_edit', '_controller' => 'App\\Controller\\ArticlesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        244 => [[['_route' => 'app_articles_delete', '_controller' => 'App\\Controller\\ArticlesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        275 => [[['_route' => 'app_client_show', '_controller' => 'App\\Controller\\ClientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        288 => [[['_route' => 'app_client_edit', '_controller' => 'App\\Controller\\ClientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        296 => [[['_route' => 'app_client_delete', '_controller' => 'App\\Controller\\ClientController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        324 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        354 => [[['_route' => 'commande_print_Detail', '_controller' => 'App\\Controller\\CommandeController::printdetails'], ['commande'], ['GET' => 0], null, false, true, null]],
        393 => [[['_route' => 'app_demande_pressing_show', '_controller' => 'App\\Controller\\DemandePressingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        406 => [[['_route' => 'app_demande_pressing_edit', '_controller' => 'App\\Controller\\DemandePressingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        414 => [[['_route' => 'app_demande_pressing_delete', '_controller' => 'App\\Controller\\DemandePressingController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        443 => [[['_route' => 'app_employe_show', '_controller' => 'App\\Controller\\EmployeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        456 => [[['_route' => 'app_employe_edit', '_controller' => 'App\\Controller\\EmployeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        464 => [[['_route' => 'app_employe_delete', '_controller' => 'App\\Controller\\EmployeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        492 => [[['_route' => 'app_membre_show', '_controller' => 'App\\Controller\\MembreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        505 => [[['_route' => 'app_membre_edit', '_controller' => 'App\\Controller\\MembreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        513 => [[['_route' => 'app_membre_delete', '_controller' => 'App\\Controller\\MembreController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        543 => [[['_route' => 'app_pressing_show', '_controller' => 'App\\Controller\\PressingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        556 => [[['_route' => 'app_pressing_edit', '_controller' => 'App\\Controller\\PressingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        564 => [[['_route' => 'app_pressing_delete', '_controller' => 'App\\Controller\\PressingController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        609 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        629 => [[['_route' => 'app_users_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        642 => [[['_route' => 'app_users_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        666 => [[['_route' => 'app_users_state', '_controller' => 'App\\Controller\\UserController::state'], ['id'], ['POST' => 0], null, false, true, null]],
        683 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
