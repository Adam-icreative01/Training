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

/* @Storefront/storefront/layout/breadcrumb.html.twig */
class __TwigTemplate_ef30d8f073aebdb858841b5a4d210f7d extends Template
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
            'layout_breadcrumb_inner' => [$this, 'block_layout_breadcrumb_inner'],
            'layout_breadcrumb_list' => [$this, 'block_layout_breadcrumb_list'],
            'layout_breadcrumb_list_item' => [$this, 'block_layout_breadcrumb_list_item'],
            'layout_breadcrumb_placeholder' => [$this, 'block_layout_breadcrumb_placeholder'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/breadcrumb.html.twig"));

        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('layout_breadcrumb_inner', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_breadcrumb_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_inner"));

        // line 4
        yield "    ";
        if (($context["category"] ?? null)) {
            // line 5
            yield "        ";
            $context["breadcrumbCategories"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\BuildBreadcrumbExtension']->getFullBreadcrumb($context, ($context["category"] ?? null), SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "context", [], "any", false, false, false, 5));
            // line 6
            yield "        ";
            $context["categoryId"] = SwTwigFunction::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 6);
            // line 7
            yield "    ";
        } elseif (($context["categoryId"] ?? null)) {
            // line 8
            yield "        ";
            $context["breadcrumbCategories"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\BuildBreadcrumbExtension']->getFullBreadcrumbById($context, ($context["categoryId"] ?? null), SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "context", [], "any", false, false, false, 8));
            // line 9
            yield "    ";
        } else {
            // line 10
            yield "        ";
            return;
            // line 11
            yield "    ";
        }
        // line 12
        yield "
    ";
        // line 13
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["breadcrumbCategories"] ?? null)) > 0)) {
            // line 14
            yield "        ";
            $context["breadcrumbKeys"] = Twig\Extension\CoreExtension::keys(($context["breadcrumbCategories"] ?? null));
            // line 15
            yield "
        <nav aria-label=\"breadcrumb\">
            ";
            // line 17
            yield from $this->unwrap()->yieldBlock('layout_breadcrumb_list', $context, $blocks);
            // line 61
            yield "        </nav>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_breadcrumb_list(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_list"));

        // line 18
        yield "                <ol class=\"breadcrumb\"
                    itemscope
                    itemtype=\"https://schema.org/BreadcrumbList\">
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbCategories"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumbCategory"]) {
            // line 22
            yield "                        ";
            $context["key"] = SwTwigFunction::getAttribute($this->env, $this->source, $context["breadcrumbCategory"], "id", [], "any", false, false, false, 22);
            // line 23
            yield "                        ";
            $context["name"] = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, $context["breadcrumbCategory"], "translated", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23);
            // line 24
            yield "                        ";
            $context["categoryUrl"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, $context["breadcrumbCategory"]);
            // line 25
            yield "
                        ";
            // line 26
            yield from $this->unwrap()->yieldBlock('layout_breadcrumb_list_item', $context, $blocks);
            // line 50
            yield "
                        ";
            // line 51
            yield from $this->unwrap()->yieldBlock('layout_breadcrumb_placeholder', $context, $blocks);
            // line 58
            yield "                    ";
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
        unset($context['_seq'], $context['_key'], $context['breadcrumbCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "                </ol>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_breadcrumb_list_item(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_list_item"));

        // line 27
        yield "                            <li class=\"breadcrumb-item\"
                                ";
        // line 28
        if ((($context["key"] ?? null) === ($context["categoryId"] ?? null))) {
            yield "aria-current=\"page\"";
        }
        // line 29
        yield "                                itemprop=\"itemListElement\"
                                itemscope
                                itemtype=\"https://schema.org/ListItem\">
                                ";
        // line 32
        if ((SwTwigFunction::getAttribute($this->env, $this->source, ($context["breadcrumbCategory"] ?? null), "type", [], "any", false, false, false, 32) == "folder")) {
            // line 33
            yield "                                    <div itemprop=\"item\">
                                        <div itemprop=\"name\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "</div>
                                    </div>
                                ";
        } else {
            // line 37
            yield "                                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["categoryUrl"] ?? null), "html", null, true);
            yield "\"
                                       class=\"breadcrumb-link ";
            // line 38
            if ((($context["key"] ?? null) === ($context["categoryId"] ?? null))) {
                yield " is-active";
            }
            yield "\"
                                       title=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\"
                                       ";
            // line 40
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["breadcrumbCategory"] ?? null))) {
                yield "target=\"_blank\"";
            }
            // line 41
            yield "                                       itemprop=\"item\">
                                        <link itemprop=\"url\"
                                              href=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["categoryUrl"] ?? null), "html", null, true);
            yield "\">
                                        <span class=\"breadcrumb-title\" itemprop=\"name\">";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "</span>
                                    </a>
                                ";
        }
        // line 47
        yield "                                <meta itemprop=\"position\" content=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 47), "html", null, true);
        yield "\">
                            </li>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_breadcrumb_placeholder(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_placeholder"));

        // line 52
        yield "                            ";
        if ((($context["key"] ?? null) != Twig\Extension\CoreExtension::last($this->env->getCharset(), ($context["breadcrumbKeys"] ?? null)))) {
            // line 53
            yield "                                <div class=\"breadcrumb-placeholder\">
                                    ";
            // line 54
            yield from             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/breadcrumb.html.twig", 54);
            })())->unwrap()->yield(CoreExtension::merge($context, ["size" => "fluid", "pack" => "solid", "ariaHidden" => true, "name" => "arrow-medium-right"]));
            // line 55
            yield "                                </div>
                            ";
        }
        // line 57
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/layout/breadcrumb.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  297 => 57,  293 => 55,  285 => 54,  282 => 53,  279 => 52,  269 => 51,  257 => 47,  251 => 44,  247 => 43,  243 => 41,  239 => 40,  235 => 39,  229 => 38,  224 => 37,  218 => 34,  215 => 33,  213 => 32,  208 => 29,  204 => 28,  201 => 27,  191 => 26,  182 => 59,  168 => 58,  166 => 51,  163 => 50,  161 => 26,  158 => 25,  155 => 24,  152 => 23,  149 => 22,  132 => 21,  127 => 18,  117 => 17,  107 => 61,  105 => 17,  101 => 15,  98 => 14,  96 => 13,  93 => 12,  90 => 11,  87 => 10,  84 => 9,  81 => 8,  78 => 7,  75 => 6,  72 => 5,  69 => 4,  52 => 3,  49 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @sw-package framework #}

