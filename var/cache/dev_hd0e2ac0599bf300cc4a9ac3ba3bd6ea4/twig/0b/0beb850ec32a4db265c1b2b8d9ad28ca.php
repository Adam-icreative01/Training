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

/* @Storefront/storefront/element/cms-element-text.html.twig */
class __TwigTemplate_940514b5be781120f35a30e4bcb05018 extends Template
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
            'element_text' => [$this, 'block_element_text'],
            'element_text_alignment' => [$this, 'block_element_text_alignment'],
            'element_text_inner' => [$this, 'block_element_text_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-text.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('element_text', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_element_text(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_text"));

        // line 2
        yield "    ";
        $context["config"] = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "fieldConfig", [], "any", false, false, false, 2), "elements", [], "any", false, false, false, 2);
        // line 3
        yield "
    <div class=\"cms-element-";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 4), "html", null, true);
        if (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 4), "value", [], "any", false, false, false, 4)) {
            yield " has-vertical-alignment";
        }
        yield "\">
        ";
        // line 5
        yield from $this->unwrap()->yieldBlock('element_text_alignment', $context, $blocks);
        // line 16
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_element_text_alignment(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_text_alignment"));

        // line 6
        yield "            ";
        if (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 6), "value", [], "any", false, false, false, 6)) {
            // line 7
            yield "                <div class=\"cms-element-alignment";
            if ((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7) == "center")) {
                yield " align-self-center";
            } elseif ((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7) == "flex-end")) {
                yield " align-self-end";
            } else {
                yield " align-self-start";
            }
            yield "\">
            ";
        }
        // line 9
        yield "                ";
        yield from $this->unwrap()->yieldBlock('element_text_inner', $context, $blocks);
        // line 12
        yield "            ";
        if (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 12), "value", [], "any", false, false, false, 12)) {
            // line 13
            yield "                </div>
            ";
        }
        // line 15
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_element_text_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_text_inner"));

        // line 10
        yield "                    ";
        yield SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 10), "content", [], "any", false, false, false, 10);
        yield "
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/element/cms-element-text.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  142 => 10,  132 => 9,  124 => 15,  120 => 13,  117 => 12,  114 => 9,  102 => 7,  99 => 6,  89 => 5,  80 => 16,  78 => 5,  71 => 4,  68 => 3,  65 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block element_text %}
    {% set config = element.fieldConfig.elements %}

    <div class=\"cms-element-{{ element.type }}{% if config.verticalAlign.value %} has-vertical-alignment{% endif %}\">
        {% block element_text_alignment %}
            {% if config.verticalAlign.value %}
                <div class=\"cms-element-alignment{% if config.verticalAlign.value == \"center\" %} align-self-center{% elseif config.verticalAlign.value == \"flex-end\" %} align-self-end{% else %} align-self-start{% endif %}\">
            {% endif %}
                {% block element_text_inner %}
                    {{ element.data.content|raw }}
                {% endblock %}
            {% if config.verticalAlign.value %}
                </div>
            {% endif %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/element/cms-element-text.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-text.html.twig");
    }
}
