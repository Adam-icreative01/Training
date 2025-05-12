<?php

namespace ContainerRA4i1Tr;


class CartServiceGhost293df64 extends \Shopware\Core\Checkout\Cart\SalesChannel\CartService implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'calculator' => [parent::class, 'calculator', null, 530],
        "\0".parent::class."\0".'cart' => [parent::class, 'cart', null, 16],
        "\0".parent::class."\0".'cartFactory' => [parent::class, 'cartFactory', null, 530],
        "\0".parent::class."\0".'deleteRoute' => [parent::class, 'deleteRoute', null, 530],
        "\0".parent::class."\0".'eventDispatcher' => [parent::class, 'eventDispatcher', null, 530],
        "\0".parent::class."\0".'itemAddRoute' => [parent::class, 'itemAddRoute', null, 530],
        "\0".parent::class."\0".'itemRemoveRoute' => [parent::class, 'itemRemoveRoute', null, 530],
        "\0".parent::class."\0".'itemUpdateRoute' => [parent::class, 'itemUpdateRoute', null, 530],
        "\0".parent::class."\0".'loadRoute' => [parent::class, 'loadRoute', null, 530],
        "\0".parent::class."\0".'orderRoute' => [parent::class, 'orderRoute', null, 530],
        "\0".parent::class."\0".'persister' => [parent::class, 'persister', null, 530],
        'calculator' => [parent::class, 'calculator', null, 530],
        'cart' => [parent::class, 'cart', null, 16],
        'cartFactory' => [parent::class, 'cartFactory', null, 530],
        'deleteRoute' => [parent::class, 'deleteRoute', null, 530],
        'eventDispatcher' => [parent::class, 'eventDispatcher', null, 530],
        'itemAddRoute' => [parent::class, 'itemAddRoute', null, 530],
        'itemRemoveRoute' => [parent::class, 'itemRemoveRoute', null, 530],
        'itemUpdateRoute' => [parent::class, 'itemUpdateRoute', null, 530],
        'loadRoute' => [parent::class, 'loadRoute', null, 530],
        'orderRoute' => [parent::class, 'orderRoute', null, 530],
        'persister' => [parent::class, 'persister', null, 530],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('CartServiceGhost293df64', false)) {
    \class_alias(__NAMESPACE__.'\\CartServiceGhost293df64', 'CartServiceGhost293df64', false);
}

class SeoUrlRouteRegistryGhost56060ad extends \Shopware\Core\Content\Seo\SeoUrlRoute\SeoUrlRouteRegistry implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'definitionToRoutes' => [parent::class, 'definitionToRoutes', null, 16],
        "\0".parent::class."\0".'seoUrlRoutes' => [parent::class, 'seoUrlRoutes', null, 16],
        'definitionToRoutes' => [parent::class, 'definitionToRoutes', null, 16],
        'seoUrlRoutes' => [parent::class, 'seoUrlRoutes', null, 16],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('SeoUrlRouteRegistryGhost56060ad', false)) {
    \class_alias(__NAMESPACE__.'\\SeoUrlRouteRegistryGhost56060ad', 'SeoUrlRouteRegistryGhost56060ad', false);
}

class CacheInvalidatorGhost5517607 extends \Shopware\Core\Framework\Adapter\Cache\CacheInvalidator implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'adapters' => [parent::class, 'adapters', null, 530],
        "\0".parent::class."\0".'cache' => [parent::class, 'cache', null, 530],
        "\0".parent::class."\0".'delay' => [parent::class, 'delay', null, 530],
        "\0".parent::class."\0".'dispatcher' => [parent::class, 'dispatcher', null, 530],
        "\0".parent::class."\0".'environment' => [parent::class, 'environment', null, 530],
        "\0".parent::class."\0".'logger' => [parent::class, 'logger', null, 530],
        "\0".parent::class."\0".'requestStack' => [parent::class, 'requestStack', null, 530],
        'adapters' => [parent::class, 'adapters', null, 530],
        'cache' => [parent::class, 'cache', null, 530],
        'delay' => [parent::class, 'delay', null, 530],
        'dispatcher' => [parent::class, 'dispatcher', null, 530],
        'environment' => [parent::class, 'environment', null, 530],
        'logger' => [parent::class, 'logger', null, 530],
        'requestStack' => [parent::class, 'requestStack', null, 530],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('CacheInvalidatorGhost5517607', false)) {
    \class_alias(__NAMESPACE__.'\\CacheInvalidatorGhost5517607', 'CacheInvalidatorGhost5517607', false);
}

class AbstractInvalidatorStorageProxyD6f1bbb extends \Shopware\Core\Framework\Adapter\Cache\InvalidatorStorage\AbstractInvalidatorStorage implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [];

    public function store(array $tags): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->store(...\func_get_args());
        } else {
            throw new \BadMethodCallException('Cannot forward abstract method "Shopware\Core\Framework\Adapter\Cache\InvalidatorStorage\AbstractInvalidatorStorage::store()".');
        }
    }

    public function loadAndDelete(): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->loadAndDelete(...\func_get_args());
        }

        return throw new \BadMethodCallException('Cannot forward abstract method "Shopware\Core\Framework\Adapter\Cache\InvalidatorStorage\AbstractInvalidatorStorage::loadAndDelete()".');
    }
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('AbstractInvalidatorStorageProxyD6f1bbb', false)) {
    \class_alias(__NAMESPACE__.'\\AbstractInvalidatorStorageProxyD6f1bbb', 'AbstractInvalidatorStorageProxyD6f1bbb', false);
}

class CommandExecutorGhost86a0d45 extends \Shopware\Core\Framework\Plugin\Composer\CommandExecutor implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'application' => [parent::class, 'application', null, 530],
        "\0".parent::class."\0".'projectDir' => [parent::class, 'projectDir', null, 530],
        'application' => [parent::class, 'application', null, 530],
        'projectDir' => [parent::class, 'projectDir', null, 530],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('CommandExecutorGhost86a0d45', false)) {
    \class_alias(__NAMESPACE__.'\\CommandExecutorGhost86a0d45', 'CommandExecutorGhost86a0d45', false);
}

