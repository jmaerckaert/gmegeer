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

/* themes/custom/gme/templates/navigation/links.html.twig */
class __TwigTemplate_4e265d25a64b61172359a0affc9cf3bf extends Template
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
        // line 34
        if (($context["links"] ?? null)) {
            // line 36
            yield from             $this->loadTemplate("themes/custom/gme/templates/navigation/links.html.twig", "themes/custom/gme/templates/navigation/links.html.twig", 36, "246107826")->unwrap()->yield(CoreExtension::merge($context, ["items" =>             // line 37
($context["links"] ?? null)]));
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["links"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gme/templates/navigation/links.html.twig";
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
        return array (  47 => 37,  46 => 36,  44 => 34,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gme/templates/navigation/links.html.twig", "/var/www/html/web/themes/custom/gme/templates/navigation/links.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 34, "embed" => 36);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'embed'],
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


/* themes/custom/gme/templates/navigation/links.html.twig */
class __TwigTemplate_4e265d25a64b61172359a0affc9cf3bf___246107826 extends Template
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
            'nav_items' => [$this, 'block_nav_items'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 36
        return "radix:nav";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("radix:nav", "themes/custom/gme/templates/navigation/links.html.twig", 36);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["links"]);    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_nav_items(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 42
            yield "        <li";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 42), "addClass", ["nav-item"], "method", false, false, true, 42), 42, $this->source), "html", null, true);
            yield ">";
            // line 43
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 43)) {
                // line 44
                yield "<span";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 44), "text_attributes", [], "any", false, false, true, 44), "addClass", ["nav-link"], "method", false, false, true, 44), 44, $this->source), "html", null, true);
                yield ">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                yield "</span>";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 45
$context["item"], "text_attributes", [], "any", false, false, true, 45)) {
                // line 46
                yield "<span";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text_attributes", [], "any", false, false, true, 46), "addClass", ["nav-link"], "method", false, false, true, 46), 46, $this->source), "html", null, true);
                yield ">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                yield "</span>";
            } else {
                // line 48
                yield "<span class=\"nav-link\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                yield "</span>";
            }
            // line 50
            yield "</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gme/templates/navigation/links.html.twig";
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
        return array (  195 => 52,  188 => 50,  183 => 48,  176 => 46,  174 => 45,  168 => 44,  166 => 43,  162 => 42,  157 => 41,  150 => 40,  138 => 36,  47 => 37,  46 => 36,  44 => 34,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gme/templates/navigation/links.html.twig", "/var/www/html/web/themes/custom/gme/templates/navigation/links.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("extends" => 36, "for" => 41, "if" => 43);
        static $filters = array("escape" => 42);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'for', 'if'],
                ['escape'],
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
