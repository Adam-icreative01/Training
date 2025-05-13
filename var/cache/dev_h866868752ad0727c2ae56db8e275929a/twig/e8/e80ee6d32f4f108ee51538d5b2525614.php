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

/* @Administration/administration/layout/base.html.twig */
class __TwigTemplate_bae42239ee2810901dbe8543f438a5bb extends Template
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
            'administration_title' => [$this, 'block_administration_title'],
            'administration_favicons' => [$this, 'block_administration_favicons'],
            'administration_head_scripts' => [$this, 'block_administration_head_scripts'],
            'administration_content' => [$this, 'block_administration_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Administration/administration/layout/base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    ";
        // line 7
        yield from $this->unwrap()->yieldBlock('administration_title', $context, $blocks);
        // line 12
        yield "
    ";
        // line 13
        yield from $this->unwrap()->yieldBlock('administration_favicons', $context, $blocks);
        // line 24
        yield "
    ";
        // line 25
        yield from $this->unwrap()->yieldBlock('administration_head_scripts', $context, $blocks);
        // line 26
        yield "
    ";
        // line 27
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ADMIN_VITE")) {
            // line 28
            yield "        ";
            yield $this->extensions['Pentatrion\ViteBundle\Twig\EntryFilesTwigExtension']->renderViteLinkTags("app");
            yield "
    ";
        } else {
            // line 30
            yield "        <link rel=\"stylesheet\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/css/app.css", "@Administration"), "html", null, true);
            yield "\">
    ";
        }
        // line 32
        yield "</head>
<body>

";
        // line 35
        yield from $this->unwrap()->yieldBlock('administration_content', $context, $blocks);
        // line 36
        yield "
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_administration_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "administration_title"));

        // line 8
        yield "        <title>
            Shopware Administration (c) shopware AG
        </title>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_administration_favicons(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "administration_favicons"));

        // line 14
        yield "        <link rel=\"apple-touch-icon\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/img/favicon/apple-touch-icon.png", "@Administration"), "html", null, true);
        yield "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/img/favicon/favicon-16x16.png", "@Administration"), "html", null, true);
        yield "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/img/favicon/favicon-32x32.png", "@Administration"), "html", null, true);
        yield "\" id=\"dynamic-favicon\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/img/favicon/android-chrome-192x192.png", "@Administration"), "html", null, true);
        yield "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"256x256\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/img/favicon/android-chrome-256x256.png", "@Administration"), "html", null, true);
        yield "\">
        <meta name=\"msapplication-TileImage\" content=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/img/favicon/mstile-150x150.png", "@Administration"), "html", null, true);
        yield "\">
        <meta name=\"msapplication-TileColor\" content=\"#189eff\">
        <meta name=\"theme-color\" content=\"#189eff\">
        <meta name=\"referrer\" content=\"always\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_administration_head_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "administration_head_scripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_administration_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "administration_content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Administration/administration/layout/base.html.twig";
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
        return array (  185 => 35,  169 => 25,  156 => 19,  152 => 18,  148 => 17,  144 => 16,  140 => 15,  135 => 14,  125 => 13,  114 => 8,  104 => 7,  93 => 36,  91 => 35,  86 => 32,  80 => 30,  74 => 28,  72 => 27,  69 => 26,  67 => 25,  64 => 24,  62 => 13,  59 => 12,  57 => 7,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    {% block administration_title %}
        <title>
            Shopware Administration (c) shopware AG
        </title>
    {% endblock %}

    {% block administration_favicons %}
        <link rel=\"apple-touch-icon\" href=\"{{ asset('static/img/favicon/apple-touch-icon.png', '@Administration') }}\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('static/img/favicon/favicon-16x16.png', '@Administration') }}\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ asset('static/img/favicon/favicon-32x32.png', '@Administration') }}\" id=\"dynamic-favicon\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"{{ asset('static/img/favicon/android-chrome-192x192.png', '@Administration') }}\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"256x256\" href=\"{{ asset('static/img/favicon/android-chrome-256x256.png', '@Administration') }}\">
        <meta name=\"msapplication-TileImage\" content=\"{{ asset('static/img/favicon/mstile-150x150.png', '@Administration') }}\">
        <meta name=\"msapplication-TileColor\" content=\"#189eff\">
        <meta name=\"theme-color\" content=\"#189eff\">
        <meta name=\"referrer\" content=\"always\">
    {% endblock %}

    {% block administration_head_scripts %}{% endblock %}

    {% if feature('ADMIN_VITE') %}
        {{ vite_entry_link_tags('app') }}
    {% else %}
        <link rel=\"stylesheet\" href=\"{{ asset('static/css/app.css', '@Administration') }}\">
    {% endif %}
</head>
<body>

{% block administration_content %}{% endblock %}

</body>
</html>
", "@Administration/administration/layout/base.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/administration/Resources/views/administration/layout/base.html.twig");
    }
}
