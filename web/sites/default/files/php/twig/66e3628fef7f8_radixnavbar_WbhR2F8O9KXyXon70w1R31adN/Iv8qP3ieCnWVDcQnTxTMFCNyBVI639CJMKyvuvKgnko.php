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

/* radix:navbar */
class __TwigTemplate_6b5852a2bb940ef233a11c9ff1db133a extends Template
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
            'branding' => [$this, 'block_branding'],
            'navbar_toggler' => [$this, 'block_navbar_toggler'],
            'left' => [$this, 'block_left'],
            'right' => [$this, 'block_right'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--navbar"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:navbar"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:navbar"));
        // line 19
        $___internal_parse_12_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 20
            yield "
";
            // line 21
            $context["nav_attributes"] = ((($context["nav_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
            // line 22
            $context["navbar_container_attributes"] = ((($context["navbar_container_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
            // line 23
            yield "
";
            // line 24
            $context["placement"] = (($context["placement"]) ?? (""));
            // line 25
            $context["navbar_expand"] = (($context["navbar_expand"]) ?? ("lg"));
            // line 26
            $context["navbar_theme"] = (($context["navbar_theme"]) ?? (null));
            // line 27
            yield "
";
            // line 29
            $context["navbar_container_classes"] = Twig\Extension\CoreExtension::merge([(((null ===             // line 30
($context["navbar_container_type"] ?? null))) ? ("container") : ("")), ((            // line 31
($context["navbar_container_type"] ?? null)) ? (("container" . ((($context["navbar_container_type"] ?? null)) ? (("-" . $this->sandbox->ensureToStringAllowed(($context["navbar_container_type"] ?? null), 31, $this->source))) : ("")))) : (""))], ((            // line 32
($context["navbar_container_utility_classes"] ?? null)) ?: ([])));
            // line 34
            yield "
";
            // line 36
            $context["nav_classes"] = Twig\Extension\CoreExtension::merge(["navbar", ((            // line 38
($context["navbar_expand"] ?? null)) ? (("navbar-expand-" . $this->sandbox->ensureToStringAllowed(($context["navbar_expand"] ?? null), 38, $this->source))) : ("")),             // line 39
($context["placement"] ?? null)], ((            // line 40
($context["navbar_utility_classes"] ?? null)) ?: ([])));
            // line 42
            yield "
";
            // line 43
            if (($context["navbar_theme"] ?? null)) {
                // line 44
                yield "  ";
                $context["nav_attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["nav_attributes"] ?? null), "setAttribute", ["data-bs-theme", ($context["navbar_theme"] ?? null)], "method", false, false, true, 44);
            }
            // line 46
            yield "
<nav ";
            // line 47
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["nav_attributes"] ?? null), "addClass", [($context["nav_classes"] ?? null)], "method", false, false, true, 47), 47, $this->source), "html", null, true);
            yield ">
  <div ";
            // line 48
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["navbar_container_attributes"] ?? null), "addClass", [($context["navbar_container_classes"] ?? null)], "method", false, false, true, 48), 48, $this->source), "html", null, true);
            yield ">
    ";
            // line 49
            yield from $this->unwrap()->yieldBlock('branding', $context, $blocks);
            // line 52
            yield "
    ";
            // line 53
            yield from $this->unwrap()->yieldBlock('navbar_toggler', $context, $blocks);
            // line 58
            yield "
    <div class=\"collapse navbar-collapse\">
      ";
            // line 60
            yield from $this->unwrap()->yieldBlock('left', $context, $blocks);
            // line 63
            yield "
      ";
            // line 64
            yield from $this->unwrap()->yieldBlock('right', $context, $blocks);
            // line 67
            yield "    </div>
  </div>
</nav>

";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_12_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["navbar_container_type", "navbar_container_utility_classes", "navbar_utility_classes", "branding", "left", "right"]);        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_branding(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 50
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["branding"] ?? null), 50, $this->source), "html", null, true);
        yield "
    ";
        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar_toggler(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 54
        yield "      <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\".navbar-collapse\" aria-controls=\"navbar-collapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
    ";
        yield from [];
    }

    // line 60
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_left(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 61
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["left"] ?? null), 61, $this->source), "html", null, true);
        yield "
      ";
        yield from [];
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_right(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 65
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["right"] ?? null), 65, $this->source), "html", null, true);
        yield "
      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "radix:navbar";
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
        return array (  190 => 65,  183 => 64,  175 => 61,  168 => 60,  160 => 54,  153 => 53,  145 => 50,  138 => 49,  132 => 19,  124 => 67,  122 => 64,  119 => 63,  117 => 60,  113 => 58,  111 => 53,  108 => 52,  106 => 49,  102 => 48,  98 => 47,  95 => 46,  91 => 44,  89 => 43,  86 => 42,  84 => 40,  83 => 39,  82 => 38,  81 => 36,  78 => 34,  76 => 32,  75 => 31,  74 => 30,  73 => 29,  70 => 27,  68 => 26,  66 => 25,  64 => 24,  61 => 23,  59 => 22,  57 => 21,  54 => 20,  52 => 19,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "radix:navbar", "themes/contrib/radix/components/navbar/navbar.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 19, "set" => 21, "if" => 43, "block" => 49);
        static $filters = array("merge" => 32, "escape" => 47, "spaceless" => 19);
        static $functions = array("create_attribute" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'if', 'block'],
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
