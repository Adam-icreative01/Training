<?php

namespace Symfony\Config\Shopware;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MessengerConfig 
{
    private $routingOverwrite;
    private $enforceMessageSize;
    private $_usedProperties = [];

    /**
     * @return $this
     */
    public function routingOverwrite(string $name, mixed $value): static
    {
        $this->_usedProperties['routingOverwrite'] = true;
        $this->routingOverwrite[$name] = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enforceMessageSize($value): static
    {
        $this->_usedProperties['enforceMessageSize'] = true;
        $this->enforceMessageSize = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('routing_overwrite', $value)) {
            $this->_usedProperties['routingOverwrite'] = true;
            $this->routingOverwrite = $value['routing_overwrite'];
            unset($value['routing_overwrite']);
        }

        if (array_key_exists('enforce_message_size', $value)) {
            $this->_usedProperties['enforceMessageSize'] = true;
            $this->enforceMessageSize = $value['enforce_message_size'];
            unset($value['enforce_message_size']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['routingOverwrite'])) {
            $output['routing_overwrite'] = $this->routingOverwrite;
        }
        if (isset($this->_usedProperties['enforceMessageSize'])) {
            $output['enforce_message_size'] = $this->enforceMessageSize;
        }

        return $output;
    }

}
