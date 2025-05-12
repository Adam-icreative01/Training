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

/* @Storefront/storefront/utilities/form-validation-config.html.twig */
class __TwigTemplate_fcff966a7f79613e2f0fd9f7660c4363 extends Template
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
            'form_validation_config' => [$this, 'block_form_validation_config'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/utilities/form-validation-config.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('form_validation_config', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_validation_config(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_validation_config"));

        // line 2
        yield "    ";
        $context["validationMessages"] = ["required" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("error.VIOLATION::IS_BLANK_ERROR")), "email" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("error.VIOLATION::INVALID_EMAIL_FORMAT_ERROR")), "confirmation" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("error.VIOLATION::NOT_EQUAL_ERROR")), "minLength" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("error.VIOLATION::TOO_SHORT_ERROR"))];
        // line 8
        yield "
    <script>
        window.validationMessages = ";
        // line 10
        yield $this->env->getFilter('json_encode')->getCallable()(($context["validationMessages"] ?? null));
        yield ";
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/utilities/form-validation-config.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  70 => 10,  66 => 8,  63 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block form_validation_config %}
    {% set validationMessages = {
        required: \"error.VIOLATION::IS_BLANK_ERROR\"|trans|sw_sanitize,
        email: \"error.VIOLATION::INVALID_EMAIL_FORMAT_ERROR\"|trans|sw_sanitize,
        confirmation: \"error.VIOLATION::NOT_EQUAL_ERROR\"|trans|sw_sanitize,
        minLength: \"error.VIOLATION::TOO_SHORT_ERROR\"|trans|sw_sanitize,
    } %}

    <script>
        window.validationMessages = {{ validationMessages|json_encode|raw }};
    </script>
{% endblock %}
", "@Storefront/storefront/utilities/form-validation-config.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/utilities/form-validation-config.html.twig");
    }
}
