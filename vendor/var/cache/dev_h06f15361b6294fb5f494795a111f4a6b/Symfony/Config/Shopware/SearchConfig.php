<?php

namespace Symfony\Config\Shopware;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SearchConfig 
{
    private $termMaxLength;
    private $preservedChars;
    private $_usedProperties = [];

    /**
     * @default 300
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
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function preservedChars(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['preservedChars'] = true;
        $this->preservedChars = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('term_max_length', $value)) {
            $this->_usedProperties['termMaxLength'] = true;
            $this->termMaxLength = $value['term_max_length'];
            unset($value['term_max_length']);
        }

        if (array_key_exists('preserved_chars', $value)) {
            $this->_usedProperties['preservedChars'] = true;
            $this->preservedChars = $value['preserved_chars'];
            unset($value['preserved_chars']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['termMaxLength'])) {
            $output['term_max_length'] = $this->termMaxLength;
        }
        if (isset($this->_usedProperties['preservedChars'])) {
            $output['preserved_chars'] = $this->preservedChars;
        }

        return $output;
    }

}
