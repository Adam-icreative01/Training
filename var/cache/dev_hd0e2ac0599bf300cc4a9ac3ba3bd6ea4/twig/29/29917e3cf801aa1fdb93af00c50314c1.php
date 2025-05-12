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

/* @Storefront/storefront/layout/header/actions/wishlist-widget.html.twig */
class __TwigTemplate_1740a365ca1c8b320e65186dd12705c8 extends Template
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
            'layout_header_actions_wishlist_widget' => [$this, 'block_layout_header_actions_wishlist_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/actions/wishlist-widget.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('layout_header_actions_wishlist_widget', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_actions_wishlist_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_wishlist_widget"));

        // line 2
        yield "    ";
        $context["showCounter"] = (((array_key_exists("showCounter", $context) &&  !(null === $context["showCounter"]))) ? ($context["showCounter"]) : (true));
        // line 3
        yield "
    ";
        // line 4
        if (($context["showCounter"] ?? null)) {
            // line 5
            yield "        <span class=\"header-wishlist-icon\">
            ";
            // line 6
            yield from             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/actions/wishlist-widget.html.twig", 6);
            })())->unwrap()->yield(CoreExtension::merge($context, ["name" => "heart"]));
            // line 7
            yield "        </span>
    ";
        }
        // line 9
        yield "
    ";
        // line 10
        $context["wishlistStorageOptions"] = ["listPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.wishlist.product.list"), "mergePath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.wishlist.product.merge"), "pageletPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.wishlist.product.merge.pagelet")];
        // line 15
        yield "
    ";
        // line 16
        $context["wishlistWidgetOptions"] = ["showCounter" => ($context["showCounter"] ?? null)];
        // line 17
        yield "
    <span class=\"badge bg-primary header-wishlist-badge\"
          id=\"wishlist-basket\"
          data-wishlist-storage=\"true\"
          data-wishlist-storage-options=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('json_encode')->getCallable()(($context["wishlistStorageOptions"] ?? null)), "html", null, true);
        yield "\"
          data-wishlist-widget=\"true\"
          data-wishlist-widget-options=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('json_encode')->getCallable()(($context["wishlistWidgetOptions"] ?? null)), "html", null, true);
        yield "\"
    ></span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/layout/header/actions/wishlist-widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  107 => 23,  102 => 21,  96 => 17,  94 => 16,  91 => 15,  89 => 10,  86 => 9,  82 => 7,  74 => 6,  71 => 5,  69 => 4,  66 => 3,  63 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block layout_header_actions_wishlist_widget %}
    {% set showCounter = showCounter ?? true %}

    {% if showCounter %}
        <span class=\"header-wishlist-icon\">
            {% sw_icon 'heart' %}
        </span>
    {% endif %}

    {% set wishlistStorageOptions = {
        listPath: path('frontend.wishlist.product.list'),
        mergePath: path('frontend.wishlist.product.merge'),
        pageletPath: path('frontend.wishlist.product.merge.pagelet'),
    } %}

    {% set wishlistWidgetOptions = { showCounter: showCounter } %}

    <span class=\"badge bg-primary header-wishlist-badge\"
          id=\"wishlist-basket\"
          data-wishlist-storage=\"true\"
          data-wishlist-storage-options=\"{{ wishlistStorageOptions|json_encode }}\"
          data-wishlist-widget=\"true\"
          data-wishlist-widget-options=\"{{ wishlistWidgetOptions|json_encode }}\"
    ></span>
{% endblock %}
", "@Storefront/storefront/layout/header/actions/wishlist-widget.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/layout/header/actions/wishlist-widget.html.twig");
    }
}
