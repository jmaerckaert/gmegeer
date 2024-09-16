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

/* radix:node */
class __TwigTemplate_51b2691edf14c40cd8f06ce47d742cbe extends Template
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
            'node_title_prefix' => [$this, 'block_node_title_prefix'],
            'node_title' => [$this, 'block_node_title'],
            'node_title_suffix' => [$this, 'block_node_title_suffix'],
            'node_metadata' => [$this, 'block_node_metadata'],
            'node_content' => [$this, 'block_node_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--node"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:node"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:node"));
        // line 32
        $___internal_parse_3_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 33
            yield "
";
            // line 35
            $context["node_classes"] = Twig\Extension\CoreExtension::merge(["node", ((CoreExtension::getAttribute($this->env, $this->source,             // line 37
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 37)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,             // line 38
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 38)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,             // line 39
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 39)) ? ("node--unpublished") : ("")), \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,             // line 40
($context["node"] ?? null), "bundle", [], "any", false, false, true, 40), 40, $this->source)), ((\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,             // line 41
($context["node"] ?? null), "bundle", [], "any", false, false, true, 41), 41, $this->source)) . "--") . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 41, $this->source))), ("node--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 42
($context["view_mode"] ?? null), 42, $this->source))), ((("node--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,             // line 43
($context["node"] ?? null), "bundle", [], "any", false, false, true, 43), 43, $this->source))) . "--") . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 43, $this->source))), ("view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 44
($context["view_mode"] ?? null), 44, $this->source)))], ((            // line 45
($context["node_utility_classes"] ?? null)) ?: ([])));
            // line 47
            yield "
";
            // line 49
            $context["author_classes"] = Twig\Extension\CoreExtension::merge(["author"], ((            // line 51
($context["author_utility_classes"] ?? null)) ?: ([])));
            // line 53
            yield "
";
            // line 55
            $context["node_content_classes"] = Twig\Extension\CoreExtension::merge(["node__content"], ((            // line 57
($context["node_content_utility_classes"] ?? null)) ?: ([])));
            // line 59
            yield "
";
            // line 60
            $context["node_attributes"] = ((($context["attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
            // line 61
            yield "
<article ";
            // line 62
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["node_attributes"] ?? null), "addClass", [($context["node_classes"] ?? null)], "method", false, false, true, 62), 62, $this->source), "html", null, true);
            yield ">
  ";
            // line 63
            yield from $this->unwrap()->yieldBlock('node_title_prefix', $context, $blocks);
            // line 66
            yield "
  ";
            // line 67
            yield from $this->unwrap()->yieldBlock('node_title', $context, $blocks);
            // line 79
            yield "
  ";
            // line 80
            yield from $this->unwrap()->yieldBlock('node_title_suffix', $context, $blocks);
            // line 83
            yield "
  ";
            // line 84
            yield from $this->unwrap()->yieldBlock('node_metadata', $context, $blocks);
            // line 98
            yield "
  <div ";
            // line 99
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["node_content_classes"] ?? null)], "method", false, false, true, 99), 99, $this->source), "html", null, true);
            yield ">
    ";
            // line 100
            yield from $this->unwrap()->yieldBlock('node_content', $context, $blocks);
            // line 103
            yield "  </div>
</article>

";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 32
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_3_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "node_utility_classes", "author_utility_classes", "node_content_utility_classes", "attributes", "content_attributes", "title_prefix", "page", "label", "heading_html_tag", "title_link", "url", "title_attributes", "title_suffix", "display_submitted", "author_attributes", "author_picture", "author_name", "date", "content"]);        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_node_title_prefix(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 64
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 64, $this->source), "html", null, true);
        yield "
  ";
        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_node_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 68
        yield "    ";
        if ( !($context["page"] ?? null)) {
            // line 69
            yield "      ";
            // line 70
            yield from             $this->loadTemplate("radix:heading", "radix:node", 70)->unwrap()->yield(CoreExtension::merge($context, ["content" => ((            // line 71
array_key_exists("label", $context)) ? (Twig\Extension\CoreExtension::default(($context["label"] ?? null), "")) : ("")), "heading_html_tag" => ((            // line 72
array_key_exists("heading_html_tag", $context)) ? (Twig\Extension\CoreExtension::default(($context["heading_html_tag"] ?? null), "h2")) : ("h2")), "title_link" => ((            // line 73
array_key_exists("title_link", $context)) ? (Twig\Extension\CoreExtension::default(($context["title_link"] ?? null), ($context["url"] ?? null))) : (($context["url"] ?? null))), "heading_attributes" =>             // line 74
($context["title_attributes"] ?? null)]));
            // line 77
            yield "    ";
        }
        // line 78
        yield "  ";
        yield from [];
    }

    // line 80
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_node_title_suffix(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 81
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 81, $this->source), "html", null, true);
        yield "
  ";
        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_node_metadata(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 85
        yield "    ";
        if (($context["display_submitted"] ?? null)) {
            // line 86
            yield "      <footer>
        <div ";
            // line 87
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", [($context["author_classes"] ?? null)], "method", false, false, true, 87), 87, $this->source), "html", null, true);
            yield ">
          ";
            // line 88
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 88, $this->source), "html", null, true);
            yield "

          ";
            // line 90
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submitted by @author on @date", ["@author" =>             // line 91
($context["author_name"] ?? null), "@date" =>             // line 92
($context["date"] ?? null)]));
            // line 93
            yield "
        </div>
      </footer>
    ";
        }
        // line 97
        yield "  ";
        yield from [];
    }

    // line 100
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_node_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 101
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 101, $this->source), "html", null, true);
        yield "
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "radix:node";
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
        return array (  232 => 101,  225 => 100,  220 => 97,  214 => 93,  212 => 92,  211 => 91,  210 => 90,  205 => 88,  201 => 87,  198 => 86,  195 => 85,  188 => 84,  180 => 81,  173 => 80,  168 => 78,  165 => 77,  163 => 74,  162 => 73,  161 => 72,  160 => 71,  159 => 70,  157 => 69,  154 => 68,  147 => 67,  139 => 64,  132 => 63,  126 => 32,  119 => 103,  117 => 100,  113 => 99,  110 => 98,  108 => 84,  105 => 83,  103 => 80,  100 => 79,  98 => 67,  95 => 66,  93 => 63,  89 => 62,  86 => 61,  84 => 60,  81 => 59,  79 => 57,  78 => 55,  75 => 53,  73 => 51,  72 => 49,  69 => 47,  67 => 45,  66 => 44,  65 => 43,  64 => 42,  63 => 41,  62 => 40,  61 => 39,  60 => 38,  59 => 37,  58 => 35,  55 => 33,  53 => 32,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "radix:node", "themes/contrib/radix/components/node/node.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 32, "set" => 35, "block" => 63, "if" => 68, "include" => 70);
        static $filters = array("merge" => 45, "clean_class" => 40, "escape" => 62, "spaceless" => 32, "default" => 71, "t" => 90);
        static $functions = array("create_attribute" => 60);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'block', 'if', 'include'],
                ['merge', 'clean_class', 'escape', 'spaceless', 'default', 't'],
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
