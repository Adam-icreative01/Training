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

/* @Storefront/storefront/element/cms-element-image.html.twig */
class __TwigTemplate_450e6156fe4007fd372529e74915b16e extends Template
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
            'element_image' => [$this, 'block_element_image'],
            'element_product_slider_alignment' => [$this, 'block_element_product_slider_alignment'],
            'element_image_inner' => [$this, 'block_element_image_inner'],
            'element_image_container' => [$this, 'block_element_image_container'],
            'element_image_media' => [$this, 'block_element_image_media'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-image.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('element_image', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_element_image(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image"));

        // line 2
        yield "    ";
        $context["config"] = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "fieldConfig", [], "any", false, false, false, 2), "elements", [], "any", false, false, false, 2);
        // line 3
        yield "    ";
        $context["isCover"] = (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 3), "config", [], "any", false, false, false, 3), "displayMode", [], "any", false, false, false, 3), "value", [], "any", false, false, false, 3) == "cover");
        // line 4
        yield "
    <div class=\"cms-element-";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 5), "html", null, true);
        if ((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 5), "value", [], "any", false, false, false, 5) &&  !($context["isCover"] ?? null))) {
            yield " d-flex has-vertical-alignment";
        }
        if (((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["config"] ?? null), "horizontalAlign", [], "any", false, false, false, 5), "value", [], "any", false, false, false, 5) == "center") &&  !($context["isCover"] ?? null))) {
            yield " justify-content-center";
        } elseif (((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["config"] ?? null), "horizontalAlign", [], "any", false, false, false, 5), "value", [], "any", false, false, false, 5) == "flex-end") &&  !($context["isCover"] ?? null))) {
            yield " justify-content-end";
        } else {
            yield " justify-content-start";
        }
        yield "\">
        ";
        // line 6
        yield from $this->unwrap()->yieldBlock('element_product_slider_alignment', $context, $blocks);
        // line 51
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_element_product_slider_alignment(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_slider_alignment"));

        // line 7
        yield "            ";
        if ((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7) &&  !($context["isCover"] ?? null))) {
            // line 8
            yield "                <div class=\"cms-element-alignment";
            if ((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 8), "value", [], "any", false, false, false, 8) == "center")) {
                yield " align-self-center";
            } elseif ((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 8), "value", [], "any", false, false, false, 8) == "flex-end")) {
                yield " align-self-end";
            } else {
                yield " align-self-start";
            }
            yield "\">
            ";
        }
        // line 10
        yield "            ";
        yield from $this->unwrap()->yieldBlock('element_image_inner', $context, $blocks);
        // line 47
        yield "            ";
        if ((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 47), "value", [], "any", false, false, false, 47) &&  !($context["isCover"] ?? null))) {
            // line 48
            yield "                </div>
            ";
        }
        // line 50
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_element_image_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_inner"));

        // line 11
        yield "                ";
        $context["imageElement"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 12
            yield "                    ";
            yield from $this->unwrap()->yieldBlock('element_image_container', $context, $blocks);
            // line 35
            yield "                ";
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 36
        yield "
                ";
        // line 37
        if (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 37), "config", [], "any", false, false, false, 37), "url", [], "any", false, false, false, 37), "value", [], "any", false, false, false, 37)) {
            // line 38
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 38), "config", [], "any", false, false, false, 38), "url", [], "any", false, false, false, 38), "value", [], "any", false, false, false, 38), "html", null, true);
            yield "\"
                       class=\"cms-image-link\"
                       ";
            // line 40
            if (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 40), "config", [], "any", false, false, false, 40), "newTab", [], "any", false, false, false, 40), "value", [], "any", false, false, false, 40)) {
                yield "target=\"_blank\" rel=\"noopener\"";
            }
            yield ">
                        ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["imageElement"] ?? null), "html", null, true);
            yield "
                    </a>
                ";
        } else {
            // line 44
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["imageElement"] ?? null), "html", null, true);
            yield "
                ";
        }
        // line 46
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_element_image_container(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_container"));

        // line 13
        yield "                        ";
        if (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 13), "media", [], "any", false, false, false, 13), "url", [], "any", false, false, false, 13)) {
            // line 14
            yield "                            <div class=\"w-100 cms-image-container is-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 14), "config", [], "any", false, false, false, 14), "displayMode", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14), "html", null, true);
            yield "\"
                                ";
            // line 15
            if ((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 15), "config", [], "any", false, false, false, 15), "minHeight", [], "any", false, false, false, 15), "value", [], "any", false, false, false, 15) && ($context["isCover"] ?? null))) {
                yield " style=\"min-height: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 15), "config", [], "any", false, false, false, 15), "minHeight", [], "any", false, false, false, 15), "value", [], "any", false, false, false, 15), "html", null, true);
                yield ";\"";
            }
            yield ">
                                ";
            // line 16
            yield from $this->unwrap()->yieldBlock('element_image_media', $context, $blocks);
            // line 32
            yield "                            </div>
                        ";
        }
        // line 34
        yield "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_element_image_media(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_media"));

        // line 17
        yield "                                    ";
        $context["attributes"] = ["class" => "cms-image", "alt" => ((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source,         // line 19
($context["element"] ?? null), "translated", [], "any", false, false, false, 19), "config", [], "any", false, false, false, 19), "isDecorative", [], "any", false, false, false, 19), "value", [], "any", false, false, false, 19)) ? (" ") : (((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 19), "media", [], "any", false, false, false, 19), "translated", [], "any", false, false, false, 19), "alt", [], "any", false, false, false, 19)) ? (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 19), "media", [], "any", false, false, false, 19), "translated", [], "any", false, false, false, 19), "alt", [], "any", false, false, false, 19)) : ("")))), "title" => ((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source,         // line 20
($context["element"] ?? null), "translated", [], "any", false, false, false, 20), "config", [], "any", false, false, false, 20), "isDecorative", [], "any", false, false, false, 20), "value", [], "any", false, false, false, 20)) ? ("") : (((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 20), "media", [], "any", false, false, false, 20), "translated", [], "any", false, false, false, 20), "title", [], "any", false, false, false, 20)) ? (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 20), "media", [], "any", false, false, false, 20), "translated", [], "any", false, false, false, 20), "title", [], "any", false, false, false, 20)) : ("")))), "loading" => "lazy"];
        // line 23
        yield "
                                    ";
        // line 24
        if ((($context["isCover"] ?? null) || (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 24), "config", [], "any", false, false, false, 24), "displayMode", [], "any", false, false, false, 24), "value", [], "any", false, false, false, 24) == "contain"))) {
            // line 25
            yield "                                        ";
            $context["attributes"] = Twig\Extension\CoreExtension::merge(($context["attributes"] ?? null), ["data-object-fit" => SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 25), "config", [], "any", false, false, false, 25), "displayMode", [], "any", false, false, false, 25), "value", [], "any", false, false, false, 25)]);
            // line 26
            yield "                                    ";
        }
        // line 27
        yield "
                                    ";
        // line 28
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image.html.twig", 28);
        })())->unwrap()->yield(CoreExtension::merge($context, ["media" => SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source,         // line 29
($context["element"] ?? null), "data", [], "any", false, false, false, 29), "media", [], "any", false, false, false, 29), "name" => "cms-image-thumbnails"]));
        // line 31
        yield "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/element/cms-element-image.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  279 => 31,  277 => 29,  270 => 28,  267 => 27,  264 => 26,  261 => 25,  259 => 24,  256 => 23,  254 => 20,  253 => 19,  251 => 17,  241 => 16,  233 => 34,  229 => 32,  227 => 16,  219 => 15,  214 => 14,  211 => 13,  201 => 12,  193 => 46,  187 => 44,  181 => 41,  175 => 40,  169 => 38,  167 => 37,  164 => 36,  160 => 35,  157 => 12,  154 => 11,  144 => 10,  136 => 50,  132 => 48,  129 => 47,  126 => 10,  114 => 8,  111 => 7,  101 => 6,  92 => 51,  90 => 6,  76 => 5,  73 => 4,  70 => 3,  67 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block element_image %}
    {% set config = element.fieldConfig.elements %}
    {% set isCover = element.translated.config.displayMode.value == 'cover' %}

    <div class=\"cms-element-{{ element.type }}{% if config.verticalAlign.value and not isCover %} d-flex has-vertical-alignment{% endif %}{% if config.horizontalAlign.value == \"center\" and not isCover %} justify-content-center{% elseif config.horizontalAlign.value == \"flex-end\" and not isCover %} justify-content-end{% else %} justify-content-start{% endif %}\">
        {% block element_product_slider_alignment %}
            {% if config.verticalAlign.value and not isCover %}
                <div class=\"cms-element-alignment{% if config.verticalAlign.value == \"center\" %} align-self-center{% elseif config.verticalAlign.value == \"flex-end\" %} align-self-end{% else %} align-self-start{% endif %}\">
            {% endif %}
            {% block element_image_inner %}
                {% set imageElement %}
                    {% block element_image_container %}
                        {% if element.data.media.url %}
                            <div class=\"w-100 cms-image-container is-{{ element.translated.config.displayMode.value }}\"
                                {% if element.translated.config.minHeight.value and isCover %} style=\"min-height: {{ element.translated.config.minHeight.value }};\"{% endif %}>
                                {% block element_image_media %}
                                    {% set attributes = {
                                        'class': 'cms-image',
                                        'alt': element.translated.config.isDecorative.value ? ' ' : (element.data.media.translated.alt ?: ''),
                                        'title': element.translated.config.isDecorative.value ? '' : (element.data.media.translated.title ?: ''),
                                        'loading': 'lazy'
                                    } %}

                                    {% if isCover or element.translated.config.displayMode.value == 'contain' %}
                                        {% set attributes = attributes|merge({ 'data-object-fit': element.translated.config.displayMode.value }) %}
                                    {% endif %}

                                    {% sw_thumbnails 'cms-image-thumbnails' with {
                                        media: element.data.media
                                    } %}
                                {% endblock %}
                            </div>
                        {% endif %}
                    {% endblock %}
                {% endset %}

                {% if element.translated.config.url.value %}
                    <a href=\"{{ element.translated.config.url.value }}\"
                       class=\"cms-image-link\"
                       {% if element.translated.config.newTab.value %}target=\"_blank\" rel=\"noopener\"{% endif %}>
                        {{ imageElement }}
                    </a>
                {% else %}
                    {{ imageElement }}
                {% endif %}
            {% endblock %}
            {% if config.verticalAlign.value and not isCover %}
                </div>
            {% endif %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/element/cms-element-image.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-image.html.twig");
    }
}
