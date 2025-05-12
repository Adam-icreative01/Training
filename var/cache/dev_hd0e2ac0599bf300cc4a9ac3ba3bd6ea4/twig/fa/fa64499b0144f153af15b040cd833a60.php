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

/* @Storefront/storefront/layout/header/account-menu.html.twig */
class __TwigTemplate_028eaf841462978f92f6bdef7b00d4fa extends Template
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

        $this->blocks = [
            'utilities_offcanvas_content' => [$this, 'block_utilities_offcanvas_content'],
            'layout_header_actions_account_widget_dropdown_header' => [$this, 'block_layout_header_actions_account_widget_dropdown_header'],
            'layout_header_actions_account_widget_dropdown_login' => [$this, 'block_layout_header_actions_account_widget_dropdown_login'],
            'layout_header_actions_account_widget_dropdown_login_login' => [$this, 'block_layout_header_actions_account_widget_dropdown_login_login'],
            'layout_header_actions_account_widget_dropdown_login_register' => [$this, 'block_layout_header_actions_account_widget_dropdown_login_register'],
            'layout_header_actions_account_widget_dropdown_links' => [$this, 'block_layout_header_actions_account_widget_dropdown_links'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "@Storefront/storefront/utilities/offcanvas.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/account-menu.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/utilities/offcanvas.html.twig", "@Storefront/storefront/layout/header/account-menu.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_utilities_offcanvas_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_offcanvas_content"));

        // line 4
        yield "    <div class=\"account-menu\">
        ";
        // line 5
        yield from $this->unwrap()->yieldBlock('layout_header_actions_account_widget_dropdown_header', $context, $blocks);
        // line 12
        yield "
        ";
        // line 13
        yield from $this->unwrap()->yieldBlock('layout_header_actions_account_widget_dropdown_login', $context, $blocks);
        // line 36
        yield "
        ";
        // line 37
        yield from $this->unwrap()->yieldBlock('layout_header_actions_account_widget_dropdown_links', $context, $blocks);
        // line 42
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_actions_account_widget_dropdown_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_account_widget_dropdown_header"));

        // line 6
        yield "            ";
        if ( !SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 6), "guest", [], "any", false, false, false, 6)) {
            // line 7
            yield "                <div class=\"dropdown-header account-menu-header\">
                    ";
            // line 8
            yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.myAccount"));
            yield "
                </div>
            ";
        }
        // line 11
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_actions_account_widget_dropdown_login(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_account_widget_dropdown_login"));

        // line 14
        yield "            ";
        if ( !SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 14)) {
            // line 15
            yield "                <div class=\"account-menu-login\">
                    ";
            // line 16
            yield from $this->unwrap()->yieldBlock('layout_header_actions_account_widget_dropdown_login_login', $context, $blocks);
            // line 23
            yield "
                    ";
            // line 24
            yield from $this->unwrap()->yieldBlock('layout_header_actions_account_widget_dropdown_login_register', $context, $blocks);
            // line 33
            yield "                </div>
            ";
        }
        // line 35
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_actions_account_widget_dropdown_login_login(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_account_widget_dropdown_login_login"));

        // line 17
        yield "                        <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.login.page");
        yield "\"
                           title=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginSubmit")), "html", null, true);
        yield "\"
                           class=\"btn btn-primary account-menu-login-button\">
                            ";
        // line 20
        yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginSubmit"));
        yield "
                        </a>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_actions_account_widget_dropdown_login_register(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_account_widget_dropdown_login_register"));

        // line 25
        yield "                        <div class=\"account-menu-register\">
                            ";
        // line 26
        yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orRegister"));
        yield "
                            <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.login.page");
        yield "\"
                               title=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orRegisterLink")), "html", null, true);
        yield "\">
                                ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orRegisterLink"))), "html", null, true);
        yield "
                            </a>
                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_actions_account_widget_dropdown_links(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_account_widget_dropdown_links"));

        // line 38
        yield "            <div class=\"account-menu-links\">
                ";
        // line 39
        yield from $this->loadTemplate("@Storefront/storefront/page/account/sidebar.html.twig", "@Storefront/storefront/layout/header/account-menu.html.twig", 39)->unwrap()->yield(CoreExtension::merge($context, ["headerWidget" => true]));
        // line 40
        yield "            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/layout/header/account-menu.html.twig";
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
        return array (  244 => 40,  242 => 39,  239 => 38,  229 => 37,  217 => 29,  213 => 28,  209 => 27,  205 => 26,  202 => 25,  192 => 24,  181 => 20,  176 => 18,  171 => 17,  161 => 16,  153 => 35,  149 => 33,  147 => 24,  144 => 23,  142 => 16,  139 => 15,  136 => 14,  126 => 13,  118 => 11,  112 => 8,  109 => 7,  106 => 6,  96 => 5,  87 => 42,  85 => 37,  82 => 36,  80 => 13,  77 => 12,  75 => 5,  72 => 4,  62 => 3,  45 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% sw_extends '@Storefront/storefront/utilities/offcanvas.html.twig' %}

{% block utilities_offcanvas_content %}
    <div class=\"account-menu\">
        {% block layout_header_actions_account_widget_dropdown_header %}
            {% if not context.customer.guest %}
                <div class=\"dropdown-header account-menu-header\">
                    {{ 'account.myAccount'|trans|sw_sanitize }}
                </div>
            {% endif %}
        {% endblock %}

        {% block layout_header_actions_account_widget_dropdown_login %}
            {% if not context.customer %}
                <div class=\"account-menu-login\">
                    {% block layout_header_actions_account_widget_dropdown_login_login %}
                        <a href=\"{{ path('frontend.account.login.page') }}\"
                           title=\"{{ 'account.loginSubmit'|trans|striptags }}\"
                           class=\"btn btn-primary account-menu-login-button\">
                            {{ 'account.loginSubmit'|trans|sw_sanitize }}
                        </a>
                    {% endblock %}

                    {% block layout_header_actions_account_widget_dropdown_login_register %}
                        <div class=\"account-menu-register\">
                            {{ 'account.orRegister'|trans|sw_sanitize }}
                            <a href=\"{{ path('frontend.account.login.page') }}\"
                               title=\"{{ 'account.orRegisterLink'|trans|striptags }}\">
                                {{ 'account.orRegisterLink'|trans|striptags|lower }}
                            </a>
                        </div>
                    {% endblock %}
                </div>
            {% endif %}
        {% endblock %}

        {% block layout_header_actions_account_widget_dropdown_links %}
            <div class=\"account-menu-links\">
                {% sw_include '@Storefront/storefront/page/account/sidebar.html.twig' with {headerWidget: true} %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/layout/header/account-menu.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/layout/header/account-menu.html.twig");
    }
}
