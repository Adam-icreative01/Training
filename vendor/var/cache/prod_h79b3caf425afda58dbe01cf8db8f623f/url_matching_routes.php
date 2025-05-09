<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/_action/access-key/intergration' => [[['_route' => 'api.action.access-key.integration', '_routeScope' => ['api'], '_acl' => ['api_action_access-key_integration'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AccessKeyController::generateIntegrationKey'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/access-key/user' => [[['_route' => 'api.action.access-key.user', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AccessKeyController::generateUserKey'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/access-key/sales-channel' => [[['_route' => 'api.action.access-key.sales-channel', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AccessKeyController::generateSalesChannelKey'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/access-key/product-export' => [[['_route' => 'api.action.access-key.product-export', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AccessKeyController::generateProductExportKey'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/acl/privileges' => [[['_route' => 'api.acl.privileges.get', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['api_acl_privileges_get'], '_httpCache' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AclController::getPrivileges'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/acl/additional_privileges' => [[['_route' => 'api.acl.privileges.additional.get', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['api_acl_privileges_additional_get'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AclController::getAdditionalPrivileges'], null, ['GET' => 0], null, false, false, null]],
        '/api/oauth/authorize' => [[['_route' => 'api.oauth.authorize', '_routeScope' => ['api'], 'auth_required' => false, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AuthController::authorize'], null, ['POST' => 0], null, false, false, null]],
        '/api/oauth/token' => [[['_route' => 'api.oauth.token', '_routeScope' => ['api'], 'auth_required' => false, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AuthController::token'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/cache_info' => [[['_route' => 'api.action.cache.info', '_routeScope' => ['api'], '_acl' => ['system:cache:info'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::info'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/index' => [[['_route' => 'api.action.cache.index', '_routeScope' => ['api'], '_acl' => ['api_action_cache_index'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::index'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/cache' => [[['_route' => 'api.action.cache.delete', '_routeScope' => ['api'], '_acl' => ['system:clear:cache'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::clearCache'], null, ['DELETE' => 0], null, false, false, null]],
        '/api/_action/cache-delayed' => [[['_route' => 'api.action.cache.delete-delayed', '_routeScope' => ['api'], '_acl' => ['system:clear:cache'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::clearDelayedCache'], null, ['DELETE' => 0], null, false, false, null]],
        '/api/_action/cleanup' => [[['_route' => 'api.action.cache.cleanup', '_routeScope' => ['api'], '_acl' => ['system:clear:cache'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::clearOldCacheFolders'], null, ['DELETE' => 0], null, false, false, null]],
        '/api/_action/container_cache' => [[['_route' => 'api.action.container-cache.delete', '_routeScope' => ['api'], '_acl' => ['system:clear:cache'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::clearContainerCache'], null, ['DELETE' => 0], null, false, false, null]],
        '/api/_action/custom-snippet' => [[['_route' => 'api.action.custom-snippet', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CustomSnippetFormatController::snippets'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/custom-snippet/render' => [[['_route' => 'api.action.custom-snippet.render', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CustomSnippetFormatController::render'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/feature-flag' => [[['_route' => 'api.action.feature-flag.load', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['api_feature_flag_toggle'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\FeatureFlagController::load'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/health-check' => [[['_route' => 'api.info.health.check', '_routeScope' => ['api'], 'auth_required' => false, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\HealthCheckController::check'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/system-health-check' => [[['_route' => 'api.info.system-health.check', '_routeScope' => ['api'], 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\HealthCheckController::health'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/indexing' => [[['_route' => 'api.action.indexing', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\IndexingController::indexing'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/index-products' => [[['_route' => 'api.action.indexing.products', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\IndexingController::products'], null, ['POST' => 0], null, false, false, null]],
        '/api/_info/openapi3.json' => [[['_route' => 'api.info.openapi3', '_routeScope' => ['api'], 'auth_required' => '1', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::info'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/queue.json' => [[['_route' => 'api.info.queue', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::queue'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/open-api-schema.json' => [[['_route' => 'api.info.open-api-schema', '_routeScope' => ['api'], 'auth_required' => '1', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::openApiSchema'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/entity-schema.json' => [[['_route' => 'api.info.entity-schema', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::entitySchema'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/events.json' => [[['_route' => 'api.info.business-events', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::businessEvents'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/swagger.html' => [[['_route' => 'api.info.swagger', '_routeScope' => ['api'], 'auth_required' => '1', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::infoHtml'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/stoplightio.html' => [[['_route' => 'api.info.stoplightio', '_routeScope' => ['api'], 'auth_required' => '1', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::stoplightIoInfoHtml'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/config' => [[['_route' => 'api.info.config', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::config'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/version' => [[['_route' => 'api.info.shopware.version', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::infoShopwareVersion'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/_info/version' => [[['_route' => 'api.info.shopware.version_old_version', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::infoShopwareVersion'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/flow-actions.json' => [[['_route' => 'api.info.actions', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::flowActions'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/routes' => [[['_route' => 'api.info.routes', '_routeScope' => ['api'], 'auth_required' => '1', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::getRoutes'], null, ['GET' => 0], null, false, false, null]],
        '/api/_proxy/switch-customer' => [[['_route' => 'api.proxy.switch-customer', '_routeScope' => ['api'], '_acl' => ['api_proxy_switch-customer'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::assignCustomer'], null, ['PATCH' => 0], null, false, false, null]],
        '/api/_proxy/generate-imitate-customer-token' => [[['_route' => 'api.proxy.generate-imitate-customer-token', '_routeScope' => ['api'], '_acl' => ['api_proxy_imitate-customer'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::generateImitateCustomerToken'], null, ['POST' => 0], null, false, false, null]],
        '/api/_proxy/modify-shipping-costs' => [[['_route' => 'api.proxy.modify-shipping-costs', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::modifyShippingCosts'], null, ['PATCH' => 0], null, false, false, null]],
        '/api/_proxy/disable-automatic-promotions' => [[['_route' => 'api.proxy.disable-automatic-promotions', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::disableAutomaticPromotions'], null, ['PATCH' => 0], null, false, false, null]],
        '/api/_proxy/enable-automatic-promotions' => [[['_route' => 'api.proxy.enable-automatic-promotions', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::enableAutomaticPromotions'], null, ['PATCH' => 0], null, false, false, null]],
        '/api/_action/sync' => [[['_route' => 'api.action.sync', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SyncController::sync'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/extension/refresh' => [[['_route' => 'api.extension.refresh', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreActionsController::refreshExtensions'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/extension/upload' => [[['_route' => 'api.extension.upload', '_routeScope' => ['api'], '_acl' => ['system.plugin_upload'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreActionsController::uploadExtensions'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/extension/installed' => [[['_route' => 'api.extension.installed', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreDataController::getInstalledExtensions'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/store/frw/start' => [[['_route' => 'api.custom.store.frw.start', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::frwStart'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/store/language-plugins' => [[['_route' => 'api.custom.store.language-plugins', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getLanguagePluginList'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/store/demo-data-plugins' => [[['_route' => 'api.custom.store.demo-data-plugins', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getDemoDataPluginList'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/store/recommendation-regions' => [[['_route' => 'api.custom.store.recommendation-regions', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getRecommendationRegions'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/store/recommendations' => [[['_route' => 'api.custom.store.recommendations', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getRecommendations'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/store/frw/login' => [[['_route' => 'api.custom.store.frw.login', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::frwLogin'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/store/license-domains' => [[['_route' => 'api.custom.store.license-domains', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getDomainList'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/store/verify-license-domain' => [[['_route' => 'api.custom.store.verify-license-domain', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::verifyDomain'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/store/frw/finish' => [[['_route' => 'api.custom.store.frw.finish', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::frwFinish'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/store/login' => [[['_route' => 'api.custom.store.login', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::login'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/store/checklogin' => [[['_route' => 'api.custom.store.checklogin', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::checkLogin'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/store/logout' => [[['_route' => 'api.custom.store.logout', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::logout'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/store/updates' => [[['_route' => 'api.custom.store.updates', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::getUpdateList'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/store/license-violations' => [[['_route' => 'api.custom.store.license-violations', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::getLicenseViolations'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/store/plugin/search' => [[['_route' => 'api.action.store.plugin.search', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::searchPlugins'], null, ['POST' => 0], null, false, false, null]],
        '/api/store/active-in-app-purchases' => [[['_route' => 'api.store.active-in-app-purchases', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\InAppPurchase\\Api\\InAppPurchasesController::activeExtensionInAppPurchases'], null, ['GET' => 0], null, false, false, null]],
        '/api/store/check-in-app-purchase-active' => [[['_route' => 'api.store.check-in-app-purchase-active', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Store\\InAppPurchase\\Api\\InAppPurchasesController::checkExtensionInAppPurchaseIsActive'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/update/check' => [[['_route' => 'api.custom.updateapi.check', '_routeScope' => ['api'], '_acl' => ['system:core:update'], '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::updateApiCheck'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/update/check-requirements' => [[['_route' => 'api.custom.update.check_requirements', '_routeScope' => ['api'], '_acl' => ['system:core:update'], '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::checkRequirements'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/update/extension-compatibility' => [[['_route' => 'api.custom.updateapi.extension_compatibility', '_routeScope' => ['api'], '_acl' => ['system:core:update', 'system_config:read'], '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::extensionCompatibility'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/update/download-recovery' => [[['_route' => 'api.custom.updateapi.download-recovery', '_routeScope' => ['api'], '_acl' => ['system:core:update', 'system_config:read'], '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::downloadLatestRecovery'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/update/deactivate-plugins' => [[['_route' => 'api.custom.updateapi.deactivate-plugins', '_routeScope' => ['api'], '_acl' => ['system:core:update', 'system_config:read'], '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::deactivatePlugins'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/message-queue/consume' => [[['_route' => 'api.action.message-queue.consume', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\MessageQueue\\Api\\ConsumeMessagesController::consumeMessages'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/scheduled-task/run' => [[['_route' => 'api.action.scheduled-task.run', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\MessageQueue\\Api\\ScheduledTaskController::runScheduledTasks'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/scheduled-task/min-run-interval' => [[['_route' => 'api.action.scheduled-task.min-run-interval', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\MessageQueue\\Api\\ScheduledTaskController::getMinRunInterval'], null, ['GET' => 0], null, false, false, null]],
        '/api/app-system/modules' => [[['_route' => 'api.app_system.modules', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppActionController::getModules'], null, ['GET' => 0], null, false, false, null]],
        '/api/app-system/cms/blocks' => [[['_route' => 'api.app_system.cms.blocks', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppCmsController::getBlocks'], null, ['GET' => 0], null, false, false, null]],
        '/api/app-system/app-url-change/strategies' => [[['_route' => 'api.app_system.app-url-change-strategies', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppUrlChangeController::getAvailableStrategies'], null, ['GET' => 0], null, false, false, null]],
        '/api/app-system/app-url-change/resolve' => [[['_route' => 'api.app_system.app-url-change-resolve', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppUrlChangeController::resolve'], null, ['POST' => 0], null, false, false, null]],
        '/api/app-system/app-url-change/url-difference' => [[['_route' => 'api.app_system.app-url-difference', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppUrlChangeController::getUrlDifference'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/rule-config' => [[['_route' => 'api.info.rule-config', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Rule\\Api\\RuleConfigController::getConditionsConfig'], null, ['GET' => 0], null, false, false, null]],
        '/api/usage-data/consent' => [[['_route' => 'api.usage_data.get_consent', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\UsageData\\Api\\ConsentController::getConsent'], null, ['GET' => 0], null, false, false, null]],
        '/api/usage-data/accept-consent' => [[['_route' => 'api.usage_data.accept_consent', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\UsageData\\Api\\ConsentController::acceptConsent'], null, ['POST' => 0], null, false, false, null]],
        '/api/usage-data/revoke-consent' => [[['_route' => 'api.usage_data.revoke_consent', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\UsageData\\Api\\ConsentController::revokeConsent'], null, ['POST' => 0], null, false, false, null]],
        '/api/usage-data/hide-consent-banner' => [[['_route' => 'api.usage_data.hide_consent_banner', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\UsageData\\Api\\ConsentController::hideConsentBanner'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/user/user-recovery' => [[['_route' => 'api.action.user.user-recovery', '_routeScope' => ['api'], 'auth_required' => false, '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserRecoveryController::createUserRecovery'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/user/user-recovery/hash' => [[['_route' => 'api.action.user.user-recovery.hash', '_routeScope' => ['api'], 'auth_required' => false, '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserRecoveryController::checkUserRecovery'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/user/user-recovery/password' => [[['_route' => 'api.action.user.user-recovery.password', '_routeScope' => ['api'], 'auth_required' => false, '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserRecoveryController::updateUserPassword'], null, ['PATCH' => 0], null, false, false, null]],
        '/api/_action/user/check-email-unique' => [[['_route' => 'api.action.check-email-unique', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserValidationController::isEmailUnique'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/user/check-username-unique' => [[['_route' => 'api.action.check-username-unique', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserValidationController::isUsernameUnique'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/snippet-set' => [[['_route' => 'api.action.snippet-set.getList', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\Snippet\\Api\\SnippetController::getList'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/snippet/filter' => [[['_route' => 'api.action.snippet.get.filter', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\Snippet\\Api\\SnippetController::getFilterItems'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/snippet-set/baseFile' => [[['_route' => 'api.action.snippet-set.base-file', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\Snippet\\Api\\SnippetController::getBaseFiles'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/snippet-set/author' => [[['_route' => 'api.action.snippet-set.author', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\Snippet\\Api\\SnippetController::getAuthors'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/attribute-set/relations' => [[['_route' => 'api.action.attribute-set.get-relations', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomField\\Api\\CustomFieldSetActionController::getAvailableRelations'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/system-config/check' => [[['_route' => 'api.action.core.system-config.check', '_routeScope' => ['api'], '_acl' => ['system_config:read'], '_controller' => 'Shopware\\Core\\System\\SystemConfig\\Api\\SystemConfigController::checkConfiguration'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/system-config/schema' => [[['_route' => 'api.action.core.system-config', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\SystemConfig\\Api\\SystemConfigController::getConfiguration'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/system-config' => [
            [['_route' => 'api.action.core.system-config.value', '_routeScope' => ['api'], '_acl' => ['system_config:read'], '_controller' => 'Shopware\\Core\\System\\SystemConfig\\Api\\SystemConfigController::getConfigurationValues'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api.action.core.save.system-config', '_routeScope' => ['api'], '_acl' => ['system_config:update', 'system_config:create', 'system_config:delete'], '_controller' => 'Shopware\\Core\\System\\SystemConfig\\Api\\SystemConfigController::saveConfiguration'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/_action/system-config/batch' => [[['_route' => 'api.action.core.save.system-config.batch', '_routeScope' => ['api'], '_acl' => ['system_config:update', 'system_config:create', 'system_config:delete'], '_controller' => 'Shopware\\Core\\System\\SystemConfig\\Api\\SystemConfigController::batchSaveConfiguration'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/_info/openapi3.json' => [[['_route' => 'store-api.info.openapi3', '_routeScope' => ['store-api'], 'auth_required' => '1', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::info'], null, ['GET' => 0], null, false, false, null]],
        '/store-api/_info/open-api-schema.json' => [[['_route' => 'store-api.info.open-api-schema', '_routeScope' => ['store-api'], 'auth_required' => '1', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::openApiSchema'], null, ['GET' => 0], null, false, false, null]],
        '/store-api/_info/swagger.html' => [[['_route' => 'store-api.info.swagger', '_routeScope' => ['store-api'], 'auth_required' => '1', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::infoHtml'], null, ['GET' => 0], null, false, false, null]],
        '/store-api/_info/stoplightio.html' => [[['_route' => 'store-api.info.stoplightio', '_routeScope' => ['store-api'], 'auth_required' => '1', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::stoplightIoInfoHtml'], null, ['GET' => 0], null, false, false, null]],
        '/store-api/_info/routes' => [[['_route' => 'store-api.info.routes', '_routeScope' => ['store-api'], 'auth_required' => '1', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::getRoutes'], null, ['GET' => 0], null, false, false, null]],
        '/store-api/context' => [
            [['_route' => 'store-api.context', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\ContextRoute::load'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'store-api.switch-context', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\ContextSwitchRoute::switchContext'], null, ['PATCH' => 0], null, false, false, null],
        ],
        '/store-api/currency' => [[['_route' => 'store-api.currency', '_routeScope' => ['store-api'], '_entity' => 'currency', '_controller' => 'Shopware\\Core\\System\\Currency\\SalesChannel\\CurrencyRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/language' => [[['_route' => 'store-api.language', '_routeScope' => ['store-api'], '_entity' => 'language', '_controller' => 'Shopware\\Core\\System\\Language\\SalesChannel\\LanguageRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/salutation' => [[['_route' => 'store-api.salutation', '_routeScope' => ['store-api'], '_entity' => 'salutation', '_controller' => 'Shopware\\Core\\System\\Salutation\\SalesChannel\\SalutationRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/country' => [[['_route' => 'store-api.country', '_routeScope' => ['store-api'], '_entity' => 'country', '_controller' => 'Shopware\\Core\\System\\Country\\SalesChannel\\CountryRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/_action/media/provide-name' => [[['_route' => 'api.action.media.provide-name', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\Media\\Api\\MediaUploadController::provideName'], null, ['GET' => 0], null, false, false, null]],
        '/store-api/media' => [[['_route' => 'store-api.media.detail', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\Media\\SalesChannel\\MediaRoute::load'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/mail-template/send' => [[['_route' => 'api.action.mail_template.send', '_routeScope' => ['api'], '_acl' => ['api_send_email'], '_controller' => 'Shopware\\Core\\Content\\MailTemplate\\Api\\MailActionController::send'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/mail-template/validate' => [[['_route' => 'api.action.mail_template.validate', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\MailTemplate\\Api\\MailActionController::validate'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/mail-template/build' => [[['_route' => 'api.action.mail_template.build', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\MailTemplate\\Api\\MailActionController::build'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/import-export/features' => [[['_route' => 'api.action.import_export.features', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::features'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/import-export/prepare' => [[['_route' => 'api.action.import_export.initiate', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::initiate'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/import-export/process' => [[['_route' => 'api.action.import_export.process', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::process'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/import-export/file/download' => [[['_route' => 'api.action.import_export.file.download', '_routeScope' => ['api'], 'auth_required' => false, '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::download'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/import-export/cancel' => [[['_route' => 'api.action.import_export.cancel', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::cancel'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/import-export/prepare-template-file-download' => [[['_route' => 'api.action.import_export.template_file.prepare_download', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::prepareTemplateFileDownload'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/import-export/mapping-from-template' => [[['_route' => 'api.action.import_export.template_file.mapping', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::mappingFromTemplate'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/product-export/validate' => [[['_route' => 'api.action.product_export.validate', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\ProductExport\\Api\\ProductExportController::validate'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/product-export/preview' => [[['_route' => 'api.action.product_export.preview', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\ProductExport\\Api\\ProductExportController::preview'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/seo-url-template/validate' => [[['_route' => 'api.seo-url-template.validate', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::validate'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/seo-url-template/preview' => [[['_route' => 'api.seo-url-template.preview', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::preview'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/seo-url-template/context' => [[['_route' => 'api.seo-url-template.context', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::getSeoUrlContext'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/seo-url/canonical' => [[['_route' => 'api.seo-url.canonical', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::updateCanonicalUrl'], null, ['PATCH' => 0], null, false, false, null]],
        '/api/_action/seo-url/create-custom-url' => [[['_route' => 'api.seo-url.create', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::createCustomSeoUrls'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/category' => [[['_route' => 'store-api.category.search', '_routeScope' => ['store-api'], '_entity' => 'category', '_controller' => 'Shopware\\Core\\Content\\Category\\SalesChannel\\CategoryListRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/product' => [[['_route' => 'store-api.product.search', '_routeScope' => ['store-api'], '_entity' => 'product', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\ProductListRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/search' => [[['_route' => 'store-api.search', '_routeScope' => ['store-api'], '_entity' => 'product', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Search\\ResolvedCriteriaProductSearchRoute::load'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/search-suggest' => [[['_route' => 'store-api.search.suggest', '_routeScope' => ['store-api'], '_entity' => 'product', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Suggest\\ResolvedCriteriaProductSuggestRoute::load'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/contact-form' => [[['_route' => 'store-api.contact.form', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\ContactForm\\SalesChannel\\ContactFormRoute::load'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/newsletter/confirm' => [[['_route' => 'store-api.newsletter.confirm', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterConfirmRoute::confirm'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/newsletter/subscribe' => [[['_route' => 'store-api.newsletter.subscribe', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterSubscribeRoute::subscribe'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/newsletter/unsubscribe' => [[['_route' => 'store-api.newsletter.unsubscribe', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterUnsubscribeRoute::unsubscribe'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/seo-url' => [[['_route' => 'store-api.seo.url', '_routeScope' => ['store-api'], '_entity' => 'seo_url', '_controller' => 'Shopware\\Core\\Content\\Seo\\SalesChannel\\SeoUrlRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/sitemap' => [[['_route' => 'store-api.sitemap', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\Sitemap\\SalesChannel\\SitemapRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/_action/calculate-price' => [[['_route' => 'api.action.calculate-price', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\PriceActionController::calculate'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/calculate-prices' => [[['_route' => 'api.action.calculate-prices', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\PriceActionController::calculatePrices'], null, ['POST' => 0], null, false, false, null]],
        '/payment/finalize-transaction' => [[['_route' => 'payment.finalize.transaction', '_controller' => 'Shopware\\Core\\Checkout\\Payment\\Controller\\PaymentController::finalizeTransaction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/_action/order/document/download' => [[['_route' => 'api.action.download.documents', '_routeScope' => ['api'], '_acl' => ['document:read'], '_controller' => 'Shopware\\Core\\Checkout\\Document\\Controller\\DocumentController::downloadDocuments'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/promotion/setgroup/packager' => [[['_route' => 'api.action.promotion.setgroup.packager', '_routeScope' => ['api'], '_acl' => ['promotion:read'], '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionActionController::getSetGroupPackagers'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/promotion/setgroup/sorter' => [[['_route' => 'api.action.promotion.setgroup.sorter', '_routeScope' => ['api'], '_acl' => ['promotion:read'], '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionActionController::getSetGroupSorters'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/promotion/discount/picker' => [[['_route' => 'api.action.promotion.discount.picker', '_routeScope' => ['api'], '_acl' => ['promotion:read'], '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionActionController::getDiscountFilterPickers'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/promotion/codes/generate-fixed' => [[['_route' => 'api.action.promotion.codes.generate-fixed', '_routeScope' => ['api'], '_acl' => ['promotion.editor'], '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionController::generateFixedCode'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/promotion/codes/generate-individual' => [[['_route' => 'api.action.promotion.codes.generate-individual', '_routeScope' => ['api'], '_acl' => ['promotion.editor'], '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionController::generateIndividualCodes'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/promotion/codes/replace-individual' => [[['_route' => 'api.action.promotion.codes.replace-individual', '_routeScope' => ['api'], '_acl' => ['promotion.editor'], '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionController::replaceIndividualCodes'], null, ['PATCH' => 0], null, false, false, null]],
        '/api/_action/promotion/codes/add-individual' => [[['_route' => 'api.action.promotion.codes.add-individual', '_routeScope' => ['api'], '_acl' => ['promotion.editor'], '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionController::addIndividualCodes'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/promotion/codes/preview' => [[['_route' => 'api.action.promotion.codes.preview', '_routeScope' => ['api'], '_acl' => ['promotion.editor'], '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionController::getCodePreview'], null, ['GET' => 0], null, false, false, null]],
        '/store-api/handle-payment' => [[['_route' => 'store-api.payment.handle', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Payment\\SalesChannel\\HandlePaymentMethodRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/payment-method' => [[['_route' => 'store-api.payment.method', '_routeScope' => ['store-api'], '_entity' => 'payment_method', '_controller' => 'Shopware\\Core\\Checkout\\Payment\\SalesChannel\\SortedPaymentMethodRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/shipping-method' => [[['_route' => 'store-api.shipping.method', '_routeScope' => ['store-api'], '_entity' => 'shipping_method', '_controller' => 'Shopware\\Core\\Checkout\\Shipping\\SalesChannel\\SortedShippingMethodRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/_action/customer-group-registration/accept' => [[['_route' => 'api.customer-group.accept', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Customer\\Api\\CustomerGroupRegistrationActionController::accept'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/customer-group-registration/decline' => [[['_route' => 'api.customer-group.decline', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Customer\\Api\\CustomerGroupRegistrationActionController::decline'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/newsletter-recipient' => [[['_route' => 'store-api.newsletter.recipient', '_routeScope' => ['store-api'], '_loginRequired' => true, '_entity' => 'newsletter_recipient', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\AccountNewsletterRecipientRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/account/change-profile' => [[['_route' => 'store-api.account.change-profile', '_routeScope' => ['store-api'], '_contextTokenRequired' => true, '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangeCustomerProfileRoute::change'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/change-email' => [[['_route' => 'store-api.account.change-email', '_routeScope' => ['store-api'], '_contextTokenRequired' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangeEmailRoute::change'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/change-language' => [[['_route' => 'store-api.account.change-language', '_routeScope' => ['store-api'], '_contextTokenRequired' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangeLanguageRoute::change'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/change-password' => [[['_route' => 'store-api.account.change-password', '_routeScope' => ['store-api'], '_contextTokenRequired' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangePasswordRoute::change'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/customer-recovery-is-expired' => [[['_route' => 'store-api.account.customer.recovery.is.expired', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\CustomerRecoveryIsExpiredRoute::load'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/customer' => [
            [['_route' => 'store-api.account.customer', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_entity' => 'customer', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\CustomerRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null],
            [['_route' => 'store-api.account.customer.delete', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\DeleteCustomerRoute::delete'], null, ['DELETE' => 0], null, false, false, null],
        ],
        '/store-api/account/login/imitate-customer' => [[['_route' => 'store-api.account.imitate-customer-login', '_routeScope' => ['store-api'], '_contextTokenRequired' => false, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ImitateCustomerRoute::imitateCustomerLogin'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/list-address' => [[['_route' => 'store-api.account.address.list.get', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_entity' => 'customer_address', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ListAddressRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/customer/wishlist' => [[['_route' => 'store-api.customer.wishlist.load', '_routeScope' => ['store-api'], '_loginRequired' => true, '_entity' => 'product', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\LoadWishlistRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/account/login' => [[['_route' => 'store-api.account.login', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\LoginRoute::login'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/logout' => [[['_route' => 'store-api.account.logout', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\LogoutRoute::logout'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/customer/wishlist/merge' => [[['_route' => 'store-api.customer.wishlist.merge', '_routeScope' => ['store-api'], '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\MergeWishlistProductRoute::merge'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/register-confirm' => [[['_route' => 'store-api.account.register.confirm', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\RegisterConfirmRoute::confirm'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/register' => [[['_route' => 'store-api.account.register', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\RegisterRoute::register'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/recovery-password-confirm' => [[['_route' => 'store-api.account.recovery.password', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ResetPasswordRoute::resetPassword'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/recovery-password' => [[['_route' => 'store-api.account.recovery.send.mail', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SendPasswordRecoveryMailRoute::sendRecoveryMail'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/address' => [[['_route' => 'store-api.account.address.create', '_routeScope' => ['store-api'], 'addressId' => null, '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\UpsertAddressRoute::upsert'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/order/state/cancel' => [[['_route' => 'store-api.order.state.cancel', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Order\\SalesChannel\\CancelOrderRoute::cancel'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/order' => [[['_route' => 'store-api.order', '_routeScope' => ['store-api'], '_entity' => 'order', '_controller' => 'Shopware\\Core\\Checkout\\Order\\SalesChannel\\OrderRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/order/payment' => [[['_route' => 'store-api.order.set-payment', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Order\\SalesChannel\\SetPaymentOrderRoute::setPayment'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/checkout/cart' => [
            [['_route' => 'store-api.checkout.cart.delete', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartDeleteRoute::delete'], null, ['DELETE' => 0], null, false, false, null],
            [['_route' => 'store-api.checkout.cart.read', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartLoadRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null],
        ],
        '/store-api/checkout/cart/line-item' => [
            [['_route' => 'store-api.checkout.cart.add', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartItemAddRoute::add'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'store-api.checkout.cart.remove-item', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartItemRemoveRoute::remove'], null, ['DELETE' => 0], null, false, false, null],
            [['_route' => 'store-api.checkout.cart.update-lineitem', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartItemUpdateRoute::change'], null, ['PATCH' => 0], null, false, false, null],
        ],
        '/store-api/checkout/cart/line-item/delete' => [[['_route' => 'store-api.checkout.cart.remove-item-v2', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartItemRemoveRoute::remove'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/checkout/order' => [[['_route' => 'store-api.checkout.cart.order', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartOrderRoute::order'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/checkout/gateway' => [[['_route' => 'store-api.checkout.gateway', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Gateway\\SalesChannel\\CheckoutGatewayRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/_action/extension-sdk/run-action' => [[['_route' => 'api.action.extension-sdk.run-action', '_routeScope' => ['api'], '_controller' => 'Shopware\\Administration\\Controller\\AdminExtensionApiController::runAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/extension-sdk/sign-uri' => [[['_route' => 'api.action.extension-sdk.sign-uri', '_routeScope' => ['api'], '_controller' => 'Shopware\\Administration\\Controller\\AdminExtensionApiController::signUri'], null, ['POST' => 0], null, false, false, null]],
        '/api/_admin/search' => [[['_route' => 'api.admin.search', '_routeScope' => ['administration'], '_controller' => 'Shopware\\Administration\\Controller\\AdminSearchController::search'], null, ['POST' => 0], null, false, false, null]],
        '/api/_admin/tag-filter-ids' => [[['_route' => 'api.admin.tag-filter-ids', '_routeScope' => ['administration'], '_acl' => ['tag:read'], '_entity' => 'tag', '_controller' => 'Shopware\\Administration\\Controller\\AdminTagController::filterIds'], null, ['POST' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'administration.index', '_routeScope' => ['administration'], 'auth_required' => false, '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/_admin/snippets' => [[['_route' => 'api.admin.snippets', '_routeScope' => ['administration'], '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::snippets'], null, ['GET' => 0], null, false, false, null]],
        '/api/_admin/known-ips' => [[['_route' => 'api.admin.known-ips', '_routeScope' => ['administration'], '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::knownIps'], null, ['GET' => 0], null, false, false, null]],
        '/api/_admin/reset-excluded-search-term' => [[['_route' => 'api.admin.reset-excluded-search-term', '_routeScope' => ['administration'], '_acl' => ['system_config:update', 'system_config:create', 'system_config:delete'], '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::resetExcludedSearchTerm'], null, ['POST' => 0], null, false, false, null]],
        '/api/_admin/check-customer-email-valid' => [[['_route' => 'api.admin.check-customer-email-valid', '_routeScope' => ['administration'], '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::checkCustomerEmailValid'], null, ['POST' => 0], null, false, false, null]],
        '/api/_admin/sanitize-html' => [[['_route' => 'api.admin.sanitize-html', '_routeScope' => ['administration'], '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::sanitizeHtml'], null, ['POST' => 0], null, false, false, null]],
        '/api/notification' => [[['_route' => 'api.notification', '_routeScope' => ['api'], '_acl' => ['notification:create'], '_controller' => 'Shopware\\Administration\\Controller\\NotificationController::saveNotification'], null, ['POST' => 0], null, false, false, null]],
        '/api/notification/message' => [[['_route' => 'api.notification.message', '_routeScope' => ['api'], '_controller' => 'Shopware\\Administration\\Controller\\NotificationController::fetchNotification'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/config-me' => [
            [['_route' => 'api.config_me.get', 'auth_required' => true, '_routeScope' => ['administration'], '_controller' => 'Shopware\\Administration\\Controller\\UserConfigController::getConfigMe'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api.config_me.update', 'auth_required' => true, '_routeScope' => ['administration'], '_controller' => 'Shopware\\Administration\\Controller\\UserConfigController::updateConfigMe'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/_admin/es-search' => [[['_route' => 'api.admin.es-search', '_routeScope' => ['administration'], '_controller' => 'Shopware\\Elasticsearch\\Admin\\AdminSearchController::elastic'], null, ['POST' => 0], null, false, false, null]],
        '/account/order' => [[['_route' => 'frontend.account.order.page', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::orderOverview'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/account/order/cancel' => [[['_route' => 'frontend.account.order.cancel', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::cancelOrder'], null, ['POST' => 0], null, false, false, null]],
        '/account/payment' => [
            [['_route' => 'frontend.account.payment.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountPaymentController::paymentOverview'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.payment.save', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountPaymentController::savePayment'], null, ['POST' => 0], null, false, false, null],
        ],
        '/account' => [[['_route' => 'frontend.account.home.page', '_routeScope' => ['storefront'], '_loginRequired' => true, '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::index'], null, ['GET' => 0], null, false, false, null]],
        '/account/profile' => [
            [['_route' => 'frontend.account.profile.page', '_routeScope' => ['storefront'], '_loginRequired' => true, '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::profileOverview'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.profile.save', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::saveProfile'], null, ['POST' => 0], null, false, false, null],
        ],
        '/account/profile/email' => [[['_route' => 'frontend.account.profile.email.save', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::saveEmail'], null, ['POST' => 0], null, false, false, null]],
        '/account/profile/password' => [[['_route' => 'frontend.account.profile.password.save', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::savePassword'], null, ['POST' => 0], null, false, false, null]],
        '/account/profile/delete' => [[['_route' => 'frontend.account.profile.delete', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::deleteProfile'], null, ['POST' => 0], null, false, false, null]],
        '/account/address' => [[['_route' => 'frontend.account.address.page', '_routeScope' => ['storefront'], '_loginRequired' => true, '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::accountAddressOverview'], null, ['GET' => 0], null, false, false, null]],
        '/account/address/create' => [[['_route' => 'frontend.account.address.create.page', '_routeScope' => ['storefront'], '_loginRequired' => true, '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::accountCreateAddress'], null, ['GET' => 0], null, false, false, null]],
        '/widgets/account/address-book' => [[['_route' => 'frontend.account.addressbook', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::addressBook'], null, ['POST' => 0], null, false, false, null]],
        '/widgets/account/address-manager/switch' => [[['_route' => 'frontend.account.addressmanager.switch', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::addressManagerSwitch'], null, ['POST' => 0], null, false, false, null]],
        '/widgets/account/address-manager' => [[['_route' => 'frontend.account.addressmanager.get', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::addressManager'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/captcha_list' => [[['_route' => 'api.action.captcha.list', '_routeScope' => ['api'], '_controller' => 'Shopware\\Storefront\\Controller\\Api\\CaptchaController::list'], null, ['GET' => 0], null, false, false, null]],
        '/account/login' => [
            [['_route' => 'frontend.account.login.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::loginPage'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.login', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::login'], null, ['POST' => 0], null, false, false, null],
        ],
        '/account/guest/login' => [[['_route' => 'frontend.account.guest.login.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::guestLoginPage'], null, ['GET' => 0], null, false, false, null]],
        '/account/logout' => [[['_route' => 'frontend.account.logout.page', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/account/recover' => [
            [['_route' => 'frontend.account.recover.page', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::recoverAccountForm'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.recover.request', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::generateAccountRecovery'], null, ['POST' => 0], null, false, false, null],
        ],
        '/account/recover/password' => [
            [['_route' => 'frontend.account.recover.password.page', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::resetPasswordForm'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.recover.password.reset', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::resetPassword'], null, ['POST' => 0], null, false, false, null],
        ],
        '/account/login/imitate-customer' => [[['_route' => 'frontend.account.login.imitate-customer', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::imitateCustomerLogin'], null, ['POST' => 0], null, false, false, null]],
        '/basic-captcha' => [[['_route' => 'frontend.captcha.basic-captcha.load', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CaptchaController::loadBasicCaptcha'], null, ['GET' => 0], null, false, false, null]],
        '/basic-captcha-validate' => [[['_route' => 'frontend.captcha.basic-captcha.validate', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CaptchaController::validate'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/line-item/delete' => [[['_route' => 'frontend.checkout.line-items.delete', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::deleteLineItems'], null, ['POST' => 0, 'DELETE' => 1], null, false, false, null]],
        '/checkout/promotion/add' => [[['_route' => 'frontend.checkout.promotion.add', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::addPromotion'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/line-item/update' => [[['_route' => 'frontend.checkout.line-items.update', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::updateLineItems'], null, ['POST' => 0, 'PATCH' => 1], null, false, false, null]],
        '/checkout/product/add-by-number' => [[['_route' => 'frontend.checkout.product.add-by-number', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::addProductByNumber'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/line-item/add' => [[['_route' => 'frontend.checkout.line-item.add', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::addLineItems'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/cart' => [[['_route' => 'frontend.checkout.cart.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::cartPage'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/cart.json' => [[['_route' => 'frontend.checkout.cart.json', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::cartJson'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/confirm' => [[['_route' => 'frontend.checkout.confirm.page', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::confirmPage'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/finish' => [[['_route' => 'frontend.checkout.finish.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::finishPage'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/order' => [[['_route' => 'frontend.checkout.finish.order', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::order'], null, ['POST' => 0], null, false, false, null]],
        '/widgets/checkout/info' => [[['_route' => 'frontend.checkout.info', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::info'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/offcanvas' => [[['_route' => 'frontend.cart.offcanvas', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::offcanvas'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/configure' => [[['_route' => 'frontend.checkout.configure', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ContextController::configure'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/language' => [[['_route' => 'frontend.checkout.switch-language', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\ContextController::switchLanguage'], null, ['POST' => 0], null, false, false, null]],
        '/cookie/offcanvas' => [[['_route' => 'frontend.cookie.offcanvas', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CookieController::offcanvas'], null, ['GET' => 0], null, false, false, null]],
        '/cookie/permission' => [[['_route' => 'frontend.cookie.permission', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CookieController::permission'], null, ['GET' => 0], null, false, false, null]],
        '/country/country-state-data' => [[['_route' => 'frontend.country.country.data', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CountryStateController::getCountryData'], null, ['POST' => 0], null, false, false, null]],
        '/form/contact' => [[['_route' => 'frontend.form.contact.send', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_captcha' => true, '_controller' => 'Shopware\\Storefront\\Controller\\FormController::sendContactForm'], null, ['POST' => 0], null, false, false, null]],
        '/form/newsletter' => [[['_route' => 'frontend.form.newsletter.register.handle', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_captcha' => true, '_controller' => 'Shopware\\Storefront\\Controller\\FormController::handleNewsletter'], null, ['POST' => 0], null, false, false, null]],
        '/maintenance' => [[['_route' => 'frontend.maintenance.page', '_routeScope' => ['storefront'], 'allow_maintenance' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\MaintenanceController::renderMaintenancePage'], null, ['GET' => 0], null, false, false, null]],
        '/' => [
            [['_route' => 'frontend.home.page', '_routeScope' => ['storefront'], '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\NavigationController::home'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'root.fallback'], null, null, null, false, false, null],
        ],
        '/widgets/menu/offcanvas' => [[['_route' => 'frontend.menu.offcanvas', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\NavigationController::offcanvas'], null, ['GET' => 0], null, false, false, null]],
        '/header' => [[['_route' => 'frontend.header', '_routeScope' => ['storefront'], '_httpCache' => true, '_esi' => true, '_controller' => 'Shopware\\Storefront\\Controller\\NavigationController::header'], null, ['GET' => 0], null, false, false, null]],
        '/footer' => [[['_route' => 'frontend.footer', '_routeScope' => ['storefront'], '_httpCache' => true, '_esi' => true, '_controller' => 'Shopware\\Storefront\\Controller\\NavigationController::footer'], null, ['GET' => 0], null, false, false, null]],
        '/newsletter-subscribe' => [[['_route' => 'frontend.newsletter.subscribe', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\NewsletterController::subscribeMail'], null, ['GET' => 0], null, false, false, null]],
        '/widgets/account/newsletter' => [[['_route' => 'frontend.account.newsletter', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\NewsletterController::subscribeCustomer'], null, ['POST' => 0], null, false, false, null]],
        '/account/register' => [
            [['_route' => 'frontend.account.register.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::accountRegisterPage'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.register.save', '_routeScope' => ['storefront'], '_captcha' => true, '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::register'], null, ['POST' => 0], null, false, false, null],
        ],
        '/checkout/register' => [[['_route' => 'frontend.checkout.register.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::checkoutRegisterPage'], null, ['GET' => 0], null, false, false, null]],
        '/registration/confirm' => [[['_route' => 'frontend.account.register.mail', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::confirmRegistration'], null, ['GET' => 0], null, false, false, null]],
        '/search' => [[['_route' => 'frontend.search.page', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\SearchController::search'], null, ['GET' => 0], null, false, false, null]],
        '/suggest' => [[['_route' => 'frontend.search.suggest', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\SearchController::suggest'], null, ['GET' => 0], null, false, false, null]],
        '/widgets/search' => [[['_route' => 'widgets.search.pagelet.v2', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\SearchController::ajax'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/widgets/search/filter' => [[['_route' => 'widgets.search.filter', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\SearchController::filter'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sitemap.xml' => [[['_route' => 'frontend.sitemap.xml', '_routeScope' => ['storefront'], '_format' => 'xml', '_controller' => 'Shopware\\Storefront\\Controller\\SitemapController::sitemapXml'], null, ['GET' => 0], null, false, false, null]],
        '/sw-domain-hash.html' => [[['_route' => 'api.verification-hash.load', '_routeScope' => ['api'], 'auth_required' => false, '_controller' => 'Shopware\\Storefront\\Controller\\VerificationHashController::load'], null, ['GET' => 0], null, false, false, null]],
        '/.well-known/change-password' => [[['_route' => 'frontend.well-known.change-password', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\WellKnownController::changePassword'], null, ['GET' => 0], null, false, false, null]],
        '/wishlist' => [[['_route' => 'frontend.wishlist.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::index'], null, ['GET' => 0], null, false, false, null]],
        '/wishlist/guest-pagelet' => [[['_route' => 'frontend.wishlist.guestPage.pagelet', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::guestPagelet'], null, ['POST' => 0], null, false, false, null]],
        '/widgets/wishlist' => [[['_route' => 'widgets.wishlist.pagelet', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::ajaxPagination'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/wishlist/list' => [[['_route' => 'frontend.wishlist.product.list', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::ajaxList'], null, ['GET' => 0], null, false, false, null]],
        '/wishlist/merge' => [[['_route' => 'frontend.wishlist.product.merge', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::ajaxMerge'], null, ['POST' => 0], null, false, false, null]],
        '/wishlist/merge/pagelet' => [[['_route' => 'frontend.wishlist.product.merge.pagelet', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::ajaxPagelet'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/services/trigger-update' => [[['_route' => 'api.services.trigger-update', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Service\\Api\\ServiceController::triggerUpdate'], null, ['POST' => 0], null, false, false, null]],
        '/api/service/list' => [[['_route' => 'api.service.list', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['api_service_list'], '_controller' => 'Shopware\\Core\\Service\\Api\\ServiceController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/extension-store/list' => [[['_route' => 'api.extension.list', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'SwagExtensionStore\\Controller\\DataController::getExtensionList'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/api/_action/extension-store/store-filters' => [[['_route' => 'api.extension.store_filters', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'SwagExtensionStore\\Controller\\DataController::listingFilters'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/in-app-purchases/cart/new' => [[['_route' => 'api.in-app-purchases.cart.new', '_routeScope' => ['api'], '_controller' => 'SwagExtensionStore\\Controller\\InAppPurchasesController::createCart'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/in-app-purchases/cart/order' => [[['_route' => 'api.in-app-purchases.cart.order', '_routeScope' => ['api'], '_controller' => 'SwagExtensionStore\\Controller\\InAppPurchasesController::orderCart'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/in-app-purchases/refresh' => [[['_route' => 'api.in-app-purchase.refresh', '_routeScope' => ['api'], '_controller' => 'SwagExtensionStore\\Controller\\InAppPurchasesController::refreshInAppPurchases'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/extension-store/cart/new' => [[['_route' => 'api.extension.create_new_cart', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'SwagExtensionStore\\Controller\\LicenseController::createCart'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/extension-store/cart/order' => [[['_route' => 'api.extension.order', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'SwagExtensionStore\\Controller\\LicenseController::orderCart'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/extension-store/cart/payment-means' => [[['_route' => 'api.extension.payment-means', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'SwagExtensionStore\\Controller\\LicenseController::availablePaymentMeans'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/me' => [
            [['_route' => 'api.info.me', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::me'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api.change.me', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['user_change_me'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::updateMe'], null, ['PATCH' => 0], null, false, false, null],
        ],
        '/api/_info/ping' => [[['_route' => 'api.info.ping', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::status'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|p(?'
                        .'|i/(?'
                            .'|_(?'
                                .'|a(?'
                                    .'|ction/(?'
                                        .'|feature\\-flag/(?'
                                            .'|enable/([^/]++)(*:70)'
                                            .'|disable/([^/]++)(*:93)'
                                        .')'
                                        .'|i(?'
                                            .'|n(?'
                                                .'|dexing/([^/]++)(*:124)'
                                                .'|crement/([^/]++)(?'
                                                    .'|(*:151)'
                                                .')'
                                                .'|\\-app\\-purchases/([^/]++)/(?'
                                                    .'|details(*:196)'
                                                    .'|list(*:208)'
                                                .')'
                                            .')'
                                            .'|mport\\-export/file/prepare\\-download/([^/]++)(*:263)'
                                        .')'
                                        .'|extension(?'
                                            .'|/(?'
                                                .'|d(?'
                                                    .'|ownload/([^/]++)(*:308)'
                                                    .'|eactivate/([^/]++)/([^/]++)(*:343)'
                                                .')'
                                                .'|install/([^/]++)/([^/]++)(*:377)'
                                                .'|u(?'
                                                    .'|ninstall/([^/]++)/([^/]++)(*:415)'
                                                    .'|pdate/([^/]++)/([^/]++)(*:446)'
                                                .')'
                                                .'|remove/([^/]++)/([^/]++)(*:479)'
                                                .'|activate/([^/]++)/([^/]++)(*:513)'
                                            .')'
                                            .'|\\-store/(?'
                                                .'|detail/([^/]++)(*:548)'
                                                .'|([^/]++)/reviews(*:572)'
                                            .')'
                                        .')'
                                        .'|d(?'
                                            .'|ecrement/([^/]++)(*:603)'
                                            .'|ocument/([^/]++)/(?'
                                                .'|([^/]++)(*:639)'
                                                .'|upload(*:653)'
                                            .')'
                                        .')'
                                        .'|reset\\-increment/([^/]++)(*:688)'
                                        .'|clone/([0-9a-zA-Z-]+)/([0-9a-f]{32})(*:732)'
                                        .'|version/(?'
                                            .'|([0-9a-zA-Z-]+)/([0-9a-f]{32})(*:781)'
                                            .'|merge/([0-9a-zA-Z-]+)/([0-9a-f]{32})(*:825)'
                                            .'|([^/]++)/([0-9a-zA-Z-]+)/([^/]++)(*:866)'
                                        .')'
                                        .'|number\\-range/(?'
                                            .'|reserve/([^/]++)(?:/([^/]++))?(*:922)'
                                            .'|preview\\-pattern(?:/([^/]++))?(*:960)'
                                        .')'
                                        .'|s(?'
                                            .'|tate\\-machine/([^/]++)/([^/]++)/state(?'
                                                .'|(*:1013)'
                                                .'|/([^/]++)(*:1031)'
                                            .')'
                                            .'|eo\\-url\\-template/default/([^/]++)(*:1075)'
                                        .')'
                                        .'|product/([^/]++)/combinations(*:1114)'
                                        .'|media(?'
                                            .'|\\-folder/([^/]++)/dissolve(*:1157)'
                                            .'|/([^/]++)/(?'
                                                .'|upload(*:1185)'
                                                .'|rename(*:1200)'
                                            .')'
                                        .')'
                                        .'|t(?'
                                            .'|rigger\\-event/([^/]++)(*:1237)'
                                            .'|heme/(?'
                                                .'|([^/]++)(?'
                                                    .'|/(?'
                                                        .'|configuration(*:1282)'
                                                        .'|assign/([^/]++)(*:1306)'
                                                        .'|reset(*:1320)'
                                                        .'|structured\\-fields(*:1347)'
                                                    .')'
                                                    .'|(*:1357)'
                                                .')'
                                                .'|validate\\-fields(*:1383)'
                                            .')'
                                        .')'
                                        .'|order(?'
                                            .'|/(?'
                                                .'|([^/]++)/(?'
                                                    .'|c(?'
                                                        .'|onvert\\-to\\-cart(*:1438)'
                                                        .'|reditItem(*:1456)'
                                                    .')'
                                                    .'|recalculate(*:1477)'
                                                    .'|pro(?'
                                                        .'|duct/([^/]++)(*:1505)'
                                                        .'|motion\\-item(*:1526)'
                                                    .')'
                                                    .'|lineItem(*:1544)'
                                                    .'|toggleAutomaticPromotions(*:1578)'
                                                    .'|order\\-address(*:1601)'
                                                    .'|([^/]++)/document/([^/]++)/preview(*:1644)'
                                                .')'
                                                .'|document/([^/]++)/create(*:1678)'
                                                .'|([^/]++)/state/([^/]++)(*:1710)'
                                            .')'
                                            .'|\\-address/([^/]++)/customer\\-address/([^/]++)(*:1765)'
                                            .'|_(?'
                                                .'|transaction(?'
                                                    .'|/([^/]++)/state/([^/]++)(*:1816)'
                                                    .'|_capture_refund/([^/]++)(*:1849)'
                                                .')'
                                                .'|delivery/([^/]++)/state/([^/]++)(*:1891)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|dmin/(?'
                                        .'|product\\-stream\\-preview/([^/]++)(*:1944)'
                                        .'|dashboard/order\\-amount/([^/]++)(*:1985)'
                                    .')'
                                .')'
                                .'|proxy(?'
                                    .'|/store\\-api/([^/]++)/(.*)(*:2029)'
                                    .'|\\-order/([^/]++)(*:2054)'
                                .')'
                            .')'
                            .'|license/(?'
                                .'|cancel/([^/]++)(*:2091)'
                                .'|rate/([^/]++)(*:2113)'
                            .')'
                            .'|a(?'
                                .'|pp(?'
                                    .'|\\-system/action\\-button/(?'
                                        .'|([^/]++)/([^/]++)(*:2176)'
                                        .'|run/([^/]++)(*:2197)'
                                    .')'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:2279)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:2348)'
                                    .')'
                                    .'|\\-(?'
                                        .'|a(?'
                                            .'|ction\\-button(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:2455)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:2524)'
                                                .')'
                                                .'|\\-translation(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:2622)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:2691)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|dministration\\-snippet(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:2800)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:2869)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|cms\\-block(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:2966)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:3035)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:3133)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:3202)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|flow\\-(?'
                                            .'|action(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:3304)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:3373)'
                                                .')'
                                                .'|\\-translation(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:3471)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:3540)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|event(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:3632)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:3701)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|payment\\-method(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:3803)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:3872)'
                                            .')'
                                        .')'
                                        .'|s(?'
                                            .'|cript\\-condition(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:3978)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:4047)'
                                                .')'
                                                .'|\\-translation(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:4145)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:4214)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|hipping\\-method(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:4316)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:4385)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|t(?'
                                            .'|emplate(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:4483)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:4552)'
                                                .')'
                                            .')'
                                            .'|ranslation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:4648)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:4717)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|ggregate/(?'
                                    .'|c(?'
                                        .'|u(?'
                                            .'|stom(?'
                                                .'|\\-(?'
                                                    .'|entity(?'
                                                        .'|\\-([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4834)'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:4899)'
                                                    .')'
                                                    .'|field(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:4973)'
                                                        .'|\\-set(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5046)'
                                                            .'|\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5121)'
                                                        .')'
                                                    .')'
                                                .')'
                                                .'|er(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5194)'
                                                    .'|\\-(?'
                                                        .'|address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5271)'
                                                        .'|group(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5344)'
                                                            .'|\\-registration\\-sales\\-channels((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5440)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|rrency(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5518)'
                                                .'|\\-(?'
                                                    .'|country\\-rounding((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5605)'
                                                    .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5681)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|e\\-([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5756)'
                                        .'|ategory(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5831)'
                                            .'|\\-t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5904)'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5979)'
                                            .')'
                                        .')'
                                        .'|ms\\-(?'
                                            .'|block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6058)'
                                            .'|page(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6130)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6208)'
                                            .')'
                                            .'|s(?'
                                                .'|ection((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6284)'
                                                .'|lot(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6355)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6433)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|ountry(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6510)'
                                            .'|\\-(?'
                                                .'|state(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6588)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6666)'
                                                .')'
                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6743)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|a(?'
                                        .'|cl\\-(?'
                                            .'|role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6826)'
                                            .'|user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6901)'
                                        .')'
                                        .'|pp(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6972)'
                                            .'|\\-(?'
                                                .'|a(?'
                                                    .'|ction\\-button(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7062)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7140)'
                                                    .')'
                                                    .'|dministration\\-snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7228)'
                                                .')'
                                                .'|cms\\-block(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7307)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7385)'
                                                .')'
                                                .'|flow\\-(?'
                                                    .'|action(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7469)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7547)'
                                                    .')'
                                                    .'|event((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7618)'
                                                .')'
                                                .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7699)'
                                                .'|s(?'
                                                    .'|cript\\-condition(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7787)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7865)'
                                                    .')'
                                                    .'|hipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7946)'
                                                .')'
                                                .'|t(?'
                                                    .'|emplate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:8023)'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:8098)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|cl\\-(?'
                                    .'|role(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:8195)'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:8260)'
                                    .')'
                                    .'|user\\-role(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:8355)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:8424)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|s(?'
                                .'|cript/(.+)(*:8451)'
                                .'|e(?'
                                    .'|arch(?'
                                        .'|\\-ids/(?'
                                            .'|c(?'
                                                .'|u(?'
                                                    .'|stom(?'
                                                        .'|\\-(?'
                                                            .'|entity(?'
                                                                .'|\\-([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8571)'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:8636)'
                                                            .')'
                                                            .'|field(?'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:8710)'
                                                                .'|\\-set(?'
                                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:8783)'
                                                                    .'|\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:8858)'
                                                                .')'
                                                            .')'
                                                        .')'
                                                        .'|er(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:8931)'
                                                            .'|\\-(?'
                                                                .'|address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9008)'
                                                                .'|group(?'
                                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9081)'
                                                                    .'|\\-registration\\-sales\\-channels((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9177)'
                                                                .')'
                                                            .')'
                                                        .')'
                                                    .')'
                                                    .'|rrency(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9255)'
                                                        .'|\\-(?'
                                                            .'|country\\-rounding((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9342)'
                                                            .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9418)'
                                                        .')'
                                                    .')'
                                                .')'
                                                .'|e\\-([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9493)'
                                                .'|ategory(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9568)'
                                                    .'|\\-t(?'
                                                        .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9641)'
                                                        .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9716)'
                                                    .')'
                                                .')'
                                                .'|ms\\-(?'
                                                    .'|block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9795)'
                                                    .'|page(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9867)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9945)'
                                                    .')'
                                                    .'|s(?'
                                                        .'|ection((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10021)'
                                                        .'|lot(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10093)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10172)'
                                                        .')'
                                                    .')'
                                                .')'
                                                .'|ountry(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10250)'
                                                    .'|\\-(?'
                                                        .'|state(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10329)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10408)'
                                                        .')'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10486)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|a(?'
                                                .'|cl\\-(?'
                                                    .'|role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10570)'
                                                    .'|user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10646)'
                                                .')'
                                                .'|pp(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10718)'
                                                    .'|\\-(?'
                                                        .'|a(?'
                                                            .'|ction\\-button(?'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10809)'
                                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10888)'
                                                            .')'
                                                            .'|dministration\\-snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10977)'
                                                        .')'
                                                        .'|cms\\-block(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11057)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11136)'
                                                        .')'
                                                        .'|flow\\-(?'
                                                            .'|action(?'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11221)'
                                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11300)'
                                                            .')'
                                                            .'|event((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11372)'
                                                        .')'
                                                        .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11454)'
                                                        .'|s(?'
                                                            .'|cript\\-condition(?'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11543)'
                                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11622)'
                                                            .')'
                                                            .'|hipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11704)'
                                                        .')'
                                                        .'|t(?'
                                                            .'|emplate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11782)'
                                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11858)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|/(?'
                                            .'|c(?'
                                                .'|u(?'
                                                    .'|stom(?'
                                                        .'|\\-(?'
                                                            .'|entity(?'
                                                                .'|\\-([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11968)'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12034)'
                                                            .')'
                                                            .'|field(?'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12109)'
                                                                .'|\\-set(?'
                                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12183)'
                                                                    .'|\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12259)'
                                                                .')'
                                                            .')'
                                                        .')'
                                                        .'|er(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12333)'
                                                            .'|\\-(?'
                                                                .'|address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12411)'
                                                                .'|group(?'
                                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12485)'
                                                                    .'|\\-registration\\-sales\\-channels((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12582)'
                                                                .')'
                                                            .')'
                                                        .')'
                                                    .')'
                                                    .'|rrency(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12661)'
                                                        .'|\\-(?'
                                                            .'|country\\-rounding((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12749)'
                                                            .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12826)'
                                                        .')'
                                                    .')'
                                                .')'
                                                .'|e\\-([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:12902)'
                                                .'|ategory(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12978)'
                                                    .'|\\-t(?'
                                                        .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13052)'
                                                        .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13128)'
                                                    .')'
                                                .')'
                                                .'|ms\\-(?'
                                                    .'|block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13208)'
                                                    .'|page(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13281)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13360)'
                                                    .')'
                                                    .'|s(?'
                                                        .'|ection((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13437)'
                                                        .'|lot(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13509)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13588)'
                                                        .')'
                                                    .')'
                                                .')'
                                                .'|ountry(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13666)'
                                                    .'|\\-(?'
                                                        .'|state(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13745)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13824)'
                                                        .')'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13902)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|a(?'
                                                .'|cl\\-(?'
                                                    .'|role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13986)'
                                                    .'|user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14062)'
                                                .')'
                                                .'|pp(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14134)'
                                                    .'|\\-(?'
                                                        .'|a(?'
                                                            .'|ction\\-button(?'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14225)'
                                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14304)'
                                                            .')'
                                                            .'|dministration\\-snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14393)'
                                                        .')'
                                                        .'|cms\\-block(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14473)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14552)'
                                                        .')'
                                                        .'|flow\\-(?'
                                                            .'|action(?'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14637)'
                                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14716)'
                                                            .')'
                                                            .'|event((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14788)'
                                                        .')'
                                                        .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14870)'
                                                        .'|s(?'
                                                            .'|cript\\-condition(?'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14959)'
                                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:15038)'
                                                            .')'
                                                            .'|hipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:15120)'
                                                        .')'
                                                        .'|t(?'
                                                            .'|emplate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:15198)'
                                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:15274)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|rvice/(?'
                                        .'|activate/([^/]++)(*:15316)'
                                        .'|deactivate/([^/]++)(*:15345)'
                                        .'|uninstall/([^/]++)(*:15373)'
                                    .')'
                                .')'
                            .')'
                            .'|c(?'
                                .'|u(?'
                                    .'|stom(?'
                                        .'|\\-(?'
                                            .'|entity(?'
                                                .'|\\-(?'
                                                    .'|([^/]++)/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:15494)'
                                                    .'|([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:15567)'
                                                    .')'
                                                    .'|([^/]++)/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:15655)'
                                                    .')'
                                                .')'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:15739)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:15809)'
                                                .')'
                                            .')'
                                            .'|field(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:15901)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:15971)'
                                                .')'
                                                .'|\\-set(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:16062)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:16132)'
                                                    .')'
                                                    .'|\\-relation(?'
                                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                            .'|(*:16228)'
                                                        .')'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                            .'|(*:16298)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|er(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:16390)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:16460)'
                                            .')'
                                            .'|\\-(?'
                                                .'|address(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:16558)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:16628)'
                                                    .')'
                                                .')'
                                                .'|group(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:16720)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:16790)'
                                                    .')'
                                                    .'|\\-(?'
                                                        .'|registration\\-sales\\-channels(?'
                                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                                .'|(*:16910)'
                                                            .')'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                                .'|(*:16980)'
                                                            .')'
                                                        .')'
                                                        .'|translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:17072)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|rrency(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:17168)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:17238)'
                                        .')'
                                        .'|\\-(?'
                                            .'|country\\-rounding(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:17346)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:17416)'
                                                .')'
                                            .')'
                                            .'|translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:17514)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:17584)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|e\\-(?'
                                    .'|([^/]++)/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:17679)'
                                    .'|([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:17752)'
                                    .')'
                                    .'|([^/]++)/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:17840)'
                                    .')'
                                .')'
                                .'|ategory(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:17934)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:18004)'
                                    .')'
                                    .'|\\-t(?'
                                        .'|ag(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:18098)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:18168)'
                                            .')'
                                        .')'
                                        .'|ranslation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:18265)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:18335)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|ms\\-(?'
                                    .'|block(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:18436)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:18506)'
                                        .')'
                                    .')'
                                    .'|page(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:18597)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:18667)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:18766)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:18836)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|ection(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:18934)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:19004)'
                                            .')'
                                        .')'
                                        .'|lot(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:19094)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:19164)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:19263)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:19333)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|ountry(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:19429)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:19499)'
                                    .')'
                                    .'|\\-(?'
                                        .'|state(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:19595)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:19665)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:19764)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:19834)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:19933)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:20003)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|p\\-system/([^/]++)/generate\\-token(*:20053)'
                    .')'
                    .'|dmin/([^/]++)/index\\.html(*:20089)'
                    .'|ccount/(?'
                        .'|order/(?'
                            .'|([^/]++)(*:20126)'
                            .'|edit/([^/]++)(*:20149)'
                            .'|payment/([^/]++)(*:20175)'
                            .'|update/([^/]++)(*:20200)'
                            .'|do(?'
                                .'|cument/([^/]++)/([^/]++)(?'
                                    .'|(*:20242)'
                                    .'|/([^/]++)(*:20261)'
                                .')'
                                .'|wnload/([^/]++)/([^/]++)(*:20296)'
                            .')'
                        .')'
                        .'|address/(?'
                            .'|([^/]++)(*:20327)'
                            .'|default\\-([^/]++)/([^/]++)(*:20363)'
                            .'|switch(*:20379)'
                            .'|create(*:20395)'
                            .'|([^/]++)(*:20413)'
                            .'|delete/([^/]++)(*:20438)'
                        .')'
                    .')'
                .')'
                .'|/s(?'
                    .'|tore(?'
                        .'|\\-api/(?'
                            .'|a(?'
                                .'|pp\\-system/([^/]++)/generate\\-token(*:20511)'
                                .'|ccount/(?'
                                    .'|change\\-payment\\-method/([^/]++)(*:20563)'
                                    .'|address/(?'
                                        .'|([^/]++)(*:20592)'
                                        .'|default\\-(?'
                                            .'|shipping/([^/]++)(*:20631)'
                                            .'|billing/([^/]++)(*:20657)'
                                        .')'
                                        .'|([^/]++)(*:20676)'
                                    .')'
                                .')'
                            .')'
                            .'|s(?'
                                .'|cript/(.+)(*:20703)'
                                .'|itemap/(.+\\.xml\\.gz)(*:20733)'
                            .')'
                            .'|c(?'
                                .'|ountry\\-state/([^/]++)(*:20770)'
                                .'|ategory/([^/]++)(*:20796)'
                                .'|ms/([^/]++)(*:20817)'
                                .'|ustomer(?'
                                    .'|/wishlist/(?'
                                        .'|add/([^/]++)(*:20862)'
                                        .'|delete/([^/]++)(*:20887)'
                                    .')'
                                    .'|\\-group\\-registration/config/([^/]++)(*:20935)'
                                .')'
                            .')'
                            .'|product(?'
                                .'|\\-(?'
                                    .'|export/([^/]++)/([^/]++)(*:20986)'
                                    .'|listing/([^/]++)(*:21012)'
                                .')'
                                .'|/([^/]++)(?'
                                    .'|/(?'
                                        .'|cross\\-selling(*:21053)'
                                        .'|find\\-variant(*:21076)'
                                        .'|review(?'
                                            .'|s(*:21096)'
                                            .'|(*:21106)'
                                        .')'
                                    .')'
                                    .'|(*:21118)'
                                .')'
                            .')'
                            .'|breadcrumb/([0-9a-f]{32})(*:21155)'
                            .'|navigation/([^/]++)/([^/]++)(*:21193)'
                            .'|landing\\-page/([^/]++)(*:21225)'
                            .'|order/download/([^/]++)/([^/]++)(*:21267)'
                            .'|document/download/([^/]++)(?:/([^/]++))?(*:21317)'
                        .')'
                        .'|front/script/(.+)(*:21345)'
                    .')'
                    .'|itemap/(.+\\.xml\\.gz)(*:21376)'
                .')'
                .'|/wi(?'
                    .'|dgets/(?'
                        .'|account/(?'
                            .'|order/detail/([^/]++)(*:21434)'
                            .'|address\\-manager(?:/([^/]++))?(*:21474)'
                        .')'
                        .'|cms(?'
                            .'|(?:/([^/]++))?(*:21505)'
                            .'|/(?'
                                .'|navigation(?'
                                    .'|(?:/([^/]++))?(*:21546)'
                                    .'|/([^/]++)/filter(*:21572)'
                                .')'
                                .'|buybox/([^/]++)/switch(*:21605)'
                            .')'
                        .')'
                    .')'
                    .'|shlist/(?'
                        .'|product/delete/([^/]++)(*:21651)'
                        .'|add(?'
                            .'|/([^/]++)(*:21676)'
                            .'|\\-after\\-login/([^/]++)(*:21709)'
                        .')'
                        .'|remove/([^/]++)(*:21735)'
                    .')'
                .')'
                .'|/c(?'
                    .'|heckout/line\\-item/(?'
                        .'|delete/([^/]++)(*:21789)'
                        .'|change\\-quantity/([^/]++)(*:21824)'
                    .')'
                    .'|ustomer\\-group\\-registration/([^/]++)(*:21872)'
                .')'
                .'|/p(?'
                    .'|age/cms/([^/]++)(*:21904)'
                    .'|roduct/([^/]++)/r(?'
                        .'|ating(*:21939)'
                        .'|eviews(*:21955)'
                    .')'
                .')'
                .'|/landingPage/([^/]++)(*:21988)'
                .'|/maintenance/singlepage/([^/]++)(*:22030)'
                .'|/navigation/([^/]++)(*:22060)'
                .'|/detail/([^/]++)(?'
                    .'|(*:22089)'
                    .'|/switch(*:22106)'
                .')'
                .'|/quickview/([^/]++)(*:22136)'
            .')/?$}sDu',
        22136 => '{^(?'
                .'|/api/(?'
                    .'|customer\\-(?'
                        .'|group\\-translation(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:22257)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:22327)'
                            .')'
                        .')'
                        .'|recovery(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:22422)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:22492)'
                            .')'
                        .')'
                        .'|tag(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:22582)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:22652)'
                            .')'
                        .')'
                        .'|wishlist(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:22747)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:22817)'
                            .')'
                            .'|\\-product(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:22912)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:22982)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|search(?'
                        .'|/(?'
                            .'|customer\\-(?'
                                .'|group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23096)'
                                .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23170)'
                                .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23239)'
                                .'|wishlist(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23316)'
                                    .'|\\-product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23391)'
                                .')'
                            .')'
                            .'|d(?'
                                .'|elivery\\-time(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23479)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23558)'
                                .')'
                                .'|ocument(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23635)'
                                    .'|\\-(?'
                                        .'|base\\-config(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23721)'
                                            .'|\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23803)'
                                        .')'
                                        .'|type(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23877)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23956)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|flow(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24033)'
                                .'|\\-(?'
                                    .'|sequence((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24112)'
                                    .'|template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24186)'
                                .')'
                            .')'
                            .'|i(?'
                                .'|mport\\-export\\-(?'
                                    .'|file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24280)'
                                    .'|log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24349)'
                                    .'|profile(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24425)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24504)'
                                    .')'
                                .')'
                                .'|ntegration(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24585)'
                                    .'|\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24657)'
                                .')'
                            .')'
                            .'|l(?'
                                .'|an(?'
                                    .'|ding\\-page(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24747)'
                                        .'|\\-(?'
                                            .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24832)'
                                            .'|t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24904)'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24980)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|guage((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25054)'
                                .')'
                                .'|o(?'
                                    .'|cale(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25132)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25211)'
                                    .')'
                                    .'|g\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25286)'
                                .')'
                            .')'
                            .'|m(?'
                                .'|ai(?'
                                    .'|l\\-(?'
                                        .'|header\\-footer(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25386)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25465)'
                                        .')'
                                        .'|template(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25543)'
                                            .'|\\-(?'
                                                .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25619)'
                                                .'|t(?'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25699)'
                                                    .'|ype(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25771)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25850)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|n\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25932)'
                                .')'
                                .'|edia(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26006)'
                                    .'|\\-(?'
                                        .'|default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26092)'
                                        .'|folder(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26167)'
                                            .'|\\-configuration(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26251)'
                                                .'|\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26341)'
                                            .')'
                                        .')'
                                        .'|t(?'
                                            .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26415)'
                                            .'|humbnail(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26492)'
                                                .'|\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26564)'
                                            .')'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26641)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|n(?'
                                .'|ewsletter\\-recipient(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26738)'
                                    .'|\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26809)'
                                .')'
                                .'|otification((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26887)'
                                .'|umber\\-range(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26968)'
                                    .'|\\-(?'
                                        .'|s(?'
                                            .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27056)'
                                            .'|tate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27126)'
                                        .')'
                                        .'|t(?'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27207)'
                                            .'|ype(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27279)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27358)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|order(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27437)'
                                .'|\\-(?'
                                    .'|address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27515)'
                                    .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27589)'
                                    .'|delivery(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27666)'
                                        .'|\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27742)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|\\-ids/(?'
                            .'|customer\\-(?'
                                .'|group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27852)'
                                .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27926)'
                                .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27995)'
                                .'|wishlist(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28072)'
                                    .'|\\-product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28147)'
                                .')'
                            .')'
                            .'|d(?'
                                .'|elivery\\-time(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28235)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28314)'
                                .')'
                                .'|ocument(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28391)'
                                    .'|\\-(?'
                                        .'|base\\-config(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28477)'
                                            .'|\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28559)'
                                        .')'
                                        .'|type(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28633)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28712)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|flow(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28789)'
                                .'|\\-(?'
                                    .'|sequence((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28868)'
                                    .'|template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28942)'
                                .')'
                            .')'
                            .'|i(?'
                                .'|mport\\-export\\-(?'
                                    .'|file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29036)'
                                    .'|log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29105)'
                                    .'|profile(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29181)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29260)'
                                    .')'
                                .')'
                                .'|ntegration(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29341)'
                                    .'|\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29413)'
                                .')'
                            .')'
                            .'|l(?'
                                .'|an(?'
                                    .'|ding\\-page(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29503)'
                                        .'|\\-(?'
                                            .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29588)'
                                            .'|t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29660)'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29736)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|guage((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29810)'
                                .')'
                                .'|o(?'
                                    .'|cale(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29888)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29967)'
                                    .')'
                                    .'|g\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30042)'
                                .')'
                            .')'
                            .'|m(?'
                                .'|ai(?'
                                    .'|l\\-(?'
                                        .'|header\\-footer(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30142)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30221)'
                                        .')'
                                        .'|template(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30299)'
                                            .'|\\-(?'
                                                .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30375)'
                                                .'|t(?'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30455)'
                                                    .'|ype(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30527)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30606)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|n\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30688)'
                                .')'
                                .'|edia(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30762)'
                                    .'|\\-(?'
                                        .'|default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30848)'
                                        .'|folder(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30923)'
                                            .'|\\-configuration(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31007)'
                                                .'|\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31097)'
                                            .')'
                                        .')'
                                        .'|t(?'
                                            .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31171)'
                                            .'|humbnail(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31248)'
                                                .'|\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31320)'
                                            .')'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31397)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|n(?'
                                .'|ewsletter\\-recipient(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31494)'
                                    .'|\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31565)'
                                .')'
                                .'|otification((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31643)'
                                .'|umber\\-range(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31724)'
                                    .'|\\-(?'
                                        .'|s(?'
                                            .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31812)'
                                            .'|tate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31882)'
                                        .')'
                                        .'|t(?'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31963)'
                                            .'|ype(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32035)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32114)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|order(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32193)'
                                .'|\\-(?'
                                    .'|address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32271)'
                                    .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32345)'
                                    .'|delivery(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32422)'
                                        .'|\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32498)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|aggregate/(?'
                        .'|customer\\-(?'
                            .'|group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32613)'
                            .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32687)'
                            .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32756)'
                            .'|wishlist(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32833)'
                                .'|\\-product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32908)'
                            .')'
                        .')'
                        .'|d(?'
                            .'|elivery\\-time(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32996)'
                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33075)'
                            .')'
                            .'|ocument(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33152)'
                                .'|\\-(?'
                                    .'|base\\-config(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33238)'
                                        .'|\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33320)'
                                    .')'
                                    .'|type(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33394)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33473)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|flow(?'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33550)'
                            .'|\\-(?'
                                .'|sequence((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33629)'
                                .'|template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33703)'
                            .')'
                        .')'
                        .'|i(?'
                            .'|mport\\-export\\-(?'
                                .'|file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33797)'
                                .'|log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33866)'
                                .'|profile(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33942)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34021)'
                                .')'
                            .')'
                            .'|ntegration(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34102)'
                                .'|\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34174)'
                            .')'
                        .')'
                        .'|l(?'
                            .'|an(?'
                                .'|ding\\-page(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34264)'
                                    .'|\\-(?'
                                        .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34349)'
                                        .'|t(?'
                                            .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34421)'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34497)'
                                        .')'
                                    .')'
                                .')'
                                .'|guage((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34571)'
                            .')'
                            .'|o(?'
                                .'|cale(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34649)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34728)'
                                .')'
                                .'|g\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34803)'
                            .')'
                        .')'
                        .'|m(?'
                            .'|ai(?'
                                .'|l\\-(?'
                                    .'|header\\-footer(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34903)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34982)'
                                    .')'
                                    .'|template(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35060)'
                                        .'|\\-(?'
                                            .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35136)'
                                            .'|t(?'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35216)'
                                                .'|ype(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35288)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35367)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|n\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35449)'
                            .')'
                            .'|edia(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35523)'
                                .'|\\-(?'
                                    .'|default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35609)'
                                    .'|folder(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35684)'
                                        .'|\\-configuration(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35768)'
                                            .'|\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35858)'
                                        .')'
                                    .')'
                                    .'|t(?'
                                        .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35932)'
                                        .'|humbnail(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36009)'
                                            .'|\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36081)'
                                        .')'
                                        .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36158)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|n(?'
                            .'|ewsletter\\-recipient(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36255)'
                                .'|\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36326)'
                            .')'
                            .'|otification((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36404)'
                            .'|umber\\-range(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36485)'
                                .'|\\-(?'
                                    .'|s(?'
                                        .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36573)'
                                        .'|tate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36643)'
                                    .')'
                                    .'|t(?'
                                        .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36724)'
                                        .'|ype(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36796)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36875)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|order(?'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36954)'
                            .'|\\-(?'
                                .'|address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37032)'
                                .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37106)'
                                .'|delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37180)'
                            .')'
                        .')'
                    .')'
                    .'|d(?'
                        .'|elivery\\-time(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:37285)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:37355)'
                            .')'
                            .'|\\-translation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:37454)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:37524)'
                                .')'
                            .')'
                        .')'
                        .'|ocument(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:37619)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:37689)'
                            .')'
                            .'|\\-(?'
                                .'|base\\-config(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:37792)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:37862)'
                                    .')'
                                    .'|\\-sales\\-channel(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:37964)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:38034)'
                                        .')'
                                    .')'
                                .')'
                                .'|type(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:38126)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:38196)'
                                    .')'
                                    .'|\\-translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:38295)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:38365)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|flow(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:38460)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                            .'|(*:38530)'
                        .')'
                        .'|\\-(?'
                            .'|sequence(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:38629)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:38699)'
                                .')'
                            .')'
                            .'|template(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:38794)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:38864)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|i(?'
                        .'|mport\\-export\\-(?'
                            .'|file(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:38979)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:39049)'
                                .')'
                            .')'
                            .'|log(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:39139)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:39209)'
                                .')'
                            .')'
                            .'|profile(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:39303)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:39373)'
                                .')'
                                .'|\\-translation(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:39472)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:39542)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|ntegration(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:39641)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:39708)'
                            .'|\\-role(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:39799)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:39869)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|l(?'
                        .'|an(?'
                            .'|ding\\-page(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:39977)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:40047)'
                                .')'
                                .'|\\-(?'
                                    .'|sales\\-channel(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:40152)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:40222)'
                                        .')'
                                    .')'
                                    .'|t(?'
                                        .'|ag(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:40315)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:40385)'
                                            .')'
                                        .')'
                                        .'|ranslation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:40482)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:40552)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|guage(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:40647)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:40717)'
                                .')'
                            .')'
                        .')'
                        .'|o(?'
                            .'|cale(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:40813)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:40883)'
                                .')'
                                .'|\\-translation(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:40982)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:41052)'
                                    .')'
                                .')'
                            .')'
                            .'|g\\-entry(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:41148)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:41218)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|m(?'
                        .'|ai(?'
                            .'|l\\-(?'
                                .'|header\\-footer(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:41336)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:41406)'
                                    .')'
                                    .'|\\-translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:41505)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:41575)'
                                        .')'
                                    .')'
                                .')'
                                .'|template(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:41671)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:41741)'
                                    .')'
                                    .'|\\-(?'
                                        .'|media(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:41837)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:41907)'
                                            .')'
                                        .')'
                                        .'|t(?'
                                            .'|ranslation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:42008)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:42078)'
                                                .')'
                                            .')'
                                            .'|ype(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:42168)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:42238)'
                                                .')'
                                                .'|\\-translation(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:42337)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:42407)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|n\\-category(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:42510)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:42580)'
                                .')'
                            .')'
                        .')'
                        .'|edia(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:42672)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:42742)'
                            .')'
                            .'|\\-(?'
                                .'|default\\-folder(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:42848)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:42918)'
                                    .')'
                                .')'
                                .'|folder(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:43011)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:43081)'
                                    .')'
                                    .'|\\-configuration(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:43182)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:43252)'
                                        .')'
                                        .'|\\-media\\-thumbnail\\-size(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:43362)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:43432)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|t(?'
                                    .'|ag(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:43527)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:43597)'
                                        .')'
                                    .')'
                                    .'|humbnail(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:43692)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:43762)'
                                        .')'
                                        .'|\\-size(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:43854)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:43924)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|ranslation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:44022)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:44092)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|n(?'
                        .'|ewsletter\\-recipient(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:44207)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:44277)'
                            .')'
                            .'|\\-tag(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:44368)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:44438)'
                                .')'
                            .')'
                        .')'
                        .'|otification(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:44537)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:44607)'
                            .')'
                        .')'
                        .'|umber\\-range(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:44706)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:44776)'
                            .')'
                            .'|\\-(?'
                                .'|s(?'
                                    .'|ales\\-channel(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:44884)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:44954)'
                                        .')'
                                    .')'
                                    .'|tate(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:45045)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:45115)'
                                        .')'
                                    .')'
                                .')'
                                .'|t(?'
                                    .'|ranslation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:45217)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:45287)'
                                        .')'
                                    .')'
                                    .'|ype(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:45377)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:45447)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:45546)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:45616)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|order(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:45713)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                            .'|(*:45783)'
                        .')'
                        .'|\\-(?'
                            .'|address(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:45881)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:45951)'
                                .')'
                            .')'
                            .'|customer(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:46046)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:46116)'
                                .')'
                            .')'
                            .'|delivery(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:46211)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:46281)'
                                .')'
                                .'|\\-position(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:46377)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:46444)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
        46444 => '{^(?'
                .'|/api/(?'
                    .'|aggregate/(?'
                        .'|order\\-(?'
                            .'|delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:46556)'
                            .'|line\\-item(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:46635)'
                                .'|\\-download((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:46711)'
                            .')'
                            .'|t(?'
                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:46784)'
                                .'|ransaction(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:46863)'
                                    .'|\\-capture(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:46941)'
                                        .'|\\-refund(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:47018)'
                                            .'|\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:47094)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|p(?'
                            .'|ayment\\-method(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:47186)'
                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:47265)'
                            .')'
                            .'|lugin(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:47340)'
                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:47419)'
                            .')'
                            .'|ro(?'
                                .'|duct(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:47498)'
                                    .'|\\-(?'
                                        .'|c(?'
                                            .'|ategory(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:47583)'
                                                .'|\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:47655)'
                                            .')'
                                            .'|onfigurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:47742)'
                                            .'|ross\\-selling(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:47824)'
                                                .'|\\-(?'
                                                    .'|assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:47913)'
                                                    .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:47990)'
                                                .')'
                                            .')'
                                            .'|ustom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48075)'
                                        .')'
                                        .'|download((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48150)'
                                        .'|export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48222)'
                                        .'|feature\\-set(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48303)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48382)'
                                        .')'
                                        .'|keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48468)'
                                        .'|m(?'
                                            .'|anufacturer(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48552)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48631)'
                                            .')'
                                            .'|edia((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48702)'
                                        .')'
                                        .'|option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48775)'
                                        .'|pr(?'
                                            .'|ice((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48849)'
                                            .'|operty((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48921)'
                                        .')'
                                        .'|review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48994)'
                                        .'|s(?'
                                            .'|earch\\-(?'
                                                .'|config(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49083)'
                                                    .'|\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49156)'
                                                .')'
                                                .'|keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49230)'
                                            .')'
                                            .'|orting(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49306)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49385)'
                                            .')'
                                            .'|tream(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49460)'
                                                .'|\\-(?'
                                                    .'|filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49537)'
                                                    .'|mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49610)'
                                                    .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49687)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|t(?'
                                            .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49762)'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49838)'
                                        .')'
                                        .'|visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49915)'
                                    .')'
                                .')'
                                .'|motion(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49992)'
                                    .'|\\-(?'
                                        .'|cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50073)'
                                        .'|discount(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50150)'
                                            .'|\\-(?'
                                                .'|prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50227)'
                                                .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50297)'
                                            .')'
                                        .')'
                                        .'|individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50381)'
                                        .'|order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50458)'
                                        .'|persona\\-(?'
                                            .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50544)'
                                            .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50614)'
                                        .')'
                                        .'|s(?'
                                            .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50698)'
                                            .'|etgroup(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50774)'
                                                .'|\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50846)'
                                            .')'
                                        .')'
                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50925)'
                                    .')'
                                .')'
                                .'|perty\\-group(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51008)'
                                    .'|\\-option(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51085)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51164)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|order\\-(?'
                        .'|delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51263)'
                        .'|line\\-item(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:51358)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:51428)'
                            .')'
                            .'|\\-download(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:51524)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:51594)'
                                .')'
                            .')'
                        .')'
                        .'|t(?'
                            .'|ag(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:51688)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:51758)'
                                .')'
                            .')'
                            .'|ransaction(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:51855)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:51925)'
                                .')'
                                .'|\\-capture(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:52020)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:52090)'
                                    .')'
                                    .'|\\-refund(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:52184)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:52254)'
                                        .')'
                                        .'|\\-position(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:52350)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:52420)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|search(?'
                        .'|/(?'
                            .'|order\\-(?'
                                .'|line\\-item(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52529)'
                                    .'|\\-download((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52605)'
                                .')'
                                .'|t(?'
                                    .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52678)'
                                    .'|ransaction(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52757)'
                                        .'|\\-capture(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52835)'
                                            .'|\\-refund(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52912)'
                                                .'|\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52988)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|p(?'
                                .'|ayment\\-method(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53080)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53159)'
                                .')'
                                .'|lugin(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53234)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53313)'
                                .')'
                                .'|ro(?'
                                    .'|duct(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53392)'
                                        .'|\\-(?'
                                            .'|c(?'
                                                .'|ategory(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53477)'
                                                    .'|\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53549)'
                                                .')'
                                                .'|onfigurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53636)'
                                                .'|ross\\-selling(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53718)'
                                                    .'|\\-(?'
                                                        .'|assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53807)'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53884)'
                                                    .')'
                                                .')'
                                                .'|ustom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53969)'
                                            .')'
                                            .'|download((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54044)'
                                            .'|export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54116)'
                                            .'|feature\\-set(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54197)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54276)'
                                            .')'
                                            .'|keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54362)'
                                            .'|m(?'
                                                .'|anufacturer(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54446)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54525)'
                                                .')'
                                                .'|edia((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54596)'
                                            .')'
                                            .'|option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54669)'
                                            .'|pr(?'
                                                .'|ice((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54743)'
                                                .'|operty((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54815)'
                                            .')'
                                            .'|review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54888)'
                                            .'|s(?'
                                                .'|earch\\-(?'
                                                    .'|config(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54977)'
                                                        .'|\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55050)'
                                                    .')'
                                                    .'|keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55124)'
                                                .')'
                                                .'|orting(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55200)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55279)'
                                                .')'
                                                .'|tream(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55354)'
                                                    .'|\\-(?'
                                                        .'|filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55431)'
                                                        .'|mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55504)'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55581)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55656)'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55732)'
                                            .')'
                                            .'|visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55809)'
                                        .')'
                                    .')'
                                    .'|motion(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55886)'
                                        .'|\\-(?'
                                            .'|cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55967)'
                                            .'|discount(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56044)'
                                                .'|\\-(?'
                                                    .'|prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56121)'
                                                    .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56191)'
                                                .')'
                                            .')'
                                            .'|individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56275)'
                                            .'|order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56352)'
                                            .'|persona\\-(?'
                                                .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56438)'
                                                .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56508)'
                                            .')'
                                            .'|s(?'
                                                .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56592)'
                                                .'|etgroup(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56668)'
                                                    .'|\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56740)'
                                                .')'
                                            .')'
                                            .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56819)'
                                        .')'
                                    .')'
                                    .'|perty\\-group(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56902)'
                                        .'|\\-option(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56979)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57058)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|\\-ids/(?'
                            .'|order\\-(?'
                                .'|line\\-item(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57161)'
                                    .'|\\-download((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57237)'
                                .')'
                                .'|t(?'
                                    .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57310)'
                                    .'|ransaction(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57389)'
                                        .'|\\-capture(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57467)'
                                            .'|\\-refund(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57544)'
                                                .'|\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57620)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|p(?'
                                .'|ayment\\-method(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57712)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57791)'
                                .')'
                                .'|lugin(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57866)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57945)'
                                .')'
                                .'|ro(?'
                                    .'|duct(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58024)'
                                        .'|\\-(?'
                                            .'|c(?'
                                                .'|ategory(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58109)'
                                                    .'|\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58181)'
                                                .')'
                                                .'|onfigurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58268)'
                                                .'|ross\\-selling(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58350)'
                                                    .'|\\-(?'
                                                        .'|assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58439)'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58516)'
                                                    .')'
                                                .')'
                                                .'|ustom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58601)'
                                            .')'
                                            .'|download((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58676)'
                                            .'|export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58748)'
                                            .'|feature\\-set(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58829)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58908)'
                                            .')'
                                            .'|keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58994)'
                                            .'|m(?'
                                                .'|anufacturer(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59078)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59157)'
                                                .')'
                                                .'|edia((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59228)'
                                            .')'
                                            .'|option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59301)'
                                            .'|pr(?'
                                                .'|ice((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59375)'
                                                .'|operty((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59447)'
                                            .')'
                                            .'|review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59520)'
                                            .'|s(?'
                                                .'|earch\\-(?'
                                                    .'|config(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59609)'
                                                        .'|\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59682)'
                                                    .')'
                                                    .'|keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59756)'
                                                .')'
                                                .'|orting(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59832)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59911)'
                                                .')'
                                                .'|tream(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59986)'
                                                    .'|\\-(?'
                                                        .'|filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60063)'
                                                        .'|mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60136)'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60213)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60288)'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60364)'
                                            .')'
                                            .'|visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60441)'
                                        .')'
                                    .')'
                                    .'|motion(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60518)'
                                        .'|\\-(?'
                                            .'|cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60599)'
                                            .'|discount(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60676)'
                                                .'|\\-(?'
                                                    .'|prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60753)'
                                                    .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60823)'
                                                .')'
                                            .')'
                                            .'|individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60907)'
                                            .'|order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60984)'
                                            .'|persona\\-(?'
                                                .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61070)'
                                                .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61140)'
                                            .')'
                                            .'|s(?'
                                                .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61224)'
                                                .'|etgroup(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61300)'
                                                    .'|\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61372)'
                                                .')'
                                            .')'
                                            .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61451)'
                                        .')'
                                    .')'
                                    .'|perty\\-group(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61534)'
                                        .'|\\-option(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61611)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61690)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|p(?'
                        .'|ayment\\-method(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:61799)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:61869)'
                            .')'
                            .'|\\-translation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:61968)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:62038)'
                                .')'
                            .')'
                        .')'
                        .'|lugin(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:62131)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:62201)'
                            .')'
                            .'|\\-translation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:62300)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:62370)'
                                .')'
                            .')'
                        .')'
                        .'|ro(?'
                            .'|duct(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:62467)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:62537)'
                                .')'
                                .'|\\-(?'
                                    .'|c(?'
                                        .'|ategory(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:62639)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:62709)'
                                            .')'
                                            .'|\\-tree(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:62801)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:62871)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|onfigurator\\-setting(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:62979)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:63049)'
                                            .')'
                                        .')'
                                        .'|ross\\-selling(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:63149)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:63219)'
                                            .')'
                                            .'|\\-(?'
                                                .'|assigned\\-products(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:63328)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:63398)'
                                                    .')'
                                                .')'
                                                .'|translation(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:63496)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:63566)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|ustom\\-field\\-set(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:63672)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:63742)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|download(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:63838)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:63908)'
                                        .')'
                                    .')'
                                    .'|export(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:64001)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:64071)'
                                        .')'
                                    .')'
                                    .'|feature\\-set(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:64170)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:64240)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:64339)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:64409)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|keyword\\-dictionary(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:64516)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:64586)'
                                        .')'
                                    .')'
                                    .'|m(?'
                                        .'|anufacturer(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:64688)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:64758)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:64857)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:64927)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|edia(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:65019)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:65089)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|option(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:65183)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:65253)'
                                        .')'
                                    .')'
                                    .'|pr(?'
                                        .'|ice(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:65348)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:65418)'
                                            .')'
                                        .')'
                                        .'|operty(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:65511)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:65581)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|review(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:65675)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:65745)'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|earch\\-(?'
                                            .'|config(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:65852)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:65922)'
                                                .')'
                                                .'|\\-field(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:66015)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:66085)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|keyword(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:66180)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:66250)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|orting(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:66344)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:66414)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:66513)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:66583)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|tream(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:66676)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:66746)'
                                            .')'
                                            .'|\\-(?'
                                                .'|filter(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:66843)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:66913)'
                                                    .')'
                                                .')'
                                                .'|mapping(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:67007)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:67077)'
                                                    .')'
                                                .')'
                                                .'|translation(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:67175)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:67245)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|t(?'
                                        .'|ag(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:67341)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:67411)'
                                            .')'
                                        .')'
                                        .'|ranslation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:67508)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:67578)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|visibility(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:67676)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:67746)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|motion(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:67841)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:67911)'
                                .')'
                                .'|\\-(?'
                                    .'|cart\\-rule(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:68012)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:68082)'
                                        .')'
                                    .')'
                                    .'|discount(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:68177)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:68247)'
                                        .')'
                                        .'|\\-(?'
                                            .'|prices(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:68344)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:68414)'
                                                .')'
                                            .')'
                                            .'|rule(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:68505)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:68575)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|individual\\-code(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:68680)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:68750)'
                                        .')'
                                    .')'
                                    .'|order\\-rule(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:68848)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:68918)'
                                        .')'
                                    .')'
                                    .'|persona\\-(?'
                                        .'|customer(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:69025)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:69095)'
                                            .')'
                                        .')'
                                        .'|rule(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:69186)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:69256)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|ales\\-channel(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:69361)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:69431)'
                                            .')'
                                        .')'
                                        .'|etgroup(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:69525)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:69595)'
                                            .')'
                                            .'|\\-rule(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:69687)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:69757)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:69857)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:69927)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|perty\\-group(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:70028)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:70098)'
                                .')'
                                .'|\\-(?'
                                    .'|option(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:70195)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:70265)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:70364)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:70434)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:70527)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
        70527 => '{^(?'
                .'|/api/(?'
                    .'|property\\-group\\-translation(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:70645)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                            .'|(*:70715)'
                        .')'
                    .')'
                    .'|s(?'
                        .'|e(?'
                            .'|arch(?'
                                .'|/(?'
                                    .'|property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:70830)'
                                    .'|rule(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:70903)'
                                        .'|\\-(?'
                                            .'|condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:70983)'
                                            .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71052)'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|al(?'
                                            .'|es\\-channel(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71143)'
                                                .'|\\-(?'
                                                    .'|analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71223)'
                                                    .'|c(?'
                                                        .'|ountry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71299)'
                                                        .'|urrency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71372)'
                                                    .')'
                                                    .'|domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71445)'
                                                    .'|language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71519)'
                                                    .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71600)'
                                                    .'|shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71682)'
                                                    .'|t(?'
                                                        .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71762)'
                                                        .'|ype(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71834)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71913)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|utation(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71993)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72072)'
                                            .')'
                                        .')'
                                        .'|c(?'
                                            .'|heduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72157)'
                                            .'|ript((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72227)'
                                        .')'
                                        .'|eo\\-url(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72304)'
                                            .'|\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72380)'
                                        .')'
                                        .'|hipping\\-method(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72465)'
                                            .'|\\-(?'
                                                .'|price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72541)'
                                                .'|t(?'
                                                    .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72613)'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72689)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|nippet(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72767)'
                                            .'|\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72838)'
                                        .')'
                                        .'|tate\\-machine(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72921)'
                                            .'|\\-(?'
                                                .'|history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72999)'
                                                .'|state(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73073)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73152)'
                                                .')'
                                                .'|trans(?'
                                                    .'|ition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73232)'
                                                    .'|lation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73304)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|wag\\-language\\-pack\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73402)'
                                        .'|ystem\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73481)'
                                    .')'
                                    .'|t(?'
                                        .'|a(?'
                                            .'|g((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73557)'
                                            .'|x(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73627)'
                                                .'|\\-(?'
                                                    .'|provider(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73709)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73788)'
                                                    .')'
                                                    .'|rule(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73862)'
                                                        .'|\\-type(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73937)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74016)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|heme(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74094)'
                                            .'|\\-(?'
                                                .'|child((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74170)'
                                                .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74241)'
                                                .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74321)'
                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74398)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|u(?'
                                        .'|nit(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74477)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74556)'
                                        .')'
                                        .'|ser(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74629)'
                                            .'|\\-(?'
                                                .'|access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74711)'
                                                .'|config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74783)'
                                                .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74857)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|version(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74936)'
                                        .'|\\-commit(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75013)'
                                            .'|\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75085)'
                                        .')'
                                    .')'
                                    .'|webhook(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75163)'
                                        .'|\\-event\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75241)'
                                    .')'
                                .')'
                                .'|\\-ids/(?'
                                    .'|property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75346)'
                                    .'|rule(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75419)'
                                        .'|\\-(?'
                                            .'|condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75499)'
                                            .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75568)'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|al(?'
                                            .'|es\\-channel(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75659)'
                                                .'|\\-(?'
                                                    .'|analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75739)'
                                                    .'|c(?'
                                                        .'|ountry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75815)'
                                                        .'|urrency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75888)'
                                                    .')'
                                                    .'|domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75961)'
                                                    .'|language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76035)'
                                                    .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76116)'
                                                    .'|shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76198)'
                                                    .'|t(?'
                                                        .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76278)'
                                                        .'|ype(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76350)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76429)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|utation(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76509)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76588)'
                                            .')'
                                        .')'
                                        .'|c(?'
                                            .'|heduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76673)'
                                            .'|ript((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76743)'
                                        .')'
                                        .'|eo\\-url(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76820)'
                                            .'|\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76896)'
                                        .')'
                                        .'|hipping\\-method(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76981)'
                                            .'|\\-(?'
                                                .'|price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77057)'
                                                .'|t(?'
                                                    .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77129)'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77205)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|nippet(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77283)'
                                            .'|\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77354)'
                                        .')'
                                        .'|tate\\-machine(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77437)'
                                            .'|\\-(?'
                                                .'|history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77515)'
                                                .'|state(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77589)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77668)'
                                                .')'
                                                .'|trans(?'
                                                    .'|ition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77748)'
                                                    .'|lation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77820)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|wag\\-language\\-pack\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77918)'
                                        .'|ystem\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77997)'
                                    .')'
                                    .'|t(?'
                                        .'|a(?'
                                            .'|g((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78073)'
                                            .'|x(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78143)'
                                                .'|\\-(?'
                                                    .'|provider(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78225)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78304)'
                                                    .')'
                                                    .'|rule(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78378)'
                                                        .'|\\-type(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78453)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78532)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|heme(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78610)'
                                            .'|\\-(?'
                                                .'|child((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78686)'
                                                .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78757)'
                                                .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78837)'
                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78914)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|u(?'
                                        .'|nit(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78993)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79072)'
                                        .')'
                                        .'|ser(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79145)'
                                            .'|\\-(?'
                                                .'|access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79227)'
                                                .'|config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79299)'
                                                .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79373)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|version(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79452)'
                                        .'|\\-commit(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79529)'
                                            .'|\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79601)'
                                        .')'
                                    .')'
                                    .'|webhook(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79679)'
                                        .'|\\-event\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79757)'
                                    .')'
                                .')'
                            .')'
                            .'|o\\-url(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:79851)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:79921)'
                                .')'
                                .'|\\-template(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:80017)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:80087)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|al(?'
                            .'|es\\-channel(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:80192)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:80262)'
                                .')'
                                .'|\\-(?'
                                    .'|analytics(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:80362)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:80432)'
                                        .')'
                                    .')'
                                    .'|c(?'
                                        .'|ountry(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:80529)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:80599)'
                                            .')'
                                        .')'
                                        .'|urrency(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:80693)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:80763)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|domain(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:80857)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:80927)'
                                        .')'
                                    .')'
                                    .'|language(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:81022)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:81092)'
                                        .')'
                                    .')'
                                    .'|payment\\-method(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:81194)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:81264)'
                                        .')'
                                    .')'
                                    .'|shipping\\-method(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:81367)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:81437)'
                                        .')'
                                    .')'
                                    .'|t(?'
                                        .'|ranslation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:81538)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:81608)'
                                            .')'
                                        .')'
                                        .'|ype(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:81698)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:81768)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:81867)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:81937)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|utation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:82035)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:82105)'
                                .')'
                                .'|\\-translation(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:82204)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:82274)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|c(?'
                            .'|heduled\\-task(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:82380)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:82450)'
                                .')'
                            .')'
                            .'|ript(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:82541)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:82611)'
                                .')'
                            .')'
                        .')'
                        .'|hipping\\-method(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:82714)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:82784)'
                            .')'
                            .'|\\-(?'
                                .'|price(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:82880)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:82950)'
                                    .')'
                                .')'
                                .'|t(?'
                                    .'|ag(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:83043)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:83113)'
                                        .')'
                                    .')'
                                    .'|ranslation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:83210)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:83280)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|nippet(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:83376)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:83446)'
                            .')'
                            .'|\\-set(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:83537)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:83607)'
                                .')'
                            .')'
                        .')'
                        .'|tate\\-machine(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:83708)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:83778)'
                            .')'
                            .'|\\-(?'
                                .'|history(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:83876)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:83946)'
                                    .')'
                                .')'
                                .'|state(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:84038)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:84108)'
                                    .')'
                                    .'|\\-translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:84207)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:84277)'
                                        .')'
                                    .')'
                                .')'
                                .'|trans(?'
                                    .'|ition(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:84378)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:84448)'
                                        .')'
                                    .')'
                                    .'|lation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:84541)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:84611)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|wag\\-language\\-pack\\-language(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:84730)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:84800)'
                            .')'
                        .')'
                        .'|ystem\\-config(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:84900)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:84970)'
                            .')'
                        .')'
                    .')'
                    .'|a(?'
                        .'|ggregate/(?'
                            .'|property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85083)'
                            .'|rule(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85156)'
                                .'|\\-(?'
                                    .'|condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85236)'
                                    .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85305)'
                                .')'
                            .')'
                            .'|s(?'
                                .'|al(?'
                                    .'|es\\-channel(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85396)'
                                        .'|\\-(?'
                                            .'|analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85476)'
                                            .'|c(?'
                                                .'|ountry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85552)'
                                                .'|urrency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85625)'
                                            .')'
                                            .'|domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85698)'
                                            .'|language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85772)'
                                            .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85853)'
                                            .'|shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85935)'
                                            .'|t(?'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86015)'
                                                .'|ype(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86087)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86166)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|utation(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86246)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86325)'
                                    .')'
                                .')'
                                .'|c(?'
                                    .'|heduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86410)'
                                    .'|ript((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86480)'
                                .')'
                                .'|eo\\-url(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86557)'
                                    .'|\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86633)'
                                .')'
                                .'|hipping\\-method(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86718)'
                                    .'|\\-(?'
                                        .'|price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86794)'
                                        .'|t(?'
                                            .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86866)'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86942)'
                                        .')'
                                    .')'
                                .')'
                                .'|nippet(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87020)'
                                    .'|\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87091)'
                                .')'
                                .'|tate\\-machine(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87174)'
                                    .'|\\-(?'
                                        .'|history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87252)'
                                        .'|state(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87326)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87405)'
                                        .')'
                                        .'|trans(?'
                                            .'|ition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87485)'
                                            .'|lation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87557)'
                                        .')'
                                    .')'
                                .')'
                                .'|wag\\-language\\-pack\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87655)'
                                .'|ystem\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87734)'
                            .')'
                            .'|t(?'
                                .'|a(?'
                                    .'|g((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87810)'
                                    .'|x(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87880)'
                                        .'|\\-(?'
                                            .'|provider(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87962)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88041)'
                                            .')'
                                            .'|rule(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88115)'
                                                .'|\\-type(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88190)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88269)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|heme(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88347)'
                                    .'|\\-(?'
                                        .'|child((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88423)'
                                        .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88494)'
                                        .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88574)'
                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88651)'
                                    .')'
                                .')'
                            .')'
                            .'|u(?'
                                .'|nit(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88730)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88809)'
                                .')'
                                .'|ser(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88882)'
                                    .'|\\-(?'
                                        .'|access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88964)'
                                        .'|config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89036)'
                                        .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89110)'
                                    .')'
                                .')'
                            .')'
                            .'|version(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89189)'
                                .'|\\-commit(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89266)'
                                    .'|\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89338)'
                                .')'
                            .')'
                            .'|webhook(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89416)'
                                .'|\\-event\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89494)'
                            .')'
                        .')'
                        .'|cl\\-role(?'
                            .'|(*:89517)'
                            .'|/([^/]++)(?'
                                .'|(*:89539)'
                            .')'
                        .')'
                    .')'
                    .'|rule(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:89631)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                            .'|(*:89701)'
                        .')'
                        .'|\\-(?'
                            .'|condition(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:89801)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:89871)'
                                .')'
                            .')'
                            .'|tag(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:89961)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:90031)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|t(?'
                        .'|a(?'
                            .'|g(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:90129)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:90199)'
                                .')'
                            .')'
                            .'|x(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:90287)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:90357)'
                                .')'
                                .'|\\-(?'
                                    .'|provider(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:90456)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:90526)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:90625)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:90695)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|rule(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:90787)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:90857)'
                                        .')'
                                        .'|\\-type(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:90949)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:91019)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:91118)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:91188)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|heme(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:91284)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:91354)'
                            .')'
                            .'|\\-(?'
                                .'|child(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:91450)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:91520)'
                                    .')'
                                .')'
                                .'|media(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:91612)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:91682)'
                                    .')'
                                .')'
                                .'|sales\\-channel(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:91783)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:91853)'
                                    .')'
                                .')'
                                .'|translation(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:91951)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:92021)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|u(?'
                        .'|nit(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:92118)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:92188)'
                            .')'
                            .'|\\-translation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:92287)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:92357)'
                                .')'
                            .')'
                        .')'
                        .'|ser(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:92445)'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:92511)'
                            .'|\\-(?'
                                .'|access\\-key(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:92612)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:92682)'
                                    .')'
                                .')'
                                .'|config(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:92775)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:92845)'
                                    .')'
                                .')'
                                .'|recovery(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:92940)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:93010)'
                                    .')'
                                .')'
                            .')'
                            .'|/([^/]++)(?'
                                .'|(*:93035)'
                                .'|/ac(?'
                                    .'|cess\\-keys/([^/]++)(*:93070)'
                                    .'|l\\-roles/([^/]++)(*:93097)'
                                .')'
                                .'|(*:93108)'
                            .')'
                            .'|(*:93119)'
                        .')'
                    .')'
                    .'|version(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:93213)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                            .'|(*:93283)'
                        .')'
                        .'|\\-commit(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:93377)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:93447)'
                            .')'
                            .'|\\-data(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:93539)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:93609)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|webhook(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:93705)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                            .'|(*:93775)'
                        .')'
                        .'|\\-event\\-log(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:93873)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:93943)'
                            .')'
                        .')'
                    .')'
                    .'|integration(?'
                        .'|(*:93970)'
                        .'|/([^/]++)(*:93989)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        70 => [[['_route' => 'api.action.feature-flag.enable', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['api_feature_flag_toggle'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\FeatureFlagController::enable'], ['feature'], ['POST' => 0], null, false, true, null]],
        93 => [[['_route' => 'api.action.feature-flag.disable', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['api_feature_flag_toggle'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\FeatureFlagController::disable'], ['feature'], ['POST' => 0], null, false, true, null]],
        124 => [[['_route' => 'api.action.indexing.iterate', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\IndexingController::iterate'], ['indexer'], ['POST' => 0], null, false, true, null]],
        151 => [
            [['_route' => 'api.increment.increment', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Increment\\Controller\\IncrementApiController::increment'], ['pool'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api.increment.list', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Increment\\Controller\\IncrementApiController::getIncrement'], ['pool'], ['GET' => 0], null, false, true, null],
        ],
        196 => [[['_route' => 'api.in-app-purchases.detail', '_routeScope' => ['api'], '_controller' => 'SwagExtensionStore\\Controller\\InAppPurchasesController::getInAppFeature'], ['technicalName'], ['GET' => 0], null, false, false, null]],
        208 => [[['_route' => 'api.in-app-purchase.list', '_routeScope' => ['api'], '_controller' => 'SwagExtensionStore\\Controller\\InAppPurchasesController::listPurchases'], ['extensionName'], ['GET' => 0], null, false, false, null]],
        263 => [[['_route' => 'api.action.import_export.file.prepare-download', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::prepareDownload'], ['fileId'], ['POST' => 0], null, false, true, null]],
        308 => [[['_route' => 'api.extension.download', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreActionsController::downloadExtension'], ['technicalName'], ['POST' => 0], null, false, true, null]],
        343 => [[['_route' => 'api.extension.deactivate', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreActionsController::deactivateExtension'], ['type', 'technicalName'], ['PUT' => 0], null, false, true, null]],
        377 => [[['_route' => 'api.extension.install', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreActionsController::installExtension'], ['type', 'technicalName'], ['POST' => 0], null, false, true, null]],
        415 => [[['_route' => 'api.extension.uninstall', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreActionsController::uninstallExtension'], ['type', 'technicalName'], ['POST' => 0], null, false, true, null]],
        446 => [[['_route' => 'api.extension.update', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreActionsController::updateExtension'], ['type', 'technicalName'], ['POST' => 0], null, false, true, null]],
        479 => [[['_route' => 'api.extension.remove', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreActionsController::removeExtension'], ['type', 'technicalName'], ['POST' => 0], null, false, true, null]],
        513 => [[['_route' => 'api.extension.activate', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreActionsController::activateExtension'], ['type', 'technicalName'], ['PUT' => 0], null, false, true, null]],
        548 => [[['_route' => 'api.extension.detail', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'SwagExtensionStore\\Controller\\DataController::detail'], ['id'], ['GET' => 0], null, false, true, null]],
        572 => [[['_route' => 'api.extension.reviews', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'SwagExtensionStore\\Controller\\DataController::reviews'], ['id'], ['GET' => 0], null, false, false, null]],
        603 => [[['_route' => 'api.increment.decrement', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Increment\\Controller\\IncrementApiController::decrement'], ['pool'], ['POST' => 0], null, false, true, null]],
        639 => [[['_route' => 'api.action.download.document', '_routeScope' => ['api'], '_acl' => ['document:read'], '_controller' => 'Shopware\\Core\\Checkout\\Document\\Controller\\DocumentController::downloadDocument'], ['documentId', 'deepLinkCode'], ['GET' => 0], null, false, true, null]],
        653 => [[['_route' => 'api.action.document.upload', '_routeScope' => ['api'], '_acl' => ['document:update'], '_controller' => 'Shopware\\Core\\Checkout\\Document\\DocumentGeneratorController::uploadToDocument'], ['documentId'], ['POST' => 0], null, false, false, null]],
        688 => [[['_route' => 'api.increment.reset', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Increment\\Controller\\IncrementApiController::reset'], ['pool'], ['POST' => 0], null, false, true, null]],
        732 => [[['_route' => 'api.clone', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::clone'], ['entity', 'id'], ['POST' => 0], null, false, true, null]],
        781 => [[['_route' => 'api.createVersion', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::createVersion'], ['entity', 'id'], ['POST' => 0], null, false, true, null]],
        825 => [[['_route' => 'api.mergeVersion', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::mergeVersion'], ['entity', 'versionId'], ['POST' => 0], null, false, true, null]],
        866 => [[['_route' => 'api.deleteVersion', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::deleteVersion'], ['versionId', 'entity', 'entityId'], ['POST' => 0], null, false, true, null]],
        922 => [[['_route' => 'api.action.number-range.reserve', 'saleschannel' => null, '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\NumberRange\\Api\\NumberRangeController::reserve'], ['type', 'saleschannel'], ['GET' => 0], null, false, true, null]],
        960 => [[['_route' => 'api.action.number-range.preview-pattern', '_routeScope' => ['api'], 'type' => 'default', '_controller' => 'Shopware\\Core\\System\\NumberRange\\Api\\NumberRangeController::previewPattern'], ['type'], ['GET' => 0], null, false, true, null]],
        1013 => [[['_route' => 'api.state_machine.states', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\StateMachine\\Api\\StateMachineActionController::getAvailableTransitions'], ['entityName', 'entityId'], ['GET' => 0], null, false, false, null]],
        1031 => [[['_route' => 'api.state_machine.transition_state', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\StateMachine\\Api\\StateMachineActionController::transitionState'], ['entityName', 'entityId', 'transition'], ['POST' => 0], null, false, true, null]],
        1075 => [[['_route' => 'api.seo-url-template.default', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::getDefaultSeoTemplate'], ['routeName'], ['GET' => 0], null, false, true, null]],
        1114 => [[['_route' => 'api.action.product.combinations', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\Product\\Api\\ProductActionController::getCombinations'], ['productId'], ['GET' => 0], null, false, false, null]],
        1157 => [[['_route' => 'api.action.media-folder.dissolve', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\Media\\Api\\MediaFolderController::dissolve'], ['folderId'], ['POST' => 0], null, false, false, null]],
        1185 => [[['_route' => 'api.action.media.upload', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\Media\\Api\\MediaUploadController::upload'], ['mediaId'], ['POST' => 0], null, false, false, null]],
        1200 => [[['_route' => 'api.action.media.rename', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\Media\\Api\\MediaUploadController::renameMediaFile'], ['mediaId'], ['POST' => 0], null, false, false, null]],
        1237 => [[['_route' => 'api.action.trigger_event', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Content\\Flow\\Controller\\TriggerFlowController::trigger'], ['eventName'], ['POST' => 0], null, false, true, null]],
        1282 => [[['_route' => 'api.action.theme.configuration', '_routeScope' => ['api'], '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::configuration'], ['themeId'], ['GET' => 0], null, false, false, null]],
        1306 => [[['_route' => 'api.action.theme.assign', '_routeScope' => ['api'], '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::assignTheme'], ['themeId', 'salesChannelId'], ['POST' => 0], null, false, true, null]],
        1320 => [[['_route' => 'api.action.theme.reset', '_routeScope' => ['api'], '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::resetTheme'], ['themeId'], ['PATCH' => 0], null, false, false, null]],
        1347 => [[['_route' => 'api.action.theme.structuredFields', '_routeScope' => ['api'], '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::structuredFields'], ['themeId'], ['GET' => 0], null, false, false, null]],
        1357 => [[['_route' => 'api.action.theme.update', '_routeScope' => ['api'], '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::updateTheme'], ['themeId'], ['PATCH' => 0], null, false, true, null]],
        1383 => [[['_route' => 'api.action.theme.validate', '_routeScope' => ['api'], '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::validateVariables'], [], ['POST' => 0], null, false, false, null]],
        1438 => [[['_route' => 'api.action.order.convert-to-cart', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderConverterController::convertToCart'], ['orderId'], ['POST' => 0], null, true, false, null]],
        1456 => [[['_route' => 'api.action.order.add-credit-item', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::addCreditItemToOrder'], ['orderId'], ['POST' => 0], null, false, false, null]],
        1477 => [[['_route' => 'api.action.order.recalculate', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::recalculateOrder'], ['orderId'], ['POST' => 0], null, false, false, null]],
        1505 => [[['_route' => 'api.action.order.add-product', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::addProductToOrder'], ['orderId', 'productId'], ['POST' => 0], null, false, true, null]],
        1526 => [[['_route' => 'api.action.order.add-promotion-item', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::addPromotionItemToOrder'], ['orderId'], ['POST' => 0], null, false, false, null]],
        1544 => [[['_route' => 'api.action.order.add-line-item', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::addCustomLineItemToOrder'], ['orderId'], ['POST' => 0], null, false, false, null]],
        1578 => [[['_route' => 'api.action.order.toggle-automatic-promotions', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::toggleAutomaticPromotions'], ['orderId'], ['POST' => 0], null, false, false, null]],
        1601 => [[['_route' => 'api.action.order.update', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::updateOrderAddresses'], ['orderId'], ['POST' => 0], null, false, false, null]],
        1644 => [[['_route' => 'api.action.document.preview', '_routeScope' => ['api'], '_acl' => ['document:read'], '_controller' => 'Shopware\\Core\\Checkout\\Document\\Controller\\DocumentController::previewDocument'], ['orderId', 'deepLinkCode', 'documentTypeName'], ['GET' => 0], null, false, false, null]],
        1678 => [[['_route' => 'api.action.document.bulk.create', '_routeScope' => ['api'], '_acl' => ['document:create'], '_controller' => 'Shopware\\Core\\Checkout\\Document\\DocumentGeneratorController::createDocuments'], ['documentTypeName'], ['POST' => 0], null, false, false, null]],
        1710 => [[['_route' => 'api.action.order.state_machine.order.transition_state', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Order\\Api\\OrderActionController::orderStateTransition'], ['orderId', 'transition'], ['POST' => 0], null, false, true, null]],
        1765 => [[['_route' => 'api.action.order.replace-order-address', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::replaceOrderAddressWithCustomerAddress'], ['orderAddressId', 'customerAddressId'], ['POST' => 0], null, false, true, null]],
        1816 => [[['_route' => 'api.action.order.state_machine.order_transaction.transition_state', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Order\\Api\\OrderActionController::orderTransactionStateTransition'], ['orderTransactionId', 'transition'], ['POST' => 0], null, false, true, null]],
        1849 => [[['_route' => 'api.action.order.order_transaction_capture_refund', '_routeScope' => ['api'], '_acl' => ['order_refund.editor'], '_controller' => 'Shopware\\Core\\Checkout\\Order\\Api\\OrderActionController::refundOrderTransactionCapture'], ['refundId'], ['POST' => 0], null, false, true, null]],
        1891 => [[['_route' => 'api.action.order.state_machine.order_delivery.transition_state', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Checkout\\Order\\Api\\OrderActionController::orderDeliveryStateTransition'], ['orderDeliveryId', 'transition'], ['POST' => 0], null, false, true, null]],
        1944 => [[['_route' => 'api.admin.product-stream-preview', '_routeScope' => ['administration'], '_controller' => 'Shopware\\Administration\\Controller\\AdminProductStreamController::productStreamPreview'], ['salesChannelId'], ['POST' => 0], null, false, true, null]],
        1985 => [[['_route' => 'api.admin.dashboard.order-amount', '_routeScope' => ['administration'], '_controller' => 'Shopware\\Administration\\Controller\\DashboardController::orderAmount'], ['since'], ['GET' => 0], null, false, true, null]],
        2029 => [[['_route' => 'api.proxy.store-api', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::proxy'], ['salesChannelId', '_path'], null, null, false, true, null]],
        2054 => [[['_route' => 'api.proxy-order.create', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::proxyCreateOrder'], ['salesChannelId'], null, null, false, true, null]],
        2091 => [[['_route' => 'api.license.cancel', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreLicensesController::cancelSubscription'], ['licenseId'], ['DELETE' => 0], null, false, true, null]],
        2113 => [[['_route' => 'api.license.rate', '_routeScope' => ['api'], '_acl' => ['system.plugin_maintain'], '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreLicensesController::rateLicensedExtension'], ['extensionId'], ['POST' => 0], null, false, true, null]],
        2176 => [[['_route' => 'api.app_system.action_buttons', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppActionController::getActionsPerView'], ['entity', 'view'], ['GET' => 0], null, false, true, null]],
        2197 => [[['_route' => 'api.app_system.action_button.run', '_routeScope' => ['api'], '_acl' => ['app'], '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppActionController::runAction'], ['id'], ['POST' => 0], null, false, true, null]],
        2279 => [
            [['_route' => 'api.app.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        2348 => [
            [['_route' => 'api.app.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        2455 => [
            [['_route' => 'api.app_action_button.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-action-button', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_action_button.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-action-button', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_action_button.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-action-button', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        2524 => [
            [['_route' => 'api.app_action_button.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-action-button', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_action_button.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-action-button', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        2622 => [
            [['_route' => 'api.app_action_button_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-action-button-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_action_button_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-action-button-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_action_button_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-action-button-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        2691 => [
            [['_route' => 'api.app_action_button_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-action-button-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_action_button_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-action-button-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        2800 => [
            [['_route' => 'api.app_administration_snippet.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-administration-snippet', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_administration_snippet.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-administration-snippet', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_administration_snippet.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-administration-snippet', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        2869 => [
            [['_route' => 'api.app_administration_snippet.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-administration-snippet', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_administration_snippet.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-administration-snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        2966 => [
            [['_route' => 'api.app_cms_block.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-cms-block', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_cms_block.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-cms-block', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_cms_block.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-cms-block', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        3035 => [
            [['_route' => 'api.app_cms_block.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-cms-block', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_cms_block.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        3133 => [
            [['_route' => 'api.app_cms_block_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-cms-block-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_cms_block_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-cms-block-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_cms_block_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-cms-block-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        3202 => [
            [['_route' => 'api.app_cms_block_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-cms-block-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_cms_block_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-cms-block-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        3304 => [
            [['_route' => 'api.app_flow_action.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-flow-action', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_flow_action.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-flow-action', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_flow_action.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-flow-action', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        3373 => [
            [['_route' => 'api.app_flow_action.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-flow-action', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_flow_action.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-flow-action', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        3471 => [
            [['_route' => 'api.app_flow_action_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-flow-action-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_flow_action_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-flow-action-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_flow_action_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-flow-action-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        3540 => [
            [['_route' => 'api.app_flow_action_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-flow-action-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_flow_action_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-flow-action-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        3632 => [
            [['_route' => 'api.app_flow_event.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-flow-event', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_flow_event.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-flow-event', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_flow_event.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-flow-event', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        3701 => [
            [['_route' => 'api.app_flow_event.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-flow-event', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_flow_event.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-flow-event', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        3803 => [
            [['_route' => 'api.app_payment_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-payment-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_payment_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-payment-method', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_payment_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-payment-method', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        3872 => [
            [['_route' => 'api.app_payment_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-payment-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_payment_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        3978 => [
            [['_route' => 'api.app_script_condition.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-script-condition', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_script_condition.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-script-condition', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_script_condition.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-script-condition', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        4047 => [
            [['_route' => 'api.app_script_condition.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-script-condition', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_script_condition.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-script-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        4145 => [
            [['_route' => 'api.app_script_condition_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-script-condition-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_script_condition_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-script-condition-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_script_condition_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-script-condition-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        4214 => [
            [['_route' => 'api.app_script_condition_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-script-condition-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_script_condition_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-script-condition-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        4316 => [
            [['_route' => 'api.app_shipping_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-shipping-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_shipping_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-shipping-method', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_shipping_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-shipping-method', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        4385 => [
            [['_route' => 'api.app_shipping_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-shipping-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_shipping_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        4483 => [
            [['_route' => 'api.app_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-template', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-template', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        4552 => [
            [['_route' => 'api.app_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        4648 => [
            [['_route' => 'api.app_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        4717 => [
            [['_route' => 'api.app_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        4834 => [[['_route' => 'api.custom_entity_entity.aggregate', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::aggregate'], ['entityName', 'path'], ['POST' => 0], null, false, true, null]],
        4899 => [[['_route' => 'api.custom_entity.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        4973 => [[['_route' => 'api.custom_field.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5046 => [[['_route' => 'api.custom_field_set.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5121 => [[['_route' => 'api.custom_field_set_relation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5194 => [[['_route' => 'api.customer.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5271 => [[['_route' => 'api.customer_address.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5344 => [[['_route' => 'api.customer_group.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5440 => [[['_route' => 'api.customer_group_registration_sales_channels.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5518 => [[['_route' => 'api.currency.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5605 => [[['_route' => 'api.currency_country_rounding.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5681 => [[['_route' => 'api.currency_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5756 => [[['_route' => 'api.ce_entity.aggregate', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::aggregateShorthand'], ['entityName', 'path'], ['POST' => 0], null, false, true, null]],
        5831 => [[['_route' => 'api.category.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5904 => [[['_route' => 'api.category_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5979 => [[['_route' => 'api.category_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6058 => [[['_route' => 'api.cms_block.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6130 => [[['_route' => 'api.cms_page.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6208 => [[['_route' => 'api.cms_page_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6284 => [[['_route' => 'api.cms_section.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6355 => [[['_route' => 'api.cms_slot.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6433 => [[['_route' => 'api.cms_slot_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6510 => [[['_route' => 'api.country.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6588 => [[['_route' => 'api.country_state.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6666 => [[['_route' => 'api.country_state_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6743 => [[['_route' => 'api.country_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6826 => [[['_route' => 'api.acl_role.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'acl-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6901 => [[['_route' => 'api.acl_user_role.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6972 => [[['_route' => 'api.app.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7062 => [[['_route' => 'api.app_action_button.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-action-button', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7140 => [[['_route' => 'api.app_action_button_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-action-button-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7228 => [[['_route' => 'api.app_administration_snippet.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-administration-snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7307 => [[['_route' => 'api.app_cms_block.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7385 => [[['_route' => 'api.app_cms_block_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-cms-block-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7469 => [[['_route' => 'api.app_flow_action.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-flow-action', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7547 => [[['_route' => 'api.app_flow_action_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-flow-action-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7618 => [[['_route' => 'api.app_flow_event.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-flow-event', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7699 => [[['_route' => 'api.app_payment_method.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7787 => [[['_route' => 'api.app_script_condition.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-script-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7865 => [[['_route' => 'api.app_script_condition_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-script-condition-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7946 => [[['_route' => 'api.app_shipping_method.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8023 => [[['_route' => 'api.app_template.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8098 => [[['_route' => 'api.app_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8195 => [[['_route' => 'api.acl_role.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'acl-role', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        8260 => [[['_route' => 'api.acl_role.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'acl-role', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        8355 => [
            [['_route' => 'api.acl_user_role.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.acl_user_role.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.acl_user_role.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        8424 => [
            [['_route' => 'api.acl_user_role.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.acl_user_role.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        8451 => [[['_route' => 'api.script_endpoint', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Script\\Api\\ScriptApiRoute::execute'], ['hook'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        8571 => [[['_route' => 'api.custom_entity_entity.search-ids', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::searchIds'], ['entityName', 'path'], ['POST' => 0], null, false, true, null]],
        8636 => [[['_route' => 'api.custom_entity.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8710 => [[['_route' => 'api.custom_field.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8783 => [[['_route' => 'api.custom_field_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8858 => [[['_route' => 'api.custom_field_set_relation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8931 => [[['_route' => 'api.customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9008 => [[['_route' => 'api.customer_address.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9081 => [[['_route' => 'api.customer_group.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9177 => [[['_route' => 'api.customer_group_registration_sales_channels.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9255 => [[['_route' => 'api.currency.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9342 => [[['_route' => 'api.currency_country_rounding.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9418 => [[['_route' => 'api.currency_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9493 => [[['_route' => 'api.ce_entity.search-ids', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::searchIdsShorthand'], ['entityName', 'path'], ['POST' => 0], null, false, true, null]],
        9568 => [[['_route' => 'api.category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9641 => [[['_route' => 'api.category_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9716 => [[['_route' => 'api.category_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9795 => [[['_route' => 'api.cms_block.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9867 => [[['_route' => 'api.cms_page.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9945 => [[['_route' => 'api.cms_page_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10021 => [[['_route' => 'api.cms_section.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10093 => [[['_route' => 'api.cms_slot.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10172 => [[['_route' => 'api.cms_slot_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10250 => [[['_route' => 'api.country.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10329 => [[['_route' => 'api.country_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10408 => [[['_route' => 'api.country_state_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10486 => [[['_route' => 'api.country_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10570 => [[['_route' => 'api.acl_role.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'acl-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10646 => [[['_route' => 'api.acl_user_role.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10718 => [[['_route' => 'api.app.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10809 => [[['_route' => 'api.app_action_button.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-action-button', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10888 => [[['_route' => 'api.app_action_button_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-action-button-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10977 => [[['_route' => 'api.app_administration_snippet.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-administration-snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11057 => [[['_route' => 'api.app_cms_block.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11136 => [[['_route' => 'api.app_cms_block_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-cms-block-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11221 => [[['_route' => 'api.app_flow_action.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-flow-action', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11300 => [[['_route' => 'api.app_flow_action_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-flow-action-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11372 => [[['_route' => 'api.app_flow_event.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-flow-event', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11454 => [[['_route' => 'api.app_payment_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11543 => [[['_route' => 'api.app_script_condition.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-script-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11622 => [[['_route' => 'api.app_script_condition_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-script-condition-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11704 => [[['_route' => 'api.app_shipping_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11782 => [[['_route' => 'api.app_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11858 => [[['_route' => 'api.app_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11968 => [[['_route' => 'api.custom_entity_entity.search', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::search'], ['entityName', 'path'], ['POST' => 0], null, false, true, null]],
        12034 => [[['_route' => 'api.custom_entity.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12109 => [[['_route' => 'api.custom_field.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12183 => [[['_route' => 'api.custom_field_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12259 => [[['_route' => 'api.custom_field_set_relation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12333 => [[['_route' => 'api.customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12411 => [[['_route' => 'api.customer_address.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12485 => [[['_route' => 'api.customer_group.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12582 => [[['_route' => 'api.customer_group_registration_sales_channels.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12661 => [[['_route' => 'api.currency.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12749 => [[['_route' => 'api.currency_country_rounding.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12826 => [[['_route' => 'api.currency_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12902 => [[['_route' => 'api.ce_entity.search', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::searchShorthand'], ['entityName', 'path'], ['POST' => 0], null, false, true, null]],
        12978 => [[['_route' => 'api.category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13052 => [[['_route' => 'api.category_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13128 => [[['_route' => 'api.category_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13208 => [[['_route' => 'api.cms_block.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13281 => [[['_route' => 'api.cms_page.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13360 => [[['_route' => 'api.cms_page_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13437 => [[['_route' => 'api.cms_section.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13509 => [[['_route' => 'api.cms_slot.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13588 => [[['_route' => 'api.cms_slot_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13666 => [[['_route' => 'api.country.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13745 => [[['_route' => 'api.country_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13824 => [[['_route' => 'api.country_state_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13902 => [[['_route' => 'api.country_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13986 => [[['_route' => 'api.acl_role.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'acl-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14062 => [[['_route' => 'api.acl_user_role.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14134 => [[['_route' => 'api.app.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14225 => [[['_route' => 'api.app_action_button.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-action-button', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14304 => [[['_route' => 'api.app_action_button_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-action-button-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14393 => [[['_route' => 'api.app_administration_snippet.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-administration-snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14473 => [[['_route' => 'api.app_cms_block.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14552 => [[['_route' => 'api.app_cms_block_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-cms-block-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14637 => [[['_route' => 'api.app_flow_action.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-flow-action', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14716 => [[['_route' => 'api.app_flow_action_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-flow-action-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14788 => [[['_route' => 'api.app_flow_event.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-flow-event', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14870 => [[['_route' => 'api.app_payment_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14959 => [[['_route' => 'api.app_script_condition.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-script-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        15038 => [[['_route' => 'api.app_script_condition_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-script-condition-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        15120 => [[['_route' => 'api.app_shipping_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        15198 => [[['_route' => 'api.app_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        15274 => [[['_route' => 'api.app_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        15316 => [[['_route' => 'api.service.activate', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['api_service_toggle'], '_controller' => 'Shopware\\Core\\Service\\Api\\ServiceController::activate'], ['serviceName'], ['POST' => 0], null, false, true, null]],
        15345 => [[['_route' => 'api.service.deactivate', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['api_service_toggle'], '_controller' => 'Shopware\\Core\\Service\\Api\\ServiceController::deactivate'], ['serviceName'], ['POST' => 0], null, false, true, null]],
        15373 => [[['_route' => 'api.service.uninstall', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['api_service_toggle'], '_controller' => 'Shopware\\Core\\Service\\Api\\ServiceController::uninstall'], ['serviceName'], ['POST' => 0], null, false, true, null]],
        15494 => [[['_route' => 'api.custom_entity_entity.detail', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::detail'], ['entityName', 'path'], ['GET' => 0], null, false, true, null]],
        15567 => [
            [['_route' => 'api.custom_entity_entity.list', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::list'], ['entityName', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_entity_entity.create', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::create'], ['entityName', 'path'], ['POST' => 0], null, false, true, null],
        ],
        15655 => [
            [['_route' => 'api.custom_entity_entity.update', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::update'], ['entityName', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_entity_entity.delete', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::delete'], ['entityName', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        15739 => [
            [['_route' => 'api.custom_entity.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_entity.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_entity.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        15809 => [
            [['_route' => 'api.custom_entity.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_entity.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        15901 => [
            [['_route' => 'api.custom_field.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_field.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        15971 => [
            [['_route' => 'api.custom_field.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        16062 => [
            [['_route' => 'api.custom_field_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        16132 => [
            [['_route' => 'api.custom_field_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        16228 => [
            [['_route' => 'api.custom_field_set_relation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set_relation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set_relation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        16298 => [
            [['_route' => 'api.custom_field_set_relation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set_relation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        16390 => [
            [['_route' => 'api.customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        16460 => [
            [['_route' => 'api.customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        16558 => [
            [['_route' => 'api.customer_address.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_address.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_address.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        16628 => [
            [['_route' => 'api.customer_address.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_address.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        16720 => [
            [['_route' => 'api.customer_group.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        16790 => [
            [['_route' => 'api.customer_group.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        16910 => [
            [['_route' => 'api.customer_group_registration_sales_channels.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_registration_sales_channels.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_registration_sales_channels.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        16980 => [
            [['_route' => 'api.customer_group_registration_sales_channels.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_registration_sales_channels.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        17072 => [[['_route' => 'api.customer_group_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        17168 => [
            [['_route' => 'api.currency.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.currency.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        17238 => [
            [['_route' => 'api.currency.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        17346 => [
            [['_route' => 'api.currency_country_rounding.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency_country_rounding.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.currency_country_rounding.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        17416 => [
            [['_route' => 'api.currency_country_rounding.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency_country_rounding.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        17514 => [
            [['_route' => 'api.currency_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.currency_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        17584 => [
            [['_route' => 'api.currency_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        17679 => [[['_route' => 'api.ce_entity.detail', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::detailShorthand'], ['entityName', 'path'], ['GET' => 0], null, false, true, null]],
        17752 => [
            [['_route' => 'api.ce_entity.list', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::listShorthand'], ['entityName', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.ce_entity.create', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::createShorthand'], ['entityName', 'path'], ['POST' => 0], null, false, true, null],
        ],
        17840 => [
            [['_route' => 'api.ce_entity.update', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::updateShorthand'], ['entityName', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.ce_entity.delete', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::deleteShorthand'], ['entityName', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        17934 => [
            [['_route' => 'api.category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        18004 => [
            [['_route' => 'api.category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        18098 => [
            [['_route' => 'api.category_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        18168 => [
            [['_route' => 'api.category_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        18265 => [
            [['_route' => 'api.category_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        18335 => [
            [['_route' => 'api.category_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        18436 => [
            [['_route' => 'api.cms_block.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_block.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_block.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        18506 => [
            [['_route' => 'api.cms_block.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_block.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        18597 => [
            [['_route' => 'api.cms_page.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_page.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        18667 => [
            [['_route' => 'api.cms_page.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        18766 => [
            [['_route' => 'api.cms_page_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_page_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        18836 => [
            [['_route' => 'api.cms_page_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        18934 => [
            [['_route' => 'api.cms_section.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_section.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_section.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        19004 => [
            [['_route' => 'api.cms_section.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_section.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        19094 => [
            [['_route' => 'api.cms_slot.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        19164 => [
            [['_route' => 'api.cms_slot.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        19263 => [
            [['_route' => 'api.cms_slot_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        19333 => [
            [['_route' => 'api.cms_slot_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        19429 => [
            [['_route' => 'api.country.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        19499 => [
            [['_route' => 'api.country.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        19595 => [
            [['_route' => 'api.country_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        19665 => [
            [['_route' => 'api.country_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        19764 => [
            [['_route' => 'api.country_state_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_state_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        19834 => [
            [['_route' => 'api.country_state_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        19933 => [
            [['_route' => 'api.country_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        20003 => [
            [['_route' => 'api.country_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        20053 => [[['_route' => 'frontend.app-system.generate-token', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AppController::generateToken'], ['name'], ['POST' => 0], null, false, false, null]],
        20089 => [[['_route' => 'administration.plugin.index', '_routeScope' => ['administration'], 'auth_required' => false, '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::pluginIndex'], ['pluginName'], ['GET' => 0], null, false, false, null]],
        20126 => [[['_route' => 'frontend.account.order.single.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::orderSingleOverview'], ['deepLinkCode'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        20149 => [[['_route' => 'frontend.account.edit-order.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::editOrder'], ['orderId'], ['GET' => 0], null, false, true, null]],
        20175 => [[['_route' => 'frontend.account.edit-order.change-payment-method', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::orderChangePayment'], ['orderId'], ['POST' => 0], null, false, true, null]],
        20200 => [[['_route' => 'frontend.account.edit-order.update-order', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::updateOrder'], ['orderId'], ['POST' => 0], null, false, true, null]],
        20242 => [[['_route' => 'frontend.account.order.single.document', '_routeScope' => ['storefront'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\DocumentController::downloadDocument'], ['documentId', 'deepLinkCode'], ['GET' => 0], null, false, true, null]],
        20261 => [[['_route' => 'frontend.account.order.single.document.a11y', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\DocumentController::downloadDocument'], ['documentId', 'deepLinkCode', 'fileType'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        20296 => [[['_route' => 'frontend.account.order.single.download', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\DownloadController::downloadFile'], ['orderId', 'downloadId'], ['GET' => 0], null, false, true, null]],
        20327 => [[['_route' => 'frontend.account.address.edit.page', '_routeScope' => ['storefront'], '_loginRequired' => true, '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::accountEditAddress'], ['addressId'], ['GET' => 0], null, false, true, null]],
        20363 => [[['_route' => 'frontend.account.address.set-default-address', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::switchDefaultAddress'], ['type', 'addressId'], ['POST' => 0], null, false, true, null]],
        20379 => [[['_route' => 'frontend.account.address.switch-default', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::checkoutSwitchDefaultAddress'], [], ['POST' => 0], null, false, false, null]],
        20395 => [[['_route' => 'frontend.account.address.create', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::saveAddress'], [], ['POST' => 0], null, false, false, null]],
        20413 => [[['_route' => 'frontend.account.address.edit.save', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::saveAddress'], ['addressId'], ['POST' => 0], null, false, true, null]],
        20438 => [[['_route' => 'frontend.account.address.delete', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::deleteAddress'], ['addressId'], ['POST' => 0], null, false, true, null]],
        20511 => [[['_route' => 'store-api.app-system.generate-token', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppJWTGenerateRoute::generate'], ['name'], ['POST' => 0], null, false, false, null]],
        20563 => [[['_route' => 'store-api.account.set.payment-method', '_routeScope' => ['store-api'], '_contextTokenRequired' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangePaymentMethodRoute::change'], ['paymentMethodId'], ['POST' => 0], null, false, true, null]],
        20592 => [[['_route' => 'store-api.account.address.delete', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\DeleteAddressRoute::delete'], ['addressId'], ['DELETE' => 0], null, false, true, null]],
        20631 => [[['_route' => 'store-api.account.address.change.default.shipping', '_routeScope' => ['store-api'], 'type' => 'shipping', '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SwitchDefaultAddressRoute::swap'], ['addressId'], ['PATCH' => 0], null, false, true, null]],
        20657 => [[['_route' => 'store-api.account.address.change.default.billing', '_routeScope' => ['store-api'], 'type' => 'billing', '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SwitchDefaultAddressRoute::swap'], ['addressId'], ['PATCH' => 0], null, false, true, null]],
        20676 => [[['_route' => 'store-api.account.address.update', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\UpsertAddressRoute::upsert'], ['addressId'], ['PATCH' => 0], null, false, true, null]],
        20703 => [[['_route' => 'store-api.script_endpoint', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Framework\\Script\\Api\\ScriptStoreApiRoute::execute'], ['hook'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        20733 => [[['_route' => 'store-api.sitemap.file', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\Sitemap\\SalesChannel\\SitemapFileRoute::getSitemapFile'], ['filePath'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        20770 => [[['_route' => 'store-api.country.state', '_routeScope' => ['store-api'], '_entity' => 'country', '_controller' => 'Shopware\\Core\\System\\Country\\SalesChannel\\CountryStateRoute::load'], ['countryId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        20796 => [[['_route' => 'store-api.category.detail', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\Category\\SalesChannel\\CategoryRoute::load'], ['navigationId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        20817 => [[['_route' => 'store-api.cms.detail', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\Cms\\SalesChannel\\CmsRoute::load'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        20862 => [[['_route' => 'store-api.customer.wishlist.add', '_routeScope' => ['store-api'], '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\AddWishlistProductRoute::add'], ['productId'], ['POST' => 0], null, false, true, null]],
        20887 => [[['_route' => 'store-api.customer.wishlist.delete', '_routeScope' => ['store-api'], '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\RemoveWishlistProductRoute::delete'], ['productId'], ['DELETE' => 0], null, false, true, null]],
        20935 => [[['_route' => 'store-api.customer-group-registration.config', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\CustomerGroupRegistrationSettingsRoute::load'], ['customerGroupId'], ['GET' => 0], null, false, true, null]],
        20986 => [[['_route' => 'store-api.product.export', '_routeScope' => ['store-api'], 'auth_required' => false, '_controller' => 'Shopware\\Core\\Content\\ProductExport\\SalesChannel\\ExportController::index'], ['accessKey', 'fileName'], ['GET' => 0], null, false, true, null]],
        21012 => [[['_route' => 'store-api.product.listing', '_routeScope' => ['store-api'], '_entity' => 'product', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Listing\\ResolveCriteriaProductListingRoute::load'], ['categoryId'], ['POST' => 0], null, false, true, null]],
        21053 => [[['_route' => 'store-api.product.cross-selling', '_routeScope' => ['store-api'], '_entity' => 'product', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\CrossSelling\\ProductCrossSellingRoute::load'], ['productId'], ['POST' => 0], null, false, false, null]],
        21076 => [[['_route' => 'store-api.product.find-variant', '_routeScope' => ['store-api'], '_entity' => 'product', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\FindVariant\\FindProductVariantRoute::load'], ['productId'], ['POST' => 0], null, false, false, null]],
        21096 => [[['_route' => 'store-api.product-review.list', '_routeScope' => ['store-api'], '_entity' => 'product_review', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Review\\ProductReviewRoute::load'], ['productId'], ['POST' => 0], null, false, false, null]],
        21106 => [[['_route' => 'store-api.product-review.save', '_routeScope' => ['store-api'], '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Review\\ProductReviewSaveRoute::save'], ['productId'], ['POST' => 0], null, false, false, null]],
        21118 => [[['_route' => 'store-api.product.detail', '_routeScope' => ['store-api'], '_entity' => 'product', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Detail\\ProductDetailRoute::load'], ['productId'], ['POST' => 0], null, false, true, null]],
        21155 => [[['_route' => 'store-api.breadcrumb', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\Breadcrumb\\SalesChannel\\BreadcrumbRoute::load'], ['id'], ['GET' => 0], null, false, true, null]],
        21193 => [[['_route' => 'store-api.navigation', '_routeScope' => ['store-api'], '_entity' => 'category', '_controller' => 'Shopware\\Core\\Content\\Category\\SalesChannel\\TreeBuildingNavigationRoute::load'], ['activeId', 'rootId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        21225 => [[['_route' => 'store-api.landing-page.detail', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\LandingPage\\SalesChannel\\LandingPageRoute::load'], ['landingPageId'], ['POST' => 0], null, false, true, null]],
        21267 => [[['_route' => 'store-api.account.order.single.download', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\DownloadRoute::load'], ['orderId', 'downloadId'], ['GET' => 0], null, false, true, null]],
        21317 => [[['_route' => 'store-api.document.download', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_entity' => 'document', 'deepLinkCode' => '', '_controller' => 'Shopware\\Core\\Checkout\\Document\\SalesChannel\\DocumentRoute::download'], ['documentId', 'deepLinkCode'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        21345 => [[['_route' => 'frontend.script_endpoint', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ScriptController::execute'], ['hook'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        21376 => [[['_route' => 'frontend.sitemap.proxy', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\SitemapController::sitemapProxy'], ['filePath'], ['GET' => 0], null, false, true, null]],
        21434 => [[['_route' => 'widgets.account.order.detail', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::ajaxOrderDetail'], ['id'], ['GET' => 0], null, false, true, null]],
        21474 => [[['_route' => 'frontend.account.addressmanager', 'addressId' => null, '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::addressManagerUpsert'], ['addressId'], ['POST' => 0], null, false, true, null]],
        21505 => [[['_route' => 'frontend.cms.page', '_routeScope' => ['storefront'], 'id' => null, 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::page'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        21546 => [[['_route' => 'frontend.cms.navigation.page', '_routeScope' => ['storefront'], 'navigationId' => null, 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::category'], ['navigationId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        21572 => [[['_route' => 'frontend.cms.navigation.filter', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::filter'], ['navigationId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        21605 => [[['_route' => 'frontend.cms.buybox.switch', '_routeScope' => ['storefront'], 'productId' => null, 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::switchBuyBoxVariant'], ['productId'], ['GET' => 0], null, false, false, null]],
        21651 => [[['_route' => 'frontend.wishlist.product.delete', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::remove'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        21676 => [[['_route' => 'frontend.wishlist.product.add', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::ajaxAdd'], ['productId'], ['POST' => 0], null, false, true, null]],
        21709 => [[['_route' => 'frontend.wishlist.add.after.login', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::addAfterLogin'], ['productId'], ['GET' => 0], null, false, true, null]],
        21735 => [[['_route' => 'frontend.wishlist.product.remove', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::ajaxRemove'], ['productId'], ['POST' => 0], null, false, true, null]],
        21789 => [[['_route' => 'frontend.checkout.line-item.delete', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::deleteLineItem'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        21824 => [[['_route' => 'frontend.checkout.line-item.change-quantity', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::changeQuantity'], ['id'], ['POST' => 0], null, false, true, null]],
        21872 => [[['_route' => 'frontend.account.customer-group-registration.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::customerGroupRegistration'], ['customerGroupId'], ['GET' => 0], null, false, true, null]],
        21904 => [[['_route' => 'frontend.cms.page.full', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::pageFull'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        21939 => [[['_route' => 'frontend.detail.review.save', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::saveReview'], ['productId'], ['POST' => 0], null, false, false, null]],
        21955 => [[['_route' => 'frontend.product.reviews', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::loadReviews'], ['productId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        21988 => [[['_route' => 'frontend.landing.page', '_routeScope' => ['storefront'], '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\LandingPageController::index'], ['landingPageId'], ['GET' => 0], null, false, true, null]],
        22030 => [[['_route' => 'frontend.maintenance.singlepage', '_routeScope' => ['storefront'], 'allow_maintenance' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\MaintenanceController::renderSinglePage'], ['id'], ['GET' => 0], null, false, true, null]],
        22060 => [[['_route' => 'frontend.navigation.page', '_routeScope' => ['storefront'], '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\NavigationController::index'], ['navigationId'], ['GET' => 0], null, false, true, null]],
        22089 => [[['_route' => 'frontend.detail.page', '_routeScope' => ['storefront'], '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::index'], ['productId'], ['GET' => 0], null, false, true, null]],
        22106 => [[['_route' => 'frontend.detail.switch', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::switch'], ['productId'], ['GET' => 0], null, false, false, null]],
        22136 => [[['_route' => 'widgets.quickview.minimal', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::quickviewMinimal'], ['productId'], ['GET' => 0], null, false, true, null]],
        22257 => [
            [['_route' => 'api.customer_group_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        22327 => [
            [['_route' => 'api.customer_group_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        22422 => [
            [['_route' => 'api.customer_recovery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_recovery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_recovery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        22492 => [
            [['_route' => 'api.customer_recovery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_recovery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        22582 => [
            [['_route' => 'api.customer_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        22652 => [
            [['_route' => 'api.customer_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        22747 => [
            [['_route' => 'api.customer_wishlist.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        22817 => [
            [['_route' => 'api.customer_wishlist.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        22912 => [
            [['_route' => 'api.customer_wishlist_product.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist_product.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist_product.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        22982 => [
            [['_route' => 'api.customer_wishlist_product.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist_product.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        23096 => [[['_route' => 'api.customer_group_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23170 => [[['_route' => 'api.customer_recovery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23239 => [[['_route' => 'api.customer_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23316 => [[['_route' => 'api.customer_wishlist.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23391 => [[['_route' => 'api.customer_wishlist_product.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23479 => [[['_route' => 'api.delivery_time.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23558 => [[['_route' => 'api.delivery_time_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23635 => [[['_route' => 'api.document.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23721 => [[['_route' => 'api.document_base_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23803 => [[['_route' => 'api.document_base_config_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23877 => [[['_route' => 'api.document_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23956 => [[['_route' => 'api.document_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24033 => [[['_route' => 'api.flow.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24112 => [[['_route' => 'api.flow_sequence.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24186 => [[['_route' => 'api.flow_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24280 => [[['_route' => 'api.import_export_file.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24349 => [[['_route' => 'api.import_export_log.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24425 => [[['_route' => 'api.import_export_profile.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24504 => [[['_route' => 'api.import_export_profile_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24585 => [[['_route' => 'api.integration.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24657 => [[['_route' => 'api.integration_role.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24747 => [[['_route' => 'api.landing_page.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24832 => [[['_route' => 'api.landing_page_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24904 => [[['_route' => 'api.landing_page_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24980 => [[['_route' => 'api.landing_page_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25054 => [[['_route' => 'api.language.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25132 => [[['_route' => 'api.locale.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25211 => [[['_route' => 'api.locale_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25286 => [[['_route' => 'api.log_entry.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25386 => [[['_route' => 'api.mail_header_footer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25465 => [[['_route' => 'api.mail_header_footer_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25543 => [[['_route' => 'api.mail_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25619 => [[['_route' => 'api.mail_template_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25699 => [[['_route' => 'api.mail_template_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25771 => [[['_route' => 'api.mail_template_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25850 => [[['_route' => 'api.mail_template_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25932 => [[['_route' => 'api.main_category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26006 => [[['_route' => 'api.media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26092 => [[['_route' => 'api.media_default_folder.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26167 => [[['_route' => 'api.media_folder.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26251 => [[['_route' => 'api.media_folder_configuration.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26341 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26415 => [[['_route' => 'api.media_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26492 => [[['_route' => 'api.media_thumbnail.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26564 => [[['_route' => 'api.media_thumbnail_size.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26641 => [[['_route' => 'api.media_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26738 => [[['_route' => 'api.newsletter_recipient.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26809 => [[['_route' => 'api.newsletter_recipient_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26887 => [[['_route' => 'api.notification.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26968 => [[['_route' => 'api.number_range.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27056 => [[['_route' => 'api.number_range_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27126 => [[['_route' => 'api.number_range_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27207 => [[['_route' => 'api.number_range_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27279 => [[['_route' => 'api.number_range_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27358 => [[['_route' => 'api.number_range_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27437 => [[['_route' => 'api.order.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27515 => [[['_route' => 'api.order_address.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27589 => [[['_route' => 'api.order_customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27666 => [[['_route' => 'api.order_delivery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27742 => [[['_route' => 'api.order_delivery_position.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27852 => [[['_route' => 'api.customer_group_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27926 => [[['_route' => 'api.customer_recovery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27995 => [[['_route' => 'api.customer_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28072 => [[['_route' => 'api.customer_wishlist.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28147 => [[['_route' => 'api.customer_wishlist_product.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28235 => [[['_route' => 'api.delivery_time.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28314 => [[['_route' => 'api.delivery_time_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28391 => [[['_route' => 'api.document.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28477 => [[['_route' => 'api.document_base_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28559 => [[['_route' => 'api.document_base_config_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28633 => [[['_route' => 'api.document_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28712 => [[['_route' => 'api.document_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28789 => [[['_route' => 'api.flow.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28868 => [[['_route' => 'api.flow_sequence.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28942 => [[['_route' => 'api.flow_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29036 => [[['_route' => 'api.import_export_file.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29105 => [[['_route' => 'api.import_export_log.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29181 => [[['_route' => 'api.import_export_profile.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29260 => [[['_route' => 'api.import_export_profile_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29341 => [[['_route' => 'api.integration.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29413 => [[['_route' => 'api.integration_role.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29503 => [[['_route' => 'api.landing_page.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29588 => [[['_route' => 'api.landing_page_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29660 => [[['_route' => 'api.landing_page_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29736 => [[['_route' => 'api.landing_page_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29810 => [[['_route' => 'api.language.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29888 => [[['_route' => 'api.locale.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29967 => [[['_route' => 'api.locale_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30042 => [[['_route' => 'api.log_entry.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30142 => [[['_route' => 'api.mail_header_footer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30221 => [[['_route' => 'api.mail_header_footer_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30299 => [[['_route' => 'api.mail_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30375 => [[['_route' => 'api.mail_template_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30455 => [[['_route' => 'api.mail_template_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30527 => [[['_route' => 'api.mail_template_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30606 => [[['_route' => 'api.mail_template_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30688 => [[['_route' => 'api.main_category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30762 => [[['_route' => 'api.media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30848 => [[['_route' => 'api.media_default_folder.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30923 => [[['_route' => 'api.media_folder.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31007 => [[['_route' => 'api.media_folder_configuration.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31097 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31171 => [[['_route' => 'api.media_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31248 => [[['_route' => 'api.media_thumbnail.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31320 => [[['_route' => 'api.media_thumbnail_size.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31397 => [[['_route' => 'api.media_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31494 => [[['_route' => 'api.newsletter_recipient.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31565 => [[['_route' => 'api.newsletter_recipient_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31643 => [[['_route' => 'api.notification.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31724 => [[['_route' => 'api.number_range.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31812 => [[['_route' => 'api.number_range_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31882 => [[['_route' => 'api.number_range_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31963 => [[['_route' => 'api.number_range_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32035 => [[['_route' => 'api.number_range_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32114 => [[['_route' => 'api.number_range_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32193 => [[['_route' => 'api.order.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32271 => [[['_route' => 'api.order_address.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32345 => [[['_route' => 'api.order_customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32422 => [[['_route' => 'api.order_delivery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32498 => [[['_route' => 'api.order_delivery_position.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32613 => [[['_route' => 'api.customer_group_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32687 => [[['_route' => 'api.customer_recovery.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32756 => [[['_route' => 'api.customer_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32833 => [[['_route' => 'api.customer_wishlist.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32908 => [[['_route' => 'api.customer_wishlist_product.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32996 => [[['_route' => 'api.delivery_time.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33075 => [[['_route' => 'api.delivery_time_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33152 => [[['_route' => 'api.document.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33238 => [[['_route' => 'api.document_base_config.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33320 => [[['_route' => 'api.document_base_config_sales_channel.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33394 => [[['_route' => 'api.document_type.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33473 => [[['_route' => 'api.document_type_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33550 => [[['_route' => 'api.flow.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33629 => [[['_route' => 'api.flow_sequence.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33703 => [[['_route' => 'api.flow_template.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33797 => [[['_route' => 'api.import_export_file.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33866 => [[['_route' => 'api.import_export_log.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33942 => [[['_route' => 'api.import_export_profile.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34021 => [[['_route' => 'api.import_export_profile_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34102 => [[['_route' => 'api.integration.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34174 => [[['_route' => 'api.integration_role.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34264 => [[['_route' => 'api.landing_page.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34349 => [[['_route' => 'api.landing_page_sales_channel.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34421 => [[['_route' => 'api.landing_page_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34497 => [[['_route' => 'api.landing_page_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34571 => [[['_route' => 'api.language.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34649 => [[['_route' => 'api.locale.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34728 => [[['_route' => 'api.locale_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34803 => [[['_route' => 'api.log_entry.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34903 => [[['_route' => 'api.mail_header_footer.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34982 => [[['_route' => 'api.mail_header_footer_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35060 => [[['_route' => 'api.mail_template.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35136 => [[['_route' => 'api.mail_template_media.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35216 => [[['_route' => 'api.mail_template_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35288 => [[['_route' => 'api.mail_template_type.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35367 => [[['_route' => 'api.mail_template_type_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35449 => [[['_route' => 'api.main_category.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35523 => [[['_route' => 'api.media.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35609 => [[['_route' => 'api.media_default_folder.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35684 => [[['_route' => 'api.media_folder.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35768 => [[['_route' => 'api.media_folder_configuration.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35858 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35932 => [[['_route' => 'api.media_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36009 => [[['_route' => 'api.media_thumbnail.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36081 => [[['_route' => 'api.media_thumbnail_size.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36158 => [[['_route' => 'api.media_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36255 => [[['_route' => 'api.newsletter_recipient.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36326 => [[['_route' => 'api.newsletter_recipient_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36404 => [[['_route' => 'api.notification.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36485 => [[['_route' => 'api.number_range.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36573 => [[['_route' => 'api.number_range_sales_channel.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36643 => [[['_route' => 'api.number_range_state.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36724 => [[['_route' => 'api.number_range_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36796 => [[['_route' => 'api.number_range_type.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36875 => [[['_route' => 'api.number_range_type_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36954 => [[['_route' => 'api.order.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37032 => [[['_route' => 'api.order_address.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37106 => [[['_route' => 'api.order_customer.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37180 => [[['_route' => 'api.order_delivery.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37285 => [
            [['_route' => 'api.delivery_time.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        37355 => [
            [['_route' => 'api.delivery_time.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        37454 => [
            [['_route' => 'api.delivery_time_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        37524 => [
            [['_route' => 'api.delivery_time_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        37619 => [
            [['_route' => 'api.document.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        37689 => [
            [['_route' => 'api.document.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        37792 => [
            [['_route' => 'api.document_base_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        37862 => [
            [['_route' => 'api.document_base_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        37964 => [
            [['_route' => 'api.document_base_config_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        38034 => [
            [['_route' => 'api.document_base_config_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        38126 => [
            [['_route' => 'api.document_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        38196 => [
            [['_route' => 'api.document_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        38295 => [
            [['_route' => 'api.document_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        38365 => [
            [['_route' => 'api.document_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        38460 => [
            [['_route' => 'api.flow.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.flow.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        38530 => [
            [['_route' => 'api.flow.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        38629 => [
            [['_route' => 'api.flow_sequence.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow_sequence.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.flow_sequence.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        38699 => [
            [['_route' => 'api.flow_sequence.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow_sequence.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        38794 => [
            [['_route' => 'api.flow_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.flow_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        38864 => [
            [['_route' => 'api.flow_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        38979 => [
            [['_route' => 'api.import_export_file.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_file.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_file.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        39049 => [
            [['_route' => 'api.import_export_file.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_file.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        39139 => [
            [['_route' => 'api.import_export_log.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_log.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_log.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        39209 => [
            [['_route' => 'api.import_export_log.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_log.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        39303 => [
            [['_route' => 'api.import_export_profile.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        39373 => [
            [['_route' => 'api.import_export_profile.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        39472 => [
            [['_route' => 'api.import_export_profile_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        39542 => [
            [['_route' => 'api.import_export_profile_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        39641 => [
            [['_route' => 'api.integration.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.integration.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        39708 => [[['_route' => 'api.integration.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        39799 => [
            [['_route' => 'api.integration_role.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.integration_role.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.integration_role.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        39869 => [
            [['_route' => 'api.integration_role.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.integration_role.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        39977 => [
            [['_route' => 'api.landing_page.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.landing_page.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        40047 => [
            [['_route' => 'api.landing_page.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        40152 => [
            [['_route' => 'api.landing_page_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        40222 => [
            [['_route' => 'api.landing_page_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        40315 => [
            [['_route' => 'api.landing_page_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        40385 => [
            [['_route' => 'api.landing_page_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        40482 => [
            [['_route' => 'api.landing_page_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        40552 => [
            [['_route' => 'api.landing_page_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        40647 => [
            [['_route' => 'api.language.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.language.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.language.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        40717 => [
            [['_route' => 'api.language.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.language.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        40813 => [
            [['_route' => 'api.locale.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.locale.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        40883 => [
            [['_route' => 'api.locale.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        40982 => [
            [['_route' => 'api.locale_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.locale_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        41052 => [
            [['_route' => 'api.locale_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        41148 => [
            [['_route' => 'api.log_entry.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.log_entry.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.log_entry.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        41218 => [
            [['_route' => 'api.log_entry.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.log_entry.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        41336 => [
            [['_route' => 'api.mail_header_footer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        41406 => [
            [['_route' => 'api.mail_header_footer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        41505 => [
            [['_route' => 'api.mail_header_footer_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        41575 => [
            [['_route' => 'api.mail_header_footer_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        41671 => [
            [['_route' => 'api.mail_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        41741 => [
            [['_route' => 'api.mail_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        41837 => [
            [['_route' => 'api.mail_template_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        41907 => [
            [['_route' => 'api.mail_template_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        42008 => [
            [['_route' => 'api.mail_template_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        42078 => [
            [['_route' => 'api.mail_template_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        42168 => [
            [['_route' => 'api.mail_template_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        42238 => [
            [['_route' => 'api.mail_template_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        42337 => [
            [['_route' => 'api.mail_template_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        42407 => [
            [['_route' => 'api.mail_template_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        42510 => [
            [['_route' => 'api.main_category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.main_category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.main_category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        42580 => [
            [['_route' => 'api.main_category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.main_category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        42672 => [
            [['_route' => 'api.media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        42742 => [
            [['_route' => 'api.media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        42848 => [
            [['_route' => 'api.media_default_folder.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_default_folder.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_default_folder.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        42918 => [
            [['_route' => 'api.media_default_folder.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_default_folder.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        43011 => [
            [['_route' => 'api.media_folder.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        43081 => [
            [['_route' => 'api.media_folder.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        43182 => [
            [['_route' => 'api.media_folder_configuration.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        43252 => [
            [['_route' => 'api.media_folder_configuration.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        43362 => [
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        43432 => [
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        43527 => [
            [['_route' => 'api.media_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        43597 => [
            [['_route' => 'api.media_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        43692 => [
            [['_route' => 'api.media_thumbnail.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        43762 => [
            [['_route' => 'api.media_thumbnail.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        43854 => [
            [['_route' => 'api.media_thumbnail_size.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail_size.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail_size.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        43924 => [
            [['_route' => 'api.media_thumbnail_size.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail_size.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44022 => [
            [['_route' => 'api.media_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44092 => [
            [['_route' => 'api.media_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44207 => [
            [['_route' => 'api.newsletter_recipient.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44277 => [
            [['_route' => 'api.newsletter_recipient.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44368 => [
            [['_route' => 'api.newsletter_recipient_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44438 => [
            [['_route' => 'api.newsletter_recipient_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44537 => [
            [['_route' => 'api.notification.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.notification.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.notification.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44607 => [
            [['_route' => 'api.notification.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.notification.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44706 => [
            [['_route' => 'api.number_range.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44776 => [
            [['_route' => 'api.number_range.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44884 => [
            [['_route' => 'api.number_range_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44954 => [
            [['_route' => 'api.number_range_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45045 => [
            [['_route' => 'api.number_range_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45115 => [
            [['_route' => 'api.number_range_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45217 => [
            [['_route' => 'api.number_range_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45287 => [
            [['_route' => 'api.number_range_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45377 => [
            [['_route' => 'api.number_range_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45447 => [
            [['_route' => 'api.number_range_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45546 => [
            [['_route' => 'api.number_range_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45616 => [
            [['_route' => 'api.number_range_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45713 => [
            [['_route' => 'api.order.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45783 => [
            [['_route' => 'api.order.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45881 => [
            [['_route' => 'api.order_address.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_address.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_address.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45951 => [
            [['_route' => 'api.order_address.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_address.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46046 => [
            [['_route' => 'api.order_customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46116 => [
            [['_route' => 'api.order_customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46211 => [
            [['_route' => 'api.order_delivery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46281 => [
            [['_route' => 'api.order_delivery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46377 => [
            [['_route' => 'api.order_delivery_position.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery_position.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery_position.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46444 => [[['_route' => 'api.order_delivery_position.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        46556 => [[['_route' => 'api.order_delivery_position.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        46635 => [[['_route' => 'api.order_line_item.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        46711 => [[['_route' => 'api.order_line_item_download.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        46784 => [[['_route' => 'api.order_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        46863 => [[['_route' => 'api.order_transaction.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        46941 => [[['_route' => 'api.order_transaction_capture.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        47018 => [[['_route' => 'api.order_transaction_capture_refund.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        47094 => [[['_route' => 'api.order_transaction_capture_refund_position.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        47186 => [[['_route' => 'api.payment_method.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        47265 => [[['_route' => 'api.payment_method_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        47340 => [[['_route' => 'api.plugin.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        47419 => [[['_route' => 'api.plugin_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        47498 => [[['_route' => 'api.product.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        47583 => [[['_route' => 'api.product_category.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        47655 => [[['_route' => 'api.product_category_tree.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        47742 => [[['_route' => 'api.product_configurator_setting.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        47824 => [[['_route' => 'api.product_cross_selling.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        47913 => [[['_route' => 'api.product_cross_selling_assigned_products.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        47990 => [[['_route' => 'api.product_cross_selling_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48075 => [[['_route' => 'api.product_custom_field_set.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48150 => [[['_route' => 'api.product_download.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48222 => [[['_route' => 'api.product_export.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48303 => [[['_route' => 'api.product_feature_set.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48382 => [[['_route' => 'api.product_feature_set_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48468 => [[['_route' => 'api.product_keyword_dictionary.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48552 => [[['_route' => 'api.product_manufacturer.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48631 => [[['_route' => 'api.product_manufacturer_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48702 => [[['_route' => 'api.product_media.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48775 => [[['_route' => 'api.product_option.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48849 => [[['_route' => 'api.product_price.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48921 => [[['_route' => 'api.product_property.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48994 => [[['_route' => 'api.product_review.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49083 => [[['_route' => 'api.product_search_config.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49156 => [[['_route' => 'api.product_search_config_field.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49230 => [[['_route' => 'api.product_search_keyword.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49306 => [[['_route' => 'api.product_sorting.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49385 => [[['_route' => 'api.product_sorting_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49460 => [[['_route' => 'api.product_stream.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49537 => [[['_route' => 'api.product_stream_filter.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49610 => [[['_route' => 'api.product_stream_mapping.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49687 => [[['_route' => 'api.product_stream_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49762 => [[['_route' => 'api.product_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49838 => [[['_route' => 'api.product_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49915 => [[['_route' => 'api.product_visibility.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49992 => [[['_route' => 'api.promotion.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50073 => [[['_route' => 'api.promotion_cart_rule.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50150 => [[['_route' => 'api.promotion_discount.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50227 => [[['_route' => 'api.promotion_discount_prices.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50297 => [[['_route' => 'api.promotion_discount_rule.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50381 => [[['_route' => 'api.promotion_individual_code.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50458 => [[['_route' => 'api.promotion_order_rule.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50544 => [[['_route' => 'api.promotion_persona_customer.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50614 => [[['_route' => 'api.promotion_persona_rule.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50698 => [[['_route' => 'api.promotion_sales_channel.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50774 => [[['_route' => 'api.promotion_setgroup.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50846 => [[['_route' => 'api.promotion_setgroup_rule.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50925 => [[['_route' => 'api.promotion_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51008 => [[['_route' => 'api.property_group.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51085 => [[['_route' => 'api.property_group_option.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51164 => [[['_route' => 'api.property_group_option_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51263 => [[['_route' => 'api.order_delivery_position.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51358 => [
            [['_route' => 'api.order_line_item.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        51428 => [
            [['_route' => 'api.order_line_item.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        51524 => [
            [['_route' => 'api.order_line_item_download.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item_download.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item_download.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        51594 => [
            [['_route' => 'api.order_line_item_download.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item_download.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        51688 => [
            [['_route' => 'api.order_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        51758 => [
            [['_route' => 'api.order_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        51855 => [
            [['_route' => 'api.order_transaction.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        51925 => [
            [['_route' => 'api.order_transaction.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        52020 => [
            [['_route' => 'api.order_transaction_capture.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        52090 => [
            [['_route' => 'api.order_transaction_capture.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        52184 => [
            [['_route' => 'api.order_transaction_capture_refund.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        52254 => [
            [['_route' => 'api.order_transaction_capture_refund.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        52350 => [
            [['_route' => 'api.order_transaction_capture_refund_position.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund_position.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund_position.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        52420 => [
            [['_route' => 'api.order_transaction_capture_refund_position.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund_position.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        52529 => [[['_route' => 'api.order_line_item.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52605 => [[['_route' => 'api.order_line_item_download.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52678 => [[['_route' => 'api.order_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52757 => [[['_route' => 'api.order_transaction.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52835 => [[['_route' => 'api.order_transaction_capture.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52912 => [[['_route' => 'api.order_transaction_capture_refund.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52988 => [[['_route' => 'api.order_transaction_capture_refund_position.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53080 => [[['_route' => 'api.payment_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53159 => [[['_route' => 'api.payment_method_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53234 => [[['_route' => 'api.plugin.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53313 => [[['_route' => 'api.plugin_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53392 => [[['_route' => 'api.product.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53477 => [[['_route' => 'api.product_category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53549 => [[['_route' => 'api.product_category_tree.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53636 => [[['_route' => 'api.product_configurator_setting.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53718 => [[['_route' => 'api.product_cross_selling.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53807 => [[['_route' => 'api.product_cross_selling_assigned_products.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53884 => [[['_route' => 'api.product_cross_selling_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53969 => [[['_route' => 'api.product_custom_field_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54044 => [[['_route' => 'api.product_download.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54116 => [[['_route' => 'api.product_export.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54197 => [[['_route' => 'api.product_feature_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54276 => [[['_route' => 'api.product_feature_set_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54362 => [[['_route' => 'api.product_keyword_dictionary.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54446 => [[['_route' => 'api.product_manufacturer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54525 => [[['_route' => 'api.product_manufacturer_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54596 => [[['_route' => 'api.product_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54669 => [[['_route' => 'api.product_option.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54743 => [[['_route' => 'api.product_price.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54815 => [[['_route' => 'api.product_property.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54888 => [[['_route' => 'api.product_review.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54977 => [[['_route' => 'api.product_search_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55050 => [[['_route' => 'api.product_search_config_field.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55124 => [[['_route' => 'api.product_search_keyword.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55200 => [[['_route' => 'api.product_sorting.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55279 => [[['_route' => 'api.product_sorting_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55354 => [[['_route' => 'api.product_stream.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55431 => [[['_route' => 'api.product_stream_filter.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55504 => [[['_route' => 'api.product_stream_mapping.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55581 => [[['_route' => 'api.product_stream_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55656 => [[['_route' => 'api.product_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55732 => [[['_route' => 'api.product_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55809 => [[['_route' => 'api.product_visibility.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55886 => [[['_route' => 'api.promotion.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55967 => [[['_route' => 'api.promotion_cart_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56044 => [[['_route' => 'api.promotion_discount.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56121 => [[['_route' => 'api.promotion_discount_prices.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56191 => [[['_route' => 'api.promotion_discount_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56275 => [[['_route' => 'api.promotion_individual_code.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56352 => [[['_route' => 'api.promotion_order_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56438 => [[['_route' => 'api.promotion_persona_customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56508 => [[['_route' => 'api.promotion_persona_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56592 => [[['_route' => 'api.promotion_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56668 => [[['_route' => 'api.promotion_setgroup.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56740 => [[['_route' => 'api.promotion_setgroup_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56819 => [[['_route' => 'api.promotion_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56902 => [[['_route' => 'api.property_group.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56979 => [[['_route' => 'api.property_group_option.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57058 => [[['_route' => 'api.property_group_option_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57161 => [[['_route' => 'api.order_line_item.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57237 => [[['_route' => 'api.order_line_item_download.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57310 => [[['_route' => 'api.order_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57389 => [[['_route' => 'api.order_transaction.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57467 => [[['_route' => 'api.order_transaction_capture.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57544 => [[['_route' => 'api.order_transaction_capture_refund.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57620 => [[['_route' => 'api.order_transaction_capture_refund_position.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57712 => [[['_route' => 'api.payment_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57791 => [[['_route' => 'api.payment_method_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57866 => [[['_route' => 'api.plugin.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57945 => [[['_route' => 'api.plugin_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58024 => [[['_route' => 'api.product.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58109 => [[['_route' => 'api.product_category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58181 => [[['_route' => 'api.product_category_tree.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58268 => [[['_route' => 'api.product_configurator_setting.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58350 => [[['_route' => 'api.product_cross_selling.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58439 => [[['_route' => 'api.product_cross_selling_assigned_products.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58516 => [[['_route' => 'api.product_cross_selling_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58601 => [[['_route' => 'api.product_custom_field_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58676 => [[['_route' => 'api.product_download.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58748 => [[['_route' => 'api.product_export.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58829 => [[['_route' => 'api.product_feature_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58908 => [[['_route' => 'api.product_feature_set_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58994 => [[['_route' => 'api.product_keyword_dictionary.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59078 => [[['_route' => 'api.product_manufacturer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59157 => [[['_route' => 'api.product_manufacturer_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59228 => [[['_route' => 'api.product_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59301 => [[['_route' => 'api.product_option.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59375 => [[['_route' => 'api.product_price.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59447 => [[['_route' => 'api.product_property.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59520 => [[['_route' => 'api.product_review.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59609 => [[['_route' => 'api.product_search_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59682 => [[['_route' => 'api.product_search_config_field.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59756 => [[['_route' => 'api.product_search_keyword.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59832 => [[['_route' => 'api.product_sorting.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59911 => [[['_route' => 'api.product_sorting_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59986 => [[['_route' => 'api.product_stream.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60063 => [[['_route' => 'api.product_stream_filter.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60136 => [[['_route' => 'api.product_stream_mapping.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60213 => [[['_route' => 'api.product_stream_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60288 => [[['_route' => 'api.product_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60364 => [[['_route' => 'api.product_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60441 => [[['_route' => 'api.product_visibility.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60518 => [[['_route' => 'api.promotion.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60599 => [[['_route' => 'api.promotion_cart_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60676 => [[['_route' => 'api.promotion_discount.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60753 => [[['_route' => 'api.promotion_discount_prices.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60823 => [[['_route' => 'api.promotion_discount_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60907 => [[['_route' => 'api.promotion_individual_code.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60984 => [[['_route' => 'api.promotion_order_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61070 => [[['_route' => 'api.promotion_persona_customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61140 => [[['_route' => 'api.promotion_persona_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61224 => [[['_route' => 'api.promotion_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61300 => [[['_route' => 'api.promotion_setgroup.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61372 => [[['_route' => 'api.promotion_setgroup_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61451 => [[['_route' => 'api.promotion_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61534 => [[['_route' => 'api.property_group.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61611 => [[['_route' => 'api.property_group_option.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61690 => [[['_route' => 'api.property_group_option_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61799 => [
            [['_route' => 'api.payment_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.payment_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        61869 => [
            [['_route' => 'api.payment_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        61968 => [
            [['_route' => 'api.payment_method_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.payment_method_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        62038 => [
            [['_route' => 'api.payment_method_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        62131 => [
            [['_route' => 'api.plugin.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.plugin.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        62201 => [
            [['_route' => 'api.plugin.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        62300 => [
            [['_route' => 'api.plugin_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.plugin_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        62370 => [
            [['_route' => 'api.plugin_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        62467 => [
            [['_route' => 'api.product.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        62537 => [
            [['_route' => 'api.product.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        62639 => [
            [['_route' => 'api.product_category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        62709 => [
            [['_route' => 'api.product_category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        62801 => [
            [['_route' => 'api.product_category_tree.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category_tree.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_category_tree.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        62871 => [
            [['_route' => 'api.product_category_tree.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category_tree.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        62979 => [
            [['_route' => 'api.product_configurator_setting.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_configurator_setting.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_configurator_setting.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        63049 => [
            [['_route' => 'api.product_configurator_setting.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_configurator_setting.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        63149 => [
            [['_route' => 'api.product_cross_selling.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        63219 => [
            [['_route' => 'api.product_cross_selling.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        63328 => [
            [['_route' => 'api.product_cross_selling_assigned_products.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_assigned_products.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_assigned_products.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        63398 => [
            [['_route' => 'api.product_cross_selling_assigned_products.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_assigned_products.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        63496 => [
            [['_route' => 'api.product_cross_selling_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        63566 => [
            [['_route' => 'api.product_cross_selling_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        63672 => [
            [['_route' => 'api.product_custom_field_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_custom_field_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_custom_field_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        63742 => [
            [['_route' => 'api.product_custom_field_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_custom_field_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        63838 => [
            [['_route' => 'api.product_download.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_download.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_download.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        63908 => [
            [['_route' => 'api.product_download.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_download.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64001 => [
            [['_route' => 'api.product_export.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_export.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_export.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64071 => [
            [['_route' => 'api.product_export.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_export.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64170 => [
            [['_route' => 'api.product_feature_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64240 => [
            [['_route' => 'api.product_feature_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64339 => [
            [['_route' => 'api.product_feature_set_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64409 => [
            [['_route' => 'api.product_feature_set_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64516 => [
            [['_route' => 'api.product_keyword_dictionary.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_keyword_dictionary.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_keyword_dictionary.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64586 => [
            [['_route' => 'api.product_keyword_dictionary.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_keyword_dictionary.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64688 => [
            [['_route' => 'api.product_manufacturer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64758 => [
            [['_route' => 'api.product_manufacturer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64857 => [
            [['_route' => 'api.product_manufacturer_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64927 => [
            [['_route' => 'api.product_manufacturer_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65019 => [
            [['_route' => 'api.product_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65089 => [
            [['_route' => 'api.product_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65183 => [
            [['_route' => 'api.product_option.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_option.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_option.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65253 => [
            [['_route' => 'api.product_option.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_option.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65348 => [
            [['_route' => 'api.product_price.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_price.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_price.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65418 => [
            [['_route' => 'api.product_price.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_price.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65511 => [
            [['_route' => 'api.product_property.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_property.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_property.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65581 => [
            [['_route' => 'api.product_property.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_property.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65675 => [
            [['_route' => 'api.product_review.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_review.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_review.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65745 => [
            [['_route' => 'api.product_review.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_review.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65852 => [
            [['_route' => 'api.product_search_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65922 => [
            [['_route' => 'api.product_search_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66015 => [
            [['_route' => 'api.product_search_config_field.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config_field.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config_field.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66085 => [
            [['_route' => 'api.product_search_config_field.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config_field.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66180 => [
            [['_route' => 'api.product_search_keyword.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_keyword.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_search_keyword.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66250 => [
            [['_route' => 'api.product_search_keyword.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_keyword.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66344 => [
            [['_route' => 'api.product_sorting.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66414 => [
            [['_route' => 'api.product_sorting.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66513 => [
            [['_route' => 'api.product_sorting_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66583 => [
            [['_route' => 'api.product_sorting_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66676 => [
            [['_route' => 'api.product_stream.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66746 => [
            [['_route' => 'api.product_stream.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66843 => [
            [['_route' => 'api.product_stream_filter.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_filter.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_filter.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66913 => [
            [['_route' => 'api.product_stream_filter.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_filter.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67007 => [
            [['_route' => 'api.product_stream_mapping.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_mapping.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_mapping.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67077 => [
            [['_route' => 'api.product_stream_mapping.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_mapping.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67175 => [
            [['_route' => 'api.product_stream_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67245 => [
            [['_route' => 'api.product_stream_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67341 => [
            [['_route' => 'api.product_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67411 => [
            [['_route' => 'api.product_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67508 => [
            [['_route' => 'api.product_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67578 => [
            [['_route' => 'api.product_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67676 => [
            [['_route' => 'api.product_visibility.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_visibility.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_visibility.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67746 => [
            [['_route' => 'api.product_visibility.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_visibility.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67841 => [
            [['_route' => 'api.promotion.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67911 => [
            [['_route' => 'api.promotion.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68012 => [
            [['_route' => 'api.promotion_cart_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_cart_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_cart_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68082 => [
            [['_route' => 'api.promotion_cart_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_cart_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68177 => [
            [['_route' => 'api.promotion_discount.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68247 => [
            [['_route' => 'api.promotion_discount.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68344 => [
            [['_route' => 'api.promotion_discount_prices.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_prices.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_prices.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68414 => [
            [['_route' => 'api.promotion_discount_prices.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_prices.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68505 => [
            [['_route' => 'api.promotion_discount_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68575 => [
            [['_route' => 'api.promotion_discount_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68680 => [
            [['_route' => 'api.promotion_individual_code.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_individual_code.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_individual_code.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68750 => [
            [['_route' => 'api.promotion_individual_code.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_individual_code.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68848 => [
            [['_route' => 'api.promotion_order_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_order_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_order_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68918 => [
            [['_route' => 'api.promotion_order_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_order_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69025 => [
            [['_route' => 'api.promotion_persona_customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69095 => [
            [['_route' => 'api.promotion_persona_customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69186 => [
            [['_route' => 'api.promotion_persona_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69256 => [
            [['_route' => 'api.promotion_persona_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69361 => [
            [['_route' => 'api.promotion_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69431 => [
            [['_route' => 'api.promotion_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69525 => [
            [['_route' => 'api.promotion_setgroup.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69595 => [
            [['_route' => 'api.promotion_setgroup.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69687 => [
            [['_route' => 'api.promotion_setgroup_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69757 => [
            [['_route' => 'api.promotion_setgroup_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69857 => [
            [['_route' => 'api.promotion_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69927 => [
            [['_route' => 'api.promotion_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70028 => [
            [['_route' => 'api.property_group.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70098 => [
            [['_route' => 'api.property_group.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70195 => [
            [['_route' => 'api.property_group_option.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70265 => [
            [['_route' => 'api.property_group_option.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70364 => [
            [['_route' => 'api.property_group_option_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70434 => [
            [['_route' => 'api.property_group_option_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70527 => [[['_route' => 'api.property_group_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        70645 => [
            [['_route' => 'api.property_group_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70715 => [
            [['_route' => 'api.property_group_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70830 => [[['_route' => 'api.property_group_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        70903 => [[['_route' => 'api.rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        70983 => [[['_route' => 'api.rule_condition.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71052 => [[['_route' => 'api.rule_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71143 => [[['_route' => 'api.sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71223 => [[['_route' => 'api.sales_channel_analytics.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71299 => [[['_route' => 'api.sales_channel_country.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71372 => [[['_route' => 'api.sales_channel_currency.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71445 => [[['_route' => 'api.sales_channel_domain.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71519 => [[['_route' => 'api.sales_channel_language.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71600 => [[['_route' => 'api.sales_channel_payment_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71682 => [[['_route' => 'api.sales_channel_shipping_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71762 => [[['_route' => 'api.sales_channel_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71834 => [[['_route' => 'api.sales_channel_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71913 => [[['_route' => 'api.sales_channel_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71993 => [[['_route' => 'api.salutation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72072 => [[['_route' => 'api.salutation_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72157 => [[['_route' => 'api.scheduled_task.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72227 => [[['_route' => 'api.script.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72304 => [[['_route' => 'api.seo_url.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72380 => [[['_route' => 'api.seo_url_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72465 => [[['_route' => 'api.shipping_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72541 => [[['_route' => 'api.shipping_method_price.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72613 => [[['_route' => 'api.shipping_method_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72689 => [[['_route' => 'api.shipping_method_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72767 => [[['_route' => 'api.snippet.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72838 => [[['_route' => 'api.snippet_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72921 => [[['_route' => 'api.state_machine.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72999 => [[['_route' => 'api.state_machine_history.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73073 => [[['_route' => 'api.state_machine_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73152 => [[['_route' => 'api.state_machine_state_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73232 => [[['_route' => 'api.state_machine_transition.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73304 => [[['_route' => 'api.state_machine_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73402 => [[['_route' => 'api.swag_language_pack_language.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73481 => [[['_route' => 'api.system_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73557 => [[['_route' => 'api.tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73627 => [[['_route' => 'api.tax.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73709 => [[['_route' => 'api.tax_provider.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73788 => [[['_route' => 'api.tax_provider_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73862 => [[['_route' => 'api.tax_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73937 => [[['_route' => 'api.tax_rule_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74016 => [[['_route' => 'api.tax_rule_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74094 => [[['_route' => 'api.theme.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74170 => [[['_route' => 'api.theme_child.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74241 => [[['_route' => 'api.theme_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74321 => [[['_route' => 'api.theme_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74398 => [[['_route' => 'api.theme_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74477 => [[['_route' => 'api.unit.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74556 => [[['_route' => 'api.unit_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74629 => [[['_route' => 'api.user.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74711 => [[['_route' => 'api.user_access_key.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74783 => [[['_route' => 'api.user_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74857 => [[['_route' => 'api.user_recovery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74936 => [[['_route' => 'api.version.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75013 => [[['_route' => 'api.version_commit.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75085 => [[['_route' => 'api.version_commit_data.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75163 => [[['_route' => 'api.webhook.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75241 => [[['_route' => 'api.webhook_event_log.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75346 => [[['_route' => 'api.property_group_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75419 => [[['_route' => 'api.rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75499 => [[['_route' => 'api.rule_condition.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75568 => [[['_route' => 'api.rule_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75659 => [[['_route' => 'api.sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75739 => [[['_route' => 'api.sales_channel_analytics.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75815 => [[['_route' => 'api.sales_channel_country.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75888 => [[['_route' => 'api.sales_channel_currency.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75961 => [[['_route' => 'api.sales_channel_domain.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76035 => [[['_route' => 'api.sales_channel_language.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76116 => [[['_route' => 'api.sales_channel_payment_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76198 => [[['_route' => 'api.sales_channel_shipping_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76278 => [[['_route' => 'api.sales_channel_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76350 => [[['_route' => 'api.sales_channel_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76429 => [[['_route' => 'api.sales_channel_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76509 => [[['_route' => 'api.salutation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76588 => [[['_route' => 'api.salutation_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76673 => [[['_route' => 'api.scheduled_task.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76743 => [[['_route' => 'api.script.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76820 => [[['_route' => 'api.seo_url.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76896 => [[['_route' => 'api.seo_url_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76981 => [[['_route' => 'api.shipping_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77057 => [[['_route' => 'api.shipping_method_price.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77129 => [[['_route' => 'api.shipping_method_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77205 => [[['_route' => 'api.shipping_method_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77283 => [[['_route' => 'api.snippet.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77354 => [[['_route' => 'api.snippet_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77437 => [[['_route' => 'api.state_machine.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77515 => [[['_route' => 'api.state_machine_history.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77589 => [[['_route' => 'api.state_machine_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77668 => [[['_route' => 'api.state_machine_state_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77748 => [[['_route' => 'api.state_machine_transition.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77820 => [[['_route' => 'api.state_machine_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77918 => [[['_route' => 'api.swag_language_pack_language.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77997 => [[['_route' => 'api.system_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78073 => [[['_route' => 'api.tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78143 => [[['_route' => 'api.tax.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78225 => [[['_route' => 'api.tax_provider.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78304 => [[['_route' => 'api.tax_provider_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78378 => [[['_route' => 'api.tax_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78453 => [[['_route' => 'api.tax_rule_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78532 => [[['_route' => 'api.tax_rule_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78610 => [[['_route' => 'api.theme.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78686 => [[['_route' => 'api.theme_child.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78757 => [[['_route' => 'api.theme_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78837 => [[['_route' => 'api.theme_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78914 => [[['_route' => 'api.theme_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78993 => [[['_route' => 'api.unit.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79072 => [[['_route' => 'api.unit_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79145 => [[['_route' => 'api.user.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79227 => [[['_route' => 'api.user_access_key.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79299 => [[['_route' => 'api.user_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79373 => [[['_route' => 'api.user_recovery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79452 => [[['_route' => 'api.version.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79529 => [[['_route' => 'api.version_commit.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79601 => [[['_route' => 'api.version_commit_data.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79679 => [[['_route' => 'api.webhook.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79757 => [[['_route' => 'api.webhook_event_log.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79851 => [
            [['_route' => 'api.seo_url.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.seo_url.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        79921 => [
            [['_route' => 'api.seo_url.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        80017 => [
            [['_route' => 'api.seo_url_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.seo_url_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        80087 => [
            [['_route' => 'api.seo_url_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        80192 => [
            [['_route' => 'api.sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        80262 => [
            [['_route' => 'api.sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        80362 => [
            [['_route' => 'api.sales_channel_analytics.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_analytics.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_analytics.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        80432 => [
            [['_route' => 'api.sales_channel_analytics.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_analytics.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        80529 => [
            [['_route' => 'api.sales_channel_country.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_country.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_country.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        80599 => [
            [['_route' => 'api.sales_channel_country.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_country.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        80693 => [
            [['_route' => 'api.sales_channel_currency.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_currency.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_currency.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        80763 => [
            [['_route' => 'api.sales_channel_currency.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_currency.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        80857 => [
            [['_route' => 'api.sales_channel_domain.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_domain.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_domain.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        80927 => [
            [['_route' => 'api.sales_channel_domain.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_domain.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        81022 => [
            [['_route' => 'api.sales_channel_language.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_language.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_language.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        81092 => [
            [['_route' => 'api.sales_channel_language.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_language.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        81194 => [
            [['_route' => 'api.sales_channel_payment_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_payment_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_payment_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        81264 => [
            [['_route' => 'api.sales_channel_payment_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_payment_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        81367 => [
            [['_route' => 'api.sales_channel_shipping_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_shipping_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_shipping_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        81437 => [
            [['_route' => 'api.sales_channel_shipping_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_shipping_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        81538 => [
            [['_route' => 'api.sales_channel_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        81608 => [
            [['_route' => 'api.sales_channel_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        81698 => [
            [['_route' => 'api.sales_channel_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        81768 => [
            [['_route' => 'api.sales_channel_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        81867 => [
            [['_route' => 'api.sales_channel_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        81937 => [
            [['_route' => 'api.sales_channel_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        82035 => [
            [['_route' => 'api.salutation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.salutation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        82105 => [
            [['_route' => 'api.salutation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        82204 => [
            [['_route' => 'api.salutation_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.salutation_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        82274 => [
            [['_route' => 'api.salutation_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        82380 => [
            [['_route' => 'api.scheduled_task.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.scheduled_task.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.scheduled_task.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        82450 => [
            [['_route' => 'api.scheduled_task.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.scheduled_task.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        82541 => [
            [['_route' => 'api.script.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.script.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.script.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        82611 => [
            [['_route' => 'api.script.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.script.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        82714 => [
            [['_route' => 'api.shipping_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        82784 => [
            [['_route' => 'api.shipping_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        82880 => [
            [['_route' => 'api.shipping_method_price.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_price.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_price.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        82950 => [
            [['_route' => 'api.shipping_method_price.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_price.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        83043 => [
            [['_route' => 'api.shipping_method_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        83113 => [
            [['_route' => 'api.shipping_method_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        83210 => [
            [['_route' => 'api.shipping_method_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        83280 => [
            [['_route' => 'api.shipping_method_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        83376 => [
            [['_route' => 'api.snippet.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.snippet.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        83446 => [
            [['_route' => 'api.snippet.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        83537 => [
            [['_route' => 'api.snippet_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.snippet_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        83607 => [
            [['_route' => 'api.snippet_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        83708 => [
            [['_route' => 'api.state_machine.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        83778 => [
            [['_route' => 'api.state_machine.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        83876 => [
            [['_route' => 'api.state_machine_history.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_history.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_history.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        83946 => [
            [['_route' => 'api.state_machine_history.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_history.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        84038 => [
            [['_route' => 'api.state_machine_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        84108 => [
            [['_route' => 'api.state_machine_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        84207 => [
            [['_route' => 'api.state_machine_state_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        84277 => [
            [['_route' => 'api.state_machine_state_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        84378 => [
            [['_route' => 'api.state_machine_transition.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_transition.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_transition.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        84448 => [
            [['_route' => 'api.state_machine_transition.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_transition.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        84541 => [
            [['_route' => 'api.state_machine_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        84611 => [
            [['_route' => 'api.state_machine_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        84730 => [
            [['_route' => 'api.swag_language_pack_language.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_language_pack_language.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_language_pack_language.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        84800 => [
            [['_route' => 'api.swag_language_pack_language.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_language_pack_language.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        84900 => [
            [['_route' => 'api.system_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.system_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.system_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        84970 => [
            [['_route' => 'api.system_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.system_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        85083 => [[['_route' => 'api.property_group_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        85156 => [[['_route' => 'api.rule.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        85236 => [[['_route' => 'api.rule_condition.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        85305 => [[['_route' => 'api.rule_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        85396 => [[['_route' => 'api.sales_channel.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        85476 => [[['_route' => 'api.sales_channel_analytics.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        85552 => [[['_route' => 'api.sales_channel_country.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        85625 => [[['_route' => 'api.sales_channel_currency.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        85698 => [[['_route' => 'api.sales_channel_domain.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        85772 => [[['_route' => 'api.sales_channel_language.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        85853 => [[['_route' => 'api.sales_channel_payment_method.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        85935 => [[['_route' => 'api.sales_channel_shipping_method.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86015 => [[['_route' => 'api.sales_channel_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86087 => [[['_route' => 'api.sales_channel_type.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86166 => [[['_route' => 'api.sales_channel_type_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86246 => [[['_route' => 'api.salutation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86325 => [[['_route' => 'api.salutation_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86410 => [[['_route' => 'api.scheduled_task.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86480 => [[['_route' => 'api.script.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86557 => [[['_route' => 'api.seo_url.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86633 => [[['_route' => 'api.seo_url_template.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86718 => [[['_route' => 'api.shipping_method.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86794 => [[['_route' => 'api.shipping_method_price.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86866 => [[['_route' => 'api.shipping_method_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86942 => [[['_route' => 'api.shipping_method_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87020 => [[['_route' => 'api.snippet.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87091 => [[['_route' => 'api.snippet_set.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87174 => [[['_route' => 'api.state_machine.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87252 => [[['_route' => 'api.state_machine_history.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87326 => [[['_route' => 'api.state_machine_state.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87405 => [[['_route' => 'api.state_machine_state_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87485 => [[['_route' => 'api.state_machine_transition.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87557 => [[['_route' => 'api.state_machine_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87655 => [[['_route' => 'api.swag_language_pack_language.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87734 => [[['_route' => 'api.system_config.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87810 => [[['_route' => 'api.tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87880 => [[['_route' => 'api.tax.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87962 => [[['_route' => 'api.tax_provider.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88041 => [[['_route' => 'api.tax_provider_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88115 => [[['_route' => 'api.tax_rule.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88190 => [[['_route' => 'api.tax_rule_type.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88269 => [[['_route' => 'api.tax_rule_type_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88347 => [[['_route' => 'api.theme.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88423 => [[['_route' => 'api.theme_child.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88494 => [[['_route' => 'api.theme_media.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88574 => [[['_route' => 'api.theme_sales_channel.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88651 => [[['_route' => 'api.theme_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88730 => [[['_route' => 'api.unit.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88809 => [[['_route' => 'api.unit_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88882 => [[['_route' => 'api.user.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'user', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88964 => [[['_route' => 'api.user_access_key.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89036 => [[['_route' => 'api.user_config.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89110 => [[['_route' => 'api.user_recovery.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89189 => [[['_route' => 'api.version.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89266 => [[['_route' => 'api.version_commit.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89338 => [[['_route' => 'api.version_commit_data.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89416 => [[['_route' => 'api.webhook.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89494 => [[['_route' => 'api.webhook_event_log.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89517 => [[['_route' => 'api.acl_role.create', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['acl_role:create'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::upsertRole'], [], ['POST' => 0], null, false, false, null]],
        89539 => [
            [['_route' => 'api.acl_role.update', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['acl_role:update'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::updateRole'], ['roleId'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.acl_role.delete', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['acl_role:delete'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteRole'], ['roleId'], ['DELETE' => 0], null, false, true, null],
        ],
        89631 => [
            [['_route' => 'api.rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        89701 => [
            [['_route' => 'api.rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        89801 => [
            [['_route' => 'api.rule_condition.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule_condition.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.rule_condition.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        89871 => [
            [['_route' => 'api.rule_condition.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule_condition.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        89961 => [
            [['_route' => 'api.rule_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.rule_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        90031 => [
            [['_route' => 'api.rule_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        90129 => [
            [['_route' => 'api.tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        90199 => [
            [['_route' => 'api.tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        90287 => [
            [['_route' => 'api.tax.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        90357 => [
            [['_route' => 'api.tax.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        90456 => [
            [['_route' => 'api.tax_provider.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        90526 => [
            [['_route' => 'api.tax_provider.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        90625 => [
            [['_route' => 'api.tax_provider_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        90695 => [
            [['_route' => 'api.tax_provider_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        90787 => [
            [['_route' => 'api.tax_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        90857 => [
            [['_route' => 'api.tax_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        90949 => [
            [['_route' => 'api.tax_rule_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        91019 => [
            [['_route' => 'api.tax_rule_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        91118 => [
            [['_route' => 'api.tax_rule_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        91188 => [
            [['_route' => 'api.tax_rule_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        91284 => [
            [['_route' => 'api.theme.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        91354 => [
            [['_route' => 'api.theme.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        91450 => [
            [['_route' => 'api.theme_child.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_child.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_child.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        91520 => [
            [['_route' => 'api.theme_child.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_child.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        91612 => [
            [['_route' => 'api.theme_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        91682 => [
            [['_route' => 'api.theme_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        91783 => [
            [['_route' => 'api.theme_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        91853 => [
            [['_route' => 'api.theme_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        91951 => [
            [['_route' => 'api.theme_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        92021 => [
            [['_route' => 'api.theme_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        92118 => [
            [['_route' => 'api.unit.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.unit.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        92188 => [
            [['_route' => 'api.unit.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        92287 => [
            [['_route' => 'api.unit_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.unit_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        92357 => [
            [['_route' => 'api.unit_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        92445 => [[['_route' => 'api.user.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        92511 => [[['_route' => 'api.user.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        92612 => [
            [['_route' => 'api.user_access_key.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_access_key.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.user_access_key.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        92682 => [
            [['_route' => 'api.user_access_key.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_access_key.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        92775 => [
            [['_route' => 'api.user_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.user_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        92845 => [
            [['_route' => 'api.user_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        92940 => [
            [['_route' => 'api.user_recovery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_recovery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.user_recovery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        93010 => [
            [['_route' => 'api.user_recovery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_recovery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        93035 => [[['_route' => 'api.user.delete', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['user:delete'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUser'], ['userId'], ['DELETE' => 0], null, false, true, null]],
        93070 => [[['_route' => 'api.user_access_keys.delete', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['user_access_key:delete'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUserAccessKey'], ['userId', 'id'], ['DELETE' => 0], null, false, true, null]],
        93097 => [[['_route' => 'api.user_role.delete', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['acl_user_role:delete'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUserRole'], ['userId', 'roleId'], ['DELETE' => 0], null, false, true, null]],
        93108 => [[['_route' => 'api.user.update', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['user:update'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::updateUser'], ['userId'], ['PATCH' => 0], null, false, true, null]],
        93119 => [[['_route' => 'api.user.create', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['user:create'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::upsertUser'], [], ['POST' => 0], null, false, false, null]],
        93213 => [
            [['_route' => 'api.version.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        93283 => [
            [['_route' => 'api.version.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        93377 => [
            [['_route' => 'api.version_commit.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version_commit.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        93447 => [
            [['_route' => 'api.version_commit.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        93539 => [
            [['_route' => 'api.version_commit_data.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit_data.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version_commit_data.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        93609 => [
            [['_route' => 'api.version_commit_data.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit_data.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        93705 => [
            [['_route' => 'api.webhook.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.webhook.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.webhook.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        93775 => [
            [['_route' => 'api.webhook.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.webhook.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        93873 => [
            [['_route' => 'api.webhook_event_log.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.webhook_event_log.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.webhook_event_log.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        93943 => [
            [['_route' => 'api.webhook_event_log.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.webhook_event_log.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        93970 => [[['_route' => 'api.integration.create', '_routeScope' => ['api'], '_acl' => ['integration:create'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\IntegrationController::upsertIntegration'], [], ['POST' => 0], null, false, false, null]],
        93989 => [
            [['_route' => 'api.integration.update', '_routeScope' => ['api'], '_acl' => ['integration:update'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\IntegrationController::updateIntegration'], ['integrationId'], ['PATCH' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
