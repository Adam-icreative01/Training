<?php

namespace Symfony\Config\Shopware\HtmlSanitizer\SetsConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class OptionsConfig 
{
    private $key;
    private $value;
    private $values;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function key($value): static
    {
        $this->_usedProperties['key'] = true;
        $this->key = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function value($value): static
    {
        $this->_usedProperties['value'] = true;
        $this->value = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function values(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['values'] = true;
        $this->values = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('key', $value)) {
            $this->_usedProperties['key'] = true;
            $this->key = $value['key'];
            unset($value['key']);
        }

        if (array_key_exists('value', $value)) {
            $this->_usedProperties['value'] = true;
            $this->value = $value['value'];
            unset($value['value']);
        }

        if (array_key_exists('values', $value)) {
            $this->_usedProperties['values'] = true;
            $this->values = $value['values'];
            unset($value['values']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['key'])) {
            $output['key'] = $this->key;
        }
        if (isset($this->_usedProperties['value'])) {
            $output['value'] = $this->value;
        }
        if (isset($this->_usedProperties['values'])) {
            $output['values'] = $this->values;
        }

        return $output;
    }

}
