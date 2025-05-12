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

/* @Storefront/storefront/layout/header/actions/currency-widget.html.twig */
class __TwigTemplate_5f69508fa0b6a52fd596bbe0be2831a8 extends Template
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
            'layout_header_actions_currency_widget' => [$this, 'block_layout_header_actions_currency_widget'],
            'layout_header_actions_currency_widget_form' => [$this, 'block_layout_header_actions_currency_widget_form'],
            'layout_header_actions_currency_widget_content' => [$this, 'block_layout_header_actions_currency_widget_content'],
            'layout_header_actions_currency_widget_dropdown_toggle' => [$this, 'block_layout_header_actions_currency_widget_dropdown_toggle'],
            'layout_header_actions_currency_widget_dropdown_toggle_name' => [$this, 'block_layout_header_actions_currency_widget_dropdown_toggle_name'],
            'layout_header_actions_currency_widget_form_items' => [$this, 'block_layout_header_actions_currency_widget_form_items'],
            'layout_header_actions_currency_widget_form_items_element' => [$this, 'block_layout_header_actions_currency_widget_form_items_element'],
            'layout_header_actions_currency_widget_form_items_element_label' => [$this, 'block_layout_header_actions_currency_widget_form_items_element_label'],
            'layout_header_actions_currency_widget_form_items_element_input' => [$this, 'block_layout_header_actions_currency_widget_form_items_element_input'],
            'layout_header_actions_currency_widget_form_redirect' => [$this, 'block_layout_header_actions_currency_widget_form_redirect'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/actions/currency-widget.html.twig"));

        // line 2
        if ((( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("cache_rework") &&  !array_key_exists("header", $context)) && array_key_exists("page", $context))) {
            // line 3
            yield "    ";
            $context["header"] = SwTwigFunction::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 3);
        }
        // line 5
        yield "
