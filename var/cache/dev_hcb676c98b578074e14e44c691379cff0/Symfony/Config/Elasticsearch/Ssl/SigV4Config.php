<?php

namespace Symfony\Config\Elasticsearch\Ssl;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SigV4'.\DIRECTORY_SEPARATOR.'CredentialsProviderConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SigV4Config 
{
    private $enabled;
    private $region;
    private $service;
    private $credentialsProvider;
    private $_usedProperties = [];

    /**
     * @default false
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
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function region($value): static
    {
        $this->_usedProperties['region'] = true;
        $this->region = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function service($value): static
    {
        $this->_usedProperties['service'] = true;
        $this->service = $value;

        return $this;
    }

    public function credentialsProvider(array $value = []): \Symfony\Config\Elasticsearch\Ssl\SigV4\CredentialsProviderConfig
    {
        if (null === $this->credentialsProvider) {
            $this->_usedProperties['credentialsProvider'] = true;
            $this->credentialsProvider = new \Symfony\Config\Elasticsearch\Ssl\SigV4\CredentialsProviderConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "credentialsProvider()" has already been initialized. You cannot pass values the second time you call credentialsProvider().');
        }

        return $this->credentialsProvider;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('region', $value)) {
            $this->_usedProperties['region'] = true;
            $this->region = $value['region'];
            unset($value['region']);
        }

        if (array_key_exists('service', $value)) {
            $this->_usedProperties['service'] = true;
            $this->service = $value['service'];
            unset($value['service']);
        }

        if (array_key_exists('credentials_provider', $value)) {
            $this->_usedProperties['credentialsProvider'] = true;
            $this->credentialsProvider = new \Symfony\Config\Elasticsearch\Ssl\SigV4\CredentialsProviderConfig($value['credentials_provider']);
            unset($value['credentials_provider']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['region'])) {
            $output['region'] = $this->region;
        }
        if (isset($this->_usedProperties['service'])) {
            $output['service'] = $this->service;
        }
        if (isset($this->_usedProperties['credentialsProvider'])) {
            $output['credentials_provider'] = $this->credentialsProvider->toArray();
        }

        return $output;
    }

}
