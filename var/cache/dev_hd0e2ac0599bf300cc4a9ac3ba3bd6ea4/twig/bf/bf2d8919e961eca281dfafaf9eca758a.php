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

/* @Storefront/storefront/layout/navigation/navigation.html.twig */
class __TwigTemplate_ea84f63fb0ba9d1c30e6622bb31dee49 extends Template
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
            'layout_main_navigation' => [$this, 'block_layout_main_navigation'],
            'layout_main_navigation_navbar' => [$this, 'block_layout_main_navigation_navbar'],
            'layout_main_navigation_menu' => [$this, 'block_layout_main_navigation_menu'],
            'layout_main_navigation_menu_home' => [$this, 'block_layout_main_navigation_menu_home'],
            'layout_main_navigation_menu_items' => [$this, 'block_layout_main_navigation_menu_items'],
            'layout_main_navigation_menu_item' => [$this, 'block_layout_main_navigation_menu_item'],
            'layout_main_navigation_menu_flyout_wrapper' => [$this, 'block_layout_main_navigation_menu_flyout_wrapper'],
            'layout_main_navigation_menu_flyout_container' => [$this, 'block_layout_main_navigation_menu_flyout_container'],
            'layout_main_navigation_menu_flyouts' => [$this, 'block_layout_main_navigation_menu_flyouts'],
            'layout_main_navigation_menu_flyout' => [$this, 'block_layout_main_navigation_menu_flyout'],
            'layout_main_navigation_menu_flyout_include' => [$this, 'block_layout_main_navigation_menu_flyout_include'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/navigation/navigation.html.twig"));

        // line 2
        if (( !array_key_exists("header", $context) && array_key_exists("page", $context))) {
            // line 3
            yield "    ";
            $context["header"] = SwTwigFunction::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 3);
        }
        // line 5
        yield "
