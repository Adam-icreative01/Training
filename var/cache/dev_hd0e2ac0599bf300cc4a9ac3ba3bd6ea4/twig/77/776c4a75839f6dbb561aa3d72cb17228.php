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

/* @Storefront/storefront/layout/header/logo.html.twig */
class __TwigTemplate_e3d041310a4433b2529ccef9c632af90 extends Template
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
            'layout_header_logo_inner' => [$this, 'block_layout_header_logo_inner'],
            'layout_header_logo_link' => [$this, 'block_layout_header_logo_link'],
            'layout_header_logo_image' => [$this, 'block_layout_header_logo_image'],
            'layout_header_logo_image_tablet' => [$this, 'block_layout_header_logo_image_tablet'],
            'layout_header_logo_image_mobile' => [$this, 'block_layout_header_logo_image_mobile'],
            'layout_header_logo_image_default' => [$this, 'block_layout_header_logo_image_default'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/logo.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('layout_header_logo_inner', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_logo_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_inner"));

        // line 2
        yield "    <div class=\"header-logo-main text-center\">
        ";
        // line 3
        yield from $this->unwrap()->yieldBlock('layout_header_logo_link', $context, $blocks);
        // line 34
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_logo_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_link"));

        // line 4
        yield "            <a class=\"header-logo-main-link\"
               href=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.home.page");
        yield "\"
               title=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.logoLink")), "html", null, true);
        yield "\">
                ";
        // line 7
        yield from $this->unwrap()->yieldBlock('layout_header_logo_image', $context, $blocks);
        // line 32
        yield "            </a>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_logo_image(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_image"));

        // line 8
        yield "                    <picture class=\"header-logo-picture d-block m-auto\">
                        ";
        // line 9
        yield from $this->unwrap()->yieldBlock('layout_header_logo_image_tablet', $context, $blocks);
        // line 15
        yield "
                        ";
        // line 16
        yield from $this->unwrap()->yieldBlock('layout_header_logo_image_mobile', $context, $blocks);
        // line 22
        yield "
                        ";
        // line 23
        yield from $this->unwrap()->yieldBlock('layout_header_logo_image_default', $context, $blocks);
        // line 30
        yield "                    </picture>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_logo_image_tablet(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_image_tablet"));

        // line 10
        yield "                            ";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-tablet") && ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-tablet") != $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop")))) {
            // line 11
            yield "                                <source srcset=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeUrl($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-tablet")), "html", null, true);
            yield "\"
                                        media=\"(min-width: ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md"), "html", null, true);
            yield "px) and (max-width: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.lg") - 1), "html", null, true);
            yield "px)\">
                            ";
        }
        // line 14
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_logo_image_mobile(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_image_mobile"));

        // line 17
        yield "                            ";
        if (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-mobile") && ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-mobile") != $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop")))) {
            // line 18
            yield "                                <source srcset=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeUrl($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-mobile")), "html", null, true);
            yield "\"
                                        media=\"(max-width: ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md") - 1), "html", null, true);
            yield "px)\">
                            ";
        }
        // line 21
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_logo_image_default(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo_image_default"));

        // line 24
        yield "                            ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop")) {
            // line 25
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeUrl($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop")), "html", null, true);
            yield "\"
                                     alt=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.logoLink")), "html", null, true);
            yield "\"
                                     class=\"img-fluid header-logo-main-img\">
                            ";
        }
        // line 29
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/layout/header/logo.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  236 => 29,  230 => 26,  225 => 25,  222 => 24,  212 => 23,  204 => 21,  199 => 19,  194 => 18,  191 => 17,  181 => 16,  173 => 14,  166 => 12,  161 => 11,  158 => 10,  148 => 9,  139 => 30,  137 => 23,  134 => 22,  132 => 16,  129 => 15,  127 => 9,  124 => 8,  114 => 7,  105 => 32,  103 => 7,  99 => 6,  95 => 5,  92 => 4,  82 => 3,  73 => 34,  71 => 3,  68 => 2,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block layout_header_logo_inner %}
    <div class=\"header-logo-main text-center\">
        {% block layout_header_logo_link %}
            <a class=\"header-logo-main-link\"
               href=\"{{ path('frontend.home.page') }}\"
               title=\"{{ 'header.logoLink'|trans|striptags }}\">
                {% block layout_header_logo_image %}
                    <picture class=\"header-logo-picture d-block m-auto\">
                        {% block layout_header_logo_image_tablet %}
                            {% if theme_config('sw-logo-tablet') and theme_config('sw-logo-tablet') != theme_config('sw-logo-desktop') %}
                                <source srcset=\"{{ theme_config('sw-logo-tablet')|sw_encode_url }}\"
                                        media=\"(min-width: {{ theme_config('breakpoint.md') }}px) and (max-width: {{ theme_config('breakpoint.lg') - 1 }}px)\">
                            {% endif %}
                        {% endblock %}

                        {% block layout_header_logo_image_mobile %}
                            {% if theme_config('sw-logo-mobile') and theme_config('sw-logo-mobile') != theme_config('sw-logo-desktop') %}
                                <source srcset=\"{{ theme_config('sw-logo-mobile')|sw_encode_url }}\"
                                        media=\"(max-width: {{ theme_config('breakpoint.md') - 1 }}px)\">
                            {% endif %}
                        {% endblock %}

                        {% block layout_header_logo_image_default %}
                            {% if theme_config('sw-logo-desktop') %}
                                <img src=\"{{ theme_config('sw-logo-desktop')|sw_encode_url }}\"
                                     alt=\"{{ 'header.logoLink'|trans|striptags }}\"
                                     class=\"img-fluid header-logo-main-img\">
                            {% endif %}
                        {% endblock %}
                    </picture>
                {% endblock %}
            </a>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/layout/header/logo.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/layout/header/logo.html.twig");
    }
}
