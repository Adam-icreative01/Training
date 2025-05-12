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

/* @Storefront/storefront/component/listing/filter-panel.html.twig */
class __TwigTemplate_012545ada40fcc09f5988401a608aecd extends Template
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
            'component_filter_panel' => [$this, 'block_component_filter_panel'],
            'component_filter_panel_header' => [$this, 'block_component_filter_panel_header'],
            'component_filter_panel_element' => [$this, 'block_component_filter_panel_element'],
            'component_filter_panel_items_container' => [$this, 'block_component_filter_panel_items_container'],
            'component_filter_panel_items' => [$this, 'block_component_filter_panel_items'],
            'component_filter_panel_item_manufacturer' => [$this, 'block_component_filter_panel_item_manufacturer'],
            'component_filter_panel_item_properties' => [$this, 'block_component_filter_panel_item_properties'],
            'component_filter_panel_item_price' => [$this, 'block_component_filter_panel_item_price'],
            'component_filter_panel_item_rating_select' => [$this, 'block_component_filter_panel_item_rating_select'],
            'component_filter_panel_item_shipping_free' => [$this, 'block_component_filter_panel_item_shipping_free'],
            'component_filter_panel_active_container' => [$this, 'block_component_filter_panel_active_container'],
            'component_filter_panel_active_container_inner' => [$this, 'block_component_filter_panel_active_container_inner'],
            'component_filter_panel_aria_live' => [$this, 'block_component_filter_panel_aria_live'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/listing/filter-panel.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('component_filter_panel', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel"));

        // line 2
        yield "    ";
        yield from $this->unwrap()->yieldBlock('component_filter_panel_header', $context, $blocks);
        // line 10
        yield "
    ";
        // line 12
        yield "    ";
        yield from $this->unwrap()->yieldBlock('component_filter_panel_element', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_panel_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_header"));

        // line 3
        yield "        <div class=\"filter-panel-offcanvas-header\">
            <h2 class=\"filter-panel-offcanvas-only filter-panel-offcanvas-title\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterTitleText"), "html", null, true);
        yield "</h2>

            <button type=\"button\" class=\"btn-close filter-panel-offcanvas-only filter-panel-offcanvas-close js-offcanvas-close\" aria-label=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterClose")), "html", null, true);
        yield "\">
            </button>
        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_panel_element(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_element"));

        // line 13
        yield "        <div class=\"filter-panel";
        if (($context["sidebar"] ?? null)) {
            yield " is--sidebar";
        }
        yield "\" aria-label=\"";
        yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterTitleText"));
        yield "\">
            ";
        // line 14
        yield from $this->unwrap()->yieldBlock('component_filter_panel_items_container', $context, $blocks);
        // line 101
        yield "
            ";
        // line 102
        yield from $this->unwrap()->yieldBlock('component_filter_panel_active_container', $context, $blocks);
        // line 108
        yield "
            ";
        // line 110
        yield "            ";
        yield from $this->unwrap()->yieldBlock('component_filter_panel_aria_live', $context, $blocks);
        // line 117
        yield "        </div>
     ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_panel_items_container(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_items_container"));

        // line 15
        yield "                <div class=\"filter-panel-items-container\" role=\"list\">
                    ";
        // line 16
        yield from $this->unwrap()->yieldBlock('component_filter_panel_items', $context, $blocks);
        // line 99
        yield "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_panel_items(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_items"));

        // line 17
        yield "
                        ";
        // line 18
        yield from $this->unwrap()->yieldBlock('component_filter_panel_item_manufacturer', $context, $blocks);
        // line 33
        yield "
                        ";
        // line 34
        yield from $this->unwrap()->yieldBlock('component_filter_panel_item_properties', $context, $blocks);
        // line 53
        yield "
                        ";
        // line 54
        yield from $this->unwrap()->yieldBlock('component_filter_panel_item_price', $context, $blocks);
        // line 71
        yield "
                        ";
        // line 72
        yield from $this->unwrap()->yieldBlock('component_filter_panel_item_rating_select', $context, $blocks);
        // line 85
        yield "
                        ";
        // line 86
        yield from $this->unwrap()->yieldBlock('component_filter_panel_item_shipping_free', $context, $blocks);
        // line 98
        yield "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_panel_item_manufacturer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_item_manufacturer"));

        // line 19
        yield "                            ";
        // line 20
        yield "                            ";
        $context["manufacturers"] = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 20), "get", ["manufacturer"], "method", false, false, false, 20);
        // line 21
        yield "                            ";
        if ( !Twig\Extension\CoreExtension::testEmpty(SwTwigFunction::getAttribute($this->env, $this->source, ($context["manufacturers"] ?? null), "entities", [], "any", false, false, false, 21))) {
            // line 22
            yield "                                ";
            $context["manufacturersSorted"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\SecurityExtension']->sort(SwTwigFunction::getAttribute($this->env, $this->source, ($context["manufacturers"] ?? null), "entities", [], "any", false, false, false, 22), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (Twig\Extension\CoreExtension::lower($this->env->getCharset(), SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["a"] ?? null), "translated", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22)) <=> Twig\Extension\CoreExtension::lower($this->env->getCharset(), SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["b"] ?? null), "translated", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22))); });
            // line 23
            yield "
                                ";
            // line 24
            yield from $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 24)->unwrap()->yield(CoreExtension::merge($context, ["elements" =>             // line 25
($context["manufacturersSorted"] ?? null), "sidebar" =>             // line 26
($context["sidebar"] ?? null), "name" => "manufacturer", "displayName" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterManufacturerDisplayName")), "ariaLabel" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterByManufacturerAriaLabel"))]));
            // line 31
            yield "                            ";
        }
        // line 32
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_panel_item_properties(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_item_properties"));

        // line 35
        yield "                            ";
        // line 36
        yield "                            ";
        $context["properties"] = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 36), "get", ["properties"], "method", false, false, false, 36);
        // line 37
        yield "
                            ";
        // line 38
        if ( !Twig\Extension\CoreExtension::testEmpty(SwTwigFunction::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "entities", [], "any", false, false, false, 38))) {
            // line 39
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(SwTwigFunction::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "entities", [], "any", false, false, false, 39));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                // line 40
                yield "                                    ";
                yield from $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-property-select.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 40)->unwrap()->yield(CoreExtension::merge($context, ["elements" => SwTwigFunction::getAttribute($this->env, $this->source,                 // line 41
$context["property"], "options", [], "any", false, false, false, 41), "sidebar" =>                 // line 42
($context["sidebar"] ?? null), "name" => "properties", "displayName" => SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source,                 // line 44
$context["property"], "translated", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "displayType" => SwTwigFunction::getAttribute($this->env, $this->source,                 // line 45
$context["property"], "displayType", [], "any", false, false, false, 45), "pluginSelector" => "filter-property-select", "propertyName" => SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source,                 // line 47
$context["property"], "translated", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47), "ariaLabel" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterByAriaLabel", ["%name%" => SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source,                 // line 48
$context["property"], "translated", [], "any", false, false, false, 48), "name", [], "any", false, false, false, 48)]))]));
                // line 50
                yield "                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "                            ";
        }
        // line 52
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_panel_item_price(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_item_price"));

        // line 55
        yield "                            ";
        $context["price"] = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 55), "get", ["price"], "method", false, false, false, 55);
        // line 56
        yield "
                            ";
        // line 57
        if (((SwTwigFunction::getAttribute($this->env, $this->source, ($context["price"] ?? null), "min", [], "any", false, false, false, 57) !== null) && (SwTwigFunction::getAttribute($this->env, $this->source, ($context["price"] ?? null), "max", [], "any", false, false, false, 57) !== null))) {
            // line 58
            yield "                                ";
            yield from $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-range.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 58)->unwrap()->yield(CoreExtension::merge($context, ["sidebar" =>             // line 59
($context["sidebar"] ?? null), "name" => "price", "minKey" => "min-price", "maxKey" => "max-price", "lowerBound" => 0, "displayName" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterPriceDisplayName")), "minInputValue" => 0, "maxInputValue" => SwTwigFunction::getAttribute($this->env, $this->source,             // line 66
($context["price"] ?? null), "max", [], "any", false, false, false, 66), "ariaLabel" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterByPriceAriaLabel"))]));
            // line 69
            yield "                            ";
        }
        // line 70
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_panel_item_rating_select(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_item_rating_select"));

        // line 73
        yield "                            ";
        $context["rating"] = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 73), "get", ["rating"], "method", false, false, false, 73);
        // line 74
        yield "
                            ";
        // line 75
        if ((SwTwigFunction::getAttribute($this->env, $this->source, ($context["rating"] ?? null), "max", [], "any", false, false, false, 75) > 0)) {
            // line 76
            yield "                                ";
            yield from $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-rating-select.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 76)->unwrap()->yield(CoreExtension::merge($context, ["sidebar" =>             // line 77
($context["sidebar"] ?? null), "name" => "rating", "pluginSelector" => "filter-rating-select", "displayName" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRatingDisplayName")), "ariaLabel" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterByRatingAriaLabel"))]));
            // line 83
            yield "                            ";
        }
        // line 84
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_panel_item_shipping_free(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_item_shipping_free"));

        // line 87
        yield "                            ";
        $context["shippingFree"] = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 87), "get", ["shipping-free"], "method", false, false, false, 87);
        // line 88
        yield "
                            ";
        // line 89
        if ((SwTwigFunction::getAttribute($this->env, $this->source, ($context["shippingFree"] ?? null), "max", [], "any", false, false, false, 89) > 0)) {
            // line 90
            yield "                                ";
            yield from $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-boolean.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 90)->unwrap()->yield(CoreExtension::merge($context, ["name" => "shipping-free", "displayName" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterFreeShippingDisplayName")), "altText" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterFreeShippingAltText")), "altTextActive" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterFreeShippingAltTextActive"))]));
            // line 96
            yield "                            ";
        }
        // line 97
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_panel_active_container(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_active_container"));

        // line 103
        yield "                ";
        // line 104
        yield "                <div class=\"filter-panel-active-container";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) {
            yield " d-flex flex-wrap gap-2";
        }
        yield "\">
                    ";
        // line 105
        yield from $this->unwrap()->yieldBlock('component_filter_panel_active_container_inner', $context, $blocks);
        // line 106
        yield "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 105
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_panel_active_container_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_active_container_inner"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 110
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_panel_aria_live(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_aria_live"));

        // line 111
        yield "                ";
        if (($context["ariaLiveUpdates"] ?? null)) {
            // line 112
            yield "                    <div class=\"filter-panel-aria-live visually-hidden\" aria-live=\"polite\" aria-atomic=\"true\">
                        ";
            // line 114
            yield "                    </div>
                ";
        }
        // line 116
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/component/listing/filter-panel.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  504 => 116,  500 => 114,  497 => 112,  494 => 111,  484 => 110,  468 => 105,  459 => 106,  457 => 105,  450 => 104,  448 => 103,  438 => 102,  430 => 97,  427 => 96,  424 => 90,  422 => 89,  419 => 88,  416 => 87,  406 => 86,  398 => 84,  395 => 83,  393 => 77,  391 => 76,  389 => 75,  386 => 74,  383 => 73,  373 => 72,  365 => 70,  362 => 69,  360 => 66,  359 => 59,  357 => 58,  355 => 57,  352 => 56,  349 => 55,  339 => 54,  331 => 52,  328 => 51,  314 => 50,  312 => 48,  311 => 47,  310 => 45,  309 => 44,  308 => 42,  307 => 41,  305 => 40,  287 => 39,  285 => 38,  282 => 37,  279 => 36,  277 => 35,  267 => 34,  259 => 32,  256 => 31,  254 => 26,  253 => 25,  252 => 24,  249 => 23,  246 => 22,  243 => 21,  240 => 20,  238 => 19,  228 => 18,  220 => 98,  218 => 86,  215 => 85,  213 => 72,  210 => 71,  208 => 54,  205 => 53,  203 => 34,  200 => 33,  198 => 18,  195 => 17,  185 => 16,  176 => 99,  174 => 16,  171 => 15,  161 => 14,  152 => 117,  149 => 110,  146 => 108,  144 => 102,  141 => 101,  139 => 14,  130 => 13,  120 => 12,  108 => 6,  103 => 4,  100 => 3,  90 => 2,  81 => 12,  78 => 10,  75 => 2,  58 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block component_filter_panel %}
    {% block component_filter_panel_header %}
        <div class=\"filter-panel-offcanvas-header\">
            <h2 class=\"filter-panel-offcanvas-only filter-panel-offcanvas-title\">{{ \"listing.filterTitleText\"|trans }}</h2>

            <button type=\"button\" class=\"btn-close filter-panel-offcanvas-only filter-panel-offcanvas-close js-offcanvas-close\" aria-label=\"{{ 'listing.filterClose'|trans|striptags }}\">
            </button>
        </div>
    {% endblock %}

    {# @var listing \\Shopware\\Core\\Framework\\DataAbstractionLayer\\Search\\EntitySearchResult #}
    {% block component_filter_panel_element %}
        <div class=\"filter-panel{% if sidebar %} is--sidebar{% endif %}\" aria-label=\"{{ 'listing.filterTitleText'|trans|sw_sanitize }}\">
            {% block component_filter_panel_items_container %}
                <div class=\"filter-panel-items-container\" role=\"list\">
                    {% block component_filter_panel_items %}

                        {% block component_filter_panel_item_manufacturer %}
                            {# @var manufacturers \\Shopware\\Core\\Framework\\DataAbstractionLayer\\Search\\AggregationResult\\Metric\\EntityResult #}
                            {% set manufacturers = listing.aggregations.get('manufacturer') %}
                            {% if not manufacturers.entities is empty %}
                                {% set manufacturersSorted = manufacturers.entities|sort((a, b) => a.translated.name|lower <=> b.translated.name|lower) %}

                                {% sw_include '@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig' with {
                                    elements: manufacturersSorted,
                                    sidebar: sidebar,
                                    name: 'manufacturer',
                                    displayName: 'listing.filterManufacturerDisplayName'|trans|sw_sanitize,
                                    ariaLabel: 'listing.filterByManufacturerAriaLabel'|trans|sw_sanitize
                                } %}
                            {% endif %}
                        {% endblock %}

                        {% block component_filter_panel_item_properties %}
                            {# @var properties \\Shopware\\Core\\Framework\\DataAbstractionLayer\\Search\\AggregationResult\\Metric\\EntityResult #}
                            {% set properties = listing.aggregations.get('properties') %}

                            {% if not properties.entities is empty %}
                                {% for property in properties.entities %}
                                    {% sw_include '@Storefront/storefront/component/listing/filter/filter-property-select.html.twig' with {
                                        elements: property.options,
                                        sidebar: sidebar,
                                        name: 'properties',
                                        displayName: property.translated.name,
                                        displayType: property.displayType,
                                        pluginSelector: 'filter-property-select',
                                        propertyName: property.translated.name,
                                        ariaLabel: 'listing.filterByAriaLabel'|trans({'%name%': property.translated.name})|sw_sanitize
                                    } %}
                                {% endfor %}
                            {% endif %}
                        {% endblock %}

                        {% block component_filter_panel_item_price %}
                            {% set price = listing.aggregations.get('price') %}

                            {% if price.min !== null and price.max !== null %}
                                {% sw_include '@Storefront/storefront/component/listing/filter/filter-range.html.twig' with {
                                    sidebar: sidebar,
                                    name: 'price',
                                    minKey: 'min-price',
                                    maxKey: 'max-price',
                                    lowerBound: 0,
                                    displayName: 'listing.filterPriceDisplayName'|trans|sw_sanitize,
                                    minInputValue: 0,
                                    maxInputValue: price.max,
                                    ariaLabel: 'listing.filterByPriceAriaLabel'|trans|sw_sanitize
                                } %}
                            {% endif %}
                        {% endblock %}

                        {% block component_filter_panel_item_rating_select %}
                            {% set rating = listing.aggregations.get('rating') %}

                            {% if rating.max > 0 %}
                                {% sw_include '@Storefront/storefront/component/listing/filter/filter-rating-select.html.twig' with {
                                    sidebar: sidebar,
                                    name: 'rating',
                                    pluginSelector: 'filter-rating-select',
                                    displayName: 'listing.filterRatingDisplayName'|trans|sw_sanitize,
                                    ariaLabel: 'listing.filterByRatingAriaLabel'|trans|sw_sanitize
                                } %}
                            {% endif %}
                        {% endblock %}

                        {% block component_filter_panel_item_shipping_free %}
                            {% set shippingFree = listing.aggregations.get('shipping-free') %}

                            {% if shippingFree.max > 0 %}
                                {% sw_include '@Storefront/storefront/component/listing/filter/filter-boolean.html.twig' with {
                                    name: 'shipping-free',
                                    displayName: 'listing.filterFreeShippingDisplayName'|trans|sw_sanitize,
                                    altText: 'listing.filterFreeShippingAltText'|trans|sw_sanitize,
                                    altTextActive: 'listing.filterFreeShippingAltTextActive'|trans|sw_sanitize,
                                } %}
                            {% endif %}
                        {% endblock %}
                    {% endblock %}
                </div>
            {% endblock %}

            {% block component_filter_panel_active_container %}
                {# @deprecated tag:v6.7.0 - Active filters container will be a simple flex layout with gap instead of putting margins on the individual buttons. #}
                <div class=\"filter-panel-active-container{% if feature('ACCESSIBILITY_TWEAKS') %} d-flex flex-wrap gap-2{% endif %}\">
                    {% block component_filter_panel_active_container_inner %}{% endblock %}
                </div>
            {% endblock %}

            {# Aria live region to tell the screen reader how many product results are shown after a filter was selected or deselected. #}
            {% block component_filter_panel_aria_live %}
                {% if ariaLiveUpdates %}
                    <div class=\"filter-panel-aria-live visually-hidden\" aria-live=\"polite\" aria-atomic=\"true\">
                        {# The live region content is generated by the `ListingPlugin` #}
                    </div>
                {% endif %}
            {% endblock %}
        </div>
     {% endblock %}
{% endblock %}
", "@Storefront/storefront/component/listing/filter-panel.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter-panel.html.twig");
    }
}