class StoreServiceGhost38009fe extends \Shopware\Core\Framework\Store\Services\StoreService implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'userRepository' => [parent::class, 'userRepository', null, 530],
        'userRepository' => [parent::class, 'userRepository', null, 530],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('StoreServiceGhost38009fe', false)) {
    \class_alias(__NAMESPACE__.'\\StoreServiceGhost38009fe', 'StoreServiceGhost38009fe', false);
}

class MeterGhost388291b extends \Shopware\Core\Framework\Telemetry\Metrics\Meter implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'environment' => [parent::class, 'environment', null, 530],
        "\0".parent::class."\0".'logger' => [parent::class, 'logger', null, 530],
        "\0".parent::class."\0".'metricConfigProvider' => [parent::class, 'metricConfigProvider', null, 530],
        "\0".parent::class."\0".'transports' => [parent::class, 'transports', null, 530],
        'environment' => [parent::class, 'environment', null, 530],
        'logger' => [parent::class, 'logger', null, 530],
        'metricConfigProvider' => [parent::class, 'metricConfigProvider', null, 530],
        'transports' => [parent::class, 'transports', null, 530],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('MeterGhost388291b', false)) {
    \class_alias(__NAMESPACE__.'\\MeterGhost388291b', 'MeterGhost388291b', false);
}

class TransportCollectionProxy44097ad extends \Shopware\Core\Framework\Telemetry\Metrics\Transport\TransportCollection implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'transports' => [parent::class, 'transports', null, 530],
        'transports' => [parent::class, 'transports', null, 530],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('TransportCollectionProxy44097ad', false)) {
    \class_alias(__NAMESPACE__.'\\TransportCollectionProxy44097ad', 'TransportCollectionProxy44097ad', false);
}

class HookableEventFactoryGhostD8be1f1 extends \Shopware\Core\Framework\Webhook\Hookable\HookableEventFactory implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'eventEncoder' => [parent::class, 'eventEncoder', null, 530],
        "\0".parent::class."\0".'writeResultMerger' => [parent::class, 'writeResultMerger', null, 530],
        'eventEncoder' => [parent::class, 'eventEncoder', null, 530],
        'writeResultMerger' => [parent::class, 'writeResultMerger', null, 530],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('HookableEventFactoryGhostD8be1f1', false)) {
    \class_alias(__NAMESPACE__.'\\HookableEventFactoryGhostD8be1f1', 'HookableEventFactoryGhostD8be1f1', false);
}

class WebhookManagerGhost9a870d1 extends \Shopware\Core\Framework\Webhook\Service\WebhookManager implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'appLocaleProvider' => [parent::class, 'appLocaleProvider', null, 530],
        "\0".parent::class."\0".'appPayloadServiceHelper' => [parent::class, 'appPayloadServiceHelper', null, 530],
        "\0".parent::class."\0".'bus' => [parent::class, 'bus', null, 530],
        "\0".parent::class."\0".'connection' => [parent::class, 'connection', null, 530],
        "\0".parent::class."\0".'eventFactory' => [parent::class, 'eventFactory', null, 530],
        "\0".parent::class."\0".'guzzle' => [parent::class, 'guzzle', null, 530],
        "\0".parent::class."\0".'isAdminWorkerEnabled' => [parent::class, 'isAdminWorkerEnabled', null, 530],
        "\0".parent::class."\0".'privileges' => [parent::class, 'privileges', null, 16],
        "\0".parent::class."\0".'shopUrl' => [parent::class, 'shopUrl', null, 530],
        "\0".parent::class."\0".'shopwareVersion' => [parent::class, 'shopwareVersion', null, 530],
        "\0".parent::class."\0".'webhookLoader' => [parent::class, 'webhookLoader', null, 530],
        "\0".parent::class."\0".'webhooks' => [parent::class, 'webhooks', null, 16],
        'appLocaleProvider' => [parent::class, 'appLocaleProvider', null, 530],
        'appPayloadServiceHelper' => [parent::class, 'appPayloadServiceHelper', null, 530],
        'bus' => [parent::class, 'bus', null, 530],
        'connection' => [parent::class, 'connection', null, 530],
        'eventFactory' => [parent::class, 'eventFactory', null, 530],
        'guzzle' => [parent::class, 'guzzle', null, 530],
        'isAdminWorkerEnabled' => [parent::class, 'isAdminWorkerEnabled', null, 530],
        'privileges' => [parent::class, 'privileges', null, 16],
        'shopUrl' => [parent::class, 'shopUrl', null, 530],
        'shopwareVersion' => [parent::class, 'shopwareVersion', null, 530],
        'webhookLoader' => [parent::class, 'webhookLoader', null, 530],
        'webhooks' => [parent::class, 'webhooks', null, 16],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('WebhookManagerGhost9a870d1', false)) {
    \class_alias(__NAMESPACE__.'\\WebhookManagerGhost9a870d1', 'WebhookManagerGhost9a870d1', false);
}

