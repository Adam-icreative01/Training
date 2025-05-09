<?php

namespace Symfony\Config\Shopware\Api;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class JwtKeyConfig 
{
    private $useAppSecret;
    private $privateKeyPath;
    private $privateKeyPassphrase;
    private $publicKeyPath;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useAppSecret($value): static
    {
        $this->_usedProperties['useAppSecret'] = true;
        $this->useAppSecret = $value;

        return $this;
    }

    /**
     * @default 'file://%kernel.project_dir%/config/jwt/private.pem'
     * @param ParamConfigurator|mixed $value
     * @deprecated private_key_path is deprecated and will be removed with Shopware 6.7
     * @return $this
     */
    public function privateKeyPath($value): static
    {
        $this->_usedProperties['privateKeyPath'] = true;
        $this->privateKeyPath = $value;

        return $this;
    }

    /**
     * @default 'shopware'
     * @param ParamConfigurator|mixed $value
     * @deprecated private_key_passphrase is deprecated and will be removed with Shopware 6.7
     * @return $this
     */
    public function privateKeyPassphrase($value): static
    {
        $this->_usedProperties['privateKeyPassphrase'] = true;
        $this->privateKeyPassphrase = $value;

        return $this;
    }

    /**
     * @default 'file://%kernel.project_dir%/config/jwt/public.pem'
     * @param ParamConfigurator|mixed $value
     * @deprecated public_key_path is deprecated and will be removed with Shopware 6.7
     * @return $this
     */
    public function publicKeyPath($value): static
    {
        $this->_usedProperties['publicKeyPath'] = true;
        $this->publicKeyPath = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('use_app_secret', $value)) {
            $this->_usedProperties['useAppSecret'] = true;
            $this->useAppSecret = $value['use_app_secret'];
            unset($value['use_app_secret']);
        }

        if (array_key_exists('private_key_path', $value)) {
            $this->_usedProperties['privateKeyPath'] = true;
            $this->privateKeyPath = $value['private_key_path'];
            unset($value['private_key_path']);
        }

        if (array_key_exists('private_key_passphrase', $value)) {
            $this->_usedProperties['privateKeyPassphrase'] = true;
            $this->privateKeyPassphrase = $value['private_key_passphrase'];
            unset($value['private_key_passphrase']);
        }

        if (array_key_exists('public_key_path', $value)) {
            $this->_usedProperties['publicKeyPath'] = true;
            $this->publicKeyPath = $value['public_key_path'];
            unset($value['public_key_path']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['useAppSecret'])) {
            $output['use_app_secret'] = $this->useAppSecret;
        }
        if (isset($this->_usedProperties['privateKeyPath'])) {
            $output['private_key_path'] = $this->privateKeyPath;
        }
        if (isset($this->_usedProperties['privateKeyPassphrase'])) {
            $output['private_key_passphrase'] = $this->privateKeyPassphrase;
        }
        if (isset($this->_usedProperties['publicKeyPath'])) {
            $output['public_key_path'] = $this->publicKeyPath;
        }

        return $output;
    }

}
