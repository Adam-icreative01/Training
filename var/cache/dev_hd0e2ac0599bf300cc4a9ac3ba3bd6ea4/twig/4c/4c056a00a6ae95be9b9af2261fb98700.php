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

/* @Storefront/storefront/component/product/card/price-unit.html.twig */
class __TwigTemplate_6be57e2bc97e34fb264138ab6c52c482 extends Template
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
            'component_product_box_price_info' => [$this, 'block_component_product_box_price_info'],
            'component_product_box_price_unit' => [$this, 'block_component_product_box_price_unit'],
            'component_product_box_price_purchase_unit' => [$this, 'block_component_product_box_price_purchase_unit'],
            'component_product_box_price_reference_unit' => [$this, 'block_component_product_box_price_reference_unit'],
            'component_product_box_price' => [$this, 'block_component_product_box_price'],
            'component_product_box_price_tax_info' => [$this, 'block_component_product_box_price_tax_info'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/card/price-unit.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('component_product_box_price_info', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_price_info(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_info"));

        // line 2
        yield "    ";
        $context["cheapest"] = SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "calculatedCheapestPrice", [], "any", false, false, false, 2);
        // line 3
        yield "
    ";
        // line 4
        $context["real"] = SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrice", [], "any", false, false, false, 4);
        // line 5
        yield "    ";
        if ((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 5), "count", [], "any", false, false, false, 5) > 0)) {
            // line 6
            yield "        ";
            $context["real"] = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 6), "last", [], "any", false, false, false, 6);
            // line 7
            yield "    ";
        }
        // line 8
        yield "
    ";
        // line 9
        $context["referencePrice"] = SwTwigFunction::getAttribute($this->env, $this->source, ($context["real"] ?? null), "referencePrice", [], "any", false, false, false, 9);
        // line 10
        yield "
    ";
        // line 11
        $context["displayFrom"] = (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 11), "count", [], "any", false, false, false, 11) > 1);
        // line 12
        yield "    ";
        $context["displayParent"] = (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "variantListingConfig", [], "any", false, false, false, 12), "displayParent", [], "any", false, false, false, 12) && (SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "parentId", [], "any", false, false, false, 12) === null));
        // line 13
        yield "
    ";
        // line 14
        if (($context["displayParent"] ?? null)) {
            // line 15
            yield "        ";
            $context["displayFromVariants"] = (($context["displayParent"] ?? null) && (SwTwigFunction::getAttribute($this->env, $this->source, ($context["real"] ?? null), "unitPrice", [], "any", false, false, false, 15) !== SwTwigFunction::getAttribute($this->env, $this->source, ($context["cheapest"] ?? null), "unitPrice", [], "any", false, false, false, 15)));
            // line 16
            yield "        ";
            $context["real"] = ($context["cheapest"] ?? null);
            // line 17
            yield "        ";
            $context["totalVariants"] = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "cheapestPriceContainer", [], "any", false, false, false, 17), "value", [], "any", false, false, false, 17);
            // line 18
            yield "        ";
            $context["hasDifferentPrice"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->extensions['Shopware\Core\Framework\Adapter\Twig\SecurityExtension']->filter(($context["totalVariants"] ?? null), function ($__variant__) use ($context, $macros) { $context["variant"] = $__variant__; return (SwTwigFunction::getAttribute($this->env, $this->source, ($context["variant"] ?? null), "default", [], "any", false, false, false, 18) != null); })) > 0);
            // line 19
            yield "    ";
        }
        // line 20
        yield "
    <div class=\"product-price-info\">
        ";
        // line 22
        yield from $this->unwrap()->yieldBlock('component_product_box_price_unit', $context, $blocks);
        // line 47
        yield "
        ";
        // line 48
        yield from $this->unwrap()->yieldBlock('component_product_box_price', $context, $blocks);
        // line 94
        yield "
        ";
        // line 99
        yield "        ";
        if (($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS") && $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.listing.allowBuyInListing"))) {
            // line 100
            yield "            ";
            yield from $this->unwrap()->yieldBlock('component_product_box_price_tax_info', $context, $blocks);
            // line 114
            yield "        ";
        }
        // line 115
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_price_unit(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_unit"));

        // line 23
        yield "            <p class=\"product-price-unit\">
                ";
        // line 25
        yield "                ";
        yield from $this->unwrap()->yieldBlock('component_product_box_price_purchase_unit', $context, $blocks);
        // line 35
        yield "
                ";
        // line 37
        yield "                ";
        yield from $this->unwrap()->yieldBlock('component_product_box_price_reference_unit', $context, $blocks);
        // line 45
        yield "            </p>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_price_purchase_unit(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_purchase_unit"));

        // line 26
        yield "                    ";
        if ((($context["referencePrice"] ?? null) && SwTwigFunction::getAttribute($this->env, $this->source, ($context["referencePrice"] ?? null), "unitName", [], "any", false, false, false, 26))) {
            // line 27
            yield "                        <span class=\"product-unit-label\">
                            ";
            // line 28
            yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxUnitLabel"));
            yield "
                        </span>
                        <span class=\"price-unit-content\">
                            ";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["referencePrice"] ?? null), "purchaseUnit", [], "any", false, false, false, 31), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["referencePrice"] ?? null), "unitName", [], "any", false, false, false, 31), "html", null, true);
            yield "
                        </span>
                    ";
        }
        // line 34
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_price_reference_unit(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_reference_unit"));

        // line 38
        yield "                    ";
        if ( !(null === ($context["referencePrice"] ?? null))) {
            // line 39
            yield "                        <span class=\"price-unit-reference\">
                            ";
            // line 41
            yield "                            (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, SwTwigFunction::getAttribute($this->env, $this->source, ($context["referencePrice"] ?? null), "price", [], "any", false, false, false, 41)), "html", null, true);
            if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) {
                yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            }
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["referencePrice"] ?? null), "referenceUnit", [], "any", false, false, false, 41), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["referencePrice"] ?? null), "unitName", [], "any", false, false, false, 41), "html", null, true);
            yield ")
                        </span>
                    ";
        }
        // line 44
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_price(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price"));

        // line 49
        yield "            <div class=\"product-price-wrapper\">
                ";
        // line 50
        $context["price"] = ($context["real"] ?? null);
        // line 51
        yield "                ";
        $context["isListPrice"] = (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["price"] ?? null), "listPrice", [], "any", false, false, false, 51), "percentage", [], "any", false, false, false, 51) > 0);
        // line 52
        yield "                ";
        $context["isRegulationPrice"] = (SwTwigFunction::getAttribute($this->env, $this->source, ($context["price"] ?? null), "regulationPrice", [], "any", false, false, false, 52) != null);
        // line 53
        yield "
                <div class=\"product-cheapest-price";
        // line 54
        if ((((($context["isListPrice"] ?? null) && ($context["isRegulationPrice"] ?? null)) &&  !($context["displayFrom"] ?? null)) &&  !($context["displayFromVariants"] ?? null))) {
            yield " with-list-price";
        }
        if (((($context["isRegulationPrice"] ?? null) &&  !($context["displayFrom"] ?? null)) && ($context["displayFromVariants"] ?? null))) {
            yield " with-regulation-price";
        }
        if ((($context["displayFrom"] ?? null) && ($context["isRegulationPrice"] ?? null))) {
            yield " with-from-price";
        }
        yield "\">
                    ";
        // line 55
        if (((SwTwigFunction::getAttribute($this->env, $this->source, ($context["cheapest"] ?? null), "unitPrice", [], "any", false, false, false, 55) != SwTwigFunction::getAttribute($this->env, $this->source, ($context["real"] ?? null), "unitPrice", [], "any", false, false, false, 55)) && (SwTwigFunction::getAttribute($this->env, $this->source, ($context["cheapest"] ?? null), "variantId", [], "any", false, false, false, 55) != SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 55)))) {
            // line 56
            yield "                        ";
            // line 57
            yield "                        <div>";
            yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.cheapestPriceLabel"));
            yield "<span class=\"product-cheapest-price-price\"> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, SwTwigFunction::getAttribute($this->env, $this->source, ($context["cheapest"] ?? null), "unitPrice", [], "any", false, false, false, 57)), "html", null, true);
            if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) {
                yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            }
            yield "</span></div>
                    ";
        }
        // line 59
        yield "                </div>

                ";
        // line 61
        if ((($context["displayFrom"] ?? null) || ((($context["displayParent"] ?? null) && ($context["hasDifferentPrice"] ?? null)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["totalVariants"] ?? null)) > 1)))) {
            // line 62
            yield "                    ";
            yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.listingTextFrom"));
            yield "
                ";
        }
        // line 64
        yield "
                <span class=\"product-price";
        // line 65
        if (((($context["isListPrice"] ?? null) &&  !($context["displayFrom"] ?? null)) &&  !($context["displayFromVariants"] ?? null))) {
            yield " with-list-price";
        }
        yield "\">
                    ";
        // line 67
        yield "                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, SwTwigFunction::getAttribute($this->env, $this->source, ($context["price"] ?? null), "unitPrice", [], "any", false, false, false, 67)), "html", null, true);
        if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) {
            yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        }
        // line 68
        yield "
                    ";
        // line 69
        if (((($context["isListPrice"] ?? null) &&  !($context["displayFrom"] ?? null)) &&  !($context["displayFromVariants"] ?? null))) {
            // line 70
            yield "                        ";
            $context["afterListPriceSnippetExists"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.afterListPrice")) > 0);
            // line 71
            yield "                        ";
            $context["beforeListPriceSnippetExists"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.beforeListPrice")) > 0);
            // line 72
            yield "                        ";
            $context["hideStrikeTrough"] = (($context["beforeListPriceSnippetExists"] ?? null) || ($context["afterListPriceSnippetExists"] ?? null));
            // line 73
            yield "
                        <span class=\"list-price";
            // line 74
            if (($context["hideStrikeTrough"] ?? null)) {
                yield " list-price-no-line-through";
            }
            yield "\">
                            ";
            // line 75
            if (($context["beforeListPriceSnippetExists"] ?? null)) {
                yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize(Twig\Extension\CoreExtension::trim($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.beforeListPrice")));
            }
            // line 76
            yield "
                            ";
            // line 78
            yield "                            <span class=\"list-price-price\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["price"] ?? null), "listPrice", [], "any", false, false, false, 78), "price", [], "any", false, false, false, 78)), "html", null, true);
            if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) {
                yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            }
            yield "</span>

                            ";
            // line 80
            if (($context["afterListPriceSnippetExists"] ?? null)) {
                yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize(Twig\Extension\CoreExtension::trim($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.afterListPrice")));
            }
            // line 81
            yield "
                            <span class=\"list-price-percentage\">";
            // line 82
            yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.listPricePercentage", ["%price%" => SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["price"] ?? null), "listPrice", [], "any", false, false, false, 82), "percentage", [], "any", false, false, false, 82)]));
            yield "</span>
                        </span>
                    ";
        }
        // line 85
        yield "                </span>
                ";
        // line 86
        if (($context["isRegulationPrice"] ?? null)) {
            // line 87
            yield "                    <span class=\"product-price with-regulation-price\">
                        ";
            // line 89
            yield "                        ";
            if (($context["isListPrice"] ?? null)) {
                yield "<br>";
            }
            yield "<span class=\"regulation-price\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.listPricePreviously", ["%price%" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["price"] ?? null), "regulationPrice", [], "any", false, false, false, 89), "price", [], "any", false, false, false, 89))]), "html", null, true);
            if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) {
                yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            }
            yield "</span>
                    </span>
                ";
        }
        // line 92
        yield "            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 100
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_price_tax_info(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_tax_info"));

        // line 101
        yield "                ";
        $context["cmsPath"] = "frontend.cms.page";
        // line 102
        yield "
                <button class=\"product-price-tax-link btn btn-link-inline fs-6\"
                        type=\"button\"
                        data-ajax-modal=\"true\"
                        data-url=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["cmsPath"] ?? null), ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shippingPaymentInfoPage")]), "html", null, true);
        yield "\">
                    ";
        // line 107
        if ((SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "taxState", [], "any", false, false, false, 107) == "gross")) {
            // line 108
            yield "                        ";
            yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.grossTaxInformation"));
            yield "
                    ";
        } else {
            // line 110
            yield "                        ";
            yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.netTaxInformation"));
            yield "
                    ";
        }
        // line 112
        yield "                </button>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/component/product/card/price-unit.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  455 => 112,  449 => 110,  443 => 108,  441 => 107,  437 => 106,  431 => 102,  428 => 101,  418 => 100,  409 => 92,  395 => 89,  392 => 87,  390 => 86,  387 => 85,  381 => 82,  378 => 81,  374 => 80,  365 => 78,  362 => 76,  358 => 75,  352 => 74,  349 => 73,  346 => 72,  343 => 71,  340 => 70,  338 => 69,  335 => 68,  329 => 67,  323 => 65,  320 => 64,  314 => 62,  312 => 61,  308 => 59,  297 => 57,  295 => 56,  293 => 55,  281 => 54,  278 => 53,  275 => 52,  272 => 51,  270 => 50,  267 => 49,  257 => 48,  249 => 44,  235 => 41,  232 => 39,  229 => 38,  219 => 37,  211 => 34,  203 => 31,  197 => 28,  194 => 27,  191 => 26,  181 => 25,  172 => 45,  169 => 37,  166 => 35,  163 => 25,  160 => 23,  150 => 22,  141 => 115,  138 => 114,  135 => 100,  132 => 99,  129 => 94,  127 => 48,  124 => 47,  122 => 22,  118 => 20,  115 => 19,  112 => 18,  109 => 17,  106 => 16,  103 => 15,  101 => 14,  98 => 13,  95 => 12,  93 => 11,  90 => 10,  88 => 9,  85 => 8,  82 => 7,  79 => 6,  76 => 5,  74 => 4,  71 => 3,  68 => 2,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block component_product_box_price_info %}
    {% set cheapest = product.calculatedCheapestPrice %}

    {% set real = product.calculatedPrice %}
    {% if product.calculatedPrices.count > 0 %}
        {% set real = product.calculatedPrices.last %}
    {% endif %}

    {% set referencePrice = real.referencePrice %}

    {% set displayFrom = product.calculatedPrices.count > 1 %}
    {% set displayParent = product.variantListingConfig.displayParent and product.parentId === null %}

    {% if displayParent %}
        {% set displayFromVariants = displayParent and real.unitPrice !== cheapest.unitPrice %}
        {% set real = cheapest %}
        {% set totalVariants = product.cheapestPriceContainer.value %}
        {% set hasDifferentPrice = totalVariants|filter(variant => variant.default != null)|length > 0 %}
    {% endif %}

    <div class=\"product-price-info\">
        {% block component_product_box_price_unit %}
            <p class=\"product-price-unit\">
                {# Price is based on the purchase unit #}
                {% block component_product_box_price_purchase_unit %}
                    {% if referencePrice and referencePrice.unitName %}
                        <span class=\"product-unit-label\">
                            {{ 'listing.boxUnitLabel'|trans|sw_sanitize }}
                        </span>
                        <span class=\"price-unit-content\">
                            {{ referencePrice.purchaseUnit }} {{ referencePrice.unitName }}
                        </span>
                    {% endif %}
                {% endblock %}

                {# Item price is based on a reference unit #}
                {% block component_product_box_price_reference_unit %}
                    {% if referencePrice is not null %}
                        <span class=\"price-unit-reference\">
                            {# @deprecated tag:v6.7.0 - Showing asterisk next to every price is deprecated. Tax and shipping info is displayed as text instead if `allowBuyInListing` is true. #}
                            ({{ referencePrice.price|currency }}{% if not feature('ACCESSIBILITY_TWEAKS') %}{{ 'general.star'|trans|sw_sanitize }}{% endif %} / {{ referencePrice.referenceUnit }} {{ referencePrice.unitName }})
                        </span>
                    {% endif %}
                {% endblock %}
            </p>
        {% endblock %}

        {% block component_product_box_price %}
            <div class=\"product-price-wrapper\">
                {% set price = real %}
                {% set isListPrice = price.listPrice.percentage > 0 %}
                {% set isRegulationPrice = price.regulationPrice != null %}

                <div class=\"product-cheapest-price{% if isListPrice and isRegulationPrice and not displayFrom and not displayFromVariants %} with-list-price{% endif %}{% if isRegulationPrice and not displayFrom and displayFromVariants %} with-regulation-price{% endif %}{% if displayFrom and isRegulationPrice %} with-from-price{% endif %}\">
                    {% if cheapest.unitPrice != real.unitPrice and cheapest.variantId != product.id %}
                        {# @deprecated tag:v6.7.0 - Showing asterisk next to every price is deprecated. Tax and shipping info is displayed as text instead if `allowBuyInListing` is true. #}
                        <div>{{ 'listing.cheapestPriceLabel'|trans|sw_sanitize }}<span class=\"product-cheapest-price-price\"> {{ cheapest.unitPrice|currency }}{% if not feature('ACCESSIBILITY_TWEAKS') %}{{ 'general.star'|trans|sw_sanitize }}{% endif %}</span></div>
                    {% endif %}
                </div>

                {% if displayFrom or (displayParent and hasDifferentPrice and totalVariants|length > 1) %}
                    {{ 'listing.listingTextFrom'|trans|sw_sanitize }}
                {% endif %}

                <span class=\"product-price{% if isListPrice and not displayFrom and not displayFromVariants %} with-list-price{% endif %}\">
                    {# @deprecated tag:v6.7.0 - Showing asterisk next to every price is deprecated. Tax and shipping info is displayed as text instead if `allowBuyInListing` is true. #}
                    {{ price.unitPrice|currency }}{% if not feature('ACCESSIBILITY_TWEAKS') %}{{ 'general.star'|trans|sw_sanitize }}{% endif %}

                    {% if isListPrice and not displayFrom and not displayFromVariants %}
                        {% set afterListPriceSnippetExists = 'listing.afterListPrice'|trans|length > 0 %}
                        {% set beforeListPriceSnippetExists = 'listing.beforeListPrice'|trans|length > 0 %}
                        {% set hideStrikeTrough = beforeListPriceSnippetExists or afterListPriceSnippetExists %}

                        <span class=\"list-price{% if hideStrikeTrough %} list-price-no-line-through{% endif %}\">
                            {% if beforeListPriceSnippetExists %}{{ 'listing.beforeListPrice'|trans|trim|sw_sanitize }}{% endif %}

                            {# @deprecated tag:v6.7.0 - Showing asterisk next to every price is deprecated. Tax and shipping info is displayed as text instead if `allowBuyInListing` is true. #}
                            <span class=\"list-price-price\">{{ price.listPrice.price|currency }}{% if not feature('ACCESSIBILITY_TWEAKS') %}{{ 'general.star'|trans|sw_sanitize }}{% endif %}</span>

                            {% if afterListPriceSnippetExists %}{{ 'listing.afterListPrice'|trans|trim|sw_sanitize }}{% endif %}

                            <span class=\"list-price-percentage\">{{ 'detail.listPricePercentage'|trans({'%price%': price.listPrice.percentage })|sw_sanitize }}</span>
                        </span>
                    {% endif %}
                </span>
                {% if isRegulationPrice %}
                    <span class=\"product-price with-regulation-price\">
                        {# @deprecated tag:v6.7.0 - Showing asterisk next to every price is deprecated. Tax and shipping info is displayed as text instead if `allowBuyInListing` is true. #}
                        {% if isListPrice %}<br>{% endif %}<span class=\"regulation-price\">{{ 'general.listPricePreviously'|trans({'%price%': price.regulationPrice.price|currency }) }}{% if not feature('ACCESSIBILITY_TWEAKS') %}{{ 'general.star'|trans|sw_sanitize }}{% endif %}</span>
                    </span>
                {% endif %}
            </div>
        {% endblock %}

        {#
            If a product can be added to the shipping directly from the listing,
            we need to display information about taxes and shipping.
        #}
        {% if feature('ACCESSIBILITY_TWEAKS') and config('core.listing.allowBuyInListing') %}
            {% block component_product_box_price_tax_info %}
                {% set cmsPath = 'frontend.cms.page' %}

                <button class=\"product-price-tax-link btn btn-link-inline fs-6\"
                        type=\"button\"
                        data-ajax-modal=\"true\"
                        data-url=\"{{ path(cmsPath, { id: config('core.basicInformation.shippingPaymentInfoPage') }) }}\">
                    {% if context.taxState == 'gross' %}
                        {{ 'general.grossTaxInformation'|trans|sw_sanitize }}
                    {% else %}
                        {{ 'general.netTaxInformation'|trans|sw_sanitize }}
                    {% endif %}
                </button>
            {% endblock %}
        {% endif %}
    </div>
{% endblock %}
", "@Storefront/storefront/component/product/card/price-unit.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/component/product/card/price-unit.html.twig");
    }
}
