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

/* radix:views-view--unformatted */
class __TwigTemplate_fa0555e800d3ffe6e4e25ec8c01925d7 extends Template
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
            'views_unformatted_title' => [$this, 'block_views_unformatted_title'],
            'views_unformatted_rows' => [$this, 'block_views_unformatted_rows'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--views-view--unformatted"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:views-view--unformatted"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:views-view--unformatted"));
        // line 18
        $___internal_parse_6_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 19
            yield "
";
            // line 20
            yield from $this->unwrap()->yieldBlock('views_unformatted_title', $context, $blocks);
            // line 30
            yield "
";
            // line 31
            yield from $this->unwrap()->yieldBlock('views_unformatted_rows', $context, $blocks);
            // line 44
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 18
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_6_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title", "rows", "default_row_class", "row_utility_classes"]);        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_views_unformatted_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "  ";
        if (($context["title"] ?? null)) {
            // line 22
            yield "    ";
            // line 23
            yield from             $this->loadTemplate("radix:heading", "radix:views-view--unformatted", 23)->unwrap()->yield(CoreExtension::merge($context, ["heading_html_tag" => "h3", "content" =>             // line 25
($context["title"] ?? null)]));
            // line 28
            yield "  ";
        }
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_views_unformatted_rows(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 33
            yield "    ";
            // line 34
            $context["row_classes"] = Twig\Extension\CoreExtension::merge([((            // line 35
($context["default_row_class"] ?? null)) ? ("views-row") : (""))], ((            // line 36
($context["row_utility_classes"] ?? null)) ?: ([])));
            // line 38
            yield "
    <div";
            // line 39
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 39), "addClass", [($context["row_classes"] ?? null)], "method", false, false, true, 39), 39, $this->source), "html", null, true);
            yield ">";
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            // line 41
            yield "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "radix:views-view--unformatted";
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
        return array (  120 => 41,  118 => 40,  115 => 39,  112 => 38,  110 => 36,  109 => 35,  108 => 34,  106 => 33,  101 => 32,  94 => 31,  88 => 28,  86 => 25,  85 => 23,  83 => 22,  80 => 21,  73 => 20,  67 => 18,  62 => 44,  60 => 31,  57 => 30,  55 => 20,  52 => 19,  50 => 18,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "radix:views-view--unformatted", "themes/contrib/radix/components/views-view--unformatted/views-view--unformatted.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 18, "block" => 20, "if" => 21, "include" => 23, "for" => 32, "set" => 34);
        static $filters = array("spaceless" => 18, "merge" => 36, "escape" => 39);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'block', 'if', 'include', 'for', 'set'],
                ['spaceless', 'merge', 'escape'],
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
