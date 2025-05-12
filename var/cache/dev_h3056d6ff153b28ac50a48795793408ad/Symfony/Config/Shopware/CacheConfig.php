<?php

namespace Symfony\Config\Shopware;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'TaggingConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'InvalidationConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CacheConfig 
{
    private $redisPrefix;
    private $cacheCompression;
    private $cacheCompressionMethod;
    private $tagging;
    private $invalidation;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function redisPrefix($value): static
    {
        $this->_usedProperties['redisPrefix'] = true;
        $this->redisPrefix = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function cacheCompression($value): static
    {
        $this->_usedProperties['cacheCompression'] = true;
        $this->cacheCompression = $value;

        return $this;
    }

    /**
     * @default 'gzip'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cacheCompressionMethod($value): static
    {
        $this->_usedProperties['cacheCompressionMethod'] = true;
        $this->cacheCompressionMethod = $value;

        return $this;
    }

    /**
     * @deprecated The fine-grained cache "tagging" configuration is deprecated and will be removed with Shopware 6.7.0.0
    */
    public function tagging(array $value = []): \Symfony\Config\Shopware\Cache\TaggingConfig
    {
        if (null === $this->tagging) {
            $this->_usedProperties['tagging'] = true;
            $this->tagging = new \Symfony\Config\Shopware\Cache\TaggingConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "tagging()" has already been initialized. You cannot pass values the second time you call tagging().');
        }

        return $this->tagging;
    }

    public function invalidation(array $value = []): \Symfony\Config\Shopware\Cache\InvalidationConfig
    {
        if (null === $this->invalidation) {
            $this->_usedProperties['invalidation'] = true;
            $this->invalidation = new \Symfony\Config\Shopware\Cache\InvalidationConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "invalidation()" has already been initialized. You cannot pass values the second time you call invalidation().');
        }

        return $this->invalidation;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('redis_prefix', $value)) {
            $this->_usedProperties['redisPrefix'] = true;
            $this->redisPrefix = $value['redis_prefix'];
            unset($value['redis_prefix']);
        }

        if (array_key_exists('cache_compression', $value)) {
            $this->_usedProperties['cacheCompression'] = true;
            $this->cacheCompression = $value['cache_compression'];
            unset($value['cache_compression']);
        }

        if (array_key_exists('cache_compression_method', $value)) {
            $this->_usedProperties['cacheCompressionMethod'] = true;
            $this->cacheCompressionMethod = $value['cache_compression_method'];
            unset($value['cache_compression_method']);
        }

        if (array_key_exists('tagging', $value)) {
            $this->_usedProperties['tagging'] = true;
            $this->tagging = new \Symfony\Config\Shopware\Cache\TaggingConfig($value['tagging']);
            unset($value['tagging']);
        }

        if (array_key_exists('invalidation', $value)) {
            $this->_usedProperties['invalidation'] = true;
            $this->invalidation = new \Symfony\Config\Shopware\Cache\InvalidationConfig($value['invalidation']);
            unset($value['invalidation']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['redisPrefix'])) {
            $output['redis_prefix'] = $this->redisPrefix;
        }
        if (isset($this->_usedProperties['cacheCompression'])) {
            $output['cache_compression'] = $this->cacheCompression;
        }
        if (isset($this->_usedProperties['cacheCompressionMethod'])) {
            $output['cache_compression_method'] = $this->cacheCompressionMethod;
        }
        if (isset($this->_usedProperties['tagging'])) {
            $output['tagging'] = $this->tagging->toArray();
        }
        if (isset($this->_usedProperties['invalidation'])) {
            $output['invalidation'] = $this->invalidation->toArray();
        }

        return $output;
    }

}
