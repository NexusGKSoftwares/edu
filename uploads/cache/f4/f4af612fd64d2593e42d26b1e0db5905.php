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

/* page.twig.html */
class __TwigTemplate_be93b81bfb5bbc38e5d0a1cd1d40520e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        yield "
<div class=\"w-full flex flex-between mb-4\">
    ";
        // line 15
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, false, 15)) {
            // line 16
            yield "    <nav aria-label=\"breadcrumb\" class=\"flex-1 pt-6\">
        <ol class=\"mb-0 mx-0 text-xs text-blue-700\">
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, false, 18));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["title"] => $context["src"]) {
                // line 19
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 19)) {
                    // line 20
                    yield "                    <li aria-current=\"page\" class=\"list-none inline ml-0 trailEnd\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["title"], "html", null, true);
                    yield "</li>
                ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source,                 // line 21
$context["loop"], "revindex", [], "any", false, false, false, 21) > 5) && (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 21) != 1))) {
                    // line 22
                    yield "                    <li class=\"list-none inline ml-0 \">
                        <a hx-boost=\"true\" hx-target=\"#content-wrap\" hx-select=\"#content-wrap\" hx-swap=\"outerHTML show:no-scroll swap:0s\" class=\"text-blue-700 underline\" href=\"";
                    // line 23
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["src"], "html", null, true);
                    yield "\">...

                        </a> > 
                    </li>
                ";
                } else {
                    // line 28
                    yield "                    <li class=\"list-none inline ml-0 \">
                        <a hx-boost=\"true\" hx-target=\"#content-wrap\" hx-select=\"#content-wrap\" hx-swap=\"outerHTML show:no-scroll swap:0s\" class=\"text-blue-700 underline\" href=\"";
                    // line 29
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["src"], "html", null, true);
                    yield "\">
                            ";
                    // line 30
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["title"], "html", null, true);
                    yield "
                        </a> > 
                    </li>
                ";
                }
                // line 34
                yield "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['title'], $context['src'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "        </ol>
    </nav>
    ";
        }
        // line 38
        yield "

    ";
        // line 40
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "helpLink", [], "any", false, false, false, 40) && ($context["isLoggedIn"] ?? null))) {
            // line 41
            yield "    <a class=\"mt-6 text-gray-500 hover:text-blue-600\" href=\"https://docs.gibbonedu.org/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "helpLink", [], "any", false, false, false, 41), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Help"), "html", null, true);
            yield "\" target=\"_blank\">
        ";
            // line 42
            yield $this->env->getFunction('icon')->getCallable()("outline", "help", "size-6", ["stroke-width" => 1.5]);
            yield "
    </a>
    ";
        }
        // line 45
        yield "</div>

