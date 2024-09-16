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

/* radix:navbar-brand */
class __TwigTemplate_8e026c50db68071a05dce8eb6ce81bab extends Template
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
            'logo' => [$this, 'block_logo'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--navbar-brand"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:navbar-brand"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:navbar-brand"));
        // line 17
        $___internal_parse_13_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 18
            yield "
";
            // line 19
            $macros["navbar_brand"] = $this->macros["navbar_brand"] = $this;
            // line 20
            $context["navbar_brand_utility_classes"] = Twig\Extension\CoreExtension::join($this->sandbox->ensureToStringAllowed(($context["navbar_brand_utility_classes"] ?? null), 20, $this->source), " ");
            // line 21
            yield "
";
            // line 22
            if (($context["path"] ?? null)) {
                // line 23
                yield "  <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["path"] ?? null), 23, $this->source), "html", null, true);
                yield "\" class=\"navbar-brand ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_brand_utility_classes"] ?? null), 23, $this->source), "html", null, true);
                yield "\" ";
                if ((array_key_exists("text", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["text"] ?? null)))) {
                    yield "aria-label=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 23, $this->source), "html", null, true);
                    yield "\"";
                }
                yield ">
    ";
                // line 24
                yield from $this->unwrap()->yieldBlock('logo', $context, $blocks);
                // line 43
                yield "  </a>
";
            } else {
                // line 45
                yield "  <span class=\"navbar-brand h1 mb-0 ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_brand_utility_classes"] ?? null), 45, $this->source), "html", null, true);
                yield "\" ";
                if ((array_key_exists("text", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["text"] ?? null)))) {
                    yield "aria-label=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 45, $this->source), "html", null, true);
                    yield "\"";
                }
                yield ">
    ";
                // line 46
                if (($context["image"] ?? null)) {
                    // line 47
                    yield "      ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["navbar_brand"], "macro_image", [($context["image"] ?? null), ($context["width"] ?? null), ($context["height"] ?? null), ($context["alt"] ?? null)], 47, $context, $this->getSourceContext()));
                    yield "
    ";
                }
                // line 49
                yield "
    ";
                // line 50
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 50, $this->source), "html", null, true);
                yield "
  </span>
";
            }
            // line 53
            yield "
";
            // line 58
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_13_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "path", "text", "image", "width", "height", "alt", "site_slogan", "src"]);        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_logo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "      <div class=\"navbar-brand__logo\">
        ";
        // line 26
        if (($context["image"] ?? null)) {
            // line 27
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["navbar_brand"], "macro_image", [($context["image"] ?? null), ($context["width"] ?? null), ($context["height"] ?? null), ($context["alt"] ?? null)], 27, $context, $this->getSourceContext()));
            yield "
        ";
        }
        // line 29
        yield "      </div>

      ";
        // line 31
        if ((($context["text"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 32
            yield "        <div class=\"navbar-brand__text d-flex flex-column\">
          ";
            // line 33
            if (($context["text"] ?? null)) {
                // line 34
                yield "            <span>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 34, $this->source), "html", null, true);
                yield "</span>
          ";
            }
            // line 36
            yield "
          ";
            // line 37
            if (($context["site_slogan"] ?? null)) {
                // line 38
                yield "            <span class=\"small text-muted\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 38, $this->source), "html", null, true);
                yield "</span>
          ";
            }
            // line 40
            yield "        </div>
      ";
        }
        // line 42
        yield "    ";
        yield from [];
    }

    // line 54
    public function macro_image($__src__ = null, $__width__ = null, $__height__ = null, $__alt__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "src" => $__src__,
            "width" => $__width__,
            "height" => $__height__,
            "alt" => $__alt__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 55
            yield "  ";
            $context["height_attribute"] = (((($context["height"] ?? null) != "auto")) ? ((("height=\"" . $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 55, $this->source)) . "\"")) : (""));
            // line 56
            yield "  <img src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["src"] ?? null), 56, $this->source), "html", null, true);
            yield "\" width=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("width", $context)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 56, $this->source), 140)) : (140)), "html", null, true);
            yield "\" ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height_attribute"] ?? null), 56, $this->source), "html", null, true);
            yield " alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("alt", $context)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["alt"] ?? null), 56, $this->source), "")) : ("")), "html", null, true);
            yield "\" />
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "radix:navbar-brand";
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
        return array (  197 => 56,  194 => 55,  179 => 54,  174 => 42,  170 => 40,  164 => 38,  162 => 37,  159 => 36,  153 => 34,  151 => 33,  148 => 32,  146 => 31,  142 => 29,  136 => 27,  134 => 26,  131 => 25,  124 => 24,  118 => 17,  113 => 58,  110 => 53,  104 => 50,  101 => 49,  95 => 47,  93 => 46,  82 => 45,  78 => 43,  76 => 24,  63 => 23,  61 => 22,  58 => 21,  56 => 20,  54 => 19,  51 => 18,  49 => 17,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "radix:navbar-brand", "themes/contrib/radix/components/navbar-brand/navbar-brand.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 17, "import" => 19, "set" => 20, "if" => 22, "block" => 24, "macro" => 54);
        static $filters = array("join" => 20, "escape" => 23, "spaceless" => 17, "default" => 56);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'import', 'set', 'if', 'block', 'macro'],
                ['join', 'escape', 'spaceless', 'default'],
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
