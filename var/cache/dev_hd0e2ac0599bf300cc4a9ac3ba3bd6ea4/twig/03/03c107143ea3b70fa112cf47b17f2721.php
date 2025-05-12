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

/* @Storefront/storefront/utilities/offcanvas.html.twig */
class __TwigTemplate_8889a2d4d10527de7e16d967877fb90b extends Template
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
            'utilities_offcanvas_meta' => [$this, 'block_utilities_offcanvas_meta'],
            'utilities_offcanvas' => [$this, 'block_utilities_offcanvas'],
            'utilities_offcanvas_header' => [$this, 'block_utilities_offcanvas_header'],
            'utilities_offcanvas_close' => [$this, 'block_utilities_offcanvas_close'],
            'utilities_offcanvas_close_icon' => [$this, 'block_utilities_offcanvas_close_icon'],
            'utilities_offcanvas_close_text' => [$this, 'block_utilities_offcanvas_close_text'],
            'utilities_offcanvas_content_container' => [$this, 'block_utilities_offcanvas_content_container'],
            'utilities_offcanvas_content' => [$this, 'block_utilities_offcanvas_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/utilities/offcanvas.html.twig"));

        // line 7
        yield "
";
        // line 8
        $context["isAjaxOffcanvas"] = false;
        // line 9
        yield "
";
        // line 10
        yield from $this->unwrap()->yieldBlock('utilities_offcanvas_meta', $context, $blocks);
        // line 16
        yield "
";
        // line 17
        yield from $this->unwrap()->yieldBlock('utilities_offcanvas', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_utilities_offcanvas_meta(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_offcanvas_meta"));

        // line 11
        yield "    ";
        // line 12
        yield "    ";
        if (( !SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 12), "xmlHttpRequest", [], "any", false, false, false, 12) && ($context["isAjaxOffcanvas"] ?? null))) {
            // line 13
            yield "        ";
            yield from $this->loadTemplate("@Storefront/storefront/layout/meta.html.twig", "@Storefront/storefront/utilities/offcanvas.html.twig", 13)->unwrap()->yield($context);
            // line 14
            yield "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_utilities_offcanvas(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_offcanvas"));

        // line 18
        yield "    ";
        yield from $this->unwrap()->yieldBlock('utilities_offcanvas_header', $context, $blocks);
        // line 33
        yield "
    ";
        // line 34
        yield from $this->unwrap()->yieldBlock('utilities_offcanvas_content_container', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_utilities_offcanvas_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_offcanvas_header"));

        // line 19
        yield "        <div class=\"offcanvas-header\">
            ";
        // line 20
        yield from $this->unwrap()->yieldBlock('utilities_offcanvas_close', $context, $blocks);
        // line 31
        yield "        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_utilities_offcanvas_close(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_offcanvas_close"));

        // line 21
        yield "                <button class=\"btn btn-light offcanvas-close js-offcanvas-close\">
                    ";
        // line 22
        yield from $this->unwrap()->yieldBlock('utilities_offcanvas_close_icon', $context, $blocks);
        // line 25
        yield "
                    ";
        // line 26
        yield from $this->unwrap()->yieldBlock('utilities_offcanvas_close_text', $context, $blocks);
        // line 29
        yield "                </button>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_utilities_offcanvas_close_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_offcanvas_close_icon"));

        // line 23
        yield "                        ";
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/utilities/offcanvas.html.twig", 23);
        })())->unwrap()->yield(CoreExtension::merge($context, ["size" => "sm", "name" => "x"]));
        // line 24
        yield "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_utilities_offcanvas_close_text(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_offcanvas_close_text"));

        // line 27
        yield "                        ";
        yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.offcanvasCloseMenu"));
        yield "
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_utilities_offcanvas_content_container(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_offcanvas_content_container"));

        // line 35
        yield "        <div class=\"offcanvas-body\">
            ";
        // line 36
        yield from $this->unwrap()->yieldBlock('utilities_offcanvas_content', $context, $blocks);
        // line 37
        yield "        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_utilities_offcanvas_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_offcanvas_content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/utilities/offcanvas.html.twig";
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
        return array (  250 => 36,  241 => 37,  239 => 36,  236 => 35,  226 => 34,  215 => 27,  205 => 26,  197 => 24,  188 => 23,  178 => 22,  169 => 29,  167 => 26,  164 => 25,  162 => 22,  159 => 21,  149 => 20,  140 => 31,  138 => 20,  135 => 19,  125 => 18,  117 => 34,  114 => 33,  111 => 18,  101 => 17,  92 => 14,  89 => 13,  86 => 12,  84 => 11,  74 => 10,  66 => 17,  63 => 16,  61 => 10,  58 => 9,  56 => 8,  53 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
    This template uses Bootstraps OffCanvas markup.

    @sw-package framework
    @see https://getbootstrap.com/docs/5.2/components/offcanvas
#}

{% set isAjaxOffcanvas = false %}

{% block utilities_offcanvas_meta %}
    {# only including this for robots to have appropriate meta tags and when offcanvas is loaded via ajax #}
    {% if not app.request.xmlHttpRequest and isAjaxOffcanvas %}
        {% sw_include '@Storefront/storefront/layout/meta.html.twig' %}
    {% endif %}
{% endblock %}

{% block utilities_offcanvas %}
    {% block utilities_offcanvas_header %}
        <div class=\"offcanvas-header\">
            {% block utilities_offcanvas_close %}
                <button class=\"btn btn-light offcanvas-close js-offcanvas-close\">
                    {% block utilities_offcanvas_close_icon %}
                        {% sw_icon 'x' style { size: 'sm' } %}
                    {% endblock %}

                    {% block utilities_offcanvas_close_text %}
                        {{ 'general.offcanvasCloseMenu'|trans|sw_sanitize }}
                    {% endblock %}
                </button>
            {% endblock %}
        </div>
    {% endblock %}

    {% block utilities_offcanvas_content_container %}
        <div class=\"offcanvas-body\">
            {% block utilities_offcanvas_content %}{% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/utilities/offcanvas.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/utilities/offcanvas.html.twig");
    }
}
