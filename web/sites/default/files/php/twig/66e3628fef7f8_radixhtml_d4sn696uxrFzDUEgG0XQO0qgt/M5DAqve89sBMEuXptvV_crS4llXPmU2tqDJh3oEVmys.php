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

/* radix:html */
class __TwigTemplate_969950da5d94e955bc3f9affcf77fe0a extends Template
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
            'head_start' => [$this, 'block_head_start'],
            'head_end' => [$this, 'block_head_end'],
            'body_start' => [$this, 'block_body_start'],
            'body_end' => [$this, 'block_body_end'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--html"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:html"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:html"));
        // line 26
        $___internal_parse_7_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 27
            yield "
";
            // line 29
            $context["body_classes"] = Twig\Extension\CoreExtension::merge([((            // line 30
($context["root_path"] ?? null)) ? (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 30, $this->source)))) : ("path-frontpage")), ((            // line 31
($context["language"] ?? null)) ? (("language--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 31, $this->source)))) : (""))], ((            // line 32
($context["body_utility_classes"] ?? null)) ?: ([])));
            // line 34
            yield "
<!DOCTYPE html>
<html ";
            // line 36
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 36, $this->source), "html", null, true);
            yield ">
  <head>
    ";
            // line 38
            yield from $this->unwrap()->yieldBlock('head_start', $context, $blocks);
            // line 41
            yield "    <head-placeholder token=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 41, $this->source), "html", null, true);
            yield "\">
    <title>";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 42, $this->source), " | "));
            yield "</title>
    <css-placeholder token=\"";
            // line 43
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 43, $this->source), "html", null, true);
            yield "\">
    <js-placeholder token=\"";
            // line 44
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 44, $this->source), "html", null, true);
            yield "\">
    ";
            // line 45
            yield from $this->unwrap()->yieldBlock('head_end', $context, $blocks);
            // line 48
            yield "  </head>
  <body ";
            // line 49
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 49), 49, $this->source), "html", null, true);
            yield ">
    ";
            // line 50
            yield from $this->unwrap()->yieldBlock('body_start', $context, $blocks);
            // line 53
            yield "    ";
            // line 57
            yield "    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
            // line 58
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
            yield "
    </a>

    ";
            // line 61
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 61, $this->source), "html", null, true);
            yield "
    ";
            // line 62
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 62, $this->source), "html", null, true);
            yield "
    ";
            // line 63
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 63, $this->source), "html", null, true);
            yield "

    <js-bottom-placeholder token=\"";
            // line 65
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 65, $this->source), "html", null, true);
            yield "\">
    ";
            // line 66
            yield from $this->unwrap()->yieldBlock('body_end', $context, $blocks);
            // line 69
            yield "  </body>
</html>

";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_7_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["root_path", "language", "body_utility_classes", "html_attributes", "placeholder_token", "head_title", "attributes", "page_top", "page", "page_bottom", "head_start", "head_end", "body_start", "body_end"]);        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["head_start"] ?? null), 39, $this->source), "html", null, true);
        yield "
    ";
        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_end(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 46
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["head_end"] ?? null), 46, $this->source), "html", null, true);
        yield "
    ";
        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 51
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body_start"] ?? null), 51, $this->source), "html", null, true);
        yield "
    ";
        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_end(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 67
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body_end"] ?? null), 67, $this->source), "html", null, true);
        yield "
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "radix:html";
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
        return array (  196 => 67,  189 => 66,  181 => 51,  174 => 50,  166 => 46,  159 => 45,  151 => 39,  144 => 38,  138 => 26,  131 => 69,  129 => 66,  125 => 65,  120 => 63,  116 => 62,  112 => 61,  106 => 58,  103 => 57,  101 => 53,  99 => 50,  95 => 49,  92 => 48,  90 => 45,  86 => 44,  82 => 43,  78 => 42,  73 => 41,  71 => 38,  66 => 36,  62 => 34,  60 => 32,  59 => 31,  58 => 30,  57 => 29,  54 => 27,  52 => 26,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "radix:html", "themes/contrib/radix/components/html/html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 26, "set" => 29, "block" => 38);
        static $filters = array("merge" => 32, "clean_class" => 30, "escape" => 36, "safe_join" => 42, "t" => 58, "spaceless" => 26);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'block'],
                ['merge', 'clean_class', 'escape', 'safe_join', 't', 'spaceless'],
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
