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

/* @Storefront/storefront/component/listing/filter/filter-multi-select-list-item.html.twig */
class __TwigTemplate_55a82f23d48b13120aee1720a17286d3 extends Template
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
            'component_filter_multi_select_list_item' => [$this, 'block_component_filter_multi_select_list_item'],
            'component_filter_multi_select_list_item_checkbox_input' => [$this, 'block_component_filter_multi_select_list_item_checkbox_input'],
            'component_filter_multi_select_list_item_label_element' => [$this, 'block_component_filter_multi_select_list_item_label_element'],
            'component_multi_select_list_item_label' => [$this, 'block_component_multi_select_list_item_label'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/listing/filter/filter-multi-select-list-item.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('component_filter_multi_select_list_item', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_multi_select_list_item(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_multi_select_list_item"));

        // line 2
        yield "    <div class=\"form-check\">
        ";
        // line 3
        $context["id"] = SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 3);
        // line 4
        yield "        ";
        $context["name"] = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4);
        // line 5
        yield "
        ";
        // line 6
        yield from $this->unwrap()->yieldBlock('component_filter_multi_select_list_item_checkbox_input', $context, $blocks);
        // line 13
        yield "
        ";
        // line 14
        yield from $this->unwrap()->yieldBlock('component_filter_multi_select_list_item_label_element', $context, $blocks);
        // line 21
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_multi_select_list_item_checkbox_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_multi_select_list_item_checkbox_input"));

        // line 7
        yield "            <input type=\"checkbox\"
                   class=\"form-check-input filter-multi-select-checkbox\"
                   data-label=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
        yield "\"
                   value=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\"
                   id=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_multi_select_list_item_label_element(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_multi_select_list_item_label_element"));

        // line 15
        yield "            <label class=\"filter-multi-select-item-label form-check-label\" for=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\">
                ";
        // line 16
        yield from $this->unwrap()->yieldBlock('component_multi_select_list_item_label', $context, $blocks);
        // line 19
        yield "            </label>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_multi_select_list_item_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_multi_select_list_item_label"));

        // line 17
        yield "                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
        yield "
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/component/listing/filter/filter-multi-select-list-item.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  161 => 17,  151 => 16,  142 => 19,  140 => 16,  135 => 15,  125 => 14,  115 => 11,  111 => 10,  107 => 9,  103 => 7,  93 => 6,  84 => 21,  82 => 14,  79 => 13,  77 => 6,  74 => 5,  71 => 4,  69 => 3,  66 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block component_filter_multi_select_list_item %}
    <div class=\"form-check\">
        {% set id = element.id %}
        {% set name = element.translated.name %}

        {% block component_filter_multi_select_list_item_checkbox_input %}
            <input type=\"checkbox\"
                   class=\"form-check-input filter-multi-select-checkbox\"
                   data-label=\"{{ name }}\"
                   value=\"{{ id }}\"
                   id=\"{{ id }}\">
        {% endblock %}

        {% block component_filter_multi_select_list_item_label_element %}
            <label class=\"filter-multi-select-item-label form-check-label\" for=\"{{ id }}\">
                {% block component_multi_select_list_item_label %}
                    {{ name }}
                {% endblock %}
            </label>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/component/listing/filter/filter-multi-select-list-item.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter/filter-multi-select-list-item.html.twig");
    }
}
