<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Storefront'.\DIRECTORY_SEPARATOR.'ThemeConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class StorefrontConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $theme;
    private $_usedProperties = [];

    public function theme(array $value = []): \Symfony\Config\Storefront\ThemeConfig
    {
        if (null === $this->theme) {
            $this->_usedProperties['theme'] = true;
            $this->theme = new \Symfony\Config\Storefront\ThemeConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "theme()" has already been initialized. You cannot pass values the second time you call theme().');
        }

        return $this->theme;
    }

    public function getExtensionAlias(): string
    {
        return 'storefront';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('theme', $value)) {
            $this->_usedProperties['theme'] = true;
            $this->theme = new \Symfony\Config\Storefront\ThemeConfig($value['theme']);
            unset($value['theme']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['theme'])) {
            $output['theme'] = $this->theme->toArray();
        }

        return $output;
    }

}
