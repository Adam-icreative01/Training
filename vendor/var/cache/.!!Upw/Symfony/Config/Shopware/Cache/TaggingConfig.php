<?php

namespace Symfony\Config\Shopware\Cache;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TaggingConfig 
{
    private $eachSnippet;
    private $eachConfig;
    private $eachThemeConfig;
    private $_usedProperties = [];

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function eachSnippet($value): static
    {
        $this->_usedProperties['eachSnippet'] = true;
        $this->eachSnippet = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function eachConfig($value): static
    {
        $this->_usedProperties['eachConfig'] = true;
        $this->eachConfig = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function eachThemeConfig($value): static
    {
        $this->_usedProperties['eachThemeConfig'] = true;
        $this->eachThemeConfig = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('each_snippet', $value)) {
            $this->_usedProperties['eachSnippet'] = true;
            $this->eachSnippet = $value['each_snippet'];
            unset($value['each_snippet']);
        }

        if (array_key_exists('each_config', $value)) {
            $this->_usedProperties['eachConfig'] = true;
            $this->eachConfig = $value['each_config'];
            unset($value['each_config']);
        }

        if (array_key_exists('each_theme_config', $value)) {
            $this->_usedProperties['eachThemeConfig'] = true;
            $this->eachThemeConfig = $value['each_theme_config'];
            unset($value['each_theme_config']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['eachSnippet'])) {
            $output['each_snippet'] = $this->eachSnippet;
        }
        if (isset($this->_usedProperties['eachConfig'])) {
            $output['each_config'] = $this->eachConfig;
        }
        if (isset($this->_usedProperties['eachThemeConfig'])) {
            $output['each_theme_config'] = $this->eachThemeConfig;
        }

        return $output;
    }

}