";
        // line 6
        yield from $this->unwrap()->yieldBlock('layout_header_actions_currency_widget', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_actions_currency_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget"));

        // line 7
        yield "    ";
        if (Twig\Extension\CoreExtension::testEmpty(($context["position"] ?? null))) {
            // line 8
            yield "        ";
            $context["position"] = "top-bar";
            // line 9
            yield "    ";
        }
        // line 10
        yield "
    ";
        // line 11
        if ((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["header"] ?? null), "currencies", [], "any", false, false, false, 11), "count", [], "any", false, false, false, 11) > 1)) {
            // line 12
            yield "        <div class=\"top-bar-nav-item top-bar-currency\">
            ";
            // line 13
            yield from $this->unwrap()->yieldBlock('layout_header_actions_currency_widget_form', $context, $blocks);
            // line 91
            yield "        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_actions_currency_widget_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form"));

        // line 14
        yield "                <form method=\"post\"
                      action=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.configure");
        yield "\"
                      class=\"currency-form\"
                      data-form-auto-submit=\"true\">
                    ";
        // line 18
        yield from $this->unwrap()->yieldBlock('layout_header_actions_currency_widget_content', $context, $blocks);
        // line 89
        yield "                </form>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_actions_currency_widget_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_content"));

        // line 19
        yield "                        <div class=\"currencies-menu dropdown\">
                            ";
        // line 20
        yield from $this->unwrap()->yieldBlock('layout_header_actions_currency_widget_dropdown_toggle', $context, $blocks);
        // line 35
        yield "
                            ";
        // line 36
        yield from $this->unwrap()->yieldBlock('layout_header_actions_currency_widget_form_items', $context, $blocks);
        // line 74
        yield "
                            ";
        // line 76
        yield "                            ";
        yield from $this->unwrap()->yieldBlock('layout_header_actions_currency_widget_form_redirect', $context, $blocks);
        // line 87
        yield "                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_actions_currency_widget_dropdown_toggle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_dropdown_toggle"));

        // line 21
        yield "                                <button class=\"btn dropdown-toggle top-bar-nav-btn\"
                                        type=\"button\"
                                        id=\"currenciesDropdown-";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["position"] ?? null), "html", null, true);
        yield "\"
                                        data-bs-toggle=\"dropdown\"
                                        aria-haspopup=\"true\"
                                        aria-expanded=\"false\"
                                        aria-label=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.currencyTrigger", ["%currency%" => SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "currency", [], "any", false, false, false, 27), "translated", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27)])), "html", null, true);
        yield "\">
                                    ";
        // line 28
        yield from $this->unwrap()->yieldBlock('layout_header_actions_currency_widget_dropdown_toggle_name', $context, $blocks);
        // line 33
        yield "                                </button>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_actions_currency_widget_dropdown_toggle_name(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_dropdown_toggle_name"));

        // line 29
        yield "                                        <span aria-hidden=\"true\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "currency", [], "any", false, false, false, 29), "translated", [], "any", false, false, false, 29), "symbol", [], "any", false, false, false, 29), "html", null, true);
        yield "</span>
                                        ";
        // line 31
        yield "                                        <span class=\"top-bar-nav-text";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) {
            yield " d-none d-md-inline";
        }
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "currency", [], "any", false, false, false, 31), "translated", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
        yield "</span>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_actions_currency_widget_form_items(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form_items"));

        // line 37
        yield "                                <ul class=\"top-bar-list dropdown-menu dropdown-menu-end\"
                                    aria-label=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.currencyList")), "html", null, true);
        yield "\">
                                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(SwTwigFunction::getAttribute($this->env, $this->source, ($context["header"] ?? null), "currencies", [], "any", false, false, false, 39));
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
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 40
            yield "                                        ";
            $context["isActiveCurrency"] = (SwTwigFunction::getAttribute($this->env, $this->source, $context["currency"], "id", [], "any", false, false, false, 40) === SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "currency", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40));
            // line 41
            yield "
                                        ";
            // line 42
            yield from $this->unwrap()->yieldBlock('layout_header_actions_currency_widget_form_items_element', $context, $blocks);
            // line 71
            yield "                                    ";
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
        unset($context['_seq'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "                                </ul>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_actions_currency_widget_form_items_element(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form_items_element"));

        // line 43
        yield "                                            ";
        // line 44
        yield "                                            ";
        // line 45
        yield "                                            <li class=\"top-bar-list-item";
        if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) {
            yield " dropdown-item";
        }
        if (($context["isActiveCurrency"] ?? null)) {
            yield " item-checked";
        }
        yield "\">
                                                ";
        // line 46
        yield from $this->unwrap()->yieldBlock('layout_header_actions_currency_widget_form_items_element_label', $context, $blocks);
        // line 69
        yield "                                            </li>
                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_actions_currency_widget_form_items_element_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form_items_element_label"));

        // line 47
        yield "                                                    ";
        // line 48
        yield "                                                    ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) {
            // line 49
            yield "                                                        <button class=\"dropdown-item d-flex gap-1";
            if (($context["isActiveCurrency"] ?? null)) {
                yield " active";
            }
            yield "\" type=\"submit\" name=\"currencyId\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["position"] ?? null), "html", null, true);
            yield "-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["currency"] ?? null), "id", [], "any", false, false, false, 49), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["currency"] ?? null), "id", [], "any", false, false, false, 49), "html", null, true);
            yield "\">
                                                            <span aria-hidden=\"true\" class=\"top-bar-list-item-currency-symbol\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["currency"] ?? null), "symbol", [], "any", false, false, false, 50), "html", null, true);
            yield "</span>
                                                            ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["currency"] ?? null), "translated", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51), "html", null, true);
            yield "
                                                        </button>
                                                    ";
        } else {
            // line 54
            yield "                                                        <label class=\"top-bar-list-label\"
                                                               for=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["position"] ?? null), "html", null, true);
            yield "-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["currency"] ?? null), "id", [], "any", false, false, false, 55), "html", null, true);
            yield "\">
                                                            ";
            // line 57
            yield "                                                            ";
            yield from $this->unwrap()->yieldBlock('layout_header_actions_currency_widget_form_items_element_input', $context, $blocks);
            // line 66
            yield "                                                        </label>
                                                    ";
        }
        // line 68
        yield "                                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_actions_currency_widget_form_items_element_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form_items_element_input"));

        // line 58
        yield "                                                                <input class=\"top-bar-list-radio\"
                                                                       id=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["position"] ?? null), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["currency"] ?? null), "id", [], "any", false, false, false, 59), "html", null, true);
        yield "\"
                                                                       value=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["currency"] ?? null), "id", [], "any", false, false, false, 60), "html", null, true);
        yield "\"
                                                                       name=\"currencyId\"
                                                                       type=\"radio\"
                                                                        ";
        // line 63
        if (($context["isActiveCurrency"] ?? null)) {
            yield " checked";
        }
        yield ">
                                                                <span class=\"aria-hidden\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["currency"] ?? null), "symbol", [], "any", false, false, false, 64), "html", null, true);
        yield "</span> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["currency"] ?? null), "translated", [], "any", false, false, false, 64), "shortName", [], "any", false, false, false, 64), "html", null, true);
        yield "
                                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_actions_currency_widget_form_redirect(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form_redirect"));

        // line 77
        yield "                                <input name=\"redirectTo\"
                                       type=\"hidden\"
                                       value=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["activeRoute"] ?? null), "html", null, true);
        yield "\">

                                ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 81), "attributes", [], "any", false, false, false, 81), "get", ["_route_params"], "method", false, false, false, 81));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 82
            yield "                                    <input name=\"redirectParameters[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "]\"
                                           type=\"hidden\"
                                           value=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\">
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/layout/header/actions/currency-widget.html.twig";
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
        return array (  483 => 86,  475 => 84,  469 => 82,  465 => 81,  460 => 79,  456 => 77,  446 => 76,  434 => 64,  428 => 63,  422 => 60,  416 => 59,  413 => 58,  403 => 57,  395 => 68,  391 => 66,  388 => 57,  382 => 55,  379 => 54,  373 => 51,  369 => 50,  356 => 49,  353 => 48,  351 => 47,  341 => 46,  332 => 69,  330 => 46,  320 => 45,  318 => 44,  316 => 43,  306 => 42,  297 => 72,  283 => 71,  281 => 42,  278 => 41,  275 => 40,  258 => 39,  254 => 38,  251 => 37,  241 => 36,  226 => 31,  221 => 29,  211 => 28,  202 => 33,  200 => 28,  196 => 27,  189 => 23,  185 => 21,  175 => 20,  166 => 87,  163 => 76,  160 => 74,  158 => 36,  155 => 35,  153 => 20,  150 => 19,  140 => 18,  131 => 89,  129 => 18,  123 => 15,  120 => 14,  110 => 13,  100 => 91,  98 => 13,  95 => 12,  93 => 11,  90 => 10,  87 => 9,  84 => 8,  81 => 7,  64 => 6,  61 => 5,  57 => 3,  55 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @deprecated tag:v6.7.0 - Fallback will be removed, add header directly #}
{% if not feature('cache_rework') and not header is defined and page is defined %}
    {% set header = page.header %}
{% endif %}

{% block layout_header_actions_currency_widget %}
    {% if position is empty %}
        {% set position = 'top-bar' %}
    {% endif %}

    {% if header.currencies.count > 1 %}
        <div class=\"top-bar-nav-item top-bar-currency\">
            {% block layout_header_actions_currency_widget_form %}
                <form method=\"post\"
                      action=\"{{ path('frontend.checkout.configure') }}\"
                      class=\"currency-form\"
                      data-form-auto-submit=\"true\">
                    {% block layout_header_actions_currency_widget_content %}
                        <div class=\"currencies-menu dropdown\">
                            {% block layout_header_actions_currency_widget_dropdown_toggle %}
                                <button class=\"btn dropdown-toggle top-bar-nav-btn\"
                                        type=\"button\"
                                        id=\"currenciesDropdown-{{ position }}\"
                                        data-bs-toggle=\"dropdown\"
                                        aria-haspopup=\"true\"
                                        aria-expanded=\"false\"
                                        aria-label=\"{{ 'header.currencyTrigger'|trans({ '%currency%': context.currency.translated.name })|striptags }}\">
                                    {% block layout_header_actions_currency_widget_dropdown_toggle_name %}
                                        <span aria-hidden=\"true\">{{ context.currency.translated.symbol }}</span>
                                        {# @deprecated tag:v6.7.0 - Toggling the text display will use Bootstrap helper classes instead of custom CSS. #}
                                        <span class=\"top-bar-nav-text{% if feature('ACCESSIBILITY_TWEAKS') %} d-none d-md-inline{% endif %}\">{{ context.currency.translated.name }}</span>
                                    {% endblock %}
                                </button>
                            {% endblock %}

                            {% block layout_header_actions_currency_widget_form_items %}
                                <ul class=\"top-bar-list dropdown-menu dropdown-menu-end\"
                                    aria-label=\"{{ 'header.currencyList'|trans|striptags }}\">
                                    {% for currency in header.currencies %}
                                        {% set isActiveCurrency = currency.id is same as(context.currency.id) %}

                                        {% block layout_header_actions_currency_widget_form_items_element %}
                                            {# @deprecated tag:v6.7.0 - `dropdown-item` class will be on the button as docuented by Bootstrap: https://getbootstrap.com/docs/5.3/components/dropdowns/#menu-items #}
                                            {# @deprecated tag:v6.7.0 - `item-checked` class will be removed. Bootstrap class `active` will be used instead. #}
                                            <li class=\"top-bar-list-item{% if not feature('ACCESSIBILITY_TWEAKS') %} dropdown-item{% endif %}{% if isActiveCurrency %} item-checked{% endif %}\">
                                                {% block layout_header_actions_currency_widget_form_items_element_label %}
                                                    {# @deprecated tag:v6.7.0 - Dropdown items will be buttons instead of radio inputs to imrpove accessibility #}
                                                    {% if feature('ACCESSIBILITY_TWEAKS') %}
                                                        <button class=\"dropdown-item d-flex gap-1{% if isActiveCurrency %} active{% endif %}\" type=\"submit\" name=\"currencyId\" id=\"{{ position }}-{{ currency.id }}\" value=\"{{ currency.id }}\">
                                                            <span aria-hidden=\"true\" class=\"top-bar-list-item-currency-symbol\">{{ currency.symbol }}</span>
                                                            {{ currency.translated.name }}
                                                        </button>
                                                    {% else %}
                                                        <label class=\"top-bar-list-label\"
                                                               for=\"{{ position }}-{{ currency.id }}\">
                                                            {# @deprecated tag:v6.7.0 - block `layout_header_actions_currency_widget_form_items_element_input` will be removed. Use parent block `layout_header_actions_currency_widget_form_items_element_label` instead. #}
                                                            {% block layout_header_actions_currency_widget_form_items_element_input %}
                                                                <input class=\"top-bar-list-radio\"
                                                                       id=\"{{ position }}-{{ currency.id }}\"
                                                                       value=\"{{ currency.id }}\"
                                                                       name=\"currencyId\"
                                                                       type=\"radio\"
                                                                        {% if isActiveCurrency %} checked{% endif %}>
                                                                <span class=\"aria-hidden\">{{ currency.symbol }}</span> {{ currency.translated.shortName }}
                                                            {% endblock %}
                                                        </label>
                                                    {% endif %}
                                                {% endblock %}
                                            </li>
                                        {% endblock %}
                                    {% endfor %}
                                </ul>
                            {% endblock %}

                            {# @deprecated tag:v6.7.0 - Block will be removed #}
                            {% block layout_header_actions_currency_widget_form_redirect %}
                                <input name=\"redirectTo\"
                                       type=\"hidden\"
                                       value=\"{{ activeRoute }}\">

                                {% for key, value in app.request.attributes.get('_route_params') %}
                                    <input name=\"redirectParameters[{{ key }}]\"
                                           type=\"hidden\"
                                           value=\"{{ value }}\">
                                {% endfor %}
                            {% endblock %}
                        </div>
                    {% endblock %}
                </form>
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/layout/header/actions/currency-widget.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/layout/header/actions/currency-widget.html.twig");
    }
}
