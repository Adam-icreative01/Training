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

/* @Storefront/storefront/page/content/detail.html.twig */
class __TwigTemplate_3df310e6f742bc05fd3054cbb8fe007f extends Template
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
            'page_content_sections_inner' => [$this, 'block_page_content_sections_inner'],
            'page_content_section' => [$this, 'block_page_content_section'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/content/detail.html.twig"));

        // line 2
        yield "
";
        // line 4
        yield from $this->unwrap()->yieldBlock('page_content_sections_inner', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_content_sections_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_sections_inner"));

        // line 5
        yield "    <div class=\"cms-sections\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(SwTwigFunction::getAttribute($this->env, $this->source, ($context["cmsPage"] ?? null), "sections", [], "any", false, false, false, 6));
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
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 7
            yield "            ";
            $context["sectionBgColor"] = SwTwigFunction::getAttribute($this->env, $this->source, $context["section"], "backgroundColor", [], "any", false, false, false, 7);
            // line 8
            yield "            ";
            $context["sectionBgImg"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(SwTwigFunction::getAttribute($this->env, $this->source, $context["section"], "backgroundMedia", [], "any", false, false, false, 8));
            // line 9
            yield "            ";
            $context["sectionBgImgMode"] = SwTwigFunction::getAttribute($this->env, $this->source, $context["section"], "backgroundMediaMode", [], "any", false, false, false, 9);
            // line 10
            yield "
            ";
            // line 11
            $context["sectionClasses"] = [SwTwigFunction::getAttribute($this->env, $this->source, $context["section"], "cssClass", [], "any", false, false, false, 11), ("pos-" . SwTwigFunction::getAttribute($this->env, $this->source, $context["section"], "position", [], "any", false, false, false, 11)), ("cms-section-" . SwTwigFunction::getAttribute($this->env, $this->source, $context["section"], "type", [], "any", false, false, false, 11))];
            // line 12
            yield "
            ";
            // line 13
            if (($context["sectionBgImg"] ?? null)) {
                // line 14
                yield "                ";
                $context["sectionClasses"] = Twig\Extension\CoreExtension::merge(["bg-image"], ($context["sectionClasses"] ?? null));
                // line 15
                yield "            ";
            }
            // line 16
            yield "
            ";
            // line 17
            if (($context["sectionBgColor"] ?? null)) {
                // line 18
                yield "                ";
                $context["sectionClasses"] = Twig\Extension\CoreExtension::merge(["bg-color"], ($context["sectionClasses"] ?? null));
                // line 19
                yield "            ";
            }
            // line 20
            yield "
            ";
            // line 21
            if ((null === SwTwigFunction::getAttribute($this->env, $this->source, $context["section"], "visibility", [], "any", false, false, false, 21))) {
                // line 22
                yield "                ";
                $context["visibility"] = ["mobile" => true, "tablet" => true, "desktop" => true];
                // line 27
                yield "            ";
            } else {
                // line 28
                yield "                ";
                $context["visibility"] = SwTwigFunction::getAttribute($this->env, $this->source, $context["section"], "visibility", [], "any", false, false, false, 28);
                // line 29
                yield "            ";
            }
            // line 30
            yield "
            ";
            // line 31
            if ( !SwTwigFunction::getAttribute($this->env, $this->source, ($context["visibility"] ?? null), "mobile", [], "any", false, false, false, 31)) {
                // line 32
                yield "                ";
                $context["sectionClasses"] = Twig\Extension\CoreExtension::merge(["hidden-mobile"], ($context["sectionClasses"] ?? null));
                // line 33
                yield "            ";
            }
            // line 34
            yield "            ";
            if ( !SwTwigFunction::getAttribute($this->env, $this->source, ($context["visibility"] ?? null), "tablet", [], "any", false, false, false, 34)) {
                // line 35
                yield "                ";
                $context["sectionClasses"] = Twig\Extension\CoreExtension::merge(["hidden-tablet"], ($context["sectionClasses"] ?? null));
                // line 36
                yield "            ";
            }
            // line 37
            yield "            ";
            if ( !SwTwigFunction::getAttribute($this->env, $this->source, ($context["visibility"] ?? null), "desktop", [], "any", false, false, false, 37)) {
                // line 38
                yield "                ";
                $context["sectionClasses"] = Twig\Extension\CoreExtension::merge(["hidden-desktop"], ($context["sectionClasses"] ?? null));
                // line 39
                yield "            ";
            }
            // line 40
            yield "
            ";
            // line 41
            yield from $this->unwrap()->yieldBlock('page_content_section', $context, $blocks);
            // line 48
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
        unset($context['_seq'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_content_section(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_section"));

        // line 42
        yield "                <div class=\"cms-section ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(($context["sectionClasses"] ?? null), " "), "html", null, true);
        yield "\"
                     style=\"";
        // line 43
        if (($context["sectionBgColor"] ?? null)) {
            yield "background-color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sectionBgColor"] ?? null), "html", null, true);
            yield ";";
        }
        if (($context["sectionBgImg"] ?? null)) {
            yield "background-image: url(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sectionBgImg"] ?? null), "html", null, true);
            yield ");background-size: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, ($context["section"] ?? null), "backgroundMediaMode", [], "any", false, false, false, 43), "html", null, true);
            yield ";";
        }
        yield "\">

                    ";
        // line 45
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find((("@Storefront/storefront/section/cms-section-" . SwTwigFunction::getAttribute($this->env, $this->source, ($context["section"] ?? null), "type", [], "any", false, false, false, 45)) . ".html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/content/detail.html.twig", 45);
        })())->unwrap()->yield($context);
        // line 46
        yield "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/page/content/detail.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  236 => 46,  228 => 45,  212 => 43,  207 => 42,  197 => 41,  188 => 49,  174 => 48,  172 => 41,  169 => 40,  166 => 39,  163 => 38,  160 => 37,  157 => 36,  154 => 35,  151 => 34,  148 => 33,  145 => 32,  143 => 31,  140 => 30,  137 => 29,  134 => 28,  131 => 27,  128 => 22,  126 => 21,  123 => 20,  120 => 19,  117 => 18,  115 => 17,  112 => 16,  109 => 15,  106 => 14,  104 => 13,  101 => 12,  99 => 11,  96 => 10,  93 => 9,  90 => 8,  87 => 7,  70 => 6,  67 => 5,  50 => 4,  47 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var cmsPage \\Shopware\\Core\\Content\\Cms\\CmsPageEntity #}

