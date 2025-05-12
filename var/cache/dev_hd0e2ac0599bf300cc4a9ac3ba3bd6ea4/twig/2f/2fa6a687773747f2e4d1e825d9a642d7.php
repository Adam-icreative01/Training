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

/* @Storefront/storefront/component/product/listing.html.twig */
class __TwigTemplate_d4f230676a9948360601e79a048cbc33 extends Template
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
            'product_listing' => [$this, 'block_product_listing'],
            'element_product_listing_wrapper_content' => [$this, 'block_element_product_listing_wrapper_content'],
            'element_product_listing_pagination_nav_actions' => [$this, 'block_element_product_listing_pagination_nav_actions'],
            'element_product_listing_pagination_nav_top' => [$this, 'block_element_product_listing_pagination_nav_top'],
            'element_product_listing_sorting' => [$this, 'block_element_product_listing_sorting'],
            'element_product_listing_row' => [$this, 'block_element_product_listing_row'],
            'element_product_listing_col' => [$this, 'block_element_product_listing_col'],
            'element_product_listing_box' => [$this, 'block_element_product_listing_box'],
            'element_product_listing_col_empty' => [$this, 'block_element_product_listing_col_empty'],
            'element_product_listing_col_empty_alert' => [$this, 'block_element_product_listing_col_empty_alert'],
            'element_product_listing_pagination_nav_bottom' => [$this, 'block_element_product_listing_pagination_nav_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/listing.html.twig"));

        // line 2
        if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.7.0.0")) {
            // line 3
            yield "    ";
            $context["currentPage"] = SwTwigFunction::getAttribute($this->env, $this->source, ($context["searchResult"] ?? null), "page", [], "any", false, false, false, 3);
        }
        // line 5
        yield "
";
        // line 7
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.7.0.0")) {
            // line 8
            yield "    ";
            $context["paginationConfig"] = ["page" => SwTwigFunction::getAttribute($this->env, $this->source, ($context["searchResult"] ?? null), "page", [], "any", false, false, false, 8)];
        } else {
            // line 10
            yield "    ";
            $context["paginationConfig"] = $this->env->getFilter('json_encode')->getCallable()(["page" => SwTwigFunction::getAttribute($this->env, $this->source, ($context["searchResult"] ?? null), "page", [], "any", false, false, false, 10)]);
        }
        // line 12
        yield "

