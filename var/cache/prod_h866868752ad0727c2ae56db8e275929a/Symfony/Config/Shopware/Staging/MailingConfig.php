<?php

namespace Symfony\Config\Shopware\Staging;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MailingConfig 
{
    private $disableDelivery;
    private $_usedProperties = [];

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function disableDelivery($value): static
    {
        $this->_usedProperties['disableDelivery'] = true;
        $this->disableDelivery = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('disable_delivery', $value)) {
            $this->_usedProperties['disableDelivery'] = true;
            $this->disableDelivery = $value['disable_delivery'];
            unset($value['disable_delivery']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['disableDelivery'])) {
            $output['disable_delivery'] = $this->disableDelivery;
        }

        return $output;
    }

}
