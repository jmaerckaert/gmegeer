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

/* radix:views-view */
class __TwigTemplate_60ef13a0675a0a0abfc23d670f696e6c extends Template
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
            'views_view_wrapper' => [$this, 'block_views_view_wrapper'],
            'views_view_title' => [$this, 'block_views_view_title'],
            'views_header' => [$this, 'block_views_header'],
            'views_filters' => [$this, 'block_views_filters'],
            'views_attachment_before' => [$this, 'block_views_attachment_before'],
            'views_rows' => [$this, 'block_views_rows'],
            'views_pager' => [$this, 'block_views_pager'],
            'views_attachment_after' => [$this, 'block_views_attachment_after'],
            'views_more' => [$this, 'block_views_more'],
            'views_footer' => [$this, 'block_views_footer'],
            'views_feed_icons' => [$this, 'block_views_feed_icons'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--views-view"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:views-view"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:views-view"));
        // line 33
        $___internal_parse_5_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 34
            yield "
";
            // line 35
            $context["views_attributes"] = ((($context["attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
            // line 36
            $context["views_title_attributes"] = ((($context["views_title_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
            // line 37
            $context["views_header_attributes"] = ((($context["views_header_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
            // line 38
            $context["views_filters_attributes"] = ((($context["views_filters_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
            // line 39
            $context["views_rows_attributes"] = ((($context["views_rows_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
            // line 40
            $context["views_empty_attributes"] = ((($context["views_empty_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
            // line 41
            $context["views_footer_attributes"] = ((($context["views_footer_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
            // line 42
            $context["views_attachment_before_attributes"] = ((($context["views_attachment_before_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
            // line 43
            $context["views_attachment_after_attributes"] = ((($context["views_attachment_after_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
            // line 44
            $context["views_pager_attributes"] = ((($context["views_pager_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
            // line 45
            $context["views_more_attributes"] = ((($context["views_more_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
            // line 46
            $context["views_feed_icons_attributes"] = ((($context["views_feed_icons_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
            // line 47
            yield "
";
            // line 49
            $context["views_classes"] = Twig\Extension\CoreExtension::merge(["view", ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 51
($context["id"] ?? null), 51, $this->source))), ("view-id-" . $this->sandbox->ensureToStringAllowed(            // line 52
($context["id"] ?? null), 52, $this->source)), ("view-display-id-" . $this->sandbox->ensureToStringAllowed(            // line 53
($context["display_id"] ?? null), 53, $this->source)), ((            // line 54
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 54, $this->source))) : ("")), ((            // line 55
($context["css_name"] ?? null)) ? (("view-" . $this->sandbox->ensureToStringAllowed(($context["css_name"] ?? null), 55, $this->source))) : (""))], ((            // line 56
($context["view_view_utility_classes"] ?? null)) ?: ([])));
            // line 58
            yield "
";
            // line 60
            $context["views_title_classes"] = Twig\Extension\CoreExtension::merge(["view-title"], ((            // line 62
($context["views_title_utility_classes"] ?? null)) ?: ([])));
            // line 64
            yield "
";
            // line 66
            $context["views_header_classes"] = Twig\Extension\CoreExtension::merge(["view-header"], ((            // line 68
($context["views_header_utility_classes"] ?? null)) ?: ([])));
            // line 70
            yield "
";
            // line 72
            $context["views_filters_classes"] = Twig\Extension\CoreExtension::merge(["view-filters"], ((            // line 74
($context["views_filters_utility_classes"] ?? null)) ?: ([])));
            // line 76
            yield "
";
            // line 78
            $context["views_rows_classes"] = Twig\Extension\CoreExtension::merge(["view-content"], ((            // line 80
($context["views_rows_utility_classes"] ?? null)) ?: ([])));
            // line 82
            yield "
";
            // line 84
            $context["views_empty_classes"] = Twig\Extension\CoreExtension::merge(["view-empty"], ((            // line 86
($context["views_empty_utility_classes"] ?? null)) ?: ([])));
            // line 88
            yield "
";
            // line 90
            $context["views_footer_classes"] = Twig\Extension\CoreExtension::merge(["view-footer"], ((            // line 92
($context["views_footer_utility_classes"] ?? null)) ?: ([])));
            // line 94
            yield "
";
            // line 96
            $context["views_attachment_before_classes"] = Twig\Extension\CoreExtension::merge(["attachment", "attachment-before"], ((            // line 99
($context["views_attachment_before_utility_classes"] ?? null)) ?: ([])));
            // line 101
            yield "
";
            // line 103
            $context["views_attachment_after_classes"] = Twig\Extension\CoreExtension::merge(["attachment", "attachment-after"], ((            // line 106
($context["views_attachment_after_utility_classes"] ?? null)) ?: ([])));
            // line 108
            yield "
";
            // line 110
            $context["views_pager_classes"] = Twig\Extension\CoreExtension::merge(["pager"], ((            // line 112
($context["views_pager_utility_classes"] ?? null)) ?: ([])));
            // line 114
            yield "
";
            // line 116
            $context["views_more_classes"] = Twig\Extension\CoreExtension::merge([""], ((($context["views_more_utility_classes"] ?? null)) ?: ([])));
            // line 118
            yield "
";
            // line 120
            $context["views_feed_icons_classes"] = Twig\Extension\CoreExtension::merge(["feed-icons"], ((            // line 122
($context["views_feed_icons_utility_classes"] ?? null)) ?: ([])));
            // line 124
            yield "
<div ";
            // line 125
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["views_attributes"] ?? null), "addClass", [($context["views_classes"] ?? null)], "method", false, false, true, 125), 125, $this->source), "html", null, true);
            yield ">
  ";
            // line 126
            yield from $this->unwrap()->yieldBlock('views_view_wrapper', $context, $blocks);
            // line 211
            yield "</div>

";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_5_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "id", "display_id", "dom_id", "css_name", "view_view_utility_classes", "views_title_utility_classes", "views_header_utility_classes", "views_filters_utility_classes", "views_rows_utility_classes", "views_empty_utility_classes", "views_footer_utility_classes", "views_attachment_before_utility_classes", "views_attachment_after_utility_classes", "views_pager_utility_classes", "views_more_utility_classes", "views_feed_icons_utility_classes", "title_prefix", "title_suffix", "title", "header", "exposed", "attachment_before", "rows", "empty", "pager", "attachment_after", "more", "footer", "feed_icons"]);        yield from [];
    }

    // line 126
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_views_view_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 127
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 127, $this->source), "html", null, true);
        yield "
    ";
        // line 128
        yield from $this->unwrap()->yieldBlock('views_view_title', $context, $blocks);
        // line 135
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 135, $this->source), "html", null, true);
        yield "

    ";
        // line 137
        yield from $this->unwrap()->yieldBlock('views_header', $context, $blocks);
        // line 144
        yield "
    ";
        // line 145
        yield from $this->unwrap()->yieldBlock('views_filters', $context, $blocks);
        // line 152
        yield "
    ";
        // line 153
        yield from $this->unwrap()->yieldBlock('views_attachment_before', $context, $blocks);
        // line 160
        yield "
    ";
        // line 161
        yield from $this->unwrap()->yieldBlock('views_rows', $context, $blocks);
        // line 172
        yield "
    ";
        // line 173
        yield from $this->unwrap()->yieldBlock('views_pager', $context, $blocks);
        // line 180
        yield "
    ";
        // line 181
        yield from $this->unwrap()->yieldBlock('views_attachment_after', $context, $blocks);
        // line 188
        yield "
    ";
        // line 189
        yield from $this->unwrap()->yieldBlock('views_more', $context, $blocks);
        // line 194
        yield "
    ";
        // line 195
        yield from $this->unwrap()->yieldBlock('views_footer', $context, $blocks);
        // line 202
        yield "
    ";
        // line 203
        yield from $this->unwrap()->yieldBlock('views_feed_icons', $context, $blocks);
        // line 210
        yield "  ";
        yield from [];
    }

    // line 128
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_views_view_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 129
        yield "      ";
        if (($context["title"] ?? null)) {
            // line 130
            yield "        <div ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["views_title_attributes"] ?? null), "addClass", [($context["views_title_classes"] ?? null)], "method", false, false, true, 130), 130, $this->source), "html", null, true);
            yield ">
          ";
            // line 131
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 131, $this->source), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 134
        yield "    ";
        yield from [];
    }

    // line 137
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_views_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 138
        yield "      ";
        if (($context["header"] ?? null)) {
            // line 139
            yield "        <div ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["views_header_attributes"] ?? null), "addClass", [($context["views_header_classes"] ?? null)], "method", false, false, true, 139), 139, $this->source), "html", null, true);
            yield ">
          ";
            // line 140
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 140, $this->source), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 143
        yield "    ";
        yield from [];
    }

    // line 145
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_views_filters(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 146
        yield "      ";
        if (($context["exposed"] ?? null)) {
            // line 147
            yield "        <div ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["views_filters_attributes"] ?? null), "addClass", [($context["views_filters_classes"] ?? null)], "method", false, false, true, 147), 147, $this->source), "html", null, true);
            yield ">
          ";
            // line 148
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 148, $this->source), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 151
        yield "    ";
        yield from [];
    }

    // line 153
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_views_attachment_before(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 154
        yield "      ";
        if (($context["attachment_before"] ?? null)) {
            // line 155
            yield "        <div ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["views_attachment_before_attributes"] ?? null), "addClass", [($context["views_attachment_before_classes"] ?? null)], "method", false, false, true, 155), 155, $this->source), "html", null, true);
            yield ">
          ";
            // line 156
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 156, $this->source), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 159
        yield "    ";
        yield from [];
    }

    // line 161
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_views_rows(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 162
        yield "      ";
        if (($context["rows"] ?? null)) {
            // line 163
            yield "        <div ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["views_rows_attributes"] ?? null), "addClass", [($context["views_rows_classes"] ?? null)], "method", false, false, true, 163), 163, $this->source), "html", null, true);
            yield ">
          ";
            // line 164
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 164, $this->source), "html", null, true);
            yield "
        </div>
      ";
        } elseif (        // line 166
($context["empty"] ?? null)) {
            // line 167
            yield "        <div ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["views_empty_attributes"] ?? null), "addClass", [($context["views_empty_classes"] ?? null)], "method", false, false, true, 167), 167, $this->source), "html", null, true);
            yield ">
          ";
            // line 168
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 168, $this->source), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 171
        yield "    ";
        yield from [];
    }

    // line 173
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_views_pager(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 174
        yield "      ";
        if (($context["pager"] ?? null)) {
            // line 175
            yield "        <div ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["views_pager_attributes"] ?? null), "addClass", [($context["views_pager_classes"] ?? null)], "method", false, false, true, 175), 175, $this->source), "html", null, true);
            yield ">
          ";
            // line 176
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 176, $this->source), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 179
        yield "    ";
        yield from [];
    }

    // line 181
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_views_attachment_after(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 182
        yield "      ";
        if (($context["attachment_after"] ?? null)) {
            // line 183
            yield "        <div ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["views_attachment_after_attributes"] ?? null), "addClass", [($context["views_attachment_after_classes"] ?? null)], "method", false, false, true, 183), 183, $this->source), "html", null, true);
            yield ">
          ";
            // line 184
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 184, $this->source), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 187
        yield "    ";
        yield from [];
    }

    // line 189
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_views_more(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 190
        yield "      ";
        if (($context["more"] ?? null)) {
            // line 191
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->addClass($this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 191, $this->source), $this->sandbox->ensureToStringAllowed(($context["views_more_classes"] ?? null), 191, $this->source)), "html", null, true);
            yield "
      ";
        }
        // line 193
        yield "    ";
        yield from [];
    }

    // line 195
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_views_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 196
        yield "      ";
        if (($context["footer"] ?? null)) {
            // line 197
            yield "        <div ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["views_footer_attributes"] ?? null), "addClass", [($context["views_footer_classes"] ?? null)], "method", false, false, true, 197), 197, $this->source), "html", null, true);
            yield ">
          ";
            // line 198
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 198, $this->source), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 201
        yield "    ";
        yield from [];
    }

    // line 203
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_views_feed_icons(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 204
        yield "      ";
        if (($context["feed_icons"] ?? null)) {
            // line 205
            yield "        <div ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["views_feed_icons_attributes"] ?? null), "addClass", [($context["views_feed_icons_classes"] ?? null)], "method", false, false, true, 205), 205, $this->source), "html", null, true);
            yield ">
          ";
            // line 206
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 206, $this->source), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 209
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "radix:views-view";
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
        return array (  514 => 209,  508 => 206,  503 => 205,  500 => 204,  493 => 203,  488 => 201,  482 => 198,  477 => 197,  474 => 196,  467 => 195,  462 => 193,  456 => 191,  453 => 190,  446 => 189,  441 => 187,  435 => 184,  430 => 183,  427 => 182,  420 => 181,  415 => 179,  409 => 176,  404 => 175,  401 => 174,  394 => 173,  389 => 171,  383 => 168,  378 => 167,  376 => 166,  371 => 164,  366 => 163,  363 => 162,  356 => 161,  351 => 159,  345 => 156,  340 => 155,  337 => 154,  330 => 153,  325 => 151,  319 => 148,  314 => 147,  311 => 146,  304 => 145,  299 => 143,  293 => 140,  288 => 139,  285 => 138,  278 => 137,  273 => 134,  267 => 131,  262 => 130,  259 => 129,  252 => 128,  247 => 210,  245 => 203,  242 => 202,  240 => 195,  237 => 194,  235 => 189,  232 => 188,  230 => 181,  227 => 180,  225 => 173,  222 => 172,  220 => 161,  217 => 160,  215 => 153,  212 => 152,  210 => 145,  207 => 144,  205 => 137,  199 => 135,  197 => 128,  192 => 127,  185 => 126,  179 => 33,  173 => 211,  171 => 126,  167 => 125,  164 => 124,  162 => 122,  161 => 120,  158 => 118,  156 => 116,  153 => 114,  151 => 112,  150 => 110,  147 => 108,  145 => 106,  144 => 103,  141 => 101,  139 => 99,  138 => 96,  135 => 94,  133 => 92,  132 => 90,  129 => 88,  127 => 86,  126 => 84,  123 => 82,  121 => 80,  120 => 78,  117 => 76,  115 => 74,  114 => 72,  111 => 70,  109 => 68,  108 => 66,  105 => 64,  103 => 62,  102 => 60,  99 => 58,  97 => 56,  96 => 55,  95 => 54,  94 => 53,  93 => 52,  92 => 51,  91 => 49,  88 => 47,  86 => 46,  84 => 45,  82 => 44,  80 => 43,  78 => 42,  76 => 41,  74 => 40,  72 => 39,  70 => 38,  68 => 37,  66 => 36,  64 => 35,  61 => 34,  59 => 33,  55 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "radix:views-view", "themes/contrib/radix/components/views-view/views-view.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 33, "set" => 35, "block" => 126, "if" => 129);
        static $filters = array("merge" => 56, "clean_class" => 51, "escape" => 125, "spaceless" => 33, "add_class" => 191);
        static $functions = array("create_attribute" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'block', 'if'],
                ['merge', 'clean_class', 'escape', 'spaceless', 'add_class'],
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