class SnippetFileCollectionProxyA628dd5 extends \Shopware\Core\System\Snippet\Files\SnippetFileCollection implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'elements' => [parent::class, 'elements', null, 8],
        "\0".'*'."\0".'extensions' => [parent::class, 'extensions', null, 8],
        "\0".parent::class."\0".'mapping' => [parent::class, 'mapping', null, 16],
        'elements' => [parent::class, 'elements', null, 8],
        'extensions' => [parent::class, 'extensions', null, 8],
        'mapping' => [parent::class, 'mapping', null, 16],
    ];

    public function add($snippetFile): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->add(...\func_get_args());
        } else {
            parent::add(...\func_get_args());
        }
    }

    public function get($key): ?\Shopware\Core\System\Snippet\Files\AbstractSnippetFile
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->get(...\func_get_args());
        }

        return parent::get(...\func_get_args());
    }

    public function set($key, $element): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->set(...\func_get_args());
        } else {
            parent::set(...\func_get_args());
        }
    }

    public function clear(): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->clear(...\func_get_args());
        } else {
            parent::clear(...\func_get_args());
        }
    }

    public function remove($key): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->remove(...\func_get_args());
        } else {
            parent::remove(...\func_get_args());
        }
    }

    public function getByName(string $key): ?\Shopware\Core\System\Snippet\Files\AbstractSnippetFile
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getByName(...\func_get_args());
        }

        return parent::getByName(...\func_get_args());
    }

    public function getFilesArray(bool $isBase = true): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getFilesArray(...\func_get_args());
        }

        return parent::getFilesArray(...\func_get_args());
    }

    public function toArray(): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->toArray(...\func_get_args());
        }

        return parent::toArray(...\func_get_args());
    }

    public function getIsoList(): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getIsoList(...\func_get_args());
        }

        return parent::getIsoList(...\func_get_args());
    }

    public function getSnippetFilesByIso(string $iso): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getSnippetFilesByIso(...\func_get_args());
        }

        return parent::getSnippetFilesByIso(...\func_get_args());
    }

    public function getBaseFileByIso(string $iso): \Shopware\Core\System\Snippet\Files\AbstractSnippetFile
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getBaseFileByIso(...\func_get_args());
        }

        return parent::getBaseFileByIso(...\func_get_args());
    }

    public function getApiAlias(): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getApiAlias(...\func_get_args());
        }

        return parent::getApiAlias(...\func_get_args());
    }

    public function hasFileForPath(string $filePath): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hasFileForPath(...\func_get_args());
        }

        return parent::hasFileForPath(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function count(): int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->count(...\func_get_args());
        }

        return parent::count(...\func_get_args());
    }

    public function getKeys(): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getKeys(...\func_get_args());
        }

        return parent::getKeys(...\func_get_args());
    }

    public function has($key): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->has(...\func_get_args());
        }

        return parent::has(...\func_get_args());
    }

    public function map(\Closure $closure): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->map(...\func_get_args());
        }

        return parent::map(...\func_get_args());
    }

    public function fmap(\Closure $closure): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->fmap(...\func_get_args());
        }

        return parent::fmap(...\func_get_args());
    }

    public function sort(\Closure $closure): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sort(...\func_get_args());
        } else {
            parent::sort(...\func_get_args());
        }
    }

    public function getElements(): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getElements(...\func_get_args());
        }

        return parent::getElements(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function jsonSerialize(): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->jsonSerialize(...\func_get_args());
        }

        return parent::jsonSerialize(...\func_get_args());
    }

    public function addExtension(string $name, \Shopware\Core\Framework\Struct\Struct $extension): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->addExtension(...\func_get_args());
        } else {
            parent::addExtension(...\func_get_args());
        }
    }

    public function addArrayExtension(string $name, array $extension): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->addArrayExtension(...\func_get_args());
        } else {
            parent::addArrayExtension(...\func_get_args());
        }
    }

    public function addExtensions(array $extensions): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->addExtensions(...\func_get_args());
        } else {
            parent::addExtensions(...\func_get_args());
        }
    }

    public function hasExtension(string $name): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hasExtension(...\func_get_args());
        }

        return parent::hasExtension(...\func_get_args());
    }

    public function hasExtensionOfType(string $name, string $type): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hasExtensionOfType(...\func_get_args());
        }

        return parent::hasExtensionOfType(...\func_get_args());
    }

    public function getExtensions(): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getExtensions(...\func_get_args());
        }

        return parent::getExtensions(...\func_get_args());
    }

    public function setExtensions(array $extensions): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setExtensions(...\func_get_args());
        } else {
            parent::setExtensions(...\func_get_args());
        }
    }

    public function removeExtension(string $name): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->removeExtension(...\func_get_args());
        } else {
            parent::removeExtension(...\func_get_args());
        }
    }

    public function getVars(): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getVars(...\func_get_args());
        }

        return parent::getVars(...\func_get_args());
    }
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('SnippetFileCollectionProxyA628dd5', false)) {
    \class_alias(__NAMESPACE__.'\\SnippetFileCollectionProxyA628dd5', 'SnippetFileCollectionProxyA628dd5', false);
}

class SnippetServiceGhost378195a extends \Shopware\Core\System\Snippet\SnippetService implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'connection' => [parent::class, 'connection', null, 530],
        "\0".parent::class."\0".'container' => [parent::class, 'container', null, 530],
        "\0".parent::class."\0".'salesChannelThemeLoader' => [parent::class, 'salesChannelThemeLoader', null, 530],
        "\0".parent::class."\0".'snippetFileCollection' => [parent::class, 'snippetFileCollection', null, 530],
        "\0".parent::class."\0".'snippetFilterFactory' => [parent::class, 'snippetFilterFactory', null, 530],
        "\0".parent::class."\0".'snippetRepository' => [parent::class, 'snippetRepository', null, 530],
        "\0".parent::class."\0".'snippetSetRepository' => [parent::class, 'snippetSetRepository', null, 530],
        'connection' => [parent::class, 'connection', null, 530],
        'container' => [parent::class, 'container', null, 530],
        'salesChannelThemeLoader' => [parent::class, 'salesChannelThemeLoader', null, 530],
        'snippetFileCollection' => [parent::class, 'snippetFileCollection', null, 530],
        'snippetFilterFactory' => [parent::class, 'snippetFilterFactory', null, 530],
        'snippetRepository' => [parent::class, 'snippetRepository', null, 530],
        'snippetSetRepository' => [parent::class, 'snippetSetRepository', null, 530],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('SnippetServiceGhost378195a', false)) {
    \class_alias(__NAMESPACE__.'\\SnippetServiceGhost378195a', 'SnippetServiceGhost378195a', false);
}

