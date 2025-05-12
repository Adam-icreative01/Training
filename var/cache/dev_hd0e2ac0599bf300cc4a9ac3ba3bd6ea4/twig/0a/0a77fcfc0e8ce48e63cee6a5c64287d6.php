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

/* @Storefront/storefront/component/listing/filter/filter-range.html.twig */
class __TwigTemplate_f7f730e5fe7141a78752c20d45bec227 extends Template
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
            'component_filter_range' => [$this, 'block_component_filter_range'],
            'component_filter_range_toggle' => [$this, 'block_component_filter_range_toggle'],
            'component_filter_range_display_name' => [$this, 'block_component_filter_range_display_name'],
            'component_filter_range_toggle_icon' => [$this, 'block_component_filter_range_toggle_icon'],
            'component_filter_range_dropdown' => [$this, 'block_component_filter_range_dropdown'],
            'component_filter_range_container' => [$this, 'block_component_filter_range_container'],
            'component_filter_range_min' => [$this, 'block_component_filter_range_min'],
            'component_filter_range_min_label' => [$this, 'block_component_filter_range_min_label'],
            'component_filter_range_min_input' => [$this, 'block_component_filter_range_min_input'],
            'component_filter_range_min_unit' => [$this, 'block_component_filter_range_min_unit'],
            'component_filter_range_divider' => [$this, 'block_component_filter_range_divider'],
            'component_filter_range_max' => [$this, 'block_component_filter_range_max'],
            'component_filter_range_max_label' => [$this, 'block_component_filter_range_max_label'],
            'component_filter_range_max_input' => [$this, 'block_component_filter_range_max_input'],
            'component_filter_range_max_unit' => [$this, 'block_component_filter_range_max_unit'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/listing/filter/filter-range.html.twig"));

        // line 1
        $context["filterItemId"] = ((("filter-" . ($context["name"] ?? null)) . "-") . Twig\Extension\CoreExtension::random($this->env->getCharset()));
        // line 2
        yield "
";
        // line 3
        if ( !array_key_exists("filterRangeActiveMinLabel", $context)) {
            // line 4
            yield "    ";
            $context["filterRangeActiveMinLabel"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRangeActiveMinLabel", ["%displayName%" => ($context["displayName"] ?? null)]));
        }
        // line 6
        yield "
";
        // line 7
        if ( !array_key_exists("filterRangeActiveMaxLabel", $context)) {
            // line 8
            yield "    ";
            $context["filterRangeActiveMaxLabel"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRangeActiveMaxLabel", ["%displayName%" => ($context["displayName"] ?? null)]));
        }
        // line 10
        yield "
";
        // line 11
        if ( !array_key_exists("filterRangeErrorMessage", $context)) {
            // line 12
            yield "    ";
            $context["filterRangeErrorMessage"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRangeErrorMessage"));
        }
        // line 14
        yield "
";
        // line 15
        if ( !array_key_exists("filterRangeLowerBoundErrorMessage", $context)) {
            // line 16
            yield "    ";
            $context["filterRangeLowerBoundErrorMessage"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRangeLowerBoundErrorMessage", ["%lowerBound%" => ($context["lowerBound"] ?? null)]));
        }
        // line 18
        yield "
";
        // line 19
        if ( !array_key_exists("minKey", $context)) {
            // line 20
            yield "    ";
            $context["minKey"] = "min-price";
        }
        // line 22
        yield "
";
        // line 23
        if ( !array_key_exists("maxKey", $context)) {
            // line 24
            yield "    ";
            $context["minKey"] = "max-price";
        }
        // line 26
        yield "
";
        // line 27
        if ( !array_key_exists("unit", $context)) {
            // line 28
            yield "    ";
            $context["unit"] = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "currency", [], "any", false, false, false, 28), "symbol", [], "any", false, false, false, 28);
        }
        // line 30
        yield "
";
        // line 31
        if ( !array_key_exists("minInputValue", $context)) {
            // line 32
            yield "    ";
            $context["minInputValue"] = 0;
        }
        // line 34
        yield "
";
        // line 35
        $context["filterRangeOptions"] = ["name" =>         // line 36
($context["name"] ?? null), "minKey" =>         // line 37
($context["minKey"] ?? null), "maxKey" =>         // line 38
($context["maxKey"] ?? null), "lowerBound" =>         // line 39
($context["lowerBound"] ?? null), "unit" =>         // line 40
($context["unit"] ?? null), "snippets" => ["filterRangeActiveMinLabel" =>         // line 42
($context["filterRangeActiveMinLabel"] ?? null), "filterRangeActiveMaxLabel" =>         // line 43
($context["filterRangeActiveMaxLabel"] ?? null), "filterRangeErrorMessage" =>         // line 44
($context["filterRangeErrorMessage"] ?? null), "filterRangeLowerBoundErrorMessage" =>         // line 45
($context["filterRangeLowerBoundErrorMessage"] ?? null)]];
        // line 48
        yield "
";
        // line 49
        yield from $this->unwrap()->yieldBlock('component_filter_range', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_range(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range"));

        // line 50
        yield "    <div class=\"filter-range filter-panel-item";
        if (($context["sidebar"] ?? null)) {
            yield " d-grid";
        } else {
            yield " dropdown";
        }
        yield "\"
         role=\"listitem\"
         data-filter-range=\"true\"
         data-filter-range-options=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('json_encode')->getCallable()(($context["filterRangeOptions"] ?? null)), "html", null, true);
        yield "\">
        ";
        // line 54
        yield from $this->unwrap()->yieldBlock('component_filter_range_toggle', $context, $blocks);
        // line 78
        yield "
        ";
        // line 79
        yield from $this->unwrap()->yieldBlock('component_filter_range_dropdown', $context, $blocks);
        // line 137
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_range_toggle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_toggle"));

        // line 55
        yield "            <button class=\"filter-panel-item-toggle btn\"
                    aria-expanded=\"false\"
                    ";
        // line 57
        if (($context["ariaLabel"] ?? null)) {
            // line 58
            yield "                    aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ariaLabel"] ?? null), "html", null, true);
            yield "\"
                    ";
        }
        // line 60
        yield "                    ";
        if (($context["sidebar"] ?? null)) {
            // line 61
            yield "                    data-bs-toggle=\"collapse\"
                    data-bs-target=\"#";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filterItemId"] ?? null), "html", null, true);
            yield "\"
                    ";
        } else {
            // line 64
            yield "                    data-bs-toggle=\"dropdown\"
                    data-boundary=\"viewport\"
                    data-bs-offset=\"0,8\"
                    aria-haspopup=\"true\"
                    ";
        }
        // line 68
        yield ">
                ";
        // line 69
        yield from $this->unwrap()->yieldBlock('component_filter_range_display_name', $context, $blocks);
        // line 72
        yield "
                ";
        // line 73
        yield from $this->unwrap()->yieldBlock('component_filter_range_toggle_icon', $context, $blocks);
        // line 76
        yield "            </button>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_range_display_name(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_display_name"));

        // line 70
        yield "                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["displayName"] ?? null), "html", null, true);
        yield "
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_range_toggle_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_toggle_icon"));

        // line 74
        yield "                    ";
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/listing/filter/filter-range.html.twig", 74);
        })())->unwrap()->yield(CoreExtension::merge($context, ["pack" => "solid", "size" => "xs", "class" => "filter-panel-item-toggle", "name" => "arrow-medium-down"]));
        // line 75
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 79
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_range_dropdown(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_dropdown"));

        // line 80
        yield "            <div class=\"filter-range-dropdown filter-panel-item-dropdown";
        if (($context["sidebar"] ?? null)) {
            yield " collapse";
        } else {
            yield " dropdown-menu";
        }
        yield "\"
                 id=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filterItemId"] ?? null), "html", null, true);
        yield "\">
                ";
        // line 82
        yield from $this->unwrap()->yieldBlock('component_filter_range_container', $context, $blocks);
        // line 135
        yield "            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 82
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_range_container(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_container"));

        // line 83
        yield "                    <div class=\"filter-range-container\">
                        ";
        // line 84
        yield from $this->unwrap()->yieldBlock('component_filter_range_min', $context, $blocks);
        // line 105
        yield "
                        ";
        // line 106
        yield from $this->unwrap()->yieldBlock('component_filter_range_divider', $context, $blocks);
        // line 111
        yield "
                        ";
        // line 112
        yield from $this->unwrap()->yieldBlock('component_filter_range_max', $context, $blocks);
        // line 133
        yield "                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_range_min(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_min"));

        // line 85
        yield "                            <label class=\"filter-range-min\">
                                ";
        // line 86
        yield from $this->unwrap()->yieldBlock('component_filter_range_min_label', $context, $blocks);
        // line 89
        yield "
                                ";
        // line 90
        yield from $this->unwrap()->yieldBlock('component_filter_range_min_input', $context, $blocks);
        // line 97
        yield "
                                ";
        // line 98
        yield from $this->unwrap()->yieldBlock('component_filter_range_min_unit', $context, $blocks);
        // line 103
        yield "                            </label>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_range_min_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_min_label"));

        // line 87
        yield "                                    ";
        yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRangeMinLabel"));
        yield "
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_range_min_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_min_input"));

        // line 91
        yield "                                    <input class=\"form-control min-input\"
                                           type=\"number\"
                                           name=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["minKey"] ?? null), "html", null, true);
        yield "\"
                                           min=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["minInputValue"] ?? null), "html", null, true);
        yield "\"
                                           max=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["maxInputValue"] ?? null), "html", null, true);
        yield "\">
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 98
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_range_min_unit(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_min_unit"));

        // line 99
        yield "                                   <span class=\"filter-range-unit\">
                                            ";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unit"] ?? null), "html", null, true);
        yield "
                                    </span>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 106
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_range_divider(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_divider"));

        // line 107
        yield "                            <div class=\"filter-range-divider\">
                                &ndash;
                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 112
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_range_max(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_max"));

        // line 113
        yield "                            <label class=\"filter-range-max\">
                                ";
        // line 114
        yield from $this->unwrap()->yieldBlock('component_filter_range_max_label', $context, $blocks);
        // line 117
        yield "
                                ";
        // line 118
        yield from $this->unwrap()->yieldBlock('component_filter_range_max_input', $context, $blocks);
        // line 125
        yield "
                                ";
        // line 126
        yield from $this->unwrap()->yieldBlock('component_filter_range_max_unit', $context, $blocks);
        // line 131
        yield "                            </label>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 114
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_range_max_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_max_label"));

        // line 115
        yield "                                    ";
        yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRangeMaxLabel"));
        yield "
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 118
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_range_max_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_max_input"));

        // line 119
        yield "                                    <input class=\"form-control max-input\"
                                           type=\"number\"
                                           name=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["maxKey"] ?? null), "html", null, true);
        yield "\"
                                           min=\"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["minInputValue"] ?? null), "html", null, true);
        yield "\"
                                           max=\"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["maxInputValue"] ?? null), "html", null, true);
        yield "\">
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 126
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_filter_range_max_unit(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_range_max_unit"));

        // line 127
        yield "                                    <span class=\"filter-range-unit\">
                                        ";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unit"] ?? null), "html", null, true);
        yield "
                                    </span>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/component/listing/filter/filter-range.html.twig";
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
        return array (  606 => 128,  603 => 127,  593 => 126,  583 => 123,  579 => 122,  575 => 121,  571 => 119,  561 => 118,  550 => 115,  540 => 114,  531 => 131,  529 => 126,  526 => 125,  524 => 118,  521 => 117,  519 => 114,  516 => 113,  506 => 112,  495 => 107,  485 => 106,  474 => 100,  471 => 99,  461 => 98,  451 => 95,  447 => 94,  443 => 93,  439 => 91,  429 => 90,  418 => 87,  408 => 86,  399 => 103,  397 => 98,  394 => 97,  392 => 90,  389 => 89,  387 => 86,  384 => 85,  374 => 84,  365 => 133,  363 => 112,  360 => 111,  358 => 106,  355 => 105,  353 => 84,  350 => 83,  340 => 82,  331 => 135,  329 => 82,  325 => 81,  316 => 80,  306 => 79,  298 => 75,  289 => 74,  279 => 73,  268 => 70,  258 => 69,  249 => 76,  247 => 73,  244 => 72,  242 => 69,  239 => 68,  232 => 64,  227 => 62,  224 => 61,  221 => 60,  215 => 58,  213 => 57,  209 => 55,  199 => 54,  190 => 137,  188 => 79,  185 => 78,  183 => 54,  179 => 53,  168 => 50,  151 => 49,  148 => 48,  146 => 45,  145 => 44,  144 => 43,  143 => 42,  142 => 40,  141 => 39,  140 => 38,  139 => 37,  138 => 36,  137 => 35,  134 => 34,  130 => 32,  128 => 31,  125 => 30,  121 => 28,  119 => 27,  116 => 26,  112 => 24,  110 => 23,  107 => 22,  103 => 20,  101 => 19,  98 => 18,  94 => 16,  92 => 15,  89 => 14,  85 => 12,  83 => 11,  80 => 10,  76 => 8,  74 => 7,  71 => 6,  67 => 4,  65 => 3,  62 => 2,  60 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set filterItemId = 'filter-' ~ name ~ '-' ~ random() %}

