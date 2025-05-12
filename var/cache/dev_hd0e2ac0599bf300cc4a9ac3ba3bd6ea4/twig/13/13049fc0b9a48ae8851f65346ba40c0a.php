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

/* @Storefront/storefront/utilities/alert.html.twig */
class __TwigTemplate_6ca170e68b9d4551f35971b1140d1d00 extends Template
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
            'utilities_alert' => [$this, 'block_utilities_alert'],
            'utilities_alert_icon' => [$this, 'block_utilities_alert_icon'],
            'utilities_alert_content_container' => [$this, 'block_utilities_alert_content_container'],
            'utilities_alert_heading' => [$this, 'block_utilities_alert_heading'],
            'utilities_alert_content' => [$this, 'block_utilities_alert_content'],
            'utilities_alert_dismissible' => [$this, 'block_utilities_alert_dismissible'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/utilities/alert.html.twig"));

        // line 87
        yield "
";
        // line 88
        yield from $this->unwrap()->yieldBlock('utilities_alert', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_utilities_alert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_alert"));

        // line 89
        yield "    <div role=\"alert\"
         aria-live=\"polite\"
         ";
        // line 92
        yield "         class=\"alert ";
        if (($context["type"] ?? null)) {
            yield "alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
        }
        if (($context["dismissible"] ?? null)) {
            yield " alert-dismissible fade show";
        }
        if ((($context["icon"] ?? null) != "error")) {
            yield " ";
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) {
                yield "d-flex align-items-center";
            } else {
                yield "alert-has-icon";
            }
        }
        yield "\">
        ";
        // line 93
        yield from $this->unwrap()->yieldBlock('utilities_alert_icon', $context, $blocks);
        // line 115
        yield "
        ";
        // line 116
        yield from $this->unwrap()->yieldBlock('utilities_alert_content_container', $context, $blocks);
        // line 158
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 93
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_utilities_alert_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_alert_icon"));

        // line 94
        yield "            ";
        if ((($context["icon"] ?? null) != "false")) {
            // line 95
            yield "                ";
            $context["iconCacheSystem"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.storefrontSettings.iconCache");
            // line 96
            yield "                ";
            if (((($context["iconCache"] ?? null) === false) && (($context["iconCacheSystem"] ?? null) === true))) {
                // line 97
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Shopware\Storefront\Framework\Twig\Extension\IconCacheTwigFilter::disable(), "html", null, true);
                yield "
                ";
            }
            // line 99
            yield "                ";
            if ((($context["type"] ?? null) == "danger")) {
                // line 100
                yield "                    ";
                yield from                 ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                    $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/utilities/alert.html.twig", 100);
                })())->unwrap()->yield(CoreExtension::merge($context, ["ariaHidden" => true, "name" => "blocked"]));
                // line 101
                yield "                ";
            } elseif ((($context["type"] ?? null) == "warning")) {
                // line 102
                yield "                    ";
                yield from                 ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                    $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/utilities/alert.html.twig", 102);
                })())->unwrap()->yield(CoreExtension::merge($context, ["ariaHidden" => true, "name" => "warning"]));
                // line 103
                yield "                ";
            } elseif ((($context["type"] ?? null) == "info")) {
                // line 104
                yield "                    ";
                yield from                 ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                    $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/utilities/alert.html.twig", 104);
                })())->unwrap()->yield(CoreExtension::merge($context, ["ariaHidden" => true, "name" => "info"]));
                // line 105
                yield "                ";
            } elseif ((($context["type"] ?? null) == "success")) {
                // line 106
                yield "                    ";
                yield from                 ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                    $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/utilities/alert.html.twig", 106);
                })())->unwrap()->yield(CoreExtension::merge($context, ["ariaHidden" => true, "name" => "checkmark-circle"]));
                // line 107
                yield "                ";
            } else {
                // line 108
                yield "                    ";
                yield from                 ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                    $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/utilities/alert.html.twig", 108);
                })())->unwrap()->yield(CoreExtension::merge($context, ["ariaHidden" => true, "name" => "alert"]));
                // line 109
                yield "                ";
            }
            // line 110
            yield "                ";
            if (((($context["iconCache"] ?? null) == false) && (($context["iconCacheSystem"] ?? null) === true))) {
                // line 111
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Shopware\Storefront\Framework\Twig\Extension\IconCacheTwigFilter::enable(), "html", null, true);
                yield "
                ";
            }
            // line 113
            yield "            ";
        }
        // line 114
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 116
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_utilities_alert_content_container(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_alert_content_container"));

        // line 117
        yield "            <div class=\"alert-content-container\">
                ";
        // line 118
        yield from $this->unwrap()->yieldBlock('utilities_alert_heading', $context, $blocks);
        // line 125
        yield "
                ";
        // line 126
        yield from $this->unwrap()->yieldBlock('utilities_alert_content', $context, $blocks);
        // line 145
        yield "
                ";
        // line 146
        yield from $this->unwrap()->yieldBlock('utilities_alert_dismissible', $context, $blocks);
        // line 156
        yield "            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 118
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_utilities_alert_heading(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_alert_heading"));

        // line 119
        yield "                    ";
        if (($context["heading"] ?? null)) {
            // line 120
            yield "                        <div class=\"alert-heading h5\">
                            ";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["heading"] ?? null), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 124
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 126
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_utilities_alert_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_alert_content"));

        // line 127
        yield "                    ";
        // line 128
        yield "                    ";
        if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.7.0.0")) {
            yield "<div class=\"alert-content\">";
        }
        // line 129
        yield "                        ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["list"] ?? null)) > 1)) {
            // line 130
            yield "                            <ul class=\"alert-list\">
                                ";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 132
                yield "                                    <li>";
                yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($context["entry"]);
                yield "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['entry'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            yield "                            </ul>
                        ";
        } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 135
($context["list"] ?? null)) == 1)) {
            // line 136
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 137
                yield "                                ";
                yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($context["entry"]);
                yield "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['entry'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            yield "                        ";
        } else {
            // line 140
            yield "                            ";
            yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize(($context["content"] ?? null));
            yield "
                        ";
        }
        // line 142
        yield "                    ";
        // line 143
        yield "                    ";
        if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.7.0.0")) {
            yield "</div>";
        }
        // line 144
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 146
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_utilities_alert_dismissible(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_alert_dismissible"));

        // line 147
        yield "                    ";
        if (($context["dismissible"] ?? null)) {
            // line 148
            yield "                        <button type=\"button\"
                                class=\"btn-close\"
                                data-bs-dismiss=\"alert\"
                                aria-label=\"Close\">
                            <span aria-hidden=\"true\"></span>
                        </button>
                    ";
        }
        // line 155
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/utilities/alert.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  383 => 155,  374 => 148,  371 => 147,  361 => 146,  353 => 144,  348 => 143,  346 => 142,  340 => 140,  337 => 139,  328 => 137,  323 => 136,  321 => 135,  318 => 134,  309 => 132,  305 => 131,  302 => 130,  299 => 129,  294 => 128,  292 => 127,  282 => 126,  274 => 124,  268 => 121,  265 => 120,  262 => 119,  252 => 118,  243 => 156,  241 => 146,  238 => 145,  236 => 126,  233 => 125,  231 => 118,  228 => 117,  218 => 116,  210 => 114,  207 => 113,  201 => 111,  198 => 110,  195 => 109,  186 => 108,  183 => 107,  174 => 106,  171 => 105,  162 => 104,  159 => 103,  150 => 102,  147 => 101,  138 => 100,  135 => 99,  129 => 97,  126 => 96,  123 => 95,  120 => 94,  110 => 93,  101 => 158,  99 => 116,  96 => 115,  94 => 93,  75 => 92,  71 => 89,  54 => 88,  51 => 87,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
Global messages template

@sw-package framework

https://getbootstrap.com/docs/5.2/components/alerts

*Type:
The template provides an easy way to display messages in the storefront. The following types are supported:

* primary
* secondary
* danger (red)
* success (green)
* warning (yellow)
* info (blue)
* light (white)
* dark (dark gray)

    {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
        type:\"primary\",
        content:\"Primary Lorem ipsum dolor\"
    } %}

