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

/* radix:breadcrumb */
class __TwigTemplate_470c100627f78e8adb8e08c25f9dff46 extends Template
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
            'breadcrumb' => [$this, 'block_breadcrumb'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--breadcrumb"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:breadcrumb"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:breadcrumb"));
        // line 10
        $___internal_parse_16_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 11
            yield "
";
            // line 13
            $context["breadcrumb_classes"] = Twig\Extension\CoreExtension::merge(["breadcrumb"], ((            // line 15
($context["breadcrumb_utility_classes"] ?? null)) ?: ([])));
            // line 17
            $context["breadcrumb_attributes"] = ((($context["attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
            // line 18
            yield "
";
            // line 19
            yield from $this->unwrap()->yieldBlock('breadcrumb', $context, $blocks);
            // line 36
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_16_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["breadcrumb_utility_classes", "attributes", "breadcrumb"]);        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "  ";
        if (($context["breadcrumb"] ?? null)) {
            // line 21
            yield "    <nav aria-label=\"breadcrumb\">
      <ol ";
            // line 22
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["breadcrumb_attributes"] ?? null), "addClass", [($context["breadcrumb_classes"] ?? null)], "method", false, false, true, 22), 22, $this->source), "html", null, true);
            yield ">
        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumb"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 24
                yield "          <li class=\"breadcrumb-item ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((( !CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 24)) ? ("active") : ("")));
                yield "\">
            ";
                // line 25
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 25)) {
                    // line 26
                    yield "              <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                    yield "\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                    yield "</a>
            ";
                } else {
                    // line 28
                    yield "              ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                    yield "
            ";
                }
                // line 30
                yield "          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "      </ol>
    </nav>
  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "radix:breadcrumb";
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
        return array (  124 => 32,  117 => 30,  111 => 28,  103 => 26,  101 => 25,  96 => 24,  92 => 23,  88 => 22,  85 => 21,  82 => 20,  75 => 19,  69 => 10,  64 => 36,  62 => 19,  59 => 18,  57 => 17,  55 => 15,  54 => 13,  51 => 11,  49 => 10,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "radix:breadcrumb", "themes/contrib/radix/components/breadcrumb/breadcrumb.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 10, "set" => 13, "block" => 19, "if" => 20, "for" => 23);
        static $filters = array("merge" => 15, "spaceless" => 10, "escape" => 22);
        static $functions = array("create_attribute" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'block', 'if', 'for'],
                ['merge', 'spaceless', 'escape'],
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
