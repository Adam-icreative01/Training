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

/* @Storefront/storefront/element/cms-element-product-listing.html.twig */
class __TwigTemplate_b78832393fdc0dae118e6566c3238548 extends Template
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
            'element_product_listing' => [$this, 'block_element_product_listing'],
            'element_product_listing_wrapper' => [$this, 'block_element_product_listing_wrapper'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-product-listing.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('element_product_listing', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_element_product_listing(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing"));

        // line 2
        yield "    ";
        // line 3
        yield "    ";
        $context["searchResult"] = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 3), "listing", [], "any", false, false, false, 3);
        // line 4
        yield "    ";
        $context["listingColumns"] = "col-sm-6 col-lg-4 col-xl-3";
        // line 5
        yield "
    ";
        // line 6
        if ((($context["section"] ?? null) && (SwTwigFunction::getAttribute($this->env, $this->source, ($context["section"] ?? null), "type", [], "any", false, false, false, 6) == "sidebar"))) {
            // line 7
            yield "        ";
            $context["listingColumns"] = "col-sm-6 col-lg-6 col-xl-4";
            // line 8
            yield "    ";
        }
        // line 9
        yield "
    ";
        // line 10
        $context["slot"] = SwTwigFunction::getAttribute($this->env, $this->source, ($context["cmsPage"] ?? null), "getFirstElementOfType", ["product-listing"], "method", false, false, false, 10);
        // line 11
        yield "
    ";
        // line 12
        $context["filterUrl"] = null;
        // line 13
        yield "    ";
        $context["dataUrl"] = null;
        // line 14
        yield "
    ";
        // line 15
        if (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["searchResult"] ?? null), "currentFilters", [], "any", false, false, false, 15), "navigationId", [], "any", false, false, false, 15)) {
            // line 16
            yield "        ";
            $context["filterUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.navigation.filter", ["navigationId" => SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["searchResult"] ?? null), "currentFilters", [], "any", false, false, false, 16), "navigationId", [], "any", false, false, false, 16)]);
            // line 17
            yield "        ";
            $context["dataUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.navigation.page", ["navigationId" => SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["searchResult"] ?? null), "currentFilters", [], "any", false, false, false, 17), "navigationId", [], "any", false, false, false, 17)]);
            // line 18
            yield "    ";
        }
        // line 19
        yield "
    ";
        // line 20
        $context["sidebar"] = (($context["sectionType"] ?? null) == "sidebar");
        // line 21
        yield "    ";
        $context["params"] = ["slots" => SwTwigFunction::getAttribute($this->env, $this->source, ($context["slot"] ?? null), "id", [], "any", false, false, false, 21), "no-aggregations" => 1];
        // line 22
        yield "
    ";
        // line 23
        yield from $this->unwrap()->yieldBlock('element_product_listing_wrapper', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_element_product_listing_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_wrapper"));

        // line 24
        yield "        ";
        yield from $this->loadTemplate("@Storefront/storefront/component/product/listing.html.twig", "@Storefront/storefront/element/cms-element-product-listing.html.twig", 24)->unwrap()->yield(CoreExtension::merge($context, ["searchResult" =>         // line 25
($context["searchResult"] ?? null), "dataUrl" =>         // line 26
($context["dataUrl"] ?? null), "filterUrl" =>         // line 27
($context["filterUrl"] ?? null), "params" =>         // line 28
($context["params"] ?? null), "sidebar" =>         // line 29
($context["sidebar"] ?? null), "boxLayout" => SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source,         // line 30
($context["element"] ?? null), "translated", [], "any", false, false, false, 30), "config", [], "any", false, false, false, 30), "boxLayout", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30), "displayMode" => SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source,         // line 31
($context["element"] ?? null), "translated", [], "any", false, false, false, 31), "config", [], "any", false, false, false, 31), "displayMode", [], "any", false, false, false, 31), "value", [], "any", false, false, false, 31), "listingColumns" =>         // line 32
($context["listingColumns"] ?? null), "ariaLiveUpdates" => true]));
        // line 35
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/element/cms-element-product-listing.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  149 => 35,  147 => 32,  146 => 31,  145 => 30,  144 => 29,  143 => 28,  142 => 27,  141 => 26,  140 => 25,  138 => 24,  121 => 23,  118 => 22,  115 => 21,  113 => 20,  110 => 19,  107 => 18,  104 => 17,  101 => 16,  99 => 15,  96 => 14,  93 => 13,  91 => 12,  88 => 11,  86 => 10,  83 => 9,  80 => 8,  77 => 7,  75 => 6,  72 => 5,  69 => 4,  66 => 3,  64 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block element_product_listing %}
    {# @var result \\Shopware\\Core\\Framework\\DataAbstractionLayer\\Search\\EntitySearchResult #}
    {% set searchResult = element.data.listing %}
    {% set listingColumns = 'col-sm-6 col-lg-4 col-xl-3' %}

    {% if section and section.type == 'sidebar' %}
        {% set listingColumns = 'col-sm-6 col-lg-6 col-xl-4' %}
    {% endif %}

    {% set slot = cmsPage.getFirstElementOfType('product-listing') %}

    {% set filterUrl = null %}
    {% set dataUrl = null %}

    {% if searchResult.currentFilters.navigationId %}
        {% set filterUrl = path('frontend.cms.navigation.filter', { navigationId: searchResult.currentFilters.navigationId }) %}
        {% set dataUrl = path('frontend.cms.navigation.page', { navigationId: searchResult.currentFilters.navigationId }) %}
    {% endif %}

    {% set sidebar = sectionType == 'sidebar' %}
    {% set params = { slots: slot.id, 'no-aggregations': 1 } %}

    {% block element_product_listing_wrapper %}
        {% sw_include '@Storefront/storefront/component/product/listing.html.twig' with {
            searchResult: searchResult,
            dataUrl: dataUrl,
            filterUrl: filterUrl,
            params: params,
            sidebar: sidebar,
            boxLayout: element.translated.config.boxLayout.value,
            displayMode: element.translated.config.displayMode.value,
            listingColumns: listingColumns,
            ariaLiveUpdates: true
        } %}
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/element/cms-element-product-listing.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-product-listing.html.twig");
    }
}
