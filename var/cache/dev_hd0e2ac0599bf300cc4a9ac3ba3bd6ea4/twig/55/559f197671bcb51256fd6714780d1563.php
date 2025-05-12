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

/* @Storefront/storefront/component/product/card/action.html.twig */
class __TwigTemplate_e1b306ef089a091c903cf1bb5b7d9a1e extends Template
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
            'component_product_box_action_inner' => [$this, 'block_component_product_box_action_inner'],
            'component_product_box_action_buy' => [$this, 'block_component_product_box_action_buy'],
            'component_product_box_action_form' => [$this, 'block_component_product_box_action_form'],
            'component_product_box_action_buy_redirect_input' => [$this, 'block_component_product_box_action_buy_redirect_input'],
            'component_product_box_action_buy_info' => [$this, 'block_component_product_box_action_buy_info'],
            'page_product_detail_buy_product_buy_info' => [$this, 'block_page_product_detail_buy_product_buy_info'],
            'component_product_box_action_buy_meta' => [$this, 'block_component_product_box_action_buy_meta'],
            'page_product_detail_product_buy_meta' => [$this, 'block_page_product_detail_product_buy_meta'],
            'component_product_box_action_buy_button' => [$this, 'block_component_product_box_action_buy_button'],
            'page_product_detail_product_buy_button' => [$this, 'block_page_product_detail_product_buy_button'],
            'page_product_detail_product_buy_button_label' => [$this, 'block_page_product_detail_product_buy_button_label'],
            'component_product_box_action_detail' => [$this, 'block_component_product_box_action_detail'],
            'component_product_box_action_detail_label' => [$this, 'block_component_product_box_action_detail_label'],
            'component_product_box_action_meta' => [$this, 'block_component_product_box_action_meta'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/card/action.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('component_product_box_action_inner', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_action_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_inner"));

        // line 2
        yield "    ";
        $context["id"] = SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 2);
        // line 3
        yield "    <div class=\"product-action\">
        ";
        // line 4
        $context["isAvailable"] = ( !SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "isCloseout", [], "any", false, false, false, 4) || (SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stock", [], "any", false, false, false, 4) >= SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "minPurchase", [], "any", false, false, false, 4)));
        // line 5
        yield "        ";
        $context["displayFrom"] = (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 5), "count", [], "any", false, false, false, 5) > 1);
        // line 6
        yield "        ";
        $context["displayBuyButton"] = ((($context["isAvailable"] ?? null) &&  !($context["displayFrom"] ?? null)) && (SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "childCount", [], "any", false, false, false, 6) <= 0));
        // line 7
        yield "
        ";
        // line 8
        if ((($context["displayBuyButton"] ?? null) && $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.listing.allowBuyInListing"))) {
            // line 9
            yield "            ";
            yield from $this->unwrap()->yieldBlock('component_product_box_action_buy', $context, $blocks);
            // line 77
            yield "        ";
        } else {
            // line 78
            yield "            ";
            yield from $this->unwrap()->yieldBlock('component_product_box_action_detail', $context, $blocks);
            // line 89
            yield "        ";
        }
        // line 90
        yield "    </div>

    ";
        // line 93
        yield "    ";
        if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.7.0.0")) {
            // line 94
            yield "        ";
            yield from $this->unwrap()->yieldBlock('component_product_box_action_meta', $context, $blocks);
            // line 103
            yield "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_action_buy(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_buy"));

        // line 10
        yield "                ";
        // line 11
        yield "                <form action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.line-item.add");
        yield "\"
                      method=\"post\"
                      class=\"buy-widget\"
                      data-add-to-cart=\"true\">
                    ";
        // line 15
        yield from $this->unwrap()->yieldBlock('component_product_box_action_form', $context, $blocks);
        // line 75
        yield "                </form>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_action_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_form"));

        // line 16
        yield "                        ";
        yield from $this->unwrap()->yieldBlock('component_product_box_action_buy_redirect_input', $context, $blocks);
        // line 27
        yield "
                        ";
        // line 28
        yield from $this->unwrap()->yieldBlock('component_product_box_action_buy_info', $context, $blocks);
        // line 51
        yield "
                        ";
        // line 52
        yield from $this->unwrap()->yieldBlock('component_product_box_action_buy_meta', $context, $blocks);
        // line 60
        yield "
                        ";
        // line 61
        yield from $this->unwrap()->yieldBlock('component_product_box_action_buy_button', $context, $blocks);
        // line 74
        yield "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_action_buy_redirect_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_buy_redirect_input"));

        // line 17
        yield "                            ";
        // line 18
        yield "                            <input type=\"hidden\"
                                   name=\"redirectTo\"
                                   value=\"frontend.detail.page\">

                            <input type=\"hidden\"
                                   name=\"redirectParameters\"
                                   data-redirect-parameters=\"true\"
                                   value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('json_encode')->getCallable()(["productId" => ($context["id"] ?? null)]), "html", null, true);
        yield "\">
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_action_buy_info(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_buy_info"));

        // line 29
        yield "                            ";
        // line 30
        yield "                            ";
        yield from $this->unwrap()->yieldBlock('page_product_detail_buy_product_buy_info', $context, $blocks);
        // line 50
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_product_detail_buy_product_buy_info(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_product_buy_info"));

        // line 31
        yield "                                <input type=\"hidden\"
                                       name=\"lineItems[";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "][id]\"
                                       value=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\">
                                <input type=\"hidden\"
                                       name=\"lineItems[";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "][referencedId]\"
                                       value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\">
                                <input type=\"hidden\"
                                       name=\"lineItems[";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "][type]\"
                                       value=\"product\">
                                <input type=\"hidden\"
                                       name=\"lineItems[";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "][stackable]\"
                                       value=\"1\">
                                <input type=\"hidden\"
                                       name=\"lineItems[";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "][removable]\"
                                       value=\"1\">
                                <input type=\"hidden\"
                                       name=\"lineItems[";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "][quantity]\"
                                       value=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "minPurchase", [], "any", false, false, false, 48), "html", null, true);
        yield "\">
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_action_buy_meta(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_buy_meta"));

        // line 53
        yield "                            ";
        // line 54
        yield "                            ";
        yield from $this->unwrap()->yieldBlock('page_product_detail_product_buy_meta', $context, $blocks);
        // line 59
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_product_detail_product_buy_meta(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_product_buy_meta"));

        // line 55
        yield "                                <input type=\"hidden\"
                                       name=\"product-name\"
                                       value=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 57), "name", [], "any", false, false, false, 57), "html", null, true);
        yield "\">
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_action_buy_button(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_buy_button"));

        // line 62
        yield "                            ";
        // line 63
        yield "                            ";
        yield from $this->unwrap()->yieldBlock('page_product_detail_product_buy_button', $context, $blocks);
        // line 73
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_product_detail_product_buy_button(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_product_buy_button"));

        // line 64
        yield "                                <div class=\"d-grid\">
                                    <button class=\"btn btn-buy\"
                                            title=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxAddProduct")), "html", null, true);
        yield "\">
                                        ";
        // line 67
        yield from $this->unwrap()->yieldBlock('page_product_detail_product_buy_button_label', $context, $blocks);
        // line 70
        yield "                                    </button>
                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_product_detail_product_buy_button_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_product_buy_button_label"));

        // line 68
        yield "                                            ";
        yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxAddProduct"));
        yield "
                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 78
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_action_detail(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_detail"));

        // line 79
        yield "                <div class=\"d-grid\">
                    <a href=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["id"] ?? null)]), "html", null, true);
        yield "\"
                       class=\"btn btn-light btn-detail\"
                       title=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxProductDetails")), "html", null, true);
        yield "\">
                        ";
        // line 83
        yield from $this->unwrap()->yieldBlock('component_product_box_action_detail_label', $context, $blocks);
        // line 86
        yield "                    </a>
                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 83
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_action_detail_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_detail_label"));

        // line 84
        yield "                            ";
        yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxProductDetails"));
        yield "
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 94
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_action_meta(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_meta"));

        // line 95
        yield "            <input type=\"hidden\"
                   name=\"product-name\"
                   value=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 97), "name", [], "any", false, false, false, 97), "html", null, true);
        yield "\">

            <input type=\"hidden\"
                   name=\"product-id\"
                   value=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/component/product/card/action.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  507 => 101,  500 => 97,  496 => 95,  486 => 94,  475 => 84,  465 => 83,  455 => 86,  453 => 83,  449 => 82,  444 => 80,  441 => 79,  431 => 78,  420 => 68,  410 => 67,  400 => 70,  398 => 67,  394 => 66,  390 => 64,  380 => 63,  372 => 73,  369 => 63,  367 => 62,  357 => 61,  347 => 57,  343 => 55,  333 => 54,  325 => 59,  322 => 54,  320 => 53,  310 => 52,  300 => 48,  296 => 47,  290 => 44,  284 => 41,  278 => 38,  273 => 36,  269 => 35,  264 => 33,  260 => 32,  257 => 31,  247 => 30,  239 => 50,  236 => 30,  234 => 29,  224 => 28,  214 => 25,  205 => 18,  203 => 17,  193 => 16,  185 => 74,  183 => 61,  180 => 60,  178 => 52,  175 => 51,  173 => 28,  170 => 27,  167 => 16,  157 => 15,  148 => 75,  146 => 15,  138 => 11,  136 => 10,  126 => 9,  117 => 103,  114 => 94,  111 => 93,  107 => 90,  104 => 89,  101 => 78,  98 => 77,  95 => 9,  93 => 8,  90 => 7,  87 => 6,  84 => 5,  82 => 4,  79 => 3,  76 => 2,  59 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block component_product_box_action_inner %}
    {% set id = product.id %}
    <div class=\"product-action\">
        {% set isAvailable = not product.isCloseout or (product.stock >= product.minPurchase) %}
        {% set displayFrom = product.calculatedPrices.count > 1 %}
        {% set displayBuyButton = isAvailable and not displayFrom and product.childCount <= 0 %}

        {% if displayBuyButton and config('core.listing.allowBuyInListing') %}
            {% block component_product_box_action_buy %}
                {# @var product \\Shopware\\Core\\Content\\Product\\SalesChannel\\SalesChannelProductEntity #}
                <form action=\"{{ path('frontend.checkout.line-item.add') }}\"
                      method=\"post\"
                      class=\"buy-widget\"
                      data-add-to-cart=\"true\">
                    {% block component_product_box_action_form %}
                        {% block component_product_box_action_buy_redirect_input %}
                            {# fallback redirect back to detail page is deactivated via js #}
                            <input type=\"hidden\"
                                   name=\"redirectTo\"
                                   value=\"frontend.detail.page\">

                            <input type=\"hidden\"
                                   name=\"redirectParameters\"
                                   data-redirect-parameters=\"true\"
                                   value=\"{{ {productId: id}|json_encode }}\">
                        {% endblock %}

                        {% block component_product_box_action_buy_info %}
                            {# @deprecated tag:v6.7.0 - Block will be removed, use component_product_box_action_buy_info instead #}
                            {% block page_product_detail_buy_product_buy_info %}
                                <input type=\"hidden\"
                                       name=\"lineItems[{{ id }}][id]\"
                                       value=\"{{ id }}\">
                                <input type=\"hidden\"
                                       name=\"lineItems[{{ id }}][referencedId]\"
                                       value=\"{{ id }}\">
                                <input type=\"hidden\"
                                       name=\"lineItems[{{ id }}][type]\"
                                       value=\"product\">
                                <input type=\"hidden\"
                                       name=\"lineItems[{{ id }}][stackable]\"
                                       value=\"1\">
                                <input type=\"hidden\"
                                       name=\"lineItems[{{ id }}][removable]\"
                                       value=\"1\">
                                <input type=\"hidden\"
                                       name=\"lineItems[{{ id }}][quantity]\"
                                       value=\"{{ product.minPurchase }}\">
                            {% endblock %}
                        {% endblock %}

                        {% block component_product_box_action_buy_meta %}
                            {# @deprecated tag:v6.7.0 - Block will be removed, use component_product_box_action_buy_meta instead #}
                            {% block page_product_detail_product_buy_meta %}
                                <input type=\"hidden\"
                                       name=\"product-name\"
                                       value=\"{{ product.translated.name }}\">
                            {% endblock %}
                        {% endblock %}

                        {% block component_product_box_action_buy_button %}
                            {# @deprecated tag:v6.7.0 - Block will be removed, use component_product_box_action_buy_button instead #}
                            {% block page_product_detail_product_buy_button %}
                                <div class=\"d-grid\">
                                    <button class=\"btn btn-buy\"
                                            title=\"{{ 'listing.boxAddProduct'|trans|striptags }}\">
                                        {% block page_product_detail_product_buy_button_label %}
                                            {{ 'listing.boxAddProduct'|trans|sw_sanitize }}
                                        {% endblock %}
                                    </button>
                                </div>
                            {% endblock %}
                        {% endblock %}
                    {% endblock %}
                </form>
            {% endblock %}
        {% else %}
            {% block component_product_box_action_detail %}
                <div class=\"d-grid\">
                    <a href=\"{{ seoUrl('frontend.detail.page', {productId: id}) }}\"
                       class=\"btn btn-light btn-detail\"
                       title=\"{{ 'listing.boxProductDetails'|trans|striptags }}\">
                        {% block component_product_box_action_detail_label %}
                            {{ 'listing.boxProductDetails'|trans|sw_sanitize }}
                        {% endblock %}
                    </a>
                </div>
            {% endblock %}
        {% endif %}
    </div>

    {# @deprecated tag:v6.7.0 - Block, including the content will be removed. \"product-name\" and \"product-id\" will be hold inside \"data-product-information\" in box-standard.html.twig instead. #}
    {% if not feature('v6.7.0.0') %}
        {% block component_product_box_action_meta %}
            <input type=\"hidden\"
                   name=\"product-name\"
                   value=\"{{ product.translated.name }}\">

            <input type=\"hidden\"
                   name=\"product-id\"
                   value=\"{{ id }}\">
        {% endblock %}
    {% endif %}
{% endblock %}
", "@Storefront/storefront/component/product/card/action.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/component/product/card/action.html.twig");
    }
}
