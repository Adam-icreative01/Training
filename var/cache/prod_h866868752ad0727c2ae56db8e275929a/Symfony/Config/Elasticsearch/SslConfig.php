<?php

namespace Symfony\Config\Elasticsearch;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Ssl'.\DIRECTORY_SEPARATOR.'SigV4Config.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SslConfig 
{
    private $certPath;
    private $certPassword;
    private $certKeyPath;
    private $certKeyPassword;
    private $verifyServerCert;
    private $sigV4;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function certPath($value): static
    {
        $this->_usedProperties['certPath'] = true;
        $this->certPath = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function certPassword($value): static
    {
        $this->_usedProperties['certPassword'] = true;
        $this->certPassword = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function certKeyPath($value): static
    {
        $this->_usedProperties['certKeyPath'] = true;
        $this->certKeyPath = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function certKeyPassword($value): static
    {
        $this->_usedProperties['certKeyPassword'] = true;
        $this->certKeyPassword = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function verifyServerCert($value): static
    {
        $this->_usedProperties['verifyServerCert'] = true;
        $this->verifyServerCert = $value;

        return $this;
    }

    public function sigV4(array $value = []): \Symfony\Config\Elasticsearch\Ssl\SigV4Config
    {
        if (null === $this->sigV4) {
            $this->_usedProperties['sigV4'] = true;
            $this->sigV4 = new \Symfony\Config\Elasticsearch\Ssl\SigV4Config($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "sigV4()" has already been initialized. You cannot pass values the second time you call sigV4().');
        }

        return $this->sigV4;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('cert_path', $value)) {
            $this->_usedProperties['certPath'] = true;
            $this->certPath = $value['cert_path'];
            unset($value['cert_path']);
        }

        if (array_key_exists('cert_password', $value)) {
            $this->_usedProperties['certPassword'] = true;
            $this->certPassword = $value['cert_password'];
            unset($value['cert_password']);
        }

        if (array_key_exists('cert_key_path', $value)) {
            $this->_usedProperties['certKeyPath'] = true;
            $this->certKeyPath = $value['cert_key_path'];
            unset($value['cert_key_path']);
        }

        if (array_key_exists('cert_key_password', $value)) {
            $this->_usedProperties['certKeyPassword'] = true;
            $this->certKeyPassword = $value['cert_key_password'];
            unset($value['cert_key_password']);
        }

        if (array_key_exists('verify_server_cert', $value)) {
            $this->_usedProperties['verifyServerCert'] = true;
            $this->verifyServerCert = $value['verify_server_cert'];
            unset($value['verify_server_cert']);
        }

        if (array_key_exists('sigV4', $value)) {
            $this->_usedProperties['sigV4'] = true;
            $this->sigV4 = new \Symfony\Config\Elasticsearch\Ssl\SigV4Config($value['sigV4']);
            unset($value['sigV4']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['certPath'])) {
            $output['cert_path'] = $this->certPath;
        }
        if (isset($this->_usedProperties['certPassword'])) {
            $output['cert_password'] = $this->certPassword;
        }
        if (isset($this->_usedProperties['certKeyPath'])) {
            $output['cert_key_path'] = $this->certKeyPath;
        }
        if (isset($this->_usedProperties['certKeyPassword'])) {
            $output['cert_key_password'] = $this->certKeyPassword;
        }
        if (isset($this->_usedProperties['verifyServerCert'])) {
            $output['verify_server_cert'] = $this->verifyServerCert;
        }
        if (isset($this->_usedProperties['sigV4'])) {
            $output['sigV4'] = $this->sigV4->toArray();
        }

        return $output;
    }

}
