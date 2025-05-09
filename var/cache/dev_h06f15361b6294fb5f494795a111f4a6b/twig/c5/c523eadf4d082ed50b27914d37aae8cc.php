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

/* @Administration/administration/index.html.twig */
class __TwigTemplate_43feab19cacf32779406b9b085b6e80a extends Template
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
            'administration_head_scripts' => [$this, 'block_administration_head_scripts'],
            'administration_content' => [$this, 'block_administration_content'],
            'administration_templates' => [$this, 'block_administration_templates'],
            'administration_login_scripts' => [$this, 'block_administration_login_scripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@Administration/administration/layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Administration/administration/index.html.twig"));

        $this->parent = $this->loadTemplate("@Administration/administration/layout/base.html.twig", "@Administration/administration/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_administration_head_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "administration_head_scripts"));

        // line 4
        yield "    <script nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\" type=\"text/javascript\">
        window._features_ = ";
        // line 5
        yield $this->env->getFilter('json_encode')->getCallable()(($context["features"] ?? null));
        yield ";

        window.__sw__ = {
            assetPath: '";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("", "asset"), "html", null, true);
        yield "',
        };
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_administration_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "administration_content"));

        // line 14
        yield "    <div id=\"app\"></div>

    ";
        // line 16
        yield from $this->unwrap()->yieldBlock('administration_templates', $context, $blocks);
        // line 17
        yield "
    ";
        // line 18
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ADMIN_VITE")) {
            // line 19
            yield "        ";
            yield $this->extensions['Pentatrion\ViteBundle\Twig\EntryFilesTwigExtension']->renderViteScriptTags("administration", ["attr" => ["nonce" => ($context["cspNonce"] ?? null)]]);
            yield "
    ";
        } else {
            // line 21
            yield "        <script nonce=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
            yield "\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/js/app.js", "@Administration"), "html", null, true);
            yield "\"></script>
    ";
        }
        // line 23
        yield "
    ";
        // line 24
        yield from $this->unwrap()->yieldBlock('administration_login_scripts', $context, $blocks);
        // line 25
        yield "
    <script nonce=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        ";
        // line 50
        yield "
        ";
        // line 51
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ADMIN_VITE")) {
            // line 52
            yield "        ";
            // line 53
            yield "        window.startApplication = () => {
            Shopware.Application.start({
                apiContext: {
                    host: '";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 56), "host", [], "any", false, false, false, 56), "html", null, true);
            yield "',
                    port: ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 57), "port", [], "any", false, false, false, 57), "html", null, true);
            yield ",
                    scheme: '";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 58), "scheme", [], "any", false, false, false, 58), "html", null, true);
            yield "',
                    schemeAndHttpHost: '";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 59), "schemeAndHttpHost", [], "any", false, false, false, 59), "html", null, true);
            yield "',
                    uri: '";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 60), "uri", [], "any", false, false, false, 60), "html", null, true);
            yield "',
                    basePath: '";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 61), "basePath", [], "any", false, false, false, 61), "html", null, true);
            yield "',
                    pathInfo: '";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 62), "pathInfo", [], "any", false, false, false, 62), "html", null, true);
            yield "',
                    liveVersionId: '";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["liveVersionId"] ?? null), "html", null, true);
            yield "',
                    systemLanguageId: '";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["systemLanguageId"] ?? null), "html", null, true);
            yield "',
                    apiVersion: ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["apiVersion"] ?? null), "html", null, true);
            yield ",
                    assetPath: '";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("", "asset"), "html", null, true);
            yield "'
                },
                appContext: {
                    features: window._features_,
                    firstRunWizard: ";
            // line 70
            yield ((($context["firstRunWizard"] ?? null)) ? ("true") : ("false"));
            yield ",
                    systemCurrencyId: '";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["systemCurrencyId"] ?? null), "html", null, true);
            yield "',
                    systemCurrencyISOCode: '";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["systemCurrencyISOCode"] ?? null), "html", null, true);
            yield "',
                    // @deprecated tag:v6.7.0 - remove as read-only extension manager is a better solution
                    disableExtensions: ";
            // line 74
            yield ((($context["disableExtensions"] ?? null)) ? ("true") : ("false"));
            yield ",
                    adminEsEnable: ";
            // line 75
            yield ((($context["adminEsEnable"] ?? null)) ? ("true") : ("false"));
            yield ",
                    storefrontEsEnable: ";
            // line 76
            yield ((($context["storefrontEsEnable"] ?? null)) ? ("true") : ("false"));
            yield ",
                }
            });
        };
        ";
        } else {
            // line 81
            yield "        Shopware.Application.start({
            apiContext: {
                host: '";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 83), "host", [], "any", false, false, false, 83), "html", null, true);
            yield "',
                port: ";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 84), "port", [], "any", false, false, false, 84), "html", null, true);
            yield ",
                scheme: '";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 85), "scheme", [], "any", false, false, false, 85), "html", null, true);
            yield "',
                schemeAndHttpHost: '";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 86), "schemeAndHttpHost", [], "any", false, false, false, 86), "html", null, true);
            yield "',
                uri: '";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 87), "uri", [], "any", false, false, false, 87), "html", null, true);
            yield "',
                basePath: '";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 88), "basePath", [], "any", false, false, false, 88), "html", null, true);
            yield "',
                pathInfo: '";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 89), "pathInfo", [], "any", false, false, false, 89), "html", null, true);
            yield "',
                liveVersionId: '";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["liveVersionId"] ?? null), "html", null, true);
            yield "',
                systemLanguageId: '";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["systemLanguageId"] ?? null), "html", null, true);
            yield "',
                apiVersion: ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["apiVersion"] ?? null), "html", null, true);
            yield ",
                assetPath: '";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("", "asset"), "html", null, true);
            yield "',
                refreshTokenTtl: ";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["refreshTokenTtl"] ?? null), "html", null, true);
            yield ",
            },
            appContext: {
                features: window._features_,
                firstRunWizard: ";
            // line 98
            yield ((($context["firstRunWizard"] ?? null)) ? ("true") : ("false"));
            yield ",
                systemCurrencyId: '";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["systemCurrencyId"] ?? null), "html", null, true);
            yield "',
                systemCurrencyISOCode: '";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["systemCurrencyISOCode"] ?? null), "html", null, true);
            yield "',
                // @deprecated tag:v6.7.0 - remove as read-only extension manager is a better solution
                disableExtensions: ";
            // line 102
            yield ((($context["disableExtensions"] ?? null)) ? ("true") : ("false"));
            yield ",
                adminEsEnable: ";
            // line 103
            yield ((($context["adminEsEnable"] ?? null)) ? ("true") : ("false"));
            yield ",
                storefrontEsEnable: ";
            // line 104
            yield ((($context["storefrontEsEnable"] ?? null)) ? ("true") : ("false"));
            yield ",
            }
        });
        ";
        }
        // line 108
        yield "    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_administration_templates(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "administration_templates"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_administration_login_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "administration_login_scripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Administration/administration/index.html.twig";
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
        return array (  336 => 24,  320 => 16,  311 => 108,  304 => 104,  300 => 103,  296 => 102,  291 => 100,  287 => 99,  283 => 98,  276 => 94,  272 => 93,  268 => 92,  264 => 91,  260 => 90,  256 => 89,  252 => 88,  248 => 87,  244 => 86,  240 => 85,  236 => 84,  232 => 83,  228 => 81,  220 => 76,  216 => 75,  212 => 74,  207 => 72,  203 => 71,  199 => 70,  192 => 66,  188 => 65,  184 => 64,  180 => 63,  176 => 62,  172 => 61,  168 => 60,  164 => 59,  160 => 58,  156 => 57,  152 => 56,  147 => 53,  145 => 52,  143 => 51,  140 => 50,  136 => 26,  133 => 25,  131 => 24,  128 => 23,  120 => 21,  114 => 19,  112 => 18,  109 => 17,  107 => 16,  103 => 14,  93 => 13,  81 => 8,  75 => 5,  70 => 4,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@Administration/administration/layout/base.html.twig' %}

{% block administration_head_scripts %}
    <script nonce=\"{{ cspNonce }}\" type=\"text/javascript\">
        window._features_ = {{ features|json_encode|raw }};

        window.__sw__ = {
            assetPath: '{{ asset('', 'asset') }}',
        };
    </script>
{% endblock %}

{% block administration_content %}
    <div id=\"app\"></div>

    {% block administration_templates %}{% endblock %}

    {% if feature('ADMIN_VITE') %}
        {{ vite_entry_script_tags('administration', { attr: { nonce: cspNonce } }) }}
    {% else %}
        <script nonce=\"{{ cspNonce }}\" src=\"{{ asset('static/js/app.js', '@Administration') }}\"></script>
    {% endif %}

    {% block administration_login_scripts %}{% endblock %}

    <script nonce=\"{{ cspNonce }}\">
        {#
        root-level domain configuration

        host:               shopware.next
        port:               80
        scheme:             http
        schemeAndHttpHost:  http://shopware.next
        uri:                http://shopware.next/admin
        basePath:
        pathInfo:           /admin

        -----------------------------------------------

        sub-folder domain configuration

        host:               localhost
        port:               80
        scheme:             http
        schemeAndHttpHost:  http://localhost
        uri:                http://localhost/next/web/admin
        basePath:           /next/web
        pathInfo:           /admin
        #}

        {% if feature('ADMIN_VITE') %}
        {# window.startApplication is called in index.vite.ts #}
        window.startApplication = () => {
            Shopware.Application.start({
                apiContext: {
                    host: '{{ app.request.host }}',
                    port: {{ app.request.port }},
                    scheme: '{{ app.request.scheme }}',
                    schemeAndHttpHost: '{{ app.request.schemeAndHttpHost }}',
                    uri: '{{ app.request.uri }}',
                    basePath: '{{ app.request.basePath }}',
                    pathInfo: '{{ app.request.pathInfo }}',
                    liveVersionId: '{{ liveVersionId }}',
                    systemLanguageId: '{{ systemLanguageId }}',
                    apiVersion: {{ apiVersion }},
                    assetPath: '{{ asset('', 'asset') }}'
                },
                appContext: {
                    features: window._features_,
                    firstRunWizard: {{ firstRunWizard ? 'true' : 'false' }},
                    systemCurrencyId: '{{ systemCurrencyId }}',
                    systemCurrencyISOCode: '{{ systemCurrencyISOCode }}',
                    // @deprecated tag:v6.7.0 - remove as read-only extension manager is a better solution
                    disableExtensions: {{ disableExtensions ? 'true' : 'false' }},
                    adminEsEnable: {{ adminEsEnable ? 'true' : 'false' }},
                    storefrontEsEnable: {{ storefrontEsEnable ? 'true' : 'false' }},
                }
            });
        };
        {% else %}
        Shopware.Application.start({
            apiContext: {
                host: '{{ app.request.host }}',
                port: {{ app.request.port }},
                scheme: '{{ app.request.scheme }}',
                schemeAndHttpHost: '{{ app.request.schemeAndHttpHost }}',
                uri: '{{ app.request.uri }}',
                basePath: '{{ app.request.basePath }}',
                pathInfo: '{{ app.request.pathInfo }}',
                liveVersionId: '{{ liveVersionId }}',
                systemLanguageId: '{{ systemLanguageId }}',
                apiVersion: {{ apiVersion }},
                assetPath: '{{ asset('', 'asset') }}',
                refreshTokenTtl: {{ refreshTokenTtl }},
            },
            appContext: {
                features: window._features_,
                firstRunWizard: {{ firstRunWizard ? 'true' : 'false' }},
                systemCurrencyId: '{{ systemCurrencyId }}',
                systemCurrencyISOCode: '{{ systemCurrencyISOCode }}',
                // @deprecated tag:v6.7.0 - remove as read-only extension manager is a better solution
                disableExtensions: {{ disableExtensions ? 'true' : 'false' }},
                adminEsEnable: {{ adminEsEnable ? 'true' : 'false' }},
                storefrontEsEnable: {{ storefrontEsEnable ? 'true' : 'false' }},
            }
        });
        {% endif %}
    </script>
{% endblock %}
", "@Administration/administration/index.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/administration/Resources/views/administration/index.html.twig");
    }
}
