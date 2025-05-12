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

/* @Storefront/storefront/component/pseudo-modal.html.twig */
class __TwigTemplate_ced2334d30a3c679a26d602a47674abf extends Template
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
            'component_pseudo_modal' => [$this, 'block_component_pseudo_modal'],
            'component_pseudo_modal_header' => [$this, 'block_component_pseudo_modal_header'],
            'component_pseudo_modal_title' => [$this, 'block_component_pseudo_modal_title'],
            'component_pseudo_modal_close_btn' => [$this, 'block_component_pseudo_modal_close_btn'],
            'component_pseudo_modal_close_btn_content' => [$this, 'block_component_pseudo_modal_close_btn_content'],
            'product_detail_zoom_modal_close_button_content' => [$this, 'block_product_detail_zoom_modal_close_button_content'],
            'component_pseudo_modal_body' => [$this, 'block_component_pseudo_modal_body'],
            'component_pseudo_modal_back_btn' => [$this, 'block_component_pseudo_modal_back_btn'],
            'component_pseudo_modal_back_btn_content' => [$this, 'block_component_pseudo_modal_back_btn_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/pseudo-modal.html.twig"));

        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('component_pseudo_modal', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pseudo_modal(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pseudo_modal"));

        // line 4
        yield "    <div class=\"js-pseudo-modal-template\">
        <div class=\"modal modal-lg fade\"
             tabindex=\"-1\"
             role=\"dialog\"
             aria-modal=\"true\"
             aria-hidden=\"true\"
             aria-labelledby=\"pseudo-modal-title\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content js-pseudo-modal-template-root-element\">
                    ";
        // line 13
        yield from $this->unwrap()->yieldBlock('component_pseudo_modal_header', $context, $blocks);
        // line 32
        yield "
                    ";
        // line 33
        yield from $this->unwrap()->yieldBlock('component_pseudo_modal_body', $context, $blocks);
        // line 37
        yield "                </div>
            </div>

            <template class=\"js-pseudo-modal-back-btn-template\">
                ";
        // line 42
        yield "
                ";
        // line 44
        yield "                ";
        yield from $this->unwrap()->yieldBlock('component_pseudo_modal_back_btn', $context, $blocks);
        // line 52
        yield "            </template>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pseudo_modal_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pseudo_modal_header"));

        // line 14
        yield "                        <div class=\"modal-header only-close\">
                            ";
        // line 15
        yield from $this->unwrap()->yieldBlock('component_pseudo_modal_title', $context, $blocks);
        // line 18
        yield "
                            ";
        // line 19
        yield from $this->unwrap()->yieldBlock('component_pseudo_modal_close_btn', $context, $blocks);
        // line 30
        yield "                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pseudo_modal_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pseudo_modal_title"));

        // line 16
        yield "                                <div id=\"pseudo-modal-title\" class=\"modal-title js-pseudo-modal-template-title-element h5\"></div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pseudo_modal_close_btn(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pseudo_modal_close_btn"));

        // line 20
        yield "                                <button type=\"button\"
                                        class=\"btn-close close\"
                                        data-bs-dismiss=\"modal\"
                                        aria-label=\"Close\">
                                    ";
        // line 24
        yield from $this->unwrap()->yieldBlock('component_pseudo_modal_close_btn_content', $context, $blocks);
        // line 28
        yield "                                </button>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pseudo_modal_close_btn_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pseudo_modal_close_btn_content"));

        // line 25
        yield "                                        ";
        // line 26
        yield "                                        ";
        yield from $this->unwrap()->yieldBlock('product_detail_zoom_modal_close_button_content', $context, $blocks);
        // line 27
        yield "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_product_detail_zoom_modal_close_button_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_detail_zoom_modal_close_button_content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pseudo_modal_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pseudo_modal_body"));

        // line 34
        yield "                        <div class=\"modal-body js-pseudo-modal-template-content-element\">
                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pseudo_modal_back_btn(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pseudo_modal_back_btn"));

        // line 45
        yield "                    <button class=\"js-pseudo-modal-back-btn btn btn-outline-primary\" data-ajax-modal=\"true\" data-url=\"#\" href=\"#\">
                        ";
        // line 46
        yield from $this->unwrap()->yieldBlock('component_pseudo_modal_back_btn_content', $context, $blocks);
        // line 50
        yield "                    </button>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_pseudo_modal_back_btn_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pseudo_modal_back_btn_content"));

        // line 47
        yield "                            ";
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/pseudo-modal.html.twig", 47);
        })())->unwrap()->yield(CoreExtension::merge($context, ["size" => "sm", "class" => "me-1", "name" => "arrow-left"]));
        // line 48
        yield "                            ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.back"), "html", null, true);
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
        return "@Storefront/storefront/component/pseudo-modal.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  292 => 48,  283 => 47,  273 => 46,  264 => 50,  262 => 46,  259 => 45,  249 => 44,  239 => 34,  229 => 33,  213 => 26,  205 => 27,  202 => 26,  200 => 25,  190 => 24,  181 => 28,  179 => 24,  173 => 20,  163 => 19,  154 => 16,  144 => 15,  135 => 30,  133 => 19,  130 => 18,  128 => 15,  125 => 14,  115 => 13,  104 => 52,  101 => 44,  98 => 42,  92 => 37,  90 => 33,  87 => 32,  85 => 13,  74 => 4,  57 => 3,  54 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @sw-package framework #}

