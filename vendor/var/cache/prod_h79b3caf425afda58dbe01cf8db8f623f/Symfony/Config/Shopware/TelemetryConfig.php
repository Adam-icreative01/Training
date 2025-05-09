<?php

namespace Symfony\Config\Shopware;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Telemetry'.\DIRECTORY_SEPARATOR.'MetricsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TelemetryConfig 
{
    private $metrics;
    private $_usedProperties = [];

    public function metrics(array $value = []): \Symfony\Config\Shopware\Telemetry\MetricsConfig
    {
        if (null === $this->metrics) {
            $this->_usedProperties['metrics'] = true;
            $this->metrics = new \Symfony\Config\Shopware\Telemetry\MetricsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "metrics()" has already been initialized. You cannot pass values the second time you call metrics().');
        }

        return $this->metrics;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('metrics', $value)) {
            $this->_usedProperties['metrics'] = true;
            $this->metrics = new \Symfony\Config\Shopware\Telemetry\MetricsConfig($value['metrics']);
            unset($value['metrics']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['metrics'])) {
            $output['metrics'] = $this->metrics->toArray();
        }

        return $output;
    }

}
