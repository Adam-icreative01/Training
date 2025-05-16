<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'HttpCacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'NumberRangeConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'ProfilerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'FilesystemConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'CdnConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'ApiConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'StoreConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'CartConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'SalesChannelContextConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'AdminWorkerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'AutoUpdateConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'SitemapConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'DeploymentConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'MediaConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'DalConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'MailConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'FeatureConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'LoggerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'CacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'HtmlSanitizerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'IncrementConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'TwigConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'DompdfConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'StockConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'UsageDataConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'FeatureToggleConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'StagingConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'SystemConfigConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'MessengerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'SearchConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'TelemetryConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'RedisConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'ProductStreamConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ShopwareConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $httpCache;
    private $numberRange;
    private $profiler;
    private $filesystem;
    private $cdn;
    private $api;
    private $store;
    private $cart;
    private $salesChannelContext;
    private $adminWorker;
    private $autoUpdate;
    private $sitemap;
    private $deployment;
    private $media;
    private $dal;
    private $mail;
    private $feature;
    private $logger;
    private $cache;
    private $htmlSanitizer;
    private $increment;
    private $twig;
    private $dompdf;
    private $stock;
    private $usageData;
    private $featureToggle;
    private $staging;
    private $systemConfig;
    private $messenger;
    private $search;
    private $telemetry;
    private $redis;
    private $productStream;
    private $_usedProperties = [];

    public function httpCache(array $value = []): \Symfony\Config\Shopware\HttpCacheConfig
    {
        if (null === $this->httpCache) {
            $this->_usedProperties['httpCache'] = true;
            $this->httpCache = new \Symfony\Config\Shopware\HttpCacheConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "httpCache()" has already been initialized. You cannot pass values the second time you call httpCache().');
        }

        return $this->httpCache;
    }

    public function numberRange(array $value = []): \Symfony\Config\Shopware\NumberRangeConfig
    {
        if (null === $this->numberRange) {
            $this->_usedProperties['numberRange'] = true;
            $this->numberRange = new \Symfony\Config\Shopware\NumberRangeConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "numberRange()" has already been initialized. You cannot pass values the second time you call numberRange().');
        }

        return $this->numberRange;
    }

    public function profiler(array $value = []): \Symfony\Config\Shopware\ProfilerConfig
    {
        if (null === $this->profiler) {
            $this->_usedProperties['profiler'] = true;
            $this->profiler = new \Symfony\Config\Shopware\ProfilerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "profiler()" has already been initialized. You cannot pass values the second time you call profiler().');
        }

        return $this->profiler;
    }

    public function filesystem(array $value = []): \Symfony\Config\Shopware\FilesystemConfig
    {
        if (null === $this->filesystem) {
            $this->_usedProperties['filesystem'] = true;
            $this->filesystem = new \Symfony\Config\Shopware\FilesystemConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "filesystem()" has already been initialized. You cannot pass values the second time you call filesystem().');
        }

        return $this->filesystem;
    }

    public function cdn(array $value = []): \Symfony\Config\Shopware\CdnConfig
    {
        if (null === $this->cdn) {
            $this->_usedProperties['cdn'] = true;
            $this->cdn = new \Symfony\Config\Shopware\CdnConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "cdn()" has already been initialized. You cannot pass values the second time you call cdn().');
        }

        return $this->cdn;
    }

    public function api(array $value = []): \Symfony\Config\Shopware\ApiConfig
    {
        if (null === $this->api) {
            $this->_usedProperties['api'] = true;
            $this->api = new \Symfony\Config\Shopware\ApiConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "api()" has already been initialized. You cannot pass values the second time you call api().');
        }

        return $this->api;
    }

    public function store(array $value = []): \Symfony\Config\Shopware\StoreConfig
    {
        if (null === $this->store) {
            $this->_usedProperties['store'] = true;
            $this->store = new \Symfony\Config\Shopware\StoreConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "store()" has already been initialized. You cannot pass values the second time you call store().');
        }

        return $this->store;
    }

    public function cart(array $value = []): \Symfony\Config\Shopware\CartConfig
    {
        if (null === $this->cart) {
            $this->_usedProperties['cart'] = true;
            $this->cart = new \Symfony\Config\Shopware\CartConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "cart()" has already been initialized. You cannot pass values the second time you call cart().');
        }

        return $this->cart;
    }

    public function salesChannelContext(array $value = []): \Symfony\Config\Shopware\SalesChannelContextConfig
    {
        if (null === $this->salesChannelContext) {
            $this->_usedProperties['salesChannelContext'] = true;
            $this->salesChannelContext = new \Symfony\Config\Shopware\SalesChannelContextConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "salesChannelContext()" has already been initialized. You cannot pass values the second time you call salesChannelContext().');
        }

        return $this->salesChannelContext;
    }

    public function adminWorker(array $value = []): \Symfony\Config\Shopware\AdminWorkerConfig
    {
        if (null === $this->adminWorker) {
            $this->_usedProperties['adminWorker'] = true;
            $this->adminWorker = new \Symfony\Config\Shopware\AdminWorkerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "adminWorker()" has already been initialized. You cannot pass values the second time you call adminWorker().');
        }

        return $this->adminWorker;
    }

    public function autoUpdate(array $value = []): \Symfony\Config\Shopware\AutoUpdateConfig
    {
        if (null === $this->autoUpdate) {
            $this->_usedProperties['autoUpdate'] = true;
            $this->autoUpdate = new \Symfony\Config\Shopware\AutoUpdateConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "autoUpdate()" has already been initialized. You cannot pass values the second time you call autoUpdate().');
        }

        return $this->autoUpdate;
    }

    public function sitemap(array $value = []): \Symfony\Config\Shopware\SitemapConfig
    {
        if (null === $this->sitemap) {
            $this->_usedProperties['sitemap'] = true;
            $this->sitemap = new \Symfony\Config\Shopware\SitemapConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "sitemap()" has already been initialized. You cannot pass values the second time you call sitemap().');
        }

        return $this->sitemap;
    }

    public function deployment(array $value = []): \Symfony\Config\Shopware\DeploymentConfig
    {
        if (null === $this->deployment) {
            $this->_usedProperties['deployment'] = true;
            $this->deployment = new \Symfony\Config\Shopware\DeploymentConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "deployment()" has already been initialized. You cannot pass values the second time you call deployment().');
        }

        return $this->deployment;
    }

    public function media(array $value = []): \Symfony\Config\Shopware\MediaConfig
    {
        if (null === $this->media) {
            $this->_usedProperties['media'] = true;
            $this->media = new \Symfony\Config\Shopware\MediaConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "media()" has already been initialized. You cannot pass values the second time you call media().');
        }

        return $this->media;
    }

    public function dal(array $value = []): \Symfony\Config\Shopware\DalConfig
    {
        if (null === $this->dal) {
            $this->_usedProperties['dal'] = true;
            $this->dal = new \Symfony\Config\Shopware\DalConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "dal()" has already been initialized. You cannot pass values the second time you call dal().');
        }

        return $this->dal;
    }

    public function mail(array $value = []): \Symfony\Config\Shopware\MailConfig
    {
        if (null === $this->mail) {
            $this->_usedProperties['mail'] = true;
            $this->mail = new \Symfony\Config\Shopware\MailConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "mail()" has already been initialized. You cannot pass values the second time you call mail().');
        }

        return $this->mail;
    }

    public function feature(array $value = []): \Symfony\Config\Shopware\FeatureConfig
    {
        if (null === $this->feature) {
            $this->_usedProperties['feature'] = true;
            $this->feature = new \Symfony\Config\Shopware\FeatureConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "feature()" has already been initialized. You cannot pass values the second time you call feature().');
        }

        return $this->feature;
    }

    public function logger(array $value = []): \Symfony\Config\Shopware\LoggerConfig
    {
        if (null === $this->logger) {
            $this->_usedProperties['logger'] = true;
            $this->logger = new \Symfony\Config\Shopware\LoggerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "logger()" has already been initialized. You cannot pass values the second time you call logger().');
        }

        return $this->logger;
    }

    public function cache(array $value = []): \Symfony\Config\Shopware\CacheConfig
    {
        if (null === $this->cache) {
            $this->_usedProperties['cache'] = true;
            $this->cache = new \Symfony\Config\Shopware\CacheConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "cache()" has already been initialized. You cannot pass values the second time you call cache().');
        }

        return $this->cache;
    }

    public function htmlSanitizer(array $value = []): \Symfony\Config\Shopware\HtmlSanitizerConfig
    {
        if (null === $this->htmlSanitizer) {
            $this->_usedProperties['htmlSanitizer'] = true;
            $this->htmlSanitizer = new \Symfony\Config\Shopware\HtmlSanitizerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "htmlSanitizer()" has already been initialized. You cannot pass values the second time you call htmlSanitizer().');
        }

        return $this->htmlSanitizer;
    }

    public function increment(string $name, array $value = []): \Symfony\Config\Shopware\IncrementConfig
    {
        if (!isset($this->increment[$name])) {
            $this->_usedProperties['increment'] = true;
            $this->increment[$name] = new \Symfony\Config\Shopware\IncrementConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "increment()" has already been initialized. You cannot pass values the second time you call increment().');
        }

        return $this->increment[$name];
    }

    public function twig(array $value = []): \Symfony\Config\Shopware\TwigConfig
    {
        if (null === $this->twig) {
            $this->_usedProperties['twig'] = true;
            $this->twig = new \Symfony\Config\Shopware\TwigConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "twig()" has already been initialized. You cannot pass values the second time you call twig().');
        }

        return $this->twig;
    }

    public function dompdf(array $value = []): \Symfony\Config\Shopware\DompdfConfig
    {
        if (null === $this->dompdf) {
            $this->_usedProperties['dompdf'] = true;
            $this->dompdf = new \Symfony\Config\Shopware\DompdfConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "dompdf()" has already been initialized. You cannot pass values the second time you call dompdf().');
        }

        return $this->dompdf;
    }

    public function stock(array $value = []): \Symfony\Config\Shopware\StockConfig
    {
        if (null === $this->stock) {
            $this->_usedProperties['stock'] = true;
            $this->stock = new \Symfony\Config\Shopware\StockConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "stock()" has already been initialized. You cannot pass values the second time you call stock().');
        }

        return $this->stock;
    }

    public function usageData(array $value = []): \Symfony\Config\Shopware\UsageDataConfig
    {
        if (null === $this->usageData) {
            $this->_usedProperties['usageData'] = true;
            $this->usageData = new \Symfony\Config\Shopware\UsageDataConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "usageData()" has already been initialized. You cannot pass values the second time you call usageData().');
        }

        return $this->usageData;
    }

    public function featureToggle(array $value = []): \Symfony\Config\Shopware\FeatureToggleConfig
    {
        if (null === $this->featureToggle) {
            $this->_usedProperties['featureToggle'] = true;
            $this->featureToggle = new \Symfony\Config\Shopware\FeatureToggleConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "featureToggle()" has already been initialized. You cannot pass values the second time you call featureToggle().');
        }

        return $this->featureToggle;
    }

    public function staging(array $value = []): \Symfony\Config\Shopware\StagingConfig
    {
        if (null === $this->staging) {
            $this->_usedProperties['staging'] = true;
            $this->staging = new \Symfony\Config\Shopware\StagingConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "staging()" has already been initialized. You cannot pass values the second time you call staging().');
        }

        return $this->staging;
    }

    public function systemConfig(array $value = []): \Symfony\Config\Shopware\SystemConfigConfig
    {
        if (null === $this->systemConfig) {
            $this->_usedProperties['systemConfig'] = true;
            $this->systemConfig = new \Symfony\Config\Shopware\SystemConfigConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "systemConfig()" has already been initialized. You cannot pass values the second time you call systemConfig().');
        }

        return $this->systemConfig;
    }

    public function messenger(array $value = []): \Symfony\Config\Shopware\MessengerConfig
    {
        if (null === $this->messenger) {
            $this->_usedProperties['messenger'] = true;
            $this->messenger = new \Symfony\Config\Shopware\MessengerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "messenger()" has already been initialized. You cannot pass values the second time you call messenger().');
        }

        return $this->messenger;
    }

    public function search(array $value = []): \Symfony\Config\Shopware\SearchConfig
    {
        if (null === $this->search) {
            $this->_usedProperties['search'] = true;
            $this->search = new \Symfony\Config\Shopware\SearchConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "search()" has already been initialized. You cannot pass values the second time you call search().');
        }

        return $this->search;
    }

    public function telemetry(array $value = []): \Symfony\Config\Shopware\TelemetryConfig
    {
        if (null === $this->telemetry) {
            $this->_usedProperties['telemetry'] = true;
            $this->telemetry = new \Symfony\Config\Shopware\TelemetryConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "telemetry()" has already been initialized. You cannot pass values the second time you call telemetry().');
        }

        return $this->telemetry;
    }

    public function redis(array $value = []): \Symfony\Config\Shopware\RedisConfig
    {
        if (null === $this->redis) {
            $this->_usedProperties['redis'] = true;
            $this->redis = new \Symfony\Config\Shopware\RedisConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "redis()" has already been initialized. You cannot pass values the second time you call redis().');
        }

        return $this->redis;
    }

    public function productStream(array $value = []): \Symfony\Config\Shopware\ProductStreamConfig
    {
        if (null === $this->productStream) {
            $this->_usedProperties['productStream'] = true;
            $this->productStream = new \Symfony\Config\Shopware\ProductStreamConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "productStream()" has already been initialized. You cannot pass values the second time you call productStream().');
        }

        return $this->productStream;
    }

    public function getExtensionAlias(): string
    {
        return 'shopware';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('http_cache', $value)) {
            $this->_usedProperties['httpCache'] = true;
            $this->httpCache = new \Symfony\Config\Shopware\HttpCacheConfig($value['http_cache']);
            unset($value['http_cache']);
        }

        if (array_key_exists('number_range', $value)) {
            $this->_usedProperties['numberRange'] = true;
            $this->numberRange = new \Symfony\Config\Shopware\NumberRangeConfig($value['number_range']);
            unset($value['number_range']);
        }

        if (array_key_exists('profiler', $value)) {
            $this->_usedProperties['profiler'] = true;
            $this->profiler = new \Symfony\Config\Shopware\ProfilerConfig($value['profiler']);
            unset($value['profiler']);
        }

        if (array_key_exists('filesystem', $value)) {
            $this->_usedProperties['filesystem'] = true;
            $this->filesystem = new \Symfony\Config\Shopware\FilesystemConfig($value['filesystem']);
            unset($value['filesystem']);
        }

        if (array_key_exists('cdn', $value)) {
            $this->_usedProperties['cdn'] = true;
            $this->cdn = new \Symfony\Config\Shopware\CdnConfig($value['cdn']);
            unset($value['cdn']);
        }

        if (array_key_exists('api', $value)) {
            $this->_usedProperties['api'] = true;
            $this->api = new \Symfony\Config\Shopware\ApiConfig($value['api']);
            unset($value['api']);
        }

        if (array_key_exists('store', $value)) {
            $this->_usedProperties['store'] = true;
            $this->store = new \Symfony\Config\Shopware\StoreConfig($value['store']);
            unset($value['store']);
        }

        if (array_key_exists('cart', $value)) {
            $this->_usedProperties['cart'] = true;
            $this->cart = new \Symfony\Config\Shopware\CartConfig($value['cart']);
            unset($value['cart']);
        }

        if (array_key_exists('sales_channel_context', $value)) {
            $this->_usedProperties['salesChannelContext'] = true;
            $this->salesChannelContext = new \Symfony\Config\Shopware\SalesChannelContextConfig($value['sales_channel_context']);
            unset($value['sales_channel_context']);
        }

        if (array_key_exists('admin_worker', $value)) {
            $this->_usedProperties['adminWorker'] = true;
            $this->adminWorker = new \Symfony\Config\Shopware\AdminWorkerConfig($value['admin_worker']);
            unset($value['admin_worker']);
        }

        if (array_key_exists('auto_update', $value)) {
            $this->_usedProperties['autoUpdate'] = true;
            $this->autoUpdate = new \Symfony\Config\Shopware\AutoUpdateConfig($value['auto_update']);
            unset($value['auto_update']);
        }

        if (array_key_exists('sitemap', $value)) {
            $this->_usedProperties['sitemap'] = true;
            $this->sitemap = new \Symfony\Config\Shopware\SitemapConfig($value['sitemap']);
            unset($value['sitemap']);
        }

        if (array_key_exists('deployment', $value)) {
            $this->_usedProperties['deployment'] = true;
            $this->deployment = new \Symfony\Config\Shopware\DeploymentConfig($value['deployment']);
            unset($value['deployment']);
        }

        if (array_key_exists('media', $value)) {
            $this->_usedProperties['media'] = true;
            $this->media = new \Symfony\Config\Shopware\MediaConfig($value['media']);
            unset($value['media']);
        }

        if (array_key_exists('dal', $value)) {
            $this->_usedProperties['dal'] = true;
            $this->dal = new \Symfony\Config\Shopware\DalConfig($value['dal']);
            unset($value['dal']);
        }

        if (array_key_exists('mail', $value)) {
            $this->_usedProperties['mail'] = true;
            $this->mail = new \Symfony\Config\Shopware\MailConfig($value['mail']);
            unset($value['mail']);
        }

        if (array_key_exists('feature', $value)) {
            $this->_usedProperties['feature'] = true;
            $this->feature = new \Symfony\Config\Shopware\FeatureConfig($value['feature']);
            unset($value['feature']);
        }

        if (array_key_exists('logger', $value)) {
            $this->_usedProperties['logger'] = true;
            $this->logger = new \Symfony\Config\Shopware\LoggerConfig($value['logger']);
            unset($value['logger']);
        }

        if (array_key_exists('cache', $value)) {
            $this->_usedProperties['cache'] = true;
            $this->cache = new \Symfony\Config\Shopware\CacheConfig($value['cache']);
            unset($value['cache']);
        }

        if (array_key_exists('html_sanitizer', $value)) {
            $this->_usedProperties['htmlSanitizer'] = true;
            $this->htmlSanitizer = new \Symfony\Config\Shopware\HtmlSanitizerConfig($value['html_sanitizer']);
            unset($value['html_sanitizer']);
        }

        if (array_key_exists('increment', $value)) {
            $this->_usedProperties['increment'] = true;
            $this->increment = array_map(fn ($v) => new \Symfony\Config\Shopware\IncrementConfig($v), $value['increment']);
            unset($value['increment']);
        }

        if (array_key_exists('twig', $value)) {
            $this->_usedProperties['twig'] = true;
            $this->twig = new \Symfony\Config\Shopware\TwigConfig($value['twig']);
            unset($value['twig']);
        }

        if (array_key_exists('dompdf', $value)) {
            $this->_usedProperties['dompdf'] = true;
            $this->dompdf = new \Symfony\Config\Shopware\DompdfConfig($value['dompdf']);
            unset($value['dompdf']);
        }

        if (array_key_exists('stock', $value)) {
            $this->_usedProperties['stock'] = true;
            $this->stock = new \Symfony\Config\Shopware\StockConfig($value['stock']);
            unset($value['stock']);
        }

        if (array_key_exists('usage_data', $value)) {
            $this->_usedProperties['usageData'] = true;
            $this->usageData = new \Symfony\Config\Shopware\UsageDataConfig($value['usage_data']);
            unset($value['usage_data']);
        }

        if (array_key_exists('feature_toggle', $value)) {
            $this->_usedProperties['featureToggle'] = true;
            $this->featureToggle = new \Symfony\Config\Shopware\FeatureToggleConfig($value['feature_toggle']);
            unset($value['feature_toggle']);
        }

        if (array_key_exists('staging', $value)) {
            $this->_usedProperties['staging'] = true;
            $this->staging = new \Symfony\Config\Shopware\StagingConfig($value['staging']);
            unset($value['staging']);
        }

        if (array_key_exists('system_config', $value)) {
            $this->_usedProperties['systemConfig'] = true;
            $this->systemConfig = new \Symfony\Config\Shopware\SystemConfigConfig($value['system_config']);
            unset($value['system_config']);
        }

        if (array_key_exists('messenger', $value)) {
            $this->_usedProperties['messenger'] = true;
            $this->messenger = new \Symfony\Config\Shopware\MessengerConfig($value['messenger']);
            unset($value['messenger']);
        }

        if (array_key_exists('search', $value)) {
            $this->_usedProperties['search'] = true;
            $this->search = new \Symfony\Config\Shopware\SearchConfig($value['search']);
            unset($value['search']);
        }

        if (array_key_exists('telemetry', $value)) {
            $this->_usedProperties['telemetry'] = true;
            $this->telemetry = new \Symfony\Config\Shopware\TelemetryConfig($value['telemetry']);
            unset($value['telemetry']);
        }

        if (array_key_exists('redis', $value)) {
            $this->_usedProperties['redis'] = true;
            $this->redis = new \Symfony\Config\Shopware\RedisConfig($value['redis']);
            unset($value['redis']);
        }

        if (array_key_exists('product_stream', $value)) {
            $this->_usedProperties['productStream'] = true;
            $this->productStream = new \Symfony\Config\Shopware\ProductStreamConfig($value['product_stream']);
            unset($value['product_stream']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['httpCache'])) {
            $output['http_cache'] = $this->httpCache->toArray();
        }
        if (isset($this->_usedProperties['numberRange'])) {
            $output['number_range'] = $this->numberRange->toArray();
        }
        if (isset($this->_usedProperties['profiler'])) {
            $output['profiler'] = $this->profiler->toArray();
        }
        if (isset($this->_usedProperties['filesystem'])) {
            $output['filesystem'] = $this->filesystem->toArray();
        }
        if (isset($this->_usedProperties['cdn'])) {
            $output['cdn'] = $this->cdn->toArray();
        }
        if (isset($this->_usedProperties['api'])) {
            $output['api'] = $this->api->toArray();
        }
        if (isset($this->_usedProperties['store'])) {
            $output['store'] = $this->store->toArray();
        }
        if (isset($this->_usedProperties['cart'])) {
            $output['cart'] = $this->cart->toArray();
        }
        if (isset($this->_usedProperties['salesChannelContext'])) {
            $output['sales_channel_context'] = $this->salesChannelContext->toArray();
        }
        if (isset($this->_usedProperties['adminWorker'])) {
            $output['admin_worker'] = $this->adminWorker->toArray();
        }
        if (isset($this->_usedProperties['autoUpdate'])) {
            $output['auto_update'] = $this->autoUpdate->toArray();
        }
        if (isset($this->_usedProperties['sitemap'])) {
            $output['sitemap'] = $this->sitemap->toArray();
        }
        if (isset($this->_usedProperties['deployment'])) {
            $output['deployment'] = $this->deployment->toArray();
        }
        if (isset($this->_usedProperties['media'])) {
            $output['media'] = $this->media->toArray();
        }
        if (isset($this->_usedProperties['dal'])) {
            $output['dal'] = $this->dal->toArray();
        }
        if (isset($this->_usedProperties['mail'])) {
            $output['mail'] = $this->mail->toArray();
        }
        if (isset($this->_usedProperties['feature'])) {
            $output['feature'] = $this->feature->toArray();
        }
        if (isset($this->_usedProperties['logger'])) {
            $output['logger'] = $this->logger->toArray();
        }
        if (isset($this->_usedProperties['cache'])) {
            $output['cache'] = $this->cache->toArray();
        }
        if (isset($this->_usedProperties['htmlSanitizer'])) {
            $output['html_sanitizer'] = $this->htmlSanitizer->toArray();
        }
        if (isset($this->_usedProperties['increment'])) {
            $output['increment'] = array_map(fn ($v) => $v->toArray(), $this->increment);
        }
        if (isset($this->_usedProperties['twig'])) {
            $output['twig'] = $this->twig->toArray();
        }
        if (isset($this->_usedProperties['dompdf'])) {
            $output['dompdf'] = $this->dompdf->toArray();
        }
        if (isset($this->_usedProperties['stock'])) {
            $output['stock'] = $this->stock->toArray();
        }
        if (isset($this->_usedProperties['usageData'])) {
            $output['usage_data'] = $this->usageData->toArray();
        }
        if (isset($this->_usedProperties['featureToggle'])) {
            $output['feature_toggle'] = $this->featureToggle->toArray();
        }
        if (isset($this->_usedProperties['staging'])) {
            $output['staging'] = $this->staging->toArray();
        }
        if (isset($this->_usedProperties['systemConfig'])) {
            $output['system_config'] = $this->systemConfig->toArray();
        }
        if (isset($this->_usedProperties['messenger'])) {
            $output['messenger'] = $this->messenger->toArray();
        }
        if (isset($this->_usedProperties['search'])) {
            $output['search'] = $this->search->toArray();
        }
        if (isset($this->_usedProperties['telemetry'])) {
            $output['telemetry'] = $this->telemetry->toArray();
        }
        if (isset($this->_usedProperties['redis'])) {
            $output['redis'] = $this->redis->toArray();
        }
        if (isset($this->_usedProperties['productStream'])) {
            $output['product_stream'] = $this->productStream->toArray();
        }

        return $output;
    }

}
