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

/* @Storefront/storefront/section/cms-section-block-container.html.twig */
class __TwigTemplate_26d8083e6d001f8972a218a17601290c extends Template
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
            'section_content_block' => [$this, 'block_section_content_block'],
            'section_content_block_background_image' => [$this, 'block_section_content_block_background_image'],
            'section_content_block_container' => [$this, 'block_section_content_block_container'],
            'section_content_block_row' => [$this, 'block_section_content_block_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/section/cms-section-block-container.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('section_content_block', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_section_content_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_content_block"));

        // line 2
        yield "
    ";
        // line 3
        $context["top"] = ((SwTwigFunction::getAttribute($this->env, $this->source, ($context["block"] ?? null), "marginTop", [], "any", false, false, false, 3)) ? (SwTwigFunction::getAttribute($this->env, $this->source, ($context["block"] ?? null), "marginTop", [], "any", false, false, false, 3)) : (0));
        // line 4
        yield "    ";
        $context["right"] = ((SwTwigFunction::getAttribute($this->env, $this->source, ($context["block"] ?? null), "marginRight", [], "any", false, false, false, 4)) ? (SwTwigFunction::getAttribute($this->env, $this->source, ($context["block"] ?? null), "marginRight", [], "any", false, false, false, 4)) : (0));
        // line 5
        yield "    ";
        $context["bottom"] = ((SwTwigFunction::getAttribute($this->env, $this->source, ($context["block"] ?? null), "marginBottom", [], "any", false, false, false, 5)) ? (SwTwigFunction::getAttribute($this->env, $this->source, ($context["block"] ?? null), "marginBottom", [], "any", false, false, false, 5)) : (0));
        // line 6
        yield "    ";
        $context["left"] = ((SwTwigFunction::getAttribute($this->env, $this->source, ($context["block"] ?? null), "marginLeft", [], "any", false, false, false, 6)) ? (SwTwigFunction::getAttribute($this->env, $this->source, ($context["block"] ?? null), "marginLeft", [], "any", false, false, false, 6)) : (0));
        // line 7
        yield "
    ";
        // line 8
        if ((((($context["top"] ?? null) || ($context["right"] ?? null)) || ($context["bottom"] ?? null)) || ($context["left"] ?? null))) {
            // line 9
            yield "        ";
            $context["padding"] = ((((((($context["top"] ?? null) . " ") . ($context["right"] ?? null)) . " ") . ($context["bottom"] ?? null)) . " ") . ($context["left"] ?? null));
            // line 10
            yield "    ";
        }
        // line 11
        yield "
    ";
        // line 12
        $context["blockBgColor"] = SwTwigFunction::getAttribute($this->env, $this->source, ($context["block"] ?? null), "backgroundColor", [], "any", false, false, false, 12);
        // line 13
        yield "
    ";
        // line 14
        $context["blockClasses"] = [SwTwigFunction::getAttribute($this->env, $this->source, ($context["block"] ?? null), "cssClass", [], "any", false, false, false, 14), ("pos-" . SwTwigFunction::getAttribute($this->env, $this->source, ($context["block"] ?? null), "position", [], "any", false, false, false, 14)), ("cms-block-" . SwTwigFunction::getAttribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 14))];
        // line 15
        yield "
    ";
        // line 16
        if (SwTwigFunction::getAttribute($this->env, $this->source, ($context["block"] ?? null), "backgroundMedia", [], "any", false, false, false, 16)) {
            // line 17
            yield "        ";
            $context["blockClasses"] = Twig\Extension\CoreExtension::merge(["bg-image"], ($context["blockClasses"] ?? null));
            // line 18
            yield "    ";
        }
        // line 19
        yield "
    ";
        // line 20
        if (($context["blockBgColor"] ?? null)) {
            // line 21
            yield "        ";
            $context["blockClasses"] = Twig\Extension\CoreExtension::merge(["bg-color"], ($context["blockClasses"] ?? null));
            // line 22
            yield "    ";
        }
        // line 23
        yield "
    ";
        // line 24
        $context["columns"] = 3;
        // line 25
        yield "    ";
        $context["isInSidebar"] = (SwTwigFunction::getAttribute($this->env, $this->source, ($context["block"] ?? null), "sectionPosition", [], "any", false, false, false, 25) == "sidebar");
        // line 26
        yield "    ";
        $context["sidebarClasses"] = "";
        // line 27
        yield "
    ";
        // line 28
        if ((($context["isInSidebar"] ?? null) == true)) {
            // line 29
            yield "        ";
            $context["sidebarClasses"] = "has--sidebar";
            // line 30
            yield "    ";
        }
        // line 31
        yield "
    ";
        // line 32
        if ((null === SwTwigFunction::getAttribute($this->env, $this->source, ($context["block"] ?? null), "visibility", [], "any", false, false, false, 32))) {
            // line 33
            yield "        ";
            $context["visibility"] = ["mobile" => true, "tablet" => true, "desktop" => true];
            // line 38
            yield "    ";
        } else {
            // line 39
            yield "        ";
            $context["visibility"] = SwTwigFunction::getAttribute($this->env, $this->source, ($context["block"] ?? null), "visibility", [], "any", false, false, false, 39);
            // line 40
            yield "    ";
        }
        // line 41
        yield "
    ";
        // line 42
        if ( !SwTwigFunction::getAttribute($this->env, $this->source, ($context["visibility"] ?? null), "mobile", [], "any", false, false, false, 42)) {
            // line 43
            yield "        ";
            $context["blockClasses"] = Twig\Extension\CoreExtension::merge(["hidden-mobile"], ($context["blockClasses"] ?? null));
            // line 44
            yield "    ";
        }
        // line 45
        yield "    ";
        if ( !SwTwigFunction::getAttribute($this->env, $this->source, ($context["visibility"] ?? null), "tablet", [], "any", false, false, false, 45)) {
            // line 46
            yield "        ";
            $context["blockClasses"] = Twig\Extension\CoreExtension::merge(["hidden-tablet"], ($context["blockClasses"] ?? null));
            // line 47
            yield "    ";
        }
        // line 48
        yield "    ";
        if ( !SwTwigFunction::getAttribute($this->env, $this->source, ($context["visibility"] ?? null), "desktop", [], "any", false, false, false, 48)) {
            // line 49
            yield "        ";
            $context["blockClasses"] = Twig\Extension\CoreExtension::merge(["hidden-desktop"], ($context["blockClasses"] ?? null));
            // line 50
            yield "    ";
        }
        // line 51
        yield "
    <div class=\"cms-block ";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(($context["blockClasses"] ?? null), " "), "html", null, true);
        yield " position-relative\"
         style=\"";
        // line 53
        if (($context["blockBgColor"] ?? null)) {
            yield " background-color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["blockBgColor"] ?? null), "html", null, true);
            yield ";";
        }
        yield ";\">

        ";
        // line 55
        yield from $this->unwrap()->yieldBlock('section_content_block_background_image', $context, $blocks);
        // line 81
        yield "
        ";
        // line 82
        yield from $this->unwrap()->yieldBlock('section_content_block_container', $context, $blocks);
        // line 92
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_section_content_block_background_image(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_content_block_background_image"));

        // line 56
        yield "            ";
        if (SwTwigFunction::getAttribute($this->env, $this->source, ($context["block"] ?? null), "backgroundMedia", [], "any", false, false, false, 56)) {
            // line 57
            yield "                ";
            yield from             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/section/cms-section-block-container.html.twig", 57);
            })())->unwrap()->yield(CoreExtension::merge($context, ["media" => SwTwigFunction::getAttribute($this->env, $this->source,             // line 58
($context["block"] ?? null), "backgroundMedia", [], "any", false, false, false, 58), "autoColumnSizes" => false, "attributes" => ["class" => ("cms-block-background media-mode--" . SwTwigFunction::getAttribute($this->env, $this->source,             // line 61
($context["block"] ?? null), "backgroundMediaMode", [], "any", false, false, false, 61))], "name" => "cms-block-background"]));
            // line 64
            yield "            ";
        } elseif ((SwTwigFunction::getAttribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 64) == "text-on-image")) {
            // line 65
            yield "                ";
            $context["defaultMediaUrl"] = null;
            // line 66
            yield "
                ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["block"] ?? null), "slots", [], "any", false, false, false, 67), "elements", [], "any", false, false, false, 67));
            foreach ($context['_seq'] as $context["_key"] => $context["slot"]) {
                // line 68
                yield "                    ";
                if ((((SwTwigFunction::getAttribute($this->env, $this->source, $context["slot"], "slot", [], "any", false, false, false, 68) == "content") && SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, $context["slot"], "config", [], "any", false, false, false, 68), "media", [], "any", false, false, false, 68)) && SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, $context["slot"], "config", [], "any", false, false, false, 68), "media", [], "any", false, false, false, 68), "value", [], "any", false, false, false, 68))) {
                    // line 69
                    yield "                        ";
                    $context["defaultMediaUrl"] = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, $context["slot"], "config", [], "any", false, false, false, 69), "media", [], "any", false, false, false, 69), "value", [], "any", false, false, false, 69);
                    // line 70
                    yield "                        ";
                    $context["backgroundImageUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["defaultMediaUrl"] ?? null));
                    // line 71
                    yield "                        ";
                    break 1;
                    // line 72
                    yield "                    ";
                }
                // line 73
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['slot'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "
                ";
            // line 75
            if (($context["backgroundImageUrl"] ?? null)) {
                // line 76
                yield "                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["backgroundImageUrl"] ?? null), "html", null, true);
                yield "\"
                         class=\"cms-block-background media-mode--";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((SwTwigFunction::getAttribute($this->env, $this->source, ($context["block"] ?? null), "backgroundMediaMode", [], "any", true, true, false, 77)) ? (Twig\Extension\CoreExtension::default(SwTwigFunction::getAttribute($this->env, $this->source, ($context["block"] ?? null), "backgroundMediaMode", [], "any", false, false, false, 77), "cover")) : ("cover")), "html", null, true);
                yield "\">
                ";
            }
            // line 79
            yield "            ";
        }
        // line 80
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 82
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_section_content_block_container(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_content_block_container"));

        // line 83
        yield "            <div class=\"cms-block-container\"
                 style=\"";
        // line 84
        if (($context["padding"] ?? null)) {
            yield "padding: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["padding"] ?? null), "html", null, true);
            yield ";";
        }
        yield "\">
                ";
        // line 85
        yield from $this->unwrap()->yieldBlock('section_content_block_row', $context, $blocks);
        // line 90
        yield "            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 85
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_section_content_block_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_content_block_row"));

        // line 86
        yield "                    <div class=\"cms-block-container-row row cms-row ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sidebarClasses"] ?? null), "html", null, true);
        yield "\">
                        ";
        // line 87
        try {
            $_v0 =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find((("@Storefront/storefront/block/cms-block-" . SwTwigFunction::getAttribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 87)) . ".html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/section/cms-section-block-container.html.twig", 87);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 88
        yield "                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/section/cms-section-block-container.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  370 => 88,  354 => 87,  349 => 86,  339 => 85,  330 => 90,  328 => 85,  320 => 84,  317 => 83,  307 => 82,  299 => 80,  296 => 79,  291 => 77,  286 => 76,  284 => 75,  281 => 74,  275 => 73,  272 => 72,  269 => 71,  266 => 70,  263 => 69,  260 => 68,  256 => 67,  253 => 66,  250 => 65,  247 => 64,  245 => 61,  244 => 58,  236 => 57,  233 => 56,  223 => 55,  214 => 92,  212 => 82,  209 => 81,  207 => 55,  198 => 53,  194 => 52,  191 => 51,  188 => 50,  185 => 49,  182 => 48,  179 => 47,  176 => 46,  173 => 45,  170 => 44,  167 => 43,  165 => 42,  162 => 41,  159 => 40,  156 => 39,  153 => 38,  150 => 33,  148 => 32,  145 => 31,  142 => 30,  139 => 29,  137 => 28,  134 => 27,  131 => 26,  128 => 25,  126 => 24,  123 => 23,  120 => 22,  117 => 21,  115 => 20,  112 => 19,  109 => 18,  106 => 17,  104 => 16,  101 => 15,  99 => 14,  96 => 13,  94 => 12,  91 => 11,  88 => 10,  85 => 9,  83 => 8,  80 => 7,  77 => 6,  74 => 5,  71 => 4,  69 => 3,  66 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block section_content_block %}

    {% set top = block.marginTop ? block.marginTop : 0 %}
    {% set right = block.marginRight ? block.marginRight : 0 %}
    {% set bottom = block.marginBottom ? block.marginBottom : 0 %}
    {% set left = block.marginLeft ? block.marginLeft : 0 %}

    {% if top or right or bottom or left %}
        {% set padding = top ~ ' ' ~ right ~ ' ' ~ bottom ~ ' ' ~ left %}
    {% endif %}

    {% set blockBgColor = block.backgroundColor %}

    {% set blockClasses = [block.cssClass, 'pos-' ~ block.position, 'cms-block-' ~ block.type] %}

    {% if block.backgroundMedia %}
        {% set blockClasses = ['bg-image']|merge(blockClasses) %}
    {% endif %}

    {% if blockBgColor %}
        {% set blockClasses = ['bg-color']|merge(blockClasses) %}
    {% endif %}

    {% set columns = 3 %}
    {% set isInSidebar = block.sectionPosition == 'sidebar' %}
    {% set sidebarClasses = '' %}

    {% if isInSidebar == true %}
        {% set sidebarClasses = 'has--sidebar' %}
    {% endif %}

    {% if block.visibility is null %}
        {% set visibility = {
            mobile: true,
            tablet: true,
            desktop: true
        } %}
    {% else %}
        {% set visibility = block.visibility %}
    {% endif %}

    {% if not visibility.mobile %}
        {% set blockClasses = ['hidden-mobile']|merge(blockClasses) %}
    {% endif %}
    {% if not visibility.tablet %}
        {% set blockClasses = ['hidden-tablet']|merge(blockClasses) %}
    {% endif %}
    {% if not visibility.desktop %}
        {% set blockClasses = ['hidden-desktop']|merge(blockClasses) %}
    {% endif %}

    <div class=\"cms-block {{ blockClasses|join(' ') }} position-relative\"
         style=\"{% if blockBgColor %} background-color: {{ blockBgColor }};{% endif %};\">

        {% block section_content_block_background_image %}
            {% if block.backgroundMedia %}
                {% sw_thumbnails 'cms-block-background' with {
                    media: block.backgroundMedia,
                    autoColumnSizes: false,
                    attributes: {
                        class: 'cms-block-background media-mode--' ~ block.backgroundMediaMode
                    }
                } %}
            {% elseif (block.type == 'text-on-image') %}
                {% set defaultMediaUrl = null %}

                {% for slot in block.slots.elements %}
                    {% if slot.slot == 'content' and slot.config.media and slot.config.media.value %}
                        {% set defaultMediaUrl = slot.config.media.value %}
                        {% set backgroundImageUrl = asset(defaultMediaUrl) %}
                        {% break %}
                    {% endif %}
                {% endfor %}

                {% if backgroundImageUrl %}
                    <img src=\"{{ backgroundImageUrl }}\"
                         class=\"cms-block-background media-mode--{{ block.backgroundMediaMode|default('cover') }}\">
                {% endif %}
            {% endif %}
        {% endblock %}

        {% block section_content_block_container %}
            <div class=\"cms-block-container\"
                 style=\"{% if padding %}padding: {{ padding }};{% endif %}\">
                {% block section_content_block_row %}
                    <div class=\"cms-block-container-row row cms-row {{ sidebarClasses }}\">
                        {% sw_include '@Storefront/storefront/block/cms-block-' ~ block.type ~ '.html.twig' ignore missing %}
                    </div>
                {% endblock %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/section/cms-section-block-container.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/section/cms-section-block-container.html.twig");
    }
}
