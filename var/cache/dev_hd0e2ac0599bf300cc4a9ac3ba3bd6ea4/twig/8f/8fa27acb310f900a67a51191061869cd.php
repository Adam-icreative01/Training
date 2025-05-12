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

/* @Storefront/storefront/utilities/staging-info.html.twig */
class __TwigTemplate_3956d66d9e49dec10e7a70523580e6c2 extends Template
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
            'staging_info' => [$this, 'block_staging_info'],
            'staging_info_admin_url_wrapper' => [$this, 'block_staging_info_admin_url_wrapper'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/utilities/staging-info.html.twig"));

        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('staging_info', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_staging_info(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "staging_info"));

        // line 4
        yield "    ";
        if ((SwTwigFunction::getAttribute($this->env, $this->source, ($context["shopware"] ?? null), "showStagingBanner", [], "any", false, false, false, 4) && $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.staging"))) {
            // line 5
            yield "        <div class=\"storefront-staging-info bg-secondary text-white sticky-top z-index-1000 d-flex justify-content-center align-items-center p-3\">
            ";
            // line 6
            yield from             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/utilities/staging-info.html.twig", 6);
            })())->unwrap()->yield(CoreExtension::merge($context, ["class" => "flex-shrink-0 me-2", "name" => "eye-open"]));
            // line 7
            yield "
            <p class=\"m-0 fw-bold\">
                ";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.stagingModeDescription"), "html", null, true);
            yield "
            </p>

            ";
            // line 12
            yield from $this->unwrap()->yieldBlock('staging_info_admin_url_wrapper', $context, $blocks);
            // line 32
            yield "        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_staging_info_admin_url_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "staging_info_admin_url_wrapper"));

        // line 13
        yield "                ";
        $context["adminBaseUrl"] = (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 13), "attributes", [], "any", false, false, false, 13), "get", ["sw-sales-channel-absolute-base-url"], "method", false, false, false, 13) . "/admin#/sw");
        // line 14
        yield "                ";
        if ((($context["activeRoute"] ?? null) === "frontend.navigation.page")) {
            // line 15
            yield "                    ";
            $context["quickViewUrl"] = ((($context["adminBaseUrl"] ?? null) . "/category/index/") . SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 15), "attributes", [], "any", false, false, false, 15), "get", ["navigationId"], "method", false, false, false, 15));
            // line 16
            yield "                ";
        } elseif ((($context["activeRoute"] ?? null) === "frontend.detail.page")) {
            // line 17
            yield "                    ";
            $context["quickViewUrl"] = ((($context["adminBaseUrl"] ?? null) . "/product/detail/") . SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 17), "attributes", [], "any", false, false, false, 17), "get", ["productId"], "method", false, false, false, 17));
            // line 18
            yield "                ";
        } elseif ((($context["activeRoute"] ?? null) === "frontend.landing.page")) {
            // line 19
            yield "                    ";
            $context["quickViewUrl"] = ((($context["adminBaseUrl"] ?? null) . "/category/landingPage/") . SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 19), "attributes", [], "any", false, false, false, 19), "get", ["landingPageId"], "method", false, false, false, 19));
            // line 20
            yield "                ";
        }
        // line 21
        yield "
                ";
        // line 22
        if (($context["quickViewUrl"] ?? null)) {
            // line 23
            yield "                    ";
            yield from             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/utilities/staging-info.html.twig", 23);
            })())->unwrap()->yield(CoreExtension::merge($context, ["class" => "flex-shrink-0 ms-2 me-2", "name" => "link"]));
            // line 24
            yield "
                    <p class=\"m-0 fw-bold\">
                        <a href=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["quickViewUrl"] ?? null), "html", null, true);
            yield "\" target=\"_blank\" class=\"text-white\">
                            ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, false, false, 27), "metaTitle", [], "any", false, false, false, 27), "html", null, true);
            yield "
                        </a>
                    </p>
                ";
        }
        // line 31
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/utilities/staging-info.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  166 => 31,  159 => 27,  155 => 26,  151 => 24,  142 => 23,  140 => 22,  137 => 21,  134 => 20,  131 => 19,  128 => 18,  125 => 17,  122 => 16,  119 => 15,  116 => 14,  113 => 13,  103 => 12,  93 => 32,  91 => 12,  85 => 9,  81 => 7,  73 => 6,  70 => 5,  67 => 4,  50 => 3,  47 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @sw-package framework #}

{% block staging_info %}
    {% if shopware.showStagingBanner and config('core.staging') %}
        <div class=\"storefront-staging-info bg-secondary text-white sticky-top z-index-1000 d-flex justify-content-center align-items-center p-3\">
            {% sw_icon 'eye-open' style { class : 'flex-shrink-0 me-2'} %}

            <p class=\"m-0 fw-bold\">
                {{ 'general.stagingModeDescription'|trans }}
            </p>

            {% block staging_info_admin_url_wrapper %}
                {% set adminBaseUrl = app.request.attributes.get('sw-sales-channel-absolute-base-url') ~ '/admin#/sw' %}
                {% if activeRoute is same as ('frontend.navigation.page') %}
                    {% set quickViewUrl = adminBaseUrl ~ '/category/index/' ~ app.request.attributes.get('navigationId') %}
                {% elseif activeRoute is same as ('frontend.detail.page') %}
                    {% set quickViewUrl = adminBaseUrl ~ '/product/detail/' ~ app.request.attributes.get('productId') %}
                {% elseif activeRoute is same as ('frontend.landing.page') %}
                    {% set quickViewUrl = adminBaseUrl ~ '/category/landingPage/' ~ app.request.attributes.get('landingPageId') %}
                {% endif %}

                {% if quickViewUrl %}
                    {% sw_icon 'link' style { class : 'flex-shrink-0 ms-2 me-2'} %}

                    <p class=\"m-0 fw-bold\">
                        <a href=\"{{ quickViewUrl }}\" target=\"_blank\" class=\"text-white\">
                            {{ page.metaInformation.metaTitle }}
                        </a>
                    </p>
                {% endif %}
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/utilities/staging-info.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/utilities/staging-info.html.twig");
    }
}
