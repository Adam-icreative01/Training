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

/* @Storefront/storefront/base.html.twig */
class __TwigTemplate_fea833ec99585ddd544b2fb1188e8aca extends Template
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
            'base_doctype' => [$this, 'block_base_doctype'],
            'base_html' => [$this, 'block_base_html'],
            'base_head' => [$this, 'block_base_head'],
            'base_body' => [$this, 'block_base_body'],
            'base_body_classes' => [$this, 'block_base_body_classes'],
            'base_body_skip_to_content' => [$this, 'block_base_body_skip_to_content'],
            'base_body_inner' => [$this, 'block_base_body_inner'],
            'base_noscript' => [$this, 'block_base_noscript'],
            'base_navigation_styling' => [$this, 'block_base_navigation_styling'],
            'base_header' => [$this, 'block_base_header'],
            'base_header_inner' => [$this, 'block_base_header_inner'],
            'base_navigation' => [$this, 'block_base_navigation'],
            'base_navigation_inner' => [$this, 'block_base_navigation_inner'],
            'base_offcanvas_navigation' => [$this, 'block_base_offcanvas_navigation'],
            'base_offcanvas_navigation_inner' => [$this, 'block_base_offcanvas_navigation_inner'],
            'base_main' => [$this, 'block_base_main'],
            'base_flashbags' => [$this, 'block_base_flashbags'],
            'base_main_inner' => [$this, 'block_base_main_inner'],
            'base_main_container' => [$this, 'block_base_main_container'],
            'base_breadcrumb' => [$this, 'block_base_breadcrumb'],
            'base_content' => [$this, 'block_base_content'],
            'base_footer' => [$this, 'block_base_footer'],
            'base_footer_inner' => [$this, 'block_base_footer_inner'],
            'base_scroll_up' => [$this, 'block_base_scroll_up'],
            'base_cookie_permission' => [$this, 'block_base_cookie_permission'],
            'base_pseudo_modal' => [$this, 'block_base_pseudo_modal'],
            'base_speculation_rules' => [$this, 'block_base_speculation_rules'],
            'base_body_script' => [$this, 'block_base_body_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/base.html.twig"));

        // line 2
        yield "
";
        // line 4
        $context["isHMRMode"] = (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 4), "headers", [], "any", false, false, false, 4), "get", ["hot-reload-mode"], "method", false, false, false, 4) && (SwTwigFunction::getAttribute($this->env, $this->source, ($context["app"] ?? null), "environment", [], "any", false, false, false, 4) == "dev"));
        // line 5
        yield "
";
        // line 6
        yield from $this->unwrap()->yieldBlock('base_doctype', $context, $blocks);
        // line 9
        yield "
";
        // line 10
        yield from $this->unwrap()->yieldBlock('base_html', $context, $blocks);
        // line 15
        yield "
";
        // line 16
        yield from $this->unwrap()->yieldBlock('base_head', $context, $blocks);
        // line 19
        yield "