";
        // line 6
        yield from $this->unwrap()->yieldBlock('layout_main_navigation', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_main_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation"));

        // line 7
        yield "    <div class=\"main-navigation\"
         id=\"mainNavigation\"
         data-flyout-menu=\"true\">
        ";
        // line 10
        yield from $this->unwrap()->yieldBlock('layout_main_navigation_navbar', $context, $blocks);
        // line 129
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_main_navigation_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_navbar"));

        // line 11
        yield "            <div class=\"container\">
                ";
        // line 12
        yield from $this->unwrap()->yieldBlock('layout_main_navigation_menu', $context, $blocks);
        // line 88
        yield "
                ";
        // line 89
        if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) {
            // line 90
            yield "                ";
            yield from $this->unwrap()->yieldBlock('layout_main_navigation_menu_flyout_wrapper', $context, $blocks);
            // line 126
            yield "                ";
        }
        // line 127
        yield "            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_main_navigation_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu"));

        // line 13
        yield "                    <nav class=\"nav main-navigation-menu\"
                        id=\"main-navigation-menu\"
                        aria-label=\"";
        // line 15
        yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.navigationAriaLabel"));
        yield "\"
                        itemscope=\"itemscope\"
                        itemtype=\"https://schema.org/SiteNavigationElement\">
                        ";
        // line 18
        $context["homeLabel"] = ((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, true, false, 18), "translated", [], "any", false, true, false, 18), "homeName", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::default(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 18), "translated", [], "any", false, false, false, 18), "homeName", [], "any", false, false, false, 18), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.homeLink"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.homeLink")));
        // line 19
        yield "
                        ";
        // line 20
        yield from $this->unwrap()->yieldBlock('layout_main_navigation_menu_home', $context, $blocks);
        // line 32
        yield "
                        ";
        // line 33
        yield from $this->unwrap()->yieldBlock('layout_main_navigation_menu_items', $context, $blocks);
        // line 86
        yield "                    </nav>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_main_navigation_menu_home(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_home"));

        // line 21
        yield "                            ";
        if (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 21), "translated", [], "any", false, false, false, 21), "homeEnabled", [], "any", false, false, false, 21)) {
            // line 22
            yield "                                <a class=\"nav-link main-navigation-link nav-item-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 22), "navigationCategoryId", [], "any", false, false, false, 22), "html", null, true);
            yield " ";
            if ((($context["controllerAction"] ?? null) === "home")) {
                yield " active";
            }
            yield " home-link\"
                                    href=\"";
            // line 23
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.home.page");
            yield "\"
                                    itemprop=\"url\"
                                    title=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(($context["homeLabel"] ?? null)), "html", null, true);
            yield "\">
                                    <div class=\"main-navigation-link-text\">
                                        <span itemprop=\"name\">";
            // line 27
            yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize(($context["homeLabel"] ?? null));
            yield "</span>
                                    </div>
                                </a>
                            ";
        }
        // line 31
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_main_navigation_menu_items(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_items"));

        // line 34
        yield "                            ";
        $context["activePath"] = (("|" . Twig\Extension\CoreExtension::join(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["shopware"] ?? null), "navigation", [], "any", false, false, false, 34), "pathIdList", [], "any", false, false, false, 34), "|")) . "|");
        // line 35
        yield "
                            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["header"] ?? null), "navigation", [], "any", false, false, false, 36), "tree", [], "any", false, false, false, 36));
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
        foreach ($context['_seq'] as $context["_key"] => $context["treeItem"]) {
            // line 37
            yield "                                ";
            $context["category"] = SwTwigFunction::getAttribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 37);
            // line 38
            yield "                                ";
            $context["name"] = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38);
            // line 39
            yield "
                                ";
            // line 40
            yield from $this->unwrap()->yieldBlock('layout_main_navigation_menu_item', $context, $blocks);
            // line 84
            yield "                            ";
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
        unset($context['_seq'], $context['_key'], $context['treeItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_main_navigation_menu_item(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_item"));

        // line 41
        yield "                                    ";
        if ((SwTwigFunction::getAttribute($this->env, $this->source, ($context["category"] ?? null), "type", [], "any", false, false, false, 41) == "folder")) {
            // line 42
            yield "                                        <div class=\"nav-link main-navigation-link nav-item-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 42), "html", null, true);
            yield "\"
                                            ";
            // line 43
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), SwTwigFunction::getAttribute($this->env, $this->source, ($context["treeItem"] ?? null), "children", [], "any", false, false, false, 43)) > 0)) {
                // line 44
                yield "                                                data-flyout-menu-trigger=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 44), "html", null, true);
                yield "\"
                                            ";
            }
            // line 46
            yield "                                              title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\">
                                            <div class=\"main-navigation-link-text\">
                                                <span itemprop=\"name\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "</span>
                                            </div>
                                        </div>
                                    ";
        } else {
            // line 52
            yield "                                        ";
            $context["active"] = "";
            // line 53
            yield "                                        ";
            if (((SwTwigFunction::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 53) == SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["shopware"] ?? null), "navigation", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53)) || CoreExtension::inFilter(SwTwigFunction::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 53), ($context["activePath"] ?? null)))) {
                // line 54
                yield "                                            ";
                $context["active"] = "active";
                // line 55
                yield "                                        ";
            }
            // line 56
            yield "
                                        <a class=\"nav-link main-navigation-link nav-item-";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 57), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
            yield "\"
                                           href=\"";
            // line 58
            yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["category"] ?? null));
            yield "\"
                                           itemprop=\"url\"
                                           ";
            // line 60
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), SwTwigFunction::getAttribute($this->env, $this->source, ($context["treeItem"] ?? null), "children", [], "any", false, false, false, 60)) > 0)) {
                yield "data-flyout-menu-trigger=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 60), "html", null, true);
                yield "\"";
            }
            // line 61
            yield "                                           ";
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["category"] ?? null))) {
                yield "target=\"_blank\"";
            }
            // line 62
            yield "                                           title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\">
                                            <div class=\"main-navigation-link-text\">
                                                <span itemprop=\"name\">";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "</span>
                                            </div>
                                        </a>
                                        ";
            // line 67
            if (($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS") && (Twig\Extension\CoreExtension::length($this->env->getCharset(), SwTwigFunction::getAttribute($this->env, $this->source, ($context["treeItem"] ?? null), "children", [], "any", false, false, false, 67)) > 0))) {
                // line 68
                yield "                                            <div class=\"navigation-flyouts position-absolute w-100 start-0\">
                                                <div class=\"navigation-flyout\"
                                                     data-flyout-menu-id=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["treeItem"] ?? null), "category", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70), "html", null, true);
                yield "\">
                                                    <div class=\"container\">
                                                            ";
                // line 72
                yield from $this->loadTemplate("@Storefront/storefront/layout/navigation/flyout.html.twig", "@Storefront/storefront/layout/navigation/navigation.html.twig", 72)->unwrap()->yield(CoreExtension::toArray(["themeIconConfig" =>                 // line 73
($context["themeIconConfig"] ?? null), "navigationTree" =>                 // line 74
($context["treeItem"] ?? null), "level" => (                // line 75
($context["level"] ?? null) + 1), "page" =>                 // line 76
($context["page"] ?? null)]));
                // line 78
                yield "                                                    </div>
                                                </div>
                                            </div>
                                        ";
            }
            // line 82
            yield "                                    ";
        }
        // line 83
        yield "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_main_navigation_menu_flyout_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyout_wrapper"));

        // line 91
        yield "                    ";
        $context["navigationChildrenCount"] = 0;
        // line 92
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["header"] ?? null), "navigation", [], "any", false, false, false, 92), "tree", [], "any", false, false, false, 92));
        foreach ($context['_seq'] as $context["_key"] => $context["treeItem"]) {
            // line 93
            yield "                        ";
            if ((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 93), "childCount", [], "any", false, false, false, 93) > 0)) {
                // line 94
                yield "                            ";
                $context["navigationChildrenCount"] = (($context["navigationChildrenCount"] ?? null) + 1);
                // line 95
                yield "                        ";
            }
            // line 96
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['treeItem'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "
                    ";
        // line 98
        if ((($context["navigationChildrenCount"] ?? null) > 0)) {
            // line 99
            yield "                        ";
            yield from $this->unwrap()->yieldBlock('layout_main_navigation_menu_flyout_container', $context, $blocks);
            // line 124
            yield "                    ";
        }
        // line 125
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 99
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_main_navigation_menu_flyout_container(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyout_container"));

        // line 100
        yield "                            <div class=\"navigation-flyouts\">
                                ";
        // line 101
        yield from $this->unwrap()->yieldBlock('layout_main_navigation_menu_flyouts', $context, $blocks);
        // line 122
        yield "                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 101
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_main_navigation_menu_flyouts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyouts"));

        // line 102
        yield "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["header"] ?? null), "navigation", [], "any", false, false, false, 102), "tree", [], "any", false, false, false, 102));
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
        foreach ($context['_seq'] as $context["_key"] => $context["treeItem"]) {
            // line 103
            yield "                                        ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), SwTwigFunction::getAttribute($this->env, $this->source, $context["treeItem"], "children", [], "any", false, false, false, 103)) > 0)) {
                // line 104
                yield "                                            ";
                yield from $this->unwrap()->yieldBlock('layout_main_navigation_menu_flyout', $context, $blocks);
                // line 119
                yield "                                        ";
            }
            // line 120
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
        unset($context['_seq'], $context['_key'], $context['treeItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        yield "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 104
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_main_navigation_menu_flyout(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyout"));

        // line 105
        yield "                                                <div class=\"navigation-flyout\"
                                                     data-flyout-menu-id=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["treeItem"] ?? null), "category", [], "any", false, false, false, 106), "id", [], "any", false, false, false, 106), "html", null, true);
        yield "\">
                                                    <div class=\"container\">
                                                        ";
        // line 108
        yield from $this->unwrap()->yieldBlock('layout_main_navigation_menu_flyout_include', $context, $blocks);
        // line 116
        yield "                                                    </div>
                                                </div>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 108
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_main_navigation_menu_flyout_include(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyout_include"));

        // line 109
        yield "                                                            ";
        yield from $this->loadTemplate("@Storefront/storefront/layout/navigation/flyout.html.twig", "@Storefront/storefront/layout/navigation/navigation.html.twig", 109)->unwrap()->yield(CoreExtension::toArray(["themeIconConfig" =>         // line 110
($context["themeIconConfig"] ?? null), "navigationTree" =>         // line 111
($context["treeItem"] ?? null), "level" => (        // line 112
($context["level"] ?? null) + 1), "page" =>         // line 113
($context["page"] ?? null)]));
        // line 115
        yield "                                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/layout/navigation/navigation.html.twig";
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
        return array (  591 => 115,  589 => 113,  588 => 112,  587 => 111,  586 => 110,  584 => 109,  574 => 108,  564 => 116,  562 => 108,  557 => 106,  554 => 105,  544 => 104,  536 => 121,  522 => 120,  519 => 119,  516 => 104,  513 => 103,  495 => 102,  485 => 101,  476 => 122,  474 => 101,  471 => 100,  461 => 99,  453 => 125,  450 => 124,  447 => 99,  445 => 98,  442 => 97,  436 => 96,  433 => 95,  430 => 94,  427 => 93,  422 => 92,  419 => 91,  409 => 90,  401 => 83,  398 => 82,  392 => 78,  390 => 76,  389 => 75,  388 => 74,  387 => 73,  386 => 72,  381 => 70,  377 => 68,  375 => 67,  369 => 64,  363 => 62,  358 => 61,  352 => 60,  347 => 58,  341 => 57,  338 => 56,  335 => 55,  332 => 54,  329 => 53,  326 => 52,  319 => 48,  313 => 46,  307 => 44,  305 => 43,  300 => 42,  297 => 41,  287 => 40,  279 => 85,  265 => 84,  263 => 40,  260 => 39,  257 => 38,  254 => 37,  237 => 36,  234 => 35,  231 => 34,  221 => 33,  213 => 31,  206 => 27,  201 => 25,  196 => 23,  187 => 22,  184 => 21,  174 => 20,  165 => 86,  163 => 33,  160 => 32,  158 => 20,  155 => 19,  153 => 18,  147 => 15,  143 => 13,  133 => 12,  124 => 127,  121 => 126,  118 => 90,  116 => 89,  113 => 88,  111 => 12,  108 => 11,  98 => 10,  89 => 129,  87 => 10,  82 => 7,  65 => 6,  62 => 5,  58 => 3,  56 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @deprecated tag:v6.7.0 - This template will be removed, use src/Storefront/Resources/views/storefront/layout/navbar/navbar.html.twig #}
{% if not header is defined and page is defined %}
    {% set header = page.header %}
{% endif %}

{% block layout_main_navigation %}
    <div class=\"main-navigation\"
         id=\"mainNavigation\"
         data-flyout-menu=\"true\">
        {% block layout_main_navigation_navbar %}
            <div class=\"container\">
                {% block layout_main_navigation_menu %}
                    <nav class=\"nav main-navigation-menu\"
                        id=\"main-navigation-menu\"
                        aria-label=\"{{ 'header.navigationAriaLabel'|trans|sw_sanitize }}\"
                        itemscope=\"itemscope\"
                        itemtype=\"https://schema.org/SiteNavigationElement\">
                        {% set homeLabel = context.salesChannel.translated.homeName|default('general.homeLink'|trans) %}

                        {% block layout_main_navigation_menu_home %}
                            {% if context.salesChannel.translated.homeEnabled %}
                                <a class=\"nav-link main-navigation-link nav-item-{{ context.salesChannel.navigationCategoryId }} {% if controllerAction is same as('home') %} active{% endif %} home-link\"
                                    href=\"{{ path('frontend.home.page') }}\"
                                    itemprop=\"url\"
                                    title=\"{{ homeLabel|striptags }}\">
                                    <div class=\"main-navigation-link-text\">
                                        <span itemprop=\"name\">{{ homeLabel|sw_sanitize }}</span>
                                    </div>
                                </a>
                            {% endif %}
                        {% endblock %}

                        {% block layout_main_navigation_menu_items %}
                            {% set activePath = '|' ~ shopware.navigation.pathIdList|join('|') ~ '|' %}

                            {% for treeItem in header.navigation.tree %}
                                {% set category = treeItem.category %}
                                {% set name = category.translated.name %}

                                {% block layout_main_navigation_menu_item %}
                                    {% if category.type == 'folder' %}
                                        <div class=\"nav-link main-navigation-link nav-item-{{ category.id}}\"
                                            {% if treeItem.children|length > 0 %}
                                                data-flyout-menu-trigger=\"{{ category.id }}\"
                                            {% endif %}
                                              title=\"{{ name }}\">
                                            <div class=\"main-navigation-link-text\">
                                                <span itemprop=\"name\">{{ name }}</span>
                                            </div>
                                        </div>
                                    {% else %}
                                        {% set active = '' %}
                                        {% if category.id == shopware.navigation.id or category.id in activePath %}
                                            {% set active = 'active' %}
                                        {% endif %}

                                        <a class=\"nav-link main-navigation-link nav-item-{{ category.id}} {{ active }}\"
                                           href=\"{{ category_url(category) }}\"
                                           itemprop=\"url\"
                                           {% if treeItem.children|length > 0 %}data-flyout-menu-trigger=\"{{ category.id }}\"{% endif %}
                                           {% if category_linknewtab(category) %}target=\"_blank\"{% endif %}
                                           title=\"{{ name }}\">
                                            <div class=\"main-navigation-link-text\">
                                                <span itemprop=\"name\">{{ name }}</span>
                                            </div>
                                        </a>
                                        {% if feature('ACCESSIBILITY_TWEAKS') and (treeItem.children|length > 0) %}
                                            <div class=\"navigation-flyouts position-absolute w-100 start-0\">
                                                <div class=\"navigation-flyout\"
                                                     data-flyout-menu-id=\"{{ treeItem.category.id }}\">
                                                    <div class=\"container\">
                                                            {% sw_include '@Storefront/storefront/layout/navigation/flyout.html.twig' with {
                                                                themeIconConfig: themeIconConfig,
                                                                navigationTree: treeItem,
                                                                level: level+1,
                                                                page: page
                                                            } only %}
                                                    </div>
                                                </div>
                                            </div>
                                        {% endif %}
                                    {% endif %}
                                {% endblock %}
                            {% endfor %}
                        {% endblock %}
                    </nav>
                {% endblock %}

                {% if not feature('ACCESSIBILITY_TWEAKS') %}
                {% block layout_main_navigation_menu_flyout_wrapper %}
                    {% set navigationChildrenCount = 0 %}
                    {% for treeItem in header.navigation.tree %}
                        {% if treeItem.category.childCount > 0 %}
                            {% set navigationChildrenCount = navigationChildrenCount + 1 %}
                        {% endif %}
                    {% endfor %}

                    {% if navigationChildrenCount > 0 %}
                        {% block layout_main_navigation_menu_flyout_container %}
                            <div class=\"navigation-flyouts\">
                                {% block layout_main_navigation_menu_flyouts %}
                                    {% for treeItem in header.navigation.tree %}
                                        {% if treeItem.children|length > 0 %}
                                            {% block layout_main_navigation_menu_flyout %}
                                                <div class=\"navigation-flyout\"
                                                     data-flyout-menu-id=\"{{ treeItem.category.id }}\">
                                                    <div class=\"container\">
                                                        {% block layout_main_navigation_menu_flyout_include %}
                                                            {% sw_include '@Storefront/storefront/layout/navigation/flyout.html.twig' with {
                                                                themeIconConfig: themeIconConfig,
                                                                navigationTree: treeItem,
                                                                level: level+1,
                                                                page: page
                                                            } only %}
                                                        {% endblock %}
                                                    </div>
                                                </div>
                                            {% endblock %}
                                        {% endif %}
                                    {% endfor %}
                                {% endblock %}
                            </div>
                        {% endblock %}
                    {% endif %}
                {% endblock %}
                {% endif %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/layout/navigation/navigation.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/navigation.html.twig");
    }
}
