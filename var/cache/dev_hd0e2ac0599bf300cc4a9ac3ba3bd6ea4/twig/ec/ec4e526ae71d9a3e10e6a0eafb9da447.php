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

/* @Storefront/storefront/layout/header/header.html.twig */
class __TwigTemplate_62d59571fdb0a8a65d1160e0e949a3f7 extends Template
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
            'layout_header' => [$this, 'block_layout_header'],
            'layout_top_bar' => [$this, 'block_layout_top_bar'],
            'layout_header_navigation' => [$this, 'block_layout_header_navigation'],
            'layout_header_logo' => [$this, 'block_layout_header_logo'],
            'layout_header_search' => [$this, 'block_layout_header_search'],
            'layout_header_navigation_toggle_tablet' => [$this, 'block_layout_header_navigation_toggle_tablet'],
            'layout_header_navigation_toggle_tablet_button' => [$this, 'block_layout_header_navigation_toggle_tablet_button'],
            'layout_header_navigation_toggle_tablet_button_icon' => [$this, 'block_layout_header_navigation_toggle_tablet_button_icon'],
            'layout_header_actions' => [$this, 'block_layout_header_actions'],
            'layout_header_navigation_toggle' => [$this, 'block_layout_header_navigation_toggle'],
            'layout_header_navigation_toggle_button' => [$this, 'block_layout_header_navigation_toggle_button'],
            'layout_header_navigation_toggle_button_icon' => [$this, 'block_layout_header_navigation_toggle_button_icon'],
            'layout_header_search_toggle' => [$this, 'block_layout_header_search_toggle'],
            'layout_header_actions_wishlist' => [$this, 'block_layout_header_actions_wishlist'],
            'layout_header_actions_account' => [$this, 'block_layout_header_actions_account'],
            'layout_header_actions_cart' => [$this, 'block_layout_header_actions_cart'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/header.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('layout_header', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header"));

        // line 2
        yield "    ";
        yield from $this->unwrap()->yieldBlock('layout_top_bar', $context, $blocks);
        // line 5
        yield "
    ";
        // line 6
        yield from $this->unwrap()->yieldBlock('layout_header_navigation', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_top_bar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_top_bar"));

        // line 3
        yield "        ";
        yield from $this->loadTemplate("@Storefront/storefront/layout/header/top-bar.html.twig", "@Storefront/storefront/layout/header/header.html.twig", 3)->unwrap()->yield($context);
        // line 4
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation"));

        // line 7
        yield "        <div class=\"row align-items-center header-row\">
            ";
        // line 8
        yield from $this->unwrap()->yieldBlock('layout_header_logo', $context, $blocks);
        // line 13
        yield "
            ";
        // line 14
        yield from $this->unwrap()->yieldBlock('layout_header_search', $context, $blocks);
        // line 41
        yield "
            ";
        // line 42
        yield from $this->unwrap()->yieldBlock('layout_header_actions', $context, $blocks);
        // line 122
        yield "        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_logo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_logo"));

        // line 9
        yield "                <div class=\"col-12 col-lg-auto header-logo-col pb-sm-2 my-3 m-lg-0\">
                    ";
        // line 10
        yield from $this->loadTemplate("@Storefront/storefront/layout/header/logo.html.twig", "@Storefront/storefront/layout/header/header.html.twig", 10)->unwrap()->yield($context);
        // line 11
        yield "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_search(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search"));

        // line 15
        yield "                <div class=\"col-12 order-2 col-sm order-sm-1 header-search-col\">
                    <div class=\"row\">
                        <div class=\"col-sm-auto d-none d-sm-block d-lg-none\">
                            ";
        // line 18
        yield from $this->unwrap()->yieldBlock('layout_header_navigation_toggle_tablet', $context, $blocks);
        // line 34
        yield "                        </div>
                        <div class=\"col\">
                            ";
        // line 36
        yield from $this->loadTemplate("@Storefront/storefront/layout/header/search.html.twig", "@Storefront/storefront/layout/header/header.html.twig", 36)->unwrap()->yield($context);
        // line 37
        yield "                        </div>
                    </div>
                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_navigation_toggle_tablet(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation_toggle_tablet"));

        // line 19
        yield "                                <div class=\"nav-main-toggle\">
                                    ";
        // line 20
        yield from $this->unwrap()->yieldBlock('layout_header_navigation_toggle_tablet_button', $context, $blocks);
        // line 32
        yield "                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_navigation_toggle_tablet_button(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation_toggle_tablet_button"));

        // line 21
        yield "                                        <button
                                            class=\"btn nav-main-toggle-btn header-actions-btn\"
                                            type=\"button\"
                                            data-off-canvas-menu=\"true\"
                                            aria-label=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.menuLink")), "html", null, true);
        yield "\"
                                        >
                                            ";
        // line 27
        yield from $this->unwrap()->yieldBlock('layout_header_navigation_toggle_tablet_button_icon', $context, $blocks);
        // line 30
        yield "                                        </button>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_navigation_toggle_tablet_button_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation_toggle_tablet_button_icon"));

        // line 28
        yield "                                                ";
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/header.html.twig", 28);
        })())->unwrap()->yield(CoreExtension::merge($context, ["name" => "stack"]));
        // line 29
        yield "                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions"));

        // line 43
        yield "                <div class=\"col-12 order-1 col-sm-auto order-sm-2 header-actions-col\">
                    <div class=\"row g-0\">
                        ";
        // line 45
        yield from $this->unwrap()->yieldBlock('layout_header_navigation_toggle', $context, $blocks);
        // line 63
        yield "
                        ";
        // line 64
        yield from $this->unwrap()->yieldBlock('layout_header_search_toggle', $context, $blocks);
        // line 79
        yield "
                        ";
        // line 80
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.cart.wishlistEnabled")) {
            // line 81
            yield "                            ";
            yield from $this->unwrap()->yieldBlock('layout_header_actions_wishlist', $context, $blocks);
            // line 93
            yield "                        ";
        }
        // line 94
        yield "
                        ";
        // line 95
        yield from $this->unwrap()->yieldBlock('layout_header_actions_account', $context, $blocks);
        // line 102
        yield "
                        ";
        // line 103
        yield from $this->unwrap()->yieldBlock('layout_header_actions_cart', $context, $blocks);
        // line 119
        yield "                    </div>
                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_navigation_toggle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation_toggle"));

        // line 46
        yield "                            <div class=\"col d-sm-none\">
                                <div class=\"menu-button\">
                                    ";
        // line 48
        yield from $this->unwrap()->yieldBlock('layout_header_navigation_toggle_button', $context, $blocks);
        // line 60
        yield "                                </div>
                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_navigation_toggle_button(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation_toggle_button"));

        // line 49
        yield "                                        <button
                                            class=\"btn nav-main-toggle-btn header-actions-btn\"
                                            type=\"button\"
                                            data-off-canvas-menu=\"true\"
                                            aria-label=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.menuLink")), "html", null, true);
        yield "\"
                                        >
                                            ";
        // line 55
        yield from $this->unwrap()->yieldBlock('layout_header_navigation_toggle_button_icon', $context, $blocks);
        // line 58
        yield "                                        </button>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_navigation_toggle_button_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_navigation_toggle_button_icon"));

        // line 56
        yield "                                                ";
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/header.html.twig", 56);
        })())->unwrap()->yield(CoreExtension::merge($context, ["name" => "stack"]));
        // line 57
        yield "                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_search_toggle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search_toggle"));

        // line 65
        yield "                            <div class=\"col-auto d-sm-none\">
                                <div class=\"search-toggle\">
                                    <button class=\"btn header-actions-btn search-toggle-btn js-search-toggle-btn collapsed\"
                                            type=\"button\"
                                            data-bs-toggle=\"collapse\"
                                            data-bs-target=\"#searchCollapse\"
                                            aria-expanded=\"false\"
                                            aria-controls=\"searchCollapse\"
                                            aria-label=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchButton")), "html", null, true);
        yield "\">
                                        ";
        // line 74
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/header.html.twig", 74);
        })())->unwrap()->yield(CoreExtension::merge($context, ["name" => "search"]));
        // line 75
        yield "                                    </button>
                                </div>
                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_actions_wishlist(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_wishlist"));

        // line 82
        yield "                                <div class=\"col-auto\">
                                    <div class=\"header-wishlist\">
                                        <a class=\"btn header-wishlist-btn header-actions-btn\"
                                           href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.wishlist.page");
        yield "\"
                                           title=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.wishlist")), "html", null, true);
        yield "\"
                                           aria-label=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.wishlist")), "html", null, true);
        yield "\">
                                            ";
        // line 88
        yield from $this->loadTemplate("@Storefront/storefront/layout/header/actions/wishlist-widget.html.twig", "@Storefront/storefront/layout/header/header.html.twig", 88)->unwrap()->yield($context);
        // line 89
        yield "                                        </a>
                                    </div>
                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 95
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_actions_account(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_account"));

        // line 96
        yield "                            <div class=\"col-auto\">
                                <div class=\"account-menu\">
                                    ";
        // line 98
        yield from $this->loadTemplate("@Storefront/storefront/layout/header/actions/account-widget.html.twig", "@Storefront/storefront/layout/header/header.html.twig", 98)->unwrap()->yield($context);
        // line 99
        yield "                                </div>
                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 103
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_actions_cart(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_cart"));

        // line 104
        yield "                            <div class=\"col-auto\">
                                <div
                                    class=\"header-cart\"
                                    data-off-canvas-cart=\"true\"
                                >
                                    <a class=\"btn header-cart-btn header-actions-btn\"
                                       href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.cart.page");
        yield "\"
                                       data-cart-widget=\"true\"
                                       title=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartTitle")), "html", null, true);
        yield "\"
                                       aria-label=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartTitle")), "html", null, true);
        yield "\">
                                        ";
        // line 114
        yield from $this->loadTemplate("@Storefront/storefront/layout/header/actions/cart-widget.html.twig", "@Storefront/storefront/layout/header/header.html.twig", 114)->unwrap()->yield($context);
        // line 115
        yield "                                    </a>
                                </div>
                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/layout/header/header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  567 => 115,  565 => 114,  561 => 113,  557 => 112,  552 => 110,  544 => 104,  534 => 103,  524 => 99,  522 => 98,  518 => 96,  508 => 95,  497 => 89,  495 => 88,  491 => 87,  487 => 86,  483 => 85,  478 => 82,  468 => 81,  457 => 75,  449 => 74,  445 => 73,  435 => 65,  425 => 64,  417 => 57,  408 => 56,  398 => 55,  389 => 58,  387 => 55,  382 => 53,  376 => 49,  366 => 48,  356 => 60,  354 => 48,  350 => 46,  340 => 45,  330 => 119,  328 => 103,  325 => 102,  323 => 95,  320 => 94,  317 => 93,  314 => 81,  312 => 80,  309 => 79,  307 => 64,  304 => 63,  302 => 45,  298 => 43,  288 => 42,  280 => 29,  271 => 28,  261 => 27,  252 => 30,  250 => 27,  245 => 25,  239 => 21,  229 => 20,  220 => 32,  218 => 20,  215 => 19,  205 => 18,  194 => 37,  192 => 36,  188 => 34,  186 => 18,  181 => 15,  171 => 14,  162 => 11,  160 => 10,  157 => 9,  147 => 8,  138 => 122,  136 => 42,  133 => 41,  131 => 14,  128 => 13,  126 => 8,  123 => 7,  113 => 6,  105 => 4,  102 => 3,  92 => 2,  84 => 6,  81 => 5,  78 => 2,  61 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block layout_header %}
    {% block layout_top_bar %}
        {% sw_include '@Storefront/storefront/layout/header/top-bar.html.twig' %}
    {% endblock %}

    {% block layout_header_navigation %}
        <div class=\"row align-items-center header-row\">
            {% block layout_header_logo %}
                <div class=\"col-12 col-lg-auto header-logo-col pb-sm-2 my-3 m-lg-0\">
                    {% sw_include '@Storefront/storefront/layout/header/logo.html.twig' %}
                </div>
            {% endblock %}

            {% block layout_header_search %}
                <div class=\"col-12 order-2 col-sm order-sm-1 header-search-col\">
                    <div class=\"row\">
                        <div class=\"col-sm-auto d-none d-sm-block d-lg-none\">
                            {% block layout_header_navigation_toggle_tablet %}
                                <div class=\"nav-main-toggle\">
                                    {% block layout_header_navigation_toggle_tablet_button %}
                                        <button
                                            class=\"btn nav-main-toggle-btn header-actions-btn\"
                                            type=\"button\"
                                            data-off-canvas-menu=\"true\"
                                            aria-label=\"{{ 'general.menuLink'|trans|striptags }}\"
                                        >
                                            {% block layout_header_navigation_toggle_tablet_button_icon %}
                                                {% sw_icon 'stack' %}
                                            {% endblock %}
                                        </button>
                                    {% endblock %}
                                </div>
                            {% endblock %}
                        </div>
                        <div class=\"col\">
                            {% sw_include '@Storefront/storefront/layout/header/search.html.twig' %}
                        </div>
                    </div>
                </div>
            {% endblock %}

            {% block layout_header_actions %}
                <div class=\"col-12 order-1 col-sm-auto order-sm-2 header-actions-col\">
                    <div class=\"row g-0\">
                        {% block layout_header_navigation_toggle %}
                            <div class=\"col d-sm-none\">
                                <div class=\"menu-button\">
                                    {% block layout_header_navigation_toggle_button %}
                                        <button
                                            class=\"btn nav-main-toggle-btn header-actions-btn\"
                                            type=\"button\"
                                            data-off-canvas-menu=\"true\"
                                            aria-label=\"{{ 'general.menuLink'|trans|striptags }}\"
                                        >
                                            {% block layout_header_navigation_toggle_button_icon %}
                                                {% sw_icon 'stack' %}
                                            {% endblock %}
                                        </button>
                                    {% endblock %}
                                </div>
                            </div>
                        {% endblock %}

                        {% block layout_header_search_toggle %}
                            <div class=\"col-auto d-sm-none\">
                                <div class=\"search-toggle\">
                                    <button class=\"btn header-actions-btn search-toggle-btn js-search-toggle-btn collapsed\"
                                            type=\"button\"
                                            data-bs-toggle=\"collapse\"
                                            data-bs-target=\"#searchCollapse\"
                                            aria-expanded=\"false\"
                                            aria-controls=\"searchCollapse\"
                                            aria-label=\"{{ 'header.searchButton'|trans|striptags }}\">
                                        {% sw_icon 'search' %}
                                    </button>
                                </div>
                            </div>
                        {% endblock %}

                        {% if config('core.cart.wishlistEnabled') %}
                            {% block layout_header_actions_wishlist %}
                                <div class=\"col-auto\">
                                    <div class=\"header-wishlist\">
                                        <a class=\"btn header-wishlist-btn header-actions-btn\"
                                           href=\"{{ path('frontend.wishlist.page') }}\"
                                           title=\"{{ 'header.wishlist'|trans|striptags }}\"
                                           aria-label=\"{{ 'header.wishlist'|trans|striptags }}\">
                                            {% sw_include '@Storefront/storefront/layout/header/actions/wishlist-widget.html.twig' %}
                                        </a>
                                    </div>
                                </div>
                            {% endblock %}
                        {% endif %}

                        {% block layout_header_actions_account %}
                            <div class=\"col-auto\">
                                <div class=\"account-menu\">
                                    {% sw_include '@Storefront/storefront/layout/header/actions/account-widget.html.twig' %}
                                </div>
                            </div>
                        {% endblock %}

                        {% block layout_header_actions_cart %}
                            <div class=\"col-auto\">
                                <div
                                    class=\"header-cart\"
                                    data-off-canvas-cart=\"true\"
                                >
                                    <a class=\"btn header-cart-btn header-actions-btn\"
                                       href=\"{{ path('frontend.checkout.cart.page') }}\"
                                       data-cart-widget=\"true\"
                                       title=\"{{ 'checkout.cartTitle'|trans|striptags }}\"
                                       aria-label=\"{{ 'checkout.cartTitle'|trans|striptags }}\">
                                        {% sw_include '@Storefront/storefront/layout/header/actions/cart-widget.html.twig' %}
                                    </a>
                                </div>
                            </div>
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/layout/header/header.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/layout/header/header.html.twig");
    }
}
