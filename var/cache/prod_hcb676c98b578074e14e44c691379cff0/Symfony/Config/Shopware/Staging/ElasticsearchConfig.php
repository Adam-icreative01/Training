<?php

namespace Symfony\Config\Shopware\Staging;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ElasticsearchConfig 
{
    private $checkForExistence;
    private $_usedProperties = [];

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function checkForExistence($value): static
    {
        $this->_usedProperties['checkForExistence'] = true;
        $this->checkForExistence = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('check_for_existence', $value)) {
            $this->_usedProperties['checkForExistence'] = true;
            $this->checkForExistence = $value['check_for_existence'];
            unset($value['check_for_existence']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['checkForExistence'])) {
            $output['check_for_existence'] = $this->checkForExistence;
        }

        return $output;
    }

}
