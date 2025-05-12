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

/* @Storefront/storefront/component/listing/filter/filter-multi-select.html.twig */
class __TwigTemplate_36c8a5c7c7a4af07f5752b5be2cac56e extends Template
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
            'component_filter_multi_select' => [$this, 'block_component_filter_multi_select'],
            'component_filter_multi_select_toggle' => [$this, 'block_component_filter_multi_select_toggle'],
            'component_filter_multi_select_display_name' => [$this, 'block_component_filter_multi_select_display_name'],
            'component_filter_multi_select_count' => [$this, 'block_component_filter_multi_select_count'],
            'component_filter_multi_select_toggle_icon' => [$this, 'block_component_filter_multi_select_toggle_icon'],
            'component_filter_multi_select_dropdown' => [$this, 'block_component_filter_multi_select_dropdown'],
            'component_filter_multi_select_list' => [$this, 'block_component_filter_multi_select_list'],
            'component_filter_multi_select_list_item' => [$this, 'block_component_filter_multi_select_list_item'],
            'component_filter_multi_select_list_item_inner' => [$this, 'block_component_filter_multi_select_list_item_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig"));

        // line 1
        $context["filterItemId"] = ((("filter-" . ($context["name"] ?? null)) . "-") . Twig\Extension\CoreExtension::random($this->env->getCharset()));
        // line 2
        yield "
";
        // line 3
        if ( !array_key_exists("pluginSelector", $context)) {
            // line 4
            yield "    ";
            $context["pluginSelector"] = "filter-multi-select";
        }
        // line 6
        yield "
";
        // line 7
        if ( !array_key_exists("dataPluginSelectorOptions", $context)) {
            // line 8
            yield "    ";
            $context["dataPluginSelectorOptions"] = ["name" =>             // line 9
($context["name"] ?? null), "displayName" =>             // line 10
($context["displayName"] ?? null), "snippets" => ["disabledFilterText" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.disabledFilterTooltip")), "ariaLabel" =>             // line 13
($context["ariaLabel"] ?? null), "ariaLabelCount" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterCountAriaLabel"))]];
        }
        // line 18
        yield "
";
        // line 19
        yield from $this->unwrap()->yieldBlock('component_filter_multi_select', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_multi_select(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_multi_select"));

        // line 20
        yield "    <div class=\"filter-multi-select filter-multi-select-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
        yield " filter-panel-item";
        if (($context["sidebar"] ?? null)) {
            yield " d-grid";
        } else {
            yield " dropdown";
        }
        yield "\"
         role=\"listitem\"
         data-";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pluginSelector"] ?? null), "html", null, true);
        yield "=\"true\"
         data-";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pluginSelector"] ?? null), "html", null, true);
        yield "-options='";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('json_encode')->getCallable()(($context["dataPluginSelectorOptions"] ?? null)), "html", null, true);
        yield "'>

        ";
        // line 25
        yield from $this->unwrap()->yieldBlock('component_filter_multi_select_toggle', $context, $blocks);
        // line 56
        yield "
        ";
        // line 57
        yield from $this->unwrap()->yieldBlock('component_filter_multi_select_dropdown', $context, $blocks);
        // line 75
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_multi_select_toggle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_multi_select_toggle"));

        // line 26
        yield "            <button class=\"filter-panel-item-toggle btn\"
                    aria-expanded=\"false\"
                    ";
        // line 28
        if (($context["ariaLabel"] ?? null)) {
            // line 29
            yield "                    aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ariaLabel"] ?? null), "html", null, true);
            yield "\"
                    ";
        }
        // line 31
        yield "                    ";
        if (($context["sidebar"] ?? null)) {
            // line 32
            yield "                    data-bs-toggle=\"collapse\"
                    data-bs-target=\"#";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filterItemId"] ?? null), "html", null, true);
            yield "\"
                    ";
        } else {
            // line 35
            yield "                    data-bs-toggle=\"dropdown\"
                    data-boundary=\"viewport\"
                    data-bs-offset=\"0,8\"
                    aria-haspopup=\"true\"
                    ";
        }
        // line 39
        yield ">

                ";
        // line 41
        yield from $this->unwrap()->yieldBlock('component_filter_multi_select_display_name', $context, $blocks);
        // line 44
        yield "
                ";
        // line 45
        yield from $this->unwrap()->yieldBlock('component_filter_multi_select_count', $context, $blocks);
        // line 48
        yield "
                ";
        // line 49
        yield from $this->unwrap()->yieldBlock('component_filter_multi_select_toggle_icon', $context, $blocks);
        // line 54
        yield "            </button>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_multi_select_display_name(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_multi_select_display_name"));

        // line 42
        yield "                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["displayName"] ?? null), "html", null, true);
        yield "
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_multi_select_count(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_multi_select_count"));

        // line 46
        yield "                    <span class=\"filter-multi-select-count\"></span>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_multi_select_toggle_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_multi_select_toggle_icon"));

        // line 50
        yield "                    ";
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig", 50);
        })())->unwrap()->yield(CoreExtension::merge($context, ["pack" => "solid", "size" => "xs", "class" => "filter-panel-item-toggle", "name" => "arrow-medium-down"]));
        // line 53
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_multi_select_dropdown(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_multi_select_dropdown"));

        // line 58
        yield "            <div class=\"filter-multi-select-dropdown filter-panel-item-dropdown";
        if (($context["sidebar"] ?? null)) {
            yield " collapse";
        } else {
            yield " dropdown-menu";
        }
        yield "\"
                 id=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filterItemId"] ?? null), "html", null, true);
        yield "\">
                ";
        // line 60
        yield from $this->unwrap()->yieldBlock('component_filter_multi_select_list', $context, $blocks);
        // line 73
        yield "            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 60
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_multi_select_list(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_multi_select_list"));

        // line 61
        yield "                    <ul class=\"filter-multi-select-list\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["displayName"] ?? null), "html", null, true);
        yield "\">
                        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["elements"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 63
            yield "                            ";
            yield from $this->unwrap()->yieldBlock('component_filter_multi_select_list_item', $context, $blocks);
            // line 70
            yield "                        ";
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
        unset($context['_seq'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "                    </ul>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_multi_select_list_item(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_multi_select_list_item"));

        // line 64
        yield "                                <li class=\"filter-multi-select-list-item\">
                                    ";
        // line 65
        yield from $this->unwrap()->yieldBlock('component_filter_multi_select_list_item_inner', $context, $blocks);
        // line 68
        yield "                                </li>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_multi_select_list_item_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_multi_select_list_item_inner"));

        // line 66
        yield "                                        ";
        yield from $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-multi-select-list-item.html.twig", "@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig", 66)->unwrap()->yield($context);
        // line 67
        yield "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig";
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
        return array (  397 => 67,  394 => 66,  384 => 65,  375 => 68,  373 => 65,  370 => 64,  360 => 63,  351 => 71,  337 => 70,  334 => 63,  317 => 62,  312 => 61,  302 => 60,  293 => 73,  291 => 60,  287 => 59,  278 => 58,  268 => 57,  260 => 53,  251 => 50,  241 => 49,  232 => 46,  222 => 45,  211 => 42,  201 => 41,  192 => 54,  190 => 49,  187 => 48,  185 => 45,  182 => 44,  180 => 41,  176 => 39,  169 => 35,  164 => 33,  161 => 32,  158 => 31,  152 => 29,  150 => 28,  146 => 26,  136 => 25,  127 => 75,  125 => 57,  122 => 56,  120 => 25,  113 => 23,  109 => 22,  97 => 20,  80 => 19,  77 => 18,  74 => 13,  73 => 10,  72 => 9,  70 => 8,  68 => 7,  65 => 6,  61 => 4,  59 => 3,  56 => 2,  54 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set filterItemId = 'filter-' ~ name ~ '-' ~ random() %}

{% if pluginSelector is not defined %}
    {% set pluginSelector = 'filter-multi-select' %}
{% endif %}

{% if dataPluginSelectorOptions is not defined %}
    {% set dataPluginSelectorOptions = {
        name: name,
        displayName: displayName,
        snippets: {
            disabledFilterText: 'listing.disabledFilterTooltip'|trans|sw_sanitize,
            ariaLabel: ariaLabel,
            ariaLabelCount: 'listing.filterCountAriaLabel'|trans|sw_sanitize
        }
    } %}
{% endif %}

{% block component_filter_multi_select %}
    <div class=\"filter-multi-select filter-multi-select-{{ name }} filter-panel-item{% if sidebar %} d-grid{% else %} dropdown{% endif %}\"
         role=\"listitem\"
         data-{{ pluginSelector }}=\"true\"
         data-{{ pluginSelector }}-options='{{ dataPluginSelectorOptions|json_encode }}'>

        {% block component_filter_multi_select_toggle %}
            <button class=\"filter-panel-item-toggle btn\"
                    aria-expanded=\"false\"
                    {% if ariaLabel %}
                    aria-label=\"{{ ariaLabel }}\"
                    {% endif %}
                    {% if sidebar %}
                    data-bs-toggle=\"collapse\"
                    data-bs-target=\"#{{ filterItemId }}\"
                    {% else %}
                    data-bs-toggle=\"dropdown\"
                    data-boundary=\"viewport\"
                    data-bs-offset=\"0,8\"
                    aria-haspopup=\"true\"
                    {% endif %}>

                {% block component_filter_multi_select_display_name %}
                    {{ displayName }}
                {% endblock %}

                {% block component_filter_multi_select_count %}
                    <span class=\"filter-multi-select-count\"></span>
                {% endblock %}

                {% block component_filter_multi_select_toggle_icon %}
                    {% sw_icon 'arrow-medium-down' style {
                        'pack': 'solid', 'size': 'xs', 'class': 'filter-panel-item-toggle'
                    } %}
                {% endblock %}
            </button>
        {% endblock %}

        {% block component_filter_multi_select_dropdown %}
            <div class=\"filter-multi-select-dropdown filter-panel-item-dropdown{% if sidebar %} collapse{% else %} dropdown-menu{% endif %}\"
                 id=\"{{ filterItemId }}\">
                {% block component_filter_multi_select_list %}
                    <ul class=\"filter-multi-select-list\" aria-label=\"{{ displayName }}\">
                        {% for element in elements %}
                            {% block component_filter_multi_select_list_item %}
                                <li class=\"filter-multi-select-list-item\">
                                    {% block component_filter_multi_select_list_item_inner %}
                                        {% sw_include '@Storefront/storefront/component/listing/filter/filter-multi-select-list-item.html.twig' %}
                                    {% endblock %}
                                </li>
                            {% endblock %}
                        {% endfor %}
                    </ul>
                {% endblock %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter/filter-multi-select.html.twig");
    }
}
