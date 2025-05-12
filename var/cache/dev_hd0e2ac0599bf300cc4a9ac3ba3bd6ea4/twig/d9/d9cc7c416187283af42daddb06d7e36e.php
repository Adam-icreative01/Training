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

/* @Storefront/storefront/section/cms-section-default.html.twig */
class __TwigTemplate_441562c23c41bdd6ccfbec5c4e4d255d extends Template
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
            'page_content_section_default' => [$this, 'block_page_content_section_default'],
            'section_default_content_block' => [$this, 'block_section_default_content_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/section/cms-section-default.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('page_content_section_default', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_content_section_default(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_section_default"));

        // line 2
        yield "    ";
        // line 3
        yield "    ";
        $context["layout"] = ((SwTwigFunction::getAttribute($this->env, $this->source, ($context["section"] ?? null), "sizingMode", [], "any", false, false, false, 3)) ? (Twig\Extension\CoreExtension::replace(SwTwigFunction::getAttribute($this->env, $this->source, ($context["section"] ?? null), "sizingMode", [], "any", false, false, false, 3), ["_" => "-"])) : ("container"));
        // line 4
        yield "    <section class=\"cms-section-default ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["layout"] ?? null), "html", null, true);
        yield "\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(SwTwigFunction::getAttribute($this->env, $this->source, ($context["section"] ?? null), "blocks", [], "any", false, false, false, 5));
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
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 6
            yield "            ";
            yield from $this->unwrap()->yieldBlock('section_default_content_block', $context, $blocks);
            // line 9
            yield "        ";
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
        unset($context['_seq'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_section_default_content_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_default_content_block"));

        // line 7
        yield "                ";
        yield from $this->loadTemplate("@Storefront/storefront/section/cms-section-block-container.html.twig", "@Storefront/storefront/section/cms-section-default.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/section/cms-section-default.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  130 => 8,  127 => 7,  117 => 6,  108 => 10,  94 => 9,  91 => 6,  74 => 5,  69 => 4,  66 => 3,  64 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block page_content_section_default %}
    {# ludtwig-ignore twig-hash-key-no-quotes #}
    {% set layout = section.sizingMode ? section.sizingMode|replace({'_': '-'}) : 'container' %}
    <section class=\"cms-section-default {{ layout }}\">
        {% for block in section.blocks %}
            {% block section_default_content_block %}
                {% sw_include '@Storefront/storefront/section/cms-section-block-container.html.twig' %}
            {% endblock %}
        {% endfor %}
    </section>
{% endblock %}
", "@Storefront/storefront/section/cms-section-default.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/section/cms-section-default.html.twig");
    }
}
