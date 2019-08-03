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
        '/depot' => [[['_route' => 'depot_index', '_controller' => 'App\\Controller\\DepotController::index'], null, ['GET' => 0], null, true, false, null]],
        '/depot/new' => [[['_route' => 'depot_new', '_controller' => 'App\\Controller\\DepotController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/partenaire' => [[['_route' => 'partenaire_index', '_controller' => 'App\\Controller\\PartenaireController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/partenaire/new' => [[['_route' => 'partenaire_new', '_controller' => 'App\\Controller\\PartenaireController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/compte/bancaire/([^/]++)(?'
                    .'|(*:70)'
                    .'|/edit(*:82)'
                    .'|(*:89)'
                .')'
                .'|/depot/([^/]++)(?'
                    .'|(*:115)'
                    .'|/edit(*:128)'
                    .'|(*:136)'
                .')'
                .'|/partenaire/([^/]++)(?'
                    .'|(*:168)'
                    .'|/edit(*:181)'
                    .'|(*:189)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:215)'
                    .'|/edit(*:228)'
                    .'|(*:236)'
                .')'
                .'|/api(?'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:280)'
                    .'|/(?'
                        .'|d(?'
                            .'|ocs(?:\\.([^/]++))?(*:314)'
                            .'|epots(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:348)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:386)'
                                .')'
                            .')'
                        .')'
                        .'|co(?'
                            .'|ntexts/(.+)(?:\\.([^/]++))?(*:428)'
                            .'|mpte_bancaires(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:471)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:509)'
                                .')'
                            .')'
                        .')'
                        .'|partenaires(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:552)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:590)'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        70 => [[['_route' => 'compte_bancaire_show', '_controller' => 'App\\Controller\\CompteBancaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        82 => [[['_route' => 'compte_bancaire_edit', '_controller' => 'App\\Controller\\CompteBancaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        89 => [[['_route' => 'compte_bancaire_delete', '_controller' => 'App\\Controller\\CompteBancaireController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        115 => [[['_route' => 'depot_show', '_controller' => 'App\\Controller\\DepotController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        128 => [[['_route' => 'depot_edit', '_controller' => 'App\\Controller\\DepotController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        136 => [[['_route' => 'depot_delete', '_controller' => 'App\\Controller\\DepotController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        168 => [[['_route' => 'partenaire_show', '_controller' => 'App\\Controller\\PartenaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        181 => [[['_route' => 'partenaire_edit', '_controller' => 'App\\Controller\\PartenaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        189 => [[['_route' => 'partenaire_delete', '_controller' => 'App\\Controller\\PartenaireController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        215 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        228 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        236 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        280 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        314 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        348 => [
            [['_route' => 'api_depots_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_depots_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        386 => [
            [['_route' => 'api_depots_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_depots_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_depots_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        428 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        471 => [
            [['_route' => 'api_compte_bancaires_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompteBancaire', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_compte_bancaires_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompteBancaire', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        509 => [
            [['_route' => 'api_compte_bancaires_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompteBancaire', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_compte_bancaires_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompteBancaire', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_compte_bancaires_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompteBancaire', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        552 => [
            [['_route' => 'api_partenaires_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_partenaires_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        590 => [
            [['_route' => 'api_partenaires_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_partenaires_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_partenaires_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
