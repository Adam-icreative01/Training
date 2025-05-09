<?php

namespace Symfony\Config\Shopware;

require_once __DIR__.\DIRECTORY_SEPARATOR.'NumberRange'.\DIRECTORY_SEPARATOR.'ConfigConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class NumberRangeConfig 
{
    private $incrementStorage;
    private $redisUrl;
    private $config;
    private $_usedProperties = [];

    /**
     * @default 'mysql'
     * @param ParamConfigurator|'SQL'|'mysql'|'Redis'|'redis' $value
     * @return $this
     */
    public function incrementStorage($value): static
    {
        $this->_usedProperties['incrementStorage'] = true;
        $this->incrementStorage = $value;

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

    public function config(array $value = []): \Symfony\Config\Shopware\NumberRange\ConfigConfig
    {
        if (null === $this->config) {
            $this->_usedProperties['config'] = true;
            $this->config = new \Symfony\Config\Shopware\NumberRange\ConfigConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "config()" has already been initialized. You cannot pass values the second time you call config().');
        }

        return $this->config;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('increment_storage', $value)) {
            $this->_usedProperties['incrementStorage'] = true;
            $this->incrementStorage = $value['increment_storage'];
            unset($value['increment_storage']);
        }

        if (array_key_exists('redis_url', $value)) {
            $this->_usedProperties['redisUrl'] = true;
            $this->redisUrl = $value['redis_url'];
            unset($value['redis_url']);
        }

        if (array_key_exists('config', $value)) {
            $this->_usedProperties['config'] = true;
            $this->config = new \Symfony\Config\Shopware\NumberRange\ConfigConfig($value['config']);
            unset($value['config']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['incrementStorage'])) {
            $output['increment_storage'] = $this->incrementStorage;
        }
        if (isset($this->_usedProperties['redisUrl'])) {
            $output['redis_url'] = $this->redisUrl;
        }
        if (isset($this->_usedProperties['config'])) {
            $output['config'] = $this->config->toArray();
        }

        return $output;
    }

}
