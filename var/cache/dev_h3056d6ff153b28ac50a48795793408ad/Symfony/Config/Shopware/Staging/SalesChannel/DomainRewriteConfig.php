<?php

namespace Symfony\Config\Shopware\Staging\SalesChannel;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DomainRewriteConfig 
{
    private $match;
    private $type;
    private $replace;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function match($value): static
    {
        $this->_usedProperties['match'] = true;
        $this->match = $value;

        return $this;
    }

    /**
     * @default 'equal'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function type($value): static
    {
        $this->_usedProperties['type'] = true;
        $this->type = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function replace($value): static
    {
        $this->_usedProperties['replace'] = true;
        $this->replace = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('match', $value)) {
            $this->_usedProperties['match'] = true;
            $this->match = $value['match'];
            unset($value['match']);
        }

        if (array_key_exists('type', $value)) {
            $this->_usedProperties['type'] = true;
            $this->type = $value['type'];
            unset($value['type']);
        }

        if (array_key_exists('replace', $value)) {
            $this->_usedProperties['replace'] = true;
            $this->replace = $value['replace'];
            unset($value['replace']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['match'])) {
            $output['match'] = $this->match;
        }
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }
        if (isset($this->_usedProperties['replace'])) {
            $output['replace'] = $this->replace;
        }

        return $output;
    }

}
