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

/* radix:details */
class __TwigTemplate_bba5a1ab19bfa0ee36388c454a14aec6 extends Template
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
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--details"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:details"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:details"));
        // line 7
        $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 8
            yield "
";
            // line 10
            $context["classes"] = ["details", "mb-3"];
            // line 15
            yield "
";
            // line 17
            $context["content_wrapper_classes"] = ["details-wrapper"];
            // line 21
            yield "
<details";
            // line 22
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 22), 22, $this->source), "html", null, true);
            yield ">
  ";
            // line 23
            if (($context["title"] ?? null)) {
                // line 24
                yield "    ";
                // line 25
                $context["summary_classes"] = [((                // line 26
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((                // line 27
($context["required"] ?? null)) ? ("form-required") : (""))];
                // line 30
                yield "    <summary";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["summary_attributes"] ?? null), "addClass", [($context["summary_classes"] ?? null)], "method", false, false, true, 30), 30, $this->source), "html", null, true);
                yield ">
      ";
                // line 31
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 31, $this->source), "html", null, true);
                yield "
    </summary>
  ";
            }
            // line 34
            yield "
  <div";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["content_wrapper_classes"] ?? null)], "method", false, false, true, 35), 35, $this->source), "html", null, true);
            yield ">

    ";
            // line 37
            if (($context["errors"] ?? null)) {
                // line 38
                yield "      <div class=\"invalid-feedback\">
        ";
                // line 39
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 39, $this->source), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 42
            yield "
    ";
            // line 43
            if (($context["description"] ?? null)) {
                // line 44
                yield "      <div class=\"details-description\">
        ";
                // line 45
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 45, $this->source), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 48
            yield "
    ";
            // line 49
            if (($context["children"] ?? null)) {
                // line 50
                yield "      <div class=\"details-children\">
        ";
                // line 51
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 51, $this->source), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 54
            yield "
    ";
            // line 55
            if (($context["value"] ?? null)) {
                // line 56
                yield "      <div class=\"details-value\">
        ";
                // line 57
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 57, $this->source), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 60
            yield "  </div>
</details>

";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_0_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "title", "required", "summary_attributes", "content_attributes", "errors", "description", "children", "value"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "radix:details";
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
        return array (  154 => 7,  147 => 60,  141 => 57,  138 => 56,  136 => 55,  133 => 54,  127 => 51,  124 => 50,  122 => 49,  119 => 48,  113 => 45,  110 => 44,  108 => 43,  105 => 42,  99 => 39,  96 => 38,  94 => 37,  89 => 35,  86 => 34,  80 => 31,  75 => 30,  73 => 27,  72 => 26,  71 => 25,  69 => 24,  67 => 23,  63 => 22,  60 => 21,  58 => 17,  55 => 15,  53 => 10,  50 => 8,  48 => 7,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "radix:details", "themes/contrib/radix/components/details/details.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 7, "set" => 10, "if" => 23);
        static $filters = array("escape" => 22, "spaceless" => 7);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'if'],
                ['escape', 'spaceless'],
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
