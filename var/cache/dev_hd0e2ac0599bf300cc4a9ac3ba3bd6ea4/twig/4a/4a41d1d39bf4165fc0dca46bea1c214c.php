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

/* @Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig */
class __TwigTemplate_d7f644cc4af9f1cc3ec7b8c2197fb42e extends Template
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
            'layout_navigation_offcanvas_navigation_category_item_link' => [$this, 'block_layout_navigation_offcanvas_navigation_category_item_link'],
            'layout_navigation_offcanvas_navigation_categories_list_category_item_link' => [$this, 'block_layout_navigation_offcanvas_navigation_categories_list_category_item_link'],
            'layout_navigation_offcanvas_navigation_categories_list_category_item_link_text' => [$this, 'block_layout_navigation_offcanvas_navigation_categories_list_category_item_link_text'],
            'layout_navigation_offcanvas_navigation_categories_list_category_item_link_icon' => [$this, 'block_layout_navigation_offcanvas_navigation_categories_list_category_item_link_icon'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig"));

        // line 1
        $context["isActive"] = (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 1), "id", [], "any", false, false, false, 1) == ($context["activeId"] ?? null));
        // line 2
        $context["hasChildren"] = (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 2), "visibleChildCount", [], "any", false, false, false, 2) > 0);
        // line 3
        $context["url"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, SwTwigFunction::getAttribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 3));
        // line 4
        $context["name"] = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 4), "translated", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4);
        // line 5
        yield "
";
        // line 6
        yield from $this->unwrap()->yieldBlock('layout_navigation_offcanvas_navigation_category_item_link', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_navigation_offcanvas_navigation_category_item_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_category_item_link"));

        // line 7
        yield "    <li class=\"navigation-offcanvas-list-item\">
        ";
        // line 8
        yield from $this->unwrap()->yieldBlock('layout_navigation_offcanvas_navigation_categories_list_category_item_link', $context, $blocks);
        // line 30
        yield "    </li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_navigation_offcanvas_navigation_categories_list_category_item_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_categories_list_category_item_link"));

        // line 9
        yield "            <a class=\"navigation-offcanvas-link nav-item nav-link";
        if (($context["isActive"] ?? null)) {
            yield " active";
        }
        if (($context["hasChildren"] ?? null)) {
            yield " js-navigation-offcanvas-link";
        }
        yield "\"
               href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url"] ?? null), "html", null, true);
        yield "\"
                ";
        // line 11
        if (($context["hasChildren"] ?? null)) {
            // line 12
            yield "                    data-href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.menu.offcanvas", ["navigationId" => SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12)]), "html", null, true);
            yield "\"
                ";
        }
        // line 14
        yield "               itemprop=\"url\"
                ";
        // line 15
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(SwTwigFunction::getAttribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 15))) {
            yield "target=\"_blank\"";
        }
        // line 16
        yield "               title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
        yield "\">
                ";
        // line 17
        yield from $this->unwrap()->yieldBlock('layout_navigation_offcanvas_navigation_categories_list_category_item_link_text', $context, $blocks);
        // line 28
        yield "            </a>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_navigation_offcanvas_navigation_categories_list_category_item_link_text(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_categories_list_category_item_link_text"));

        // line 18
        yield "                    <span itemprop=\"name\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
        yield "</span>
                    ";
        // line 19
        if (($context["hasChildren"] ?? null)) {
            // line 20
            yield "                        ";
            yield from $this->unwrap()->yieldBlock('layout_navigation_offcanvas_navigation_categories_list_category_item_link_icon', $context, $blocks);
            // line 26
            yield "                    ";
        }
        // line 27
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_navigation_offcanvas_navigation_categories_list_category_item_link_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_categories_list_category_item_link_icon"));

        // line 21
        yield "                            <span
                                class=\"navigation-offcanvas-link-icon js-navigation-offcanvas-loading-icon\">
                            ";
        // line 23
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig", 23);
        })())->unwrap()->yield(CoreExtension::merge($context, ["pack" => "solid", "size" => "sm", "name" => "arrow-medium-right"]));
        // line 24
        yield "                        </span>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig";
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
        return array (  199 => 24,  191 => 23,  187 => 21,  177 => 20,  169 => 27,  166 => 26,  163 => 20,  161 => 19,  156 => 18,  146 => 17,  137 => 28,  135 => 17,  130 => 16,  126 => 15,  123 => 14,  117 => 12,  115 => 11,  111 => 10,  101 => 9,  91 => 8,  82 => 30,  80 => 8,  77 => 7,  60 => 6,  57 => 5,  55 => 4,  53 => 3,  51 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set isActive = item.category.id == activeId %}
{% set hasChildren = item.category.visibleChildCount > 0 %}
{% set url = category_url(item.category) %}
{% set name = item.category.translated.name %}

{% block layout_navigation_offcanvas_navigation_category_item_link %}
    <li class=\"navigation-offcanvas-list-item\">
        {% block layout_navigation_offcanvas_navigation_categories_list_category_item_link %}
            <a class=\"navigation-offcanvas-link nav-item nav-link{% if isActive %} active{% endif %}{% if hasChildren %} js-navigation-offcanvas-link{% endif %}\"
               href=\"{{ url }}\"
                {% if hasChildren %}
                    data-href=\"{{ path('frontend.menu.offcanvas', {navigationId: item.category.id}) }}\"
                {% endif %}
               itemprop=\"url\"
                {% if category_linknewtab(item.category) %}target=\"_blank\"{% endif %}
               title=\"{{ name }}\">
                {% block layout_navigation_offcanvas_navigation_categories_list_category_item_link_text %}
                    <span itemprop=\"name\">{{ name }}</span>
                    {% if hasChildren %}
                        {% block layout_navigation_offcanvas_navigation_categories_list_category_item_link_icon %}
                            <span
                                class=\"navigation-offcanvas-link-icon js-navigation-offcanvas-loading-icon\">
                            {% sw_icon 'arrow-medium-right' style { pack:'solid', size: 'sm' } %}
                        </span>
                        {% endblock %}
                    {% endif %}
                {% endblock %}
            </a>
        {% endblock %}
    </li>
{% endblock %}
", "@Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/offcanvas/item-link.html.twig");
    }
}
