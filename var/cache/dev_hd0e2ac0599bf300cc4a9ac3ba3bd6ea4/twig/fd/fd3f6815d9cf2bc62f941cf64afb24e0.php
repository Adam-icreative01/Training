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

/* @Storefront/storefront/layout/footer/footer.html.twig */
class __TwigTemplate_43207cd0373be9a85b45d7c7086e59d2 extends Template
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
            'layout_footer_inner_container' => [$this, 'block_layout_footer_inner_container'],
            'layout_footer_navigation' => [$this, 'block_layout_footer_navigation'],
            'layout_footer_navigation_hotline' => [$this, 'block_layout_footer_navigation_hotline'],
            'layout_footer_navigation_hotline_headline' => [$this, 'block_layout_footer_navigation_hotline_headline'],
            'layout_footer_navigation_hotline_icons' => [$this, 'block_layout_footer_navigation_hotline_icons'],
            'layout_footer_navigation_hotline_content' => [$this, 'block_layout_footer_navigation_hotline_content'],
            'layout_footer_navigation_columns' => [$this, 'block_layout_footer_navigation_columns'],
            'layout_footer_navigation_column' => [$this, 'block_layout_footer_navigation_column'],
            'layout_footer_navigation_information_headline' => [$this, 'block_layout_footer_navigation_information_headline'],
            'layout_footer_navigation_information_icons' => [$this, 'block_layout_footer_navigation_information_icons'],
            'layout_footer_navigation_information_content' => [$this, 'block_layout_footer_navigation_information_content'],
            'layout_footer_navigation_information_links' => [$this, 'block_layout_footer_navigation_information_links'],
            'layout_footer_navigation_information_link_item' => [$this, 'block_layout_footer_navigation_information_link_item'],
            'layout_footer_navigation_information_link' => [$this, 'block_layout_footer_navigation_information_link'],
            'layout_footer_payment_shipping_logos' => [$this, 'block_layout_footer_payment_shipping_logos'],
            'layout_footer_payment_logos' => [$this, 'block_layout_footer_payment_logos'],
            'layout_footer_payment_logo' => [$this, 'block_layout_footer_payment_logo'],
            'layout_footer_shipping_logos' => [$this, 'block_layout_footer_shipping_logos'],
            'layout_footer_shipping_logo' => [$this, 'block_layout_footer_shipping_logo'],
            'layout_footer_bottom' => [$this, 'block_layout_footer_bottom'],
            'layout_footer_service_menu' => [$this, 'block_layout_footer_service_menu'],
            'layout_footer_service_menu_content' => [$this, 'block_layout_footer_service_menu_content'],
            'layout_footer_service_menu_item' => [$this, 'block_layout_footer_service_menu_item'],
            'layout_footer_vat' => [$this, 'block_layout_footer_vat'],
            'layout_footer_copyright' => [$this, 'block_layout_footer_copyright'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/footer/footer.html.twig"));

        // line 2
        if ((( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("cache_rework") &&  !array_key_exists("footer", $context)) && array_key_exists("page", $context))) {
            // line 3
            yield "    ";
            $context["footer"] = SwTwigFunction::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, false, 3);
        }
        // line 5
        yield "
