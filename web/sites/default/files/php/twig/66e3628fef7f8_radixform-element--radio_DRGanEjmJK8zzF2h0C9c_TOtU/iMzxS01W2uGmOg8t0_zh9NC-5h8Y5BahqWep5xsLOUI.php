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

/* radix:form-element--radiocheckbox */
class __TwigTemplate_8f77470962dbf7e4ff46c54be40e0c68 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--form-element--radiocheckbox"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:form-element--radiocheckbox"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:form-element--radiocheckbox"));
        // line 9
        $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 10
            yield "
";
            // line 11
            $context["form_element_radiocheckbox_attributes"] = ((($context["attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
            // line 12
            $context["disabled"] = ((array_key_exists("disabled", $context)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["disabled"] ?? null), 12, $this->source), false)) : (false));
            // line 14
            $context["form_element_radiocheckbox_classes"] = Twig\Extension\CoreExtension::merge(["js-form-item", "form-item", "form-check", ("form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 18
($context["type"] ?? null), 18, $this->source))), ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 19
($context["type"] ?? null), 19, $this->source))), ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 20
($context["name"] ?? null), 20, $this->source))), ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 21
($context["name"] ?? null), 21, $this->source))), ((!CoreExtension::inFilter(            // line 22
($context["title_display"] ?? null), ["after", "before"])) ? ("form-no-label") : ("")), ((            // line 23
($context["disabled"] ?? null)) ? ("form-disabled") : ("")), (( !Twig\Extension\CoreExtension::testEmpty(            // line 24
($context["errors"] ?? null))) ? ("form-item--error") : (""))], ((            // line 25
($context["form_element__radiocheckbox_utility_classes"] ?? null)) ?: ([])));
            // line 28
            $context["description_classes"] = ["description", "form-text", "text-muted", (((            // line 32
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
            // line 35
            yield "<div ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["form_element_radiocheckbox_attributes"] ?? null), "addClass", [($context["form_element_radiocheckbox_classes"] ?? null)], "method", false, false, true, 35), 35, $this->source), "html", null, true);
            yield ">
  ";
            // line 36
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 36, $this->source), "html", null, true);
            yield "

  ";
            // line 38
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 38, $this->source), "html", null, true);
            yield "

  ";
            // line 40
            if (($context["errors"] ?? null)) {
                // line 41
                yield "    <div class=\"invalid-feedback\">
      ";
                // line 42
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 42, $this->source), "html", null, true);
                yield "
    </div>
  ";
            }
            // line 45
            yield "
  ";
            // line 46
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 46)) {
                // line 47
                yield "    <small";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 47), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 47), 47, $this->source), "html", null, true);
                yield ">
      ";
                // line 48
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                yield "
    </small>
  ";
            }
            // line 51
            yield "</div>

";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_0_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "type", "name", "title_display", "errors", "form_element__radiocheckbox_utility_classes", "description_display", "children", "label", "description"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "radix:form-element--radiocheckbox";
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
        return array (  118 => 9,  112 => 51,  106 => 48,  101 => 47,  99 => 46,  96 => 45,  90 => 42,  87 => 41,  85 => 40,  80 => 38,  75 => 36,  70 => 35,  68 => 32,  67 => 28,  65 => 25,  64 => 24,  63 => 23,  62 => 22,  61 => 21,  60 => 20,  59 => 19,  58 => 18,  57 => 14,  55 => 12,  53 => 11,  50 => 10,  48 => 9,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "radix:form-element--radiocheckbox", "themes/contrib/radix/components/form-element--radiocheckbox/form-element--radiocheckbox.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 9, "set" => 11, "if" => 40);
        static $filters = array("default" => 12, "merge" => 25, "clean_class" => 18, "escape" => 35, "spaceless" => 9);
        static $functions = array("create_attribute" => 11);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'if'],
                ['default', 'merge', 'clean_class', 'escape', 'spaceless'],
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