";
        // line 20
        yield from $this->unwrap()->yieldBlock('base_body', $context, $blocks);
        // line 157
        yield "</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_doctype(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_doctype"));

        // line 7
        yield "<!DOCTYPE html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_html(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_html"));

        // line 11
        yield "<html lang=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "saleschannel", [], "any", false, false, false, 11), "languages", [], "any", false, false, false, 11), "first", [], "any", false, false, false, 11), "translationCode", [], "any", false, false, false, 11), "code", [], "any", false, false, false, 11), "html", null, true);
        yield "\"
      itemscope=\"itemscope\"
      itemtype=\"https://schema.org/WebPage\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_head"));

        // line 17
        yield "    ";
        yield from $this->loadTemplate("@Storefront/storefront/layout/meta.html.twig", "@Storefront/storefront/base.html.twig", 17)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_body"));

        // line 21
        yield "    <body class=\"";
        yield from $this->unwrap()->yieldBlock('base_body_classes', $context, $blocks);
        yield "\">

    ";
        // line 23
        yield from $this->unwrap()->yieldBlock('base_body_skip_to_content', $context, $blocks);
        // line 29
        yield "
    ";
        // line 30
        yield from $this->unwrap()->yieldBlock('base_body_inner', $context, $blocks);
        // line 131
        yield "
    ";
        // line 132
        yield from $this->unwrap()->yieldBlock('base_scroll_up', $context, $blocks);
        // line 135
        yield "
    ";
        // line 136
        yield from $this->unwrap()->yieldBlock('base_cookie_permission', $context, $blocks);
        // line 139
        yield "
    ";
        // line 140
        yield from $this->unwrap()->yieldBlock('base_pseudo_modal', $context, $blocks);
        // line 143
        yield "
    ";
        // line 144
        yield from $this->unwrap()->yieldBlock('base_speculation_rules', $context, $blocks);
        // line 152
        yield "
    ";
        // line 153
        yield from $this->unwrap()->yieldBlock('base_body_script', $context, $blocks);
        // line 155
        yield "    </body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_body_classes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_body_classes"));

        yield "is-ctl-";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["controllerName"] ?? null))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["controllerName"] ?? null)), "html", null, true);
        }
        yield " is-act-";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["controllerAction"] ?? null))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["controllerAction"] ?? null)), "html", null, true);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_body_skip_to_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_body_skip_to_content"));

        // line 24
        yield "        ";
        yield from $this->loadTemplate("@Storefront/storefront/component/skip-to-content.html.twig", "@Storefront/storefront/base.html.twig", 24)->unwrap()->yield(CoreExtension::merge($context, ["skipToSearch" => true, "skipToMainNav" => true]));
        // line 28
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_body_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_body_inner"));

        // line 31
        yield "        ";
        yield from $this->unwrap()->yieldBlock('base_noscript', $context, $blocks);
        // line 40
        yield "
        ";
        // line 41
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("cache_rework")) {
            // line 42
            yield "            ";
            yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("esi", $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("frontend.header"));
            yield "

            ";
            // line 44
            yield from $this->unwrap()->yieldBlock('base_navigation_styling', $context, $blocks);
            // line 47
            yield "        ";
        } else {
            // line 48
            yield "            ";
            // line 49
            yield "            ";
            yield from $this->unwrap()->yieldBlock('base_header', $context, $blocks);
            // line 61
            yield "
            ";
            // line 63
            yield "            ";
            yield from $this->unwrap()->yieldBlock('base_navigation', $context, $blocks);
            // line 72
            yield "
            ";
            // line 74
            yield "            ";
            yield from $this->unwrap()->yieldBlock('base_offcanvas_navigation', $context, $blocks);
            // line 84
            yield "        ";
        }
        // line 85
        yield "
        ";
        // line 86
        yield from $this->unwrap()->yieldBlock('base_main', $context, $blocks);
        // line 115
        yield "

        ";
        // line 117
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("cache_rework")) {
            // line 118
            yield "            ";
            yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("esi", $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("frontend.footer"));
            yield "
        ";
        } else {
            // line 120
            yield "            ";
            // line 121
            yield "            ";
            yield from $this->unwrap()->yieldBlock('base_footer', $context, $blocks);
            // line 129
            yield "        ";
        }
        // line 130
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_noscript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_noscript"));

        // line 32
        yield "            <noscript class=\"noscript-main\">
                ";
        // line 33
        yield from $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/base.html.twig", 33)->unwrap()->yield(CoreExtension::merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.noscriptNotice")), "iconCache" => false]));
        // line 38
        yield "            </noscript>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_navigation_styling(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_navigation_styling"));

        // line 45
        yield "                ";
        yield from $this->loadTemplate("@Storefront/storefront/layout/navigation/active-styling.html.twig", "@Storefront/storefront/base.html.twig", 45)->unwrap()->yield($context);
        // line 46
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_header"));

        // line 50
        yield "                ";
        yield from $this->loadTemplate("@Storefront/storefront/utilities/staging-info.html.twig", "@Storefront/storefront/base.html.twig", 50)->unwrap()->yield($context);
        // line 51
        yield "
                <header class=\"header-main\">
                    ";
        // line 54
        yield "                    ";
        yield from $this->unwrap()->yieldBlock('base_header_inner', $context, $blocks);
        // line 59
        yield "                </header>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_header_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_header_inner"));

        // line 55
        yield "                        <div class=\"container\">
                            ";
        // line 56
        yield from $this->loadTemplate("@Storefront/storefront/layout/header/header.html.twig", "@Storefront/storefront/base.html.twig", 56)->unwrap()->yield($context);
        // line 57
        yield "                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_navigation"));

        // line 64
        yield "                <div class=\"nav-main\">
                    ";
        // line 66
        yield "                    ";
        yield from $this->unwrap()->yieldBlock('base_navigation_inner', $context, $blocks);
        // line 70
        yield "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_navigation_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_navigation_inner"));

        // line 67
        yield "                        ";
        // line 68
        yield "                        ";
        yield from $this->loadTemplate("@Storefront/storefront/layout/navigation/navigation.html.twig", "@Storefront/storefront/base.html.twig", 68)->unwrap()->yield($context);
        // line 69
        yield "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 74
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_offcanvas_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_offcanvas_navigation"));

        // line 75
        yield "                ";
        if (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 75), "navigation", [], "any", false, false, false, 75)) {
            // line 76
            yield "                    <div class=\"d-none js-navigation-offcanvas-initial-content";
            if ((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 76), "navigationCategoryId", [], "any", false, false, false, 76) == SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 76), "navigation", [], "any", false, false, false, 76), "active", [], "any", false, false, false, 76), "id", [], "any", false, false, false, 76))) {
                yield " is-root";
            }
            yield "\">
                        ";
            // line 78
            yield "                        ";
            yield from $this->unwrap()->yieldBlock('base_offcanvas_navigation_inner', $context, $blocks);
            // line 81
            yield "                    </div>
                ";
        }
        // line 83
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 78
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_offcanvas_navigation_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_offcanvas_navigation_inner"));

        // line 79
        yield "                            ";
        yield from $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig", "@Storefront/storefront/base.html.twig", 79)->unwrap()->yield(CoreExtension::merge($context, ["navigation" => SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 79), "navigation", [], "any", false, false, false, 79)]));
        // line 80
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_main"));

        // line 87
        yield "            <main class=\"content-main\" id=\"content-main\">
                ";
        // line 88
        yield from $this->unwrap()->yieldBlock('base_flashbags', $context, $blocks);
        // line 95
        yield "
                ";
        // line 96
        yield from $this->unwrap()->yieldBlock('base_main_inner', $context, $blocks);
        // line 113
        yield "            </main>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 88
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_flashbags(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_flashbags"));

        // line 89
        yield "                    <div class=\"flashbags container\">
                        ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(SwTwigFunction::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 90));
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
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 91
            yield "                            ";
            yield from $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/base.html.twig", 91)->unwrap()->yield(CoreExtension::merge($context, ["type" => $context["type"], "list" => $context["messages"]]));
            // line 92
            yield "                        ";
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
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        yield "                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 96
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_main_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_main_inner"));

        // line 97
        yield "                    <div class=\"container\">
                        ";
        // line 98
        yield from $this->unwrap()->yieldBlock('base_main_container', $context, $blocks);
        // line 111
        yield "                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 98
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_main_container(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_main_container"));

        // line 99
        yield "                            <div class=\"container-main\">
                                ";
        // line 100
        yield from $this->unwrap()->yieldBlock('base_breadcrumb', $context, $blocks);
        // line 107
        yield "
                                ";
        // line 108
        yield from $this->unwrap()->yieldBlock('base_content', $context, $blocks);
        // line 109
        yield "                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 100
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_breadcrumb"));

        // line 101
        yield "                                    ";
        yield from $this->loadTemplate("@Storefront/storefront/layout/breadcrumb.html.twig", "@Storefront/storefront/base.html.twig", 101)->unwrap()->yield(CoreExtension::toArray(["context" =>         // line 102
($context["context"] ?? null), "themeIconConfig" =>         // line 103
($context["themeIconConfig"] ?? null), "categoryId" => SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source,         // line 104
($context["shopware"] ?? null), "navigation", [], "any", false, false, false, 104), "id", [], "any", false, false, false, 104)]));
        // line 106
        yield "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 108
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 121
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_footer"));

        // line 122
        yield "                <footer class=\"footer-main\">
                    ";
        // line 124
        yield "                    ";
        yield from $this->unwrap()->yieldBlock('base_footer_inner', $context, $blocks);
        // line 127
        yield "                </footer>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 124
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_footer_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_footer_inner"));

        // line 125
        yield "                        ";
        yield from $this->loadTemplate("@Storefront/storefront/layout/footer/footer.html.twig", "@Storefront/storefront/base.html.twig", 125)->unwrap()->yield($context);
        // line 126
        yield "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 132
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_scroll_up(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_scroll_up"));

        // line 133
        yield "        ";
        yield from $this->loadTemplate("@Storefront/storefront/layout/scroll-up.html.twig", "@Storefront/storefront/base.html.twig", 133)->unwrap()->yield($context);
        // line 134
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 136
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_cookie_permission(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_cookie_permission"));

        // line 137
        yield "        ";
        yield from $this->loadTemplate("@Storefront/storefront/layout/cookie/cookie-permission.html.twig", "@Storefront/storefront/base.html.twig", 137)->unwrap()->yield($context);
        // line 138
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 140
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_pseudo_modal(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_pseudo_modal"));

        // line 141
        yield "        ";
        yield from $this->loadTemplate("@Storefront/storefront/component/pseudo-modal.html.twig", "@Storefront/storefront/base.html.twig", 141)->unwrap()->yield($context);
        // line 142
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 144
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_speculation_rules(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_speculation_rules"));

        // line 145
        yield "        ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.storefrontSettings.speculationRules")) {
            // line 146
            yield "            ";
            $context["options"] = ["selectorNavigationLinks" => ".nav-item.nav-link"];
            // line 149
            yield "            <template data-speculation-rules=\"true\" data-speculation-rules-options=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('json_encode')->getCallable()(($context["options"] ?? null)), "html", null, true);
            yield "\"></template>
        ";
        }
        // line 151
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 153
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_body_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_body_script"));

        // line 154
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/base.html.twig";
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
        return array (  881 => 154,  871 => 153,  863 => 151,  857 => 149,  854 => 146,  851 => 145,  841 => 144,  833 => 142,  830 => 141,  820 => 140,  812 => 138,  809 => 137,  799 => 136,  791 => 134,  788 => 133,  778 => 132,  770 => 126,  767 => 125,  757 => 124,  748 => 127,  745 => 124,  742 => 122,  732 => 121,  716 => 108,  708 => 106,  706 => 104,  705 => 103,  704 => 102,  702 => 101,  692 => 100,  683 => 109,  681 => 108,  678 => 107,  676 => 100,  673 => 99,  663 => 98,  654 => 111,  652 => 98,  649 => 97,  639 => 96,  630 => 93,  616 => 92,  613 => 91,  596 => 90,  593 => 89,  583 => 88,  574 => 113,  572 => 96,  569 => 95,  567 => 88,  564 => 87,  554 => 86,  546 => 80,  543 => 79,  533 => 78,  525 => 83,  521 => 81,  518 => 78,  511 => 76,  508 => 75,  498 => 74,  490 => 69,  487 => 68,  485 => 67,  475 => 66,  466 => 70,  463 => 66,  460 => 64,  450 => 63,  441 => 57,  439 => 56,  436 => 55,  426 => 54,  417 => 59,  414 => 54,  410 => 51,  407 => 50,  397 => 49,  389 => 46,  386 => 45,  376 => 44,  367 => 38,  365 => 33,  362 => 32,  352 => 31,  344 => 130,  341 => 129,  338 => 121,  336 => 120,  330 => 118,  328 => 117,  324 => 115,  322 => 86,  319 => 85,  316 => 84,  313 => 74,  310 => 72,  307 => 63,  304 => 61,  301 => 49,  299 => 48,  296 => 47,  294 => 44,  288 => 42,  286 => 41,  283 => 40,  280 => 31,  270 => 30,  262 => 28,  259 => 24,  249 => 23,  225 => 21,  216 => 155,  214 => 153,  211 => 152,  209 => 144,  206 => 143,  204 => 140,  201 => 139,  199 => 136,  196 => 135,  194 => 132,  191 => 131,  189 => 30,  186 => 29,  184 => 23,  178 => 21,  168 => 20,  159 => 17,  149 => 16,  136 => 11,  126 => 10,  117 => 7,  107 => 6,  98 => 157,  96 => 20,  93 => 19,  91 => 16,  88 => 15,  86 => 10,  83 => 9,  81 => 6,  78 => 5,  76 => 4,  73 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @sw-package framework #}

{# Set variable to \"true\" to enable HMR (hot page reloading) mode #}
{% set isHMRMode = app.request.headers.get('hot-reload-mode') and app.environment == 'dev' %}

{% block base_doctype %}
<!DOCTYPE html>
{% endblock %}

{% block base_html %}
<html lang=\"{{ context.saleschannel.languages.first.translationCode.code }}\"
      itemscope=\"itemscope\"
      itemtype=\"https://schema.org/WebPage\">
{% endblock %}

{% block base_head %}
    {% sw_include '@Storefront/storefront/layout/meta.html.twig' %}
{% endblock %}

{% block base_body %}
    <body class=\"{% block base_body_classes %}is-ctl-{% if controllerName is not empty %}{{ controllerName|lower }}{% endif %} is-act-{% if controllerAction is not empty %}{{ controllerAction|lower }}{% endif %}{% endblock %}\">

    {% block base_body_skip_to_content %}
        {% sw_include '@Storefront/storefront/component/skip-to-content.html.twig' with {
            skipToSearch: true,
            skipToMainNav: true
        } %}
    {% endblock %}

    {% block base_body_inner %}
        {% block base_noscript %}
            <noscript class=\"noscript-main\">
                {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                    type: 'info',
                    content: 'general.noscriptNotice'|trans|sw_sanitize,
                    iconCache: false
                } %}
            </noscript>
        {% endblock %}

        {% if feature('cache_rework') %}
            {{ render_esi(url('frontend.header')) }}

            {% block base_navigation_styling %}
                {% sw_include '@Storefront/storefront/layout/navigation/active-styling.html.twig' %}
            {% endblock %}
        {% else %}
            {# @deprecated tag:v6.7.0 - Block will be moved to storefront/layout/header.html.twig #}
            {% block base_header %}
                {% sw_include '@Storefront/storefront/utilities/staging-info.html.twig' %}

                <header class=\"header-main\">
                    {# @deprecated tag:v6.7.0 - Block will be moved to storefront/layout/header.html.twig #}
                    {% block base_header_inner %}
                        <div class=\"container\">
                            {% sw_include '@Storefront/storefront/layout/header/header.html.twig' %}
                        </div>
                    {% endblock %}
                </header>
            {% endblock %}

            {# @deprecated tag:v6.7.0 - Block will be moved to storefront/layout/header.html.twig #}
            {% block base_navigation %}
                <div class=\"nav-main\">
                    {# @deprecated tag:v6.7.0 - Block will be moved to storefront/layout/header.html.twig #}
                    {% block base_navigation_inner %}
                        {# @deprecated tag:v6.7.0 - This template will be removed, use storefront/layout/navbar/navbar.html.twig #}
                        {% sw_include '@Storefront/storefront/layout/navigation/navigation.html.twig' %}
                    {% endblock %}
                </div>
            {% endblock %}

            {# @deprecated tag:v6.7.0 - Block will be moved to storefront/layout/header.html.twig #}
            {% block base_offcanvas_navigation %}
                {% if page.header.navigation %}
                    <div class=\"d-none js-navigation-offcanvas-initial-content{% if context.salesChannel.navigationCategoryId == page.header.navigation.active.id %} is-root{% endif %}\">
                        {# @deprecated tag:v6.7.0 - Block will be moved to storefront/layout/header.html.twig #}
                        {% block base_offcanvas_navigation_inner %}
                            {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig' with { navigation: page.header.navigation } %}
                        {% endblock %}
                    </div>
                {% endif %}
            {% endblock %}
        {% endif %}

        {% block base_main %}
            <main class=\"content-main\" id=\"content-main\">
                {% block base_flashbags %}
                    <div class=\"flashbags container\">
                        {% for type, messages in app.flashes %}
                            {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with { type: type, list: messages } %}
                        {% endfor %}
                    </div>
                {% endblock %}

                {% block base_main_inner %}
                    <div class=\"container\">
                        {% block base_main_container %}
                            <div class=\"container-main\">
                                {% block base_breadcrumb %}
                                    {% sw_include '@Storefront/storefront/layout/breadcrumb.html.twig' with {
                                        context: context,
                                        themeIconConfig: themeIconConfig,
                                        categoryId: shopware.navigation.id,
                                    } only %}
                                {% endblock %}

                                {% block base_content %}{% endblock %}
                            </div>
                        {% endblock %}
                    </div>
                {% endblock %}
            </main>
        {% endblock %}


        {% if feature('cache_rework') %}
            {{ render_esi(url('frontend.footer')) }}
        {% else %}
            {# @deprecated tag:v6.7.0 - Block will be moved to storefront/layout/footer.html.twig #}
            {% block base_footer %}
                <footer class=\"footer-main\">
                    {# @deprecated tag:v6.7.0 - Block will be moved to storefront/layout/footer.html.twig #}
                    {% block base_footer_inner %}
                        {% sw_include '@Storefront/storefront/layout/footer/footer.html.twig' %}
                    {% endblock %}
                </footer>
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block base_scroll_up %}
        {% sw_include '@Storefront/storefront/layout/scroll-up.html.twig' %}
    {% endblock %}

    {% block base_cookie_permission %}
        {% sw_include '@Storefront/storefront/layout/cookie/cookie-permission.html.twig' %}
    {% endblock %}

    {% block base_pseudo_modal %}
        {% sw_include '@Storefront/storefront/component/pseudo-modal.html.twig' %}
    {% endblock %}

    {% block base_speculation_rules %}
        {% if config('core.storefrontSettings.speculationRules') %}
            {% set options = {
                selectorNavigationLinks: '.nav-item.nav-link',
            } %}
            <template data-speculation-rules=\"true\" data-speculation-rules-options=\"{{ options|json_encode }}\"></template>
        {% endif %}
    {% endblock %}

    {% block base_body_script %}
    {% endblock %}
    </body>
{% endblock %}
</html>
", "@Storefront/storefront/base.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/base.html.twig");
    }
}
