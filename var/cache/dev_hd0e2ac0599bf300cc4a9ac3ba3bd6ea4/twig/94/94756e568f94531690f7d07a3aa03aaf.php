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

/* @Storefront/storefront/utilities/thumbnail.html.twig */
class __TwigTemplate_d15e8fced01590d849e612f68b46b59d extends Template
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
            'thumbnail_utility' => [$this, 'block_thumbnail_utility'],
            'thumbnail_utility_img' => [$this, 'block_thumbnail_utility_img'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/utilities/thumbnail.html.twig"));

        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('thumbnail_utility', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_thumbnail_utility(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "thumbnail_utility"));

        // line 4
        yield "    ";
        // line 5
        yield "    ";
        if ( !array_key_exists("load", $context)) {
            // line 6
            yield "        ";
            $context["load"] = true;
            // line 7
            yield "    ";
        }
        // line 8
        yield "
    ";
        // line 10
        yield "    ";
        // line 11
        yield "    ";
        if ( !array_key_exists("loadOriginalImage", $context)) {
            // line 12
            yield "        ";
            $context["loadOriginalImage"] = false;
            // line 13
            yield "    ";
        }
        // line 14
        yield "
    ";
        // line 16
        yield "    ";
        // line 17
        yield "    ";
        if ( !array_key_exists("autoColumnSizes", $context)) {
            // line 18
            yield "        ";
            $context["autoColumnSizes"] = true;
            // line 19
            yield "    ";
        }
        // line 20
        yield "
    ";
        // line 21
        if ( !array_key_exists("attributes", $context)) {
            // line 22
            yield "        ";
            $context["attributes"] = [];
            // line 23
            yield "    ";
        }
        // line 24
        yield "
    ";
        // line 25
        if (( !SwTwigFunction::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "alt", [], "any", true, true, false, 25) && SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["media"] ?? null), "translated", [], "any", false, true, false, 25), "alt", [], "any", true, true, false, 25))) {
            // line 26
            yield "        ";
            $context["attributes"] = Twig\Extension\CoreExtension::merge(($context["attributes"] ?? null), ["alt" => SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["media"] ?? null), "translated", [], "any", false, false, false, 26), "alt", [], "any", false, false, false, 26)]);
            // line 27
            yield "    ";
        }
        // line 28
        yield "
    ";
        // line 29
        if (( !SwTwigFunction::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "title", [], "any", true, true, false, 29) && SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["media"] ?? null), "translated", [], "any", false, true, false, 29), "title", [], "any", true, true, false, 29))) {
            // line 30
            yield "        ";
            $context["attributes"] = Twig\Extension\CoreExtension::merge(($context["attributes"] ?? null), ["title" => SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["media"] ?? null), "translated", [], "any", false, false, false, 30), "title", [], "any", false, false, false, 30)]);
            // line 31
            yield "    ";
        }
        // line 32
        yield "
    ";
        // line 34
        yield "    ";
        if ( !SwTwigFunction::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "loading", [], "any", true, true, false, 34)) {
            // line 35
            yield "        ";
            $context["attributes"] = Twig\Extension\CoreExtension::merge(($context["attributes"] ?? null), ["loading" => "eager"]);
            // line 36
            yield "    ";
        }
        // line 37
        yield "
    ";
        // line 39
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), SwTwigFunction::getAttribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 39)) > 0)) {
            // line 40
            yield "        ";
            if (((($context["autoColumnSizes"] ?? null) && ($context["columns"] ?? null)) &&  !array_key_exists("sizes", $context))) {
                // line 41
                yield "            ";
                // line 42
                yield "            ";
                $context["sizes"] = ["xs" => (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.sm") - 1) . "px"), "sm" => (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md") - 1) . "px"), "md" => (Twig\Extension\CoreExtension::round((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.lg") - 1) /                 // line 45
($context["columns"] ?? null)), 0, "ceil") . "px"), "lg" => (Twig\Extension\CoreExtension::round((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xl") - 1) /                 // line 46
($context["columns"] ?? null)), 0, "ceil") . "px")];
                // line 48
                yield "
            ";
                // line 49
                if (( !array_key_exists("sizes", $context) || (($context["sizes"] ?? null) == null))) {
                    // line 50
                    yield "                ";
                    $context["sizes"] = [];
                    // line 51
                    yield "            ";
                }
                // line 52
                yield "
            ";
                // line 54
                yield "            ";
                if ((($context["layout"] ?? null) == "full-width")) {
                    // line 55
                    yield "                ";
                    $context["container"] = 100;
                    // line 56
                    yield "                ";
                    $context["sizes"] = Twig\Extension\CoreExtension::merge(($context["sizes"] ?? null), ["xl" => (Twig\Extension\CoreExtension::round((($context["container"] ?? null) / ($context["columns"] ?? null)), 0, "ceil") . "vw")]);
                    // line 57
                    yield "            ";
                } else {
                    // line 58
                    yield "                ";
                    $context["container"] = 1360;
                    // line 59
                    yield "                ";
                    $context["sizes"] = Twig\Extension\CoreExtension::merge(($context["sizes"] ?? null), ["xl" => (Twig\Extension\CoreExtension::round((($context["container"] ?? null) / ($context["columns"] ?? null)), 0, "ceil") . "px")]);
                    // line 60
                    yield "            ";
                }
                // line 61
                yield "        ";
            }
            // line 62
            yield "
        ";
            // line 63
            $context["thumbnails"] = Twig\Extension\CoreExtension::reverse($this->env->getCharset(), $this->extensions['Shopware\Core\Framework\Adapter\Twig\SecurityExtension']->sort(SwTwigFunction::getAttribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 63)));
            // line 64
            yield "
        ";
            // line 66
            yield "        ";
            $context["srcsetValue"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
                $_v0 = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
                    // line 67
                    yield "            ";
                    if (($context["loadOriginalImage"] ?? null)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((SwTwigFunction::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["thumbnails"] ?? null)), "width", [], "any", false, false, false, 67) + 1), "html", null, true);
                        yield "w, ";
                    }
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["thumbnails"] ?? null));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["thumbnail"]) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeUrl(SwTwigFunction::getAttribute($this->env, $this->source, $context["thumbnail"], "url", [], "any", false, false, false, 67)), "html", null, true);
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, $context["thumbnail"], "width", [], "any", false, false, false, 67), "html", null, true);
                        yield "w";
                        if ( !SwTwigFunction::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 67)) {
                            yield ", ";
                        }
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
                    unset($context['_seq'], $context['_key'], $context['thumbnail'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 68
                    yield "        ";
                    yield from [];
                })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 66
                yield Twig\Extension\CoreExtension::spaceless($_v0);
                yield from [];
            })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 69
            yield "
        ";
            // line 71
            yield "        ";
            $context["sizesValue"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
                $_v1 = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
                    // line 72
                    yield "            ";
                    $context["sizeFallback"] = 100;
                    // line 73
                    yield "
            ";
                    // line 75
                    yield "            ";
                    if ((($context["autoColumnSizes"] ?? null) && ($context["columns"] ?? null))) {
                        // line 76
                        yield "                ";
                        $context["sizeFallback"] = Twig\Extension\CoreExtension::round((($context["sizeFallback"] ?? null) / ($context["columns"] ?? null)), 0, "ceil");
                        // line 77
                        yield "            ";
                    }
                    // line 78
                    yield "
            ";
                    // line 79
                    $context["breakpoint"] = ["xs" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xs"), "sm" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.sm"), "md" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md"), "lg" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.lg"), "xl" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xl")];
                    // line 86
                    yield "
            ";
                    // line 87
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::reverse($this->env->getCharset(), ($context["breakpoint"] ?? null)));
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
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        yield "(min-width: ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                        yield "px) ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = ($context["sizes"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[$context["key"]] ?? null) : null), "html", null, true);
                        if ( !SwTwigFunction::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 87)) {
                            yield ", ";
                        }
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
                    unset($context['_seq'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sizeFallback"] ?? null), "html", null, true);
                    yield "vw
        ";
                    yield from [];
                })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 71
                yield Twig\Extension\CoreExtension::spaceless($_v1);
                yield from [];
            })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 89
            yield "    ";
        }
        // line 90
        yield "
    ";
        // line 91
        yield from $this->unwrap()->yieldBlock('thumbnail_utility_img', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_thumbnail_utility_img(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "thumbnail_utility_img"));

        // line 92
        yield "        <img ";
        if (($context["load"] ?? null)) {
            yield "src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
            yield "\" ";
        } else {
            yield "data-src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
            yield "\" ";
        }
        // line 93
        yield "            ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), SwTwigFunction::getAttribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 93)) > 0)) {
            // line 94
            yield "                ";
            if (($context["load"] ?? null)) {
                yield "srcset=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["srcsetValue"] ?? null), "html", null, true);
                yield "\" ";
            } else {
                yield "data-srcset=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["srcsetValue"] ?? null), "html", null, true);
                yield "\" ";
            }
            // line 95
            yield "                ";
            if ((($_v3 = ($context["sizes"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["default"] ?? null) : null)) {
                // line 96
                yield "                sizes=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = ($context["sizes"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["default"] ?? null) : null), "html", null, true);
                yield "\"
                ";
            } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 97
($context["sizes"] ?? null)) > 0)) {
                // line 98
                yield "                sizes=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sizesValue"] ?? null), "html", null, true);
                yield "\"
                ";
            }
            // line 100
            yield "            ";
        }
        // line 101
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["attributes"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            if (($context["value"] != "")) {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        yield "        />
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/utilities/thumbnail.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  427 => 102,  411 => 101,  408 => 100,  402 => 98,  400 => 97,  395 => 96,  392 => 95,  381 => 94,  378 => 93,  367 => 92,  350 => 91,  347 => 90,  344 => 89,  340 => 71,  298 => 87,  295 => 86,  293 => 79,  290 => 78,  287 => 77,  284 => 76,  281 => 75,  278 => 73,  275 => 72,  271 => 71,  268 => 69,  264 => 66,  260 => 68,  217 => 67,  213 => 66,  210 => 64,  208 => 63,  205 => 62,  202 => 61,  199 => 60,  196 => 59,  193 => 58,  190 => 57,  187 => 56,  184 => 55,  181 => 54,  178 => 52,  175 => 51,  172 => 50,  170 => 49,  167 => 48,  165 => 46,  164 => 45,  162 => 42,  160 => 41,  157 => 40,  154 => 39,  151 => 37,  148 => 36,  145 => 35,  142 => 34,  139 => 32,  136 => 31,  133 => 30,  131 => 29,  128 => 28,  125 => 27,  122 => 26,  120 => 25,  117 => 24,  114 => 23,  111 => 22,  109 => 21,  106 => 20,  103 => 19,  100 => 18,  97 => 17,  95 => 16,  92 => 14,  89 => 13,  86 => 12,  83 => 11,  81 => 10,  78 => 8,  75 => 7,  72 => 6,  69 => 5,  67 => 4,  50 => 3,  47 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @sw-package framework #}

{% block thumbnail_utility %}
    {# activate load per default. If it is not activated only a data-src is set instead of the src tag. #}
    {% if load is not defined %}
        {% set load = true %}
    {% endif %}

    {# By default no original image will be loaded as soon as thumbnails are available. #}
    {# When set to true the original image will be loaded when the viewport is greater than the largest available thumbnail. #}
    {% if loadOriginalImage is not defined %}
        {% set loadOriginalImage = false %}
    {% endif %}

    {# By default the srcset sizes will be calculated automatically if `columns` are present and no `sizes` are configured. #}
    {# When set to false the sizes attribute will not be generated automatically. #}
    {% if autoColumnSizes is not defined %}
        {% set autoColumnSizes = true %}
    {% endif %}

    {% if attributes is not defined %}
        {% set attributes = {} %}
    {% endif %}

    {% if attributes.alt is not defined and media.translated.alt is defined %}
        {% set attributes = attributes|merge({alt: media.translated.alt}) %}
    {% endif %}

    {% if attributes.title is not defined and media.translated.title is defined %}
        {% set attributes = attributes|merge({title: media.translated.title}) %}
    {% endif %}

    {# If no loading attribute is defined, use the default behaviour for images. #}
    {% if attributes.loading is not defined %}
        {% set attributes = attributes|merge({ loading: 'eager' }) %}
    {% endif %}

    {# uses cms block column count and all available thumbnails to determine the correct image size for the current viewport #}
    {% if media.thumbnails|length > 0 %}
        {% if autoColumnSizes and columns and sizes is not defined %}
            {# set image size for every viewport #}
            {% set sizes = {
                xs: (theme_config('breakpoint.sm') - 1) ~'px',
                sm: (theme_config('breakpoint.md') - 1) ~'px',
                md: ((theme_config('breakpoint.lg') - 1) / columns)|round(0, 'ceil') ~'px',
                lg: ((theme_config('breakpoint.xl') - 1) / columns)|round(0, 'ceil') ~'px'
            } %}

            {% if sizes is not defined or sizes == null %}
                {% set sizes = {} %}
            {% endif %}

            {# set image size for largest viewport depending on the cms block sizing mode (boxed or full-width) #}
            {% if layout == 'full-width' %}
                {% set container = 100 %}
                {% set sizes = sizes|merge({ xl: (container / columns)|round(0, 'ceil') ~'vw'}) %}
            {% else %}
                {% set container = 1360 %}
                {% set sizes = sizes|merge({ xl: (container / columns)|round(0, 'ceil') ~'px'}) %}
            {% endif %}
        {% endif %}

        {% set thumbnails = media.thumbnails|sort|reverse %}

        {# generate srcset with all available thumbnails #}
        {% set srcsetValue %}{% apply spaceless %}
            {% if loadOriginalImage %}{{ media|sw_encode_media_url }} {{ thumbnails|first.width + 1 }}w, {% endif %}{% for thumbnail in thumbnails %}{{ thumbnail.url|sw_encode_url }} {{ thumbnail.width }}w{% if not loop.last %}, {% endif %}{% endfor %}
        {% endapply %}{% endset %}

        {# generate sizes #}
        {% set sizesValue %}{% apply spaceless %}
            {% set sizeFallback = 100 %}

            {# set largest size depending on column count of cms block #}
            {% if autoColumnSizes and columns %}
                {% set sizeFallback = (sizeFallback / columns)|round(0, 'ceil') %}
            {% endif %}

            {% set breakpoint = {
                xs: theme_config('breakpoint.xs'),
                sm: theme_config('breakpoint.sm'),
                md: theme_config('breakpoint.md'),
                lg: theme_config('breakpoint.lg'),
                xl: theme_config('breakpoint.xl')
            } %}

            {% for key, value in breakpoint|reverse %}(min-width: {{ value }}px) {{ sizes[key] }}{% if not loop.last %}, {% endif %}{% endfor %}, {{ sizeFallback }}vw
        {% endapply %}{% endset %}
    {% endif %}

    {% block thumbnail_utility_img %}
        <img {% if load %}src=\"{{ media|sw_encode_media_url }}\" {% else %}data-src=\"{{ media|sw_encode_media_url }}\" {% endif %}
            {% if media.thumbnails|length > 0 %}
                {% if load %}srcset=\"{{ srcsetValue }}\" {% else %}data-srcset=\"{{ srcsetValue }}\" {% endif %}
                {% if sizes['default'] %}
                sizes=\"{{ sizes['default'] }}\"
                {% elseif sizes|length > 0 %}
                sizes=\"{{ sizesValue }}\"
                {% endif %}
            {% endif %}
            {% for key, value in attributes %}{% if value != '' %} {{ key }}=\"{{ value }}\"{% endif %}{% endfor %}
        />
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/utilities/thumbnail.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/utilities/thumbnail.html.twig");
    }
}