class SystemConfigServiceGhost45bc75e extends \Shopware\Core\System\SystemConfig\SystemConfigService implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'appMapping' => [parent::class, 'appMapping', null, 16],
        "\0".parent::class."\0".'configReader' => [parent::class, 'configReader', null, 530],
        "\0".parent::class."\0".'connection' => [parent::class, 'connection', null, 530],
        "\0".parent::class."\0".'dispatcher' => [parent::class, 'dispatcher', null, 530],
        "\0".parent::class."\0".'fineGrainedCache' => [parent::class, 'fineGrainedCache', null, 530],
        "\0".parent::class."\0".'keys' => [parent::class, 'keys', null, 16],
        "\0".parent::class."\0".'loader' => [parent::class, 'loader', null, 530],
        "\0".parent::class."\0".'symfonySystemConfigService' => [parent::class, 'symfonySystemConfigService', null, 530],
        "\0".parent::class."\0".'traces' => [parent::class, 'traces', null, 16],
        'appMapping' => [parent::class, 'appMapping', null, 16],
        'configReader' => [parent::class, 'configReader', null, 530],
        'connection' => [parent::class, 'connection', null, 530],
        'dispatcher' => [parent::class, 'dispatcher', null, 530],
        'fineGrainedCache' => [parent::class, 'fineGrainedCache', null, 530],
        'keys' => [parent::class, 'keys', null, 16],
        'loader' => [parent::class, 'loader', null, 530],
        'symfonySystemConfigService' => [parent::class, 'symfonySystemConfigService', null, 530],
        'traces' => [parent::class, 'traces', null, 16],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('SystemConfigServiceGhost45bc75e', false)) {
    \class_alias(__NAMESPACE__.'\\SystemConfigServiceGhost45bc75e', 'SystemConfigServiceGhost45bc75e', false);
}

class EntityDispatchServiceGhost2a405f5 extends \Shopware\Core\System\UsageData\Services\EntityDispatchService implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'appConfig' => [parent::class, 'appConfig', null, 530],
        "\0".parent::class."\0".'collectionEnabled' => [parent::class, 'collectionEnabled', null, 530],
        "\0".parent::class."\0".'consentService' => [parent::class, 'consentService', null, 530],
        "\0".parent::class."\0".'entityDefinitionService' => [parent::class, 'entityDefinitionService', null, 530],
        "\0".parent::class."\0".'gatewayStatusService' => [parent::class, 'gatewayStatusService', null, 530],
        "\0".parent::class."\0".'messageBus' => [parent::class, 'messageBus', null, 530],
        "\0".parent::class."\0".'shopIdProvider' => [parent::class, 'shopIdProvider', null, 530],
        "\0".parent::class."\0".'systemConfigService' => [parent::class, 'systemConfigService', null, 530],
        'appConfig' => [parent::class, 'appConfig', null, 530],
        'collectionEnabled' => [parent::class, 'collectionEnabled', null, 530],
        'consentService' => [parent::class, 'consentService', null, 530],
        'entityDefinitionService' => [parent::class, 'entityDefinitionService', null, 530],
        'gatewayStatusService' => [parent::class, 'gatewayStatusService', null, 530],
        'messageBus' => [parent::class, 'messageBus', null, 530],
        'shopIdProvider' => [parent::class, 'shopIdProvider', null, 530],
        'systemConfigService' => [parent::class, 'systemConfigService', null, 530],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('EntityDispatchServiceGhost2a405f5', false)) {
    \class_alias(__NAMESPACE__.'\\EntityDispatchServiceGhost2a405f5', 'EntityDispatchServiceGhost2a405f5', false);
}

class CacheTracerGhost3acec3f extends \Shopware\Storefront\Framework\Cache\CacheTracer implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'decorated' => [parent::class, 'decorated', null, 530],
        "\0".parent::class."\0".'themeConfigAccessor' => [parent::class, 'themeConfigAccessor', null, 530],
        'decorated' => [parent::class, 'decorated', null, 530],
        'themeConfigAccessor' => [parent::class, 'themeConfigAccessor', null, 530],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('CacheTracerGhost3acec3f', false)) {
    \class_alias(__NAMESPACE__.'\\CacheTracerGhost3acec3f', 'CacheTracerGhost3acec3f', false);
}

class CacheTracerGhostBb467a7 extends \Shopware\Core\Framework\Adapter\Cache\CacheTracer implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'collection' => [parent::class, 'collection', null, 530],
        "\0".parent::class."\0".'config' => [parent::class, 'config', null, 530],
        "\0".parent::class."\0".'translator' => [parent::class, 'translator', null, 530],
        'collection' => [parent::class, 'collection', null, 530],
        'config' => [parent::class, 'config', null, 530],
        'translator' => [parent::class, 'translator', null, 530],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('CacheTracerGhostBb467a7', false)) {
    \class_alias(__NAMESPACE__.'\\CacheTracerGhostBb467a7', 'CacheTracerGhostBb467a7', false);
}

class ResolvedConfigLoaderGhost7efaee0 extends \Shopware\Storefront\Theme\ResolvedConfigLoader implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'repository' => [parent::class, 'repository', null, 530],
        "\0".parent::class."\0".'service' => [parent::class, 'service', null, 530],
        'repository' => [parent::class, 'repository', null, 530],
        'service' => [parent::class, 'service', null, 530],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ResolvedConfigLoaderGhost7efaee0', false)) {
    \class_alias(__NAMESPACE__.'\\ResolvedConfigLoaderGhost7efaee0', 'ResolvedConfigLoaderGhost7efaee0', false);
}

