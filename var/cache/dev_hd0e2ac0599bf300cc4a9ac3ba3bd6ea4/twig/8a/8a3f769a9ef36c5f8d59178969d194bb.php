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

/* @Storefront/storefront/layout/header/top-bar.html.twig */
class __TwigTemplate_80caeedbe0c228829b0701bfe44be10f extends Template
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
            'layout_header_top_bar' => [$this, 'block_layout_header_top_bar'],
            'layout_header_top_bar_inner' => [$this, 'block_layout_header_top_bar_inner'],
            'layout_header_top_bar_language' => [$this, 'block_layout_header_top_bar_language'],
            'layout_header_top_bar_currency' => [$this, 'block_layout_header_top_bar_currency'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/top-bar.html.twig"));

        // line 2
        if ((( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("cache_rework") &&  !array_key_exists("header", $context)) && array_key_exists("page", $context))) {
            // line 3
            yield "    ";
            $context["header"] = SwTwigFunction::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 3);
        }
        // line 5
        yield "
";
        // line 6
        yield from $this->unwrap()->yieldBlock('layout_header_top_bar', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_top_bar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_top_bar"));

        // line 7
        yield "    <div class=\"top-bar d-none d-lg-block\">
        ";
        // line 8
        yield from $this->unwrap()->yieldBlock('layout_header_top_bar_inner', $context, $blocks);
        // line 23
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_top_bar_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_top_bar_inner"));

        // line 9
        yield "            ";
        if ((((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["header"] ?? null), "languages", [], "any", false, false, false, 9), "count", [], "any", false, false, false, 9) > 1) || (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["header"] ?? null), "currencies", [], "any", false, false, false, 9), "count", [], "any", false, false, false, 9) > 1)) ||  !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS"))) {
            // line 10
            yield "                ";
            // line 11
            yield "                <nav class=\"top-bar-nav";
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) {
                yield " d-flex justify-content-end gap-3";
            }
            yield "\"
                     aria-label=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.topBarAriaLabel")), "html", null, true);
            yield "\">
                    ";
            // line 13
            yield from $this->unwrap()->yieldBlock('layout_header_top_bar_language', $context, $blocks);
            // line 16
            yield "
                    ";
            // line 17
            yield from $this->unwrap()->yieldBlock('layout_header_top_bar_currency', $context, $blocks);
            // line 20
            yield "                </nav>
            ";
        }
        // line 22
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_top_bar_language(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_top_bar_language"));

        // line 14
        yield "                        ";
        yield from $this->loadTemplate("@Storefront/storefront/layout/header/actions/language-widget.html.twig", "@Storefront/storefront/layout/header/top-bar.html.twig", 14)->unwrap()->yield($context);
        // line 15
        yield "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_top_bar_currency(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_top_bar_currency"));

        // line 18
        yield "                        ";
        yield from $this->loadTemplate("@Storefront/storefront/layout/header/actions/currency-widget.html.twig", "@Storefront/storefront/layout/header/top-bar.html.twig", 18)->unwrap()->yield($context);
        // line 19
        yield "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/layout/header/top-bar.html.twig";
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
        return array (  168 => 19,  165 => 18,  155 => 17,  147 => 15,  144 => 14,  134 => 13,  126 => 22,  122 => 20,  120 => 17,  117 => 16,  115 => 13,  111 => 12,  104 => 11,  102 => 10,  99 => 9,  89 => 8,  80 => 23,  78 => 8,  75 => 7,  58 => 6,  55 => 5,  51 => 3,  49 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @deprecated tag:v6.7.0 - Fallback will be removed, add header directly #}
{% if not feature('cache_rework') and not header is defined and page is defined %}
    {% set header = page.header %}
{% endif %}

{% block layout_header_top_bar %}
    <div class=\"top-bar d-none d-lg-block\">
        {% block layout_header_top_bar_inner %}
            {% if header.languages.count > 1 or header.currencies.count > 1 or not feature('ACCESSIBILITY_TWEAKS') %}
                {# @deprecated tag:v6.7.0 - The \"top-bar\" layout will use Bootstrap helper classes instead of custom CSS. #}
                <nav class=\"top-bar-nav{% if feature('ACCESSIBILITY_TWEAKS') %} d-flex justify-content-end gap-3{% endif %}\"
                     aria-label=\"{{ 'header.topBarAriaLabel'|trans|striptags }}\">
                    {% block layout_header_top_bar_language %}
                        {% sw_include '@Storefront/storefront/layout/header/actions/language-widget.html.twig' %}
                    {% endblock %}

                    {% block layout_header_top_bar_currency %}
                        {% sw_include '@Storefront/storefront/layout/header/actions/currency-widget.html.twig' %}
                    {% endblock %}
                </nav>
            {% endif %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/layout/header/top-bar.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/layout/header/top-bar.html.twig");
    }
}
