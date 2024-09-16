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

/* radix:form-element */
class __TwigTemplate_31bfe69bd7959322f2462426f8d1e213 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--form-element"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:form-element"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:form-element"));
        // line 49
        $___internal_parse_9_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 50
            yield "
";
            // line 52
            $context["form_element_classes"] = Twig\Extension\CoreExtension::merge(["js-form-item", "form-item", ("form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 55
($context["type"] ?? null), 55, $this->source))), ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 56
($context["type"] ?? null), 56, $this->source))), ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 57
($context["name"] ?? null), 57, $this->source))), ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 58
($context["name"] ?? null), 58, $this->source))), ((!CoreExtension::inFilter(            // line 59
($context["title_display"] ?? null), ["after", "before"])) ? ("form-no-label") : ("")), (((            // line 60
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled disabled") : ("")), ((            // line 61
($context["errors"] ?? null)) ? ("form-item--error has-error") : ("")), "form-group"], ((            // line 63
($context["form_element_utility_classes"] ?? null)) ?: ([])));
            // line 65
            yield "
";
            // line 67
            $context["description_classes"] = ["description", "form-text", "text-muted", (((            // line 71
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
            // line 74
            yield "
";
            // line 75
            $context["form_element_attributes"] = ((($context["attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
            // line 76
            $context["show_required_indicator"] = ((array_key_exists("show_required_indicator", $context)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["show_required_indicator"] ?? null), 76, $this->source), true)) : (true));
            // line 77
            yield "
<div";
            // line 78
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["form_element_attributes"] ?? null), "addClass", [($context["form_element_classes"] ?? null)], "method", false, false, true, 78), 78, $this->source), "html", null, true);
            yield ">
  ";
            // line 79
            if (CoreExtension::inFilter(($context["label_display"] ?? null), ["before", "invisible"])) {
                // line 80
                yield "    ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 80, $this->source), "html", null, true);
                yield "

    ";
                // line 82
                if ((((($context["title_display"] ?? null) != "invisible") && (($__internal_compile_0 = ($context["element"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#required"] ?? null) : null)) && ($context["show_required_indicator"] ?? null))) {
                    // line 83
                    yield "      <span class=\"font-weight-bolder text-danger\">*</span>";
                }
            }
            // line 86
            yield "
  ";
            // line 87
            if (( !Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null)))) {
                // line 88
                yield "    <div class=\"input-group\">
    ";
            }
            // line 90
            yield "
    ";
            // line 91
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null))) {
                // line 92
                yield "      <span class=\"field-prefix input-group-text\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 92, $this->source), "html", null, true);
                yield "</span>
    ";
            }
            // line 94
            yield "
    ";
            // line 95
            if (((($context["description_display"] ?? null) == "before") && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 95))) {
                // line 96
                yield "      <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
                yield ">
        ";
                // line 97
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 100
            yield "
    ";
            // line 101
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 101, $this->source), "html", null, true);
            yield "

    ";
            // line 103
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null))) {
                // line 104
                yield "      <span class=\"field-suffix input-group-text\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 104, $this->source), "html", null, true);
                yield "</span>
    ";
            }
            // line 106
            yield "
    ";
            // line 107
            if (( !Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null)))) {
                // line 108
                yield "    </div>
  ";
            }
            // line 110
            yield "
  ";
            // line 111
            if ((($context["label_display"] ?? null) == "after")) {
                // line 112
                yield "    ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 112, $this->source), "html", null, true);
                yield "
  ";
            }
            // line 114
            yield "
  ";
            // line 115
            if (($context["errors"] ?? null)) {
                // line 116
                yield "    <div class=\"invalid-feedback\">
      ";
                // line 117
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 117, $this->source), "html", null, true);
                yield "
    </div>
  ";
            }
            // line 120
            yield "
  ";
            // line 121
            if ((CoreExtension::inFilter(($context["description_display"] ?? null), ["after", "invisible"]) && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 121))) {
                // line 122
                yield "    <small";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 122), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 122), 122, $this->source), "html", null, true);
                yield ">
      ";
                // line 123
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
                yield "
    </small>
  ";
            }
            // line 126
            yield "</div>

";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_9_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["type", "name", "title_display", "disabled", "errors", "form_element_utility_classes", "description_display", "attributes", "label_display", "label", "element", "prefix", "suffix", "description", "children"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "radix:form-element";
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
        return array (  205 => 49,  199 => 126,  193 => 123,  188 => 122,  186 => 121,  183 => 120,  177 => 117,  174 => 116,  172 => 115,  169 => 114,  163 => 112,  161 => 111,  158 => 110,  154 => 108,  152 => 107,  149 => 106,  143 => 104,  141 => 103,  136 => 101,  133 => 100,  127 => 97,  122 => 96,  120 => 95,  117 => 94,  111 => 92,  109 => 91,  106 => 90,  102 => 88,  100 => 87,  97 => 86,  93 => 83,  91 => 82,  85 => 80,  83 => 79,  79 => 78,  76 => 77,  74 => 76,  72 => 75,  69 => 74,  67 => 71,  66 => 67,  63 => 65,  61 => 63,  60 => 61,  59 => 60,  58 => 59,  57 => 58,  56 => 57,  55 => 56,  54 => 55,  53 => 52,  50 => 50,  48 => 49,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "radix:form-element", "themes/contrib/radix/components/form-element/form-element.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 49, "set" => 52, "if" => 79);
        static $filters = array("merge" => 63, "clean_class" => 55, "default" => 76, "escape" => 78, "spaceless" => 49);
        static $functions = array("create_attribute" => 75);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'if'],
                ['merge', 'clean_class', 'default', 'escape', 'spaceless'],
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
