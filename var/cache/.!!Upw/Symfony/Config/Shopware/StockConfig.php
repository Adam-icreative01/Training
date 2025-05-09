<?php

namespace Symfony\Config\Shopware;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class StockConfig 
{
    private $enableStockManagement;
    private $_usedProperties = [];

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableStockManagement($value): static
    {
        $this->_usedProperties['enableStockManagement'] = true;
        $this->enableStockManagement = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enable_stock_management', $value)) {
            $this->_usedProperties['enableStockManagement'] = true;
            $this->enableStockManagement = $value['enable_stock_management'];
            unset($value['enable_stock_management']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enableStockManagement'])) {
            $output['enable_stock_management'] = $this->enableStockManagement;
        }

        return $output;
    }

}