<div id=\"alerts\" class=\"hidden lg:block\">
    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "alerts", [], "any", false, false, false, 48));
        foreach ($context['_seq'] as $context["type"] => $context["alerts"]) {
            // line 49
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["alerts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
                // line 50
                yield "            <div class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                yield "\">";
                yield $context["text"];
                yield "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['alerts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "</div>

";
        // line 55
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigator", [], "any", false, false, false, 55)) {
            // line 56
            yield "<div class=\"w-full flex justify-end align-center mb-4\">

    ";
            // line 58
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigator", [], "any", false, false, false, 58), "schoolYears", [], "any", false, false, false, 58)) {
                // line 59
                yield "    
    ";
                // line 60
                $context["buttonStyle"] = "border -ml-px font-bold leading-loose text-xxs";
                // line 61
                yield "    ";
                $context["schoolYears"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigator", [], "any", false, false, false, 61), "schoolYears", [], "any", false, false, false, 61);
                // line 62
                yield "
    <div class=\"flex-1\">
        <h2 class=\"m-0 p-0 pt-1\">
            ";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["schoolYears"] ?? null), "current", [], "any", false, false, false, 65), "name", [], "any", false, false, false, 65), "html", null, true);
                yield "
        </h2>
    </div>
    
    <div class=\"flex\">

        <div class=\"linkTop mt-0 h-10 py-px\">
            ";
                // line 72
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["table"] ?? null), "getHeader", [], "any", false, false, false, 72));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 73
                    yield "                ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["action"], "getOutput", [], "any", false, false, false, 73);
                    yield "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                yield "        </div>

        <button hx-push-url=\"true\" hx-target=\"#content-inner\" hx-select=\"#content-inner\" hx-swap=\"outerHTML show:no-scroll\" hx-get=\"";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["absoluteURL"] ?? null), "html", null, true);
                yield "/index.php?q=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["address"] ?? null), "html", null, true);
                yield "&gibbonSchoolYearID=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["schoolYears"] ?? null), "previous", [], "any", false, false, false, 77), "gibbonSchoolYearID", [], "any", false, false, false, 77), "html", null, true);
                yield "&";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, ($context["schoolYears"] ?? null), "params", [], "any", false, false, false, 77)), "html", null, true);
                yield "\" type=\"button\" class=\"rounded-l px-2 py-1 text-gray-600 bg-gray-100 border-gray-400 ";
                yield (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["schoolYears"] ?? null), "previous", [], "any", false, false, false, 77))) ? ("hover:bg-gray-400") : (""));
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["buttonStyle"] ?? null), "html", null, true);
                yield "\" ";
                yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["schoolYears"] ?? null), "previous", [], "any", false, false, false, 77))) ? ("disabled") : (""));
                yield ">
            <span class=\"sr-only\">
                ";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Prev"), "html", null, true);
                yield "
            </span>
            ";
                // line 81
                yield $this->env->getFunction('icon')->getCallable()("basic", "chevron-left", "block size-5");
                yield "
        </button>

        <select hx-get=\"";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["absoluteURL"] ?? null), "html", null, true);
                yield "/index.php?q=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["address"] ?? null), "html", null, true);
                yield "\" hx-push-url=\"true\" hx-target=\"#content-inner\" hx-select=\"#content-inner\" hx-swap=\"outerHTML show:no-scroll\" name=\"gibbonSchoolYearID\" class=\"bg-gray-100 text-gray-600 border-gray-400 border-r-0 pl-3 pr-6 py-2 ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["buttonStyle"] ?? null), "html", null, true);
                yield "\">";
                // line 85
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["schoolYears"] ?? null), "years", [], "any", false, false, false, 85));
                foreach ($context['_seq'] as $context["value"] => $context["name"]) {
                    // line 86
                    yield "<option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                    yield "\" ";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["schoolYears"] ?? null), "current", [], "any", false, false, false, 86), "gibbonSchoolYearID", [], "any", false, false, false, 86) == $context["value"])) ? ("selected") : (""));
                    yield ">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                    yield "</option>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                yield "</select>

        <button hx-push-url=\"true\" hx-target=\"#content-inner\" hx-select=\"#content-inner\" hx-swap=\"outerHTML show:no-scroll\" hx-get=\"";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["absoluteURL"] ?? null), "html", null, true);
                yield "/index.php?q=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["address"] ?? null), "html", null, true);
                yield "&gibbonSchoolYearID=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["schoolYears"] ?? null), "next", [], "any", false, false, false, 90), "gibbonSchoolYearID", [], "any", false, false, false, 90), "html", null, true);
                yield "&";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, ($context["schoolYears"] ?? null), "params", [], "any", false, false, false, 90)), "html", null, true);
                yield "\" type=\"button\" class=\"rounded-r px-2 py-1 text-gray-600 bg-gray-100 border-gray-400 ";
                yield (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["schoolYears"] ?? null), "next", [], "any", false, false, false, 90))) ? ("hover:bg-gray-400") : (""));
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["buttonStyle"] ?? null), "html", null, true);
                yield "\" ";
                yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["schoolYears"] ?? null), "next", [], "any", false, false, false, 90))) ? ("disabled") : (""));
                yield ">
            <span class=\"sr-only\">
                ";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Next"), "html", null, true);
                yield "
            </span>
            ";
                // line 94
                yield $this->env->getFunction('icon')->getCallable()("basic", "chevron-right", "block size-5");
                yield "
        </button>
    </div>
    ";
            }
            // line 98
            yield "    

    ";
            // line 100
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigator", [], "any", false, false, false, 100), "actions", [], "any", false, false, false, 100)) {
                // line 101
                yield "
    <div class=\"linkTop mt-0 flex justify-end gap-2 h-10 py-px\">
        ";
                // line 103
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigator", [], "any", false, false, false, 103), "actions", [], "any", false, false, false, 103));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 104
                    yield "            ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["action"], "getOutput", [], "any", false, false, false, 104);
                    yield "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                yield "    </div>

    ";
            }
            // line 109
            yield "</div>
";
        }
        // line 111
        yield "

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "page.twig.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  337 => 111,  333 => 109,  328 => 106,  319 => 104,  315 => 103,  311 => 101,  309 => 100,  305 => 98,  298 => 94,  293 => 92,  276 => 90,  272 => 88,  260 => 86,  256 => 85,  249 => 84,  243 => 81,  238 => 79,  221 => 77,  217 => 75,  208 => 73,  204 => 72,  194 => 65,  189 => 62,  186 => 61,  184 => 60,  181 => 59,  179 => 58,  175 => 56,  173 => 55,  169 => 53,  163 => 52,  152 => 50,  147 => 49,  143 => 48,  138 => 45,  132 => 42,  125 => 41,  123 => 40,  119 => 38,  114 => 35,  100 => 34,  93 => 30,  89 => 29,  86 => 28,  78 => 23,  75 => 22,  73 => 21,  68 => 20,  65 => 19,  48 => 18,  44 => 16,  42 => 15,  38 => 13,);
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