{% if filterRangeActiveMinLabel is not defined %}
    {% set filterRangeActiveMinLabel = 'listing.filterRangeActiveMinLabel'|trans({'%displayName%': displayName})|sw_sanitize %}
{% endif %}

{% if filterRangeActiveMaxLabel is not defined %}
    {% set filterRangeActiveMaxLabel = 'listing.filterRangeActiveMaxLabel'|trans({'%displayName%': displayName})|sw_sanitize %}
{% endif %}

{% if filterRangeErrorMessage is not defined %}
    {% set filterRangeErrorMessage = 'listing.filterRangeErrorMessage'|trans|sw_sanitize %}
{% endif %}

{% if filterRangeLowerBoundErrorMessage is not defined %}
    {% set filterRangeLowerBoundErrorMessage = 'listing.filterRangeLowerBoundErrorMessage'|trans({'%lowerBound%': lowerBound})|sw_sanitize %}
{% endif %}

{% if minKey is not defined %}
    {% set minKey = 'min-price' %}
{% endif %}

{% if maxKey is not defined %}
    {% set minKey = 'max-price' %}
{% endif %}

{% if unit is not defined %}
    {% set unit = context.currency.symbol %}
{% endif %}

{% if minInputValue is not defined %}
    {% set minInputValue = 0 %}
{% endif %}

