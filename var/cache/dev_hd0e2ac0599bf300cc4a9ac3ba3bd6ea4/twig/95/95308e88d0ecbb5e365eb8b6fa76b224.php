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

/* @Storefront/storefront/component/product/card/box.html.twig */
class __TwigTemplate_0a40b6aa303840765b76e67fafb02797 extends Template
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
            'component_product_box_include' => [$this, 'block_component_product_box_include'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/card/box.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('component_product_box_include', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_include(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_include"));

        // line 2
        yield "    ";
        // line 4
        yield "
    ";
        // line 5
        if (Twig\Extension\CoreExtension::testEmpty(($context["layout"] ?? null))) {
            // line 6
            yield "        ";
            $context["layout"] = "standard";
            // line 7
            yield "    ";
        }
        // line 8
        yield "
    ";
        // line 9
        $context["sizes"] = ["xs" => "500px", "sm" => "315px", "md" => "390px", "lg" => "350px", "xl" => "280px"];
        // line 16
        yield "
    ";
        // line 17
        if ((($context["layout"] ?? null) == "image")) {
            // line 18
            yield "        ";
            $context["sizes"] = ["xs" => "500px", "sm" => "500px", "md" => "390px", "lg" => "350px", "xl" => "280px"];
            // line 25
            yield "    ";
        }
        // line 26
        yield "
    ";
        // line 27
        if ((($context["layout"] ?? null) == "standard")) {
            // line 28
            yield "        ";
            yield from $this->loadTemplate("@Storefront/storefront/component/product/card/box-standard.html.twig", "@Storefront/storefront/component/product/card/box.html.twig", 28)->unwrap()->yield($context);
            // line 29
            yield "    ";
        } elseif ((($context["layout"] ?? null) == "image")) {
            // line 30
            yield "        ";
            yield from $this->loadTemplate("@Storefront/storefront/component/product/card/box-image.html.twig", "@Storefront/storefront/component/product/card/box.html.twig", 30)->unwrap()->yield($context);
            // line 31
            yield "    ";
        } elseif ((($context["layout"] ?? null) == "minimal")) {
            // line 32
            yield "        ";
            yield from $this->loadTemplate("@Storefront/storefront/component/product/card/box-minimal.html.twig", "@Storefront/storefront/component/product/card/box.html.twig", 32)->unwrap()->yield($context);
            // line 33
            yield "    ";
        } elseif ((($context["layout"] ?? null) == "wishlist")) {
            // line 34
            yield "        ";
            yield from $this->loadTemplate("@Storefront/storefront/component/product/card/box-wishlist.html.twig", "@Storefront/storefront/component/product/card/box.html.twig", 34)->unwrap()->yield($context);
            // line 35
            yield "    ";
        } else {
            // line 36
            yield "        ";
            $context["template"] = (("@Storefront/storefront/component/product/card/box-" . ($context["layout"] ?? null)) . ".html.twig");
            // line 37
            yield "        ";
            try {
                $_v0 =                 ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                    $includeTemplate = $finder->find(($context["template"] ?? null));

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/product/card/box.html.twig", 37);
                })());
            } catch (LoaderError $e) {
                // ignore missing template
                $_v0 = null;
            }
            if ($_v0) {
                yield from $_v0->unwrap()->yield($context);
            }
            // line 38
            yield "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/component/product/card/box.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  141 => 38,  124 => 37,  121 => 36,  118 => 35,  115 => 34,  112 => 33,  109 => 32,  106 => 31,  103 => 30,  100 => 29,  97 => 28,  95 => 27,  92 => 26,  89 => 25,  86 => 18,  84 => 17,  81 => 16,  79 => 9,  76 => 8,  73 => 7,  70 => 6,  68 => 5,  65 => 4,  63 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block component_product_box_include %}
    {# Includes a custom product-box template defined by the layout variable.
       The standard template is used if no custom layout is set. #}

    {% if layout is empty %}
        {% set layout = 'standard' %}
    {% endif %}

    {% set sizes = {
        xs: '500px',
        sm: '315px',
        md: '390px',
        lg: '350px',
        xl: '280px'
    } %}

    {% if layout == 'image' %}
        {% set sizes = {
            xs: '500px',
            sm: '500px',
            md: '390px',
            lg: '350px',
            xl: '280px'
        } %}
    {% endif %}

    {% if layout == 'standard' %}
        {% sw_include '@Storefront/storefront/component/product/card/box-standard.html.twig' %}
    {% elseif layout == 'image' %}
        {% sw_include '@Storefront/storefront/component/product/card/box-image.html.twig' %}
    {% elseif layout == 'minimal' %}
        {% sw_include '@Storefront/storefront/component/product/card/box-minimal.html.twig' %}
    {% elseif layout == 'wishlist' %}
        {% sw_include '@Storefront/storefront/component/product/card/box-wishlist.html.twig' %}
    {% else %}
        {% set template = '@Storefront/storefront/component/product/card/box-' ~ layout ~ '.html.twig' %}
        {% sw_include template ignore missing %}
    {% endif %}
{% endblock %}
", "@Storefront/storefront/component/product/card/box.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/component/product/card/box.html.twig");
    }
}