class SeedingThemePathBuilderGhostCecd941 extends \Shopware\Storefront\Theme\SeedingThemePathBuilder implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'systemConfigService' => [parent::class, 'systemConfigService', null, 530],
        'systemConfigService' => [parent::class, 'systemConfigService', null, 530],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('SeedingThemePathBuilderGhostCecd941', false)) {
    \class_alias(__NAMESPACE__.'\\SeedingThemePathBuilderGhostCecd941', 'SeedingThemePathBuilderGhostCecd941', false);
}

class ArrayIteratorProxyF4e156a extends \ArrayIterator implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [];

    public function __construct(array|object $array = [], int $flags = 0)
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->__construct(...\func_get_args());
        }

        return parent::__construct(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function offsetExists(mixed $key)
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->offsetExists(...\func_get_args());
        }

        return parent::offsetExists(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function offsetGet(mixed $key)
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->offsetGet(...\func_get_args());
        }

        return parent::offsetGet(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function offsetSet(mixed $key, mixed $value)
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->offsetSet(...\func_get_args());
        }

        return parent::offsetSet(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function offsetUnset(mixed $key)
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->offsetUnset(...\func_get_args());
        }

        return parent::offsetUnset(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function append(mixed $value)
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->append(...\func_get_args());
        }

        return parent::append(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function getArrayCopy()
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getArrayCopy(...\func_get_args());
        }

        return parent::getArrayCopy(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function count()
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->count(...\func_get_args());
        }

        return parent::count(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function getFlags()
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getFlags(...\func_get_args());
        }

        return parent::getFlags(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function setFlags(int $flags)
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setFlags(...\func_get_args());
        }

        return parent::setFlags(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function asort(int $flags = \SORT_REGULAR)
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->asort(...\func_get_args());
        }

        return parent::asort(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function ksort(int $flags = \SORT_REGULAR)
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->ksort(...\func_get_args());
        }

        return parent::ksort(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function uasort(callable $callback)
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->uasort(...\func_get_args());
        }

        return parent::uasort(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function uksort(callable $callback)
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->uksort(...\func_get_args());
        }

        return parent::uksort(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function natsort()
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->natsort(...\func_get_args());
        }

        return parent::natsort(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function natcasesort()
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->natcasesort(...\func_get_args());
        }

        return parent::natcasesort(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function unserialize(string $data)
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->unserialize(...\func_get_args());
        }

        return parent::unserialize(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function serialize()
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->serialize(...\func_get_args());
        }

        return parent::serialize(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function rewind()
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rewind(...\func_get_args());
        }

        return parent::rewind(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function current()
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->current(...\func_get_args());
        }

        return parent::current(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function key()
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->key(...\func_get_args());
        }

        return parent::key(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function next()
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->next(...\func_get_args());
        }

        return parent::next(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function valid()
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->valid(...\func_get_args());
        }

        return parent::valid(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function seek(int $offset)
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->seek(...\func_get_args());
        }

        return parent::seek(...\func_get_args());
    }

    #[\ReturnTypeWillChange] public function __debugInfo()
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->__debugInfo(...\func_get_args());
        }

        return parent::__debugInfo(...\func_get_args());
    }
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ArrayIteratorProxyF4e156a', false)) {
    \class_alias(__NAMESPACE__.'\\ArrayIteratorProxyF4e156a', 'ArrayIteratorProxyF4e156a', false);
}

class RequestPayloadValueResolverGhost8c80924 extends \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestPayloadValueResolver implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'serializer' => [parent::class, 'serializer', null, 530],
        "\0".parent::class."\0".'translationDomain' => [parent::class, 'translationDomain', null, 16],
        "\0".parent::class."\0".'translator' => [parent::class, 'translator', null, 530],
        "\0".parent::class."\0".'validator' => [parent::class, 'validator', null, 530],
        'serializer' => [parent::class, 'serializer', null, 530],
        'translationDomain' => [parent::class, 'translationDomain', null, 16],
        'translator' => [parent::class, 'translator', null, 530],
        'validator' => [parent::class, 'validator', null, 530],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('RequestPayloadValueResolverGhost8c80924', false)) {
    \class_alias(__NAMESPACE__.'\\RequestPayloadValueResolverGhost8c80924', 'RequestPayloadValueResolverGhost8c80924', false);
}

class ClientGhost9ffdbb4 extends \GuzzleHttp\Client implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'config' => [parent::class, 'config', null, 16],
        'config' => [parent::class, 'config', null, 16],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ClientGhost9ffdbb4', false)) {
    \class_alias(__NAMESPACE__.'\\ClientGhost9ffdbb4', 'ClientGhost9ffdbb4', false);
}

class FallbackUrlPackageGhostC234807 extends \Shopware\Core\Framework\Adapter\Asset\FallbackUrlPackage implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'requestStack' => [parent::class, 'requestStack', null, 530],
        "\0".'Symfony\\Component\\Asset\\Package'."\0".'context' => ['Symfony\\Component\\Asset\\Package', 'context', null, 16],
        "\0".'Symfony\\Component\\Asset\\Package'."\0".'versionStrategy' => ['Symfony\\Component\\Asset\\Package', 'versionStrategy', null, 16],
        "\0".'Symfony\\Component\\Asset\\UrlPackage'."\0".'baseUrls' => ['Symfony\\Component\\Asset\\UrlPackage', 'baseUrls', null, 16],
        "\0".'Symfony\\Component\\Asset\\UrlPackage'."\0".'sslPackage' => ['Symfony\\Component\\Asset\\UrlPackage', 'sslPackage', null, 16],
        'baseUrls' => ['Symfony\\Component\\Asset\\UrlPackage', 'baseUrls', null, 16],
        'context' => ['Symfony\\Component\\Asset\\Package', 'context', null, 16],
        'requestStack' => [parent::class, 'requestStack', null, 530],
        'sslPackage' => ['Symfony\\Component\\Asset\\UrlPackage', 'sslPackage', null, 16],
        'versionStrategy' => ['Symfony\\Component\\Asset\\Package', 'versionStrategy', null, 16],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('FallbackUrlPackageGhostC234807', false)) {
    \class_alias(__NAMESPACE__.'\\FallbackUrlPackageGhostC234807', 'FallbackUrlPackageGhostC234807', false);
}