{% set filterRangeOptions = {
    name,
    minKey,
    maxKey,
    lowerBound,
    unit,
    snippets: {
        filterRangeActiveMinLabel,
        filterRangeActiveMaxLabel,
        filterRangeErrorMessage,
        filterRangeLowerBoundErrorMessage
    }
} %}

{% block component_filter_range %}
    <div class=\"filter-range filter-panel-item{% if sidebar %} d-grid{% else %} dropdown{% endif %}\"
         role=\"listitem\"
         data-filter-range=\"true\"
         data-filter-range-options=\"{{ filterRangeOptions|json_encode }}\">
        {% block component_filter_range_toggle %}
            <button class=\"filter-panel-item-toggle btn\"
                    aria-expanded=\"false\"
                    {% if ariaLabel %}
                    aria-label=\"{{ ariaLabel }}\"
                    {% endif %}
                    {% if sidebar %}
                    data-bs-toggle=\"collapse\"
                    data-bs-target=\"#{{ filterItemId }}\"
                    {% else %}
                    data-bs-toggle=\"dropdown\"
                    data-boundary=\"viewport\"
                    data-bs-offset=\"0,8\"
                    aria-haspopup=\"true\"
                    {% endif %}>
                {% block component_filter_range_display_name %}
                    {{ displayName }}
                {% endblock %}

                {% block component_filter_range_toggle_icon %}
                    {% sw_icon 'arrow-medium-down' style {pack: 'solid', size: 'xs', class: 'filter-panel-item-toggle'} %}
                {% endblock %}
            </button>
        {% endblock %}

        {% block component_filter_range_dropdown %}
            <div class=\"filter-range-dropdown filter-panel-item-dropdown{% if sidebar %} collapse{% else %} dropdown-menu{% endif %}\"
                 id=\"{{ filterItemId }}\">
                {% block component_filter_range_container %}
                    <div class=\"filter-range-container\">
                        {% block component_filter_range_min %}
                            <label class=\"filter-range-min\">
                                {% block component_filter_range_min_label %}
                                    {{ 'listing.filterRangeMinLabel'|trans|sw_sanitize }}
                                {% endblock %}

                                {% block component_filter_range_min_input %}
                                    <input class=\"form-control min-input\"
                                           type=\"number\"
                                           name=\"{{ minKey }}\"
                                           min=\"{{ minInputValue }}\"
                                           max=\"{{ maxInputValue }}\">
                                {% endblock %}

                                {% block component_filter_range_min_unit %}
                                   <span class=\"filter-range-unit\">
                                            {{ unit }}
                                    </span>
                                {% endblock %}
                            </label>
                        {% endblock %}

                        {% block component_filter_range_divider %}
                            <div class=\"filter-range-divider\">
                                &ndash;
                            </div>
                        {% endblock %}

                        {% block component_filter_range_max %}
                            <label class=\"filter-range-max\">
                                {% block component_filter_range_max_label %}
                                    {{ 'listing.filterRangeMaxLabel'|trans|sw_sanitize }}
                                {% endblock %}

                                {% block component_filter_range_max_input %}
                                    <input class=\"form-control max-input\"
                                           type=\"number\"
                                           name=\"{{ maxKey }}\"
                                           min=\"{{ minInputValue }}\"
                                           max=\"{{ maxInputValue }}\">
                                {% endblock %}

                                {% block component_filter_range_max_unit %}
                                    <span class=\"filter-range-unit\">
                                        {{ unit }}
                                    </span>
                                {% endblock %}
                            </label>
                        {% endblock %}
                    </div>
                {% endblock %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/component/listing/filter/filter-range.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter/filter-range.html.twig");
    }
}
