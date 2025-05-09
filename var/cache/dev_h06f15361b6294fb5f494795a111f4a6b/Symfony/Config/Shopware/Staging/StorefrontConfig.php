<?php

namespace Symfony\Config\Shopware\Staging;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class StorefrontConfig 
{
    private $showBanner;
    private $_usedProperties = [];

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function showBanner($value): static
    {
        $this->_usedProperties['showBanner'] = true;
        $this->showBanner = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('show_banner', $value)) {
            $this->_usedProperties['showBanner'] = true;
            $this->showBanner = $value['show_banner'];
            unset($value['show_banner']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['showBanner'])) {
            $output['show_banner'] = $this->showBanner;
        }

        return $output;
    }

}
