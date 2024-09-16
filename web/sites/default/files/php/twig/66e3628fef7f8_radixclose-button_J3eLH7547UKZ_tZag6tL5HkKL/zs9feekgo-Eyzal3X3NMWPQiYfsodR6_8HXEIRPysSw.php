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

/* radix:close-button */
class __TwigTemplate_084b73215b4b64082fae759e727e141b extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--close-button"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:close-button"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:close-button"));
        // line 19
        $___internal_parse_3_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 20
            yield "
";
            // line 21
            $context["close_button_attributes"] = ((($context["close_button_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
            // line 22
            $context["size"] = ((($context["size"] ?? null)) ? ([($context["size"] ?? null)]) : ([]));
            // line 23
            $context["disabled"] = ((($context["disabled"] ?? null)) ? (["disabled"]) : ([]));
            // line 24
            yield "
";
            // line 26
            $context["close_button_classes"] = Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::merge(["btn", "btn-close"], ((            // line 29
($context["close_button_utility_classes"] ?? null)) ?: ([]))), $this->sandbox->ensureToStringAllowed(($context["size"] ?? null), 29, $this->source)), $this->sandbox->ensureToStringAllowed(($context["disabled"] ?? null), 29, $this->source));
            // line 31
            yield "
<button type=\"button\" ";
            // line 32
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["close_button_attributes"] ?? null), "addClass", [($context["close_button_classes"] ?? null)], "method", false, false, true, 32), 32, $this->source), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["disabled"] ?? null), 32, $this->source), "html", null, true);
            yield " aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Close"));
            yield "\"></button>

";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_3_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["close_button_utility_classes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "radix:close-button";
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
        return array (  79 => 19,  68 => 32,  65 => 31,  63 => 29,  62 => 26,  59 => 24,  57 => 23,  55 => 22,  53 => 21,  50 => 20,  48 => 19,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "radix:close-button", "themes/contrib/radix/components/close-button/close-button.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 19, "set" => 21);
        static $filters = array("merge" => 29, "escape" => 32, "trans" => 32, "spaceless" => 19);
        static $functions = array("create_attribute" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set'],
                ['merge', 'escape', 'trans', 'spaceless'],
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
