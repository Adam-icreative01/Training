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

/* @Storefront/storefront/layout/header/search.html.twig */
class __TwigTemplate_01759990bf0d755265fbf1b6e9055a99 extends Template
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
            'layout_header_search' => [$this, 'block_layout_header_search'],
            'layout_header_search_form' => [$this, 'block_layout_header_search_form'],
            'layout_header_search_input_group' => [$this, 'block_layout_header_search_input_group'],
            'layout_header_search_input' => [$this, 'block_layout_header_search_input'],
            'layout_header_search_button' => [$this, 'block_layout_header_search_button'],
            'layout_header_close_button' => [$this, 'block_layout_header_close_button'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/search.html.twig"));

        // line 1
        $context["searchWidgetOptions"] = ["searchWidgetMinChars" => SwTwigFunction::getAttribute($this->env, $this->source, ($context["shopware"] ?? null), "minSearchLength", [], "any", false, false, false, 1)];
        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('layout_header_search', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_search(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search"));

        // line 4
        yield "    <div class=\"collapse\"
         id=\"searchCollapse\">
        <div class=\"header-search my-2 m-sm-auto\">
            ";
        // line 7
        yield from $this->unwrap()->yieldBlock('layout_header_search_form', $context, $blocks);
        // line 52
        yield "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_search_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search_form"));

        // line 8
        yield "                <form action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.search.page");
        yield "\"
                      method=\"get\"
                      data-search-widget=\"true\"
                      data-search-widget-options=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('json_encode')->getCallable()(($context["searchWidgetOptions"] ?? null)), "html", null, true);
        yield "\"
                      data-url=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.search.suggest");
        yield "?search=\"
                      class=\"header-search-form\">
                    ";
        // line 14
        yield from $this->unwrap()->yieldBlock('layout_header_search_input_group', $context, $blocks);
        // line 50
        yield "                </form>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_search_input_group(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search_input_group"));

        // line 15
        yield "                        <div class=\"input-group\">
                            ";
        // line 16
        yield from $this->unwrap()->yieldBlock('layout_header_search_input', $context, $blocks);
        // line 28
        yield "
                            ";
        // line 29
        yield from $this->unwrap()->yieldBlock('layout_header_search_button', $context, $blocks);
        // line 38
        yield "
                            ";
        // line 39
        yield from $this->unwrap()->yieldBlock('layout_header_close_button', $context, $blocks);
        // line 48
        yield "                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_search_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search_input"));

        // line 17
        yield "                                <input type=\"search\"
                                       id=\"header-main-search-input\"
                                       name=\"search\"
                                       class=\"form-control header-search-input\"
                                       autocomplete=\"off\"
                                       autocapitalize=\"off\"
                                       placeholder=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchPlaceholder")), "html", null, true);
        yield "\"
                                       aria-label=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchPlaceholder")), "html", null, true);
        yield "\"
                                       value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["page"] ?? null), "searchTerm", [], "any", false, false, false, 25), "html", null, true);
        yield "\"
                                >
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_search_button(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_search_button"));

        // line 30
        yield "                                <button type=\"submit\"
                                        class=\"btn header-search-btn\"
                                        aria-label=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchButton")), "html", null, true);
        yield "\">
                                    <span class=\"header-search-icon\">
                                        ";
        // line 34
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/search.html.twig", 34);
        })())->unwrap()->yield(CoreExtension::merge($context, ["name" => "search"]));
        // line 35
        yield "                                    </span>
                                </button>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header_close_button(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_close_button"));

        // line 40
        yield "                                <button class=\"btn header-close-btn js-search-close-btn d-none\"
                                        type=\"button\"
                                        aria-label=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchCloseButton")), "html", null, true);
        yield "\">
                                    <span class=\"header-close-icon\">
                                        ";
        // line 44
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/search.html.twig", 44);
        })())->unwrap()->yield(CoreExtension::merge($context, ["name" => "x"]));
        // line 45
        yield "                                    </span>
                                </button>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/layout/header/search.html.twig";
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
        return array (  262 => 45,  254 => 44,  249 => 42,  245 => 40,  235 => 39,  225 => 35,  217 => 34,  212 => 32,  208 => 30,  198 => 29,  187 => 25,  183 => 24,  179 => 23,  171 => 17,  161 => 16,  152 => 48,  150 => 39,  147 => 38,  145 => 29,  142 => 28,  140 => 16,  137 => 15,  127 => 14,  118 => 50,  116 => 14,  111 => 12,  107 => 11,  100 => 8,  90 => 7,  80 => 52,  78 => 7,  73 => 4,  56 => 3,  53 => 2,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set searchWidgetOptions = { searchWidgetMinChars: shopware.minSearchLength } %}

{% block layout_header_search %}
    <div class=\"collapse\"
         id=\"searchCollapse\">
        <div class=\"header-search my-2 m-sm-auto\">
            {% block layout_header_search_form %}
                <form action=\"{{ path('frontend.search.page') }}\"
                      method=\"get\"
                      data-search-widget=\"true\"
                      data-search-widget-options=\"{{ searchWidgetOptions|json_encode }}\"
                      data-url=\"{{ path('frontend.search.suggest') }}?search=\"
                      class=\"header-search-form\">
                    {% block layout_header_search_input_group %}
                        <div class=\"input-group\">
                            {% block layout_header_search_input %}
                                <input type=\"search\"
                                       id=\"header-main-search-input\"
                                       name=\"search\"
                                       class=\"form-control header-search-input\"
                                       autocomplete=\"off\"
                                       autocapitalize=\"off\"
                                       placeholder=\"{{ 'header.searchPlaceholder'|trans|striptags }}\"
                                       aria-label=\"{{ 'header.searchPlaceholder'|trans|striptags }}\"
                                       value=\"{{ page.searchTerm }}\"
                                >
                            {% endblock %}

                            {% block layout_header_search_button %}
                                <button type=\"submit\"
                                        class=\"btn header-search-btn\"
                                        aria-label=\"{{ 'header.searchButton'|trans|striptags }}\">
                                    <span class=\"header-search-icon\">
                                        {% sw_icon 'search' %}
                                    </span>
                                </button>
                            {% endblock %}

                            {% block layout_header_close_button %}
                                <button class=\"btn header-close-btn js-search-close-btn d-none\"
                                        type=\"button\"
                                        aria-label=\"{{ 'header.searchCloseButton'|trans|striptags }}\">
                                    <span class=\"header-close-icon\">
                                        {% sw_icon 'x' %}
                                    </span>
                                </button>
                            {% endblock %}
                        </div>
                    {% endblock %}
                </form>
            {% endblock %}
        </div>
    </div>
{% endblock %}
", "@Storefront/storefront/layout/header/search.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/layout/header/search.html.twig");
    }
}
