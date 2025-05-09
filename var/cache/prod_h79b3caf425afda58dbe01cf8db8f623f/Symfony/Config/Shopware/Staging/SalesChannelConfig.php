<?php

namespace Symfony\Config\Shopware\Staging;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SalesChannel'.\DIRECTORY_SEPARATOR.'DomainRewriteConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SalesChannelConfig 
{
    private $domainRewrite;
    private $_usedProperties = [];

    public function domainRewrite(array $value = []): \Symfony\Config\Shopware\Staging\SalesChannel\DomainRewriteConfig
    {
        $this->_usedProperties['domainRewrite'] = true;

        return $this->domainRewrite[] = new \Symfony\Config\Shopware\Staging\SalesChannel\DomainRewriteConfig($value);
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('domain_rewrite', $value)) {
            $this->_usedProperties['domainRewrite'] = true;
            $this->domainRewrite = array_map(fn ($v) => new \Symfony\Config\Shopware\Staging\SalesChannel\DomainRewriteConfig($v), $value['domain_rewrite']);
            unset($value['domain_rewrite']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['domainRewrite'])) {
            $output['domain_rewrite'] = array_map(fn ($v) => $v->toArray(), $this->domainRewrite);
        }

        return $output;
    }

}
