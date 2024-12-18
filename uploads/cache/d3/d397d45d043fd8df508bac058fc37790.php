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

/* foot.twig.html */
class __TwigTemplate_b9b757c74cf13383125cf6f27adabcef extends Template
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
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "extraFoot", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 15
            yield "    ";
            yield $context["code"];
            yield "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "scriptsFoot", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
            // line 19
            yield "    ";
            $context["assetVersion"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["asset"], "version", [], "any", false, false, false, 19))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["asset"], "version", [], "any", false, false, false, 19)) : (($context["version"] ?? null)));
            // line 20
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["asset"], "type", [], "any", false, false, false, 20) == "inline")) {
                // line 21
                yield "        <script type=\"text/javascript\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["asset"], "src", [], "any", false, false, false, 21);
                yield "</script>
    ";
            } else {
                // line 23
                yield "        <script type=\"text/javascript\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["absoluteURL"] ?? null), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["asset"], "src", [], "any", false, false, false, 23), "html", null, true);
                yield "?v=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["assetVersion"] ?? null), "html", null, true);
                yield ".";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cacheString"] ?? null), "html", null, true);
                yield "\"></script>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "
<div id=\"modal\" x-show=\"modalOpen\" x-trap.inert.noscroll.noreturn=\"modalOpen\" @keydown.escape.window=\"modalOpen = false\" class=\"fixed inset-0 z-50 overflow-y-auto\" style=\"display:none;\" aria-labelledby=\"modal-title\" role=\"dialog\" aria-modal=\"true\" >

    <div class=\"flex items-center content-center justify-center min-h-screen px-4 text-center sm:block sm:p-0 overflow-hidden\">

        <div x-cloak @click=\"modalOpen = false\" x-show=\"modalOpen\" 
            x-transition:enter=\"transition ease-out duration-300 transform\"
            x-transition:enter-start=\"opacity-0\" 
            x-transition:enter-end=\"opacity-100\"
            x-transition:leave=\"transition ease-in duration-200 transform\"
            x-transition:leave-start=\"opacity-100\" 
            x-transition:leave-end=\"opacity-0\"
            class=\"fixed inset-0 transition bg-black bg-opacity-40 backdrop-blur-sm \" 
            aria-hidden=\"true\"
        ></div>

        <div x-cloak x-show=\"modalOpen\" 
            x-transition:enter=\"transition ease-out duration-300 transform\"
            x-transition:enter-start=\"opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95\" 
            x-transition:enter-end=\"opacity-100 translate-y-0 sm:scale-100\"
            x-transition:leave=\"transition ease-in duration-200 transform\"
            x-transition:leave-start=\"opacity-100 translate-y-0 sm:scale-100\" 
            x-transition:leave-end=\"opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95\"
            class=\"relative inline-block w-full overflow-y-auto p-6 my-20 overflow-x-hidden text-left transition-all transform bg-white rounded-lg shadow-xl \"
            :class=\"modalType == 'delete' ? 'max-w-2xl' : 'max-w-6xl'\"
            style=\"min-height: 20vh; max-height: 80vh\"
        >
            <div class=\"flex w-full -mt-4 ml-4 justify-end\">
                <button @click=\"modalOpen = false\" class=\"bg-white text-gray-600 focus:outline-none hover:text-gray-700\">
                    ";
        // line 55
        yield $this->env->getFunction('icon')->getCallable()("basic", "x-mark", "size-6");
        yield "
                </button>
            </div>

            <div id=\"modalContent\">
            
            </div>
        </div>
    </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "foot.twig.html";
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
        return array (  120 => 55,  89 => 26,  73 => 23,  67 => 21,  64 => 20,  61 => 19,  57 => 18,  54 => 17,  45 => 15,  41 => 14,  38 => 13,);
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

Page Foot: Outputs at the bottom, right before the closing </body> tag.
Useful for scripts that need to execute after the page has loaded.
-->#}

{% for code in page.extraFoot %}
    {{ code|raw }}
{% endfor %}

{% for asset in page.scriptsFoot %}
    {% set assetVersion = asset.version is not empty ? asset.version : version %}
    {% if asset.type == 'inline' %}
        <script type=\"text/javascript\">{{ asset.src|raw }}</script>
    {% else %}
        <script type=\"text/javascript\" src=\"{{ absoluteURL }}/{{ asset.src }}?v={{ assetVersion }}.{{ cacheString }}\"></script>
    {% endif %}
{% endfor %}

<div id=\"modal\" x-show=\"modalOpen\" x-trap.inert.noscroll.noreturn=\"modalOpen\" @keydown.escape.window=\"modalOpen = false\" class=\"fixed inset-0 z-50 overflow-y-auto\" style=\"display:none;\" aria-labelledby=\"modal-title\" role=\"dialog\" aria-modal=\"true\" >

    <div class=\"flex items-center content-center justify-center min-h-screen px-4 text-center sm:block sm:p-0 overflow-hidden\">

        <div x-cloak @click=\"modalOpen = false\" x-show=\"modalOpen\" 
            x-transition:enter=\"transition ease-out duration-300 transform\"
            x-transition:enter-start=\"opacity-0\" 
            x-transition:enter-end=\"opacity-100\"
            x-transition:leave=\"transition ease-in duration-200 transform\"
            x-transition:leave-start=\"opacity-100\" 
            x-transition:leave-end=\"opacity-0\"
            class=\"fixed inset-0 transition bg-black bg-opacity-40 backdrop-blur-sm \" 
            aria-hidden=\"true\"
        ></div>

        <div x-cloak x-show=\"modalOpen\" 
            x-transition:enter=\"transition ease-out duration-300 transform\"
            x-transition:enter-start=\"opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95\" 
            x-transition:enter-end=\"opacity-100 translate-y-0 sm:scale-100\"
            x-transition:leave=\"transition ease-in duration-200 transform\"
            x-transition:leave-start=\"opacity-100 translate-y-0 sm:scale-100\" 
            x-transition:leave-end=\"opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95\"
            class=\"relative inline-block w-full overflow-y-auto p-6 my-20 overflow-x-hidden text-left transition-all transform bg-white rounded-lg shadow-xl \"
            :class=\"modalType == 'delete' ? 'max-w-2xl' : 'max-w-6xl'\"
            style=\"min-height: 20vh; max-height: 80vh\"
        >
            <div class=\"flex w-full -mt-4 ml-4 justify-end\">
                <button @click=\"modalOpen = false\" class=\"bg-white text-gray-600 focus:outline-none hover:text-gray-700\">
                    {{ icon('basic', 'x-mark', 'size-6') }}
                </button>
            </div>

            <div id=\"modalContent\">
            
            </div>
        </div>
    </div>
</div>
", "foot.twig.html", "C:\\xampp\\htdocs\\edu\\resources\\templates\\foot.twig.html");
    }
}
