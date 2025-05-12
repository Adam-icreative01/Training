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

/* @Storefront/storefront/layout/header/actions/language-widget.html.twig */
class __TwigTemplate_a934ae8fe2a522b2bada18a17a6289d8 extends Template
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
            'layout_header_actions_language_widget' => [$this, 'block_layout_header_actions_language_widget'],
            'layout_header_actions_language_widget_form' => [$this, 'block_layout_header_actions_language_widget_form'],
            'layout_header_actions_language_widget_content' => [$this, 'block_layout_header_actions_language_widget_content'],
            'layout_header_actions_languages_widget_form_items' => [$this, 'block_layout_header_actions_languages_widget_form_items'],
            'layout_header_actions_languages_widget_form_items_flag' => [$this, 'block_layout_header_actions_languages_widget_form_items_flag'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/actions/language-widget.html.twig"));

        // line 2
        if ((( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("cache_rework") &&  !array_key_exists("header", $context)) && array_key_exists("page", $context))) {
            // line 3
            yield "    ";
            $context["header"] = SwTwigFunction::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 3);
        }
        // line 5
        yield "
";
        // line 6
        yield from $this->unwrap()->yieldBlock('layout_header_actions_language_widget', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_actions_language_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_language_widget"));

        // line 7
        yield "    ";
        if (Twig\Extension\CoreExtension::testEmpty(($context["position"] ?? null))) {
            // line 8
            yield "        ";
            $context["position"] = "top-bar";
            // line 9
            yield "    ";
        }
        // line 10
        yield "
    ";
        // line 11
        if ((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["header"] ?? null), "languages", [], "any", false, false, false, 11), "count", [], "any", false, false, false, 11) > 1)) {
            // line 12
            yield "        <div class=\"top-bar-nav-item top-bar-language\">
            ";
            // line 13
            yield from $this->unwrap()->yieldBlock('layout_header_actions_language_widget_form', $context, $blocks);
            // line 88
            yield "        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_actions_language_widget_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_language_widget_form"));

        // line 14
        yield "                <form method=\"post\"
                      action=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.switch-language");
        yield "\"
                      class=\"language-form\"
                      data-form-auto-submit=\"true\">
                    ";
        // line 18
        yield from $this->unwrap()->yieldBlock('layout_header_actions_language_widget_content', $context, $blocks);
        // line 86
        yield "                </form>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_actions_language_widget_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_language_widget_content"));

        // line 19
        yield "                        ";
        $context["isoCode"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), Twig\Extension\CoreExtension::lower($this->env->getCharset(), SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "languageInfo", [], "any", false, false, false, 19), "localeCode", [], "any", false, false, false, 19)), "-");
        // line 20
        yield "                        ";
        $context["language"] = (($_v0 = ($context["isoCode"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null);
        // line 21
        yield "                        ";
        $context["country"] = (($_v1 = ($context["isoCode"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[1] ?? null) : null);
        // line 22
        yield "
                        <div class=\"languages-menu dropdown\">
                            <button class=\"btn dropdown-toggle top-bar-nav-btn\"
                                    type=\"button\"
                                    id=\"languagesDropdown-";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["position"] ?? null), "html", null, true);
        yield "\"
                                    data-bs-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\"
                                    aria-label=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.languageTrigger", ["%lang%" => SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "languageInfo", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30)])), "html", null, true);
        yield "\">
                                <span aria-hidden=\"true\" class=\"top-bar-list-icon language-flag country-";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["country"] ?? null), "html", null, true);
        yield " language-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["language"] ?? null), "html", null, true);
        yield "\"></span>
                                ";
        // line 33
        yield "                                <span class=\"top-bar-nav-text";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) {
            yield " d-none d-md-inline";
        }
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "languageInfo", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true);
        yield "</span>
                            </button>

                            ";
        // line 36
        yield from $this->unwrap()->yieldBlock('layout_header_actions_languages_widget_form_items', $context, $blocks);
        // line 78
        yield "                        </div>

                        <input name=\"redirectTo\" type=\"hidden\" value=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["activeRoute"] ?? null), "html", null, true);
        yield "\">

                        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 82), "attributes", [], "any", false, false, false, 82), "get", ["_route_params"], "method", false, false, false, 82));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 83
            yield "                            <input name=\"redirectParameters[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "]\" type=\"hidden\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\">
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_actions_languages_widget_form_items(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_languages_widget_form_items"));

        // line 37
        yield "                                <ul class=\"top-bar-list dropdown-menu dropdown-menu-end\"
                                    aria-label=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.languageList")), "html", null, true);
        yield "\">
                                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(SwTwigFunction::getAttribute($this->env, $this->source, ($context["header"] ?? null), "languages", [], "any", false, false, false, 39));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 40
            yield "                                        ";
            $context["isActiveLanguage"] = (SwTwigFunction::getAttribute($this->env, $this->source, $context["language"], "id", [], "any", false, false, false, 40) === SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["context"] ?? null), "context", [], "any", false, false, false, 40), "languageId", [], "any", false, false, false, 40));
            // line 41
            yield "
                                        ";
            // line 43
            yield "                                        ";
            // line 44
            yield "                                        <li class=\"top-bar-list-item";
            if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) {
                yield " dropdown-item";
            }
            if (($context["isActiveLanguage"] ?? null)) {
                yield " item-checked active";
            }
            yield "\">
                                            ";
            // line 45
            yield from $this->unwrap()->yieldBlock('layout_header_actions_languages_widget_form_items_flag', $context, $blocks);
            // line 74
            yield "                                        </li>
                                    ";
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
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "                                </ul>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_actions_languages_widget_form_items_flag(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_languages_widget_form_items_flag"));

        // line 46
        yield "                                                ";
        $context["isoCode"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), Twig\Extension\CoreExtension::lower($this->env->getCharset(), SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["language"] ?? null), "translationCode", [], "any", false, false, false, 46), "code", [], "any", false, false, false, 46)), "-");
        // line 47
        yield "                                                ";
        $context["flagLanguage"] = (($_v2 = ($context["isoCode"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[0] ?? null) : null);
        // line 48
        yield "                                                ";
        $context["flagCountry"] = (($_v3 = ($context["isoCode"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[1] ?? null) : null);
        // line 49
        yield "
                                                ";
        // line 51
        yield "                                                ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) {
            // line 52
            yield "                                                    <button class=\"dropdown-item d-flex align-items-center gap-2";
            if (($context["isActiveLanguage"] ?? null)) {
                yield " active";
            }
            yield "\" type=\"submit\" name=\"languageId\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["position"] ?? null), "html", null, true);
            yield "-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, false, 52), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, false, 52), "html", null, true);
            yield "\">
                                                        <span aria-hidden=\"true\" class=\"top-bar-list-icon language-flag country-";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["flagCountry"] ?? null), "html", null, true);
            yield " language-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["flagLanguage"] ?? null), "html", null, true);
            yield "\"></span>
                                                        ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["language"] ?? null), "name", [], "any", false, false, false, 54), "html", null, true);
            yield "
                                                    </button>
                                                ";
        } else {
            // line 57
            yield "                                                    <label class=\"top-bar-list-label\"
                                                           for=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["position"] ?? null), "html", null, true);
            yield "-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, false, 58), "html", null, true);
            yield "\">
                                                        <input id=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["position"] ?? null), "html", null, true);
            yield "-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, false, 59), "html", null, true);
            yield "\"
                                                               class=\"top-bar-list-radio\"
                                                               value=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, false, 61), "html", null, true);
            yield "\"
                                                               name=\"languageId\"
                                                               type=\"radio\"
                                                            ";
            // line 64
            if (($context["isActiveLanguage"] ?? null)) {
                yield " checked";
            }
            yield ">
                                                        <span aria-hidden=\"true\" class=\"top-bar-list-icon language-flag country-";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["flagCountry"] ?? null), "html", null, true);
            yield " language-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["flagLanguage"] ?? null), "html", null, true);
            yield "\"></span>
                                                        ";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["language"] ?? null), "name", [], "any", false, false, false, 66), "html", null, true);
            yield "
                                                    </label>
                                                ";
        }
        // line 69
        yield "
                                                ";
        // line 70
        if ((($_v4 = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 70), "attributes", [], "any", false, false, false, 70), "get", ["_route_params"], "method", false, false, false, 70)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["_locale"] ?? null) : null)) {
            // line 71
            yield "                                                    <input type=\"hidden\" name=\"languageCode_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, false, 71), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["language"] ?? null), "translationCode", [], "any", false, false, false, 71), "code", [], "any", false, false, false, 71), "html", null, true);
            yield "\">
                                                ";
        }
        // line 73
        yield "                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/layout/header/actions/language-widget.html.twig";
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
        return array (  403 => 73,  395 => 71,  393 => 70,  390 => 69,  384 => 66,  378 => 65,  372 => 64,  366 => 61,  359 => 59,  353 => 58,  350 => 57,  344 => 54,  338 => 53,  325 => 52,  322 => 51,  319 => 49,  316 => 48,  313 => 47,  310 => 46,  300 => 45,  291 => 76,  276 => 74,  274 => 45,  264 => 44,  262 => 43,  259 => 41,  256 => 40,  239 => 39,  235 => 38,  232 => 37,  222 => 36,  214 => 85,  203 => 83,  199 => 82,  194 => 80,  190 => 78,  188 => 36,  177 => 33,  171 => 31,  167 => 30,  160 => 26,  154 => 22,  151 => 21,  148 => 20,  145 => 19,  135 => 18,  126 => 86,  124 => 18,  118 => 15,  115 => 14,  105 => 13,  95 => 88,  93 => 13,  90 => 12,  88 => 11,  85 => 10,  82 => 9,  79 => 8,  76 => 7,  59 => 6,  56 => 5,  52 => 3,  50 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @deprecated tag:v6.7.0 - Fallback will be removed, add header directly #}
{% if not feature('cache_rework') and not header is defined and page is defined %}
    {% set header = page.header %}
{% endif %}

{% block layout_header_actions_language_widget %}
    {% if position is empty %}
        {% set position = 'top-bar' %}
    {% endif %}

    {% if header.languages.count > 1 %}
        <div class=\"top-bar-nav-item top-bar-language\">
            {% block layout_header_actions_language_widget_form %}
                <form method=\"post\"
                      action=\"{{ path('frontend.checkout.switch-language') }}\"
                      class=\"language-form\"
                      data-form-auto-submit=\"true\">
                    {% block layout_header_actions_language_widget_content %}
                        {% set isoCode = context.languageInfo.localeCode|lower|split('-') %}
                        {% set language = isoCode[0] %}
                        {% set country = isoCode[1] %}

                        <div class=\"languages-menu dropdown\">
                            <button class=\"btn dropdown-toggle top-bar-nav-btn\"
                                    type=\"button\"
                                    id=\"languagesDropdown-{{ position }}\"
                                    data-bs-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\"
                                    aria-label=\"{{ 'header.languageTrigger'|trans({ '%lang%': context.languageInfo.name })|striptags }}\">
                                <span aria-hidden=\"true\" class=\"top-bar-list-icon language-flag country-{{ country }} language-{{ language }}\"></span>
                                {# @deprecated tag:v6.7.0 - Toggling the text display will use Bootstrap helper classes instead of custom CSS. #}
                                <span class=\"top-bar-nav-text{% if feature('ACCESSIBILITY_TWEAKS') %} d-none d-md-inline{% endif %}\">{{ context.languageInfo.name }}</span>
                            </button>

                            {% block layout_header_actions_languages_widget_form_items %}
                                <ul class=\"top-bar-list dropdown-menu dropdown-menu-end\"
                                    aria-label=\"{{ 'header.languageList'|trans|striptags }}\">
                                    {% for language in header.languages %}
                                        {% set isActiveLanguage = language.id is same as(context.context.languageId) %}

                                        {# @deprecated tag:v6.7.0 - `dropdown-item` class will be on the button as docuented by Bootstrap: https://getbootstrap.com/docs/5.3/components/dropdowns/#menu-items #}
                                        {# @deprecated tag:v6.7.0 - `item-checked` class will be removed. Bootstrap class `active` will be used instead. #}
                                        <li class=\"top-bar-list-item{% if not feature('ACCESSIBILITY_TWEAKS') %} dropdown-item{% endif %}{% if isActiveLanguage %} item-checked active{% endif %}\">
                                            {% block layout_header_actions_languages_widget_form_items_flag %}
                                                {% set isoCode = language.translationCode.code|lower|split('-') %}
                                                {% set flagLanguage = isoCode[0] %}
                                                {% set flagCountry = isoCode[1] %}

                                                {# @deprecated tag:v6.7.0 - Dropdown items will be buttons instead of radio inputs to imrpove accessibility #}
                                                {% if feature('ACCESSIBILITY_TWEAKS') %}
                                                    <button class=\"dropdown-item d-flex align-items-center gap-2{% if isActiveLanguage %} active{% endif %}\" type=\"submit\" name=\"languageId\" id=\"{{ position }}-{{ language.id }}\" value=\"{{ language.id }}\">
                                                        <span aria-hidden=\"true\" class=\"top-bar-list-icon language-flag country-{{ flagCountry }} language-{{ flagLanguage }}\"></span>
                                                        {{ language.name }}
                                                    </button>
                                                {% else %}
                                                    <label class=\"top-bar-list-label\"
                                                           for=\"{{ position }}-{{ language.id }}\">
                                                        <input id=\"{{ position }}-{{ language.id }}\"
                                                               class=\"top-bar-list-radio\"
                                                               value=\"{{ language.id }}\"
                                                               name=\"languageId\"
                                                               type=\"radio\"
                                                            {% if isActiveLanguage%} checked{% endif %}>
                                                        <span aria-hidden=\"true\" class=\"top-bar-list-icon language-flag country-{{ flagCountry }} language-{{ flagLanguage }}\"></span>
                                                        {{ language.name }}
                                                    </label>
                                                {% endif %}

                                                {% if app.request.attributes.get('_route_params')['_locale'] %}
                                                    <input type=\"hidden\" name=\"languageCode_{{ language.id }}\" value=\"{{ language.translationCode.code }}\">
                                                {% endif %}
                                            {% endblock %}
                                        </li>
                                    {% endfor %}
                                </ul>
                            {% endblock %}
                        </div>

                        <input name=\"redirectTo\" type=\"hidden\" value=\"{{ activeRoute }}\">

                        {% for key, value in app.request.attributes.get('_route_params') %}
                            <input name=\"redirectParameters[{{ key }}]\" type=\"hidden\" value=\"{{ value }}\">
                        {% endfor %}
                    {% endblock %}
                </form>
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/layout/header/actions/language-widget.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/layout/header/actions/language-widget.html.twig");
    }
}
