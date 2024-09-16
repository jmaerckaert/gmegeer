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

/* radix:alert */
class __TwigTemplate_ddf6cabc0e743614e1a78dff06082ff1 extends Template
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
            'alert_heading' => [$this, 'block_alert_heading'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--alert"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:alert"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:alert"));
        // line 13
        $___internal_parse_2_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 14
            yield "
";
            // line 15
            $context["alert_attributes"] = ((($context["alert_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
            // line 16
            $context["dismissible"] = (($context["dismissible"]) ?? (true));
            // line 17
            $context["type"] = (($context["type"]) ?? ("primary"));
            // line 18
            yield "
";
            // line 20
            $context["alert_classes"] = Twig\Extension\CoreExtension::merge(["alert", ((            // line 22
($context["type"] ?? null)) ? (("alert-" . $this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 22, $this->source))) : ("")), ((            // line 23
($context["dismissible"] ?? null)) ? ("alert-dismissible") : (""))], ((            // line 24
($context["alert_utility_classes"] ?? null)) ?: ([])));
            // line 26
            yield "
<div ";
            // line 27
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["alert_attributes"] ?? null), "addClass", [($context["alert_classes"] ?? null)], "method", false, false, true, 27), 27, $this->source), "html", null, true);
            yield " role=\"alert\">
  ";
            // line 28
            yield from $this->unwrap()->yieldBlock('alert_heading', $context, $blocks);
            // line 33
            yield "
  ";
            // line 34
            yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
            // line 37
            yield "
  ";
            // line 38
            if (($context["dismissible"] ?? null)) {
                // line 39
                yield "    ";
                // line 40
                yield from                 $this->loadTemplate("radix:close-button", "radix:alert", 40)->unwrap()->yield(CoreExtension::merge($context, ["close_button_attributes" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(), "setAttribute", ["data-bs-dismiss", "alert"], "method", false, false, true, 41)]));
                // line 45
                yield "  ";
            }
            // line 46
            yield "</div>

";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_2_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["alert_utility_classes", "heading", "content"]);        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_alert_heading(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "    ";
        if (($context["heading"] ?? null)) {
            // line 30
            yield "      <h4 class=\"alert-heading\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null), 30, $this->source), "html", null, true);
            yield "</h4>
    ";
        }
        // line 32
        yield "  ";
        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 35, $this->source), "html", null, true);
        yield "
  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "radix:alert";
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
        return array (  135 => 35,  128 => 34,  123 => 32,  117 => 30,  114 => 29,  107 => 28,  101 => 13,  95 => 46,  92 => 45,  90 => 40,  88 => 39,  86 => 38,  83 => 37,  81 => 34,  78 => 33,  76 => 28,  72 => 27,  69 => 26,  67 => 24,  66 => 23,  65 => 22,  64 => 20,  61 => 18,  59 => 17,  57 => 16,  55 => 15,  52 => 14,  50 => 13,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "radix:alert", "themes/contrib/radix/components/alert/alert.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 13, "set" => 15, "block" => 28, "if" => 38, "include" => 40);
        static $filters = array("merge" => 24, "escape" => 27, "spaceless" => 13);
        static $functions = array("create_attribute" => 15);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'block', 'if', 'include'],
                ['merge', 'escape', 'spaceless'],
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
