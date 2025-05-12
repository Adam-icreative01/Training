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

/* @Storefront/storefront/block/cms-block-sidebar-filter.html.twig */
class __TwigTemplate_bfb595dd267366cf0865eb660b886544 extends Template
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
            'block_sidebar_filter' => [$this, 'block_block_sidebar_filter'],
            'block_sidebar_filter_inner' => [$this, 'block_block_sidebar_filter_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/block/cms-block-sidebar-filter.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('block_sidebar_filter', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_block_sidebar_filter(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_sidebar_filter"));

        // line 2
        yield "    ";
        $context["element"] = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["block"] ?? null), "slots", [], "any", false, false, false, 2), "getSlot", ["content"], "method", false, false, false, 2);
        // line 3
        yield "    ";
        $context["columns"] = 1;
        // line 4
        yield "
    <div class=\"col-12\" data-cms-element-id=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 5), "html", null, true);
        yield "\">
        ";
        // line 6
        yield from $this->unwrap()->yieldBlock('block_sidebar_filter_inner', $context, $blocks);
        // line 9
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_block_sidebar_filter_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_sidebar_filter_inner"));

        // line 7
        yield "            ";
        try {
            $_v0 =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find((("@Storefront/storefront/element/cms-element-" . SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 7)) . ".html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/block/cms-block-sidebar-filter.html.twig", 7);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 8
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/block/cms-block-sidebar-filter.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  115 => 8,  98 => 7,  88 => 6,  79 => 9,  77 => 6,  73 => 5,  70 => 4,  67 => 3,  64 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block block_sidebar_filter %}
    {% set element = block.slots.getSlot('content') %}
    {% set columns = 1 %}

    <div class=\"col-12\" data-cms-element-id=\"{{ element.id }}\">
        {% block block_sidebar_filter_inner %}
            {% sw_include '@Storefront/storefront/element/cms-element-' ~ element.type ~ '.html.twig' ignore missing %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/block/cms-block-sidebar-filter.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/block/cms-block-sidebar-filter.html.twig");
    }
}
