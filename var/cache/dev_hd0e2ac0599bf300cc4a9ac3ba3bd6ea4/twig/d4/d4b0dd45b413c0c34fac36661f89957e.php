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

/* @Storefront/storefront/component/product/card/box-standard.html.twig */
class __TwigTemplate_ebac1399c20d9b804f7e83e269853e26 extends Template
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
            'component_product_box' => [$this, 'block_component_product_box'],
            'component_product_box_content' => [$this, 'block_component_product_box_content'],
            'component_product_box_badges' => [$this, 'block_component_product_box_badges'],
            'component_product_box_image' => [$this, 'block_component_product_box_image'],
            'component_product_box_image_link' => [$this, 'block_component_product_box_image_link'],
            'component_product_box_image_link_inner' => [$this, 'block_component_product_box_image_link_inner'],
            'component_product_box_video' => [$this, 'block_component_product_box_video'],
            'component_product_box_image_thumbnail' => [$this, 'block_component_product_box_image_thumbnail'],
            'component_product_box_image_placeholder' => [$this, 'block_component_product_box_image_placeholder'],
            'component_product_box_wishlist_action' => [$this, 'block_component_product_box_wishlist_action'],
            'component_product_box_info' => [$this, 'block_component_product_box_info'],
            'component_product_box_rating' => [$this, 'block_component_product_box_rating'],
            'component_product_box_name' => [$this, 'block_component_product_box_name'],
            'component_product_box_variant_characteristics' => [$this, 'block_component_product_box_variant_characteristics'],
            'component_product_box_description' => [$this, 'block_component_product_box_description'],
            'component_product_box_price' => [$this, 'block_component_product_box_price'],
            'component_product_box_action' => [$this, 'block_component_product_box_action'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/card/box-standard.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('component_product_box', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box"));

        // line 2
        yield "    ";
        if (($context["product"] ?? null)) {
            // line 3
            yield "        ";
            $context["name"] = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3);
            // line 4
            yield "        ";
            $context["id"] = SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 4);
            // line 5
            yield "        ";
            $context["cover"] = SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "cover", [], "any", false, false, false, 5), "media", [], "any", false, false, false, 5);
            // line 6
            yield "        ";
            $context["variation"] = SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "variation", [], "any", false, false, false, 6);
            // line 7
            yield "        ";
            $context["displayParent"] = (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "variantListingConfig", [], "any", false, false, false, 7), "displayParent", [], "any", false, false, false, 7) && (SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "parentId", [], "any", false, false, false, 7) === null));
            // line 8
            yield "
        <div class=\"card product-box box-";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["layout"] ?? null), "html", null, true);
            yield "\" data-product-information=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('json_encode')->getCallable()(["id" => ($context["id"] ?? null), "name" => ($context["name"] ?? null)]), "html", null, true);
            yield "\">
            ";
            // line 10
            yield from $this->unwrap()->yieldBlock('component_product_box_content', $context, $blocks);
            // line 160
            yield "        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_content"));

        // line 11
        yield "                <div class=\"card-body\">
                    ";
        // line 12
        yield from $this->unwrap()->yieldBlock('component_product_box_badges', $context, $blocks);
        // line 15
        yield "
                    ";
        // line 16
        yield from $this->unwrap()->yieldBlock('component_product_box_image', $context, $blocks);
        // line 100
        yield "
                    ";
        // line 101
        yield from $this->unwrap()->yieldBlock('component_product_box_info', $context, $blocks);
        // line 158
        yield "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_badges(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_badges"));

        // line 13
        yield "                        ";
        yield from $this->loadTemplate("@Storefront/storefront/component/product/card/badges.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 13)->unwrap()->yield($context);
        // line 14
        yield "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_image(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_image"));

        // line 17
        yield "                        <div class=\"product-image-wrapper\">
                            ";
        // line 19
        yield "                            ";
        $context["displayMode"] = ((($context["displayMode"] ?? null)) ? ($context["displayMode"]) : ("standard"));
        // line 20
        yield "
                            ";
        // line 22
        yield "                            ";
        if (((($context["layout"] ?? null) == "image") && (($context["displayMode"] ?? null) == "standard"))) {
            // line 23
            yield "                                ";
            $context["displayMode"] = "cover";
            // line 24
            yield "                            ";
        }
        // line 25
        yield "
                            ";
        // line 27
        yield "                            ";
        yield from $this->unwrap()->yieldBlock('component_product_box_image_link', $context, $blocks);
        // line 89
        yield "
                            ";
        // line 90
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.cart.wishlistEnabled")) {
            // line 91
            yield "                                ";
            yield from $this->unwrap()->yieldBlock('component_product_box_wishlist_action', $context, $blocks);
            // line 97
            yield "                            ";
        }
        // line 98
        yield "                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_image_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_image_link"));

        // line 28
        yield "                                ";
        // line 29
        yield "                                ";
        if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) {
            // line 30
            yield "                                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["id"] ?? null)]), "html", null, true);
            yield "\"
                                       title=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\"
                                       class=\"product-image-link is-";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["displayMode"] ?? null), "html", null, true);
            yield "\">
                                ";
        }
        // line 34
        yield "                                    ";
        yield from $this->unwrap()->yieldBlock('component_product_box_image_link_inner', $context, $blocks);
        // line 84
        yield "                                ";
        // line 85
        yield "                                ";
        if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) {
            // line 86
            yield "                                    </a>
                                ";
        }
        // line 88
        yield "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_image_link_inner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_image_link_inner"));

        // line 35
        yield "                                        ";
        if ((SwTwigFunction::getAttribute($this->env, $this->source, ($context["cover"] ?? null), "url", [], "any", false, false, false, 35) && (SwTwigFunction::getAttribute($this->env, $this->source, ($context["cover"] ?? null), "isSpatialObject", [], "method", false, false, false, 35) == false))) {
            // line 36
            yield "                                            ";
            $context["attributes"] = ["class" => ("product-image is-" .             // line 37
($context["displayMode"] ?? null)), "title" => ((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source,             // line 38
($context["cover"] ?? null), "translated", [], "any", false, false, false, 38), "title", [], "any", false, false, false, 38)) ? (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["cover"] ?? null), "translated", [], "any", false, false, false, 38), "title", [], "any", false, false, false, 38)) : (($context["name"] ?? null)))];
            // line 40
            yield "
                                            ";
            // line 41
            if ((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["cover"] ?? null), "getMediaType", [], "method", false, false, false, 41), "getName", [], "method", false, false, false, 41) === "VIDEO")) {
                // line 42
                yield "                                                ";
                if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.listing.autoplayVideoInListing")) {
                    // line 43
                    yield "                                                    ";
                    $context["attributes"] = Twig\Extension\CoreExtension::merge(($context["attributes"] ?? null), ["autoplay" => true, "loop" => true]);
                    // line 47
                    yield "                                                ";
                }
                // line 48
                yield "
                                                ";
                // line 49
                yield from $this->unwrap()->yieldBlock('component_product_box_video', $context, $blocks);
                // line 55
                yield "                                            ";
            } else {
                // line 56
                yield "                                                ";
                $context["attributes"] = Twig\Extension\CoreExtension::merge(($context["attributes"] ?? null), ["alt" => ((SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source,                 // line 57
($context["cover"] ?? null), "translated", [], "any", false, false, false, 57), "alt", [], "any", false, false, false, 57)) ? (SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["cover"] ?? null), "translated", [], "any", false, false, false, 57), "alt", [], "any", false, false, false, 57)) : (($context["name"] ?? null))), "loading" => "lazy"]);
                // line 60
                yield "
                                                ";
                // line 61
                if (((($context["displayMode"] ?? null) == "cover") || (($context["displayMode"] ?? null) == "contain"))) {
                    // line 62
                    yield "                                                    ";
                    $context["attributes"] = Twig\Extension\CoreExtension::merge(($context["attributes"] ?? null), ["data-object-fit" => ($context["displayMode"] ?? null)]);
                    // line 63
                    yield "                                                ";
                }
                // line 64
                yield "
                                                ";
                // line 65
                yield from $this->unwrap()->yieldBlock('component_product_box_image_thumbnail', $context, $blocks);
                // line 72
                yield "                                            ";
            }
            // line 73
            yield "                                        ";
        } else {
            // line 74
            yield "                                            ";
            yield from $this->unwrap()->yieldBlock('component_product_box_image_placeholder', $context, $blocks);
            // line 82
            yield "                                        ";
        }
        // line 83
        yield "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_video(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_video"));

        // line 50
        yield "                                                    ";
        yield from $this->loadTemplate("@Storefront/storefront/utilities/video.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 50)->unwrap()->yield(CoreExtension::merge($context, ["media" =>         // line 51
($context["cover"] ?? null), "attributes" =>         // line 52
($context["attributes"] ?? null)]));
        // line 54
        yield "                                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_image_thumbnail(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_image_thumbnail"));

        // line 66
        yield "                                                    ";
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/product/card/box-standard.html.twig", 66);
        })())->unwrap()->yield(CoreExtension::merge($context, ["media" =>         // line 67
($context["cover"] ?? null), "sizes" =>         // line 68
($context["sizes"] ?? null), "attributes" =>         // line 69
($context["attributes"] ?? null), "name" => "product-image-thumbnails"]));
        // line 71
        yield "                                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 74
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_image_placeholder(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_image_placeholder"));

        // line 75
        yield "                                                <div class=\"product-image-placeholder\">
                                                    ";
        // line 76
        yield from         ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/product/card/box-standard.html.twig", 76);
        })())->unwrap()->yield(CoreExtension::merge($context, ["size" => "fluid", "ariaHidden" => true, "name" => "placeholder"]));
        // line 80
        yield "                                                </div>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 91
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_wishlist_action(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_wishlist_action"));

        // line 92
        yield "                                    ";
        yield from $this->loadTemplate("@Storefront/storefront/component/product/card/wishlist.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 92)->unwrap()->yield(CoreExtension::merge($context, ["appearance" => "circle", "productId" =>         // line 94
($context["id"] ?? null)]));
        // line 96
        yield "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 101
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_info(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_info"));

        // line 102
        yield "                        <div class=\"product-info\">
                            ";
        // line 103
        yield from $this->unwrap()->yieldBlock('component_product_box_rating', $context, $blocks);
        // line 115
        yield "
                            ";
        // line 116
        yield from $this->unwrap()->yieldBlock('component_product_box_name', $context, $blocks);
        // line 123
        yield "
                            ";
        // line 124
        yield from $this->unwrap()->yieldBlock('component_product_box_variant_characteristics', $context, $blocks);
        // line 142
        yield "
                            ";
        // line 143
        yield from $this->unwrap()->yieldBlock('component_product_box_description', $context, $blocks);
        // line 148
        yield "
                            ";
        // line 149
        yield from $this->unwrap()->yieldBlock('component_product_box_price', $context, $blocks);
        // line 152
        yield "
                            ";
        // line 153
        yield from $this->unwrap()->yieldBlock('component_product_box_action', $context, $blocks);
        // line 156
        yield "                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 103
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_rating(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_rating"));

        // line 104
        yield "                                ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.listing.showReview")) {
            // line 105
            yield "                                    <div class=\"product-rating\">
                                        ";
            // line 106
            if (SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "ratingAverage", [], "any", false, false, false, 106)) {
                // line 107
                yield "                                            ";
                yield from $this->loadTemplate("@Storefront/storefront/component/review/rating.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 107)->unwrap()->yield(CoreExtension::merge($context, ["points" => SwTwigFunction::getAttribute($this->env, $this->source,                 // line 108
($context["product"] ?? null), "ratingAverage", [], "any", false, false, false, 108), "style" => "text-primary"]));
                // line 111
                yield "                                        ";
            }
            // line 112
            yield "                                    </div>
                                ";
        }
        // line 114
        yield "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 116
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_name(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_name"));

        // line 117
        yield "                                ";
        // line 118
        yield "                                <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["id"] ?? null)]), "html", null, true);
        yield "\"
                                   class=\"product-name";
        // line 119
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("ACCESSIBILITY_TWEAKS")) {
            yield " stretched-link";
        }
        yield "\">
                                    ";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
        yield "
                                </a>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 124
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_variant_characteristics(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_variant_characteristics"));

        // line 125
        yield "                                <div class=\"product-variant-characteristics\">
                                    <div class=\"product-variant-characteristics-text\">
                                        ";
        // line 127
        if ( !($context["displayParent"] ?? null)) {
            // line 128
            yield "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "variation", [], "any", false, false, false, 128));
            foreach ($context['_seq'] as $context["_key"] => $context["variation"]) {
                // line 129
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, $context["variation"], "group", [], "any", false, false, false, 129), "html", null, true);
                yield ":
                                                <span class=\"product-variant-characteristics-option\">
                                                    ";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(SwTwigFunction::getAttribute($this->env, $this->source, $context["variation"], "option", [], "any", false, false, false, 131), "html", null, true);
                yield "
                                                </span>

                                                ";
                // line 134
                if ((Twig\Extension\CoreExtension::last($this->env->getCharset(), SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "variation", [], "any", false, false, false, 134)) != $context["variation"])) {
                    // line 135
                    yield "                                                    ";
                    yield " | ";
                    yield "
                                                ";
                }
                // line 137
                yield "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['variation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            yield "                                        ";
        }
        // line 139
        yield "                                    </div>
                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 143
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_description"));

        // line 144
        yield "                                <div class=\"product-description\">
                                    ";
        // line 145
        yield Twig\Extension\CoreExtension::striptags(SwTwigFunction::getAttribute($this->env, $this->source, SwTwigFunction::getAttribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 145), "description", [], "any", false, false, false, 145));
        yield "
                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 149
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_price(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price"));

        // line 150
        yield "                                ";
        yield from $this->loadTemplate("@Storefront/storefront/component/product/card/price-unit.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 150)->unwrap()->yield($context);
        // line 151
        yield "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 153
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component_product_box_action(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action"));

        // line 154
        yield "                                ";
        yield from $this->loadTemplate("@Storefront/storefront/component/product/card/action.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 154)->unwrap()->yield($context);
        // line 155
        yield "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Storefront/storefront/component/product/card/box-standard.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  699 => 155,  696 => 154,  686 => 153,  678 => 151,  675 => 150,  665 => 149,  654 => 145,  651 => 144,  641 => 143,  631 => 139,  628 => 138,  622 => 137,  616 => 135,  614 => 134,  608 => 131,  602 => 129,  597 => 128,  595 => 127,  591 => 125,  581 => 124,  570 => 120,  564 => 119,  559 => 118,  557 => 117,  547 => 116,  539 => 114,  535 => 112,  532 => 111,  530 => 108,  528 => 107,  526 => 106,  523 => 105,  520 => 104,  510 => 103,  501 => 156,  499 => 153,  496 => 152,  494 => 149,  491 => 148,  489 => 143,  486 => 142,  484 => 124,  481 => 123,  479 => 116,  476 => 115,  474 => 103,  471 => 102,  461 => 101,  453 => 96,  451 => 94,  449 => 92,  439 => 91,  430 => 80,  422 => 76,  419 => 75,  409 => 74,  401 => 71,  399 => 69,  398 => 68,  397 => 67,  389 => 66,  379 => 65,  371 => 54,  369 => 52,  368 => 51,  366 => 50,  356 => 49,  348 => 83,  345 => 82,  342 => 74,  339 => 73,  336 => 72,  334 => 65,  331 => 64,  328 => 63,  325 => 62,  323 => 61,  320 => 60,  318 => 57,  316 => 56,  313 => 55,  311 => 49,  308 => 48,  305 => 47,  302 => 43,  299 => 42,  297 => 41,  294 => 40,  292 => 38,  291 => 37,  289 => 36,  286 => 35,  276 => 34,  268 => 88,  264 => 86,  261 => 85,  259 => 84,  256 => 34,  251 => 32,  247 => 31,  242 => 30,  239 => 29,  237 => 28,  227 => 27,  218 => 98,  215 => 97,  212 => 91,  210 => 90,  207 => 89,  204 => 27,  201 => 25,  198 => 24,  195 => 23,  192 => 22,  189 => 20,  186 => 19,  183 => 17,  173 => 16,  165 => 14,  162 => 13,  152 => 12,  143 => 158,  141 => 101,  138 => 100,  136 => 16,  133 => 15,  131 => 12,  128 => 11,  118 => 10,  108 => 160,  106 => 10,  100 => 9,  97 => 8,  94 => 7,  91 => 6,  88 => 5,  85 => 4,  82 => 3,  79 => 2,  62 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block component_product_box %}
    {% if product %}
        {% set name = product.translated.name %}
        {% set id = product.id %}
        {% set cover = product.cover.media %}
        {% set variation = product.variation %}
        {% set displayParent = product.variantListingConfig.displayParent and product.parentId === null %}

        <div class=\"card product-box box-{{ layout }}\" data-product-information=\"{{ {id, name}|json_encode }}\">
            {% block component_product_box_content %}
                <div class=\"card-body\">
                    {% block component_product_box_badges %}
                        {% sw_include '@Storefront/storefront/component/product/card/badges.html.twig' %}
                    {% endblock %}

                    {% block component_product_box_image %}
                        <div class=\"product-image-wrapper\">
                            {# fallback if display mode is not set #}
                            {% set displayMode = displayMode ?: 'standard' %}

                            {# set display mode 'cover' for box-image with standard display mode #}
                            {% if layout == 'image' and displayMode == 'standard' %}
                                {% set displayMode = 'cover' %}
                            {% endif %}

                            {# @deprecated tag:v6.7.0 - Product image will no longer be a link. Use inner block `component_product_box_image_link_inner` instead. #}
                            {% block component_product_box_image_link %}
                                {# @deprecated tag:v6.7.0 - Product image will no longer be a link. The product name will be used as primary link and its click surface will be streched over the image. #}
                                {% if not feature('ACCESSIBILITY_TWEAKS') %}
                                    <a href=\"{{ seoUrl('frontend.detail.page', { productId: id }) }}\"
                                       title=\"{{ name }}\"
                                       class=\"product-image-link is-{{ displayMode }}\">
                                {% endif %}
                                    {% block component_product_box_image_link_inner %}
                                        {% if cover.url and cover.isSpatialObject() == false %}
                                            {% set attributes = {
                                                class: 'product-image is-' ~ displayMode,
                                                title: (cover.translated.title ?: name)
                                            } %}

                                            {% if cover.getMediaType().getName() === 'VIDEO' %}
                                                {% if config('core.listing.autoplayVideoInListing') %}
                                                    {% set attributes = attributes|merge({
                                                        autoplay: true,
                                                        loop: true
                                                    }) %}
                                                {% endif %}

                                                {% block component_product_box_video %}
                                                    {% sw_include '@Storefront/storefront/utilities/video.html.twig' with {
                                                        media: cover,
                                                        attributes: attributes
                                                    } %}
                                                {% endblock %}
                                            {% else %}
                                                {% set attributes = attributes|merge({
                                                    alt: (cover.translated.alt ?: name),
                                                    loading: 'lazy'
                                                }) %}

                                                {% if displayMode == 'cover' or displayMode == 'contain' %}
                                                    {% set attributes = attributes|merge({ 'data-object-fit': displayMode }) %}
                                                {% endif %}

                                                {% block component_product_box_image_thumbnail %}
                                                    {% sw_thumbnails 'product-image-thumbnails' with {
                                                        media: cover,
                                                        sizes: sizes,
                                                        attributes: attributes
                                                    } %}
                                                {% endblock %}
                                            {% endif %}
                                        {% else %}
                                            {% block component_product_box_image_placeholder %}
                                                <div class=\"product-image-placeholder\">
                                                    {% sw_icon 'placeholder' style {
                                                        size: 'fluid',
                                                        ariaHidden: true
                                                    } %}
                                                </div>
                                            {% endblock %}
                                        {% endif %}
                                    {% endblock %}
                                {# @deprecated tag:v6.7.0 - Product image will no longer be a link. The product name will be used as primary link and its click surface will be streched over the image. #}
                                {% if not feature('ACCESSIBILITY_TWEAKS') %}
                                    </a>
                                {% endif %}
                            {% endblock %}

                            {% if config('core.cart.wishlistEnabled') %}
                                {% block component_product_box_wishlist_action %}
                                    {% sw_include '@Storefront/storefront/component/product/card/wishlist.html.twig' with {
                                        appearance: 'circle',
                                        productId: id
                                    } %}
                                {% endblock %}
                            {% endif %}
                        </div>
                    {% endblock %}

                    {% block component_product_box_info %}
                        <div class=\"product-info\">
                            {% block component_product_box_rating %}
                                {% if config('core.listing.showReview') %}
                                    <div class=\"product-rating\">
                                        {% if product.ratingAverage %}
                                            {% sw_include '@Storefront/storefront/component/review/rating.html.twig' with {
                                                points: product.ratingAverage,
                                                style: 'text-primary'
                                            } %}
                                        {% endif %}
                                    </div>
                                {% endif %}
                            {% endblock %}

                            {% block component_product_box_name %}
                                {# @deprecated tag:v6.7.0 - Product name will have class `stretched-link` and will be streched over the product image. #}
                                <a href=\"{{ seoUrl('frontend.detail.page', { productId: id }) }}\"
                                   class=\"product-name{% if feature('ACCESSIBILITY_TWEAKS') %} stretched-link{% endif %}\">
                                    {{ name }}
                                </a>
                            {% endblock %}

                            {% block component_product_box_variant_characteristics %}
                                <div class=\"product-variant-characteristics\">
                                    <div class=\"product-variant-characteristics-text\">
                                        {% if not displayParent %}
                                            {% for variation in product.variation %}
                                                {{ variation.group }}:
                                                <span class=\"product-variant-characteristics-option\">
                                                    {{ variation.option }}
                                                </span>

                                                {% if product.variation|last != variation %}
                                                    {{ ' | ' }}
                                                {% endif %}
                                            {% endfor %}
                                        {% endif %}
                                    </div>
                                </div>
                            {% endblock %}

                            {% block component_product_box_description %}
                                <div class=\"product-description\">
                                    {{ product.translated.description|striptags|raw }}
                                </div>
                            {% endblock %}

                            {% block component_product_box_price %}
                                {% sw_include '@Storefront/storefront/component/product/card/price-unit.html.twig' %}
                            {% endblock %}

                            {% block component_product_box_action %}
                                {% sw_include '@Storefront/storefront/component/product/card/action.html.twig' %}
                            {% endblock %}
                        </div>
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/component/product/card/box-standard.html.twig", "/var/www/html/practicetasksw66/vendor/shopware/storefront/Resources/views/storefront/component/product/card/box-standard.html.twig");
    }
}
