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

/* @Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig */
class __TwigTemplate_55a543fc261ad90a6c7b42d92c443f1c extends Template
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

        $this->blocks = [
            'utilities_offcanvas_content' => [$this, 'block_utilities_offcanvas_content'],
            'layout_navigation_offcanvas_navigation_actions' => [$this, 'block_layout_navigation_offcanvas_navigation_actions'],
            'layout_navigation_offcanvas_navigation_action_language' => [$this, 'block_layout_navigation_offcanvas_navigation_action_language'],
            'layout_navigation_offcanvas_navigation_action_currency' => [$this, 'block_layout_navigation_offcanvas_navigation_action_currency'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "@Storefront/storefront/utilities/offcanvas.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/utilities/offcanvas.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_utilities_offcanvas_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_offcanvas_content"));

        // line 4
        yield "    ";
        yield from $this->unwrap()->yieldBlock('layout_navigation_offcanvas_navigation_actions', $context, $blocks);
        // line 15
        yield "
    ";
        // line 16
        yield from $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["navigation" => ($context["navigation"] ?? null)]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_navigation_offcanvas_navigation_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_actions"));

        // line 5
        yield "        <nav class=\"nav navigation-offcanvas-actions\">
            ";
        // line 6
        yield from $this->unwrap()->yieldBlock('layout_navigation_offcanvas_navigation_action_language', $context, $blocks);
        // line 9
        yield "
            ";
        // line 10
        yield from $this->unwrap()->yieldBlock('layout_navigation_offcanvas_navigation_action_currency', $context, $blocks);
        // line 13
        yield "        </nav>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_navigation_offcanvas_navigation_action_language(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_action_language"));

        // line 7
        yield "                ";
        yield from $this->loadTemplate("@Storefront/storefront/layout/header/actions/language-widget.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig", 7)->unwrap()->yield(CoreExtension::merge($context, ["position" => "offcanvas"]));
        // line 8
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_navigation_offcanvas_navigation_action_currency(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_action_currency"));

        // line 11
        yield "                ";
        yield from $this->loadTemplate("@Storefront/storefront/layout/header/actions/currency-widget.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig", 11)->unwrap()->yield(CoreExtension::merge($context, ["position" => "offcanvas"]));
        // line 12
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  147 => 12,  144 => 11,  134 => 10,  126 => 8,  123 => 7,  113 => 6,  104 => 13,  102 => 10,  99 => 9,  97 => 6,  94 => 5,  84 => 4,  76 => 16,  73 => 15,  70 => 4,  60 => 3,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% sw_extends '@Storefront/storefront/utilities/offcanvas.html.twig' %}

{% block utilities_offcanvas_content %}
    {% block layout_navigation_offcanvas_navigation_actions %}
        <nav class=\"nav navigation-offcanvas-actions\">
            {% block layout_navigation_offcanvas_navigation_action_language %}
                {% sw_include '@Storefront/storefront/layout/header/actions/language-widget.html.twig' with {position: 'offcanvas'} %}
            {% endblock %}

            {% block layout_navigation_offcanvas_navigation_action_currency %}
                {% sw_include '@Storefront/storefront/layout/header/actions/currency-widget.html.twig' with {position: 'offcanvas'} %}
            {% endblock %}
        </nav>
    {% endblock %}

    {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig' with { navigation: navigation } %}
{% endblock %}
", "@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/offcanvas/navigation.html.twig");
    }
}
