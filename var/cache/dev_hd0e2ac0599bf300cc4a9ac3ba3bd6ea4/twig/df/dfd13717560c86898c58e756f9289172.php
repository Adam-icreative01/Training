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

/* @Storefront/storefront/element/cms-element-sidebar-filter.html.twig */
class __TwigTemplate_1486e15bab44b091cc4f8bbb942963e7 extends Template
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
            'element_sidebar_filter' => [$this, 'block_element_sidebar_filter'],
            'element_product_listing_filter_button' => [$this, 'block_element_product_listing_filter_button'],
            'element_product_listing_filter_button_icon' => [$this, 'block_element_product_listing_filter_button_icon'],
            'element_sidebar_filter_panel' => [$this, 'block_element_sidebar_filter_panel'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('element_sidebar_filter', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_element_sidebar_filter(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_sidebar_filter"));

        // line 2
        yield "    ";
        // line 3
        yield "    ";
        if (array_key_exists("cmsPage", $context)) {
            // line 4
            yield "        ";
            $context["config"] = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "fieldConfig", [], "any", false, false, false, 4), "elements", [], "any", false, false, false, 4);
            // line 5
            yield "        ";
            $context["slot"] = SwTwigFunction::getAttribute($this->env, $this->source, ($context["cmsPage"] ?? null), "getFirstElementOfType", ["product-listing"], "method", false, false, false, 5);
            // line 6
            yield "        ";
            $context["listing"] = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["slot"] ?? null), "data", [], "any", false, false, false, 6), "listing", [], "any", false, false, false, 6);
            // line 7
            yield "        ";
            $context["sidebar"] = (SwTwigFunction::getAttribute($this->env, $this->source, ($context["block"] ?? null), "sectionPosition", [], "any", false, false, false, 7) == "sidebar");
            // line 8
            yield "    ";
        }
        // line 9
        yield "
    ";
        // line 10
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 10), "elements", [], "any", false, false, false, 10)) > 0)) {
            // line 11
            yield "        <div class=\"cms-element-sidebar-filter\">
            ";
            // line 12
            yield from $this->unwrap()->yieldBlock('element_product_listing_filter_button', $context, $blocks);
            // line 27
            yield "
            ";
            // line 28
            yield from $this->unwrap()->yieldBlock('element_sidebar_filter_panel', $context, $blocks);
            // line 41
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
    public function block_element_product_listing_filter_button(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_filter_button"));

        // line 13
        yield "                <button
                    class=\"btn btn-outline-primary filter-panel-wrapper-toggle\"
                    type=\"button\"
                    data-off-canvas-filter=\"true\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                >
                    ";
        // line 20
        yield from $this->unwrap()->yieldBlock('element_product_listing_filter_button_icon', $context, $blocks);
        // line 23
        yield "
                    ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterTitleText"), "html", null, true);
        yield "
                </button>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_element_product_listing_filter_button_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_filter_button_icon"));

        // line 21
        yield "                        ";
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig", 21);
        })())->unwrap()->yield(CoreExtension::merge($context, ["size" => "sm", "ariaHidden" => true, "name" => "sliders-horizontal"]));
        // line 22
        yield "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_element_sidebar_filter_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_sidebar_filter_panel"));

        // line 29
        yield "                <div
                    id=\"filter-panel-wrapper\"
                    class=\"filter-panel-wrapper\"
                    data-off-canvas-filter-content=\"true\"
                >
                    ";
        // line 34
        yield from $this->loadTemplate("@Storefront/storefront/component/listing/filter-panel.html.twig", "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig", 34)->unwrap()->yield(CoreExtension::merge($context, ["listing" =>         // line 35
($context["listing"] ?? null), "sidebar" =>         // line 36
($context["sidebar"] ?? null), "ariaLiveUpdates" => true]));
        // line 39
        yield "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  194 => 39,  192 => 36,  191 => 35,  190 => 34,  183 => 29,  173 => 28,  165 => 22,  156 => 21,  146 => 20,  135 => 24,  132 => 23,  130 => 20,  121 => 13,  111 => 12,  101 => 41,  99 => 28,  96 => 27,  94 => 12,  91 => 11,  89 => 10,  86 => 9,  83 => 8,  80 => 7,  77 => 6,  74 => 5,  71 => 4,  68 => 3,  66 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block element_sidebar_filter %}
    {# Use values from cms data if context is a cmsPage, otherwise `listing` and `sidebar` must be set manually #}
    {% if cmsPage is defined %}
        {% set config = element.fieldConfig.elements %}
        {% set slot = cmsPage.getFirstElementOfType('product-listing') %}
        {% set listing = slot.data.listing %}
        {% set sidebar = block.sectionPosition == 'sidebar' %}
    {% endif %}

    {% if listing.aggregations.elements|length > 0 %}
        <div class=\"cms-element-sidebar-filter\">
            {% block element_product_listing_filter_button %}
                <button
                    class=\"btn btn-outline-primary filter-panel-wrapper-toggle\"
                    type=\"button\"
                    data-off-canvas-filter=\"true\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                >
                    {% block element_product_listing_filter_button_icon %}
                        {% sw_icon 'sliders-horizontal' style { size: 'sm', ariaHidden: true } %}
                    {% endblock %}

                    {{ 'listing.filterTitleText'|trans }}
                </button>
            {% endblock %}

            {% block element_sidebar_filter_panel %}
                <div
                    id=\"filter-panel-wrapper\"
                    class=\"filter-panel-wrapper\"
                    data-off-canvas-filter-content=\"true\"
                >
                    {% sw_include '@Storefront/storefront/component/listing/filter-panel.html.twig' with {
                        listing: listing,
                        sidebar: sidebar,
                        ariaLiveUpdates: true
                    } %}
                </div>
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-sidebar-filter.html.twig");
    }
}
