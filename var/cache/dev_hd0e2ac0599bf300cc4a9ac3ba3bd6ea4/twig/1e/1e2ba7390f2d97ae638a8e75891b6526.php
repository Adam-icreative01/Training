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

/* @Storefront/storefront/layout/meta.html.twig */
class __TwigTemplate_a6a001a8707662b880dafbcbf47172c8 extends Template
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
            'layout_head_inner' => [$this, 'block_layout_head_inner'],
            'layout_head_meta_tags' => [$this, 'block_layout_head_meta_tags'],
            'layout_head_meta_tags_charset' => [$this, 'block_layout_head_meta_tags_charset'],
            'layout_head_meta_tags_viewport' => [$this, 'block_layout_head_meta_tags_viewport'],
            'layout_head_meta_tags_general' => [$this, 'block_layout_head_meta_tags_general'],
            'layout_head_meta_tags_general_author' => [$this, 'block_layout_head_meta_tags_general_author'],
            'layout_head_meta_tags_robots' => [$this, 'block_layout_head_meta_tags_robots'],
            'layout_head_meta_tags_general_revisit' => [$this, 'block_layout_head_meta_tags_general_revisit'],
            'layout_head_meta_tags_keywords' => [$this, 'block_layout_head_meta_tags_keywords'],
            'layout_head_meta_tags_description' => [$this, 'block_layout_head_meta_tags_description'],
            'layout_head_meta_tags_opengraph' => [$this, 'block_layout_head_meta_tags_opengraph'],
            'layout_head_meta_tags_url_og' => [$this, 'block_layout_head_meta_tags_url_og'],
            'layout_head_meta_tags_type_og' => [$this, 'block_layout_head_meta_tags_type_og'],
            'layout_head_meta_tags_sitename_og' => [$this, 'block_layout_head_meta_tags_sitename_og'],
            'layout_head_meta_tags_title_og' => [$this, 'block_layout_head_meta_tags_title_og'],
            'layout_head_meta_tags_description_og' => [$this, 'block_layout_head_meta_tags_description_og'],
            'layout_head_meta_tags_image_og' => [$this, 'block_layout_head_meta_tags_image_og'],
            'layout_head_meta_tags_card_twitter' => [$this, 'block_layout_head_meta_tags_card_twitter'],
            'layout_head_meta_tags_sitename_twitter' => [$this, 'block_layout_head_meta_tags_sitename_twitter'],
            'layout_head_meta_tags_title_twitter' => [$this, 'block_layout_head_meta_tags_title_twitter'],
            'layout_head_meta_tags_description_twitter' => [$this, 'block_layout_head_meta_tags_description_twitter'],
            'layout_head_meta_tags_image_twitter' => [$this, 'block_layout_head_meta_tags_image_twitter'],
            'layout_head_meta_tags_schema_webpage' => [$this, 'block_layout_head_meta_tags_schema_webpage'],
            'layout_head_meta_tags_copyright_holder' => [$this, 'block_layout_head_meta_tags_copyright_holder'],
            'layout_head_meta_tags_copyright_year' => [$this, 'block_layout_head_meta_tags_copyright_year'],
            'layout_head_meta_tags_family_friendly' => [$this, 'block_layout_head_meta_tags_family_friendly'],
            'layout_head_meta_tags_image_meta' => [$this, 'block_layout_head_meta_tags_image_meta'],
            'layout_head_meta_tags_theme' => [$this, 'block_layout_head_meta_tags_theme'],
            'layout_head_meta_tags_hreflangs' => [$this, 'block_layout_head_meta_tags_hreflangs'],
            'layout_head_favicon' => [$this, 'block_layout_head_favicon'],
            'layout_head_apple' => [$this, 'block_layout_head_apple'],
            'layout_head_canonical' => [$this, 'block_layout_head_canonical'],
            'layout_head_title' => [$this, 'block_layout_head_title'],
            'layout_head_title_inner' => [$this, 'block_layout_head_title_inner'],
            'layout_head_stylesheet' => [$this, 'block_layout_head_stylesheet'],
            'layout_head_javascript_feature' => [$this, 'block_layout_head_javascript_feature'],
            'layout_head_javascript_tracking' => [$this, 'block_layout_head_javascript_tracking'],
            'layout_head_javascript_recaptcha' => [$this, 'block_layout_head_javascript_recaptcha'],
            'layout_head_javascript_token' => [$this, 'block_layout_head_javascript_token'],
            'layout_head_javascript_cookie_state' => [$this, 'block_layout_head_javascript_cookie_state'],
            'layout_head_javascript_router' => [$this, 'block_layout_head_javascript_router'],
            'layout_head_javascript_breakpoints' => [$this, 'block_layout_head_javascript_breakpoints'],
            'layout_head_javascript_wishlist_state' => [$this, 'block_layout_head_javascript_wishlist_state'],
            'layout_head_javascript_jquery' => [$this, 'block_layout_head_javascript_jquery'],
            'layout_head_javascript_assets_public_path' => [$this, 'block_layout_head_javascript_assets_public_path'],
            'layout_head_form_validation_messages' => [$this, 'block_layout_head_form_validation_messages'],
            'layout_head_javascript_hmr_mode' => [$this, 'block_layout_head_javascript_hmr_mode'],
            'layout_head_javascript_hmr_dev' => [$this, 'block_layout_head_javascript_hmr_dev'],
            'layout_head_javascript_prod' => [$this, 'block_layout_head_javascript_prod'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/meta.html.twig"));

        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('layout_head_inner', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_inner"));

        // line 4
        yield "    ";
        $context["metaInformation"] = SwTwigFunction::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, false, false, 4);
        // line 5
        yield "    ";
        $context["basicConfig"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation");
        // line 6
        yield "    ";
        $context["maxLength"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "seo.descriptionMaxLength");
        // line 7
        yield "    ";
        $context["metaDescription"] = SwTwigFunction::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(SwTwigFunction::getAttribute($this->env, $this->source, ($context["metaInformation"] ?? null), "metaDescription", [], "any", false, false, false, 7)))), "truncate", [(((array_key_exists("maxLength", $context) &&  !(null === $context["maxLength"]))) ? ($context["maxLength"]) : (255)), "…"], "method", false, false, false, 7);
        // line 8
        yield "    ";
        $context["metaTitle"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(SwTwigFunction::getAttribute($this->env, $this->source, ($context["metaInformation"] ?? null), "metaTitle", [], "any", false, false, false, 8)));
        // line 9
        yield "    ";
        $context["metaKeywords"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(SwTwigFunction::getAttribute($this->env, $this->source, ($context["metaInformation"] ?? null), "metaKeywords", [], "any", false, false, false, 9)));
        // line 10
        yield "    ";
        $context["metaAuthor"] = (((SwTwigFunction::getAttribute($this->env, $this->source, ($context["metaInformation"] ?? null), "author", [], "any", false, false, false, 10) != "")) ? (SwTwigFunction::getAttribute($this->env, $this->source, ($context["metaInformation"] ?? null), "author", [], "any", false, false, false, 10)) : ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.metaAuthor")));
        // line 11
        yield "
    <head>
        ";
        // line 13
        yield from $this->unwrap()->yieldBlock('layout_head_meta_tags', $context, $blocks);
        // line 88
        yield "
        ";
        // line 89
        yield from $this->unwrap()->yieldBlock('layout_head_favicon', $context, $blocks);
        // line 93
        yield "
        ";
        // line 94
        yield from $this->unwrap()->yieldBlock('layout_head_apple', $context, $blocks);
        // line 100
        yield "
        ";
        // line 101
        yield from $this->unwrap()->yieldBlock('layout_head_canonical', $context, $blocks);
        // line 106
        yield "
        ";
        // line 107
        yield from $this->unwrap()->yieldBlock('layout_head_title', $context, $blocks);
        // line 114
        yield "
        ";
        // line 115
        yield from $this->unwrap()->yieldBlock('layout_head_stylesheet', $context, $blocks);
        // line 126
        yield "
        ";
        // line 127
        yield from $this->unwrap()->yieldBlock('layout_head_javascript_feature', $context, $blocks);
        // line 130
        yield "
        ";
        // line 132
        yield "        ";
        yield from $this->unwrap()->yieldBlock('layout_head_javascript_tracking', $context, $blocks);
        // line 135
        yield "
        ";
        // line 136
        yield from $this->unwrap()->yieldBlock('layout_head_javascript_recaptcha', $context, $blocks);
        // line 139
        yield "
        ";
        // line 140
        yield from $this->unwrap()->yieldBlock('layout_head_javascript_token', $context, $blocks);
        // line 142
        yield "
        ";
        // line 143
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.useDefaultCookieConsent")) {
            // line 144
            yield "            ";
            yield from $this->unwrap()->yieldBlock('layout_head_javascript_cookie_state', $context, $blocks);
            // line 149
            yield "        ";
        }
        // line 150
        yield "
        ";
        // line 151
        yield from $this->unwrap()->yieldBlock('layout_head_javascript_router', $context, $blocks);
        // line 170
        yield "
        ";
        // line 171
        yield from $this->unwrap()->yieldBlock('layout_head_javascript_breakpoints', $context, $blocks);
        // line 186
        yield "
        ";
        // line 187
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.cart.wishlistEnabled")) {
            // line 188
            yield "            ";
            yield from $this->unwrap()->yieldBlock('layout_head_javascript_wishlist_state', $context, $blocks);
            // line 195
            yield "        ";
        }
        // line 196
        yield "
        ";
        // line 198
        yield "        ";
        yield from $this->unwrap()->yieldBlock('layout_head_javascript_jquery', $context, $blocks);
        // line 200
        yield "
        ";
        // line 202
        yield "        ";
        yield from $this->unwrap()->yieldBlock('layout_head_javascript_assets_public_path', $context, $blocks);
        // line 207
        yield "
        ";
        // line 208
        yield from $this->unwrap()->yieldBlock('layout_head_form_validation_messages', $context, $blocks);
        // line 211
        yield "
        ";
        // line 212
        yield from $this->unwrap()->yieldBlock('layout_head_javascript_hmr_mode', $context, $blocks);
        // line 232
        yield "    </head>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_meta_tags(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags"));

        // line 14
        yield "            ";
        yield from $this->unwrap()->yieldBlock('layout_head_meta_tags_charset', $context, $blocks);
        // line 17
        yield "
            ";
        // line 18
        yield from $this->unwrap()->yieldBlock('layout_head_meta_tags_viewport', $context, $blocks);
        // line 22
        yield "
            ";
        // line 23
        yield from $this->unwrap()->yieldBlock('layout_head_meta_tags_general', $context, $blocks);
        // line 35
        yield "
            ";
        // line 36
        yield from $this->unwrap()->yieldBlock('layout_head_meta_tags_opengraph', $context, $blocks);
        // line 63
        yield "
            ";
        // line 64
        yield from $this->unwrap()->yieldBlock('layout_head_meta_tags_schema_webpage', $context, $blocks);
        // line 74
        yield "
            ";
        // line 75
        yield from $this->unwrap()->yieldBlock('layout_head_meta_tags_theme', $context, $blocks);
        // line 81
        yield "
            ";
        // line 82
        yield from $this->unwrap()->yieldBlock('layout_head_meta_tags_hreflangs', $context, $blocks);
        // line 87
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_meta_tags_charset(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_charset"));

        // line 15
        yield "                <meta charset=\"utf-8\">
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_meta_tags_viewport(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_viewport"));

        // line 19
        yield "                <meta name=\"viewport\"
                      content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_meta_tags_general(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_general"));

        // line 24
        yield "                <meta name=\"author\"
                      content=\"";
        // line 25
        yield from $this->unwrap()->yieldBlock('layout_head_meta_tags_general_author', $context, $blocks);
        yield "\">
                <meta name=\"robots\"
                      content=\"";
        // line 27
        yield from $this->unwrap()->yieldBlock('layout_head_meta_tags_robots', $context, $blocks);
        yield "\">
                <meta name=\"revisit-after\"
                      content=\"";
        // line 29
        yield from $this->unwrap()->yieldBlock('layout_head_meta_tags_general_revisit', $context, $blocks);
        yield "\">
                <meta name=\"keywords\"
                      content=\"";
        // line 31
        yield from $this->unwrap()->yieldBlock('layout_head_meta_tags_keywords', $context, $blocks);
        yield "\">
                <meta name=\"description\"
                      content=\"";
        // line 33
        yield from $this->unwrap()->yieldBlock('layout_head_meta_tags_description', $context, $blocks);
        yield "\">
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_meta_tags_general_author(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_general_author"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(($context["metaAuthor"] ?? null)), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_meta_tags_robots(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_robots"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["metaInformation"] ?? null), "robots", [], "any", false, false, false, 27), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_meta_tags_general_revisit(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_general_revisit"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(SwTwigFunction::getAttribute($this->env, $this->source, ($context["metaInformation"] ?? null), "revisit", [], "any", false, false, false, 29)), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_meta_tags_keywords(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_keywords"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["metaKeywords"] ?? null), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_meta_tags_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_description"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["metaDescription"] ?? null), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_meta_tags_opengraph(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_opengraph"));

        // line 37
        yield "                ";
        if (( !SwTwigFunction::getAttribute($this->env, $this->source, ($context["page"] ?? null), "isErrorPage", [], "method", true, true, false, 37) || (SwTwigFunction::getAttribute($this->env, $this->source, ($context["page"] ?? null), "isErrorPage", [], "method", false, false, false, 37) === false))) {
            // line 38
            yield "                    <meta property=\"og:url\"
                          content=\"";
            // line 39
            yield from $this->unwrap()->yieldBlock('layout_head_meta_tags_url_og', $context, $blocks);
            yield "\">
                    <meta property=\"og:type\"
                          content=\"";
            // line 41
            yield from $this->unwrap()->yieldBlock('layout_head_meta_tags_type_og', $context, $blocks);
            yield "\">
                    <meta property=\"og:site_name\"
                          content=\"";
            // line 43
            yield from $this->unwrap()->yieldBlock('layout_head_meta_tags_sitename_og', $context, $blocks);
            yield "\">
                    <meta property=\"og:title\"
                          content=\"";
            // line 45
            yield from $this->unwrap()->yieldBlock('layout_head_meta_tags_title_og', $context, $blocks);
            yield "\">
                    <meta property=\"og:description\"
                          content=\"";
            // line 47
            yield from $this->unwrap()->yieldBlock('layout_head_meta_tags_description_og', $context, $blocks);
            yield "\">
                    <meta property=\"og:image\"
                          content=\"";
            // line 49
            yield from $this->unwrap()->yieldBlock('layout_head_meta_tags_image_og', $context, $blocks);
            yield "\">

                    <meta name=\"twitter:card\"
                          content=\"";
            // line 52
            yield from $this->unwrap()->yieldBlock('layout_head_meta_tags_card_twitter', $context, $blocks);
            yield "\">
                    <meta name=\"twitter:site\"
                          content=\"";
            // line 54
            yield from $this->unwrap()->yieldBlock('layout_head_meta_tags_sitename_twitter', $context, $blocks);
            yield "\">
                    <meta name=\"twitter:title\"
                          content=\"";
            // line 56
            yield from $this->unwrap()->yieldBlock('layout_head_meta_tags_title_twitter', $context, $blocks);
            yield "\">
                    <meta name=\"twitter:description\"
                          content=\"";
            // line 58
            yield from $this->unwrap()->yieldBlock('layout_head_meta_tags_description_twitter', $context, $blocks);
            yield "\">
                    <meta name=\"twitter:image\"
                          content=\"";
            // line 60
            yield from $this->unwrap()->yieldBlock('layout_head_meta_tags_image_twitter', $context, $blocks);
            yield "\">
                ";
        }
        // line 62
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_meta_tags_url_og(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_url_og"));

        yield ((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, true, false, 39), "canonical", [], "any", true, true, false, 39)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, false, false, 39), "canonical", [], "any", false, false, false, 39), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 39), "uri", [], "any", false, false, false, 39), "html", null, true)));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_meta_tags_type_og(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_type_og"));

        yield "website";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_meta_tags_sitename_og(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_sitename_og"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["basicConfig"] ?? null), "shopName", [], "any", false, false, false, 43), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_meta_tags_title_og(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_title_og"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["metaTitle"] ?? null), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 47
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_meta_tags_description_og(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_description_og"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["metaDescription"] ?? null), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_meta_tags_image_og(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_image_og"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_meta_tags_card_twitter(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_card_twitter"));

        yield "summary";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_meta_tags_sitename_twitter(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_sitename_twitter"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["basicConfig"] ?? null), "shopName", [], "any", false, false, false, 54), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 56
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_meta_tags_title_twitter(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_title_twitter"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["metaTitle"] ?? null), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_meta_tags_description_twitter(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_description_twitter"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["metaDescription"] ?? null), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 60
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_meta_tags_image_twitter(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_image_twitter"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_meta_tags_schema_webpage(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_schema_webpage"));

        // line 65
        yield "                <meta itemprop=\"copyrightHolder\"
                      content=\"";
        // line 66
        yield from $this->unwrap()->yieldBlock('layout_head_meta_tags_copyright_holder', $context, $blocks);
        yield "\">
                <meta itemprop=\"copyrightYear\"
                      content=\"";
        // line 68
        yield from $this->unwrap()->yieldBlock('layout_head_meta_tags_copyright_year', $context, $blocks);
        yield "\">
                <meta itemprop=\"isFamilyFriendly\"
                      content=\"";
        // line 70
        yield from $this->unwrap()->yieldBlock('layout_head_meta_tags_family_friendly', $context, $blocks);
        yield "\">
                <meta itemprop=\"image\"
                      content=\"";
        // line 72
        yield from $this->unwrap()->yieldBlock('layout_head_meta_tags_image_meta', $context, $blocks);
        yield "\">
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_meta_tags_copyright_holder(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_copyright_holder"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["basicConfig"] ?? null), "shopName", [], "any", false, false, false, 66), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 68
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_meta_tags_copyright_year(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_copyright_year"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(SwTwigFunction::getAttribute($this->env, $this->source, ($context["metaInformation"] ?? null), "copyrightYear", [], "any", false, false, false, 68)), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_meta_tags_family_friendly(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_family_friendly"));

        if (SwTwigFunction::getAttribute($this->env, $this->source, ($context["basicConfig"] ?? null), "familyFriendly", [], "any", false, false, false, 70)) {
            yield "true";
        } else {
            yield "false";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_meta_tags_image_meta(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_image_meta"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 75
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_meta_tags_theme(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_theme"));

        // line 76
        yield "                ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-background-color")) {
            // line 77
            yield "                <meta name=\"theme-color\"
                      content=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-background-color"), "html", null, true);
            yield "\">
                ";
        }
        // line 80
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 82
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_meta_tags_hreflangs(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_hreflangs"));

        // line 83
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["hrefLang"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 84
            yield "                    <link rel=\"alternate\" hreflang=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, $context["link"], "locale", [], "any", false, false, false, 84), "html", null, true);
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 84), "html", null, true);
            yield "\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 89
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_favicon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_favicon"));

        // line 90
        yield "            <link rel=\"shortcut icon\"
                  href=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-favicon"), "html", null, true);
        yield "\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 94
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_apple(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_apple"));

        // line 95
        yield "            ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-share")) {
            // line 96
            yield "            <link rel=\"apple-touch-icon\"
                  href=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-share"), "html", null, true);
            yield "\">
            ";
        }
        // line 99
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 101
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_canonical(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_canonical"));

        // line 102
        yield "            ";
        if (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, false, false, 102), "canonical", [], "any", false, false, false, 102)) {
            // line 103
            yield "                <link rel=\"canonical\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, false, false, 103), "canonical", [], "any", false, false, false, 103), "html", null, true);
            yield "\">
            ";
        }
        // line 105
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 107
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_title"));

        // line 108
        yield "            <title itemprop=\"name\">";
        $_v0 = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 109
            yield "                ";
            yield from $this->unwrap()->yieldBlock('layout_head_title_inner', $context, $blocks);
            // line 112
            yield "            ";
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 108
        yield Twig\Extension\CoreExtension::spaceless($_v0);
        // line 112
        yield "</title>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 109
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_title_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_title_inner"));

        // line 110
        yield "                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["metaTitle"] ?? null), "html", null, true);
        yield "
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 115
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_stylesheet(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_stylesheet"));

        // line 116
        yield "            ";
        if (($context["isHMRMode"] ?? null)) {
            // line 117
            yield "                ";
            // line 118
            yield "            ";
        } else {
            // line 119
            yield "                ";
            $context["assets"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "assets.css");
            // line 120
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["assets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 121
                yield "                    <link rel=\"stylesheet\"
                      href=\"";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["file"], "theme"), "html", null, true);
                yield "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            yield "            ";
        }
        // line 125
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 127
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_javascript_feature(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_feature"));

        // line 128
        yield "            ";
        yield from $this->loadTemplate("@Storefront/storefront/component/feature.html.twig", "@Storefront/storefront/layout/meta.html.twig", 128)->unwrap()->yield($context);
        // line 129
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 132
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_javascript_tracking(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_tracking"));

        // line 133
        yield "            ";
        yield from $this->loadTemplate("@Storefront/storefront/component/analytics.html.twig", "@Storefront/storefront/layout/meta.html.twig", 133)->unwrap()->yield($context);
        // line 134
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 136
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_javascript_recaptcha(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_recaptcha"));

        // line 137
        yield "            ";
        yield from $this->loadTemplate("@Storefront/storefront/component/recaptcha.html.twig", "@Storefront/storefront/layout/meta.html.twig", 137)->unwrap()->yield($context);
        // line 138
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 140
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_javascript_token(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_token"));

        // line 141
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 144
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_javascript_cookie_state(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_cookie_state"));

        // line 145
        yield "                <script>
                    window.useDefaultCookieConsent = true;
                </script>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 151
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_javascript_router(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_router"));

        // line 152
        yield "            ";
        // line 153
        yield "            <script>
                window.activeNavigationId = '";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["shopware"] ?? null), "navigation", [], "any", false, false, false, 154), "id", [], "any", false, false, false, 154), "html", null, true);
        yield "';
                window.router = {
                    'frontend.cart.offcanvas': '";
        // line 156
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cart.offcanvas");
        yield "',
                    'frontend.cookie.offcanvas': '";
        // line 157
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cookie.offcanvas");
        yield "',
                    'frontend.checkout.finish.page': '";
        // line 158
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.finish.page");
        yield "',
                    'frontend.checkout.info': '";
        // line 159
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.info");
        yield "',
                    'frontend.menu.offcanvas': '";
        // line 160
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.menu.offcanvas");
        yield "',
                    'frontend.cms.page': '";
        // line 161
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page");
        yield "',
                    'frontend.cms.navigation.page': '";
        // line 162
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.navigation.page");
        yield "',
                    'frontend.account.addressbook': '";
        // line 163
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.addressbook");
        yield "',
                    'frontend.country.country-data': '";
        // line 164
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.country.country.data");
        yield "',
                    'frontend.app-system.generate-token': '";
        // line 165
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.app-system.generate-token", ["name" => "Placeholder"]);
        yield "',
                    };
                window.salesChannelId = '";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "salesChannelId", [], "any", false, false, false, 167), "html", null, true);
        yield "';
            </script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 171
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_javascript_breakpoints(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_breakpoints"));

        // line 172
        yield "            ";
        // line 173
        yield "            <script>
                ";
        // line 174
        $context["breakpoint"] = ["xs" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xs"), "sm" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.sm"), "md" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md"), "lg" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.lg"), "xl" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xl"), "xxl" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xxl")];
        // line 182
        yield "
                window.breakpoints = ";
        // line 183
        yield $this->env->getFilter('json_encode')->getCallable()(($context["breakpoint"] ?? null));
        yield ";
            </script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 188
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_javascript_wishlist_state(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_wishlist_state"));

        // line 189
        yield "                <script>
                    window.customerLoggedInState = ";
        // line 190
        yield ((( !(null === SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 190)) &&  !SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 190), "guest", [], "any", false, false, false, 190))) ? (1) : (0));
        yield ";

                    window.wishlistEnabled = ";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.cart.wishlistEnabled"), "html", null, true);
        yield ";
                </script>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 198
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_javascript_jquery(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_jquery"));

        // line 199
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 202
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_javascript_assets_public_path(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_assets_public_path"));

        // line 203
        yield "            <script>
                window.themeAssetsPublicPath = '";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/", "theme"), "html", null, true);
        yield "';
            </script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 208
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_form_validation_messages(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_form_validation_messages"));

        // line 209
        yield "            ";
        yield from $this->loadTemplate("@Storefront/storefront/utilities/form-validation-config.html.twig", "@Storefront/storefront/layout/meta.html.twig", 209)->unwrap()->yield($context);
        // line 210
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 212
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_javascript_hmr_mode(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_hmr_mode"));

        // line 213
        yield "            ";
        if (($context["isHMRMode"] ?? null)) {
            // line 214
            yield "                ";
            yield from $this->unwrap()->yieldBlock('layout_head_javascript_hmr_dev', $context, $blocks);
            // line 221
            yield "            ";
        } else {
            // line 222
            yield "                ";
            yield from $this->unwrap()->yieldBlock('layout_head_javascript_prod', $context, $blocks);
            // line 230
            yield "            ";
        }
        // line 231
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 214
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_javascript_hmr_dev(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_hmr_dev"));

        // line 215
        yield "                    ";
        // line 216
        yield "                    <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/storefront/hot-reloading.js\" defer></script>
                    ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->scripts($context));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 218
            yield "                        <script type=\"text/javascript\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($context["script"], ["js/" => "/_webpack_hot_proxy_/"]), "html", null, true);
            yield "\" defer></script>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 222
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_head_javascript_prod(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_prod"));

        // line 223
        yield "                    <script>
                        window.themeJsPublicPath = '";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/", "theme"), "html", null, true);
        yield "';
                    </script>
                    ";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->scripts($context));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 227
            yield "                        <script type=\"text/javascript\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["script"], "theme"), "html", null, true);
            yield "\" defer></script>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/layout/meta.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  1484 => 229,  1475 => 227,  1471 => 226,  1466 => 224,  1463 => 223,  1453 => 222,  1445 => 220,  1436 => 218,  1432 => 217,  1429 => 216,  1427 => 215,  1417 => 214,  1409 => 231,  1406 => 230,  1403 => 222,  1400 => 221,  1397 => 214,  1394 => 213,  1384 => 212,  1376 => 210,  1373 => 209,  1363 => 208,  1352 => 204,  1349 => 203,  1339 => 202,  1331 => 199,  1321 => 198,  1310 => 192,  1305 => 190,  1302 => 189,  1292 => 188,  1281 => 183,  1278 => 182,  1276 => 174,  1273 => 173,  1271 => 172,  1261 => 171,  1250 => 167,  1245 => 165,  1241 => 164,  1237 => 163,  1233 => 162,  1229 => 161,  1225 => 160,  1221 => 159,  1217 => 158,  1213 => 157,  1209 => 156,  1204 => 154,  1201 => 153,  1199 => 152,  1189 => 151,  1178 => 145,  1168 => 144,  1160 => 141,  1150 => 140,  1142 => 138,  1139 => 137,  1129 => 136,  1121 => 134,  1118 => 133,  1108 => 132,  1100 => 129,  1097 => 128,  1087 => 127,  1079 => 125,  1076 => 124,  1068 => 122,  1065 => 121,  1060 => 120,  1057 => 119,  1054 => 118,  1052 => 117,  1049 => 116,  1039 => 115,  1028 => 110,  1018 => 109,  1009 => 112,  1007 => 108,  1003 => 112,  1000 => 109,  997 => 108,  987 => 107,  979 => 105,  973 => 103,  970 => 102,  960 => 101,  952 => 99,  947 => 97,  944 => 96,  941 => 95,  931 => 94,  921 => 91,  918 => 90,  908 => 89,  900 => 86,  889 => 84,  884 => 83,  874 => 82,  866 => 80,  861 => 78,  858 => 77,  855 => 76,  845 => 75,  828 => 72,  807 => 70,  790 => 68,  773 => 66,  763 => 72,  758 => 70,  753 => 68,  748 => 66,  745 => 65,  735 => 64,  718 => 60,  701 => 58,  684 => 56,  667 => 54,  650 => 52,  633 => 49,  616 => 47,  599 => 45,  582 => 43,  565 => 41,  548 => 39,  540 => 62,  535 => 60,  530 => 58,  525 => 56,  520 => 54,  515 => 52,  509 => 49,  504 => 47,  499 => 45,  494 => 43,  489 => 41,  484 => 39,  481 => 38,  478 => 37,  468 => 36,  451 => 33,  434 => 31,  417 => 29,  400 => 27,  383 => 25,  373 => 33,  368 => 31,  363 => 29,  358 => 27,  353 => 25,  350 => 24,  340 => 23,  330 => 19,  320 => 18,  311 => 15,  301 => 14,  293 => 87,  291 => 82,  288 => 81,  286 => 75,  283 => 74,  281 => 64,  278 => 63,  276 => 36,  273 => 35,  271 => 23,  268 => 22,  266 => 18,  263 => 17,  260 => 14,  250 => 13,  241 => 232,  239 => 212,  236 => 211,  234 => 208,  231 => 207,  228 => 202,  225 => 200,  222 => 198,  219 => 196,  216 => 195,  213 => 188,  211 => 187,  208 => 186,  206 => 171,  203 => 170,  201 => 151,  198 => 150,  195 => 149,  192 => 144,  190 => 143,  187 => 142,  185 => 140,  182 => 139,  180 => 136,  177 => 135,  174 => 132,  171 => 130,  169 => 127,  166 => 126,  164 => 115,  161 => 114,  159 => 107,  156 => 106,  154 => 101,  151 => 100,  149 => 94,  146 => 93,  144 => 89,  141 => 88,  139 => 13,  135 => 11,  132 => 10,  129 => 9,  126 => 8,  123 => 7,  120 => 6,  117 => 5,  114 => 4,  97 => 3,  94 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @sw-package framework #}

{% block layout_head_inner %}
    {% set metaInformation = page.metaInformation %}
    {% set basicConfig = config('core.basicInformation') %}
    {% set maxLength = config('seo.descriptionMaxLength') %}
    {% set metaDescription = metaInformation.metaDescription|striptags|trim|u.truncate(maxLength ?? 255, '…') %}
    {% set metaTitle = metaInformation.metaTitle|striptags|trim %}
    {% set metaKeywords = metaInformation.metaKeywords|striptags|trim %}
    {% set metaAuthor = (metaInformation.author != '') ? metaInformation.author : config('core.basicInformation.metaAuthor') %}

    <head>
        {% block layout_head_meta_tags %}
            {% block layout_head_meta_tags_charset %}
                <meta charset=\"utf-8\">
            {% endblock %}

            {% block layout_head_meta_tags_viewport %}
                <meta name=\"viewport\"
                      content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            {% endblock %}

            {% block layout_head_meta_tags_general %}
                <meta name=\"author\"
                      content=\"{% block layout_head_meta_tags_general_author %}{{ metaAuthor|striptags }}{% endblock %}\">
                <meta name=\"robots\"
                      content=\"{% block layout_head_meta_tags_robots %}{{ metaInformation.robots }}{% endblock %}\">
                <meta name=\"revisit-after\"
                      content=\"{% block layout_head_meta_tags_general_revisit %}{{ metaInformation.revisit|striptags }}{% endblock %}\">
                <meta name=\"keywords\"
                      content=\"{% block layout_head_meta_tags_keywords %}{{ metaKeywords }}{% endblock %}\">
                <meta name=\"description\"
                      content=\"{% block layout_head_meta_tags_description %}{{ metaDescription }}{% endblock %}\">
            {% endblock %}

            {% block layout_head_meta_tags_opengraph %}
                {% if not page.isErrorPage() is defined or page.isErrorPage() === false %}
                    <meta property=\"og:url\"
                          content=\"{% block layout_head_meta_tags_url_og %}{{ (page.metaInformation.canonical is defined) ? page.metaInformation.canonical : app.request.uri }}{% endblock %}\">
                    <meta property=\"og:type\"
                          content=\"{% block layout_head_meta_tags_type_og %}website{% endblock %}\">
                    <meta property=\"og:site_name\"
                          content=\"{% block layout_head_meta_tags_sitename_og %}{{ basicConfig.shopName }}{% endblock %}\">
                    <meta property=\"og:title\"
                          content=\"{% block layout_head_meta_tags_title_og %}{{ metaTitle }}{% endblock %}\">
                    <meta property=\"og:description\"
                          content=\"{% block layout_head_meta_tags_description_og %}{{ metaDescription }}{% endblock %}\">
                    <meta property=\"og:image\"
                          content=\"{% block layout_head_meta_tags_image_og %}{{ theme_config('sw-logo-desktop') }}{% endblock %}\">

                    <meta name=\"twitter:card\"
                          content=\"{% block layout_head_meta_tags_card_twitter %}summary{% endblock %}\">
                    <meta name=\"twitter:site\"
                          content=\"{% block layout_head_meta_tags_sitename_twitter %}{{ basicConfig.shopName }}{% endblock %}\">
                    <meta name=\"twitter:title\"
                          content=\"{% block layout_head_meta_tags_title_twitter %}{{ metaTitle }}{% endblock %}\">
                    <meta name=\"twitter:description\"
                          content=\"{% block layout_head_meta_tags_description_twitter %}{{ metaDescription }}{% endblock %}\">
                    <meta name=\"twitter:image\"
                          content=\"{% block layout_head_meta_tags_image_twitter %}{{ theme_config('sw-logo-desktop') }}{% endblock %}\">
                {% endif %}
            {% endblock %}

            {% block layout_head_meta_tags_schema_webpage %}
                <meta itemprop=\"copyrightHolder\"
                      content=\"{% block layout_head_meta_tags_copyright_holder %}{{ basicConfig.shopName }}{% endblock %}\">
                <meta itemprop=\"copyrightYear\"
                      content=\"{% block layout_head_meta_tags_copyright_year %}{{ metaInformation.copyrightYear|striptags }}{% endblock %}\">
                <meta itemprop=\"isFamilyFriendly\"
                      content=\"{% block layout_head_meta_tags_family_friendly %}{% if basicConfig.familyFriendly %}true{% else %}false{% endif %}{% endblock %}\">
                <meta itemprop=\"image\"
                      content=\"{% block layout_head_meta_tags_image_meta %}{{ theme_config('sw-logo-desktop') }}{% endblock %}\">
            {% endblock %}

            {% block layout_head_meta_tags_theme %}
                {% if theme_config('sw-background-color') %}
                <meta name=\"theme-color\"
                      content=\"{{ theme_config('sw-background-color') }}\">
                {% endif %}
            {% endblock %}

            {% block layout_head_meta_tags_hreflangs %}
                {% for link in hrefLang %}
                    <link rel=\"alternate\" hreflang=\"{{ link.locale }}\" href=\"{{ link.url }}\">
                {% endfor %}
            {% endblock %}
        {% endblock %}

        {% block layout_head_favicon %}
            <link rel=\"shortcut icon\"
                  href=\"{{ theme_config('sw-logo-favicon') }}\">
        {% endblock %}

        {% block layout_head_apple %}
            {% if theme_config('sw-logo-share') %}
            <link rel=\"apple-touch-icon\"
                  href=\"{{ theme_config('sw-logo-share') }}\">
            {% endif %}
        {% endblock %}

        {% block layout_head_canonical %}
            {% if page.metaInformation.canonical %}
                <link rel=\"canonical\" href=\"{{ page.metaInformation.canonical }}\">
            {% endif %}
        {% endblock %}

        {% block layout_head_title %}
            <title itemprop=\"name\">{% apply spaceless %}
                {% block layout_head_title_inner %}
                    {{ metaTitle }}
                {% endblock %}
            {% endapply %}</title>
        {% endblock %}

        {% block layout_head_stylesheet %}
            {% if isHMRMode %}
                {# CSS will be loaded from the JS automatically #}
            {% else %}
                {% set assets = theme_config('assets.css') %}
                {% for file in assets %}
                    <link rel=\"stylesheet\"
                      href=\"{{ asset(file, 'theme') }}\">
                {% endfor %}
            {% endif %}
        {% endblock %}

        {% block layout_head_javascript_feature %}
            {% sw_include '@Storefront/storefront/component/feature.html.twig' %}
        {% endblock %}

        {# Block for tracking scripts which are required to be included in the `head` section of the document #}
        {% block layout_head_javascript_tracking %}
            {% sw_include '@Storefront/storefront/component/analytics.html.twig' %}
        {% endblock %}

        {% block layout_head_javascript_recaptcha %}
            {% sw_include '@Storefront/storefront/component/recaptcha.html.twig' %}
        {% endblock %}

        {% block layout_head_javascript_token %}
        {% endblock %}

        {% if config('core.basicInformation.useDefaultCookieConsent') %}
            {% block layout_head_javascript_cookie_state %}
                <script>
                    window.useDefaultCookieConsent = true;
                </script>
            {% endblock %}
        {% endif %}

        {% block layout_head_javascript_router %}
            {# Register all routes that will be needed in JavaScript to the window.router object #}
            <script>
                window.activeNavigationId = '{{ shopware.navigation.id }}';
                window.router = {
                    'frontend.cart.offcanvas': '{{ path('frontend.cart.offcanvas') }}',
                    'frontend.cookie.offcanvas': '{{ path('frontend.cookie.offcanvas') }}',
                    'frontend.checkout.finish.page': '{{ path('frontend.checkout.finish.page') }}',
                    'frontend.checkout.info': '{{ path('frontend.checkout.info') }}',
                    'frontend.menu.offcanvas': '{{ path('frontend.menu.offcanvas') }}',
                    'frontend.cms.page': '{{ path('frontend.cms.page') }}',
                    'frontend.cms.navigation.page': '{{ path('frontend.cms.navigation.page') }}',
                    'frontend.account.addressbook': '{{ path('frontend.account.addressbook') }}',
                    'frontend.country.country-data': '{{ path('frontend.country.country.data') }}',
                    'frontend.app-system.generate-token': '{{ path('frontend.app-system.generate-token', { name: 'Placeholder' }) }}',
                    };
                window.salesChannelId = '{{ context.salesChannelId }}';
            </script>
        {% endblock %}

        {% block layout_head_javascript_breakpoints %}
            {# Register the available viewport breakpoints as window.breakpoints object #}
            <script>
                {% set breakpoint = {
                    xs: theme_config('breakpoint.xs'),
                    sm: theme_config('breakpoint.sm'),
                    md: theme_config('breakpoint.md'),
                    lg: theme_config('breakpoint.lg'),
                    xl: theme_config('breakpoint.xl'),
                    xxl: theme_config('breakpoint.xxl')
                } %}

                window.breakpoints = {{ breakpoint|json_encode()|raw }};
            </script>
        {% endblock %}

        {% if config('core.cart.wishlistEnabled') %}
            {% block layout_head_javascript_wishlist_state %}
                <script>
                    window.customerLoggedInState = {{ context.customer is not null and not context.customer.guest ? 1 : 0 }};

                    window.wishlistEnabled = {{ config('core.cart.wishlistEnabled') }};
                </script>
            {% endblock %}
        {% endif %}

        {# jQuery is removed from the default Storefront since tag:v6.5.0 - This block should be used to add jQuery as a `<script>` if needed. #}
        {% block layout_head_javascript_jquery %}
        {% endblock %}

        {# @deprecated tag:v6.7.0 - This block will be removed #}
        {% block layout_head_javascript_assets_public_path %}
            <script>
                window.themeAssetsPublicPath = '{{ asset('assets/', 'theme') }}';
            </script>
        {% endblock %}

        {% block layout_head_form_validation_messages %}
            {% sw_include '@Storefront/storefront/utilities/form-validation-config.html.twig' %}
        {% endblock %}

        {% block layout_head_javascript_hmr_mode %}
            {% if isHMRMode %}
                {% block layout_head_javascript_hmr_dev %}
                    {# Entry point for dev-server #}
                    <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/storefront/hot-reloading.js\" defer></script>
                    {% for script in theme_scripts() %}
                        <script type=\"text/javascript\" src=\"{{ script|replace({'js/': '/_webpack_hot_proxy_/'}) }}\" defer></script>
                    {% endfor %}
                {% endblock %}
            {% else %}
                {% block layout_head_javascript_prod %}
                    <script>
                        window.themeJsPublicPath = '{{ asset('js/', 'theme') }}';
                    </script>
                    {% for script in theme_scripts() %}
                        <script type=\"text/javascript\" src=\"{{ asset(script, 'theme') }}\" defer></script>
                    {% endfor %}
                {% endblock %}
            {% endif %}
        {% endblock %}
    </head>
{% endblock %}
", "@Storefront/storefront/layout/meta.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/layout/meta.html.twig");
    }
}
