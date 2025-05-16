<?php

namespace Symfony\Config\Shopware\UsageData;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class GatewayConfig 
{
    private $dispatchEnabled;
    private $baseUri;
    private $batchSize;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function dispatchEnabled($value): static
    {
        $this->_usedProperties['dispatchEnabled'] = true;
        $this->dispatchEnabled = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function baseUri($value): static
    {
        $this->_usedProperties['baseUri'] = true;
        $this->baseUri = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function batchSize($value): static
    {
        $this->_usedProperties['batchSize'] = true;
        $this->batchSize = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('dispatch_enabled', $value)) {
            $this->_usedProperties['dispatchEnabled'] = true;
            $this->dispatchEnabled = $value['dispatch_enabled'];
            unset($value['dispatch_enabled']);
        }

        if (array_key_exists('base_uri', $value)) {
            $this->_usedProperties['baseUri'] = true;
            $this->baseUri = $value['base_uri'];
            unset($value['base_uri']);
        }

        if (array_key_exists('batch_size', $value)) {
            $this->_usedProperties['batchSize'] = true;
            $this->batchSize = $value['batch_size'];
            unset($value['batch_size']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['dispatchEnabled'])) {
            $output['dispatch_enabled'] = $this->dispatchEnabled;
        }
        if (isset($this->_usedProperties['baseUri'])) {
            $output['base_uri'] = $this->baseUri;
        }
        if (isset($this->_usedProperties['batchSize'])) {
            $output['batch_size'] = $this->batchSize;
        }

        return $output;
    }

}
