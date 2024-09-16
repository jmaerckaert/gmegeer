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

/* radix:page */
class __TwigTemplate_076c508b6ba720a5a18b82196c85efaf extends Template
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
            'page_navigation' => [$this, 'block_page_navigation'],
            'page_content' => [$this, 'block_page_content'],
            'page_footer' => [$this, 'block_page_footer'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--page"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:page"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:page"));
        // line 7
        $context["page_attributes"] = ((($context["attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 8
        $context["page_classes"] = Twig\Extension\CoreExtension::merge(["page"], ((        // line 11
($context["page_utility_classes"] ?? null)) ?: ([])));
        // line 13
        yield "
<div ";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page_attributes"] ?? null), "addClass", [($context["page_classes"] ?? null)], "method", false, false, true, 14), 14, $this->source), "html", null, true);
        yield ">
\t";
        // line 15
        yield from $this->unwrap()->yieldBlock('page_navigation', $context, $blocks);
        // line 18
        yield "
  ";
        // line 19
        yield from $this->unwrap()->yieldBlock('page_content', $context, $blocks);
        // line 25
        yield "
\t";
        // line 26
        yield from $this->unwrap()->yieldBlock('page_footer', $context, $blocks);
        // line 29
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "page_utility_classes"]);        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "\t\t";
        yield from         $this->loadTemplate("radix:page-navigation", "radix:page", 16)->unwrap()->yield($context);
        // line 17
        yield "\t";
        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "    ";
        yield from         $this->loadTemplate("radix:page-content", "radix:page", 20)->unwrap()->yield(CoreExtension::merge($context, ["page_main_utility_classes" => ["py-5"], "page_header_container_utility_classes" => ["mb-3"]]));
        // line 24
        yield "  ";
        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 27
        yield "\t\t";
        yield from         $this->loadTemplate("radix:page-footer", "radix:page", 27)->unwrap()->yield($context);
        // line 28
        yield "\t";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "radix:page";
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
        return array (  122 => 28,  119 => 27,  112 => 26,  107 => 24,  104 => 20,  97 => 19,  92 => 17,  89 => 16,  82 => 15,  75 => 29,  73 => 26,  70 => 25,  68 => 19,  65 => 18,  63 => 15,  59 => 14,  56 => 13,  54 => 11,  53 => 8,  51 => 7,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "radix:page", "themes/contrib/radix/components/page/page.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "block" => 15, "include" => 16);
        static $filters = array("merge" => 11, "escape" => 14);
        static $functions = array("create_attribute" => 7);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'include'],
                ['merge', 'escape'],
                ['create_attribute'],
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
