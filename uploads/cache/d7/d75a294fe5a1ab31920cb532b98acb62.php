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

/* privacy.twig.html */
class __TwigTemplate_bef35e2328832594f59e0384346cbe83 extends Template
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
        if ((($context["cookieConsentEnabled"] ?? null) == "Y")) {
            // line 15
            yield "    <div class=\"fixed bottom-0 left-0 z-50 flex flex-col md:flex-row justify-between items-center w-full bg-indigo-600 text-white font-sans px-6 py-2\">

        ";
            // line 17
            yield $this->env->getFunction('icon')->getCallable()("outline", "shield-check", "size-10 md:mr-4 my-4");
            yield "

        <div class=\"flex-1 text-sm leading-tight my-4\">
            ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()(($context["cookieConsentText"] ?? null)), "html", null, true);
            yield "
        </div>
        <div class=\"md:pl-12 w-full md:w-auto text-center\">
            <a href=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["absoluteURL"] ?? null), "html", null, true);
            yield "/index.php?";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["redirectTo"] ?? null), "html", null, true);
            yield "&cookieConsent=Y\" class=\"block md:inline-block bg-white text-indigo-600 rounded-sm px-6 py-2 leading-tight\">
                ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("OK"), "html", null, true);
            yield "
            </a>
        </div>
        ";
            // line 27
            if (($context["hasPrivacyPolicy"] ?? null)) {
                // line 28
                yield "        <div class=\"md:pl-4 py-3\">
            <a href=\"";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["absoluteURL"] ?? null), "html", null, true);
                yield "/index.php?q=privacyPolicy.php\" class=\"inline-block text-sm text-white leading-tight underline\">
                ";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('__')->getCallable()("Privacy Policy"), "html", null, true);
                yield "
            </a>
        </div>
        ";
            }
            // line 34
            yield "    </div>

";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "privacy.twig.html";
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
        return array (  87 => 34,  80 => 30,  76 => 29,  73 => 28,  71 => 27,  65 => 24,  59 => 23,  53 => 20,  47 => 17,  43 => 15,  41 => 14,  38 => 13,);
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

{% if cookieConsentEnabled == 'Y' %}
    <div class=\"fixed bottom-0 left-0 z-50 flex flex-col md:flex-row justify-between items-center w-full bg-indigo-600 text-white font-sans px-6 py-2\">

        {{ icon('outline', 'shield-check', 'size-10 md:mr-4 my-4') }}

        <div class=\"flex-1 text-sm leading-tight my-4\">
            {{ __(cookieConsentText) }}
        </div>
        <div class=\"md:pl-12 w-full md:w-auto text-center\">
            <a href=\"{{ absoluteURL }}/index.php?{{redirectTo}}&cookieConsent=Y\" class=\"block md:inline-block bg-white text-indigo-600 rounded-sm px-6 py-2 leading-tight\">
                {{ __('OK') }}
            </a>
        </div>
        {% if hasPrivacyPolicy %}
        <div class=\"md:pl-4 py-3\">
            <a href=\"{{ absoluteURL }}/index.php?q=privacyPolicy.php\" class=\"inline-block text-sm text-white leading-tight underline\">
                {{ __('Privacy Policy') }}
            </a>
        </div>
        {% endif %}
    </div>

{% endif %}
", "privacy.twig.html", "C:\\xampp\\htdocs\\edu\\resources\\templates\\privacy.twig.html");
    }
}
