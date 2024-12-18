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

/* navigation.twig.html */
class __TwigTemplate_bf53121f878a4a99fa5312c37d3a62ac extends Template
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
        // line 14
        yield "
";
        // line 15
        $context["sidebarClass"] = "shadow bg-white rounded px-6 mb-6";
        // line 16
        yield "
";
        // line 17
        if ((($context["sidebar"] ?? null) ||  !Twig\Extension\CoreExtension::testEmpty(($context["menuModule"] ?? null)))) {
            // line 18
            yield "<div class=\"mx-4 sm:mx-0 relative sm:static\" x-data=\"{moduleMenu: false}\" @keydown.escape.window=\"moduleMenu = false\" @click.outside=\"moduleMenu = false\" x-init=\"moduleMenu = false\">

    ";
            // line 20
            if (($context["menuModule"] ?? null)) {
                // line 21
                yield "    <button @click=\"moduleMenu = !moduleMenu\" class=\"relative w-full flex rounded justify-center items-center sm:w-48 bg-white sm:border border-grey-600 border-solid p-2 mb-4 sm:mt-4 sm:absolute sm:top-0 sm:right-0 sm:mr-6 z-40 ";
                yield ((($context["sidebar"] ?? null)) ? ("lg:hidden") : (""));
                yield "\">
        <span class=\"text-gray-600 text-sm sm:text-xs font-bold uppercase \">
            ";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Module Menu"), "html", null, true);
                yield "
        </span>
        ";
                // line 25
                yield $this->env->getFunction('icon')->getCallable()("basic", "menu", "size-6 sm:size-5 text-gray-600 ml-2");
                yield "
    </button>
    ";
            }
            // line 28
            yield "
    ";
            // line 29
            if ((($context["sidebar"] ?? null) && (($context["sidebarPosition"] ?? null) != "bottom"))) {
                // line 30
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "extraSidebar", [], "any", false, false, false, 30));
                foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                    // line 31
                    yield "            ";
                    if ( !Twig\Extension\CoreExtension::testEmpty($context["code"])) {
                        // line 32
                        yield "            <div class=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sidebarClass"] ?? null), "html", null, true);
                        yield " md:column-2 lg:column-1 pb-6 pt-2 lg:pb-8\">
                ";
                        // line 33
                        yield $context["code"];
                        yield "
            </div>
            ";
                    }
                    // line 36
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                yield "    ";
            }
            // line 38
            yield "    
    ";
            // line 39
            if ((($context["sidebar"] ?? null) && is_iterable(($context["sidebarContents"] ?? null)))) {
                // line 40
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["sidebarContents"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["sidebarContent"]) {
                    // line 41
                    yield "            ";
                    if ($context["sidebarContent"]) {
                        // line 42
                        yield "            <div class=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sidebarClass"] ?? null), "html", null, true);
                        yield " md:column-2 lg:column-1 ";
                        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, false, 42)) ? ("pt-4 lg:pt-0") : (""));
                        yield " pb-6 lg:pb-8\">
                ";
                        // line 43
                        yield $context["sidebarContent"];
                        yield "
            </div>
            ";
                    }
                    // line 46
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sidebarContent'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                yield "    ";
            } elseif ((($context["sidebar"] ?? null) && ($context["sidebarContents"] ?? null))) {
                // line 48
                yield "        <div class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sidebarClass"] ?? null), "html", null, true);
                yield " md:column-2 lg:column-1 ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, false, 48)) ? ("pt-4 lg:pt-0") : (""));
                yield " pb-6 lg:pb-8\">
            ";
                // line 49
                yield ($context["sidebarContents"] ?? null);
                yield "
        </div>
    ";
            }
            // line 52
            yield "    
    ";
            // line 53
            if (($context["menuModule"] ?? null)) {
                // line 54
                yield "    <nav x-cloak=\"";
                yield ((($context["sidebar"] ?? null)) ? ("mobile") : ("on"));
                yield "\"  :class=\"moduleMenu ? 'block' : 'hidden'\" x-data=\"{ menuItemActive: '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["menuItemActive"] ?? null), [" " => "-", "&" => "", "'" => ""]), "html", null, true);
                yield "' }\" class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sidebarClass"] ?? null), "html", null, true);
                yield " w-full font-sans absolute top-0 z-30 sm:mt-16 pt-6 pt-12 sm:pt-6
        ";
                // line 55
                yield ((($context["sidebar"] ?? null)) ? ("lg:block lg:static lg:p-0 lg:py-6 lg:mx-0 lg:mt-0") : (""));
                yield "\" >

        <ul class=\"w-full  list-none column-1 sm:column-2 md:column-3 m-0 px-0  
            ";
                // line 58
                yield ((($context["sidebar"] ?? null)) ? ("lg:bg-transparent lg:border-0 lg:column-1 lg:shadow-none lg:px-8") : (""));
                yield "\">

            ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["menuModule"] ?? null));
                foreach ($context['_seq'] as $context["categoryName"] => $context["items"]) {
                    // line 61
                    yield "                <li class=\"w-full column-no-break p-0\">
                    <h5 class=\"m-0 mb-1 text-sm px-px pt-2 pb-1 text-";
                    // line 62
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["themeColour"] ?? null), "html", null, true);
                    yield "-600 border-b-0 uppercase\">
                        ";
                    // line 63
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()($context["categoryName"], CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["items"]), "textDomain", [], "any", false, false, false, 63)), "html", null, true);
                    yield "
                    </h5>
                    
                    <ul class=\"list-none m-0 mb-6\">
                    ";
                    // line 67
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["items"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 68
                        yield "                        <li class=\"-mx-4 -my-1\">
                            <a @click=\"moduleMenu = false\" hx-boost=\"true\" hx-target=\"#content-wrap\" hx-select=\"#content-wrap\" hx-swap=\"outerHTML show:window:top swap:0s\" 
                            @click=\"menuItemActive = '";
                        // line 70
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "actionName", [], "any", false, false, false, 70), [" " => "-", "&" => "", "'" => ""]), "html", null, true);
                        yield "'\"
                            href=\"";
                        // line 71
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 71), "html", null, true);
                        yield "\" class=\"block relative text-gray-700 no-underline px-3 py-1  text-sm leading-normal lg:leading-normal rounded transition cursor-pointer hover:bg-gray-200\" :class=\"[ (menuItemActive === '";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "actionName", [], "any", false, false, false, 71), [" " => "-", "&" => "", "'" => ""]), "html", null, true);
                        yield "' ) ? 'navigation-link text-gray-900 bg-gray-300 font-semibold' : '' ] \">
                                ";
                        // line 72
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 72), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "textDomain", [], "any", false, false, false, 72)), "html", null, true);
                        yield "
                            </a>
                        </li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 76
                    yield "                    </ul>
                </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['categoryName'], $context['items'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                yield "        </ul>
    </nav>
    ";
            }
            // line 82
            yield "    
    ";
            // line 83
            if ((($context["sidebar"] ?? null) && (($context["sidebarPosition"] ?? null) == "bottom"))) {
                // line 84
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "extraSidebar", [], "any", false, false, false, 84));
                foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                    // line 85
                    yield "        <div class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sidebarClass"] ?? null), "html", null, true);
                    yield " md:column-2 lg:column-1 pb-6 lg:pb-8\">
            ";
                    // line 86
                    yield $context["code"];
                    yield "
        </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                yield "    ";
            }
            // line 90
            yield "</div>

