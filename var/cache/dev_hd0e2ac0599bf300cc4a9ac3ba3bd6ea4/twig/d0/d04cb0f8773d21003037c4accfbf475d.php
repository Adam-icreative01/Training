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

/* @Storefront/storefront/layout/cookie/cookie-permission.html.twig */
class __TwigTemplate_2a6e107a1c37cd996c5fa10b6a6d16b0 extends Template
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
            'layout_cookie_permission_inner' => [$this, 'block_layout_cookie_permission_inner'],
            'layout_cookie_permission_inner_content' => [$this, 'block_layout_cookie_permission_inner_content'],
            'layout_cookie_permission_inner_button' => [$this, 'block_layout_cookie_permission_inner_button'],
            'layout_cookie_permission_inner_button_deny' => [$this, 'block_layout_cookie_permission_inner_button_deny'],
            'layout_cookie_permission_inner_button_configuration' => [$this, 'block_layout_cookie_permission_inner_button_configuration'],
            'layout_cookie_permission_inner_button_accept_all' => [$this, 'block_layout_cookie_permission_inner_button_accept_all'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/cookie/cookie-permission.html.twig"));

        // line 2
        yield "
";
        // line 3
        $context["useDefaultCookieConsent"] = ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.useDefaultCookieConsent") == true);
        // line 4
        yield "
";
        // line 5
        if (($context["useDefaultCookieConsent"] ?? null)) {
            // line 6
            yield "    ";
            yield from $this->unwrap()->yieldBlock('layout_cookie_permission_inner', $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_cookie_permission_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner"));

        // line 7
        yield "        ";
        $context["acceptAllCookies"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.acceptAllCookies");
        // line 8
        yield "        <div
            class=\"cookie-permission-container\"
            data-cookie-permission=\"true\"
            role=\"region\"
            aria-label=\"";
        // line 12
        yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.headline"));
        yield "\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    ";
        // line 15
        yield from $this->unwrap()->yieldBlock('layout_cookie_permission_inner_content', $context, $blocks);
        // line 25
        yield "
                    ";
        // line 26
        yield from $this->unwrap()->yieldBlock('layout_cookie_permission_inner_button', $context, $blocks);
        // line 61
        yield "                </div>
            </div>
        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_cookie_permission_inner_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner_content"));

        // line 16
        yield "                        <div class=\"col cookie-permission-content\">
                            ";
        // line 17
        $context["privacySnippetKey"] = (($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) ? ("cookie.messageTextPage") : ("cookie.messageText"));
        // line 18
        yield "                            ";
        $context["cmsPath"] = (($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) ? ("frontend.cms.page.full") : ("frontend.cms.page"));
        // line 19
        yield "
                            ";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["privacySnippetKey"] ?? null), ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(        // line 21
($context["cmsPath"] ?? null), ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.privacyPage")])]);
        // line 22
        yield "
                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_cookie_permission_inner_button(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner_button"));

        // line 27
        yield "                        <div class=\"col-12 col-md-auto d-flex justify-content-center flex-wrap cookie-permission-actions pe-2\">
                            ";
        // line 28
        yield from $this->unwrap()->yieldBlock('layout_cookie_permission_inner_button_deny', $context, $blocks);
        // line 37
        yield "
                            ";
        // line 38
        yield from $this->unwrap()->yieldBlock('layout_cookie_permission_inner_button_configuration', $context, $blocks);
        // line 47
        yield "
                            ";
        // line 48
        if (($context["acceptAllCookies"] ?? null)) {
            // line 49
            yield "                                ";
            yield from $this->unwrap()->yieldBlock('layout_cookie_permission_inner_button_accept_all', $context, $blocks);
            // line 58
            yield "                            ";
        }
        // line 59
        yield "                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_cookie_permission_inner_button_deny(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner_button_deny"));

        // line 29
        yield "                                <span class=\"cookie-permission-button js-cookie-permission-button\">
                                    <button
                                        type=\"submit\"
                                        class=\"btn btn-primary\">
                                        ";
        // line 33
        yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.deny"));
        yield "
                                    </button>
                                </span>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_cookie_permission_inner_button_configuration(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner_button_configuration"));

        // line 39
        yield "                                <span class=\"js-cookie-configuration-button\">
                                    <button
                                        type=\"submit\"
                                        class=\"btn btn-primary\">
                                        ";
        // line 43
        yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.configure"));
        yield "
                                    </button>
                                </span>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_cookie_permission_inner_button_accept_all(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner_button_accept_all"));

        // line 50
        yield "                                    <span class=\"js-cookie-accept-all-button\">
                                        <button
                                            type=\"submit\"
                                            class=\"btn btn-primary\">
                                            ";
        // line 54
        yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.acceptAll"));
        yield "
                                        </button>
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
        return "@Storefront/storefront/layout/cookie/cookie-permission.html.twig";
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
        return array (  259 => 54,  253 => 50,  243 => 49,  231 => 43,  225 => 39,  215 => 38,  203 => 33,  197 => 29,  187 => 28,  178 => 59,  175 => 58,  172 => 49,  170 => 48,  167 => 47,  165 => 38,  162 => 37,  160 => 28,  157 => 27,  147 => 26,  137 => 22,  135 => 21,  134 => 20,  131 => 19,  128 => 18,  126 => 17,  123 => 16,  113 => 15,  102 => 61,  100 => 26,  97 => 25,  95 => 15,  89 => 12,  83 => 8,  80 => 7,  61 => 6,  59 => 5,  56 => 4,  54 => 3,  51 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @sw-package framework #}

{% set useDefaultCookieConsent = config('core.basicInformation.useDefaultCookieConsent') == true %}

{% if useDefaultCookieConsent %}
    {% block layout_cookie_permission_inner %}
        {% set acceptAllCookies = config('core.basicInformation.acceptAllCookies') %}
        <div
            class=\"cookie-permission-container\"
            data-cookie-permission=\"true\"
            role=\"region\"
            aria-label=\"{{ 'cookie.headline'|trans|sw_sanitize }}\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    {% block layout_cookie_permission_inner_content %}
                        <div class=\"col cookie-permission-content\">
                            {% set privacySnippetKey = feature('ACCESSIBILITY_TWEAKS') ? 'cookie.messageTextPage' : 'cookie.messageText' %}
                            {% set cmsPath = feature('ACCESSIBILITY_TWEAKS') ? 'frontend.cms.page.full' : 'frontend.cms.page' %}

                            {{ privacySnippetKey|trans({
                                '%url%': path(cmsPath, { id: config('core.basicInformation.privacyPage') })
                            })|raw }}
                        </div>
                    {% endblock %}

                    {% block layout_cookie_permission_inner_button %}
                        <div class=\"col-12 col-md-auto d-flex justify-content-center flex-wrap cookie-permission-actions pe-2\">
                            {% block layout_cookie_permission_inner_button_deny %}
                                <span class=\"cookie-permission-button js-cookie-permission-button\">
                                    <button
                                        type=\"submit\"
                                        class=\"btn btn-primary\">
                                        {{ 'cookie.deny'|trans|sw_sanitize }}
                                    </button>
                                </span>
                            {% endblock %}

                            {% block layout_cookie_permission_inner_button_configuration %}
                                <span class=\"js-cookie-configuration-button\">
                                    <button
                                        type=\"submit\"
                                        class=\"btn btn-primary\">
                                        {{ 'cookie.configure'|trans|sw_sanitize }}
                                    </button>
                                </span>
                            {% endblock %}

                            {% if acceptAllCookies %}
                                {% block layout_cookie_permission_inner_button_accept_all %}
                                    <span class=\"js-cookie-accept-all-button\">
                                        <button
                                            type=\"submit\"
                                            class=\"btn btn-primary\">
                                            {{ 'cookie.acceptAll'|trans|sw_sanitize }}
                                        </button>
                                    </span>
                                {% endblock %}
                            {% endif %}
                        </div>
                    {% endblock %}
                </div>
            </div>
        </div>
    {% endblock %}
{% endif %}
", "@Storefront/storefront/layout/cookie/cookie-permission.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/layout/cookie/cookie-permission.html.twig");
    }
}
