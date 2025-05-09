<?php

namespace Symfony\Config\Shopware;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Api'.\DIRECTORY_SEPARATOR.'RateLimiterConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Api'.\DIRECTORY_SEPARATOR.'StoreConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Api'.\DIRECTORY_SEPARATOR.'JwtKeyConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Api'.\DIRECTORY_SEPARATOR.'ApiBrowserConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class ApiConfig 
{
    private $rateLimiter;
    private $store;
    private $accessTokenTtl;
    private $refreshTokenTtl;
    private $jwtKey;
    private $maxLimit;
    private $apiBrowser;
    private $_usedProperties = [];

    public function rateLimiter(string $name, array $value = []): \Symfony\Config\Shopware\Api\RateLimiterConfig
    {
        if (!isset($this->rateLimiter[$name])) {
            $this->_usedProperties['rateLimiter'] = true;
            $this->rateLimiter[$name] = new \Symfony\Config\Shopware\Api\RateLimiterConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "rateLimiter()" has already been initialized. You cannot pass values the second time you call rateLimiter().');
        }

        return $this->rateLimiter[$name];
    }

    public function store(array $value = []): \Symfony\Config\Shopware\Api\StoreConfig
    {
        if (null === $this->store) {
            $this->_usedProperties['store'] = true;
            $this->store = new \Symfony\Config\Shopware\Api\StoreConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "store()" has already been initialized. You cannot pass values the second time you call store().');
        }

        return $this->store;
    }

    /**
     * @default 'PT10M'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function accessTokenTtl($value): static
    {
        $this->_usedProperties['accessTokenTtl'] = true;
        $this->accessTokenTtl = $value;

        return $this;
    }

    /**
     * @default 'P1W'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function refreshTokenTtl($value): static
    {
        $this->_usedProperties['refreshTokenTtl'] = true;
        $this->refreshTokenTtl = $value;

        return $this;
    }

    public function jwtKey(array $value = []): \Symfony\Config\Shopware\Api\JwtKeyConfig
    {
        if (null === $this->jwtKey) {
            $this->_usedProperties['jwtKey'] = true;
            $this->jwtKey = new \Symfony\Config\Shopware\Api\JwtKeyConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "jwtKey()" has already been initialized. You cannot pass values the second time you call jwtKey().');
        }

        return $this->jwtKey;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function maxLimit($value): static
    {
        $this->_usedProperties['maxLimit'] = true;
        $this->maxLimit = $value;

        return $this;
    }

    public function apiBrowser(array $value = []): \Symfony\Config\Shopware\Api\ApiBrowserConfig
    {
        if (null === $this->apiBrowser) {
            $this->_usedProperties['apiBrowser'] = true;
            $this->apiBrowser = new \Symfony\Config\Shopware\Api\ApiBrowserConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "apiBrowser()" has already been initialized. You cannot pass values the second time you call apiBrowser().');
        }

        return $this->apiBrowser;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('rate_limiter', $value)) {
            $this->_usedProperties['rateLimiter'] = true;
            $this->rateLimiter = array_map(fn ($v) => new \Symfony\Config\Shopware\Api\RateLimiterConfig($v), $value['rate_limiter']);
            unset($value['rate_limiter']);
        }

        if (array_key_exists('store', $value)) {
            $this->_usedProperties['store'] = true;
            $this->store = new \Symfony\Config\Shopware\Api\StoreConfig($value['store']);
            unset($value['store']);
        }

        if (array_key_exists('access_token_ttl', $value)) {
            $this->_usedProperties['accessTokenTtl'] = true;
            $this->accessTokenTtl = $value['access_token_ttl'];
            unset($value['access_token_ttl']);
        }

        if (array_key_exists('refresh_token_ttl', $value)) {
            $this->_usedProperties['refreshTokenTtl'] = true;
            $this->refreshTokenTtl = $value['refresh_token_ttl'];
            unset($value['refresh_token_ttl']);
        }

        if (array_key_exists('jwt_key', $value)) {
            $this->_usedProperties['jwtKey'] = true;
            $this->jwtKey = new \Symfony\Config\Shopware\Api\JwtKeyConfig($value['jwt_key']);
            unset($value['jwt_key']);
        }

        if (array_key_exists('max_limit', $value)) {
            $this->_usedProperties['maxLimit'] = true;
            $this->maxLimit = $value['max_limit'];
            unset($value['max_limit']);
        }

        if (array_key_exists('api_browser', $value)) {
            $this->_usedProperties['apiBrowser'] = true;
            $this->apiBrowser = new \Symfony\Config\Shopware\Api\ApiBrowserConfig($value['api_browser']);
            unset($value['api_browser']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['rateLimiter'])) {
            $output['rate_limiter'] = array_map(fn ($v) => $v->toArray(), $this->rateLimiter);
        }
        if (isset($this->_usedProperties['store'])) {
            $output['store'] = $this->store->toArray();
        }
        if (isset($this->_usedProperties['accessTokenTtl'])) {
            $output['access_token_ttl'] = $this->accessTokenTtl;
        }
        if (isset($this->_usedProperties['refreshTokenTtl'])) {
            $output['refresh_token_ttl'] = $this->refreshTokenTtl;
        }
        if (isset($this->_usedProperties['jwtKey'])) {
            $output['jwt_key'] = $this->jwtKey->toArray();
        }
        if (isset($this->_usedProperties['maxLimit'])) {
            $output['max_limit'] = $this->maxLimit;
        }
        if (isset($this->_usedProperties['apiBrowser'])) {
            $output['api_browser'] = $this->apiBrowser->toArray();
        }

        return $output;
    }

}