{# @var landingPage \\Shopware\\Core\\Content\\LandingPage\\LandingPageEntity #}
{% block page_content_sections_inner %}
    <div class=\"cms-sections\">
        {% for section in cmsPage.sections %}
            {% set sectionBgColor = section.backgroundColor %}
            {% set sectionBgImg = section.backgroundMedia|sw_encode_media_url %}
            {% set sectionBgImgMode = section.backgroundMediaMode %}

            {% set sectionClasses = [section.cssClass, 'pos-' ~ section.position, 'cms-section-' ~ section.type] %}

            {% if sectionBgImg %}
                {% set sectionClasses = ['bg-image']|merge(sectionClasses) %}
            {% endif %}

            {% if sectionBgColor %}
                {% set sectionClasses = ['bg-color']|merge(sectionClasses) %}
            {% endif %}

            {% if section.visibility is null %}
                {% set visibility = {
                    mobile: true,
                    tablet: true,
                    desktop: true
                } %}
            {% else %}
                {% set visibility = section.visibility %}
            {% endif %}

            {% if not visibility.mobile %}
                {% set sectionClasses = ['hidden-mobile']|merge(sectionClasses) %}
            {% endif %}
            {% if not visibility.tablet %}
                {% set sectionClasses = ['hidden-tablet']|merge(sectionClasses) %}
            {% endif %}
            {% if not visibility.desktop %}
                {% set sectionClasses = ['hidden-desktop']|merge(sectionClasses) %}
            {% endif %}

            {% block page_content_section %}
                <div class=\"cms-section {{ sectionClasses|join(' ') }}\"
                     style=\"{% if sectionBgColor %}background-color: {{ sectionBgColor }};{% endif %}{% if sectionBgImg %}background-image: url({{ sectionBgImg }});background-size: {{ section.backgroundMediaMode }};{% endif %}\">

                    {% sw_include '@Storefront/storefront/section/cms-section-' ~ section.type ~ '.html.twig' %}
                </div>
            {% endblock %}
        {% endfor %}
    </div>
{% endblock %}
", "@Storefront/storefront/page/content/detail.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/page/content/detail.html.twig");
    }
}
