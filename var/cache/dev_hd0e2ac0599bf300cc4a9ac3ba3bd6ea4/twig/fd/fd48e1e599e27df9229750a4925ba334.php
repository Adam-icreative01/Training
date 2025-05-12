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

/* @Storefront/storefront/page/content/index.html.twig */
class __TwigTemplate_0de5234b77e86a82dee472f034347464 extends Template
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
            'base_main_inner' => [$this, 'block_base_main_inner'],
            'page_content' => [$this, 'block_page_content'],
            'cms_breadcrumb' => [$this, 'block_cms_breadcrumb'],
            'cms_content' => [$this, 'block_cms_content'],
            'page_content_blocks' => [$this, 'block_page_content_blocks'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "@Storefront/storefront/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/content/index.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/base.html.twig", "@Storefront/storefront/page/content/index.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_base_main_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_main_inner"));

        // line 5
        yield "    <div class=\"container-main\">
        ";
        // line 6
        yield from $this->unwrap()->yieldBlock('page_content', $context, $blocks);
        // line 28
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        yield "            ";
        yield from $this->unwrap()->yieldBlock('cms_breadcrumb', $context, $blocks);
        // line 16
        yield "
            ";
        // line 17
        yield from $this->unwrap()->yieldBlock('cms_content', $context, $blocks);
        // line 27
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_cms_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_breadcrumb"));

        // line 8
        yield "                <div class=\"cms-breadcrumb container\">
                    ";
        // line 9
        yield from $this->loadTemplate("@Storefront/storefront/layout/breadcrumb.html.twig", "@Storefront/storefront/page/content/index.html.twig", 9)->unwrap()->yield(CoreExtension::toArray(["context" =>         // line 10
($context["context"] ?? null), "themeIconConfig" =>         // line 11
($context["themeIconConfig"] ?? null), "categoryId" => SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source,         // line 12
($context["shopware"] ?? null), "navigation", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12)]));
        // line 14
        yield "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_cms_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_content"));

        // line 18
        yield "                ";
        $context["cmsPage"] = ((SwTwigFunction::getAttribute($this->env, $this->source, ($context["page"] ?? null), "landingPage", [], "any", false, false, false, 18)) ? (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["page"] ?? null), "landingPage", [], "any", false, false, false, 18), "cmsPage", [], "any", false, false, false, 18)) : (SwTwigFunction::getAttribute($this->env, $this->source, ($context["page"] ?? null), "cmsPage", [], "any", false, false, false, 18)));
        // line 19
        yield "                ";
        $context["cmsPageClasses"] = Twig\Extension\CoreExtension::trim(("cms-page " . Twig\Extension\CoreExtension::striptags(SwTwigFunction::getAttribute($this->env, $this->source, ($context["cmsPage"] ?? null), "cssClass", [], "any", false, false, false, 19))));
        // line 20
        yield "                ";
        $context["landingPage"] = ((SwTwigFunction::getAttribute($this->env, $this->source, ($context["page"] ?? null), "landingPage", [], "any", false, false, false, 20)) ? (SwTwigFunction::getAttribute($this->env, $this->source, ($context["page"] ?? null), "landingPage", [], "any", false, false, false, 20)) : ([]));
        // line 21
        yield "                <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cmsPageClasses"] ?? null), "html", null, true);
        yield "\">
                    ";
        // line 22
        yield from $this->unwrap()->yieldBlock('page_content_blocks', $context, $blocks);
        // line 25
        yield "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_content_blocks(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_blocks"));

        // line 23
        yield "                        ";
        yield from $this->loadTemplate("@Storefront/storefront/page/content/detail.html.twig", "@Storefront/storefront/page/content/index.html.twig", 23)->unwrap()->yield(CoreExtension::merge($context, ["cmsPage" => ($context["cmsPage"] ?? null), "landingPage" => ($context["landingPage"] ?? null)]));
        // line 24
        yield "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/page/content/index.html.twig";
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
        return array (  186 => 24,  183 => 23,  173 => 22,  164 => 25,  162 => 22,  157 => 21,  154 => 20,  151 => 19,  148 => 18,  138 => 17,  129 => 14,  127 => 12,  126 => 11,  125 => 10,  124 => 9,  121 => 8,  111 => 7,  103 => 27,  101 => 17,  98 => 16,  95 => 7,  85 => 6,  76 => 28,  74 => 6,  71 => 5,  61 => 4,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% sw_extends '@Storefront/storefront/base.html.twig' %}

{# @var page \\Shopware\\Storefront\\Page\\LandingPage\\LandingPage|\\Shopware\\Storefront\\Page\\CategoryPage\\CategoryPage #}
{% block base_main_inner %}
    <div class=\"container-main\">
        {% block page_content %}
            {% block cms_breadcrumb %}
                <div class=\"cms-breadcrumb container\">
                    {% sw_include '@Storefront/storefront/layout/breadcrumb.html.twig' with {
                        context: context,
                        themeIconConfig: themeIconConfig,
                        categoryId: shopware.navigation.id,
                    } only %}
                </div>
            {% endblock %}

            {% block cms_content %}
                {% set cmsPage = page.landingPage ? page.landingPage.cmsPage : page.cmsPage %}
                {% set cmsPageClasses = ('cms-page ' ~ cmsPage.cssClass|striptags)|trim %}
                {% set landingPage = page.landingPage ? page.landingPage : {} %}
                <div class=\"{{ cmsPageClasses }}\">
                    {% block page_content_blocks %}
                        {% sw_include '@Storefront/storefront/page/content/detail.html.twig' with {cmsPage: cmsPage, landingPage: landingPage} %}
                    {% endblock %}
                </div>
            {% endblock %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/page/content/index.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/page/content/index.html.twig");
    }
}
