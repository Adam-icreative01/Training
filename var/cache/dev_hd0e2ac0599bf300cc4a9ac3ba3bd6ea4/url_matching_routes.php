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
                                                    .'|\\-registration\\-sales\\-channels/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:16840)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|rrency(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:16936)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:17006)'
                                        .')'
                                        .'|\\-(?'
                                            .'|country\\-rounding(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:17114)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:17184)'
                                                .')'
                                            .')'
                                            .'|translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:17282)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:17352)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|e\\-(?'
                                    .'|([^/]++)/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:17447)'
                                    .'|([^/]+)((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:17520)'
                                    .')'
                                    .'|([^/]++)/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:17608)'
                                    .')'
                                .')'
                                .'|ategory(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:17702)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:17772)'
                                    .')'
                                    .'|\\-t(?'
                                        .'|ag(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:17866)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:17936)'
                                            .')'
                                        .')'
                                        .'|ranslation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:18033)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:18103)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|ms\\-(?'
                                    .'|block(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:18204)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:18274)'
                                        .')'
                                    .')'
                                    .'|page(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:18365)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:18435)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:18534)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:18604)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|ection(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:18702)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:18772)'
                                            .')'
                                        .')'
                                        .'|lot(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:18862)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:18932)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:19031)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:19101)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|ountry(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:19197)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:19267)'
                                    .')'
                                    .'|\\-(?'
                                        .'|state(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:19363)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:19433)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:19532)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:19602)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:19701)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:19771)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|basic\\-example(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:19875)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:19945)'
                                .')'
                            .')'
                        .')'
                        .'|p\\-system/([^/]++)/generate\\-token(*:19992)'
                    .')'
                    .'|dmin/([^/]++)/index\\.html(*:20028)'
                    .'|ccount/(?'
                        .'|order/(?'
                            .'|([^/]++)(*:20065)'
                            .'|edit/([^/]++)(*:20088)'
                            .'|payment/([^/]++)(*:20114)'
                            .'|update/([^/]++)(*:20139)'
                            .'|do(?'
                                .'|cument/([^/]++)/([^/]++)(?'
                                    .'|(*:20181)'
                                    .'|/([^/]++)(*:20200)'
                                .')'
                                .'|wnload/([^/]++)/([^/]++)(*:20235)'
                            .')'
                        .')'
                        .'|address/(?'
                            .'|([^/]++)(*:20266)'
                            .'|default\\-([^/]++)/([^/]++)(*:20302)'
                            .'|switch(*:20318)'
                            .'|create(*:20334)'
                            .'|([^/]++)(*:20352)'
                            .'|delete/([^/]++)(*:20377)'
                        .')'
                    .')'
                .')'
                .'|/s(?'
                    .'|tore(?'
                        .'|\\-api/(?'
                            .'|a(?'
                                .'|pp\\-system/([^/]++)/generate\\-token(*:20450)'
                                .'|ccount/(?'
                                    .'|change\\-payment\\-method/([^/]++)(*:20502)'
                                    .'|address/(?'
                                        .'|([^/]++)(*:20531)'
                                        .'|default\\-(?'
                                            .'|shipping/([^/]++)(*:20570)'
                                            .'|billing/([^/]++)(*:20596)'
                                        .')'
                                        .'|([^/]++)(*:20615)'
                                    .')'
                                .')'
                            .')'
                            .'|s(?'
                                .'|cript/(.+)(*:20642)'
                                .'|itemap/(.+\\.xml\\.gz)(*:20672)'
                            .')'
                            .'|c(?'
                                .'|ountry\\-state/([^/]++)(*:20709)'
                                .'|ategory/([^/]++)(*:20735)'
                                .'|ms/([^/]++)(*:20756)'
                                .'|ustomer(?'
                                    .'|/wishlist/(?'
                                        .'|add/([^/]++)(*:20801)'
                                        .'|delete/([^/]++)(*:20826)'
                                    .')'
                                    .'|\\-group\\-registration/config/([^/]++)(*:20874)'
                                .')'
                            .')'
                            .'|product(?'
                                .'|\\-(?'
                                    .'|export/([^/]++)/([^/]++)(*:20925)'
                                    .'|listing/([^/]++)(*:20951)'
                                .')'
                                .'|/([^/]++)(?'
                                    .'|/(?'
                                        .'|cross\\-selling(*:20992)'
                                        .'|find\\-variant(*:21015)'
                                        .'|review(?'
                                            .'|s(*:21035)'
                                            .'|(*:21045)'
                                        .')'
                                    .')'
                                    .'|(*:21057)'
                                .')'
                            .')'
                            .'|breadcrumb/([0-9a-f]{32})(*:21094)'
                            .'|navigation/([^/]++)/([^/]++)(*:21132)'
                            .'|landing\\-page/([^/]++)(*:21164)'
                            .'|order/download/([^/]++)/([^/]++)(*:21206)'
                            .'|document/download/([^/]++)(?:/([^/]++))?(*:21256)'
                        .')'
                        .'|front/script/(.+)(*:21284)'
                    .')'
                    .'|itemap/(.+\\.xml\\.gz)(*:21315)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:21354)'
                .'|/build/(.+)(*:21375)'
                .'|/wi(?'
                    .'|dgets/(?'
                        .'|account/(?'
                            .'|order/detail/([^/]++)(*:21432)'
                            .'|address\\-manager(?:/([^/]++))?(*:21472)'
                        .')'
                        .'|cms(?'
                            .'|(?:/([^/]++))?(*:21503)'
                            .'|/(?'
                                .'|navigation(?'
                                    .'|(?:/([^/]++))?(*:21544)'
                                    .'|/([^/]++)/filter(*:21570)'
                                .')'
                                .'|buybox/([^/]++)/switch(*:21603)'
                            .')'
                        .')'
                    .')'
                    .'|shlist/(?'
                        .'|product/delete/([^/]++)(*:21649)'
                        .'|add(?'
                            .'|/([^/]++)(*:21674)'
                            .'|\\-after\\-login/([^/]++)(*:21707)'
                        .')'
                        .'|remove/([^/]++)(*:21733)'
                    .')'
                .')'
                .'|/c(?'
                    .'|heckout/line\\-item/(?'
                        .'|delete/([^/]++)(*:21787)'
                        .'|change\\-quantity/([^/]++)(*:21822)'
                    .')'
                    .'|ustomer\\-group\\-registration/([^/]++)(*:21870)'
                .')'
                .'|/p(?'
                    .'|age/cms/([^/]++)(*:21902)'
                    .'|roduct/([^/]++)/r(?'
                        .'|ating(*:21937)'
                        .'|eviews(*:21953)'
                    .')'
                .')'
                .'|/landingPage/([^/]++)(*:21986)'
                .'|/maintenance/singlepage/([^/]++)(*:22028)'
                .'|/navigation/([^/]++)(*:22058)'
                .'|/detail/([^/]++)(?'
                    .'|(*:22087)'
                    .'|/switch(*:22104)'
                .')'
                .'|/quickview/([^/]++)(*:22134)'
            .')/?$}sDu',
        22134 => '{^(?'
                .'|/api/(?'
                    .'|customer\\-(?'
                        .'|group\\-(?'
                            .'|registration\\-sales\\-channels((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:22260)'
                            .')'
                            .'|translation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:22357)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:22427)'
                                .')'
                            .')'
                        .')'
                        .'|recovery(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:22523)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:22593)'
                            .')'
                        .')'
                        .'|tag(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:22683)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:22753)'
                            .')'
                        .')'
                        .'|wishlist(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:22848)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:22918)'
                            .')'
                            .'|\\-product(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:23013)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:23083)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|search(?'
                        .'|/(?'
                            .'|customer\\-(?'
                                .'|group\\-(?'
                                    .'|registration\\-sales\\-channels((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23218)'
                                    .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23295)'
                                .')'
                                .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23370)'
                                .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23439)'
                                .'|wishlist(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23516)'
                                    .'|\\-product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23591)'
                                .')'
                            .')'
                            .'|d(?'
                                .'|elivery\\-time(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23679)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23758)'
                                .')'
                                .'|ocument(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23835)'
                                    .'|\\-(?'
                                        .'|base\\-config(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:23921)'
                                            .'|\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24003)'
                                        .')'
                                        .'|type(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24077)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24156)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|flow(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24233)'
                                .'|\\-(?'
                                    .'|sequence((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24312)'
                                    .'|template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24386)'
                                .')'
                            .')'
                            .'|i(?'
                                .'|mport\\-export\\-(?'
                                    .'|file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24480)'
                                    .'|log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24549)'
                                    .'|profile(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24625)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24704)'
                                    .')'
                                .')'
                                .'|ntegration(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24785)'
                                    .'|\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24857)'
                                .')'
                            .')'
                            .'|l(?'
                                .'|an(?'
                                    .'|ding\\-page(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:24947)'
                                        .'|\\-(?'
                                            .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25032)'
                                            .'|t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25104)'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25180)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|guage((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25254)'
                                .')'
                                .'|o(?'
                                    .'|cale(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25332)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25411)'
                                    .')'
                                    .'|g\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25486)'
                                .')'
                            .')'
                            .'|m(?'
                                .'|ai(?'
                                    .'|l\\-(?'
                                        .'|header\\-footer(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25586)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25665)'
                                        .')'
                                        .'|template(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25743)'
                                            .'|\\-(?'
                                                .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25819)'
                                                .'|t(?'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25899)'
                                                    .'|ype(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:25971)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26050)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|n\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26132)'
                                .')'
                                .'|edia(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26206)'
                                    .'|\\-(?'
                                        .'|default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26292)'
                                        .'|folder(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26367)'
                                            .'|\\-configuration(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26451)'
                                                .'|\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26541)'
                                            .')'
                                        .')'
                                        .'|t(?'
                                            .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26615)'
                                            .'|humbnail(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26692)'
                                                .'|\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26764)'
                                            .')'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26841)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|n(?'
                                .'|ewsletter\\-recipient(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:26938)'
                                    .'|\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27009)'
                                .')'
                                .'|otification((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27087)'
                                .'|umber\\-range(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27168)'
                                    .'|\\-(?'
                                        .'|s(?'
                                            .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27256)'
                                            .'|tate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27326)'
                                        .')'
                                        .'|t(?'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27407)'
                                            .'|ype(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27479)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27558)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|order(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27637)'
                                .'|\\-(?'
                                    .'|address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27715)'
                                    .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27789)'
                                    .'|delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27863)'
                                .')'
                            .')'
                        .')'
                        .'|\\-ids/(?'
                            .'|customer\\-(?'
                                .'|group\\-(?'
                                    .'|registration\\-sales\\-channels((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:27993)'
                                    .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28070)'
                                .')'
                                .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28145)'
                                .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28214)'
                                .'|wishlist(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28291)'
                                    .'|\\-product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28366)'
                                .')'
                            .')'
                            .'|d(?'
                                .'|elivery\\-time(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28454)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28533)'
                                .')'
                                .'|ocument(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28610)'
                                    .'|\\-(?'
                                        .'|base\\-config(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28696)'
                                            .'|\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28778)'
                                        .')'
                                        .'|type(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28852)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:28931)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|flow(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29008)'
                                .'|\\-(?'
                                    .'|sequence((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29087)'
                                    .'|template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29161)'
                                .')'
                            .')'
                            .'|i(?'
                                .'|mport\\-export\\-(?'
                                    .'|file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29255)'
                                    .'|log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29324)'
                                    .'|profile(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29400)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29479)'
                                    .')'
                                .')'
                                .'|ntegration(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29560)'
                                    .'|\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29632)'
                                .')'
                            .')'
                            .'|l(?'
                                .'|an(?'
                                    .'|ding\\-page(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29722)'
                                        .'|\\-(?'
                                            .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29807)'
                                            .'|t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29879)'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:29955)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|guage((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30029)'
                                .')'
                                .'|o(?'
                                    .'|cale(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30107)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30186)'
                                    .')'
                                    .'|g\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30261)'
                                .')'
                            .')'
                            .'|m(?'
                                .'|ai(?'
                                    .'|l\\-(?'
                                        .'|header\\-footer(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30361)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30440)'
                                        .')'
                                        .'|template(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30518)'
                                            .'|\\-(?'
                                                .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30594)'
                                                .'|t(?'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30674)'
                                                    .'|ype(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30746)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30825)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|n\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30907)'
                                .')'
                                .'|edia(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:30981)'
                                    .'|\\-(?'
                                        .'|default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31067)'
                                        .'|folder(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31142)'
                                            .'|\\-configuration(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31226)'
                                                .'|\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31316)'
                                            .')'
                                        .')'
                                        .'|t(?'
                                            .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31390)'
                                            .'|humbnail(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31467)'
                                                .'|\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31539)'
                                            .')'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31616)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|n(?'
                                .'|ewsletter\\-recipient(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31713)'
                                    .'|\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31784)'
                                .')'
                                .'|otification((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31862)'
                                .'|umber\\-range(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:31943)'
                                    .'|\\-(?'
                                        .'|s(?'
                                            .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32031)'
                                            .'|tate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32101)'
                                        .')'
                                        .'|t(?'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32182)'
                                            .'|ype(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32254)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32333)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|order(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32412)'
                                .'|\\-(?'
                                    .'|address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32490)'
                                    .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32564)'
                                    .'|delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32638)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|aggregate/(?'
                        .'|customer\\-(?'
                            .'|group\\-(?'
                                .'|registration\\-sales\\-channels((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32773)'
                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32850)'
                            .')'
                            .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32925)'
                            .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:32994)'
                            .'|wishlist(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33071)'
                                .'|\\-product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33146)'
                            .')'
                        .')'
                        .'|d(?'
                            .'|elivery\\-time(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33234)'
                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33313)'
                            .')'
                            .'|ocument(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33390)'
                                .'|\\-(?'
                                    .'|base\\-config(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33476)'
                                        .'|\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33558)'
                                    .')'
                                    .'|type(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33632)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33711)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|flow(?'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33788)'
                            .'|\\-(?'
                                .'|sequence((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33867)'
                                .'|template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:33941)'
                            .')'
                        .')'
                        .'|i(?'
                            .'|mport\\-export\\-(?'
                                .'|file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34035)'
                                .'|log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34104)'
                                .'|profile(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34180)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34259)'
                                .')'
                            .')'
                            .'|ntegration(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34340)'
                                .'|\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34412)'
                            .')'
                        .')'
                        .'|l(?'
                            .'|an(?'
                                .'|ding\\-page(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34502)'
                                    .'|\\-(?'
                                        .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34587)'
                                        .'|t(?'
                                            .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34659)'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34735)'
                                        .')'
                                    .')'
                                .')'
                                .'|guage((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34809)'
                            .')'
                            .'|o(?'
                                .'|cale(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34887)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:34966)'
                                .')'
                                .'|g\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35041)'
                            .')'
                        .')'
                        .'|m(?'
                            .'|ai(?'
                                .'|l\\-(?'
                                    .'|header\\-footer(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35141)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35220)'
                                    .')'
                                    .'|template(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35298)'
                                        .'|\\-(?'
                                            .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35374)'
                                            .'|t(?'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35454)'
                                                .'|ype(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35526)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35605)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|n\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35687)'
                            .')'
                            .'|edia(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35761)'
                                .'|\\-(?'
                                    .'|default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35847)'
                                    .'|folder(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:35922)'
                                        .'|\\-configuration(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36006)'
                                            .'|\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36096)'
                                        .')'
                                    .')'
                                    .'|t(?'
                                        .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36170)'
                                        .'|humbnail(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36247)'
                                            .'|\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36319)'
                                        .')'
                                        .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36396)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|n(?'
                            .'|ewsletter\\-recipient(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36493)'
                                .'|\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36564)'
                            .')'
                            .'|otification((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36642)'
                            .'|umber\\-range(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36723)'
                                .'|\\-(?'
                                    .'|s(?'
                                        .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36811)'
                                        .'|tate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36881)'
                                    .')'
                                    .'|t(?'
                                        .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:36962)'
                                        .'|ype(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37034)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37113)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|order(?'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37192)'
                            .'|\\-(?'
                                .'|address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37270)'
                                .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37344)'
                                .'|delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:37418)'
                            .')'
                        .')'
                    .')'
                    .'|d(?'
                        .'|elivery\\-time(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:37523)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:37593)'
                            .')'
                            .'|\\-translation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:37692)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:37762)'
                                .')'
                            .')'
                        .')'
                        .'|ocument(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:37857)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:37927)'
                            .')'
                            .'|\\-(?'
                                .'|base\\-config(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:38030)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:38100)'
                                    .')'
                                    .'|\\-sales\\-channel(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:38202)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:38272)'
                                        .')'
                                    .')'
                                .')'
                                .'|type(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:38364)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:38434)'
                                    .')'
                                    .'|\\-translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:38533)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:38603)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|flow(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:38698)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                            .'|(*:38768)'
                        .')'
                        .'|\\-(?'
                            .'|sequence(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:38867)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:38937)'
                                .')'
                            .')'
                            .'|template(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:39032)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:39102)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|i(?'
                        .'|mport\\-export\\-(?'
                            .'|file(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:39217)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:39287)'
                                .')'
                            .')'
                            .'|log(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:39377)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:39447)'
                                .')'
                            .')'
                            .'|profile(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:39541)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:39611)'
                                .')'
                                .'|\\-translation(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:39710)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:39780)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|ntegration(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:39879)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:39946)'
                            .'|\\-role(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:40037)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:40107)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|l(?'
                        .'|an(?'
                            .'|ding\\-page(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:40215)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:40285)'
                                .')'
                                .'|\\-(?'
                                    .'|sales\\-channel(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:40390)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:40460)'
                                        .')'
                                    .')'
                                    .'|t(?'
                                        .'|ag(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:40553)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:40623)'
                                            .')'
                                        .')'
                                        .'|ranslation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:40720)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:40790)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|guage(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:40885)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:40955)'
                                .')'
                            .')'
                        .')'
                        .'|o(?'
                            .'|cale(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:41051)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:41121)'
                                .')'
                                .'|\\-translation(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:41220)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:41290)'
                                    .')'
                                .')'
                            .')'
                            .'|g\\-entry(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:41386)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:41456)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|m(?'
                        .'|ai(?'
                            .'|l\\-(?'
                                .'|header\\-footer(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:41574)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:41644)'
                                    .')'
                                    .'|\\-translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:41743)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:41813)'
                                        .')'
                                    .')'
                                .')'
                                .'|template(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:41909)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:41979)'
                                    .')'
                                    .'|\\-(?'
                                        .'|media(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:42075)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:42145)'
                                            .')'
                                        .')'
                                        .'|t(?'
                                            .'|ranslation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:42246)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:42316)'
                                                .')'
                                            .')'
                                            .'|ype(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:42406)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:42476)'
                                                .')'
                                                .'|\\-translation(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:42575)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:42645)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|n\\-category(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:42748)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:42818)'
                                .')'
                            .')'
                        .')'
                        .'|edia(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:42910)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:42980)'
                            .')'
                            .'|\\-(?'
                                .'|default\\-folder(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:43086)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:43156)'
                                    .')'
                                .')'
                                .'|folder(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:43249)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:43319)'
                                    .')'
                                    .'|\\-configuration(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:43420)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:43490)'
                                        .')'
                                        .'|\\-media\\-thumbnail\\-size(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:43600)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:43670)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|t(?'
                                    .'|ag(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:43765)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:43835)'
                                        .')'
                                    .')'
                                    .'|humbnail(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:43930)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:44000)'
                                        .')'
                                        .'|\\-size(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:44092)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:44162)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|ranslation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:44260)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:44330)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|n(?'
                        .'|ewsletter\\-recipient(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:44445)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:44515)'
                            .')'
                            .'|\\-tag(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:44606)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:44676)'
                                .')'
                            .')'
                        .')'
                        .'|otification(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:44775)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:44845)'
                            .')'
                        .')'
                        .'|umber\\-range(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:44944)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:45014)'
                            .')'
                            .'|\\-(?'
                                .'|s(?'
                                    .'|ales\\-channel(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:45122)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:45192)'
                                        .')'
                                    .')'
                                    .'|tate(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:45283)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:45353)'
                                        .')'
                                    .')'
                                .')'
                                .'|t(?'
                                    .'|ranslation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:45455)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:45525)'
                                        .')'
                                    .')'
                                    .'|ype(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:45615)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:45685)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:45784)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:45854)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|order(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:45951)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                            .'|(*:46021)'
                        .')'
                        .'|\\-(?'
                            .'|address(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:46119)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:46189)'
                                .')'
                            .')'
                            .'|customer(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:46284)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:46354)'
                                .')'
                            .')'
                            .'|delivery(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:46449)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:46519)'
                                .')'
                                .'|\\-position(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:46615)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:46682)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
        46682 => '{^(?'
                .'|/api/(?'
                    .'|search(?'
                        .'|/(?'
                            .'|order\\-(?'
                                .'|delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:46794)'
                                .'|line\\-item(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:46873)'
                                    .'|\\-download((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:46949)'
                                .')'
                                .'|t(?'
                                    .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:47022)'
                                    .'|ransaction(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:47101)'
                                        .'|\\-capture(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:47179)'
                                            .'|\\-refund(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:47256)'
                                                .'|\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:47332)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|p(?'
                                .'|ayment\\-method(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:47424)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:47503)'
                                .')'
                                .'|lugin(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:47578)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:47657)'
                                .')'
                                .'|ro(?'
                                    .'|duct(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:47736)'
                                        .'|\\-(?'
                                            .'|c(?'
                                                .'|ategory(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:47821)'
                                                    .'|\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:47893)'
                                                .')'
                                                .'|onfigurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:47980)'
                                                .'|ross\\-selling(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48062)'
                                                    .'|\\-(?'
                                                        .'|assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48151)'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48228)'
                                                    .')'
                                                .')'
                                                .'|ustom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48313)'
                                            .')'
                                            .'|download((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48388)'
                                            .'|export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48460)'
                                            .'|feature\\-set(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48541)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48620)'
                                            .')'
                                            .'|keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48706)'
                                            .'|m(?'
                                                .'|anufacturer(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48790)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48869)'
                                                .')'
                                                .'|edia((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:48940)'
                                            .')'
                                            .'|option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49013)'
                                            .'|pr(?'
                                                .'|ice((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49087)'
                                                .'|operty((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49159)'
                                            .')'
                                            .'|review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49232)'
                                            .'|s(?'
                                                .'|earch\\-(?'
                                                    .'|config(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49321)'
                                                        .'|\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49394)'
                                                    .')'
                                                    .'|keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49468)'
                                                .')'
                                                .'|orting(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49544)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49623)'
                                                .')'
                                                .'|tream(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49698)'
                                                    .'|\\-(?'
                                                        .'|filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49775)'
                                                        .'|mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49848)'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:49925)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50000)'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50076)'
                                            .')'
                                            .'|visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50153)'
                                        .')'
                                    .')'
                                    .'|motion(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50230)'
                                        .'|\\-(?'
                                            .'|cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50311)'
                                            .'|discount(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50388)'
                                                .'|\\-(?'
                                                    .'|prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50465)'
                                                    .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50535)'
                                                .')'
                                            .')'
                                            .'|individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50619)'
                                            .'|order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50696)'
                                            .'|persona\\-(?'
                                                .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50782)'
                                                .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50852)'
                                            .')'
                                            .'|s(?'
                                                .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:50936)'
                                                .'|etgroup(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51012)'
                                                    .'|\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51084)'
                                                .')'
                                            .')'
                                            .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51163)'
                                        .')'
                                    .')'
                                    .'|perty\\-group(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51246)'
                                        .'|\\-option(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51323)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51402)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|\\-ids/(?'
                            .'|order\\-(?'
                                .'|delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51510)'
                                .'|line\\-item(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51589)'
                                    .'|\\-download((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51665)'
                                .')'
                                .'|t(?'
                                    .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51738)'
                                    .'|ransaction(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51817)'
                                        .'|\\-capture(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51895)'
                                            .'|\\-refund(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:51972)'
                                                .'|\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52048)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|p(?'
                                .'|ayment\\-method(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52140)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52219)'
                                .')'
                                .'|lugin(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52294)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52373)'
                                .')'
                                .'|ro(?'
                                    .'|duct(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52452)'
                                        .'|\\-(?'
                                            .'|c(?'
                                                .'|ategory(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52537)'
                                                    .'|\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52609)'
                                                .')'
                                                .'|onfigurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52696)'
                                                .'|ross\\-selling(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52778)'
                                                    .'|\\-(?'
                                                        .'|assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52867)'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:52944)'
                                                    .')'
                                                .')'
                                                .'|ustom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53029)'
                                            .')'
                                            .'|download((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53104)'
                                            .'|export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53176)'
                                            .'|feature\\-set(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53257)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53336)'
                                            .')'
                                            .'|keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53422)'
                                            .'|m(?'
                                                .'|anufacturer(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53506)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53585)'
                                                .')'
                                                .'|edia((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53656)'
                                            .')'
                                            .'|option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53729)'
                                            .'|pr(?'
                                                .'|ice((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53803)'
                                                .'|operty((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53875)'
                                            .')'
                                            .'|review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:53948)'
                                            .'|s(?'
                                                .'|earch\\-(?'
                                                    .'|config(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54037)'
                                                        .'|\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54110)'
                                                    .')'
                                                    .'|keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54184)'
                                                .')'
                                                .'|orting(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54260)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54339)'
                                                .')'
                                                .'|tream(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54414)'
                                                    .'|\\-(?'
                                                        .'|filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54491)'
                                                        .'|mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54564)'
                                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54641)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54716)'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54792)'
                                            .')'
                                            .'|visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54869)'
                                        .')'
                                    .')'
                                    .'|motion(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:54946)'
                                        .'|\\-(?'
                                            .'|cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55027)'
                                            .'|discount(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55104)'
                                                .'|\\-(?'
                                                    .'|prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55181)'
                                                    .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55251)'
                                                .')'
                                            .')'
                                            .'|individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55335)'
                                            .'|order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55412)'
                                            .'|persona\\-(?'
                                                .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55498)'
                                                .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55568)'
                                            .')'
                                            .'|s(?'
                                                .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55652)'
                                                .'|etgroup(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55728)'
                                                    .'|\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55800)'
                                                .')'
                                            .')'
                                            .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55879)'
                                        .')'
                                    .')'
                                    .'|perty\\-group(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:55962)'
                                        .'|\\-option(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56039)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56118)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|aggregate/(?'
                        .'|order\\-(?'
                            .'|delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56231)'
                            .'|line\\-item(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56310)'
                                .'|\\-download((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56386)'
                            .')'
                            .'|t(?'
                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56459)'
                                .'|ransaction(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56538)'
                                    .'|\\-capture(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56616)'
                                        .'|\\-refund(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56693)'
                                            .'|\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56769)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|p(?'
                            .'|ayment\\-method(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56861)'
                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:56940)'
                            .')'
                            .'|lugin(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57015)'
                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57094)'
                            .')'
                            .'|ro(?'
                                .'|duct(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57173)'
                                    .'|\\-(?'
                                        .'|c(?'
                                            .'|ategory(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57258)'
                                                .'|\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57330)'
                                            .')'
                                            .'|onfigurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57417)'
                                            .'|ross\\-selling(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57499)'
                                                .'|\\-(?'
                                                    .'|assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57588)'
                                                    .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57665)'
                                                .')'
                                            .')'
                                            .'|ustom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57750)'
                                        .')'
                                        .'|download((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57825)'
                                        .'|export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57897)'
                                        .'|feature\\-set(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:57978)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58057)'
                                        .')'
                                        .'|keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58143)'
                                        .'|m(?'
                                            .'|anufacturer(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58227)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58306)'
                                            .')'
                                            .'|edia((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58377)'
                                        .')'
                                        .'|option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58450)'
                                        .'|pr(?'
                                            .'|ice((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58524)'
                                            .'|operty((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58596)'
                                        .')'
                                        .'|review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58669)'
                                        .'|s(?'
                                            .'|earch\\-(?'
                                                .'|config(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58758)'
                                                    .'|\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58831)'
                                                .')'
                                                .'|keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58905)'
                                            .')'
                                            .'|orting(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:58981)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59060)'
                                            .')'
                                            .'|tream(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59135)'
                                                .'|\\-(?'
                                                    .'|filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59212)'
                                                    .'|mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59285)'
                                                    .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59362)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|t(?'
                                            .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59437)'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59513)'
                                        .')'
                                        .'|visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59590)'
                                    .')'
                                .')'
                                .'|motion(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59667)'
                                    .'|\\-(?'
                                        .'|cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59748)'
                                        .'|discount(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59825)'
                                            .'|\\-(?'
                                                .'|prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59902)'
                                                .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:59972)'
                                            .')'
                                        .')'
                                        .'|individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60056)'
                                        .'|order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60133)'
                                        .'|persona\\-(?'
                                            .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60219)'
                                            .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60289)'
                                        .')'
                                        .'|s(?'
                                            .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60373)'
                                            .'|etgroup(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60449)'
                                                .'|\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60521)'
                                            .')'
                                        .')'
                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60600)'
                                    .')'
                                .')'
                                .'|perty\\-group(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60683)'
                                    .'|\\-option(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60760)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60839)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|order\\-(?'
                        .'|delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:60938)'
                        .'|line\\-item(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:61033)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:61103)'
                            .')'
                            .'|\\-download(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:61199)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:61269)'
                                .')'
                            .')'
                        .')'
                        .'|t(?'
                            .'|ag(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:61363)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:61433)'
                                .')'
                            .')'
                            .'|ransaction(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:61530)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:61600)'
                                .')'
                                .'|\\-capture(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:61695)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:61765)'
                                    .')'
                                    .'|\\-refund(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:61859)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:61929)'
                                        .')'
                                        .'|\\-position(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:62025)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:62095)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|p(?'
                        .'|ayment\\-method(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:62205)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:62275)'
                            .')'
                            .'|\\-translation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:62374)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:62444)'
                                .')'
                            .')'
                        .')'
                        .'|lugin(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:62537)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:62607)'
                            .')'
                            .'|\\-translation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:62706)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:62776)'
                                .')'
                            .')'
                        .')'
                        .'|ro(?'
                            .'|duct(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:62873)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:62943)'
                                .')'
                                .'|\\-(?'
                                    .'|c(?'
                                        .'|ategory(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:63045)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:63115)'
                                            .')'
                                            .'|\\-tree(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:63207)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:63277)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|onfigurator\\-setting(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:63385)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:63455)'
                                            .')'
                                        .')'
                                        .'|ross\\-selling(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:63555)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:63625)'
                                            .')'
                                            .'|\\-(?'
                                                .'|assigned\\-products(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:63734)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:63804)'
                                                    .')'
                                                .')'
                                                .'|translation(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:63902)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:63972)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|ustom\\-field\\-set(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:64078)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:64148)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|download(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:64244)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:64314)'
                                        .')'
                                    .')'
                                    .'|export(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:64407)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:64477)'
                                        .')'
                                    .')'
                                    .'|feature\\-set(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:64576)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:64646)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:64745)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:64815)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|keyword\\-dictionary(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:64922)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:64992)'
                                        .')'
                                    .')'
                                    .'|m(?'
                                        .'|anufacturer(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:65094)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:65164)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:65263)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:65333)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|edia(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:65425)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:65495)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|option(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:65589)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:65659)'
                                        .')'
                                    .')'
                                    .'|pr(?'
                                        .'|ice(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:65754)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:65824)'
                                            .')'
                                        .')'
                                        .'|operty(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:65917)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:65987)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|review(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:66081)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:66151)'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|earch\\-(?'
                                            .'|config(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:66258)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:66328)'
                                                .')'
                                                .'|\\-field(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:66421)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:66491)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|keyword(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:66586)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:66656)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|orting(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:66750)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:66820)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:66919)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:66989)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|tream(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:67082)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:67152)'
                                            .')'
                                            .'|\\-(?'
                                                .'|filter(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:67249)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:67319)'
                                                    .')'
                                                .')'
                                                .'|mapping(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:67413)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:67483)'
                                                    .')'
                                                .')'
                                                .'|translation(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:67581)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:67651)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|t(?'
                                        .'|ag(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:67747)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:67817)'
                                            .')'
                                        .')'
                                        .'|ranslation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:67914)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:67984)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|visibility(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:68082)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:68152)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|motion(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:68247)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:68317)'
                                .')'
                                .'|\\-(?'
                                    .'|cart\\-rule(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:68418)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:68488)'
                                        .')'
                                    .')'
                                    .'|discount(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:68583)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:68653)'
                                        .')'
                                        .'|\\-(?'
                                            .'|prices(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:68750)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:68820)'
                                                .')'
                                            .')'
                                            .'|rule(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:68911)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:68981)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|individual\\-code(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:69086)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:69156)'
                                        .')'
                                    .')'
                                    .'|order\\-rule(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:69254)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:69324)'
                                        .')'
                                    .')'
                                    .'|persona\\-(?'
                                        .'|customer(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:69431)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:69501)'
                                            .')'
                                        .')'
                                        .'|rule(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:69592)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:69662)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|ales\\-channel(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:69767)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:69837)'
                                            .')'
                                        .')'
                                        .'|etgroup(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:69931)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:70001)'
                                            .')'
                                            .'|\\-rule(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:70093)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:70163)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:70263)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:70333)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|perty\\-group(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:70434)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:70504)'
                                .')'
                                .'|\\-(?'
                                    .'|option(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:70601)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:70671)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:70770)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:70840)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|translation/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:70936)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
        70936 => '{^(?'
                .'|/api/(?'
                    .'|property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                        .'|(*:71038)'
                    .')'
                    .'|s(?'
                        .'|e(?'
                            .'|arch(?'
                                .'|/(?'
                                    .'|property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71152)'
                                    .'|rule(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71225)'
                                        .'|\\-(?'
                                            .'|condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71305)'
                                            .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71374)'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|al(?'
                                            .'|es\\-channel(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71465)'
                                                .'|\\-(?'
                                                    .'|analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71545)'
                                                    .'|c(?'
                                                        .'|ountry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71621)'
                                                        .'|urrency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71694)'
                                                    .')'
                                                    .'|domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71767)'
                                                    .'|language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71841)'
                                                    .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:71922)'
                                                    .'|shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72004)'
                                                    .'|t(?'
                                                        .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72084)'
                                                        .'|ype(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72156)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72235)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|utation(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72315)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72394)'
                                            .')'
                                        .')'
                                        .'|c(?'
                                            .'|heduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72479)'
                                            .'|ript((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72549)'
                                        .')'
                                        .'|eo\\-url(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72626)'
                                            .'|\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72702)'
                                        .')'
                                        .'|hipping\\-method(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72787)'
                                            .'|\\-(?'
                                                .'|price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72863)'
                                                .'|t(?'
                                                    .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:72935)'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73011)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|nippet(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73089)'
                                            .'|\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73160)'
                                        .')'
                                        .'|tate\\-machine(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73243)'
                                            .'|\\-(?'
                                                .'|history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73321)'
                                                .'|state(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73395)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73474)'
                                                .')'
                                                .'|trans(?'
                                                    .'|ition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73554)'
                                                    .'|lation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73626)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|wag\\-language\\-pack\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73724)'
                                        .'|ystem\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73803)'
                                    .')'
                                    .'|t(?'
                                        .'|a(?'
                                            .'|g((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73879)'
                                            .'|sk\\-definition\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:73972)'
                                            .'|x(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74042)'
                                                .'|\\-(?'
                                                    .'|provider(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74124)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74203)'
                                                    .')'
                                                    .'|rule(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74277)'
                                                        .'|\\-type(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74352)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74431)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|heme(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74509)'
                                            .'|\\-(?'
                                                .'|child((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74585)'
                                                .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74656)'
                                                .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74736)'
                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74813)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|u(?'
                                        .'|nit(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74892)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:74971)'
                                        .')'
                                        .'|ser(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75044)'
                                            .'|\\-(?'
                                                .'|access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75126)'
                                                .'|config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75198)'
                                                .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75272)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|version(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75351)'
                                        .'|\\-commit(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75428)'
                                            .'|\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75500)'
                                        .')'
                                    .')'
                                    .'|webhook(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75578)'
                                        .'|\\-event\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75656)'
                                    .')'
                                .')'
                                .'|\\-ids/(?'
                                    .'|property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75761)'
                                    .'|rule(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75834)'
                                        .'|\\-(?'
                                            .'|condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75914)'
                                            .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:75983)'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|al(?'
                                            .'|es\\-channel(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76074)'
                                                .'|\\-(?'
                                                    .'|analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76154)'
                                                    .'|c(?'
                                                        .'|ountry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76230)'
                                                        .'|urrency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76303)'
                                                    .')'
                                                    .'|domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76376)'
                                                    .'|language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76450)'
                                                    .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76531)'
                                                    .'|shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76613)'
                                                    .'|t(?'
                                                        .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76693)'
                                                        .'|ype(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76765)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76844)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|utation(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:76924)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77003)'
                                            .')'
                                        .')'
                                        .'|c(?'
                                            .'|heduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77088)'
                                            .'|ript((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77158)'
                                        .')'
                                        .'|eo\\-url(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77235)'
                                            .'|\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77311)'
                                        .')'
                                        .'|hipping\\-method(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77396)'
                                            .'|\\-(?'
                                                .'|price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77472)'
                                                .'|t(?'
                                                    .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77544)'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77620)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|nippet(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77698)'
                                            .'|\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77769)'
                                        .')'
                                        .'|tate\\-machine(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77852)'
                                            .'|\\-(?'
                                                .'|history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:77930)'
                                                .'|state(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78004)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78083)'
                                                .')'
                                                .'|trans(?'
                                                    .'|ition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78163)'
                                                    .'|lation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78235)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|wag\\-language\\-pack\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78333)'
                                        .'|ystem\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78412)'
                                    .')'
                                    .'|t(?'
                                        .'|a(?'
                                            .'|g((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78488)'
                                            .'|sk\\-definition\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78581)'
                                            .'|x(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78651)'
                                                .'|\\-(?'
                                                    .'|provider(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78733)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78812)'
                                                    .')'
                                                    .'|rule(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78886)'
                                                        .'|\\-type(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:78961)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79040)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|heme(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79118)'
                                            .'|\\-(?'
                                                .'|child((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79194)'
                                                .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79265)'
                                                .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79345)'
                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79422)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|u(?'
                                        .'|nit(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79501)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79580)'
                                        .')'
                                        .'|ser(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79653)'
                                            .'|\\-(?'
                                                .'|access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79735)'
                                                .'|config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79807)'
                                                .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79881)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|version(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:79960)'
                                        .'|\\-commit(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:80037)'
                                            .'|\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:80109)'
                                        .')'
                                    .')'
                                    .'|webhook(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:80187)'
                                        .'|\\-event\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:80265)'
                                    .')'
                                .')'
                            .')'
                            .'|o\\-url(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:80359)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:80429)'
                                .')'
                                .'|\\-template(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:80525)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:80595)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|al(?'
                            .'|es\\-channel(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:80700)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:80770)'
                                .')'
                                .'|\\-(?'
                                    .'|analytics(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:80870)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:80940)'
                                        .')'
                                    .')'
                                    .'|c(?'
                                        .'|ountry(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:81037)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:81107)'
                                            .')'
                                        .')'
                                        .'|urrency(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:81201)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:81271)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|domain(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:81365)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:81435)'
                                        .')'
                                    .')'
                                    .'|language(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:81530)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:81600)'
                                        .')'
                                    .')'
                                    .'|payment\\-method(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:81702)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:81772)'
                                        .')'
                                    .')'
                                    .'|shipping\\-method(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:81875)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:81945)'
                                        .')'
                                    .')'
                                    .'|t(?'
                                        .'|ranslation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:82046)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:82116)'
                                            .')'
                                        .')'
                                        .'|ype(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:82206)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:82276)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:82375)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:82445)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|utation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:82543)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:82613)'
                                .')'
                                .'|\\-translation(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:82712)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:82782)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|c(?'
                            .'|heduled\\-task(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:82888)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:82958)'
                                .')'
                            .')'
                            .'|ript(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:83049)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:83119)'
                                .')'
                            .')'
                        .')'
                        .'|hipping\\-method(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:83222)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:83292)'
                            .')'
                            .'|\\-(?'
                                .'|price(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:83388)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:83458)'
                                    .')'
                                .')'
                                .'|t(?'
                                    .'|ag(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:83551)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:83621)'
                                        .')'
                                    .')'
                                    .'|ranslation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:83718)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:83788)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|nippet(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:83884)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:83954)'
                            .')'
                            .'|\\-set(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:84045)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:84115)'
                                .')'
                            .')'
                        .')'
                        .'|tate\\-machine(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:84216)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:84286)'
                            .')'
                            .'|\\-(?'
                                .'|history(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:84384)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:84454)'
                                    .')'
                                .')'
                                .'|state(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:84546)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:84616)'
                                    .')'
                                    .'|\\-translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:84715)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:84785)'
                                        .')'
                                    .')'
                                .')'
                                .'|trans(?'
                                    .'|ition(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:84886)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:84956)'
                                        .')'
                                    .')'
                                    .'|lation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:85049)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:85119)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|wag\\-language\\-pack\\-language(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:85238)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:85308)'
                            .')'
                        .')'
                        .'|ystem\\-config(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:85408)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:85478)'
                            .')'
                        .')'
                    .')'
                    .'|a(?'
                        .'|ggregate/(?'
                            .'|property\\-group\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85591)'
                            .'|rule(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85664)'
                                .'|\\-(?'
                                    .'|condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85744)'
                                    .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85813)'
                                .')'
                            .')'
                            .'|s(?'
                                .'|al(?'
                                    .'|es\\-channel(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85904)'
                                        .'|\\-(?'
                                            .'|analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:85984)'
                                            .'|c(?'
                                                .'|ountry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86060)'
                                                .'|urrency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86133)'
                                            .')'
                                            .'|domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86206)'
                                            .'|language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86280)'
                                            .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86361)'
                                            .'|shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86443)'
                                            .'|t(?'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86523)'
                                                .'|ype(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86595)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86674)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|utation(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86754)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86833)'
                                    .')'
                                .')'
                                .'|c(?'
                                    .'|heduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86918)'
                                    .'|ript((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:86988)'
                                .')'
                                .'|eo\\-url(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87065)'
                                    .'|\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87141)'
                                .')'
                                .'|hipping\\-method(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87226)'
                                    .'|\\-(?'
                                        .'|price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87302)'
                                        .'|t(?'
                                            .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87374)'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87450)'
                                        .')'
                                    .')'
                                .')'
                                .'|nippet(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87528)'
                                    .'|\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87599)'
                                .')'
                                .'|tate\\-machine(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87682)'
                                    .'|\\-(?'
                                        .'|history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87760)'
                                        .'|state(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87834)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87913)'
                                        .')'
                                        .'|trans(?'
                                            .'|ition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:87993)'
                                            .'|lation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88065)'
                                        .')'
                                    .')'
                                .')'
                                .'|wag\\-language\\-pack\\-language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88163)'
                                .'|ystem\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88242)'
                            .')'
                            .'|t(?'
                                .'|a(?'
                                    .'|g((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88318)'
                                    .'|sk\\-definition\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88411)'
                                    .'|x(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88481)'
                                        .'|\\-(?'
                                            .'|provider(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88563)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88642)'
                                            .')'
                                            .'|rule(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88716)'
                                                .'|\\-type(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88791)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88870)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|heme(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:88948)'
                                    .'|\\-(?'
                                        .'|child((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89024)'
                                        .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89095)'
                                        .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89175)'
                                        .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89252)'
                                    .')'
                                .')'
                            .')'
                            .'|u(?'
                                .'|nit(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89331)'
                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89410)'
                                .')'
                                .'|ser(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89483)'
                                    .'|\\-(?'
                                        .'|access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89565)'
                                        .'|config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89637)'
                                        .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89711)'
                                    .')'
                                .')'
                            .')'
                            .'|version(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89790)'
                                .'|\\-commit(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89867)'
                                    .'|\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:89939)'
                                .')'
                            .')'
                            .'|webhook(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:90017)'
                                .'|\\-event\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:90095)'
                            .')'
                        .')'
                        .'|cl\\-role(?'
                            .'|(*:90118)'
                            .'|/([^/]++)(?'
                                .'|(*:90140)'
                            .')'
                        .')'
                    .')'
                    .'|rule(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:90232)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                            .'|(*:90302)'
                        .')'
                        .'|\\-(?'
                            .'|condition(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:90402)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:90472)'
                                .')'
                            .')'
                            .'|tag(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:90562)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:90632)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|t(?'
                        .'|a(?'
                            .'|g(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:90730)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:90800)'
                                .')'
                            .')'
                            .'|sk\\-definition\\-translation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:90914)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:90984)'
                                .')'
                            .')'
                            .'|x(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:91072)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:91142)'
                                .')'
                                .'|\\-(?'
                                    .'|provider(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:91241)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:91311)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:91410)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:91480)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|rule(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:91572)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:91642)'
                                        .')'
                                        .'|\\-type(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:91734)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:91804)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:91903)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:91973)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|heme(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:92069)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:92139)'
                            .')'
                            .'|\\-(?'
                                .'|child(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:92235)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:92305)'
                                    .')'
                                .')'
                                .'|media(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:92397)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:92467)'
                                    .')'
                                .')'
                                .'|sales\\-channel(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:92568)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:92638)'
                                    .')'
                                .')'
                                .'|translation(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:92736)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:92806)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|u(?'
                        .'|nit(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:92903)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:92973)'
                            .')'
                            .'|\\-translation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:93072)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:93142)'
                                .')'
                            .')'
                        .')'
                        .'|ser(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:93230)'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(*:93296)'
                            .'|\\-(?'
                                .'|access\\-key(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:93397)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:93467)'
                                    .')'
                                .')'
                                .'|config(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:93560)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:93630)'
                                    .')'
                                .')'
                                .'|recovery(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:93725)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:93795)'
                                    .')'
                                .')'
                            .')'
                            .'|/([^/]++)(?'
                                .'|(*:93820)'
                                .'|/ac(?'
                                    .'|cess\\-keys/([^/]++)(*:93855)'
                                    .'|l\\-roles/([^/]++)(*:93882)'
                                .')'
                                .'|(*:93893)'
                            .')'
                            .'|(*:93904)'
                        .')'
                    .')'
                    .'|version(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:93998)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                            .'|(*:94068)'
                        .')'
                        .'|\\-commit(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:94162)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:94232)'
                            .')'
                            .'|\\-data(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:94324)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:94394)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|webhook(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:94490)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                            .'|(*:94560)'
                        .')'
                        .'|\\-event\\-log(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[0-9a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:94658)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[0-9a-zA-Z-]+)*\\/?)(?'
                                .'|(*:94728)'
                            .')'
                        .')'
                    .')'
                    .'|integration(?'
                        .'|(*:94755)'
                        .'|/([^/]++)(*:94774)'
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
        16840 => [
            [['_route' => 'api.customer_group_registration_sales_channels.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_registration_sales_channels.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_registration_sales_channels.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        16936 => [
            [['_route' => 'api.currency.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.currency.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        17006 => [
            [['_route' => 'api.currency.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        17114 => [
            [['_route' => 'api.currency_country_rounding.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency_country_rounding.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.currency_country_rounding.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        17184 => [
            [['_route' => 'api.currency_country_rounding.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency_country_rounding.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'currency-country-rounding', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        17282 => [
            [['_route' => 'api.currency_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.currency_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        17352 => [
            [['_route' => 'api.currency_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'currency-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        17447 => [[['_route' => 'api.ce_entity.detail', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::detailShorthand'], ['entityName', 'path'], ['GET' => 0], null, false, true, null]],
        17520 => [
            [['_route' => 'api.ce_entity.list', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::listShorthand'], ['entityName', 'path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.ce_entity.create', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::createShorthand'], ['entityName', 'path'], ['POST' => 0], null, false, true, null],
        ],
        17608 => [
            [['_route' => 'api.ce_entity.update', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::updateShorthand'], ['entityName', 'path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.ce_entity.delete', '_routeScope' => ['api'], '_controller' => 'Shopware\\Core\\System\\CustomEntity\\Api\\CustomEntityApiController::deleteShorthand'], ['entityName', 'path'], ['DELETE' => 0], null, false, true, null],
        ],
        17702 => [
            [['_route' => 'api.category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        17772 => [
            [['_route' => 'api.category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        17866 => [
            [['_route' => 'api.category_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        17936 => [
            [['_route' => 'api.category_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        18033 => [
            [['_route' => 'api.category_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        18103 => [
            [['_route' => 'api.category_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        18204 => [
            [['_route' => 'api.cms_block.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_block.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_block.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        18274 => [
            [['_route' => 'api.cms_block.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_block.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-block', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        18365 => [
            [['_route' => 'api.cms_page.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_page.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        18435 => [
            [['_route' => 'api.cms_page.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        18534 => [
            [['_route' => 'api.cms_page_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_page_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        18604 => [
            [['_route' => 'api.cms_page_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        18702 => [
            [['_route' => 'api.cms_section.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_section.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_section.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        18772 => [
            [['_route' => 'api.cms_section.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_section.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-section', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        18862 => [
            [['_route' => 'api.cms_slot.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        18932 => [
            [['_route' => 'api.cms_slot.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-slot', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        19031 => [
            [['_route' => 'api.cms_slot_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        19101 => [
            [['_route' => 'api.cms_slot_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-slot-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        19197 => [
            [['_route' => 'api.country.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        19267 => [
            [['_route' => 'api.country.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        19363 => [
            [['_route' => 'api.country_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        19433 => [
            [['_route' => 'api.country_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        19532 => [
            [['_route' => 'api.country_state_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_state_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        19602 => [
            [['_route' => 'api.country_state_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        19701 => [
            [['_route' => 'api.country_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        19771 => [
            [['_route' => 'api.country_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        19875 => [
            [['_route' => 'api.basic_example.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'basic-example', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.basic_example.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'basic-example', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.basic_example.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'basic-example', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        19945 => [
            [['_route' => 'api.basic_example.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'basic-example', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.basic_example.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'basic-example', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        19992 => [[['_route' => 'frontend.app-system.generate-token', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AppController::generateToken'], ['name'], ['POST' => 0], null, false, false, null]],
        20028 => [[['_route' => 'administration.plugin.index', '_routeScope' => ['administration'], 'auth_required' => false, '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::pluginIndex'], ['pluginName'], ['GET' => 0], null, false, false, null]],
        20065 => [[['_route' => 'frontend.account.order.single.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::orderSingleOverview'], ['deepLinkCode'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        20088 => [[['_route' => 'frontend.account.edit-order.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::editOrder'], ['orderId'], ['GET' => 0], null, false, true, null]],
        20114 => [[['_route' => 'frontend.account.edit-order.change-payment-method', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::orderChangePayment'], ['orderId'], ['POST' => 0], null, false, true, null]],
        20139 => [[['_route' => 'frontend.account.edit-order.update-order', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::updateOrder'], ['orderId'], ['POST' => 0], null, false, true, null]],
        20181 => [[['_route' => 'frontend.account.order.single.document', '_routeScope' => ['storefront'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\DocumentController::downloadDocument'], ['documentId', 'deepLinkCode'], ['GET' => 0], null, false, true, null]],
        20200 => [[['_route' => 'frontend.account.order.single.document.a11y', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\DocumentController::downloadDocument'], ['documentId', 'deepLinkCode', 'fileType'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        20235 => [[['_route' => 'frontend.account.order.single.download', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\DownloadController::downloadFile'], ['orderId', 'downloadId'], ['GET' => 0], null, false, true, null]],
        20266 => [[['_route' => 'frontend.account.address.edit.page', '_routeScope' => ['storefront'], '_loginRequired' => true, '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::accountEditAddress'], ['addressId'], ['GET' => 0], null, false, true, null]],
        20302 => [[['_route' => 'frontend.account.address.set-default-address', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::switchDefaultAddress'], ['type', 'addressId'], ['POST' => 0], null, false, true, null]],
        20318 => [[['_route' => 'frontend.account.address.switch-default', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::checkoutSwitchDefaultAddress'], [], ['POST' => 0], null, false, false, null]],
        20334 => [[['_route' => 'frontend.account.address.create', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::saveAddress'], [], ['POST' => 0], null, false, false, null]],
        20352 => [[['_route' => 'frontend.account.address.edit.save', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::saveAddress'], ['addressId'], ['POST' => 0], null, false, true, null]],
        20377 => [[['_route' => 'frontend.account.address.delete', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::deleteAddress'], ['addressId'], ['POST' => 0], null, false, true, null]],
        20450 => [[['_route' => 'store-api.app-system.generate-token', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppJWTGenerateRoute::generate'], ['name'], ['POST' => 0], null, false, false, null]],
        20502 => [[['_route' => 'store-api.account.set.payment-method', '_routeScope' => ['store-api'], '_contextTokenRequired' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangePaymentMethodRoute::change'], ['paymentMethodId'], ['POST' => 0], null, false, true, null]],
        20531 => [[['_route' => 'store-api.account.address.delete', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\DeleteAddressRoute::delete'], ['addressId'], ['DELETE' => 0], null, false, true, null]],
        20570 => [[['_route' => 'store-api.account.address.change.default.shipping', '_routeScope' => ['store-api'], 'type' => 'shipping', '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SwitchDefaultAddressRoute::swap'], ['addressId'], ['PATCH' => 0], null, false, true, null]],
        20596 => [[['_route' => 'store-api.account.address.change.default.billing', '_routeScope' => ['store-api'], 'type' => 'billing', '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SwitchDefaultAddressRoute::swap'], ['addressId'], ['PATCH' => 0], null, false, true, null]],
        20615 => [[['_route' => 'store-api.account.address.update', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\UpsertAddressRoute::upsert'], ['addressId'], ['PATCH' => 0], null, false, true, null]],
        20642 => [[['_route' => 'store-api.script_endpoint', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Framework\\Script\\Api\\ScriptStoreApiRoute::execute'], ['hook'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        20672 => [[['_route' => 'store-api.sitemap.file', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\Sitemap\\SalesChannel\\SitemapFileRoute::getSitemapFile'], ['filePath'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        20709 => [[['_route' => 'store-api.country.state', '_routeScope' => ['store-api'], '_entity' => 'country', '_controller' => 'Shopware\\Core\\System\\Country\\SalesChannel\\CountryStateRoute::load'], ['countryId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        20735 => [[['_route' => 'store-api.category.detail', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\Category\\SalesChannel\\CategoryRoute::load'], ['navigationId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        20756 => [[['_route' => 'store-api.cms.detail', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\Cms\\SalesChannel\\CmsRoute::load'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        20801 => [[['_route' => 'store-api.customer.wishlist.add', '_routeScope' => ['store-api'], '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\AddWishlistProductRoute::add'], ['productId'], ['POST' => 0], null, false, true, null]],
        20826 => [[['_route' => 'store-api.customer.wishlist.delete', '_routeScope' => ['store-api'], '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\RemoveWishlistProductRoute::delete'], ['productId'], ['DELETE' => 0], null, false, true, null]],
        20874 => [[['_route' => 'store-api.customer-group-registration.config', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\CustomerGroupRegistrationSettingsRoute::load'], ['customerGroupId'], ['GET' => 0], null, false, true, null]],
        20925 => [[['_route' => 'store-api.product.export', '_routeScope' => ['store-api'], 'auth_required' => false, '_controller' => 'Shopware\\Core\\Content\\ProductExport\\SalesChannel\\ExportController::index'], ['accessKey', 'fileName'], ['GET' => 0], null, false, true, null]],
        20951 => [[['_route' => 'store-api.product.listing', '_routeScope' => ['store-api'], '_entity' => 'product', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Listing\\ResolveCriteriaProductListingRoute::load'], ['categoryId'], ['POST' => 0], null, false, true, null]],
        20992 => [[['_route' => 'store-api.product.cross-selling', '_routeScope' => ['store-api'], '_entity' => 'product', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\CrossSelling\\ProductCrossSellingRoute::load'], ['productId'], ['POST' => 0], null, false, false, null]],
        21015 => [[['_route' => 'store-api.product.find-variant', '_routeScope' => ['store-api'], '_entity' => 'product', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\FindVariant\\FindProductVariantRoute::load'], ['productId'], ['POST' => 0], null, false, false, null]],
        21035 => [[['_route' => 'store-api.product-review.list', '_routeScope' => ['store-api'], '_entity' => 'product_review', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Review\\ProductReviewRoute::load'], ['productId'], ['POST' => 0], null, false, false, null]],
        21045 => [[['_route' => 'store-api.product-review.save', '_routeScope' => ['store-api'], '_loginRequired' => true, '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Review\\ProductReviewSaveRoute::save'], ['productId'], ['POST' => 0], null, false, false, null]],
        21057 => [[['_route' => 'store-api.product.detail', '_routeScope' => ['store-api'], '_entity' => 'product', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Detail\\ProductDetailRoute::load'], ['productId'], ['POST' => 0], null, false, true, null]],
        21094 => [[['_route' => 'store-api.breadcrumb', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\Breadcrumb\\SalesChannel\\BreadcrumbRoute::load'], ['id'], ['GET' => 0], null, false, true, null]],
        21132 => [[['_route' => 'store-api.navigation', '_routeScope' => ['store-api'], '_entity' => 'category', '_controller' => 'Shopware\\Core\\Content\\Category\\SalesChannel\\TreeBuildingNavigationRoute::load'], ['activeId', 'rootId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        21164 => [[['_route' => 'store-api.landing-page.detail', '_routeScope' => ['store-api'], '_controller' => 'Shopware\\Core\\Content\\LandingPage\\SalesChannel\\LandingPageRoute::load'], ['landingPageId'], ['POST' => 0], null, false, true, null]],
        21206 => [[['_route' => 'store-api.account.order.single.download', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\DownloadRoute::load'], ['orderId', 'downloadId'], ['GET' => 0], null, false, true, null]],
        21256 => [[['_route' => 'store-api.document.download', '_routeScope' => ['store-api'], '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_entity' => 'document', 'deepLinkCode' => '', '_controller' => 'Shopware\\Core\\Checkout\\Document\\SalesChannel\\DocumentRoute::download'], ['documentId', 'deepLinkCode'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        21284 => [[['_route' => 'frontend.script_endpoint', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ScriptController::execute'], ['hook'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        21315 => [[['_route' => 'frontend.sitemap.proxy', '_routeScope' => ['storefront'], '_controller' => 'Shopware\\Storefront\\Controller\\SitemapController::sitemapProxy'], ['filePath'], ['GET' => 0], null, false, true, null]],
        21354 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        21375 => [[['_route' => 'pentatrion_vite_build_proxy', '_controller' => 'Pentatrion\\ViteBundle\\Controller\\ViteController::proxyBuild'], ['path'], null, null, false, true, null]],
        21432 => [[['_route' => 'widgets.account.order.detail', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::ajaxOrderDetail'], ['id'], ['GET' => 0], null, false, true, null]],
        21472 => [[['_route' => 'frontend.account.addressmanager', 'addressId' => null, '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_loginRequiredAllowGuest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::addressManagerUpsert'], ['addressId'], ['POST' => 0], null, false, true, null]],
        21503 => [[['_route' => 'frontend.cms.page', '_routeScope' => ['storefront'], 'id' => null, 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::page'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        21544 => [[['_route' => 'frontend.cms.navigation.page', '_routeScope' => ['storefront'], 'navigationId' => null, 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::category'], ['navigationId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        21570 => [[['_route' => 'frontend.cms.navigation.filter', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::filter'], ['navigationId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        21603 => [[['_route' => 'frontend.cms.buybox.switch', '_routeScope' => ['storefront'], 'productId' => null, 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::switchBuyBoxVariant'], ['productId'], ['GET' => 0], null, false, false, null]],
        21649 => [[['_route' => 'frontend.wishlist.product.delete', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::remove'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        21674 => [[['_route' => 'frontend.wishlist.product.add', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::ajaxAdd'], ['productId'], ['POST' => 0], null, false, true, null]],
        21707 => [[['_route' => 'frontend.wishlist.add.after.login', '_routeScope' => ['storefront'], '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::addAfterLogin'], ['productId'], ['GET' => 0], null, false, true, null]],
        21733 => [[['_route' => 'frontend.wishlist.product.remove', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::ajaxRemove'], ['productId'], ['POST' => 0], null, false, true, null]],
        21787 => [[['_route' => 'frontend.checkout.line-item.delete', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::deleteLineItem'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        21822 => [[['_route' => 'frontend.checkout.line-item.change-quantity', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::changeQuantity'], ['id'], ['POST' => 0], null, false, true, null]],
        21870 => [[['_route' => 'frontend.account.customer-group-registration.page', '_routeScope' => ['storefront'], '_noStore' => true, '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::customerGroupRegistration'], ['customerGroupId'], ['GET' => 0], null, false, true, null]],
        21902 => [[['_route' => 'frontend.cms.page.full', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::pageFull'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        21937 => [[['_route' => 'frontend.detail.review.save', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_loginRequired' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::saveReview'], ['productId'], ['POST' => 0], null, false, false, null]],
        21953 => [[['_route' => 'frontend.product.reviews', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::loadReviews'], ['productId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        21986 => [[['_route' => 'frontend.landing.page', '_routeScope' => ['storefront'], '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\LandingPageController::index'], ['landingPageId'], ['GET' => 0], null, false, true, null]],
        22028 => [[['_route' => 'frontend.maintenance.singlepage', '_routeScope' => ['storefront'], 'allow_maintenance' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\MaintenanceController::renderSinglePage'], ['id'], ['GET' => 0], null, false, true, null]],
        22058 => [[['_route' => 'frontend.navigation.page', '_routeScope' => ['storefront'], '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\NavigationController::index'], ['navigationId'], ['GET' => 0], null, false, true, null]],
        22087 => [[['_route' => 'frontend.detail.page', '_routeScope' => ['storefront'], '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::index'], ['productId'], ['GET' => 0], null, false, true, null]],
        22104 => [[['_route' => 'frontend.detail.switch', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_httpCache' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::switch'], ['productId'], ['GET' => 0], null, false, false, null]],
        22134 => [[['_route' => 'widgets.quickview.minimal', '_routeScope' => ['storefront'], 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::quickviewMinimal'], ['productId'], ['GET' => 0], null, false, true, null]],
        22260 => [
            [['_route' => 'api.customer_group_registration_sales_channels.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_registration_sales_channels.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        22357 => [
            [['_route' => 'api.customer_group_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        22427 => [
            [['_route' => 'api.customer_group_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        22523 => [
            [['_route' => 'api.customer_recovery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_recovery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_recovery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        22593 => [
            [['_route' => 'api.customer_recovery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_recovery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        22683 => [
            [['_route' => 'api.customer_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        22753 => [
            [['_route' => 'api.customer_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        22848 => [
            [['_route' => 'api.customer_wishlist.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        22918 => [
            [['_route' => 'api.customer_wishlist.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        23013 => [
            [['_route' => 'api.customer_wishlist_product.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist_product.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist_product.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        23083 => [
            [['_route' => 'api.customer_wishlist_product.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist_product.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        23218 => [[['_route' => 'api.customer_group_registration_sales_channels.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23295 => [[['_route' => 'api.customer_group_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23370 => [[['_route' => 'api.customer_recovery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23439 => [[['_route' => 'api.customer_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23516 => [[['_route' => 'api.customer_wishlist.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23591 => [[['_route' => 'api.customer_wishlist_product.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23679 => [[['_route' => 'api.delivery_time.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23758 => [[['_route' => 'api.delivery_time_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23835 => [[['_route' => 'api.document.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        23921 => [[['_route' => 'api.document_base_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24003 => [[['_route' => 'api.document_base_config_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24077 => [[['_route' => 'api.document_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24156 => [[['_route' => 'api.document_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24233 => [[['_route' => 'api.flow.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24312 => [[['_route' => 'api.flow_sequence.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24386 => [[['_route' => 'api.flow_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24480 => [[['_route' => 'api.import_export_file.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24549 => [[['_route' => 'api.import_export_log.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24625 => [[['_route' => 'api.import_export_profile.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24704 => [[['_route' => 'api.import_export_profile_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24785 => [[['_route' => 'api.integration.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24857 => [[['_route' => 'api.integration_role.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        24947 => [[['_route' => 'api.landing_page.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25032 => [[['_route' => 'api.landing_page_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25104 => [[['_route' => 'api.landing_page_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25180 => [[['_route' => 'api.landing_page_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25254 => [[['_route' => 'api.language.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25332 => [[['_route' => 'api.locale.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25411 => [[['_route' => 'api.locale_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25486 => [[['_route' => 'api.log_entry.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25586 => [[['_route' => 'api.mail_header_footer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25665 => [[['_route' => 'api.mail_header_footer_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25743 => [[['_route' => 'api.mail_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25819 => [[['_route' => 'api.mail_template_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25899 => [[['_route' => 'api.mail_template_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        25971 => [[['_route' => 'api.mail_template_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26050 => [[['_route' => 'api.mail_template_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26132 => [[['_route' => 'api.main_category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26206 => [[['_route' => 'api.media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26292 => [[['_route' => 'api.media_default_folder.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26367 => [[['_route' => 'api.media_folder.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26451 => [[['_route' => 'api.media_folder_configuration.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26541 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26615 => [[['_route' => 'api.media_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26692 => [[['_route' => 'api.media_thumbnail.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26764 => [[['_route' => 'api.media_thumbnail_size.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26841 => [[['_route' => 'api.media_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        26938 => [[['_route' => 'api.newsletter_recipient.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27009 => [[['_route' => 'api.newsletter_recipient_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27087 => [[['_route' => 'api.notification.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27168 => [[['_route' => 'api.number_range.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27256 => [[['_route' => 'api.number_range_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27326 => [[['_route' => 'api.number_range_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27407 => [[['_route' => 'api.number_range_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27479 => [[['_route' => 'api.number_range_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27558 => [[['_route' => 'api.number_range_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27637 => [[['_route' => 'api.order.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27715 => [[['_route' => 'api.order_address.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27789 => [[['_route' => 'api.order_customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27863 => [[['_route' => 'api.order_delivery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        27993 => [[['_route' => 'api.customer_group_registration_sales_channels.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28070 => [[['_route' => 'api.customer_group_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28145 => [[['_route' => 'api.customer_recovery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28214 => [[['_route' => 'api.customer_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28291 => [[['_route' => 'api.customer_wishlist.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28366 => [[['_route' => 'api.customer_wishlist_product.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28454 => [[['_route' => 'api.delivery_time.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28533 => [[['_route' => 'api.delivery_time_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28610 => [[['_route' => 'api.document.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28696 => [[['_route' => 'api.document_base_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28778 => [[['_route' => 'api.document_base_config_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28852 => [[['_route' => 'api.document_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        28931 => [[['_route' => 'api.document_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29008 => [[['_route' => 'api.flow.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29087 => [[['_route' => 'api.flow_sequence.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29161 => [[['_route' => 'api.flow_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29255 => [[['_route' => 'api.import_export_file.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29324 => [[['_route' => 'api.import_export_log.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29400 => [[['_route' => 'api.import_export_profile.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29479 => [[['_route' => 'api.import_export_profile_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29560 => [[['_route' => 'api.integration.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29632 => [[['_route' => 'api.integration_role.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29722 => [[['_route' => 'api.landing_page.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29807 => [[['_route' => 'api.landing_page_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29879 => [[['_route' => 'api.landing_page_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        29955 => [[['_route' => 'api.landing_page_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30029 => [[['_route' => 'api.language.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30107 => [[['_route' => 'api.locale.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30186 => [[['_route' => 'api.locale_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30261 => [[['_route' => 'api.log_entry.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30361 => [[['_route' => 'api.mail_header_footer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30440 => [[['_route' => 'api.mail_header_footer_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30518 => [[['_route' => 'api.mail_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30594 => [[['_route' => 'api.mail_template_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30674 => [[['_route' => 'api.mail_template_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30746 => [[['_route' => 'api.mail_template_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30825 => [[['_route' => 'api.mail_template_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30907 => [[['_route' => 'api.main_category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        30981 => [[['_route' => 'api.media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31067 => [[['_route' => 'api.media_default_folder.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31142 => [[['_route' => 'api.media_folder.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31226 => [[['_route' => 'api.media_folder_configuration.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31316 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31390 => [[['_route' => 'api.media_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31467 => [[['_route' => 'api.media_thumbnail.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31539 => [[['_route' => 'api.media_thumbnail_size.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31616 => [[['_route' => 'api.media_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31713 => [[['_route' => 'api.newsletter_recipient.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31784 => [[['_route' => 'api.newsletter_recipient_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31862 => [[['_route' => 'api.notification.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        31943 => [[['_route' => 'api.number_range.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32031 => [[['_route' => 'api.number_range_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32101 => [[['_route' => 'api.number_range_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32182 => [[['_route' => 'api.number_range_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32254 => [[['_route' => 'api.number_range_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32333 => [[['_route' => 'api.number_range_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32412 => [[['_route' => 'api.order.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32490 => [[['_route' => 'api.order_address.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32564 => [[['_route' => 'api.order_customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32638 => [[['_route' => 'api.order_delivery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32773 => [[['_route' => 'api.customer_group_registration_sales_channels.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-group-registration-sales-channels', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32850 => [[['_route' => 'api.customer_group_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32925 => [[['_route' => 'api.customer_recovery.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        32994 => [[['_route' => 'api.customer_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33071 => [[['_route' => 'api.customer_wishlist.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-wishlist', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33146 => [[['_route' => 'api.customer_wishlist_product.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'customer-wishlist-product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33234 => [[['_route' => 'api.delivery_time.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33313 => [[['_route' => 'api.delivery_time_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33390 => [[['_route' => 'api.document.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33476 => [[['_route' => 'api.document_base_config.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33558 => [[['_route' => 'api.document_base_config_sales_channel.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33632 => [[['_route' => 'api.document_type.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33711 => [[['_route' => 'api.document_type_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33788 => [[['_route' => 'api.flow.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33867 => [[['_route' => 'api.flow_sequence.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        33941 => [[['_route' => 'api.flow_template.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34035 => [[['_route' => 'api.import_export_file.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34104 => [[['_route' => 'api.import_export_log.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34180 => [[['_route' => 'api.import_export_profile.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34259 => [[['_route' => 'api.import_export_profile_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34340 => [[['_route' => 'api.integration.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34412 => [[['_route' => 'api.integration_role.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34502 => [[['_route' => 'api.landing_page.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34587 => [[['_route' => 'api.landing_page_sales_channel.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34659 => [[['_route' => 'api.landing_page_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34735 => [[['_route' => 'api.landing_page_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34809 => [[['_route' => 'api.language.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34887 => [[['_route' => 'api.locale.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        34966 => [[['_route' => 'api.locale_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35041 => [[['_route' => 'api.log_entry.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35141 => [[['_route' => 'api.mail_header_footer.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35220 => [[['_route' => 'api.mail_header_footer_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35298 => [[['_route' => 'api.mail_template.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35374 => [[['_route' => 'api.mail_template_media.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35454 => [[['_route' => 'api.mail_template_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35526 => [[['_route' => 'api.mail_template_type.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35605 => [[['_route' => 'api.mail_template_type_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35687 => [[['_route' => 'api.main_category.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35761 => [[['_route' => 'api.media.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35847 => [[['_route' => 'api.media_default_folder.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        35922 => [[['_route' => 'api.media_folder.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36006 => [[['_route' => 'api.media_folder_configuration.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36096 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36170 => [[['_route' => 'api.media_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36247 => [[['_route' => 'api.media_thumbnail.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36319 => [[['_route' => 'api.media_thumbnail_size.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36396 => [[['_route' => 'api.media_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36493 => [[['_route' => 'api.newsletter_recipient.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36564 => [[['_route' => 'api.newsletter_recipient_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36642 => [[['_route' => 'api.notification.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36723 => [[['_route' => 'api.number_range.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36811 => [[['_route' => 'api.number_range_sales_channel.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36881 => [[['_route' => 'api.number_range_state.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        36962 => [[['_route' => 'api.number_range_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37034 => [[['_route' => 'api.number_range_type.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37113 => [[['_route' => 'api.number_range_type_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37192 => [[['_route' => 'api.order.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37270 => [[['_route' => 'api.order_address.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37344 => [[['_route' => 'api.order_customer.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37418 => [[['_route' => 'api.order_delivery.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        37523 => [
            [['_route' => 'api.delivery_time.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        37593 => [
            [['_route' => 'api.delivery_time.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'delivery-time', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        37692 => [
            [['_route' => 'api.delivery_time_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        37762 => [
            [['_route' => 'api.delivery_time_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'delivery-time-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        37857 => [
            [['_route' => 'api.document.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        37927 => [
            [['_route' => 'api.document.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        38030 => [
            [['_route' => 'api.document_base_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        38100 => [
            [['_route' => 'api.document_base_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-base-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        38202 => [
            [['_route' => 'api.document_base_config_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        38272 => [
            [['_route' => 'api.document_base_config_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-base-config-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        38364 => [
            [['_route' => 'api.document_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        38434 => [
            [['_route' => 'api.document_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        38533 => [
            [['_route' => 'api.document_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        38603 => [
            [['_route' => 'api.document_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        38698 => [
            [['_route' => 'api.flow.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.flow.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        38768 => [
            [['_route' => 'api.flow.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'flow', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        38867 => [
            [['_route' => 'api.flow_sequence.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow_sequence.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.flow_sequence.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        38937 => [
            [['_route' => 'api.flow_sequence.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow_sequence.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'flow-sequence', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        39032 => [
            [['_route' => 'api.flow_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.flow_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        39102 => [
            [['_route' => 'api.flow_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'flow-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        39217 => [
            [['_route' => 'api.import_export_file.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_file.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_file.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        39287 => [
            [['_route' => 'api.import_export_file.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_file.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-file', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        39377 => [
            [['_route' => 'api.import_export_log.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_log.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_log.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        39447 => [
            [['_route' => 'api.import_export_log.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_log.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        39541 => [
            [['_route' => 'api.import_export_profile.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        39611 => [
            [['_route' => 'api.import_export_profile.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-profile', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        39710 => [
            [['_route' => 'api.import_export_profile_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        39780 => [
            [['_route' => 'api.import_export_profile_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-profile-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        39879 => [
            [['_route' => 'api.integration.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.integration.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        39946 => [[['_route' => 'api.integration.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'integration', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        40037 => [
            [['_route' => 'api.integration_role.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.integration_role.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.integration_role.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        40107 => [
            [['_route' => 'api.integration_role.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.integration_role.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'integration-role', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        40215 => [
            [['_route' => 'api.landing_page.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.landing_page.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        40285 => [
            [['_route' => 'api.landing_page.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'landing-page', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        40390 => [
            [['_route' => 'api.landing_page_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        40460 => [
            [['_route' => 'api.landing_page_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'landing-page-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        40553 => [
            [['_route' => 'api.landing_page_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        40623 => [
            [['_route' => 'api.landing_page_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'landing-page-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        40720 => [
            [['_route' => 'api.landing_page_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        40790 => [
            [['_route' => 'api.landing_page_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'landing-page-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        40885 => [
            [['_route' => 'api.language.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.language.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.language.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        40955 => [
            [['_route' => 'api.language.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.language.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        41051 => [
            [['_route' => 'api.locale.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.locale.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        41121 => [
            [['_route' => 'api.locale.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'locale', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        41220 => [
            [['_route' => 'api.locale_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.locale_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        41290 => [
            [['_route' => 'api.locale_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'locale-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        41386 => [
            [['_route' => 'api.log_entry.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.log_entry.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.log_entry.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        41456 => [
            [['_route' => 'api.log_entry.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.log_entry.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'log-entry', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        41574 => [
            [['_route' => 'api.mail_header_footer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        41644 => [
            [['_route' => 'api.mail_header_footer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-header-footer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        41743 => [
            [['_route' => 'api.mail_header_footer_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        41813 => [
            [['_route' => 'api.mail_header_footer_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-header-footer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        41909 => [
            [['_route' => 'api.mail_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        41979 => [
            [['_route' => 'api.mail_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        42075 => [
            [['_route' => 'api.mail_template_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        42145 => [
            [['_route' => 'api.mail_template_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        42246 => [
            [['_route' => 'api.mail_template_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        42316 => [
            [['_route' => 'api.mail_template_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        42406 => [
            [['_route' => 'api.mail_template_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        42476 => [
            [['_route' => 'api.mail_template_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        42575 => [
            [['_route' => 'api.mail_template_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        42645 => [
            [['_route' => 'api.mail_template_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        42748 => [
            [['_route' => 'api.main_category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.main_category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.main_category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        42818 => [
            [['_route' => 'api.main_category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.main_category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'main-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        42910 => [
            [['_route' => 'api.media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        42980 => [
            [['_route' => 'api.media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        43086 => [
            [['_route' => 'api.media_default_folder.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_default_folder.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_default_folder.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        43156 => [
            [['_route' => 'api.media_default_folder.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_default_folder.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-default-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        43249 => [
            [['_route' => 'api.media_folder.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        43319 => [
            [['_route' => 'api.media_folder.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        43420 => [
            [['_route' => 'api.media_folder_configuration.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        43490 => [
            [['_route' => 'api.media_folder_configuration.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder-configuration', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        43600 => [
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        43670 => [
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder-configuration-media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        43765 => [
            [['_route' => 'api.media_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        43835 => [
            [['_route' => 'api.media_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        43930 => [
            [['_route' => 'api.media_thumbnail.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44000 => [
            [['_route' => 'api.media_thumbnail.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-thumbnail', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44092 => [
            [['_route' => 'api.media_thumbnail_size.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail_size.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail_size.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44162 => [
            [['_route' => 'api.media_thumbnail_size.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail_size.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-thumbnail-size', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44260 => [
            [['_route' => 'api.media_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44330 => [
            [['_route' => 'api.media_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44445 => [
            [['_route' => 'api.newsletter_recipient.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44515 => [
            [['_route' => 'api.newsletter_recipient.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'newsletter-recipient', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44606 => [
            [['_route' => 'api.newsletter_recipient_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44676 => [
            [['_route' => 'api.newsletter_recipient_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'newsletter-recipient-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44775 => [
            [['_route' => 'api.notification.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.notification.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.notification.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44845 => [
            [['_route' => 'api.notification.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.notification.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'notification', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44944 => [
            [['_route' => 'api.number_range.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45014 => [
            [['_route' => 'api.number_range.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45122 => [
            [['_route' => 'api.number_range_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45192 => [
            [['_route' => 'api.number_range_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45283 => [
            [['_route' => 'api.number_range_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45353 => [
            [['_route' => 'api.number_range_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45455 => [
            [['_route' => 'api.number_range_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45525 => [
            [['_route' => 'api.number_range_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45615 => [
            [['_route' => 'api.number_range_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45685 => [
            [['_route' => 'api.number_range_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45784 => [
            [['_route' => 'api.number_range_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45854 => [
            [['_route' => 'api.number_range_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45951 => [
            [['_route' => 'api.order.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46021 => [
            [['_route' => 'api.order.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46119 => [
            [['_route' => 'api.order_address.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_address.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_address.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46189 => [
            [['_route' => 'api.order_address.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_address.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-address', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46284 => [
            [['_route' => 'api.order_customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46354 => [
            [['_route' => 'api.order_customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46449 => [
            [['_route' => 'api.order_delivery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46519 => [
            [['_route' => 'api.order_delivery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-delivery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46615 => [
            [['_route' => 'api.order_delivery_position.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery_position.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery_position.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46682 => [[['_route' => 'api.order_delivery_position.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        46794 => [[['_route' => 'api.order_delivery_position.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        46873 => [[['_route' => 'api.order_line_item.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        46949 => [[['_route' => 'api.order_line_item_download.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        47022 => [[['_route' => 'api.order_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        47101 => [[['_route' => 'api.order_transaction.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        47179 => [[['_route' => 'api.order_transaction_capture.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        47256 => [[['_route' => 'api.order_transaction_capture_refund.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        47332 => [[['_route' => 'api.order_transaction_capture_refund_position.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        47424 => [[['_route' => 'api.payment_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        47503 => [[['_route' => 'api.payment_method_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        47578 => [[['_route' => 'api.plugin.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        47657 => [[['_route' => 'api.plugin_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        47736 => [[['_route' => 'api.product.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        47821 => [[['_route' => 'api.product_category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        47893 => [[['_route' => 'api.product_category_tree.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        47980 => [[['_route' => 'api.product_configurator_setting.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48062 => [[['_route' => 'api.product_cross_selling.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48151 => [[['_route' => 'api.product_cross_selling_assigned_products.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48228 => [[['_route' => 'api.product_cross_selling_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48313 => [[['_route' => 'api.product_custom_field_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48388 => [[['_route' => 'api.product_download.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48460 => [[['_route' => 'api.product_export.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48541 => [[['_route' => 'api.product_feature_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48620 => [[['_route' => 'api.product_feature_set_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48706 => [[['_route' => 'api.product_keyword_dictionary.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48790 => [[['_route' => 'api.product_manufacturer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48869 => [[['_route' => 'api.product_manufacturer_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        48940 => [[['_route' => 'api.product_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49013 => [[['_route' => 'api.product_option.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49087 => [[['_route' => 'api.product_price.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49159 => [[['_route' => 'api.product_property.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49232 => [[['_route' => 'api.product_review.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49321 => [[['_route' => 'api.product_search_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49394 => [[['_route' => 'api.product_search_config_field.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49468 => [[['_route' => 'api.product_search_keyword.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49544 => [[['_route' => 'api.product_sorting.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49623 => [[['_route' => 'api.product_sorting_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49698 => [[['_route' => 'api.product_stream.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49775 => [[['_route' => 'api.product_stream_filter.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49848 => [[['_route' => 'api.product_stream_mapping.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        49925 => [[['_route' => 'api.product_stream_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50000 => [[['_route' => 'api.product_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50076 => [[['_route' => 'api.product_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50153 => [[['_route' => 'api.product_visibility.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50230 => [[['_route' => 'api.promotion.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50311 => [[['_route' => 'api.promotion_cart_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50388 => [[['_route' => 'api.promotion_discount.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50465 => [[['_route' => 'api.promotion_discount_prices.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50535 => [[['_route' => 'api.promotion_discount_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50619 => [[['_route' => 'api.promotion_individual_code.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50696 => [[['_route' => 'api.promotion_order_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50782 => [[['_route' => 'api.promotion_persona_customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50852 => [[['_route' => 'api.promotion_persona_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        50936 => [[['_route' => 'api.promotion_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51012 => [[['_route' => 'api.promotion_setgroup.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51084 => [[['_route' => 'api.promotion_setgroup_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51163 => [[['_route' => 'api.promotion_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51246 => [[['_route' => 'api.property_group.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51323 => [[['_route' => 'api.property_group_option.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51402 => [[['_route' => 'api.property_group_option_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51510 => [[['_route' => 'api.order_delivery_position.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51589 => [[['_route' => 'api.order_line_item.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51665 => [[['_route' => 'api.order_line_item_download.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51738 => [[['_route' => 'api.order_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51817 => [[['_route' => 'api.order_transaction.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51895 => [[['_route' => 'api.order_transaction_capture.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        51972 => [[['_route' => 'api.order_transaction_capture_refund.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52048 => [[['_route' => 'api.order_transaction_capture_refund_position.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52140 => [[['_route' => 'api.payment_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52219 => [[['_route' => 'api.payment_method_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52294 => [[['_route' => 'api.plugin.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52373 => [[['_route' => 'api.plugin_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52452 => [[['_route' => 'api.product.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52537 => [[['_route' => 'api.product_category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52609 => [[['_route' => 'api.product_category_tree.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52696 => [[['_route' => 'api.product_configurator_setting.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52778 => [[['_route' => 'api.product_cross_selling.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52867 => [[['_route' => 'api.product_cross_selling_assigned_products.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        52944 => [[['_route' => 'api.product_cross_selling_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53029 => [[['_route' => 'api.product_custom_field_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53104 => [[['_route' => 'api.product_download.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53176 => [[['_route' => 'api.product_export.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53257 => [[['_route' => 'api.product_feature_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53336 => [[['_route' => 'api.product_feature_set_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53422 => [[['_route' => 'api.product_keyword_dictionary.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53506 => [[['_route' => 'api.product_manufacturer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53585 => [[['_route' => 'api.product_manufacturer_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53656 => [[['_route' => 'api.product_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53729 => [[['_route' => 'api.product_option.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53803 => [[['_route' => 'api.product_price.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53875 => [[['_route' => 'api.product_property.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        53948 => [[['_route' => 'api.product_review.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54037 => [[['_route' => 'api.product_search_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54110 => [[['_route' => 'api.product_search_config_field.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54184 => [[['_route' => 'api.product_search_keyword.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54260 => [[['_route' => 'api.product_sorting.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54339 => [[['_route' => 'api.product_sorting_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54414 => [[['_route' => 'api.product_stream.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54491 => [[['_route' => 'api.product_stream_filter.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54564 => [[['_route' => 'api.product_stream_mapping.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54641 => [[['_route' => 'api.product_stream_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54716 => [[['_route' => 'api.product_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54792 => [[['_route' => 'api.product_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54869 => [[['_route' => 'api.product_visibility.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        54946 => [[['_route' => 'api.promotion.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55027 => [[['_route' => 'api.promotion_cart_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55104 => [[['_route' => 'api.promotion_discount.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55181 => [[['_route' => 'api.promotion_discount_prices.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55251 => [[['_route' => 'api.promotion_discount_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55335 => [[['_route' => 'api.promotion_individual_code.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55412 => [[['_route' => 'api.promotion_order_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55498 => [[['_route' => 'api.promotion_persona_customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55568 => [[['_route' => 'api.promotion_persona_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55652 => [[['_route' => 'api.promotion_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55728 => [[['_route' => 'api.promotion_setgroup.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55800 => [[['_route' => 'api.promotion_setgroup_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55879 => [[['_route' => 'api.promotion_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        55962 => [[['_route' => 'api.property_group.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56039 => [[['_route' => 'api.property_group_option.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56118 => [[['_route' => 'api.property_group_option_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56231 => [[['_route' => 'api.order_delivery_position.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56310 => [[['_route' => 'api.order_line_item.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56386 => [[['_route' => 'api.order_line_item_download.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56459 => [[['_route' => 'api.order_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56538 => [[['_route' => 'api.order_transaction.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56616 => [[['_route' => 'api.order_transaction_capture.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56693 => [[['_route' => 'api.order_transaction_capture_refund.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56769 => [[['_route' => 'api.order_transaction_capture_refund_position.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56861 => [[['_route' => 'api.payment_method.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        56940 => [[['_route' => 'api.payment_method_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57015 => [[['_route' => 'api.plugin.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57094 => [[['_route' => 'api.plugin_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57173 => [[['_route' => 'api.product.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57258 => [[['_route' => 'api.product_category.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57330 => [[['_route' => 'api.product_category_tree.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57417 => [[['_route' => 'api.product_configurator_setting.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57499 => [[['_route' => 'api.product_cross_selling.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57588 => [[['_route' => 'api.product_cross_selling_assigned_products.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57665 => [[['_route' => 'api.product_cross_selling_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57750 => [[['_route' => 'api.product_custom_field_set.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57825 => [[['_route' => 'api.product_download.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57897 => [[['_route' => 'api.product_export.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        57978 => [[['_route' => 'api.product_feature_set.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58057 => [[['_route' => 'api.product_feature_set_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58143 => [[['_route' => 'api.product_keyword_dictionary.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58227 => [[['_route' => 'api.product_manufacturer.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58306 => [[['_route' => 'api.product_manufacturer_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58377 => [[['_route' => 'api.product_media.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58450 => [[['_route' => 'api.product_option.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58524 => [[['_route' => 'api.product_price.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58596 => [[['_route' => 'api.product_property.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58669 => [[['_route' => 'api.product_review.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58758 => [[['_route' => 'api.product_search_config.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58831 => [[['_route' => 'api.product_search_config_field.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58905 => [[['_route' => 'api.product_search_keyword.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        58981 => [[['_route' => 'api.product_sorting.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59060 => [[['_route' => 'api.product_sorting_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59135 => [[['_route' => 'api.product_stream.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59212 => [[['_route' => 'api.product_stream_filter.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59285 => [[['_route' => 'api.product_stream_mapping.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59362 => [[['_route' => 'api.product_stream_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59437 => [[['_route' => 'api.product_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59513 => [[['_route' => 'api.product_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59590 => [[['_route' => 'api.product_visibility.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59667 => [[['_route' => 'api.promotion.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59748 => [[['_route' => 'api.promotion_cart_rule.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59825 => [[['_route' => 'api.promotion_discount.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59902 => [[['_route' => 'api.promotion_discount_prices.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        59972 => [[['_route' => 'api.promotion_discount_rule.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60056 => [[['_route' => 'api.promotion_individual_code.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60133 => [[['_route' => 'api.promotion_order_rule.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60219 => [[['_route' => 'api.promotion_persona_customer.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60289 => [[['_route' => 'api.promotion_persona_rule.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60373 => [[['_route' => 'api.promotion_sales_channel.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60449 => [[['_route' => 'api.promotion_setgroup.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60521 => [[['_route' => 'api.promotion_setgroup_rule.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60600 => [[['_route' => 'api.promotion_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60683 => [[['_route' => 'api.property_group.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60760 => [[['_route' => 'api.property_group_option.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60839 => [[['_route' => 'api.property_group_option_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        60938 => [[['_route' => 'api.order_delivery_position.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-delivery-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        61033 => [
            [['_route' => 'api.order_line_item.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        61103 => [
            [['_route' => 'api.order_line_item.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-line-item', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        61199 => [
            [['_route' => 'api.order_line_item_download.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item_download.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item_download.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        61269 => [
            [['_route' => 'api.order_line_item_download.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item_download.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-line-item-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        61363 => [
            [['_route' => 'api.order_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        61433 => [
            [['_route' => 'api.order_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        61530 => [
            [['_route' => 'api.order_transaction.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        61600 => [
            [['_route' => 'api.order_transaction.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-transaction', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        61695 => [
            [['_route' => 'api.order_transaction_capture.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        61765 => [
            [['_route' => 'api.order_transaction_capture.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-transaction-capture', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        61859 => [
            [['_route' => 'api.order_transaction_capture_refund.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        61929 => [
            [['_route' => 'api.order_transaction_capture_refund.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-transaction-capture-refund', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        62025 => [
            [['_route' => 'api.order_transaction_capture_refund_position.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund_position.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund_position.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        62095 => [
            [['_route' => 'api.order_transaction_capture_refund_position.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction_capture_refund_position.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-transaction-capture-refund-position', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        62205 => [
            [['_route' => 'api.payment_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.payment_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        62275 => [
            [['_route' => 'api.payment_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        62374 => [
            [['_route' => 'api.payment_method_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.payment_method_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        62444 => [
            [['_route' => 'api.payment_method_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'payment-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        62537 => [
            [['_route' => 'api.plugin.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.plugin.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        62607 => [
            [['_route' => 'api.plugin.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'plugin', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        62706 => [
            [['_route' => 'api.plugin_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.plugin_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        62776 => [
            [['_route' => 'api.plugin_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'plugin-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        62873 => [
            [['_route' => 'api.product.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        62943 => [
            [['_route' => 'api.product.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        63045 => [
            [['_route' => 'api.product_category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        63115 => [
            [['_route' => 'api.product_category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-category', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        63207 => [
            [['_route' => 'api.product_category_tree.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category_tree.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_category_tree.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        63277 => [
            [['_route' => 'api.product_category_tree.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category_tree.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-category-tree', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        63385 => [
            [['_route' => 'api.product_configurator_setting.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_configurator_setting.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_configurator_setting.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        63455 => [
            [['_route' => 'api.product_configurator_setting.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_configurator_setting.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-configurator-setting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        63555 => [
            [['_route' => 'api.product_cross_selling.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        63625 => [
            [['_route' => 'api.product_cross_selling.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        63734 => [
            [['_route' => 'api.product_cross_selling_assigned_products.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_assigned_products.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_assigned_products.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        63804 => [
            [['_route' => 'api.product_cross_selling_assigned_products.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_assigned_products.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling-assigned-products', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        63902 => [
            [['_route' => 'api.product_cross_selling_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        63972 => [
            [['_route' => 'api.product_cross_selling_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64078 => [
            [['_route' => 'api.product_custom_field_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_custom_field_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_custom_field_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64148 => [
            [['_route' => 'api.product_custom_field_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_custom_field_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-custom-field-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64244 => [
            [['_route' => 'api.product_download.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_download.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_download.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64314 => [
            [['_route' => 'api.product_download.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_download.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-download', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64407 => [
            [['_route' => 'api.product_export.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_export.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_export.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64477 => [
            [['_route' => 'api.product_export.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_export.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-export', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64576 => [
            [['_route' => 'api.product_feature_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64646 => [
            [['_route' => 'api.product_feature_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-feature-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64745 => [
            [['_route' => 'api.product_feature_set_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64815 => [
            [['_route' => 'api.product_feature_set_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-feature-set-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64922 => [
            [['_route' => 'api.product_keyword_dictionary.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_keyword_dictionary.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_keyword_dictionary.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64992 => [
            [['_route' => 'api.product_keyword_dictionary.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_keyword_dictionary.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-keyword-dictionary', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65094 => [
            [['_route' => 'api.product_manufacturer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65164 => [
            [['_route' => 'api.product_manufacturer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-manufacturer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65263 => [
            [['_route' => 'api.product_manufacturer_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65333 => [
            [['_route' => 'api.product_manufacturer_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-manufacturer-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65425 => [
            [['_route' => 'api.product_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65495 => [
            [['_route' => 'api.product_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65589 => [
            [['_route' => 'api.product_option.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_option.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_option.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65659 => [
            [['_route' => 'api.product_option.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_option.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65754 => [
            [['_route' => 'api.product_price.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_price.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_price.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65824 => [
            [['_route' => 'api.product_price.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_price.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65917 => [
            [['_route' => 'api.product_property.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_property.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_property.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65987 => [
            [['_route' => 'api.product_property.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_property.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-property', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66081 => [
            [['_route' => 'api.product_review.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_review.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_review.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66151 => [
            [['_route' => 'api.product_review.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_review.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-review', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66258 => [
            [['_route' => 'api.product_search_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66328 => [
            [['_route' => 'api.product_search_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-search-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66421 => [
            [['_route' => 'api.product_search_config_field.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config_field.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config_field.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66491 => [
            [['_route' => 'api.product_search_config_field.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config_field.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-search-config-field', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66586 => [
            [['_route' => 'api.product_search_keyword.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_keyword.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_search_keyword.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66656 => [
            [['_route' => 'api.product_search_keyword.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_keyword.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-search-keyword', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66750 => [
            [['_route' => 'api.product_sorting.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66820 => [
            [['_route' => 'api.product_sorting.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-sorting', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66919 => [
            [['_route' => 'api.product_sorting_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66989 => [
            [['_route' => 'api.product_sorting_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-sorting-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67082 => [
            [['_route' => 'api.product_stream.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67152 => [
            [['_route' => 'api.product_stream.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67249 => [
            [['_route' => 'api.product_stream_filter.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_filter.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_filter.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67319 => [
            [['_route' => 'api.product_stream_filter.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_filter.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream-filter', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67413 => [
            [['_route' => 'api.product_stream_mapping.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_mapping.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_mapping.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67483 => [
            [['_route' => 'api.product_stream_mapping.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_mapping.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream-mapping', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67581 => [
            [['_route' => 'api.product_stream_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67651 => [
            [['_route' => 'api.product_stream_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67747 => [
            [['_route' => 'api.product_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67817 => [
            [['_route' => 'api.product_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67914 => [
            [['_route' => 'api.product_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67984 => [
            [['_route' => 'api.product_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68082 => [
            [['_route' => 'api.product_visibility.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_visibility.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_visibility.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68152 => [
            [['_route' => 'api.product_visibility.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_visibility.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-visibility', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68247 => [
            [['_route' => 'api.promotion.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68317 => [
            [['_route' => 'api.promotion.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68418 => [
            [['_route' => 'api.promotion_cart_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_cart_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_cart_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68488 => [
            [['_route' => 'api.promotion_cart_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_cart_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-cart-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68583 => [
            [['_route' => 'api.promotion_discount.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68653 => [
            [['_route' => 'api.promotion_discount.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68750 => [
            [['_route' => 'api.promotion_discount_prices.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_prices.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_prices.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68820 => [
            [['_route' => 'api.promotion_discount_prices.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_prices.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount-prices', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68911 => [
            [['_route' => 'api.promotion_discount_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68981 => [
            [['_route' => 'api.promotion_discount_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69086 => [
            [['_route' => 'api.promotion_individual_code.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_individual_code.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_individual_code.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69156 => [
            [['_route' => 'api.promotion_individual_code.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_individual_code.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-individual-code', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69254 => [
            [['_route' => 'api.promotion_order_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_order_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_order_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69324 => [
            [['_route' => 'api.promotion_order_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_order_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-order-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69431 => [
            [['_route' => 'api.promotion_persona_customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69501 => [
            [['_route' => 'api.promotion_persona_customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-persona-customer', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69592 => [
            [['_route' => 'api.promotion_persona_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69662 => [
            [['_route' => 'api.promotion_persona_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-persona-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69767 => [
            [['_route' => 'api.promotion_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69837 => [
            [['_route' => 'api.promotion_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69931 => [
            [['_route' => 'api.promotion_setgroup.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70001 => [
            [['_route' => 'api.promotion_setgroup.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-setgroup', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70093 => [
            [['_route' => 'api.promotion_setgroup_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70163 => [
            [['_route' => 'api.promotion_setgroup_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-setgroup-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70263 => [
            [['_route' => 'api.promotion_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70333 => [
            [['_route' => 'api.promotion_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70434 => [
            [['_route' => 'api.property_group.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70504 => [
            [['_route' => 'api.property_group.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70601 => [
            [['_route' => 'api.property_group_option.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70671 => [
            [['_route' => 'api.property_group_option.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-option', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70770 => [
            [['_route' => 'api.property_group_option_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70840 => [
            [['_route' => 'api.property_group_option_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-option-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70936 => [
            [['_route' => 'api.property_group_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        71038 => [
            [['_route' => 'api.property_group_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        71152 => [[['_route' => 'api.property_group_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71225 => [[['_route' => 'api.rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71305 => [[['_route' => 'api.rule_condition.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71374 => [[['_route' => 'api.rule_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71465 => [[['_route' => 'api.sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71545 => [[['_route' => 'api.sales_channel_analytics.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71621 => [[['_route' => 'api.sales_channel_country.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71694 => [[['_route' => 'api.sales_channel_currency.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71767 => [[['_route' => 'api.sales_channel_domain.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71841 => [[['_route' => 'api.sales_channel_language.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        71922 => [[['_route' => 'api.sales_channel_payment_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72004 => [[['_route' => 'api.sales_channel_shipping_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72084 => [[['_route' => 'api.sales_channel_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72156 => [[['_route' => 'api.sales_channel_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72235 => [[['_route' => 'api.sales_channel_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72315 => [[['_route' => 'api.salutation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72394 => [[['_route' => 'api.salutation_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72479 => [[['_route' => 'api.scheduled_task.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72549 => [[['_route' => 'api.script.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72626 => [[['_route' => 'api.seo_url.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72702 => [[['_route' => 'api.seo_url_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72787 => [[['_route' => 'api.shipping_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72863 => [[['_route' => 'api.shipping_method_price.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        72935 => [[['_route' => 'api.shipping_method_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73011 => [[['_route' => 'api.shipping_method_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73089 => [[['_route' => 'api.snippet.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73160 => [[['_route' => 'api.snippet_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73243 => [[['_route' => 'api.state_machine.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73321 => [[['_route' => 'api.state_machine_history.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73395 => [[['_route' => 'api.state_machine_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73474 => [[['_route' => 'api.state_machine_state_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73554 => [[['_route' => 'api.state_machine_transition.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73626 => [[['_route' => 'api.state_machine_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73724 => [[['_route' => 'api.swag_language_pack_language.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73803 => [[['_route' => 'api.system_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73879 => [[['_route' => 'api.tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        73972 => [[['_route' => 'api.task_definition_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'task-definition-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74042 => [[['_route' => 'api.tax.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74124 => [[['_route' => 'api.tax_provider.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74203 => [[['_route' => 'api.tax_provider_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74277 => [[['_route' => 'api.tax_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74352 => [[['_route' => 'api.tax_rule_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74431 => [[['_route' => 'api.tax_rule_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74509 => [[['_route' => 'api.theme.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74585 => [[['_route' => 'api.theme_child.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74656 => [[['_route' => 'api.theme_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74736 => [[['_route' => 'api.theme_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74813 => [[['_route' => 'api.theme_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74892 => [[['_route' => 'api.unit.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        74971 => [[['_route' => 'api.unit_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75044 => [[['_route' => 'api.user.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75126 => [[['_route' => 'api.user_access_key.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75198 => [[['_route' => 'api.user_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75272 => [[['_route' => 'api.user_recovery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75351 => [[['_route' => 'api.version.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75428 => [[['_route' => 'api.version_commit.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75500 => [[['_route' => 'api.version_commit_data.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75578 => [[['_route' => 'api.webhook.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75656 => [[['_route' => 'api.webhook_event_log.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75761 => [[['_route' => 'api.property_group_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75834 => [[['_route' => 'api.rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75914 => [[['_route' => 'api.rule_condition.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        75983 => [[['_route' => 'api.rule_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76074 => [[['_route' => 'api.sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76154 => [[['_route' => 'api.sales_channel_analytics.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76230 => [[['_route' => 'api.sales_channel_country.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76303 => [[['_route' => 'api.sales_channel_currency.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76376 => [[['_route' => 'api.sales_channel_domain.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76450 => [[['_route' => 'api.sales_channel_language.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76531 => [[['_route' => 'api.sales_channel_payment_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76613 => [[['_route' => 'api.sales_channel_shipping_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76693 => [[['_route' => 'api.sales_channel_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76765 => [[['_route' => 'api.sales_channel_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76844 => [[['_route' => 'api.sales_channel_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        76924 => [[['_route' => 'api.salutation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77003 => [[['_route' => 'api.salutation_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77088 => [[['_route' => 'api.scheduled_task.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77158 => [[['_route' => 'api.script.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77235 => [[['_route' => 'api.seo_url.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77311 => [[['_route' => 'api.seo_url_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77396 => [[['_route' => 'api.shipping_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77472 => [[['_route' => 'api.shipping_method_price.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77544 => [[['_route' => 'api.shipping_method_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77620 => [[['_route' => 'api.shipping_method_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77698 => [[['_route' => 'api.snippet.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77769 => [[['_route' => 'api.snippet_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77852 => [[['_route' => 'api.state_machine.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        77930 => [[['_route' => 'api.state_machine_history.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78004 => [[['_route' => 'api.state_machine_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78083 => [[['_route' => 'api.state_machine_state_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78163 => [[['_route' => 'api.state_machine_transition.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78235 => [[['_route' => 'api.state_machine_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78333 => [[['_route' => 'api.swag_language_pack_language.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78412 => [[['_route' => 'api.system_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78488 => [[['_route' => 'api.tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78581 => [[['_route' => 'api.task_definition_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'task-definition-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78651 => [[['_route' => 'api.tax.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78733 => [[['_route' => 'api.tax_provider.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78812 => [[['_route' => 'api.tax_provider_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78886 => [[['_route' => 'api.tax_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        78961 => [[['_route' => 'api.tax_rule_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79040 => [[['_route' => 'api.tax_rule_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79118 => [[['_route' => 'api.theme.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79194 => [[['_route' => 'api.theme_child.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79265 => [[['_route' => 'api.theme_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79345 => [[['_route' => 'api.theme_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79422 => [[['_route' => 'api.theme_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79501 => [[['_route' => 'api.unit.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79580 => [[['_route' => 'api.unit_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79653 => [[['_route' => 'api.user.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79735 => [[['_route' => 'api.user_access_key.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79807 => [[['_route' => 'api.user_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79881 => [[['_route' => 'api.user_recovery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        79960 => [[['_route' => 'api.version.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        80037 => [[['_route' => 'api.version_commit.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        80109 => [[['_route' => 'api.version_commit_data.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        80187 => [[['_route' => 'api.webhook.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        80265 => [[['_route' => 'api.webhook_event_log.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        80359 => [
            [['_route' => 'api.seo_url.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.seo_url.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        80429 => [
            [['_route' => 'api.seo_url.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        80525 => [
            [['_route' => 'api.seo_url_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.seo_url_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        80595 => [
            [['_route' => 'api.seo_url_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        80700 => [
            [['_route' => 'api.sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        80770 => [
            [['_route' => 'api.sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        80870 => [
            [['_route' => 'api.sales_channel_analytics.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_analytics.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_analytics.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        80940 => [
            [['_route' => 'api.sales_channel_analytics.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_analytics.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        81037 => [
            [['_route' => 'api.sales_channel_country.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_country.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_country.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        81107 => [
            [['_route' => 'api.sales_channel_country.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_country.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        81201 => [
            [['_route' => 'api.sales_channel_currency.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_currency.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_currency.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        81271 => [
            [['_route' => 'api.sales_channel_currency.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_currency.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        81365 => [
            [['_route' => 'api.sales_channel_domain.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_domain.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_domain.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        81435 => [
            [['_route' => 'api.sales_channel_domain.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_domain.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        81530 => [
            [['_route' => 'api.sales_channel_language.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_language.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_language.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        81600 => [
            [['_route' => 'api.sales_channel_language.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_language.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        81702 => [
            [['_route' => 'api.sales_channel_payment_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_payment_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_payment_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        81772 => [
            [['_route' => 'api.sales_channel_payment_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_payment_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        81875 => [
            [['_route' => 'api.sales_channel_shipping_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_shipping_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_shipping_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        81945 => [
            [['_route' => 'api.sales_channel_shipping_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_shipping_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        82046 => [
            [['_route' => 'api.sales_channel_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        82116 => [
            [['_route' => 'api.sales_channel_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        82206 => [
            [['_route' => 'api.sales_channel_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        82276 => [
            [['_route' => 'api.sales_channel_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        82375 => [
            [['_route' => 'api.sales_channel_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        82445 => [
            [['_route' => 'api.sales_channel_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        82543 => [
            [['_route' => 'api.salutation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.salutation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        82613 => [
            [['_route' => 'api.salutation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        82712 => [
            [['_route' => 'api.salutation_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.salutation_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        82782 => [
            [['_route' => 'api.salutation_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        82888 => [
            [['_route' => 'api.scheduled_task.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.scheduled_task.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.scheduled_task.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        82958 => [
            [['_route' => 'api.scheduled_task.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.scheduled_task.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        83049 => [
            [['_route' => 'api.script.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.script.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.script.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        83119 => [
            [['_route' => 'api.script.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.script.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        83222 => [
            [['_route' => 'api.shipping_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        83292 => [
            [['_route' => 'api.shipping_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        83388 => [
            [['_route' => 'api.shipping_method_price.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_price.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_price.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        83458 => [
            [['_route' => 'api.shipping_method_price.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_price.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        83551 => [
            [['_route' => 'api.shipping_method_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        83621 => [
            [['_route' => 'api.shipping_method_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        83718 => [
            [['_route' => 'api.shipping_method_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        83788 => [
            [['_route' => 'api.shipping_method_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        83884 => [
            [['_route' => 'api.snippet.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.snippet.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        83954 => [
            [['_route' => 'api.snippet.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        84045 => [
            [['_route' => 'api.snippet_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.snippet_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        84115 => [
            [['_route' => 'api.snippet_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        84216 => [
            [['_route' => 'api.state_machine.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        84286 => [
            [['_route' => 'api.state_machine.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        84384 => [
            [['_route' => 'api.state_machine_history.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_history.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_history.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        84454 => [
            [['_route' => 'api.state_machine_history.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_history.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        84546 => [
            [['_route' => 'api.state_machine_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        84616 => [
            [['_route' => 'api.state_machine_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        84715 => [
            [['_route' => 'api.state_machine_state_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        84785 => [
            [['_route' => 'api.state_machine_state_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        84886 => [
            [['_route' => 'api.state_machine_transition.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_transition.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_transition.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        84956 => [
            [['_route' => 'api.state_machine_transition.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_transition.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        85049 => [
            [['_route' => 'api.state_machine_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        85119 => [
            [['_route' => 'api.state_machine_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        85238 => [
            [['_route' => 'api.swag_language_pack_language.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_language_pack_language.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_language_pack_language.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        85308 => [
            [['_route' => 'api.swag_language_pack_language.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_language_pack_language.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        85408 => [
            [['_route' => 'api.system_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.system_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.system_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        85478 => [
            [['_route' => 'api.system_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.system_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        85591 => [[['_route' => 'api.property_group_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'property-group-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        85664 => [[['_route' => 'api.rule.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        85744 => [[['_route' => 'api.rule_condition.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        85813 => [[['_route' => 'api.rule_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        85904 => [[['_route' => 'api.sales_channel.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        85984 => [[['_route' => 'api.sales_channel_analytics.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-analytics', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86060 => [[['_route' => 'api.sales_channel_country.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-country', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86133 => [[['_route' => 'api.sales_channel_currency.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-currency', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86206 => [[['_route' => 'api.sales_channel_domain.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-domain', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86280 => [[['_route' => 'api.sales_channel_language.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86361 => [[['_route' => 'api.sales_channel_payment_method.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-payment-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86443 => [[['_route' => 'api.sales_channel_shipping_method.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86523 => [[['_route' => 'api.sales_channel_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86595 => [[['_route' => 'api.sales_channel_type.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86674 => [[['_route' => 'api.sales_channel_type_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'sales-channel-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86754 => [[['_route' => 'api.salutation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'salutation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86833 => [[['_route' => 'api.salutation_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'salutation-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86918 => [[['_route' => 'api.scheduled_task.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'scheduled-task', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        86988 => [[['_route' => 'api.script.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'script', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87065 => [[['_route' => 'api.seo_url.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'seo-url', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87141 => [[['_route' => 'api.seo_url_template.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'seo-url-template', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87226 => [[['_route' => 'api.shipping_method.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'shipping-method', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87302 => [[['_route' => 'api.shipping_method_price.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'shipping-method-price', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87374 => [[['_route' => 'api.shipping_method_tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'shipping-method-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87450 => [[['_route' => 'api.shipping_method_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'shipping-method-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87528 => [[['_route' => 'api.snippet.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'snippet', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87599 => [[['_route' => 'api.snippet_set.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'snippet-set', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87682 => [[['_route' => 'api.state_machine.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'state-machine', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87760 => [[['_route' => 'api.state_machine_history.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'state-machine-history', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87834 => [[['_route' => 'api.state_machine_state.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'state-machine-state', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87913 => [[['_route' => 'api.state_machine_state_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'state-machine-state-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        87993 => [[['_route' => 'api.state_machine_transition.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'state-machine-transition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88065 => [[['_route' => 'api.state_machine_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'state-machine-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88163 => [[['_route' => 'api.swag_language_pack_language.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'swag-language-pack-language', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88242 => [[['_route' => 'api.system_config.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'system-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88318 => [[['_route' => 'api.tag.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88411 => [[['_route' => 'api.task_definition_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'task-definition-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88481 => [[['_route' => 'api.tax.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88563 => [[['_route' => 'api.tax_provider.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88642 => [[['_route' => 'api.tax_provider_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88716 => [[['_route' => 'api.tax_rule.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88791 => [[['_route' => 'api.tax_rule_type.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88870 => [[['_route' => 'api.tax_rule_type_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        88948 => [[['_route' => 'api.theme.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89024 => [[['_route' => 'api.theme_child.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89095 => [[['_route' => 'api.theme_media.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89175 => [[['_route' => 'api.theme_sales_channel.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89252 => [[['_route' => 'api.theme_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89331 => [[['_route' => 'api.unit.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89410 => [[['_route' => 'api.unit_translation.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89483 => [[['_route' => 'api.user.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'user', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89565 => [[['_route' => 'api.user_access_key.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89637 => [[['_route' => 'api.user_config.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89711 => [[['_route' => 'api.user_recovery.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89790 => [[['_route' => 'api.version.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89867 => [[['_route' => 'api.version_commit.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        89939 => [[['_route' => 'api.version_commit_data.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        90017 => [[['_route' => 'api.webhook.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        90095 => [[['_route' => 'api.webhook_event_log.aggregate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::aggregate', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null]],
        90118 => [[['_route' => 'api.acl_role.create', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['acl_role:create'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::upsertRole'], [], ['POST' => 0], null, false, false, null]],
        90140 => [
            [['_route' => 'api.acl_role.update', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['acl_role:update'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::updateRole'], ['roleId'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.acl_role.delete', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['acl_role:delete'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteRole'], ['roleId'], ['DELETE' => 0], null, false, true, null],
        ],
        90232 => [
            [['_route' => 'api.rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        90302 => [
            [['_route' => 'api.rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        90402 => [
            [['_route' => 'api.rule_condition.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule_condition.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.rule_condition.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        90472 => [
            [['_route' => 'api.rule_condition.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule_condition.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'rule-condition', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        90562 => [
            [['_route' => 'api.rule_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.rule_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        90632 => [
            [['_route' => 'api.rule_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'rule-tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        90730 => [
            [['_route' => 'api.tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        90800 => [
            [['_route' => 'api.tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tag', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        90914 => [
            [['_route' => 'api.task_definition_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'task-definition-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.task_definition_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'task-definition-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.task_definition_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'task-definition-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        90984 => [
            [['_route' => 'api.task_definition_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'task-definition-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.task_definition_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'task-definition-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        91072 => [
            [['_route' => 'api.tax.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        91142 => [
            [['_route' => 'api.tax.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        91241 => [
            [['_route' => 'api.tax_provider.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        91311 => [
            [['_route' => 'api.tax_provider.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-provider', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        91410 => [
            [['_route' => 'api.tax_provider_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        91480 => [
            [['_route' => 'api.tax_provider_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_provider_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-provider-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        91572 => [
            [['_route' => 'api.tax_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        91642 => [
            [['_route' => 'api.tax_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        91734 => [
            [['_route' => 'api.tax_rule_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        91804 => [
            [['_route' => 'api.tax_rule_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule-type', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        91903 => [
            [['_route' => 'api.tax_rule_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        91973 => [
            [['_route' => 'api.tax_rule_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule-type-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        92069 => [
            [['_route' => 'api.theme.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        92139 => [
            [['_route' => 'api.theme.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        92235 => [
            [['_route' => 'api.theme_child.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_child.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_child.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        92305 => [
            [['_route' => 'api.theme_child.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_child.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-child', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        92397 => [
            [['_route' => 'api.theme_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        92467 => [
            [['_route' => 'api.theme_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-media', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        92568 => [
            [['_route' => 'api.theme_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        92638 => [
            [['_route' => 'api.theme_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-sales-channel', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        92736 => [
            [['_route' => 'api.theme_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        92806 => [
            [['_route' => 'api.theme_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        92903 => [
            [['_route' => 'api.unit.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.unit.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        92973 => [
            [['_route' => 'api.unit.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'unit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        93072 => [
            [['_route' => 'api.unit_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.unit_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        93142 => [
            [['_route' => 'api.unit_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'unit-translation', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        93230 => [[['_route' => 'api.user.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        93296 => [[['_route' => 'api.user.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null]],
        93397 => [
            [['_route' => 'api.user_access_key.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_access_key.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.user_access_key.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        93467 => [
            [['_route' => 'api.user_access_key.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_access_key.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'user-access-key', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        93560 => [
            [['_route' => 'api.user_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.user_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        93630 => [
            [['_route' => 'api.user_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'user-config', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        93725 => [
            [['_route' => 'api.user_recovery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_recovery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.user_recovery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        93795 => [
            [['_route' => 'api.user_recovery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_recovery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'user-recovery', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        93820 => [[['_route' => 'api.user.delete', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['user:delete'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUser'], ['userId'], ['DELETE' => 0], null, false, true, null]],
        93855 => [[['_route' => 'api.user_access_keys.delete', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['user_access_key:delete'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUserAccessKey'], ['userId', 'id'], ['DELETE' => 0], null, false, true, null]],
        93882 => [[['_route' => 'api.user_role.delete', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['acl_user_role:delete'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUserRole'], ['userId', 'roleId'], ['DELETE' => 0], null, false, true, null]],
        93893 => [[['_route' => 'api.user.update', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['user:update'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::updateUser'], ['userId'], ['PATCH' => 0], null, false, true, null]],
        93904 => [[['_route' => 'api.user.create', '_routeScope' => ['api'], 'auth_required' => true, '_acl' => ['user:create'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::upsertUser'], [], ['POST' => 0], null, false, false, null]],
        93998 => [
            [['_route' => 'api.version.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        94068 => [
            [['_route' => 'api.version.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        94162 => [
            [['_route' => 'api.version_commit.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version_commit.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        94232 => [
            [['_route' => 'api.version_commit.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version-commit', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        94324 => [
            [['_route' => 'api.version_commit_data.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit_data.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version_commit_data.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        94394 => [
            [['_route' => 'api.version_commit_data.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit_data.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version-commit-data', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        94490 => [
            [['_route' => 'api.webhook.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.webhook.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.webhook.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        94560 => [
            [['_route' => 'api.webhook.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.webhook.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'webhook', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        94658 => [
            [['_route' => 'api.webhook_event_log.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.webhook_event_log.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.webhook_event_log.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        94728 => [
            [['_route' => 'api.webhook_event_log.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.webhook_event_log.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'webhook-event-log', '_routeScope' => ['api']], ['path'], ['POST' => 0], null, false, true, null],
        ],
        94755 => [[['_route' => 'api.integration.create', '_routeScope' => ['api'], '_acl' => ['integration:create'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\IntegrationController::upsertIntegration'], [], ['POST' => 0], null, false, false, null]],
        94774 => [
            [['_route' => 'api.integration.update', '_routeScope' => ['api'], '_acl' => ['integration:update'], '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\IntegrationController::updateIntegration'], ['integrationId'], ['PATCH' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
