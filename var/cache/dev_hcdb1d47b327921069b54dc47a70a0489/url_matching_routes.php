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
                                                        .'|group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5341)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|rrency(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5418)'
                                                .'|\\-(?'
                                                    .'|country\\-rounding((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5505)'
                                                    .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5581)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|e\\-([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5656)'
                                        .'|ategory(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5731)'
                                            .'|\\-t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5804)'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5879)'
                                            .')'
                                        .')'
                                        .'|ms\\-(?'
                                            .'|block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:5958)'
                                            .'|page(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6030)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6108)'
                                            .')'
                                            .'|s(?'
                                                .'|ection((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6184)'
                                                .'|lot(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6255)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6333)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|ountry(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6410)'
                                            .'|\\-(?'
                                                .'|state(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6488)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6566)'
                                                .')'
                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6643)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|a(?'
                                        .'|cl\\-(?'
                                            .'|role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6726)'
                                            .'|user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6801)'
                                        .')'
                                        .'|pp(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6872)'
                                            .'|\\-(?'
                                                .'|a(?'
                                                    .'|ction\\-button(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:6962)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7040)'
                                                    .')'
                                                    .'|dministration\\-snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7128)'
                                                .')'
                                                .'|cms\\-block(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7207)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7285)'
                                                .')'
                                                .'|flow\\-(?'
                                                    .'|action(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7369)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7447)'
                                                    .')'
                                                    .'|event((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7518)'
                                                .')'
                                                .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7599)'
                                                .'|s(?'
                                                    .'|cript\\-condition(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7687)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7765)'
                                                    .')'
                                                    .'|hipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7846)'
                                                .')'
                                                .'|t(?'
                                                    .'|emplate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7923)'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:7998)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|basic\\-example((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:8081)'
                                .')'
                                .'|cl\\-(?'
                                    .'|role(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:8174)'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:8239)'
                                    .')'
                                    .'|user\\-role(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:8334)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:8403)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|s(?'
                                .'|cript/(.+)(*:8430)'
                                .'|e(?'
                                    .'|arch(?'
                                        .'|\\-ids/(?'
                                            .'|c(?'
                                                .'|u(?'
                                                    .'|stom(?'
                                                        .'|\\-(?'
                                                            .'|entity(?'
                                                                .'|\\-([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8550)'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:8615)'
                                                            .')'
                                                            .'|field(?'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:8689)'
                                                                .'|\\-set(?'
                                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:8762)'
                                                                    .'|\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:8837)'
                                                                .')'
                                                            .')'
                                                        .')'
                                                        .'|er(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:8910)'
                                                            .'|\\-(?'
                                                                .'|address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:8987)'
                                                                .'|group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9057)'
                                                            .')'
                                                        .')'
                                                    .')'
                                                    .'|rrency(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9134)'
                                                        .'|\\-(?'
                                                            .'|country\\-rounding((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9221)'
                                                            .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9297)'
                                                        .')'
                                                    .')'
                                                .')'
                                                .'|e\\-([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9372)'
                                                .'|ategory(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9447)'
                                                    .'|\\-t(?'
                                                        .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9520)'
                                                        .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9595)'
                                                    .')'
                                                .')'
                                                .'|ms\\-(?'
                                                    .'|block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9674)'
                                                    .'|page(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9746)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9824)'
                                                    .')'
                                                    .'|s(?'
                                                        .'|ection((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9900)'
                                                        .'|lot(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:9971)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10049)'
                                                        .')'
                                                    .')'
                                                .')'
                                                .'|ountry(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10127)'
                                                    .'|\\-(?'
                                                        .'|state(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10206)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10285)'
                                                        .')'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10363)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|a(?'
                                                .'|cl\\-(?'
                                                    .'|role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10447)'
                                                    .'|user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10523)'
                                                .')'
                                                .'|pp(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10595)'
                                                    .'|\\-(?'
                                                        .'|a(?'
                                                            .'|ction\\-button(?'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10686)'
                                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10765)'
                                                            .')'
                                                            .'|dministration\\-snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10854)'
                                                        .')'
                                                        .'|cms\\-block(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:10934)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11013)'
                                                        .')'
                                                        .'|flow\\-(?'
                                                            .'|action(?'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11098)'
                                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11177)'
                                                            .')'
                                                            .'|event((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11249)'
                                                        .')'
                                                        .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11331)'
                                                        .'|s(?'
                                                            .'|cript\\-condition(?'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11420)'
                                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11499)'
                                                            .')'
                                                            .'|hipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11581)'
                                                        .')'
                                                        .'|t(?'
                                                            .'|emplate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11659)'
                                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11735)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|basic\\-example((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11819)'
                                        .')'
                                        .'|/(?'
                                            .'|c(?'
                                                .'|u(?'
                                                    .'|stom(?'
                                                        .'|\\-(?'
                                                            .'|entity(?'
                                                                .'|\\-([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:11925)'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:11991)'
                                                            .')'
                                                            .'|field(?'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12066)'
                                                                .'|\\-set(?'
                                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12140)'
                                                                    .'|\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12216)'
                                                                .')'
                                                            .')'
                                                        .')'
                                                        .'|er(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12290)'
                                                            .'|\\-(?'
                                                                .'|address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12368)'
                                                                .'|group((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12439)'
                                                            .')'
                                                        .')'
                                                    .')'
                                                    .'|rrency(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12517)'
                                                        .'|\\-(?'
                                                            .'|country\\-rounding((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12605)'
                                                            .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12682)'
                                                        .')'
                                                    .')'
                                                .')'
                                                .'|e\\-([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:12758)'
                                                .'|ategory(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12834)'
                                                    .'|\\-t(?'
                                                        .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12908)'
                                                        .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:12984)'
                                                    .')'
                                                .')'
                                                .'|ms\\-(?'
                                                    .'|block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13064)'
                                                    .'|page(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13137)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13216)'
                                                    .')'
                                                    .'|s(?'
                                                        .'|ection((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13293)'
                                                        .'|lot(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13365)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13444)'
                                                        .')'
                                                    .')'
                                                .')'
                                                .'|ountry(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13522)'
                                                    .'|\\-(?'
                                                        .'|state(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13601)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13680)'
                                                        .')'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13758)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|a(?'
                                                .'|cl\\-(?'
                                                    .'|role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13842)'
                                                    .'|user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13918)'
                                                .')'
                                                .'|pp(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:13990)'
                                                    .'|\\-(?'
                                                        .'|a(?'
                                                            .'|ction\\-button(?'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14081)'
                                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14160)'
                                                            .')'
                                                            .'|dministration\\-snippet((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14249)'
                                                        .')'
                                                        .'|cms\\-block(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14329)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14408)'
                                                        .')'
                                                        .'|flow\\-(?'
                                                            .'|action(?'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14493)'
                                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14572)'
                                                            .')'
                                                            .'|event((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14644)'
                                                        .')'
                                                        .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14726)'
                                                        .'|s(?'
                                                            .'|cript\\-condition(?'
                                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14815)'
                                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14894)'
                                                            .')'
                                                            .'|hipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:14976)'
                                                        .')'
                                                        .'|t(?'
                                                            .'|emplate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:15054)'
                                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:15130)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|basic\\-example((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:15214)'
                                        .')'
                                    .')'
                                    .'|rvice/(?'
                                        .'|activate/([^/]++)(*:15252)'
                                        .'|deactivate/([^/]++)(*:15281)'
                                        .'|uninstall/([^/]++)(*:15309)'
                                    .')'
                                .')'
                            .')'
                            .'|c(?'
                                .'|u(?'
                                    .'|stom(?'
                                        .'|\\-(?'
                                            .'|entity(?'
                                                .'|\\-(?'
                                                    .'|([^/]++)/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:15430)'
                                                    .'|([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:15503)'
                                                    .')'
                                                    .'|([^/]++)/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:15591)'
                                                    .')'
                                                .')'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:15675)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:15745)'
                                                .')'
                                            .')'
                                            .'|field(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:15837)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:15907)'
                                                .')'
                                                .'|\\-set(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:15998)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:16068)'
                                                    .')'
                                                    .'|\\-relation(?'
                                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                            .'|(*:16164)'
                                                        .')'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                            .'|(*:16234)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|er(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:16326)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:16396)'
                                            .')'
                                            .'|\\-(?'
                                                .'|address(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:16494)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:16564)'
                                                    .')'
                                                .')'
                                                .'|group(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:16656)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:16726)'
                                                    .')'
                                                    .'|\\-registration\\-sales\\-channels/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:16837)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|rrency(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:16932)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:17002)'
                                        .')'
                                        .'|\\-(?'
                                            .'|country\\-rounding(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:17110)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:17180)'
                                                .')'
                                            .')'
                                            .'|translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:17278)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:17348)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|e\\-(?'
                                    .'|([^/]++)/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:17443)'
                                    .'|([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:17516)'
                                    .')'
                                    .'|([^/]++)/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:17604)'
                                    .')'
                                .')'
                                .'|ategory(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:17698)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:17768)'
                                    .')'
                                    .'|\\-t(?'
                                        .'|ag(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:17862)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:17932)'
                                            .')'
                                        .')'
                                        .'|ranslation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:18029)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:18099)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|ms\\-(?'
                                    .'|block(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:18200)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:18270)'
                                        .')'
                                    .')'
                                    .'|page(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:18361)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:18431)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:18530)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:18600)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|ection(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:18698)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:18768)'
                                            .')'
                                        .')'
                                        .'|lot(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:18858)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:18928)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:19027)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:19097)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|ountry(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:19193)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:19263)'
                                    .')'
                                    .'|\\-(?'
                                        .'|state(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:19359)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:19429)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:19528)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:19598)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:19697)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:19767)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|basic\\-example(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:19871)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:19941)'
                                .')'
                            .')'
                        .')'
                        .'|p\\-system/([^/]++)/generate\\-token(*:19988)'
                    .')'
                    .'|dmin/([^/]++)/index\\.html(*:20024)'
                    .'|ccount/(?'
                        .'|order/(?'
                            .'|([^/]++)(*:20061)'
                            .'|edit/([^/]++)(*:20084)'
                            .'|payment/([^/]++)(*:20110)'
                            .'|update/([^/]++)(*:20135)'
                            .'|do(?'
                                .'|cument/([^/]++)/([^/]++)(?'
                                    .'|(*:20177)'
                                    .'|/([^/]++)(*:20196)'
                                .')'
                                .'|wnload/([^/]++)/([^/]++)(*:20231)'
                            .')'
                        .')'
                        .'|address/(?'
                            .'|([^/]++)(*:20262)'
                            .'|default\\-([^/]++)/([^/]++)(*:20298)'
                            .'|switch(*:20314)'
                            .'|create(*:20330)'
                            .'|([^/]++)(*:20348)'
                            .'|delete/([^/]++)(*:20373)'
                        .')'
                    .')'
                .')'
                .'|/s(?'
                    .'|tore(?'
                        .'|\\-api/(?'
                            .'|a(?'
                                .'|pp\\-system/([^/]++)/generate\\-token(*:20446)'
                                .'|ccount/(?'
                                    .'|change\\-payment\\-method/([^/]++)(*:20498)'
                                    .'|address/(?'
                                        .'|([^/]++)(*:20527)'
                                        .'|default\\-(?'
                                            .'|shipping/([^/]++)(*:20566)'
                                            .'|billing/([^/]++)(*:20592)'
                                        .')'
                                        .'|([^/]++)(*:20611)'
                                    .')'
                                .')'
                            .')'
                            .'|s(?'
                                .'|cript/(.+)(*:20638)'
                                .'|itemap/(.+\\.xml\\.gz)(*:20668)'
                            .')'
                            .'|c(?'
                                .'|ountry\\-state/([^/]++)(*:20705)'
                                .'|ategory/([^/]++)(*:20731)'
                                .'|ms/([^/]++)(*:20752)'
                                .'|ustomer(?'
                                    .'|/wishlist/(?'
                                        .'|add/([^/]++)(*:20797)'
                                        .'|delete/([^/]++)(*:20822)'
                                    .')'
                                    .'|\\-group\\-registration/config/([^/]++)(*:20870)'
                                .')'
                            .')'
                            .'|product(?'
                                .'|\\-(?'
                                    .'|export/([^/]++)/([^/]++)(*:20921)'
                                    .'|listing/([^/]++)(*:20947)'
                                .')'
                                .'|/([^/]++)(?'
                                    .'|/(?'
                                        .'|cross\\-selling(*:20988)'
                                        .'|find\\-variant(*:21011)'
                                        .'|review(?'
                                            .'|s(*:21031)'
                                            .'|(*:21041)'
                                        .')'
                                    .')'
                                    .'|(*:21053)'
                                .')'
                            .')'
                            .'|breadcrumb/([0-9a-f]{32})(*:21090)'
                            .'|navigation/([^/]++)/([^/]++)(*:21128)'
                            .'|landing\\-page/([^/]++)(*:21160)'
                            .'|order/download/([^/]++)/([^/]++)(*:21202)'
                            .'|document/download/([^/]++)(?:/([^/]++))?(*:21252)'
                        .')'
                        .'|front/script/(.+)(*:21280)'
                    .')'
                    .'|itemap/(.+\\.xml\\.gz)(*:21311)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:21350)'
                .'|/build/(.+)(*:21371)'
                .'|/wi(?'
                    .'|dgets/(?'
                        .'|account/(?'
                            .'|order/detail/([^/]++)(*:21428)'
                            .'|address\\-manager(?:/([^/]++))?(*:21468)'
                        .')'
                        .'|cms(?'
                            .'|(?:/([^/]++))?(*:21499)'
                            .'|/(?'
                                .'|navigation(?'
                                    .'|(?:/([^/]++))?(*:21540)'
                                    .'|/([^/]++)/filter(*:21566)'
                                .')'
                                .'|buybox/([^/]++)/switch(*:21599)'
                            .')'
                        .')'
                    .')'
                    .'|shlist/(?'
                        .'|product/delete/([^/]++)(*:21645)'
                        .'|add(?'
                            .'|/([^/]++)(*:21670)'
                            .'|\\-after\\-login/([^/]++)(*:21703)'
                        .')'
                        .'|remove/([^/]++)(*:21729)'
                    .')'
                .')'
                .'|/c(?'
                    .'|heckout/line\\-item/(?'
                        .'|delete/([^/]++)(*:21783)'
                        .'|change\\-quantity/([^/]++)(*:21818)'
                    .')'
                    .'|ustomer\\-group\\-registration/([^/]++)(*:21866)'
                .')'
                .'|/p(?'
                    .'|age/cms/([^/]++)(*:21898)'
                    .'|roduct/([^/]++)/r(?'
                        .'|ating(*:21933)'
                        .'|eviews(*:21949)'
                    .')'
                .')'
                .'|/landingPage/([^/]++)(*:21982)'
                .'|/maintenance/singlepage/([^/]++)(*:22024)'
                .'|/navigation/([^/]++)(*:22054)'
                .'|/detail/([^/]++)(?'
                    .'|(*:22083)'
                    .'|/switch(*:22100)'
                .')'
                .'|/quickview/([^/]++)(*:22130)'
            .')/?$}sDu',
        22130 => '{^(?'
                .'|/api/(?'
                    .'|customer\\-(?'
                        .'|group\\-(?'
                            .'|registration\\-sales\\-channels(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:22272)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:22342)'
                                .')'
                            .')'
                            .'|translation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:22440)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:22510)'
                                .')'
                            .')'
                        .')'
                        .'|recovery(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:22606)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:22676)'
                            .')'
                        .')'
                        .'|tag(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:22766)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:22836)'
                            .')'
                        .')'
                        .'|wishlist(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:22931)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:23001)'
                            .')'
                            .'|\\-product(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:23096)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:23166)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|search(?'
                        .'|/(?'
                            .'|customer\\-(?'
                                .'|group\\-(?'
                                    .'|registration\\-sales\\-channels((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23301)'
                                    .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23378)'
                                .')'
                                .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23453)'
                                .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23522)'
                                .'|wishlist(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23599)'
                                    .'|\\-product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23674)'
                                .')'
                            .')'
                            .'|d(?'
                                .'|elivery\\-time(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23762)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23841)'
                                .')'
                                .'|ocument(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23918)'
                                    .'|\\-(?'
                                        .'|base\\-config(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24004)'
                                            .'|\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24086)'
                                        .')'
                                        .'|type(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24160)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24239)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|flow(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24316)'
                                .'|\\-(?'
                                    .'|sequence((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24395)'
                                    .'|template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24469)'
                                .')'
                            .')'
                            .'|i(?'
                                .'|mport\\-export\\-(?'
                                    .'|file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24563)'
                                    .'|log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24632)'
                                    .'|profile(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24708)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24787)'
                                    .')'
                                .')'
                                .'|ntegration(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24868)'
                                    .'|\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24940)'
                                .')'
                            .')'
                            .'|l(?'
                                .'|an(?'
                                    .'|ding\\-page(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25030)'
                                        .'|\\-(?'
                                            .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25115)'
                                            .'|t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25187)'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25263)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|guage((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25337)'
                                .')'
                                .'|o(?'
                                    .'|cale(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25415)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25494)'
                                    .')'
                                    .'|g\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25569)'
                                .')'
                            .')'
                            .'|m(?'
                                .'|ai(?'
                                    .'|l\\-(?'
                                        .'|header\\-footer(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25669)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25748)'
                                        .')'
                                        .'|template(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25826)'
                                            .'|\\-(?'
                                                .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25902)'
                                                .'|t(?'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25982)'
                                                    .'|ype(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26054)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26133)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|n\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26215)'
                                .')'
                                .'|edia(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26289)'
                                    .'|\\-(?'
                                        .'|default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26375)'
                                        .'|folder(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26450)'
                                            .'|\\-configuration(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26534)'
                                                .'|\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26624)'
                                            .')'
                                        .')'
                                        .'|t(?'
                                            .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26698)'
                                            .'|humbnail(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26775)'
                                                .'|\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26847)'
                                            .')'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26924)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|n(?'
                                .'|ewsletter\\-recipient(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27021)'
                                    .'|\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27092)'
                                .')'
                                .'|otification((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27170)'
                                .'|umber\\-range(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27251)'
                                    .'|\\-(?'
                                        .'|s(?'
                                            .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27339)'
                                            .'|tate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27409)'
                                        .')'
                                        .'|t(?'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27490)'
                                            .'|ype(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27562)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27641)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|order(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27720)'
                                .'|\\-(?'
                                    .'|address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27798)'
                                    .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27872)'
                                    .'|delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27946)'
                                .')'
                            .')'
                        .')'
                        .'|\\-ids/(?'
                            .'|customer\\-(?'
                                .'|group\\-(?'
                                    .'|registration\\-sales\\-channels((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28076)'
                                    .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28153)'
                                .')'
                                .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28228)'
                                .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28297)'
                                .'|wishlist(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28374)'
                                    .'|\\-product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28449)'
                                .')'
                            .')'
                            .'|d(?'
                                .'|elivery\\-time(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28537)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28616)'
                                .')'
                                .'|ocument(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28693)'
                                    .'|\\-(?'
                                        .'|base\\-config(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28779)'
                                            .'|\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28861)'
                                        .')'
                                        .'|type(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28935)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29014)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|flow(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29091)'
                                .'|\\-(?'
                                    .'|sequence((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29170)'
                                    .'|template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29244)'
                                .')'
                            .')'
                            .'|i(?'
                                .'|mport\\-export\\-(?'
                                    .'|file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29338)'
                                    .'|log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29407)'
                                    .'|profile(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29483)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29562)'
                                    .')'
                                .')'
                                .'|ntegration(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29643)'
                                    .'|\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29715)'
                                .')'
                            .')'
                            .'|l(?'
                                .'|an(?'
                                    .'|ding\\-page(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29805)'
                                        .'|\\-(?'
                                            .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29890)'
                                            .'|t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29962)'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30038)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|guage((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30112)'
                                .')'
                                .'|o(?'
                                    .'|cale(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30190)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30269)'
                                    .')'
                                    .'|g\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30344)'
                                .')'
                            .')'
                            .'|m(?'
                                .'|ai(?'
                                    .'|l\\-(?'
                                        .'|header\\-footer(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30444)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30523)'
                                        .')'
                                        .'|template(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30601)'
                                            .'|\\-(?'
                                                .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30677)'
                                                .'|t(?'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30757)'
                                                    .'|ype(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30829)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30908)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|n\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30990)'
                                .')'
                                .'|edia(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31064)'
                                    .'|\\-(?'
                                        .'|default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31150)'
                                        .'|folder(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31225)'
                                            .'|\\-configuration(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31309)'
                                                .'|\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31399)'
                                            .')'
                                        .')'
                                        .'|t(?'
                                            .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31473)'
                                            .'|humbnail(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31550)'
                                                .'|\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31622)'
                                            .')'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31699)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|n(?'
                                .'|ewsletter\\-recipient(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31796)'
                                    .'|\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31867)'
                                .')'
                                .'|otification((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31945)'
                                .'|umber\\-range(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32026)'
                                    .'|\\-(?'
                                        .'|s(?'
                                            .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32114)'
                                            .'|tate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32184)'
                                        .')'
                                        .'|t(?'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32265)'
                                            .'|ype(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32337)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32416)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|order(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32495)'
                                .'|\\-(?'
                                    .'|address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32573)'
                                    .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32647)'
                                    .'|delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32721)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|aggregate/(?'
                        .'|customer\\-(?'
                            .'|group\\-(?'
                                .'|registration\\-sales\\-channels((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32856)'
                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32933)'
                            .')'
                            .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33008)'
                            .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33077)'
                            .'|wishlist(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33154)'
                                .'|\\-product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33229)'
                            .')'
                        .')'
                        .'|d(?'
                            .'|elivery\\-time(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33317)'
                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33396)'
                            .')'
                            .'|ocument(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33473)'
                                .'|\\-(?'
                                    .'|base\\-config(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33559)'
                                        .'|\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33641)'
                                    .')'
                                    .'|type(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33715)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33794)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|flow(?'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33871)'
                            .'|\\-(?'
                                .'|sequence((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33950)'
                                .'|template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34024)'
                            .')'
                        .')'
                        .'|i(?'
                            .'|mport\\-export\\-(?'
                                .'|file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34118)'
                                .'|log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34187)'
                                .'|profile(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34263)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34342)'
                                .')'
                            .')'
                            .'|ntegration(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34423)'
                                .'|\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34495)'
                            .')'
                        .')'
                        .'|l(?'
                            .'|an(?'
                                .'|ding\\-page(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34585)'
                                    .'|\\-(?'
                                        .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34670)'
                                        .'|t(?'
                                            .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34742)'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34818)'
                                        .')'
                                    .')'
                                .')'
                                .'|guage((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34892)'
                            .')'
                            .'|o(?'
                                .'|cale(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34970)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35049)'
                                .')'
                                .'|g\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35124)'
                            .')'
                        .')'
                        .'|m(?'
                            .'|ai(?'
                                .'|l\\-(?'
                                    .'|header\\-footer(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35224)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35303)'
                                    .')'
                                    .'|template(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35381)'
                                        .'|\\-(?'
                                            .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35457)'
                                            .'|t(?'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35537)'
                                                .'|ype(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35609)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35688)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|n\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35770)'
                            .')'
                            .'|edia(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35844)'
                                .'|\\-(?'
                                    .'|default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35930)'
                                    .'|folder(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36005)'
                                        .'|\\-configuration(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36089)'
                                            .'|\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36179)'
                                        .')'
                                    .')'
                                    .'|t(?'
                                        .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36253)'
                                        .'|humbnail(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36330)'
                                            .'|\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36402)'
                                        .')'
                                        .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36479)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|n(?'
                            .'|ewsletter\\-recipient(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36576)'
                                .'|\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36647)'
                            .')'
                            .'|otification((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36725)'
                            .'|umber\\-range(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36806)'
                                .'|\\-(?'
                                    .'|s(?'
                                        .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36894)'
                                        .'|tate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36964)'
                                    .')'
                                    .'|t(?'
                                        .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37045)'
                                        .'|ype(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37117)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37196)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|order(?'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37275)'
                            .'|\\-(?'
                                .'|address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37353)'
                                .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37427)'
                                .'|delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37501)'
                            .')'
                        .')'
                    .')'
                    .'|d(?'
                        .'|elivery\\-time(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:37606)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:37676)'
                            .')'
                            .'|\\-translation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:37775)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:37845)'
                                .')'
                            .')'
                        .')'
                        .'|ocument(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:37940)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:38010)'
                            .')'
                            .'|\\-(?'
                                .'|base\\-config(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:38113)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:38183)'
                                    .')'
                                    .'|\\-sales\\-channel(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:38285)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:38355)'
                                        .')'
                                    .')'
                                .')'
                                .'|type(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:38447)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:38517)'
                                    .')'
                                    .'|\\-translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:38616)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:38686)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|flow(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:38781)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                            .'|(*:38851)'
                        .')'
                        .'|\\-(?'
                            .'|sequence(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:38950)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:39020)'
                                .')'
                            .')'
                            .'|template(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:39115)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:39185)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|i(?'
                        .'|mport\\-export\\-(?'
                            .'|file(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:39300)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:39370)'
                                .')'
                            .')'
                            .'|log(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:39460)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:39530)'
                                .')'
                            .')'
                            .'|profile(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:39624)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:39694)'
                                .')'
                                .'|\\-translation(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:39793)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:39863)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|ntegration(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:39962)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:40029)'
                            .'|\\-role(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:40120)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:40190)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|l(?'
                        .'|an(?'
                            .'|ding\\-page(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:40298)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:40368)'
                                .')'
                                .'|\\-(?'
                                    .'|sales\\-channel(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:40473)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:40543)'
                                        .')'
                                    .')'
                                    .'|t(?'
                                        .'|ag(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:40636)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:40706)'
                                            .')'
                                        .')'
                                        .'|ranslation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:40803)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:40873)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|guage(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:40968)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:41038)'
                                .')'
                            .')'
                        .')'
                        .'|o(?'
                            .'|cale(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:41134)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:41204)'
                                .')'
                                .'|\\-translation(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:41303)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:41373)'
                                    .')'
                                .')'
                            .')'
                            .'|g\\-entry(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:41469)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:41539)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|m(?'
                        .'|ai(?'
                            .'|l\\-(?'
                                .'|header\\-footer(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:41657)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:41727)'
                                    .')'
                                    .'|\\-translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:41826)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:41896)'
                                        .')'
                                    .')'
                                .')'
                                .'|template(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:41992)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:42062)'
                                    .')'
                                    .'|\\-(?'
                                        .'|media(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:42158)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:42228)'
                                            .')'
                                        .')'
                                        .'|t(?'
                                            .'|ranslation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:42329)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:42399)'
                                                .')'
                                            .')'
                                            .'|ype(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:42489)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:42559)'
                                                .')'
                                                .'|\\-translation(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:42658)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:42728)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|n\\-category(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:42831)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:42901)'
                                .')'
                            .')'
                        .')'
                        .'|edia(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:42993)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:43063)'
                            .')'
                            .'|\\-(?'
                                .'|default\\-folder(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:43169)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:43239)'
                                    .')'
                                .')'
                                .'|folder(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:43332)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:43402)'
                                    .')'
                                    .'|\\-configuration(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:43503)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:43573)'
                                        .')'
                                        .'|\\-media\\-thumbnail\\-size(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:43683)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:43753)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|t(?'
                                    .'|ag(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:43848)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:43918)'
                                        .')'
                                    .')'
                                    .'|humbnail(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:44013)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:44083)'
                                        .')'
                                        .'|\\-size(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:44175)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:44245)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|ranslation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:44343)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:44413)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|n(?'
                        .'|ewsletter\\-recipient(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:44528)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:44598)'
                            .')'
                            .'|\\-tag(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:44689)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:44759)'
                                .')'
                            .')'
                        .')'
                        .'|otification(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:44858)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:44928)'
                            .')'
                        .')'
                        .'|umber\\-range(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:45027)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:45097)'
                            .')'
                            .'|\\-(?'
                                .'|s(?'
                                    .'|ales\\-channel(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:45205)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:45275)'
                                        .')'
                                    .')'
                                    .'|tate(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:45366)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:45436)'
                                        .')'
                                    .')'
                                .')'
                                .'|t(?'
                                    .'|ranslation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:45538)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:45608)'
                                        .')'
                                    .')'
                                    .'|ype(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:45698)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:45768)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:45867)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:45937)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|order(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:46034)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                            .'|(*:46104)'
                        .')'
                        .'|\\-(?'
                            .'|address(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:46202)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:46272)'
                                .')'
                            .')'
                            .'|customer(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:46367)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:46437)'
                                .')'
                            .')'
                            .'|delivery(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:46532)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:46602)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
        46602 => '{^(?'
                .'|/api/(?'
                    .'|order\\-(?'
                        .'|delivery\\-position(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:46720)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:46790)'
                            .')'
                        .')'
                        .'|line\\-item(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:46887)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:46957)'
                            .')'
                            .'|\\-download(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:47053)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:47123)'
                                .')'
                            .')'
                        .')'
                        .'|t(?'
                            .'|ag(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:47217)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:47287)'
                                .')'
                            .')'
                            .'|ransaction(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:47384)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:47454)'
                                .')'
                                .'|\\-capture(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:47549)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:47619)'
                                    .')'
                                    .'|\\-refund(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:47713)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:47783)'
                                        .')'
                                        .'|\\-position(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:47879)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:47949)'
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
                                .'|delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48063)'
                                .'|line\\-item(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48142)'
                                    .'|\\-download((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48218)'
                                .')'
                                .'|t(?'
                                    .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48291)'
                                    .'|ransaction(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48370)'
                                        .'|\\-capture(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48448)'
                                            .'|\\-refund(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48525)'
                                                .'|\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48601)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|p(?'
                                .'|ayment\\-method(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48693)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48772)'
                                .')'
                                .'|lugin(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48847)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48926)'
                                .')'
                                .'|ro(?'
                                    .'|duct(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49005)'
                                        .'|\\-(?'
                                            .'|c(?'
                                                .'|ategory(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49090)'
                                                    .'|\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49162)'
                                                .')'
                                                .'|onfigurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49249)'
                                                .'|ross\\-selling(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49331)'
                                                    .'|\\-(?'
                                                        .'|assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49420)'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49497)'
                                                    .')'
                                                .')'
                                                .'|ustom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49582)'
                                            .')'
                                            .'|download((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49657)'
                                            .'|export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49729)'
                                            .'|feature\\-set(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49810)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49889)'
                                            .')'
                                            .'|keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49975)'
                                            .'|m(?'
                                                .'|anufacturer(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50059)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50138)'
                                                .')'
                                                .'|edia((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50209)'
                                            .')'
                                            .'|option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50282)'
                                            .'|pr(?'
                                                .'|ice((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50356)'
                                                .'|operty((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50428)'
                                            .')'
                                            .'|review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50501)'
                                            .'|s(?'
                                                .'|earch\\-(?'
                                                    .'|config(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50590)'
                                                        .'|\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50663)'
                                                    .')'
                                                    .'|keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50737)'
                                                .')'
                                                .'|orting(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50813)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50892)'
                                                .')'
                                                .'|tream(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50967)'
                                                    .'|\\-(?'
                                                        .'|filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51044)'
                                                        .'|mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51117)'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51194)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51269)'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51345)'
                                            .')'
                                            .'|visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51422)'
                                        .')'
                                    .')'
                                    .'|motion(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51499)'
                                        .'|\\-(?'
                                            .'|cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51580)'
                                            .'|discount(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51657)'
                                                .'|\\-(?'
                                                    .'|prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51734)'
                                                    .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51804)'
                                                .')'
                                            .')'
                                            .'|individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51888)'
                                            .'|order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51965)'
                                            .'|persona\\-(?'
                                                .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52051)'
                                                .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52121)'
                                            .')'
                                            .'|s(?'
                                                .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52205)'
                                                .'|etgroup(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52281)'
                                                    .'|\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52353)'
                                                .')'
                                            .')'
                                            .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52432)'
                                        .')'
                                    .')'
                                    .'|perty\\-group(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52515)'
                                        .'|\\-option(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52592)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52671)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|\\-ids/(?'
                            .'|order\\-(?'
                                .'|delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52779)'
                                .'|line\\-item(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52858)'
                                    .'|\\-download((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52934)'
                                .')'
                                .'|t(?'
                                    .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53007)'
                                    .'|ransaction(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53086)'
                                        .'|\\-capture(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53164)'
                                            .'|\\-refund(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53241)'
                                                .'|\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53317)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|p(?'
                                .'|ayment\\-method(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53409)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53488)'
                                .')'
                                .'|lugin(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53563)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53642)'
                                .')'
                                .'|ro(?'
                                    .'|duct(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53721)'
                                        .'|\\-(?'
                                            .'|c(?'
                                                .'|ategory(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53806)'
                                                    .'|\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53878)'
                                                .')'
                                                .'|onfigurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53965)'
                                                .'|ross\\-selling(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54047)'
                                                    .'|\\-(?'
                                                        .'|assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54136)'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54213)'
                                                    .')'
                                                .')'
                                                .'|ustom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54298)'
                                            .')'
                                            .'|download((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54373)'
                                            .'|export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54445)'
                                            .'|feature\\-set(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54526)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54605)'
                                            .')'
                                            .'|keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54691)'
                                            .'|m(?'
                                                .'|anufacturer(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54775)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54854)'
                                                .')'
                                                .'|edia((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54925)'
                                            .')'
                                            .'|option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54998)'
                                            .'|pr(?'
                                                .'|ice((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55072)'
                                                .'|operty((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55144)'
                                            .')'
                                            .'|review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55217)'
                                            .'|s(?'
                                                .'|earch\\-(?'
                                                    .'|config(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55306)'
                                                        .'|\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55379)'
                                                    .')'
                                                    .'|keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55453)'
                                                .')'
                                                .'|orting(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55529)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55608)'
                                                .')'
                                                .'|tream(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55683)'
                                                    .'|\\-(?'
                                                        .'|filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55760)'
                                                        .'|mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55833)'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55910)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55985)'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56061)'
                                            .')'
                                            .'|visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56138)'
                                        .')'
                                    .')'
                                    .'|motion(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56215)'
                                        .'|\\-(?'
                                            .'|cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56296)'
                                            .'|discount(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56373)'
                                                .'|\\-(?'
                                                    .'|prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56450)'
                                                    .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56520)'
                                                .')'
                                            .')'
                                            .'|individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56604)'
                                            .'|order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56681)'
                                            .'|persona\\-(?'
                                                .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56767)'
                                                .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56837)'
                                            .')'
                                            .'|s(?'
                                                .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56921)'
                                                .'|etgroup(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56997)'
                                                    .'|\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57069)'
                                                .')'
                                            .')'
                                            .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57148)'
                                        .')'
                                    .')'
                                    .'|perty\\-group(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57231)'
                                        .'|\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57305)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|aggregate/(?'
                        .'|order\\-(?'
                            .'|delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57417)'
                            .'|line\\-item(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57496)'
                                .'|\\-download((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57572)'
                            .')'
                            .'|t(?'
                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57645)'
                                .'|ransaction(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57724)'
                                    .'|\\-capture(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57802)'
                                        .'|\\-refund(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57879)'
                                            .'|\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57955)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|p(?'
                            .'|ayment\\-method(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58047)'
                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58126)'
                            .')'
                            .'|lugin(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58201)'
                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58280)'
                            .')'
                            .'|ro(?'
                                .'|duct(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58359)'
                                    .'|\\-(?'
                                        .'|c(?'
                                            .'|ategory(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58444)'
                                                .'|\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58516)'
                                            .')'
                                            .'|onfigurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58603)'
                                            .'|ross\\-selling(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58685)'
                                                .'|\\-(?'
                                                    .'|assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58774)'
                                                    .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58851)'
                                                .')'
                                            .')'
                                            .'|ustom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58936)'
                                        .')'
                                        .'|download((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59011)'
                                        .'|export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59083)'
                                        .'|feature\\-set(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59164)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59243)'
                                        .')'
                                        .'|keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59329)'
                                        .'|m(?'
                                            .'|anufacturer(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59413)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59492)'
                                            .')'
                                            .'|edia((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59563)'
                                        .')'
                                        .'|option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59636)'
                                        .'|pr(?'
                                            .'|ice((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59710)'
                                            .'|operty((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59782)'
                                        .')'
                                        .'|review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59855)'
                                        .'|s(?'
                                            .'|earch\\-(?'
                                                .'|config(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59944)'
                                                    .'|\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60017)'
                                                .')'
                                                .'|keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60091)'
                                            .')'
                                            .'|orting(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60167)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60246)'
                                            .')'
                                            .'|tream(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60321)'
                                                .'|\\-(?'
                                                    .'|filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60398)'
                                                    .'|mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60471)'
                                                    .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60548)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|t(?'
                                            .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60623)'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60699)'
                                        .')'
                                        .'|visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60776)'
                                    .')'
                                .')'
                                .'|motion(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60853)'
                                    .'|\\-(?'
                                        .'|cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60934)'
                                        .'|discount(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61011)'
                                            .'|\\-(?'
                                                .'|prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61088)'
                                                .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61158)'
                                            .')'
                                        .')'
                                        .'|individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61242)'
                                        .'|order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61319)'
                                        .'|persona\\-(?'
                                            .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61405)'
                                            .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61475)'
                                        .')'
                                        .'|s(?'
                                            .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61559)'
                                            .'|etgroup(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61635)'
                                                .'|\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61707)'
                                            .')'
                                        .')'
                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61786)'
                                    .')'
                                .')'
                                .'|perty\\-group(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61869)'
                                    .'|\\-option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:61943)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|p(?'
                        .'|ayment\\-method(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:62050)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:62120)'
                            .')'
                            .'|\\-translation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:62219)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:62289)'
                                .')'
                            .')'
                        .')'
                        .'|lugin(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:62382)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:62452)'
                            .')'
                            .'|\\-translation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:62551)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:62621)'
                                .')'
                            .')'
                        .')'
                        .'|ro(?'
                            .'|duct(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:62718)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:62788)'
                                .')'
                                .'|\\-(?'
                                    .'|c(?'
                                        .'|ategory(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:62890)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:62960)'
                                            .')'
                                            .'|\\-tree(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:63052)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:63122)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|onfigurator\\-setting(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:63230)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:63300)'
                                            .')'
                                        .')'
                                        .'|ross\\-selling(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:63400)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:63470)'
                                            .')'
                                            .'|\\-(?'
                                                .'|assigned\\-products(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:63579)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:63649)'
                                                    .')'
                                                .')'
                                                .'|translation(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:63747)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:63817)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|ustom\\-field\\-set(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:63923)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:63993)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|download(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:64089)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:64159)'
                                        .')'
                                    .')'
                                    .'|export(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:64252)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:64322)'
                                        .')'
                                    .')'
                                    .'|feature\\-set(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:64421)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:64491)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:64590)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:64660)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|keyword\\-dictionary(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:64767)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:64837)'
                                        .')'
                                    .')'
                                    .'|m(?'
                                        .'|anufacturer(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:64939)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:65009)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:65108)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:65178)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|edia(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:65270)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:65340)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|option(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:65434)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:65504)'
                                        .')'
                                    .')'
                                    .'|pr(?'
                                        .'|ice(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:65599)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:65669)'
                                            .')'
                                        .')'
                                        .'|operty(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:65762)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:65832)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|review(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:65926)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:65996)'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|earch\\-(?'
                                            .'|config(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:66103)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:66173)'
                                                .')'
                                                .'|\\-field(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:66266)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:66336)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|keyword(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:66431)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:66501)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|orting(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:66595)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:66665)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:66764)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:66834)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|tream(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:66927)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:66997)'
                                            .')'
                                            .'|\\-(?'
                                                .'|filter(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:67094)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:67164)'
                                                    .')'
                                                .')'
                                                .'|mapping(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:67258)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:67328)'
                                                    .')'
                                                .')'
                                                .'|translation(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:67426)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:67496)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|t(?'
                                        .'|ag(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:67592)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:67662)'
                                            .')'
                                        .')'
                                        .'|ranslation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:67759)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:67829)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|visibility(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:67927)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:67997)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|motion(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:68092)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:68162)'
                                .')'
                                .'|\\-(?'
                                    .'|cart\\-rule(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:68263)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:68333)'
                                        .')'
                                    .')'
                                    .'|discount(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:68428)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:68498)'
                                        .')'
                                        .'|\\-(?'
                                            .'|prices(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:68595)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:68665)'
                                                .')'
                                            .')'
                                            .'|rule(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:68756)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:68826)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|individual\\-code(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:68931)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:69001)'
                                        .')'
                                    .')'
                                    .'|order\\-rule(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:69099)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:69169)'
                                        .')'
                                    .')'
                                    .'|persona\\-(?'
                                        .'|customer(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:69276)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:69346)'
                                            .')'
                                        .')'
                                        .'|rule(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:69437)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:69507)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|ales\\-channel(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:69612)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:69682)'
                                            .')'
                                        .')'
                                        .'|etgroup(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:69776)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:69846)'
                                            .')'
                                            .'|\\-rule(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:69938)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:70008)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:70108)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:70178)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|perty\\-group(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:70279)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:70349)'
                                .')'
                                .'|\\-option(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:70443)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:70513)'
                                    .')'
                                    .'|\\-translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:70612)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:70679)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
        70679 => '{^(?'
                .'|/api/(?'
                    .'|s(?'
                        .'|e(?'
                            .'|arch(?'
                                .'|\\-ids/(?'
                                    .'|property\\-group\\-(?'
                                        .'|option\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:70813)'
                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:70890)'
                                    .')'
                                    .'|rule(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:70964)'
                                        .'|\\-(?'
                                            .'|condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71044)'
                                            .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71113)'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|al(?'
                                            .'|es\\-channel(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71204)'
                                                .'|\\-(?'
                                                    .'|analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71284)'
                                                    .'|c(?'
                                                        .'|ountry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71360)'
                                                        .'|urrency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71433)'
                                                    .')'
                                                    .'|domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71506)'
                                                    .'|language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71580)'
                                                    .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71661)'
                                                    .'|shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71743)'
                                                    .'|t(?'
                                                        .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71823)'
                                                        .'|ype(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71895)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71974)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|utation(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72054)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72133)'
                                            .')'
                                        .')'
                                        .'|c(?'
                                            .'|heduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72218)'
                                            .'|ript((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72288)'
                                        .')'
                                        .'|eo\\-url(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72365)'
                                            .'|\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72441)'
                                        .')'
                                        .'|hipping\\-method(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72526)'
                                            .'|\\-(?'
                                                .'|price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72602)'
                                                .'|t(?'
                                                    .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72674)'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72750)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|nippet(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72828)'
                                            .'|\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72899)'
                                        .')'
                                        .'|tate\\-machine(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72982)'
                                            .'|\\-(?'
                                                .'|history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73060)'
                                                .'|state(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73134)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73213)'
                                                .')'
                                                .'|trans(?'
                                                    .'|ition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73293)'
                                                    .'|lation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73365)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|wag\\-language\\-pack\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73463)'
                                        .'|ystem\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73542)'
                                    .')'
                                    .'|t(?'
                                        .'|a(?'
                                            .'|g((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73618)'
                                            .'|x(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73688)'
                                                .'|\\-(?'
                                                    .'|provider(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73770)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73849)'
                                                    .')'
                                                    .'|rule(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73923)'
                                                        .'|\\-type(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73998)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74077)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|heme(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74155)'
                                            .'|\\-(?'
                                                .'|child((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74231)'
                                                .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74302)'
                                                .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74382)'
                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74459)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|u(?'
                                        .'|nit(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74538)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74617)'
                                        .')'
                                        .'|ser(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74690)'
                                            .'|\\-(?'
                                                .'|access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74772)'
                                                .'|config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74844)'
                                                .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74918)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|version(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74997)'
                                        .'|\\-commit(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75074)'
                                            .'|\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75146)'
                                        .')'
                                    .')'
                                    .'|webhook(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75224)'
                                        .'|\\-event\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75302)'
                                    .')'
                                .')'
                                .'|/(?'
                                    .'|property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75402)'
                                    .'|rule(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75475)'
                                        .'|\\-(?'
                                            .'|condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75555)'
                                            .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75624)'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|al(?'
                                            .'|es\\-channel(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75715)'
                                                .'|\\-(?'
                                                    .'|analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75795)'
                                                    .'|c(?'
                                                        .'|ountry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75871)'
                                                        .'|urrency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75944)'
                                                    .')'
                                                    .'|domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76017)'
                                                    .'|language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76091)'
                                                    .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76172)'
                                                    .'|shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76254)'
                                                    .'|t(?'
                                                        .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76334)'
                                                        .'|ype(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76406)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76485)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|utation(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76565)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76644)'
                                            .')'
                                        .')'
                                        .'|c(?'
                                            .'|heduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76729)'
                                            .'|ript((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76799)'
                                        .')'
                                        .'|eo\\-url(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76876)'
                                            .'|\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76952)'
                                        .')'
                                        .'|hipping\\-method(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77037)'
                                            .'|\\-(?'
                                                .'|price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77113)'
                                                .'|t(?'
                                                    .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77185)'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77261)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|nippet(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77339)'
                                            .'|\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77410)'
                                        .')'
                                        .'|tate\\-machine(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77493)'
                                            .'|\\-(?'
                                                .'|history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77571)'
                                                .'|state(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77645)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77724)'
                                                .')'
                                                .'|trans(?'
                                                    .'|ition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77804)'
                                                    .'|lation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77876)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|wag\\-language\\-pack\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77974)'
                                        .'|ystem\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78053)'
                                    .')'
                                    .'|t(?'
                                        .'|a(?'
                                            .'|g((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78129)'
                                            .'|x(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78199)'
                                                .'|\\-(?'
                                                    .'|provider(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78281)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78360)'
                                                    .')'
                                                    .'|rule(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78434)'
                                                        .'|\\-type(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78509)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78588)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|heme(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78666)'
                                            .'|\\-(?'
                                                .'|child((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78742)'
                                                .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78813)'
                                                .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78893)'
                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78970)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|u(?'
                                        .'|nit(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79049)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79128)'
                                        .')'
                                        .'|ser(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79201)'
                                            .'|\\-(?'
                                                .'|access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79283)'
                                                .'|config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79355)'
                                                .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79429)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|version(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79508)'
                                        .'|\\-commit(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79585)'
                                            .'|\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79657)'
                                        .')'
                                    .')'
                                    .'|webhook(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79735)'
                                        .'|\\-event\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79813)'
                                    .')'
                                .')'
                            .')'
                            .'|o\\-url(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:79907)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:79977)'
                                .')'
                                .'|\\-template(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:80073)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:80143)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|al(?'
                            .'|es\\-channel(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:80248)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:80318)'
                                .')'
                                .'|\\-(?'
                                    .'|analytics(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:80418)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:80488)'
                                        .')'
                                    .')'
                                    .'|c(?'
                                        .'|ountry(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:80585)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:80655)'
                                            .')'
                                        .')'
                                        .'|urrency(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:80749)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:80819)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|domain(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:80913)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:80983)'
                                        .')'
                                    .')'
                                    .'|language(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:81078)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:81148)'
                                        .')'
                                    .')'
                                    .'|payment\\-method(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:81250)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:81320)'
                                        .')'
                                    .')'
                                    .'|shipping\\-method(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:81423)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:81493)'
                                        .')'
                                    .')'
                                    .'|t(?'
                                        .'|ranslation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:81594)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:81664)'
                                            .')'
                                        .')'
                                        .'|ype(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:81754)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:81824)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:81923)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:81993)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|utation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:82091)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:82161)'
                                .')'
                                .'|\\-translation(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:82260)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:82330)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|c(?'
                            .'|heduled\\-task(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:82436)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:82506)'
                                .')'
                            .')'
                            .'|ript(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:82597)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:82667)'
                                .')'
                            .')'
                        .')'
                        .'|hipping\\-method(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:82770)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:82840)'
                            .')'
                            .'|\\-(?'
                                .'|price(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:82936)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:83006)'
                                    .')'
                                .')'
                                .'|t(?'
                                    .'|ag(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:83099)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:83169)'
                                        .')'
                                    .')'
                                    .'|ranslation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:83266)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:83336)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|nippet(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:83432)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:83502)'
                            .')'
                            .'|\\-set(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:83593)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:83663)'
                                .')'
                            .')'
                        .')'
                        .'|tate\\-machine(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:83764)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:83834)'
                            .')'
                            .'|\\-(?'
                                .'|history(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:83932)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:84002)'
                                    .')'
                                .')'
                                .'|state(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:84094)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:84164)'
                                    .')'
                                    .'|\\-translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:84263)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:84333)'
                                        .')'
                                    .')'
                                .')'
                                .'|trans(?'
                                    .'|ition(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:84434)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:84504)'
                                        .')'
                                    .')'
                                    .'|lation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:84597)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:84667)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|wag\\-language\\-pack\\-language(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:84786)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:84856)'
                            .')'
                        .')'
                        .'|ystem\\-config(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:84956)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:85026)'
                            .')'
                        .')'
                    .')'
                    .'|a(?'
                        .'|ggregate/(?'
                            .'|property\\-group\\-(?'
                                .'|option\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85150)'
                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85227)'
                            .')'
                            .'|rule(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85301)'
                                .'|\\-(?'
                                    .'|condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85381)'
                                    .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85450)'
                                .')'
                            .')'
                            .'|s(?'
                                .'|al(?'
                                    .'|es\\-channel(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85541)'
                                        .'|\\-(?'
                                            .'|analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85621)'
                                            .'|c(?'
                                                .'|ountry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85697)'
                                                .'|urrency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85770)'
                                            .')'
                                            .'|domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85843)'
                                            .'|language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85917)'
                                            .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85998)'
                                            .'|shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86080)'
                                            .'|t(?'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86160)'
                                                .'|ype(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86232)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86311)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|utation(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86391)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86470)'
                                    .')'
                                .')'
                                .'|c(?'
                                    .'|heduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86555)'
                                    .'|ript((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86625)'
                                .')'
                                .'|eo\\-url(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86702)'
                                    .'|\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86778)'
                                .')'
                                .'|hipping\\-method(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86863)'
                                    .'|\\-(?'
                                        .'|price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86939)'
                                        .'|t(?'
                                            .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87011)'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87087)'
                                        .')'
                                    .')'
                                .')'
                                .'|nippet(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87165)'
                                    .'|\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87236)'
                                .')'
                                .'|tate\\-machine(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87319)'
                                    .'|\\-(?'
                                        .'|history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87397)'
                                        .'|state(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87471)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87550)'
                                        .')'
                                        .'|trans(?'
                                            .'|ition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87630)'
                                            .'|lation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87702)'
                                        .')'
                                    .')'
                                .')'
                                .'|wag\\-language\\-pack\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87800)'
                                .'|ystem\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87879)'
                            .')'
                            .'|t(?'
                                .'|a(?'
                                    .'|g((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87955)'
                                    .'|x(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88025)'
                                        .'|\\-(?'
                                            .'|provider(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88107)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88186)'
                                            .')'
                                            .'|rule(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88260)'
                                                .'|\\-type(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88335)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88414)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|heme(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88492)'
                                    .'|\\-(?'
                                        .'|child((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88568)'
                                        .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88639)'
                                        .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88719)'
                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88796)'
                                    .')'
                                .')'
                            .')'
                            .'|u(?'
                                .'|nit(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88875)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88954)'
                                .')'
                                .'|ser(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89027)'
                                    .'|\\-(?'
                                        .'|access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89109)'
                                        .'|config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89181)'
                                        .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89255)'
                                    .')'
                                .')'
                            .')'
                            .'|version(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89334)'
                                .'|\\-commit(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89411)'
                                    .'|\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89483)'
                                .')'
                            .')'
                            .'|webhook(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89561)'
                                .'|\\-event\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89639)'
                            .')'
                        .')'
                        .'|cl\\-role(?'
                            .'|(*:89662)'
                            .'|/([^/]++)(?'
                                .'|(*:89684)'
                            .')'
                        .')'
                    .')'
                    .'|property\\-group\\-(?'
                        .'|option\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89792)'
                        .'|translation(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:89888)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:89958)'
                            .')'
                        .')'
                    .')'
                    .'|rule(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:90050)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                            .'|(*:90120)'
                        .')'
                        .'|\\-(?'
                            .'|condition(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:90220)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:90290)'
                                .')'
                            .')'
                            .'|tag(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:90380)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:90450)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|t(?'
                        .'|a(?'
                            .'|g(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:90548)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:90618)'
                                .')'
                            .')'
                            .'|x(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:90706)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:90776)'
                                .')'
                                .'|\\-(?'
                                    .'|provider(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:90875)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:90945)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:91044)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:91114)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|rule(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:91206)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:91276)'
                                        .')'
                                        .'|\\-type(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:91368)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:91438)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:91537)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:91607)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|heme(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:91703)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:91773)'
                            .')'
                            .'|\\-(?'
                                .'|child(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:91869)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:91939)'
                                    .')'
                                .')'
                                .'|media(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:92031)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:92101)'
                                    .')'
                                .')'
                                .'|sales\\-channel(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:92202)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:92272)'
                                    .')'
                                .')'
                                .'|translation(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:92370)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:92440)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|u(?'
                        .'|nit(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:92537)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:92607)'
                            .')'
                            .'|\\-translation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:92706)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:92776)'
                                .')'
                            .')'
                        .')'
                        .'|ser(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:92864)'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:92930)'
                            .'|\\-(?'
                                .'|access\\-key(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:93031)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:93101)'
                                    .')'
                                .')'
                                .'|config(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:93194)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:93264)'
                                    .')'
                                .')'
                                .'|recovery(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:93359)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:93429)'
                                    .')'
                                .')'
                            .')'
                            .'|/([^/]++)(?'
                                .'|(*:93454)'
                                .'|/ac(?'
                                    .'|cess\\-keys/([^/]++)(*:93489)'
                                    .'|l\\-roles/([^/]++)(*:93516)'
                                .')'
                                .'|(*:93527)'
                            .')'
                            .'|(*:93538)'
                        .')'
                    .')'
                    .'|version(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:93632)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                            .'|(*:93702)'
                        .')'
                        .'|\\-commit(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:93796)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:93866)'
                            .')'
                            .'|\\-data(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:93958)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:94028)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|webhook(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:94124)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                            .'|(*:94194)'
                        .')'
                        .'|\\-event\\-log(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:94292)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:94362)'
                            .')'
                        .')'
                    .')'
                    .'|integration(?'
                        .'|(*:94389)'
                        .'|/([^/]++)(*:94408)'
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
        5341 => [[['_route' => 'api.customer_group.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5418 => [[['_route' => 'api.currency.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5505 => [[['_route' => 'api.currency_country_rounding.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5581 => [[['_route' => 'api.currency_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5656 => [[['_route' => 'api.ce_entity.aggregate', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::aggregateShorthand'], ['entityName', 'path'], ['POST' => 0], null, false, true, null]],
        5731 => [[['_route' => 'api.category.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5804 => [[['_route' => 'api.category_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5879 => [[['_route' => 'api.category_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        5958 => [[['_route' => 'api.cms_block.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6030 => [[['_route' => 'api.cms_page.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6108 => [[['_route' => 'api.cms_page_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6184 => [[['_route' => 'api.cms_section.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6255 => [[['_route' => 'api.cms_slot.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6333 => [[['_route' => 'api.cms_slot_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6410 => [[['_route' => 'api.country.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6488 => [[['_route' => 'api.country_state.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6566 => [[['_route' => 'api.country_state_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6643 => [[['_route' => 'api.country_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6726 => [[['_route' => 'api.acl_role.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'acl-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6801 => [[['_route' => 'api.acl_user_role.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6872 => [[['_route' => 'api.app.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        6962 => [[['_route' => 'api.app_action_button.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-action-button', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7040 => [[['_route' => 'api.app_action_button_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-action-button-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7128 => [[['_route' => 'api.app_administration_snippet.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-administration-snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7207 => [[['_route' => 'api.app_cms_block.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7285 => [[['_route' => 'api.app_cms_block_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-cms-block-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7369 => [[['_route' => 'api.app_flow_action.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-flow-action', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7447 => [[['_route' => 'api.app_flow_action_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-flow-action-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7518 => [[['_route' => 'api.app_flow_event.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-flow-event', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7599 => [[['_route' => 'api.app_payment_method.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7687 => [[['_route' => 'api.app_script_condition.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-script-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7765 => [[['_route' => 'api.app_script_condition_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-script-condition-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7846 => [[['_route' => 'api.app_shipping_method.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7923 => [[['_route' => 'api.app_template.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        7998 => [[['_route' => 'api.app_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'app-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8081 => [[['_route' => 'api.basic_example.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'basic-example', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8174 => [[['_route' => 'api.acl_role.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'acl-role', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        8239 => [[['_route' => 'api.acl_role.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'acl-role', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        8334 => [
            [['_route' => 'api.acl_user_role.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.acl_user_role.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.acl_user_role.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        8403 => [
            [['_route' => 'api.acl_user_role.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.acl_user_role.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        8430 => [[['_route' => 'api.script_endpoint', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\Framework\\Script\\Api\\ScriptApiRoute::execute'], ['hook'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        8550 => [[['_route' => 'api.custom_entity_entity.search-ids', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::searchIds'], ['entityName', 'path'], ['POST' => 0], null, false, true, null]],
        8615 => [[['_route' => 'api.custom_entity.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8689 => [[['_route' => 'api.custom_field.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8762 => [[['_route' => 'api.custom_field_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8837 => [[['_route' => 'api.custom_field_set_relation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8910 => [[['_route' => 'api.customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        8987 => [[['_route' => 'api.customer_address.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9057 => [[['_route' => 'api.customer_group.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9134 => [[['_route' => 'api.currency.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9221 => [[['_route' => 'api.currency_country_rounding.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9297 => [[['_route' => 'api.currency_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9372 => [[['_route' => 'api.ce_entity.search-ids', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::searchIdsShorthand'], ['entityName', 'path'], ['POST' => 0], null, false, true, null]],
        9447 => [[['_route' => 'api.category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9520 => [[['_route' => 'api.category_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9595 => [[['_route' => 'api.category_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9674 => [[['_route' => 'api.cms_block.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9746 => [[['_route' => 'api.cms_page.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9824 => [[['_route' => 'api.cms_page_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9900 => [[['_route' => 'api.cms_section.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        9971 => [[['_route' => 'api.cms_slot.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10049 => [[['_route' => 'api.cms_slot_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10127 => [[['_route' => 'api.country.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10206 => [[['_route' => 'api.country_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10285 => [[['_route' => 'api.country_state_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10363 => [[['_route' => 'api.country_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10447 => [[['_route' => 'api.acl_role.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'acl-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10523 => [[['_route' => 'api.acl_user_role.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10595 => [[['_route' => 'api.app.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10686 => [[['_route' => 'api.app_action_button.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-action-button', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10765 => [[['_route' => 'api.app_action_button_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-action-button-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10854 => [[['_route' => 'api.app_administration_snippet.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-administration-snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        10934 => [[['_route' => 'api.app_cms_block.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11013 => [[['_route' => 'api.app_cms_block_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-cms-block-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11098 => [[['_route' => 'api.app_flow_action.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-flow-action', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11177 => [[['_route' => 'api.app_flow_action_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-flow-action-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11249 => [[['_route' => 'api.app_flow_event.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-flow-event', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11331 => [[['_route' => 'api.app_payment_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11420 => [[['_route' => 'api.app_script_condition.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-script-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11499 => [[['_route' => 'api.app_script_condition_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-script-condition-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11581 => [[['_route' => 'api.app_shipping_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11659 => [[['_route' => 'api.app_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11735 => [[['_route' => 'api.app_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11819 => [[['_route' => 'api.basic_example.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'basic-example', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        11925 => [[['_route' => 'api.custom_entity_entity.search', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::search'], ['entityName', 'path'], ['POST' => 0], null, false, true, null]],
        11991 => [[['_route' => 'api.custom_entity.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12066 => [[['_route' => 'api.custom_field.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12140 => [[['_route' => 'api.custom_field_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12216 => [[['_route' => 'api.custom_field_set_relation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12290 => [[['_route' => 'api.customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12368 => [[['_route' => 'api.customer_address.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12439 => [[['_route' => 'api.customer_group.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12517 => [[['_route' => 'api.currency.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12605 => [[['_route' => 'api.currency_country_rounding.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12682 => [[['_route' => 'api.currency_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12758 => [[['_route' => 'api.ce_entity.search', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::searchShorthand'], ['entityName', 'path'], ['POST' => 0], null, false, true, null]],
        12834 => [[['_route' => 'api.category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12908 => [[['_route' => 'api.category_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        12984 => [[['_route' => 'api.category_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13064 => [[['_route' => 'api.cms_block.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13137 => [[['_route' => 'api.cms_page.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13216 => [[['_route' => 'api.cms_page_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13293 => [[['_route' => 'api.cms_section.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13365 => [[['_route' => 'api.cms_slot.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13444 => [[['_route' => 'api.cms_slot_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13522 => [[['_route' => 'api.country.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13601 => [[['_route' => 'api.country_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13680 => [[['_route' => 'api.country_state_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13758 => [[['_route' => 'api.country_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13842 => [[['_route' => 'api.acl_role.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'acl-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13918 => [[['_route' => 'api.acl_user_role.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'acl-user-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        13990 => [[['_route' => 'api.app.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14081 => [[['_route' => 'api.app_action_button.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-action-button', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14160 => [[['_route' => 'api.app_action_button_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-action-button-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14249 => [[['_route' => 'api.app_administration_snippet.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-administration-snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14329 => [[['_route' => 'api.app_cms_block.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14408 => [[['_route' => 'api.app_cms_block_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-cms-block-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14493 => [[['_route' => 'api.app_flow_action.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-flow-action', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14572 => [[['_route' => 'api.app_flow_action_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-flow-action-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14644 => [[['_route' => 'api.app_flow_event.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-flow-event', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14726 => [[['_route' => 'api.app_payment_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14815 => [[['_route' => 'api.app_script_condition.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-script-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14894 => [[['_route' => 'api.app_script_condition_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-script-condition-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        14976 => [[['_route' => 'api.app_shipping_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        15054 => [[['_route' => 'api.app_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        15130 => [[['_route' => 'api.app_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        15214 => [[['_route' => 'api.basic_example.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'basic-example', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        15252 => [[['_route' => 'api.service.activate', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['api_service_toggle'], '_controller' => 'Shopware\\Core\\Service\\Api\\ServiceController::activate'], ['serviceName'], ['POST' => 0], null, false, true, null]],
        15281 => [[['_route' => 'api.service.deactivate', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['api_service_toggle'], '_controller' => 'Shopware\\Core\\Service\\Api\\ServiceController::deactivate'], ['serviceName'], ['POST' => 0], null, false, true, null]],
        15309 => [[['_route' => 'api.service.uninstall', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['api_service_toggle'], '_controller' => 'Shopware\\Core\\Service\\Api\\ServiceController::uninstall'], ['serviceName'], ['POST' => 0], null, false, true, null]],
        15430 => [[['_route' => 'api.custom_entity_entity.detail', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::detail'], ['entityName', 'path'], ['GET' => 0], null, false, true, null]],
        15503 => [
            [['_route' => 'api.custom_entity_entity.list', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::list'], ['entityName', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_entity_entity.create', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::create'], ['entityName', 'path'], ['POST' => 0], null, false, true, null],
        ],
        15591 => [
            [['_route' => 'api.custom_entity_entity.update', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::update'], ['entityName', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_entity_entity.delete', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::delete'], ['entityName', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        15675 => [
            [['_route' => 'api.custom_entity.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_entity.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_entity.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        15745 => [
            [['_route' => 'api.custom_entity.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_entity.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-entity', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        15837 => [
            [['_route' => 'api.custom_field.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_field.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        15907 => [
            [['_route' => 'api.custom_field.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        15998 => [
            [['_route' => 'api.custom_field_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        16068 => [
            [['_route' => 'api.custom_field_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        16164 => [
            [['_route' => 'api.custom_field_set_relation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set_relation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set_relation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        16234 => [
            [['_route' => 'api.custom_field_set_relation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set_relation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field-set-relation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        16326 => [
            [['_route' => 'api.customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        16396 => [
            [['_route' => 'api.customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        16494 => [
            [['_route' => 'api.customer_address.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_address.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_address.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        16564 => [
            [['_route' => 'api.customer_address.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_address.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        16656 => [
            [['_route' => 'api.customer_group.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        16726 => [
            [['_route' => 'api.customer_group.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        16837 => [[['_route' => 'api.customer_group_registration_sales_channels.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        16932 => [
            [['_route' => 'api.currency.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.currency.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        17002 => [
            [['_route' => 'api.currency.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        17110 => [
            [['_route' => 'api.currency_country_rounding.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency_country_rounding.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.currency_country_rounding.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        17180 => [
            [['_route' => 'api.currency_country_rounding.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency_country_rounding.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        17278 => [
            [['_route' => 'api.currency_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.currency_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        17348 => [
            [['_route' => 'api.currency_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        17443 => [[['_route' => 'api.ce_entity.detail', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::detailShorthand'], ['entityName', 'path'], ['GET' => 0], null, false, true, null]],
        17516 => [
            [['_route' => 'api.ce_entity.list', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::listShorthand'], ['entityName', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.ce_entity.create', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::createShorthand'], ['entityName', 'path'], ['POST' => 0], null, false, true, null],
        ],
        17604 => [
            [['_route' => 'api.ce_entity.update', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::updateShorthand'], ['entityName', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.ce_entity.delete', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::deleteShorthand'], ['entityName', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        17698 => [
            [['_route' => 'api.category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        17768 => [
            [['_route' => 'api.category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        17862 => [
            [['_route' => 'api.category_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        17932 => [
            [['_route' => 'api.category_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        18029 => [
            [['_route' => 'api.category_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        18099 => [
            [['_route' => 'api.category_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        18200 => [
            [['_route' => 'api.cms_block.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_block.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_block.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        18270 => [
            [['_route' => 'api.cms_block.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_block.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        18361 => [
            [['_route' => 'api.cms_page.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_page.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        18431 => [
            [['_route' => 'api.cms_page.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        18530 => [
            [['_route' => 'api.cms_page_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_page_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        18600 => [
            [['_route' => 'api.cms_page_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        18698 => [
            [['_route' => 'api.cms_section.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_section.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_section.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        18768 => [
            [['_route' => 'api.cms_section.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_section.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        18858 => [
            [['_route' => 'api.cms_slot.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        18928 => [
            [['_route' => 'api.cms_slot.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        19027 => [
            [['_route' => 'api.cms_slot_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        19097 => [
            [['_route' => 'api.cms_slot_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        19193 => [
            [['_route' => 'api.country.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        19263 => [
            [['_route' => 'api.country.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        19359 => [
            [['_route' => 'api.country_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        19429 => [
            [['_route' => 'api.country_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        19528 => [
            [['_route' => 'api.country_state_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_state_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        19598 => [
            [['_route' => 'api.country_state_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        19697 => [
            [['_route' => 'api.country_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        19767 => [
            [['_route' => 'api.country_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        19871 => [
            [['_route' => 'api.basic_example.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'basic-example', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.basic_example.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'basic-example', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.basic_example.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'basic-example', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        19941 => [
            [['_route' => 'api.basic_example.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'basic-example', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.basic_example.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'basic-example', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        19988 => [[['_route' => 'frontend.app-system.generate-token', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AppController::generateToken'], ['name'], ['POST' => 0], null, false, false, null]],
        20024 => [[['_route' => 'administration.plugin.index', '_routeScope' => ['administration'], 'auth_required' => false, '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::pluginIndex'], ['pluginName'], ['GET' => 0], null, false, false, null]],
        20061 => [[['_route' => 'frontend.account.order.single.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::orderSingleOverview'], ['deepLinkCode'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        20084 => [[['_route' => 'frontend.account.edit-order.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::editOrder'], ['orderId'], ['GET' => 0], null, false, true, null]],
        20110 => [[['_route' => 'frontend.account.edit-order.change-payment-method', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::orderChangePayment'], ['orderId'], ['POST' => 0], null, false, true, null]],
        20135 => [[['_route' => 'frontend.account.edit-order.update-order', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::updateOrder'], ['orderId'], ['POST' => 0], null, false, true, null]],
        20177 => [[['_route' => 'frontend.account.order.single.document', '_routeScope' => ['storefront'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\DocumentController::downloadDocument'], ['documentId', 'deepLinkCode'], ['GET' => 0], null, false, true, null]],
        20196 => [[['_route' => 'frontend.account.order.single.document.a11y', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\DocumentController::downloadDocument'], ['documentId', 'deepLinkCode', 'fileType'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        20231 => [[['_route' => 'frontend.account.order.single.download', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\DownloadController::downloadFile'], ['orderId', 'downloadId'], ['GET' => 0], null, false, true, null]],
        20262 => [[['_route' => 'frontend.account.address.edit.page', '_routeScope' => ['storefront'], '_loginRequired' => true, '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::accountEditAddress'], ['addressId'], ['GET' => 0], null, false, true, null]],
        20298 => [[['_route' => 'frontend.account.address.set-default-address', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::switchDefaultAddress'], ['type', 'addressId'], ['POST' => 0], null, false, true, null]],
        20314 => [[['_route' => 'frontend.account.address.switch-default', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::checkoutSwitchDefaultAddress'], [], ['POST' => 0], null, false, false, null]],
        20330 => [[['_route' => 'frontend.account.address.create', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::saveAddress'], [], ['POST' => 0], null, false, false, null]],
        20348 => [[['_route' => 'frontend.account.address.edit.save', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::saveAddress'], ['addressId'], ['POST' => 0], null, false, true, null]],
        20373 => [[['_route' => 'frontend.account.address.delete', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::deleteAddress'], ['addressId'], ['POST' => 0], null, false, true, null]],
        20446 => [[['_route' => 'store-api.app-system.generate-token', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppJWTGenerateRoute::generate'], ['name'], ['POST' => 0], null, false, false, null]],
        20498 => [[['_route' => 'store-api.account.set.payment-method', '_routeScope' => ['store-api'], '_contextTokenRequired' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangePaymentMethodRoute::change'], ['paymentMethodId'], ['POST' => 0], null, false, true, null]],
        20527 => [[['_route' => 'store-api.account.address.delete', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\DeleteAddressRoute::delete'], ['addressId'], ['DELETE' => 0], null, false, true, null]],
        20566 => [[['_route' => 'store-api.account.address.change.default.shipping', '_routeScope' => ['store-api'], 'type' => 'shipping', '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SwitchDefaultAddressRoute::swap'], ['addressId'], ['PATCH' => 0], null, false, true, null]],
        20592 => [[['_route' => 'store-api.account.address.change.default.billing', '_routeScope' => ['store-api'], 'type' => 'billing', '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SwitchDefaultAddressRoute::swap'], ['addressId'], ['PATCH' => 0], null, false, true, null]],
        20611 => [[['_route' => 'store-api.account.address.update', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\UpsertAddressRoute::upsert'], ['addressId'], ['PATCH' => 0], null, false, true, null]],
        20638 => [[['_route' => 'store-api.script_endpoint', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Framework\\Script\\Api\\ScriptStoreApiRoute::execute'], ['hook'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        20668 => [[['_route' => 'store-api.sitemap.file', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\Sitemap\\SalesChannel\\SitemapFileRoute::getSitemapFile'], ['filePath'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        20705 => [[['_route' => 'store-api.country.state', '_routeScope' => ['store-api'], '_entity' => 'country', '_controller' => 'Shopware\\Core\\System\\Country\\SalesChannel\\CountryStateRoute::load'], ['countryId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        20731 => [[['_route' => 'store-api.category.detail', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\Category\\SalesChannel\\CategoryRoute::load'], ['navigationId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        20752 => [[['_route' => 'store-api.cms.detail', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\Cms\\SalesChannel\\CmsRoute::load'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        20797 => [[['_route' => 'store-api.customer.wishlist.add', '_routeScope' => ['store-api'], '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\AddWishlistProductRoute::add'], ['productId'], ['POST' => 0], null, false, true, null]],
        20822 => [[['_route' => 'store-api.customer.wishlist.delete', '_routeScope' => ['store-api'], '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\RemoveWishlistProductRoute::delete'], ['productId'], ['DELETE' => 0], null, false, true, null]],
        20870 => [[['_route' => 'store-api.customer-group-registration.config', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\CustomerGroupRegistrationSettingsRoute::load'], ['customerGroupId'], ['GET' => 0], null, false, true, null]],
        20921 => [[['_route' => 'store-api.product.export', '_routeScope' => ['store-api'], 'auth_required' => false, '_controller' => 'Shopware\\Core\\Content\\ProductExport\\SalesChannel\\ExportController::index'], ['accessKey', 'fileName'], ['GET' => 0], null, false, true, null]],
        20947 => [[['_route' => 'store-api.product.listing', '_routeScope' => ['store-api'], '_entity' => 'product', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Listing\\ResolveCriteriaProductListingRoute::load'], ['categoryId'], ['POST' => 0], null, false, true, null]],
        20988 => [[['_route' => 'store-api.product.cross-selling', '_routeScope' => ['store-api'], '_entity' => 'product', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\CrossSelling\\ProductCrossSellingRoute::load'], ['productId'], ['POST' => 0], null, false, false, null]],
        21011 => [[['_route' => 'store-api.product.find-variant', '_routeScope' => ['store-api'], '_entity' => 'product', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\FindVariant\\FindProductVariantRoute::load'], ['productId'], ['POST' => 0], null, false, false, null]],
        21031 => [[['_route' => 'store-api.product-review.list', '_routeScope' => ['store-api'], '_entity' => 'product_review', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Review\\ProductReviewRoute::load'], ['productId'], ['POST' => 0], null, false, false, null]],
        21041 => [[['_route' => 'store-api.product-review.save', '_routeScope' => ['store-api'], '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Review\\ProductReviewSaveRoute::save'], ['productId'], ['POST' => 0], null, false, false, null]],
        21053 => [[['_route' => 'store-api.product.detail', '_routeScope' => ['store-api'], '_entity' => 'product', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Detail\\ProductDetailRoute::load'], ['productId'], ['POST' => 0], null, false, true, null]],
        21090 => [[['_route' => 'store-api.breadcrumb', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\Breadcrumb\\SalesChannel\\BreadcrumbRoute::load'], ['id'], ['GET' => 0], null, false, true, null]],
        21128 => [[['_route' => 'store-api.navigation', '_routeScope' => ['store-api'], '_entity' => 'category', '_controller' => 'Shopware\\Core\\Content\\Category\\SalesChannel\\TreeBuildingNavigationRoute::load'], ['activeId', 'rootId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        21160 => [[['_route' => 'store-api.landing-page.detail', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\LandingPage\\SalesChannel\\LandingPageRoute::load'], ['landingPageId'], ['POST' => 0], null, false, true, null]],
        21202 => [[['_route' => 'store-api.account.order.single.download', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\DownloadRoute::load'], ['orderId', 'downloadId'], ['GET' => 0], null, false, true, null]],
        21252 => [[['_route' => 'store-api.document.download', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_entity' => 'document', 'deepLinkCode' => '', '_controller' => 'Shopware\\Core\\Checkout\\Document\\SalesChannel\\DocumentRoute::download'], ['documentId', 'deepLinkCode'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        21280 => [[['_route' => 'frontend.script_endpoint', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ScriptController::execute'], ['hook'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        21311 => [[['_route' => 'frontend.sitemap.proxy', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\SitemapController::sitemapProxy'], ['filePath'], ['GET' => 0], null, false, true, null]],
        21350 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        21371 => [[['_route' => 'pentatrion_vite_build_proxy', '_controller' => 'Pentatrion\\ViteBundle\\Controller\\ViteController::proxyBuild'], ['path'], null, null, false, true, null]],
        21428 => [[['_route' => 'widgets.account.order.detail', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::ajaxOrderDetail'], ['id'], ['GET' => 0], null, false, true, null]],
        21468 => [[['_route' => 'frontend.account.addressmanager', 'addressId' => null, '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::addressManagerUpsert'], ['addressId'], ['POST' => 0], null, false, true, null]],
        21499 => [[['_route' => 'frontend.cms.page', '_routeScope' => ['storefront'], 'id' => null, 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::page'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        21540 => [[['_route' => 'frontend.cms.navigation.page', '_routeScope' => ['storefront'], 'navigationId' => null, 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::category'], ['navigationId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        21566 => [[['_route' => 'frontend.cms.navigation.filter', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::filter'], ['navigationId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        21599 => [[['_route' => 'frontend.cms.buybox.switch', '_routeScope' => ['storefront'], 'productId' => null, 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::switchBuyBoxVariant'], ['productId'], ['GET' => 0], null, false, false, null]],
        21645 => [[['_route' => 'frontend.wishlist.product.delete', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::remove'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        21670 => [[['_route' => 'frontend.wishlist.product.add', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::ajaxAdd'], ['productId'], ['POST' => 0], null, false, true, null]],
        21703 => [[['_route' => 'frontend.wishlist.add.after.login', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::addAfterLogin'], ['productId'], ['GET' => 0], null, false, true, null]],
        21729 => [[['_route' => 'frontend.wishlist.product.remove', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::ajaxRemove'], ['productId'], ['POST' => 0], null, false, true, null]],
        21783 => [[['_route' => 'frontend.checkout.line-item.delete', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::deleteLineItem'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        21818 => [[['_route' => 'frontend.checkout.line-item.change-quantity', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::changeQuantity'], ['id'], ['POST' => 0], null, false, true, null]],
        21866 => [[['_route' => 'frontend.account.customer-group-registration.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::customerGroupRegistration'], ['customerGroupId'], ['GET' => 0], null, false, true, null]],
        21898 => [[['_route' => 'frontend.cms.page.full', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::pageFull'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        21933 => [[['_route' => 'frontend.detail.review.save', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::saveReview'], ['productId'], ['POST' => 0], null, false, false, null]],
        21949 => [[['_route' => 'frontend.product.reviews', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::loadReviews'], ['productId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        21982 => [[['_route' => 'frontend.landing.page', '_routeScope' => ['storefront'], '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\LandingPageController::index'], ['landingPageId'], ['GET' => 0], null, false, true, null]],
        22024 => [[['_route' => 'frontend.maintenance.singlepage', '_routeScope' => ['storefront'], 'allow_maintenance' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\MaintenanceController::renderSinglePage'], ['id'], ['GET' => 0], null, false, true, null]],
        22054 => [[['_route' => 'frontend.navigation.page', '_routeScope' => ['storefront'], '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\NavigationController::index'], ['navigationId'], ['GET' => 0], null, false, true, null]],
        22083 => [[['_route' => 'frontend.detail.page', '_routeScope' => ['storefront'], '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::index'], ['productId'], ['GET' => 0], null, false, true, null]],
        22100 => [[['_route' => 'frontend.detail.switch', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::switch'], ['productId'], ['GET' => 0], null, false, false, null]],
        22130 => [[['_route' => 'widgets.quickview.minimal', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::quickviewMinimal'], ['productId'], ['GET' => 0], null, false, true, null]],
        22272 => [
            [['_route' => 'api.customer_group_registration_sales_channels.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_registration_sales_channels.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        22342 => [
            [['_route' => 'api.customer_group_registration_sales_channels.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_registration_sales_channels.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        22440 => [
            [['_route' => 'api.customer_group_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        22510 => [
            [['_route' => 'api.customer_group_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        22606 => [
            [['_route' => 'api.customer_recovery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_recovery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_recovery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        22676 => [
            [['_route' => 'api.customer_recovery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_recovery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        22766 => [
            [['_route' => 'api.customer_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        22836 => [
            [['_route' => 'api.customer_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        22931 => [
            [['_route' => 'api.customer_wishlist.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        23001 => [
            [['_route' => 'api.customer_wishlist.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        23096 => [
            [['_route' => 'api.customer_wishlist_product.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist_product.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist_product.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        23166 => [
            [['_route' => 'api.customer_wishlist_product.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist_product.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        23301 => [[['_route' => 'api.customer_group_registration_sales_channels.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23378 => [[['_route' => 'api.customer_group_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23453 => [[['_route' => 'api.customer_recovery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23522 => [[['_route' => 'api.customer_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23599 => [[['_route' => 'api.customer_wishlist.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23674 => [[['_route' => 'api.customer_wishlist_product.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23762 => [[['_route' => 'api.delivery_time.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23841 => [[['_route' => 'api.delivery_time_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23918 => [[['_route' => 'api.document.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24004 => [[['_route' => 'api.document_base_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24086 => [[['_route' => 'api.document_base_config_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24160 => [[['_route' => 'api.document_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24239 => [[['_route' => 'api.document_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24316 => [[['_route' => 'api.flow.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24395 => [[['_route' => 'api.flow_sequence.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24469 => [[['_route' => 'api.flow_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24563 => [[['_route' => 'api.import_export_file.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24632 => [[['_route' => 'api.import_export_log.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24708 => [[['_route' => 'api.import_export_profile.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24787 => [[['_route' => 'api.import_export_profile_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24868 => [[['_route' => 'api.integration.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24940 => [[['_route' => 'api.integration_role.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25030 => [[['_route' => 'api.landing_page.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25115 => [[['_route' => 'api.landing_page_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25187 => [[['_route' => 'api.landing_page_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25263 => [[['_route' => 'api.landing_page_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25337 => [[['_route' => 'api.language.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25415 => [[['_route' => 'api.locale.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25494 => [[['_route' => 'api.locale_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25569 => [[['_route' => 'api.log_entry.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25669 => [[['_route' => 'api.mail_header_footer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25748 => [[['_route' => 'api.mail_header_footer_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25826 => [[['_route' => 'api.mail_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25902 => [[['_route' => 'api.mail_template_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25982 => [[['_route' => 'api.mail_template_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26054 => [[['_route' => 'api.mail_template_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26133 => [[['_route' => 'api.mail_template_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26215 => [[['_route' => 'api.main_category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26289 => [[['_route' => 'api.media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26375 => [[['_route' => 'api.media_default_folder.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26450 => [[['_route' => 'api.media_folder.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26534 => [[['_route' => 'api.media_folder_configuration.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26624 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26698 => [[['_route' => 'api.media_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26775 => [[['_route' => 'api.media_thumbnail.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26847 => [[['_route' => 'api.media_thumbnail_size.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26924 => [[['_route' => 'api.media_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27021 => [[['_route' => 'api.newsletter_recipient.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27092 => [[['_route' => 'api.newsletter_recipient_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27170 => [[['_route' => 'api.notification.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27251 => [[['_route' => 'api.number_range.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27339 => [[['_route' => 'api.number_range_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27409 => [[['_route' => 'api.number_range_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27490 => [[['_route' => 'api.number_range_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27562 => [[['_route' => 'api.number_range_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27641 => [[['_route' => 'api.number_range_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27720 => [[['_route' => 'api.order.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27798 => [[['_route' => 'api.order_address.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27872 => [[['_route' => 'api.order_customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27946 => [[['_route' => 'api.order_delivery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28076 => [[['_route' => 'api.customer_group_registration_sales_channels.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28153 => [[['_route' => 'api.customer_group_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28228 => [[['_route' => 'api.customer_recovery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28297 => [[['_route' => 'api.customer_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28374 => [[['_route' => 'api.customer_wishlist.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28449 => [[['_route' => 'api.customer_wishlist_product.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28537 => [[['_route' => 'api.delivery_time.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28616 => [[['_route' => 'api.delivery_time_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28693 => [[['_route' => 'api.document.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28779 => [[['_route' => 'api.document_base_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28861 => [[['_route' => 'api.document_base_config_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28935 => [[['_route' => 'api.document_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29014 => [[['_route' => 'api.document_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29091 => [[['_route' => 'api.flow.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29170 => [[['_route' => 'api.flow_sequence.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29244 => [[['_route' => 'api.flow_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29338 => [[['_route' => 'api.import_export_file.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29407 => [[['_route' => 'api.import_export_log.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29483 => [[['_route' => 'api.import_export_profile.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29562 => [[['_route' => 'api.import_export_profile_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29643 => [[['_route' => 'api.integration.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29715 => [[['_route' => 'api.integration_role.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29805 => [[['_route' => 'api.landing_page.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29890 => [[['_route' => 'api.landing_page_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29962 => [[['_route' => 'api.landing_page_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30038 => [[['_route' => 'api.landing_page_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30112 => [[['_route' => 'api.language.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30190 => [[['_route' => 'api.locale.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30269 => [[['_route' => 'api.locale_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30344 => [[['_route' => 'api.log_entry.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30444 => [[['_route' => 'api.mail_header_footer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30523 => [[['_route' => 'api.mail_header_footer_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30601 => [[['_route' => 'api.mail_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30677 => [[['_route' => 'api.mail_template_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30757 => [[['_route' => 'api.mail_template_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30829 => [[['_route' => 'api.mail_template_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30908 => [[['_route' => 'api.mail_template_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30990 => [[['_route' => 'api.main_category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31064 => [[['_route' => 'api.media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31150 => [[['_route' => 'api.media_default_folder.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31225 => [[['_route' => 'api.media_folder.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31309 => [[['_route' => 'api.media_folder_configuration.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31399 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31473 => [[['_route' => 'api.media_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31550 => [[['_route' => 'api.media_thumbnail.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31622 => [[['_route' => 'api.media_thumbnail_size.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31699 => [[['_route' => 'api.media_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31796 => [[['_route' => 'api.newsletter_recipient.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31867 => [[['_route' => 'api.newsletter_recipient_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31945 => [[['_route' => 'api.notification.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32026 => [[['_route' => 'api.number_range.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32114 => [[['_route' => 'api.number_range_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32184 => [[['_route' => 'api.number_range_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32265 => [[['_route' => 'api.number_range_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32337 => [[['_route' => 'api.number_range_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32416 => [[['_route' => 'api.number_range_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32495 => [[['_route' => 'api.order.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32573 => [[['_route' => 'api.order_address.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32647 => [[['_route' => 'api.order_customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32721 => [[['_route' => 'api.order_delivery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32856 => [[['_route' => 'api.customer_group_registration_sales_channels.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32933 => [[['_route' => 'api.customer_group_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33008 => [[['_route' => 'api.customer_recovery.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33077 => [[['_route' => 'api.customer_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33154 => [[['_route' => 'api.customer_wishlist.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33229 => [[['_route' => 'api.customer_wishlist_product.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33317 => [[['_route' => 'api.delivery_time.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33396 => [[['_route' => 'api.delivery_time_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33473 => [[['_route' => 'api.document.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33559 => [[['_route' => 'api.document_base_config.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33641 => [[['_route' => 'api.document_base_config_sales_channel.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33715 => [[['_route' => 'api.document_type.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33794 => [[['_route' => 'api.document_type_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33871 => [[['_route' => 'api.flow.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33950 => [[['_route' => 'api.flow_sequence.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34024 => [[['_route' => 'api.flow_template.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34118 => [[['_route' => 'api.import_export_file.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34187 => [[['_route' => 'api.import_export_log.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34263 => [[['_route' => 'api.import_export_profile.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34342 => [[['_route' => 'api.import_export_profile_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34423 => [[['_route' => 'api.integration.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34495 => [[['_route' => 'api.integration_role.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34585 => [[['_route' => 'api.landing_page.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34670 => [[['_route' => 'api.landing_page_sales_channel.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34742 => [[['_route' => 'api.landing_page_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34818 => [[['_route' => 'api.landing_page_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34892 => [[['_route' => 'api.language.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34970 => [[['_route' => 'api.locale.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35049 => [[['_route' => 'api.locale_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35124 => [[['_route' => 'api.log_entry.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35224 => [[['_route' => 'api.mail_header_footer.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35303 => [[['_route' => 'api.mail_header_footer_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35381 => [[['_route' => 'api.mail_template.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35457 => [[['_route' => 'api.mail_template_media.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35537 => [[['_route' => 'api.mail_template_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35609 => [[['_route' => 'api.mail_template_type.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35688 => [[['_route' => 'api.mail_template_type_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35770 => [[['_route' => 'api.main_category.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35844 => [[['_route' => 'api.media.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35930 => [[['_route' => 'api.media_default_folder.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36005 => [[['_route' => 'api.media_folder.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36089 => [[['_route' => 'api.media_folder_configuration.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36179 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36253 => [[['_route' => 'api.media_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36330 => [[['_route' => 'api.media_thumbnail.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36402 => [[['_route' => 'api.media_thumbnail_size.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36479 => [[['_route' => 'api.media_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36576 => [[['_route' => 'api.newsletter_recipient.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36647 => [[['_route' => 'api.newsletter_recipient_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36725 => [[['_route' => 'api.notification.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36806 => [[['_route' => 'api.number_range.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36894 => [[['_route' => 'api.number_range_sales_channel.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36964 => [[['_route' => 'api.number_range_state.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37045 => [[['_route' => 'api.number_range_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37117 => [[['_route' => 'api.number_range_type.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37196 => [[['_route' => 'api.number_range_type_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37275 => [[['_route' => 'api.order.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37353 => [[['_route' => 'api.order_address.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37427 => [[['_route' => 'api.order_customer.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37501 => [[['_route' => 'api.order_delivery.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37606 => [
            [['_route' => 'api.delivery_time.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        37676 => [
            [['_route' => 'api.delivery_time.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        37775 => [
            [['_route' => 'api.delivery_time_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        37845 => [
            [['_route' => 'api.delivery_time_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        37940 => [
            [['_route' => 'api.document.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        38010 => [
            [['_route' => 'api.document.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        38113 => [
            [['_route' => 'api.document_base_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        38183 => [
            [['_route' => 'api.document_base_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        38285 => [
            [['_route' => 'api.document_base_config_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        38355 => [
            [['_route' => 'api.document_base_config_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        38447 => [
            [['_route' => 'api.document_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        38517 => [
            [['_route' => 'api.document_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        38616 => [
            [['_route' => 'api.document_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        38686 => [
            [['_route' => 'api.document_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        38781 => [
            [['_route' => 'api.flow.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.flow.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        38851 => [
            [['_route' => 'api.flow.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        38950 => [
            [['_route' => 'api.flow_sequence.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow_sequence.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.flow_sequence.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        39020 => [
            [['_route' => 'api.flow_sequence.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow_sequence.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        39115 => [
            [['_route' => 'api.flow_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.flow_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        39185 => [
            [['_route' => 'api.flow_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        39300 => [
            [['_route' => 'api.import_export_file.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_file.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_file.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        39370 => [
            [['_route' => 'api.import_export_file.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_file.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        39460 => [
            [['_route' => 'api.import_export_log.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_log.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_log.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        39530 => [
            [['_route' => 'api.import_export_log.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_log.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        39624 => [
            [['_route' => 'api.import_export_profile.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        39694 => [
            [['_route' => 'api.import_export_profile.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        39793 => [
            [['_route' => 'api.import_export_profile_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        39863 => [
            [['_route' => 'api.import_export_profile_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        39962 => [
            [['_route' => 'api.integration.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.integration.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        40029 => [[['_route' => 'api.integration.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        40120 => [
            [['_route' => 'api.integration_role.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.integration_role.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.integration_role.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        40190 => [
            [['_route' => 'api.integration_role.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.integration_role.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        40298 => [
            [['_route' => 'api.landing_page.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.landing_page.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        40368 => [
            [['_route' => 'api.landing_page.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        40473 => [
            [['_route' => 'api.landing_page_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        40543 => [
            [['_route' => 'api.landing_page_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        40636 => [
            [['_route' => 'api.landing_page_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        40706 => [
            [['_route' => 'api.landing_page_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        40803 => [
            [['_route' => 'api.landing_page_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        40873 => [
            [['_route' => 'api.landing_page_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        40968 => [
            [['_route' => 'api.language.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.language.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.language.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        41038 => [
            [['_route' => 'api.language.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.language.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        41134 => [
            [['_route' => 'api.locale.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.locale.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        41204 => [
            [['_route' => 'api.locale.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        41303 => [
            [['_route' => 'api.locale_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.locale_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        41373 => [
            [['_route' => 'api.locale_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        41469 => [
            [['_route' => 'api.log_entry.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.log_entry.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.log_entry.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        41539 => [
            [['_route' => 'api.log_entry.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.log_entry.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        41657 => [
            [['_route' => 'api.mail_header_footer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        41727 => [
            [['_route' => 'api.mail_header_footer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        41826 => [
            [['_route' => 'api.mail_header_footer_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        41896 => [
            [['_route' => 'api.mail_header_footer_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        41992 => [
            [['_route' => 'api.mail_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        42062 => [
            [['_route' => 'api.mail_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        42158 => [
            [['_route' => 'api.mail_template_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        42228 => [
            [['_route' => 'api.mail_template_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        42329 => [
            [['_route' => 'api.mail_template_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        42399 => [
            [['_route' => 'api.mail_template_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        42489 => [
            [['_route' => 'api.mail_template_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        42559 => [
            [['_route' => 'api.mail_template_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        42658 => [
            [['_route' => 'api.mail_template_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        42728 => [
            [['_route' => 'api.mail_template_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        42831 => [
            [['_route' => 'api.main_category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.main_category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.main_category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        42901 => [
            [['_route' => 'api.main_category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.main_category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        42993 => [
            [['_route' => 'api.media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        43063 => [
            [['_route' => 'api.media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        43169 => [
            [['_route' => 'api.media_default_folder.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_default_folder.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_default_folder.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        43239 => [
            [['_route' => 'api.media_default_folder.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_default_folder.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        43332 => [
            [['_route' => 'api.media_folder.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        43402 => [
            [['_route' => 'api.media_folder.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        43503 => [
            [['_route' => 'api.media_folder_configuration.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        43573 => [
            [['_route' => 'api.media_folder_configuration.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        43683 => [
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        43753 => [
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        43848 => [
            [['_route' => 'api.media_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        43918 => [
            [['_route' => 'api.media_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44013 => [
            [['_route' => 'api.media_thumbnail.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44083 => [
            [['_route' => 'api.media_thumbnail.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44175 => [
            [['_route' => 'api.media_thumbnail_size.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail_size.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail_size.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44245 => [
            [['_route' => 'api.media_thumbnail_size.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail_size.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44343 => [
            [['_route' => 'api.media_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44413 => [
            [['_route' => 'api.media_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44528 => [
            [['_route' => 'api.newsletter_recipient.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44598 => [
            [['_route' => 'api.newsletter_recipient.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44689 => [
            [['_route' => 'api.newsletter_recipient_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44759 => [
            [['_route' => 'api.newsletter_recipient_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44858 => [
            [['_route' => 'api.notification.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.notification.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.notification.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44928 => [
            [['_route' => 'api.notification.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.notification.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45027 => [
            [['_route' => 'api.number_range.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45097 => [
            [['_route' => 'api.number_range.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45205 => [
            [['_route' => 'api.number_range_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45275 => [
            [['_route' => 'api.number_range_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45366 => [
            [['_route' => 'api.number_range_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45436 => [
            [['_route' => 'api.number_range_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45538 => [
            [['_route' => 'api.number_range_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45608 => [
            [['_route' => 'api.number_range_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45698 => [
            [['_route' => 'api.number_range_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45768 => [
            [['_route' => 'api.number_range_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45867 => [
            [['_route' => 'api.number_range_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45937 => [
            [['_route' => 'api.number_range_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46034 => [
            [['_route' => 'api.order.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46104 => [
            [['_route' => 'api.order.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46202 => [
            [['_route' => 'api.order_address.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_address.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_address.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46272 => [
            [['_route' => 'api.order_address.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_address.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46367 => [
            [['_route' => 'api.order_customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46437 => [
            [['_route' => 'api.order_customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46532 => [
            [['_route' => 'api.order_delivery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46602 => [
            [['_route' => 'api.order_delivery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46720 => [
            [['_route' => 'api.order_delivery_position.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery_position.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery_position.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46790 => [
            [['_route' => 'api.order_delivery_position.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery_position.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46887 => [
            [['_route' => 'api.order_line_item.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46957 => [
            [['_route' => 'api.order_line_item.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        47053 => [
            [['_route' => 'api.order_line_item_download.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item_download.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item_download.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        47123 => [
            [['_route' => 'api.order_line_item_download.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item_download.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        47217 => [
            [['_route' => 'api.order_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        47287 => [
            [['_route' => 'api.order_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        47384 => [
            [['_route' => 'api.order_transaction.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        47454 => [
            [['_route' => 'api.order_transaction.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        47549 => [
            [['_route' => 'api.order_transaction_capture.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        47619 => [
            [['_route' => 'api.order_transaction_capture.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        47713 => [
            [['_route' => 'api.order_transaction_capture_refund.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        47783 => [
            [['_route' => 'api.order_transaction_capture_refund.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        47879 => [
            [['_route' => 'api.order_transaction_capture_refund_position.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund_position.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund_position.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        47949 => [
            [['_route' => 'api.order_transaction_capture_refund_position.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund_position.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        48063 => [[['_route' => 'api.order_delivery_position.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48142 => [[['_route' => 'api.order_line_item.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48218 => [[['_route' => 'api.order_line_item_download.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48291 => [[['_route' => 'api.order_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48370 => [[['_route' => 'api.order_transaction.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48448 => [[['_route' => 'api.order_transaction_capture.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48525 => [[['_route' => 'api.order_transaction_capture_refund.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48601 => [[['_route' => 'api.order_transaction_capture_refund_position.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48693 => [[['_route' => 'api.payment_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48772 => [[['_route' => 'api.payment_method_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48847 => [[['_route' => 'api.plugin.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48926 => [[['_route' => 'api.plugin_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49005 => [[['_route' => 'api.product.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49090 => [[['_route' => 'api.product_category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49162 => [[['_route' => 'api.product_category_tree.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49249 => [[['_route' => 'api.product_configurator_setting.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49331 => [[['_route' => 'api.product_cross_selling.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49420 => [[['_route' => 'api.product_cross_selling_assigned_products.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49497 => [[['_route' => 'api.product_cross_selling_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49582 => [[['_route' => 'api.product_custom_field_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49657 => [[['_route' => 'api.product_download.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49729 => [[['_route' => 'api.product_export.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49810 => [[['_route' => 'api.product_feature_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49889 => [[['_route' => 'api.product_feature_set_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49975 => [[['_route' => 'api.product_keyword_dictionary.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50059 => [[['_route' => 'api.product_manufacturer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50138 => [[['_route' => 'api.product_manufacturer_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50209 => [[['_route' => 'api.product_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50282 => [[['_route' => 'api.product_option.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50356 => [[['_route' => 'api.product_price.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50428 => [[['_route' => 'api.product_property.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50501 => [[['_route' => 'api.product_review.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50590 => [[['_route' => 'api.product_search_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50663 => [[['_route' => 'api.product_search_config_field.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50737 => [[['_route' => 'api.product_search_keyword.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50813 => [[['_route' => 'api.product_sorting.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50892 => [[['_route' => 'api.product_sorting_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50967 => [[['_route' => 'api.product_stream.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51044 => [[['_route' => 'api.product_stream_filter.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51117 => [[['_route' => 'api.product_stream_mapping.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51194 => [[['_route' => 'api.product_stream_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51269 => [[['_route' => 'api.product_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51345 => [[['_route' => 'api.product_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51422 => [[['_route' => 'api.product_visibility.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51499 => [[['_route' => 'api.promotion.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51580 => [[['_route' => 'api.promotion_cart_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51657 => [[['_route' => 'api.promotion_discount.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51734 => [[['_route' => 'api.promotion_discount_prices.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51804 => [[['_route' => 'api.promotion_discount_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51888 => [[['_route' => 'api.promotion_individual_code.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51965 => [[['_route' => 'api.promotion_order_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52051 => [[['_route' => 'api.promotion_persona_customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52121 => [[['_route' => 'api.promotion_persona_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52205 => [[['_route' => 'api.promotion_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52281 => [[['_route' => 'api.promotion_setgroup.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52353 => [[['_route' => 'api.promotion_setgroup_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52432 => [[['_route' => 'api.promotion_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52515 => [[['_route' => 'api.property_group.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52592 => [[['_route' => 'api.property_group_option.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52671 => [[['_route' => 'api.property_group_option_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52779 => [[['_route' => 'api.order_delivery_position.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52858 => [[['_route' => 'api.order_line_item.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52934 => [[['_route' => 'api.order_line_item_download.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53007 => [[['_route' => 'api.order_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53086 => [[['_route' => 'api.order_transaction.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53164 => [[['_route' => 'api.order_transaction_capture.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53241 => [[['_route' => 'api.order_transaction_capture_refund.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53317 => [[['_route' => 'api.order_transaction_capture_refund_position.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53409 => [[['_route' => 'api.payment_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53488 => [[['_route' => 'api.payment_method_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53563 => [[['_route' => 'api.plugin.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53642 => [[['_route' => 'api.plugin_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53721 => [[['_route' => 'api.product.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53806 => [[['_route' => 'api.product_category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53878 => [[['_route' => 'api.product_category_tree.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53965 => [[['_route' => 'api.product_configurator_setting.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54047 => [[['_route' => 'api.product_cross_selling.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54136 => [[['_route' => 'api.product_cross_selling_assigned_products.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54213 => [[['_route' => 'api.product_cross_selling_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54298 => [[['_route' => 'api.product_custom_field_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54373 => [[['_route' => 'api.product_download.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54445 => [[['_route' => 'api.product_export.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54526 => [[['_route' => 'api.product_feature_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54605 => [[['_route' => 'api.product_feature_set_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54691 => [[['_route' => 'api.product_keyword_dictionary.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54775 => [[['_route' => 'api.product_manufacturer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54854 => [[['_route' => 'api.product_manufacturer_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54925 => [[['_route' => 'api.product_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54998 => [[['_route' => 'api.product_option.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55072 => [[['_route' => 'api.product_price.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55144 => [[['_route' => 'api.product_property.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55217 => [[['_route' => 'api.product_review.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55306 => [[['_route' => 'api.product_search_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55379 => [[['_route' => 'api.product_search_config_field.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55453 => [[['_route' => 'api.product_search_keyword.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55529 => [[['_route' => 'api.product_sorting.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55608 => [[['_route' => 'api.product_sorting_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55683 => [[['_route' => 'api.product_stream.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55760 => [[['_route' => 'api.product_stream_filter.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55833 => [[['_route' => 'api.product_stream_mapping.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55910 => [[['_route' => 'api.product_stream_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55985 => [[['_route' => 'api.product_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56061 => [[['_route' => 'api.product_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56138 => [[['_route' => 'api.product_visibility.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56215 => [[['_route' => 'api.promotion.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56296 => [[['_route' => 'api.promotion_cart_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56373 => [[['_route' => 'api.promotion_discount.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56450 => [[['_route' => 'api.promotion_discount_prices.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56520 => [[['_route' => 'api.promotion_discount_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56604 => [[['_route' => 'api.promotion_individual_code.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56681 => [[['_route' => 'api.promotion_order_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56767 => [[['_route' => 'api.promotion_persona_customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56837 => [[['_route' => 'api.promotion_persona_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56921 => [[['_route' => 'api.promotion_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56997 => [[['_route' => 'api.promotion_setgroup.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57069 => [[['_route' => 'api.promotion_setgroup_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57148 => [[['_route' => 'api.promotion_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57231 => [[['_route' => 'api.property_group.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57305 => [[['_route' => 'api.property_group_option.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57417 => [[['_route' => 'api.order_delivery_position.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57496 => [[['_route' => 'api.order_line_item.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57572 => [[['_route' => 'api.order_line_item_download.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57645 => [[['_route' => 'api.order_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57724 => [[['_route' => 'api.order_transaction.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57802 => [[['_route' => 'api.order_transaction_capture.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57879 => [[['_route' => 'api.order_transaction_capture_refund.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57955 => [[['_route' => 'api.order_transaction_capture_refund_position.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58047 => [[['_route' => 'api.payment_method.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58126 => [[['_route' => 'api.payment_method_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58201 => [[['_route' => 'api.plugin.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58280 => [[['_route' => 'api.plugin_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58359 => [[['_route' => 'api.product.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58444 => [[['_route' => 'api.product_category.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58516 => [[['_route' => 'api.product_category_tree.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58603 => [[['_route' => 'api.product_configurator_setting.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58685 => [[['_route' => 'api.product_cross_selling.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58774 => [[['_route' => 'api.product_cross_selling_assigned_products.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58851 => [[['_route' => 'api.product_cross_selling_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58936 => [[['_route' => 'api.product_custom_field_set.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59011 => [[['_route' => 'api.product_download.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59083 => [[['_route' => 'api.product_export.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59164 => [[['_route' => 'api.product_feature_set.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59243 => [[['_route' => 'api.product_feature_set_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59329 => [[['_route' => 'api.product_keyword_dictionary.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59413 => [[['_route' => 'api.product_manufacturer.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59492 => [[['_route' => 'api.product_manufacturer_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59563 => [[['_route' => 'api.product_media.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59636 => [[['_route' => 'api.product_option.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59710 => [[['_route' => 'api.product_price.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59782 => [[['_route' => 'api.product_property.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59855 => [[['_route' => 'api.product_review.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59944 => [[['_route' => 'api.product_search_config.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60017 => [[['_route' => 'api.product_search_config_field.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60091 => [[['_route' => 'api.product_search_keyword.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60167 => [[['_route' => 'api.product_sorting.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60246 => [[['_route' => 'api.product_sorting_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60321 => [[['_route' => 'api.product_stream.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60398 => [[['_route' => 'api.product_stream_filter.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60471 => [[['_route' => 'api.product_stream_mapping.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60548 => [[['_route' => 'api.product_stream_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60623 => [[['_route' => 'api.product_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60699 => [[['_route' => 'api.product_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60776 => [[['_route' => 'api.product_visibility.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60853 => [[['_route' => 'api.promotion.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60934 => [[['_route' => 'api.promotion_cart_rule.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61011 => [[['_route' => 'api.promotion_discount.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61088 => [[['_route' => 'api.promotion_discount_prices.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61158 => [[['_route' => 'api.promotion_discount_rule.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61242 => [[['_route' => 'api.promotion_individual_code.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61319 => [[['_route' => 'api.promotion_order_rule.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61405 => [[['_route' => 'api.promotion_persona_customer.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61475 => [[['_route' => 'api.promotion_persona_rule.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61559 => [[['_route' => 'api.promotion_sales_channel.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61635 => [[['_route' => 'api.promotion_setgroup.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61707 => [[['_route' => 'api.promotion_setgroup_rule.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61786 => [[['_route' => 'api.promotion_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61869 => [[['_route' => 'api.property_group.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61943 => [[['_route' => 'api.property_group_option.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        62050 => [
            [['_route' => 'api.payment_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.payment_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        62120 => [
            [['_route' => 'api.payment_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        62219 => [
            [['_route' => 'api.payment_method_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.payment_method_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        62289 => [
            [['_route' => 'api.payment_method_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        62382 => [
            [['_route' => 'api.plugin.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.plugin.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        62452 => [
            [['_route' => 'api.plugin.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        62551 => [
            [['_route' => 'api.plugin_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.plugin_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        62621 => [
            [['_route' => 'api.plugin_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        62718 => [
            [['_route' => 'api.product.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        62788 => [
            [['_route' => 'api.product.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        62890 => [
            [['_route' => 'api.product_category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        62960 => [
            [['_route' => 'api.product_category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        63052 => [
            [['_route' => 'api.product_category_tree.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category_tree.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_category_tree.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        63122 => [
            [['_route' => 'api.product_category_tree.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category_tree.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        63230 => [
            [['_route' => 'api.product_configurator_setting.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_configurator_setting.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_configurator_setting.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        63300 => [
            [['_route' => 'api.product_configurator_setting.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_configurator_setting.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        63400 => [
            [['_route' => 'api.product_cross_selling.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        63470 => [
            [['_route' => 'api.product_cross_selling.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        63579 => [
            [['_route' => 'api.product_cross_selling_assigned_products.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_assigned_products.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_assigned_products.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        63649 => [
            [['_route' => 'api.product_cross_selling_assigned_products.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_assigned_products.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        63747 => [
            [['_route' => 'api.product_cross_selling_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        63817 => [
            [['_route' => 'api.product_cross_selling_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        63923 => [
            [['_route' => 'api.product_custom_field_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_custom_field_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_custom_field_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        63993 => [
            [['_route' => 'api.product_custom_field_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_custom_field_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64089 => [
            [['_route' => 'api.product_download.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_download.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_download.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64159 => [
            [['_route' => 'api.product_download.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_download.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64252 => [
            [['_route' => 'api.product_export.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_export.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_export.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64322 => [
            [['_route' => 'api.product_export.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_export.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64421 => [
            [['_route' => 'api.product_feature_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64491 => [
            [['_route' => 'api.product_feature_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64590 => [
            [['_route' => 'api.product_feature_set_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64660 => [
            [['_route' => 'api.product_feature_set_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64767 => [
            [['_route' => 'api.product_keyword_dictionary.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_keyword_dictionary.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_keyword_dictionary.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64837 => [
            [['_route' => 'api.product_keyword_dictionary.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_keyword_dictionary.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64939 => [
            [['_route' => 'api.product_manufacturer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65009 => [
            [['_route' => 'api.product_manufacturer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65108 => [
            [['_route' => 'api.product_manufacturer_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65178 => [
            [['_route' => 'api.product_manufacturer_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65270 => [
            [['_route' => 'api.product_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65340 => [
            [['_route' => 'api.product_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65434 => [
            [['_route' => 'api.product_option.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_option.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_option.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65504 => [
            [['_route' => 'api.product_option.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_option.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65599 => [
            [['_route' => 'api.product_price.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_price.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_price.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65669 => [
            [['_route' => 'api.product_price.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_price.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65762 => [
            [['_route' => 'api.product_property.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_property.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_property.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65832 => [
            [['_route' => 'api.product_property.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_property.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65926 => [
            [['_route' => 'api.product_review.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_review.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_review.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65996 => [
            [['_route' => 'api.product_review.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_review.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66103 => [
            [['_route' => 'api.product_search_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66173 => [
            [['_route' => 'api.product_search_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66266 => [
            [['_route' => 'api.product_search_config_field.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config_field.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config_field.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66336 => [
            [['_route' => 'api.product_search_config_field.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config_field.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66431 => [
            [['_route' => 'api.product_search_keyword.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_keyword.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_search_keyword.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66501 => [
            [['_route' => 'api.product_search_keyword.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_keyword.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66595 => [
            [['_route' => 'api.product_sorting.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66665 => [
            [['_route' => 'api.product_sorting.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66764 => [
            [['_route' => 'api.product_sorting_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66834 => [
            [['_route' => 'api.product_sorting_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66927 => [
            [['_route' => 'api.product_stream.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66997 => [
            [['_route' => 'api.product_stream.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67094 => [
            [['_route' => 'api.product_stream_filter.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_filter.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_filter.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67164 => [
            [['_route' => 'api.product_stream_filter.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_filter.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67258 => [
            [['_route' => 'api.product_stream_mapping.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_mapping.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_mapping.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67328 => [
            [['_route' => 'api.product_stream_mapping.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_mapping.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67426 => [
            [['_route' => 'api.product_stream_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67496 => [
            [['_route' => 'api.product_stream_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67592 => [
            [['_route' => 'api.product_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67662 => [
            [['_route' => 'api.product_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67759 => [
            [['_route' => 'api.product_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67829 => [
            [['_route' => 'api.product_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67927 => [
            [['_route' => 'api.product_visibility.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_visibility.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_visibility.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67997 => [
            [['_route' => 'api.product_visibility.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_visibility.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68092 => [
            [['_route' => 'api.promotion.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68162 => [
            [['_route' => 'api.promotion.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68263 => [
            [['_route' => 'api.promotion_cart_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_cart_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_cart_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68333 => [
            [['_route' => 'api.promotion_cart_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_cart_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68428 => [
            [['_route' => 'api.promotion_discount.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68498 => [
            [['_route' => 'api.promotion_discount.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68595 => [
            [['_route' => 'api.promotion_discount_prices.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_prices.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_prices.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68665 => [
            [['_route' => 'api.promotion_discount_prices.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_prices.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68756 => [
            [['_route' => 'api.promotion_discount_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68826 => [
            [['_route' => 'api.promotion_discount_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68931 => [
            [['_route' => 'api.promotion_individual_code.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_individual_code.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_individual_code.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69001 => [
            [['_route' => 'api.promotion_individual_code.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_individual_code.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69099 => [
            [['_route' => 'api.promotion_order_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_order_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_order_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69169 => [
            [['_route' => 'api.promotion_order_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_order_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69276 => [
            [['_route' => 'api.promotion_persona_customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69346 => [
            [['_route' => 'api.promotion_persona_customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69437 => [
            [['_route' => 'api.promotion_persona_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69507 => [
            [['_route' => 'api.promotion_persona_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69612 => [
            [['_route' => 'api.promotion_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69682 => [
            [['_route' => 'api.promotion_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69776 => [
            [['_route' => 'api.promotion_setgroup.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69846 => [
            [['_route' => 'api.promotion_setgroup.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69938 => [
            [['_route' => 'api.promotion_setgroup_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70008 => [
            [['_route' => 'api.promotion_setgroup_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70108 => [
            [['_route' => 'api.promotion_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70178 => [
            [['_route' => 'api.promotion_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70279 => [
            [['_route' => 'api.property_group.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70349 => [
            [['_route' => 'api.property_group.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70443 => [
            [['_route' => 'api.property_group_option.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70513 => [
            [['_route' => 'api.property_group_option.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70612 => [
            [['_route' => 'api.property_group_option_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70679 => [[['_route' => 'api.property_group_option_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        70813 => [[['_route' => 'api.property_group_option_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        70890 => [[['_route' => 'api.property_group_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        70964 => [[['_route' => 'api.rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71044 => [[['_route' => 'api.rule_condition.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71113 => [[['_route' => 'api.rule_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71204 => [[['_route' => 'api.sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71284 => [[['_route' => 'api.sales_channel_analytics.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71360 => [[['_route' => 'api.sales_channel_country.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71433 => [[['_route' => 'api.sales_channel_currency.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71506 => [[['_route' => 'api.sales_channel_domain.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71580 => [[['_route' => 'api.sales_channel_language.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71661 => [[['_route' => 'api.sales_channel_payment_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71743 => [[['_route' => 'api.sales_channel_shipping_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71823 => [[['_route' => 'api.sales_channel_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71895 => [[['_route' => 'api.sales_channel_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71974 => [[['_route' => 'api.sales_channel_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72054 => [[['_route' => 'api.salutation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72133 => [[['_route' => 'api.salutation_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72218 => [[['_route' => 'api.scheduled_task.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72288 => [[['_route' => 'api.script.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72365 => [[['_route' => 'api.seo_url.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72441 => [[['_route' => 'api.seo_url_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72526 => [[['_route' => 'api.shipping_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72602 => [[['_route' => 'api.shipping_method_price.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72674 => [[['_route' => 'api.shipping_method_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72750 => [[['_route' => 'api.shipping_method_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72828 => [[['_route' => 'api.snippet.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72899 => [[['_route' => 'api.snippet_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72982 => [[['_route' => 'api.state_machine.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73060 => [[['_route' => 'api.state_machine_history.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73134 => [[['_route' => 'api.state_machine_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73213 => [[['_route' => 'api.state_machine_state_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73293 => [[['_route' => 'api.state_machine_transition.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73365 => [[['_route' => 'api.state_machine_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73463 => [[['_route' => 'api.swag_language_pack_language.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73542 => [[['_route' => 'api.system_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73618 => [[['_route' => 'api.tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73688 => [[['_route' => 'api.tax.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73770 => [[['_route' => 'api.tax_provider.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73849 => [[['_route' => 'api.tax_provider_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73923 => [[['_route' => 'api.tax_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73998 => [[['_route' => 'api.tax_rule_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74077 => [[['_route' => 'api.tax_rule_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74155 => [[['_route' => 'api.theme.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74231 => [[['_route' => 'api.theme_child.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74302 => [[['_route' => 'api.theme_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74382 => [[['_route' => 'api.theme_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74459 => [[['_route' => 'api.theme_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74538 => [[['_route' => 'api.unit.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74617 => [[['_route' => 'api.unit_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74690 => [[['_route' => 'api.user.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74772 => [[['_route' => 'api.user_access_key.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74844 => [[['_route' => 'api.user_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74918 => [[['_route' => 'api.user_recovery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74997 => [[['_route' => 'api.version.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75074 => [[['_route' => 'api.version_commit.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75146 => [[['_route' => 'api.version_commit_data.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75224 => [[['_route' => 'api.webhook.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75302 => [[['_route' => 'api.webhook_event_log.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75402 => [[['_route' => 'api.property_group_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75475 => [[['_route' => 'api.rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75555 => [[['_route' => 'api.rule_condition.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75624 => [[['_route' => 'api.rule_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75715 => [[['_route' => 'api.sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75795 => [[['_route' => 'api.sales_channel_analytics.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75871 => [[['_route' => 'api.sales_channel_country.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75944 => [[['_route' => 'api.sales_channel_currency.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76017 => [[['_route' => 'api.sales_channel_domain.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76091 => [[['_route' => 'api.sales_channel_language.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76172 => [[['_route' => 'api.sales_channel_payment_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76254 => [[['_route' => 'api.sales_channel_shipping_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76334 => [[['_route' => 'api.sales_channel_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76406 => [[['_route' => 'api.sales_channel_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76485 => [[['_route' => 'api.sales_channel_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76565 => [[['_route' => 'api.salutation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76644 => [[['_route' => 'api.salutation_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76729 => [[['_route' => 'api.scheduled_task.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76799 => [[['_route' => 'api.script.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76876 => [[['_route' => 'api.seo_url.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76952 => [[['_route' => 'api.seo_url_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77037 => [[['_route' => 'api.shipping_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77113 => [[['_route' => 'api.shipping_method_price.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77185 => [[['_route' => 'api.shipping_method_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77261 => [[['_route' => 'api.shipping_method_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77339 => [[['_route' => 'api.snippet.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77410 => [[['_route' => 'api.snippet_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77493 => [[['_route' => 'api.state_machine.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77571 => [[['_route' => 'api.state_machine_history.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77645 => [[['_route' => 'api.state_machine_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77724 => [[['_route' => 'api.state_machine_state_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77804 => [[['_route' => 'api.state_machine_transition.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77876 => [[['_route' => 'api.state_machine_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77974 => [[['_route' => 'api.swag_language_pack_language.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78053 => [[['_route' => 'api.system_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78129 => [[['_route' => 'api.tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78199 => [[['_route' => 'api.tax.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78281 => [[['_route' => 'api.tax_provider.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78360 => [[['_route' => 'api.tax_provider_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78434 => [[['_route' => 'api.tax_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78509 => [[['_route' => 'api.tax_rule_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78588 => [[['_route' => 'api.tax_rule_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78666 => [[['_route' => 'api.theme.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78742 => [[['_route' => 'api.theme_child.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78813 => [[['_route' => 'api.theme_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78893 => [[['_route' => 'api.theme_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78970 => [[['_route' => 'api.theme_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79049 => [[['_route' => 'api.unit.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79128 => [[['_route' => 'api.unit_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79201 => [[['_route' => 'api.user.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79283 => [[['_route' => 'api.user_access_key.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79355 => [[['_route' => 'api.user_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79429 => [[['_route' => 'api.user_recovery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79508 => [[['_route' => 'api.version.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79585 => [[['_route' => 'api.version_commit.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79657 => [[['_route' => 'api.version_commit_data.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79735 => [[['_route' => 'api.webhook.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79813 => [[['_route' => 'api.webhook_event_log.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79907 => [
            [['_route' => 'api.seo_url.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.seo_url.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        79977 => [
            [['_route' => 'api.seo_url.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        80073 => [
            [['_route' => 'api.seo_url_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.seo_url_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        80143 => [
            [['_route' => 'api.seo_url_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        80248 => [
            [['_route' => 'api.sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        80318 => [
            [['_route' => 'api.sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        80418 => [
            [['_route' => 'api.sales_channel_analytics.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_analytics.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_analytics.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        80488 => [
            [['_route' => 'api.sales_channel_analytics.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_analytics.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        80585 => [
            [['_route' => 'api.sales_channel_country.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_country.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_country.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        80655 => [
            [['_route' => 'api.sales_channel_country.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_country.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        80749 => [
            [['_route' => 'api.sales_channel_currency.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_currency.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_currency.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        80819 => [
            [['_route' => 'api.sales_channel_currency.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_currency.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        80913 => [
            [['_route' => 'api.sales_channel_domain.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_domain.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_domain.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        80983 => [
            [['_route' => 'api.sales_channel_domain.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_domain.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        81078 => [
            [['_route' => 'api.sales_channel_language.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_language.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_language.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        81148 => [
            [['_route' => 'api.sales_channel_language.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_language.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        81250 => [
            [['_route' => 'api.sales_channel_payment_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_payment_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_payment_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        81320 => [
            [['_route' => 'api.sales_channel_payment_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_payment_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        81423 => [
            [['_route' => 'api.sales_channel_shipping_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_shipping_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_shipping_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        81493 => [
            [['_route' => 'api.sales_channel_shipping_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_shipping_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        81594 => [
            [['_route' => 'api.sales_channel_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        81664 => [
            [['_route' => 'api.sales_channel_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        81754 => [
            [['_route' => 'api.sales_channel_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        81824 => [
            [['_route' => 'api.sales_channel_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        81923 => [
            [['_route' => 'api.sales_channel_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        81993 => [
            [['_route' => 'api.sales_channel_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        82091 => [
            [['_route' => 'api.salutation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.salutation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        82161 => [
            [['_route' => 'api.salutation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        82260 => [
            [['_route' => 'api.salutation_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.salutation_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        82330 => [
            [['_route' => 'api.salutation_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        82436 => [
            [['_route' => 'api.scheduled_task.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.scheduled_task.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.scheduled_task.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        82506 => [
            [['_route' => 'api.scheduled_task.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.scheduled_task.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        82597 => [
            [['_route' => 'api.script.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.script.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.script.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        82667 => [
            [['_route' => 'api.script.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.script.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        82770 => [
            [['_route' => 'api.shipping_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        82840 => [
            [['_route' => 'api.shipping_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        82936 => [
            [['_route' => 'api.shipping_method_price.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_price.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_price.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        83006 => [
            [['_route' => 'api.shipping_method_price.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_price.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        83099 => [
            [['_route' => 'api.shipping_method_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        83169 => [
            [['_route' => 'api.shipping_method_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        83266 => [
            [['_route' => 'api.shipping_method_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        83336 => [
            [['_route' => 'api.shipping_method_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        83432 => [
            [['_route' => 'api.snippet.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.snippet.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        83502 => [
            [['_route' => 'api.snippet.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        83593 => [
            [['_route' => 'api.snippet_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.snippet_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        83663 => [
            [['_route' => 'api.snippet_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        83764 => [
            [['_route' => 'api.state_machine.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        83834 => [
            [['_route' => 'api.state_machine.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        83932 => [
            [['_route' => 'api.state_machine_history.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_history.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_history.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        84002 => [
            [['_route' => 'api.state_machine_history.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_history.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        84094 => [
            [['_route' => 'api.state_machine_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        84164 => [
            [['_route' => 'api.state_machine_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        84263 => [
            [['_route' => 'api.state_machine_state_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        84333 => [
            [['_route' => 'api.state_machine_state_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        84434 => [
            [['_route' => 'api.state_machine_transition.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_transition.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_transition.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        84504 => [
            [['_route' => 'api.state_machine_transition.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_transition.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        84597 => [
            [['_route' => 'api.state_machine_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        84667 => [
            [['_route' => 'api.state_machine_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        84786 => [
            [['_route' => 'api.swag_language_pack_language.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_language_pack_language.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_language_pack_language.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        84856 => [
            [['_route' => 'api.swag_language_pack_language.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_language_pack_language.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        84956 => [
            [['_route' => 'api.system_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.system_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.system_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        85026 => [
            [['_route' => 'api.system_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.system_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        85150 => [[['_route' => 'api.property_group_option_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        85227 => [[['_route' => 'api.property_group_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        85301 => [[['_route' => 'api.rule.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        85381 => [[['_route' => 'api.rule_condition.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        85450 => [[['_route' => 'api.rule_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        85541 => [[['_route' => 'api.sales_channel.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        85621 => [[['_route' => 'api.sales_channel_analytics.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        85697 => [[['_route' => 'api.sales_channel_country.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        85770 => [[['_route' => 'api.sales_channel_currency.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        85843 => [[['_route' => 'api.sales_channel_domain.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        85917 => [[['_route' => 'api.sales_channel_language.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        85998 => [[['_route' => 'api.sales_channel_payment_method.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86080 => [[['_route' => 'api.sales_channel_shipping_method.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86160 => [[['_route' => 'api.sales_channel_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86232 => [[['_route' => 'api.sales_channel_type.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86311 => [[['_route' => 'api.sales_channel_type_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86391 => [[['_route' => 'api.salutation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86470 => [[['_route' => 'api.salutation_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86555 => [[['_route' => 'api.scheduled_task.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86625 => [[['_route' => 'api.script.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86702 => [[['_route' => 'api.seo_url.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86778 => [[['_route' => 'api.seo_url_template.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86863 => [[['_route' => 'api.shipping_method.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86939 => [[['_route' => 'api.shipping_method_price.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87011 => [[['_route' => 'api.shipping_method_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87087 => [[['_route' => 'api.shipping_method_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87165 => [[['_route' => 'api.snippet.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87236 => [[['_route' => 'api.snippet_set.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87319 => [[['_route' => 'api.state_machine.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87397 => [[['_route' => 'api.state_machine_history.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87471 => [[['_route' => 'api.state_machine_state.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87550 => [[['_route' => 'api.state_machine_state_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87630 => [[['_route' => 'api.state_machine_transition.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87702 => [[['_route' => 'api.state_machine_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87800 => [[['_route' => 'api.swag_language_pack_language.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87879 => [[['_route' => 'api.system_config.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87955 => [[['_route' => 'api.tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88025 => [[['_route' => 'api.tax.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88107 => [[['_route' => 'api.tax_provider.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88186 => [[['_route' => 'api.tax_provider_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88260 => [[['_route' => 'api.tax_rule.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88335 => [[['_route' => 'api.tax_rule_type.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88414 => [[['_route' => 'api.tax_rule_type_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88492 => [[['_route' => 'api.theme.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88568 => [[['_route' => 'api.theme_child.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88639 => [[['_route' => 'api.theme_media.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88719 => [[['_route' => 'api.theme_sales_channel.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88796 => [[['_route' => 'api.theme_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88875 => [[['_route' => 'api.unit.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88954 => [[['_route' => 'api.unit_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89027 => [[['_route' => 'api.user.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'user', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89109 => [[['_route' => 'api.user_access_key.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89181 => [[['_route' => 'api.user_config.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89255 => [[['_route' => 'api.user_recovery.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89334 => [[['_route' => 'api.version.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89411 => [[['_route' => 'api.version_commit.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89483 => [[['_route' => 'api.version_commit_data.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89561 => [[['_route' => 'api.webhook.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89639 => [[['_route' => 'api.webhook_event_log.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89662 => [[['_route' => 'api.acl_role.create', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['acl_role:create'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::upsertRole'], [], ['POST' => 0], null, false, false, null]],
        89684 => [
            [['_route' => 'api.acl_role.update', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['acl_role:update'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::updateRole'], ['roleId'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.acl_role.delete', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['acl_role:delete'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteRole'], ['roleId'], ['DELETE' => 0], null, false, true, null],
        ],
        89792 => [[['_route' => 'api.property_group_option_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89888 => [
            [['_route' => 'api.property_group_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        89958 => [
            [['_route' => 'api.property_group_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        90050 => [
            [['_route' => 'api.rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        90120 => [
            [['_route' => 'api.rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        90220 => [
            [['_route' => 'api.rule_condition.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule_condition.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.rule_condition.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        90290 => [
            [['_route' => 'api.rule_condition.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule_condition.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        90380 => [
            [['_route' => 'api.rule_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.rule_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        90450 => [
            [['_route' => 'api.rule_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        90548 => [
            [['_route' => 'api.tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        90618 => [
            [['_route' => 'api.tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        90706 => [
            [['_route' => 'api.tax.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        90776 => [
            [['_route' => 'api.tax.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        90875 => [
            [['_route' => 'api.tax_provider.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        90945 => [
            [['_route' => 'api.tax_provider.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        91044 => [
            [['_route' => 'api.tax_provider_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        91114 => [
            [['_route' => 'api.tax_provider_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        91206 => [
            [['_route' => 'api.tax_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        91276 => [
            [['_route' => 'api.tax_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        91368 => [
            [['_route' => 'api.tax_rule_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        91438 => [
            [['_route' => 'api.tax_rule_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        91537 => [
            [['_route' => 'api.tax_rule_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        91607 => [
            [['_route' => 'api.tax_rule_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        91703 => [
            [['_route' => 'api.theme.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        91773 => [
            [['_route' => 'api.theme.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        91869 => [
            [['_route' => 'api.theme_child.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_child.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_child.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        91939 => [
            [['_route' => 'api.theme_child.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_child.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        92031 => [
            [['_route' => 'api.theme_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        92101 => [
            [['_route' => 'api.theme_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        92202 => [
            [['_route' => 'api.theme_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        92272 => [
            [['_route' => 'api.theme_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        92370 => [
            [['_route' => 'api.theme_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        92440 => [
            [['_route' => 'api.theme_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        92537 => [
            [['_route' => 'api.unit.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.unit.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        92607 => [
            [['_route' => 'api.unit.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        92706 => [
            [['_route' => 'api.unit_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.unit_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        92776 => [
            [['_route' => 'api.unit_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        92864 => [[['_route' => 'api.user.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        92930 => [[['_route' => 'api.user.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        93031 => [
            [['_route' => 'api.user_access_key.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_access_key.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.user_access_key.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        93101 => [
            [['_route' => 'api.user_access_key.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_access_key.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        93194 => [
            [['_route' => 'api.user_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.user_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        93264 => [
            [['_route' => 'api.user_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        93359 => [
            [['_route' => 'api.user_recovery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_recovery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.user_recovery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        93429 => [
            [['_route' => 'api.user_recovery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_recovery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        93454 => [[['_route' => 'api.user.delete', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['user:delete'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUser'], ['userId'], ['DELETE' => 0], null, false, true, null]],
        93489 => [[['_route' => 'api.user_access_keys.delete', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['user_access_key:delete'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUserAccessKey'], ['userId', 'id'], ['DELETE' => 0], null, false, true, null]],
        93516 => [[['_route' => 'api.user_role.delete', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['acl_user_role:delete'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUserRole'], ['userId', 'roleId'], ['DELETE' => 0], null, false, true, null]],
        93527 => [[['_route' => 'api.user.update', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['user:update'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::updateUser'], ['userId'], ['PATCH' => 0], null, false, true, null]],
        93538 => [[['_route' => 'api.user.create', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['user:create'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::upsertUser'], [], ['POST' => 0], null, false, false, null]],
        93632 => [
            [['_route' => 'api.version.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        93702 => [
            [['_route' => 'api.version.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        93796 => [
            [['_route' => 'api.version_commit.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version_commit.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        93866 => [
            [['_route' => 'api.version_commit.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        93958 => [
            [['_route' => 'api.version_commit_data.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit_data.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version_commit_data.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        94028 => [
            [['_route' => 'api.version_commit_data.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit_data.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        94124 => [
            [['_route' => 'api.webhook.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.webhook.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.webhook.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        94194 => [
            [['_route' => 'api.webhook.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.webhook.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        94292 => [
            [['_route' => 'api.webhook_event_log.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.webhook_event_log.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.webhook_event_log.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        94362 => [
            [['_route' => 'api.webhook_event_log.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.webhook_event_log.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        94389 => [[['_route' => 'api.integration.create', '_routeScope' => ['api'], '_acl' => ['integration:create'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\IntegrationController::upsertIntegration'], [], ['POST' => 0], null, false, false, null]],
        94408 => [
            [['_route' => 'api.integration.update', '_routeScope' => ['api'], '_acl' => ['integration:update'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\IntegrationController::updateIntegration'], ['integrationId'], ['PATCH' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
