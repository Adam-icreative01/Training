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

/* @Storefront/storefront/layout/header/actions/cart-widget.html.twig */
class __TwigTemplate_3f2b4f31fcd884c3967ba47b456f3163 extends Template
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
            'layout_header_actions_cart_widget' => [$this, 'block_layout_header_actions_cart_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/actions/cart-widget.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('layout_header_actions_cart_widget', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_actions_cart_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_cart_widget"));

        // line 2
        yield "    <span class=\"header-cart-icon\">
        ";
        // line 3
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/actions/cart-widget.html.twig", 3);
        })())->unwrap()->yield(CoreExtension::merge($context, ["ariaLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartTitle"), "name" => "bag"]));
        // line 6
        yield "    </span>
    ";
        // line 7
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 7), "lineItems", [], "any", false, false, false, 7)) > 0)) {
            // line 8
            yield "        <span class=\"badge bg-primary header-cart-badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 8), "lineItems", [], "any", false, false, false, 8)), "html", null, true);
            yield "</span>
    ";
        }
        // line 10
        yield "    <span class=\"header-cart-total d-none d-sm-inline-block ms-sm-2\">
        ";
        // line 12
        yield "        ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 12), "price", [], "any", false, false, false, 12), "positionPrice", [], "any", false, false, false, 12)), "html", null, true);
        if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) {
            yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        }
        // line 13
        yield "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/layout/header/actions/cart-widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  94 => 13,  88 => 12,  85 => 10,  79 => 8,  77 => 7,  74 => 6,  66 => 3,  63 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block layout_header_actions_cart_widget %}
    <span class=\"header-cart-icon\">
        {% sw_icon 'bag' style {
            ariaLabel: 'checkout.cartTitle'|trans
        } %}
    </span>
    {% if page.cart.lineItems|length > 0 %}
        <span class=\"badge bg-primary header-cart-badge\">{{ page.cart.lineItems|length }}</span>
    {% endif %}
    <span class=\"header-cart-total d-none d-sm-inline-block ms-sm-2\">
        {# @deprecated tag:v6.7.0 - Showing asterisk next to every price is deprecated. Tax and shipping info is only needed adjecent to \"add to cart\" buttons. #}
        {{ page.cart.price.positionPrice|currency }}{% if not feature('ACCESSIBILITY_TWEAKS') %}{{ 'general.star'|trans|sw_sanitize }}{% endif %}
    </span>
{% endblock %}
", "@Storefront/storefront/layout/header/actions/cart-widget.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/layout/header/actions/cart-widget.html.twig");
    }
}
