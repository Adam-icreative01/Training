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

/* @Storefront/storefront/component/listing/filter/filter-property-select.html.twig */
class __TwigTemplate_08b0d12941ae9379882079e515531e28 extends Template
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
            'component_filter_multi_select_list_item' => [$this, 'block_component_filter_multi_select_list_item'],
            'component_filter_property_select_preview' => [$this, 'block_component_filter_property_select_preview'],
            'component_filter_property_select_checkox_input' => [$this, 'block_component_filter_property_select_checkox_input'],
            'component_filter_property_select_preview_checkmark' => [$this, 'block_component_filter_property_select_preview_checkmark'],
            'component_filter_property_select_preview_checkmark_icon' => [$this, 'block_component_filter_property_select_preview_checkmark_icon'],
            'component_filter_property_select_preview_list_item_label_element' => [$this, 'block_component_filter_property_select_preview_list_item_label_element'],
            'component_filter_property_select_preview_list_item_label' => [$this, 'block_component_filter_property_select_preview_list_item_label'],
            'component_filter_property_select_preview_list_item' => [$this, 'block_component_filter_property_select_preview_list_item'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig"));

        // line 3
        if ( !array_key_exists("dataPluginSelectorOptions", $context)) {
            // line 4
            $context["dataPluginSelectorOptions"] = ["name" =>             // line 5
($context["name"] ?? null), "propertyName" =>             // line 6
($context["propertyName"] ?? null), "snippets" => ["disabledFilterText" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.disabledFilterTooltip")), "ariaLabel" =>             // line 9
($context["ariaLabel"] ?? null), "ariaLabelCount" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterCountAriaLabel"))]];
        }
        // line 2
        $this->parent = $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig", "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_multi_select_list_item(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_multi_select_list_item"));

        // line 16
        yield "    <li class=\"filter-multi-select-list-item filter-property-select-list-item\">
        ";
        // line 17
        if (((($context["displayType"] ?? null) == "color") || (($context["displayType"] ?? null) == "media"))) {
            // line 18
            yield "            ";
            $context["color"] = SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "colorHexCode", [], "any", false, false, false, 18);
            // line 19
            yield "            ";
            $context["media"] = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "media", [], "any", false, false, false, 19), "url", [], "any", false, false, false, 19);
            // line 20
            yield "            ";
            $context["name"] = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20);
            // line 21
            yield "            ";
            $context["id"] = SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 21);
            // line 22
            yield "
            ";
            // line 23
            yield from $this->unwrap()->yieldBlock('component_filter_property_select_preview', $context, $blocks);
            // line 54
            yield "
            ";
            // line 55
            if ( !($context["hideTitle"] ?? null)) {
                // line 56
                yield "                ";
                yield from $this->unwrap()->yieldBlock('component_filter_property_select_preview_list_item_label_element', $context, $blocks);
                // line 63
                yield "            ";
            }
            // line 64
            yield "        ";
        } else {
            // line 65
            yield "            ";
            yield from $this->unwrap()->yieldBlock('component_filter_property_select_preview_list_item', $context, $blocks);
            // line 68
            yield "        ";
        }
        // line 69
        yield "    </li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_property_select_preview(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview"));

        // line 24
        yield "                <span class=\"filter-property-select-preview\"
                      title=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
        yield "\"
                      ";
        // line 26
        if (((($context["displayType"] ?? null) == "color") && ($context["color"] ?? null))) {
            // line 27
            yield "                      style=\"background: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["color"] ?? null), "html", null, true);
            yield "\"
                      ";
        }
        // line 29
        yield "                      ";
        if (((($context["displayType"] ?? null) == "media") && ($context["media"] ?? null))) {
            // line 30
            yield "                      style=\"background-image: url('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["media"] ?? null), "html", null, true);
            yield "')\"
                      ";
        }
        // line 31
        yield ">
                    ";
        // line 32
        yield from $this->unwrap()->yieldBlock('component_filter_property_select_checkox_input', $context, $blocks);
        // line 44
        yield "
                    ";
        // line 45
        yield from $this->unwrap()->yieldBlock('component_filter_property_select_preview_checkmark', $context, $blocks);
        // line 52
        yield "                </span>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_property_select_checkox_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_checkox_input"));

        // line 33
        yield "                        <input type=\"checkbox\"
                               class=\"filter-property-select-checkbox filter-multi-select-checkbox\"
                               id=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\"
                               data-label=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
        yield "\"
                               ";
        // line 37
        if (((($context["displayType"] ?? null) == "color") && ($context["color"] ?? null))) {
            // line 38
            yield "                               data-preview-hex=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["color"] ?? null), "html", null, true);
            yield "\"
                               ";
        }
        // line 40
        yield "                               ";
        if (((($context["displayType"] ?? null) == "media") && ($context["media"] ?? null))) {
            // line 41
            yield "                               data-preview-image-url=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["media"] ?? null), "html", null, true);
            yield "\"
                               ";
        }
        // line 42
        yield ">
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_property_select_preview_checkmark(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview_checkmark"));

        // line 46
        yield "                        <span class=\"filter-property-select-preview-checkmark\">
                            ";
        // line 47
        yield from $this->unwrap()->yieldBlock('component_filter_property_select_preview_checkmark_icon', $context, $blocks);
        // line 50
        yield "                        </span>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 47
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_property_select_preview_checkmark_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview_checkmark_icon"));

        // line 48
        yield "                                ";
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig", 48);
        })())->unwrap()->yield(CoreExtension::merge($context, ["pack" => "solid", "size" => "xs", "name" => "checkmark"]));
        // line 49
        yield "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 56
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_property_select_preview_list_item_label_element(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview_list_item_label_element"));

        // line 57
        yield "                    <label class=\"filter-multi-select-item-label\" for=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\">
                        ";
        // line 58
        yield from $this->unwrap()->yieldBlock('component_filter_property_select_preview_list_item_label', $context, $blocks);
        // line 61
        yield "                    </label>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_property_select_preview_list_item_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview_list_item_label"));

        // line 59
        yield "                            ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
        yield "
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_property_select_preview_list_item(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_property_select_preview_list_item"));

        // line 66
        yield "                ";
        yield from $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-multi-select-list-item.html.twig", "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig", 66)->unwrap()->yield($context);
        // line 67
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig";
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
        return array (  346 => 67,  343 => 66,  333 => 65,  322 => 59,  312 => 58,  303 => 61,  301 => 58,  296 => 57,  286 => 56,  278 => 49,  269 => 48,  259 => 47,  250 => 50,  248 => 47,  245 => 46,  235 => 45,  226 => 42,  220 => 41,  217 => 40,  211 => 38,  209 => 37,  205 => 36,  201 => 35,  197 => 33,  187 => 32,  178 => 52,  176 => 45,  173 => 44,  171 => 32,  168 => 31,  162 => 30,  159 => 29,  153 => 27,  151 => 26,  147 => 25,  144 => 24,  134 => 23,  125 => 69,  122 => 68,  119 => 65,  116 => 64,  113 => 63,  110 => 56,  108 => 55,  105 => 54,  103 => 23,  100 => 22,  97 => 21,  94 => 20,  91 => 19,  88 => 18,  86 => 17,  83 => 16,  73 => 15,  65 => 2,  62 => 9,  61 => 6,  60 => 5,  59 => 4,  57 => 3,  47 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% sw_extends '@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig' %}

{% if dataPluginSelectorOptions is not defined %}
    {% set dataPluginSelectorOptions = {
        name: name,
        propertyName: propertyName,
        snippets: {
            disabledFilterText: 'listing.disabledFilterTooltip'|trans|sw_sanitize,
            ariaLabel: ariaLabel,
            ariaLabelCount: 'listing.filterCountAriaLabel'|trans|sw_sanitize
        }
    } %}
{% endif %}

{% block component_filter_multi_select_list_item %}
    <li class=\"filter-multi-select-list-item filter-property-select-list-item\">
        {% if displayType == 'color' or displayType == 'media' %}
            {% set color = element.colorHexCode %}
            {% set media = element.media.url %}
            {% set name = element.translated.name %}
            {% set id = element.id %}

            {% block component_filter_property_select_preview %}
                <span class=\"filter-property-select-preview\"
                      title=\"{{ name }}\"
                      {% if displayType == 'color' and color %}
                      style=\"background: {{ color }}\"
                      {% endif %}
                      {% if displayType == 'media' and media %}
                      style=\"background-image: url('{{ media }}')\"
                      {% endif %}>
                    {% block component_filter_property_select_checkox_input %}
                        <input type=\"checkbox\"
                               class=\"filter-property-select-checkbox filter-multi-select-checkbox\"
                               id=\"{{ id }}\"
                               data-label=\"{{ name }}\"
                               {% if displayType == 'color' and color %}
                               data-preview-hex=\"{{ color }}\"
                               {% endif %}
                               {% if displayType == 'media' and media %}
                               data-preview-image-url=\"{{ media }}\"
                               {% endif %}>
                    {% endblock %}

                    {% block component_filter_property_select_preview_checkmark %}
                        <span class=\"filter-property-select-preview-checkmark\">
                            {% block component_filter_property_select_preview_checkmark_icon %}
                                {% sw_icon 'checkmark' style {pack: 'solid', size: 'xs'} %}
                            {% endblock %}
                        </span>
                    {% endblock %}
                </span>
            {% endblock %}

            {% if not hideTitle %}
                {% block component_filter_property_select_preview_list_item_label_element %}
                    <label class=\"filter-multi-select-item-label\" for=\"{{ id }}\">
                        {% block component_filter_property_select_preview_list_item_label %}
                            {{ name }}
                        {% endblock %}
                    </label>
                {% endblock %}
            {% endif %}
        {% else %}
            {% block component_filter_property_select_preview_list_item %}
                {% sw_include '@Storefront/storefront/component/listing/filter/filter-multi-select-list-item.html.twig' %}
            {% endblock %}
        {% endif %}
    </li>
{% endblock %}
", "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter/filter-property-select.html.twig");
    }
}
