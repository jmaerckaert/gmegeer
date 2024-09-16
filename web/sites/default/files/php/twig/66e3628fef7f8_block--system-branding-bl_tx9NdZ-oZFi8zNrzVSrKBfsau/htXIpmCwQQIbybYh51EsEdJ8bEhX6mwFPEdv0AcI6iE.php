<?php

use Twig\Environment;
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

/* themes/custom/gme/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_77db0331bd0bb206634c16f7f8a3fe3b extends Template
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
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield from         $this->loadTemplate("themes/custom/gme/templates/block/block--system-branding-block.html.twig", "themes/custom/gme/templates/block/block--system-branding-block.html.twig", 16, "2022670841")->unwrap()->yield(CoreExtension::merge($context, ["block_utility_classes" => ["block--system-branding"]]));
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gme/templates/block/block--system-branding-block.html.twig";
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
        return array (  44 => 16,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gme/templates/block/block--system-branding-block.html.twig", "/var/www/html/web/themes/custom/gme/templates/block/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("embed" => 16);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['embed'],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}


/* themes/custom/gme/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_77db0331bd0bb206634c16f7f8a3fe3b___2022670841 extends Template
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

        $this->blocks = [
            'block_content' => [$this, 'block_block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        return "radix:block";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("radix:block", "themes/custom/gme/templates/block/block--system-branding-block.html.twig", 16);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_name", "site_slogan", "site_logo", "elements"]);    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "    ";
        // line 24
        yield from         $this->loadTemplate("radix:navbar-brand", "themes/custom/gme/templates/block/block--system-branding-block.html.twig", 24)->unwrap()->yield(CoreExtension::merge($context, ["text" =>         // line 25
($context["site_name"] ?? null), "site_slogan" =>         // line 26
($context["site_slogan"] ?? null), "image" =>         // line 27
($context["site_logo"] ?? null), "width" => "40px", "height" => "auto", "path" => $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"), "alt" => ((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 31
($context["elements"] ?? null), "content", [], "any", false, false, true, 31), "site_name", [], "any", false, false, true, 31)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#markup"] ?? null) : null) . " logo"), "navbar_brand_utility_classes" => ["d-inline-flex", "align-items-center"]]));
        // line 38
        yield "  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gme/templates/block/block--system-branding-block.html.twig";
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
        return array (  159 => 38,  157 => 31,  156 => 27,  155 => 26,  154 => 25,  153 => 24,  151 => 23,  144 => 22,  44 => 16,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gme/templates/block/block--system-branding-block.html.twig", "/var/www/html/web/themes/custom/gme/templates/block/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("extends" => 16, "include" => 24);
        static $filters = array();
        static $functions = array("path" => 30);

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'include'],
                [],
                ['path'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
