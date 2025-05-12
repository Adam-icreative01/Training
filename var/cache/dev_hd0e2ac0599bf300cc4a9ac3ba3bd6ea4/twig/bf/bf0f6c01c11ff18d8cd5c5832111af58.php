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

/* @Storefront/storefront/component/pagination.html.twig */
class __TwigTemplate_1d2433651644e4998c1406942bc87fd8 extends Template
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
            'component_pagination_nav' => [$this, 'block_component_pagination_nav'],
            'component_pagination' => [$this, 'block_component_pagination'],
            'component_pagination_first' => [$this, 'block_component_pagination_first'],
            'component_pagination_first_link_element' => [$this, 'block_component_pagination_first_link_element'],
            'component_pagination_first_link_icon' => [$this, 'block_component_pagination_first_link_icon'],
            'component_pagination_first_input' => [$this, 'block_component_pagination_first_input'],
            'component_pagination_first_label' => [$this, 'block_component_pagination_first_label'],
            'component_pagination_first_link' => [$this, 'block_component_pagination_first_link'],
            'component_pagination_prev' => [$this, 'block_component_pagination_prev'],
            'component_pagination_prev_link_element' => [$this, 'block_component_pagination_prev_link_element'],
            'component_pagination_prev_link_icon' => [$this, 'block_component_pagination_prev_link_icon'],
            'component_pagination_prev_input' => [$this, 'block_component_pagination_prev_input'],
            'component_pagination_prev_label' => [$this, 'block_component_pagination_prev_label'],
            'component_pagination_prev_link' => [$this, 'block_component_pagination_prev_link'],
            'component_pagination_prev_icon' => [$this, 'block_component_pagination_prev_icon'],
            'component_pagination_loop' => [$this, 'block_component_pagination_loop'],
            'component_pagination_item' => [$this, 'block_component_pagination_item'],
            'component_pagination_item_link_element' => [$this, 'block_component_pagination_item_link_element'],
            'component_pagination_item_link_text' => [$this, 'block_component_pagination_item_link_text'],
            'component_pagination_item_input' => [$this, 'block_component_pagination_item_input'],
            'component_pagination_item_label' => [$this, 'block_component_pagination_item_label'],
            'component_pagination_item_link' => [$this, 'block_component_pagination_item_link'],
            'component_pagination_item_text' => [$this, 'block_component_pagination_item_text'],
            'component_pagination_next' => [$this, 'block_component_pagination_next'],
            'component_pagination_next_link_element' => [$this, 'block_component_pagination_next_link_element'],
            'component_pagination_next_link_icon' => [$this, 'block_component_pagination_next_link_icon'],
            'component_pagination_next_input' => [$this, 'block_component_pagination_next_input'],
            'component_pagination_next_label' => [$this, 'block_component_pagination_next_label'],
            'component_pagination_next_link' => [$this, 'block_component_pagination_next_link'],
            'component_pagination_next_icon' => [$this, 'block_component_pagination_next_icon'],
            'component_pagination_last' => [$this, 'block_component_pagination_last'],
            'component_pagination_last_link_element' => [$this, 'block_component_pagination_last_link_element'],
            'component_pagination_last_link_icon' => [$this, 'block_component_pagination_last_link_icon'],
            'component_pagination_last_input' => [$this, 'block_component_pagination_last_input'],
            'component_pagination_last_label' => [$this, 'block_component_pagination_last_label'],
            'component_pagination_last_link' => [$this, 'block_component_pagination_last_link'],
            'component_pagination_last_icon' => [$this, 'block_component_pagination_last_icon'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/pagination.html.twig"));

        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('component_pagination_nav', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_nav(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_nav"));

        // line 4
        yield "    ";
        $context["currentPage"] = (((array_key_exists("currentPage", $context) &&  !(null === $context["currentPage"]))) ? ($context["currentPage"]) : (SwTwigFunction::getAttribute($this->env, $this->source, ($context["entities"] ?? null), "page", [], "any", false, false, false, 4)));
        // line 5
        yield "    ";
        // line 6
        yield "    ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.7.0.0")) {
            // line 7
            yield "        ";
            $context["totalPages"] = (((array_key_exists("totalPages", $context) &&  !(null === $context["totalPages"]))) ? ($context["totalPages"]) : (Twig\Extension\CoreExtension::round((SwTwigFunction::getAttribute($this->env, $this->source, ($context["entities"] ?? null), "total", [], "any", false, false, false, 7) / ((SwTwigFunction::getAttribute($this->env, $this->source, ($context["entities"] ?? null), "limit", [], "any", false, false, false, 7)) ? (SwTwigFunction::getAttribute($this->env, $this->source, ($context["entities"] ?? null), "limit", [], "any", false, false, false, 7)) : (1))), 0, "ceil")));
            // line 8
            yield "    ";
        } else {
            // line 9
            yield "        ";
            $context["totalEntities"] = ((($context["total"] ?? null)) ? (($context["total"] ?? null)) : (SwTwigFunction::getAttribute($this->env, $this->source, ($context["entities"] ?? null), "total", [], "any", false, false, false, 9)));
            // line 10
            yield "        ";
            $context["totalPages"] = Twig\Extension\CoreExtension::round((($context["totalEntities"] ?? null) / ((SwTwigFunction::getAttribute($this->env, $this->source, ($context["criteria"] ?? null), "limit", [], "any", false, false, false, 10)) ? (SwTwigFunction::getAttribute($this->env, $this->source, ($context["criteria"] ?? null), "limit", [], "any", false, false, false, 10)) : (1))), 0, "ceil");
            // line 11
            yield "    ";
        }
        // line 12
        yield "
    ";
        // line 13
        $context["paginationSuffix"] = "";
        // line 14
        yield "    ";
        if (($context["paginationLocation"] ?? null)) {
            // line 15
            yield "        ";
            $context["paginationSuffix"] = ("-" . ($context["paginationLocation"] ?? null));
            // line 16
            yield "    ";
        }
        // line 17
        yield "
    ";
        // line 18
        if (($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS") &&  !array_key_exists("href", $context))) {
            // line 19
            yield "        ";
            $context["href"] = true;
            // line 20
            yield "    ";
        }
        // line 21
        yield "
    ";
        // line 22
        if ((($context["href"] ?? null) &&  !array_key_exists("pageParameter", $context))) {
            // line 23
            yield "        ";
            $context["pageParameter"] = "p";
            // line 24
            yield "    ";
        }
        // line 25
        yield "
    ";
        // line 26
        $context["searchQuery"] = "";
        // line 27
        yield "    ";
        if (($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS") && SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["searchResult"] ?? null), "currentFilters", [], "any", false, false, false, 27), "search", [], "any", false, false, false, 27))) {
            // line 28
            yield "        ";
            $context["searchQuery"] = ("&search=" . SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["searchResult"] ?? null), "currentFilters", [], "any", false, false, false, 28), "search", [], "any", false, false, false, 28));
            // line 29
            yield "    ";
        }
        // line 30
        yield "
    ";
        // line 31
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 32
            yield "        <nav aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.pagination.title")), "html", null, true);
            yield "\" class=\"pagination-nav listing-pagination";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["paginationSuffix"] ?? null), "html", null, true);
            yield "\"";
            if (($context["paginationLocation"] ?? null)) {
                yield " data-pagination-location=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["paginationLocation"] ?? null), "html", null, true);
                yield "\"";
            }
            yield ">
            ";
            // line 33
            yield from $this->unwrap()->yieldBlock('component_pagination', $context, $blocks);
            // line 253
            yield "        </nav>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination"));

        // line 34
        yield "            <ul class=\"pagination\">
                ";
        // line 35
        yield from $this->unwrap()->yieldBlock('component_pagination_first', $context, $blocks);
        // line 70
        yield "
                ";
        // line 71
        yield from $this->unwrap()->yieldBlock('component_pagination_prev', $context, $blocks);
        // line 109
        yield "
                ";
        // line 110
        yield from $this->unwrap()->yieldBlock('component_pagination_loop', $context, $blocks);
        // line 170
        yield "
                ";
        // line 171
        yield from $this->unwrap()->yieldBlock('component_pagination_next', $context, $blocks);
        // line 209
        yield "
                ";
        // line 210
        yield from $this->unwrap()->yieldBlock('component_pagination_last', $context, $blocks);
        // line 251
        yield "            </ul>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_first(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_first"));

        // line 36
        yield "                    <li class=\"page-item page-first";
        if ((($context["currentPage"] ?? null) == 1)) {
            yield " disabled";
        }
        yield "\">
                        ";
        // line 38
        yield "                        ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) {
            // line 39
            yield "                            ";
            yield from $this->unwrap()->yieldBlock('component_pagination_first_link_element', $context, $blocks);
            // line 46
            yield "                        ";
        } else {
            // line 47
            yield "                            ";
            // line 48
            yield "                            ";
            yield from $this->unwrap()->yieldBlock('component_pagination_first_input', $context, $blocks);
            // line 57
            yield "
                            ";
            // line 59
            yield "                            ";
            yield from $this->unwrap()->yieldBlock('component_pagination_first_label', $context, $blocks);
            // line 67
            yield "                        ";
        }
        // line 68
        yield "                    </li>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_first_link_element(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_first_link_element"));

        // line 40
        yield "                                <a href=\"";
        yield ((($context["href"] ?? null)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((("?" . ($context["pageParameter"] ?? null)) . "=1") . ($context["searchQuery"] ?? null)), "html", null, true)) : ("#"));
        yield "\" class=\"page-link\" data-page=\"1\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.first")), "html", null, true);
        yield "\" data-focus-id=\"first\"";
        if ((($context["currentPage"] ?? null) == 1)) {
            yield " tabindex=\"-1\" aria-disabled=\"true\"";
        }
        yield ">
                                    ";
        // line 41
        yield from $this->unwrap()->yieldBlock('component_pagination_first_link_icon', $context, $blocks);
        // line 44
        yield "                                </a>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_first_link_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_first_link_icon"));

        // line 42
        yield "                                        ";
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/pagination.html.twig", 42);
        })())->unwrap()->yield(CoreExtension::merge($context, ["size" => "fluid", "pack" => "solid", "ariaHidden" => true, "name" => "arrow-medium-double-left"]));
        // line 43
        yield "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_first_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_first_input"));

        // line 49
        yield "                                <input type=\"radio\"
                                       ";
        // line 50
        if ((($context["currentPage"] ?? null) == 1)) {
            yield "disabled=\"disabled\"";
        }
        // line 51
        yield "                                       name=\"p\"
                                       id=\"p-first";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["paginationSuffix"] ?? null), "html", null, true);
        yield "\"
                                       value=\"1\"
                                       class=\"d-none\"
                                       title=\"pagination\">
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 59
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_first_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_first_label"));

        // line 60
        yield "                                <label class=\"page-link\" for=\"p-first";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["paginationSuffix"] ?? null), "html", null, true);
        yield "\">
                                    ";
        // line 62
        yield "                                    ";
        yield from $this->unwrap()->yieldBlock('component_pagination_first_link', $context, $blocks);
        // line 65
        yield "                                </label>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_first_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_first_link"));

        // line 63
        yield "                                        ";
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/pagination.html.twig", 63);
        })())->unwrap()->yield(CoreExtension::merge($context, ["size" => "fluid", "pack" => "solid", "name" => "arrow-medium-double-left"]));
        // line 64
        yield "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_prev(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_prev"));

        // line 72
        yield "                    <li class=\"page-item page-prev";
        if ((($context["currentPage"] ?? null) == 1)) {
            yield " disabled";
        }
        yield "\">
                        ";
        // line 74
        yield "                        ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) {
            // line 75
            yield "                            ";
            yield from $this->unwrap()->yieldBlock('component_pagination_prev_link_element', $context, $blocks);
            // line 82
            yield "                        ";
        } else {
            // line 83
            yield "                            ";
            // line 84
            yield "                            ";
            yield from $this->unwrap()->yieldBlock('component_pagination_prev_input', $context, $blocks);
            // line 93
            yield "
                            ";
            // line 95
            yield "                            ";
            yield from $this->unwrap()->yieldBlock('component_pagination_prev_label', $context, $blocks);
            // line 106
            yield "                        ";
        }
        // line 107
        yield "                    </li>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 75
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_prev_link_element(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_prev_link_element"));

        // line 76
        yield "                                <a href=\"";
        yield ((($context["href"] ?? null)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((("?" . ($context["pageParameter"] ?? null)) . "=") . (($context["currentPage"] ?? null) - 1)) . ($context["searchQuery"] ?? null)), "html", null, true)) : ("#"));
        yield "\" class=\"page-link\" data-page=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["currentPage"] ?? null) - 1), "html", null, true);
        yield "\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.pagination.prev")), "html", null, true);
        yield "\" data-focus-id=\"prev\"";
        if ((($context["currentPage"] ?? null) == 1)) {
            yield " tabindex=\"-1\" aria-disabled=\"true\"";
        }
        yield ">
                                    ";
        // line 77
        yield from $this->unwrap()->yieldBlock('component_pagination_prev_link_icon', $context, $blocks);
        // line 80
        yield "                                </a>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 77
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_prev_link_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_prev_link_icon"));

        // line 78
        yield "                                        ";
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/pagination.html.twig", 78);
        })())->unwrap()->yield(CoreExtension::merge($context, ["size" => "fluid", "pack" => "solid", "ariaHidden" => true, "name" => "arrow-medium-left"]));
        // line 79
        yield "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_prev_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_prev_input"));

        // line 85
        yield "                                <input type=\"radio\"
                                       ";
        // line 86
        if ((($context["currentPage"] ?? null) == 1)) {
            yield "disabled=\"disabled\"";
        }
        // line 87
        yield "                                       name=\"p\"
                                       id=\"p-prev";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["paginationSuffix"] ?? null), "html", null, true);
        yield "\"
                                       value=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["currentPage"] ?? null) - 1), "html", null, true);
        yield "\"
                                       class=\"d-none\"
                                       title=\"pagination\">
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 95
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_prev_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_prev_label"));

        // line 96
        yield "                                <label class=\"page-link\" for=\"p-prev";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["paginationSuffix"] ?? null), "html", null, true);
        yield "\">
                                    ";
        // line 98
        yield "                                    ";
        yield from $this->unwrap()->yieldBlock('component_pagination_prev_link', $context, $blocks);
        // line 104
        yield "                                </label>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 98
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_prev_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_prev_link"));

        // line 99
        yield "                                        ";
        // line 100
        yield "                                        ";
        yield from $this->unwrap()->yieldBlock('component_pagination_prev_icon', $context, $blocks);
        // line 103
        yield "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 100
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_prev_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_prev_icon"));

        // line 101
        yield "                                            ";
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/pagination.html.twig", 101);
        })())->unwrap()->yield(CoreExtension::merge($context, ["size" => "fluid", "pack" => "solid", "name" => "arrow-medium-left"]));
        // line 102
        yield "                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 110
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_loop(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_loop"));

        // line 111
        yield "                    ";
        $context["start"] = (($context["currentPage"] ?? null) - 2);
        // line 112
        yield "                    ";
        if ((($context["start"] ?? null) <= 0)) {
            // line 113
            yield "                        ";
            $context["start"] = (($context["currentPage"] ?? null) - 1);
            // line 114
            yield "                        ";
            if ((($context["start"] ?? null) <= 0)) {
                // line 115
                yield "                            ";
                $context["start"] = ($context["currentPage"] ?? null);
                // line 116
                yield "                        ";
            }
            // line 117
            yield "                    ";
        }
        // line 118
        yield "
                    ";
        // line 119
        $context["end"] = (($context["start"] ?? null) + 4);
        // line 120
        yield "
                    ";
        // line 121
        if ((($context["end"] ?? null) > ($context["totalPages"] ?? null))) {
            // line 122
            yield "                        ";
            $context["end"] = ($context["totalPages"] ?? null);
            // line 123
            yield "                    ";
        }
        // line 124
        yield "
                    ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(($context["start"] ?? null), ($context["end"] ?? null)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 126
            yield "
                        ";
            // line 127
            $context["isActive"] = (($context["currentPage"] ?? null) == $context["page"]);
            // line 128
            yield "
                        ";
            // line 129
            yield from $this->unwrap()->yieldBlock('component_pagination_item', $context, $blocks);
            // line 168
            yield "                    ";
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
        unset($context['_seq'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 129
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_item(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_item"));

        // line 130
        yield "                            <li class=\"page-item";
        if (($context["isActive"] ?? null)) {
            yield " active";
        }
        yield "\"";
        if (($context["isActive"] ?? null)) {
            yield " aria-current=\"page\"";
        }
        yield ">
                                ";
        // line 132
        yield "                                ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) {
            // line 133
            yield "                                    ";
            yield from $this->unwrap()->yieldBlock('component_pagination_item_link_element', $context, $blocks);
            // line 140
            yield "                                ";
        } else {
            // line 141
            yield "                                    ";
            // line 142
            yield "                                    ";
            yield from $this->unwrap()->yieldBlock('component_pagination_item_input', $context, $blocks);
            // line 151
            yield "
                                    ";
            // line 153
            yield "                                    ";
            yield from $this->unwrap()->yieldBlock('component_pagination_item_label', $context, $blocks);
            // line 165
            yield "                                ";
        }
        // line 166
        yield "                            </li>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 133
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_item_link_element(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_item_link_element"));

        // line 134
        yield "                                        <a href=\"";
        yield ((($context["href"] ?? null)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((("?" . ($context["pageParameter"] ?? null)) . "=") . ($context["page"] ?? null)) . ($context["searchQuery"] ?? null)), "html", null, true)) : ("#"));
        yield "\" class=\"page-link\" data-page=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page"] ?? null), "html", null, true);
        yield "\" data-focus-id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page"] ?? null), "html", null, true);
        yield "\">
                                            ";
        // line 135
        yield from $this->unwrap()->yieldBlock('component_pagination_item_link_text', $context, $blocks);
        // line 138
        yield "                                        </a>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 135
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_item_link_text(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_item_link_text"));

        // line 136
        yield "                                                <span class=\"visually-hidden\">";
        yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.pagination.page"));
        yield "</span> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page"] ?? null), "html", null, true);
        yield "
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 142
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_item_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_item_input"));

        // line 143
        yield "                                        <input type=\"radio\"
                                               name=\"p\"
                                               id=\"p";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page"] ?? null), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["paginationSuffix"] ?? null), "html", null, true);
        yield "\"
                                               value=\"";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page"] ?? null), "html", null, true);
        yield "\"
                                               class=\"d-none\"
                                               title=\"pagination\"
                                               ";
        // line 149
        if (($context["isActive"] ?? null)) {
            yield "checked=\"checked\"";
        }
        yield ">
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 153
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_item_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_item_label"));

        // line 154
        yield "                                        <label class=\"page-link\"
                                               for=\"p";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page"] ?? null), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["paginationSuffix"] ?? null), "html", null, true);
        yield "\">
                                            ";
        // line 157
        yield "                                            ";
        yield from $this->unwrap()->yieldBlock('component_pagination_item_link', $context, $blocks);
        // line 163
        yield "                                        </label>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 157
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_item_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_item_link"));

        // line 158
        yield "                                                ";
        // line 159
        yield "                                                ";
        yield from $this->unwrap()->yieldBlock('component_pagination_item_text', $context, $blocks);
        // line 162
        yield "                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 159
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_item_text(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_item_text"));

        // line 160
        yield "                                                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page"] ?? null), "html", null, true);
        yield "
                                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 171
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_next(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_next"));

        // line 172
        yield "                    <li class=\"page-item page-next";
        if ((($context["currentPage"] ?? null) == ($context["totalPages"] ?? null))) {
            yield " disabled";
        }
        yield "\">
                        ";
        // line 174
        yield "                        ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) {
            // line 175
            yield "                            ";
            yield from $this->unwrap()->yieldBlock('component_pagination_next_link_element', $context, $blocks);
            // line 182
            yield "                        ";
        } else {
            // line 183
            yield "                            ";
            // line 184
            yield "                            ";
            yield from $this->unwrap()->yieldBlock('component_pagination_next_input', $context, $blocks);
            // line 193
            yield "
                            ";
            // line 195
            yield "                            ";
            yield from $this->unwrap()->yieldBlock('component_pagination_next_label', $context, $blocks);
            // line 206
            yield "                        ";
        }
        // line 207
        yield "                    </li>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 175
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_next_link_element(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_next_link_element"));

        // line 176
        yield "                                <a href=\"";
        yield ((($context["href"] ?? null)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((("?" . ($context["pageParameter"] ?? null)) . "=") . (($context["currentPage"] ?? null) + 1)) . ($context["searchQuery"] ?? null)), "html", null, true)) : ("#"));
        yield "\" class=\"page-link\" data-page=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["currentPage"] ?? null) + 1), "html", null, true);
        yield "\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.pagination.next")), "html", null, true);
        yield "\" data-focus-id=\"next\"";
        if ((($context["currentPage"] ?? null) == ($context["totalPages"] ?? null))) {
            yield " tabindex=\"-1\" aria-disabled=\"true\"";
        }
        yield ">
                                    ";
        // line 177
        yield from $this->unwrap()->yieldBlock('component_pagination_next_link_icon', $context, $blocks);
        // line 180
        yield "                                </a>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 177
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_next_link_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_next_link_icon"));

        // line 178
        yield "                                        ";
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/pagination.html.twig", 178);
        })())->unwrap()->yield(CoreExtension::merge($context, ["size" => "fluid", "pack" => "solid", "ariaHidden" => true, "name" => "arrow-medium-right"]));
        // line 179
        yield "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 184
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_next_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_next_input"));

        // line 185
        yield "                                <input type=\"radio\"
                                       ";
        // line 186
        if ((($context["currentPage"] ?? null) == ($context["totalPages"] ?? null))) {
            yield "disabled=\"disabled\"";
        }
        // line 187
        yield "                                       name=\"p\"
                                       id=\"p-next";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["paginationSuffix"] ?? null), "html", null, true);
        yield "\"
                                       value=\"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["currentPage"] ?? null) + 1), "html", null, true);
        yield "\"
                                       class=\"d-none\"
                                       title=\"pagination\">
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 195
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_next_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_next_label"));

        // line 196
        yield "                                <label class=\"page-link\" for=\"p-next";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["paginationSuffix"] ?? null), "html", null, true);
        yield "\">
                                    ";
        // line 198
        yield "                                    ";
        yield from $this->unwrap()->yieldBlock('component_pagination_next_link', $context, $blocks);
        // line 204
        yield "                                </label>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 198
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_next_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_next_link"));

        // line 199
        yield "                                        ";
        // line 200
        yield "                                        ";
        yield from $this->unwrap()->yieldBlock('component_pagination_next_icon', $context, $blocks);
        // line 203
        yield "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 200
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_next_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_next_icon"));

        // line 201
        yield "                                            ";
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/pagination.html.twig", 201);
        })())->unwrap()->yield(CoreExtension::merge($context, ["size" => "fluid", "pack" => "solid", "name" => "arrow-medium-right"]));
        // line 202
        yield "                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 210
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_last(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_last"));

        // line 211
        yield "                    <li class=\"page-item page-last";
        if ((($context["currentPage"] ?? null) == ($context["totalPages"] ?? null))) {
            yield " disabled";
        }
        yield "\">
                        ";
        // line 213
        yield "                        ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) {
            // line 214
            yield "                            ";
            yield from $this->unwrap()->yieldBlock('component_pagination_last_link_element', $context, $blocks);
            // line 221
            yield "                        ";
        } else {
            // line 222
            yield "                            ";
            // line 223
            yield "                            ";
            yield from $this->unwrap()->yieldBlock('component_pagination_last_input', $context, $blocks);
            // line 232
            yield "
                            ";
            // line 234
            yield "                            ";
            yield from $this->unwrap()->yieldBlock('component_pagination_last_label', $context, $blocks);
            // line 248
            yield "                        ";
        }
        // line 249
        yield "                    </li>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 214
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_last_link_element(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_last_link_element"));

        // line 215
        yield "                                <a href=\"";
        yield ((($context["href"] ?? null)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((("?" . ($context["pageParameter"] ?? null)) . "=") . ($context["totalPages"] ?? null)) . ($context["searchQuery"] ?? null)), "html", null, true)) : ("#"));
        yield "\" class=\"page-link\" data-page=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPages"] ?? null), "html", null, true);
        yield "\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.pagination.last")), "html", null, true);
        yield "\" data-focus-id=\"last\"";
        if ((($context["currentPage"] ?? null) == ($context["totalPages"] ?? null))) {
            yield " tabindex=\"-1\" aria-disabled=\"true\"";
        }
        yield ">
                                    ";
        // line 216
        yield from $this->unwrap()->yieldBlock('component_pagination_last_link_icon', $context, $blocks);
        // line 219
        yield "                                </a>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 216
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_last_link_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_last_link_icon"));

        // line 217
        yield "                                        ";
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/pagination.html.twig", 217);
        })())->unwrap()->yield(CoreExtension::merge($context, ["size" => "fluid", "pack" => "solid", "ariaHidden" => true, "name" => "arrow-medium-double-right"]));
        // line 218
        yield "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 223
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_last_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_last_input"));

        // line 224
        yield "                                <input type=\"radio\"
                                       ";
        // line 225
        if ((($context["currentPage"] ?? null) == ($context["totalPages"] ?? null))) {
            yield "disabled=\"disabled\"";
        }
        // line 226
        yield "                                       name=\"p\"
                                       id=\"p-last";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["paginationSuffix"] ?? null), "html", null, true);
        yield "\"
                                       value=\"";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPages"] ?? null), "html", null, true);
        yield "\"
                                       class=\"d-none\"
                                       title=\"pagination\">
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 234
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_last_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_last_label"));

        // line 235
        yield "                                <label class=\"page-link\" for=\"p-last";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["paginationSuffix"] ?? null), "html", null, true);
        yield "\">
                                    ";
        // line 237
        yield "                                    ";
        yield from $this->unwrap()->yieldBlock('component_pagination_last_link', $context, $blocks);
        // line 246
        yield "                                </label>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 237
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_last_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_last_link"));

        // line 238
        yield "                                        ";
        // line 239
        yield "                                        ";
        yield from $this->unwrap()->yieldBlock('component_pagination_last_icon', $context, $blocks);
        // line 245
        yield "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 239
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pagination_last_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_last_icon"));

        // line 240
        yield "                                            ";
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/pagination.html.twig", 240);
        })())->unwrap()->yield(CoreExtension::merge($context, ["size" => "fluid", "pack" => "solid", "name" => "arrow-medium-double-right"]));
        // line 244
        yield "                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/component/pagination.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  1421 => 244,  1412 => 240,  1402 => 239,  1394 => 245,  1391 => 239,  1389 => 238,  1379 => 237,  1370 => 246,  1367 => 237,  1362 => 235,  1352 => 234,  1340 => 228,  1336 => 227,  1333 => 226,  1329 => 225,  1326 => 224,  1316 => 223,  1308 => 218,  1299 => 217,  1289 => 216,  1280 => 219,  1278 => 216,  1265 => 215,  1255 => 214,  1246 => 249,  1243 => 248,  1240 => 234,  1237 => 232,  1234 => 223,  1232 => 222,  1229 => 221,  1226 => 214,  1223 => 213,  1216 => 211,  1206 => 210,  1198 => 202,  1189 => 201,  1179 => 200,  1171 => 203,  1168 => 200,  1166 => 199,  1156 => 198,  1147 => 204,  1144 => 198,  1139 => 196,  1129 => 195,  1117 => 189,  1113 => 188,  1110 => 187,  1106 => 186,  1103 => 185,  1093 => 184,  1085 => 179,  1076 => 178,  1066 => 177,  1057 => 180,  1055 => 177,  1042 => 176,  1032 => 175,  1023 => 207,  1020 => 206,  1017 => 195,  1014 => 193,  1011 => 184,  1009 => 183,  1006 => 182,  1003 => 175,  1000 => 174,  993 => 172,  983 => 171,  972 => 160,  962 => 159,  954 => 162,  951 => 159,  949 => 158,  939 => 157,  930 => 163,  927 => 157,  922 => 155,  919 => 154,  909 => 153,  897 => 149,  891 => 146,  886 => 145,  882 => 143,  872 => 142,  859 => 136,  849 => 135,  840 => 138,  838 => 135,  829 => 134,  819 => 133,  810 => 166,  807 => 165,  804 => 153,  801 => 151,  798 => 142,  796 => 141,  793 => 140,  790 => 133,  787 => 132,  776 => 130,  766 => 129,  758 => 169,  744 => 168,  742 => 129,  739 => 128,  737 => 127,  734 => 126,  717 => 125,  714 => 124,  711 => 123,  708 => 122,  706 => 121,  703 => 120,  701 => 119,  698 => 118,  695 => 117,  692 => 116,  689 => 115,  686 => 114,  683 => 113,  680 => 112,  677 => 111,  667 => 110,  659 => 102,  650 => 101,  640 => 100,  632 => 103,  629 => 100,  627 => 99,  617 => 98,  608 => 104,  605 => 98,  600 => 96,  590 => 95,  578 => 89,  574 => 88,  571 => 87,  567 => 86,  564 => 85,  554 => 84,  546 => 79,  537 => 78,  527 => 77,  518 => 80,  516 => 77,  503 => 76,  493 => 75,  484 => 107,  481 => 106,  478 => 95,  475 => 93,  472 => 84,  470 => 83,  467 => 82,  464 => 75,  461 => 74,  454 => 72,  444 => 71,  436 => 64,  427 => 63,  417 => 62,  408 => 65,  405 => 62,  400 => 60,  390 => 59,  377 => 52,  374 => 51,  370 => 50,  367 => 49,  357 => 48,  349 => 43,  340 => 42,  330 => 41,  321 => 44,  319 => 41,  308 => 40,  298 => 39,  289 => 68,  286 => 67,  283 => 59,  280 => 57,  277 => 48,  275 => 47,  272 => 46,  269 => 39,  266 => 38,  259 => 36,  249 => 35,  240 => 251,  238 => 210,  235 => 209,  233 => 171,  230 => 170,  228 => 110,  225 => 109,  223 => 71,  220 => 70,  218 => 35,  215 => 34,  205 => 33,  195 => 253,  193 => 33,  180 => 32,  178 => 31,  175 => 30,  172 => 29,  169 => 28,  166 => 27,  164 => 26,  161 => 25,  158 => 24,  155 => 23,  153 => 22,  150 => 21,  147 => 20,  144 => 19,  142 => 18,  139 => 17,  136 => 16,  133 => 15,  130 => 14,  128 => 13,  125 => 12,  122 => 11,  119 => 10,  116 => 9,  113 => 8,  110 => 7,  107 => 6,  105 => 5,  102 => 4,  85 => 3,  82 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @sw-package framework #}