*Icons:
Icons are shown by default. To hide the icon within the alert, set the value of \"icon\" to false:

    {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
        type:\"primary\",
        content:\"Primary Lorem ipsum dolor\",
        icon: false
    } %}

*IconCache:
IconCache is used by system settings. To avoid using the icon cache regardless of the system settings (e.g. for an icon rendered in an invisible area like <noscript>), set \"iconCache\" to false:

    {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
        type:\"primary\",
        content:\"Primary Lorem ipsum dolor\",
        iconCache: false
    } %}


*Message Content:
The component requires the parameters ```content``` or ```list``` to display a message. If no ```type``` is defined it
will use the fallback option (success).

    {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
        type:\"primary\",
        content:\"Primary Lorem ipsum dolor\"
    } %}

*Message List:
If you need to display a bunch of messages (for example error messages in the registration), you can pass an array
of messages to the template using the parameter ```list```:

     {% set list1 = [
        'Error message 1',
        'Error message 2',
        'Error message 3'
    ] %}

    {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
        type:\"secondary\",
        list: list1
    } %}

*Heading:
To display a heading, use \"heading\".

    {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
        type:\"primary\",
        content:\"Primary Lorem ipsum dolor\",
        heading: \"Test Heading\"
    } %}

*Dismissible Button:
To display a dismissible button set the value of \"dismissible\" to true.

    {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
        type:\"primary\",
        content:\"Primary Lorem ipsum dolor\",
        dismissible: true
    } %}