class ThemeAssetPackageGhostE07d4ca extends \Shopware\Storefront\Theme\ThemeAssetPackage implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'Shopware\\Core\\Framework\\Adapter\\Asset\\FallbackUrlPackage'."\0".'requestStack' => ['Shopware\\Core\\Framework\\Adapter\\Asset\\FallbackUrlPackage', 'requestStack', null, 530],
        "\0".parent::class."\0".'requestStack' => [parent::class, 'requestStack', null, 530],
        "\0".parent::class."\0".'themePathBuilder' => [parent::class, 'themePathBuilder', null, 530],
        "\0".'Symfony\\Component\\Asset\\Package'."\0".'context' => ['Symfony\\Component\\Asset\\Package', 'context', null, 16],
        "\0".'Symfony\\Component\\Asset\\Package'."\0".'versionStrategy' => ['Symfony\\Component\\Asset\\Package', 'versionStrategy', null, 16],
        "\0".'Symfony\\Component\\Asset\\UrlPackage'."\0".'baseUrls' => ['Symfony\\Component\\Asset\\UrlPackage', 'baseUrls', null, 16],
        "\0".'Symfony\\Component\\Asset\\UrlPackage'."\0".'sslPackage' => ['Symfony\\Component\\Asset\\UrlPackage', 'sslPackage', null, 16],
        'baseUrls' => ['Symfony\\Component\\Asset\\UrlPackage', 'baseUrls', null, 16],
        'context' => ['Symfony\\Component\\Asset\\Package', 'context', null, 16],
        'requestStack' => [parent::class, 'requestStack', null, 530],
        'sslPackage' => ['Symfony\\Component\\Asset\\UrlPackage', 'sslPackage', null, 16],
        'themePathBuilder' => [parent::class, 'themePathBuilder', null, 530],
        'versionStrategy' => ['Symfony\\Component\\Asset\\Package', 'versionStrategy', null, 16],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ThemeAssetPackageGhostE07d4ca', false)) {
    \class_alias(__NAMESPACE__.'\\ThemeAssetPackageGhostE07d4ca', 'ThemeAssetPackageGhostE07d4ca', false);
}

class MySQLInvalidatorStorageGhost37dbbf6 extends \Shopware\Core\Framework\Adapter\Cache\InvalidatorStorage\MySQLInvalidatorStorage implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'connection' => [parent::class, 'connection', null, 530],
        "\0".parent::class."\0".'debug' => [parent::class, 'debug', null, 530],
        "\0".parent::class."\0".'logger' => [parent::class, 'logger', null, 530],
        'connection' => [parent::class, 'connection', null, 530],
        'debug' => [parent::class, 'debug', null, 530],
        'logger' => [parent::class, 'logger', null, 530],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('MySQLInvalidatorStorageGhost37dbbf6', false)) {
    \class_alias(__NAMESPACE__.'\\MySQLInvalidatorStorageGhost37dbbf6', 'MySQLInvalidatorStorageGhost37dbbf6', false);
}

class RedisInvalidatorStorageGhost6e7d600 extends \Shopware\Core\Framework\Adapter\Cache\InvalidatorStorage\RedisInvalidatorStorage implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'redis' => [parent::class, 'redis', null, 16],
        'redis' => [parent::class, 'redis', null, 16],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('RedisInvalidatorStorageGhost6e7d600', false)) {
    \class_alias(__NAMESPACE__.'\\RedisInvalidatorStorageGhost6e7d600', 'RedisInvalidatorStorageGhost6e7d600', false);
}

