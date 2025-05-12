<?php

namespace Symfony\Config\Shopware\Api;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class StoreConfig 
{
    private $contextLifetime;
    private $maxLimit;
    private $_usedProperties = [];

    /**
     * @default 'P1D'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function contextLifetime($value): static
    {
        $this->_usedProperties['contextLifetime'] = true;
        $this->contextLifetime = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function maxLimit($value): static
    {
        $this->_usedProperties['maxLimit'] = true;
        $this->maxLimit = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('context_lifetime', $value)) {
            $this->_usedProperties['contextLifetime'] = true;
            $this->contextLifetime = $value['context_lifetime'];
            unset($value['context_lifetime']);
        }

        if (array_key_exists('max_limit', $value)) {
            $this->_usedProperties['maxLimit'] = true;
            $this->maxLimit = $value['max_limit'];
            unset($value['max_limit']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['contextLifetime'])) {
            $output['context_lifetime'] = $this->contextLifetime;
        }
        if (isset($this->_usedProperties['maxLimit'])) {
            $output['max_limit'] = $this->maxLimit;
        }

        return $output;
    }

}