{% block component_pseudo_modal %}
    <div class=\"js-pseudo-modal-template\">
        <div class=\"modal modal-lg fade\"
             tabindex=\"-1\"
             role=\"dialog\"
             aria-modal=\"true\"
             aria-hidden=\"true\"
             aria-labelledby=\"pseudo-modal-title\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content js-pseudo-modal-template-root-element\">
                    {% block component_pseudo_modal_header %}
                        <div class=\"modal-header only-close\">
                            {% block component_pseudo_modal_title %}
                                <div id=\"pseudo-modal-title\" class=\"modal-title js-pseudo-modal-template-title-element h5\"></div>
                            {% endblock %}

                            {% block component_pseudo_modal_close_btn %}
                                <button type=\"button\"
                                        class=\"btn-close close\"
                                        data-bs-dismiss=\"modal\"
                                        aria-label=\"Close\">
                                    {% block component_pseudo_modal_close_btn_content %}
                                        {# @deprecated tag:v6.7.0 - Block will be removed. Use `component_pseudo_modal_close_btn_content` instead. #}
                                        {% block product_detail_zoom_modal_close_button_content %}{% endblock %}
                                    {% endblock %}
                                </button>
                            {% endblock %}
                        </div>
                    {% endblock %}

                    {% block component_pseudo_modal_body %}
                        <div class=\"modal-body js-pseudo-modal-template-content-element\">
                        </div>
                    {% endblock %}
                </div>
            </div>

            <template class=\"js-pseudo-modal-back-btn-template\">
                {# Back button will be rendered by `AjaxModalPlugin` if a `data-prev-url` is given in order to toggle between modals. #}

                {# Attributes `data-url` and `href` will be set automatically by `AjaxModalPlugin`. #}
                {% block component_pseudo_modal_back_btn %}
                    <button class=\"js-pseudo-modal-back-btn btn btn-outline-primary\" data-ajax-modal=\"true\" data-url=\"#\" href=\"#\">
                        {% block component_pseudo_modal_back_btn_content %}
                            {% sw_icon 'arrow-left' style { size: 'sm', class: 'me-1' } %}
                            {{ 'general.back'|trans }}
                        {% endblock %}
                    </button>
                {% endblock %}
            </template>
        </div>
    </div>
{% endblock %}
", "@Storefront/storefront/component/pseudo-modal.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/component/pseudo-modal.html.twig");
    }
}
