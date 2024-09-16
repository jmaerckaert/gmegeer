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

/* themes/custom/gme/templates/dataset/item-list.html.twig */
class __TwigTemplate_18753a907d1b08b399d7a5273e4eedf4 extends Template
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
        // line 22
        $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 23
            yield "
";
            // line 24
            $context["list_group_attributes"] = ($context["attributes"] ?? null);
            // line 25
            $context["list_group_item_attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "attributes", [], "any", false, false, true, 25);
            // line 27
            $context["item_list_classes"] = ["item-group", ((CoreExtension::getAttribute($this->env, $this->source,             // line 29
($context["context"] ?? null), "list_style", [], "any", false, false, true, 29)) ? (("item-list--" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "list_style", [], "any", false, false, true, 29), 29, $this->source))) : (""))];
            // line 32
            yield "
";
            // line 34
            $context["item_list_item_classes"] = ["list-group-item"];
            // line 38
            yield "
";
            // line 39
            if ((($context["items"] ?? null) || ($context["empty"] ?? null))) {
                // line 40
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null))) {
                    // line 42
                    yield from                     $this->loadTemplate("radix:heading", "themes/custom/gme/templates/dataset/item-list.html.twig", 42)->unwrap()->yield(CoreExtension::merge($context, ["heading_html_tag" => "h3", "content" =>                     // line 44
($context["title"] ?? null)]));
                }
                // line 49
                if (($context["items"] ?? null)) {
                    // line 50
                    yield "<";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_type"] ?? null), 50, $this->source), "html", null, true);
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 50, $this->source), "html", null, true);
                    yield ">";
                    // line 51
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 52
                        yield "<li";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 52), "addClass", [($context["listClasses"] ?? null)], "method", false, false, true, 52), 52, $this->source), "html", null, true);
                        yield ">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                        yield "</li>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    yield "</";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_type"] ?? null), 54, $this->source), "html", null, true);
                    yield ">";
                } else {
                    // line 56
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 56, $this->source), "html", null, true);
                }
            }
            // line 59
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 22
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_0_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "item", "context", "items", "empty", "title", "list_type", "listClasses"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gme/templates/dataset/item-list.html.twig";
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
        return array (  107 => 22,  102 => 59,  98 => 56,  93 => 54,  83 => 52,  79 => 51,  74 => 50,  72 => 49,  69 => 44,  68 => 42,  66 => 40,  64 => 39,  61 => 38,  59 => 34,  56 => 32,  54 => 29,  53 => 27,  51 => 25,  49 => 24,  46 => 23,  44 => 22,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gme/templates/dataset/item-list.html.twig", "/var/www/html/web/themes/custom/gme/templates/dataset/item-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 22, "set" => 24, "if" => 39, "include" => 42, "for" => 51);
        static $filters = array("escape" => 50, "spaceless" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'if', 'include', 'for'],
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
