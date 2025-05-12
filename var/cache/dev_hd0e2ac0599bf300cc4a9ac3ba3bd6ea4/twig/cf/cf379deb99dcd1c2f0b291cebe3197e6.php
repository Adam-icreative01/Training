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

/* @Storefront/storefront/block/cms-block-product-listing.html.twig */
class __TwigTemplate_c6cd90b0b3402a26de869521e54ea9c8 extends Template
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
            'block_product_listing' => [$this, 'block_block_product_listing'],
            'block_product_listing_inner' => [$this, 'block_block_product_listing_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/block/cms-block-product-listing.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('block_product_listing', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_block_product_listing(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_product_listing"));

        // line 2
        yield "    ";
        $context["element"] = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["block"] ?? null), "slots", [], "any", false, false, false, 2), "getSlot", ["content"], "method", false, false, false, 2);
        // line 3
        yield "    ";
        $context["columns"] = 1;
        // line 4
        yield "
    <div class=\"col-12\" data-cms-element-id=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 5), "html", null, true);
        yield "\">
        ";
        // line 6
        yield from $this->unwrap()->yieldBlock('block_product_listing_inner', $context, $blocks);
        // line 10
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_block_product_listing_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_product_listing_inner"));

        // line 7
        yield "            ";
        $context["template"] = (("@Storefront/storefront/element/cms-element-" . SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 7)) . ".html.twig");
        // line 8
        yield "            ";
        try {
            $_v0 =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find(($context["template"] ?? null));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/block/cms-block-product-listing.html.twig", 8);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 9
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/block/cms-block-product-listing.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  118 => 9,  101 => 8,  98 => 7,  88 => 6,  79 => 10,  77 => 6,  73 => 5,  70 => 4,  67 => 3,  64 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block block_product_listing %}
    {% set element = block.slots.getSlot('content') %}
    {% set columns = 1 %}

    <div class=\"col-12\" data-cms-element-id=\"{{ element.id }}\">
        {% block block_product_listing_inner %}
            {% set template = '@Storefront/storefront/element/cms-element-' ~ element.type ~ '.html.twig' %}
            {% sw_include template ignore missing %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/block/cms-block-product-listing.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/block/cms-block-product-listing.html.twig");
    }
}