<div class=\"w-full flex flex-between mb-4\">
    {% if page.breadcrumbs %}
    <nav aria-label=\"breadcrumb\" class=\"flex-1 pt-6\">
        <ol class=\"mb-0 mx-0 text-xs text-blue-700\">
            {% for title, src in page.breadcrumbs %}
                {% if loop.last %}
                    <li aria-current=\"page\" class=\"list-none inline ml-0 trailEnd\">{{ title }}</li>
                {% elseif loop.revindex > 5 and loop.index != 1 %}
                    <li class=\"list-none inline ml-0 \">
                        <a hx-boost=\"true\" hx-target=\"#content-wrap\" hx-select=\"#content-wrap\" hx-swap=\"outerHTML show:no-scroll swap:0s\" class=\"text-blue-700 underline\" href=\"{{ src }}\">...

                        </a> > 
                    </li>
                {% else %}
                    <li class=\"list-none inline ml-0 \">
                        <a hx-boost=\"true\" hx-target=\"#content-wrap\" hx-select=\"#content-wrap\" hx-swap=\"outerHTML show:no-scroll swap:0s\" class=\"text-blue-700 underline\" href=\"{{ src }}\">
                            {{ title }}
                        </a> > 
                    </li>
                {% endif %}
            {% endfor %}
        </ol>
    </nav>
    {% endif %}


    {% if page.helpLink and isLoggedIn %}
    <a class=\"mt-6 text-gray-500 hover:text-blue-600\" href=\"https://docs.gibbonedu.org/{{ page.helpLink }}\" title=\"{{ __('Help') }}\" target=\"_blank\">
        {{ icon('outline', 'help', 'size-6', {'stroke-width': 1.5 } ) }}
    </a>
    {% endif %}
</div>

<div id=\"alerts\" class=\"hidden lg:block\">
    {% for type, alerts in page.alerts %}
        {% for text in alerts %}
            <div class=\"{{ type }}\">{{ text|raw }}</div>
        {% endfor %}
    {% endfor %}
</div>

{% if page.navigator %}
<div class=\"w-full flex justify-end align-center mb-4\">

    {% if page.navigator.schoolYears %}
    
    {% set buttonStyle = 'border -ml-px font-bold leading-loose text-xxs' %}
    {% set schoolYears = page.navigator.schoolYears %}

    <div class=\"flex-1\">
        <h2 class=\"m-0 p-0 pt-1\">
            {{ schoolYears.current.name }}
        </h2>
    </div>
    
    <div class=\"flex\">

        <div class=\"linkTop mt-0 h-10 py-px\">
            {% for action in table.getHeader %}
                {{ action.getOutput|raw }}
            {% endfor %}
        </div>

        <button hx-push-url=\"true\" hx-target=\"#content-inner\" hx-select=\"#content-inner\" hx-swap=\"outerHTML show:no-scroll\" hx-get=\"{{ absoluteURL }}/index.php?q={{ address }}&gibbonSchoolYearID={{ schoolYears.previous.gibbonSchoolYearID }}&{{ schoolYears.params|url_encode }}\" type=\"button\" class=\"rounded-l px-2 py-1 text-gray-600 bg-gray-100 border-gray-400 {{ schoolYears.previous is not empty ? 'hover:bg-gray-400'}} {{ buttonStyle }}\" {{ schoolYears.previous is empty ? 'disabled'}}>
            <span class=\"sr-only\">
                {{ __('Prev') }}
            </span>
            {{ icon('basic', 'chevron-left', 'block size-5' ) }}
        </button>

        <select hx-get=\"{{ absoluteURL }}/index.php?q={{ address }}\" hx-push-url=\"true\" hx-target=\"#content-inner\" hx-select=\"#content-inner\" hx-swap=\"outerHTML show:no-scroll\" name=\"gibbonSchoolYearID\" class=\"bg-gray-100 text-gray-600 border-gray-400 border-r-0 pl-3 pr-6 py-2 {{ buttonStyle }}\">
        {%- for value, name in schoolYears.years -%}
            <option value=\"{{ value }}\" {{ schoolYears.current.gibbonSchoolYearID == value ? 'selected' : ''}}>{{ name }}</option>
        {%- endfor -%}
        </select>

        <button hx-push-url=\"true\" hx-target=\"#content-inner\" hx-select=\"#content-inner\" hx-swap=\"outerHTML show:no-scroll\" hx-get=\"{{ absoluteURL }}/index.php?q={{ address }}&gibbonSchoolYearID={{ schoolYears.next.gibbonSchoolYearID }}&{{ schoolYears.params|url_encode }}\" type=\"button\" class=\"rounded-r px-2 py-1 text-gray-600 bg-gray-100 border-gray-400 {{ schoolYears.next is not empty ? 'hover:bg-gray-400'}} {{ buttonStyle }}\" {{ schoolYears.next is empty ? 'disabled'}}>
            <span class=\"sr-only\">
                {{ __('Next') }}
            </span>
            {{ icon('basic', 'chevron-right', 'block size-5') }}
        </button>
    </div>
    {% endif %}
    

    {% if page.navigator.actions %}

    <div class=\"linkTop mt-0 flex justify-end gap-2 h-10 py-px\">
        {% for action in page.navigator.actions %}
            {{ action.getOutput|raw }}
        {% endfor %}
    </div>

    {% endif %}
</div>
{% endif %}


", "page.twig.html", "C:\\xampp\\htdocs\\edu\\resources\\templates\\page.twig.html");
    }
}
