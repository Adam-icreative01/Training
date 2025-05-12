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

/* @Storefront/storefront/layout/navigation/offcanvas/categories.html.twig */
class __TwigTemplate_e6836af8d59b48ef45408239968c77fc extends Template
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
            'layout_navigation_offcanvas_navigation_categories' => [$this, 'block_layout_navigation_offcanvas_navigation_categories'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig"));

        // line 2
        $context["activeId"] = (((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["shopware"] ?? null), "navigation", [], "any", false, true, false, 2), "id", [], "any", true, true, false, 2) &&  !(null === SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["shopware"] ?? null), "navigation", [], "any", false, false, false, 2), "id", [], "any", false, false, false, 2)))) ? (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["shopware"] ?? null), "navigation", [], "any", false, false, false, 2), "id", [], "any", false, false, false, 2)) : (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 2), "navigationCategoryId", [], "any", false, false, false, 2)));
        // line 3
        $context["isRoot"] = (($context["activeId"] ?? null) == SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 3), "navigationCategoryId", [], "any", false, false, false, 3));
        // line 4
        $context["children"] = SwTwigFunction::getAttribute($this->env, $this->source, ($context["navigation"] ?? null), "getChildren", [($context["activeId"] ?? null)], "method", false, false, false, 4);
        // line 5
        $context["active"] = SwTwigFunction::getAttribute($this->env, $this->source, ($context["navigation"] ?? null), "active", [], "any", false, false, false, 5);
        // line 6
        yield "
";
        // line 7
        yield from $this->unwrap()->yieldBlock('layout_navigation_offcanvas_navigation_categories', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_navigation_offcanvas_navigation_categories(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_categories"));

        // line 8
        yield "    <div class=\"navigation-offcanvas-container js-navigation-offcanvas\">
        <div class=\"navigation-offcanvas-overlay-content js-navigation-offcanvas-overlay-content\">
            ";
        // line 10
        if ( !($context["isRoot"] ?? null)) {
            // line 11
            yield "                ";
            yield from $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/show-all-link.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig", 11)->unwrap()->yield($context);
            // line 12
            yield "
                ";
            // line 13
            yield from $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/active-item-link.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig", 13)->unwrap()->yield(CoreExtension::merge($context, ["item" => ($context["active"] ?? null)]));
            // line 14
            yield "
                ";
            // line 15
            yield from $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig", 15)->unwrap()->yield(CoreExtension::merge($context, ["item" => ($context["active"] ?? null)]));
            // line 16
            yield "            ";
        } else {
            // line 17
            yield "                ";
            yield from $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/general-headline.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig", 17)->unwrap()->yield($context);
            // line 18
            yield "            ";
        }
        // line 19
        yield "
            <ul class=\"list-unstyled navigation-offcanvas-list\">
                ";
        // line 21
        if (( !($context["isRoot"] ?? null) && (SwTwigFunction::getAttribute($this->env, $this->source, ($context["active"] ?? null), "type", [], "any", false, false, false, 21) != "folder"))) {
            // line 22
            yield "                    ";
            yield from $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/show-active-link.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig", 22)->unwrap()->yield(CoreExtension::merge($context, ["item" => ($context["active"] ?? null)]));
            // line 23
            yield "                ";
        }
        // line 24
        yield "
                ";
        // line 26
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(SwTwigFunction::getAttribute($this->env, $this->source, ($context["children"] ?? null), "tree", [], "any", false, false, false, 26));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 27
            yield "                    ";
            yield from $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig", 27)->unwrap()->yield(CoreExtension::merge($context, ["item" => $context["item"], "activeId" => ($context["activeId"] ?? null)]));
            // line 28
            yield "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "            </ul>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig";
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
        return array (  152 => 29,  138 => 28,  135 => 27,  117 => 26,  114 => 24,  111 => 23,  108 => 22,  106 => 21,  102 => 19,  99 => 18,  96 => 17,  93 => 16,  91 => 15,  88 => 14,  86 => 13,  83 => 12,  80 => 11,  78 => 10,  74 => 8,  57 => 7,  54 => 6,  52 => 5,  50 => 4,  48 => 3,  46 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var navigation \\Shopware\\Core\\Content\\Category\\Tree\\Tree #}
{% set activeId = shopware.navigation.id ?? context.salesChannel.navigationCategoryId %}
{% set isRoot = activeId == context.salesChannel.navigationCategoryId %}
{% set children = navigation.getChildren(activeId) %}
{% set active = navigation.active %}

{% block layout_navigation_offcanvas_navigation_categories %}
    <div class=\"navigation-offcanvas-container js-navigation-offcanvas\">
        <div class=\"navigation-offcanvas-overlay-content js-navigation-offcanvas-overlay-content\">
            {% if not isRoot %}
                {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/show-all-link.html.twig' %}

                {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/active-item-link.html.twig' with { item: active } %}

                {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig' with { item: active } %}
            {% else %}
                {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/general-headline.html.twig' %}
            {% endif %}

            <ul class=\"list-unstyled navigation-offcanvas-list\">
                {% if not isRoot and active.type != 'folder' %}
                    {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/show-active-link.html.twig' with { item: active } %}
                {% endif %}

                {# @var item \\Shopware\\Core\\Content\\Category\\Tree\\TreeItem #}
                {% for item in children.tree %}
                    {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig' with { item: item, activeId: activeId } %}
                {% endfor %}
            </ul>
        </div>
    </div>
{% endblock %}
", "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/offcanvas/categories.html.twig");
    }
}
