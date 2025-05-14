<?php

namespace Symfony\Config\Shopware;

require_once __DIR__.\DIRECTORY_SEPARATOR.'HttpCache'.\DIRECTORY_SEPARATOR.'ReverseProxyConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class HttpCacheConfig 
{
    private $staleWhileRevalidate;
    private $staleIfError;
    private $cookies;
    private $ignoredUrlParameters;
    private $reverseProxy;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function staleWhileRevalidate($value): static
    {
        $this->_usedProperties['staleWhileRevalidate'] = true;
        $this->staleWhileRevalidate = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function staleIfError($value): static
    {
        $this->_usedProperties['staleIfError'] = true;
        $this->staleIfError = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function cookies(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['cookies'] = true;
        $this->cookies = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function ignoredUrlParameters(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['ignoredUrlParameters'] = true;
        $this->ignoredUrlParameters = $value;

        return $this;
    }

    public function reverseProxy(array $value = []): \Symfony\Config\Shopware\HttpCache\ReverseProxyConfig
    {
        if (null === $this->reverseProxy) {
            $this->_usedProperties['reverseProxy'] = true;
            $this->reverseProxy = new \Symfony\Config\Shopware\HttpCache\ReverseProxyConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "reverseProxy()" has already been initialized. You cannot pass values the second time you call reverseProxy().');
        }

        return $this->reverseProxy;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('stale_while_revalidate', $value)) {
            $this->_usedProperties['staleWhileRevalidate'] = true;
            $this->staleWhileRevalidate = $value['stale_while_revalidate'];
            unset($value['stale_while_revalidate']);
        }

        if (array_key_exists('stale_if_error', $value)) {
            $this->_usedProperties['staleIfError'] = true;
            $this->staleIfError = $value['stale_if_error'];
            unset($value['stale_if_error']);
        }

        if (array_key_exists('cookies', $value)) {
            $this->_usedProperties['cookies'] = true;
            $this->cookies = $value['cookies'];
            unset($value['cookies']);
        }

        if (array_key_exists('ignored_url_parameters', $value)) {
            $this->_usedProperties['ignoredUrlParameters'] = true;
            $this->ignoredUrlParameters = $value['ignored_url_parameters'];
            unset($value['ignored_url_parameters']);
        }

        if (array_key_exists('reverse_proxy', $value)) {
            $this->_usedProperties['reverseProxy'] = true;
            $this->reverseProxy = new \Symfony\Config\Shopware\HttpCache\ReverseProxyConfig($value['reverse_proxy']);
            unset($value['reverse_proxy']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['staleWhileRevalidate'])) {
            $output['stale_while_revalidate'] = $this->staleWhileRevalidate;
        }
        if (isset($this->_usedProperties['staleIfError'])) {
            $output['stale_if_error'] = $this->staleIfError;
        }
        if (isset($this->_usedProperties['cookies'])) {
            $output['cookies'] = $this->cookies;
        }
        if (isset($this->_usedProperties['ignoredUrlParameters'])) {
            $output['ignored_url_parameters'] = $this->ignoredUrlParameters;
        }
        if (isset($this->_usedProperties['reverseProxy'])) {
            $output['reverse_proxy'] = $this->reverseProxy->toArray();
        }

        return $output;
    }

}