{% block component_pagination_nav %}
    {% set currentPage = currentPage ?? entities.page %}
    {# @deprecated tag:v6.7.0 - variable `totalEntities` will be removed and the variable `total` will be removed and not considered anymore, set `totalPages` instead #}
    {% if feature('v6.7.0.0') %}
        {% set totalPages = totalPages ?? (entities.total / (entities.limit ?: 1))|round(0, 'ceil') %}
    {% else %}
        {% set totalEntities = total ? total : entities.total %}
        {% set totalPages = (totalEntities / (criteria.limit ?: 1))|round(0, 'ceil') %}
    {% endif %}

    {% set paginationSuffix = '' %}
    {% if paginationLocation %}
        {% set paginationSuffix = '-' ~ paginationLocation %}
    {% endif %}

    {% if feature('ACCESSIBILITY_TWEAKS') and href is not defined %}
        {% set href = true %}
    {% endif %}

    {% if href and pageParameter is not defined %}
        {% set pageParameter = 'p' %}
    {% endif %}

    {% set searchQuery = '' %}
    {% if feature('ACCESSIBILITY_TWEAKS') and searchResult.currentFilters.search %}
        {% set searchQuery = '&search=' ~ searchResult.currentFilters.search %}
    {% endif %}

    {% if totalPages > 1 %}
        <nav aria-label=\"{{ 'general.pagination.title'|trans|striptags }}\" class=\"pagination-nav listing-pagination{{ paginationSuffix }}\"{% if paginationLocation %} data-pagination-location=\"{{ paginationLocation }}\"{% endif %}>
            {% block component_pagination %}
            <ul class=\"pagination\">
                {% block component_pagination_first %}
                    <li class=\"page-item page-first{% if currentPage == 1 %} disabled{% endif %}\">
                        {# @deprecated tag:v6.7.0 - Pagination items will use anchor elements instead of radio inputs and labels. #}
                        {% if feature('ACCESSIBILITY_TWEAKS') %}
                            {% block component_pagination_first_link_element %}
                                <a href=\"{{ href ? '?' ~ pageParameter ~ '=1' ~ searchQuery : '#' }}\" class=\"page-link\" data-page=\"1\" aria-label=\"{{ 'general.first'|trans|striptags }}\" data-focus-id=\"first\"{% if currentPage == 1 %} tabindex=\"-1\" aria-disabled=\"true\"{% endif %}>
                                    {% block component_pagination_first_link_icon %}
                                        {% sw_icon 'arrow-medium-double-left' style { size: 'fluid', pack: 'solid', ariaHidden: true } %}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% else %}
                            {# @deprecated tag:v6.7.0 - Block and radio input will be removed. Use new anchor element in block `component_pagination_first_link_element` instead. #}
                            {% block component_pagination_first_input %}
                                <input type=\"radio\"
                                       {% if currentPage == 1 %}disabled=\"disabled\"{% endif %}
                                       name=\"p\"
                                       id=\"p-first{{ paginationSuffix }}\"
                                       value=\"1\"
                                       class=\"d-none\"
                                       title=\"pagination\">
                            {% endblock %}

                            {# @deprecated tag:v6.7.0 - Label element will be replaced by anchor element. Use block `component_pagination_first_link_element` instead. #}
                            {% block component_pagination_first_label %}
                                <label class=\"page-link\" for=\"p-first{{ paginationSuffix }}\">
                                    {# @deprecated tag:v6.7.0 - Label element will be replaced by anchor element. Use block `component_pagination_first_link_icon` instead. #}
                                    {% block component_pagination_first_link %}
                                        {% sw_icon 'arrow-medium-double-left' style { size: 'fluid', pack: 'solid'} %}
                                    {% endblock %}
                                </label>
                            {% endblock %}
                        {% endif %}
                    </li>
                {% endblock %}

                {% block component_pagination_prev %}
                    <li class=\"page-item page-prev{% if currentPage == 1 %} disabled{% endif %}\">
                        {# @deprecated tag:v6.7.0 - Pagination items will use anchor elements instead of radio inputs and labels. #}
                        {% if feature('ACCESSIBILITY_TWEAKS') %}
                            {% block component_pagination_prev_link_element %}
                                <a href=\"{{ href ? '?' ~ pageParameter ~ '=' ~ (currentPage - 1) ~ searchQuery : '#' }}\" class=\"page-link\" data-page=\"{{ currentPage - 1 }}\" aria-label=\"{{ 'general.pagination.prev'|trans|striptags }}\" data-focus-id=\"prev\"{% if currentPage == 1 %} tabindex=\"-1\" aria-disabled=\"true\"{% endif %}>
                                    {% block component_pagination_prev_link_icon %}
                                        {% sw_icon 'arrow-medium-left' style { size: 'fluid', pack: 'solid', ariaHidden: true } %}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% else %}
                            {# @deprecated tag:v6.7.0 - Block and radio input will be removed. Use new anchor element in block `component_pagination_prev_link_element` instead. #}
                            {% block component_pagination_prev_input %}
                                <input type=\"radio\"
                                       {% if currentPage == 1 %}disabled=\"disabled\"{% endif %}
                                       name=\"p\"
                                       id=\"p-prev{{ paginationSuffix }}\"
                                       value=\"{{ currentPage - 1 }}\"
                                       class=\"d-none\"
                                       title=\"pagination\">
                            {% endblock %}

                            {# @deprecated tag:v6.7.0 - Label element will be replaced by anchor element. Use block `component_pagination_prev_link_element` instead. #}
                            {% block component_pagination_prev_label %}
                                <label class=\"page-link\" for=\"p-prev{{ paginationSuffix }}\">
                                    {# @deprecated tag:v6.7.0 - Label element will be replaced by anchor element. Use block `component_pagination_prev_link_element` instead. #}
                                    {% block component_pagination_prev_link %}
                                        {# @deprecated tag:v6.7.0 - Label element will be replaced by anchor element. Use block `component_pagination_prev_link_icon` instead. #}
                                        {% block component_pagination_prev_icon %}
                                            {% sw_icon 'arrow-medium-left' style {size: 'fluid', pack: 'solid'} %}
                                        {% endblock %}
                                    {% endblock %}
                                </label>
                            {% endblock %}
                        {% endif %}
                    </li>
                {% endblock %}

                {% block component_pagination_loop %}
                    {% set start = currentPage - 2 %}
                    {% if start <= 0 %}
                        {% set start = currentPage - 1 %}
                        {% if start <= 0 %}
                            {% set start = currentPage %}
                        {% endif %}
                    {% endif %}

                    {% set end = start + 4 %}

                    {% if end > totalPages %}
                        {% set end = totalPages %}
                    {% endif %}

                    {% for page in start..end %}

                        {% set isActive = (currentPage == page) %}

                        {% block component_pagination_item %}
                            <li class=\"page-item{% if isActive %} active{% endif %}\"{% if isActive %} aria-current=\"page\"{% endif %}>
                                {# @deprecated tag:v6.7.0 - Pagination items will use anchor elements instead of radio inputs and labels. #}
                                {% if feature('ACCESSIBILITY_TWEAKS') %}
                                    {% block component_pagination_item_link_element %}
                                        <a href=\"{{ href ? '?' ~ pageParameter ~ '=' ~ page ~ searchQuery : '#' }}\" class=\"page-link\" data-page=\"{{ page }}\" data-focus-id=\"{{ page }}\">
                                            {% block component_pagination_item_link_text %}
                                                <span class=\"visually-hidden\">{{ 'general.pagination.page'|trans|sw_sanitize }}</span> {{ page }}
                                            {% endblock %}
                                        </a>
                                    {% endblock %}
                                {% else %}
                                    {# @deprecated tag:v6.7.0 - Block and radio input will be removed. Use new anchor element in block `component_pagination_item_link_element` instead. #}
                                    {% block component_pagination_item_input %}
                                        <input type=\"radio\"
                                               name=\"p\"
                                               id=\"p{{ page }}{{ paginationSuffix }}\"
                                               value=\"{{ page }}\"
                                               class=\"d-none\"
                                               title=\"pagination\"
                                               {% if isActive %}checked=\"checked\"{% endif %}>
                                    {% endblock %}

                                    {# @deprecated tag:v6.7.0 - Label element will be replaced by anchor element. Use block `component_pagination_item_link_element` instead. #}
                                    {% block component_pagination_item_label %}
                                        <label class=\"page-link\"
                                               for=\"p{{ page }}{{ paginationSuffix }}\">
                                            {# @deprecated tag:v6.7.0 - Label element will be replaced by anchor element. Use block `component_pagination_item_link_element` instead. #}
                                            {% block component_pagination_item_link %}
                                                {# @deprecated tag:v6.7.0 - Label element will be replaced by anchor element. Use block `component_pagination_item_link_text` instead. #}
                                                {% block component_pagination_item_text %}
                                                    {{ page }}
                                                {% endblock %}
                                            {% endblock %}
                                        </label>
                                    {% endblock %}
                                {% endif %}
                            </li>
                        {% endblock %}
                    {% endfor %}
                {% endblock %}

                {% block component_pagination_next %}
                    <li class=\"page-item page-next{% if currentPage == totalPages %} disabled{% endif %}\">
                        {# @deprecated tag:v6.7.0 - Pagination items will use anchor elements instead of radio inputs and labels. #}
                        {% if feature('ACCESSIBILITY_TWEAKS') %}
                            {% block component_pagination_next_link_element %}
                                <a href=\"{{ href ? '?' ~ pageParameter ~ '=' ~ (currentPage + 1) ~ searchQuery : '#' }}\" class=\"page-link\" data-page=\"{{ currentPage + 1 }}\" aria-label=\"{{ 'general.pagination.next'|trans|striptags }}\" data-focus-id=\"next\"{% if currentPage == totalPages %} tabindex=\"-1\" aria-disabled=\"true\"{% endif %}>
                                    {% block component_pagination_next_link_icon %}
                                        {% sw_icon 'arrow-medium-right' style { size: 'fluid', pack: 'solid', ariaHidden: true } %}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% else %}
                            {# @deprecated tag:v6.7.0 - Block and radio input will be removed. Use new anchor element in block `component_pagination_next_link_element` instead. #}
                            {% block component_pagination_next_input %}
                                <input type=\"radio\"
                                       {% if currentPage == totalPages %}disabled=\"disabled\"{% endif %}
                                       name=\"p\"
                                       id=\"p-next{{ paginationSuffix }}\"
                                       value=\"{{ currentPage + 1 }}\"
                                       class=\"d-none\"
                                       title=\"pagination\">
                            {% endblock %}

                            {# @deprecated tag:v6.7.0 - Label element will be replaced by anchor element. Use block `component_pagination_next_link_element` instead. #}
                            {% block component_pagination_next_label %}
                                <label class=\"page-link\" for=\"p-next{{ paginationSuffix }}\">
                                    {# @deprecated tag:v6.7.0 - Label element will be replaced by anchor element. Use block `component_pagination_next_link_element` instead. #}
                                    {% block component_pagination_next_link %}
                                        {# @deprecated tag:v6.7.0 - Label element will be replaced by anchor element. Use block `component_pagination_next_link_icon` instead. #}
                                        {% block component_pagination_next_icon %}
                                            {% sw_icon 'arrow-medium-right' style { size: 'fluid', pack: 'solid'} %}
                                        {% endblock %}
                                    {% endblock %}
                                </label>
                            {% endblock %}
                        {% endif %}
                    </li>
                {% endblock %}

                {% block component_pagination_last %}
                    <li class=\"page-item page-last{% if currentPage == totalPages %} disabled{% endif %}\">
                        {# @deprecated tag:v6.7.0 - Pagination items will use anchor elements instead of radio inputs and labels. #}
                        {% if feature('ACCESSIBILITY_TWEAKS') %}
                            {% block component_pagination_last_link_element %}
                                <a href=\"{{ href ? '?' ~ pageParameter ~ '=' ~ totalPages ~ searchQuery : '#' }}\" class=\"page-link\" data-page=\"{{ totalPages }}\" aria-label=\"{{ 'general.pagination.last'|trans|striptags }}\" data-focus-id=\"last\"{% if currentPage == totalPages %} tabindex=\"-1\" aria-disabled=\"true\"{% endif %}>
                                    {% block component_pagination_last_link_icon %}
                                        {% sw_icon 'arrow-medium-double-right' style { size: 'fluid', pack: 'solid', ariaHidden: true } %}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% else %}
                            {# @deprecated tag:v6.7.0 - Block and radio input will be removed. Use new anchor element in block `component_pagination_last_link_element` instead. #}
                            {% block component_pagination_last_input %}
                                <input type=\"radio\"
                                       {% if currentPage == totalPages %}disabled=\"disabled\"{% endif %}
                                       name=\"p\"
                                       id=\"p-last{{ paginationSuffix }}\"
                                       value=\"{{ totalPages }}\"
                                       class=\"d-none\"
                                       title=\"pagination\">
                            {% endblock %}

                            {# @deprecated tag:v6.7.0 - Label element will be replaced by anchor element. Use block `component_pagination_last_link_element` instead. #}
                            {% block component_pagination_last_label %}
                                <label class=\"page-link\" for=\"p-last{{ paginationSuffix }}\">
                                    {# @deprecated tag:v6.7.0 - Label element will be replaced by anchor element. Use block `component_pagination_last_link_element` instead. #}
                                    {% block component_pagination_last_link %}
                                        {# @deprecated tag:v6.7.0 - Label element will be replaced by anchor element. Use block `component_pagination_last_link_icon` instead. #}
                                        {% block component_pagination_last_icon %}
                                            {% sw_icon 'arrow-medium-double-right' style {
                                                size: 'fluid',
                                                pack: 'solid'
                                            } %}
                                        {% endblock %}
                                    {% endblock %}
                                </label>
                            {% endblock %}
                        {% endif %}
                    </li>
                {% endblock %}
            </ul>
        {% endblock %}
        </nav>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/component/pagination.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/component/pagination.html.twig");
    }
}
