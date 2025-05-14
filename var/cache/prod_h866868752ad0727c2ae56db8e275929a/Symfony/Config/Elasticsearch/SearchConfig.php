<?php

namespace Symfony\Config\Elasticsearch;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SearchConfig 
{
    private $timeout;
    private $termMaxLength;
    private $searchType;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function timeout($value): static
    {
        $this->_usedProperties['timeout'] = true;
        $this->timeout = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function termMaxLength($value): static
    {
        $this->_usedProperties['termMaxLength'] = true;
        $this->termMaxLength = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function searchType($value): static
    {
        $this->_usedProperties['searchType'] = true;
        $this->searchType = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('timeout', $value)) {
            $this->_usedProperties['timeout'] = true;
            $this->timeout = $value['timeout'];
            unset($value['timeout']);
        }

        if (array_key_exists('term_max_length', $value)) {
            $this->_usedProperties['termMaxLength'] = true;
            $this->termMaxLength = $value['term_max_length'];
            unset($value['term_max_length']);
        }

        if (array_key_exists('search_type', $value)) {
            $this->_usedProperties['searchType'] = true;
            $this->searchType = $value['search_type'];
            unset($value['search_type']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['timeout'])) {
            $output['timeout'] = $this->timeout;
        }
        if (isset($this->_usedProperties['termMaxLength'])) {
            $output['term_max_length'] = $this->termMaxLength;
        }
        if (isset($this->_usedProperties['searchType'])) {
            $output['search_type'] = $this->searchType;
        }

        return $output;
    }

}
