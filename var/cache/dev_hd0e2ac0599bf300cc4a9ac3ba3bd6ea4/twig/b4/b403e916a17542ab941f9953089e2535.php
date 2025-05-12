<?php

use Twig\Environment;
use Shopware\Core\Framework\Adapter\Twig\SwTwigFunction;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @Storefront/storefront/component/analytics.html.twig */
class __TwigTemplate_b36ba59607abdeb8464c5f7d27b4316d extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_head_analytics' => [$this, 'block_component_head_analytics'],
            'component_head_analytics_gtag' => [$this, 'block_component_head_analytics_gtag'],
            'component_head_analytics_gtag_config' => [$this, 'block_component_head_analytics_gtag_config'],
            'component_head_analytics_gtag_consent' => [$this, 'block_component_head_analytics_gtag_consent'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/analytics.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('component_head_analytics', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_head_analytics(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_head_analytics"));

        // line 2
        yield "    ";
        yield from $this->unwrap()->yieldBlock('component_head_analytics_gtag', $context, $blocks);
        // line 26
        yield "
    ";
        // line 27
        yield from $this->unwrap()->yieldBlock('component_head_analytics_gtag_consent', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_head_analytics_gtag(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_head_analytics_gtag"));

        // line 3
        yield "        ";
        if ((($context["storefrontAnalytics"] ?? null) && SwTwigFunction::getAttribute($this->env, $this->source, ($context["storefrontAnalytics"] ?? null), "isActive", [], "method", false, false, false, 3))) {
            // line 4
            yield "            ";
            $context["trackingId"] = SwTwigFunction::getAttribute($this->env, $this->source, ($context["storefrontAnalytics"] ?? null), "getTrackingId", [], "method", false, false, false, 4);
            // line 5
            yield "
            <script>
                ";
            // line 7
            yield from $this->unwrap()->yieldBlock('component_head_analytics_gtag_config', $context, $blocks);
            // line 23
            yield "            </script>
        ";
        }
        // line 25
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_head_analytics_gtag_config(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_head_analytics_gtag_config"));

        // line 8
        yield "                    window.gtagActive = true;
                    window.gtagURL = 'https://www.googletagmanager.com/gtag/js?id=";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["trackingId"] ?? null), "html", null, true);
        yield "';
                    window.controllerName = '";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["controllerName"] ?? null)), "html", null, true);
        yield "';
                    window.actionName = '";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["controllerAction"] ?? null)), "html", null, true);
        yield "';
                    window.trackOrders = '";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["storefrontAnalytics"] ?? null), "isTrackOrders", [], "method", false, false, false, 12), "html", null, true);
        yield "';
                    window.gtagTrackingId = '";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["trackingId"] ?? null), "html", null, true);
        yield "';
                    window.dataLayer = window.dataLayer || [];
                    window.gtagConfig = {
                        'anonymize_ip': '";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["storefrontAnalytics"] ?? null), "isAnonymizeIp", [], "method", false, false, false, 16), "html", null, true);
        yield "',
                        'cookie_domain': 'none',
                        'cookie_prefix': '_swag_ga',
                    };

                    function gtag() { dataLayer.push(arguments); }
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_head_analytics_gtag_consent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_head_analytics_gtag_consent"));

        // line 28
        yield "        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() { dataLayer.push(arguments); }

            (() => {
                const analyticsStorageEnabled = document.cookie.split(';').some((item) => item.trim().includes('google-analytics-enabled=1'));
                const adsEnabled = document.cookie.split(';').some((item) => item.trim().includes('google-ads-enabled=1'));

                // Always set a default consent for consent mode v2
                gtag('consent', 'default', {
                    'ad_user_data': adsEnabled ? 'granted' : 'denied',
                    'ad_storage': adsEnabled ? 'granted' : 'denied',
                    'ad_personalization': adsEnabled ? 'granted' : 'denied',
                    'analytics_storage': analyticsStorageEnabled ? 'granted' : 'denied'
                });
            })();
        </script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/component/analytics.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  174 => 28,  164 => 27,  149 => 16,  143 => 13,  139 => 12,  135 => 11,  131 => 10,  127 => 9,  124 => 8,  114 => 7,  106 => 25,  102 => 23,  100 => 7,  96 => 5,  93 => 4,  90 => 3,  80 => 2,  72 => 27,  69 => 26,  66 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block component_head_analytics %}
    {% block component_head_analytics_gtag %}
        {% if storefrontAnalytics and storefrontAnalytics.isActive() %}
            {% set trackingId = storefrontAnalytics.getTrackingId() %}

            <script>
                {% block component_head_analytics_gtag_config %}
                    window.gtagActive = true;
                    window.gtagURL = 'https://www.googletagmanager.com/gtag/js?id={{ trackingId }}';
                    window.controllerName = '{{ controllerName|lower }}';
                    window.actionName = '{{ controllerAction|lower }}';
                    window.trackOrders = '{{ storefrontAnalytics.isTrackOrders() }}';
                    window.gtagTrackingId = '{{ trackingId }}';
                    window.dataLayer = window.dataLayer || [];
                    window.gtagConfig = {
                        'anonymize_ip': '{{ storefrontAnalytics.isAnonymizeIp() }}',
                        'cookie_domain': 'none',
                        'cookie_prefix': '_swag_ga',
                    };

                    function gtag() { dataLayer.push(arguments); }
                {% endblock %}
            </script>
        {% endif %}
    {% endblock %}

    {% block component_head_analytics_gtag_consent %}
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() { dataLayer.push(arguments); }

            (() => {
                const analyticsStorageEnabled = document.cookie.split(';').some((item) => item.trim().includes('google-analytics-enabled=1'));
                const adsEnabled = document.cookie.split(';').some((item) => item.trim().includes('google-ads-enabled=1'));

                // Always set a default consent for consent mode v2
                gtag('consent', 'default', {
                    'ad_user_data': adsEnabled ? 'granted' : 'denied',
                    'ad_storage': adsEnabled ? 'granted' : 'denied',
                    'ad_personalization': adsEnabled ? 'granted' : 'denied',
                    'analytics_storage': analyticsStorageEnabled ? 'granted' : 'denied'
                });
            })();
        </script>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/component/analytics.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/component/analytics.html.twig");
    }
}
