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

/* @Storefront/storefront/component/sorting.html.twig */
class __TwigTemplate_1c764dd3e51c3434b93a43a1a6e3a5c0 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/sorting.html.twig"));

        // line 2
        yield "
";
        // line 3
        $context["config"] = ["sorting" => ($context["current"] ?? null)];
        // line 4
        $context["showSorting"] = ((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["slot"] ?? null), "config", [], "any", false, true, false, 4), "showSorting", [], "any", false, true, false, 4), "value", [], "any", true, true, false, 4)) ? (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["slot"] ?? null), "config", [], "any", false, false, false, 4), "showSorting", [], "any", false, false, false, 4), "value", [], "any", false, false, false, 4)) : (true));
        // line 5
        yield "
";
        // line 6
        if ((($context["showSorting"] ?? null) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["sortings"] ?? null)) > 0))) {
            // line 7
            yield "    <div class=\"sorting\"
         data-listing-sorting=\"true\"
         data-listing-sorting-options=\"";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('json_encode')->getCallable()(($context["config"] ?? null)), "html", null, true);
            yield "\">
        <select class=\"sorting form-select\" aria-label=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.sortingLabel")), "html", null, true);
            yield "\">
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["sortings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["sorting"]) {
                // line 12
                yield "                ";
                $context["key"] = SwTwigFunction::getAttribute($this->env, $this->source, $context["sorting"], "key", [], "any", false, false, false, 12);
                // line 13
                yield "                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["key"] ?? null), "html", null, true);
                yield "\"";
                if ((($context["key"] ?? null) == ($context["current"] ?? null))) {
                    yield " selected";
                }
                yield ">";
                yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, $context["sorting"], "translated", [], "any", false, false, false, 13), "label", [], "any", false, false, false, 13));
                yield "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['sorting'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield "        </select>
    </div>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/component/sorting.html.twig";
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
        return array (  91 => 15,  76 => 13,  73 => 12,  69 => 11,  65 => 10,  61 => 9,  57 => 7,  55 => 6,  52 => 5,  50 => 4,  48 => 3,  45 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @sw-package framework #}

{% set config = { sorting: current } %}
{% set showSorting = (slot.config.showSorting.value is defined) ? slot.config.showSorting.value : true %}

{% if showSorting and sortings|length > 0 %}
    <div class=\"sorting\"
         data-listing-sorting=\"true\"
         data-listing-sorting-options=\"{{ config|json_encode }}\">
        <select class=\"sorting form-select\" aria-label=\"{{ 'general.sortingLabel'|trans|striptags }}\">
            {% for sorting in sortings %}
                {% set key = sorting.key %}
                <option value=\"{{ key }}\"{% if key == current %} selected{% endif %}>{{ sorting.translated.label|sw_sanitize }}</option>
            {% endfor %}
        </select>
    </div>
{% endif %}
", "@Storefront/storefront/component/sorting.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/component/sorting.html.twig");
    }
}
