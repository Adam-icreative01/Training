<?php

namespace Symfony\Config\Shopware\Cache\Invalidation;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DelayOptionsConfig 
{
    private $storage;
    private $dsn;
    private $connection;
    private $_usedProperties = [];

    /**
     * @default 'redis'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function storage($value): static
    {
        $this->_usedProperties['storage'] = true;
        $this->storage = $value;

        return $this;
    }

    /**
     * @default 'redis://localhost'
     * @param ParamConfigurator|mixed $value
     * @deprecated dsn is deprecated and will be removed with Shopware 6.7. Use connection instead.
     * @return $this
     */
    public function dsn($value): static
    {
        $this->_usedProperties['dsn'] = true;
        $this->dsn = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function connection($value): static
    {
        $this->_usedProperties['connection'] = true;
        $this->connection = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('storage', $value)) {
            $this->_usedProperties['storage'] = true;
            $this->storage = $value['storage'];
            unset($value['storage']);
        }

        if (array_key_exists('dsn', $value)) {
            $this->_usedProperties['dsn'] = true;
            $this->dsn = $value['dsn'];
            unset($value['dsn']);
        }

        if (array_key_exists('connection', $value)) {
            $this->_usedProperties['connection'] = true;
            $this->connection = $value['connection'];
            unset($value['connection']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['storage'])) {
            $output['storage'] = $this->storage;
        }
        if (isset($this->_usedProperties['dsn'])) {
            $output['dsn'] = $this->dsn;
        }
        if (isset($this->_usedProperties['connection'])) {
            $output['connection'] = $this->connection;
        }

        return $output;
    }

}
