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

/* head.twig.html */
class __TwigTemplate_ef714d56afdda40a54a5b68baa6cfdb8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'styles' => [$this, 'block_styles'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        yield "
";
        // line 14
        yield from $this->unwrap()->yieldBlock('meta', $context, $blocks);
        // line 26
        yield "
";
        // line 27
        yield from $this->unwrap()->yieldBlock('styles', $context, $blocks);
        // line 37
        yield "
";
        // line 38
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
        return; yield '';
    }

    // line 14
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        yield "    <title>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 15), "html", null, true);
        yield "</title>

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\"/>
    <meta http-equiv=\"content-language\" content=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["locale"] ?? null), "html", null, true);
        yield "\"/>
    <meta name=\"author\" content=\"Ross Parker, International College Hong Kong\"/>
    <meta name=\"robots\" content=\"noindex\"/>
    <meta name=\"Referrer‐Policy\" value=\"no‐referrer | same‐origin\"/>
    <meta name=\"htmx-config\" content='{\"htmx.config.scrollBehavior\":\"smooth\", \"htmx.config.scrollIntoViewOnBoost\": true}'>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./favicon.ico\"/>
";
        return; yield '';
    }

    // line 27
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "stylesheets", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
            // line 29
            yield "        ";
            $context["assetVersion"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["asset"], "version", [], "any", false, false, false, 29))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["asset"], "version", [], "any", false, false, false, 29)) : (($context["version"] ?? null)));
            // line 30
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["asset"], "type", [], "any", false, false, false, 30) == "inline")) {
                // line 31
                yield "            <style type=\"text/css\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["asset"], "src", [], "any", false, false, false, 31);
                yield "</style>
        ";
            } else {
                // line 33
                yield "            <link rel=\"stylesheet\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["absoluteURL"] ?? null), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["asset"], "src", [], "any", false, false, false, 33), "html", null, true);
                yield "?v=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["assetVersion"] ?? null), "html", null, true);
                yield ".";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cacheString"] ?? null), "html", null, true);
                yield "\" type=\"text/css\" media=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["asset"], "media", [], "any", false, false, false, 33), "html", null, true);
                yield "\" />
        ";
            }
            // line 35
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    // line 38
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "scriptsHead", [], "any", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
            // line 41
            yield "        ";
            $context["assetVersion"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["asset"], "version", [], "any", false, false, false, 41))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["asset"], "version", [], "any", false, false, false, 41)) : (($context["version"] ?? null)));
            // line 42
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["asset"], "type", [], "any", false, false, false, 42) == "inline")) {
                // line 43
                yield "            <script type=\"text/javascript\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["asset"], "src", [], "any", false, false, false, 43);
                yield "</script>
        ";
            } else {
                // line 45
                yield "            <script type=\"text/javascript\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["absoluteURL"] ?? null), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["asset"], "src", [], "any", false, false, false, 45), "html", null, true);
                yield "?v=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["assetVersion"] ?? null), "html", null, true);
                yield ".";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cacheString"] ?? null), "html", null, true);
                yield "\" ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["asset"], "type", [], "any", false, false, false, 45) == "defer")) ? ("defer") : (""));
                yield "></script>
        ";
            }
            // line 47
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "
    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "extraHead", [], "any", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 50
            yield "        ";
            yield $context["code"];
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "head.twig.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  186 => 52,  177 => 50,  173 => 49,  170 => 48,  164 => 47,  150 => 45,  144 => 43,  141 => 42,  138 => 41,  134 => 40,  131 => 39,  127 => 38,  118 => 35,  104 => 33,  98 => 31,  95 => 30,  92 => 29,  87 => 28,  83 => 27,  71 => 19,  63 => 15,  59 => 14,  54 => 38,  51 => 37,  49 => 27,  46 => 26,  44 => 14,  41 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("{#<!--
Gibbon: the flexible, open school platform
Founded by Ross Parker at ICHK Secondary. Built by Ross Parker, Sandra Kuipers and the Gibbon community (https://gibbonedu.org/about/)
Copyright © 2010, Gibbon Foundation
Gibbon™, Gibbon Education Ltd. (Hong Kong)

This is a Gibbon template file, written in HTML and Twig syntax.
For info about editing, see: https://twig.symfony.com/doc/2.x/

Page Foot: Outputs the contents of the HTML <head> tag. This includes
all stylesheets and scripts with a 'head' context.
-->#}

{% block meta %}
    <title>{{ page.title }}</title>

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\"/>
    <meta http-equiv=\"content-language\" content=\"{{ locale }}\"/>
    <meta name=\"author\" content=\"Ross Parker, International College Hong Kong\"/>
    <meta name=\"robots\" content=\"noindex\"/>
    <meta name=\"Referrer‐Policy\" value=\"no‐referrer | same‐origin\"/>
    <meta name=\"htmx-config\" content='{\"htmx.config.scrollBehavior\":\"smooth\", \"htmx.config.scrollIntoViewOnBoost\": true}'>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./favicon.ico\"/>
{% endblock meta %}

{% block styles %}
    {% for asset in page.stylesheets %}
        {% set assetVersion = asset.version is not empty ? asset.version : version %}
        {% if asset.type == 'inline' %}
            <style type=\"text/css\">{{ asset.src|raw }}</style>
        {% else %}
            <link rel=\"stylesheet\" href=\"{{ absoluteURL }}/{{ asset.src }}?v={{ assetVersion }}.{{ cacheString }}\" type=\"text/css\" media=\"{{ asset.media }}\" />
        {% endif %}
    {% endfor %}
{% endblock styles %}

{% block scripts %}

    {% for asset in page.scriptsHead %}
        {% set assetVersion = asset.version is not empty ? asset.version : version %}
        {% if asset.type == 'inline' %}
            <script type=\"text/javascript\">{{ asset.src|raw }}</script>
        {% else %}
            <script type=\"text/javascript\" src=\"{{ absoluteURL }}/{{ asset.src }}?v={{ assetVersion }}.{{ cacheString }}\" {{ asset.type == 'defer' ? 'defer' }}></script>
        {% endif %}
    {% endfor %}

    {% for code in page.extraHead %}
        {{ code|raw }}
    {% endfor %}

{% endblock scripts %}
", "head.twig.html", "C:\\xampp\\htdocs\\edu\\resources\\templates\\head.twig.html");
    }
}