";
        // line 6
        yield from $this->unwrap()->yieldBlock('layout_footer_inner_container', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_footer_inner_container(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_inner_container"));

        // line 7
        yield "    <div class=\"container\">
        ";
        // line 8
        yield from $this->unwrap()->yieldBlock('layout_footer_navigation', $context, $blocks);
        // line 142
        yield "
        ";
        // line 143
        yield from $this->unwrap()->yieldBlock('layout_footer_payment_shipping_logos', $context, $blocks);
        // line 190
        yield "    </div>

    ";
        // line 192
        yield from $this->unwrap()->yieldBlock('layout_footer_bottom', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_footer_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation"));

        // line 9
        yield "            <div
                id=\"footerColumns\"
                class=\"row footer-columns\"
                data-collapse-footer-columns=\"true\"
                role=\"list\"
            >
                ";
        // line 15
        yield from $this->unwrap()->yieldBlock('layout_footer_navigation_hotline', $context, $blocks);
        // line 65
        yield "
                ";
        // line 66
        yield from $this->unwrap()->yieldBlock('layout_footer_navigation_columns', $context, $blocks);
        // line 140
        yield "            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_footer_navigation_hotline(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_hotline"));

        // line 16
        yield "                    <div class=\"col-md-4 footer-column js-footer-column\">
                        ";
        // line 17
        yield from $this->unwrap()->yieldBlock('layout_footer_navigation_hotline_headline', $context, $blocks);
        // line 42
        yield "
                        ";
        // line 43
        yield from $this->unwrap()->yieldBlock('layout_footer_navigation_hotline_content', $context, $blocks);
        // line 63
        yield "                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_footer_navigation_hotline_headline(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_hotline_headline"));

        // line 18
        yield "                            <div class=\"footer-column-headline footer-headline js-footer-column-headline js-collapse-footer-column-trigger\"
                                 id=\"collapseFooterHotlineTitle\"
                                 data-bs-target=\"#collapseFooterHotline\"
                                 aria-expanded=\"true\"
                                 aria-controls=\"collapseFooterHotline\"
                                 role=\"listitem\">
                                ";
        // line 24
        yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.serviceHotlineHeadline"));
        yield "

                                ";
        // line 26
        yield from $this->unwrap()->yieldBlock('layout_footer_navigation_hotline_icons', $context, $blocks);
        // line 40
        yield "                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_footer_navigation_hotline_icons(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_hotline_icons"));

        // line 27
        yield "                                    <div class=\"footer-column-toggle\">
                                        <span class=\"footer-plus-icon\">
                                            ";
        // line 29
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 29);
        })())->unwrap()->yield(CoreExtension::merge($context, ["ariaLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.expand"), "name" => "plus"]));
        // line 32
        yield "                                        </span>
                                        <span class=\"footer-minus-icon\">
                                            ";
        // line 34
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 34);
        })())->unwrap()->yield(CoreExtension::merge($context, ["ariaLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.collapse"), "name" => "minus"]));
        // line 37
        yield "                                        </span>
                                    </div>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_footer_navigation_hotline_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_hotline_content"));

        // line 44
        yield "                            ";
        $context["cmsPath"] = (($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) ? ("frontend.cms.page.full") : ("frontend.cms.page"));
        // line 45
        yield "                            <div id=\"collapseFooterHotline\"
                                 class=\"footer-column-content collapse js-footer-column-content footer-contact\"
                                 aria-labelledby=\"collapseFooterHotlineTitle\"
                                 role=\"listitem\">
                                <div class=\"footer-column-content-inner\">
                                    <p class=\"footer-contact-hotline\">
                                        ";
        // line 51
        yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.serviceHotline"));
        yield "
                                    </p>
                                </div>
                                <div class=\"footer-contact-form\">
                                    ";
        // line 55
        $context["contactSnippetKey"] = (($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) ? ("footer.serviceContactTextPage") : ("footer.serviceContactText"));
        // line 56
        yield "
                                    ";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["contactSnippetKey"] ?? null), ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(        // line 58
