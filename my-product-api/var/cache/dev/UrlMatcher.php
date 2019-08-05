<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/compte/bancaire' => [[['_route' => 'compte_bancaire_index', '_controller' => 'App\\Controller\\CompteBancaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/compte/bancaire/new' => [[['_route' => 'compte_bancaire_new', '_controller' => 'App\\Controller\\CompteBancaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api' => [
            [['_route' => 'depot_index', '_controller' => 'App\\Controller\\DepotController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'partenaire_index', '_controller' => 'App\\Controller\\PartenaireController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null],
        ],
        '/api/depot' => [[['_route' => 'depot_new', '_controller' => 'App\\Controller\\DepotController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/compte/bancaire/([^/]++)(?'
                    .'|(*:70)'
                    .'|/edit(*:82)'
                    .'|(*:89)'
                .')'
                .'|/api(?'
                    .'|/(?'
                        .'|([^/]++)(?'
                            .'|(*:119)'
                            .'|/edit(*:132)'
                            .'|(*:140)'
                        .')'
                        .'|partenaire(*:159)'
                        .'|([^/]++)(?'
                            .'|(*:178)'
                            .'|/edit(*:191)'
                            .'|(*:199)'
                        .')'
                        .'|register(*:216)'
                        .'|login_check(*:235)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:272)'
                    .'|/(?'
                        .'|d(?'
                            .'|ocs(?:\\.([^/]++))?(*:306)'
                            .'|epots(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:340)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:378)'
                                .')'
                            .')'
                        .')'
                        .'|co(?'
                            .'|ntexts/(.+)(?:\\.([^/]++))?(*:420)'
                            .'|mpte_bancaires(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:463)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:501)'
                                .')'
                            .')'
                        .')'
                        .'|partenaires(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:544)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:582)'
                            .')'
                        .')'
                        .'|login_check(*:603)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        70 => [[['_route' => 'compte_bancaire_show', '_controller' => 'App\\Controller\\CompteBancaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        82 => [[['_route' => 'compte_bancaire_edit', '_controller' => 'App\\Controller\\CompteBancaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        89 => [[['_route' => 'compte_bancaire_delete', '_controller' => 'App\\Controller\\CompteBancaireController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        119 => [[['_route' => 'depot_show', '_controller' => 'App\\Controller\\DepotController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        132 => [[['_route' => 'depot_edit', '_controller' => 'App\\Controller\\DepotController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        140 => [[['_route' => 'depot_delete', '_controller' => 'App\\Controller\\DepotController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        159 => [[['_route' => 'partenaire_new', '_controller' => 'App\\Controller\\PartenaireController::register'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        178 => [[['_route' => 'partenaire_show', '_controller' => 'App\\Controller\\PartenaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        191 => [[['_route' => 'partenaire_edit', '_controller' => 'App\\Controller\\PartenaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        199 => [[['_route' => 'partenaire_delete', '_controller' => 'App\\Controller\\PartenaireController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        216 => [[['_route' => 'registerregister', '_controller' => 'App\\Controller\\UserController::register'], [], null, null, false, false, null]],
        235 => [[['_route' => 'registerlogin', '_controller' => 'App\\Controller\\UserController::login'], [], ['POST' => 0], null, false, false, null]],
        272 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        306 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        340 => [
            [['_route' => 'api_depots_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_depots_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        378 => [
            [['_route' => 'api_depots_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_depots_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_depots_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        420 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        463 => [
            [['_route' => 'api_compte_bancaires_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompteBancaire', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_compte_bancaires_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompteBancaire', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        501 => [
            [['_route' => 'api_compte_bancaires_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompteBancaire', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_compte_bancaires_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompteBancaire', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_compte_bancaires_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompteBancaire', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        544 => [
            [['_route' => 'api_partenaires_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_partenaires_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        582 => [
            [['_route' => 'api_partenaires_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_partenaires_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_partenaires_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        603 => [
            [['_route' => 'api_login_check'], [], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
