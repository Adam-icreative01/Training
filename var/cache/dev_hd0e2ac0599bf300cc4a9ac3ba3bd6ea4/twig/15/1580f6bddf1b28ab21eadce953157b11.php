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

/* @Storefront/storefront/component/product/card/badges.html.twig */
class __TwigTemplate_cbeb0f84836d55944e147a7f498d7088 extends Template
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
            'component_product_badges' => [$this, 'block_component_product_badges'],
            'component_product_badges_discount' => [$this, 'block_component_product_badges_discount'],
            'component_product_badges_topseller' => [$this, 'block_component_product_badges_topseller'],
            'component_product_badges_new' => [$this, 'block_component_product_badges_new'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/card/badges.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('component_product_badges', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_badges(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_badges"));

        // line 2
        yield "    <div class=\"product-badges\">
        ";
        // line 3
        yield from $this->unwrap()->yieldBlock('component_product_badges_discount', $context, $blocks);
        // line 23
        yield "
        ";
        // line 24
        yield from $this->unwrap()->yieldBlock('component_product_badges_topseller', $context, $blocks);
        // line 31
        yield "
        ";
        // line 32
        yield from $this->unwrap()->yieldBlock('component_product_badges_new', $context, $blocks);
        // line 39
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_badges_discount(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_badges_discount"));

        // line 4
        yield "            ";
        $context["price"] = SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrice", [], "any", false, false, false, 4);
        // line 5
        yield "            ";
        if ((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 5), "count", [], "any", false, false, false, 5) > 0)) {
            // line 6
            yield "                ";
            $context["price"] = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 6), "last", [], "any", false, false, false, 6);
            // line 7
            yield "            ";
        }
        // line 8
        yield "
            ";
        // line 9
        $context["listPrice"] = (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["price"] ?? null), "listPrice", [], "any", false, false, false, 9), "percentage", [], "any", false, false, false, 9) > 0);
        // line 10
        yield "            ";
        $context["hasRange"] = (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 10), "count", [], "any", false, false, false, 10) > 1);
        // line 11
        yield "
            ";
        // line 12
        $context["displayParent"] = (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "variantListingConfig", [], "any", false, false, false, 12), "displayParent", [], "any", false, false, false, 12) && (SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "parentId", [], "any", false, false, false, 12) === null));
        // line 13
        yield "            ";
        if (($context["displayParent"] ?? null)) {
            // line 14
            yield "                ";
            $context["displayFromVariants"] = (($context["displayParent"] ?? null) && (SwTwigFunction::getAttribute($this->env, $this->source, ($context["price"] ?? null), "unitPrice", [], "any", false, false, false, 14) !== SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "calculatedCheapestPrice", [], "any", false, false, false, 14), "unitPrice", [], "any", false, false, false, 14)));
            // line 15
            yield "            ";
        }
        // line 16
        yield "
            ";
        // line 17
        if (((($context["listPrice"] ?? null) &&  !($context["hasRange"] ?? null)) &&  !($context["displayFromVariants"] ?? null))) {
            // line 18
            yield "                <div class=\"badge bg-danger badge-discount\">
                    <span>&#37;</span>
                </div>
            ";
        }
        // line 22
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_badges_topseller(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_badges_topseller"));

        // line 25
        yield "            ";
        if (SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "markAsTopseller", [], "any", false, false, false, 25)) {
            // line 26
            yield "                <div>
                    <span class=\"badge bg-warning badge-topseller\">";
            // line 27
            yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxLabelTopseller"));
            yield "</span>
                </div>
            ";
        }
        // line 30
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_badges_new(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_badges_new"));

        // line 33
        yield "            ";
        if (SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "isNew", [], "any", false, false, false, 33)) {
            // line 34
            yield "                <div>
                    <span class=\"badge bg-success badge-new\">";
            // line 35
            yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxLabelNew"));
            yield "</span>
                </div>
            ";
        }
        // line 38
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/component/product/card/badges.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  205 => 38,  199 => 35,  196 => 34,  193 => 33,  183 => 32,  175 => 30,  169 => 27,  166 => 26,  163 => 25,  153 => 24,  145 => 22,  139 => 18,  137 => 17,  134 => 16,  131 => 15,  128 => 14,  125 => 13,  123 => 12,  120 => 11,  117 => 10,  115 => 9,  112 => 8,  109 => 7,  106 => 6,  103 => 5,  100 => 4,  90 => 3,  81 => 39,  79 => 32,  76 => 31,  74 => 24,  71 => 23,  69 => 3,  66 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block component_product_badges %}
    <div class=\"product-badges\">
        {% block component_product_badges_discount %}
            {% set price = product.calculatedPrice %}
            {% if product.calculatedPrices.count > 0 %}
                {% set price = product.calculatedPrices.last %}
            {% endif %}

            {% set listPrice = price.listPrice.percentage > 0 %}
            {% set hasRange = product.calculatedPrices.count > 1 %}

            {% set displayParent = product.variantListingConfig.displayParent and product.parentId === null %}
            {% if displayParent %}
                {% set displayFromVariants = displayParent and price.unitPrice !== product.calculatedCheapestPrice.unitPrice %}
            {% endif %}

            {% if listPrice and not hasRange and not displayFromVariants %}
                <div class=\"badge bg-danger badge-discount\">
                    <span>&#37;</span>
                </div>
            {% endif %}
        {% endblock %}

        {% block component_product_badges_topseller %}
            {% if product.markAsTopseller %}
                <div>
                    <span class=\"badge bg-warning badge-topseller\">{{ 'listing.boxLabelTopseller'|trans|sw_sanitize }}</span>
                </div>
            {% endif %}
        {% endblock %}

        {% block component_product_badges_new %}
            {% if product.isNew %}
                <div>
                    <span class=\"badge bg-success badge-new\">{{ 'listing.boxLabelNew'|trans|sw_sanitize }}</span>
                </div>
            {% endif %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/component/product/card/badges.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/component/product/card/badges.html.twig");
    }
}