class ClientProxyA266ef4 extends \OpenSearch\Client implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'asyncSearch' => [parent::class, 'asyncSearch', null, 8],
        "\0".'*'."\0".'cat' => [parent::class, 'cat', null, 8],
        "\0".'*'."\0".'cluster' => [parent::class, 'cluster', null, 8],
        "\0".'*'."\0".'danglingIndices' => [parent::class, 'danglingIndices', null, 8],
        "\0".'*'."\0".'dataFrameTransformDeprecated' => [parent::class, 'dataFrameTransformDeprecated', null, 8],
        "\0".'*'."\0".'endpoints' => [parent::class, 'endpoints', null, 8],
        "\0".'*'."\0".'indices' => [parent::class, 'indices', null, 8],
        "\0".'*'."\0".'ingest' => [parent::class, 'ingest', null, 8],
        "\0".'*'."\0".'knn' => [parent::class, 'knn', null, 8],
        "\0".'*'."\0".'ml' => [parent::class, 'ml', null, 8],
        "\0".'*'."\0".'monitoring' => [parent::class, 'monitoring', null, 8],
        "\0".'*'."\0".'nodes' => [parent::class, 'nodes', null, 8],
        "\0".'*'."\0".'notifications' => [parent::class, 'notifications', null, 8],
        "\0".'*'."\0".'observability' => [parent::class, 'observability', null, 8],
        "\0".'*'."\0".'params' => [parent::class, 'params', null, 8],
        "\0".'*'."\0".'ppl' => [parent::class, 'ppl', null, 8],
        "\0".'*'."\0".'query' => [parent::class, 'query', null, 8],
        "\0".'*'."\0".'registeredNamespaces' => [parent::class, 'registeredNamespaces', null, 8],
        "\0".'*'."\0".'remoteStore' => [parent::class, 'remoteStore', null, 8],
        "\0".'*'."\0".'rollups' => [parent::class, 'rollups', null, 8],
        "\0".'*'."\0".'searchPipeline' => [parent::class, 'searchPipeline', null, 8],
        "\0".'*'."\0".'searchableSnapshots' => [parent::class, 'searchableSnapshots', null, 8],
        "\0".'*'."\0".'security' => [parent::class, 'security', null, 8],
        "\0".'*'."\0".'snapshot' => [parent::class, 'snapshot', null, 8],
        "\0".'*'."\0".'sql' => [parent::class, 'sql', null, 8],
        "\0".'*'."\0".'ssl' => [parent::class, 'ssl', null, 8],
        "\0".'*'."\0".'tasks' => [parent::class, 'tasks', null, 8],
        "\0".'*'."\0".'transforms' => [parent::class, 'transforms', null, 8],
        'asyncSearch' => [parent::class, 'asyncSearch', null, 8],
        'cat' => [parent::class, 'cat', null, 8],
        'cluster' => [parent::class, 'cluster', null, 8],
        'danglingIndices' => [parent::class, 'danglingIndices', null, 8],
        'dataFrameTransformDeprecated' => [parent::class, 'dataFrameTransformDeprecated', null, 8],
        'endpoints' => [parent::class, 'endpoints', null, 8],
        'indices' => [parent::class, 'indices', null, 8],
        'ingest' => [parent::class, 'ingest', null, 8],
        'knn' => [parent::class, 'knn', null, 8],
        'ml' => [parent::class, 'ml', null, 8],
        'monitoring' => [parent::class, 'monitoring', null, 8],
        'nodes' => [parent::class, 'nodes', null, 8],
        'notifications' => [parent::class, 'notifications', null, 8],
        'observability' => [parent::class, 'observability', null, 8],
        'params' => [parent::class, 'params', null, 8],
        'ppl' => [parent::class, 'ppl', null, 8],
        'query' => [parent::class, 'query', null, 8],
        'registeredNamespaces' => [parent::class, 'registeredNamespaces', null, 8],
        'remoteStore' => [parent::class, 'remoteStore', null, 8],
        'rollups' => [parent::class, 'rollups', null, 8],
        'searchPipeline' => [parent::class, 'searchPipeline', null, 8],
        'searchableSnapshots' => [parent::class, 'searchableSnapshots', null, 8],
        'security' => [parent::class, 'security', null, 8],
        'snapshot' => [parent::class, 'snapshot', null, 8],
        'sql' => [parent::class, 'sql', null, 8],
        'ssl' => [parent::class, 'ssl', null, 8],
        'tasks' => [parent::class, 'tasks', null, 8],
        'transforms' => [parent::class, 'transforms', null, 8],
        'transport' => [parent::class, 'transport', null, 4],
    ];

    public function exists(array $params = []): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->exists(...\func_get_args());
        }

        return parent::exists(...\func_get_args());
    }

    public function existsSource(array $params = []): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->existsSource(...\func_get_args());
        }

        return parent::existsSource(...\func_get_args());
    }

    public function ping(array $params = []): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->ping(...\func_get_args());
        }

        return parent::ping(...\func_get_args());
    }

    public function asyncSearch(): \OpenSearch\Namespaces\AsyncSearchNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->asyncSearch(...\func_get_args());
        }

        return parent::asyncSearch(...\func_get_args());
    }

    public function cat(): \OpenSearch\Namespaces\CatNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->cat(...\func_get_args());
        }

        return parent::cat(...\func_get_args());
    }

    public function cluster(): \OpenSearch\Namespaces\ClusterNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->cluster(...\func_get_args());
        }

        return parent::cluster(...\func_get_args());
    }

    public function danglingIndices(): \OpenSearch\Namespaces\DanglingIndicesNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->danglingIndices(...\func_get_args());
        }

        return parent::danglingIndices(...\func_get_args());
    }

    public function dataFrameTransformDeprecated(): \OpenSearch\Namespaces\DataFrameTransformDeprecatedNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->dataFrameTransformDeprecated(...\func_get_args());
        }

        return parent::dataFrameTransformDeprecated(...\func_get_args());
    }

    public function indices(): \OpenSearch\Namespaces\IndicesNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->indices(...\func_get_args());
        }

        return parent::indices(...\func_get_args());
    }

    public function ingest(): \OpenSearch\Namespaces\IngestNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->ingest(...\func_get_args());
        }

        return parent::ingest(...\func_get_args());
    }

    public function knn(): \OpenSearch\Namespaces\KnnNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->knn(...\func_get_args());
        }

        return parent::knn(...\func_get_args());
    }

    public function ml(): \OpenSearch\Namespaces\MlNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->ml(...\func_get_args());
        }

        return parent::ml(...\func_get_args());
    }

    public function monitoring(): \OpenSearch\Namespaces\MonitoringNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->monitoring(...\func_get_args());
        }

        return parent::monitoring(...\func_get_args());
    }

    public function nodes(): \OpenSearch\Namespaces\NodesNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->nodes(...\func_get_args());
        }

        return parent::nodes(...\func_get_args());
    }

    public function notifications(): \OpenSearch\Namespaces\NotificationsNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->notifications(...\func_get_args());
        }

        return parent::notifications(...\func_get_args());
    }

    public function observability(): \OpenSearch\Namespaces\ObservabilityNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->observability(...\func_get_args());
        }

        return parent::observability(...\func_get_args());
    }

    public function ppl(): \OpenSearch\Namespaces\PplNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->ppl(...\func_get_args());
        }

        return parent::ppl(...\func_get_args());
    }

    public function query(): \OpenSearch\Namespaces\QueryNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->query(...\func_get_args());
        }

        return parent::query(...\func_get_args());
    }

    public function remoteStore(): \OpenSearch\Namespaces\RemoteStoreNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->remoteStore(...\func_get_args());
        }

        return parent::remoteStore(...\func_get_args());
    }

    public function rollups(): \OpenSearch\Namespaces\RollupsNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rollups(...\func_get_args());
        }

        return parent::rollups(...\func_get_args());
    }

    public function searchPipeline(): \OpenSearch\Namespaces\SearchPipelineNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->searchPipeline(...\func_get_args());
        }

        return parent::searchPipeline(...\func_get_args());
    }

    public function searchableSnapshots(): \OpenSearch\Namespaces\SearchableSnapshotsNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->searchableSnapshots(...\func_get_args());
        }

        return parent::searchableSnapshots(...\func_get_args());
    }

    public function security(): \OpenSearch\Namespaces\SecurityNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->security(...\func_get_args());
        }

        return parent::security(...\func_get_args());
    }

    public function snapshot(): \OpenSearch\Namespaces\SnapshotNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->snapshot(...\func_get_args());
        }

        return parent::snapshot(...\func_get_args());
    }

    public function sql(): \OpenSearch\Namespaces\SqlNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sql(...\func_get_args());
        }

        return parent::sql(...\func_get_args());
    }

    public function ssl(): \OpenSearch\Namespaces\SslNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->ssl(...\func_get_args());
        }

        return parent::ssl(...\func_get_args());
    }

    public function tasks(): \OpenSearch\Namespaces\TasksNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->tasks(...\func_get_args());
        }

        return parent::tasks(...\func_get_args());
    }

    public function transforms(): \OpenSearch\Namespaces\TransformsNamespace
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->transforms(...\func_get_args());
        }

        return parent::transforms(...\func_get_args());
    }
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ClientProxyA266ef4', false)) {
    \class_alias(__NAMESPACE__.'\\ClientProxyA266ef4', 'ClientProxyA266ef4', false);
}

