<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'compte_bancaire_index' => [[], ['_controller' => 'App\\Controller\\CompteBancaireController::index'], [], [['text', '/api/']], [], []],
    'compte_bancaire_new' => [[], ['_controller' => 'App\\Controller\\CompteBancaireController::new'], [], [['text', '/api/comptebancaire']], [], []],
    'compte_bancaire_show' => [['id'], ['_controller' => 'App\\Controller\\CompteBancaireController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api']], [], []],
    'compte_bancaire_edit' => [['id'], ['_controller' => 'App\\Controller\\CompteBancaireController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api']], [], []],
    'compte_bancaire_delete' => [['id'], ['_controller' => 'App\\Controller\\CompteBancaireController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api']], [], []],
    'depot_index' => [[], ['_controller' => 'App\\Controller\\DepotController::index'], [], [['text', '/api/']], [], []],
    'depot_new' => [[], ['_controller' => 'App\\Controller\\DepotController::new'], [], [['text', '/api/depot']], [], []],
    'depot_show' => [['id'], ['_controller' => 'App\\Controller\\DepotController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api']], [], []],
    'depot_edit' => [['id'], ['_controller' => 'App\\Controller\\DepotController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api']], [], []],
    'depot_delete' => [['id'], ['_controller' => 'App\\Controller\\DepotController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api']], [], []],
    'envoi_index' => [[], ['_controller' => 'App\\Controller\\EnvoiController::index'], [], [['text', '/api/envoie']], [], []],
    'envoi_new' => [[], ['_controller' => 'App\\Controller\\EnvoiController::new'], [], [['text', '/api/new']], [], []],
    'envoi_show' => [['id'], ['_controller' => 'App\\Controller\\EnvoiController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api']], [], []],
    'envoi_edit' => [['id'], ['_controller' => 'App\\Controller\\EnvoiController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api']], [], []],
    'envoi_delete' => [['id'], ['_controller' => 'App\\Controller\\EnvoiController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api']], [], []],
    'partenaire_index' => [[], ['_controller' => 'App\\Controller\\PartenaireController::index'], [], [['text', '/api/']], [], []],
    'partenaire_new' => [[], ['_controller' => 'App\\Controller\\PartenaireController::register'], [], [['text', '/api/partenaire']], [], []],
    'partenaire_show' => [['id'], ['_controller' => 'App\\Controller\\PartenaireController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api']], [], []],
    'partenaire_edit' => [['id'], ['_controller' => 'App\\Controller\\PartenaireController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api']], [], []],
    'partenaire_delete' => [['id'], ['_controller' => 'App\\Controller\\PartenaireController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api']], [], []],
    'pdf' => [[], ['_controller' => 'App\\Controller\\PartenaireController::indexpdf'], [], [['text', '/api/pdf']], [], []],
    'profil_index' => [[], ['_controller' => 'App\\Controller\\ProfilController::index'], [], [['text', '/api/']], [], []],
    'profil_new' => [[], ['_controller' => 'App\\Controller\\ProfilController::new'], [], [['text', '/api/profil']], [], []],
    'profil_show' => [['id'], ['_controller' => 'App\\Controller\\ProfilController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api']], [], []],
    'profil_edit' => [['id'], ['_controller' => 'App\\Controller\\ProfilController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api']], [], []],
    'profil_delete' => [['id'], ['_controller' => 'App\\Controller\\ProfilController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api']], [], []],
    'retrait_index' => [[], ['_controller' => 'App\\Controller\\RetraitController::index'], [], [['text', '/retrait/']], [], []],
    'retrait_new' => [[], ['_controller' => 'App\\Controller\\RetraitController::new'], [], [['text', '/retrait/new']], [], []],
    'retrait_show' => [['id'], ['_controller' => 'App\\Controller\\RetraitController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/retrait']], [], []],
    'retrait_edit' => [['id'], ['_controller' => 'App\\Controller\\RetraitController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/retrait']], [], []],
    'retrait_delete' => [['id'], ['_controller' => 'App\\Controller\\RetraitController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/retrait']], [], []],
    'transaction_index' => [[], ['_controller' => 'App\\Controller\\TransactionController::index'], [], [['text', '/transaction/']], [], []],
    'transaction_new' => [[], ['_controller' => 'App\\Controller\\TransactionController::new'], [], [['text', '/transaction/new']], [], []],
    'transaction_show' => [['id'], ['_controller' => 'App\\Controller\\TransactionController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/transaction']], [], []],
    'transaction_edit' => [['id'], ['_controller' => 'App\\Controller\\TransactionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/transaction']], [], []],
    'transaction_delete' => [['id'], ['_controller' => 'App\\Controller\\TransactionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/transaction']], [], []],
    'registerregister' => [[], ['_controller' => 'App\\Controller\\UserController::register'], [], [['text', '/api/register']], [], []],
    'registerlogin' => [[], ['_controller' => 'App\\Controller\\UserController::login'], [], [['text', '/api/login_check']], [], []],
    'registerupdatparten' => [[], ['_controller' => 'App\\Controller\\UserController::userBloquer'], [], [['text', '/api/bloquer']], [], []],
    'registerupdat' => [[], ['_controller' => 'App\\Controller\\UserController::userdeBloquer'], [], [['text', '/api/debloquer']], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '.+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '.+', 'shortName', true], ['text', '/api/contexts']], [], []],
    'api_profils_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/profils']], [], []],
    'api_profils_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/profils']], [], []],
    'api_profils_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/profils']], [], []],
    'api_profils_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/profils']], [], []],
    'api_profils_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/profils']], [], []],
    'api_partenaires_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/partenaires']], [], []],
    'api_partenaires_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/partenaires']], [], []],
    'api_partenaires_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/partenaires']], [], []],
    'api_partenaires_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/partenaires']], [], []],
    'api_partenaires_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/partenaires']], [], []],
    'api_depots_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/depots']], [], []],
    'api_depots_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/depots']], [], []],
    'api_depots_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/depots']], [], []],
    'api_depots_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/depots']], [], []],
    'api_depots_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/depots']], [], []],
    'api_compte_bancaires_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompteBancaire', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/compte_bancaires']], [], []],
    'api_compte_bancaires_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompteBancaire', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/compte_bancaires']], [], []],
    'api_compte_bancaires_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompteBancaire', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/compte_bancaires']], [], []],
    'api_compte_bancaires_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompteBancaire', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/compte_bancaires']], [], []],
    'api_compte_bancaires_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CompteBancaire', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/compte_bancaires']], [], []],
    'api_envois_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Envoi', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/envois']], [], []],
    'api_envois_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Envoi', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/envois']], [], []],
    'api_envois_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Envoi', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/envois']], [], []],
    'api_envois_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Envoi', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/envois']], [], []],
    'api_envois_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Envoi', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/envois']], [], []],
    'api_transactions_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/transactions']], [], []],
    'api_transactions_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/transactions']], [], []],
    'api_transactions_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/transactions']], [], []],
    'api_transactions_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/transactions']], [], []],
    'api_transactions_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/transactions']], [], []],
    'api_retraits_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Retrait', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/retraits']], [], []],
    'api_retraits_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Retrait', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/retraits']], [], []],
    'api_retraits_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Retrait', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/retraits']], [], []],
    'api_retraits_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Retrait', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/retraits']], [], []],
    'api_retraits_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Retrait', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/retraits']], [], []],
    'api_login_check' => [[], [], [], [['text', '/api/login_check']], [], []],
];
