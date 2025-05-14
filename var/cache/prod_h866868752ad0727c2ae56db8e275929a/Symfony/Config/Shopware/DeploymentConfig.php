<?php

namespace Symfony\Config\Shopware;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DeploymentConfig 
{
    private $blueGreen;
    private $clusterSetup;
    private $runtimeExtensionManagement;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function blueGreen($value): static
    {
        $this->_usedProperties['blueGreen'] = true;
        $this->blueGreen = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function clusterSetup($value): static
    {
        $this->_usedProperties['clusterSetup'] = true;
        $this->clusterSetup = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function runtimeExtensionManagement($value): static
    {
        $this->_usedProperties['runtimeExtensionManagement'] = true;
        $this->runtimeExtensionManagement = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('blue_green', $value)) {
            $this->_usedProperties['blueGreen'] = true;
            $this->blueGreen = $value['blue_green'];
            unset($value['blue_green']);
        }

        if (array_key_exists('cluster_setup', $value)) {
            $this->_usedProperties['clusterSetup'] = true;
            $this->clusterSetup = $value['cluster_setup'];
            unset($value['cluster_setup']);
        }

        if (array_key_exists('runtime_extension_management', $value)) {
            $this->_usedProperties['runtimeExtensionManagement'] = true;
            $this->runtimeExtensionManagement = $value['runtime_extension_management'];
            unset($value['runtime_extension_management']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['blueGreen'])) {
            $output['blue_green'] = $this->blueGreen;
        }
        if (isset($this->_usedProperties['clusterSetup'])) {
            $output['cluster_setup'] = $this->clusterSetup;
        }
        if (isset($this->_usedProperties['runtimeExtensionManagement'])) {
            $output['runtime_extension_management'] = $this->runtimeExtensionManagement;
        }

        return $output;
    }

}