#}

{% block utilities_alert %}
    <div role=\"alert\"
         aria-live=\"polite\"
         {# @deprecated tag:v6.7.0 - Class `alert-has-icon` will be removed. Use helper classes `d-flex align-items-center` directly in the template like documented by Bootstrap. #}
         class=\"alert {% if type %}alert-{{ type }}{% endif %}{% if dismissible %} alert-dismissible fade show{% endif %}{% if icon != 'error' %} {% if feature('ACCESSIBILITY_TWEAKS') %}d-flex align-items-center{% else %}alert-has-icon{% endif %}{% endif %}\">
        {% block utilities_alert_icon %}
            {% if icon != 'false' %}
                {% set iconCacheSystem = config('core.storefrontSettings.iconCache') %}
                {% if iconCache === false and iconCacheSystem === true %}
                    {{ sw_icon_cache_disable() }}
                {% endif %}
                {% if type == 'danger' %}
                    {% sw_icon 'blocked' style { ariaHidden: true } %}
                {% elseif type == 'warning' %}
                    {% sw_icon 'warning' style { ariaHidden: true } %}
                {% elseif type == 'info' %}
                    {% sw_icon 'info' style { ariaHidden: true } %}
                {% elseif type == 'success' %}
                    {% sw_icon 'checkmark-circle' style { ariaHidden: true } %}
                {% else %}
                    {% sw_icon 'alert' style { ariaHidden: true } %}
                {% endif %}
                {% if iconCache == false and iconCacheSystem === true %}
                    {{ sw_icon_cache_enable() }}
                {% endif %}
            {% endif %}
        {% endblock %}

        {% block utilities_alert_content_container %}
            <div class=\"alert-content-container\">
                {% block utilities_alert_heading %}
                    {% if heading %}
                        <div class=\"alert-heading h5\">
                            {{ heading }}
                        </div>
                    {% endif %}
                {% endblock %}

                {% block utilities_alert_content %}
                    {# @deprecated tag:v6.7.0 - The inner container `alert-content` will be removed. #}
                    {% if not feature('v6.7.0.0') %}<div class=\"alert-content\">{% endif %}
                        {% if list|length > 1 %}
                            <ul class=\"alert-list\">
                                {% for entry in list %}
                                    <li>{{ entry|sw_sanitize }}</li>
                                {% endfor %}
                            </ul>
                        {% elseif list|length == 1 %}
                            {% for entry in list %}
                                {{ entry|sw_sanitize }}
                            {% endfor %}
                        {% else %}
                            {{ content|sw_sanitize }}
                        {% endif %}
                    {# @deprecated tag:v6.7.0 - The inner container `alert-content` will be removed. #}
                    {% if not feature('v6.7.0.0') %}</div>{% endif %}
                {% endblock %}

                {% block utilities_alert_dismissible %}
                    {% if dismissible %}
                        <button type=\"button\"
                                class=\"btn-close\"
                                data-bs-dismiss=\"alert\"
                                aria-label=\"Close\">
                            <span aria-hidden=\"true\"></span>
                        </button>
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/utilities/alert.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/utilities/alert.html.twig");
    }
}