{% block layout_breadcrumb_inner %}
    {% if category %}
        {% set breadcrumbCategories = sw_breadcrumb_full(category, context.context) %}
        {% set categoryId = category.id %}
    {% elseif categoryId %}
        {% set breadcrumbCategories = sw_breadcrumb_full_by_id(categoryId, context.context) %}
    {% else %}
        {% return %}
    {% endif %}

    {% if breadcrumbCategories|length > 0 %}
        {% set breadcrumbKeys = breadcrumbCategories|keys %}

        <nav aria-label=\"breadcrumb\">
            {% block layout_breadcrumb_list %}
                <ol class=\"breadcrumb\"
                    itemscope
                    itemtype=\"https://schema.org/BreadcrumbList\">
                    {% for breadcrumbCategory in breadcrumbCategories %}
                        {% set key = breadcrumbCategory.id %}
                        {% set name = breadcrumbCategory.translated.name %}
                        {% set categoryUrl = category_url(breadcrumbCategory) %}

                        {% block layout_breadcrumb_list_item %}
                            <li class=\"breadcrumb-item\"
                                {% if key is same as(categoryId) %}aria-current=\"page\"{% endif %}
                                itemprop=\"itemListElement\"
                                itemscope
                                itemtype=\"https://schema.org/ListItem\">
                                {% if breadcrumbCategory.type == 'folder' %}
                                    <div itemprop=\"item\">
                                        <div itemprop=\"name\">{{ name }}</div>
                                    </div>
                                {% else %}
                                    <a href=\"{{ categoryUrl }}\"
                                       class=\"breadcrumb-link {% if key is same as(categoryId) %} is-active{% endif %}\"
                                       title=\"{{ name }}\"
                                       {% if category_linknewtab(breadcrumbCategory) %}target=\"_blank\"{% endif %}
                                       itemprop=\"item\">
                                        <link itemprop=\"url\"
                                              href=\"{{ categoryUrl }}\">
                                        <span class=\"breadcrumb-title\" itemprop=\"name\">{{ name }}</span>
                                    </a>
                                {% endif %}
                                <meta itemprop=\"position\" content=\"{{ loop.index }}\">
                            </li>
                        {% endblock %}

                        {% block layout_breadcrumb_placeholder %}
                            {% if key != breadcrumbKeys|last %}
                                <div class=\"breadcrumb-placeholder\">
                                    {% sw_icon 'arrow-medium-right' style { size: 'fluid', pack: 'solid', ariaHidden: true } %}
                                </div>
                            {% endif %}
                        {% endblock %}
                    {% endfor %}
                </ol>
            {% endblock %}
        </nav>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/layout/breadcrumb.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/layout/breadcrumb.html.twig");
    }
}
