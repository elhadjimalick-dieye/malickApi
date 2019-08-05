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
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\UserController::register'], null, null, null, false, false, null]],
        '/login_check' => [[['_route' => 'login', '_controller' => 'App\\Controller\\UserController::login'], null, ['POST' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/compte/bancaire/([^/]++)(?'
                    .'|(*:35)'
                    .'|/edit(*:47)'
                    .'|(*:54)'
                .')'
                .'|/depot/([^/]++)(?'
                    .'|(*:80)'
                    .'|/edit(*:92)'
                    .'|(*:99)'
                .')'
                .'|/partenaire/([^/]++)(?'
                    .'|(*:130)'
                    .'|/edit(*:143)'
                    .'|(*:151)'
                .')'
                .'|/api(?'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:195)'
                    .'|/(?'
                        .'|d(?'
                            .'|ocs(?:\\.([^/]++))?(*:229)'
                            .'|epots(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:263)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:301)'
                                .')'
                            .')'
                        .')'
                        .'|co(?'
                            .'|ntexts/(.+)(?:\\.([^/]++))?(*:343)'
                            .'|mpte_bancaires(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:386)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:424)'
                                .')'
                            .')'
                        .')'
                        .'|partenaires(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:467)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:505)'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'compte_bancaire_show', '_controller' => 'App\\Controller\\CompteBancaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        47 => [[['_route' => 'compte_bancaire_edit', '_controller' => 'App\\Controller\\CompteBancaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        54 => [[['_route' => 'compte_bancaire_delete', '_controller' => 'App\\Controller\\CompteBancaireController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        80 => [[['_route' => 'depot_show', '_controller' => 'App\\Controller\\DepotController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        92 => [[['_route' => 'depot_edit', '_controller' => 'App\\Controller\\DepotController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        99 => [[['_route' => 'depot_delete', '_controller' => 'App\\Controller\\DepotController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        130 => [[['_route' => 'partenaire_show', '_controller' => 'App\\Controller\\PartenaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        143 => [[['_route' => 'partenaire_edit', '_controller' => 'App\\Controller\\PartenaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        151 => [[['_route' => 'partenaire_delete', '_controller' => 'App\\Controller\\PartenaireController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        195 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        229 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        263 => [
            [['_route' => 'api_depots_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_depots_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        301 => [
            [['_route' => 'api_depots_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_depots_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_depots_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        343 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        386 => [
            [['_route' => 'api_compte_bancaires_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompteBancaire', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_compte_bancaires_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompteBancaire', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        424 => [
            [['_route' => 'api_compte_bancaires_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompteBancaire', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_compte_bancaires_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompteBancaire', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_compte_bancaires_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompteBancaire', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        467 => [
            [['_route' => 'api_partenaires_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_partenaires_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        505 => [
            [['_route' => 'api_partenaires_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_partenaires_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_partenaires_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