";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "navigation.twig.html";
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
        return array (  263 => 90,  260 => 89,  251 => 86,  246 => 85,  241 => 84,  239 => 83,  236 => 82,  231 => 79,  223 => 76,  213 => 72,  207 => 71,  203 => 70,  199 => 68,  195 => 67,  188 => 63,  184 => 62,  181 => 61,  177 => 60,  172 => 58,  166 => 55,  157 => 54,  155 => 53,  152 => 52,  146 => 49,  139 => 48,  136 => 47,  130 => 46,  124 => 43,  117 => 42,  114 => 41,  109 => 40,  107 => 39,  104 => 38,  101 => 37,  95 => 36,  89 => 33,  84 => 32,  81 => 31,  76 => 30,  74 => 29,  71 => 28,  65 => 25,  60 => 23,  54 => 21,  52 => 20,  48 => 18,  46 => 17,  43 => 16,  41 => 15,  38 => 14,);
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

Module Menu: Displays a list of module actions available for the 
current user. Outputs the sidebar in 'full' view-mode and as a 
collapsed drop-down list in 'mini' view-mode.
-->#}

{% set sidebarClass = 'shadow bg-white rounded px-6 mb-6' %}

{% if sidebar or menuModule is not empty %}
<div class=\"mx-4 sm:mx-0 relative sm:static\" x-data=\"{moduleMenu: false}\" @keydown.escape.window=\"moduleMenu = false\" @click.outside=\"moduleMenu = false\" x-init=\"moduleMenu = false\">

    {% if menuModule %}
    <button @click=\"moduleMenu = !moduleMenu\" class=\"relative w-full flex rounded justify-center items-center sm:w-48 bg-white sm:border border-grey-600 border-solid p-2 mb-4 sm:mt-4 sm:absolute sm:top-0 sm:right-0 sm:mr-6 z-40 {{ sidebar ? 'lg:hidden' }}\">
        <span class=\"text-gray-600 text-sm sm:text-xs font-bold uppercase \">
            {{ __('Module Menu') }}
        </span>
        {{ icon('basic', 'menu', 'size-6 sm:size-5 text-gray-600 ml-2') }}
    </button>
    {% endif %}

    {% if sidebar and sidebarPosition != 'bottom' %}
        {% for code in page.extraSidebar  %}
            {% if code is not empty %}
            <div class=\"{{ sidebarClass }} md:column-2 lg:column-1 pb-6 pt-2 lg:pb-8\">
                {{ code|raw }}
            </div>
            {% endif %}
        {% endfor %}
    {% endif %}
    
    {% if sidebar and sidebarContents is iterable %}
        {% for sidebarContent in sidebarContents %}
            {% if sidebarContent %}
            <div class=\"{{ sidebarClass }} md:column-2 lg:column-1 {{ page.breadcrumbs ? 'pt-4 lg:pt-0' }} pb-6 lg:pb-8\">
                {{ sidebarContent|raw }}
            </div>
            {% endif %}
        {% endfor %}
    {% elseif sidebar and sidebarContents %}
        <div class=\"{{ sidebarClass }} md:column-2 lg:column-1 {{ page.breadcrumbs ? 'pt-4 lg:pt-0' }} pb-6 lg:pb-8\">
            {{ sidebarContents|raw }}
        </div>
    {% endif %}
    
    {% if menuModule %}
    <nav x-cloak=\"{{ sidebar ? 'mobile' : 'on' }}\"  :class=\"moduleMenu ? 'block' : 'hidden'\" x-data=\"{ menuItemActive: '{{ menuItemActive|replace({' ': '-', '&': '', '\\'': ''}) }}' }\" class=\"{{ sidebarClass }} w-full font-sans absolute top-0 z-30 sm:mt-16 pt-6 pt-12 sm:pt-6
        {{ sidebar ? 'lg:block lg:static lg:p-0 lg:py-6 lg:mx-0 lg:mt-0' : '' }}\" >

        <ul class=\"w-full  list-none column-1 sm:column-2 md:column-3 m-0 px-0  
            {{ sidebar ? 'lg:bg-transparent lg:border-0 lg:column-1 lg:shadow-none lg:px-8' : '' }}\">

            {% for categoryName, items in menuModule %}
                <li class=\"w-full column-no-break p-0\">
                    <h5 class=\"m-0 mb-1 text-sm px-px pt-2 pb-1 text-{{ themeColour }}-600 border-b-0 uppercase\">
                        {{ __(categoryName, (items|first).textDomain) }}
                    </h5>
                    
                    <ul class=\"list-none m-0 mb-6\">
                    {% for item in items %}
                        <li class=\"-mx-4 -my-1\">
                            <a @click=\"moduleMenu = false\" hx-boost=\"true\" hx-target=\"#content-wrap\" hx-select=\"#content-wrap\" hx-swap=\"outerHTML show:window:top swap:0s\" 
                            @click=\"menuItemActive = '{{ item.actionName|replace({' ': '-', '&': '', '\\'': ''}) }}'\"
                            href=\"{{ item.url }}\" class=\"block relative text-gray-700 no-underline px-3 py-1  text-sm leading-normal lg:leading-normal rounded transition cursor-pointer hover:bg-gray-200\" :class=\"[ (menuItemActive === '{{ item.actionName|replace({' ': '-', '&': '', '\\'': ''}) }}' ) ? 'navigation-link text-gray-900 bg-gray-300 font-semibold' : '' ] \">
                                {{ __(item.name, item.textDomain) }}
                            </a>
                        </li>
                    {% endfor %}
                    </ul>
                </li>
            {% endfor %}
        </ul>
    </nav>
    {% endif %}
    
    {% if sidebar and sidebarPosition == 'bottom' %}
        {% for code in page.extraSidebar %}
        <div class=\"{{ sidebarClass }} md:column-2 lg:column-1 pb-6 lg:pb-8\">
            {{ code|raw }}
        </div>
        {% endfor %}
    {% endif %}
</div>

{% endif %}
", "navigation.twig.html", "C:\\xampp\\htdocs\\edu\\resources\\templates\\navigation.twig.html");
    }
}
