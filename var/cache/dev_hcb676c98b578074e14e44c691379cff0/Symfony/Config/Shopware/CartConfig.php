<?php

namespace Symfony\Config\Shopware;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Cart'.\DIRECTORY_SEPARATOR.'StorageConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CartConfig 
{
    private $compress;
    private $compressionMethod;
    private $expireDays;
    private $redisUrl;
    private $storage;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function compress($value): static
    {
        $this->_usedProperties['compress'] = true;
        $this->compress = $value;

        return $this;
    }

    /**
     * @default 'gzip'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function compressionMethod($value): static
    {
        $this->_usedProperties['compressionMethod'] = true;
        $this->compressionMethod = $value;

        return $this;
    }

    /**
     * @default 120
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function expireDays($value): static
    {
        $this->_usedProperties['expireDays'] = true;
        $this->expireDays = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function redisUrl($value): static
    {
        $this->_usedProperties['redisUrl'] = true;
        $this->redisUrl = $value;

        return $this;
    }

    public function storage(array $value = []): \Symfony\Config\Shopware\Cart\StorageConfig
    {
        if (null === $this->storage) {
            $this->_usedProperties['storage'] = true;
            $this->storage = new \Symfony\Config\Shopware\Cart\StorageConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "storage()" has already been initialized. You cannot pass values the second time you call storage().');
        }

        return $this->storage;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('compress', $value)) {
            $this->_usedProperties['compress'] = true;
            $this->compress = $value['compress'];
            unset($value['compress']);
        }

        if (array_key_exists('compression_method', $value)) {
            $this->_usedProperties['compressionMethod'] = true;
            $this->compressionMethod = $value['compression_method'];
            unset($value['compression_method']);
        }

        if (array_key_exists('expire_days', $value)) {
            $this->_usedProperties['expireDays'] = true;
            $this->expireDays = $value['expire_days'];
            unset($value['expire_days']);
        }

        if (array_key_exists('redis_url', $value)) {
            $this->_usedProperties['redisUrl'] = true;
            $this->redisUrl = $value['redis_url'];
            unset($value['redis_url']);
        }

        if (array_key_exists('storage', $value)) {
            $this->_usedProperties['storage'] = true;
            $this->storage = new \Symfony\Config\Shopware\Cart\StorageConfig($value['storage']);
            unset($value['storage']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['compress'])) {
            $output['compress'] = $this->compress;
        }
        if (isset($this->_usedProperties['compressionMethod'])) {
            $output['compression_method'] = $this->compressionMethod;
        }
        if (isset($this->_usedProperties['expireDays'])) {
            $output['expire_days'] = $this->expireDays;
        }
        if (isset($this->_usedProperties['redisUrl'])) {
            $output['redis_url'] = $this->redisUrl;
        }
        if (isset($this->_usedProperties['storage'])) {
            $output['storage'] = $this->storage->toArray();
        }

        return $output;
    }

}
