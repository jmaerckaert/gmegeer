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

/* radix:image */
class __TwigTemplate_e50ddec800243275292ead2b014fbd20 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--image"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:image"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:image"));
        // line 23
        $___internal_parse_2_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 24
            yield "
";
            // line 25
            $context["fallback_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
            // line 26
            $context["fallback_attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fallback_attributes"] ?? null), "setAttribute", ["src", ((            // line 27
($context["src"] ?? null)) ?: (""))], "method", false, false, true, 26), "setAttribute", ["alt", ((            // line 28
($context["alt"] ?? null)) ?: (""))], "method", false, false, true, 27), "setAttribute", ["title", ((            // line 29
($context["title"] ?? null)) ?: (""))], "method", false, false, true, 28), "setAttribute", ["width", ((            // line 30
($context["width"] ?? null)) ?: (""))], "method", false, false, true, 29), "setAttribute", ["height", ((            // line 31
($context["height"] ?? null)) ?: (""))], "method", false, false, true, 30), "setAttribute", ["loading", ((            // line 32
($context["loading"] ?? null)) ?: ("auto"))], "method", false, false, true, 31);
            // line 34
            yield "
";
            // line 35
            $context["image_attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["fallback_attributes"] ?? null), "merge", [((($context["attributes"] ?? null)) ?: ([]))], "method", false, false, true, 35);
            // line 36
            yield "
";
            // line 38
            $context["align_classes"] = ["start" => ["float-start"], "center" => ["mx-auto", "d-block"], "end" => ["float-end"]];
            // line 44
            yield "
";
            // line 45
            $context["image_classes"] = Twig\Extension\CoreExtension::merge([((            // line 46
($context["align"] ?? null)) ? (Twig\Extension\CoreExtension::join($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["align_classes"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["align"] ?? null)] ?? null) : null), 46, $this->source), " ")) : ("")), ((            // line 47
($context["responsive"] ?? null)) ? ("img-fluid") : ("")), ((            // line 48
($context["thumbnails"] ?? null)) ? ("img-thumbnail") : ("")), ((            // line 49
($context["rounded"] ?? null)) ? ("rounded") : (""))], ((            // line 50
($context["image_utility_classes"] ?? null)) ?: ([])));
            // line 52
            yield "
<img ";
            // line 53
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["image_attributes"] ?? null), "addClass", [($context["image_classes"] ?? null)], "method", false, false, true, 53), 53, $this->source), "html", null, true);
            yield " />

";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 23
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_2_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["src", "alt", "title", "width", "height", "loading", "attributes", "align", "responsive", "thumbnails", "rounded", "image_utility_classes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "radix:image";
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
        return array (  93 => 23,  86 => 53,  83 => 52,  81 => 50,  80 => 49,  79 => 48,  78 => 47,  77 => 46,  76 => 45,  73 => 44,  71 => 38,  68 => 36,  66 => 35,  63 => 34,  61 => 32,  60 => 31,  59 => 30,  58 => 29,  57 => 28,  56 => 27,  55 => 26,  53 => 25,  50 => 24,  48 => 23,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "radix:image", "themes/contrib/radix/components/image/image.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 23, "set" => 25);
        static $filters = array("merge" => 50, "join" => 46, "escape" => 53, "spaceless" => 23);
        static $functions = array("create_attribute" => 25);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set'],
                ['merge', 'join', 'escape', 'spaceless'],
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
