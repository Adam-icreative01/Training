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

/* @Storefront/storefront/component/recaptcha.html.twig */
class __TwigTemplate_23ac2bfa203776fa4d5d32d3fcbe52f9 extends Template
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
            'component_head_javascript_recaptcha' => [$this, 'block_component_head_javascript_recaptcha'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/recaptcha.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('component_head_javascript_recaptcha', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_head_javascript_recaptcha(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_head_javascript_recaptcha"));

        // line 2
        yield "    ";
        $context["recaptchaV2Active"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.activeCaptchasV2.googleReCaptchaV2.isActive");
        // line 3
        yield "    ";
        $context["recaptchaV3Active"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.activeCaptchasV2.googleReCaptchaV3.isActive");
        // line 4
        yield "
    ";
        // line 5
        if ((($context["recaptchaV2Active"] ?? null) || ($context["recaptchaV3Active"] ?? null))) {
            // line 6
            yield "        <script type=\"text/javascript\"
                ";
            // line 8
            yield "                src='https://www.google.com/recaptcha/api.js";
            if (($context["recaptchaV3Active"] ?? null)) {
                yield "?render=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.activeCaptchasV2.googleReCaptchaV3.config.siteKey"), "html", null, true);
            }
            yield "'
                defer></script>
        <script>
            ";
            // line 11
            if (($context["recaptchaV2Active"] ?? null)) {
                // line 12
                yield "                window.googleReCaptchaV2Active = true;
            ";
            }
            // line 14
            yield "            ";
            if (($context["recaptchaV3Active"] ?? null)) {
                // line 15
                yield "                window.googleReCaptchaV3Active = true;
            ";
            }
            // line 17
            yield "        </script>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/component/recaptcha.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  100 => 17,  96 => 15,  93 => 14,  89 => 12,  87 => 11,  77 => 8,  74 => 6,  72 => 5,  69 => 4,  66 => 3,  63 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block component_head_javascript_recaptcha %}
    {% set recaptchaV2Active = config('core.basicInformation.activeCaptchasV2.googleReCaptchaV2.isActive') %}
    {% set recaptchaV3Active = config('core.basicInformation.activeCaptchasV2.googleReCaptchaV3.isActive') %}

    {% if recaptchaV2Active or recaptchaV3Active %}
        <script type=\"text/javascript\"
                {# ludtwig-ignore html-string-quotation #}
                src='https://www.google.com/recaptcha/api.js{% if recaptchaV3Active %}?render={{ config('core.basicInformation.activeCaptchasV2.googleReCaptchaV3.config.siteKey') }}{% endif %}'
                defer></script>
        <script>
            {% if recaptchaV2Active %}
                window.googleReCaptchaV2Active = true;
            {% endif %}
            {% if recaptchaV3Active %}
                window.googleReCaptchaV3Active = true;
            {% endif %}
        </script>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/component/recaptcha.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/component/recaptcha.html.twig");
    }
}