";
        // line 14
        if ( !array_key_exists("disableEmptyFilter", $context)) {
            // line 15
            yield "    ";
            $context["disableEmptyFilter"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.listing.disableEmptyFilterOptions");
        }
        // line 17
        yield "
";
        // line 18
        $context["listingPagination"] = ["sidebar" =>         // line 19
($context["sidebar"] ?? null), "params" =>         // line 20
($context["params"] ?? null), "dataUrl" =>         // line 21
($context["dataUrl"] ?? null), "filterUrl" =>         // line 22
($context["filterUrl"] ?? null), "disableEmptyFilter" =>         // line 23
($context["disableEmptyFilter"] ?? null), "ariaLiveUpdates" =>         // line 24
($context["ariaLiveUpdates"] ?? null), "snippets" => ["resetAllButtonText" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterPanelResetAll")), "resetAllFiltersAriaLabel" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterResetAllAriaLabel")), "removeFilterAriaLabel" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRemoveAriaLabel"))]];
        // line 31
        yield "
";
        // line 32
        yield from $this->unwrap()->yieldBlock('product_listing', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_product_listing(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_listing"));

        // line 33
        yield "    <div class=\"cms-element-product-listing-wrapper\"
         data-listing-pagination=\"true\"
        ";
        // line 35
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.7.0.0")) {
            // line 36
            yield "         data-listing-pagination-options=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('json_encode')->getCallable()(($context["paginationConfig"] ?? null)), "html", null, true);
            yield "\"
        ";
        } else {
            // line 38
            yield "         ";
            // line 39
            yield "         data-listing-pagination-options='";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["paginationConfig"] ?? null), "html", null, true);
            yield "'
        ";
        }
        // line 41
        yield "         data-listing=\"true\"
         data-listing-options=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('json_encode')->getCallable()(($context["listingPagination"] ?? null)), "html", null, true);
        yield "\">
        ";
        // line 43
        yield from $this->unwrap()->yieldBlock('element_product_listing_wrapper_content', $context, $blocks);
        // line 136
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_element_product_listing_wrapper_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_wrapper_content"));

        // line 44
        yield "            <div class=\"cms-element-product-listing\">
                ";
        // line 45
        if ((SwTwigFunction::getAttribute($this->env, $this->source, ($context["searchResult"] ?? null), "total", [], "any", false, false, false, 45) > 0)) {
            // line 46
            yield "                    ";
            yield from $this->unwrap()->yieldBlock('element_product_listing_pagination_nav_actions', $context, $blocks);
            // line 77
            yield "                ";
        }
        // line 78
        yield "
                ";
        // line 79
        yield from $this->unwrap()->yieldBlock('element_product_listing_row', $context, $blocks);
        // line 116
        yield "
                ";
        // line 117
        if ((SwTwigFunction::getAttribute($this->env, $this->source, ($context["searchResult"] ?? null), "total", [], "any", false, false, false, 117) > SwTwigFunction::getAttribute($this->env, $this->source, ($context["searchResult"] ?? null), "limit", [], "any", false, false, false, 117))) {
            // line 118
            yield "                    ";
            yield from $this->unwrap()->yieldBlock('element_product_listing_pagination_nav_bottom', $context, $blocks);
            // line 133
            yield "                ";
        }
        // line 134
        yield "            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_element_product_listing_pagination_nav_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_pagination_nav_actions"));

        // line 47
        yield "                        <div class=\"cms-element-product-listing-actions row justify-content-between\">
                            <div class=\"col-md-auto\">
                                ";
        // line 49
        yield from $this->unwrap()->yieldBlock('element_product_listing_pagination_nav_top', $context, $blocks);
        // line 65
        yield "                            </div>

                            <div class=\"col-md-auto\">
                                ";
        // line 68
        yield from $this->unwrap()->yieldBlock('element_product_listing_sorting', $context, $blocks);
        // line 74
        yield "                            </div>
                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_element_product_listing_pagination_nav_top(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_pagination_nav_top"));

        // line 50
        yield "                                    ";
        // line 51
        yield "                                    ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.7.0.0")) {
            // line 52
            yield "                                        ";
            yield from $this->loadTemplate("@Storefront/storefront/component/pagination.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 52)->unwrap()->yield(CoreExtension::merge($context, ["entities" =>             // line 53
($context["searchResult"] ?? null), "fallbackUrl" =>             // line 54
($context["paginationFallbackUrl"] ?? null), "paginationLocation" => "top"]));
            // line 57
            yield "                                    ";
        } else {
            // line 58
            yield "                                        ";
            yield from $this->loadTemplate("@Storefront/storefront/component/pagination.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 58)->unwrap()->yield(CoreExtension::merge($context, ["entities" =>             // line 59
($context["searchResult"] ?? null), "criteria" => SwTwigFunction::getAttribute($this->env, $this->source,             // line 60
($context["searchResult"] ?? null), "criteria", [], "any", false, false, false, 60), "paginationLocation" => (($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) ? ("top") : (null))]));
            // line 63
            yield "                                    ";
        }
        // line 64
        yield "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 68
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_element_product_listing_sorting(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_sorting"));

        // line 69
        yield "                                    ";
        yield from $this->loadTemplate("@Storefront/storefront/component/sorting.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 69)->unwrap()->yield(CoreExtension::merge($context, ["current" => SwTwigFunction::getAttribute($this->env, $this->source,         // line 70
($context["searchResult"] ?? null), "sorting", [], "any", false, false, false, 70), "sortings" => SwTwigFunction::getAttribute($this->env, $this->source,         // line 71
($context["searchResult"] ?? null), "availableSortings", [], "any", false, false, false, 71)]));
        // line 73
        yield "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 79
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_element_product_listing_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_row"));

        // line 80
        yield "                    ";
        $context["ariaLiveText"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            $_v0 = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
                // line 81
                yield "                        ";
                if ((SwTwigFunction::getAttribute($this->env, $this->source, ($context["searchResult"] ?? null), "total", [], "any", false, false, false, 81) > SwTwigFunction::getAttribute($this->env, $this->source, ($context["searchResult"] ?? null), "limit", [], "any", false, false, false, 81))) {
                    // line 82
                    yield "                            ";
                    yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterPanelAriaLivePaginated", ["%count%" => Twig\Extension\CoreExtension::length($this->env->getCharset(), SwTwigFunction::getAttribute($this->env, $this->source, ($context["searchResult"] ?? null), "elements", [], "any", false, false, false, 82)), "%total%" => SwTwigFunction::getAttribute($this->env, $this->source, ($context["searchResult"] ?? null), "total", [], "any", false, false, false, 82)]));
                    yield "
                        ";
                } else {
                    // line 84
                    yield "                            ";
                    yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterPanelAriaLive", ["%count%" => SwTwigFunction::getAttribute($this->env, $this->source, ($context["searchResult"] ?? null), "total", [], "any", false, false, false, 84)]));
                    yield "
                        ";
                }
                // line 86
                yield "                    ";
                yield from [];
            })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 80
            yield Twig\Extension\CoreExtension::spaceless($_v0);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 87
        yield "
                    <div class=\"row cms-listing-row js-listing-wrapper\" data-aria-live-text=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ariaLiveText"] ?? null), "html", null, true);
        yield "\"";
        if ((SwTwigFunction::getAttribute($this->env, $this->source, ($context["searchResult"] ?? null), "total", [], "any", false, false, false, 88) > 0)) {
            yield " role=\"list\"";
        }
        yield ">
                        ";
        // line 89
        if ((SwTwigFunction::getAttribute($this->env, $this->source, ($context["searchResult"] ?? null), "total", [], "any", false, false, false, 89) > 0)) {
            // line 90
            yield "                            ";
            yield from $this->unwrap()->yieldBlock('element_product_listing_col', $context, $blocks);
            // line 102
            yield "                        ";
        } else {
            // line 103
            yield "                            ";
            yield from $this->unwrap()->yieldBlock('element_product_listing_col_empty', $context, $blocks);
            // line 113
            yield "                        ";
        }
        // line 114
        yield "                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_element_product_listing_col(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_col"));

        // line 91
        yield "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["searchResult"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 92
            yield "                                    <div class=\"cms-listing-col ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["listingColumns"] ?? null), "html", null, true);
            yield "\" role=\"listitem\">
                                        ";
            // line 93
            yield from $this->unwrap()->yieldBlock('element_product_listing_box', $context, $blocks);
            // line 99
            yield "                                    </div>
                                ";
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
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 93
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_element_product_listing_box(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_box"));

        // line 94
        yield "                                            ";
        yield from $this->loadTemplate("@Storefront/storefront/component/product/card/box.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 94)->unwrap()->yield(CoreExtension::merge($context, ["layout" =>         // line 95
($context["boxLayout"] ?? null), "displayMode" =>         // line 96
($context["displayMode"] ?? null)]));
        // line 98
        yield "                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 103
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_element_product_listing_col_empty(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_col_empty"));

        // line 104
        yield "                                <div class=\"cms-listing-col col-12\">
                                    ";
        // line 105
        yield from $this->unwrap()->yieldBlock('element_product_listing_col_empty_alert', $context, $blocks);
        // line 111
        yield "                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 105
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_element_product_listing_col_empty_alert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_col_empty_alert"));

        // line 106
        yield "                                        ";
        yield from $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 106)->unwrap()->yield(CoreExtension::merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.emptyResultMessage"))]));
        // line 110
        yield "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 118
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_element_product_listing_pagination_nav_bottom(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_pagination_nav_bottom"));

        // line 119
        yield "                        ";
        // line 120
        yield "                        ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.7.0.0")) {
            // line 121
            yield "                            ";
            yield from $this->loadTemplate("@Storefront/storefront/component/pagination.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 121)->unwrap()->yield(CoreExtension::merge($context, ["entities" =>             // line 122
($context["searchResult"] ?? null), "paginationLocation" => "bottom"]));
            // line 125
            yield "                        ";
        } else {
            // line 126
            yield "                            ";
            yield from $this->loadTemplate("@Storefront/storefront/component/pagination.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 126)->unwrap()->yield(CoreExtension::merge($context, ["entities" =>             // line 127
($context["searchResult"] ?? null), "criteria" => SwTwigFunction::getAttribute($this->env, $this->source,             // line 128
($context["searchResult"] ?? null), "criteria", [], "any", false, false, false, 128), "paginationLocation" => "bottom"]));
            // line 131
            yield "                        ";
        }
        // line 132
        yield "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/component/product/listing.html.twig";
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
        return array (  522 => 132,  519 => 131,  517 => 128,  516 => 127,  514 => 126,  511 => 125,  509 => 122,  507 => 121,  504 => 120,  502 => 119,  492 => 118,  484 => 110,  481 => 106,  471 => 105,  462 => 111,  460 => 105,  457 => 104,  447 => 103,  439 => 98,  437 => 96,  436 => 95,  434 => 94,  424 => 93,  416 => 101,  401 => 99,  399 => 93,  394 => 92,  376 => 91,  366 => 90,  357 => 114,  354 => 113,  351 => 103,  348 => 102,  345 => 90,  343 => 89,  335 => 88,  332 => 87,  328 => 80,  324 => 86,  318 => 84,  312 => 82,  309 => 81,  305 => 80,  295 => 79,  287 => 73,  285 => 71,  284 => 70,  282 => 69,  272 => 68,  264 => 64,  261 => 63,  259 => 60,  258 => 59,  256 => 58,  253 => 57,  251 => 54,  250 => 53,  248 => 52,  245 => 51,  243 => 50,  233 => 49,  223 => 74,  221 => 68,  216 => 65,  214 => 49,  210 => 47,  200 => 46,  191 => 134,  188 => 133,  185 => 118,  183 => 117,  180 => 116,  178 => 79,  175 => 78,  172 => 77,  169 => 46,  167 => 45,  164 => 44,  154 => 43,  145 => 136,  143 => 43,  139 => 42,  136 => 41,  130 => 39,  128 => 38,  122 => 36,  120 => 35,  116 => 33,  99 => 32,  96 => 31,  94 => 24,  93 => 23,  92 => 22,  91 => 21,  90 => 20,  89 => 19,  88 => 18,  85 => 17,  81 => 15,  79 => 14,  75 => 12,  71 => 10,  67 => 8,  65 => 7,  62 => 5,  58 => 3,  56 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @deprecated tag:v6.7.0 - variable `currentPage` will be removed #}
{% if not feature('v6.7.0.0') %}
    {% set currentPage = searchResult.page %}
{% endif %}

{# @deprecated tag:v6.7.0 - variable `paginationConfig` will not be json encoded #}
{% if feature('v6.7.0.0') %}
    {% set paginationConfig = { page: searchResult.page } %}
{% else %}
    {% set paginationConfig = { page: searchResult.page }|json_encode %}
{% endif %}


{% if disableEmptyFilter is not defined %}
    {% set disableEmptyFilter = config('core.listing.disableEmptyFilterOptions') %}
{% endif %}

{% set listingPagination = {
    sidebar: sidebar,
    params: params,
    dataUrl: dataUrl,
    filterUrl: filterUrl,
    disableEmptyFilter: disableEmptyFilter,
    ariaLiveUpdates: ariaLiveUpdates,
    snippets: {
        resetAllButtonText: 'listing.filterPanelResetAll'|trans|sw_sanitize,
        resetAllFiltersAriaLabel: 'listing.filterResetAllAriaLabel'|trans|sw_sanitize,
        removeFilterAriaLabel: 'listing.filterRemoveAriaLabel'|trans|sw_sanitize
    }
} %}

{% block product_listing %}
    <div class=\"cms-element-product-listing-wrapper\"
         data-listing-pagination=\"true\"
        {% if feature('v6.7.0.0') %}
         data-listing-pagination-options=\"{{ paginationConfig|json_encode }}\"
        {% else %}
         {# ludtwig-ignore html-string-quotation #}
         data-listing-pagination-options='{{ paginationConfig }}'
        {% endif %}
         data-listing=\"true\"
         data-listing-options=\"{{ listingPagination|json_encode }}\">
        {% block element_product_listing_wrapper_content %}
            <div class=\"cms-element-product-listing\">
                {% if searchResult.total > 0 %}
                    {% block element_product_listing_pagination_nav_actions %}
                        <div class=\"cms-element-product-listing-actions row justify-content-between\">
                            <div class=\"col-md-auto\">
                                {% block element_product_listing_pagination_nav_top %}
                                    {# @deprecated tag:v6.7.0 - variable `criteria` will be removed #}
                                    {% if feature('v6.7.0.0') %}
                                        {% sw_include '@Storefront/storefront/component/pagination.html.twig' with {
                                            entities: searchResult,
                                            fallbackUrl: paginationFallbackUrl,
                                            paginationLocation: 'top',
                                        } %}
                                    {% else %}
                                        {% sw_include '@Storefront/storefront/component/pagination.html.twig' with {
                                            entities: searchResult,
                                            criteria: searchResult.criteria,
                                            paginationLocation: feature('ACCESSIBILITY_TWEAKS') ? 'top' : null,
                                        } %}
                                    {% endif %}
                                {% endblock %}
                            </div>

                            <div class=\"col-md-auto\">
                                {% block element_product_listing_sorting %}
                                    {% sw_include '@Storefront/storefront/component/sorting.html.twig' with {
                                        current: searchResult.sorting,
                                        sortings: searchResult.availableSortings
                                    } %}
                                {% endblock %}
                            </div>
                        </div>
                    {% endblock %}
                {% endif %}

                {% block element_product_listing_row %}
                    {% set ariaLiveText %}{% apply spaceless %}
                        {% if searchResult.total > searchResult.limit %}
                            {{ 'listing.filterPanelAriaLivePaginated'|trans({'%count%': searchResult.elements|length, '%total%': searchResult.total})|sw_sanitize }}
                        {% else %}
                            {{ 'listing.filterPanelAriaLive'|trans({'%count%': searchResult.total})|sw_sanitize }}
                        {% endif %}
                    {% endapply %}{% endset %}

                    <div class=\"row cms-listing-row js-listing-wrapper\" data-aria-live-text=\"{{ ariaLiveText }}\"{% if searchResult.total > 0 %} role=\"list\"{% endif %}>
                        {% if searchResult.total > 0 %}
                            {% block element_product_listing_col %}
                                {% for product in searchResult %}
                                    <div class=\"cms-listing-col {{ listingColumns }}\" role=\"listitem\">
                                        {% block element_product_listing_box %}
                                            {% sw_include '@Storefront/storefront/component/product/card/box.html.twig' with {
                                                layout: boxLayout,
                                                displayMode: displayMode
                                            } %}
                                        {% endblock %}
                                    </div>
                                {% endfor %}
                            {% endblock %}
                        {% else %}
                            {% block element_product_listing_col_empty %}
                                <div class=\"cms-listing-col col-12\">
                                    {% block element_product_listing_col_empty_alert %}
                                        {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                                            type: 'info',
                                            content: 'listing.emptyResultMessage'|trans|sw_sanitize
                                        } %}
                                    {% endblock %}
                                </div>
                            {% endblock %}
                        {% endif %}
                    </div>
                {% endblock %}

                {% if searchResult.total > searchResult.limit %}
                    {% block element_product_listing_pagination_nav_bottom %}
                        {# @deprecated tag:v6.7.0 - variable `criteria` will be removed #}
                        {% if feature('v6.7.0.0') %}
                            {% sw_include '@Storefront/storefront/component/pagination.html.twig' with {
                                entities: searchResult,
                                paginationLocation: 'bottom',
                            } %}
                        {% else %}
                            {% sw_include '@Storefront/storefront/component/pagination.html.twig' with {
                                entities: searchResult,
                                criteria: searchResult.criteria,
                                paginationLocation: 'bottom',
                            } %}
                        {% endif %}
                    {% endblock %}
                {% endif %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/component/product/listing.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/component/product/listing.html.twig");
    }
}
