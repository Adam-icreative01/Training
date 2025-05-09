<?php

namespace Symfony\Config\Shopware\Media;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class RemoteThumbnailsConfig 
{
    private $enable;
    private $pattern;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enable($value): static
    {
        $this->_usedProperties['enable'] = true;
        $this->enable = $value;

        return $this;
    }

    /**
     * @default '{mediaUrl}/{mediaPath}?width={width}&ts={mediaUpdatedAt}'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pattern($value): static
    {
        $this->_usedProperties['pattern'] = true;
        $this->pattern = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enable', $value)) {
            $this->_usedProperties['enable'] = true;
            $this->enable = $value['enable'];
            unset($value['enable']);
        }

        if (array_key_exists('pattern', $value)) {
            $this->_usedProperties['pattern'] = true;
            $this->pattern = $value['pattern'];
            unset($value['pattern']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enable'])) {
            $output['enable'] = $this->enable;
        }
        if (isset($this->_usedProperties['pattern'])) {
            $output['pattern'] = $this->pattern;
        }

        return $output;
    }

}
