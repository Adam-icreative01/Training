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

/* @Storefront/storefront/page/account/sidebar.html.twig */
class __TwigTemplate_66fc6fb8a659aa6b0af99815f6fad928 extends Template
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
            'page_account_sidebar_inner' => [$this, 'block_page_account_sidebar_inner'],
            'page_account_sidebar_header' => [$this, 'block_page_account_sidebar_header'],
            'page_account_sidebar_menu' => [$this, 'block_page_account_sidebar_menu'],
            'page_account_sidebar_menu_inner' => [$this, 'block_page_account_sidebar_menu_inner'],
            'page_account_sidebar_link_home' => [$this, 'block_page_account_sidebar_link_home'],
            'page_account_sidebar_link_profile' => [$this, 'block_page_account_sidebar_link_profile'],
            'page_account_sidebar_link_address' => [$this, 'block_page_account_sidebar_link_address'],
            'page_account_sidebar_link_payment' => [$this, 'block_page_account_sidebar_link_payment'],
            'page_account_sidebar_link_orders' => [$this, 'block_page_account_sidebar_link_orders'],
            'page_account_sidebar_footer' => [$this, 'block_page_account_sidebar_footer'],
            'page_account_sidebar_logout' => [$this, 'block_page_account_sidebar_logout'],
            'page_account_sidebar_guest_abort' => [$this, 'block_page_account_sidebar_guest_abort'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/sidebar.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('page_account_sidebar_inner', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_account_sidebar_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_inner"));

        // line 2
        yield "    <div class=\"";
        if ( !($context["headerWidget"] ?? null)) {
            yield "account-aside";
        } else {
            yield "header-account-menu";
        }
        yield "\">
        <div class=\"card account-menu-inner\">
            ";
        // line 4
        yield from $this->unwrap()->yieldBlock('page_account_sidebar_header', $context, $blocks);
        // line 14
        yield "
            ";
        // line 15
        yield from $this->unwrap()->yieldBlock('page_account_sidebar_menu', $context, $blocks);
        // line 70
        yield "
            ";
        // line 71
        yield from $this->unwrap()->yieldBlock('page_account_sidebar_footer', $context, $blocks);
        // line 97
        yield "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_account_sidebar_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_header"));

        // line 5
        yield "                ";
        if ( !($context["headerWidget"] ?? null)) {
            // line 6
            yield "                    <div class=\"card-header account-aside-header\">
                        ";
            // line 7
            yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.greetings"));
            yield "
                        ";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "html", null, true);
            yield "
                        ";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 9), "firstName", [], "any", false, false, false, 9), "html", null, true);
            yield "
                        ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 10), "lastName", [], "any", false, false, false, 10), "html", null, true);
            yield "
                    </div>
                ";
        }
        // line 13
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_account_sidebar_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_menu"));

        // line 16
        yield "                ";
        if ( !SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 16), "guest", [], "any", false, false, false, 16)) {
            // line 17
            yield "                    <nav class=\"list-group list-group-flush account-aside-list-group\"";
            if ((($context["headerWidget"] ?? null) == null)) {
                yield " aria-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.myAccount")), "html", null, true);
                yield "\"";
            }
            yield ">
                        ";
            // line 18
            yield from $this->unwrap()->yieldBlock('page_account_sidebar_menu_inner', $context, $blocks);
            // line 67
            yield "                    </nav>
                ";
        }
        // line 69
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_account_sidebar_menu_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_menu_inner"));

        // line 19
        yield "                            ";
        yield from $this->unwrap()->yieldBlock('page_account_sidebar_link_home', $context, $blocks);
        // line 27
        yield "
                            ";
        // line 28
        yield from $this->unwrap()->yieldBlock('page_account_sidebar_link_profile', $context, $blocks);
        // line 36
        yield "
                            ";
        // line 37
        yield from $this->unwrap()->yieldBlock('page_account_sidebar_link_address', $context, $blocks);
        // line 45
        yield "
                            ";
        // line 47
        yield "                            ";
        yield from $this->unwrap()->yieldBlock('page_account_sidebar_link_payment', $context, $blocks);
        // line 57
        yield "
                            ";
        // line 58
        yield from $this->unwrap()->yieldBlock('page_account_sidebar_link_orders', $context, $blocks);
        // line 66
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_account_sidebar_link_home(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_link_home"));

        // line 20
        yield "                                <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.home.page");
        yield "\"
                                   title=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewLink")), "html", null, true);
        yield "\"
                                   class=\"list-group-item list-group-item-action account-aside-item";
        // line 22
        if ((($context["activeRoute"] ?? null) === "frontend.account.home.page")) {
            yield " is-active";
        }
        yield "\"
                                   ";
        // line 23
        if ((($context["activeRoute"] ?? null) === "frontend.account.home.page")) {
            yield " aria-current=\"page\"";
        }
        yield ">
                                    ";
        // line 24
        yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewLink"));
        yield "
                                </a>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_account_sidebar_link_profile(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_link_profile"));

        // line 29
        yield "                                <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.profile.page");
        yield "\"
                                   title=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileLink")), "html", null, true);
        yield "\"
                                   class=\"list-group-item list-group-item-action account-aside-item";
        // line 31
        if ((($context["activeRoute"] ?? null) === "frontend.account.profile.page")) {
            yield " is-active";
        }
        yield "\"
                                   ";
        // line 32
        if ((($context["activeRoute"] ?? null) === "frontend.account.profile.page")) {
            yield " aria-current=\"page\"";
        }
        yield ">
                                    ";
        // line 33
        yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileLink"));
        yield "
                                </a>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_account_sidebar_link_address(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_link_address"));

        // line 38
        yield "                                <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.address.page");
        yield "\"
                                   title=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressLink")), "html", null, true);
        yield "\"
                                   class=\"list-group-item list-group-item-action account-aside-item";
        // line 40
        if ((($context["activeRoute"] ?? null) === "frontend.account.address.page")) {
            yield " is-active";
        }
        yield "\"
                                   ";
        // line 41
        if ((($context["activeRoute"] ?? null) === "frontend.account.address.page")) {
            yield " aria-current=\"page\"";
        }
        yield ">
                                    ";
        // line 42
        yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressLink"));
        yield "
                                </a>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 47
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_account_sidebar_link_payment(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_link_payment"));

        // line 48
        yield "                                ";
        if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.7.0.0")) {
            // line 49
            yield "                                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.payment.page");
            yield "\"
                                   title=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.paymentLink")), "html", null, true);
            yield "\"
                                   class=\"list-group-item list-group-item-action account-aside-item";
            // line 51
            if ((($context["activeRoute"] ?? null) === "frontend.account.payment.page")) {
                yield " is-active";
            }
            yield "\"
                                   ";
            // line 52
            if ((($context["activeRoute"] ?? null) === "frontend.account.payment.page")) {
                yield " aria-current=\"page\"";
            }
            yield ">
                                    ";
            // line 53
            yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.paymentLink"));
            yield "
                                </a>
                                ";
        }
        // line 56
        yield "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_account_sidebar_link_orders(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_link_orders"));

        // line 59
        yield "                                <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.order.page");
        yield "\"
                                   title=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.ordersLink")), "html", null, true);
        yield "\"
                                   class=\"list-group-item list-group-item-action account-aside-item";
        // line 61
        if ((($context["activeRoute"] ?? null) === "frontend.account.order.page")) {
            yield " is-active";
        }
        yield "\"
                                   ";
        // line 62
        if ((($context["activeRoute"] ?? null) === "frontend.account.order.page")) {
            yield " aria-current=\"page\"";
        }
        yield ">
                                    ";
        // line 63
        yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.ordersLink"));
        yield "
                                </a>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_account_sidebar_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_footer"));

        // line 72
        yield "                ";
        if (SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 72)) {
            // line 73
            yield "                    ";
            if ( !SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 73), "guest", [], "any", false, false, false, 73)) {
                // line 74
                yield "                        <div class=\"card-footer account-aside-footer\">
                            ";
                // line 75
                yield from $this->unwrap()->yieldBlock('page_account_sidebar_logout', $context, $blocks);
                // line 82
                yield "                        </div>
                    ";
            } else {
                // line 84
                yield "                        <div class=\"card-footer account-aside-footer account-guest-abort\">
                            ";
                // line 85
                yield from $this->unwrap()->yieldBlock('page_account_sidebar_guest_abort', $context, $blocks);
                // line 93
                yield "                        </div>
                    ";
            }
            // line 95
            yield "                ";
        }
        // line 96
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 75
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_account_sidebar_logout(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_logout"));

        // line 76
        yield "                                <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.logout.page");
        yield "\"
                                   class=\"btn btn-link account-aside-btn\">
                                    ";
        // line 78
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/account/sidebar.html.twig", 78);
        })())->unwrap()->yield(CoreExtension::merge($context, ["ariaHidden" => true, "name" => "log-out"]));
        // line 79
        yield "                                    ";
        yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.logout"));
        yield "
                                </a>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 85
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_account_sidebar_guest_abort(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_sidebar_guest_abort"));

        // line 86
        yield "                                <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.logout.page");
        yield "\"
                                   data-account-guest-abort-button=\"true\"
                                   class=\"btn btn-link account-aside-btn\">
                                    ";
        // line 89
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/account/sidebar.html.twig", 89);
        })())->unwrap()->yield(CoreExtension::merge($context, ["ariaHidden" => true, "name" => "log-out"]));
        // line 90
        yield "                                    ";
        yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.guestAbort"));
        yield "
                                </a>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/page/account/sidebar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  548 => 90,  540 => 89,  533 => 86,  523 => 85,  511 => 79,  503 => 78,  497 => 76,  487 => 75,  479 => 96,  476 => 95,  472 => 93,  470 => 85,  467 => 84,  463 => 82,  461 => 75,  458 => 74,  455 => 73,  452 => 72,  442 => 71,  431 => 63,  425 => 62,  419 => 61,  415 => 60,  410 => 59,  400 => 58,  392 => 56,  386 => 53,  380 => 52,  374 => 51,  370 => 50,  365 => 49,  362 => 48,  352 => 47,  341 => 42,  335 => 41,  329 => 40,  325 => 39,  320 => 38,  310 => 37,  299 => 33,  293 => 32,  287 => 31,  283 => 30,  278 => 29,  268 => 28,  257 => 24,  251 => 23,  245 => 22,  241 => 21,  236 => 20,  226 => 19,  218 => 66,  216 => 58,  213 => 57,  210 => 47,  207 => 45,  205 => 37,  202 => 36,  200 => 28,  197 => 27,  194 => 19,  184 => 18,  176 => 69,  172 => 67,  170 => 18,  161 => 17,  158 => 16,  148 => 15,  140 => 13,  134 => 10,  130 => 9,  126 => 8,  122 => 7,  119 => 6,  116 => 5,  106 => 4,  96 => 97,  94 => 71,  91 => 70,  89 => 15,  86 => 14,  84 => 4,  74 => 2,  57 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block page_account_sidebar_inner %}
    <div class=\"{% if not headerWidget %}account-aside{% else %}header-account-menu{% endif %}\">
        <div class=\"card account-menu-inner\">
            {% block page_account_sidebar_header %}
                {% if not headerWidget %}
                    <div class=\"card-header account-aside-header\">
                        {{ 'account.greetings'|trans|sw_sanitize }}
                        {{ context.customer.title }}
                        {{ context.customer.firstName }}
                        {{ context.customer.lastName }}
                    </div>
                {% endif %}
            {% endblock %}

            {% block page_account_sidebar_menu %}
                {% if not context.customer.guest %}
                    <nav class=\"list-group list-group-flush account-aside-list-group\"{% if headerWidget == null %} aria-label=\"{{ 'account.myAccount'|trans|striptags }}\"{% endif %}>
                        {% block page_account_sidebar_menu_inner %}
                            {% block page_account_sidebar_link_home %}
                                <a href=\"{{ path('frontend.account.home.page') }}\"
                                   title=\"{{ 'account.overviewLink'|trans|striptags }}\"
                                   class=\"list-group-item list-group-item-action account-aside-item{% if activeRoute is same as('frontend.account.home.page') %} is-active{% endif %}\"
                                   {% if activeRoute is same as('frontend.account.home.page') %} aria-current=\"page\"{% endif %}>
                                    {{ 'account.overviewLink'|trans|sw_sanitize }}
                                </a>
                            {% endblock %}

                            {% block page_account_sidebar_link_profile %}
                                <a href=\"{{ path('frontend.account.profile.page') }}\"
                                   title=\"{{ 'account.profileLink'|trans|striptags }}\"
                                   class=\"list-group-item list-group-item-action account-aside-item{% if activeRoute is same as('frontend.account.profile.page') %} is-active{% endif %}\"
                                   {% if activeRoute is same as('frontend.account.profile.page') %} aria-current=\"page\"{% endif %}>
                                    {{ 'account.profileLink'|trans|sw_sanitize }}
                                </a>
                            {% endblock %}

                            {% block page_account_sidebar_link_address %}
                                <a href=\"{{ path('frontend.account.address.page') }}\"
                                   title=\"{{ 'account.addressLink'|trans|striptags }}\"
                                   class=\"list-group-item list-group-item-action account-aside-item{% if activeRoute is same as('frontend.account.address.page') %} is-active{% endif %}\"
                                   {% if activeRoute is same as('frontend.account.address.page') %} aria-current=\"page\"{% endif %}>
                                    {{ 'account.addressLink'|trans|sw_sanitize }}
                                </a>
                            {% endblock %}

                            {# @deprecated tag:v6.7.0 - default payment method of a customer will be removed #}
                            {% block page_account_sidebar_link_payment %}
                                {% if not feature('v6.7.0.0') %}
                                <a href=\"{{ path('frontend.account.payment.page') }}\"
                                   title=\"{{ 'account.paymentLink'|trans|striptags }}\"
                                   class=\"list-group-item list-group-item-action account-aside-item{% if activeRoute is same as('frontend.account.payment.page') %} is-active{% endif %}\"
                                   {% if activeRoute is same as('frontend.account.payment.page') %} aria-current=\"page\"{% endif %}>
                                    {{ 'account.paymentLink'|trans|sw_sanitize }}
                                </a>
                                {% endif %}
                            {% endblock %}

                            {% block page_account_sidebar_link_orders %}
                                <a href=\"{{ path('frontend.account.order.page') }}\"
                                   title=\"{{ 'account.ordersLink'|trans|striptags }}\"
                                   class=\"list-group-item list-group-item-action account-aside-item{% if activeRoute is same as('frontend.account.order.page') %} is-active{% endif %}\"
                                   {% if activeRoute is same as('frontend.account.order.page') %} aria-current=\"page\"{% endif %}>
                                    {{ 'account.ordersLink'|trans|sw_sanitize }}
                                </a>
                            {% endblock %}
                        {% endblock %}
                    </nav>
                {% endif %}
            {% endblock %}

            {% block page_account_sidebar_footer %}
                {% if context.customer %}
                    {% if not context.customer.guest %}
                        <div class=\"card-footer account-aside-footer\">
                            {% block page_account_sidebar_logout %}
                                <a href=\"{{ path('frontend.account.logout.page') }}\"
                                   class=\"btn btn-link account-aside-btn\">
                                    {% sw_icon 'log-out' style { ariaHidden: true } %}
                                    {{ 'account.logout'|trans|sw_sanitize }}
                                </a>
                            {% endblock %}
                        </div>
                    {% else %}
                        <div class=\"card-footer account-aside-footer account-guest-abort\">
                            {% block page_account_sidebar_guest_abort %}
                                <a href=\"{{ path('frontend.account.logout.page') }}\"
                                   data-account-guest-abort-button=\"true\"
                                   class=\"btn btn-link account-aside-btn\">
                                    {% sw_icon 'log-out' style { ariaHidden: true } %}
                                    {{ 'account.guestAbort'|trans|sw_sanitize }}
                                </a>
                            {% endblock %}
                        </div>
                    {% endif %}
                {% endif %}
            {% endblock %}
        </div>
    </div>
{% endblock %}
", "@Storefront/storefront/page/account/sidebar.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/page/account/sidebar.html.twig");
    }
}
