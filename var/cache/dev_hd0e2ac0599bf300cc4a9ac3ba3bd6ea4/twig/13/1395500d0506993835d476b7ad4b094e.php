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

/* @Storefront/storefront/block/cms-block-image-text.html.twig */
class __TwigTemplate_e417de99a28cb9770f930faa7394b47b extends Template
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
            'block_image_text' => [$this, 'block_block_image_text'],
            'block_image_text_left' => [$this, 'block_block_image_text_left'],
            'block_image_text_left_inner' => [$this, 'block_block_image_text_left_inner'],
            'block_image_text_right' => [$this, 'block_block_image_text_right'],
            'block_image_text_right_inner' => [$this, 'block_block_image_text_right_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/block/cms-block-image-text.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('block_image_text', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_block_image_text(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text"));

        // line 2
        yield "    ";
        $context["columns"] = 2;
        // line 3
        yield "
    ";
        // line 4
        yield from $this->unwrap()->yieldBlock('block_image_text_left', $context, $blocks);
        // line 13
        yield "
    ";
        // line 14
        yield from $this->unwrap()->yieldBlock('block_image_text_right', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_block_image_text_left(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_left"));

        // line 5
        yield "        ";
        $context["element"] = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["block"] ?? null), "slots", [], "any", false, false, false, 5), "getSlot", ["left"], "method", false, false, false, 5);
        // line 6
        yield "
        <div class=\"col-md-6\" data-cms-element-id=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 7), "html", null, true);
        yield "\">
            ";
        // line 8
        yield from $this->unwrap()->yieldBlock('block_image_text_left_inner', $context, $blocks);
        // line 11
        yield "        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_block_image_text_left_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_left_inner"));

        // line 9
        yield "                ";
        try {
            $_v0 =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find((("@Storefront/storefront/element/cms-element-" . SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 9)) . ".html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/block/cms-block-image-text.html.twig", 9);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 10
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_block_image_text_right(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_right"));

        // line 15
        yield "        ";
        $context["element"] = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["block"] ?? null), "slots", [], "any", false, false, false, 15), "getSlot", ["right"], "method", false, false, false, 15);
        // line 16
        yield "
        <div class=\"col-md-6\" data-cms-element-id=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 17), "html", null, true);
        yield "\">
            ";
        // line 18
        yield from $this->unwrap()->yieldBlock('block_image_text_right_inner', $context, $blocks);
        // line 21
        yield "        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_block_image_text_right_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_right_inner"));

        // line 19
        yield "                ";
        try {
            $_v1 =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find((("@Storefront/storefront/element/cms-element-" . SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 19)) . ".html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/block/cms-block-image-text.html.twig", 19);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
            $_v1 = null;
        }
        if ($_v1) {
            yield from $_v1->unwrap()->yield($context);
        }
        // line 20
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/block/cms-block-image-text.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  210 => 20,  193 => 19,  183 => 18,  174 => 21,  172 => 18,  168 => 17,  165 => 16,  162 => 15,  152 => 14,  144 => 10,  127 => 9,  117 => 8,  108 => 11,  106 => 8,  102 => 7,  99 => 6,  96 => 5,  86 => 4,  78 => 14,  75 => 13,  73 => 4,  70 => 3,  67 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block block_image_text %}
    {% set columns = 2 %}

    {% block block_image_text_left %}
        {% set element = block.slots.getSlot('left') %}

        <div class=\"col-md-6\" data-cms-element-id=\"{{ element.id }}\">
            {% block block_image_text_left_inner %}
                {% sw_include '@Storefront/storefront/element/cms-element-' ~ element.type ~ '.html.twig' ignore missing %}
            {% endblock %}
        </div>
    {% endblock %}

    {% block block_image_text_right %}
        {% set element = block.slots.getSlot('right') %}

        <div class=\"col-md-6\" data-cms-element-id=\"{{ element.id }}\">
            {% block block_image_text_right_inner %}
                {% sw_include '@Storefront/storefront/element/cms-element-' ~ element.type ~ '.html.twig' ignore missing %}
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/block/cms-block-image-text.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/block/cms-block-image-text.html.twig");
    }
}
