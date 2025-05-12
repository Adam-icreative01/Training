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

/* @Storefront/storefront/component/skip-to-content.html.twig */
class __TwigTemplate_521a44ebd5c8570a248e9210cdfd8d83 extends Template
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
            'component_skip_to_content' => [$this, 'block_component_skip_to_content'],
            'component_skip_to_content_element' => [$this, 'block_component_skip_to_content_element'],
            'component_skip_to_content_inner' => [$this, 'block_component_skip_to_content_inner'],
            'component_skip_to_content_main_content' => [$this, 'block_component_skip_to_content_main_content'],
            'component_skip_to_content_search' => [$this, 'block_component_skip_to_content_search'],
            'component_skip_to_content_main_nav' => [$this, 'block_component_skip_to_content_main_nav'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/skip-to-content.html.twig"));

        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('component_skip_to_content', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_skip_to_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_skip_to_content"));

        // line 4
        yield "    ";
        if ( !array_key_exists("skipToMainContent", $context)) {
            // line 5
            yield "        ";
            $context["skipToMainContent"] = true;
            // line 6
            yield "    ";
        }
        // line 7
        yield "
    ";
        // line 8
        if ( !array_key_exists("skipToSearch", $context)) {
            // line 9
            yield "        ";
            $context["skipToSearch"] = false;
            // line 10
            yield "    ";
        }
        // line 11
        yield "
    ";
        // line 12
        if ( !array_key_exists("skipToMainNav", $context)) {
            // line 13
            yield "        ";
            $context["skipToMainNav"] = false;
            // line 14
            yield "    ";
        }
        // line 15
        yield "
    ";
        // line 16
        yield from $this->unwrap()->yieldBlock('component_skip_to_content_element', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_skip_to_content_element(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_skip_to_content_element"));

        // line 17
        yield "        <div id=\"page-top\" class=\"skip-to-content bg-primary-subtle text-primary-emphasis overflow-hidden\" tabindex=\"-1\">
            <div class=\"container skip-to-content-container d-flex justify-content-center visually-hidden-focusable\">
                ";
        // line 19
        yield from $this->unwrap()->yieldBlock('component_skip_to_content_inner', $context, $blocks);
        // line 44
        yield "            </div>
        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_skip_to_content_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_skip_to_content_inner"));

        // line 20
        yield "                    ";
        yield from $this->unwrap()->yieldBlock('component_skip_to_content_main_content', $context, $blocks);
        // line 27
        yield "
                    ";
        // line 28
        yield from $this->unwrap()->yieldBlock('component_skip_to_content_search', $context, $blocks);
        // line 35
        yield "
                    ";
        // line 36
        yield from $this->unwrap()->yieldBlock('component_skip_to_content_main_nav', $context, $blocks);
        // line 43
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_skip_to_content_main_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_skip_to_content_main_content"));

        // line 21
        yield "                        ";
        if (($context["skipToMainContent"] ?? null)) {
            // line 22
            yield "                            <a href=\"#content-main\" class=\"skip-to-content-link d-inline-flex text-decoration-underline m-1 p-2 fw-bold gap-2\">
                                ";
            // line 23
            yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.skipToContentLink"));
            yield "
                            </a>
                        ";
        }
        // line 26
        yield "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_skip_to_content_search(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_skip_to_content_search"));

        // line 29
        yield "                        ";
        if (($context["skipToSearch"] ?? null)) {
            // line 30
            yield "                            <a href=\"#header-main-search-input\" class=\"skip-to-content-link d-inline-flex text-decoration-underline m-1 p-2 fw-bold gap-2 d-none d-sm-block\">
                                ";
            // line 31
            yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.skipToSearch"));
            yield "
                            </a>
                        ";
        }
        // line 34
        yield "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_skip_to_content_main_nav(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_skip_to_content_main_nav"));

        // line 37
        yield "                        ";
        if (($context["skipToMainNav"] ?? null)) {
            // line 38
            yield "                            <a href=\"#main-navigation-menu\" class=\"skip-to-content-link d-inline-flex text-decoration-underline m-1 p-2 fw-bold gap-2 d-none d-lg-block\">
                                ";
            // line 39
            yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.skipToNavigation"));
            yield "
                            </a>
                        ";
        }
        // line 42
        yield "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/component/skip-to-content.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  251 => 42,  245 => 39,  242 => 38,  239 => 37,  229 => 36,  221 => 34,  215 => 31,  212 => 30,  209 => 29,  199 => 28,  191 => 26,  185 => 23,  182 => 22,  179 => 21,  169 => 20,  161 => 43,  159 => 36,  156 => 35,  154 => 28,  151 => 27,  148 => 20,  138 => 19,  128 => 44,  126 => 19,  122 => 17,  105 => 16,  102 => 15,  99 => 14,  96 => 13,  94 => 12,  91 => 11,  88 => 10,  85 => 9,  83 => 8,  80 => 7,  77 => 6,  74 => 5,  71 => 4,  54 => 3,  51 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @sw-package framework #}

{% block component_skip_to_content %}
    {% if skipToMainContent is not defined %}
        {% set skipToMainContent = true %}
    {% endif %}

    {% if skipToSearch is not defined %}
        {% set skipToSearch = false %}
    {% endif %}

    {% if skipToMainNav is not defined %}
        {% set skipToMainNav = false %}
    {% endif %}

    {% block component_skip_to_content_element %}
        <div id=\"page-top\" class=\"skip-to-content bg-primary-subtle text-primary-emphasis overflow-hidden\" tabindex=\"-1\">
            <div class=\"container skip-to-content-container d-flex justify-content-center visually-hidden-focusable\">
                {% block component_skip_to_content_inner %}
                    {% block component_skip_to_content_main_content %}
                        {% if skipToMainContent %}
                            <a href=\"#content-main\" class=\"skip-to-content-link d-inline-flex text-decoration-underline m-1 p-2 fw-bold gap-2\">
                                {{ 'general.skipToContentLink'|trans|sw_sanitize }}
                            </a>
                        {% endif %}
                    {% endblock %}

                    {% block component_skip_to_content_search %}
                        {% if skipToSearch %}
                            <a href=\"#header-main-search-input\" class=\"skip-to-content-link d-inline-flex text-decoration-underline m-1 p-2 fw-bold gap-2 d-none d-sm-block\">
                                {{ 'general.skipToSearch'|trans|sw_sanitize }}
                            </a>
                        {% endif %}
                    {% endblock %}

                    {% block component_skip_to_content_main_nav %}
                        {% if skipToMainNav %}
                            <a href=\"#main-navigation-menu\" class=\"skip-to-content-link d-inline-flex text-decoration-underline m-1 p-2 fw-bold gap-2 d-none d-lg-block\">
                                {{ 'general.skipToNavigation'|trans|sw_sanitize }}
                            </a>
                        {% endif %}
                    {% endblock %}
                {% endblock %}
            </div>
        </div>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/component/skip-to-content.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/component/skip-to-content.html.twig");
    }
}
