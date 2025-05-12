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

/* @Storefront/storefront/utilities/icon.html.twig */
class __TwigTemplate_c78ef73cadb1f1ebccd6cdba160d272b extends Template
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
            'utilities_icon' => [$this, 'block_utilities_icon'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/utilities/icon.html.twig"));

        // line 3
        yield from $this->unwrap()->yieldBlock('utilities_icon', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_utilities_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_icon"));

        // line 4
        $context["styles"] = [($context["size"] ?? null), ($context["color"] ?? null), ($context["rotation"] ?? null), ($context["flip"] ?? null), ($context["class"] ?? null)];
        // line 6
        if ( !array_key_exists("pack", $context)) {
            // line 7
            $context["pack"] = "default";
        }
        // line 10
        if ( !array_key_exists("namespace", $context)) {
            // line 11
            $context["namespace"] = "Storefront";
        }
        // line 14
        if (SwTwigFunction::getAttribute($this->env, $this->source, ($context["themeIconConfig"] ?? null), ($context["pack"] ?? null), [], "array", true, true, false, 14)) {
            // line 15
            yield "<span class=\"icon icon-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pack"] ?? null), "html", null, true);
            yield " icon-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pack"] ?? null), "html", null, true);
            yield "-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["styles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                if (($context["entry"] != "")) {
                    yield " icon-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["entry"], "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['entry'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "\"";
            if (($context["ariaHidden"] ?? null)) {
                yield " aria-hidden=\"true\"";
            }
            yield ">
            ";
            // line 16
            $context["icon"] = Twig\Extension\CoreExtension::source($this->env, (((((("@" . SwTwigFunction::getAttribute($this->env, $this->source, (($_v0 = ($context["themeIconConfig"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["pack"] ?? null)] ?? null) : null), "namespace", [], "any", false, false, false, 16)) . "/") . SwTwigFunction::getAttribute($this->env, $this->source, (($_v1 = ($context["themeIconConfig"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["pack"] ?? null)] ?? null) : null), "path", [], "any", false, false, false, 16)) . "/") . ($context["name"] ?? null)) . ".svg"), true);
            // line 17
            yield "            ";
            if (($context["ariaLabel"] ?? null)) {
                // line 18
                yield "                ";
                yield Twig\Extension\CoreExtension::replace($this->extensions['Shopware\Storefront\Framework\Twig\Extension\IconCacheTwigFilter']->iconCache(($context["icon"] ?? null)), ["<svg " => (("<svg aria-label=\"" . ($context["ariaLabel"] ?? null)) . "\" ")]);
                yield "
            ";
            } else {
                // line 20
                yield "                ";
                yield $this->extensions['Shopware\Storefront\Framework\Twig\Extension\IconCacheTwigFilter']->iconCache(($context["icon"] ?? null));
                yield "
            ";
            }
            // line 22
            yield "        </span>";
        } else {
            // line 24
            yield "<span class=\"icon icon-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["styles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                if (($context["entry"] != "")) {
                    yield " icon-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["entry"], "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['entry'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "\"";
            if (($context["ariaHidden"] ?? null)) {
                yield " aria-hidden=\"true\"";
            }
            yield ">
            ";
            // line 25
            $context["icon"] = Twig\Extension\CoreExtension::source($this->env, (((((("@" . ($context["namespace"] ?? null)) . "/assets/icon/") . ($context["pack"] ?? null)) . "/") . ($context["name"] ?? null)) . ".svg"), true);
            // line 26
            yield "            ";
            if (($context["ariaLabel"] ?? null)) {
                // line 27
                yield "                ";
                yield Twig\Extension\CoreExtension::replace($this->extensions['Shopware\Storefront\Framework\Twig\Extension\IconCacheTwigFilter']->iconCache(($context["icon"] ?? null)), ["<svg " => (("<svg aria-label=\"" . ($context["ariaLabel"] ?? null)) . "\" ")]);
                yield "
            ";
            } else {
                // line 29
                yield "                ";
                yield $this->extensions['Shopware\Storefront\Framework\Twig\Extension\IconCacheTwigFilter']->iconCache(($context["icon"] ?? null));
                yield "
            ";
            }
            // line 31
            yield "        </span>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/utilities/icon.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  158 => 31,  152 => 29,  146 => 27,  143 => 26,  141 => 25,  121 => 24,  118 => 22,  112 => 20,  106 => 18,  103 => 17,  101 => 16,  77 => 15,  75 => 14,  72 => 11,  70 => 10,  67 => 7,  65 => 6,  63 => 4,  46 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @sw-package framework #}

{%- block utilities_icon -%}
    {% set styles = [ size, color, rotation, flip, class ] %}

    {%- if pack is not defined -%}
        {% set pack = 'default' %}
    {%- endif -%}

    {%- if namespace is not defined -%}
        {% set namespace = 'Storefront' %}
    {%- endif -%}

    {%- if themeIconConfig[pack] is defined -%}
        <span class=\"icon icon-{{ pack }} icon-{{ pack }}-{{ name }}{% for entry in styles %}{% if entry != \"\" %} icon-{{ entry }}{% endif %}{% endfor %}\"{% if ariaHidden %} aria-hidden=\"true\"{% endif %}>
            {% set icon = source('@' ~ themeIconConfig[pack].namespace ~ '/' ~ themeIconConfig[pack].path ~'/'~ name ~ '.svg', ignore_missing = true) %}
            {% if ariaLabel %}
                {{ icon|sw_icon_cache|replace({'<svg ': '<svg aria-label=\"'~ariaLabel~'\" '})|raw }}
            {% else %}
                {{ icon|sw_icon_cache|raw }}
            {% endif %}
        </span>
    {%- else -%}
        <span class=\"icon icon-{{ name }}{% for entry in styles %}{% if entry != \"\" %} icon-{{ entry }}{% endif %}{% endfor %}\"{% if ariaHidden %} aria-hidden=\"true\"{% endif %}>
            {% set icon = source('@' ~ namespace ~ '/assets/icon/'~ pack ~'/'~ name ~'.svg', ignore_missing = true) %}
            {% if ariaLabel %}
                {{ icon|sw_icon_cache|replace({'<svg ': '<svg aria-label=\"'~ariaLabel~'\" '})|raw }}
            {% else %}
                {{ icon|sw_icon_cache|raw }}
            {% endif %}
        </span>
    {%- endif -%}
{%- endblock -%}
", "@Storefront/storefront/utilities/icon.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/utilities/icon.html.twig");
    }
}
