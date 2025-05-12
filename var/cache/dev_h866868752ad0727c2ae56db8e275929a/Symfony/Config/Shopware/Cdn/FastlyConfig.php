<?php

namespace Symfony\Config\Shopware\Cdn;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class FastlyConfig 
{
    private $apiKey;
    private $softPurge;
    private $maxParallelInvalidations;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function apiKey($value): static
    {
        $this->_usedProperties['apiKey'] = true;
        $this->apiKey = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function softPurge($value): static
    {
        $this->_usedProperties['softPurge'] = true;
        $this->softPurge = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxParallelInvalidations($value): static
    {
        $this->_usedProperties['maxParallelInvalidations'] = true;
        $this->maxParallelInvalidations = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('api_key', $value)) {
            $this->_usedProperties['apiKey'] = true;
            $this->apiKey = $value['api_key'];
            unset($value['api_key']);
        }

        if (array_key_exists('soft_purge', $value)) {
            $this->_usedProperties['softPurge'] = true;
            $this->softPurge = $value['soft_purge'];
            unset($value['soft_purge']);
        }

        if (array_key_exists('max_parallel_invalidations', $value)) {
            $this->_usedProperties['maxParallelInvalidations'] = true;
            $this->maxParallelInvalidations = $value['max_parallel_invalidations'];
            unset($value['max_parallel_invalidations']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['apiKey'])) {
            $output['api_key'] = $this->apiKey;
        }
        if (isset($this->_usedProperties['softPurge'])) {
            $output['soft_purge'] = $this->softPurge;
        }
        if (isset($this->_usedProperties['maxParallelInvalidations'])) {
            $output['max_parallel_invalidations'] = $this->maxParallelInvalidations;
        }

        return $output;
    }

}
