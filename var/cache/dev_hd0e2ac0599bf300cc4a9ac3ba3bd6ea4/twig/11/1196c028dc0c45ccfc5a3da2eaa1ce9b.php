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

/* @Storefront/storefront/component/product/card/wishlist.html.twig */
class __TwigTemplate_28023a6b259a02074343061ed6f74aa3 extends Template
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
            'component_product_wishlist' => [$this, 'block_component_product_wishlist'],
            'component_product_wishlist_button' => [$this, 'block_component_product_wishlist_button'],
            'component_product_wishlist_icon' => [$this, 'block_component_product_wishlist_icon'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/card/wishlist.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('component_product_wishlist', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_wishlist(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_wishlist"));

        // line 2
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["productId"] ?? null))) {
            // line 3
            yield "        ";
            $context["addToWishlistOptions"] = ["productId" =>             // line 4
($context["productId"] ?? null), "router" => ["add" => ["afterLoginPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.wishlist.add.after.login", ["productId" =>             // line 7
($context["productId"] ?? null)]), "path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.wishlist.product.add", ["productId" =>             // line 8
($context["productId"] ?? null)])], "remove" => ["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.wishlist.product.remove", ["productId" =>             // line 11
($context["productId"] ?? null)])]], "texts" => ["add" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.addToWishlist")), "remove" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.removeFromWishlist"))]];
            // line 19
            yield "
        ";
            // line 20
            $context["size"] = (((array_key_exists("size", $context) &&  !(null === $context["size"]))) ? ($context["size"]) : ("md"));
            // line 21
            yield "
        <div class=\"product-wishlist\">
            ";
            // line 23
            yield from $this->unwrap()->yieldBlock('component_product_wishlist_button', $context, $blocks);
            // line 42
            yield "        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_wishlist_button(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_wishlist_button"));

        // line 24
        yield "                <button
                    class=\"product-wishlist-";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["productId"] ?? null), "html", null, true);
        yield " product-wishlist-action";
        if ((($context["appearance"] ?? null) == "circle")) {
            yield "-circle product-wishlist-btn btn btn-light";
        }
        yield " product-wishlist-not-added product-wishlist-loading z-2\"
                    title=\"";
        // line 26
        yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.addToWishlist"));
        yield "\"
                    data-add-to-wishlist=\"true\"
                    data-add-to-wishlist-options=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('json_encode')->getCallable()(($context["addToWishlistOptions"] ?? null)), "html", null, true);
        yield "\"
                >
                    ";
        // line 30
        yield from $this->unwrap()->yieldBlock('component_product_wishlist_icon', $context, $blocks);
        // line 40
        yield "                </button>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_wishlist_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_wishlist_icon"));

        // line 31
        yield "                        ";
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/product/card/wishlist.html.twig", 31);
        })())->unwrap()->yield(CoreExtension::merge($context, ["class" => "wishlist icon-wishlist-added", "size" => ($context["size"] ?? null), "name" => "heart-fill"]));
        // line 32
        yield "                        ";
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/product/card/wishlist.html.twig", 32);
        })())->unwrap()->yield(CoreExtension::merge($context, ["class" => "wishlist icon-wishlist-not-added", "size" => ($context["size"] ?? null), "name" => "heart"]));
        // line 33
        yield "
                        ";
        // line 34
        if (($context["showText"] ?? null)) {
            // line 35
            yield "                            <span class=\"product-wishlist-btn-content product-wishlist-btn-content-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["size"] ?? null), "html", null, true);
            yield "\">
                                ";
            // line 36
            yield $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.addToWishlist"));
            yield "
                            </span>
                        ";
        }
        // line 39
        yield "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/component/product/card/wishlist.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  182 => 39,  176 => 36,  171 => 35,  169 => 34,  166 => 33,  157 => 32,  148 => 31,  138 => 30,  129 => 40,  127 => 30,  122 => 28,  117 => 26,  109 => 25,  106 => 24,  96 => 23,  86 => 42,  84 => 23,  80 => 21,  78 => 20,  75 => 19,  73 => 11,  72 => 8,  71 => 7,  70 => 4,  68 => 3,  65 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block component_product_wishlist %}
    {% if productId is not empty %}
        {% set addToWishlistOptions = {
            productId: productId,
            router: {
                add: {
                    afterLoginPath: path('frontend.wishlist.add.after.login', { productId: productId }),
                    path: path('frontend.wishlist.product.add', { productId: productId }),
                },
                remove: {
                    path: path('frontend.wishlist.product.remove', { productId: productId }),
                }
            },
            texts: {
                add: 'listing.addToWishlist'|trans|sw_sanitize,
                remove: 'listing.removeFromWishlist'|trans|sw_sanitize
            },
        } %}

        {% set size = size ?? 'md' %}

        <div class=\"product-wishlist\">
            {% block component_product_wishlist_button %}
                <button
                    class=\"product-wishlist-{{ productId }} product-wishlist-action{% if appearance == 'circle' %}-circle product-wishlist-btn btn btn-light{% endif %} product-wishlist-not-added product-wishlist-loading z-2\"
                    title=\"{{ 'listing.addToWishlist'|trans|sw_sanitize }}\"
                    data-add-to-wishlist=\"true\"
                    data-add-to-wishlist-options=\"{{ addToWishlistOptions|json_encode }}\"
                >
                    {% block component_product_wishlist_icon %}
                        {% sw_icon 'heart-fill' style { class: 'wishlist icon-wishlist-added', size: size } %}
                        {% sw_icon 'heart' style { class: 'wishlist icon-wishlist-not-added', size: size } %}

                        {% if showText %}
                            <span class=\"product-wishlist-btn-content product-wishlist-btn-content-{{ size }}\">
                                {{ 'listing.addToWishlist'|trans|sw_sanitize }}
                            </span>
                        {% endif %}
                    {% endblock %}
                </button>
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/component/product/card/wishlist.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/component/product/card/wishlist.html.twig");
    }
}
