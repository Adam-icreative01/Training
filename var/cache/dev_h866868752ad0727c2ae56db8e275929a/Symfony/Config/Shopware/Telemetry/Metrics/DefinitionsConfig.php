<?php

namespace Symfony\Config\Shopware\Telemetry\Metrics;

require_once __DIR__.\DIRECTORY_SEPARATOR.'DefinitionsConfig'.\DIRECTORY_SEPARATOR.'LabelsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DefinitionsConfig 
{
    private $type;
    private $description;
    private $unit;
    private $enabled;
    private $parameters;
    private $labels;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|'histogram'|'gauge'|'counter'|'updown_counter' $value
     * @return $this
     */
    public function type($value): static
    {
        $this->_usedProperties['type'] = true;
        $this->type = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function description($value): static
    {
        $this->_usedProperties['description'] = true;
        $this->description = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function unit($value): static
    {
        $this->_usedProperties['unit'] = true;
        $this->unit = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function parameters(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['parameters'] = true;
        $this->parameters = $value;

        return $this;
    }

    public function labels(string $label_name, array $value = []): \Symfony\Config\Shopware\Telemetry\Metrics\DefinitionsConfig\LabelsConfig
    {
        if (!isset($this->labels[$label_name])) {
            $this->_usedProperties['labels'] = true;
            $this->labels[$label_name] = new \Symfony\Config\Shopware\Telemetry\Metrics\DefinitionsConfig\LabelsConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "labels()" has already been initialized. You cannot pass values the second time you call labels().');
        }

        return $this->labels[$label_name];
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('type', $value)) {
            $this->_usedProperties['type'] = true;
            $this->type = $value['type'];
            unset($value['type']);
        }

        if (array_key_exists('description', $value)) {
            $this->_usedProperties['description'] = true;
            $this->description = $value['description'];
            unset($value['description']);
        }

        if (array_key_exists('unit', $value)) {
            $this->_usedProperties['unit'] = true;
            $this->unit = $value['unit'];
            unset($value['unit']);
        }

        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('parameters', $value)) {
            $this->_usedProperties['parameters'] = true;
            $this->parameters = $value['parameters'];
            unset($value['parameters']);
        }

        if (array_key_exists('labels', $value)) {
            $this->_usedProperties['labels'] = true;
            $this->labels = array_map(fn ($v) => new \Symfony\Config\Shopware\Telemetry\Metrics\DefinitionsConfig\LabelsConfig($v), $value['labels']);
            unset($value['labels']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }
        if (isset($this->_usedProperties['description'])) {
            $output['description'] = $this->description;
        }
        if (isset($this->_usedProperties['unit'])) {
            $output['unit'] = $this->unit;
        }
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['parameters'])) {
            $output['parameters'] = $this->parameters;
        }
        if (isset($this->_usedProperties['labels'])) {
            $output['labels'] = array_map(fn ($v) => $v->toArray(), $this->labels);
        }

        return $output;
    }

}