class ClientProxy9ffdbb4 extends \GuzzleHttp\Client implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'config' => [parent::class, 'config', null, 16],
        'config' => [parent::class, 'config', null, 16],
    ];

    public function sendAsync(\Psr\Http\Message\RequestInterface $request, array $options = []): \GuzzleHttp\Promise\PromiseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sendAsync(...\func_get_args());
        }

        return parent::sendAsync(...\func_get_args());
    }

    public function send(\Psr\Http\Message\RequestInterface $request, array $options = []): \Psr\Http\Message\ResponseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->send(...\func_get_args());
        }

        return parent::send(...\func_get_args());
    }

    public function sendRequest(\Psr\Http\Message\RequestInterface $request): \Psr\Http\Message\ResponseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sendRequest(...\func_get_args());
        }

        return parent::sendRequest(...\func_get_args());
    }

    public function requestAsync(string $method, $uri = '', array $options = []): \GuzzleHttp\Promise\PromiseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->requestAsync(...\func_get_args());
        }

        return parent::requestAsync(...\func_get_args());
    }

    public function request(string $method, $uri = '', array $options = []): \Psr\Http\Message\ResponseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->request(...\func_get_args());
        }

        return parent::request(...\func_get_args());
    }

    public function get($uri, array $options = []): \Psr\Http\Message\ResponseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->get(...\func_get_args());
        }

        return parent::get(...\func_get_args());
    }

    public function head($uri, array $options = []): \Psr\Http\Message\ResponseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->head(...\func_get_args());
        }

        return parent::head(...\func_get_args());
    }

    public function put($uri, array $options = []): \Psr\Http\Message\ResponseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->put(...\func_get_args());
        }

        return parent::put(...\func_get_args());
    }

    public function post($uri, array $options = []): \Psr\Http\Message\ResponseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->post(...\func_get_args());
        }

        return parent::post(...\func_get_args());
    }

    public function patch($uri, array $options = []): \Psr\Http\Message\ResponseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->patch(...\func_get_args());
        }

        return parent::patch(...\func_get_args());
    }

    public function delete($uri, array $options = []): \Psr\Http\Message\ResponseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->delete(...\func_get_args());
        }

        return parent::delete(...\func_get_args());
    }

    public function getAsync($uri, array $options = []): \GuzzleHttp\Promise\PromiseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getAsync(...\func_get_args());
        }

        return parent::getAsync(...\func_get_args());
    }

    public function headAsync($uri, array $options = []): \GuzzleHttp\Promise\PromiseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->headAsync(...\func_get_args());
        }

        return parent::headAsync(...\func_get_args());
    }

    public function putAsync($uri, array $options = []): \GuzzleHttp\Promise\PromiseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->putAsync(...\func_get_args());
        }

        return parent::putAsync(...\func_get_args());
    }

    public function postAsync($uri, array $options = []): \GuzzleHttp\Promise\PromiseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->postAsync(...\func_get_args());
        }

        return parent::postAsync(...\func_get_args());
    }

    public function patchAsync($uri, array $options = []): \GuzzleHttp\Promise\PromiseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->patchAsync(...\func_get_args());
        }

        return parent::patchAsync(...\func_get_args());
    }

    public function deleteAsync($uri, array $options = []): \GuzzleHttp\Promise\PromiseInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->deleteAsync(...\func_get_args());
        }

        return parent::deleteAsync(...\func_get_args());
    }
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ClientProxy9ffdbb4', false)) {
    \class_alias(__NAMESPACE__.'\\ClientProxy9ffdbb4', 'ClientProxy9ffdbb4', false);
}

class UriSignerGhostF8d6b62 extends \Symfony\Component\HttpFoundation\UriSigner implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'expirationParameter' => [parent::class, 'expirationParameter', null, 16],
        "\0".parent::class."\0".'hashParameter' => [parent::class, 'hashParameter', null, 16],
        "\0".parent::class."\0".'secret' => [parent::class, 'secret', null, 16],
        'expirationParameter' => [parent::class, 'expirationParameter', null, 16],
        'hashParameter' => [parent::class, 'hashParameter', null, 16],
        'secret' => [parent::class, 'secret', null, 16],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('UriSignerGhostF8d6b62', false)) {
    \class_alias(__NAMESPACE__.'\\UriSignerGhostF8d6b62', 'UriSignerGhostF8d6b62', false);
}