($context["cmsPath"] ?? null), ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.contactPage")])]);
        // line 59
        yield "
                                </div>
                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_footer_navigation_columns(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_columns"));

        // line 67
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "navigation", [], "any", false, false, false, 67), "tree", [], "any", false, false, false, 67));
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
        foreach ($context['_seq'] as $context["_key"] => $context["root"]) {
            // line 68
            yield "                        ";
            yield from $this->unwrap()->yieldBlock('layout_footer_navigation_column', $context, $blocks);
            // line 138
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
        unset($context['_seq'], $context['_key'], $context['root'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 68
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_footer_navigation_column(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_column"));

        // line 69
        yield "                            <div class=\"col-md-4 footer-column js-footer-column\">
                                ";
        // line 70
        yield from $this->unwrap()->yieldBlock('layout_footer_navigation_information_headline', $context, $blocks);
        // line 102
        yield "
                                ";
        // line 103
        yield from $this->unwrap()->yieldBlock('layout_footer_navigation_information_content', $context, $blocks);
        // line 136
        yield "                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_footer_navigation_information_headline(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_headline"));

        // line 71
        yield "                                    <div class=\"footer-column-headline footer-headline js-collapse-footer-column-trigger\"
                                         data-bs-target=\"#collapseFooterTitle";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 72), "html", null, true);
        yield "\"
                                         aria-expanded=\"true\"
                                         aria-controls=\"collapseFooter";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 74), "html", null, true);
        yield "\">

                                        ";
        // line 76
        if ((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 76), "type", [], "any", false, false, false, 76) == "folder")) {
            // line 77
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 77), "translated", [], "any", false, false, false, 77), "name", [], "any", false, false, false, 77), "html", null, true);
            yield "
                                        ";
        } else {
            // line 79
            yield "                                            <a href=\"";
            yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, SwTwigFunction::getAttribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 79));
            yield "\"
                                               ";
            // line 80
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(SwTwigFunction::getAttribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 80))) {
                yield "target=\"_blank\"";
            }
            // line 81
            yield "                                               title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 81), "translated", [], "any", false, false, false, 81), "name", [], "any", false, false, false, 81), "html", null, true);
            yield "\">
                                                ";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 82), "translated", [], "any", false, false, false, 82), "name", [], "any", false, false, false, 82), "html", null, true);
            yield "
                                            </a>
                                        ";
        }
        // line 85
        yield "
                                        ";
        // line 86
        yield from $this->unwrap()->yieldBlock('layout_footer_navigation_information_icons', $context, $blocks);
        // line 100
        yield "                                    </div>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_footer_navigation_information_icons(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_icons"));

        // line 87
        yield "                                            <div class=\"footer-column-toggle\">
                                                <span class=\"footer-plus-icon\">
                                                    ";
        // line 89
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 89);
        })())->unwrap()->yield(CoreExtension::merge($context, ["ariaLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.expand"), "name" => "plus"]));
        // line 92
        yield "                                                </span>
                                                <span class=\"footer-minus-icon\">
                                                    ";
        // line 94
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 94);
        })())->unwrap()->yield(CoreExtension::merge($context, ["ariaLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.collapse"), "name" => "minus"]));
        // line 97
        yield "                                                </span>
                                            </div>
                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 103
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_footer_navigation_information_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_content"));

        // line 104
        yield "                                    <div id=\"collapseFooter";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 104), "html", null, true);
        yield "\"
                                         class=\"footer-column-content collapse js-footer-column-content\"
                                         aria-labelledby=\"collapseFooterTitle";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 106), "html", null, true);
        yield "\">
                                        <div class=\"footer-column-content-inner\">
                                            ";
        // line 108
        yield from $this->unwrap()->yieldBlock('layout_footer_navigation_information_links', $context, $blocks);
        // line 133
        yield "                                        </div>
                                    </div>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 108
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_footer_navigation_information_links(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_links"));

        // line 109
        yield "                                                <ul class=\"list-unstyled\">
                                                    ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(SwTwigFunction::getAttribute($this->env, $this->source, ($context["root"] ?? null), "children", [], "any", false, false, false, 110));
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
            // line 111
            yield "                                                        ";
            $context["category"] = SwTwigFunction::getAttribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 111);
            // line 112
            yield "                                                        ";
            $context["name"] = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 112), "name", [], "any", false, false, false, 112);
            // line 113
            yield "
                                                        ";
            // line 114
            yield from $this->unwrap()->yieldBlock('layout_footer_navigation_information_link_item', $context, $blocks);
            // line 130
            yield "                                                    ";
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
        // line 131
        yield "                                                </ul>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 114
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_footer_navigation_information_link_item(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_link_item"));

        // line 115
        yield "                                                            <li class=\"footer-link-item\">
                                                                ";
        // line 116
        yield from $this->unwrap()->yieldBlock('layout_footer_navigation_information_link', $context, $blocks);
        // line 128
        yield "                                                            </li>
                                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 116
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_footer_navigation_information_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_link"));

        // line 117
        yield "                                                                    ";
        if ((SwTwigFunction::getAttribute($this->env, $this->source, ($context["category"] ?? null), "type", [], "any", false, false, false, 117) == "folder")) {
            // line 118
            yield "                                                                        <div>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "</div>
                                                                    ";
        } else {
            // line 120
            yield "                                                                        <a class=\"footer-link\"
                                                                           href=\"";
            // line 121
            yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["category"] ?? null));
            yield "\"
                                                                           ";
            // line 122
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["category"] ?? null))) {
                yield "target=\"_blank\"";
            }
            // line 123
            yield "                                                                           title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\">
                                                                            ";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "
                                                                        </a>
                                                                    ";
        }
        // line 127
        yield "                                                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 143
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_footer_payment_shipping_logos(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_payment_shipping_logos"));

        // line 144
        yield "            <div class=\"footer-logos\">
                ";
        // line 145
        yield from $this->unwrap()->yieldBlock('layout_footer_payment_logos', $context, $blocks);
        // line 166
        yield "
                ";
        // line 167
        yield from $this->unwrap()->yieldBlock('layout_footer_shipping_logos', $context, $blocks);
        // line 188
        yield "            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 145
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_footer_payment_logos(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_payment_logos"));

        // line 146
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(SwTwigFunction::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "paymentMethods", [], "any", false, false, false, 146));
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
        foreach ($context['_seq'] as $context["_key"] => $context["paymentMethod"]) {
            // line 147
            yield "                        ";
            yield from $this->unwrap()->yieldBlock('layout_footer_payment_logo', $context, $blocks);
            // line 164
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
        unset($context['_seq'], $context['_key'], $context['paymentMethod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 147
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_footer_payment_logo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_payment_logo"));

        // line 148
        yield "                            ";
        if (SwTwigFunction::getAttribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 148)) {
            // line 149
            yield "                                <div class=\"footer-logo is-payment\">
                                    ";
            // line 150
            yield from             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 150);
            })())->unwrap()->yield(CoreExtension::merge($context, ["media" => SwTwigFunction::getAttribute($this->env, $this->source,             // line 151
($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 151), "sizes" => ["default" => "100px"], "attributes" => ["class" => "img-fluid footer-logo-image", "alt" => ((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source,             // line 157
($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 157), "translated", [], "any", false, false, false, 157), "alt", [], "any", false, false, false, 157)) ? (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 157), "translated", [], "any", false, false, false, 157), "alt", [], "any", false, false, false, 157)) : (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "translated", [], "any", false, false, false, 157), "name", [], "any", false, false, false, 157))), "title" => ((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source,             // line 158
($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 158), "translated", [], "any", false, false, false, 158), "title", [], "any", false, false, false, 158)) ? (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 158), "translated", [], "any", false, false, false, 158), "title", [], "any", false, false, false, 158)) : (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "translated", [], "any", false, false, false, 158), "name", [], "any", false, false, false, 158)))], "name" => "footer-payment-image-thumbnails"]));
            // line 161
            yield "                                </div>
                            ";
        }
        // line 163
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 167
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_footer_shipping_logos(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_shipping_logos"));

        // line 168
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(SwTwigFunction::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "shippingMethods", [], "any", false, false, false, 168));
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
        foreach ($context['_seq'] as $context["_key"] => $context["shippingMethod"]) {
            // line 169
            yield "                        ";
            yield from $this->unwrap()->yieldBlock('layout_footer_shipping_logo', $context, $blocks);
            // line 186
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
        unset($context['_seq'], $context['_key'], $context['shippingMethod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 169
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_footer_shipping_logo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_shipping_logo"));

        // line 170
        yield "                            ";
        if (SwTwigFunction::getAttribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 170)) {
            // line 171
            yield "                                <div class=\"footer-logo is-shipping\">
                                    ";
            // line 172
            yield from             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 172);
            })())->unwrap()->yield(CoreExtension::merge($context, ["media" => SwTwigFunction::getAttribute($this->env, $this->source,             // line 173
($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 173), "sizes" => ["default" => "100px"], "attributes" => ["class" => "img-fluid footer-logo-image", "alt" => ((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source,             // line 179
($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 179), "translated", [], "any", false, false, false, 179), "alt", [], "any", false, false, false, 179)) ? (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 179), "translated", [], "any", false, false, false, 179), "alt", [], "any", false, false, false, 179)) : (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "translated", [], "any", false, false, false, 179), "name", [], "any", false, false, false, 179))), "title" => ((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source,             // line 180
($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 180), "translated", [], "any", false, false, false, 180), "title", [], "any", false, false, false, 180)) ? (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 180), "translated", [], "any", false, false, false, 180), "title", [], "any", false, false, false, 180)) : (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "translated", [], "any", false, false, false, 180), "name", [], "any", false, false, false, 180)))], "name" => "footer-shipping-image-thumbnails"]));
            // line 183
            yield "                                </div>
                            ";
        }
        // line 185
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 192
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_footer_bottom(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_bottom"));

        // line 193
        yield "        <div class=\"footer-bottom\">
            ";
        // line 194
        yield from $this->unwrap()->yieldBlock('layout_footer_service_menu', $context, $blocks);
        // line 216
        yield "
            ";
        // line 217
        yield from $this->unwrap()->yieldBlock('layout_footer_vat', $context, $blocks);
        // line 237
        yield "
            ";
        // line 238
        yield from $this->unwrap()->yieldBlock('layout_footer_copyright', $context, $blocks);
        // line 244
        yield "        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 194
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_footer_service_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_service_menu"));

        // line 195
        yield "                <div class=\"container\">
                    ";
        // line 196
        yield from $this->unwrap()->yieldBlock('layout_footer_service_menu_content', $context, $blocks);
        // line 214
        yield "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 196
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_footer_service_menu_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_service_menu_content"));

        // line 197
        yield "                        ";
        $_v0 = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 198
            yield "                            <ul class=\"footer-service-menu-list list-unstyled\">
                                ";
            // line 199
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(SwTwigFunction::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "serviceMenu", [], "any", false, false, false, 199));
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
            foreach ($context['_seq'] as $context["_key"] => $context["serviceMenuItem"]) {
                // line 200
                yield "                                    ";
                yield from $this->unwrap()->yieldBlock('layout_footer_service_menu_item', $context, $blocks);
                // line 210
                yield "                                ";
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
            unset($context['_seq'], $context['_key'], $context['serviceMenuItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 211
            yield "                            </ul>
                        ";
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 197
        yield Twig\Extension\CoreExtension::spaceless($_v0);
        // line 213
        yield "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 200
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_footer_service_menu_item(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_service_menu_item"));

        // line 201
        yield "                                        <li class=\"footer-service-menu-item\">
                                            <a class=\"footer-service-menu-link\"
                                               href=\"";
        // line 203
        yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["serviceMenuItem"] ?? null));
        yield "\"
                                               ";
        // line 204
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["serviceMenuItem"] ?? null))) {
            yield "target=\"_blank\"";
        }
        // line 205
        yield "                                               title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["serviceMenuItem"] ?? null), "translated", [], "any", false, false, false, 205), "name", [], "any", false, false, false, 205), "html", null, true);
        yield "\">
                                                ";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["serviceMenuItem"] ?? null), "translated", [], "any", false, false, false, 206), "name", [], "any", false, false, false, 206), "html", null, true);
        yield "
                                            </a>
                                        </li>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 217
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_footer_vat(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_vat"));

        // line 218
        yield "                ";
        $context["cmsPath"] = (($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) ? ("frontend.cms.page.full") : ("frontend.cms.page"));
        // line 219
        yield "                ";
        if ((($context["showVatNotice"] ?? null) ||  !array_key_exists("showVatNotice", $context))) {
            // line 220
            yield "                    <div class=\"footer-vat\">";
            // line 221
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) {
                // line 222
                $context["shippingSnippetKey"] = (((SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "taxState", [], "any", false, false, false, 222) == "gross")) ? ("footer.includeVatTextPage") : ("footer.excludeVatTextPage"));
            } else {
                // line 224
                $context["shippingSnippetKey"] = (((SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "taxState", [], "any", false, false, false, 224) == "gross")) ? ("footer.includeVatText") : ("footer.excludeVatText"));
            }
            // line 227
            yield "<p>
                            ";
            // line 229
            yield "                            ";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["shippingSnippetKey"] ?? null), ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(            // line 230
($context["cmsPath"] ?? null), ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shippingPaymentInfoPage")]), "%star%" => (($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) ? ("") : ("* "))]);
            // line 232
            yield "
                        </p>
                    </div>
                ";
        }
        // line 236
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 238
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_footer_copyright(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_copyright"));

        // line 239
        yield "                <div class=\"footer-copyright\">
                    ";
        // line 240
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 240);
        })())->unwrap()->yield(CoreExtension::merge($context, ["size" => "xs", "name" => "shopware"]));
        // line 241
        yield "                    ";
        yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.copyrightInfo"));
        yield "
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
        return "@Storefront/storefront/layout/footer/footer.html.twig";
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
        return array (  1110 => 241,  1102 => 240,  1099 => 239,  1089 => 238,  1081 => 236,  1075 => 232,  1073 => 230,  1071 => 229,  1068 => 227,  1065 => 224,  1062 => 222,  1060 => 221,  1058 => 220,  1055 => 219,  1052 => 218,  1042 => 217,  1030 => 206,  1025 => 205,  1021 => 204,  1017 => 203,  1013 => 201,  1003 => 200,  995 => 213,  993 => 197,  988 => 211,  974 => 210,  971 => 200,  954 => 199,  951 => 198,  948 => 197,  938 => 196,  929 => 214,  927 => 196,  924 => 195,  914 => 194,  905 => 244,  903 => 238,  900 => 237,  898 => 217,  895 => 216,  893 => 194,  890 => 193,  880 => 192,  872 => 185,  868 => 183,  866 => 180,  865 => 179,  864 => 173,  857 => 172,  854 => 171,  851 => 170,  841 => 169,  833 => 187,  819 => 186,  816 => 169,  798 => 168,  788 => 167,  780 => 163,  776 => 161,  774 => 158,  773 => 157,  772 => 151,  765 => 150,  762 => 149,  759 => 148,  749 => 147,  741 => 165,  727 => 164,  724 => 147,  706 => 146,  696 => 145,  687 => 188,  685 => 167,  682 => 166,  680 => 145,  677 => 144,  667 => 143,  659 => 127,  653 => 124,  648 => 123,  644 => 122,  640 => 121,  637 => 120,  631 => 118,  628 => 117,  618 => 116,  609 => 128,  607 => 116,  604 => 115,  594 => 114,  585 => 131,  571 => 130,  569 => 114,  566 => 113,  563 => 112,  560 => 111,  543 => 110,  540 => 109,  530 => 108,  520 => 133,  518 => 108,  513 => 106,  507 => 104,  497 => 103,  487 => 97,  479 => 94,  475 => 92,  467 => 89,  463 => 87,  453 => 86,  444 => 100,  442 => 86,  439 => 85,  433 => 82,  428 => 81,  424 => 80,  419 => 79,  413 => 77,  411 => 76,  406 => 74,  401 => 72,  398 => 71,  388 => 70,  379 => 136,  377 => 103,  374 => 102,  372 => 70,  369 => 69,  359 => 68,  351 => 139,  337 => 138,  334 => 68,  316 => 67,  306 => 66,  295 => 59,  293 => 58,  292 => 57,  289 => 56,  287 => 55,  280 => 51,  272 => 45,  269 => 44,  259 => 43,  249 => 37,  241 => 34,  237 => 32,  229 => 29,  225 => 27,  215 => 26,  206 => 40,  204 => 26,  199 => 24,  191 => 18,  181 => 17,  172 => 63,  170 => 43,  167 => 42,  165 => 17,  162 => 16,  152 => 15,  143 => 140,  141 => 66,  138 => 65,  136 => 15,  128 => 9,  118 => 8,  110 => 192,  106 => 190,  104 => 143,  101 => 142,  99 => 8,  96 => 7,  79 => 6,  76 => 5,  72 => 3,  70 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @deprecated tag:v6.7.0 - Fallback will be removed, add footer directly #}
{% if not feature('cache_rework') and not footer is defined and page is defined %}
    {% set footer = page.footer %}
{% endif %}

{% block layout_footer_inner_container %}
    <div class=\"container\">
        {% block layout_footer_navigation %}
            <div
                id=\"footerColumns\"
                class=\"row footer-columns\"
                data-collapse-footer-columns=\"true\"
                role=\"list\"
            >
                {% block layout_footer_navigation_hotline %}
                    <div class=\"col-md-4 footer-column js-footer-column\">
                        {% block layout_footer_navigation_hotline_headline %}
                            <div class=\"footer-column-headline footer-headline js-footer-column-headline js-collapse-footer-column-trigger\"
                                 id=\"collapseFooterHotlineTitle\"
                                 data-bs-target=\"#collapseFooterHotline\"
                                 aria-expanded=\"true\"
                                 aria-controls=\"collapseFooterHotline\"
                                 role=\"listitem\">
                                {{ 'footer.serviceHotlineHeadline'|trans|sw_sanitize }}

                                {% block layout_footer_navigation_hotline_icons %}
                                    <div class=\"footer-column-toggle\">
                                        <span class=\"footer-plus-icon\">
                                            {% sw_icon 'plus' style {
                                                ariaLabel: 'general.expand'|trans
                                            } %}
                                        </span>
                                        <span class=\"footer-minus-icon\">
                                            {% sw_icon 'minus' style {
                                                ariaLabel: 'general.collapse'|trans
                                            } %}
                                        </span>
                                    </div>
                                {% endblock %}
                            </div>
                        {% endblock %}

                        {% block layout_footer_navigation_hotline_content %}
                            {% set cmsPath = feature('ACCESSIBILITY_TWEAKS') ? 'frontend.cms.page.full' : 'frontend.cms.page' %}
                            <div id=\"collapseFooterHotline\"
                                 class=\"footer-column-content collapse js-footer-column-content footer-contact\"
                                 aria-labelledby=\"collapseFooterHotlineTitle\"
                                 role=\"listitem\">
                                <div class=\"footer-column-content-inner\">
                                    <p class=\"footer-contact-hotline\">
                                        {{ 'footer.serviceHotline'|trans|sw_sanitize }}
                                    </p>
                                </div>
                                <div class=\"footer-contact-form\">
                                    {% set contactSnippetKey = feature('ACCESSIBILITY_TWEAKS') ? 'footer.serviceContactTextPage' : 'footer.serviceContactText' %}

                                    {{ contactSnippetKey|trans({
                                        '%url%': path(cmsPath, { id: config('core.basicInformation.contactPage') })
                                    })|raw }}
                                </div>
                            </div>
                        {% endblock %}
                    </div>
                {% endblock %}

                {% block layout_footer_navigation_columns %}
                    {% for root in footer.navigation.tree %}
                        {% block layout_footer_navigation_column %}
                            <div class=\"col-md-4 footer-column js-footer-column\">
                                {% block layout_footer_navigation_information_headline %}
                                    <div class=\"footer-column-headline footer-headline js-collapse-footer-column-trigger\"
                                         data-bs-target=\"#collapseFooterTitle{{ loop.index }}\"
                                         aria-expanded=\"true\"
                                         aria-controls=\"collapseFooter{{ loop.index }}\">

                                        {% if root.category.type == 'folder' %}
                                            {{ root.category.translated.name }}
                                        {% else %}
                                            <a href=\"{{ category_url(root.category) }}\"
                                               {% if category_linknewtab(root.category) %}target=\"_blank\"{% endif %}
                                               title=\"{{ root.category.translated.name }}\">
                                                {{ root.category.translated.name }}
                                            </a>
                                        {% endif %}

                                        {% block layout_footer_navigation_information_icons %}
                                            <div class=\"footer-column-toggle\">
                                                <span class=\"footer-plus-icon\">
                                                    {% sw_icon 'plus' style {
                                                        ariaLabel: 'general.expand'|trans
                                                    } %}
                                                </span>
                                                <span class=\"footer-minus-icon\">
                                                    {% sw_icon 'minus' style {
                                                        ariaLabel: 'general.collapse'|trans
                                                    } %}
                                                </span>
                                            </div>
                                        {% endblock %}
                                    </div>
                                {% endblock %}

                                {% block layout_footer_navigation_information_content %}
                                    <div id=\"collapseFooter{{ loop.index }}\"
                                         class=\"footer-column-content collapse js-footer-column-content\"
                                         aria-labelledby=\"collapseFooterTitle{{ loop.index }}\">
                                        <div class=\"footer-column-content-inner\">
                                            {% block layout_footer_navigation_information_links %}
                                                <ul class=\"list-unstyled\">
                                                    {% for treeItem in root.children %}
                                                        {% set category = treeItem.category %}
                                                        {% set name = category.translated.name %}

                                                        {% block layout_footer_navigation_information_link_item %}
                                                            <li class=\"footer-link-item\">
                                                                {% block layout_footer_navigation_information_link %}
                                                                    {% if category.type == 'folder' %}
                                                                        <div>{{ name }}</div>
                                                                    {% else %}
                                                                        <a class=\"footer-link\"
                                                                           href=\"{{ category_url(category) }}\"
                                                                           {% if category_linknewtab(category) %}target=\"_blank\"{% endif %}
                                                                           title=\"{{ name }}\">
                                                                            {{ name }}
                                                                        </a>
                                                                    {% endif %}
                                                                {% endblock %}
                                                            </li>
                                                        {% endblock %}
                                                    {% endfor %}
                                                </ul>
                                            {% endblock %}
                                        </div>
                                    </div>
                                {% endblock %}
                            </div>
                        {% endblock %}
                    {% endfor %}
                {% endblock %}
            </div>
        {% endblock %}

        {% block layout_footer_payment_shipping_logos %}
            <div class=\"footer-logos\">
                {% block layout_footer_payment_logos %}
                    {% for paymentMethod in footer.paymentMethods %}
                        {% block layout_footer_payment_logo %}
                            {% if paymentMethod.media %}
                                <div class=\"footer-logo is-payment\">
                                    {% sw_thumbnails 'footer-payment-image-thumbnails' with {
                                        media: paymentMethod.media,
                                        sizes: {
                                            default: '100px'
                                        },
                                        attributes: {
                                            class: 'img-fluid footer-logo-image',
                                            alt: (paymentMethod.media.translated.alt ?: paymentMethod.translated.name),
                                            title: (paymentMethod.media.translated.title ?: paymentMethod.translated.name)
                                        }
                                    } %}
                                </div>
                            {% endif %}
                        {% endblock %}
                    {% endfor %}
                {% endblock %}

                {% block layout_footer_shipping_logos %}
                    {% for shippingMethod in footer.shippingMethods %}
                        {% block layout_footer_shipping_logo %}
                            {% if shippingMethod.media %}
                                <div class=\"footer-logo is-shipping\">
                                    {% sw_thumbnails 'footer-shipping-image-thumbnails' with {
                                        media: shippingMethod.media,
                                        sizes: {
                                            default: '100px'
                                        },
                                        attributes: {
                                            class: 'img-fluid footer-logo-image',
                                            alt: (shippingMethod.media.translated.alt ?: shippingMethod.translated.name),
                                            title: (shippingMethod.media.translated.title ?: shippingMethod.translated.name)
                                        }
                                    } %}
                                </div>
                            {% endif %}
                        {% endblock %}
                    {% endfor %}
                {% endblock %}
            </div>
        {% endblock %}
    </div>

    {% block layout_footer_bottom %}
        <div class=\"footer-bottom\">
            {% block layout_footer_service_menu %}
                <div class=\"container\">
                    {% block layout_footer_service_menu_content %}
                        {% apply spaceless %}
                            <ul class=\"footer-service-menu-list list-unstyled\">
                                {% for serviceMenuItem in footer.serviceMenu %}
                                    {% block layout_footer_service_menu_item %}
                                        <li class=\"footer-service-menu-item\">
                                            <a class=\"footer-service-menu-link\"
                                               href=\"{{ category_url(serviceMenuItem) }}\"
                                               {% if category_linknewtab(serviceMenuItem) %}target=\"_blank\"{% endif %}
                                               title=\"{{ serviceMenuItem.translated.name }}\">
                                                {{ serviceMenuItem.translated.name }}
                                            </a>
                                        </li>
                                    {% endblock %}
                                {% endfor %}
                            </ul>
                        {% endapply %}
                    {% endblock %}
                </div>
            {% endblock %}

            {% block layout_footer_vat %}
                {% set cmsPath = feature('ACCESSIBILITY_TWEAKS') ? 'frontend.cms.page.full' : 'frontend.cms.page' %}
                {% if showVatNotice or showVatNotice is not defined %}
                    <div class=\"footer-vat\">
                        {%- if feature('ACCESSIBILITY_TWEAKS') -%}
                            {% set shippingSnippetKey = context.taxState == 'gross' ? 'footer.includeVatTextPage' : 'footer.excludeVatTextPage' %}
                        {%- else -%}
                            {% set shippingSnippetKey = context.taxState == 'gross' ? 'footer.includeVatText' : 'footer.excludeVatText' %}
                        {%- endif -%}

                        <p>
                            {# @deprecated tag:v6.7.0 - The %star% translation parameter will be removed. Translation text will no longer contain the asterisk/star. #}
                            {{ shippingSnippetKey|trans({
                                '%url%': path(cmsPath, { id: config('core.basicInformation.shippingPaymentInfoPage') }),
                                '%star%': feature('ACCESSIBILITY_TWEAKS') ? '' : '* '
                            })|raw }}
                        </p>
                    </div>
                {% endif %}
            {% endblock %}

            {% block layout_footer_copyright %}
                <div class=\"footer-copyright\">
                    {% sw_icon 'shopware' style { size:'xs' } %}
                    {{ 'footer.copyrightInfo'|trans|sw_sanitize }}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/layout/footer/footer.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/layout/footer/footer.html.twig");
    }
}
