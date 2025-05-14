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
        '/api/_info/openapi3.json' => [[['_route' => 'api.info.openapi3', '_routeScope' => ['api'], 'auth_required' => '0', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::info'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/queue.json' => [[['_route' => 'api.info.queue', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::queue'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/open-api-schema.json' => [[['_route' => 'api.info.open-api-schema', '_routeScope' => ['api'], 'auth_required' => '0', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::openApiSchema'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/entity-schema.json' => [[['_route' => 'api.info.entity-schema', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::entitySchema'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/events.json' => [[['_route' => 'api.info.business-events', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::businessEvents'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/swagger.html' => [[['_route' => 'api.info.swagger', '_routeScope' => ['api'], 'auth_required' => '0', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::infoHtml'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/stoplightio.html' => [[['_route' => 'api.info.stoplightio', '_routeScope' => ['api'], 'auth_required' => '0', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::stoplightIoInfoHtml'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/config' => [[['_route' => 'api.info.config', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::config'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/version' => [[['_route' => 'api.info.shopware.version', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::infoShopwareVersion'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/_info/version' => [[['_route' => 'api.info.shopware.version_old_version', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::infoShopwareVersion'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/flow-actions.json' => [[['_route' => 'api.info.actions', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::flowActions'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/routes' => [[['_route' => 'api.info.routes', '_routeScope' => ['api'], 'auth_required' => '0', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::getRoutes'], null, ['GET' => 0], null, false, false, null]],
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
        '/store-api/_info/openapi3.json' => [[['_route' => 'store-api.info.openapi3', '_routeScope' => ['store-api'], 'auth_required' => '0', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::info'], null, ['GET' => 0], null, false, false, null]],
        '/store-api/_info/open-api-schema.json' => [[['_route' => 'store-api.info.open-api-schema', '_routeScope' => ['store-api'], 'auth_required' => '0', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::openApiSchema'], null, ['GET' => 0], null, false, false, null]],
        '/store-api/_info/swagger.html' => [[['_route' => 'store-api.info.swagger', '_routeScope' => ['store-api'], 'auth_required' => '0', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::infoHtml'], null, ['GET' => 0], null, false, false, null]],
        '/store-api/_info/stoplightio.html' => [[['_route' => 'store-api.info.stoplightio', '_routeScope' => ['store-api'], 'auth_required' => '0', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::stoplightIoInfoHtml'], null, ['GET' => 0], null, false, false, null]],
        '/store-api/_info/routes' => [[['_route' => 'store-api.info.routes', '_routeScope' => ['store-api'], 'auth_required' => '0', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::getRoutes'], null, ['GET' => 0], null, false, false, null]],
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
        '/_profiler/vite' => [[['_route' => '_profiler_vite', '_controller' => 'Pentatrion\\ViteBundle\\Controller\\ProfilerController::info'], null, null, null, false, false, null]],
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
        '/example' => [[['_route' => 'frontend.example.example', '_routeScope' => ['storefront'], '_controller' => 'BasicExample\\Storefront\\Controller\\ExampleController::showExample'], null, ['GET' => 0], null, false, false, null]],
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
                                            .'|stom\\-(?'
                                                .'|entity(?'
                                                    .'|\\-([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4831)'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:4896)'
                                                .')'
                                                .'|field(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:4970)'
                                                    .'|\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5040)'
                                                .')'
                                            .')'
                                            .'|rrency(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5116)'
                                                .'|\\-(?'
                                                    .'|country\\-rounding((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5203)'
                                                    .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5279)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|e\\-([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5354)'
                                        .'|ategory(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5429)'
                                            .'|\\-t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5502)'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5577)'
                                            .')'
                                        .')'
                                        .'|ms\\-(?'
                                            .'|block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5656)'
                                            .'|page(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5728)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5806)'
                                            .')'
                                            .'|s(?'
                                                .'|ection((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5882)'
                                                .'|lot(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5953)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6031)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|ountry(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6108)'
                                            .'|\\-(?'
                                                .'|state(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6186)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6264)'
                                                .')'
                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6341)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|a(?'
                                        .'|cl\\-(?'
                                            .'|role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6424)'
                                            .'|user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6499)'
                                        .')'
                                        .'|pp(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6570)'
                                            .'|\\-(?'
                                                .'|a(?'
                                                    .'|ction\\-button(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6660)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6738)'
                                                    .')'
                                                    .'|dministration\\-snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6826)'
                                                .')'
                                                .'|cms\\-block(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6905)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6983)'
                                                .')'
                                                .'|flow\\-(?'
                                                    .'|action(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7067)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7145)'
                                                    .')'
                                                    .'|event((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7216)'
                                                .')'
                                                .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7297)'
                                                .'|s(?'
                                                    .'|cript\\-condition(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7385)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7463)'
                                                    .')'
                                                    .'|hipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7544)'
                                                .')'
                                                .'|t(?'
                                                    .'|emplate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7621)'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7696)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|b(?'
                                        .'|asic\\-example((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7782)'
                                        .'|log(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7853)'
                                            .'|\\-(?'
                                                .'|category(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7934)'
                                                    .'|\\-(?'
                                                        .'|mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:8011)'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:8087)'
                                                    .')'
                                                .')'
                                                .'|product\\-mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:8170)'
                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:8246)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|cl\\-(?'
                                    .'|role(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:8342)'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:8407)'
                                    .')'
                                    .'|user\\-role(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:8502)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:8571)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|s(?'
                                .'|cript/(.+)(*:8598)'
                                .'|e(?'
                                    .'|arch(?'
                                        .'|\\-ids/(?'
                                            .'|c(?'
                                                .'|u(?'
                                                    .'|stom\\-(?'
                                                        .'|entity(?'
                                                            .'|\\-([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8715)'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:8780)'
                                                        .')'
                                                        .'|field(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:8854)'
                                                            .'|\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:8924)'
                                                        .')'
                                                    .')'
                                                    .'|rrency(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9000)'
                                                        .'|\\-(?'
                                                            .'|country\\-rounding((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9087)'
                                                            .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9163)'
                                                        .')'
                                                    .')'
                                                .')'
                                                .'|e\\-([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9238)'
                                                .'|ategory(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9313)'
                                                    .'|\\-t(?'
                                                        .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9386)'
                                                        .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9461)'
                                                    .')'
                                                .')'
                                                .'|ms\\-(?'
                                                    .'|block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9540)'
                                                    .'|page(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9612)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9690)'
                                                    .')'
                                                    .'|s(?'
                                                        .'|ection((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9766)'
                                                        .'|lot(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9837)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9915)'
                                                        .')'
                                                    .')'
                                                .')'
                                                .'|ountry(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9992)'
                                                    .'|\\-(?'
                                                        .'|state(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10070)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10149)'
                                                        .')'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10227)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|a(?'
                                                .'|cl\\-(?'
                                                    .'|role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10311)'
                                                    .'|user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10387)'
                                                .')'
                                                .'|pp(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10459)'
                                                    .'|\\-(?'
                                                        .'|a(?'
                                                            .'|ction\\-button(?'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10550)'
                                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10629)'
                                                            .')'
                                                            .'|dministration\\-snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10718)'
                                                        .')'
                                                        .'|cms\\-block(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10798)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10877)'
                                                        .')'
                                                        .'|flow\\-(?'
                                                            .'|action(?'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10962)'
                                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11041)'
                                                            .')'
                                                            .'|event((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11113)'
                                                        .')'
                                                        .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11195)'
                                                        .'|s(?'
                                                            .'|cript\\-condition(?'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11284)'
                                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11363)'
                                                            .')'
                                                            .'|hipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11445)'
                                                        .')'
                                                        .'|t(?'
                                                            .'|emplate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11523)'
                                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11599)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|b(?'
                                                .'|asic\\-example((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11686)'
                                                .'|log(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11758)'
                                                    .'|\\-(?'
                                                        .'|category(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11840)'
                                                            .'|\\-(?'
                                                                .'|mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11918)'
                                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11995)'
                                                            .')'
                                                        .')'
                                                        .'|product\\-mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12079)'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12156)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|/(?'
                                            .'|c(?'
                                                .'|u(?'
                                                    .'|stom\\-(?'
                                                        .'|entity(?'
                                                            .'|\\-([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:12262)'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12328)'
                                                        .')'
                                                        .'|field(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12403)'
                                                            .'|\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12474)'
                                                        .')'
                                                    .')'
                                                    .'|rrency(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12551)'
                                                        .'|\\-(?'
                                                            .'|country\\-rounding((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12639)'
                                                            .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12716)'
                                                        .')'
                                                    .')'
                                                .')'
                                                .'|e\\-([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:12792)'
                                                .'|ategory(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12868)'
                                                    .'|\\-t(?'
                                                        .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12942)'
                                                        .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13018)'
                                                    .')'
                                                .')'
                                                .'|ms\\-(?'
                                                    .'|block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13098)'
                                                    .'|page(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13171)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13250)'
                                                    .')'
                                                    .'|s(?'
                                                        .'|ection((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13327)'
                                                        .'|lot(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13399)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13478)'
                                                        .')'
                                                    .')'
                                                .')'
                                                .'|ountry(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13556)'
                                                    .'|\\-(?'
                                                        .'|state(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13635)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13714)'
                                                        .')'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13792)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|a(?'
                                                .'|cl\\-(?'
                                                    .'|role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13876)'
                                                    .'|user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13952)'
                                                .')'
                                                .'|pp(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14024)'
                                                    .'|\\-(?'
                                                        .'|a(?'
                                                            .'|ction\\-button(?'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14115)'
                                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14194)'
                                                            .')'
                                                            .'|dministration\\-snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14283)'
                                                        .')'
                                                        .'|cms\\-block(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14363)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14442)'
                                                        .')'
                                                        .'|flow\\-(?'
                                                            .'|action(?'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14527)'
                                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14606)'
                                                            .')'
                                                            .'|event((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14678)'
                                                        .')'
                                                        .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14760)'
                                                        .'|s(?'
                                                            .'|cript\\-condition(?'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14849)'
                                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14928)'
                                                            .')'
                                                            .'|hipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:15010)'
                                                        .')'
                                                        .'|t(?'
                                                            .'|emplate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:15088)'
                                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:15164)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|b(?'
                                                .'|asic\\-example((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:15251)'
                                                .'|log(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:15323)'
                                                    .'|\\-(?'
                                                        .'|category(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:15405)'
                                                            .'|\\-(?'
                                                                .'|mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:15483)'
                                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:15560)'
                                                            .')'
                                                        .')'
                                                        .'|product\\-mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:15644)'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:15721)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|rvice/(?'
                                        .'|activate/([^/]++)(*:15762)'
                                        .'|deactivate/([^/]++)(*:15791)'
                                        .'|uninstall/([^/]++)(*:15819)'
                                    .')'
                                .')'
                            .')'
                            .'|c(?'
                                .'|u(?'
                                    .'|stom\\-(?'
                                        .'|entity(?'
                                            .'|\\-(?'
                                                .'|([^/]++)/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:15937)'
                                                .'|([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:16010)'
                                                .')'
                                                .'|([^/]++)/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:16098)'
                                                .')'
                                            .')'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:16182)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:16252)'
                                            .')'
                                        .')'
                                        .'|field(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:16344)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:16414)'
                                            .')'
                                            .'|\\-set(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:16505)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:16575)'
                                                .')'
                                                .'|\\-relation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:16665)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|rrency(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:16759)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:16829)'
                                        .')'
                                        .'|\\-(?'
                                            .'|country\\-rounding(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:16937)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:17007)'
                                                .')'
                                            .')'
                                            .'|translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:17105)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:17175)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|e\\-(?'
                                    .'|([^/]++)/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:17270)'
                                    .'|([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:17343)'
                                    .')'
                                    .'|([^/]++)/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:17431)'
                                    .')'
                                .')'
                                .'|ategory(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:17525)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:17595)'
                                    .')'
                                    .'|\\-t(?'
                                        .'|ag(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:17689)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:17759)'
                                            .')'
                                        .')'
                                        .'|ranslation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:17856)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:17926)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|ms\\-(?'
                                    .'|block(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:18027)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:18097)'
                                        .')'
                                    .')'
                                    .'|page(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:18188)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:18258)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:18357)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:18427)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|ection(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:18525)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:18595)'
                                            .')'
                                        .')'
                                        .'|lot(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:18685)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:18755)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:18854)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:18924)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|ountry(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:19020)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:19090)'
                                    .')'
                                    .'|\\-(?'
                                        .'|state(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:19186)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:19256)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:19355)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:19425)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:19524)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:19594)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|b(?'
                                .'|asic\\-example(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:19701)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:19771)'
                                    .')'
                                .')'
                                .'|log(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:19861)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:19931)'
                                    .')'
                                    .'|\\-(?'
                                        .'|category(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:20030)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:20100)'
                                            .')'
                                            .'|\\-(?'
                                                .'|mapping(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:20198)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:20268)'
                                                    .')'
                                                .')'
                                                .'|translation(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:20366)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:20436)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|product\\-mapping(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:20541)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:20611)'
                                            .')'
                                        .')'
                                        .'|translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:20709)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:20779)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|p\\-system/([^/]++)/generate\\-token(*:20829)'
                    .')'
                    .'|dmin/([^/]++)/index\\.html(*:20865)'
                    .'|ccount/(?'
                        .'|order/(?'
                            .'|([^/]++)(*:20902)'
                            .'|edit/([^/]++)(*:20925)'
                            .'|payment/([^/]++)(*:20951)'
                            .'|update/([^/]++)(*:20976)'
                            .'|do(?'
                                .'|cument/([^/]++)/([^/]++)(?'
                                    .'|(*:21018)'
                                    .'|/([^/]++)(*:21037)'
                                .')'
                                .'|wnload/([^/]++)/([^/]++)(*:21072)'
                            .')'
                        .')'
                        .'|address/(?'
                            .'|([^/]++)(*:21103)'
                            .'|default\\-([^/]++)/([^/]++)(*:21139)'
                            .'|switch(*:21155)'
                            .'|create(*:21171)'
                            .'|([^/]++)(*:21189)'
                            .'|delete/([^/]++)(*:21214)'
                        .')'
                    .')'
                .')'
                .'|/s(?'
                    .'|tore(?'
                        .'|\\-api/(?'
                            .'|a(?'
                                .'|pp\\-system/([^/]++)/generate\\-token(*:21287)'
                                .'|ccount/(?'
                                    .'|change\\-payment\\-method/([^/]++)(*:21339)'
                                    .'|address/(?'
                                        .'|([^/]++)(*:21368)'
                                        .'|default\\-(?'
                                            .'|shipping/([^/]++)(*:21407)'
                                            .'|billing/([^/]++)(*:21433)'
                                        .')'
                                        .'|([^/]++)(*:21452)'
                                    .')'
                                .')'
                            .')'
                            .'|s(?'
                                .'|cript/(.+)(*:21479)'
                                .'|itemap/(.+\\.xml\\.gz)(*:21509)'
                            .')'
                            .'|c(?'
                                .'|ountry\\-state/([^/]++)(*:21546)'
                                .'|ategory/([^/]++)(*:21572)'
                                .'|ms/([^/]++)(*:21593)'
                                .'|ustomer(?'
                                    .'|/wishlist/(?'
                                        .'|add/([^/]++)(*:21638)'
                                        .'|delete/([^/]++)(*:21663)'
                                    .')'
                                    .'|\\-group\\-registration/config/([^/]++)(*:21711)'
                                .')'
                            .')'
                            .'|product(?'
                                .'|\\-(?'
                                    .'|export/([^/]++)/([^/]++)(*:21762)'
                                    .'|listing/([^/]++)(*:21788)'
                                .')'
                                .'|/([^/]++)(?'
                                    .'|/(?'
                                        .'|cross\\-selling(*:21829)'
                                        .'|find\\-variant(*:21852)'
                                        .'|review(?'
                                            .'|s(*:21872)'
                                            .'|(*:21882)'
                                        .')'
                                    .')'
                                    .'|(*:21894)'
                                .')'
                            .')'
                            .'|breadcrumb/([0-9a-f]{32})(*:21931)'
                            .'|navigation/([^/]++)/([^/]++)(*:21969)'
                            .'|landing\\-page/([^/]++)(*:22001)'
                            .'|order/download/([^/]++)/([^/]++)(*:22043)'
                            .'|document/download/([^/]++)(?:/([^/]++))?(*:22093)'
                        .')'
                        .'|front/script/(.+)(*:22121)'
                    .')'
                    .'|itemap/(.+\\.xml\\.gz)(*:22152)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:22191)'
                .'|/build/(.+)(*:22212)'
                .'|/wi(?'
                    .'|dgets/(?'
                        .'|account/(?'
                            .'|order/detail/([^/]++)(*:22269)'
                            .'|address\\-manager(?:/([^/]++))?(*:22309)'
                        .')'
                        .'|cms(?'
                            .'|(?:/([^/]++))?(*:22340)'
                            .'|/(?'
                                .'|navigation(?'
                                    .'|(?:/([^/]++))?(*:22381)'
                                    .'|/([^/]++)/filter(*:22407)'
                                .')'
                                .'|buybox/([^/]++)/switch(*:22440)'
                            .')'
                        .')'
                    .')'
                    .'|shlist/(?'
                        .'|product/delete/([^/]++)(*:22486)'
                        .'|add(?'
                            .'|/([^/]++)(*:22511)'
                            .'|\\-after\\-login/([^/]++)(*:22544)'
                        .')'
                        .'|remove/([^/]++)(*:22570)'
                    .')'
                .')'
                .'|/c(?'
                    .'|heckout/line\\-item/(?'
                        .'|delete/([^/]++)(*:22624)'
                        .'|change\\-quantity/([^/]++)(*:22659)'
                    .')'
                    .'|ustomer\\-group\\-registration/([^/]++)(*:22707)'
                .')'
                .'|/p(?'
                    .'|age/cms/([^/]++)(*:22739)'
                    .'|roduct/([^/]++)/r(?'
                        .'|ating(*:22774)'
                        .'|eviews(*:22790)'
                    .')'
                .')'
                .'|/landingPage/([^/]++)(*:22823)'
                .'|/maintenance/singlepage/([^/]++)(*:22865)'
                .'|/navigation/([^/]++)(*:22895)'
                .'|/detail/([^/]++)(?'
                    .'|(*:22924)'
                    .'|/switch(*:22941)'
                .')'
                .'|/quickview/([^/]++)(*:22971)'
            .')/?$}sDu',
        22971 => '{^(?'
                .'|/api/(?'
                    .'|custom(?'
                        .'|\\-field\\-set\\-relation(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:23092)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:23162)'
                            .')'
                        .')'
                        .'|er(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:23251)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:23321)'
                            .')'
                            .'|\\-(?'
                                .'|address(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:23419)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:23489)'
                                    .')'
                                .')'
                                .'|group(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:23581)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:23651)'
                                    .')'
                                    .'|\\-(?'
                                        .'|registration\\-sales\\-channels(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:23771)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:23841)'
                                            .')'
                                        .')'
                                        .'|translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:23939)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:24009)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|recovery(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:24106)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:24176)'
                                    .')'
                                .')'
                                .'|tag(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:24266)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:24336)'
                                    .')'
                                .')'
                                .'|wishlist(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:24431)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:24501)'
                                    .')'
                                    .'|\\-product(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:24596)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:24666)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|search(?'
                        .'|/(?'
                            .'|custom(?'
                                .'|\\-field\\-set\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24782)'
                                .'|er(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24853)'
                                    .'|\\-(?'
                                        .'|address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24931)'
                                        .'|group(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25005)'
                                            .'|\\-(?'
                                                .'|registration\\-sales\\-channels((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25105)'
                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25182)'
                                            .')'
                                        .')'
                                        .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25258)'
                                        .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25327)'
                                        .'|wishlist(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25404)'
                                            .'|\\-product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25479)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|d(?'
                                .'|elivery\\-time(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25569)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25648)'
                                .')'
                                .'|ocument(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25725)'
                                    .'|\\-(?'
                                        .'|base\\-config(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25811)'
                                            .'|\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25893)'
                                        .')'
                                        .'|type(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25967)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26046)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|flow(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26123)'
                                .'|\\-(?'
                                    .'|sequence((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26202)'
                                    .'|template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26276)'
                                .')'
                            .')'
                            .'|i(?'
                                .'|mport\\-export\\-(?'
                                    .'|file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26370)'
                                    .'|log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26439)'
                                    .'|profile(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26515)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26594)'
                                    .')'
                                .')'
                                .'|ntegration(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26675)'
                                    .'|\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26747)'
                                .')'
                            .')'
                            .'|l(?'
                                .'|an(?'
                                    .'|ding\\-page(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26837)'
                                        .'|\\-(?'
                                            .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26922)'
                                            .'|t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26994)'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27070)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|guage((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27144)'
                                .')'
                                .'|o(?'
                                    .'|cale(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27222)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27301)'
                                    .')'
                                    .'|g\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27376)'
                                .')'
                            .')'
                            .'|m(?'
                                .'|ai(?'
                                    .'|l\\-(?'
                                        .'|header\\-footer(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27476)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27555)'
                                        .')'
                                        .'|template(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27633)'
                                            .'|\\-(?'
                                                .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27709)'
                                                .'|t(?'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27789)'
                                                    .'|ype(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27861)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27940)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|n\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28022)'
                                .')'
                                .'|edia(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28096)'
                                    .'|\\-(?'
                                        .'|default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28182)'
                                        .'|folder(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28257)'
                                            .'|\\-configuration(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28341)'
                                                .'|\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28431)'
                                            .')'
                                        .')'
                                        .'|t(?'
                                            .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28505)'
                                            .'|humbnail(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28582)'
                                                .'|\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28654)'
                                            .')'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28731)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|n(?'
                                .'|ewsletter\\-recipient(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28828)'
                                    .'|\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28899)'
                                .')'
                                .'|otification((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28977)'
                                .'|umber\\-range(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29058)'
                                    .'|\\-(?'
                                        .'|s(?'
                                            .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29146)'
                                            .'|tate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29216)'
                                        .')'
                                        .'|t(?'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29297)'
                                            .'|ype(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29369)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29448)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|order(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29527)'
                                .'|\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29602)'
                            .')'
                        .')'
                        .'|\\-ids/(?'
                            .'|custom(?'
                                .'|\\-field\\-set\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29710)'
                                .'|er(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29781)'
                                    .'|\\-(?'
                                        .'|address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29859)'
                                        .'|group(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29933)'
                                            .'|\\-(?'
                                                .'|registration\\-sales\\-channels((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30033)'
                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30110)'
                                            .')'
                                        .')'
                                        .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30186)'
                                        .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30255)'
                                        .'|wishlist(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30332)'
                                            .'|\\-product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30407)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|d(?'
                                .'|elivery\\-time(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30497)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30576)'
                                .')'
                                .'|ocument(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30653)'
                                    .'|\\-(?'
                                        .'|base\\-config(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30739)'
                                            .'|\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30821)'
                                        .')'
                                        .'|type(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30895)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30974)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|flow(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31051)'
                                .'|\\-(?'
                                    .'|sequence((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31130)'
                                    .'|template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31204)'
                                .')'
                            .')'
                            .'|i(?'
                                .'|mport\\-export\\-(?'
                                    .'|file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31298)'
                                    .'|log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31367)'
                                    .'|profile(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31443)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31522)'
                                    .')'
                                .')'
                                .'|ntegration(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31603)'
                                    .'|\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31675)'
                                .')'
                            .')'
                            .'|l(?'
                                .'|an(?'
                                    .'|ding\\-page(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31765)'
                                        .'|\\-(?'
                                            .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31850)'
                                            .'|t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31922)'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31998)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|guage((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32072)'
                                .')'
                                .'|o(?'
                                    .'|cale(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32150)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32229)'
                                    .')'
                                    .'|g\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32304)'
                                .')'
                            .')'
                            .'|m(?'
                                .'|ai(?'
                                    .'|l\\-(?'
                                        .'|header\\-footer(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32404)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32483)'
                                        .')'
                                        .'|template(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32561)'
                                            .'|\\-(?'
                                                .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32637)'
                                                .'|t(?'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32717)'
                                                    .'|ype(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32789)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32868)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|n\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32950)'
                                .')'
                                .'|edia(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33024)'
                                    .'|\\-(?'
                                        .'|default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33110)'
                                        .'|folder(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33185)'
                                            .'|\\-configuration(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33269)'
                                                .'|\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33359)'
                                            .')'
                                        .')'
                                        .'|t(?'
                                            .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33433)'
                                            .'|humbnail(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33510)'
                                                .'|\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33582)'
                                            .')'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33659)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|n(?'
                                .'|ewsletter\\-recipient(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33756)'
                                    .'|\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33827)'
                                .')'
                                .'|otification((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33905)'
                                .'|umber\\-range(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33986)'
                                    .'|\\-(?'
                                        .'|s(?'
                                            .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34074)'
                                            .'|tate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34144)'
                                        .')'
                                        .'|t(?'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34225)'
                                            .'|ype(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34297)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34376)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|order(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34455)'
                                .'|\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34530)'
                            .')'
                        .')'
                    .')'
                    .'|aggregate/(?'
                        .'|custom(?'
                            .'|\\-field\\-set\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34643)'
                            .'|er(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34714)'
                                .'|\\-(?'
                                    .'|address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34792)'
                                    .'|group(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34866)'
                                        .'|\\-(?'
                                            .'|registration\\-sales\\-channels((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34966)'
                                            .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35043)'
                                        .')'
                                    .')'
                                    .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35119)'
                                    .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35188)'
                                    .'|wishlist(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35265)'
                                        .'|\\-product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35340)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|d(?'
                            .'|elivery\\-time(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35430)'
                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35509)'
                            .')'
                            .'|ocument(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35586)'
                                .'|\\-(?'
                                    .'|base\\-config(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35672)'
                                        .'|\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35754)'
                                    .')'
                                    .'|type(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35828)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35907)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|flow(?'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35984)'
                            .'|\\-(?'
                                .'|sequence((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36063)'
                                .'|template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36137)'
                            .')'
                        .')'
                        .'|i(?'
                            .'|mport\\-export\\-(?'
                                .'|file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36231)'
                                .'|log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36300)'
                                .'|profile(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36376)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36455)'
                                .')'
                            .')'
                            .'|ntegration(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36536)'
                                .'|\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36608)'
                            .')'
                        .')'
                        .'|l(?'
                            .'|an(?'
                                .'|ding\\-page(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36698)'
                                    .'|\\-(?'
                                        .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36783)'
                                        .'|t(?'
                                            .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36855)'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36931)'
                                        .')'
                                    .')'
                                .')'
                                .'|guage((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37005)'
                            .')'
                            .'|o(?'
                                .'|cale(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37083)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37162)'
                                .')'
                                .'|g\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37237)'
                            .')'
                        .')'
                        .'|m(?'
                            .'|ai(?'
                                .'|l\\-(?'
                                    .'|header\\-footer(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37337)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37416)'
                                    .')'
                                    .'|template(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37494)'
                                        .'|\\-(?'
                                            .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37570)'
                                            .'|t(?'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37650)'
                                                .'|ype(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37722)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37801)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|n\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37883)'
                            .')'
                            .'|edia(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37957)'
                                .'|\\-(?'
                                    .'|default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:38043)'
                                    .'|folder(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:38118)'
                                        .'|\\-configuration(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:38202)'
                                            .'|\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:38292)'
                                        .')'
                                    .')'
                                    .'|t(?'
                                        .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:38366)'
                                        .'|humbnail(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:38443)'
                                            .'|\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:38515)'
                                        .')'
                                        .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:38592)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|n(?'
                            .'|ewsletter\\-recipient(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:38689)'
                                .'|\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:38760)'
                            .')'
                            .'|otification((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:38838)'
                            .'|umber\\-range(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:38919)'
                                .'|\\-(?'
                                    .'|s(?'
                                        .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:39007)'
                                        .'|tate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:39077)'
                                    .')'
                                    .'|t(?'
                                        .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:39158)'
                                        .'|ype(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:39230)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:39309)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|order(?'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:39388)'
                            .'|\\-address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:39463)'
                        .')'
                    .')'
                    .'|d(?'
                        .'|elivery\\-time(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:39567)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:39637)'
                            .')'
                            .'|\\-translation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:39736)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:39806)'
                                .')'
                            .')'
                        .')'
                        .'|ocument(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:39901)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:39971)'
                            .')'
                            .'|\\-(?'
                                .'|base\\-config(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:40074)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:40144)'
                                    .')'
                                    .'|\\-sales\\-channel(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:40246)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:40316)'
                                        .')'
                                    .')'
                                .')'
                                .'|type(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:40408)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:40478)'
                                    .')'
                                    .'|\\-translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:40577)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:40647)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|flow(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:40742)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                            .'|(*:40812)'
                        .')'
                        .'|\\-(?'
                            .'|sequence(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:40911)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:40981)'
                                .')'
                            .')'
                            .'|template(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:41076)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:41146)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|i(?'
                        .'|mport\\-export\\-(?'
                            .'|file(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:41261)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:41331)'
                                .')'
                            .')'
                            .'|log(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:41421)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:41491)'
                                .')'
                            .')'
                            .'|profile(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:41585)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:41655)'
                                .')'
                                .'|\\-translation(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:41754)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:41824)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|ntegration(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:41923)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:41990)'
                            .'|\\-role(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:42081)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:42151)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|l(?'
                        .'|an(?'
                            .'|ding\\-page(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:42259)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:42329)'
                                .')'
                                .'|\\-(?'
                                    .'|sales\\-channel(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:42434)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:42504)'
                                        .')'
                                    .')'
                                    .'|t(?'
                                        .'|ag(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:42597)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:42667)'
                                            .')'
                                        .')'
                                        .'|ranslation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:42764)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:42834)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|guage(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:42929)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:42999)'
                                .')'
                            .')'
                        .')'
                        .'|o(?'
                            .'|cale(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:43095)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:43165)'
                                .')'
                                .'|\\-translation(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:43264)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:43334)'
                                    .')'
                                .')'
                            .')'
                            .'|g\\-entry(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:43430)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:43500)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|m(?'
                        .'|ai(?'
                            .'|l\\-(?'
                                .'|header\\-footer(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:43618)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:43688)'
                                    .')'
                                    .'|\\-translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:43787)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:43857)'
                                        .')'
                                    .')'
                                .')'
                                .'|template(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:43953)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:44023)'
                                    .')'
                                    .'|\\-(?'
                                        .'|media(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:44119)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:44189)'
                                            .')'
                                        .')'
                                        .'|t(?'
                                            .'|ranslation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:44290)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:44360)'
                                                .')'
                                            .')'
                                            .'|ype(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:44450)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:44520)'
                                                .')'
                                                .'|\\-translation(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:44619)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:44689)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|n\\-category(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:44792)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:44862)'
                                .')'
                            .')'
                        .')'
                        .'|edia(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:44954)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:45024)'
                            .')'
                            .'|\\-(?'
                                .'|default\\-folder(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:45130)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:45200)'
                                    .')'
                                .')'
                                .'|folder(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:45293)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:45363)'
                                    .')'
                                    .'|\\-configuration(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:45464)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:45534)'
                                        .')'
                                        .'|\\-media\\-thumbnail\\-size(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:45644)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:45714)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|t(?'
                                    .'|ag(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:45809)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:45879)'
                                        .')'
                                    .')'
                                    .'|humbnail(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:45974)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:46044)'
                                        .')'
                                        .'|\\-size(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:46136)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:46206)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|ranslation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:46304)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:46374)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|n(?'
                        .'|ewsletter\\-recipient(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:46489)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:46559)'
                            .')'
                            .'|\\-tag(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:46650)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:46720)'
                                .')'
                            .')'
                        .')'
                        .'|otification(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:46819)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:46889)'
                            .')'
                        .')'
                        .'|umber\\-range(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:46988)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:47058)'
                            .')'
                            .'|\\-(?'
                                .'|s(?'
                                    .'|ales\\-channel(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:47166)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:47236)'
                                        .')'
                                    .')'
                                    .'|tate(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:47327)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:47397)'
                                        .')'
                                    .')'
                                .')'
                                .'|t(?'
                                    .'|ranslation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:47499)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:47569)'
                                        .')'
                                    .')'
                                    .'|ype(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:47659)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:47729)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:47828)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:47898)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|order(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:47995)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                            .'|(*:48065)'
                        .')'
                        .'|\\-address(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:48160)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:48230)'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
        48230 => '{^(?'
                .'|/api/(?'
                    .'|order\\-(?'
                        .'|customer(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:48338)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:48408)'
                            .')'
                        .')'
                        .'|delivery(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:48503)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:48573)'
                            .')'
                            .'|\\-position(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:48669)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:48739)'
                                .')'
                            .')'
                        .')'
                        .'|line\\-item(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:48837)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:48907)'
                            .')'
                            .'|\\-download(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:49003)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:49073)'
                                .')'
                            .')'
                        .')'
                        .'|t(?'
                            .'|ag(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:49167)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:49237)'
                                .')'
                            .')'
                            .'|ransaction(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:49334)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:49404)'
                                .')'
                                .'|\\-capture(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:49499)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:49569)'
                                    .')'
                                    .'|\\-refund(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:49663)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:49733)'
                                        .')'
                                        .'|\\-position(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:49829)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:49899)'
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
                                .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50003)'
                                .'|delivery(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50080)'
                                    .'|\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50156)'
                                .')'
                                .'|line\\-item(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50236)'
                                    .'|\\-download((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50312)'
                                .')'
                                .'|t(?'
                                    .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50385)'
                                    .'|ransaction(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50464)'
                                        .'|\\-capture(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50542)'
                                            .'|\\-refund(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50619)'
                                                .'|\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50695)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|p(?'
                                .'|ayment\\-method(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50787)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50866)'
                                .')'
                                .'|lugin(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50941)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51020)'
                                .')'
                                .'|ro(?'
                                    .'|duct(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51099)'
                                        .'|\\-(?'
                                            .'|c(?'
                                                .'|ategory(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51184)'
                                                    .'|\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51256)'
                                                .')'
                                                .'|onfigurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51343)'
                                                .'|ross\\-selling(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51425)'
                                                    .'|\\-(?'
                                                        .'|assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51514)'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51591)'
                                                    .')'
                                                .')'
                                                .'|ustom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51676)'
                                            .')'
                                            .'|download((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51751)'
                                            .'|export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51823)'
                                            .'|feature\\-set(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51904)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51983)'
                                            .')'
                                            .'|keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52069)'
                                            .'|m(?'
                                                .'|anufacturer(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52153)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52232)'
                                                .')'
                                                .'|edia((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52303)'
                                            .')'
                                            .'|option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52376)'
                                            .'|pr(?'
                                                .'|ice((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52450)'
                                                .'|operty((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52522)'
                                            .')'
                                            .'|review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52595)'
                                            .'|s(?'
                                                .'|earch\\-(?'
                                                    .'|config(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52684)'
                                                        .'|\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52757)'
                                                    .')'
                                                    .'|keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52831)'
                                                .')'
                                                .'|orting(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52907)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52986)'
                                                .')'
                                                .'|tream(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53061)'
                                                    .'|\\-(?'
                                                        .'|filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53138)'
                                                        .'|mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53211)'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53288)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53363)'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53439)'
                                            .')'
                                            .'|visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53516)'
                                        .')'
                                    .')'
                                    .'|motion(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53593)'
                                        .'|\\-(?'
                                            .'|cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53674)'
                                            .'|discount(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53751)'
                                                .'|\\-(?'
                                                    .'|prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53828)'
                                                    .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53898)'
                                                .')'
                                            .')'
                                            .'|individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53982)'
                                            .'|order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54059)'
                                            .'|persona\\-(?'
                                                .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54145)'
                                                .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54215)'
                                            .')'
                                            .'|s(?'
                                                .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54299)'
                                                .'|etgroup(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54375)'
                                                    .'|\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54447)'
                                                .')'
                                            .')'
                                            .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54526)'
                                        .')'
                                    .')'
                                    .'|perty\\-group(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54609)'
                                        .'|\\-option(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54686)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54765)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|\\-ids/(?'
                            .'|order\\-(?'
                                .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54863)'
                                .'|delivery(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54940)'
                                    .'|\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55016)'
                                .')'
                                .'|line\\-item(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55096)'
                                    .'|\\-download((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55172)'
                                .')'
                                .'|t(?'
                                    .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55245)'
                                    .'|ransaction(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55324)'
                                        .'|\\-capture(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55402)'
                                            .'|\\-refund(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55479)'
                                                .'|\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55555)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|p(?'
                                .'|ayment\\-method(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55647)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55726)'
                                .')'
                                .'|lugin(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55801)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55880)'
                                .')'
                                .'|ro(?'
                                    .'|duct(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55959)'
                                        .'|\\-(?'
                                            .'|c(?'
                                                .'|ategory(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56044)'
                                                    .'|\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56116)'
                                                .')'
                                                .'|onfigurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56203)'
                                                .'|ross\\-selling(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56285)'
                                                    .'|\\-(?'
                                                        .'|assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56374)'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56451)'
                                                    .')'
                                                .')'
                                                .'|ustom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56536)'
                                            .')'
                                            .'|download((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56611)'
                                            .'|export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56683)'
                                            .'|feature\\-set(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56764)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56843)'
                                            .')'
                                            .'|keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56929)'
                                            .'|m(?'
                                                .'|anufacturer(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57013)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57092)'
                                                .')'
                                                .'|edia((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57163)'
                                            .')'
                                            .'|option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57236)'
                                            .'|pr(?'
                                                .'|ice((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57310)'
                                                .'|operty((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57382)'
                                            .')'
                                            .'|review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57455)'
                                            .'|s(?'
                                                .'|earch\\-(?'
                                                    .'|config(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57544)'
                                                        .'|\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57617)'
                                                    .')'
                                                    .'|keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57691)'
                                                .')'
                                                .'|orting(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57767)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57846)'
                                                .')'
                                                .'|tream(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57921)'
                                                    .'|\\-(?'
                                                        .'|filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57998)'
                                                        .'|mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58071)'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58148)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58223)'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58299)'
                                            .')'
                                            .'|visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58376)'
                                        .')'
                                    .')'
                                    .'|motion(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58453)'
                                        .'|\\-(?'
                                            .'|cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58534)'
                                            .'|discount(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58611)'
                                                .'|\\-(?'
                                                    .'|prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58688)'
                                                    .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58758)'
                                                .')'
                                            .')'
                                            .'|individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58842)'
                                            .'|order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58919)'
                                            .'|persona\\-(?'
                                                .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59005)'
                                                .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59075)'
                                            .')'
                                            .'|s(?'
                                                .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59159)'
                                                .'|etgroup(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59235)'
                                                    .'|\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59307)'
                                                .')'
                                            .')'
                                            .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59386)'
                                        .')'
                                    .')'
                                    .'|perty\\-group(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59469)'
                                        .'|\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59543)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|aggregate/(?'
                        .'|order\\-(?'
                            .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59645)'
                            .'|delivery(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59722)'
                                .'|\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59798)'
                            .')'
                            .'|line\\-item(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59878)'
                                .'|\\-download((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59954)'
                            .')'
                            .'|t(?'
                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60027)'
                                .'|ransaction(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60106)'
                                    .'|\\-capture(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60184)'
                                        .'|\\-refund(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60261)'
                                            .'|\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60337)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|p(?'
                            .'|ayment\\-method(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60429)'
                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60508)'
                            .')'
                            .'|lugin(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60583)'
                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60662)'
                            .')'
                            .'|ro(?'
                                .'|duct(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60741)'
                                    .'|\\-(?'
                                        .'|c(?'
                                            .'|ategory(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60826)'
                                                .'|\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60898)'
                                            .')'
                                            .'|onfigurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60985)'
                                            .'|ross\\-selling(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61067)'
                                                .'|\\-(?'
                                                    .'|assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61156)'
                                                    .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61233)'
                                                .')'
                                            .')'
                                            .'|ustom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61318)'
                                        .')'
                                        .'|download((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61393)'
                                        .'|export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61465)'
                                        .'|feature\\-set(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61546)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61625)'
                                        .')'
                                        .'|keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61711)'
                                        .'|m(?'
                                            .'|anufacturer(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61795)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61874)'
                                            .')'
                                            .'|edia((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61945)'
                                        .')'
                                        .'|option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:62018)'
                                        .'|pr(?'
                                            .'|ice((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:62092)'
                                            .'|operty((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:62164)'
                                        .')'
                                        .'|review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:62237)'
                                        .'|s(?'
                                            .'|earch\\-(?'
                                                .'|config(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:62326)'
                                                    .'|\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:62399)'
                                                .')'
                                                .'|keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:62473)'
                                            .')'
                                            .'|orting(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:62549)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:62628)'
                                            .')'
                                            .'|tream(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:62703)'
                                                .'|\\-(?'
                                                    .'|filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:62780)'
                                                    .'|mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:62853)'
                                                    .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:62930)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|t(?'
                                            .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:63005)'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:63081)'
                                        .')'
                                        .'|visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:63158)'
                                    .')'
                                .')'
                                .'|motion(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:63235)'
                                    .'|\\-(?'
                                        .'|cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:63316)'
                                        .'|discount(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:63393)'
                                            .'|\\-(?'
                                                .'|prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:63470)'
                                                .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:63540)'
                                            .')'
                                        .')'
                                        .'|individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:63624)'
                                        .'|order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:63701)'
                                        .'|persona\\-(?'
                                            .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:63787)'
                                            .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:63857)'
                                        .')'
                                        .'|s(?'
                                            .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:63941)'
                                            .'|etgroup(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:64017)'
                                                .'|\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:64089)'
                                            .')'
                                        .')'
                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:64168)'
                                    .')'
                                .')'
                                .'|perty\\-group(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:64251)'
                                    .'|\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:64325)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|p(?'
                        .'|ayment\\-method(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:64432)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:64502)'
                            .')'
                            .'|\\-translation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:64601)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:64671)'
                                .')'
                            .')'
                        .')'
                        .'|lugin(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:64764)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:64834)'
                            .')'
                            .'|\\-translation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:64933)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:65003)'
                                .')'
                            .')'
                        .')'
                        .'|ro(?'
                            .'|duct(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:65100)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:65170)'
                                .')'
                                .'|\\-(?'
                                    .'|c(?'
                                        .'|ategory(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:65272)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:65342)'
                                            .')'
                                            .'|\\-tree(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:65434)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:65504)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|onfigurator\\-setting(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:65612)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:65682)'
                                            .')'
                                        .')'
                                        .'|ross\\-selling(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:65782)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:65852)'
                                            .')'
                                            .'|\\-(?'
                                                .'|assigned\\-products(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:65961)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:66031)'
                                                    .')'
                                                .')'
                                                .'|translation(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:66129)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:66199)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|ustom\\-field\\-set(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:66305)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:66375)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|download(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:66471)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:66541)'
                                        .')'
                                    .')'
                                    .'|export(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:66634)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:66704)'
                                        .')'
                                    .')'
                                    .'|feature\\-set(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:66803)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:66873)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:66972)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:67042)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|keyword\\-dictionary(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:67149)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:67219)'
                                        .')'
                                    .')'
                                    .'|m(?'
                                        .'|anufacturer(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:67321)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:67391)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:67490)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:67560)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|edia(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:67652)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:67722)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|option(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:67816)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:67886)'
                                        .')'
                                    .')'
                                    .'|pr(?'
                                        .'|ice(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:67981)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:68051)'
                                            .')'
                                        .')'
                                        .'|operty(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:68144)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:68214)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|review(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:68308)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:68378)'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|earch\\-(?'
                                            .'|config(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:68485)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:68555)'
                                                .')'
                                                .'|\\-field(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:68648)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:68718)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|keyword(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:68813)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:68883)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|orting(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:68977)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:69047)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:69146)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:69216)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|tream(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:69309)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:69379)'
                                            .')'
                                            .'|\\-(?'
                                                .'|filter(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:69476)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:69546)'
                                                    .')'
                                                .')'
                                                .'|mapping(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:69640)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:69710)'
                                                    .')'
                                                .')'
                                                .'|translation(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:69808)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:69878)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|t(?'
                                        .'|ag(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:69974)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:70044)'
                                            .')'
                                        .')'
                                        .'|ranslation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:70141)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:70211)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|visibility(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:70309)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:70379)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|motion(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:70474)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:70544)'
                                .')'
                                .'|\\-(?'
                                    .'|cart\\-rule(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:70645)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:70715)'
                                        .')'
                                    .')'
                                    .'|discount(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:70810)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:70880)'
                                        .')'
                                        .'|\\-(?'
                                            .'|prices(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:70977)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:71047)'
                                                .')'
                                            .')'
                                            .'|rule(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:71138)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:71208)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|individual\\-code(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:71313)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:71383)'
                                        .')'
                                    .')'
                                    .'|order\\-rule(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:71481)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:71551)'
                                        .')'
                                    .')'
                                    .'|persona\\-(?'
                                        .'|customer(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:71658)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:71728)'
                                            .')'
                                        .')'
                                        .'|rule(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:71819)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:71889)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|ales\\-channel(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:71994)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:72064)'
                                            .')'
                                        .')'
                                        .'|etgroup(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:72158)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:72228)'
                                            .')'
                                            .'|\\-rule(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:72320)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:72390)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:72490)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:72560)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|perty\\-group(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:72661)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:72731)'
                                .')'
                                .'|\\-option(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:72825)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:72895)'
                                    .')'
                                    .'|\\-translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:72994)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73061)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
        73061 => '{^(?'
                .'|/api/(?'
                    .'|s(?'
                        .'|e(?'
                            .'|arch(?'
                                .'|\\-ids/(?'
                                    .'|property\\-group\\-(?'
                                        .'|option\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73195)'
                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73272)'
                                    .')'
                                    .'|rule(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73346)'
                                        .'|\\-(?'
                                            .'|condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73426)'
                                            .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73495)'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|al(?'
                                            .'|es\\-channel(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73586)'
                                                .'|\\-(?'
                                                    .'|analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73666)'
                                                    .'|c(?'
                                                        .'|ountry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73742)'
                                                        .'|urrency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73815)'
                                                    .')'
                                                    .'|domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73888)'
                                                    .'|language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73962)'
                                                    .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74043)'
                                                    .'|shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74125)'
                                                    .'|t(?'
                                                        .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74205)'
                                                        .'|ype(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74277)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74356)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|utation(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74436)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74515)'
                                            .')'
                                        .')'
                                        .'|c(?'
                                            .'|heduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74600)'
                                            .'|ript((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74670)'
                                        .')'
                                        .'|eo\\-url(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74747)'
                                            .'|\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74823)'
                                        .')'
                                        .'|hipping\\-method(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74908)'
                                            .'|\\-(?'
                                                .'|price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74984)'
                                                .'|t(?'
                                                    .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75056)'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75132)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|nippet(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75210)'
                                            .'|\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75281)'
                                        .')'
                                        .'|tate\\-machine(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75364)'
                                            .'|\\-(?'
                                                .'|history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75442)'
                                                .'|state(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75516)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75595)'
                                                .')'
                                                .'|trans(?'
                                                    .'|ition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75675)'
                                                    .'|lation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75747)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|wag(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75822)'
                                            .'|\\-(?'
                                                .'|language\\-pack\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75917)'
                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75994)'
                                            .')'
                                        .')'
                                        .'|ystem\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76075)'
                                    .')'
                                    .'|t(?'
                                        .'|a(?'
                                            .'|g((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76151)'
                                            .'|x(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76221)'
                                                .'|\\-(?'
                                                    .'|provider(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76303)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76382)'
                                                    .')'
                                                    .'|rule(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76456)'
                                                        .'|\\-type(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76531)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76610)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|heme(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76688)'
                                            .'|\\-(?'
                                                .'|child((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76764)'
                                                .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76835)'
                                                .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76915)'
                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76992)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|u(?'
                                        .'|nit(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77071)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77150)'
                                        .')'
                                        .'|ser(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77223)'
                                            .'|\\-(?'
                                                .'|access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77305)'
                                                .'|config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77377)'
                                                .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77451)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|version(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77530)'
                                        .'|\\-commit(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77607)'
                                            .'|\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77679)'
                                        .')'
                                    .')'
                                    .'|webhook(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77757)'
                                        .'|\\-event\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77835)'
                                    .')'
                                .')'
                                .'|/(?'
                                    .'|property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77935)'
                                    .'|rule(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78008)'
                                        .'|\\-(?'
                                            .'|condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78088)'
                                            .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78157)'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|al(?'
                                            .'|es\\-channel(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78248)'
                                                .'|\\-(?'
                                                    .'|analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78328)'
                                                    .'|c(?'
                                                        .'|ountry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78404)'
                                                        .'|urrency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78477)'
                                                    .')'
                                                    .'|domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78550)'
                                                    .'|language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78624)'
                                                    .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78705)'
                                                    .'|shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78787)'
                                                    .'|t(?'
                                                        .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78867)'
                                                        .'|ype(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78939)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79018)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|utation(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79098)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79177)'
                                            .')'
                                        .')'
                                        .'|c(?'
                                            .'|heduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79262)'
                                            .'|ript((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79332)'
                                        .')'
                                        .'|eo\\-url(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79409)'
                                            .'|\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79485)'
                                        .')'
                                        .'|hipping\\-method(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79570)'
                                            .'|\\-(?'
                                                .'|price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79646)'
                                                .'|t(?'
                                                    .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79718)'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79794)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|nippet(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79872)'
                                            .'|\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79943)'
                                        .')'
                                        .'|tate\\-machine(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:80026)'
                                            .'|\\-(?'
                                                .'|history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:80104)'
                                                .'|state(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:80178)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:80257)'
                                                .')'
                                                .'|trans(?'
                                                    .'|ition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:80337)'
                                                    .'|lation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:80409)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|wag(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:80484)'
                                            .'|\\-(?'
                                                .'|language\\-pack\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:80579)'
                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:80656)'
                                            .')'
                                        .')'
                                        .'|ystem\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:80737)'
                                    .')'
                                    .'|t(?'
                                        .'|a(?'
                                            .'|g((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:80813)'
                                            .'|x(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:80883)'
                                                .'|\\-(?'
                                                    .'|provider(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:80965)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:81044)'
                                                    .')'
                                                    .'|rule(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:81118)'
                                                        .'|\\-type(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:81193)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:81272)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|heme(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:81350)'
                                            .'|\\-(?'
                                                .'|child((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:81426)'
                                                .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:81497)'
                                                .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:81577)'
                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:81654)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|u(?'
                                        .'|nit(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:81733)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:81812)'
                                        .')'
                                        .'|ser(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:81885)'
                                            .'|\\-(?'
                                                .'|access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:81967)'
                                                .'|config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:82039)'
                                                .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:82113)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|version(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:82192)'
                                        .'|\\-commit(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:82269)'
                                            .'|\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:82341)'
                                        .')'
                                    .')'
                                    .'|webhook(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:82419)'
                                        .'|\\-event\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:82497)'
                                    .')'
                                .')'
                            .')'
                            .'|o\\-url(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:82591)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:82661)'
                                .')'
                                .'|\\-template(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:82757)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:82827)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|al(?'
                            .'|es\\-channel(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:82932)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:83002)'
                                .')'
                                .'|\\-(?'
                                    .'|analytics(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:83102)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:83172)'
                                        .')'
                                    .')'
                                    .'|c(?'
                                        .'|ountry(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:83269)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:83339)'
                                            .')'
                                        .')'
                                        .'|urrency(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:83433)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:83503)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|domain(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:83597)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:83667)'
                                        .')'
                                    .')'
                                    .'|language(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:83762)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:83832)'
                                        .')'
                                    .')'
                                    .'|payment\\-method(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:83934)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:84004)'
                                        .')'
                                    .')'
                                    .'|shipping\\-method(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:84107)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:84177)'
                                        .')'
                                    .')'
                                    .'|t(?'
                                        .'|ranslation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:84278)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:84348)'
                                            .')'
                                        .')'
                                        .'|ype(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:84438)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:84508)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:84607)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:84677)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|utation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:84775)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:84845)'
                                .')'
                                .'|\\-translation(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:84944)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:85014)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|c(?'
                            .'|heduled\\-task(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:85120)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:85190)'
                                .')'
                            .')'
                            .'|ript(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:85281)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:85351)'
                                .')'
                            .')'
                        .')'
                        .'|hipping\\-method(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:85454)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:85524)'
                            .')'
                            .'|\\-(?'
                                .'|price(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:85620)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:85690)'
                                    .')'
                                .')'
                                .'|t(?'
                                    .'|ag(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:85783)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:85853)'
                                        .')'
                                    .')'
                                    .'|ranslation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:85950)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:86020)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|nippet(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:86116)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:86186)'
                            .')'
                            .'|\\-set(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:86277)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:86347)'
                                .')'
                            .')'
                        .')'
                        .'|tate\\-machine(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:86448)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:86518)'
                            .')'
                            .'|\\-(?'
                                .'|history(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:86616)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:86686)'
                                    .')'
                                .')'
                                .'|state(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:86778)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:86848)'
                                    .')'
                                    .'|\\-translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:86947)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:87017)'
                                        .')'
                                    .')'
                                .')'
                                .'|trans(?'
                                    .'|ition(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:87118)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:87188)'
                                        .')'
                                    .')'
                                    .'|lation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:87281)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:87351)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|wag(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:87444)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:87514)'
                            .')'
                            .'|\\-(?'
                                .'|language\\-pack\\-language(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:87629)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:87699)'
                                    .')'
                                .')'
                                .'|translation(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:87797)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:87867)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|ystem\\-config(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:87969)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:88039)'
                            .')'
                        .')'
                    .')'
                    .'|a(?'
                        .'|ggregate/(?'
                            .'|property\\-group\\-(?'
                                .'|option\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88163)'
                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88240)'
                            .')'
                            .'|rule(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88314)'
                                .'|\\-(?'
                                    .'|condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88394)'
                                    .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88463)'
                                .')'
                            .')'
                            .'|s(?'
                                .'|al(?'
                                    .'|es\\-channel(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88554)'
                                        .'|\\-(?'
                                            .'|analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88634)'
                                            .'|c(?'
                                                .'|ountry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88710)'
                                                .'|urrency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88783)'
                                            .')'
                                            .'|domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88856)'
                                            .'|language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88930)'
                                            .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89011)'
                                            .'|shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89093)'
                                            .'|t(?'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89173)'
                                                .'|ype(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89245)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89324)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|utation(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89404)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89483)'
                                    .')'
                                .')'
                                .'|c(?'
                                    .'|heduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89568)'
                                    .'|ript((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89638)'
                                .')'
                                .'|eo\\-url(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89715)'
                                    .'|\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89791)'
                                .')'
                                .'|hipping\\-method(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89876)'
                                    .'|\\-(?'
                                        .'|price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89952)'
                                        .'|t(?'
                                            .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:90024)'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:90100)'
                                        .')'
                                    .')'
                                .')'
                                .'|nippet(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:90178)'
                                    .'|\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:90249)'
                                .')'
                                .'|tate\\-machine(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:90332)'
                                    .'|\\-(?'
                                        .'|history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:90410)'
                                        .'|state(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:90484)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:90563)'
                                        .')'
                                        .'|trans(?'
                                            .'|ition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:90643)'
                                            .'|lation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:90715)'
                                        .')'
                                    .')'
                                .')'
                                .'|wag(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:90790)'
                                    .'|\\-(?'
                                        .'|language\\-pack\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:90885)'
                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:90962)'
                                    .')'
                                .')'
                                .'|ystem\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:91043)'
                            .')'
                            .'|t(?'
                                .'|a(?'
                                    .'|g((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:91119)'
                                    .'|x(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:91189)'
                                        .'|\\-(?'
                                            .'|provider(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:91271)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:91350)'
                                            .')'
                                            .'|rule(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:91424)'
                                                .'|\\-type(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:91499)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:91578)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|heme(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:91656)'
                                    .'|\\-(?'
                                        .'|child((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:91732)'
                                        .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:91803)'
                                        .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:91883)'
                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:91960)'
                                    .')'
                                .')'
                            .')'
                            .'|u(?'
                                .'|nit(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:92039)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:92118)'
                                .')'
                                .'|ser(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:92191)'
                                    .'|\\-(?'
                                        .'|access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:92273)'
                                        .'|config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:92345)'
                                        .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:92419)'
                                    .')'
                                .')'
                            .')'
                            .'|version(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:92498)'
                                .'|\\-commit(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:92575)'
                                    .'|\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:92647)'
                                .')'
                            .')'
                            .'|webhook(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:92725)'
                                .'|\\-event\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:92803)'
                            .')'
                        .')'
                        .'|cl\\-role(?'
                            .'|(*:92826)'
                            .'|/([^/]++)(?'
                                .'|(*:92848)'
                            .')'
                        .')'
                    .')'
                    .'|property\\-group\\-(?'
                        .'|option\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:92956)'
                        .'|translation(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:93052)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:93122)'
                            .')'
                        .')'
                    .')'
                    .'|rule(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:93214)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                            .'|(*:93284)'
                        .')'
                        .'|\\-(?'
                            .'|condition(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:93384)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:93454)'
                                .')'
                            .')'
                            .'|tag(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:93544)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:93614)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|t(?'
                        .'|a(?'
                            .'|g(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:93712)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:93782)'
                                .')'
                            .')'
                            .'|x(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:93870)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:93940)'
                                .')'
                                .'|\\-(?'
                                    .'|provider(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:94039)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:94109)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:94208)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:94278)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|rule(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:94370)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:94440)'
                                        .')'
                                        .'|\\-type(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:94532)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:94602)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:94701)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:94771)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|heme(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:94867)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:94937)'
                            .')'
                            .'|\\-(?'
                                .'|child(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:95033)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:95103)'
                                    .')'
                                .')'
                                .'|media(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:95195)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:95265)'
                                    .')'
                                .')'
                                .'|sales\\-channel(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:95366)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:95436)'
                                    .')'
                                .')'
                                .'|translation(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:95534)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:95604)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|u(?'
                        .'|nit(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:95701)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:95771)'
                            .')'
                            .'|\\-translation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:95870)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:95940)'
                                .')'
                            .')'
                        .')'
                        .'|ser(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:96028)'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:96094)'
                            .'|\\-(?'
                                .'|access\\-key(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:96195)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:96265)'
                                    .')'
                                .')'
                                .'|config(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:96358)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:96428)'
                                    .')'
                                .')'
                                .'|recovery(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:96523)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:96593)'
                                    .')'
                                .')'
                            .')'
                            .'|/([^/]++)(?'
                                .'|(*:96618)'
                                .'|/ac(?'
                                    .'|cess\\-keys/([^/]++)(*:96653)'
                                    .'|l\\-roles/([^/]++)(*:96680)'
                                .')'
                                .'|(*:96691)'
                            .')'
                            .'|(*:96702)'
                        .')'
                    .')'
                    .'|version(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:96796)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                            .'|(*:96866)'
                        .')'
                        .'|\\-commit(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:96960)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:97030)'
                            .')'
                            .'|\\-data(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:97122)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:97192)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|webhook(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:97288)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                            .'|(*:97358)'
                        .')'
                        .'|\\-event\\-log(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:97456)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:97526)'
                            .')'
                        .')'
                    .')'
                    .'|integration(?'
                        .'|(*:97553)'
                        .'|/([^/]++)(*:97572)'
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
        4831 => [[['_route' => 'api.custom_entity_entity.aggregate', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::aggregate'], ['entityName', 'path'], ['POST' => 0], null, false, true, null]],
        4896 => [[['_route' => 'api.custom_entity.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        4970 => [[['_route' => 'api.custom_field.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5040 => [[['_route' => 'api.custom_field_set.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5116 => [[['_route' => 'api.currency.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5203 => [[['_route' => 'api.currency_country_rounding.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5279 => [[['_route' => 'api.currency_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5354 => [[['_route' => 'api.ce_entity.aggregate', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::aggregateShorthand'], ['entityName', 'path'], ['POST' => 0], null, false, true, null]],
        5429 => [[['_route' => 'api.category.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5502 => [[['_route' => 'api.category_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5577 => [[['_route' => 'api.category_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5656 => [[['_route' => 'api.cms_block.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5728 => [[['_route' => 'api.cms_page.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5806 => [[['_route' => 'api.cms_page_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5882 => [[['_route' => 'api.cms_section.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5953 => [[['_route' => 'api.cms_slot.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6031 => [[['_route' => 'api.cms_slot_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6108 => [[['_route' => 'api.country.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6186 => [[['_route' => 'api.country_state.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6264 => [[['_route' => 'api.country_state_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6341 => [[['_route' => 'api.country_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6424 => [[['_route' => 'api.acl_role.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'acl-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6499 => [[['_route' => 'api.acl_user_role.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6570 => [[['_route' => 'api.app.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6660 => [[['_route' => 'api.app_action_button.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-action-button', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6738 => [[['_route' => 'api.app_action_button_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-action-button-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6826 => [[['_route' => 'api.app_administration_snippet.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-administration-snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6905 => [[['_route' => 'api.app_cms_block.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6983 => [[['_route' => 'api.app_cms_block_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-cms-block-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7067 => [[['_route' => 'api.app_flow_action.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-flow-action', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7145 => [[['_route' => 'api.app_flow_action_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-flow-action-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7216 => [[['_route' => 'api.app_flow_event.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-flow-event', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7297 => [[['_route' => 'api.app_payment_method.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7385 => [[['_route' => 'api.app_script_condition.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-script-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7463 => [[['_route' => 'api.app_script_condition_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-script-condition-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7544 => [[['_route' => 'api.app_shipping_method.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7621 => [[['_route' => 'api.app_template.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7696 => [[['_route' => 'api.app_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7782 => [[['_route' => 'api.basic_example.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'basic-example', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7853 => [[['_route' => 'api.blog.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'blog', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7934 => [[['_route' => 'api.blog_category.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'blog-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8011 => [[['_route' => 'api.blog_category_mapping.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'blog-category-mapping', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8087 => [[['_route' => 'api.blog_category_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'blog-category-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8170 => [[['_route' => 'api.blog_product_mapping.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'blog-product-mapping', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8246 => [[['_route' => 'api.blog_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'blog-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8342 => [[['_route' => 'api.acl_role.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'acl-role', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        8407 => [[['_route' => 'api.acl_role.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'acl-role', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        8502 => [
            [['_route' => 'api.acl_user_role.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.acl_user_role.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.acl_user_role.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        8571 => [
            [['_route' => 'api.acl_user_role.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.acl_user_role.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        8598 => [[['_route' => 'api.script_endpoint', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Script\\Api\\ScriptApiRoute::execute'], ['hook'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        8715 => [[['_route' => 'api.custom_entity_entity.search-ids', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::searchIds'], ['entityName', 'path'], ['POST' => 0], null, false, true, null]],
        8780 => [[['_route' => 'api.custom_entity.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8854 => [[['_route' => 'api.custom_field.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8924 => [[['_route' => 'api.custom_field_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9000 => [[['_route' => 'api.currency.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9087 => [[['_route' => 'api.currency_country_rounding.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9163 => [[['_route' => 'api.currency_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9238 => [[['_route' => 'api.ce_entity.search-ids', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::searchIdsShorthand'], ['entityName', 'path'], ['POST' => 0], null, false, true, null]],
        9313 => [[['_route' => 'api.category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9386 => [[['_route' => 'api.category_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9461 => [[['_route' => 'api.category_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9540 => [[['_route' => 'api.cms_block.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9612 => [[['_route' => 'api.cms_page.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9690 => [[['_route' => 'api.cms_page_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9766 => [[['_route' => 'api.cms_section.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9837 => [[['_route' => 'api.cms_slot.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9915 => [[['_route' => 'api.cms_slot_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9992 => [[['_route' => 'api.country.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10070 => [[['_route' => 'api.country_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10149 => [[['_route' => 'api.country_state_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10227 => [[['_route' => 'api.country_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10311 => [[['_route' => 'api.acl_role.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'acl-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10387 => [[['_route' => 'api.acl_user_role.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10459 => [[['_route' => 'api.app.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10550 => [[['_route' => 'api.app_action_button.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-action-button', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10629 => [[['_route' => 'api.app_action_button_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-action-button-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10718 => [[['_route' => 'api.app_administration_snippet.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-administration-snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10798 => [[['_route' => 'api.app_cms_block.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10877 => [[['_route' => 'api.app_cms_block_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-cms-block-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10962 => [[['_route' => 'api.app_flow_action.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-flow-action', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11041 => [[['_route' => 'api.app_flow_action_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-flow-action-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11113 => [[['_route' => 'api.app_flow_event.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-flow-event', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11195 => [[['_route' => 'api.app_payment_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11284 => [[['_route' => 'api.app_script_condition.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-script-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11363 => [[['_route' => 'api.app_script_condition_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-script-condition-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11445 => [[['_route' => 'api.app_shipping_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11523 => [[['_route' => 'api.app_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11599 => [[['_route' => 'api.app_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11686 => [[['_route' => 'api.basic_example.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'basic-example', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11758 => [[['_route' => 'api.blog.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'blog', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11840 => [[['_route' => 'api.blog_category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'blog-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11918 => [[['_route' => 'api.blog_category_mapping.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'blog-category-mapping', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11995 => [[['_route' => 'api.blog_category_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'blog-category-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12079 => [[['_route' => 'api.blog_product_mapping.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'blog-product-mapping', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12156 => [[['_route' => 'api.blog_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'blog-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12262 => [[['_route' => 'api.custom_entity_entity.search', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::search'], ['entityName', 'path'], ['POST' => 0], null, false, true, null]],
        12328 => [[['_route' => 'api.custom_entity.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12403 => [[['_route' => 'api.custom_field.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12474 => [[['_route' => 'api.custom_field_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12551 => [[['_route' => 'api.currency.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12639 => [[['_route' => 'api.currency_country_rounding.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12716 => [[['_route' => 'api.currency_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12792 => [[['_route' => 'api.ce_entity.search', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::searchShorthand'], ['entityName', 'path'], ['POST' => 0], null, false, true, null]],
        12868 => [[['_route' => 'api.category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12942 => [[['_route' => 'api.category_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13018 => [[['_route' => 'api.category_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13098 => [[['_route' => 'api.cms_block.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13171 => [[['_route' => 'api.cms_page.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13250 => [[['_route' => 'api.cms_page_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13327 => [[['_route' => 'api.cms_section.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13399 => [[['_route' => 'api.cms_slot.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13478 => [[['_route' => 'api.cms_slot_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13556 => [[['_route' => 'api.country.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13635 => [[['_route' => 'api.country_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13714 => [[['_route' => 'api.country_state_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13792 => [[['_route' => 'api.country_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13876 => [[['_route' => 'api.acl_role.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'acl-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13952 => [[['_route' => 'api.acl_user_role.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14024 => [[['_route' => 'api.app.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14115 => [[['_route' => 'api.app_action_button.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-action-button', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14194 => [[['_route' => 'api.app_action_button_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-action-button-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14283 => [[['_route' => 'api.app_administration_snippet.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-administration-snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14363 => [[['_route' => 'api.app_cms_block.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14442 => [[['_route' => 'api.app_cms_block_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-cms-block-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14527 => [[['_route' => 'api.app_flow_action.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-flow-action', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14606 => [[['_route' => 'api.app_flow_action_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-flow-action-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14678 => [[['_route' => 'api.app_flow_event.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-flow-event', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14760 => [[['_route' => 'api.app_payment_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14849 => [[['_route' => 'api.app_script_condition.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-script-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14928 => [[['_route' => 'api.app_script_condition_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-script-condition-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        15010 => [[['_route' => 'api.app_shipping_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        15088 => [[['_route' => 'api.app_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        15164 => [[['_route' => 'api.app_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        15251 => [[['_route' => 'api.basic_example.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'basic-example', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        15323 => [[['_route' => 'api.blog.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'blog', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        15405 => [[['_route' => 'api.blog_category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'blog-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        15483 => [[['_route' => 'api.blog_category_mapping.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'blog-category-mapping', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        15560 => [[['_route' => 'api.blog_category_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'blog-category-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        15644 => [[['_route' => 'api.blog_product_mapping.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'blog-product-mapping', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        15721 => [[['_route' => 'api.blog_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'blog-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        15762 => [[['_route' => 'api.service.activate', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['api_service_toggle'], '_controller' => 'Shopware\\Core\\Service\\Api\\ServiceController::activate'], ['serviceName'], ['POST' => 0], null, false, true, null]],
        15791 => [[['_route' => 'api.service.deactivate', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['api_service_toggle'], '_controller' => 'Shopware\\Core\\Service\\Api\\ServiceController::deactivate'], ['serviceName'], ['POST' => 0], null, false, true, null]],
        15819 => [[['_route' => 'api.service.uninstall', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['api_service_toggle'], '_controller' => 'Shopware\\Core\\Service\\Api\\ServiceController::uninstall'], ['serviceName'], ['POST' => 0], null, false, true, null]],
        15937 => [[['_route' => 'api.custom_entity_entity.detail', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::detail'], ['entityName', 'path'], ['GET' => 0], null, false, true, null]],
        16010 => [
            [['_route' => 'api.custom_entity_entity.list', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::list'], ['entityName', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_entity_entity.create', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::create'], ['entityName', 'path'], ['POST' => 0], null, false, true, null],
        ],
        16098 => [
            [['_route' => 'api.custom_entity_entity.update', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::update'], ['entityName', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_entity_entity.delete', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::delete'], ['entityName', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        16182 => [
            [['_route' => 'api.custom_entity.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_entity.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_entity.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        16252 => [
            [['_route' => 'api.custom_entity.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_entity.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        16344 => [
            [['_route' => 'api.custom_field.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_field.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        16414 => [
            [['_route' => 'api.custom_field.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        16505 => [
            [['_route' => 'api.custom_field_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        16575 => [
            [['_route' => 'api.custom_field_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        16665 => [[['_route' => 'api.custom_field_set_relation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        16759 => [
            [['_route' => 'api.currency.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.currency.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        16829 => [
            [['_route' => 'api.currency.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        16937 => [
            [['_route' => 'api.currency_country_rounding.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency_country_rounding.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.currency_country_rounding.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        17007 => [
            [['_route' => 'api.currency_country_rounding.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency_country_rounding.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        17105 => [
            [['_route' => 'api.currency_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.currency_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        17175 => [
            [['_route' => 'api.currency_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        17270 => [[['_route' => 'api.ce_entity.detail', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::detailShorthand'], ['entityName', 'path'], ['GET' => 0], null, false, true, null]],
        17343 => [
            [['_route' => 'api.ce_entity.list', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::listShorthand'], ['entityName', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.ce_entity.create', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::createShorthand'], ['entityName', 'path'], ['POST' => 0], null, false, true, null],
        ],
        17431 => [
            [['_route' => 'api.ce_entity.update', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::updateShorthand'], ['entityName', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.ce_entity.delete', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::deleteShorthand'], ['entityName', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        17525 => [
            [['_route' => 'api.category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        17595 => [
            [['_route' => 'api.category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        17689 => [
            [['_route' => 'api.category_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        17759 => [
            [['_route' => 'api.category_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        17856 => [
            [['_route' => 'api.category_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        17926 => [
            [['_route' => 'api.category_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        18027 => [
            [['_route' => 'api.cms_block.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_block.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_block.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        18097 => [
            [['_route' => 'api.cms_block.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_block.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        18188 => [
            [['_route' => 'api.cms_page.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_page.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        18258 => [
            [['_route' => 'api.cms_page.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        18357 => [
            [['_route' => 'api.cms_page_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_page_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        18427 => [
            [['_route' => 'api.cms_page_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        18525 => [
            [['_route' => 'api.cms_section.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_section.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_section.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        18595 => [
            [['_route' => 'api.cms_section.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_section.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        18685 => [
            [['_route' => 'api.cms_slot.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        18755 => [
            [['_route' => 'api.cms_slot.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        18854 => [
            [['_route' => 'api.cms_slot_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        18924 => [
            [['_route' => 'api.cms_slot_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        19020 => [
            [['_route' => 'api.country.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        19090 => [
            [['_route' => 'api.country.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        19186 => [
            [['_route' => 'api.country_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        19256 => [
            [['_route' => 'api.country_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        19355 => [
            [['_route' => 'api.country_state_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_state_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        19425 => [
            [['_route' => 'api.country_state_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        19524 => [
            [['_route' => 'api.country_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        19594 => [
            [['_route' => 'api.country_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        19701 => [
            [['_route' => 'api.basic_example.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'basic-example', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.basic_example.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'basic-example', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.basic_example.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'basic-example', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        19771 => [
            [['_route' => 'api.basic_example.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'basic-example', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.basic_example.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'basic-example', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        19861 => [
            [['_route' => 'api.blog.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'blog', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.blog.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'blog', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.blog.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'blog', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        19931 => [
            [['_route' => 'api.blog.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'blog', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.blog.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'blog', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        20030 => [
            [['_route' => 'api.blog_category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'blog-category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.blog_category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'blog-category', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.blog_category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'blog-category', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        20100 => [
            [['_route' => 'api.blog_category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'blog-category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.blog_category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'blog-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        20198 => [
            [['_route' => 'api.blog_category_mapping.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'blog-category-mapping', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.blog_category_mapping.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'blog-category-mapping', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.blog_category_mapping.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'blog-category-mapping', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        20268 => [
            [['_route' => 'api.blog_category_mapping.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'blog-category-mapping', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.blog_category_mapping.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'blog-category-mapping', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        20366 => [
            [['_route' => 'api.blog_category_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'blog-category-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.blog_category_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'blog-category-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.blog_category_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'blog-category-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        20436 => [
            [['_route' => 'api.blog_category_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'blog-category-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.blog_category_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'blog-category-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        20541 => [
            [['_route' => 'api.blog_product_mapping.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'blog-product-mapping', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.blog_product_mapping.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'blog-product-mapping', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.blog_product_mapping.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'blog-product-mapping', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        20611 => [
            [['_route' => 'api.blog_product_mapping.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'blog-product-mapping', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.blog_product_mapping.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'blog-product-mapping', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        20709 => [
            [['_route' => 'api.blog_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'blog-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.blog_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'blog-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.blog_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'blog-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        20779 => [
            [['_route' => 'api.blog_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'blog-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.blog_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'blog-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        20829 => [[['_route' => 'frontend.app-system.generate-token', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AppController::generateToken'], ['name'], ['POST' => 0], null, false, false, null]],
        20865 => [[['_route' => 'administration.plugin.index', '_routeScope' => ['administration'], 'auth_required' => false, '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::pluginIndex'], ['pluginName'], ['GET' => 0], null, false, false, null]],
        20902 => [[['_route' => 'frontend.account.order.single.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::orderSingleOverview'], ['deepLinkCode'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        20925 => [[['_route' => 'frontend.account.edit-order.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::editOrder'], ['orderId'], ['GET' => 0], null, false, true, null]],
        20951 => [[['_route' => 'frontend.account.edit-order.change-payment-method', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::orderChangePayment'], ['orderId'], ['POST' => 0], null, false, true, null]],
        20976 => [[['_route' => 'frontend.account.edit-order.update-order', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::updateOrder'], ['orderId'], ['POST' => 0], null, false, true, null]],
        21018 => [[['_route' => 'frontend.account.order.single.document', '_routeScope' => ['storefront'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\DocumentController::downloadDocument'], ['documentId', 'deepLinkCode'], ['GET' => 0], null, false, true, null]],
        21037 => [[['_route' => 'frontend.account.order.single.document.a11y', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\DocumentController::downloadDocument'], ['documentId', 'deepLinkCode', 'fileType'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        21072 => [[['_route' => 'frontend.account.order.single.download', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\DownloadController::downloadFile'], ['orderId', 'downloadId'], ['GET' => 0], null, false, true, null]],
        21103 => [[['_route' => 'frontend.account.address.edit.page', '_routeScope' => ['storefront'], '_loginRequired' => true, '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::accountEditAddress'], ['addressId'], ['GET' => 0], null, false, true, null]],
        21139 => [[['_route' => 'frontend.account.address.set-default-address', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::switchDefaultAddress'], ['type', 'addressId'], ['POST' => 0], null, false, true, null]],
        21155 => [[['_route' => 'frontend.account.address.switch-default', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::checkoutSwitchDefaultAddress'], [], ['POST' => 0], null, false, false, null]],
        21171 => [[['_route' => 'frontend.account.address.create', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::saveAddress'], [], ['POST' => 0], null, false, false, null]],
        21189 => [[['_route' => 'frontend.account.address.edit.save', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::saveAddress'], ['addressId'], ['POST' => 0], null, false, true, null]],
        21214 => [[['_route' => 'frontend.account.address.delete', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::deleteAddress'], ['addressId'], ['POST' => 0], null, false, true, null]],
        21287 => [[['_route' => 'store-api.app-system.generate-token', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppJWTGenerateRoute::generate'], ['name'], ['POST' => 0], null, false, false, null]],
        21339 => [[['_route' => 'store-api.account.set.payment-method', '_routeScope' => ['store-api'], '_contextTokenRequired' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangePaymentMethodRoute::change'], ['paymentMethodId'], ['POST' => 0], null, false, true, null]],
        21368 => [[['_route' => 'store-api.account.address.delete', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\DeleteAddressRoute::delete'], ['addressId'], ['DELETE' => 0], null, false, true, null]],
        21407 => [[['_route' => 'store-api.account.address.change.default.shipping', '_routeScope' => ['store-api'], 'type' => 'shipping', '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SwitchDefaultAddressRoute::swap'], ['addressId'], ['PATCH' => 0], null, false, true, null]],
        21433 => [[['_route' => 'store-api.account.address.change.default.billing', '_routeScope' => ['store-api'], 'type' => 'billing', '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SwitchDefaultAddressRoute::swap'], ['addressId'], ['PATCH' => 0], null, false, true, null]],
        21452 => [[['_route' => 'store-api.account.address.update', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\UpsertAddressRoute::upsert'], ['addressId'], ['PATCH' => 0], null, false, true, null]],
        21479 => [[['_route' => 'store-api.script_endpoint', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Framework\\Script\\Api\\ScriptStoreApiRoute::execute'], ['hook'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        21509 => [[['_route' => 'store-api.sitemap.file', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\Sitemap\\SalesChannel\\SitemapFileRoute::getSitemapFile'], ['filePath'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        21546 => [[['_route' => 'store-api.country.state', '_routeScope' => ['store-api'], '_entity' => 'country', '_controller' => 'Shopware\\Core\\System\\Country\\SalesChannel\\CountryStateRoute::load'], ['countryId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        21572 => [[['_route' => 'store-api.category.detail', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\Category\\SalesChannel\\CategoryRoute::load'], ['navigationId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        21593 => [[['_route' => 'store-api.cms.detail', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\Cms\\SalesChannel\\CmsRoute::load'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        21638 => [[['_route' => 'store-api.customer.wishlist.add', '_routeScope' => ['store-api'], '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\AddWishlistProductRoute::add'], ['productId'], ['POST' => 0], null, false, true, null]],
        21663 => [[['_route' => 'store-api.customer.wishlist.delete', '_routeScope' => ['store-api'], '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\RemoveWishlistProductRoute::delete'], ['productId'], ['DELETE' => 0], null, false, true, null]],
        21711 => [[['_route' => 'store-api.customer-group-registration.config', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\CustomerGroupRegistrationSettingsRoute::load'], ['customerGroupId'], ['GET' => 0], null, false, true, null]],
        21762 => [[['_route' => 'store-api.product.export', '_routeScope' => ['store-api'], 'auth_required' => false, '_controller' => 'Shopware\\Core\\Content\\ProductExport\\SalesChannel\\ExportController::index'], ['accessKey', 'fileName'], ['GET' => 0], null, false, true, null]],
        21788 => [[['_route' => 'store-api.product.listing', '_routeScope' => ['store-api'], '_entity' => 'product', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Listing\\ResolveCriteriaProductListingRoute::load'], ['categoryId'], ['POST' => 0], null, false, true, null]],
        21829 => [[['_route' => 'store-api.product.cross-selling', '_routeScope' => ['store-api'], '_entity' => 'product', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\CrossSelling\\ProductCrossSellingRoute::load'], ['productId'], ['POST' => 0], null, false, false, null]],
        21852 => [[['_route' => 'store-api.product.find-variant', '_routeScope' => ['store-api'], '_entity' => 'product', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\FindVariant\\FindProductVariantRoute::load'], ['productId'], ['POST' => 0], null, false, false, null]],
        21872 => [[['_route' => 'store-api.product-review.list', '_routeScope' => ['store-api'], '_entity' => 'product_review', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Review\\ProductReviewRoute::load'], ['productId'], ['POST' => 0], null, false, false, null]],
        21882 => [[['_route' => 'store-api.product-review.save', '_routeScope' => ['store-api'], '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Review\\ProductReviewSaveRoute::save'], ['productId'], ['POST' => 0], null, false, false, null]],
        21894 => [[['_route' => 'store-api.product.detail', '_routeScope' => ['store-api'], '_entity' => 'product', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Detail\\ProductDetailRoute::load'], ['productId'], ['POST' => 0], null, false, true, null]],
        21931 => [[['_route' => 'store-api.breadcrumb', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\Breadcrumb\\SalesChannel\\BreadcrumbRoute::load'], ['id'], ['GET' => 0], null, false, true, null]],
        21969 => [[['_route' => 'store-api.navigation', '_routeScope' => ['store-api'], '_entity' => 'category', '_controller' => 'Shopware\\Core\\Content\\Category\\SalesChannel\\TreeBuildingNavigationRoute::load'], ['activeId', 'rootId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        22001 => [[['_route' => 'store-api.landing-page.detail', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\LandingPage\\SalesChannel\\LandingPageRoute::load'], ['landingPageId'], ['POST' => 0], null, false, true, null]],
        22043 => [[['_route' => 'store-api.account.order.single.download', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\DownloadRoute::load'], ['orderId', 'downloadId'], ['GET' => 0], null, false, true, null]],
        22093 => [[['_route' => 'store-api.document.download', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_entity' => 'document', 'deepLinkCode' => '', '_controller' => 'Shopware\\Core\\Checkout\\Document\\SalesChannel\\DocumentRoute::download'], ['documentId', 'deepLinkCode'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        22121 => [[['_route' => 'frontend.script_endpoint', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ScriptController::execute'], ['hook'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        22152 => [[['_route' => 'frontend.sitemap.proxy', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\SitemapController::sitemapProxy'], ['filePath'], ['GET' => 0], null, false, true, null]],
        22191 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        22212 => [[['_route' => 'pentatrion_vite_build_proxy', '_controller' => 'Pentatrion\\ViteBundle\\Controller\\ViteController::proxyBuild'], ['path'], null, null, false, true, null]],
        22269 => [[['_route' => 'widgets.account.order.detail', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::ajaxOrderDetail'], ['id'], ['GET' => 0], null, false, true, null]],
        22309 => [[['_route' => 'frontend.account.addressmanager', 'addressId' => null, '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::addressManagerUpsert'], ['addressId'], ['POST' => 0], null, false, true, null]],
        22340 => [[['_route' => 'frontend.cms.page', '_routeScope' => ['storefront'], 'id' => null, 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::page'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        22381 => [[['_route' => 'frontend.cms.navigation.page', '_routeScope' => ['storefront'], 'navigationId' => null, 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::category'], ['navigationId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        22407 => [[['_route' => 'frontend.cms.navigation.filter', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::filter'], ['navigationId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        22440 => [[['_route' => 'frontend.cms.buybox.switch', '_routeScope' => ['storefront'], 'productId' => null, 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::switchBuyBoxVariant'], ['productId'], ['GET' => 0], null, false, false, null]],
        22486 => [[['_route' => 'frontend.wishlist.product.delete', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::remove'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        22511 => [[['_route' => 'frontend.wishlist.product.add', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::ajaxAdd'], ['productId'], ['POST' => 0], null, false, true, null]],
        22544 => [[['_route' => 'frontend.wishlist.add.after.login', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::addAfterLogin'], ['productId'], ['GET' => 0], null, false, true, null]],
        22570 => [[['_route' => 'frontend.wishlist.product.remove', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::ajaxRemove'], ['productId'], ['POST' => 0], null, false, true, null]],
        22624 => [[['_route' => 'frontend.checkout.line-item.delete', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::deleteLineItem'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        22659 => [[['_route' => 'frontend.checkout.line-item.change-quantity', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::changeQuantity'], ['id'], ['POST' => 0], null, false, true, null]],
        22707 => [[['_route' => 'frontend.account.customer-group-registration.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::customerGroupRegistration'], ['customerGroupId'], ['GET' => 0], null, false, true, null]],
        22739 => [[['_route' => 'frontend.cms.page.full', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::pageFull'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        22774 => [[['_route' => 'frontend.detail.review.save', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::saveReview'], ['productId'], ['POST' => 0], null, false, false, null]],
        22790 => [[['_route' => 'frontend.product.reviews', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::loadReviews'], ['productId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        22823 => [[['_route' => 'frontend.landing.page', '_routeScope' => ['storefront'], '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\LandingPageController::index'], ['landingPageId'], ['GET' => 0], null, false, true, null]],
        22865 => [[['_route' => 'frontend.maintenance.singlepage', '_routeScope' => ['storefront'], 'allow_maintenance' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\MaintenanceController::renderSinglePage'], ['id'], ['GET' => 0], null, false, true, null]],
        22895 => [[['_route' => 'frontend.navigation.page', '_routeScope' => ['storefront'], '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\NavigationController::index'], ['navigationId'], ['GET' => 0], null, false, true, null]],
        22924 => [[['_route' => 'frontend.detail.page', '_routeScope' => ['storefront'], '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::index'], ['productId'], ['GET' => 0], null, false, true, null]],
        22941 => [[['_route' => 'frontend.detail.switch', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::switch'], ['productId'], ['GET' => 0], null, false, false, null]],
        22971 => [[['_route' => 'widgets.quickview.minimal', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::quickviewMinimal'], ['productId'], ['GET' => 0], null, false, true, null]],
        23092 => [
            [['_route' => 'api.custom_field_set_relation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set_relation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        23162 => [
            [['_route' => 'api.custom_field_set_relation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set_relation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        23251 => [
            [['_route' => 'api.customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        23321 => [
            [['_route' => 'api.customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        23419 => [
            [['_route' => 'api.customer_address.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_address.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_address.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        23489 => [
            [['_route' => 'api.customer_address.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_address.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        23581 => [
            [['_route' => 'api.customer_group.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        23651 => [
            [['_route' => 'api.customer_group.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        23771 => [
            [['_route' => 'api.customer_group_registration_sales_channels.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_registration_sales_channels.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_registration_sales_channels.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        23841 => [
            [['_route' => 'api.customer_group_registration_sales_channels.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_registration_sales_channels.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        23939 => [
            [['_route' => 'api.customer_group_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        24009 => [
            [['_route' => 'api.customer_group_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        24106 => [
            [['_route' => 'api.customer_recovery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_recovery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_recovery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        24176 => [
            [['_route' => 'api.customer_recovery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_recovery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        24266 => [
            [['_route' => 'api.customer_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        24336 => [
            [['_route' => 'api.customer_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        24431 => [
            [['_route' => 'api.customer_wishlist.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        24501 => [
            [['_route' => 'api.customer_wishlist.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        24596 => [
            [['_route' => 'api.customer_wishlist_product.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist_product.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist_product.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        24666 => [
            [['_route' => 'api.customer_wishlist_product.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist_product.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        24782 => [[['_route' => 'api.custom_field_set_relation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24853 => [[['_route' => 'api.customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24931 => [[['_route' => 'api.customer_address.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25005 => [[['_route' => 'api.customer_group.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25105 => [[['_route' => 'api.customer_group_registration_sales_channels.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25182 => [[['_route' => 'api.customer_group_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25258 => [[['_route' => 'api.customer_recovery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25327 => [[['_route' => 'api.customer_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25404 => [[['_route' => 'api.customer_wishlist.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25479 => [[['_route' => 'api.customer_wishlist_product.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25569 => [[['_route' => 'api.delivery_time.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25648 => [[['_route' => 'api.delivery_time_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25725 => [[['_route' => 'api.document.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25811 => [[['_route' => 'api.document_base_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25893 => [[['_route' => 'api.document_base_config_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25967 => [[['_route' => 'api.document_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26046 => [[['_route' => 'api.document_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26123 => [[['_route' => 'api.flow.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26202 => [[['_route' => 'api.flow_sequence.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26276 => [[['_route' => 'api.flow_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26370 => [[['_route' => 'api.import_export_file.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26439 => [[['_route' => 'api.import_export_log.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26515 => [[['_route' => 'api.import_export_profile.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26594 => [[['_route' => 'api.import_export_profile_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26675 => [[['_route' => 'api.integration.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26747 => [[['_route' => 'api.integration_role.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26837 => [[['_route' => 'api.landing_page.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26922 => [[['_route' => 'api.landing_page_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26994 => [[['_route' => 'api.landing_page_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27070 => [[['_route' => 'api.landing_page_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27144 => [[['_route' => 'api.language.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27222 => [[['_route' => 'api.locale.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27301 => [[['_route' => 'api.locale_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27376 => [[['_route' => 'api.log_entry.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27476 => [[['_route' => 'api.mail_header_footer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27555 => [[['_route' => 'api.mail_header_footer_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27633 => [[['_route' => 'api.mail_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27709 => [[['_route' => 'api.mail_template_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27789 => [[['_route' => 'api.mail_template_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27861 => [[['_route' => 'api.mail_template_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27940 => [[['_route' => 'api.mail_template_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28022 => [[['_route' => 'api.main_category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28096 => [[['_route' => 'api.media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28182 => [[['_route' => 'api.media_default_folder.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28257 => [[['_route' => 'api.media_folder.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28341 => [[['_route' => 'api.media_folder_configuration.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28431 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28505 => [[['_route' => 'api.media_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28582 => [[['_route' => 'api.media_thumbnail.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28654 => [[['_route' => 'api.media_thumbnail_size.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28731 => [[['_route' => 'api.media_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28828 => [[['_route' => 'api.newsletter_recipient.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28899 => [[['_route' => 'api.newsletter_recipient_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28977 => [[['_route' => 'api.notification.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29058 => [[['_route' => 'api.number_range.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29146 => [[['_route' => 'api.number_range_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29216 => [[['_route' => 'api.number_range_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29297 => [[['_route' => 'api.number_range_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29369 => [[['_route' => 'api.number_range_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29448 => [[['_route' => 'api.number_range_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29527 => [[['_route' => 'api.order.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29602 => [[['_route' => 'api.order_address.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29710 => [[['_route' => 'api.custom_field_set_relation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29781 => [[['_route' => 'api.customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29859 => [[['_route' => 'api.customer_address.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29933 => [[['_route' => 'api.customer_group.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30033 => [[['_route' => 'api.customer_group_registration_sales_channels.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30110 => [[['_route' => 'api.customer_group_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30186 => [[['_route' => 'api.customer_recovery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30255 => [[['_route' => 'api.customer_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30332 => [[['_route' => 'api.customer_wishlist.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30407 => [[['_route' => 'api.customer_wishlist_product.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30497 => [[['_route' => 'api.delivery_time.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30576 => [[['_route' => 'api.delivery_time_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30653 => [[['_route' => 'api.document.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30739 => [[['_route' => 'api.document_base_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30821 => [[['_route' => 'api.document_base_config_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30895 => [[['_route' => 'api.document_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30974 => [[['_route' => 'api.document_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31051 => [[['_route' => 'api.flow.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31130 => [[['_route' => 'api.flow_sequence.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31204 => [[['_route' => 'api.flow_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31298 => [[['_route' => 'api.import_export_file.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31367 => [[['_route' => 'api.import_export_log.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31443 => [[['_route' => 'api.import_export_profile.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31522 => [[['_route' => 'api.import_export_profile_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31603 => [[['_route' => 'api.integration.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31675 => [[['_route' => 'api.integration_role.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31765 => [[['_route' => 'api.landing_page.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31850 => [[['_route' => 'api.landing_page_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31922 => [[['_route' => 'api.landing_page_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31998 => [[['_route' => 'api.landing_page_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32072 => [[['_route' => 'api.language.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32150 => [[['_route' => 'api.locale.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32229 => [[['_route' => 'api.locale_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32304 => [[['_route' => 'api.log_entry.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32404 => [[['_route' => 'api.mail_header_footer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32483 => [[['_route' => 'api.mail_header_footer_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32561 => [[['_route' => 'api.mail_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32637 => [[['_route' => 'api.mail_template_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32717 => [[['_route' => 'api.mail_template_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32789 => [[['_route' => 'api.mail_template_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32868 => [[['_route' => 'api.mail_template_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32950 => [[['_route' => 'api.main_category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33024 => [[['_route' => 'api.media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33110 => [[['_route' => 'api.media_default_folder.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33185 => [[['_route' => 'api.media_folder.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33269 => [[['_route' => 'api.media_folder_configuration.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33359 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33433 => [[['_route' => 'api.media_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33510 => [[['_route' => 'api.media_thumbnail.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33582 => [[['_route' => 'api.media_thumbnail_size.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33659 => [[['_route' => 'api.media_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33756 => [[['_route' => 'api.newsletter_recipient.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33827 => [[['_route' => 'api.newsletter_recipient_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33905 => [[['_route' => 'api.notification.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33986 => [[['_route' => 'api.number_range.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34074 => [[['_route' => 'api.number_range_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34144 => [[['_route' => 'api.number_range_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34225 => [[['_route' => 'api.number_range_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34297 => [[['_route' => 'api.number_range_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34376 => [[['_route' => 'api.number_range_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34455 => [[['_route' => 'api.order.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34530 => [[['_route' => 'api.order_address.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34643 => [[['_route' => 'api.custom_field_set_relation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34714 => [[['_route' => 'api.customer.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34792 => [[['_route' => 'api.customer_address.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34866 => [[['_route' => 'api.customer_group.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34966 => [[['_route' => 'api.customer_group_registration_sales_channels.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35043 => [[['_route' => 'api.customer_group_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35119 => [[['_route' => 'api.customer_recovery.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35188 => [[['_route' => 'api.customer_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35265 => [[['_route' => 'api.customer_wishlist.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35340 => [[['_route' => 'api.customer_wishlist_product.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35430 => [[['_route' => 'api.delivery_time.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35509 => [[['_route' => 'api.delivery_time_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35586 => [[['_route' => 'api.document.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35672 => [[['_route' => 'api.document_base_config.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35754 => [[['_route' => 'api.document_base_config_sales_channel.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35828 => [[['_route' => 'api.document_type.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35907 => [[['_route' => 'api.document_type_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35984 => [[['_route' => 'api.flow.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36063 => [[['_route' => 'api.flow_sequence.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36137 => [[['_route' => 'api.flow_template.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36231 => [[['_route' => 'api.import_export_file.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36300 => [[['_route' => 'api.import_export_log.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36376 => [[['_route' => 'api.import_export_profile.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36455 => [[['_route' => 'api.import_export_profile_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36536 => [[['_route' => 'api.integration.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36608 => [[['_route' => 'api.integration_role.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36698 => [[['_route' => 'api.landing_page.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36783 => [[['_route' => 'api.landing_page_sales_channel.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36855 => [[['_route' => 'api.landing_page_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36931 => [[['_route' => 'api.landing_page_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37005 => [[['_route' => 'api.language.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37083 => [[['_route' => 'api.locale.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37162 => [[['_route' => 'api.locale_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37237 => [[['_route' => 'api.log_entry.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37337 => [[['_route' => 'api.mail_header_footer.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37416 => [[['_route' => 'api.mail_header_footer_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37494 => [[['_route' => 'api.mail_template.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37570 => [[['_route' => 'api.mail_template_media.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37650 => [[['_route' => 'api.mail_template_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37722 => [[['_route' => 'api.mail_template_type.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37801 => [[['_route' => 'api.mail_template_type_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37883 => [[['_route' => 'api.main_category.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37957 => [[['_route' => 'api.media.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        38043 => [[['_route' => 'api.media_default_folder.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        38118 => [[['_route' => 'api.media_folder.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        38202 => [[['_route' => 'api.media_folder_configuration.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        38292 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        38366 => [[['_route' => 'api.media_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        38443 => [[['_route' => 'api.media_thumbnail.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        38515 => [[['_route' => 'api.media_thumbnail_size.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        38592 => [[['_route' => 'api.media_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        38689 => [[['_route' => 'api.newsletter_recipient.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        38760 => [[['_route' => 'api.newsletter_recipient_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        38838 => [[['_route' => 'api.notification.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        38919 => [[['_route' => 'api.number_range.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        39007 => [[['_route' => 'api.number_range_sales_channel.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        39077 => [[['_route' => 'api.number_range_state.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        39158 => [[['_route' => 'api.number_range_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        39230 => [[['_route' => 'api.number_range_type.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        39309 => [[['_route' => 'api.number_range_type_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        39388 => [[['_route' => 'api.order.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        39463 => [[['_route' => 'api.order_address.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        39567 => [
            [['_route' => 'api.delivery_time.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        39637 => [
            [['_route' => 'api.delivery_time.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        39736 => [
            [['_route' => 'api.delivery_time_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        39806 => [
            [['_route' => 'api.delivery_time_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        39901 => [
            [['_route' => 'api.document.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        39971 => [
            [['_route' => 'api.document.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        40074 => [
            [['_route' => 'api.document_base_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        40144 => [
            [['_route' => 'api.document_base_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        40246 => [
            [['_route' => 'api.document_base_config_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        40316 => [
            [['_route' => 'api.document_base_config_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        40408 => [
            [['_route' => 'api.document_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        40478 => [
            [['_route' => 'api.document_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        40577 => [
            [['_route' => 'api.document_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        40647 => [
            [['_route' => 'api.document_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        40742 => [
            [['_route' => 'api.flow.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.flow.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        40812 => [
            [['_route' => 'api.flow.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        40911 => [
            [['_route' => 'api.flow_sequence.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow_sequence.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.flow_sequence.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        40981 => [
            [['_route' => 'api.flow_sequence.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow_sequence.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        41076 => [
            [['_route' => 'api.flow_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.flow_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        41146 => [
            [['_route' => 'api.flow_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        41261 => [
            [['_route' => 'api.import_export_file.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_file.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_file.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        41331 => [
            [['_route' => 'api.import_export_file.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_file.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        41421 => [
            [['_route' => 'api.import_export_log.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_log.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_log.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        41491 => [
            [['_route' => 'api.import_export_log.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_log.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        41585 => [
            [['_route' => 'api.import_export_profile.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        41655 => [
            [['_route' => 'api.import_export_profile.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        41754 => [
            [['_route' => 'api.import_export_profile_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        41824 => [
            [['_route' => 'api.import_export_profile_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        41923 => [
            [['_route' => 'api.integration.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.integration.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        41990 => [[['_route' => 'api.integration.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        42081 => [
            [['_route' => 'api.integration_role.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.integration_role.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.integration_role.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        42151 => [
            [['_route' => 'api.integration_role.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.integration_role.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        42259 => [
            [['_route' => 'api.landing_page.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.landing_page.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        42329 => [
            [['_route' => 'api.landing_page.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        42434 => [
            [['_route' => 'api.landing_page_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        42504 => [
            [['_route' => 'api.landing_page_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        42597 => [
            [['_route' => 'api.landing_page_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        42667 => [
            [['_route' => 'api.landing_page_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        42764 => [
            [['_route' => 'api.landing_page_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        42834 => [
            [['_route' => 'api.landing_page_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        42929 => [
            [['_route' => 'api.language.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.language.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.language.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        42999 => [
            [['_route' => 'api.language.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.language.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        43095 => [
            [['_route' => 'api.locale.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.locale.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        43165 => [
            [['_route' => 'api.locale.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        43264 => [
            [['_route' => 'api.locale_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.locale_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        43334 => [
            [['_route' => 'api.locale_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        43430 => [
            [['_route' => 'api.log_entry.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.log_entry.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.log_entry.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        43500 => [
            [['_route' => 'api.log_entry.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.log_entry.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        43618 => [
            [['_route' => 'api.mail_header_footer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        43688 => [
            [['_route' => 'api.mail_header_footer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        43787 => [
            [['_route' => 'api.mail_header_footer_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        43857 => [
            [['_route' => 'api.mail_header_footer_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        43953 => [
            [['_route' => 'api.mail_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44023 => [
            [['_route' => 'api.mail_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44119 => [
            [['_route' => 'api.mail_template_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44189 => [
            [['_route' => 'api.mail_template_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44290 => [
            [['_route' => 'api.mail_template_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44360 => [
            [['_route' => 'api.mail_template_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44450 => [
            [['_route' => 'api.mail_template_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44520 => [
            [['_route' => 'api.mail_template_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44619 => [
            [['_route' => 'api.mail_template_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44689 => [
            [['_route' => 'api.mail_template_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44792 => [
            [['_route' => 'api.main_category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.main_category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.main_category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44862 => [
            [['_route' => 'api.main_category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.main_category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44954 => [
            [['_route' => 'api.media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45024 => [
            [['_route' => 'api.media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45130 => [
            [['_route' => 'api.media_default_folder.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_default_folder.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_default_folder.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45200 => [
            [['_route' => 'api.media_default_folder.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_default_folder.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45293 => [
            [['_route' => 'api.media_folder.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45363 => [
            [['_route' => 'api.media_folder.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45464 => [
            [['_route' => 'api.media_folder_configuration.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45534 => [
            [['_route' => 'api.media_folder_configuration.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45644 => [
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45714 => [
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45809 => [
            [['_route' => 'api.media_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45879 => [
            [['_route' => 'api.media_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45974 => [
            [['_route' => 'api.media_thumbnail.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46044 => [
            [['_route' => 'api.media_thumbnail.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46136 => [
            [['_route' => 'api.media_thumbnail_size.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail_size.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail_size.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46206 => [
            [['_route' => 'api.media_thumbnail_size.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail_size.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46304 => [
            [['_route' => 'api.media_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46374 => [
            [['_route' => 'api.media_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46489 => [
            [['_route' => 'api.newsletter_recipient.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46559 => [
            [['_route' => 'api.newsletter_recipient.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46650 => [
            [['_route' => 'api.newsletter_recipient_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46720 => [
            [['_route' => 'api.newsletter_recipient_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46819 => [
            [['_route' => 'api.notification.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.notification.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.notification.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46889 => [
            [['_route' => 'api.notification.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.notification.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46988 => [
            [['_route' => 'api.number_range.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        47058 => [
            [['_route' => 'api.number_range.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        47166 => [
            [['_route' => 'api.number_range_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        47236 => [
            [['_route' => 'api.number_range_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        47327 => [
            [['_route' => 'api.number_range_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        47397 => [
            [['_route' => 'api.number_range_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        47499 => [
            [['_route' => 'api.number_range_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        47569 => [
            [['_route' => 'api.number_range_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        47659 => [
            [['_route' => 'api.number_range_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        47729 => [
            [['_route' => 'api.number_range_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        47828 => [
            [['_route' => 'api.number_range_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        47898 => [
            [['_route' => 'api.number_range_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        47995 => [
            [['_route' => 'api.order.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        48065 => [
            [['_route' => 'api.order.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        48160 => [
            [['_route' => 'api.order_address.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_address.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_address.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        48230 => [
            [['_route' => 'api.order_address.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_address.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        48338 => [
            [['_route' => 'api.order_customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        48408 => [
            [['_route' => 'api.order_customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        48503 => [
            [['_route' => 'api.order_delivery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        48573 => [
            [['_route' => 'api.order_delivery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        48669 => [
            [['_route' => 'api.order_delivery_position.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery_position.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery_position.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        48739 => [
            [['_route' => 'api.order_delivery_position.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery_position.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        48837 => [
            [['_route' => 'api.order_line_item.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        48907 => [
            [['_route' => 'api.order_line_item.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        49003 => [
            [['_route' => 'api.order_line_item_download.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item_download.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item_download.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        49073 => [
            [['_route' => 'api.order_line_item_download.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item_download.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        49167 => [
            [['_route' => 'api.order_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        49237 => [
            [['_route' => 'api.order_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        49334 => [
            [['_route' => 'api.order_transaction.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        49404 => [
            [['_route' => 'api.order_transaction.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        49499 => [
            [['_route' => 'api.order_transaction_capture.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        49569 => [
            [['_route' => 'api.order_transaction_capture.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        49663 => [
            [['_route' => 'api.order_transaction_capture_refund.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        49733 => [
            [['_route' => 'api.order_transaction_capture_refund.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        49829 => [
            [['_route' => 'api.order_transaction_capture_refund_position.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund_position.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund_position.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        49899 => [
            [['_route' => 'api.order_transaction_capture_refund_position.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund_position.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        50003 => [[['_route' => 'api.order_customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50080 => [[['_route' => 'api.order_delivery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50156 => [[['_route' => 'api.order_delivery_position.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50236 => [[['_route' => 'api.order_line_item.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50312 => [[['_route' => 'api.order_line_item_download.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50385 => [[['_route' => 'api.order_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50464 => [[['_route' => 'api.order_transaction.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50542 => [[['_route' => 'api.order_transaction_capture.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50619 => [[['_route' => 'api.order_transaction_capture_refund.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50695 => [[['_route' => 'api.order_transaction_capture_refund_position.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50787 => [[['_route' => 'api.payment_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50866 => [[['_route' => 'api.payment_method_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50941 => [[['_route' => 'api.plugin.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51020 => [[['_route' => 'api.plugin_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51099 => [[['_route' => 'api.product.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51184 => [[['_route' => 'api.product_category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51256 => [[['_route' => 'api.product_category_tree.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51343 => [[['_route' => 'api.product_configurator_setting.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51425 => [[['_route' => 'api.product_cross_selling.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51514 => [[['_route' => 'api.product_cross_selling_assigned_products.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51591 => [[['_route' => 'api.product_cross_selling_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51676 => [[['_route' => 'api.product_custom_field_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51751 => [[['_route' => 'api.product_download.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51823 => [[['_route' => 'api.product_export.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51904 => [[['_route' => 'api.product_feature_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51983 => [[['_route' => 'api.product_feature_set_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52069 => [[['_route' => 'api.product_keyword_dictionary.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52153 => [[['_route' => 'api.product_manufacturer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52232 => [[['_route' => 'api.product_manufacturer_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52303 => [[['_route' => 'api.product_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52376 => [[['_route' => 'api.product_option.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52450 => [[['_route' => 'api.product_price.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52522 => [[['_route' => 'api.product_property.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52595 => [[['_route' => 'api.product_review.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52684 => [[['_route' => 'api.product_search_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52757 => [[['_route' => 'api.product_search_config_field.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52831 => [[['_route' => 'api.product_search_keyword.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52907 => [[['_route' => 'api.product_sorting.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52986 => [[['_route' => 'api.product_sorting_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53061 => [[['_route' => 'api.product_stream.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53138 => [[['_route' => 'api.product_stream_filter.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53211 => [[['_route' => 'api.product_stream_mapping.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53288 => [[['_route' => 'api.product_stream_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53363 => [[['_route' => 'api.product_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53439 => [[['_route' => 'api.product_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53516 => [[['_route' => 'api.product_visibility.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53593 => [[['_route' => 'api.promotion.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53674 => [[['_route' => 'api.promotion_cart_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53751 => [[['_route' => 'api.promotion_discount.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53828 => [[['_route' => 'api.promotion_discount_prices.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53898 => [[['_route' => 'api.promotion_discount_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53982 => [[['_route' => 'api.promotion_individual_code.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54059 => [[['_route' => 'api.promotion_order_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54145 => [[['_route' => 'api.promotion_persona_customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54215 => [[['_route' => 'api.promotion_persona_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54299 => [[['_route' => 'api.promotion_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54375 => [[['_route' => 'api.promotion_setgroup.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54447 => [[['_route' => 'api.promotion_setgroup_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54526 => [[['_route' => 'api.promotion_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54609 => [[['_route' => 'api.property_group.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54686 => [[['_route' => 'api.property_group_option.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54765 => [[['_route' => 'api.property_group_option_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54863 => [[['_route' => 'api.order_customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54940 => [[['_route' => 'api.order_delivery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55016 => [[['_route' => 'api.order_delivery_position.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55096 => [[['_route' => 'api.order_line_item.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55172 => [[['_route' => 'api.order_line_item_download.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55245 => [[['_route' => 'api.order_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55324 => [[['_route' => 'api.order_transaction.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55402 => [[['_route' => 'api.order_transaction_capture.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55479 => [[['_route' => 'api.order_transaction_capture_refund.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55555 => [[['_route' => 'api.order_transaction_capture_refund_position.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55647 => [[['_route' => 'api.payment_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55726 => [[['_route' => 'api.payment_method_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55801 => [[['_route' => 'api.plugin.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55880 => [[['_route' => 'api.plugin_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55959 => [[['_route' => 'api.product.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56044 => [[['_route' => 'api.product_category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56116 => [[['_route' => 'api.product_category_tree.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56203 => [[['_route' => 'api.product_configurator_setting.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56285 => [[['_route' => 'api.product_cross_selling.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56374 => [[['_route' => 'api.product_cross_selling_assigned_products.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56451 => [[['_route' => 'api.product_cross_selling_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56536 => [[['_route' => 'api.product_custom_field_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56611 => [[['_route' => 'api.product_download.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56683 => [[['_route' => 'api.product_export.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56764 => [[['_route' => 'api.product_feature_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56843 => [[['_route' => 'api.product_feature_set_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56929 => [[['_route' => 'api.product_keyword_dictionary.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57013 => [[['_route' => 'api.product_manufacturer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57092 => [[['_route' => 'api.product_manufacturer_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57163 => [[['_route' => 'api.product_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57236 => [[['_route' => 'api.product_option.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57310 => [[['_route' => 'api.product_price.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57382 => [[['_route' => 'api.product_property.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57455 => [[['_route' => 'api.product_review.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57544 => [[['_route' => 'api.product_search_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57617 => [[['_route' => 'api.product_search_config_field.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57691 => [[['_route' => 'api.product_search_keyword.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57767 => [[['_route' => 'api.product_sorting.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57846 => [[['_route' => 'api.product_sorting_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57921 => [[['_route' => 'api.product_stream.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57998 => [[['_route' => 'api.product_stream_filter.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58071 => [[['_route' => 'api.product_stream_mapping.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58148 => [[['_route' => 'api.product_stream_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58223 => [[['_route' => 'api.product_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58299 => [[['_route' => 'api.product_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58376 => [[['_route' => 'api.product_visibility.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58453 => [[['_route' => 'api.promotion.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58534 => [[['_route' => 'api.promotion_cart_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58611 => [[['_route' => 'api.promotion_discount.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58688 => [[['_route' => 'api.promotion_discount_prices.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58758 => [[['_route' => 'api.promotion_discount_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58842 => [[['_route' => 'api.promotion_individual_code.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58919 => [[['_route' => 'api.promotion_order_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59005 => [[['_route' => 'api.promotion_persona_customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59075 => [[['_route' => 'api.promotion_persona_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59159 => [[['_route' => 'api.promotion_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59235 => [[['_route' => 'api.promotion_setgroup.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59307 => [[['_route' => 'api.promotion_setgroup_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59386 => [[['_route' => 'api.promotion_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59469 => [[['_route' => 'api.property_group.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59543 => [[['_route' => 'api.property_group_option.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59645 => [[['_route' => 'api.order_customer.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59722 => [[['_route' => 'api.order_delivery.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59798 => [[['_route' => 'api.order_delivery_position.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59878 => [[['_route' => 'api.order_line_item.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59954 => [[['_route' => 'api.order_line_item_download.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60027 => [[['_route' => 'api.order_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60106 => [[['_route' => 'api.order_transaction.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60184 => [[['_route' => 'api.order_transaction_capture.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60261 => [[['_route' => 'api.order_transaction_capture_refund.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60337 => [[['_route' => 'api.order_transaction_capture_refund_position.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60429 => [[['_route' => 'api.payment_method.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60508 => [[['_route' => 'api.payment_method_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60583 => [[['_route' => 'api.plugin.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60662 => [[['_route' => 'api.plugin_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60741 => [[['_route' => 'api.product.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60826 => [[['_route' => 'api.product_category.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60898 => [[['_route' => 'api.product_category_tree.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60985 => [[['_route' => 'api.product_configurator_setting.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61067 => [[['_route' => 'api.product_cross_selling.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61156 => [[['_route' => 'api.product_cross_selling_assigned_products.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61233 => [[['_route' => 'api.product_cross_selling_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61318 => [[['_route' => 'api.product_custom_field_set.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61393 => [[['_route' => 'api.product_download.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61465 => [[['_route' => 'api.product_export.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61546 => [[['_route' => 'api.product_feature_set.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61625 => [[['_route' => 'api.product_feature_set_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61711 => [[['_route' => 'api.product_keyword_dictionary.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61795 => [[['_route' => 'api.product_manufacturer.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61874 => [[['_route' => 'api.product_manufacturer_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61945 => [[['_route' => 'api.product_media.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        62018 => [[['_route' => 'api.product_option.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        62092 => [[['_route' => 'api.product_price.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        62164 => [[['_route' => 'api.product_property.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        62237 => [[['_route' => 'api.product_review.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        62326 => [[['_route' => 'api.product_search_config.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        62399 => [[['_route' => 'api.product_search_config_field.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        62473 => [[['_route' => 'api.product_search_keyword.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        62549 => [[['_route' => 'api.product_sorting.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        62628 => [[['_route' => 'api.product_sorting_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        62703 => [[['_route' => 'api.product_stream.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        62780 => [[['_route' => 'api.product_stream_filter.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        62853 => [[['_route' => 'api.product_stream_mapping.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        62930 => [[['_route' => 'api.product_stream_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        63005 => [[['_route' => 'api.product_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        63081 => [[['_route' => 'api.product_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        63158 => [[['_route' => 'api.product_visibility.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        63235 => [[['_route' => 'api.promotion.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        63316 => [[['_route' => 'api.promotion_cart_rule.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        63393 => [[['_route' => 'api.promotion_discount.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        63470 => [[['_route' => 'api.promotion_discount_prices.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        63540 => [[['_route' => 'api.promotion_discount_rule.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        63624 => [[['_route' => 'api.promotion_individual_code.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        63701 => [[['_route' => 'api.promotion_order_rule.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        63787 => [[['_route' => 'api.promotion_persona_customer.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        63857 => [[['_route' => 'api.promotion_persona_rule.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        63941 => [[['_route' => 'api.promotion_sales_channel.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        64017 => [[['_route' => 'api.promotion_setgroup.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        64089 => [[['_route' => 'api.promotion_setgroup_rule.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        64168 => [[['_route' => 'api.promotion_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        64251 => [[['_route' => 'api.property_group.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        64325 => [[['_route' => 'api.property_group_option.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        64432 => [
            [['_route' => 'api.payment_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.payment_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64502 => [
            [['_route' => 'api.payment_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64601 => [
            [['_route' => 'api.payment_method_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.payment_method_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64671 => [
            [['_route' => 'api.payment_method_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64764 => [
            [['_route' => 'api.plugin.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.plugin.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64834 => [
            [['_route' => 'api.plugin.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64933 => [
            [['_route' => 'api.plugin_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.plugin_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65003 => [
            [['_route' => 'api.plugin_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65100 => [
            [['_route' => 'api.product.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65170 => [
            [['_route' => 'api.product.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65272 => [
            [['_route' => 'api.product_category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65342 => [
            [['_route' => 'api.product_category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65434 => [
            [['_route' => 'api.product_category_tree.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category_tree.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_category_tree.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65504 => [
            [['_route' => 'api.product_category_tree.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category_tree.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65612 => [
            [['_route' => 'api.product_configurator_setting.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_configurator_setting.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_configurator_setting.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65682 => [
            [['_route' => 'api.product_configurator_setting.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_configurator_setting.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65782 => [
            [['_route' => 'api.product_cross_selling.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65852 => [
            [['_route' => 'api.product_cross_selling.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65961 => [
            [['_route' => 'api.product_cross_selling_assigned_products.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_assigned_products.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_assigned_products.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66031 => [
            [['_route' => 'api.product_cross_selling_assigned_products.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_assigned_products.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66129 => [
            [['_route' => 'api.product_cross_selling_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66199 => [
            [['_route' => 'api.product_cross_selling_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66305 => [
            [['_route' => 'api.product_custom_field_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_custom_field_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_custom_field_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66375 => [
            [['_route' => 'api.product_custom_field_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_custom_field_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66471 => [
            [['_route' => 'api.product_download.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_download.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_download.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66541 => [
            [['_route' => 'api.product_download.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_download.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66634 => [
            [['_route' => 'api.product_export.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_export.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_export.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66704 => [
            [['_route' => 'api.product_export.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_export.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66803 => [
            [['_route' => 'api.product_feature_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66873 => [
            [['_route' => 'api.product_feature_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66972 => [
            [['_route' => 'api.product_feature_set_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67042 => [
            [['_route' => 'api.product_feature_set_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67149 => [
            [['_route' => 'api.product_keyword_dictionary.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_keyword_dictionary.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_keyword_dictionary.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67219 => [
            [['_route' => 'api.product_keyword_dictionary.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_keyword_dictionary.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67321 => [
            [['_route' => 'api.product_manufacturer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67391 => [
            [['_route' => 'api.product_manufacturer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67490 => [
            [['_route' => 'api.product_manufacturer_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67560 => [
            [['_route' => 'api.product_manufacturer_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67652 => [
            [['_route' => 'api.product_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67722 => [
            [['_route' => 'api.product_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67816 => [
            [['_route' => 'api.product_option.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_option.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_option.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67886 => [
            [['_route' => 'api.product_option.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_option.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67981 => [
            [['_route' => 'api.product_price.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_price.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_price.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68051 => [
            [['_route' => 'api.product_price.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_price.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68144 => [
            [['_route' => 'api.product_property.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_property.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_property.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68214 => [
            [['_route' => 'api.product_property.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_property.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68308 => [
            [['_route' => 'api.product_review.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_review.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_review.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68378 => [
            [['_route' => 'api.product_review.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_review.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68485 => [
            [['_route' => 'api.product_search_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68555 => [
            [['_route' => 'api.product_search_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68648 => [
            [['_route' => 'api.product_search_config_field.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config_field.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config_field.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68718 => [
            [['_route' => 'api.product_search_config_field.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config_field.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68813 => [
            [['_route' => 'api.product_search_keyword.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_keyword.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_search_keyword.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68883 => [
            [['_route' => 'api.product_search_keyword.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_keyword.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68977 => [
            [['_route' => 'api.product_sorting.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69047 => [
            [['_route' => 'api.product_sorting.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69146 => [
            [['_route' => 'api.product_sorting_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69216 => [
            [['_route' => 'api.product_sorting_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69309 => [
            [['_route' => 'api.product_stream.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69379 => [
            [['_route' => 'api.product_stream.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69476 => [
            [['_route' => 'api.product_stream_filter.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_filter.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_filter.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69546 => [
            [['_route' => 'api.product_stream_filter.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_filter.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69640 => [
            [['_route' => 'api.product_stream_mapping.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_mapping.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_mapping.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69710 => [
            [['_route' => 'api.product_stream_mapping.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_mapping.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69808 => [
            [['_route' => 'api.product_stream_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69878 => [
            [['_route' => 'api.product_stream_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69974 => [
            [['_route' => 'api.product_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70044 => [
            [['_route' => 'api.product_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70141 => [
            [['_route' => 'api.product_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70211 => [
            [['_route' => 'api.product_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70309 => [
            [['_route' => 'api.product_visibility.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_visibility.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_visibility.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70379 => [
            [['_route' => 'api.product_visibility.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_visibility.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70474 => [
            [['_route' => 'api.promotion.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70544 => [
            [['_route' => 'api.promotion.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70645 => [
            [['_route' => 'api.promotion_cart_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_cart_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_cart_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70715 => [
            [['_route' => 'api.promotion_cart_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_cart_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70810 => [
            [['_route' => 'api.promotion_discount.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70880 => [
            [['_route' => 'api.promotion_discount.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70977 => [
            [['_route' => 'api.promotion_discount_prices.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_prices.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_prices.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        71047 => [
            [['_route' => 'api.promotion_discount_prices.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_prices.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        71138 => [
            [['_route' => 'api.promotion_discount_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        71208 => [
            [['_route' => 'api.promotion_discount_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        71313 => [
            [['_route' => 'api.promotion_individual_code.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_individual_code.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_individual_code.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        71383 => [
            [['_route' => 'api.promotion_individual_code.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_individual_code.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        71481 => [
            [['_route' => 'api.promotion_order_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_order_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_order_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        71551 => [
            [['_route' => 'api.promotion_order_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_order_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        71658 => [
            [['_route' => 'api.promotion_persona_customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        71728 => [
            [['_route' => 'api.promotion_persona_customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        71819 => [
            [['_route' => 'api.promotion_persona_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        71889 => [
            [['_route' => 'api.promotion_persona_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        71994 => [
            [['_route' => 'api.promotion_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        72064 => [
            [['_route' => 'api.promotion_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        72158 => [
            [['_route' => 'api.promotion_setgroup.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        72228 => [
            [['_route' => 'api.promotion_setgroup.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        72320 => [
            [['_route' => 'api.promotion_setgroup_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        72390 => [
            [['_route' => 'api.promotion_setgroup_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        72490 => [
            [['_route' => 'api.promotion_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        72560 => [
            [['_route' => 'api.promotion_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        72661 => [
            [['_route' => 'api.property_group.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        72731 => [
            [['_route' => 'api.property_group.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        72825 => [
            [['_route' => 'api.property_group_option.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        72895 => [
            [['_route' => 'api.property_group_option.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        72994 => [
            [['_route' => 'api.property_group_option_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        73061 => [[['_route' => 'api.property_group_option_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        73195 => [[['_route' => 'api.property_group_option_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73272 => [[['_route' => 'api.property_group_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73346 => [[['_route' => 'api.rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73426 => [[['_route' => 'api.rule_condition.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73495 => [[['_route' => 'api.rule_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73586 => [[['_route' => 'api.sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73666 => [[['_route' => 'api.sales_channel_analytics.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73742 => [[['_route' => 'api.sales_channel_country.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73815 => [[['_route' => 'api.sales_channel_currency.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73888 => [[['_route' => 'api.sales_channel_domain.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73962 => [[['_route' => 'api.sales_channel_language.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74043 => [[['_route' => 'api.sales_channel_payment_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74125 => [[['_route' => 'api.sales_channel_shipping_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74205 => [[['_route' => 'api.sales_channel_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74277 => [[['_route' => 'api.sales_channel_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74356 => [[['_route' => 'api.sales_channel_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74436 => [[['_route' => 'api.salutation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74515 => [[['_route' => 'api.salutation_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74600 => [[['_route' => 'api.scheduled_task.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74670 => [[['_route' => 'api.script.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74747 => [[['_route' => 'api.seo_url.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74823 => [[['_route' => 'api.seo_url_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74908 => [[['_route' => 'api.shipping_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74984 => [[['_route' => 'api.shipping_method_price.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75056 => [[['_route' => 'api.shipping_method_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75132 => [[['_route' => 'api.shipping_method_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75210 => [[['_route' => 'api.snippet.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75281 => [[['_route' => 'api.snippet_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75364 => [[['_route' => 'api.state_machine.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75442 => [[['_route' => 'api.state_machine_history.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75516 => [[['_route' => 'api.state_machine_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75595 => [[['_route' => 'api.state_machine_state_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75675 => [[['_route' => 'api.state_machine_transition.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75747 => [[['_route' => 'api.state_machine_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75822 => [[['_route' => 'api.swag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75917 => [[['_route' => 'api.swag_language_pack_language.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75994 => [[['_route' => 'api.swag_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76075 => [[['_route' => 'api.system_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76151 => [[['_route' => 'api.tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76221 => [[['_route' => 'api.tax.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76303 => [[['_route' => 'api.tax_provider.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76382 => [[['_route' => 'api.tax_provider_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76456 => [[['_route' => 'api.tax_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76531 => [[['_route' => 'api.tax_rule_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76610 => [[['_route' => 'api.tax_rule_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76688 => [[['_route' => 'api.theme.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76764 => [[['_route' => 'api.theme_child.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76835 => [[['_route' => 'api.theme_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76915 => [[['_route' => 'api.theme_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76992 => [[['_route' => 'api.theme_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77071 => [[['_route' => 'api.unit.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77150 => [[['_route' => 'api.unit_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77223 => [[['_route' => 'api.user.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77305 => [[['_route' => 'api.user_access_key.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77377 => [[['_route' => 'api.user_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77451 => [[['_route' => 'api.user_recovery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77530 => [[['_route' => 'api.version.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77607 => [[['_route' => 'api.version_commit.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77679 => [[['_route' => 'api.version_commit_data.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77757 => [[['_route' => 'api.webhook.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77835 => [[['_route' => 'api.webhook_event_log.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77935 => [[['_route' => 'api.property_group_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78008 => [[['_route' => 'api.rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78088 => [[['_route' => 'api.rule_condition.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78157 => [[['_route' => 'api.rule_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78248 => [[['_route' => 'api.sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78328 => [[['_route' => 'api.sales_channel_analytics.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78404 => [[['_route' => 'api.sales_channel_country.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78477 => [[['_route' => 'api.sales_channel_currency.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78550 => [[['_route' => 'api.sales_channel_domain.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78624 => [[['_route' => 'api.sales_channel_language.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78705 => [[['_route' => 'api.sales_channel_payment_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78787 => [[['_route' => 'api.sales_channel_shipping_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78867 => [[['_route' => 'api.sales_channel_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78939 => [[['_route' => 'api.sales_channel_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79018 => [[['_route' => 'api.sales_channel_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79098 => [[['_route' => 'api.salutation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79177 => [[['_route' => 'api.salutation_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79262 => [[['_route' => 'api.scheduled_task.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79332 => [[['_route' => 'api.script.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79409 => [[['_route' => 'api.seo_url.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79485 => [[['_route' => 'api.seo_url_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79570 => [[['_route' => 'api.shipping_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79646 => [[['_route' => 'api.shipping_method_price.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79718 => [[['_route' => 'api.shipping_method_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79794 => [[['_route' => 'api.shipping_method_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79872 => [[['_route' => 'api.snippet.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79943 => [[['_route' => 'api.snippet_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        80026 => [[['_route' => 'api.state_machine.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        80104 => [[['_route' => 'api.state_machine_history.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        80178 => [[['_route' => 'api.state_machine_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        80257 => [[['_route' => 'api.state_machine_state_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        80337 => [[['_route' => 'api.state_machine_transition.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        80409 => [[['_route' => 'api.state_machine_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        80484 => [[['_route' => 'api.swag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        80579 => [[['_route' => 'api.swag_language_pack_language.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        80656 => [[['_route' => 'api.swag_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        80737 => [[['_route' => 'api.system_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        80813 => [[['_route' => 'api.tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        80883 => [[['_route' => 'api.tax.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        80965 => [[['_route' => 'api.tax_provider.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        81044 => [[['_route' => 'api.tax_provider_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        81118 => [[['_route' => 'api.tax_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        81193 => [[['_route' => 'api.tax_rule_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        81272 => [[['_route' => 'api.tax_rule_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        81350 => [[['_route' => 'api.theme.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        81426 => [[['_route' => 'api.theme_child.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        81497 => [[['_route' => 'api.theme_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        81577 => [[['_route' => 'api.theme_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        81654 => [[['_route' => 'api.theme_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        81733 => [[['_route' => 'api.unit.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        81812 => [[['_route' => 'api.unit_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        81885 => [[['_route' => 'api.user.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        81967 => [[['_route' => 'api.user_access_key.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        82039 => [[['_route' => 'api.user_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        82113 => [[['_route' => 'api.user_recovery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        82192 => [[['_route' => 'api.version.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        82269 => [[['_route' => 'api.version_commit.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        82341 => [[['_route' => 'api.version_commit_data.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        82419 => [[['_route' => 'api.webhook.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        82497 => [[['_route' => 'api.webhook_event_log.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        82591 => [
            [['_route' => 'api.seo_url.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.seo_url.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        82661 => [
            [['_route' => 'api.seo_url.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        82757 => [
            [['_route' => 'api.seo_url_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.seo_url_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        82827 => [
            [['_route' => 'api.seo_url_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        82932 => [
            [['_route' => 'api.sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        83002 => [
            [['_route' => 'api.sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        83102 => [
            [['_route' => 'api.sales_channel_analytics.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_analytics.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_analytics.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        83172 => [
            [['_route' => 'api.sales_channel_analytics.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_analytics.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        83269 => [
            [['_route' => 'api.sales_channel_country.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_country.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_country.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        83339 => [
            [['_route' => 'api.sales_channel_country.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_country.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        83433 => [
            [['_route' => 'api.sales_channel_currency.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_currency.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_currency.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        83503 => [
            [['_route' => 'api.sales_channel_currency.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_currency.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        83597 => [
            [['_route' => 'api.sales_channel_domain.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_domain.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_domain.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        83667 => [
            [['_route' => 'api.sales_channel_domain.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_domain.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        83762 => [
            [['_route' => 'api.sales_channel_language.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_language.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_language.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        83832 => [
            [['_route' => 'api.sales_channel_language.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_language.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        83934 => [
            [['_route' => 'api.sales_channel_payment_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_payment_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_payment_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        84004 => [
            [['_route' => 'api.sales_channel_payment_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_payment_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        84107 => [
            [['_route' => 'api.sales_channel_shipping_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_shipping_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_shipping_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        84177 => [
            [['_route' => 'api.sales_channel_shipping_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_shipping_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        84278 => [
            [['_route' => 'api.sales_channel_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        84348 => [
            [['_route' => 'api.sales_channel_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        84438 => [
            [['_route' => 'api.sales_channel_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        84508 => [
            [['_route' => 'api.sales_channel_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        84607 => [
            [['_route' => 'api.sales_channel_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        84677 => [
            [['_route' => 'api.sales_channel_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        84775 => [
            [['_route' => 'api.salutation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.salutation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        84845 => [
            [['_route' => 'api.salutation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        84944 => [
            [['_route' => 'api.salutation_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.salutation_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        85014 => [
            [['_route' => 'api.salutation_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        85120 => [
            [['_route' => 'api.scheduled_task.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.scheduled_task.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.scheduled_task.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        85190 => [
            [['_route' => 'api.scheduled_task.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.scheduled_task.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        85281 => [
            [['_route' => 'api.script.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.script.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.script.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        85351 => [
            [['_route' => 'api.script.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.script.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        85454 => [
            [['_route' => 'api.shipping_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        85524 => [
            [['_route' => 'api.shipping_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        85620 => [
            [['_route' => 'api.shipping_method_price.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_price.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_price.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        85690 => [
            [['_route' => 'api.shipping_method_price.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_price.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        85783 => [
            [['_route' => 'api.shipping_method_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        85853 => [
            [['_route' => 'api.shipping_method_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        85950 => [
            [['_route' => 'api.shipping_method_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        86020 => [
            [['_route' => 'api.shipping_method_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        86116 => [
            [['_route' => 'api.snippet.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.snippet.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        86186 => [
            [['_route' => 'api.snippet.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        86277 => [
            [['_route' => 'api.snippet_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.snippet_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        86347 => [
            [['_route' => 'api.snippet_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        86448 => [
            [['_route' => 'api.state_machine.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        86518 => [
            [['_route' => 'api.state_machine.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        86616 => [
            [['_route' => 'api.state_machine_history.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_history.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_history.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        86686 => [
            [['_route' => 'api.state_machine_history.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_history.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        86778 => [
            [['_route' => 'api.state_machine_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        86848 => [
            [['_route' => 'api.state_machine_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        86947 => [
            [['_route' => 'api.state_machine_state_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        87017 => [
            [['_route' => 'api.state_machine_state_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        87118 => [
            [['_route' => 'api.state_machine_transition.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_transition.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_transition.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        87188 => [
            [['_route' => 'api.state_machine_transition.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_transition.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        87281 => [
            [['_route' => 'api.state_machine_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        87351 => [
            [['_route' => 'api.state_machine_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        87444 => [
            [['_route' => 'api.swag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        87514 => [
            [['_route' => 'api.swag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        87629 => [
            [['_route' => 'api.swag_language_pack_language.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_language_pack_language.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_language_pack_language.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        87699 => [
            [['_route' => 'api.swag_language_pack_language.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_language_pack_language.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        87797 => [
            [['_route' => 'api.swag_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        87867 => [
            [['_route' => 'api.swag_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        87969 => [
            [['_route' => 'api.system_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.system_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.system_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        88039 => [
            [['_route' => 'api.system_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.system_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        88163 => [[['_route' => 'api.property_group_option_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88240 => [[['_route' => 'api.property_group_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88314 => [[['_route' => 'api.rule.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88394 => [[['_route' => 'api.rule_condition.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88463 => [[['_route' => 'api.rule_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88554 => [[['_route' => 'api.sales_channel.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88634 => [[['_route' => 'api.sales_channel_analytics.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88710 => [[['_route' => 'api.sales_channel_country.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88783 => [[['_route' => 'api.sales_channel_currency.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88856 => [[['_route' => 'api.sales_channel_domain.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88930 => [[['_route' => 'api.sales_channel_language.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89011 => [[['_route' => 'api.sales_channel_payment_method.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89093 => [[['_route' => 'api.sales_channel_shipping_method.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89173 => [[['_route' => 'api.sales_channel_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89245 => [[['_route' => 'api.sales_channel_type.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89324 => [[['_route' => 'api.sales_channel_type_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89404 => [[['_route' => 'api.salutation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89483 => [[['_route' => 'api.salutation_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89568 => [[['_route' => 'api.scheduled_task.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89638 => [[['_route' => 'api.script.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89715 => [[['_route' => 'api.seo_url.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89791 => [[['_route' => 'api.seo_url_template.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89876 => [[['_route' => 'api.shipping_method.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89952 => [[['_route' => 'api.shipping_method_price.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        90024 => [[['_route' => 'api.shipping_method_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        90100 => [[['_route' => 'api.shipping_method_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        90178 => [[['_route' => 'api.snippet.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        90249 => [[['_route' => 'api.snippet_set.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        90332 => [[['_route' => 'api.state_machine.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        90410 => [[['_route' => 'api.state_machine_history.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        90484 => [[['_route' => 'api.state_machine_state.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        90563 => [[['_route' => 'api.state_machine_state_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        90643 => [[['_route' => 'api.state_machine_transition.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        90715 => [[['_route' => 'api.state_machine_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        90790 => [[['_route' => 'api.swag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'swag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        90885 => [[['_route' => 'api.swag_language_pack_language.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        90962 => [[['_route' => 'api.swag_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'swag-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        91043 => [[['_route' => 'api.system_config.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        91119 => [[['_route' => 'api.tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        91189 => [[['_route' => 'api.tax.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        91271 => [[['_route' => 'api.tax_provider.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        91350 => [[['_route' => 'api.tax_provider_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        91424 => [[['_route' => 'api.tax_rule.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        91499 => [[['_route' => 'api.tax_rule_type.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        91578 => [[['_route' => 'api.tax_rule_type_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        91656 => [[['_route' => 'api.theme.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        91732 => [[['_route' => 'api.theme_child.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        91803 => [[['_route' => 'api.theme_media.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        91883 => [[['_route' => 'api.theme_sales_channel.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        91960 => [[['_route' => 'api.theme_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        92039 => [[['_route' => 'api.unit.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        92118 => [[['_route' => 'api.unit_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        92191 => [[['_route' => 'api.user.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'user', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        92273 => [[['_route' => 'api.user_access_key.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        92345 => [[['_route' => 'api.user_config.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        92419 => [[['_route' => 'api.user_recovery.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        92498 => [[['_route' => 'api.version.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        92575 => [[['_route' => 'api.version_commit.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        92647 => [[['_route' => 'api.version_commit_data.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        92725 => [[['_route' => 'api.webhook.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        92803 => [[['_route' => 'api.webhook_event_log.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        92826 => [[['_route' => 'api.acl_role.create', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['acl_role:create'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::upsertRole'], [], ['POST' => 0], null, false, false, null]],
        92848 => [
            [['_route' => 'api.acl_role.update', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['acl_role:update'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::updateRole'], ['roleId'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.acl_role.delete', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['acl_role:delete'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteRole'], ['roleId'], ['DELETE' => 0], null, false, true, null],
        ],
        92956 => [[['_route' => 'api.property_group_option_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        93052 => [
            [['_route' => 'api.property_group_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        93122 => [
            [['_route' => 'api.property_group_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        93214 => [
            [['_route' => 'api.rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        93284 => [
            [['_route' => 'api.rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        93384 => [
            [['_route' => 'api.rule_condition.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule_condition.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.rule_condition.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        93454 => [
            [['_route' => 'api.rule_condition.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule_condition.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        93544 => [
            [['_route' => 'api.rule_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.rule_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        93614 => [
            [['_route' => 'api.rule_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        93712 => [
            [['_route' => 'api.tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        93782 => [
            [['_route' => 'api.tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        93870 => [
            [['_route' => 'api.tax.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        93940 => [
            [['_route' => 'api.tax.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        94039 => [
            [['_route' => 'api.tax_provider.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        94109 => [
            [['_route' => 'api.tax_provider.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        94208 => [
            [['_route' => 'api.tax_provider_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        94278 => [
            [['_route' => 'api.tax_provider_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        94370 => [
            [['_route' => 'api.tax_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        94440 => [
            [['_route' => 'api.tax_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        94532 => [
            [['_route' => 'api.tax_rule_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        94602 => [
            [['_route' => 'api.tax_rule_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        94701 => [
            [['_route' => 'api.tax_rule_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        94771 => [
            [['_route' => 'api.tax_rule_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        94867 => [
            [['_route' => 'api.theme.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        94937 => [
            [['_route' => 'api.theme.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        95033 => [
            [['_route' => 'api.theme_child.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_child.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_child.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        95103 => [
            [['_route' => 'api.theme_child.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_child.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        95195 => [
            [['_route' => 'api.theme_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        95265 => [
            [['_route' => 'api.theme_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        95366 => [
            [['_route' => 'api.theme_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        95436 => [
            [['_route' => 'api.theme_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        95534 => [
            [['_route' => 'api.theme_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        95604 => [
            [['_route' => 'api.theme_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        95701 => [
            [['_route' => 'api.unit.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.unit.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        95771 => [
            [['_route' => 'api.unit.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        95870 => [
            [['_route' => 'api.unit_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.unit_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        95940 => [
            [['_route' => 'api.unit_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        96028 => [[['_route' => 'api.user.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        96094 => [[['_route' => 'api.user.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        96195 => [
            [['_route' => 'api.user_access_key.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_access_key.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.user_access_key.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        96265 => [
            [['_route' => 'api.user_access_key.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_access_key.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        96358 => [
            [['_route' => 'api.user_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.user_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        96428 => [
            [['_route' => 'api.user_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        96523 => [
            [['_route' => 'api.user_recovery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_recovery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.user_recovery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        96593 => [
            [['_route' => 'api.user_recovery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_recovery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        96618 => [[['_route' => 'api.user.delete', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['user:delete'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUser'], ['userId'], ['DELETE' => 0], null, false, true, null]],
        96653 => [[['_route' => 'api.user_access_keys.delete', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['user_access_key:delete'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUserAccessKey'], ['userId', 'id'], ['DELETE' => 0], null, false, true, null]],
        96680 => [[['_route' => 'api.user_role.delete', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['acl_user_role:delete'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUserRole'], ['userId', 'roleId'], ['DELETE' => 0], null, false, true, null]],
        96691 => [[['_route' => 'api.user.update', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['user:update'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::updateUser'], ['userId'], ['PATCH' => 0], null, false, true, null]],
        96702 => [[['_route' => 'api.user.create', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['user:create'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::upsertUser'], [], ['POST' => 0], null, false, false, null]],
        96796 => [
            [['_route' => 'api.version.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        96866 => [
            [['_route' => 'api.version.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        96960 => [
            [['_route' => 'api.version_commit.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version_commit.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        97030 => [
            [['_route' => 'api.version_commit.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        97122 => [
            [['_route' => 'api.version_commit_data.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit_data.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version_commit_data.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        97192 => [
            [['_route' => 'api.version_commit_data.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit_data.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        97288 => [
            [['_route' => 'api.webhook.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.webhook.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.webhook.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        97358 => [
            [['_route' => 'api.webhook.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.webhook.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        97456 => [
            [['_route' => 'api.webhook_event_log.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.webhook_event_log.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.webhook_event_log.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        97526 => [
            [['_route' => 'api.webhook_event_log.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.webhook_event_log.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        97553 => [[['_route' => 'api.integration.create', '_routeScope' => ['api'], '_acl' => ['integration:create'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\IntegrationController::upsertIntegration'], [], ['POST' => 0], null, false, false, null]],
        97572 => [
            [['_route' => 'api.integration.update', '_routeScope' => ['api'], '_acl' => ['integration:update'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\IntegrationController::updateIntegration'], ['integrationId'], ['PATCH' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
