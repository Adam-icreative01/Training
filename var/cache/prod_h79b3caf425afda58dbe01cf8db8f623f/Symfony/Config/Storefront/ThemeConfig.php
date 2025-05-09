<?php

namespace Symfony\Config\Storefront;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ThemeConfig 
{
    private $configLoaderId;
    private $themePathBuilderId;
    private $availableThemeProvider;
    private $fileDeleteDelay;
    private $autoPrefixCss;
    private $allowedScssValues;
    private $validateOnCompile;
    private $_usedProperties = [];

    /**
     * @default 'Shopware\\Storefront\\Theme\\ConfigLoader\\DatabaseConfigLoader'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function configLoaderId($value): static
    {
        $this->_usedProperties['configLoaderId'] = true;
        $this->configLoaderId = $value;

        return $this;
    }

    /**
     * @default 'Shopware\\Storefront\\Theme\\SeedingThemePathBuilder'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function themePathBuilderId($value): static
    {
        $this->_usedProperties['themePathBuilderId'] = true;
        $this->themePathBuilderId = $value;

        return $this;
    }

    /**
     * @default 'Shopware\\Storefront\\Theme\\ConfigLoader\\DatabaseAvailableThemeProvider'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function availableThemeProvider($value): static
    {
        $this->_usedProperties['availableThemeProvider'] = true;
        $this->availableThemeProvider = $value;

        return $this;
    }

    /**
     * @default 900
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function fileDeleteDelay($value): static
    {
        $this->_usedProperties['fileDeleteDelay'] = true;
        $this->fileDeleteDelay = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function autoPrefixCss($value): static
    {
        $this->_usedProperties['autoPrefixCss'] = true;
        $this->autoPrefixCss = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function allowedScssValues(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['allowedScssValues'] = true;
        $this->allowedScssValues = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function validateOnCompile($value): static
    {
        $this->_usedProperties['validateOnCompile'] = true;
        $this->validateOnCompile = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('config_loader_id', $value)) {
            $this->_usedProperties['configLoaderId'] = true;
            $this->configLoaderId = $value['config_loader_id'];
            unset($value['config_loader_id']);
        }

        if (array_key_exists('theme_path_builder_id', $value)) {
            $this->_usedProperties['themePathBuilderId'] = true;
            $this->themePathBuilderId = $value['theme_path_builder_id'];
            unset($value['theme_path_builder_id']);
        }

        if (array_key_exists('available_theme_provider', $value)) {
            $this->_usedProperties['availableThemeProvider'] = true;
            $this->availableThemeProvider = $value['available_theme_provider'];
            unset($value['available_theme_provider']);
        }

        if (array_key_exists('file_delete_delay', $value)) {
            $this->_usedProperties['fileDeleteDelay'] = true;
            $this->fileDeleteDelay = $value['file_delete_delay'];
            unset($value['file_delete_delay']);
        }

        if (array_key_exists('auto_prefix_css', $value)) {
            $this->_usedProperties['autoPrefixCss'] = true;
            $this->autoPrefixCss = $value['auto_prefix_css'];
            unset($value['auto_prefix_css']);
        }

        if (array_key_exists('allowed_scss_values', $value)) {
            $this->_usedProperties['allowedScssValues'] = true;
            $this->allowedScssValues = $value['allowed_scss_values'];
            unset($value['allowed_scss_values']);
        }

        if (array_key_exists('validate_on_compile', $value)) {
            $this->_usedProperties['validateOnCompile'] = true;
            $this->validateOnCompile = $value['validate_on_compile'];
            unset($value['validate_on_compile']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['configLoaderId'])) {
            $output['config_loader_id'] = $this->configLoaderId;
        }
        if (isset($this->_usedProperties['themePathBuilderId'])) {
            $output['theme_path_builder_id'] = $this->themePathBuilderId;
        }
        if (isset($this->_usedProperties['availableThemeProvider'])) {
            $output['available_theme_provider'] = $this->availableThemeProvider;
        }
        if (isset($this->_usedProperties['fileDeleteDelay'])) {
            $output['file_delete_delay'] = $this->fileDeleteDelay;
        }
        if (isset($this->_usedProperties['autoPrefixCss'])) {
            $output['auto_prefix_css'] = $this->autoPrefixCss;
        }
        if (isset($this->_usedProperties['allowedScssValues'])) {
            $output['allowed_scss_values'] = $this->allowedScssValues;
        }
        if (isset($this->_usedProperties['validateOnCompile'])) {
            $output['validate_on_compile'] = $this->validateOnCompile;
        }

        return $output;
    }

}
